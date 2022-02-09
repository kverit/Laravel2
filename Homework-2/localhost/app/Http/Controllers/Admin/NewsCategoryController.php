<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminNewsSaveRequest;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    public function index()
    {
        $response = "<div> 
                        <span> So i make </span> 
                     </div>";
                     
        return $response;
    }
    
    public function create(Category $category)
    {

        return view('admin.category.create', [
                'model' => $category
            ]);
    }

    public function save(AdminNewsSaveRequest $request)
    {
        $id = $request->post('id');
        $model = $id ? Category::find($id) : new Category();
        $model->fill($request->all());
        $model->save();

        return  redirect()->route('admin::category::create', ['model' => $model->id]);
    }
}
