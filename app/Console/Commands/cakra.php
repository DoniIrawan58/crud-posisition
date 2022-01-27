<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class cakra extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cakra:inspire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'its not a inspirating quotes';

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
        return $this->info("Tidur adalah kewajiban");
    }
}
