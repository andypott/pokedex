<?php

class PokeAPI implements Fetcher {

    public function fetch($url) {
        $data = file_get_contents($url);
        if ($data === false) {
            throw new Exception("No data found at $url");
        }

        $data = json_decode($data);
        return $data;
    }
}
