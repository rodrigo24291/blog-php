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
                         
                    
                    <a href="inicioorigi.php?id=<?= $pe["id"]?>">
                       <?= $pe["nombre"]?>
                        </a>
                        
                    </li>
                    <?php endwhile; ?>
                    
                    <li>
                        <a href="inicioorigi.php">
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