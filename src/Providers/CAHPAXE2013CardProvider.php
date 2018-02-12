<?php

namespace NoelDavies\CardsAgainstHumanity\Providers;

use Cysha\Casino\Cards\Contracts\CardProvider;

class CAHPAXE2013CardProvider implements CardProvider
{
    const WHITE_CARDS = [
        ["text" => "You have been waylaid by _ and must defend yourself.", "pick" => 1],
        ["text" => "I have an idea even better than Kickstarter, and it\'s called _starter.", "pick" => 1],
        [
            "text" => "Action stations! Action stations! Set condition one throughout the fleet and brace for _!",
            "pick" => 1,
        ],
        [
            "text" => "In the final round of this year\'s Omegathon, Omeganauts must face off in a game of _.",
            "pick" => 1,
        ],
        ["text" => "Press &uarr; &darr; &larr; &rarr; B to unleash _.", "pick" => 1],
        [
            "text" => "I don\'t know exactly how I got the PAX plague, but I suspect it had something to do with _.",
            "pick" => 1,
        ],
    ];

    const BLACK_CARDS = [
        ["text" => "Paying the iron price."],
        ["text" => "Jiggle physics."],
        ["text" => "Rotating shapes in mid-air so that they fit into other shapes when they fall."],
        ["text" => "Firefly: Season 2."],
        ["text" => "Getting bitch slapped by Dhalsim."],
        ["text" => "Casting Magic Missile at a bully."],
        ["text" => "Running out of stamina."],
        ["text" => "An immediately regrettable $9 hot dog from the Boston Convention Center."],
        ["text" => "The rocket launcher."],
        ["text" => "Sharpening a foam broadsword on a foam whetstone."],
        ["text" => "Loading from a previous save."],
        ["text" => "The depression that ensues after catching \'em all."],
        ["text" => "Violating the First Law of Robotics."],
        ["text" => "Getting inside the Horadric Cube with a hot babe and pressing the transmute button."],
        ["text" => "Punching a tree to gather wood."],
        ["text" => "Spending the year\'s insulin budget on Warhammer 40k figurines."],
        ["text" => "Forgetting to eat, and consequently dying."],
        ["text" => "Wil Wheaton crashing an actual spaceship."],
        ["text" => "The Klobb."],
        ["text" => "Charging up all the way."],
        ["text" => "Vespene gas."],
        ["text" => "Judging elves by the color of their skin and not by the content of their character."],
        ["text" => "Smashing all the pottery in a Pottery Barn in search of rupees."],
        ["text" => "Achieving 500 actions per minute."],
    ];

    /**
     * Provides the cards for a deck.
     *
     * @return array an array of cards
     */
    public function getCards()
    {
        return [
            'WHITE' => self::WHITE_CARDS,
            'BLACK' => self::BLACK_CARDS,
        ];
    }
}