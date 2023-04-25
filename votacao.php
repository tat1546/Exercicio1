<?php
// verifica se o usuário votou em uma opção
if (isset($_POST['voto'])) {
	$voto = $_POST['voto'];
  
  $arquivo = 'votos.txt';
  $votos = file($arquivo, FILE_IGNORE_NEW_LINES);

	// adiciona o voto à opção selecionada
	if ($voto == 'opcao1') {
    $votos[0]++;
	} elseif ($voto == 'opcao2') {
    $votos[1]++;
	} elseif ($voto == 'opcao3') {
	  $votos[2]++;
	}
  file_put_contents($arquivo, implode("\n", $votos));
}


$votos = file('votos.txt', FILE_IGNORE_NEW_LINES);
$total_votos = array_sum($votos); 

 // header('Location: index.php');
//exit;

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body  class="bg-dark-subtle">
    <div class="container text-center" >
        <div class="row" >
          <div class="col-1 "  >
            &nbsp;  
          </div>
          <div class="col bg-dark" > 
            <nav class="navbar bg-dark" data-bs-theme="dark" id="menu">
                <div class="container-fluid">
                  <a class="navbar-brand" href="index.php">SISTEMA VOTAÇÃO</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  </div>
                </div>
            </nav>
          </div>
		  <div class="col-1" >
            &nbsp;
          </div>
        </div>
        <div class="row" >
            <div class="col-1">
                &nbsp;
            </div >   
        <div  class="col bg-white p-4 ">   
	      	<b><p class="text-start fs-5">Sistema de Votação</p></b>

		    <form class="bg-white"  method = "POST" action ="index.php" >          
        <?php

        $arquivo = fopen('votos.txt', 'r');
        
        $opcao1 = fgets($arquivo);
        $opcao2 = fgets($arquivo);
        $opcao3 = fgets($arquivo);

	          echo " <h4>Resultados da Votação</h4> ";
	          echo " <p>Candidato 1: " . $opcao1 . " </p> ";
	          echo " <p>Candidato 2: " . $opcao2 . " </p> ";
	          echo " <p>Candidato 3: " . $opcao3 . " </p> ";
        fclose($arquivo);

	          ?>
             <input type="submit"   name="acao" class="btn btn-dark" value="Votar Novamente">
		</form> 


        </div>
        <div class="col-1">
                &nbsp;
        </div>
        </div>
      </div>
</body>
</html> 