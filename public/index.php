<?php

require __DIR__ . '/../vendor/autoload.php';

$app = [
    'pokeAPIURL' => 'https://pokeapi.co/api/v2/',
    //'pokeAPIURL' => 'http://pokeapi.salestock.net/api/v2/', // API with working pagination
    'pokeAPI' => new PokeAPI,
];

// Use a 1 hour cache to speed up requests, comment out to always use latest data
$app['pokeAPI'] = new Cache($app['pokeAPI'], 3600);

function view($view, $vars) {
    $mustache = new Mustache_Engine(['loader' => new Mustache_Loader_FilesystemLoader(__DIR__ . '/../src/views')]);
    echo $mustache->render($view, $vars);
}

$router = new Router;

/*******************************
 * Define Routes
 ******************************/

$router->add('/^$/', 'AllPokemon', 'index');
$router->add('/^pokemon$/', 'AllPokemon', 'index');
$router->add('/^pokemon\/(\d+)$/', 'SinglePokemon', 'index');

/*******************************
 * Route Request
 ******************************/

return $router->route($_SERVER['REQUEST_URI'], $app);
