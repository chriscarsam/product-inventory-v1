<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de usuarios - SambCode</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <hr>
   <ul>
    @forelse ($users as $user)
        <li>{{ $user }}</li>
    @empty
        <li>No hay usuarios registrados</li>
    @endforelse
    </ul>   

</body>
</html>