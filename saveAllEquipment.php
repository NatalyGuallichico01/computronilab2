<?php
include ("db.php");
if (isset($_POST['saveEquipment'])){
    $names=$_POST['names'];
    $equipo=$_POST['equipo'];
    $estado=$_POST['estado'];
   
    /*echo $names;
    echo "<br>";
    echo $lastnames;*/
    $query="INSERT INTO equipo (EQUIPO, MARCA, SERIE, MODELO) VALUES ('$equipo', '$marca', '$serie', '$modelo')";
    $result=mysqli_query($conn, $query);
    if(!$result){
        die("Ingreso de datos fallido");
    }
    //echo "Datos guardados exitosamente";
    $_SESSION['message']="Datos guardados exitosamente";
    $_SESSION['message_type']='success';
    header("Location: index.php");
}
?>