<?php

namespace Botble\Base\Commands;

use Exception;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Composer;

class PluginInstallCommand extends Command
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
    protected $signature = 'plugin:install {name : The plugin that you want to install}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install a plugin in /plugins directory';

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

            $namespace = str_replace('\\Plugin', '\\', $content['plugin']);
            $composer = get_file_data(base_path() . '/composer.json');

            if (!empty($composer)) {
                $composer['autoload']['psr-4'][$namespace] = 'plugins/' . strtolower($plugin_folder) . '/src';
                if (!empty($content['dependencies'])) {
                    $composer['require'] = array_merge($composer['require'], $content['dependencies']);
                }
                save_file_data(base_path() . '/composer.json', $composer);
            }
            $this->composer->dumpAutoloads();
            $this->line('<info>Install plugin successfully!</info>');
        }
        return true;
    }
}
