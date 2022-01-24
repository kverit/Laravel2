<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function show()
    {
        $response = "<div> 
                        <span> Hi, Teacher! </span> 
                     </div>";
                     
        return $response;
    }
}
