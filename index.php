<!DOCTYPE html>
<html lang="pt-BR">
	<head>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/cover/">
	<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Teste Anexus Network</title>
	<link href="css/cover.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="inner cover">Rede de pontos do usuário</h3>
      
    </div>
  </header>

  <main role="main" class="inner cover">
  	<form name="Cadastro" method="POST">
    	 <center>  
      <h1>Insira o nome dos usuários</h1>  
      </select><br><br>
        Usuário 1<br>
        <input type="text" name="txtusuario1" class="txtbox2"><br><br>
        Usuário 2<br>
        <input type="text" name="txtusuario2" class="txtbox2"><br><br>
        Usuário 3<br>
        <input type="text" name="txtusuario3" class="txtbox2"><br><br>

        <input value="Cadastrar" type="submit" name="btncadastrar" class="butom">
       
        
    </center> 
 		
 		<?php
        session_start();

      $user1 = filter_input(INPUT_POST, 'txtusuario1', FILTER_SANITIZE_STRING);
      $user2 = filter_input(INPUT_POST, 'txtusuario2', FILTER_SANITIZE_STRING);
      $user3 = filter_input(INPUT_POST, 'txtusuario3', FILTER_SANITIZE_STRING);
      $botao= filter_input(INPUT_POST, 'btncadastrar' , FILTER_SANITIZE_STRING);

      if ($botao == 'Cadastrar') {
        
        if ($user1 && $user2 && $user3 != null) 
        {

          echo $user1 . $user3 . $user3;

          echo ('<meta http-equiv="refresh"content=0;"tree.php">');

          $_SESSION['cod1'] = $user1;
          $_SESSION['cod2'] = $user2;
          $_SESSION['cod3'] = $user3;
        }
        else
        {
          echo '<center><h3 style="color: red;">';
          echo 'Preencha todos os campos';
          echo '</h3></center>';
        }
      }

		?>
	</form>   
  </main>

  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p class="rodape">Copyright  © - Todos os direitos reservados</p>
    </div>
  </footer>
</div>
</body>
</html>