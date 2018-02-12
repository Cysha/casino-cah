<?php

namespace NoelDavies\CardsAgainstHumanity\Providers;

use Cysha\Casino\Cards\Contracts\CardProvider;

class CAHtrumpbagCardProvider implements CardProvider
{
    const WHITE_CARDS = [
        ["text" => "Donald Trump has nominated _ for his VP.", "pick" => 1],
        ["text" => "In 2019, Donald Trump eliminated our national parks to make room for _.", "pick" => 1],
        ["text" => "Donald Trump\'s first act as president was to outlaw _.", "pick" => 1],
    ];

    const BLACK_CARDS = [
        ["text" => "A legitimate reason to commit suicide."],
        ["text" => "A back-alley abortion from a Mexican cyborg doctor."],
        ["text" => "Whipping lower-class white men into a xenophobic frenzy."],
        ["text" => "Rage."],
        ["text" => "Trying to remember what music was."],
        ["text" => "Roaming through a wasteland of windblown trash and deserted highways."],
        ["text" => "Bringing millions of dangerous low-paying manufacturing jobs back to America."],
        ["text" => "A gnawing sense of dread."],
        ["text" => "Drinking urine to survive."],
        ["text" => "Nuclear winter."],
        ["text" => "President Donald Trump."],
        ["text" => "Casual dismissiveness."],
        ["text" => "Extra rations for my little girl."],
        ["text" => "World Wars 3 through 5."],
        ["text" => "Finding out that democracy might not be such a great idea."],
        ["text" => "Mild amusement."],
        ["text" => "Burying my only son."],
        ["text" => "The purging of the disloyal."],
        ["text" => "Trying to wake up from this nightmare."],
        ["text" => "A father and son fighting each other over the last scrap of bread."],
        ["text" => "Making Islam illegal."],
        ["text" => "Desperately hurling insults at Donald Trump as he absorbs them into his rapidly expanding body."],
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