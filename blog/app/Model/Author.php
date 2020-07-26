<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name', 'surname'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
