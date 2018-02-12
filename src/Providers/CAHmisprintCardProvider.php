<?php

namespace NoelDavies\CardsAgainstHumanity\Providers;

use Cysha\Casino\Cards\Contracts\CardProvider;

class CAHmisprintCardProvider implements CardProvider
{
    const WHITE_CARDS = [
        ["text" => "Daddy, why is Mommy crying?", "pick" => 1],
    ];

    const BLACK_CARDS = [
        ["text" => "A bitch slap."],
        ["text" => "One trillion dollars."],
        ["text" => "Chunks of dead prostitute."],
        ["text" => "The entire Mormon Tabernacle Choir."],
        ["text" => "The female orgasm."],
        ["text" => "Extremely tight pants."],
        ["text" => "The Boy Scouts of America."],
        ["text" => "Stormtroopers."],
        ["text" => "Throwing a virgin into a volcano."],
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