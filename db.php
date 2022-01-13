<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
//session_start();
$conn=mysqli_connect(
    'localhost',
    'root',
    '',
    'computroniklab',
);
/*if (isset($conn)){
    echo 'DB is connected';
}*/
?>