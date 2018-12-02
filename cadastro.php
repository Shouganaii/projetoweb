<!DOCTYPE html>
<?php
	require_once'CLASSES/logar.php';
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
body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC"; sans-serif}
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
	<a href="cadastro.php" class="w3-bar-item w3-button w3-right">ENTRAR/CADASTRAR</a>
  </div>
</div>
  
<!-- Header with image -->
<header >
  
</header>

<body>
<div class="w3-container w3-padding-64 w3-blue-grey w3-grayscale-min w3-xlarge"id="logar">
  <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">Cadastrar</h1>
    
	<div class="w3-center">
	
    <form method="POST" >
  
  Nome:<br>
  <input type="text" name="nome" >
  <br>
  
  CPF:<br>
  <input type="text" name="cpf" >
  <br>
  
  Endereço:<br>
  <input type="text" name="endereco" >
  <br>

  Telefone:<br>
  <input type="text" name="telefone" >
  <br>
	
	E-mail:<br>
  <input type="text" name="email" >
  <br>
  Crie uma Senha:<br>
  <input type="password" name="senha" >
  <br>
  
  Confirmar Senha:<br>
  <input type="password" name="confsenha" >
  <br><br>
  
  <input type="submit" value="CADASTRAR">
      </div>
    </form>


  </div>
</div>


<?php
	if(isset($_POST['nome']))
	{
	$nome = addslashes($_POST['nome']);
	$cpf_cliente = addslashes($_POST['cpf']);
	$endereco = addslashes($_POST['endereco']);
  $telefone = addslashes($_POST['telefone']);
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);
	$confirsenha = addslashes($_POST['confsenha']);
	
	if(!empty($nome)&& !empty($cpf_cliente)&& !empty($endereco)&& !empty($telefone) && !empty($email)&& !empty($senha))
	{
		$u->conectar("dimariobd", "localhost", "root", "");
		if($u->msgErro =="")
		{
			if($senha == $confirsenha)
			{
			 if($u->cadastrar($nome, $cpf_cliente, $endereco,$telefone, $email, $senha))
			 {
          ?>
          <div id="msg-sucesso">
				 Cadastrado com sucesso
        </div>
         <?php
			 }
			  else
			  {
          ?>
          <div class="msg-erro">
				 Email já cadastrado
        </div>
         <?php
         }
			 }
			 else
       {
          ?>
          <div class="msg-erro">
				 Senha e confirmar senha não correspondem
        </div>
         <?php
			 }
		}
		else
		{
      ?>
      <div>
			     <?php echo "Erro".$u->msgErro;?>
      </div>
      <?php
		}
	}
	else
	{
    ?>
    <div class="msg-erro">
		Preencha todos os campos!
    </div>

    <?php
	}
	}
?>

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

