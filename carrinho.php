<!DOCTYPE html>



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


table {
    font-family: "Amatic SC",sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 0px;
}

</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top w3-hide-small">
  <div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
    <a href="index.php#" class="w3-bar-item w3-button">INICIO</a>
    <a href="index.php#menu" class="w3-bar-item w3-button">CARDÁPIO</a>
    <a href="index.php#about" class="w3-bar-item w3-button">SOBRE</a>
	<a href="login.php" class="w3-bar-item w3-button w3-right">ENTRAR/CADASTRAR</a>
    <a href="carrinho.php" class="w3-bar-item w3-button">CARRINHO</a>
  </div>
</div>
  
<!-- Header with image -->
<header  >

  <div class="w3-container w3-black w3-padding-64 w3-xxlarge" >
  <div class="w3-content">
  
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">O Cardápio</h1>
<!--
    <?php 

session_start();
include 'conexao.php';

$produto= filter_input(INPUT_GET, 'prod');

$consulta = $pdo->prepare("SELECT * FROM cardapio WHERE id_cardapio=:prod");
$consulta-> bindValue(':prod',$produto);
  $consulta -> execute();

  $linhas = $consulta -> rowCount();

  foreach ($consulta as $mostra):
  endforeach;

  
 ?>
-->



<!--
        <table class="w3-red">
  <tr>
        <td class="bgcolor-gray"><p class="text-center color-dark-full font-text-light"></p>
        <input type="text" name="produto" value="" style="display:none" ></td>
        <form method="post">
        <td class="bgcolor-gray"><p class="text-center color-dark-full font-text-light">
          <input type="number" name="quantidade"  class="text-center" id="qtd" onchange="acrescentar()">&nbsp;<b><span id="resultado"></span></b> &nbsp;<button class="color-white link-bgcolor-green-dark-b" name="alterar" value="Alterar"> Alterar</button></p>
    </table>

  -->
    </div>

  </div>
</div>
  
 
</header>



<!-- Footer -->

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
