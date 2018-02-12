<?php
namespace NoelDavies\CardsAgainstHumanity\Providers;

use Cysha\Casino\Cards\Contracts\CardProvider;

class CAHCAHe5CardProvider implements CardProvider
{
    const WHITE_CARDS = [
        ["text" => "Do the Dew &reg; with our most extreme flavor yet! Get ready for Mountain Dew _!", "pick" => 1],
["text" => "Armani suit: $1,000. Dinner for two at that swanky restaurant: $300. The look on her face when you surprise her with _: priceless.", "pick" => 1],
["text" => "In his new action comedy, Jackie Chan must fend off ninjas while also dealing with _.", "pick" => 1],
["text" => "Well what do you have to say for yourself, Casey? This is the third time you\'ve been sent to the principal\'s office for _.", "pick" => 1],
["text" => "Here at the Academy for Gifted Children, we allow students to explore _ at their own pace.", "pick" => 1],
["text" => "Heed my voice, mortals! I am the god of _, and I will not tolerate _!", "pick" => 2],
["text" => "I don\'t mean to brag, but they call me the Michael Jordan of _.", "pick" => 1],
["text" => "Why am I broke?", "pick" => 1],
["text" => "Help me doctor, I\'ve got _ in my butt!", "pick" => 1],
["text" => "Hi MTV! My name is Kendra, I live in Malibu, I\'m into _, and I love to have a good time.", "pick" => 1],
["text" => "Patient presents with _. Likely a result of _.", "pick" => 2],
["text" => "Life\'s pretty tough in the fast lane. That\'s why I never leave the house without _.", "pick" => 1],
["text" => "What\'s making things awkward in the sauna?", "pick" => 1],
["text" => "Get ready for the movie of the summer! One cop plays by the book. The other\'s only interested in one thing: _.", "pick" => 1],
["text" => "Having the worst day EVER. #_", "pick" => 1],
["text" => "In his farewell address, George Washington famously warned Americans about the dangers of _.", "pick" => 1],
["text" => "Don\'t forget! Beginning this week, Casual Friday will officially become \"_ Friday.\"", "pick" => 1],
["text" => "What killed my boner?", "pick" => 1],
["text" => "Yo\' mama so fat she _!", "pick" => 1],
["text" => "Well if _ is good enough for _, it\'s good enough for me.", "pick" => 2],
["text" => "Hi, this is Jim from accounting. We noticed a $1,200 charge labeled \"_\". Can you explain?", "pick" => 1],
["text" => "Do you lack energy? Does it sometimes feel like the whole world is _? Zoloft.&reg;", "pick" => 1],
["text" => "WHOOO! God damn I love _!", "pick" => 1],
["text" => "Now in bookstores: \"The Audacity of _\", by Barack Obama.", "pick" => 1],
["text" => "And today\'s soup is Cream of _.", "pick" => 1]
    ];

    const BLACK_CARDS = [
        ["text" => "Seeing things from Hitler\'s perspective"],
["text" => "Too much cocaine."],
["text" => "Doing the right stuff to her nipples."],
["text" => "Giant sperm from outer space."],
["text" => "Oil!"],
["text" => "Ennui."],
["text" => "A powered exoskeleton."],
["text" => "A disappointing salad."],
["text" => "Mom\'s new boyfriend."],
["text" => "Unrelenting genital punishment."],
["text" => "Denzel."],
["text" => "The swim team, all at once."],
["text" => "The eight gay warlocks who dictate the rules of fashion."],
["text" => "Being nine years old."],
["text" => "The unbelievable world of mushrooms."],
["text" => "The Abercrombie &amp; Fitch lifestyle."],
["text" => "Vegetarian options."],
["text" => "My first period."],
["text" => "Having been dead for a while."],
["text" => "Backwards knees."],
["text" => "Being paralyzed from the neck down."],
["text" => "Seeing my village burned and my family slaughtered before my eyes."],
["text" => "A zero-risk way to make $2,000 from home."],
["text" => "A crazy little thing called love."],
["text" => "Ancient Athenian boy-fucking"],
["text" => "Out-of-this-world bazongas."],
["text" => "The ghost of Marlon Brando."],
["text" => "The basic suffering that pervades all of existence."],
["text" => "Being worshipped as the one true God."],
["text" => "Figuring out how to have sex with a dolphin."],
["text" => "All these decorative pillows."],
["text" => "A mouthful of potato salad."],
["text" => "Russian super-tuberculosis."],
["text" => "A reason not to commit suicide."],
["text" => "Going to a high school reunion on ketamine."],
["text" => "The passage of time."],
["text" => "Child support payments."],
["text" => "Changing a person\'s mind with logic and facts."],
["text" => "My boyfriend\'s stupid penis."],
["text" => "The tiger that killed my father."],
["text" => "Genghis Khan\'s DNA."],
["text" => "Boring vaginal sex."],
["text" => "40 acres and a mule."],
["text" => "A whole new kind of porn."],
["text" => "Slowly easing down onto a cucumber."],
["text" => "Wearing glasses and sounding smart."],
["text" => "AIDS monkeys."],
["text" => "A team of lawyers."],
["text" => "Getting drive-by shot."],
["text" => "Not believing in giraffes."],
["text" => "Anal fissures like you wouldn\'t believe."],
["text" => "A giant powdery manbaby."],
["text" => "Cutting off a flamingo\'s legs with garden shears."],
["text" => "P.F. Chang himself."],
["text" => "An uninterrupted history of imperialism and exploitation."],
["text" => "A one-way ticket to Gary, Indiana."],
["text" => "Daddy\'s credit card."],
["text" => "September 11th, 2001."],
["text" => "An unforgettable quincea&ntilde;era."],
["text" => "Deez nuts."],
["text" => "Social justice warriors with flamethrowers of compassion."],
["text" => "Some shit-hot guitar licks."],
["text" => "Butt stuff."],
["text" => "Blackface."],
["text" => "Blowjobs for everyone."],
["text" => "Getting eaten alive by Guy Fieri."],
["text" => "Western standards of beauty."],
["text" => "Ejaculating live bees and the bees are angry."],
["text" => "My dead son\'s baseball glove."],
["text" => "Getting caught by the police and going to jail."],
["text" => "A face full of horse cum."],
["text" => "Free ice cream, yo."],
["text" => "The white half of Barack Obama."],
["text" => "The black half of Barack Obama."],
["text" => "An inability to form meaningful relationships."]
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