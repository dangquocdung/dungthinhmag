<?php

namespace Botble\Translation\Console;

use Botble\Translation\Manager;
use Illuminate\Console\Command;

class CleanCommand extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'translations:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clean empty translations';

    /**
     * @var Manager
     */
    protected $manager;

    /**
     * CleanCommand constructor.
     * @param Manager $manager
     * @author Barry vd. Heuvel <barryvdh@gmail.com>
     */
    public function __construct(Manager $manager)
    {
        $this->manager = $manager;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     * @author Barry vd. Heuvel <barryvdh@gmail.com>
     */
    public function handle()
    {
        $this->manager->cleanTranslations();
        $this->info('Done cleaning translations');
    }
}
