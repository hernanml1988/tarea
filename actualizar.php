<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>tarea</title>
  </head>
  <body>
      &nbsp; 
    <div class="container">    
        <h1>Ingrese los datos</h1><br><br>

        <form action="baseDeDatos.php" method="POST">
        <label style="color: red;">*INGRESAR TODOS LOS DATOS CON MAYUSCULA</label><br><br>  
        <input type="text" name="id" placeholder="Ingrese id" >  <br><br>        
        <input type="text" name="nombre" placeholder="Ingrese nombre" >  <br><br>        
        <input type="text" name="apellido" placeholder="Ingrese apellido" > <br><br>
        <input type="text" name="direccion" placeholder="Ingrese direccion" ><br>
        <br>
        

        <input type="submit" name="actualizar" value="actualizar">
        
        </form>
    
    </div>


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
    </body>
</html>