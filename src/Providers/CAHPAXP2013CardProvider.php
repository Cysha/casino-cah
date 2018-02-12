<?php
namespace NoelDavies\CardsAgainstHumanity\Providers;

use Cysha\Casino\Cards\Contracts\CardProvider;

class CAHPAXP2013CardProvider implements CardProvider
{
    const WHITE_CARDS = [
        ["text" => "The most controversial game at PAX this year is an 8-bit indie platformer about _.", "pick" => 1],
["text" => "What made Spock cry?", "pick" => 1],
["text" => "In the new DLC for Mass Effect, Shepard must save the galaxy from _.", "pick" => 1],
["text" => "No Enforcer wants to manage the panel on _.", "pick" => 1],
["text" => "_: Achievement unlocked.", "pick" => 1],
["text" => "There was a riot at the Gearbox panel when they gave the attendees _.", "pick" => 1],
["text" => "What\'s the latest bullshit that\'s troubling this quaint fantasy town?", "pick" => 1]
    ];

    const BLACK_CARDS = [
        ["text" => "Full HD."],
["text" => "The gravity gun."],
["text" => "Reading the comments."],
["text" => "70,000 gamers sweating and farting inside an airtight steel dome."],
["text" => "The Cock Ring of Alacrity."],
["text" => "Yoshi\'s huge egg-laying cloaca."],
["text" => "A homemade, cum-stained Star Trek uniform."],
["text" => "Offering sexual favors for an ore and a sheep."],
["text" => "Mario Kart rage."],
["text" => "Bowser\'s aching heart."],
["text" => "An angry stone head that stomps on the floor every three seconds."],
["text" => "Nude-modding Super Mario World."],
["text" => "Temporary invincibility."],
["text" => "Being an attractive elf trapped in an unattractive human\'s body."],
["text" => "Filling every pouch of a UtiliKilt&trade; with pizza."],
["text" => "The Sarlacc."],
["text" => "Achieving the manual dexterity and tactical brilliance of a 12-year-old Korean boy."],
["text" => "Allowing nacho cheese to curdle in your beard while you creep in League of Legends."],
["text" => "The collective wail of every Magic player suddenly realizing that they\'ve spent hundreds of dollars on pieces of cardboard."],
["text" => "Rolling a D20 to save a failing marriage."],
["text" => "Legendary Creature &ndash; Robert Khoo."],
["text" => "Winning the approval of Cooking Mama that you never got from actual mama."],
["text" => "Never watching, discussing, or thinking about My Little Pony."],
["text" => "Turn-of-the-century sky racists."],
["text" => "Unlocking a new sex position."],
["text" => "The boner hatch in the Iron Man suit."],
["text" => "Buying virtual clothes for a Sim family instead of real clothes for a real family."],
["text" => "Google Glass + e-cigarette: Ultimate Combo!"],
["text" => "The decade of legal inquests following a single hour of Grand Theft Auto."],
["text" => "A fully-dressed female videogame character."],
["text" => "Getting into a situation with an owlbear."],
["text" => "Charles Barkley Shut Up and Jam!"],
["text" => "Tapping Sara Angel."],
["text" => "Eating a pizza that\'s lying on the street to gain health."],
["text" => "SNES cartridge cleaning fluid."],
["text" => "A madman who lives in a policebox and kidnaps women."],
["text" => "Grand Theft Auto: Fort Lauderdale."]
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