<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />

    <meta name="title" content="">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="robots" content="index, follow">
    <meta name="url" content="<?= URL_BASE ?>" />

    <meta property="og:locale" content="pt_BR" />
    <meta property="og:site_name" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?= URL_BASE ?>" />
    <meta property="og:image" content="" />
    <meta property="og:image:alt" content="" />

    <link rel="icon" href="" type="image/x-icon">
    <link rel="shortcut icon" href="" type="image/x-icon" />

    <title></title>

    <link href="<?= URL_BASE ?>resources/css/painel.css?v=<?= time() ?>" rel="stylesheet" />
</head>

<body class="white">
    <header>
        <div class="container">
            <div class="conteudo">
                <div class="right">
                    <div class="usuario">
                        <p>Nome do Usuario</p>
                        <i class="fas fa-caret-down"></i>
                        <div class="foto">
                            <img src="<?= URL_BASE ?>resources/imagens/logo.png" alt="">
                        </div>
                        <ul class="submenu">
                            <li><a href="#">Perfil</a></li>
                            <li><a href="#">Configurações</a></li>
                            <li><a href="#">Sair</a></li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="btn-nav">
                    <i class="fas fa-bars-staggered"></i>
                </a>
                <div class="nav">
                    <div class="top">
                        <div class="logo">
                            <img src="<?= URL_BASE ?>resources/imagens/logo.png" alt="">
                        </div>
                        <ul class="submenu">
                            <li class="active"><a href="#"><i class="fas fa-chart-area"></i> Dashboard</a></li>
                        </ul>
                        <p>Conteúdo</p>
                        <ul class="submenu">
                            <li><a href="#"><i class="fas fa-wrench"></i> Serviços</a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i> Vídeos</a></li>
                            <li><a href="#"><i class="far fa-newspaper"></i> Blogs</a></li>
                            <li><a href="#"><i class="far fa-comments"></i> Recomendações</a></li>
                        </ul>
                        <p>Configurações</p>
                        <ul class="submenu">
                            <li><a href="#"><i class="fas fa-user"></i> Usuário</a></li>
                            <li><a href="#"><i class="fas fa-gears"></i> Site</a></li>
                            <li><a href="#"><i class="fas fa-right-from-bracket"></i> Sair</a></li>
                        </ul>
                    </div>
                    <div class="copy">
                        <p>Todos os direitos reservados @ <?= date('Y') ?></p>
                        <p>Responssável <a href="#"><i class="fab fa-instagram"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </header>