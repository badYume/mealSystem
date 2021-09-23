<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <title>sign up</title>
</head>

<body>

<div>
    <div class="h-screen flex justify-center items-center">
        <div class="p-5 bg-gray-400 w-3/4 rounded-lg">

            <form class="p-3 flex flex-col space-y-5" action="{{route('signUpPageRequest')}}" method = POST>

                @csrf
                <p class="text-xl text-black">Sign Up</p>

                <input type="text" name ="f_name_input" placeholder="First Name" class="p-2 w-3/4bg-gray-100 text-black" />
                <span class = "text-red-600">@error('f_name_input'){{$message}}@enderror</span>

                <input type="text" name = "l_name_input" placeholder="Last Name" class="p-2 bg-gray-100 text-black" />
                <span class = "text-red-600">@error('l_name_input'){{$message}}@enderror</span>

                <input type="email" name = "email_input" placeholder="Email" class="p-2 bg-gray-100 text-black" />
                <span class = "text-red-600">@error('email_input'){{$message}}@enderror</span>

                <input type="password" name="password_input" placeholder="Password" class="p-2 bg-gray-100 text-black" />
                <span class = "text-red-600">@error('password_input'){{$message}}@enderror</span>

                <input type="password" name="password_input_con" placeholder="Confirm Password" class="p-2 bg-gray-100 text-black" />
                <span class = "text-red-600">@error('password_input_con'){{$message}}@enderror</span>


                <button type="submit" class="p-2 bg-gray-100 rounded text-black">submit</button>

            </form>
        </div>
    </div>

</body>

</html>
