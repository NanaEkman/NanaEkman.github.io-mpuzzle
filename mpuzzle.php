<!DOCTYPE html>    
<html>  
<head>
<meta charset="UTF-8">
<link href="css.css" rel="stylesheet" type="text/css">
<link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/512/6287/6287516.png"/>
<title>mpuzzle</title>

<script type="text/javascript"></script>
<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" rel="stylesheet" />

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body class="corpoInicial">
	
	<div class="conteiner">

        <div class="row justify-content-md-center">
            <div class="div jogar" style="color: white; margin-top: 2.5%;"><?php include_once('infoJogar.php') ?><?php include_once('menu.php') ?></div>
            <div style="width: 35%;"><?php include_once ('logo.php'); ?></div>
            <div class="div usuario" style="color: white; margin-top: 2.5%; margin-left:20px;">
            
                <?php
                    session_start();
    	            if (isset($_SESSION['usuarioID'])) {
    	                
    	                echo "<div style='padding-top: 5%;'></div>";
    	                
    	                echo "<h4 style='color: white; text-align: center; color: #FFD670; font-family: 'Bauhaus Modern', sans-serif;'><div class='col'>Seja Bem-Vindx, " . $_SESSION['usuario'] . "</h4>";
    	                
    	                echo "<p style=''><a href='pagUsuario.php' class='btn' style='color: white; background-color: #00CDF4; margin-top: 5%; width: 40%; margin-right: 5%; margin-left: 5%'>Sua área</a>";
    				
    				    echo "<a href='sair.php' class='btn' style='color: white; background-color: #00CDF4; width: 40%; margin-top: 5%; margin-right: 5%; margin-left: 5%'>Log out</a></p>";
    				    
    	            }else{
    	               echo '@usuariooooo faça login!!!!!';
    	            }   
    	        ?>
            
            </div> 
        </div>

        <div class="row justify-content-md-center">
            <div class="divs corpoCartas" ><?php include_once('testecartas.php') ?></div>
            <div class="divs ranking"> <?php include_once('ranking.php') ?></div>
        </div>
	   
	</div>
	
</body>
</html>