<!DOCTYPE html>
<html>

<head>
    <title>title</title>
</head>

<body>
    <table border='1'>
    @foreach ($array as $row)
        <tr>
            @foreach ($row as $item)
                <td>{{ $item }}</td>
            @endforeach
        </tr>
    @endforeach
    </table>
</body>

</html>