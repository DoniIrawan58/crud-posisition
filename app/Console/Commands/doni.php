<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class doni extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'doni:inspire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'doni inspirating quotes';

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
        return $this->info("Jangan lupa makan");
    }
}
