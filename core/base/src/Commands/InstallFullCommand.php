<?php

namespace Botble\Base\Commands;

use Botble\Base\Seeds\BaseSeeder;
use Illuminate\Console\Command;

class InstallFullCommand extends Command
{

    /**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'install:full';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install full with sample data';

    /**
     * Execute the console command.
     * @author Sang Nguyen
     */
    public function handle()
    {
        $this->info('Starting installation...');
        $this->call('migrate:fresh');
        $this->call('db:seed', ['--class' => BaseSeeder::class]);
        $this->call('user:create');
        $this->call('install:sample-data');

        return true;
    }
}
