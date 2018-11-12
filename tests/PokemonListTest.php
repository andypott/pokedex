<?php

use PHPUnit\Framework\TestCase;

class PokemonListTest extends TestCase {
        private $rawList = '[
            {
                "name": "bulbasaur",
                "url": "https://pokeapi.co/api/v2/pokemon/1/"
            },
            {
                "name": "ivysaur",
                "url": "https://pokeapi.co/api/v2/pokemon/2/"
            },
            {
                "name": "venusaur",
                "url": "https://pokeapi.co/api/v2/pokemon/3/"
            },
            {
                "name": "charmander",
                "url": "https://pokeapi.co/api/v2/pokemon/4/"
            },
            {
                "name": "charmeleon",
                "url": "https://pokeapi.co/api/v2/pokemon/5/"
            },
            {
                "name": "charizard",
                "url": "https://pokeapi.co/api/v2/pokemon/6/"
            },
            {
                "name": "basculin-red-striped",
                "url": "https://pokeapi.co/api/v2/pokemon/550/"
            }]';
        private $baseURL = 'https://pokeapi.co/api/v2/';

    public function testUrlsAreAbsolute() {

        $list = (new PokemonList(json_decode($this->rawList), $this->baseURL))->asArray();

        $this->assertEquals('/pokemon/1/', $list[0]->url);
        $this->assertEquals('/pokemon/4/', $list[3]->url);
    }

    public function testNamesAreCapitalisedAndSpaced() {

        $list = (new PokemonList(json_decode($this->rawList), $this->baseURL))->asArray();

        $this->assertEquals('Bulbasaur', $list[0]->name);
        $this->assertEquals('Basculin Red Striped', $list[6]->name);
    }
}
