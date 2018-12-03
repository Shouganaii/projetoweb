<!DOCTYPE html>
<?php
session_start();
include 'conexao.php';

?>
 
<html>
<title>Di Mario</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<style>
body, html {height: 100%}
body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
.menu {display: none}
.bgimg {
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url("https://www.stockthehouse.com/wp-content/uploads/2018/06/pep-pizza.jpg");
    min-height: 90%;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top w3-hide-small">
  <div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
    <a href="#" class="w3-bar-item w3-button">INICIO</a>
    <a href="#menu" class="w3-bar-item w3-button">CARDÁPIO</a>
    <a href="#about" class="w3-bar-item w3-button">SOBRE</a>
	<a href="login.php" class="w3-bar-item w3-button w3-right">ENTRAR/CADASTRAR</a>
    <a href="carrinho.php" class="w3-bar-item w3-button">CARRINHO</a>
  </div>
</div>
  
<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-padding">
    <span class="w3-tag w3-xlarge">ABERTO DAS 18:00 as 00:00</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white w3-hide-small" style="font-size:100px"style="color:rgb(#ce0b0b); >Di<br>MARIO</span>
    <span class="w3-text-white w3-hide-large w3-hide-medium" style="font-size:60px"><b>DI<br>MARIO</b></span>
    <p><a href="#menu" class="w3-button w3-xxlarge w3-black">Deixe me ver o Cardápio</a></p>
  </div>
</header>

<!-- Menu Container -->
<div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="menu">
  <div class="w3-content">
  
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">O Cardápio</h1>
    <div class="w3-row w3-center w3-border w3-border-dark-grey">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Pizza');" id="myLink">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Pizza</div>
      </a>
     
    </div>

    <?php
  $consulta = $pdo->prepare("SELECT * FROM cardapio");
  $consulta -> execute();

  $linhas = $consulta -> rowCount();

  foreach ($consulta as $mostra):
    
?>

    <div id="Pizza" class="w3-container menu w3-padding-32 w3-white">


<h1><b><?= $mostra ['nome']?></b> <span class="w3-center w3-tag w3-dark-grey w3-round"><?= number_format($mostra['preco_produto'],2,',','.')?></span> </h1>
      <a href="carrinho.php?prod=<?= $mostra['id_cardapio']?>"class="w3-right w3-tag w3-red w3-round">Adicionar ao carrinho</a>
      <p class="w3-text-grey"><?= $mostra['descricao']?></p>

    </div>
<?php      
  endforeach;
?>
  </div>
</div>

<!-- About Container -->
<div class="w3-container w3-padding-64 w3-red w3-grayscale w3-xlarge" id="about">
  <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">Sobre</h1>
    <p>O restaurante da pizza foi fundado no blabla pelo Sr. Italiano em sua mente, em fazer exame do poder, em fazer um trabalho incidental e em fazer exame do dolore magna aliqua. O uso de um instrumento pode ajudar a reduzir os efeitos colaterais do trabalho.</p>
    <p><strong>O Chefe</strong> Mr. Italiano Israel Elias</p>
    <h1><b>Horário de funcionamento</b></h1>
    
    <div class="w3-row">
      <div class="w3-col s6">
        <p>Segunda a Domingo Aberto da 18:00 as 00:00</p>
      </div>
      
        
      </div>
    </div>
    
  </div>
</div>

<!-- Image of location/map -->

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-48 w3-xxlarge">
<div class="w3-container w3-padding-64 w3-blue-grey w3-grayscale-min w3-xlarge"id="googleMap">
  <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">Fale Conosco</h1>
    <p>Encontre-nos em QR 402 - Samambaia Sul, Brasília - DF ou ligue para (61) 99209-5670</p>

  </div>
</div>
 
</footer>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");5
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-red";
}
document.getElementById("myLink").click();
</script>

</body>
</html>
