<?php

namespace NoelDavies\CardsAgainstHumanity\Providers;

use Cysha\Casino\Cards\Contracts\CardProvider;

class CAHCAHe4CardProvider implements CardProvider
{
    const WHITE_CARDS = [
        ["text" => "Man, this is bullshit. Fuck _.", "pick" => 1],
        [
            "text" => "Dear Leader Kim Jong-un,<br>our village praises your infinite wisdom with a humble offering of _.",
            "pick" => 1,
        ],
        ["text" => "_ may pass, but _ will last forever.", "pick" => 2],
        ["text" => "She\'s up all night for good fun.<br>I\'m up all night for _.", "pick" => 1],
        [
            "text" => "Alright, bros. Our frat house is condemned, and all the hot slampieces are over at Gamma Phi. The time has come to commence Operation _.",
            "pick" => 1,
        ],
        ["text" => "The Japanese have developed a smaller, more efficient version of _.", "pick" => 1],
        ["text" => "In return for my soul, the Devil promised me _, but all I got was _.", "pick" => 2],
        [
            "text" => "You guys, I saw this crazy movie last night. It opens on _, and then there\'s some stuff about _, and then it ends with _.",
            "pick" => 3,
        ],
        ["text" => "_ will never be the same after _.", "pick" => 2],
        [
            "text" => "Wes Anderson\'s new film tells the story of a precocious child coming to terms with _.",
            "pick" => 1,
        ],
        ["text" => "In the beginning, there was _.<br>And the Lord said, \"Let there be _.\"", "pick" => 2],
        ["text" => "What\'s fun until it gets weird?", "pick" => 1],
        ["text" => "We never did find _, but along the way we sure learned a lot about _.", "pick" => 2],
        [
            "text" => "You\'ve seen the bearded lady!<br>You\'ve seen the ring of fire!<br>Now, ladies and gentlemen, feast your eyes upon _!",
            "pick" => 1,
        ],
        ["text" => "How am I compensating for my tiny penis?", "pick" => 1],
        ["text" => "I\'m sorry, sir, but we don\'t allow _ at the country club.", "pick" => 1],
        [
            "text" => "2 AM in the city that never sleeps. The door swings open and <i>she</i> walks in, legs up to here. Something in her eyes tells me she\'s looking for _.",
            "pick" => 1,
        ],
        ["text" => "As king, how will I keep the peasants in line?", "pick" => 1],
        ["text" => "Oprah\'s book of the month is \"_ For _: A Story of Hope.\"", "pick" => 2],
        ["text" => "Do <i>not</i> fuck with me! I am literally _ right now.", "pick" => 1],
        ["text" => "Adventure.<br>Romance.<br>_.<br><br>From Paramount Pictures, \"_.\"", "pick" => 2],
        ["text" => "I am become _, destroyer of _!", "pick" => 2],
        ["text" => "It lurks in the night. It hungers for flesh. This summer, no one is safe from _.", "pick" => 1],
        ["text" => "If you can\'t handle _, you\'d better stay away from _.", "pick" => 2],
        ["text" => "This is the prime of my life. I\'m young, hot, and full of _.", "pick" => 1],
        ["text" => "I\'m pretty sure I\'m high right now, because I\'m absolutely mesmerized by _.", "pick" => 1],
        ["text" => "This year\'s hottest album is \"_\" by _.", "pick" => 2],
        ["text" => "Every step towards _ gets me a little closer to _.", "pick" => 2],
        ["text" => "Forget everything you know about _, because now we\'ve supercharged it with _!", "pick" => 2],
        ["text" => "Honey, I have a new role-play I want to try tonight! You can be _, and I\'ll be _.", "pick" => 2],
    ];

    const BLACK_CARDS = [
        ["text" => "Crazy opium eyes."],
        ["text" => "10 Incredible Facts About the Anus."],
        ["text" => "An interracial handshake."],
        ["text" => "Moderate-to-severe joint pain."],
        ["text" => "Finally finishing off the Indians."],
        ["text" => "Sugar madness."],
        ["text" => "Actual mutants with medical conditions and no superpowers."],
        ["text" => "The secret formula for ultimate female satisfaction."],
        ["text" => "The complex geopolitical quagmire that is the Middle East."],
        ["text" => "Fucking a corpse back to life."],
        ["text" => "Neil Diamond\'s Greatest Hits."],
        ["text" => "Calculating every mannerism so as not to suggest homosexuality."],
        ["text" => "Whatever a McRib&reg; is made of."],
        ["text" => "No clothes on, penis in vagina."],
        ["text" => "All the single ladies."],
        ["text" => "Whispering all sexy."],
        ["text" => "How awesome I am."],
        ["text" => "Ass to mouth."],
        ["text" => "Smoking crack, for instance."],
        ["text" => "Falling into the toilet."],
        ["text" => "A dance move that\'s just sex."],
        ["text" => "The size of my penis."],
        ["text" => "Some sort of Asian."],
        ["text" => "A hopeless amount of spiders."],
        ["text" => "Party Mexicans."],
        ["text" => "Drinking responsibly."],
        ["text" => "The safe word."],
        ["text" => "Angelheaded hipsters burning for the ancient heavenly connection to the starry dynamo in the machinery of night."],
        ["text" => "Bouncing up and down."],
        ["text" => "Jizz."],
        ["text" => "Ambiguous sarcasm."],
        ["text" => "A shiny rock that proves I love you."],
        ["text" => "Dem titties."],
        ["text" => "My worthless son."],
        ["text" => "Exploding pigeons."],
        ["text" => "A Ugandan warlord."],
        ["text" => "My sex dungeon."],
        ["text" => "A kiss on the lips."],
        ["text" => "Child Protective Services."],
        ["text" => "A Native American who solves crimes by going into the spirit world."],
        ["text" => "Doo-doo."],
        ["text" => "The peaceful and nonthreatening rise of China."],
        ["text" => "Sports."],
        ["text" => "A fart."],
        ["text" => "Unquestioning obedience."],
        ["text" => "Three consecutive seconds of happiness."],
        ["text" => "Grammar nazis who are also regular Nazis."],
        ["text" => "Snorting coke off a clown\'s boner."],
        ["text" => "Africa."],
        ["text" => "Depression."],
        ["text" => "A horse with no legs."],
        ["text" => "The euphoric rush of strangling a drifter."],
        ["text" => "Khakis."],
        ["text" => "Interspecies marriage."],
        ["text" => "A gender identity that can only be conveyed through slam poetry."],
        ["text" => "Almost giving money to a homeless person."],
        ["text" => "Stuff a child\'s face with Fun Dip&reg; until he starts having fun."],
        ["text" => "What Jesus would do."],
        ["text" => "A for-real lizard that spits blood from its eyes."],
        ["text" => "Blackula."],
        ["text" => "The tiniest shred of evidence that God is real."],
        ["text" => "My dad\'s dumb fucking face."],
        ["text" => "Prince Ali,<br>fabulous he,<br>Ali Ababwa."],
        ["text" => "A manhole."],
        ["text" => "A sex goblin with a carnival penis."],
        ["text" => "A bunch of idiots playing a card game instead of interacting like normal humans."],
        ["text" => "A sex comet from Neptune that plunges the Earth into eternal sexiness."],
        ["text" => "Sharks with legs."],
        ["text" => "Injecting speed into one arm and horse tranquilizer into the other."],
        ["text" => "Lots and lots of abortions."],
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