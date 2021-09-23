<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public $table = "menus";
    public $primaryKey = "menu_id";

    protected $fillable = [
        'student_id',
        'food_type',
    ];



}
