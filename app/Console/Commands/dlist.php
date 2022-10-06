<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class dlist extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'd:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List all domain on the Laravel web application';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // $headers = ["ID","Name","Email"];
        // $users = User::select('id','name','email')->get();
        // $this->table($headers,$users);
    }
}
