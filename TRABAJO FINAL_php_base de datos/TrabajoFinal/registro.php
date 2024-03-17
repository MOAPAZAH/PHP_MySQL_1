
<?php 
//VALIDA DATOS
    
    if (empty($_POST['e1'])) 
   {    echo "<br><center>ERROR: FALTA NOMBRE";
        echo "<br><br><br><button onclick=(location.href='formulario.php')>VOLVER AL FORMULARIO</button></center>";
    }elseif (empty($_POST['e2'])) {
        echo "<br><center>ERROR: FALTA ESPECIE";
        echo "<br><br><br><button onclick=(location.href='formulario.php')>VOLVER AL FORMULARIO</button></center>";
    }elseif (empty($_POST['e3'])) {
        echo "E<br><center>ERROR: FALTA ALIMENTACION";
        echo "<br><br><br><button onclick=(location.href='formulario.php')>VOLVER AL FORMULARIO</button></center>";
    }elseif (empty($_POST['e4'])) {
        echo "<br><center>ERROR: FALTA ANTIGUEDAD";
        echo "<br><br><br><button onclick=(location.href='formulario.php')>VOLVER AL FORMULARIO</button></center>";
    }elseif (empty($_POST['e5'])) {
        echo "<br><center>ERROR: FALTA PERIODO";
        echo "<br><br><br><button onclick=(location.href='formulario.php')>VOLVER AL FORMULARIO</button></center>";
    }elseif (empty($_POST['e6'])) {
        echo "<br><center>ERROR: FALTA ALTURA";
        echo "<br><br><br><button onclick=(location.href='formulario.php')>VOLVER AL FORMULARIO</button></center>";
    }elseif (empty($_POST['e7'])) {
        echo "<br><center>ERROR: FALTA PESO";
        echo "<br><br><br><button onclick=(location.href='formulario.php')>VOLVER AL FORMULARIO</button></center>";
    }elseif (empty($_POST['e8'])) {
        echo "<br><center>ERROR: FALTA AÑO_HALLAZGO";
        echo "<br><br><br><button onclick=(location.href='formulario.php')>VOLVER AL FORMULARIO</button></center>";
    }elseif (empty($_POST['e9'])) {
        echo "<br><center>ERROR: FALTA LUGAR_HALLAZGO";
        echo "<br><br><br><button onclick=(location.href='formulario.php')>VOLVER AL FORMULARIO</button></center>";
    }
    elseif (empty($_FILES["foto"]["tmp_name"])) {
        echo "<br><center>ERROR: FALTA FOTO";
        echo "<br><br><br><button onclick=(location.href='formulario.php')>VOLVER AL FORMULARIO</button></center>";
    }else{
        echo "TODO COMPLETO";
        //SI EL FORMULARIO NO ESTA LLENO ENTONCES SE VULVE AL PRINCIPIO
        //echo "FORMULARIO INCOMPLETO".header("location: formulario.php");
        
        echo '<a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';
        $nombre = $_POST['e1'];
        $especie = $_POST['e2'];
        $alimentacion = $_POST['e3'];
        $antiguedad = $_POST['e4'];
        $periodo = $_POST['e5'];
        $altura = $_POST['e6'];
        $peso = $_POST['e7'];
        $añoha = $_POST['e8'];
        $lugha = $_POST['e9'];
        $foto = addslashes(file_get_contents($_FILES["foto"]["tmp_name"]));
        //echo header("location: registro.php"); 
    


$usuario="root";
$password="";
$servidor="localhost";
$basededatos="prehistoria";
//CONSULTA BASE
$connexion = mysqli_connect($servidor, $usuario, $password, $basededatos) or die("No se encontro la base de datos");
$db = mysqli_select_db($connexion, $basededatos) or die("No se encontro la base de datos");
//CONSULTAR TABLA
$consulta ="select * from dinosario";
//SI EXISTE LA TABLA
$resultado = mysqli_query($connexion, $consulta) or die("No existe la tabla");

 
 
//INSERT INF FILA
$sql = "INSERT INTO dinosario (NOMBRE,ESPECIE,ALIMENTACION,ANTIGUEDAD,PERIODO,ALTURA,PESO,AÑO_HALLAZGO,LUGAR_HALLAZGO,FOTO) VALUES ('$nombre', '$especie', '$alimentacion', '$antiguedad', '$periodo', '$altura', '$peso', '$añoha', '$lugha', '$foto')";

if (mysqli_query($connexion, $sql)) {
     echo header("location: mostrar.php");

} else {
      echo "Error: NO SE INGRESO LA NUEVA FILA";
}
}
?>



