<?php

namespace NoelDavies\CardsAgainstHumanity\Providers;

use Cysha\Casino\Cards\Contracts\CardProvider;

class CAHxmas2012CardProvider implements CardProvider
{
    const WHITE_CARDS = [
        ["text" => "After blacking out during New Year\'s Eve, I was awoken by _.", "pick" => 1],
        ["text" => "This holiday season, Tim Allen must overcome his fear of _ to save Christmas.", "pick" => 1],
        ["text" => "Jesus is _.", "pick" => 1],
        ["text" => "Every Christmas, my uncle gets drunk and tells the story about _.", "pick" => 1],
        ["text" => "What keeps me warm during the cold, cold winter?", "pick" => 1],
        [
            "text" => "On the third day of Christmas, my true love gave to me: three French hens, two turtle doves, and _.",
            "pick" => 1,
        ],
        ["text" => "Wake up, America. Christmas is under attack by secular liberals and their _.", "pick" => 1],
    ];

    const BLACK_CARDS = [
        ["text" => "Santa\'s heavy sack."],
        ["text" => "Clearing a bloody path through Walmart with a scimitar."],
        ["text" => "Another shitty year."],
        ["text" => "Whatever Kwanzaa is supposed to be about."],
        ["text" => "A Christmas stocking full of coleslaw."],
        ["text" => "Elf cum."],
        ["text" => "The tiny, calloused hands of the Chinese children that made this card."],
        ["text" => "Taking down Santa with a surface-to-air missle."],
        ["text" => "Several intertwining love stories featuring Hugh Grant."],
        ["text" => "Mall Santa."],
        ["text" => "My hot cousin."],
        ["text" => "The Star Wars Holiday Special."],
        ["text" => "Krampus, the Austrian Christmas monster."],
        ["text" => "Pretending to be happy."],
        ["text" => "Socks. "],
        ["text" => "Eating an entire snowman."],
        ["text" => "A toxic family environment."],
        ["text" => "A visually arresting turtleneck."],
        ["text" => "Fucking up \"Silent Night\" in front of 300 parents."],
        ["text" => "Immaculate conception."],
        ["text" => "Space Jam on VHS."],
        ["text" => "Gift-wrapping a live hamster."],
        ["text" => "A Hungry-Man&trade; Frozen Christmas Dinner for One."],
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