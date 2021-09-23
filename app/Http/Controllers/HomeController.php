<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;

use App\Models\Menu;

class HomeController extends Controller
{

    public function loadHomeView()
    {
       $cat = Category::select('category_id','cat_name')->get();
       $meals = Meal::select('cat_type','meal_name')->get();

        return view('home',['cat'=>$cat,'meals'=>$meals]);
    }


    public function loadAdminHomeView()
    {

        return view('home_Admin');
    }


    public function loadHomeViewR(Request $req)
    {

        foreach($req->input() as  $index => $value)
        {
            if($index != "_token" )
            {

                $meal_id = Meal::where('meal_name','=',$value)->get('meal_id');

                Menu::create([
                    'student_id' =>session()->get('acc_id'),
                    'food_type'=>$meal_id[0]['meal_id'],
                ]);

                session()->forget('acc_id');
                session()->forget('student');


                return redirect(route('logInPage'));

        }
            else
            {
                 echo 'error';
            }
        }


    }



    public function logInView()
    {

            return view('logInPage',);


    }

    public function logInViewR(Request $req)
    {

        $email = strtolower($req->input('email_input'));
        $password = strtolower($req->input('password_input'));


        if(User::where('email','=',$email)->first() === NULL)
        {
            return redirect(route('logInPage'));

        }
        else
        {
            $account_password = User::where('email','=',$email)->get('password')[0]['password'];
            $account_id = User::where('email','=',$email)->get('user_id')[0]['user_id'];
            $account_type = User::where('email','=',$email)->get('acc_type')[0]['acc_type'];
        }


//        return $account[0]['password'];


        if($account_password != $password)
        {
            return redirect(route('logInPage'));
        }
        else
        {
            if($account_type === 'admin')
            {
                session([
                    'acc_id' => $account_id,
                    'acc_type' => 'admin'
                ]);
            }
            else
            {
                session([
                    'acc_id' => $account_id,
                    'acc_type' => 'student'
                ]);
            }


            return redirect(route('homePageA'));

        }


    }

    public function signUpView()
    {
        return view('register');
    }

    public function signUpViewR(Request $req)
    {
        $rule = [
            'f_name_input' => 'required',
            'l_name_input' => 'required',
            'email_input' => 'required',
            'password_input' => 'required',
            'password_input_con' => 'same:password_input'
        ];

        $message = [
            'required' => 'THIS filed MUST be filled out!',
            'same' => 'password does not match'
        ];


        $this->validate($req, $rule, $message);

        User::create([
            'f_name' => strtolower($req->input('f_name_input')),
            'l_name' => strtolower($req->input('l_name_input')),
            'email' => strtolower($req->input('email_input')),
            'password' => strtolower($req->input('password_input')),
        ]);

        return redirect(route('logInPage'));
    }

}
