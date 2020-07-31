

<?php
include 'coneccion.php';
session_start();
if(isset($_POST)){
    
   $email= isset( $_POST["email"])? mysqli_real_escape_string ($coneccion,$_POST["email"]):FALSE;
    $pasword= $_POST["pasword"];
    


$sqli="select * from usuarios where email='$email'";
$coneccion2= mysqli_query($coneccion, $sqli);


if(mysqli_num_rows($coneccion2)==1){
    
  $pesa= mysqli_fetch_assoc($coneccion2);
  
  $papa = password_verify($pasword, $pesa['password']);

  
if($papa){
$_SESSION["ingreso"]=$pesa;;

}
else{$_SESSION["error"]["ingresar"]="<div class='alert'>contraseña o email no valido</div>";}

}

header("location:inicioorigi.php");
}