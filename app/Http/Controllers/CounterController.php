<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CounterController extends Controller
{
    public function updateCount()
    {
        $counter = Counter::firstOrCreate(['ID' => 1], ['Jumlah' => 0]);
        $counter->increment('Jumlah');
        $count = $counter->jumlah;

        return view('counter', ['count' => $count]);
    }
}
