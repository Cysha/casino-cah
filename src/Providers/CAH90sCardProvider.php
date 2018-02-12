<?php

namespace NoelDavies\CardsAgainstHumanity\Providers;

use Cysha\Casino\Cards\Contracts\CardProvider;

class CAH90sCardProvider implements CardProvider
{
    const WHITE_CARDS = [
        ["text" => "Siskel and Ebert have panned _ as \"poorly conceived\" and \"sloppily executed.\"", "pick" => 1],
        ["text" => "Up next on Nickelodeon: \"Clarissa Explains _.\"", "pick" => 1],
        ["text" => "Believe it or not, Jim Carrey can do a dead-on impression of _.", "pick" => 1],
        ["text" => "It\'s Morphin\' Time! Mastadon! Pterodactyl! Triceratops! Sabertooth Tiger! _!", "pick" => 1],
        ["text" => "I\'m a bitch, I\'m a lover, I\'m a child, I\'m _.", "pick" => 1],
        ["text" => "How did Stella get her groove back?", "pick" => 1],
        ["text" => "Tonight on SNICK: \"Are You Afraid of _?\"", "pick" => 1],
    ];

    const BLACK_CARDS = [
        ["text" => "Several Michael Keatons."],
        ["text" => "A bus that will explode if it goes under 50 miles per hour."],
        ["text" => "Sucking the President\'s dick."],
        ["text" => "Sunny D! Alright!"],
        ["text" => "A mulatto, an albino, a mosquito, and my libido."],
        ["text" => "Log&trade;."],
        ["text" => "Jerking off to a 10-second RealMedia clip."],
        ["text" => "The Y2K bug."],
        ["text" => "Deregulating the mortgage market."],
        ["text" => "Stabbing the shit out of a Capri Sun."],
        ["text" => "Wearing Nicolas Cage\'s face."],
        ["text" => "Freeing Willy."],
        ["text" => "Kurt Cobain\'s death."],
        ["text" => "The Great Cornholio."],
        ["text" => "Liking big butts and not being able to lie about it."],
        ["text" => "Yelling \"girl power!\" and doing a high kick."],
        ["text" => "Pure Moods, Vol. 1."],
        ["text" => "Pizza in the morning, pizza in the evening, pizza at supper time."],
        ["text" => "Pamela Anderson\'s boobs running in slow motion."],
        ["text" => "Getting caught up in the CROSSFIRE&trade;."],
        ["text" => "Angels interfering in an otherwise fair baseball game."],
        ["text" => "Cool 90s up-in-the-front hair."],
        ["text" => "Patti Mayonnaise."],
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