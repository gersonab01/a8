<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Views\PhpRenderer;
use App\Model\Usuario;

final class AdminController
{
    public function index(
        ServerRequestInterface $request,
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array(
            'titleHeader' => 'Painel Administrativo'
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES_ADMIN);
        return $renderer->render($response, "index.php", $data);
    }

    public function login(
        ServerRequestInterface $request,
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array(
            'titleHeader' => 'Título do site'
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES_ADMIN);
        return $renderer->render($response, "login.php", $data);
    }

    public function verifica_login(
        ServerRequestInterface $request,
        ResponseInterface $response,
        $args
    ) {
        $posts = $request->getParsedBody();
        $usuario = new Usuario();
        $result = $usuario->selectUsuario('*', array('email' => $posts['usuario']));

        if ($result) {
            if ($result[0]['senha'] !== $posts['senha']) {
                header('Location: ' . URL_BASE . 'login');
                exit();
            }
            $_SESSION['usuario_logado'] = $result[0];

            //echo "<pre>";
            //var_dump($_SESSION['usuario_logado']);
            //exit();

            header('Location: ' . URL_BASE . 'admin');
            exit();
        } else {
            header('Location: ' . URL_BASE . 'login');
            exit();
        }
    }
}
