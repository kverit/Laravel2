<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        $response = "<div> 
                        <span> i'm not creative </span> 
                     </div>";

        return $response;
    }
}
