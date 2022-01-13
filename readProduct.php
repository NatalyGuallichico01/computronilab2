<?php
include ("db.php");
if (isset($_GET['id'])){
    $id=$_GET['id'];
    $query= "SELECT * FROM informacioncomponente WHERE IDCOMPONENTE=$id";
    $resultEdit=mysqli_query($conn, $query);
    if (mysqli_num_rows($resultEdit)==1){
        $row=mysqli_fetch_array($resultEdit);
        $marca=$row['names'];
        $modelo=$row['lastnames'];
        $serie=$row['CI'];
        $notas=$row['direction'];
        
    }
}
?>
