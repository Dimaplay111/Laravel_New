<!DOCTYPE html>
<html>

<head>
    <title>title</title>
</head>

<body>
    <ul>
        @foreach ($array as $key => $elem)
            <p>Вывод ключа: {{$key+1}} 
               Вывод элемента: {{$elem}}</p>
        @endforeach
    </ul>
</body>

</html>