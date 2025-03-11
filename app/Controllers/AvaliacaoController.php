<?php

namespace App\Controllers;


use Psr\Http\Message\ServerRequestInterface as Request;
use \Slim\Http\Response as Response;
use App\DAO\AvaliacaoDAO;
use App\DAO\UsuarioDAO;

use App\Models\AvaliacaoModel;

class AvaliacaoController {
	
    public function insertAvaliacao(Request $request, Response $response, array $args) {
        try {
            $data = $request->getParsedBody();

            $avaliacaoDAO = new AvaliacaoDAO();
            $avaliacaoModel = new AvaliacaoModel();
            $usaurioDAO = new UsuarioDAO();
            $id_usuario = $usaurioDAO->getUsuario($data['email_usuario']);


            $avaliacaoModel->setId($data['id'] == '' ? null : $data['id']);
            $avaliacaoModel->setId_disciplina($data['id_disciplina']);
            $avaliacaoModel->setId_emoji($data['id_emoji']);
            $avaliacaoModel->setId_usuario($id_usuario[0]["id"]);
            $avaliacaoModel->setObservacao($data['observacao']);
            $avaliacaoModel->setData_hora(date('Y-m-d H:i:s'));
            $avaliacaoModel->setExcluido('0');

            

            if($avaliacaoModel->getId() != ""){
                $avaliacaoDAO->updateAvaliacao($avaliacaoModel);
            } else {
                $avaliacaoDAO->insertAvaliacao($avaliacaoModel);
            }
            

            
            return "OK";

            //return $response->withJson($array_retorno);
        } catch(\Exception $e) {
            return $response->withJson([
                'error' => $e->getMessage()]);
        }
    }

    public function buscaAvaliacoes(Request $request, Response $response, array $args): Response {
        $email = $args['email'];

        $avaliacaoDAO = new AvaliacaoDAO();

        $avaliacoes = $avaliacaoDAO->getAvaliacoes($email);
        
        $response = $response->withJson($avaliacoes);

        return $response;

    }

    public function buscaAvaliacoesPorDisciplina(Request $request, Response $response, array $args): Response {
        $disciplina = $args['disciplina'];

        $avaliacaoDAO = new AvaliacaoDAO();

        $avaliacoes = $avaliacaoDAO->getAvaliacoesPorDisciplina($disciplina);
        
        $response = $response->withJson($avaliacoes);

        return $response;

    }

}


?>