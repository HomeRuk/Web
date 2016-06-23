
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1> เกี่ยวกับเรา {{$name or 'ไม่มีชื่อ'}}</h1>
        
        {{ '<script> alert "$name" </script>' }}
        {!! '<script> alert "$name" </script>' !!}
        <p>
        <ul>
            @foreach ($info as $value)
            <li>{{$value}}</li>
            @endforeach
        </ul>
        </p>
        
    </body>
</html>
