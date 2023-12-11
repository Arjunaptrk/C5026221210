<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CounterController extends Controller
{
	public function index()
	{
        //import database counter dan lakukan increment untuk looping hasil pada tabel jumlah
        DB::table('counter')->increment('Jumlah');
        $counter = DB::table('counter')->first();
        return view('indexcounter', ['counter' => $counter]);
	}

}
