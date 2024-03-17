<?php 

    if (empty($_POST['e1'])) 
   {
        //SI EL FORMULARIO NO ESTA LLENO ENTONCES SE VULVE AL PRINCIPIO
        //echo "FORMULARIO INCOMPLETO".header("location: formulario.php");
        
        //echo '<a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';
        echo "ERROR FALTA NOMBRE";
    }elseif (empty($_POST['e2'])) {
        echo "ERROR FALTA ESPECIE";
    }elseif (empty($_POST['e3'])) {
        echo "ERROR FALTA ALIMENTACION";
    }elseif (empty($_POST['e4'])) {
        echo "ERROR FALTA ANTIGUEDAD";
    }elseif (empty($_POST['e5'])) {
        echo "ERROR FALTA PERIODO";
    }elseif (empty($_POST['e6'])) {
        echo "ERROR FALTA ALTURA";
    }elseif (empty($_POST['e7'])) {
        echo "ERROR FALTA PESO";
    }elseif (empty($_POST['e8'])) {
        echo "ERROR FALTA AÑO_HALLAZGO";
    }elseif (empty($_POST['e9'])) {
        echo "ERROR FALTA LUGAR_HALLAZGO";
    }
    elseif (empty($_FILES["foto"]["tmp_name"])) {
        echo "ERROR FALTA FOTO";
    }else{
        echo "TODO COMPLETO";
        //SI EL FORMULARIO NO ESTA LLENO ENTONCES SE VULVE AL PRINCIPIO
        //echo "FORMULARIO INCOMPLETO".header("location: formulario.php");
        
        //echo '<a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';
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
    }




    /*{  

        //echo header("location: registro.php");
        echo "ERROR";
        
    }
     //SI EL FORMULARIO NO ESTA LLENO ENTONCES SE VULVE AL PRINCIPIO
        //echo "FORMULARIO INCOMPLETO".header("location: formulario.php");
        /*echo "ERRORerr";
        //echo '<a href="javascript:window.history.back();">&laquo; Volver a la página anterior &laquo;</a>';
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
        //echo header("location: registro.php"); */
?>