<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ninja Network | Home</title>
</head>

<body>
    <h2>Currently Available Ninjas</h2>

    @if ($greeting == 'hello')
        <p>Hi form inside the if statement</p>
    @endif

    <ul>
        @foreach ($ninjas as $ninja)
            <li>
                <p>{{ $ninja['name'] }}</p>
                <a href="/ninjas/{{ $ninja['name'] }}">View Details</a>
            </li>
        @endforeach
    </ul>
</body>

</html>
