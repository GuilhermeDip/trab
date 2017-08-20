<?php 

	class Cliente{
	
	private $idCliente;
	private $nome;
	private $email;
	private $renda;

	public function cliente(){
	}

	public function getidCliente(){
		return $this->idCliente;
	}

	public function setidCliente($idCliente){
		$this->idCliente = $idCliente;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getRenda(){
		return $this->renda;
	}

	public function setRenda($renda){
		$this->renda = $renda;
	}

}

?>
