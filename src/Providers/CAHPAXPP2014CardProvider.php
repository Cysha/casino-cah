<?php

namespace NoelDavies\CardsAgainstHumanity\Providers;

use Cysha\Casino\Cards\Contracts\CardProvider;

class CAHPAXPP2014CardProvider implements CardProvider
{
    const WHITE_CARDS = [
        ["text" => "Buzzfeed presents: 10 pictures of _ that look like _.", "pick" => 2],
        ["text" => "During my first game of D&amp;D, I accidentally summoned _.", "pick" => 1],
        ["text" => "Bob Ross\'s little-known first show was called &quot;The Joy of _.&quot;", "pick" => 1],
        ["text" => "Like _, State Farm is there.", "pick" => 1],
        ["text" => "The Discovery Channel presents: _ week.", "pick" => 1],
    ];

    const BLACK_CARDS = [
        ["text" => "A neck beard that is 10% cheese."],
        ["text" => "Pelvic sorcery."],
        ["text" => "Pooping as quietly as possible."],
        ["text" => "The beautiful sport of Turkish oil wrestling."],
        ["text" => "No survivors."],
        ["text" => "Go Fuck Yourself."],
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