<?php



$host = "localhost";
$usuario = "root";
$pass = "";
$bd = "personal";

$conexion = mysqli_connect($host, $usuario, $pass, $bd);



if(isset($_POST["agregar"])){
    if(!$conexion){
        echo "No hay conexion";
    }
    
    $nombre= $_POST["nombre"];
    $apellido= $_POST["apellido"];
    $direccion= $_POST["direccion"];

    $conexion = mysqli_connect($host, $usuario, $pass, $bd);
    $q = "INSERT INTO `info_personal`(`nombre`, `apellido`, `direccion`) 
    VALUES ('$nombre','$apellido','$direccion')";
    $consulta = mysqli_query($conexion, $q);

    echo "los datos se han agregado correctamente </br>";
    echo "<a href=agregar.php>Desea agregar otro personal</a>  </br>";
    echo "<a href=index.php>Volver al inicio</a>";
}else if (isset($_POST["eliminar"])){
    if(!$conexion){
        echo "No hay conexion";
    }

    $id = $_POST["id"];

    $conexion = mysqli_connect($host, $usuario, $pass, $bd);
    $q = "DELETE FROM `info_personal` WHERE id = '$id' ";   
    $consulta = mysqli_query($conexion, $q);

    echo "los datos se han eliminado correctamente </br>";
    echo "<a href=eliminar.php>Desea eliminar otro personal</a>  </br>";
    echo "<a href=index.php>Volver al inicio</a>";

    }else if (isset($_POST["actualizar"])){
        if(!$conexion){
            echo "no hay conexion";
        }

        $id = $_POST["id"];    
        $nombre = $_POST["nombre"] ;
        $apellido = $_POST["apellido"];
        $direccion = $_POST["direccion"];

        $conexion = mysqli_connect($host, $usuario, $pass, $bd);
        $q = "UPDATE info_personal SET nombre = $nombre, apellido = $apellido, direccion = $direccion
        WHERE id= $id";
        $resultado= mysqli_query($conexion, $q);
        echo $resultado;
        if ($resultado){
                echo "Actualizacion exitosa";    
                echo "<a href=actualizar.php>Desea actualizar otro personal</a>  </br>";
                echo "<a href=index.php>Volver al inicio</a>";
        }
        else {
            echo "no pasa na";
        }
    }
    
?>