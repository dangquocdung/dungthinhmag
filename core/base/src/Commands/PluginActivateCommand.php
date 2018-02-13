<?php

namespace Botble\Base\Commands;

use Botble\Base\Models\Migration;
use Botble\Base\Repositories\Interfaces\PluginInterface;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Composer;

class PluginActivateCommand extends Command
{

    /**
     * The filesystem instance.
     *
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $files;

    /**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'plugin:activate {name : The plugin that you want to activate}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Activate a plugin in /plugins directory';

    /**
     * @var Composer
     */
    protected $composer;

    /**
     * Create a new key generator command.
     *
     * @param \Illuminate\Filesystem\Filesystem $files
     * @param Composer $composer
     * @author Sang Nguyen
     */
    public function __construct(Filesystem $files, Composer $composer)
    {
        parent::__construct();

        $this->files = $files;
        $this->composer = $composer;
    }

    /**
     * @throws Exception
     * @return boolean
     * @author Sang Nguyen
     */
    public function handle()
    {
        if (!preg_match('/^[a-z0-9\-]+$/i', $this->argument('name'))) {
            $this->error('Only alphabetic characters are allowed.');
            return false;
        }

        $plugin_folder = ucfirst(strtolower($this->argument('name')));
        $location = config('cms.plugin_path') . '/' . strtolower($plugin_folder);

        if (!$this->files->isDirectory($location)) {
            $this->error('This plugin is not exists.');
            return false;
        }

        $content = get_file_data($location . '/plugin.json');
        if (!empty($content)) {

            $this->call('plugin:install', ['name' => strtolower($plugin_folder)]);

            $plugin = app(PluginInterface::class)->getFirstBy(['provider' => $content['provider']]);
            if (empty($plugin) || $plugin->status != 1) {
                if (empty($plugin)) {
                    $plugin = app(PluginInterface::class)->getModel();
                    $plugin->fill($content);
                }
                $plugin->alias = strtolower($plugin_folder);
                $plugin->status = 1;

                $migrations = scan_folder($location . '/database/migrations');
                foreach ($migrations as $migration) {
                    Migration::where('migration', pathinfo($migration, PATHINFO_FILENAME))->delete();
                }

                call_user_func([$content['plugin'], 'activate']);

                app(PluginInterface::class)->createOrUpdate($plugin);
                cache()->forget(md5('cache-dashboard-menu'));

                $this->line('<info>Activate plugin successfully!</info>');
            } else {
                $this->line('<info>This plugin is activated already!</info>');
            }
        }
        return true;
    }
}
