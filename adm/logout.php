<?php
    session_start();
    $_SESSION = array(); 
    session_destroy(); 
    header('location: /24_Júlia_Ramos_Rodrigues/adm/login.php'); 
?>