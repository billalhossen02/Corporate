<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Mail\newProduct;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class AutoProductSend extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'new:product';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send New Product to Every User';

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
        $users = User::all();
        foreach ($users as $user) {
            Mail::to($user)->send(new newProduct());
        }
    }
}
