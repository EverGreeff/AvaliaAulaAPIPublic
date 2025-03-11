<?php
	
namespace App\Models;


final class UsuarioModel {
	private $id;
	private $grupo_usuario;
	private $nome;
	private $email;


	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		return $this->id = $id;
	}

	public function getGrupo_usuario()
	{
		return $this->grupo_usuario;
	}

	public function setGrupo_usuario($grupo_usuario)
	{
		return $this->grupo_usuario = $grupo_usuario;
	}


	public function getNome()
	{
		return $this->nome;
	}

	public function setNome($nome)
	{
		return $this->nome = $nome;
	}


	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		return $this->email = $email;
	}

}

?>