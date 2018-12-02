<!DOCTYPE html>
<?php
require_once 'CLASSES/logar.php';
$u = new Usuario;
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
div#msg-sucesso{
  width: 250px;
  margin: 10px auto;
  padding: : 10px;
  text-align: center;
  background-color: rgba(50,205,50,.3);
  border: 1px solid rgb(34,139,34);
  position:absolute;
  left:40%;
  top:25%;
}

div.msg-erro{
  width: 250px;
  margin: 10px auto;
  padding: 10px;
  text-align: center;
  color: white;
  background-color: rgba(250,128,114,.3);
  border: 1px solid rgb(165,42,42);
  position:absolute;
  left:40%;
  top:25%;
}

</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top w3-hide-small">
  <div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
    <a href="index.php" class="w3-bar-item w3-button">INICIO</a>
	<a href="login.php" class="w3-bar-item w3-button w3-right">ENTRAR/CADASTRAR</a>
    <a href="Carrinho.html" class="w3-bar-item w3-button">CARRINHO</a>
  </div>
</div>
  
<!-- Header with image -->
<header >
 
</header>

<body>
<div class="w3-container w3-padding-64 w3-blue-grey w3-grayscale-min w3-xlarge"id="logar">
  <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">ENTRAR</h1>
	
    <div class= "w3-center">
    <p class="w3-xxlarge"><strong>ENTRAR</strong> </p>
    <form method="POST">

	E-mail:<br>
  <input type="text" name="email" >
  <br>
	Senha:<br>
  <input type="password" name="senha" >
  <br><br>
  <input type="submit" value="ENTRAR"><br>
  
  <a href="cadastro.php" class="w3-hover-text-green">Fazer Cadastro</a>
  
    </form>
	</div>
  </div>
</div>

<?php

if(isset($_POST['email']))
  {
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
  
    if(!empty($email)&& !empty($senha))
    {
      $u->conectar("dimariobd", "localhost", "root", "");
      if($u->msgErro =="")
    {

    if($u->logar($email,$senha))
    {
      header("location:sair.php");

    }
    else
    {
      ?>
      <div class="msg-erro">
      echo "Email e/ou senha estão incorretos";
      </div>
      <?php
    }
    }
    else
    {
    ?>
    <div class="msg-erro">
    <?php echo "Erro: ".$u->msgErro; ?>
    </div>
    <?php
  }
    }
   else
     {
      ?>
      <div class="msg-erro">
      echo "Preencha todos os campos"
      </div>
      <?php
     }
}
?>
</body>

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
