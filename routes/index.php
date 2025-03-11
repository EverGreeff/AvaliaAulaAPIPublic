<?php

use function src\{
    jwtAuth
};

use App\Controllers\AvaliacaoController;
use App\Controllers\AuthController;
use App\Controllers\DisciplinaController;
use App\Controllers\EmojiController;
use App\Controllers\UsuarioController;
use App\Util\Util;

use function src\slimConfiguration;


$app = new \Slim\App(slimConfiguration());

$app->post('/login', AuthController::class . ':login');
$app->post('/refresh_token', AuthController::class . ':refreshToken');

$app->post('/avaliacao', AvaliacaoController::class . ':insertAvaliacao')
    ->add(jwtAuth());

$app->get('/avaliacao/listar/{email}', AvaliacaoController::class . ':buscaAvaliacoes')
    ->add(jwtAuth());

$app->get('/avaliacao/listar/disciplina/{disciplina}', AvaliacaoController::class . ':buscaAvaliacoesPorDisciplina')
    ->add(jwtAuth());

$app->get('/disciplina/listar/{email}', DisciplinaController::class . ':buscaDisciplinas')
    ->add(jwtAuth());

$app->get('/disciplina/{id}', DisciplinaController::class . ':buscaDisciplina')
    ->add(jwtAuth());

$app->get('/emoji/listar', EmojiController::class . ':buscaEmojis')
    ->add(jwtAuth());

$app->get('/emoji/{id}', EmojiController::class . ':buscaEmoji')
    ->add(jwtAuth());

$app->get('/usuario/{email}', UsuarioController::class . ':buscaUsuario')
    ->add(jwtAuth());

$app->get('/policy', Util::class . ":getPolicy");

$app->run();