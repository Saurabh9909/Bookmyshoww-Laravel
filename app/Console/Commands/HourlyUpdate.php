<?php

namespace App\Console\Commands;

use App\Models\MovieModel;
use Illuminate\Console\Command;

class HourlyUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hourly-update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Hourly updates of all new movies upload records from admin .';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $movies = MovieModel::all();
        dd($movies);
    }
}
