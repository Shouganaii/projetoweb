USE dimariobd;

create table cliente(
	cpf_cliente INT(30) NOT NULL ,
    email VARCHAR(80) NOT NULL,
    endereco VARCHAR(40) NOT NULL,
    nome VARCHAR(40) NOT NULL,
    telefone INT(40) NOT NULL,
	PRIMARY KEY(cpf_cliente)

);

CREATE TABLE pedido (
    id_pedido INT NOT NULL auto_increment,
    preco DECIMAL (5,2) NOT NULL,
    nome_cliente VARCHAR(50) NOT NULL,
    retirada CHAR(30) NOT NULL,
    tipo_pagamento CHAR (20) NOT NULL,
    cpf_cliente INT(30) NOT NULL ,
    
    primary key (id_pedido),
    FOREIGN KEY (cpf_cliente) REFERENCES cliente(cpf_cliente)
);


CREATE TABLE cardapio (
    id_cardapio VARCHAR(60) NOT NULL ,
    nome VARCHAR(40) NOT NULL,
    tamanho CHAR(20) NOT NULL,
    tipo VARCHAR(50) NOT NULL,
    preco_produto DECIMAL(3,2) NOT NULL,
    descricao TEXT (40) NOT NULL,
    
    primary key (id_cardapio)
);
