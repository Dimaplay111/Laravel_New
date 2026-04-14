<!DOCTYPE html>
<html>

<head>
    <title>title</title>
</head>

<body>
    <ul>
        @foreach ($array as $element)
            @if ($element % 2 == 0)
            {{$element}}
            @else
            @endif
        @endforeach
    </ul>
</body>

</html>