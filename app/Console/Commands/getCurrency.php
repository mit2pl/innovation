<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\currencyController;
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
        $get_file = file_get_contents("https://api.nbp.pl/api/exchangerates/tables/A/?format=json");
        $get_decode = json_decode($get_file, true);
        $get_controller = new currencyController();
        foreach($get_decode[0]['rates'] as $array)
        {
            $get_controller->updateCurrency(array($array));
        }
        return Command::SUCCESS;
    }
}
