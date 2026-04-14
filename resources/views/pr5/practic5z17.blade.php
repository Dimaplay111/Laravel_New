<!DOCTYPE html>
<html>

<head>
    <title>title</title>
</head>

<body>
    @if ($age >= 18)
    <p>Вы совершеннолетный</p>
    @endif
    @unless ($age >= 18)
    <p>Вы несовершеннолетний</p>
    @endunless
</body>

</html>