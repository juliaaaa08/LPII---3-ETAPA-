<?php

    include "../adm/conexao.php";
    include "../adm/topo.php";
    

    if(isset($_GET['login'])){
        //entrada - recebe os dados
        $id = $_GET['login']; 

        //processamento - escreve e executa a sql
        $sql = "delete from usuario where login = '$login'";
        $excluir = mysqli_query($conexao,$sql);

        //saida - feedback ao usuário e redirecionar a página
        if($excluir){
            echo "
                <script> 
                    alert('Usuário Excluído com Sucesso!');
                    window.location = 'listar_usuarios.php';
                </script>
            ";
    
        }
        else{
            echo "
                <p> Banco de Dados Temporariamente fora do ar. Tente novamente mais tarde. </p>
                <p> Entre em contato com o administrador do Site ... </p>
            ";
            echo mysqli_error($conexao);
        }
    }
    else{
        echo "
            <p> Esta é uma página de tratamento de dados </p>
            <p> Clique <a href='listar_usuarios.php'> aqui </a> para a acessar a lista de usuarios cadastrados. </p>
        ";
    }

    include "../adm/rodape.php";
?>