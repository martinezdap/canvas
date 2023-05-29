<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'image', 'icon'];

    //De uno a muchos
    public function products(){
        return $this->hasMany(Product::class);
    }

    //De muchos a muchos
    public function brands(){
        return $this->belongsToMany(Brand::class);
    }
}
