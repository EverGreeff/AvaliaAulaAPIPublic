<?php
	
namespace App\Models;


final class EmojiModel {
	private $id;
	private $foto_base64;
	private $excluido;


	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		return $this->id = $id;
	}

	public function getFoto_base64()
	{
		return $this->foto_base64;
	}

	public function setFoto_base64($foto_base64)
	{
		return $this->foto_base64 = $foto_base64;
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