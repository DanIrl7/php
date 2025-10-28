<?php
require_once __DIR__ . '/../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
$twig = new \Twig\Environment($loader);

$requestUri = $_SERVER['REQUEST_URI'];

switch ($requestUri) {
    case '/':
        echo $twig->render('index.html.twig');
        break;
    case '/auth/login':
        echo $twig->render('auth/login.html.twig');
        break;
    case '/auth/signup':
        echo $twig->render('auth/signup.html.twig');
        break;
    case '/dashboard':
        echo $twig->render('dashboard.html.twig');
        break;
    case '/tickets':
        echo $twig->render('tickets.html.twig');
        break;
    default:
        http_response_code(404);
        echo $twig->render('404.html.twig'); // Assuming you'll create a 404 template
        break;
}