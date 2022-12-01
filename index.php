<!DOCTYPE html>      
<html> 
<head>
<meta charset="UTF-8">
<link href="css.css" rel="stylesheet" type="text/css">
<link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/512/6287/6287516.png"/>
<title>mpuzzle</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" rel="stylesheet" />

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body class="corpoInicial"> 

    <?php
            
            session_start(); 
            
            //<div class="divNomeJogoLogin"><span class="fonte">mpuzzle</span></div>
            if(isset($_SESSION['usuarioID']) && isset($_SESSION['usuario'])){
                header("location: mpuzzle.php");
                
                
            }else{
                
        ?> 

	
	<div style="margin-left: 25%; margin-right: 25%;"><?php include "logo.php"; ?></div>
		
		<form action="autenticar.php" method="POST">	
			<div class="divLogin">
					
				<p style="color: #FEF9FF; font-family: monospace; font-size: 2vw;">Seja bem-vindo ao mpuzzle!</p>
                <p style="color: #FEF9FF; font-family: monospace; font-size: 1.3vw;">Entre com sua conta ou crie uma nova para jogar.</p><br>
                
				
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <p class="btn ladoBotaoInput" style="height: 76%; background-color: #00CDF4; color: white; user-select: none;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
						  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
						</svg>
					</p>
				  </div>
				  <input type="text" name="txtEmail" class="form-control" placeholder="email" aria-label="Email" aria-describedby="basic-addon1" style="color: #7A83EA; font-weight: bold; font-family: monospace; font-size: 18px;">
				</div>
				
				<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <p class="btn ladoBotaoInput" style="height: 76%; background-color: #00CDF4; color: white; user-select: none;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
					  <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
					</svg>
				</p>
			  </div>
			  <input id="pass" name="txtSenha" type="password" class="form-control" placeholder="senha" aria-label="Password" aria-describedby="basic-addon1" style="color: #7A83EA; font-weight: bold; font-family: monospace; font-size: 18px;">
				  <div class="input-group-append" style="color:" id="showPassword">
				  	<p class="btn ladoBotaoInput" style="height: 76%; background-color: #00CDF4; color: white;">
				    
				    
				    <img id="icone" src="eye.svg" alt="">
					
					
					</p>
				  </div>
				
			</div>
				<br>
				<a href="cadastrar.php" style="color: #FEF9FF; font-family: monospace; font-size: 1vw;">Não possui cadastro? Crie uma nova conta aqui!</a><br>
		
				<br><button type="submit" class="btn botaoJogar" value="Jogar" style="width: 70%; border-radius: 50px; background-color: #00CDF4; color: white; font-weight: bold; font-size: 20px; hover: button">	Jogar </button>			      
				
				<br><br>
			</div>
		</form>
	</div>
	
	
	<br>
    

<?php
 }
?>   
</body>

<script>
	
	document.getElementById('showPassword').addEventListener('click', function(){
		if(document.getElementById('pass').type == 'text'){
			document.getElementById('pass').type = 'password';
			document.getElementById('icone').src = 'eye.svg';
		}else{
		    document.getElementById('pass').type = 'text';
		    document.getElementById('icone').src = 'eye-slash.svg';
		}
		
	})
</script>

</html>