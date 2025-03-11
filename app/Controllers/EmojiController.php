<?php

namespace App\Controllers;


use Psr\Http\Message\ServerRequestInterface as Request;
use \Slim\Http\Response as Response;

use App\DAO\EmojiDAO;

class EmojiController {
	

    public function buscaEmojis(Request $request, Response $response, array $args): Response {


        $emojiDAO = new EmojiDAO();

        $emojis = $emojiDAO->getEmojis();
        
        $response = $response->withJson($emojis);

        return $response;

    }

    public function buscaEmoji(Request $request, Response $response, array $args) : Response {
        $id = $args['id'];

        $emojiDAO = new EmojiDAO();

        $emojis = $emojiDAO->getEmoji($id);
        
        $response = $response->withJson($emojis);

        return $response;
    }

}


?>