<?php
namespace NoelDavies\CardsAgainstHumanity\Providers;

use Cysha\Casino\Cards\Contracts\CardProvider;

class CAHHOCAHCardProvider implements CardProvider
{
    const WHITE_CARDS = [
        ["text" => "A wise man said, \"Everything is about sex. Except sex. Sex is about _.\"", "pick" => 1],
["text" => "Our relationship is strictly professional. Let\'s not complicate things with _.", "pick" => 1],
["text" => "Corruption. Betrayal. _. Coming soon to Netflix, \"House of _.\"", "pick" => 2],
["text" => "Because you enjoyed _, we thought you\'d like _.", "pick" => 2],
["text" => "I can\'t believe Netflix is using _ to promote House of Cards.", "pick" => 1],
["text" => "We\'re not like other news organizations. Here at Slugline, we welcome _ in the office. ", "pick" => 1],
["text" => "I\'m not going to lie. I despise _. There, I said it.", "pick" => 1],
["text" => "Cancel all my meetings. We\'ve got a situation with _ that requires my immediate attention.", "pick" => 1],
["text" => "If you need him to, Remy Danton can pull some strings and get you _, but it\'ll cost you.", "pick" => 1]
    ];

    const BLACK_CARDS = [
        ["text" => "An older man."],
["text" => "Forcing a handjob on a dying man. "],
["text" => "A homoerotic subplot."],
["text" => "An origami swan that\'s some kind of symbol?"],
["text" => "25 shitty jokes about House of Cards."],
["text" => "My constituents."],
["text" => "Punching a congressman in the face."],
["text" => "Strangling a dog to make a point to the audience."],
["text" => "A childless marriage."],
["text" => "A much younger woman."],
["text" => "Getting eaten out while on the phone with Dad."],
["text" => "Making it look like a suicide."],
["text" => "Carbon monoxide poisoning. "],
["text" => "Discharging a firearm in a residential area."],
["text" => "Ribs so good they transcend race and class."],
["text" => "The sensitive European photographer who\'s fucking my wife."]
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