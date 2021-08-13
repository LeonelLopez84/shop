<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    public $fillable=['name','slug','description','price','thumbnail'];

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value,'-');
    }
}
