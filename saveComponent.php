<?php include("db.php"); 
   if (isset($_POST['save'])){
       $componente=$_POST['componente'];
       $modelo=$_POST['modelo'];
       $marca=$_POST['marca'];
       $serie=$_POST['serie'];
       $notas=$_POST['notasComponente'];
       
       $query="INSERT INTO informacioncomponente (IDCOMPONENTE, MODELO, SERIE, MARCA, NOTAS) VALUES ('$componente', '$modelo', '$serie', '$marca', '$notas')";
       $result=mysqli_query($conn, $query);
       if (!$result){
           die("Petición Fallida");
           
       }
       $_SESSION['message']="Datos guardados exitosamente";
       $_SESSION['message_type']='success';

       header ('Location: index.php');
   }


?>