<?php
session_start();
include 'coneccion.php';
if(isset($_POST)){
    
    $cate=$_POST["titulo"];
    
    if(empty($cate)){
        $_SESSION["errorcate"]="categoria no valida";
    
    header("location:ingrecategorias.php");        
    }
    else{$sql="insert into categorias values(null,'$cate')";
    
    $conect= mysqli_query($coneccion, $sql);
    header("location:inicioorigi.php"); 
   
    }
    
         
    
}


