<?php

    include "../adm/conexao.php";
    include "../adm/topo.php";

    if(isset($_GET['login'])){
 
        $id = $_GET['login'];

  
        $sql = "select * from usuario where login = '$login'";
        $seleciona = mysqli_query($conexao,$sql);
        $exibe = mysqli_fetch_array($seleciona);


        $login = $exibe['login'];
        $senha = $exibe['preco'];
        $email = $exibe['email'];
        $foto = $exibe['foto'];

?>



        <h1 class="mt-3 text-center"> Login: <?php echo $login ?></h1>
        <hr>
        <p> Senha: <?php echo $senha ?> </p>
        <p> Email: <?php echo $email ?> </p>
        <p> Foto: <?php echo $foto ?> </p>
    

        <hr>

        <div class="row">
            <div class="col text-start">
                    <button type="button" class="btn btn-warning" onclick="history.go(-1)">Voltar</button>
            </div>
            <div class="col text-end">
                    <button type="button" class="btn btn-primary" onclick="location.href='editar_usuario.php?id=<?php echo $id ?>'">Editar</button>
            </div>
        </div>
        
<?php
    
    }

    else{
        echo "
            <p> Esta é uma página de tratamento de dados. </p>
            <p> Clique <a href='listar_usuarios.php'> aqui </a> para a acessar a lista de usuarios cadastrados. </p>
        ";
    }

    include "../adm/rodape.php";
?>
