<?php

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
