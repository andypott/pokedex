<?php

class PokemonList {

    private $list;

    public function __construct($rawList, $baseURL) {
        $this->prepareList($rawList, $baseURL);
    }

    private function prepareList($list, $baseURL) {
        $this->list = array_map(function($pmon) use ($baseURL) {
            // the urls used will be the same relative path as the api
            // need to be relative to the root, hence the leading /
            $pmon->url = '/' . str_replace($baseURL, '', $pmon->url);
            // names with multiple parts are in the form
            // basculin-red-striped, so replace - with space and capitalise for display
            $pmon->name = ucwords(implode(' ', explode('-', $pmon->name)));
            return $pmon;
        }, $list);
    }

    public function asArray() {
        return $this->list;
    }
}
