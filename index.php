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
          <div class="col bg-dark " > 
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
		      <p class="text-start fs-6">Vote em um dos candidatos abaixo:</p>
		    <form class="bg-white"  method = "POST" action ="votacao.php" >
			    <div class="form-check mb-3 text-start"  >
 		 		    <input class="form-check-input" type="radio" name="voto" id="opcao1" value="opcao1">
 				     <label class="form-check-label" for="opcao1">
   					 Candidato 1
  				  </label>
		    	</div>
			  <div class="form-check mb-3 text-start">
  				<input class="form-check-input" type="radio" name="voto" id="opcao2" value="opcao2">
  				<label class="form-check-label" for="opcao2">
   					Candidato 2 
  				</label>
			</div>
			<div class="form-check mb-3 text-start ">
  				<input class="form-check-input" type="radio" name="voto" id="opcao3" value="opcao3" >
  				<label class="form-check-label" for="opcao3">
    				Candidato 3 
 				 </label>
			</div>
			<div class="col-12 mb-3 text-start">
   				 <input type="submit"   name="acao" class="btn btn-dark" value="Votar">
			</div>
		</form> 
        </div>
        <div class="col-1">
                &nbsp;
        </div>
        </div>
      </div>
</body>
</html> 