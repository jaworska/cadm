<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use App\CV;
use Illuminate\Support\Facades\Storage;


class ClearCVs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clear:cv';

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
        $cvs = CV::where(function($query){
            $query -> where('created_at', '<=', Carbon::now()->subMonths(3))->where('term_3',0);
        }) ->orWhere(function($query){
            $query -> where('created_at', '<=', Carbon::now()->subYears(3))->where('term_3',1);
        }) -> get();
        foreach($cvs as $cv){
            Storage::disk('public')->delete($cv -> file,'public');
            $cv -> delete();
        }
    }
}
