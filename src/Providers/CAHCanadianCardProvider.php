<?php
namespace NoelDavies\CardsAgainstHumanity\Providers;

use Cysha\Casino\Cards\Contracts\CardProvider;

class CAHCanadianCardProvider implements CardProvider
{
    const WHITE_CARDS = [
        ["text" => "Air Canada guidelines now prohibit _ on airplanes.", "pick" => 1],
["text" => "O Canada, we stand on guard for _.", "pick" => 1],
["text" => "CTV presents _, the story of _.", "pick" => 2],
["text" => "In an attempt to reach a wider audience, the Royal Ontario Museum has opened an interactive exhibit on _.", "pick" => 1],
["text" => "What\'s the Canadian government using to inspire rural students to succeed?", "pick" => 1]
    ];

    const BLACK_CARDS = [
        ["text" => "Poutine."],
["text" => "Newfies."],
["text" => "The Official Languages Act. La Loi sur les langues officielles."],
["text" => "Terry Fox\'s prosthetic leg."],
["text" => "The FLQ."],
["text" => "Canada: America\'s Hat."],
["text" => "Don Cherry\'s wardrobe."],
["text" => "Burning down the White House."],
["text" => "Heritage minutes."],
["text" => "Homo milk."],
["text" => "Naked News."],
["text" => "Mr. Dressup."],
["text" => "Syrupy sex with a maple tree."],
["text" => "Being Canadian."],
["text" => "Snotsicles."],
["text" => "The Famous Five."],
["text" => "Schmirler the Curler."],
["text" => "Stephen Harper."],
["text" => "A Molson muscle."],
["text" => "The Royal Canadian Mounted Police."],
["text" => "An icy handjob from an Edmonton hooker."]
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