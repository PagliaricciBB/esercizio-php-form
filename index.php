<?php

  $nome = (isset($_POST['nome'])) ? $_POST['nome'] : '';

  print $nome;

    

?>


<!doctype html>
<html lang="it">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style type="text/css">
      
    </style>

    <title>Ciao, mondo!</title>
  </head>
  <body>
    <div class="container">

      <form action="index.php" method="post">

        <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" name="nome" class="form-control" id="nome" placeholder="Inserisci il tuo nome">
          <small id="nome" class="form-text text-muted">We'll never share your email whit anyone else.</small> 
        </div>

        <div class="form-group">
          <label for="cognome">Cognome</label>
          <input type="text" class="form-control" id="cognome" placeholder="Inserisci il tuo cognome">
        </div>
      
        <div class="form-group">
          <label for="indirizzo">Indirizzo</label>
          <textarea class="form-control" id="indirizzo" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>
      </form>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 