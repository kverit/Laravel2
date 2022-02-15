<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public function getList()
    {
        return Role::select(['id', 'name', 'slug'])
            ->get()
            ->pluck('id', 'name', 'slug');
    }

    public function user()
    {

        return $this->belongsToMany(User::class, 'users_roles');
    }
}
