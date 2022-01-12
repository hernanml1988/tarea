<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>tarea</title>
  </head>
  <body>
      
    <div class="container">
        <h1>Ingrese el nombre que desea eliminar</h1>
        <form action="baseDeDatos.php" method="POST">
        
        <input type="text" name="id" placeholder="Ingrese id para eliminar" ><br>
        
        <button type="submit" name="eliminar" class="btn btn-primary">Eliminar</button>
        

        </form>
    
    </div>


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
    </body>
</html>
