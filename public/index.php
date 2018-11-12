<?php

require __DIR__ . '/../vendor/autoload.php';

$app = [
    'pokeAPI' => new PokeAPI('https://pokeapi.co/api/v2/'),
];

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

/*******************************
 * Route Request
 ******************************/
$path = trim($_SERVER['REQUEST_URI'], '/');

$router->route($path, $app);
