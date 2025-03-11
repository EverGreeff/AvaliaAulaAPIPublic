<?php

namespace App\DAO;

use Slim\Http\Response;

class UsuarioDAO extends Conexao {

	public function __construct() {
        parent::__construct();
    }
    

    public function getUsuario($email): array {
        $sql = "SELECT * FROM usuario WHERE email = '" . $email . "'";

        $avaliacao = $this->pdo
            ->query($sql)
        ->fetchAll(\PDO::FETCH_ASSOC);

        return $avaliacao;

    }

    
    
}

?>