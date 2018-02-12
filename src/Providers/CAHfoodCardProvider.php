<?php

namespace NoelDavies\CardsAgainstHumanity\Providers;

use Cysha\Casino\Cards\Contracts\CardProvider;

class CAHfoodCardProvider implements CardProvider
{
    const WHITE_CARDS = [
        ["text" => "I\'m Bobby Flay, and if you can\'t stand _, get out of the kitchen!", "pick" => 1],
        ["text" => "It\'s not delivery. It\'s _.", "pick" => 1],
        ["text" => "Aw babe, your burps smell like _!", "pick" => 1],
        ["text" => "Don\'t miss Rachel Ray\'s hit new show, <i>Cooking with _</i>.", "pick" => 1],
        ["text" => "Excuse me, waiter. Could take this back? This soup tastes like _.", "pick" => 1],
        ["text" => "Now on Netflix: <i>Jiro Dreams of _</i>.", "pick" => 1],
    ];

    const BLACK_CARDS = [
        ["text" => "A sobering quantity of chili cheese fries."],
        ["text" => "Going vegetarian and feeling so great all the time."],
        ["text" => "Kale farts."],
        ["text" => "Licking the cake batter off of grandma\'s fingers."],
        ["text" => "Real cheese flavor."],
        ["text" => "Swishing the wine around and sniffing it like a big fancy man."],
        ["text" => "The Dial-A-Slice Apple Divider from Williams-Sonoma."],
        ["text" => "What to do with all of this chocolate on my penis."],
        ["text" => "A belly full of hard-boiled eggs."],
        ["text" => "A joyless vegan patty."],
        ["text" => "A table for one at The Cheesecake Factory."],
        ["text" => "Being emotionally and physically dominated by Gordon Ramsay."],
        ["text" => "Kevin Bacon Bits."],
        ["text" => "Not knowing what to believe anymore about butter."],
        ["text" => "Soup that\'s better than pussy."],
        ["text" => "Sucking down thousands of pounds of krill every day."],
        ["text" => "A Mexican child trapped inside of a burrito."],
        ["text" => "Clamping down on a gazelle\'s jugular and tasting its warm life waters."],
        ["text" => "Committing suicide at the Old Country Buffet."],
        ["text" => "Father\'s forbidden chocolates."],
        ["text" => "Jizz Twinkies."],
        ["text" => "The Hellman\'s Mayonnaise Corporation."],
        ["text" => "The hot dog I put in my vagina ten days ago."],
        ["text" => "The inaudible screams of carrots."],
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