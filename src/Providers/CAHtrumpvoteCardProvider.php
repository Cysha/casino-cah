<?php
namespace NoelDavies\CardsAgainstHumanity\Providers;

use Cysha\Casino\Cards\Contracts\CardProvider;

class CAHtrumpvoteCardProvider implements CardProvider
{
    const WHITE_CARDS = [
        ["text" => "Trump\'s great!  Trump\'s got _.  I love that.", "pick" => 1],
["text" => "According to Arizona\'s stand-your-ground law, you\'re allowed to shoot someone if they\'re _.", "pick" => 1],
["text" => "It\'s 3AM.  The red phone rings.  It\'s _.  Who do you want answering?", "pick" => 1]
    ];

    const BLACK_CARDS = [
        ["text" => "Actually voting for Donald Trump to be President of the actual United States."],
["text" => "A liberal bias."],
["text" => "Hating Hillary Clinton."],
["text" => "Growing up and becoming a Republican."],
["text" => "Courageously going ahead with that racist comment."],
["text" => "Dispelling this fiction that Barack Obama doesn\'t know what he\'s doing."],
["text" => "Jeb!"],
["text" => "The good, hardworking people of Dubuque, Iowa."],
["text" => "Conservative talking points."],
["text" => "Shouting the loudest"],
["text" => "Sound of fiscal policy."],
["text" => "Full-on socialism."]
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