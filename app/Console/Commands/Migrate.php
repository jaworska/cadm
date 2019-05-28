<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Offer;
use App\CV;
use App\User;


class Migrate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate:custom';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return mixed
     */
    public function handle()
    {
        $this->call('migrate:fresh');
        factory(Offer::class, 8)->create();
        factory(CV::class, 50)->create();
        factory(User::class, 1) -> create();
    }
}
