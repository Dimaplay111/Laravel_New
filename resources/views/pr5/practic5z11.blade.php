<!DOCTYPE html>
<html>

<head>
    <title>title</title>
</head>

<body>
    <p>
        {{$day ?? date('d')}}--{{$month ?? date('m')}}--{{$year ?? date('Y')}} 
    </p>
</body>

</html>