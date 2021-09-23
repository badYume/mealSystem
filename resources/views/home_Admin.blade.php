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

<from action = "{{route("homePageA")}}" method = POST>

    <input type="text" name = "command">
    <input type="submit" value= "send">

</from>

</body>

</html>
