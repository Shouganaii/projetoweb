<?php

Class Usuario
{
	private $pdo;
	public $msgErro ="";
	
	public function conectar($nome, $host, $usuario, $senha)
	{
		global $pdo;
		global $msgErro;
		try
		{
		$pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
		}catch (PDOException $e){
			$msgErro = $e->getMessage();
		}
	}
	
	public function cadastrar($nome, $cpf_cliente, $endereco,$telefone, $email, $senha)
	{
		global $pdo;
		$sql = $pdo->prepare("SELECT cpf_cliente FROM cliente WHERE email = :e");
		$sql ->bindValue(":e",$email);
		$sql->execute();
		if($sql->rowCount() > 0)
		{
			return false;
		}
		
		else
		{
			$sql = $pdo->prepare("INSERT INTO cliente (nome, cpf_cliente, endereco,telefone, email, senha ) VALUES (:n, :c, :d,:t, :e, :s)");
			
			$sql ->bindValue(":n",$nome);
			$sql ->bindValue(":c",$cpf_cliente);
			$sql ->bindValue(":d",$endereco);
			$sql ->bindValue(":t",$telefone);
			$sql ->bindValue(":e",$email);
			$sql ->bindValue(":s",md5($senha));
			
			$sql->execute();
			return true;
			
		}

	}

	public function logar($email, $senha)
	{
		global $pdo;
		
		$sql = $pdo->prepare ("SELECT cpf_cliente FROM cliente WHERE email = :e AND senha = :s");
		
		$sql->bindValue(":e",$email);
		$sql->bindValue(":s",md5($senha));
		$sql->execute();
		if($sql->rowCount()>0)
		{
			$dado = $sql->fetch();
			session_start();
			$_SESSION['cpf_cliente'] = $dado ['cpf_cliente'];
			return true;
		
		}
		else
		{
		return false;	
			
		}	
	}


}


?>