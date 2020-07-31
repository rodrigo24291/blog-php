

<?php session_start();
 include 'helpers.php';
 
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
            
            
        <?php if (isset($_GET["id"])):?>
            
        <?php 
        $id=$_GET["id"];
        $cate2=entradas2($id);
        
        if ($cate2==!NULL){
        while ($lo=mysqli_fetch_assoc($cate2)){
       

           echo "<h2><a href=medio.php?titulo=".$lo["titulo"].">".$lo["titulo"]."</a></h2>";
           echo  "<p id='fecha'>".$lo["fecha"]. "</p>";
            
            echo "<p>".substr($lo["descripcion"],0,300)."....</p>";
          }}
        
          else{ 
              
              echo"<h2> texto vacio<h2>";
              
          }
          
           ?> 
            
       
        </div>
      
            
        

        </div>
        
        
        
        <!-- inicio del aside   -->
        
        <div id="aside">
            
         <?php include 'aside.php'; ?>   
           
            
         </div>
        
        <!-- fin del aside   -->
        
        
      
        
        
        
        <?php endif; ?>        
                



<!---->


       <?php if (!isset($_GET["id"]  )):?>
       <?php 
      $cate=entradas();  
       while ($lo=mysqli_fetch_assoc($cate))
       :?>

<h2><a href="medio.php?titulo=<?=$lo["titulo"] ?>"><?=$lo["titulo"] ?></a></h2>
            <p id="fecha"> <?=$lo["fecha"] ?> </p>
            
            <p><?=substr($lo["descripcion"],0,300)."...."; ?></p>
                    <?php endwhile; ?>
       
        </div>
      
    </div> 
        


        <div id="aside">
    
         <?php include 'aside.php'; ?>   
           
            
         </div>
        <!-- fin del aside   -->
        
        
       
       
       <?php endif; ?>     
            
        


        
        



    </body>
    <?php borrar();
?>
</html>
