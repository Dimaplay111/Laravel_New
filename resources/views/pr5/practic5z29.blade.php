<!DOCTYPE html>
<html>

<head>
    <title>title</title>
</head>

<body>
    @if(count($array) > 0)
        @foreach($array as $users)
            <p>{{ $users }}</p>
        @endforeach
    @else
    <p>В массиве нет элементов.</p>
    @endif
    

</body>

</html>