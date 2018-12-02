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
    <div class="">
        <table class="w3-red">
  <tr>
    <th>Nome</th>
    <th>Quantidade</th>
    <th>Preço</th>
     <th>Remover</th>
  </tr>
    </table>
    </div>

  </div>
</div>
  
 
</header>



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
