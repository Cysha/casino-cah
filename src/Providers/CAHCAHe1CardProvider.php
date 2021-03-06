<?php

namespace NoelDavies\CardsAgainstHumanity\Providers;

use Cysha\Casino\Cards\Contracts\CardProvider;

class CAHCAHe1CardProvider implements CardProvider
{
    const WHITE_CARDS = [
        ["text" => "What brought the orgy to a grinding halt?", "pick" => 1],
        ["text" => "When I pooped, what came out of my butt?", "pick" => 1],
        [
            "text" => "In the distant future, historians will agree that _ marked the beginning of America\'s decline.",
            "pick" => 1,
        ],
        ["text" => "What\'s the gift that keeps on giving?", "pick" => 1],
        [
            "text" => "This season on Man vs. Wild, Bear Grylls must survive in the depths of the Amazon with only _ and his wits.",
            "pick" => 1,
        ],
        ["text" => "Michael Bay\'s new three-hour action epic pits _ against _.", "pick" => 2],
        ["text" => "And I would have gotten away with it, too, if it hadn\'t been for _!", "pick" => 1],
        ["text" => "In a pinch, _ can be a suitable substitute for _.", "pick" => 2],
        ["text" => "What has been making life difficult at the nudist colony?", "pick" => 1],
        ["text" => "Science will never explain the origin of _.", "pick" => 1],
        ["text" => "In Rome, there are whisperings that the Vatican has a secret room devoted to _.", "pick" => 1],
        ["text" => "I learned the hard way that you can\'t cheer up a grieving friend with _.", "pick" => 1],
        ["text" => "When all else fails, I can always masturbate to _.", "pick" => 1],
        ["text" => "An international tribunal has found _ guilty of _.", "pick" => 2],
        [
            "text" => "In its new tourism campaign, Detroit proudly proclaims that it has finally eliminated _.",
            "pick" => 1,
        ],
        ["text" => "In his new self-produced album, Kanye West raps over the sounds of _.", "pick" => 1],
        [
            "text" => "The socialist governments of Scandinavia have declared that access to _ is a basic human right.",
            "pick" => 1,
        ],
        ["text" => "He who controls _ controls the world.", "pick" => 1],
        [
            "text" => "Dear Sir or Madam, We regret to inform you that the Office of _ has denied your request for _.",
            "pick" => 2,
        ],
        ["text" => "The CIA now interrogates enemy agents by repeatedly subjecting them to _.", "pick" => 1],
    ];

    const BLACK_CARDS = [
        ["text" => "Getting in her pants, politely."],
        ["text" => "Gladiatorial combat."],
        ["text" => "Good grammar."],
        ["text" => "Hipsters."],
        ["text" => "Gandalf."],
        ["text" => "Genetically engineered super-soldiers."],
        ["text" => "George Clooney\'s musk."],
        ["text" => "Getting abducted by Peter Pan."],
        ["text" => "Eating an albino."],
        ["text" => "Enormous Scandinavian women."],
        ["text" => "Fabricating statistics."],
        ["text" => "Finding a skeleton."],
        ["text" => "Suicidal thoughts."],
        ["text" => "Dancing with a broom."],
        ["text" => "Deflowering the princess."],
        ["text" => "Dorito breath."],
        ["text" => "One thousand Slim Jims."],
        ["text" => "My machete."],
        ["text" => "Overpowering your father."],
        ["text" => "Ominous background music."],
        ["text" => "Media coverage."],
        ["text" => "Making the penises kiss."],
        ["text" => "Moral ambiguity."],
        ["text" => "Medieval Times&reg; Dinner &amp; Tournament."],
        ["text" => "Mad hacky-sack skills."],
        ["text" => "Just the tip."],
        ["text" => "Literally eating shit."],
        ["text" => "Leveling up."],
        ["text" => "Insatiable bloodlust."],
        ["text" => "Historical revisionism."],
        ["text" => "Jean-Claude Van Damme."],
        ["text" => "Jafar."],
        ["text" => "The boners of the elderly."],
        ["text" => "The economy."],
        ["text" => "Statistically validated stereotypes."],
        ["text" => "Sudden Poop Explosion Disease."],
        ["text" => "Slow motion."],
        ["text" => "Space muffins."],
        ["text" => "Sexual humiliation."],
        ["text" => "Sexy Siamese twins."],
        ["text" => "Santa Claus."],
        ["text" => "Scrotum tickling."],
        ["text" => "Ripping into a man\'s chest and pulling out his still-beating heart."],
        ["text" => "Ryan Gosling riding in on a white horse."],
        ["text" => "Quivering jowls."],
        ["text" => "Revenge fucking."],
        ["text" => "Pistol-whipping a hostage."],
        ["text" => "Quiche."],
        ["text" => "Zeus\'s sexual appetites."],
        ["text" => "Words, words, words."],
        ["text" => "Tripping balls."],
        ["text" => "Being a busy adult with many important things to do."],
        ["text" => "The four arms of Vishnu."],
        ["text" => "The shambling corpse of Larry King."],
        ["text" => "The hiccups."],
        ["text" => "The harsh light of day."],
        ["text" => "The Gulags."],
        ["text" => "The Fanta&reg; girls."],
        ["text" => "A big black dick."],
        ["text" => "A beached whale."],
        ["text" => "A low standard of living."],
        ["text" => "A nuanced critique."],
        ["text" => "A bloody pacifier."],
        ["text" => "A crappy little hand."],
        ["text" => "Shaft."],
        ["text" => "Being a dinosaur."],
        ["text" => "Beating your wives."],
        ["text" => "Neil Patrick Harris."],
        ["text" => "Coughing into a vagina."],
        ["text" => "Carnies."],
        ["text" => "Nubile slave boys."],
        ["text" => "Bosnian chicken farmers."],
        ["text" => "A web of lies."],
        ["text" => "A rival dojo."],
        ["text" => "A passionate Latino lover."],
        ["text" => "Panty raids."],
        ["text" => "Appreciative snapping."],
        ["text" => "Apologizing."],
        ["text" => "Clams."],
        ["text" => "A woman scorned."],
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