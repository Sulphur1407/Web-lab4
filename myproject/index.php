<?php

// Визначаємо URI та розділяємо його на окремі елементи
//$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);
//$uri = rtrim($request_uri[0], '/');
//$uri_parts = explode('/', $uri);

// Визначаємо, яку сторінку користувач хоче відвідати
//$page = '';
//if (count($uri_parts) == 1) {
//    $page = $uri_parts[0];
//}

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = '';
}

// Визначаємо, як обробляти запити користувача
switch ($page) {
    case '':
        require 'landing.php';
        break;
    case 'about-card':
        require 'about-card.php';
        break;
    case 'all-cards':
        require 'all-cards.php';
        break;
    case 'diviation-page':
        require 'diviation-page.php';
        break;
    case 'interpretation-page':
        require 'interpretation-page.php';
        break;
    case 'tarot-deck':
        require 'tarot-deck.php';
        break;
    default:
        require '404.php';
        break;
}
