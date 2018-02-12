<?php
namespace NoelDavies\CardsAgainstHumanity\Providers;

use Cysha\Casino\Cards\Contracts\CardProvider;

class CAHPAXEP2014CardProvider implements CardProvider
{
    const WHITE_CARDS = [
        ["text" => "Let me tell you about my new startup. It\'s basically _, but for _.", "pick" => 2],
["text" => "_ was totally worth the trauma.", "pick" => 1]
    ];

    const BLACK_CARDS = [
        ["text" => "Hodor."],
["text" => "Exciting content!"],
["text" => "Rubbing chocolate pudding all over Bill Cosby\'s nipples."],
["text" => "What The Rock was really cooking."],
["text" => "Stepping on a god damn friggin\' LEGO."],
["text" => "All this liquid in my mouth."],
["text" => "Giving a dolphin a handjob for science."],
["text" => "A floor that is literally made of lava."]
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