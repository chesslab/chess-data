<?php

namespace ChessData\Utils;

class Username
{
    private $adjectives = [
        "abandoned",
        "abashed",
        "aberrant",
        "abiding",
        "abject",
        "abnormal",
        "abounding",
        "abrupt",
        "absent",
        "absorbed",
        "absorbing",
        "abstracted",
        "absurd",
        "abundant",
        "acceptable",
        "accessible",
        "accurate",
        "acoustic",
        "adamant",
        "adaptable",
        "addicted",
        "adjoining",
        "adorable",
        "adventurous",
        "afraid",
        "aggressive",
        "agreeable",
        "alert",
        "alleged",
        "alluring",
        "aloof",
        "amazing",
        "ambiguous",
        "ambitious",
        "amuck",
        "amused",
        "amusing",
        "ancient",
        "angry",
        "animated",
        "annoyed",
        "annoying",
        "anxious",
        "apathetic",
        "aquatic",
        "aromatic",
        "arrogant",
        "ashamed",
        "aspiring",
        "assorted",
        "astonishing",
        "attractive",
        "auspicious",
        "automatic",
        "available",
        "average",
        "aware",
        "awesome",
        "axiomatic",
        "bad",
        "barbarous",
        "bashful",
        "beautiful",
        "befitting",
        "belligerent",
        "beneficial",
        "bent",
        "berserk",
        "bewildered",
        "big",
        "billowy",
        "bitter",
        "bizarre",
        "black",
        "blue",
        "blushing",
        "boorish",
        "bored",
        "boring",
        "bouncy",
        "boundless",
        "brainy",
        "brash",
        "brave",
        "brawny",
        "breezy",
        "brief",
        "bright",
        "broad",
        "broken",
        "brown",
        "bumpy",
        "burly",
        "bustling",
        "busy",
        "cagey",
        "calculating",
        "callous",
        "calm",
        "capable",
        "capricious",
        "careful",
        "careless",
        "caring",
        "cautious",
        "ceaseless",
        "certain",
        "changeable",
        "charming",
        "cheap",
        "cheerful",
        "chief",
        "childlike",
        "chilly",
        "chivalrous",
        "chunky",
        "clammy",
        "classy",
        "clean",
        "clear",
        "clever",
        "cloistered",
        "cloudy",
        "closed",
        "clumsy",
        "cluttered",
        "coherent",
        "cold",
        "colorful",
        "colossal",
        "combative",
        "comfortable",
        "common",
        "complete",
        "complex",
        "concerned",
        "condemned",
        "confused",
        "conscious",
        "cooing",
        "cool",
        "cooperative",
        "coordinated",
        "courageous",
        "cowardly",
        "crabby",
        "craven",
        "crazy",
        "creepy",
        "crowded",
        "cuddly",
        "cultured",
        "cumbersome",
        "curious",
        "curly",
        "curved",
        "curvy",
        "cute",
        "cynical",
        "daffy",
        "daily",
        "damp",
        "dangerous",
        "dapper",
        "dark",
        "dashing",
        "dazzling",
        "deafening",
        "dear",
        "debonair",
        "decisive",
        "decorous",
        "deep",
        "deeply",
        "defeated",
        "defective",
        "defiant",
        "delicate",
        "delicious",
        "delightful",
        "demonic",
        "delirious",
        "deranged",
        "descriptive",
        "deserted",
        "detailed",
        "determined",
        "devilish",
        "didactic",
        "different",
        "difficult",
        "diligent",
        "direful",
        "dirty",
        "disagreeable",
        "disastrous",
        "discreet",
        "disgusted",
        "disgusting",
        "disillusioned",
        "dispensable",
        "distinct",
        "disturbed",
        "divergent",
        "dizzy",
        "domineering",
        "doubtful",
        "drab",
        "draconian",
        "dramatic",
        "dreary",
        "dry",
        "dull",
        "dusty",
        "dynamic",
        "eager",
        "early",
        "earsplitting",
        "earthy",
        "easy",
        "economic",
        "educated",
        "efficacious",
        "efficient",
        "elastic",
        "elated",
        "elderly",
        "electric",
        "elegant",
        "elfin",
        "elite",
        "embarrassed",
        "eminent",
        "enchanted",
        "enchanting",
        "encouraging",
        "endurable",
        "energetic",
        "enormous",
        "entertaining",
        "enthusiastic",
        "envious",
        "erratic",
        "ethereal",
        "evanescent",
        "evasive",
        "even",
        "excellent",
        "excited",
        "exciting",
        "exclusive",
        "exotic",
        "expensive",
        "exuberant",
        "exultant",
        "fabulous",
        "faded",
        "faint",
        "fair",
        "faithful",
        "fallacious",
        "false",
        "familiar",
        "famous",
        "fanatical",
        "fancy",
        "fantastic",
        "fascinated",
        "fast",
        "faulty",
        "fearful",
        "fearless",
        "feeble",
        "feigned",
        "fertile",
        "festive",
        "fierce",
        "filthy",
        "fine",
        "finicky",
        "first",
        "fixed",
        "flagrant",
        "flaky",
        "flashy",
        "flawless",
        "flimsy",
        "flippant",
        "flowery",
        "fluffy",
        "fluttering",
        "foamy",
        "foolish",
        "foregoing",
        "forgetful",
        "fortunate",
        "frail",
        "fragile",
        "frantic",
        "free",
        "freezing",
        "frequent",
        "fresh",
        "fretful",
        "friendly",
        "frightened",
        "frightening",
        "fumbling",
        "functional",
        "funny",
        "furry",
        "furtive",
        "future",
        "futuristic",
        "fuzzy",
        "gabby",
        "gainful",
        "gaping",
        "garrulous",
        "gaudy",
        "general",
        "gentle",
        "giant",
        "giddy",
        "gifted",
        "gigantic",
        "glamorous",
        "gleaming",
        "glib",
        "glistening",
        "glorious",
        "glossy",
        "godly",
        "good",
        "goofy",
        "gorgeous",
        "graceful",
        "grandiose",
        "grateful",
        "gratis",
        "gray",
        "greasy",
        "great",
        "greedy",
        "green",
        "grey",
        "grieving",
        "groovy",
        "grotesque",
        "grouchy",
        "grubby",
        "gruesome",
        "grumpy",
        "guarded",
        "guiltless",
        "gullible",
        "gusty",
        "guttural",
        "habitual",
        "half",
        "hallowed",
        "halting",
        "handsome",
        "handy",
        "hanging",
        "hapless",
        "happy",
        "hard",
        "harmonious",
        "harsh",
        "hateful",
        "heady",
        "healthy",
        "heartbreaking",
        "heavenly",
        "heavy",
        "hellish",
        "helpful",
        "helpless",
        "hesitant",
        "hideous",
        "high",
        "highfalutin",
        "hilarious",
        "hissing",
        "historical",
        "holistic",
        "hollow",
        "homely",
        "honorable",
        "horrible",
        "hospitable",
        "huge",
        "hulking",
        "humdrum",
        "humorous",
        "hungry",
        "hurried",
        "hurt",
        "hushed",
        "husky",
        "hypnotic",
        "icky",
        "icy",
        "ignorant",
        "ill",
        "illegal",
        "illustrious",
        "imaginary",
        "immense",
        "imminent",
        "impartial",
        "imperfect",
        "impolite",
        "important",
        "imported",
        "impossible",
        "incandescent",
        "incompetent",
        "inconclusive",
        "industrious",
        "incredible",
        "inexpensive",
        "infamous",
        "innate",
        "innocent",
        "inquisitive",
        "insidious",
        "instinctive",
        "intelligent",
        "interesting",
        "internal",
        "invincible",
        "irate",
        "irritating",
        "itchy",
        "jaded",
        "jagged",
        "jazzy",
        "jealous",
        "jittery",
        "jobless",
        "jolly",
        "joyous",
        "judicious",
        "juicy",
        "jumbled",
        "jumpy",
        "juvenile",
        "keen",
        "kind",
        "kindhearted",
        "kindly",
        "knotty",
        "knowing",
        "knowledgeable",
        "known",
        "labored",
        "lackadaisical",
        "lacking",
        "lame",
        "lamentable",
        "languid",
        "large",
        "last",
        "late",
        "laughable",
        "lavish",
        "lazy",
        "lean",
        "learned",
        "left",
        "legal",
        "lethal",
        "level",
        "lewd",
        "light",
        "like",
        "likeable",
        "limping",
        "literate",
        "little",
        "lively",
        "living",
        "lonely",
        "long",
        "longing",
        "loose",
        "lopsided",
        "loud",
        "loutish",
        "lovely",
        "loving",
        "lowly",
        "lucky",
        "ludicrous",
        "lumpy",
        "lush",
        "lying",
        "lyrical",
        "maddening",
        "madly",
        "magenta",
        "magical",
        "magnificent",
        "majestic",
        "makeshift",
        "malicious",
        "maniacal",
        "marked",
        "massive",
        "married",
        "marvelous",
        "material",
        "materialistic",
        "mature",
        "mean",
        "measly",
        "medical",
        "meek",
        "mellow",
        "melodic",
        "melted",
        "merciful",
        "mere",
        "messy",
        "mighty",
        "military",
        "milky",
        "mindless",
        "miniature",
        "minor",
        "miscreant",
        "misty",
        "mixed",
        "moaning",
        "modern",
        "moldy",
        "momentous",
        "motionless",
        "mountainous",
        "muddled",
        "mundane",
        "murky",
        "mushy",
        "mute",
        "mysterious",
        "naive",
        "nappy",
        "narrow",
        "nasty",
        "natural",
        "naughty",
        "nauseating",
        "near",
        "neat",
        "nebulous",
        "necessary",
        "needless",
        "needy",
        "neighborly",
        "nervous",
        "new",
        "next",
        "nice",
        "nifty",
        "nimble",
        "nippy",
        "noiseless",
        "noisy",
        "nonchalant",
        "nondescript",
        "nonstop",
        "normal",
        "nostalgic",
        "nosy",
        "noxious",
        "numberless",
        "numerous",
        "nutritious",
        "nutty",
        "oafish",
        "obedient",
        "obeisant",
        "obese",
        "obnoxious",
        "obscene",
        "obsequious",
        "observant",
        "obsolete",
        "obtainable",
        "oceanic",
        "odd",
        "offbeat",
        "old",
        "omniscient",
        "onerous",
        "open",
        "opposite",
        "optimal",
        "orange",
        "ordinary",
        "organic",
        "ossified",
        "outgoing",
        "outrageous",
        "outstanding",
        "oval",
        "overconfident",
        "overjoyed",
        "overrated",
        "overt",
        "overwrought",
        "painful",
        "painstaking",
        "pale",
        "paltry",
        "panicky",
        "panoramic",
        "parallel",
        "parched",
        "parsimonious",
        "past",
        "pastoral",
        "pathetic",
        "peaceful",
        "penitent",
        "perfect",
        "periodic",
        "permissible",
        "perpetual",
        "petite",
        "phobic",
        "physical",
        "picayune",
        "pink",
        "plain",
        "plastic",
        "plausible",
        "pleasant",
        "plucky",
        "pointless",
        "polite",
        "political",
        "poor",
        "possessive",
        "possible",
        "powerful",
        "precious",
        "premium",
        "present",
        "pretty",
        "previous",
        "pricey",
        "prickly",
        "private",
        "probable",
        "productive",
        "profuse",
        "protective",
        "proud",
        "psychedelic",
        "public",
        "puffy",
        "pumped",
        "puny",
        "purple",
        "purring",
        "pushy",
        "puzzled",
        "puzzling",
        "quaint",
        "quarrelsome",
        "questionable",
        "quick",
        "quiet",
        "quirky",
        "quixotic",
        "quizzical",
        "ragged",
        "rainy",
        "rambunctious",
        "rampant",
        "rapid",
        "rare",
        "raspy",
        "ratty",
        "ready",
        "real",
        "rebel",
        "receptive",
        "recondite",
        "red",
        "redundant",
        "reflective",
        "regular",
        "relieved",
        "remarkable",
        "reminiscent",
        "repulsive",
        "resolute",
        "resonant",
        "responsible",
        "rhetorical",
        "rich",
        "right",
        "righteous",
        "rightful",
        "rigid",
        "ritzy",
        "robust",
        "romantic",
        "roomy",
        "rotten",
        "rough",
        "round",
        "royal",
        "ruddy",
        "rude",
        "rural",
        "rustic",
        "ruthless",
        "sable",
        "sad",
        "safe",
        "salty",
        "same",
        "sassy",
        "satisfying",
        "savory",
        "scandalous",
        "scarce",
        "scared",
        "scary",
        "scattered",
        "scientific",
        "scrawny",
        "screeching",
        "second",
        "secret",
        "secretive",
        "sedate",
        "seemly",
        "selective",
        "selfish",
        "separate",
        "serious",
        "shaggy",
        "shaky",
        "shallow",
        "sharp",
        "shiny",
        "shivering",
        "shocking",
        "short",
        "shrill",
        "shut",
        "shy",
        "sick",
        "silent",
        "silky",
        "silly",
        "simple",
        "simplistic",
        "sincere",
        "skillful",
        "skinny",
        "sleepy",
        "slim",
        "slimy",
        "slippery",
        "sloppy",
        "slow",
        "small",
        "smart",
        "smelly",
        "smiling",
        "smoggy",
        "smooth",
        "sneaky",
        "snobbish",
        "snotty",
        "soft",
        "soggy",
        "solid",
        "somber",
        "sophisticated",
        "sordid",
        "sore",
        "sour",
        "sparkling",
        "special",
        "spectacular",
        "spicy",
        "spiffy",
        "spiky",
        "spiritual",
        "spiteful",
        "splendid",
        "spooky",
        "spotless",
        "spotted",
        "spotty",
        "spurious",
        "squalid",
        "squealing",
        "squeamish",
        "stale",
        "standing",
        "statuesque",
        "steadfast",
        "steady",
        "steep",
        "stereotyped",
        "stimulating",
        "stingy",
        "stormy",
        "straight",
        "strange",
        "striped",
        "strong",
        "stupendous",
        "sturdy",
        "subdued",
        "subsequent",
        "substantial",
        "successful",
        "succinct",
        "sudden",
        "sulky",
        "super",
        "superb",
        "superficial",
        "supreme",
        "swanky",
        "sweet",
        "swift",
        "symptomatic",
        "tacit",
        "tacky",
        "talented",
        "tall",
        "tame",
        "tangible",
        "tangy",
        "tasteful",
        "tasteless",
        "tasty",
        "tawdry",
        "tearful",
        "tedious",
        "teeny",
        "telling",
        "temporary",
        "tender",
        "tense",
        "tenuous",
        "terrific",
        "tested",
        "thankful",
        "therapeutic",
        "thick",
        "thin",
        "thinkable",
        "third",
        "thirsty",
        "thoughtful",
        "thoughtless",
        "threatening",
        "thundering",
        "tidy",
        "tight",
        "tightfisted",
        "tiny",
        "tired",
        "tiresome",
        "toothsome",
        "torpid",
        "tough",
        "towering",
        "tranquil",
        "trashy",
        "tremendous",
        "tricky",
        "trite",
        "troubled",
        "truculent",
        "true",
        "truthful",
        "typical",
        "ubiquitous",
        "unable",
        "unaccountable",
        "unadvised",
        "unarmed",
        "unbecoming",
        "unbiased",
        "uncovered",
        "undesirable",
        "unequaled",
        "unhealthy",
        "uninterested",
        "unique",
        "unkempt",
        "unknown",
        "unnatural",
        "unruly",
        "unsightly",
        "unsuitable",
        "untidy",
        "unused",
        "unusual",
        "unwieldy",
        "unwritten",
        "upbeat",
        "uppity",
        "upset",
        "uptight",
        "used",
        "useful",
        "useless",
        "utopian",
        "vacuous",
        "vagabond",
        "vague",
        "valuable",
        "various",
        "vast",
        "vengeful",
        "venomous",
        "verdant",
        "versed",
        "victorious",
        "vigorous",
        "violent",
        "violet",
        "vivacious",
        "voiceless",
        "volatile",
        "voracious",
        "vulgar",
        "wacky",
        "waggish",
        "waiting",
        "wakeful",
        "wandering",
        "wanting",
        "warm",
        "wary",
        "wasteful",
        "watery",
        "weak",
        "wealthy",
        "weary",
        "whimsical",
        "whispering",
        "white",
        "whole",
        "wicked",
        "wiggly",
        "wild",
        "willing",
        "windy",
        "wiry",
        "wise",
        "wistful",
        "witty",
        "woebegone",
        "wonderful",
        "wooden",
        "woozy",
        "workable",
        "worried",
        "worthless",
        "wrathful",
        "wretched",
        "wrong",
        "wry",
        "yellow",
        "yielding",
        "young",
        "youthful",
        "zany",
        "zealous",
        "zesty",
        "zippy",
    ];

    private $animals = [
        "Aardvark",
        "Albatross",
        "Alligator",
        "Alpaca",
        "Ant",
        "Anteater",
        "Antelope",
        "Ape",
        "Armadillo",
        "Donkey",
        "Baboon",
        "Badger",
        "Barracuda",
        "Bat",
        "Bear",
        "Beaver",
        "Bee",
        "Bison",
        "Boar",
        "Buffalo",
        "Butterfly",
        "Camel",
        "Capybara",
        "Caribou",
        "Cassowary",
        "Cat",
        "Caterpillar",
        "Cattle",
        "Chamois",
        "Cheetah",
        "Chicken",
        "Chimpanzee",
        "Chinchilla",
        "Chough",
        "Clam",
        "Cobra",
        "Cockroach",
        "Cod",
        "Cormorant",
        "Coyote",
        "Crab",
        "Crane",
        "Crocodile",
        "Crow",
        "Curlew",
        "Deer",
        "Dinosaur",
        "Dog",
        "Dogfish",
        "Dolphin",
        "Dotterel",
        "Dove",
        "Dragonfly",
        "Duck",
        "Dugong",
        "Dunlin",
        "Eagle",
        "Echidna",
        "Eel",
        "Eland",
        "Elephant",
        "Elk",
        "Emu",
        "Falcon",
        "Ferret",
        "Finch",
        "Fish",
        "Flamingo",
        "Fly",
        "Fox",
        "Frog",
        "Gaur",
        "Gazelle",
        "Gerbil",
        "Giraffe",
        "Gnat",
        "Gnu",
        "Goat",
        "Goldfinch",
        "Goldfish",
        "Goose",
        "Gorilla",
        "Goshawk",
        "Grasshopper",
        "Grouse",
        "Guanaco",
        "Gull",
        "Hamster",
        "Hare",
        "Hawk",
        "Hedgehog",
        "Heron",
        "Herring",
        "Hippopotamus",
        "Hornet",
        "Horse",
        "Human",
        "Hummingbird",
        "Hyena",
        "Ibex",
        "Ibis",
        "Jackal",
        "Jaguar",
        "Jay",
        "Jellyfish",
        "Kangaroo",
        "Kingfisher",
        "Koala",
        "Kookabura",
        "Kouprey",
        "Kudu",
        "Lapwing",
        "Lark",
        "Lemur",
        "Leopard",
        "Lion",
        "Llama",
        "Lobster",
        "Locust",
        "Loris",
        "Louse",
        "Lyrebird",
        "Magpie",
        "Mallard",
        "Manatee",
        "Mandrill",
        "Mantis",
        "Marten",
        "Meerkat",
        "Mink",
        "Mole",
        "Mongoose",
        "Monkey",
        "Moose",
        "Mosquito",
        "Mouse",
        "Mule",
        "Narwhal",
        "Newt",
        "Nightingale",
        "Octopus",
        "Okapi",
        "Opossum",
        "Oryx",
        "Ostrich",
        "Otter",
        "Owl",
        "Oyster",
        "Panther",
        "Parrot",
        "Partridge",
        "Peafowl",
        "Pelican",
        "Penguin",
        "Pheasant",
        "Pig",
        "Pigeon",
        "Pony",
        "Porcupine",
        "Porpoise",
        "Quail",
        "Quelea",
        "Quetzal",
        "Rabbit",
        "Raccoon",
        "Rail",
        "Ram",
        "Rat",
        "Raven",
        "Red deer",
        "Red panda",
        "Reindeer",
        "Rhinoceros",
        "Rook",
        "Salamander",
        "Salmon",
        "Sand Dollar",
        "Sandpiper",
        "Sardine",
        "Scorpion",
        "Seahorse",
        "Seal",
        "Shark",
        "Sheep",
        "Shrew",
        "Skunk",
        "Snail",
        "Snake",
        "Sparrow",
        "Spider",
        "Spoonbill",
        "Squid",
        "Squirrel",
        "Starling",
        "Stingray",
        "Stinkbug",
        "Stork",
        "Swallow",
        "Swan",
        "Tapir",
        "Tarsier",
        "Termite",
        "Tiger",
        "Toad",
        "Trout",
        "Turkey",
        "Turtle",
        "Viper",
        "Vulture",
        "Wallaby",
        "Walrus",
        "Wasp",
        "Weasel",
        "Whale",
        "Wildcat",
        "Wolf",
        "Wolverine",
        "Wombat",
        "Woodcock",
        "Woodpecker",
        "Worm",
        "Wren",
        "Yak",
        "Zebra",
    ];

    public function getAdjectives()
    {
        return $this->adjectives;
    }

    public function getAnimals()
    {
        return $this->animals;
    }

    public function rand()
    {
        $adjective = $this->adjectives[array_rand($this->adjectives)];
        $animal = $this->animals[array_rand($this->animals)];

        return $adjective . $animal;
    }
}
