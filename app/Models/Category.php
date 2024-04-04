<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\post_data;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function blog()
        {
            return $this->hasMany(post_data::class);
        }

}
