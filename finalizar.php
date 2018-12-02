<?php
	
	session_start();
	unset($_SESSION['cpf_cliente']);
	header("location: index.php")

?>