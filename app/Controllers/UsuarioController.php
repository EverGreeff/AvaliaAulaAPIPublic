<?php

namespace App\Controllers;


use Psr\Http\Message\ServerRequestInterface as Request;
use \Slim\Http\Response as Response;

use App\DAO\UsuarioDAO;

class UsuarioController {
	

    public function buscaUsuario(Request $request, Response $response, array $args) : Response {
        $email = $args['email'];

        $usuarioDAO = new UsuarioDAO();

        $usuario = $usuarioDAO->getUsuario($email);
        
        $response = $response->withJson($usuario);

        return $response;
    }

}


?>