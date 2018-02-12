<?php
namespace NoelDavies\CardsAgainstHumanity\Providers;

use Cysha\Casino\Cards\Contracts\CardProvider;

class CAHreject2CardProvider implements CardProvider
{
    const WHITE_CARDS = [
        ["text" => "Astronomers have discovered that the universe consists of 5% ordinary matter, 25% dark matter, and 70% _.", "pick" => 1],
["text" => "BowWOW! is the first pet hotel in LA that offers _ for dogs.", "pick" => 1],
["text" => "Hey, whatever happened to Renee Zellweger?", "pick" => 1],
["text" => "Housekeeping! You want _?", "pick" => 1],
["text" => "In bourgeois society, capital is independent and has individuality, while the living person is _.", "pick" => 1],
["text" => "Some men aren\'t looking for anything logical, like money. They can\'t be bought, bullied, reasoned or negotiated with. Some men just want _.", "pick" => 1],
["text" => "What\'s wrong with these gorillas?", "pick" => 1],
["text" => "Why did the chicken cross the road?", "pick" => 1],
["text" => "You say tomato, I say _.", "pick" => 1],
["text" => "America is hungry. America needs _.", "pick" => 1]
    ];

    const BLACK_CARDS = [
        ["text" => "A dick so big and so black that not even light can escape its pull."],
["text" => "A double murder suicide barbeque."],
["text" => "A primordial soup and salad bar."],
["text" => "A stack of bunnies in a trenchcoat."],
["text" => "At least three ducks."],
["text" => "Becoming engorged with social justice jelly and secreting a thinkpiece."],
["text" => "Being the absolute worst."],
["text" => "Disco Mussolini."],
["text" => "Greg Kinnear\'s terrible lightning breath."],
["text" => "Mitt Romney\'s eight sons Kip, Sam, Trot, Fergis, Toolshed, Grisham, Hawkeye, and Thorp."],
["text" => "Mr. and Mrs. Tambourine Man\'s jingle-jangle morning sex."],
["text" => "Mushy tushy."],
["text" => "Ringo Starr & His All-Starr Band."],
["text" => "Sandwich."],
["text" => "Saving the Rainforest Cafe."],
["text" => "Sir Thomas More\'s Fruitopia&trade;."],
["text" => "Sweating it out on the streets of a runaway American Dream."],
["text" => "That one leftover screw."],
["text" => "That thing politicians do with their thumbs when they talk."],
["text" => "The spooky skeleton under my skin."],
["text" => "The token lesbian."],
["text" => "These dolphins."],
["text" => "Three hairs from the silver-golden head of Galadriel."],
["text" => "Water so cold it turned into a rock."]
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