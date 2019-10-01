<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <h3>Número uno: {{ $numbers[0] }} Número dos: {{ $numbers[1] }}</h3>
    <ul>
        @foreach($operations as $operation)
            <li><a href="/operaciones/{{ $operation }}/{{ $numbers[0] }}/{{ $numbers[1] }}">{{ ucfirst($operation) }}</a></li>
        @endforeach
    </ul>    
</body>
</html>