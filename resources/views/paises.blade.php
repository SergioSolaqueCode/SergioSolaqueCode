<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Paises De La Region</h1>
    <table>
        <thead>
            <th>Nombre</th>
            <tbody>
                @foreach($paises as $nombre => $pais)
                <tr>
                    <td>{{$nombre}}</td>
                </tr>
            </tbody>
        </thead>
    </table>
</body>
</html>