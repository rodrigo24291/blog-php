<?php
session_start();
include 'coneccion.php';

if (isset($_POST)){
    
    $nombre= isset( $_POST["nombre"])? mysqli_real_escape_string($coneccion, $_POST["nombre"]):FALSE;
    $apellidos= isset( $_POST["apellido"])? mysqli_real_escape_string ($coneccion,($_POST["apellido"])):FALSE;
    $email= isset( $_POST["email"])? mysqli_real_escape_string ($coneccion,$_POST["email"]):FALSE;
    $pasword= isset( $_POST["pasword"])? mysqli_real_escape_string($coneccion, $_POST["pasword"]):FALSE;

    
    $error= array();
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
    $name_real=true;
  
    }
    
    else{   $error["nombre"]="inserte un nombre valido";}
    
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
        $apellido_real=true;
        
    }
    
    else{
        $error["apellido"]="inserte un apellido valido";
    }
    
    if(!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)){
        $email_real=true;
    
    }
    
    else{
        $email_real=true;$error["email"]="inserte un email valido";}
    
    if(!empty($pasword) ){
        $pasword_real=true;
    
    }
    
    else{$error["pasword"]="inserte una pasword correcta";}
    
    if(count($error)==0){
       
  $hash=password_hash($pasword, PASSWORD_BCRYPT, ['cost'=>4]);      
        $sql="insert into usuarios values(null,'$nombre','$apellidos','$email','$hash',curdate())";
        
        $coneccion1=mysqli_query($coneccion, $sql);
        $perro="<div class='alert'>registro completo</div><br>";
        if($coneccion1){$_SESSION["completo"]=$perro;}
        
        else {$_SESSION["error"]["generar"]="<div class='alert'>error en el registro</div><br>";}
        
        
    }
    else{$_SESSION["error"]=$error;}
    
    
   
    header("location:inicioorigi.php");
        
    }

    
    
    
    
    
    
    


