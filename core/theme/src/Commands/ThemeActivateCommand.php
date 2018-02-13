<?php

namespace Botble\Theme\Commands;

use Illuminate\Console\Command;
use Setting;
use Symfony\Component\Console\Input\InputArgument;

class ThemeActivateCommand extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'theme:activate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Activate a theme';

    /**
     * Execute the console command.
     *
     * @return mixed
     * @author Sang Nguyen
     */
    public function handle()
    {
        Setting::set('theme', $this->argument('name'));
        Setting::save();
        $this->info('Activate theme ' . $this->argument('name') . ' successfully!');
        $this->call('cache:clear');
        return true;
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     * @author Teepluss <admin@laravel.in.th>
     */
    protected function getArguments()
    {
        return [
            [
                'name',
                InputArgument::REQUIRED,
                'Name of the theme to activate.',
            ],
        ];
    }
}
