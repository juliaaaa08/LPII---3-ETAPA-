<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="CSS/style.css">

    <title>Olá, mundo!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.html" class="logo"><i class='bx bxs-florist'></i></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(página atual)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="formulario.php">Pagamento</a>
          </li>
          <li class="nav-item dropdown">
    
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
          <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>
      </div>
    </nav>
    
  
    <div class="container">
      <hr class="mb-5">
      <form name="pag" id="pag">

        <fieldset class="mb-5">
          <legend> Dados para o envio </legend>

          <div class="form-group">
            <label for="nome"> Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe seu nome">
          </div>

          <div class="form-group">
            <label for="ceporiginal">CEP</label>
            <input type="number" class="form-control" id="ceporiginal" name="ceporiginal" placeholder="Informe seu CEP" oninput="cep()">
          </div>

          <div class="form-group">
            <label for="cepduplicado">CEP</label>
            <input type="number" class="form-control" id="cepduplicado" name="cepduplicado" placeholder="Confirme seu CEP" oninput="cep()">
          </div>

         

          <p id="msg"> * CEP não recohecido</p>
          
        </fieldset>


        <fieldset >
          <legend> Dados para o pagamento </legend>

          <div class="form-group" id="cpf">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" name="cpf" placeholder="xxx.xxx.xxx-xx" onkeypress="mascara_cpf(this)" onkeypress="mascara_cpf(this)" onkeyup="salto(this.name,this.value)" maxlength="14" onkeydown="return somente_numero(event)"> 

          </div>

    

          <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(xx)xxxxx-xxxx" onkeypress="mascara_tel(this)" onkeypress="mascara_tel(this)" onkeypress="mascara_cnpj(this)" onkeyup="salto(this.name,this.value)" maxlength="14">
          </div>

     

          <div class="form-group">
            <label for="pagamento">Forma de Pagamento</label>
            <select class="form-control" id="pagamento" name="pagamento" onchange="abrir()">
              <option value="Dinheiro"> Dinheiro </option>
              <option value="Cartão"> Cartão </option>
              <option value="Pix"> Pix </option>
            </select>
          </div>

          <div class="form-group" id="cartao">
  
              <label for="num"> Nº do Cartão </label>
              <input type="text" class="form-control" name="num">
              <label for="cod"> Codigo de Segurança </label>
              <input type="text" class="form-control" name="cod">
              <label for="vencimento"> Vencimento </label>
              <input type="text" class="form-control" name="vencimento">


  
            
          </div>

          <div class="form-group" id="pix" >
      
            <figure class="qrcode"><img src="IMG/pix.png" alt="QR code"></figure>
            <label for="pix">Copiar código</label>
            <input type="text" class="form-control" value="whdeijsahdosahoifd"  name="pix">
          </div>
          
        </fieldset>



<div class="row">
  
          <div class="text-left mt-3 p-5">
            <button type="submit" class="btn btn-success">Comprar</button>
          </div>
  
          <div class="text-left mt-3 p-5">
            <a href="index.html"><button type="button" class="btn btn-danger">Cancelar</button></a>
          </div>
</div>
      </form>
    </div>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="JS/script.js"></script>
  </body>
</html>











