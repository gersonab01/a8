<?php

use Slim\App;

return function (App $app) {

    //ROTAS ADMIN
    $app->get('/admin', '\App\Controller\AdminController:index');
    $app->get('/login', '\App\Controller\AdminController:login');
    $app->post('/login', '\App\Controller\AdminController:verifica_login');

    //ROTAS DO WEB SITE
    $app->get('/', '\App\Controller\HomeController:home');
    $app->get('/cursos', '\App\Controller\HomeController:cursos');
    $app->get('/area', '\App\Controller\HomeController:area');
    $app->get('/contato', '\App\Controller\HomeController:contato');
    $app->get('/{any}', '\App\Controller\HomeController:page');
};
