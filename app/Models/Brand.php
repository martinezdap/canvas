<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    //Relacion uno a muchos inversa
    public function products(){
        return $this->belongsTo(Products::class);
    }

    //De muchos a muchos
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
