<!DOCTYPE html>
<html>

<head>
    <title>title</title>
</head>

<body>
    <ul>
    @foreach ($array as $iteration => $string)
    <li class="{{ $loop->first ? 'first' : '' }} {{ $loop->last ? 'last' : '' }}">
        {{ $iteration + 1 }} : 
        {{ $loop->first ? 'first' : '' }} 
        {{ $loop->last ? 'last' : '' }}
        {{ $string }}
    </li>
    @endforeach
    </ul>
</body>

</html>