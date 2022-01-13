<?php
include ("db.php");
if (isset($_POST['saveOrder'])){ 
    $equipo=$_POST['equipo'];
    $marca=$_POST['marca'];
    $modelo=$_POST['modelo'];
    $serie=$_POST['serie'];
    $notas=$_POST['notes'];
    $problema=$_POST['problem'];
   
    /*echo $names;
    echo "<br>";
    echo $lastnames;*/
   
    $query="INSERT INTO detalleequipos (IDEQUIPO, MARCA, MODELO, SERIE, DANO, NOTAS) VALUES ('$equipo', '$marca', '$modelo', '$serie','$problema','$notas')";
    $result=mysqli_query($conn, $query);
    if(!$result){
        #echo $result;
        die("Ingreso de datos fallido");
    }
    //echo "Datos guardados exitosamente";
    $_SESSION['message']="Datos guardados exitosamente";
    $_SESSION['message_type']='success';
    header("Location: index.php");
}


 
?>