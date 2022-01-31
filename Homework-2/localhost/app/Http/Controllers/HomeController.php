<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        $news = \DB::select('SELECT * FROM news');
        return view('home', ['news' => $news]);
    }
}
