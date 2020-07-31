

<?php session_start();
 include 'helpers.php';
 
?>
 <?php if (!isset ($_SESSION["ingreso"])){
header("location:inicioorigi.php");

 } ?>
<!DOCTYPE html>


<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link href="blog.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet"> 
        <title></title>
    </head>


    <body>
   
    <div id= conteiner>
<header>

        <div id="titulo">
            
            
                <a>
                    
                  blogger  
                    
                </a>
                
            
        
        </div>
        
        <div id="nav">
    
                <ul>
                   
                    
                    <?php $dada=categorias($coneccion); 
                    while($pe=mysqli_fetch_assoc($dada)):?>

                    <li>
                         
                    
                        <a href="inicioorigi.php?".<?= $pe["id"]?>>
                       <?= $pe["nombre"]?>
                        </a>
                        
                    </li>
                    <?php endwhile; ?>
                    
                    <li>
                        <a href="#">
                            caca
                        </a>
                        
                    </li>
                    
                    <li>
                        <a href="#">
                            cabeza
                        </a>
                        
                    </li>
                    
                </ul>
                
            
            
        </div>
</header>
        

<div id="medio">
<div id="articulos">
    <h2> ingresa categoria</h2>
<?php if(isset($_SESSION["errorcate"]["titulo"])){echo $_SESSION["errorcate"]["titulo"]; } ?>
<br>
<?php if(isset($_SESSION["errorcate"]["entrada"])){echo $_SESSION["errorcate"]["entrada"]; } ?>    
    <form action="entradasph.php" method="POST">
        <input type="text" name="titulo">
        
        <input type="text" name="entrada">

        <select name="categorias">
        <?php $dada=categorias($coneccion); 
        while($pe=mysqli_fetch_assoc($dada)):?>
            <option  value="<?=$pe["id"]; ?>"><?=$pe["nombre"]; ?></option>
            <?php endwhile;?>
        </select>        
        <input type="submit" value="enviar">
        
    </form>    
       
  
      
            
</div>


        <div id="aside">
           

<?php if (isset ($_SESSION["ingreso"])): ?>


            <div id="sesion">

            
                <h3>bienvenido <?php echo $_SESSION["ingreso"]["nombre"]." ".$_SESSION["ingreso"]["apellidos"];  ?></h3>


                <span><a href="cerrar.php"> CERRAR SESION </a> </span>
                <span><a href="ingrecategorias.php">CREAR CATEGORIAS</a> </span>
                <span><a href="ingreentra.php">CREAR ENTRADAS </a></span>
                </div>
 

             
                

                
                </form>
    
            
            </div>
        </div>


        
        

</div>
</div>
    </body>
    <?php borrar(); ?>
</html>
<?php else:?>

<?php endif; ?>

