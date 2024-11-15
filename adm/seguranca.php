<?php
    if(!isset($_SESSION)){
        session_start();
    }
    if(!isset($_SESSION['login'])){
        echo "
            <script> 
                alert('Percebemos que você não está logado. Por favor, faça login.');
                window.location = 'login.php';
            </script>
        ";
    }
?>