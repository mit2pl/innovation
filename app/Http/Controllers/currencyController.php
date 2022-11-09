<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class currencyController extends Controller
{
    public function updateCurrency(array $request)
    {
        Currency::updateOrCreate(['currency_code' => $request[0]['code']], ['name' => $request[0]['currency'], 'exchange_rate' => $request[0]['mid']]);
    }
}
