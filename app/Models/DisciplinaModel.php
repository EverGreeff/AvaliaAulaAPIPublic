<?php
	
namespace App\Models;


final class DisciplinaModel {
	private $id;
	private $nome_disciplina;
	private $excluido;


	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		return $this->id = $id;
	}

	public function getNome_disciplina()
	{
		return $this->nome_disciplina;
	}

	public function setNome_disciplina($nome_disciplina)
	{
		return $this->nome_disciplina = $nome_disciplina;
	}

	public function getExcluido()
	{
		return $this->excluido;
	}

	public function setExcluido($excluido)
	{
		return $this->excluido = $excluido;
	}


}

?>