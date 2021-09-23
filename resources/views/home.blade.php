<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <title>home</title>
</head>

<body>

{{--    {{session()->get('acc_id')[0]['user_id']}}--}}

<form action="{{asset(route('homePageRequest'))}}" method=POST>

    @csrf

{{--    {{$c = 0}}--}}

     @foreach($cat as $index1 => $value1)

         {{$value1['cat_name']}}<br/>

         <select name="{{$value1['cat_name']}}">


                 @foreach($meals as $index2 => $value2)


                     @if($value1['category_id'] == $value2['cat_type'] )
                     <option>
                         {{$value2['meal_name']}}
                     </option>
                     @endif

                 @endforeach


         </select>
         <hr/>

    @endforeach

    <input type="submit" value="send" class="text-black">

</form>

</body>
</html>
