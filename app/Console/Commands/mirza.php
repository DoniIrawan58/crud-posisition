<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class mirza extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mirza:inspire';

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
     * @return int
     */
    // public function handle()
    // {
    //     return $this->info("terkadang gw ngoding terkadang engga");
    // }

    public function __invoke()
    {
        return $this->info("ngoding cuyy");
    }
}
