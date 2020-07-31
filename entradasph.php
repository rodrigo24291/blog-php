

<?php
session_start();
include 'coneccion.php';
if(isset($_POST)){
    
    $titu=$_POST["titulo"];
    $catesa=$_POST["entrada"];
    $categoid=(int)$_POST["categorias"];
    $usua=(int)$_SESSION["ingreso"]["id"];
   


    $error=array();
    
    if(empty($titu)){
        $error["titulo"]="error titulo";
$titulovalido=FALSE;    
      
    }
 else {
$titulovalido=true;        
    }
    if(empty($catesa)){
        $error["entrada"]="errror categoria";
    
$entradavalido=FALSE;      
    }
    
    else {
$entradavalido=true;        
    }
    
   
    if(count($error)==0){
 $sql="insert into entradas values(null,$usua,$categoid,'$titu','$catesa',curdate())";
$cone=mysqli_query($coneccion,$sql);   

    
    
header("location:inicioorigi.php");
   
   
    }
else{$_SESSION["errorcate"]=$error;
header("location:ingreentra.php");
}

}

    