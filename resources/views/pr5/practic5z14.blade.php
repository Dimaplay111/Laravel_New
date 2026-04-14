<!DOCTYPE html>
<html>

<head>
    <title>title</title>
</head>

<body>
    @if ($age > 18)
    <p>Старик</p>
    @elseif ($age < 18)
    <p>Младенчик</p>
    @else
    <p>Идеальный баланс</p>
    @endif
</body>

</html>