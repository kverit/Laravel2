<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminNewsSaveRequest;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::orderBy('id', 'desc')
            ->paginate(10);
        return view('admin.category.index', ['category' => $category]);
    }

    public function create(Category $category)
    {

        return view('admin.category.create', [
            'model' => $category
        ]);
    }

    public function update(Category $category)
    {

        return view('admin.category.create', [
            'model' => $category
        ]);
    }

    public function save(Request $request)
    {
        $timestamps = false;
        $id = $request->post('id');
        $model = $id ? Category::find($id) : new Category();
        $model->fill($request->all());
        $model->save();

        return  redirect()->route('admin::category::update', ['category' => $model->id]);
    }
}
