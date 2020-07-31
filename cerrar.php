<?php

session_start();

if(isset($_SESSION["ingreso"])){

    session_destroy();
    

}


header("location:inicioorigi.php");