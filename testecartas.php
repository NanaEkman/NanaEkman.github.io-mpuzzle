<!DOCTYPE html>
<html lang="pt-br">
</body>
</html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<style>

.base{
    background-color: blue;
    width: 100px;
    height: 100px;
}

.front-face{
  width: 150px;
  height: 150px;
  background-color: blue;
  border-radius: 5px;
  margin: 5px;
  padding: 5px;
  transform: rotateY(180deg);
  display: block;
  background-size: cover;
  background-position: center;

}
.back-face {
  width: 150px;
  height: 150px;
  background-color: blue;
  border-radius: 5px;
  margin: 5px;
  padding: 5px;
  position: absolute;
  top: 0;
  display: block;
  background-size: cover;
  background-position: center;
}

.back-face:hover, 
.back-face:focus{
 transform:translateX(1px) scale(1.05);
}


.back-face:active{
  transition: all .2s ease-in-out;
  transform: scale(0.7);

}

</style>
</head>
<body>

<button onclick="criar()">criar</button>

<div class="row justify-content-md-center">
  <div class="col-auto carta">
    <div class="front-face" style="background-image: url('https://pbs.twimg.com/media/E6S_4Z7XoAEXQPa?format=jpg&name=small')">
     
    </div>
    <div class="back-face" onclick="clicou()" style="background-image: url('https://cdn-icons-png.flaticon.com/512/5726/5726642.png')">
    </div>
  </div>
    
  <div class="col-auto carta" onclick="clicou()">
    <div class="front-face" style="background-image: url('https://pbs.twimg.com/media/E6S_4Z7XoAEXQPa?format=jpg&name=small')">
     
    </div>
    <div class="back-face" style="background-image: url('https://cdn-icons-png.flaticon.com/512/5726/5726642.png')">
    </div>
  </div>

  <div class="col-auto carta" onclick="clicou()">
    <div class="front-face" style="background-image: url('https://pbs.twimg.com/media/E6S_4Z7XoAEXQPa?format=jpg&name=small')">
     
    </div>
    <div class="back-face" style="background-image: url('https://cdn-icons-png.flaticon.com/512/5726/5726642.png')">
    </div>
  </div>

  <div class="col-auto carta" onclick="clicou()">
    <div class="front-face" style="background-image: url('https://pbs.twimg.com/media/E6S_4Z7XoAEXQPa?format=jpg&name=small')">
     
    </div>
    <div class="back-face" style="background-image: url('https://cdn-icons-png.flaticon.com/512/5726/5726642.png')">
    </div>
  </div>
    
  <div class="w-100"></div>
  
  <div class="col-auto carta" onclick="clicou()">
    <div class="front-face" style="background-image: url('https://pbs.twimg.com/media/E6S_4Z7XoAEXQPa?format=jpg&name=small')">
     
    </div>
    <div class="back-face" style="background-image: url('https://cdn-icons-png.flaticon.com/512/5726/5726642.png')">
    </div>
  </div>
    
  <div class="col-auto carta" onclick="clicou()">
    <div class="front-face" style="background-image: url('https://pbs.twimg.com/media/E6S_4Z7XoAEXQPa?format=jpg&name=small')">
     
    </div>
    <div class="back-face" style="background-image: url('https://cdn-icons-png.flaticon.com/512/5726/5726642.png')">
    </div>
  </div>
    
  <div class="col-auto carta" onclick="clicou()">
    <div class="front-face" style="background-image: url('https://pbs.twimg.com/media/E6S_4Z7XoAEXQPa?format=jpg&name=small')">
     
    </div>
    <div class="back-face" style="background-image: url('https://cdn-icons-png.flaticon.com/512/5726/5726642.png')">
    </div>
  </div>
    
  <div class="col-auto carta" onclick="clicou()">
    <div class="front-face" style="background-image: url('https://pbs.twimg.com/media/E6S_4Z7XoAEXQPa?format=jpg&name=small')">
     
    </div>
    <div class="back-face" style="background-image: url('https://cdn-icons-png.flaticon.com/512/5726/5726642.png')">
    </div>
  </div>
    
  <div class="w-100"></div>
  
  <div class="col-auto carta" onclick="clicou()">
    <div class="front-face" style="background-image: url('https://pbs.twimg.com/media/E6S_4Z7XoAEXQPa?format=jpg&name=small')">
     
    </div>
    <div class="back-face" style="background-image: url('https://cdn-icons-png.flaticon.com/512/5726/5726642.png')">
    </div>
  </div>
    
  <div class="col-auto carta" onclick="clicou()">
    <div class="front-face" style="background-image: url('https://pbs.twimg.com/media/E6S_4Z7XoAEXQPa?format=jpg&name=small')">
     
    </div>
    <div class="back-face" style="background-image: url('https://cdn-icons-png.flaticon.com/512/5726/5726642.png')">
    </div>
  </div>
    
  <div class="col-auto carta" onclick="clicou()">
    <div class="front-face" style="background-image: url('https://pbs.twimg.com/media/E6S_4Z7XoAEXQPa?format=jpg&name=small')">
     
    </div>
    <div class="back-face" style="background-image: url('https://cdn-icons-png.flaticon.com/512/5726/5726642.png')">
    </div>
  </div>
    
  <div class="col-auto carta" onclick="clicou()">
    <div class="front-face" style="background-image: url('https://pbs.twimg.com/media/E6S_4Z7XoAEXQPa?format=jpg&name=small')">
     
    </div>
    <div class="back-face" style="background-image: url('https://cdn-icons-png.flaticon.com/512/5726/5726642.png')">
    </div>
  </div>
    
  <div class="w-100"></div>
  
  <div class="col-auto carta" onclick="clicou()">
    <div class="front-face" style="background-image: url('https://pbs.twimg.com/media/E6S_4Z7XoAEXQPa?format=jpg&name=small')">
     
    </div>
    <div class="back-face" style="background-image: url('https://cdn-icons-png.flaticon.com/512/5726/5726642.png')">
    </div>
  </div>
    
  <div class="col-auto carta" onclick="clicou()">
    <div class="front-face" style="background-image: url('https://pbs.twimg.com/media/E6S_4Z7XoAEXQPa?format=jpg&name=small')">
     
    </div>
    <div class="back-face" style="background-image: url('https://cdn-icons-png.flaticon.com/512/5726/5726642.png')">
    </div>
  </div>
    
  <div class="col-auto carta" onclick="clicou()">
    <div class="front-face" style="background-image: url('https://pbs.twimg.com/media/E6S_4Z7XoAEXQPa?format=jpg&name=small')">
     
    </div>
    <div class="back-face" style="background-image: url('https://cdn-icons-png.flaticon.com/512/5726/5726642.png')">
    </div>
  </div>
    
  <div class="col-auto carta" onclick="clicou()">
    <div class="front-face" style="background-image: url('https://pbs.twimg.com/media/E6S_4Z7XoAEXQPa?format=jpg&name=small')">
     
    </div>
    <div class="back-face" style="background-image: url('https://cdn-icons-png.flaticon.com/512/5726/5726642.png')">
    </div>
  </div>
    
  
</div>

<script>

function clicou(){

  var carta = event.target;
	carta.style.display = "none";

}

</script>
</body>
</html>