<?php

class Router {
    private $routes = array();

    // Add a new route, described by a regular expression
    // Captured groups are passed in as arguments to the method
    // ie '/^pokemon\/(\d+)$/' would match 'pokemon/5' and pass 5 as an argument
    public function add($pathRegex, $controller, $method) {
        $this->routes[$pathRegex] = [$controller, $method];
    }

    public function route($path, $app) {
        $path = trim(parse_url($path, PHP_URL_PATH), '/');

        // If path begins with static, return false to serve static files
        if (strpos($path, 'static/') === 0) {
            return false;
        }

        foreach ($this->routes as $pathRegex=>[$controllerClass, $method]) {
            $matches = [];
            if (preg_match($pathRegex, $path, $matches)) {
                $controller = new $controllerClass($app);
                $controller->$method(...array_slice($matches, 1));
                return; // No need to check anything else
            }
        }
        // If we reach here the path was not valid
        http_response_code(404);
        view('notFound', ['title' => 'Page Not Found', 'message' => '404: Page Not Found']);
    }
}
