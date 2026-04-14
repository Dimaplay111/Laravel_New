<!DOCTYPE html>
<html>

<head>
    <title>title</title>
</head>

<body>
    @if(is_array($data))
        <ul>
            @foreach($data as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>

    @elseif(is_numeric($data))
        <p>{{ $data }}</p>
    
    @else
        <p>Неизвестный тип данных</p>
    @endif
</body>

</html>