<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{


    public function create(Category $category)
    {
        return view("admin.news.create", [
                'model' => new News(),
                'categories' => $category->getList(),
            ]
        );
    }

    public function save(Request $request, Category $category)
    {
        $news = new News();
        if($request->isMethod('post')){
            $news->fill($request->all());
            $news->save();

            return  view('admin.news.create', ['model' => $news, 'categories' => $category->getList()]);
        }

        return view('admin.news.create', ['model' => $news]);
    }
}
