<!DOCTYPE html>
<html>

<head>
    <title>title</title>
</head>

<body>
    @foreach($array as $number)
        @if($loop->remaining < 3)
            <i>{{ $number }}</i>
        @else
            <b>{{ $number }}</b>
        @endif
    @endforeach

</body>

</html>