<?php

use PHPUnit\Framework\TestCase;

class SearcherTest extends TestCase {
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

    public function testAllMatchedItemsAreReturned () {
        $list = (new PokemonList(json_decode($this->rawList), $this->baseURL))->asArray();
        $expectedRawList = json_decode('[
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
        $expected = (new PokemonList($expectedRawList, $this->baseURL))->asArray();

        $searcher = new Searcher($list);
        $result = $searcher->search('char');

        $this->assertEquals($expected, $result);
    }

    public function testCaseDoesNotMatter () {
        $list = (new PokemonList(json_decode($this->rawList), $this->baseURL))->asArray();
        $expectedRawList = json_decode('[
            {
                "name": "charmander",
                "url": "https://pokeapi.co/api/v2/pokemon/4/"
            }]');
        $expected = (new PokemonList($expectedRawList, $this->baseURL))->asArray();

        $searcher = new Searcher($list);
        $result = $searcher->search('CharManDeR');

        $this->assertEquals($expected, $result);
    }

    public function testLeadingAndTrailingWhitespaceIsIgnored () {
        $list = (new PokemonList(json_decode($this->rawList), $this->baseURL))->asArray();
        $expectedRawList = json_decode('[
            {
                "name": "charmander",
                "url": "https://pokeapi.co/api/v2/pokemon/4/"
            }]');
        $expected = (new PokemonList($expectedRawList, $this->baseURL))->asArray();

        $searcher = new Searcher($list);
        $result = $searcher->search('   charmander     ');

        $this->assertEquals($expected, $result);
    }
}
