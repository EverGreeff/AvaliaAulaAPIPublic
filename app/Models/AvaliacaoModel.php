<?php
	
namespace App\Models;


final class AvaliacaoModel {
	private $id;
	private $id_disciplina;
	private $id_emoji;
	private $id_usuario;
	private $observacao;
	private $data_hora;
	private $excluido;


	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		return $this->id = $id;
	}


	public function getId_disciplina()
	{
		return $this->id_disciplina;
	}

	public function setId_disciplina($id_disciplina)
	{
		return $this->id_disciplina = $id_disciplina;
	}


	public function getId_emoji()
	{
		return $this->id_emoji;
	}

	public function setId_emoji($id_emoji)
	{
		return $this->id_emoji = $id_emoji;
	}

	public function getId_usuario()
	{
		return $this->id_usuario;
	}

	public function setId_usuario($id_usuario)
	{
		return $this->id_usuario = $id_usuario;
	}

	public function getObservacao()
	{
		return $this->observacao;
	}

	public function setObservacao($observacao)
	{
		return $this->observacao = $observacao;
	}

	public function getData_hora()
	{
		return $this->data_hora;
	}

	public function setData_hora($data_hora)
	{
		return $this->data_hora = $data_hora;
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