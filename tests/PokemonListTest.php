<?php

use PHPUnit\Framework\TestCase;

class PokemonListTest extends TestCase {

    public function testUrlsAreAbsolute() {
        $rawList = json_decode('[
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
        }]');
        $baseURL = "https://pokeapi.co/api/v2/";

        $list = (new PokemonList($rawList, $baseURL))->asArray();

        $this->assertEquals('/pokemon/1/', $list[0]->url);
        $this->assertEquals('/pokemon/4/', $list[3]->url);
    }
}
