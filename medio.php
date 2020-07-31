<?php
session_start();
 include 'helpers.php';
 include 'coneccion.php';
?>
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
<!--   inicio del nav   -->

   <?php include 'nav.php';  ?> 
    
<!--   fin del nav   -->    
</header>
        

        
        
<div id="medio">
<div id="articulos">
            
      
           
  <div class="aritcle">
        <?php if (isset($_GET["titulo"])):?>
            
        <?php 
        $titulo=$_GET["titulo"];
        $cate2=entradas3($titulo);
        
        $lo=mysqli_fetch_assoc($cate2);
       

          echo  "<h2>".$lo["titulo"]."</h2>";
          echo "<p id='fecha'>".$lo["fecha"]."</p>";
           ?> 
          <?php endif; ?>

         <?php  if(isset($_SESSION["ingreso"]["id"]) && $_SESSION["ingreso"]["id"] ==$lo["usuario_id"]):?>
      
      
      
      <form  method='post' > 
          <input type='text' name="des" value='<?php echo $lo["descripcion"]; ?>'>
          <input type='submit' value=' guardar '>  </form> 
      
           <?php if(isset($_POST["des"])){
               $ti=$lo["titulo"];
              if (!empty($_POST["des"])) {$des=$_POST["des"];
              
               $sql="update entradas set descripcion='$des' where titulo='$ti'";
           $actualizar= mysqli_query($coneccion,$sql );
              }
              else{$ca=FALSE; }
              
             
           if(isset($actualizar) && $actualizar){header("location:inicioorigi.php");} 
           else{echo "error en la actualizacion";}
           } ?>
           
           
           
          <?php  else:?>
                      
         <?php echo  "<p>".$lo["descripcion"]."</p>";?>
         
            
        <?php endif;?>    
       
        </div>
      
            
        

        </div>
        
</div>
        
        <!-- inicio del aside   -->
        
        <div id="aside">
            
         <?php include 'aside.php'; ?>   
           
            
         </div>
        <!-- fin del aside   -->
           
                




    </body>
    <?php borrar();
?>
</html>


