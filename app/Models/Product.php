<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //De uno a muchos inversa
    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    //De muchos a muchos
    public function colors(){
        return $this->belongsToMany(Color::class);
    }

    //De uno a muchos
    public function sizes(){
        return $this->hasMany(Size::class);
    }

    //Relacion de uno a muchos polimorfica
    public function images(){
        return $this->morphMany(Image::class, 'imageable');
    }
}
