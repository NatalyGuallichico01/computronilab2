<?php

Route::get("/", function(){
    return view("cliente.php");
})->name('cliente');
  
?>