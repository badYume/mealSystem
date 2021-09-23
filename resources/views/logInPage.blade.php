<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <title>LogIn</title>
</head>

<body>

<div class="h-screen flex justify-center items-center">
    <div class="p-5 bg-gray-400 w-1/2 rounded-lg">
        <form class="p-3 flex flex-col space-y-10" action="{{route('logInPageRequest')}}" method = POST>
            @csrf
            <p class="text-xl">Login</p>


            <input type="email" name="email_input" placeholder="email" class="p-2 bg-gray-100 text-black" />

            <input type="password" name="password_input" placeholder="password" class="p-2 bg-gray-100 text-black" />

            <button type="submit" class="p-2 bg-gray-100 rounded text-black">submit</button>
        </form>
         <div class = "w-full justify-center flex items-center underline text-blue-600 cursor-pointer">
             <a href="{{route('signUpPage')}}">sign up</a>
         </div>
    </div>
</div>
</div>

</body>

</html>
