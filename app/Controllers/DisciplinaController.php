<?php

namespace App\Controllers;


use Psr\Http\Message\ServerRequestInterface as Request;
use \Slim\Http\Response as Response;

use App\DAO\DisciplinaDAO;

class DisciplinaController {
    
    public function buscaDisciplinas(Request $request, Response $response, array $args): Response {
        $email = $args['email'];

        $disciplinaDAO = new DisciplinaDAO();

        $disciplinas = $disciplinaDAO->getDisciplinas($email);
        
        $response = $response->withJson($disciplinas);

        return $response;

    }

    public function buscaDisciplina(Request $request, Response $response, array $args) : Response {
        $id = $args['id'];

        $disciplinaDAO = new DisciplinaDAO();

        $disciplinas = $disciplinaDAO->getDisciplina($id);
        
        $response = $response->withJson($disciplinas);

        return $response;
    }

}


?>