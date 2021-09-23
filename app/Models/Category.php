<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Meal;

class Category extends Model
{
    use HasFactory;
    public $table = "categories";
    public $primaryKey = "category_id";

    function getDrink()
    {
        return $this->hasMany(Meal::class,'cat_type','category_id')->select('meal_name');
    }

    function getBase()
    {
        return $this->hasMany(Meal::class, 'cat_type', 'category_id')->select('meal_name');
    }

    function getMain()
    {
        return $this->hasMany(Meal::class, 'cat_type', 'category_id')->select('meal_name');
    }

}
