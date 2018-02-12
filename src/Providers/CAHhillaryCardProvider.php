<?php

namespace NoelDavies\CardsAgainstHumanity\Providers;

use Cysha\Casino\Cards\Contracts\CardProvider;

class CAHhillaryCardProvider implements CardProvider
{
    const WHITE_CARDS = [
        ["text" => "As reparations for slavery, all African Americans will receive _.", "pick" => 1],
        ["text" => "When you go to the polls on Tuesday, remember:  a vote for me is a vote for _.", "pick" => 1],
        ["text" => "Senator, I trust you enjoyed _ last night.  Now, can I count on your vote?", "pick" => 1],
    ];

    const BLACK_CARDS = [
        ["text" => "The Bernie Sanders revolution."],
        ["text" => "Letting Bernie Sanders rest his world-weary head on your lap."],
        ["text" => "A beautiful, ever-expanding circle of inclusivity that will never include Republicans."],
        ["text" => "Black lives mattering."],
        ["text" => "Donald Trump holding his nose while he eats pussy."],
        ["text" => "The fact that Hillary Clinton is a woman."],
        ["text" => "Kicking the middle class in the balls with a regressive tax code."],
        ["text" => "Keeping the government out of my vagina."],
        ["text" => "The systematic disenfranchisement of black voters."],
        ["text" => "Increasing economic and political polarization"],
        ["text" => "Eating the president\'s pussy."],
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