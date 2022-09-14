<?php

    include 'DevGate-main/DevGate-main/ProjetoIntegrador/Controller/CursoController.php';
    include 'DevGate-main/DevGate-main/ProjetoIntegrador/Controller/UserController.php';

    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    switch($url){

        case '/':
            include('./View/modules/LandingPage.php');
        break;

        case '/curso':
            CursoController::index();
        break;

        case '/curso/form':
            CursoController::form();
        break;

        case '/curso/form/save':
            CursoController::save();
        break;

        case '/curso/delete':
            CursoController::delete();
        break;
        

        case '/user':
            include('./View/modules/User/UserPage.php');
        break;

        case '/user/form':
            UserController::form();
        break;

        case '/user/form/save':
            UserController::save();
        break;

        default:
            echo "Erro 404";
        break;
    }