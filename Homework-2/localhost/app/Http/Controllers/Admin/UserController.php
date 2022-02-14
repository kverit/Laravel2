<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{

    public function index()
    {
        $user = User::orderBy('id', 'desc')
            ->paginate(10);
        return view('admin.user.index', ['user' => $user]);
    }

    public function save()
    {
        
    }
}
