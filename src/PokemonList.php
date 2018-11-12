<?php

class PokemonList {

    private $list;

    public function __construct($rawList, $baseURL) {
        $this->prepareList($rawList, $baseURL);
    }

    private function prepareList($list, $baseURL) {
        $this->list = array_map(function($pmon) use ($baseURL) {
            $pmon->url = '/' . str_replace($baseURL, '', $pmon->url);
            $pmon->name = ucwords(implode(' ', explode('-', $pmon->name)));
            return $pmon;
        }, $list);
    }

    public function asArray() {
        return $this->list;
    }
}
