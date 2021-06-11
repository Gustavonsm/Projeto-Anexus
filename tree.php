 <?php
        session_start();

        if(empty($_SESSION['cod1'])){

           echo ('<meta http-equiv="refresh"content=0;"index.php">');
        }
        else
        {
          $usuario1 = $_SESSION['cod1'];
          $usuario2 = $_SESSION['cod2'];
          $usuario3 = $_SESSION['cod3'];

    ?>

<!DOCTYPE html>
<html lang="pt-br">
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
  <header>
      
  </header>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <div class="inner">
      <h3 class="inner cover">Rede de pontos do usuário</h3>
      
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <body>
    <form  enctype="multipart/form-data" method="POST" id="form1">
    <script src="tree.js" defer></script>
    <main role="main" class="inner cover">
        <center>  
    

    
    
    <?php  echo $usuario1;   ?><br> 
    <br><input type="text" id="valor1" name="usuario1"class="txtbox2"placeholder="Valor"><br><br>
    <?php  echo $usuario2;   ?><br>
    <br><input type="text" id="valor2" name="usuario2"class="txtbox2"placeholder="Valor"><br><br>
    <?php  echo $usuario3;   ?><br>
    <br><input type="text" id="valor3" name="usuario3"class="txtbox2"placeholder="Valor"><br><br>


    <input id = "send" type="submit" name="btnenviar" class="butom"><br><br><br>

   <table>
      <tr><h3><?php  echo $usuario1;   ?></h3></tr>
      <tr>
        <p id="v1" class="texto"></p>
      </tr>
      <tr>
        <td><h3><center><?php  echo $usuario2;   ?><br>Filho Esquerdo</center></h3></td>
        <td><h3><center><?php  echo $usuario3;   ?><br>Filho Direito</center></h3></td>
      </tr>
      <tr>
        <td><center><p id="v2" class="texto"></p></center></td>
        <td><center><p id="v3"class="texto"></p></center></td>
      </tr>
      </table>

   

   </center>
  </form>
  <script src="script.js"></script>
     

</main>
    



</body>
</html>
<?php
}
?>