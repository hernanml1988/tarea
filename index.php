<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>TAREA</title>
  </head>
  <body>
      <h1>Selecione una alternativa</h1>
    <div class="container">
    
        <form action="mostrar.php" method="POST">
        <button type="submit" name="mostrar" class="btn btn-primary">Mostrar</button>
        
        <br><br>
        <a href="agregar.php">
        <button type="button" class="btn btn-primary">Agregar</button>
        </a><br><br>
        <a href="actualizar.php">
        <button type="button" class="btn btn-primary">Actualizar</button>
        </a><br><br>
        <a href="eliminar.php">
        <button type="button" class="btn btn-primary">Eliminar</button>
        </a><br><br>

        </form>
    
    </div>


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
    </body>
</html>