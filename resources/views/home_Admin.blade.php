<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin view</title>
</head>

<body>

<form action="{{route('homeAdminPageRequest')}}" method="post">

    @csrf
    {{--    <label>--}}
    {{--        <input type="text" name ="command">--}}
    {{--    </label>--}}

    @foreach($users as $index => $value)

        @if($value['f_name'] != 'lunch')

            <input type="submit" name ="{{$value['user_id']}}" value="{{$value['f_name']}} {{$value['l_name']}} " >

        @endif



    @endforeach


</form>

</body>

</html>
