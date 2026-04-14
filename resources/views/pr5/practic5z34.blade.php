<!DOCTYPE html>
<html>

<head>
    <title>title</title>
</head>

<body>
    @foreach($array as $number)
        @if($number === 0)
            @break
        @endif
        <p>Число: {{ $number }}</p>
    @endforeach

</body>

</html>