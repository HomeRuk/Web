<html>
    <head>
        <meta charset="UTF-8">
        <title>เกี่ยวกับเรา</title>
    </head>
    <body>
        <h1> เกี่ยวกับเรา</h1>
        <p>
        <ul>
            @foreach ($info as $value)
            <li>{{$value}}</li>
            @endforeach
        </ul>
        </p>
    </body>
</html>
