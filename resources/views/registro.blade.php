<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Nueva Tienda </h2>
@if(session('exito'))
<p> {{  session('exito') }} </p>
@endif
<form method="post" action="{{ url('tiendas/mostrarexito') }}">
    @csrf

<p>
    Nombre:
    <input type="text" name="nom">
</p>

<br />

<p>
    Direccion:
    <input type="text" name="dir">
</p>

<br />

<button type="submit">
    Guardar
</button>

</form>
    
</body>
</html>