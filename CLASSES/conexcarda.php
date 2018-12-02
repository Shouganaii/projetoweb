<?php
	mysql_connect("localhost","root","");
	mysql_select_db("dimariobd");
?>
<?php
	$conexao = new PDO('mysql:host=localhost;dbname=dimariobd',"root","");

	$select = $conexao->prepare("SELECT * FROM cardapio");
	$select ->execute();
	$fetch = $select ->fetchAll();

	var_dump($fetch);

	foreach ($fetch as $produto) {
		
		echo $produto ['nome'];
		<br>
		<a href="carrinho.php?add=carrinho&id='.$produto['id_cardapio'].'">Adicionar ao carrinho</a>
	}
?>