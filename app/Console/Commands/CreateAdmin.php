<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Buat akun awal';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $users  = collect([
            [
                'name' => 'Martanto',
                'email' => 'martanto@gapi.test',
                'password' => 'esdm1234',
            ],
            [
                'name' => 'Hery K.',
                'email' => 'hery@gapi.test',
                'password' => 'esdm1234',
            ]
        ]);

        $users->each(function($user) {
            User::create($user);
        });

        return Command::SUCCESS;
    }
}
