<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Crear prestamo</title>
</head>
<body>
    <h1>Tabla de amortizacion</h1>

    <h4>Codigo prestamo: 0803199518999</h4>

    <br><br>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Periodo</th>
            <th scope="col">Interes</th>
            <th scope="col">Capital</th>
            <th scope="col">Saldo</th>
            </tr>
        </thead>

        <tbody>
        @foreach ($amortizaciones as $item)

            <tr>
                <th scope="row">{{$item->periodo}}</th>
                <td>{{$item->interes}}</td>
                <td>{{$item->capital}}</td>
                <td>{{$item->saldo}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>