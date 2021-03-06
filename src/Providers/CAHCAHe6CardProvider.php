<?php

namespace NoelDavies\CardsAgainstHumanity\Providers;

use Cysha\Casino\Cards\Contracts\CardProvider;

class CAHCAHe6CardProvider implements CardProvider
{
    const WHITE_CARDS = [
        ["text" => "I work my ass off all day for this family, and this is what I come home to? _!?", "pick" => 1],
        ["text" => "I have a strict policy. First date, dinner. Second date, kiss. Third date, _.", "pick" => 1],
        ["text" => "When I was a kid, we used to play Cowboys and _.", "pick" => 1],
        [
            "text" => "This is America. If you don\'t work hard, you don\'t succeed. I don\'t care if you\'re black, white, purple, or _.",
            "pick" => 1,
        ],
        ["text" => "You Won\'t Believe These 15 Hilarious _ Bloopers!", "pick" => 1],
        [
            "text" => "James is a lonely boy. But when he discovers a secret door in his attic, he meets a magical new friend: _.",
            "pick" => 1,
        ],
        ["text" => "Don\'t worry kid. It gets better. I\'ve been living with _ for 20 years.", "pick" => 1],
        [
            "text" => "My grandfather worked his way up from nothing. When he came to this country, all he had was the shoes on his feet and _.",
            "pick" => 1,
        ],
        ["text" => "Behind every powerful man is _.", "pick" => 1],
        ["text" => "You are not alone. Millions of Americans struggle with _ every day.", "pick" => 1],
        [
            "text" => "Come to Dubai, where you can relax in our world famous spas, experience the nightlife, or simply enjoy _ by the poolside.",
            "pick" => 1,
        ],
        ["text" => "\"This is madness.\" \"No, THIS IS _!\"", "pick" => 1],
        [
            "text" => "Listen Gary, I like you. But if you want that corner office, you\'re going to have to show me _.",
            "pick" => 1,
        ],
        ["text" => "I went to the desert and ate of the peyote cactus. Turns out my spirit animal is _.", "pick" => 1],
        ["text" => "And would you like those buffalo wings mild, hot, or _?", "pick" => 1],
        [
            "text" => "The six things I could never do without: oxygen, Facebook, chocolate, Netflix, friends, and _ LOL!",
            "pick" => 1,
        ],
        ["text" => "Why won\'t you make love to me anymore? Is it _?", "pick" => 1],
        [
            "text" => "Puberty is a time of change. You might notice hair growing in new places. You might develop an interest in _. This is normal.",
            "pick" => 1,
        ],
        [
            "text" => "I\'m sorry, Mrs. Chen, but there was nothing we could do. At 4:15 this morning, your son succumbed to _.",
            "pick" => 1,
        ],
        [
            "text" => "I\'m Miss Tennessee, and if I could make the world better by changing one thing, I would get rid of _.",
            "pick" => 1,
        ],
        ["text" => "Tonight we will have sex. And afterwards, If you\'d like, a little bit of _.", "pick" => 1],
        [
            "text" => "Everybody join hands and close your eyes. Do you sense that? That\'s the presence of _ in this room.",
            "pick" => 1,
        ],
        [
            "text" => "To become a true Yanomamo warrior, you must prove that you can withstand _ without crying out.",
            "pick" => 1,
        ],
        [
            "text" => "Y\'all ready to get this thing started? I\'m Nick Cannon, and this is America\'s Got _.",
            "pick" => 1,
        ],
        [
            "text" => "If you had to describe the Card Czar, using only one of the cards in your hand, which one would it be?",
            "pick" => 1,
        ],
    ];

    const BLACK_CARDS = [
        ["text" => "A bass drop so huge it tears the starry vault asunder to reveal the face of God."],
        ["text" => "Growing up chained to a radiator in perpetual darkness."],
        ["text" => "Shitting all over the floor like a bad, bad girl."],
        ["text" => "A buttload of candy."],
        ["text" => "Sucking all the milk out of a yak."],
        ["text" => "Bullets."],
        ["text" => "A man who is so cool that he rides on a motorcycle."],
        ["text" => "Sudden penis loss."],
        ["text" => "Getting all offended."],
        ["text" => "Crying and shitting and eating spaghetti."],
        ["text" => "One unforgettable night of passion."],
        ["text" => "Being popular and good at sports."],
        ["text" => "Filling a man\'s anus with concrete."],
        ["text" => "Two whales fucking the shit out of eachother."],
        ["text" => "Cool, relateable cancer teens."],
        ["text" => "The amount of gay I am."],
        ["text" => "A possible Muslim."],
        ["text" => "Unsheathing my massive horse cock."],
        ["text" => "A bowl of gourds."],
        ["text" => "The male gaze."],
        ["text" => "The power of the Dark Side."],
        ["text" => "Ripping a dog in half."],
        ["text" => "A constant need for validation."],
        ["text" => "Meaningless sex."],
        ["text" => "Such a big boy."],
        ["text" => "Throwing stones at a man until he dies."],
        ["text" => "Cancer."],
        ["text" => "Like a million alligators."],
        ["text" => "Eating together like a god damn family for once."],
        ["text" => "Cute boys."],
        ["text" => "Pussy."],
        ["text" => "Being a terrible mother."],
        ["text" => "Never having sex again."],
        ["text" => "A pizza guy who fucked up."],
        ["text" => "A whole lotta woman."],
        ["text" => "The all-new Nissan Pathfinder with 0.9% APR financing!"],
        ["text" => "A peyote-fueled vision quest."],
        ["text" => "Kale."],
        ["text" => "Breastfeeding a ten year old."],
        ["text" => "Crippling social anxiety."],
        ["text" => "Immortality cream."],
        ["text" => "Texas."],
        ["text" => "Teaching a girl how to handjob the penis."],
        ["text" => "A turd."],
        ["text" => "Shapes and colors."],
        ["text" => "Whatever you wish, mother."],
        ["text" => "The haunting stare of an Iraqi child."],
        ["text" => "Robots who just want to party."],
        ["text" => "A self-microwaving burrito."],
        ["text" => "Forgetting grandma\'s first name."],
        ["text" => "Our new Buffalo Chicken Dippers&reg;!"],
        ["text" => "Treasures beyond your wildest dreams."],
        ["text" => "Getting shot out of a cannon."],
        ["text" => "The sweet song of sword against and the braying of mighty war beasts."],
        ["text" => "Walking into a glass door."],
        ["text" => "The color \"puce\"."],
        ["text" => "Every ounce of charisma left in Mick Jagger\'s tired body."],
        ["text" => "The eighth graders."],
        ["text" => "Setting my balls on fire and cartwheeling to Ohio."],
        ["text" => "The dentist."],
        ["text" => "Gwyneth Paltrow\'s opinions."],
        ["text" => "Turning the rivers red with the blood of infidels."],
        ["text" => "Rabies."],
        ["text" => "Important news about Taylor Swift."],
        ["text" => "Ejaculating inside another man\'s wife."],
        ["text" => "Owls, the perfect predator."],
        ["text" => "Being John Malkovich."],
        ["text" => "Bathing in moonsblood and dancing around the ancient oak."],
        ["text" => "An oppressed people with a vibrant culture."],
        ["text" => "An overwhelming variety of cheeses."],
        ["text" => "Reading the entire End-User License Agreement."],
        ["text" => "Morpheus."],
        ["text" => "Peeing into a girl\'s butt to make a baby."],
        ["text" => "Generally having no idea of what\'s going on."],
        ["text" => "No longer finding any Cards Against Humanity card funny."],
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