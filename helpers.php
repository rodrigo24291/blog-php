<?php
include'coneccion.php';
function errores($conection,$campo){

    $re="";
    if(isset($conection[$campo])){
    $re="<div id='alert'>".$conection[$campo]."</div>";}
    return $re;
    
}
function borrar(){
    $borrado = false;
	
	if(isset($_SESSION['error']["generar"])){
		$_SESSION['error']["generar"] = null;
		
	}
	
	if(isset($_SESSION['error'])){
		$_SESSION['error'] = null;
		
	}
	
	if(isset($_SESSION['completo'])){
		$_SESSION['completo'] = null;
		
	}

	if(isset($_SESSION['errorcate'])){
		$_SESSION['errorcate'] = null;
		
	}

	
	return $borrado;


}



function categorias($co){

	
$sql="select * from categorias ";

$conet=mysqli_query($co,$sql);


if ( mysqli_num_rows($conet)>=1){

$cate=$conet;

}
return $cate;
}

function entradas(){
global $coneccion;
	$sql="select * from entradas order by fecha desc limit 4 ";
	$we=mysqli_query($coneccion,$sql);
if(mysqli_num_rows($we)>=1 ){
	$pue=$we;

}	
return $pue;
}


function entradas2($id){
	global $coneccion;
		$sql="select * from entradas where categoria_id=$id order by fecha desc limit 4 ";
		$we=mysqli_query($coneccion,$sql);
	if(mysqli_num_rows($we)>=1 ){
		$pue=$we;
	
	}
        
        else{
            $pue=false;
        } 
	return $pue;
	}

        
        function entradas3($titulo){
	global $coneccion;
		$sql="select * from entradas where titulo='$titulo'";
		$we=mysqli_query($coneccion,$sql);
	if(mysqli_num_rows($we)>=1 ){
		$pue=$we;
	
	}	
	return $pue;
	}
