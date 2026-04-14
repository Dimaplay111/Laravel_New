<!DOCTYPE html>
<html>

<head>
    <title>title</title>
</head>

<body>
    
    @foreach($array as $number)
        @if($number != 0)
            <p>{{ $number }}</p>
        @endif
    @endforeach
    


</body>

</html>