<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function payment()
    {
        $this->data['name'] = "Sabbir Hossain";
        $this->data['roll'] = 477470;
        $this->data['class'] = "7th";
        return view('home.home', $this->data);
    }
}
