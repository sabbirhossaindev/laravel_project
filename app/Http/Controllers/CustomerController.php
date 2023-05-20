<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index(){
        $customers = BD::table('customers')->get();
        var_dump($customers); // php ta aita 
        dd($customers); // laravel a aita
    }
}
