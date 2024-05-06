<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>{{$name}}</h1>
        <ul>
            <li>
                <a href="{{route('download')}}">Download</a>
            </li>
            <li>
                <a href="{{route('login')}}">Login</a>
            </li>
        </ul>
    </header>
</body>

</html>