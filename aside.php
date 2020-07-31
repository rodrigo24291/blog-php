<?php if (!isset ($_SESSION["ingreso"])): ?>
<!-- si la  session no esta activa muestra esto   -->
            
<!-------------------------------------------------------------->            
            
          <!-- apertura del inicio de session   -->
          
          
            <div id="sesion">

            
                <h3>Iniciar session</h3>
                
                    
                    <form action="ingresar.php" method="POST">
                    <?php  if (isset ($_SESSION["error"]["ingresar"])){echo $_SESSION["error"]["ingresar"]; }; ?>         
                        <label>introduce tu usuario</label>
                        <input type="email" name="email">
                        
                        <label>introduce tu contraseña</label>
                        <input type="password" name="pasword">

                        <input type="submit" value="enviar">
                        
                    </form>
                
                
                
            </div>

<!-- fin del inicio de session   -->



<!-- apertura del registro   -->

            <div id="registrarte"> 
            
            <h3> Registrate   </h3>
            
                <form id="regis" action="registrar.php" method="POST">
               <?php  if (isset ($_SESSION["completo"])){echo $_SESSION["completo"]; }; ?>
               <?php  if (isset ($_SESSION["error"]["generar"])){echo $_SESSION["error"]["generar"]; }; ?>
               
                    <label>Introduce tu nombre</label>
                    <br>
                    <input type="text" name="nombre">
                    <?php if(isset($_SESSION["error"])){echo errores($_SESSION["error"],"nombre");}?>
                    <br>
                    
                    <label>Introduce tu apellido</label>
                    <br>
                    <input type="text" name="apellido">
                    <?php if(isset($_SESSION["error"])){echo errores($_SESSION["error"],"apellido");}?>
                    <br>
                    
                    <label>Introduce tu email</label>
                    <br>
                    <input type="email" name="email">
                    <?php if(isset($_SESSION["error"])){echo errores($_SESSION["error"],"email");}?>
                    <br>
                    
                    <label>Introduce tu pasword</label>
                    <input type="password" name="pasword">
                    <?php if(isset($_SESSION["error"])){echo errores($_SESSION["error"],"pasword");}?>
                    <br><br>
                    <input type="submit" value="enviar">
                </form>
                    </div>
        
        <!-- fin del registro de usuario   -->
        
<!-------------------------------------------------------------->     


<?php else :?>
<!-- si la  session esta activa muestra esto   -->

        
        
                <div id="sesion">

            
                <h3>bienvenido <?php echo $_SESSION["ingreso"]["nombre"]." ".$_SESSION["ingreso"]["apellidos"];  ?></h3>


                <span><a href="cerrar.php"> CERRAR SESION </a> </span>
                <span><a href="ingrecategorias.php">CREAR CATEGORIAS</a> </span>
                <span><a href="ingreentra.php">CREAR ENTRADAS </a></span>
                </div>

               
               <?php endif; ?>
<!-- fin de la  condicion inicial   -->