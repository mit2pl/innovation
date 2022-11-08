<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class getCurrency extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'getcurrency';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'download every day current currency';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}
