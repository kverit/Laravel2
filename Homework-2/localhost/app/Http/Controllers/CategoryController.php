<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(Request $request)
    {
        $title = $request->input('title');

        return redirect()->route('admin::category::show');
    }

    public function show()
    {
        return view('admin.category.create');
    }

    public function update()
    {
        //
    }

    public function delete()
    {
        //
    }
}
