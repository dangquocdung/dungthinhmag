<?php

namespace Botble\Base\Commands;

use DB;
use Illuminate\Console\Command;

class InstallSampleDataCommand extends Command
{

    /**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'install:sample-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install sample data';

    /**
     * Execute the console command.
     * @author Sang Nguyen
     */
    public function handle()
    {
        $this->info('Activating required plugins...');
        $this->call('plugin:activate', ['name' => 'blog']);
        $this->call('plugin:activate', ['name' => 'contact']);
        $this->call('plugin:activate', ['name' => 'gallery']);
        $this->call('plugin:activate', ['name' => 'block']);
        $this->call('plugin:activate', ['name' => 'language']);

        $this->info('Importing sample data...');
        // Force the new login to be used
        DB::purge();
        DB::unprepared('USE `' . env('DB_DATABASE') . '`');
        DB::connection()->setDatabaseName(env('DB_DATABASE'));
        DB::unprepared(file_get_contents(__DIR__ . '/../../database/sample-data.sql'));
        $this->info('Done!');

        return true;
    }
}
