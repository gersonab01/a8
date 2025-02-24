<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Views\PhpRenderer;

final class HomeController
{
    public function home(
        ServerRequestInterface $request,
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array(
            'titleHeader' => 'Título do site'
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "home.php", $data);
    }

    public function cursos(
        ServerRequestInterface $request,
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array(
            'title' => 'CURSOS',
            'caminho' => array(
                [
                    'link' => 'cursos',
                    'nome' => 'CURSOS'
                ]
            )
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "cursos.php", $data);
    }

    public function area(
        ServerRequestInterface $request,
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array(
            'title' => 'ÁREA DO ALUNO',
            'caminho' => array(
                [
                    'link' => 'area',
                    'nome' => 'ÁREA DO ALUNO'
                ]
            )
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "area.php", $data);
    }

    public function contato(
        ServerRequestInterface $request,
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array(
            'title' => 'CONTATO',
            'caminho' => array(
                [
                    'link' => 'contato',
                    'nome' => 'CONTATO'
                ]
            )
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "contato.php", $data);
    }

    public function page(
        ServerRequestInterface $request,
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array();
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "home.php", $data);
    }
}
