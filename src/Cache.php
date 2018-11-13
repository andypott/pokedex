<?php

class Cache {

    private $api;
    private $timeout;

    // timeout is in seconds
    public function __construct($pokeAPI, $timeout) {
        $this->api = $pokeAPI;
        $this->timeout = $timeout;
    }

    private function fetch($url, $method, $args) {
        $hash = sha1($url);

        $filepath = __DIR__ . '/../cache/' . $hash;

        // If the file exists and is not older than the timeout, return it
        if (file_exists($filepath) && ((time() - filemtime($filepath)) < $this->timeout)) {
            $cachedContents = json_decode(file_get_contents($filepath));
            if ($cachedContents !== false) {
                return $cachedContents;
            }
        }

        $newContents = call_user_func_array(array($this->api, $method), $args);
        file_put_contents($filepath, json_encode($newContents));
        return $newContents;
    }


    public function allPokemonList() {
        $url = $this->api->getBaseURL() . 'pokemon';
        return $this->fetch($url, 'allPokemonList', []);
    }

    public function getBaseURL() {
        return $this->api->getBaseURL();
    }

    public function singlePokemonDetails($id) {
        $url = $this->api->getBaseURL() . 'pokemon/' . $id;
        return $this->fetch($url, 'singlePokemonDetails', [$id]);
    }
}
