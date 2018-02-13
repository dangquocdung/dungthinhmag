<?php

namespace Botble\Base\Commands;

use Botble\ACL\Repositories\Interfaces\UserInterface;
use Exception;
use Illuminate\Console\Command;

class UserCreateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create super user for Botble CMS';

    /**
     * @var UserInterface
     */
    protected $userRepository;

    /**
     * Install constructor.
     * @param UserInterface $userRepository
     * @author Sang Nguyen
     */
    public function __construct(UserInterface $userRepository)
    {
        parent::__construct();

        $this->userRepository = $userRepository;
    }

    /**
     * Execute the console command.
     *
     * @author Sang Nguyen
     */
    public function handle()
    {
        $this->createSuperUser();
    }

    /**
     * Create a superuser.
     *
     * @return void
     * @author Sang Nguyen
     */
    protected function createSuperUser()
    {
        $this->info('Creating a Super User...');

        $user = $this->userRepository->getModel();
        $user->first_name = $this->ask('Enter your first name');
        $user->last_name = $this->ask('Enter your last name');
        $user->email = $this->ask('Enter your email address');
        $user->username = $this->ask('Enter your username');
        $user->password = bcrypt($this->secret('Enter a password'));
        $user->super_user = 1;
        $user->manage_supers = 1;
        $user->profile_image = config('acl.avatar.default');

        try {
            $this->userRepository->createOrUpdate($user);
            if (acl_activate_user($user)) {
                $this->info('Super user is created.');
            }
        } catch (Exception $e) {
            $this->error('User could not be created.');
            $this->error($e->getMessage());
        }

        $this->line('------------------');
    }
}
