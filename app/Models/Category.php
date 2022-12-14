<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    protected $table = 'categories';

    protected $fillable = [
        'description'
    ];

    public function customers()
    {
        return $this->hasMany(Category::class);
    }

}
