<?php 
//CONEXION A LA BASE DE DATOS

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
 ?>


 <!DOCTYPE html>
 <html>
 <head>
     <title>MOSTRAR_DINOSAURIOS</title>
<style>
    table{
    background-color: white;
    text-align: left;
    border-collapse: collapse;
    width: 100%;
}

th, td{
    padding: 20px;
}

thead{
    background-color: #246355;
    border-bottom: solid 5px #0F362D;
    color: white;
}

tr:nth-child(even){
    background-color: #ddd;
}

tr:hover td{
    background-color: #369681;
    color: white;
}

button {
  background-color: #f44336; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
body{

  background-image: url('fondoPantalla.jpg');
}
</style>
 </head>
 <body>


<h4><button onclick=(location.href='formulario.php')>VOLVER AL REGISTRO</button><h4>
<table border ='5' id="customers"> 
 <thead>
    <td>NOMBRE</td><td>ESPECIE</td><td>ALIMENTACION</td><td>ANTIGUEDAD</td><td>PERIODO</td><td>ALTURA</td><td>PESO</td><td>AÑO_HALLAZGO</td><td>LUGAR_HALLAZGO</td><td>FOTOGRAFIA</td>
</thead>
    <?php 

    while ($columna = mysqli_fetch_array($resultado)) {  
    
    echo "<tr>";
  
    echo "<td>".$columna['NOMBRE']."</td>";
    echo "<td>".$columna['ESPECIE']."</td>";
    echo "<td>".$columna['ALIMENTACION']."</td>";
    echo "<td>".$columna['ANTIGUEDAD']." millones años</td>";
    echo "<td>".$columna['PERIODO']."</td>";
    echo "<td>".$columna['ALTURA']." metro</td>";
    echo "<td>".$columna['PESO']." Kilogramos</td>";
    echo "<td>En el año ".$columna['AÑO_HALLAZGO']."</td>";
    echo "<td>".$columna['LUGAR_HALLAZGO']."</td>";
    echo "<td><img height='110px'src='data:image/*jpeg;base64,".base64_encode($columna['FOTO'])."'></td>";
   
    echo "</tr>";}
    ?>
</table>


 </body>
 </html>