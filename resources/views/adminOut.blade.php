<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
</head>
<body>

<table>

    <tr>
        <th>Order</th>
        <th>Category</th>
        <th>Time Ordered</th>

    </tr>


    @foreach($menu as $index1 => $value1)

        <tr>


            @foreach($meal as $index2 => $value2)
                @if($value1['food_type'] == $value2['meal_id'] )


                    @php
                        $cat_type = $value2['cat_type'];
                    @endphp

                    <td>{{$value2['meal_name']}}</td>


                @endif

            @endforeach

            @foreach($cat as $index3 => $value3)
                @if($cat_type == $value3['category_id'])
                    <td>{{$value3['cat_name']}}</td>
                @endif
            @endforeach

            <td>{{date('d M Y',$value1['created_at'])}}</td>

        </tr>
    @endforeach


</table>

</body>
</html>
