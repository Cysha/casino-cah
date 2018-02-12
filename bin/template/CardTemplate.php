<?php
namespace NoelDavies\CardsAgainstHumanity\Providers;

use Cysha\Casino\Cards\Contracts\CardProvider;

class CAH{NAME}CardProvider implements CardProvider
{
    const WHITE_CARDS = [
        {WHITE_CARD_NAMES}
    ];

    const BLACK_CARDS = [
        {BLACK_CARD_NAMES}
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