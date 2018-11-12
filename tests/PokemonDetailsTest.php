<?php

use PHPUnit\Framework\TestCase;

class PokemonDetailsTest extends TestCase {

    private $details = '
{
    "abilities": [
        {
            "ability": {
                "name": "overcoat",
                "url": "https://pokeapi.co/api/v2/ability/142/"
            },
            "is_hidden": true,
            "slot": 3
        },
        {
            "ability": {
                "name": "anticipation",
                "url": "https://pokeapi.co/api/v2/ability/107/"
            },
            "is_hidden": false,
            "slot": 1
        }
    ],
    "base_experience": 148,
    "forms": [
        {
            "name": "wormadam-plant",
            "url": "https://pokeapi.co/api/v2/pokemon-form/413/"
        }
    ],
    "game_indices": [
        {
            "game_index": 413,
            "version": {
                "name": "white-2",
                "url": "https://pokeapi.co/api/v2/version/22/"
            }
        },
        {
            "game_index": 413,
            "version": {
                "name": "black-2",
                "url": "https://pokeapi.co/api/v2/version/21/"
            }
        },
        {
            "game_index": 413,
            "version": {
                "name": "white",
                "url": "https://pokeapi.co/api/v2/version/18/"
            }
        },
        {
            "game_index": 413,
            "version": {
                "name": "black",
                "url": "https://pokeapi.co/api/v2/version/17/"
            }
        },
        {
            "game_index": 413,
            "version": {
                "name": "soulsilver",
                "url": "https://pokeapi.co/api/v2/version/16/"
            }
        },
        {
            "game_index": 413,
            "version": {
                "name": "heartgold",
                "url": "https://pokeapi.co/api/v2/version/15/"
            }
        },
        {
            "game_index": 413,
            "version": {
                "name": "platinum",
                "url": "https://pokeapi.co/api/v2/version/14/"
            }
        },
        {
            "game_index": 413,
            "version": {
                "name": "pearl",
                "url": "https://pokeapi.co/api/v2/version/13/"
            }
        },
        {
            "game_index": 413,
            "version": {
                "name": "diamond",
                "url": "https://pokeapi.co/api/v2/version/12/"
            }
        }
    ],
    "height": 5,
    "held_items": [
        {
            "item": {
                "name": "silver-powder",
                "url": "https://pokeapi.co/api/v2/item/199/"
            },
            "version_details": [
                {
                    "rarity": 5,
                    "version": {
                        "name": "moon",
                        "url": "https://pokeapi.co/api/v2/version/28/"
                    }
                },
                {
                    "rarity": 5,
                    "version": {
                        "name": "y",
                        "url": "https://pokeapi.co/api/v2/version/24/"
                    }
                },
                {
                    "rarity": 5,
                    "version": {
                        "name": "x",
                        "url": "https://pokeapi.co/api/v2/version/23/"
                    }
                },
                {
                    "rarity": 5,
                    "version": {
                        "name": "white-2",
                        "url": "https://pokeapi.co/api/v2/version/22/"
                    }
                },
                {
                    "rarity": 5,
                    "version": {
                        "name": "black-2",
                        "url": "https://pokeapi.co/api/v2/version/21/"
                    }
                },
                {
                    "rarity": 5,
                    "version": {
                        "name": "white",
                        "url": "https://pokeapi.co/api/v2/version/18/"
                    }
                },
                {
                    "rarity": 5,
                    "version": {
                        "name": "black",
                        "url": "https://pokeapi.co/api/v2/version/17/"
                    }
                },
                {
                    "rarity": 5,
                    "version": {
                        "name": "soulsilver",
                        "url": "https://pokeapi.co/api/v2/version/16/"
                    }
                },
                {
                    "rarity": 5,
                    "version": {
                        "name": "heartgold",
                        "url": "https://pokeapi.co/api/v2/version/15/"
                    }
                },
                {
                    "rarity": 5,
                    "version": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version/14/"
                    }
                },
                {
                    "rarity": 5,
                    "version": {
                        "name": "pearl",
                        "url": "https://pokeapi.co/api/v2/version/13/"
                    }
                },
                {
                    "rarity": 5,
                    "version": {
                        "name": "diamond",
                        "url": "https://pokeapi.co/api/v2/version/12/"
                    }
                }
            ]
        }
    ],
    "id": 413,
    "is_default": true,
    "location_area_encounters": "https://pokeapi.co/api/v2/pokemon/413/encounters",
    "moves": [
        {
            "move": {
                "name": "tackle",
                "url": "https://pokeapi.co/api/v2/move/33/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 1,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 1,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 1,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 1,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 1,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 1,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 1,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 1,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "psybeam",
                "url": "https://pokeapi.co/api/v2/move/60/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 32,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 32,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 32,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 32,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 32,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 32,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 32,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 32,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "hyper-beam",
                "url": "https://pokeapi.co/api/v2/move/63/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "growth",
                "url": "https://pokeapi.co/api/v2/move/74/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 29,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 29,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 29,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 29,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 29,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 29,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 29,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 29,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "razor-leaf",
                "url": "https://pokeapi.co/api/v2/move/75/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 26,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 26,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 26,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 26,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 26,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 26,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 26,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 26,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "solar-beam",
                "url": "https://pokeapi.co/api/v2/move/76/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "string-shot",
                "url": "https://pokeapi.co/api/v2/move/81/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "toxic",
                "url": "https://pokeapi.co/api/v2/move/92/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "confusion",
                "url": "https://pokeapi.co/api/v2/move/93/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 23,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 23,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 23,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 23,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 23,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 23,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 23,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 23,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "psychic",
                "url": "https://pokeapi.co/api/v2/move/94/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 44,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 44,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 44,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 44,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 44,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 44,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 44,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                },
                {
                    "level_learned_at": 44,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "double-team",
                "url": "https://pokeapi.co/api/v2/move/104/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "dream-eater",
                "url": "https://pokeapi.co/api/v2/move/138/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "flash",
                "url": "https://pokeapi.co/api/v2/move/148/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "rest",
                "url": "https://pokeapi.co/api/v2/move/156/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "substitute",
                "url": "https://pokeapi.co/api/v2/move/164/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "thief",
                "url": "https://pokeapi.co/api/v2/move/168/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "snore",
                "url": "https://pokeapi.co/api/v2/move/173/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "flail",
                "url": "https://pokeapi.co/api/v2/move/175/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 38,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 38,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 38,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 38,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 38,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 38,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 38,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 38,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "protect",
                "url": "https://pokeapi.co/api/v2/move/182/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 10,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 1,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 10,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 10,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 10,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 10,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 10,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 10,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                },
                {
                    "level_learned_at": 10,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "giga-drain",
                "url": "https://pokeapi.co/api/v2/move/202/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "endure",
                "url": "https://pokeapi.co/api/v2/move/203/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "swagger",
                "url": "https://pokeapi.co/api/v2/move/207/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "attract",
                "url": "https://pokeapi.co/api/v2/move/213/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 41,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 41,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 41,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 41,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 41,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 41,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 41,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                },
                {
                    "level_learned_at": 41,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "sleep-talk",
                "url": "https://pokeapi.co/api/v2/move/214/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "return",
                "url": "https://pokeapi.co/api/v2/move/216/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "frustration",
                "url": "https://pokeapi.co/api/v2/move/218/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "safeguard",
                "url": "https://pokeapi.co/api/v2/move/219/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "synthesis",
                "url": "https://pokeapi.co/api/v2/move/235/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "hidden-power",
                "url": "https://pokeapi.co/api/v2/move/237/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 20,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 20,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 20,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 20,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 20,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 20,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 20,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                },
                {
                    "level_learned_at": 20,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "rain-dance",
                "url": "https://pokeapi.co/api/v2/move/240/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "sunny-day",
                "url": "https://pokeapi.co/api/v2/move/241/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "psych-up",
                "url": "https://pokeapi.co/api/v2/move/244/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "shadow-ball",
                "url": "https://pokeapi.co/api/v2/move/247/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "uproar",
                "url": "https://pokeapi.co/api/v2/move/253/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "facade",
                "url": "https://pokeapi.co/api/v2/move/263/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "endeavor",
                "url": "https://pokeapi.co/api/v2/move/283/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "skill-swap",
                "url": "https://pokeapi.co/api/v2/move/285/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "secret-power",
                "url": "https://pokeapi.co/api/v2/move/290/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "signal-beam",
                "url": "https://pokeapi.co/api/v2/move/324/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "bullet-seed",
                "url": "https://pokeapi.co/api/v2/move/331/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "natural-gift",
                "url": "https://pokeapi.co/api/v2/move/363/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "worry-seed",
                "url": "https://pokeapi.co/api/v2/move/388/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "sucker-punch",
                "url": "https://pokeapi.co/api/v2/move/389/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 1,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "seed-bomb",
                "url": "https://pokeapi.co/api/v2/move/402/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "bug-buzz",
                "url": "https://pokeapi.co/api/v2/move/405/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 50,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "energy-ball",
                "url": "https://pokeapi.co/api/v2/move/412/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "giga-impact",
                "url": "https://pokeapi.co/api/v2/move/416/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "leaf-storm",
                "url": "https://pokeapi.co/api/v2/move/437/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 47,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 47,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 47,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 47,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 47,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 47,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 47,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 47,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "captivate",
                "url": "https://pokeapi.co/api/v2/move/445/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 35,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 35,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 35,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 35,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 35,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 35,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 35,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                },
                {
                    "level_learned_at": 35,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "grass-knot",
                "url": "https://pokeapi.co/api/v2/move/447/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "diamond-pearl",
                        "url": "https://pokeapi.co/api/v2/version-group/8/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "bug-bite",
                "url": "https://pokeapi.co/api/v2/move/450/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 15,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 1,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 15,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 15,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 15,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 15,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 15,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "heartgold-soulsilver",
                        "url": "https://pokeapi.co/api/v2/version-group/10/"
                    }
                },
                {
                    "level_learned_at": 15,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "platinum",
                        "url": "https://pokeapi.co/api/v2/version-group/9/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "venoshock",
                "url": "https://pokeapi.co/api/v2/move/474/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "quiver-dance",
                "url": "https://pokeapi.co/api/v2/move/483/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 1,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "level-up",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/1/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "round",
                "url": "https://pokeapi.co/api/v2/move/496/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "struggle-bug",
                "url": "https://pokeapi.co/api/v2/move/522/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "black-white",
                        "url": "https://pokeapi.co/api/v2/version-group/11/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "electroweb",
                "url": "https://pokeapi.co/api/v2/move/527/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "tutor",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/3/"
                    },
                    "version_group": {
                        "name": "black-2-white-2",
                        "url": "https://pokeapi.co/api/v2/version-group/14/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "confide",
                "url": "https://pokeapi.co/api/v2/move/590/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                }
            ]
        },
        {
            "move": {
                "name": "infestation",
                "url": "https://pokeapi.co/api/v2/move/611/"
            },
            "version_group_details": [
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "sun-moon",
                        "url": "https://pokeapi.co/api/v2/version-group/17/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "omega-ruby-alpha-sapphire",
                        "url": "https://pokeapi.co/api/v2/version-group/16/"
                    }
                },
                {
                    "level_learned_at": 0,
                    "move_learn_method": {
                        "name": "machine",
                        "url": "https://pokeapi.co/api/v2/move-learn-method/4/"
                    },
                    "version_group": {
                        "name": "x-y",
                        "url": "https://pokeapi.co/api/v2/version-group/15/"
                    }
                }
            ]
        }
    ],
    "name": "wormadam-plant",
    "order": 516,
    "species": {
        "name": "wormadam",
        "url": "https://pokeapi.co/api/v2/pokemon-species/413/"
    },
    "sprites": {
        "back_default": "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/back/413.png",
        "back_female": null,
        "back_shiny": "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/back/shiny/413.png",
        "back_shiny_female": null,
        "front_default": "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/413.png",
        "front_female": null,
        "front_shiny": "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/shiny/413.png",
        "front_shiny_female": null
    },
    "stats": [
        {
            "base_stat": 36,
            "effort": 0,
            "stat": {
                "name": "speed",
                "url": "https://pokeapi.co/api/v2/stat/6/"
            }
        },
        {
            "base_stat": 105,
            "effort": 2,
            "stat": {
                "name": "special-defense",
                "url": "https://pokeapi.co/api/v2/stat/5/"
            }
        },
        {
            "base_stat": 79,
            "effort": 0,
            "stat": {
                "name": "special-attack",
                "url": "https://pokeapi.co/api/v2/stat/4/"
            }
        },
        {
            "base_stat": 85,
            "effort": 0,
            "stat": {
                "name": "defense",
                "url": "https://pokeapi.co/api/v2/stat/3/"
            }
        },
        {
            "base_stat": 59,
            "effort": 0,
            "stat": {
                "name": "attack",
                "url": "https://pokeapi.co/api/v2/stat/2/"
            }
        },
        {
            "base_stat": 60,
            "effort": 0,
            "stat": {
                "name": "hp",
                "url": "https://pokeapi.co/api/v2/stat/1/"
            }
        }
    ],
    "types": [
        {
            "slot": 2,
            "type": {
                "name": "grass",
                "url": "https://pokeapi.co/api/v2/type/12/"
            }
        },
        {
            "slot": 1,
            "type": {
                "name": "bug",
                "url": "https://pokeapi.co/api/v2/type/7/"
            }
        }
    ],
    "weight": 65
}
';

    public function testNameIsCapitalisedAndSpaced() {
        $details = new PokemonDetails(json_decode($this->details));
        $this->assertEquals('Wormadam Plant', $details->name);
    }

    public function testSpeciesIsCapitalised() {
        $details = new PokemonDetails(json_decode($this->details));
        $this->assertEquals('Wormadam', $details->species);
    }

    public function testAbilitiesAreCapitalised() {
        $details = new PokemonDetails(json_decode($this->details));
        $this->assertEquals('Overcoat', $details->abilities[0]);
        $this->assertEquals('Anticipation', $details->abilities[1]);
    }
}
