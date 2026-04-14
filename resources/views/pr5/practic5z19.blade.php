<!DOCTYPE html>
<html>

<head>
    <title>title</title>
</head>

<body>
    <ul>
        @foreach ($array as $element)
            <p>Вывод элемента: {{$element}}</p>
        @endforeach
    </ul>
    @foreach ($array as $element)
            <p>Вывод квадрата элемента: {{$element * 2}}</p>
    @endforeach
    @foreach ($array as $element)
            <p>Вывод корня квадрата элемента: {{sqrt($element)}}</p>
    @endforeach
</body>

</html>