<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use App\Models\Menu;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'f_name',
        'l_name',
        'email',
        'password',
    ];

    public $table = "users";
    public $primaryKey = "user_id";

    public function getMenu()
    {
        return $this->hasMany(Menu::class,'student_id','user_id')->select('student_id','food_type');
    }

}
