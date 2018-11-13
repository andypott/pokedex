<?php

class Cache implements Fetcher {

    private $api;
    private $timeout;

    // timeout is in seconds
    public function __construct($pokeAPI, $timeout) {
        $this->api = $pokeAPI;
        $this->timeout = $timeout;
    }

    public function fetch($url) {
        $hash = sha1($url);

        $filepath = __DIR__ . '/../cache/' . $hash;

        // If the file exists and is not older than the timeout, return it
        if (file_exists($filepath) && ((time() - filemtime($filepath)) < $this->timeout)) {
            $cachedContents = json_decode(file_get_contents($filepath));
            if ($cachedContents !== false) {
                return $cachedContents;
            }
        }

        $newContents = $this->api->fetch($url);
        file_put_contents($filepath, json_encode($newContents));
        return $newContents;
    }
}
