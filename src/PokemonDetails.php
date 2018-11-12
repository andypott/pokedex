<?php

class PokemonDetails {
    public $name;
    public $species;
    public $height;
    public $weight;
    public $img;
    public $abilities;

    public function __construct($details) {
        $this->addName($details);
        $this->addSpecies($details);
        $this->addHeight($details);
        $this->addWeight($details);
        $this->addImg($details);
        $this->addAbilities($details);
    }

    private function addName($details) {
        $this->name = ucwords(implode(' ', explode('-', $details->name)));
    }

    private function addSpecies($details) {
        $this->species = ucwords(implode(' ', explode('-', $details->species->name)));
    }

    private function addHeight($details) {
        $this->height = $details->height;
    }

    private function addWeight($details) {
        $this->weight = $details->weight;
    }

    private function addImg($details) {
        $this->img = $details->sprites->front_default;
    }

    private function addAbilities($details) {
        $this->abilities = array_map(function($ability) {
            return ucfirst($ability->ability->name);
        }, $details->abilities);
    }
}
