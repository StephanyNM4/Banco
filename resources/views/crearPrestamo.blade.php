<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Crear prestamo</title>
</head>
<body>
    <h1>Creacion prestamo</h1>

    <form method="POST" action=" {{ route( 'prestamo.guardar' ) }} ">
        @csrf
        @method('POST')

        <div class="mb-3">
            <label for="id" class="form-label">Codigo de prestamo</label>
            <input type="text" class="form-control" name="id" id="id" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="monto" class="form-label">Monto</label>
            <input type="text" class="form-control" name="monto" id="monto">
        </div>
        <div class="mb-3">
            <label for="plazo" class="form-label">Plazo</label>
            <input type="text" class="form-control" name="plazo" id="plazo">
        </div>
        <div class="mb-3">
            <label for="tasaInteres" class="form-label">Tasa de Interes</label>
            <input type="text" class="form-control" name="tasaInteres" id="tasaInteres">
        </div>
        
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
        <br><br>
    <a href=" {{ route( 'amortizacion.inicio' ) }} " class="btn btn-primary">Amortizaciones</a>
</body>
</html>