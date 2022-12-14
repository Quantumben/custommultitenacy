<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class Users extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List all users from users table';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $headers = ["ID","Name","Email"];
        $users = User::select('id','name','email')->get();
        $this->table($headers,$users);
    }
}
