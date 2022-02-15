<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'category_name'
    ];

    public $timestamps = false;

    public function news()
    {

        return $this->hasMany(News::class);
    }

    public function getList()
    {

        return Category::select(['id', 'category_name'])
            ->get()
            ->pluck('name', 'id');
    }
}
