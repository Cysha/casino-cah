<?php

namespace NoelDavies\CardsAgainstHumanity\Providers;

use Cysha\Casino\Cards\Contracts\CardProvider;

class CAHCAHe2CardProvider implements CardProvider
{
    const WHITE_CARDS = [
        ["text" => "_ would be woefully incomplete without _.", "pick" => 2],
        ["text" => "During his midlife crisis, my dad got really into _.", "pick" => 1],
        ["text" => "Before I run for president, I must destroy all evidence of my involvement with _.", "pick" => 1],
        ["text" => "My new favorite porn star is Joey \"_\" McGee.", "pick" => 1],
        ["text" => "In his newest and most difficult stunt, David Blaine must escape from _.", "pick" => 1],
        ["text" => "This is your captain speaking. Fasten your seatbelts and prepare for _.", "pick" => 1],
        ["text" => "My mom freaked out when she looked at my browser history and found _.com/_.", "pick" => 2],
        ["text" => "The Five Stages of Grief: denial, anger, bargaining, _, acceptance.", "pick" => 1],
        [
            "text" => "Members of New York\'s social elite are paying thousands of dollars just to experience _.",
            "pick" => 1,
        ],
        ["text" => "I went from _ to _, all thanks to _.", "pick" => 3],
        ["text" => "Little Miss Muffet Sat on a tuffet, Eating her curds and _.", "pick" => 1],
        ["text" => "This month\'s Cosmo: \"Spice up your sex life by bringing _ into the bedroom.\"", "pick" => 1],
        ["text" => "If God didn\'t want us to enjoy _, he wouldn\'t have given us _.", "pick" => 2],
        ["text" => "My country, \'tis of thee, sweet land of _.", "pick" => 1],
        [
            "text" => "After months of debate, the Occupy Wall Street General Assembly could only agree on \"More _!\"",
            "pick" => 1,
        ],
        ["text" => "I spent my whole life working toward _, only to have it ruined by _.", "pick" => 2],
        ["text" => "Next time on Dr. Phil: How to talk to your child about _.", "pick" => 1],
        ["text" => "Only two things in life are certain: death and _.", "pick" => 1],
        ["text" => "Everyone down on the ground! We don\'t want to hurt anyone. We\'re just here for _.", "pick" => 1],
        ["text" => "The healing process began when I joined a support group for victims of _.", "pick" => 1],
        ["text" => "The votes are in, and the new high school mascot is _.", "pick" => 1],
        ["text" => "Charades was ruined for me forever when my mom had to act out _.", "pick" => 1],
        ["text" => "Before _, all we had was _.", "pick" => 2],
        ["text" => "Tonight on 20/20: What you don\'t know about _ could kill you.", "pick" => 1],
        ["text" => "You haven\'t truly lived until you\'ve experienced _ and _ at the same time.", "pick" => 2],
    ];

    const BLACK_CARDS = [
        ["text" => "Being awesome at sex."],
        ["text" => "Spring break!"],
        ["text" => "Another shot of morphine."],
        ["text" => "Dining with cardboard cutouts of the cast of \"Friends.\""],
        ["text" => "A soulful rendition of \"Ol\' Man River.\""],
        ["text" => "Making a friend."],
        ["text" => "A sweaty, panting leather daddy."],
        ["text" => "Intimacy problems."],
        ["text" => "The new Radiohead album."],
        ["text" => "Pretty Pretty Princess Dress-Up Board Game&reg;."],
        ["text" => "A man in yoga pants with a ponytail and feather earrings."],
        ["text" => "An army of skeletons."],
        ["text" => "A squadron of moles wearing aviator goggles."],
        ["text" => "Beefin\' over turf."],
        ["text" => "The Google."],
        ["text" => "Bullshit."],
        ["text" => "A sweet spaceship."],
        ["text" => "A 55-gallon drum of lube."],
        ["text" => "Special musical guest, Cher."],
        ["text" => "The human body."],
        ["text" => "Mild autism."],
        ["text" => "Nunchuck moves."],
        ["text" => "Whipping a disobedient slave."],
        ["text" => "An ether-soaked rag."],
        ["text" => "Oncoming traffic."],
        ["text" => "A dollop of sour cream."],
        ["text" => "A slightly shittier parallel universe."],
        ["text" => "My first kill."],
        ["text" => "Boris the Soviet Love Hammer."],
        ["text" => "The grey nutrient broth that sustains Mitt Romney."],
        ["text" => "Tiny nipples."],
        ["text" => "Power."],
        ["text" => "Death by Steven Seagal."],
        ["text" => "A Burmese tiger pit."],
        ["text" => "Basic human decency."],
        ["text" => "Grandpa\'s ashes."],
        ["text" => "One Ring to rule them all."],
        ["text" => "The day the birds attacked."],
        ["text" => "Fetal alcohol syndrome."],
        ["text" => "Graphic violence, adult language, and some sexual content."],
        ["text" => "A bigger, blacker dick."],
        ["text" => "The mere concept of Applebee\'s&reg;."],
        ["text" => "A sad fat dragon with no friends."],
        ["text" => "A pi&ntilde;ata full of scorpions."],
        ["text" => "Existing."],
        ["text" => "Hillary Clinton\'s death stare."],
        ["text" => "Catastrophic urethral trauma."],
        ["text" => "Double penetration."],
        ["text" => "Daddy\'s belt."],
        ["text" => "Swiftly achieving orgasm."],
        ["text" => "Mooing."],
        ["text" => "Rising from the grave."],
        ["text" => "Subduing a grizzly bear and making her your wife."],
        ["text" => "Some really fucked-up shit."],
        ["text" => "Weapons-grade plutonium."],
        ["text" => "All of this blood."],
        ["text" => "Scrotal frostbite."],
        ["text" => "Taking a man\'s eyes and balls out and putting his eyes where his balls go and then his balls in the eye holes."],
        ["text" => "The mixing of the races."],
        ["text" => "Pumping out a baby every nine months."],
        ["text" => "Tongue."],
        ["text" => "Loki, the trickster god."],
        ["text" => "Whining like a little bitch."],
        ["text" => "Wearing an octopus for a hat."],
        ["text" => "An unhinged ferris wheel rolling toward the sea."],
        ["text" => "Finding Waldo."],
        ["text" => "Upgrading homeless people to mobile hotspots."],
        ["text" => "A magic hippie love cloud."],
        ["text" => "Fuck Mountain."],
        ["text" => "Living in a trashcan."],
        ["text" => "The corporations."],
        ["text" => "Getting hilariously gang-banged by the Blue Man Group."],
        ["text" => "Jeff Goldblum."],
        ["text" => "Survivor\'s guilt."],
        ["text" => "Me."],
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