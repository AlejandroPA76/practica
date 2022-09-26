<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>inventario</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
 
</head>
<body>
<form method="POST" action="usuario">
    @csrf
    <div class="form-group">
            <label>introduce tu nombre:</label>
            <input type="text"  name="nombre" required>
    </div>

    <div class="form-group">
        <label>introduce tus apellidos</label>
         <input type="text" name="apellidos" required>
    </div>
    <div class="form-group">
        <label>introduce tu email:</label>
        <input type="email" name="email" required>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
    <a href="usuario" class="btn btn-info">ver registros</a>

</form>

   
</body>
</html>