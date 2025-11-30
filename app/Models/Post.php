<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'lead',
        'content',
        'image',
        'category_id',
        'main_material'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
