<?php 
	include 'cliente.class.php';

	$p = new Cliente();
	$p->setidCliente("id10");
	$p->setNome("Guilherme");
	$p->setEmail("guilhermedip@hotmail.com");
	$p->setRenda("1000 Reais");

	echo "<p>Id Cliente: ".$p->getidCliente().
		"<br>Nome: ".$p->getNome().
		"<br>Email: ".$p->getEmail().
		"<br>Renda: ".$p->getRenda(). "</p>"

 ?>
