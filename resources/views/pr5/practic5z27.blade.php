<!DOCTYPE html>
<html>

<head>
    <title>title</title>
</head>

<body>
    <ul>
    @foreach ($employees as $employee)
        <li>
            {{ $employee['name'] }} {{ $employee['surname'] }} — {{ $employee['salary'] }}
        </li>
    @endforeach
    </ul>
    <br><br><br>

     <table border='1'>
    @foreach ($employees as $employee)
        <tr>
            <td>{{ $employee['name'] }} </td>
            <td> {{ $employee['surname'] }}</td>
            <td>{{ $employee['salary'] }}</td>
        </tr>
    @endforeach
    </table>
</body>

</html>