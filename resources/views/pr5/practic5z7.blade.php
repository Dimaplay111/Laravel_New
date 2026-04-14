<!DOCTYPE html>
<html>

<head>
    <title>title</title>
</head>

<body>
    <p>
	@foreach ($users as $user)
    <p>
{{ $user['name'] }} {{ $user['age'] }} {{ $user['salary'] }}
	@endforeach
    </p>
    </p>
</body>

</html>