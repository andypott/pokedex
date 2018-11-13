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

        $this->assertEquals('/pokemon/1/', $list[1]->url);
        $this->assertEquals('/pokemon/4/', $list[3]->url);
    }

    public function testNamesAreCapitalisedAndSpaced() {

        $list = (new PokemonList(json_decode($this->rawList), $this->baseURL))->asArray();

        $this->assertEquals('Basculin Red Striped', $list[0]->name);
        $this->assertEquals('Bulbasaur', $list[1]->name);
    }

    public function testListIsInAlphabeticalOrder() {

        $list = (new PokemonList(json_decode($this->rawList), $this->baseURL))->asArray();

        $this->assertEquals('Basculin Red Striped', $list[0]->name);
        $this->assertEquals('Bulbasaur', $list[1]->name);
        $this->assertEquals('Charizard', $list[2]->name);
        $this->assertEquals('Charmander', $list[3]->name);
        $this->assertEquals('Charmeleon', $list[4]->name);
        $this->assertEquals('Ivysaur', $list[5]->name);
        $this->assertEquals('Venusaur', $list[6]->name);
    }
}
