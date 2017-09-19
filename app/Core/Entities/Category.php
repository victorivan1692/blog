<?php

namespace App\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    
    protected $table='categories';
    protected $fillable=['name', 'description'];

    /*SIRVE PARA RELACIONAR LOS MODELOS*/
    public function books(){
        return $this->hasMany(Book::class, 'category_id');
    }
}
