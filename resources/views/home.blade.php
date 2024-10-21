<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    {{-- Links --}}
    {{-- Style --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>{{ $title }}</h1>
    <ul>
        @foreach ($list as $item)
            <li>
                {{ $item }}
            </li>
        @endforeach
    </ul>
</body>
</html>
