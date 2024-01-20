<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);


# Default
Router::get('', 'DefaultController');
Router::get('about', 'DefaultController');
Router::get('contact', 'DefaultController');


# Offers
Router::get('offers', 'OfferController');
Router::post('addOffer', 'OfferController');
Router::post('getOffer', 'OfferController');
Router::get('offer', 'OfferController');

# Security
Router::post('login', 'SecurityController');
Router::post('register', 'SecurityController');
Router::post('logout', 'SecurityController');

Router::run($path);