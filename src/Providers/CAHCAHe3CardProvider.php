<?php

namespace NoelDavies\CardsAgainstHumanity\Providers;

use Cysha\Casino\Cards\Contracts\CardProvider;

class CAHCAHe3CardProvider implements CardProvider
{
    const WHITE_CARDS = [
        ["text" => "Hey baby, come back to my place and I\'ll show you _.", "pick" => 1],
        ["text" => "My gym teacher got fired for adding _ to the obstacle course.", "pick" => 1],
        ["text" => "Finally! A service that delivers _ right to your door.", "pick" => 1],
        [
            "text" => "To prepare for his upcoming role, Daniel Day-Lewis immersed himself in the world of _.",
            "pick" => 1,
        ],
        ["text" => "My life is ruled by a vicious cycle of _ and _.", "pick" => 2],
        ["text" => "During high school, I never really fit in until I found _ club.", "pick" => 1],
        ["text" => "Money can\'t buy me love, but it can buy me _.", "pick" => 1],
        [
            "text" => "Listen, son. If you want to get involved with _, I won\'t stop you. Just steer clear of _.",
            "pick" => 2,
        ],
        ["text" => "A successful job interview begins with a firm handshake and ends with _.", "pick" => 1],
        [
            "text" => "Call the law offices of Goldstein &amp; Goldstein, because no one should have to tolerate _ in the workplace.",
            "pick" => 1,
        ],
        ["text" => "Lovin\' you is easy \'cause you\'re _.", "pick" => 1],
        ["text" => "The blind date was going horribly until we discovered our shared interest in _.", "pick" => 1],
        ["text" => "What left this stain on my couch?", "pick" => 1],
        ["text" => "Turns out that _-Man was neither the hero we needed nor wanted.", "pick" => 1],
        ["text" => "After months of practice with _, I think I\'m finally ready for _.", "pick" => 2],
        ["text" => "In the seventh circle of Hell, sinners must endure _ for all eternity.", "pick" => 1],
        ["text" => "As part of his daily regimen, Anderson Cooper sets aside 15 minutes for _.", "pick" => 1],
        ["text" => "When you get right down to it, _ is just _.", "pick" => 2],
        ["text" => "Having problems with _? Try _!", "pick" => 2],
        ["text" => "And what did <i>you</i> bring for show and tell?", "pick" => 1],
        ["text" => "I\'m not like the rest of you. I\'m too rich and busy for _.", "pick" => 1],
        ["text" => "With enough time and pressure, _ will turn into _.", "pick" => 2],
        ["text" => "_: Hours of fun. Easy to use. Perfect for _!", "pick" => 2],
        ["text" => "_. Awesome in theory, kind of a mess in practice.", "pick" => 1],
        ["text" => "As part of his contract, Prince won\'t perform without _ in his dressing room.", "pick" => 1],
    ];

    const BLACK_CARDS = [
        ["text" => "All my friends dying."],
        ["text" => "Shutting the fuck up."],
        ["text" => "An ass disaster."],
        ["text" => "Some kind of bird-man."],
        ["text" => "The entire Internet."],
        ["text" => "Going around punching people."],
        ["text" => "A boo-boo."],
        ["text" => "Indescribable loneliness."],
        ["text" => "Having sex on top of a pizza."],
        ["text" => "Chugging a lava lamp."],
        ["text" => "Warm, velvety muppet sex."],
        ["text" => "Running naked through a mall, pissing and shitting everywhere."],
        ["text" => "Nothing."],
        ["text" => "Samuel L. Jackson."],
        ["text" => "Self-flagellation."],
        ["text" => "The systematic destruction of an entire people and their way of life."],
        ["text" => "The Quesadilla Explosion Salad&trade; from Chili\'s&reg;."],
        ["text" => "Reverse cowgirl."],
        ["text" => "Vietnam flashbacks."],
        ["text" => "Actually getting shot, for real."],
        ["text" => "Not having sex."],
        ["text" => "Cock."],
        ["text" => "Dying alone and in pain."],
        ["text" => "A cop who is also a dog."],
        ["text" => "The way white people is."],
        ["text" => "Gay aliens."],
        ["text" => "The primal, ball-slapping sex your parents are having right now."],
        ["text" => "A cat video so cute that your eyes roll back and your spine slides out of your anus."],
        ["text" => "A lamprey swimming up the toilet and latching onto your taint."],
        ["text" => "Slapping a racist old lady."],
        ["text" => "A black male in his early 20s, last seen wearing a hoodie."],
        ["text" => "Jumping out at people."],
        ["text" => "Three months in the hole."],
        ["text" => "Blood farts."],
        ["text" => "The Land of Chocolate."],
        ["text" => "A botched circumcision."],
        ["text" => "My manservant, Claude."],
        ["text" => "Vomiting mid-blowjob."],
        ["text" => "Letting everyone down."],
        ["text" => "Having shotguns for legs."],
        ["text" => "Bill Clinton, naked on a bearskin rug with a saxophone."],
        ["text" => "Mufasa\'s death scene."],
        ["text" => "The Harlem Globetrotters."],
        ["text" => "Demonic possession."],
        ["text" => "Fisting."],
        ["text" => "The thin veneer of situational causality that underlies porn."],
        ["text" => "Girls that always be textin\'."],
        ["text" => "Blowing some dudes in an alley."],
        ["text" => "A spontaneous conga line."],
        ["text" => "A vagina that leads to another dimension."],
        ["text" => "Disco fever."],
        ["text" => "Getting your dick stuck in a Chinese finger trap with another dick."],
        ["text" => "Drinking ten 5-hour ENERGYs&reg; to get fifty continuous hours of energy."],
        ["text" => "Sneezing, farting, and coming at the same time."],
        ["text" => "Some douche with an acoustic guitar."],
        ["text" => "Spending lots of money."],
        ["text" => "Putting an entire peanut butter and jelly sandwich into the VCR."],
        ["text" => "An unstoppable wave of fire ants."],
        ["text" => "A greased-up Matthew McConaughey."],
        ["text" => "Flying robots that kill people."],
        ["text" => "Unlimited soup, salad, and breadsticks."],
        ["text" => "Crying into the pages of Sylvia Plath."],
        ["text" => "The moist, demanding chasm of his mouth."],
        ["text" => "Filling every orifice with butterscotch pudding."],
        ["text" => "An all-midget production of Shakespeare\'s <i>Richard III</i>."],
        ["text" => "Screaming like a maniac."],
        ["text" => "Not contributing to society in any meaningful way."],
        ["text" => "A pile of squirming bodies."],
        ["text" => "Buying the right pants to be cool."],
        ["text" => "Roland the Farter, flatulist to the king."],
        ["text" => "That ass."],
        ["text" => "A surprising amount of hair."],
        ["text" => "Eating Tom Selleck\'s mustache to gain his powers."],
        ["text" => "Velcro&trade;."],
        ["text" => "A PowerPoint presentation."],
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