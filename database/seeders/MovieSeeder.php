<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = [
            [
                'name' => 'Nest',
                'original_name' => 'HREIÐUR',
                'language_id' => 3,
                'year' => 2022,
                'duration' => 22,
                'sinopis' => 'A story of three siblings building a tree house together over the course of a year. We experience the beauty and brutality of the seasons, as we follow them through their struggles and moments of joy.',
                'our_take' => 'With a year at home with his children suddenly on his hands, Icelandic rising star Hlynur Pálmason forged his own microcosmic utopia with this warm and whimsical short. Exquisitely capturing the changing seasons on 35mm, Nest is a tactile wonder charged with the untamed energy of its young cast.',
                'img_min' => 'img_2_horizontal.jpg',
                'img_max' => 'hero_2.jpg'
            ],
            [
                'name' => 'THE PLEASURE OF LOVE',
                'original_name' => "PLAISIR D'AMOUR",
                'language_id' => 5,
                'year' => 1991,
                'duration'=> 102,
                'sinopis' => 'A depressed man of letters, Pierre Arditi, lucks into a tutoring gig and is whisked away to a tropical colonial island. There, three educated and alluring women hire him to tutor the 13-year-old Flo—but they also have plans in mind to seduce him.',
                'our_take' => 'An island populated by lusty temptresses might sound like the ultimate male fantasy. Under Nelly Kaplan’s satirical and surreal gaze, however, such paradise warps into men’s worst nightmare! Wielding erotic control over a serial Don Juan, the idyll’s sirens playfully subvert the rules of attraction.',
                'img_min' => 'img_2_horizontal.jpg',
                'img_max' => 'hero_2.jpg'
            ],
            [
                'name' => 'A SHORT FILM ABOUT LOVE',
                'original_name' => "KRÓTKI FILM O MIŁOŚCI",
                'language_id' => 4,
                'year' => 1988,
                'duration'=> 84,
                'sinopis' => '19-year-old postal worker Tomek routinely spies on his older neighbor Magda, a sexually liberated artist who lives in the apartment across the courtyard from his. As their private worlds merge, fascination turns to obsession, and the line between love and curiosity becomes blurred.',
                'our_take' => 'Developed from an episode of Krzysztof Kieślowski’s epic, ten-part television series, Dekalog, this acclaimed romantic comedy-drama tells a darkly twisted and ironic tale of voyeurism and fantasy. Kieślowski brings his typically compelling and cerebral style to explore the feeling—or idea—of love.',
                'img_min' => 'img_2_horizontal.jpg',
                'img_max' => 'hero_2.jpg'
            ],
            [
                'name' => 'THE FIGHT',
                'original_name' => "LA LOTTA",
                'language_id' => 6,
                'year' => 2018,
                'duration'=> 15,
                'sinopis' => 'It is a sunny day on the river Trebbia. In the distance a patrol of German soldiers is approaching: they are nazis, guns blazing. It seems like they are chasing somebody. Tonino is the fugitive, a partisan with nothing left to do but dive into the river. This river will bring him to his real life.',
                'our_take' => 'A young partisan drifts through clashing epochs in Marco Bellocchio’s magical-realist short, a poignant ode to the 1940s resistance movement in his Italian hometown of Bobbio. At once a historical witness and a symbol of rebirth, the beautiful Trebbia river provides a beguiling portal to the past.',
                'img_min' => 'img_2_horizontal.jpg',
                'img_max' => 'hero_2.jpg'
            ],
            [
                'name' => 'SPRING FEVER',
                'original_name' => "CHUN FENG CHEN ZUI DE YE WAN",
                'language_id' => 7,
                'year' => 2009,
                'duration'=> 111,
                'sinopis' => 'Wang Ping’s wife suspects him of adultery. She hires Luo Haitao to spy on him and discovers that her husband’s lover is a man. It’s with this man that Luo Haitao and his girlfriend form a torrid love triangle—the beginning of asphyxiating, sultry nights of physical abandon that exalt the senses.',
                'our_take' => 'The insubordinate nature of Spring Fever detonated when, bypassing the Chinese authorities, the film premiered in Cannes competition during the five-year ban from filmmaking imposed on Lou Ye. A film that challenges social and moral taboos, alive with stirring rebelliousness and queer sensuality.',
                'img_min' => 'img_2_horizontal.jpg',
                'img_max' => 'hero_2.jpg'
            ],
            [
                'name' => 'LA ANTENA',
                'original_name' => "LA ANTENA",
                'language_id' => 8,
                'year' => 2007,
                'duration'=> 99,
                'sinopis' => 'An entire city has lost its voice. Mr. TV, the owner of the city’s only television channel, is carrying out a sinister plan to control all of the city’s inhabitants. He kidnaps a singer, the only one who still has The Voice. An inventor witnesses the kidnapping and flees to thwart approaching doom.',
                'our_take' => 'The first film ever to screen on MUBI, this surreal fairytale from visionary auteur Esteban Sapir champions the power of the human voice over consumerism and totalitarian control. Using the language of silent cinema, La Antena devises a fantastical dreamscape, packed with eye-popping visual effects.',
                'img_min' => 'img_2_horizontal.jpg',
                'img_max' => 'hero_2.jpg'
            ],
            [
                'name' => 'TASTE OF CHERRY',
                'original_name' => "TA'M E GUILASS",
                'language_id' => 9,
                'year' => 1997,
                'duration'=> 99,
                'sinopis' => 'Middle-aged Mr. Badii wishes to die in a society where suicide is considered an abomination. Driving in the hills above Tehran, he searches for an accomplice who is willing to bury him after he is dead. He meets an assortment of different characters, but each have reasons to turn down the job.',
                'our_take' => 'Capturing the miracles and mysteries of everyday life in all his films, Iranian master Abbas Kiarostami will always be one of cinema’s greatest poets. His Palme d’Or-winning Taste of Cherry is a spiritual road movie of tremendous humility: a meditation on mortality with an unforgettable coda.',
                'img_min' => 'img_2_horizontal.jpg',
                'img_max' => 'hero_2.jpg'
            ],
            [
                'name' => 'EVOLUTION OF A FILIPINO FAMILY',
                'original_name' => "EBOLUSYON NG ISANG PAMILYANG PILIPINO",
                'language_id' => 10,
                'year' => 2005,
                'duration'=> 99,
                'sinopis' => 'An intimate epic made with uncompromising and austere seriousness that patiently and methodically observes the collapse and hopeful revival of a poor farming clan.',
                'our_take' => 'From Filipino auteur Lav Diaz comes his greatest epic. Nine years in the making, ten hours of running time (!), first shot on film, then video: this intimate yet expansive family saga will draw you in hypnotically. Like the later Boyhood, marvel as you watch the young actors grow up before you.',
                'img_min' => 'img_2_horizontal.jpg',
                'img_max' => 'hero_2.jpg'
            ],
            [
                'name' => 'DOGTOOTH',
                'original_name' => "KYNODONTAS | ΚΥΝΌΔΟΝΤΑΣ",
                'language_id' => 11,
                'year' => 2009,
                'duration'=> 97,
                'sinopis' => 'In an effort to protect their children from the corrupting influence of the outside world, a couple transforms their home into a gated compound of cultural deprivation. When the father invites a trusted outsider into their home their reality begins to crumble, with devastating consequences.',
                'our_take' => 'A festival hit nominated for an Academy Award®, Dogtooth is a darkly comic insight into a surreal world of parental control gone mad. As shocking and brutal as it is humorous, elegant, and entertaining, Greek “Weird Wave” auteur Yorgos Lanthimos’s film is bold and inventive cinema.',
                'img_min' => 'img_2_horizontal.jpg',
                'img_max' => 'hero_2.jpg'
            ],
            [
                'name' => 'THE CHALLENGE',
                'original_name' => "चुनौती",
                'language_id' => 12,
                'year' => 2009,
                'duration'=> 68,
                'sinopis' => 'In an effort to protect their children from the corrupting influence of the outside world, a couple transforms their home into a gated compound of cultural deprivation. When the father invites a trusted outsider into their home their reality begins to crumble, with devastating consequences.',
                'our_take' => 'A festival hit nominated for an Academy Award®, Dogtooth is a darkly comic insight into a surreal world of parental control gone mad. As shocking and brutal as it is humorous, elegant, and entertaining, Greek “Weird Wave” auteur Yorgos Lanthimos’s film is bold and inventive cinema.',
                'img_min' => 'img_2_horizontal.jpg',
                'img_max' => 'hero_2.jpg'
            ],
            [
                'name' => 'A TRIP TO THE MOON',
                'original_name' => "LE VOYAGE DANS LA LUNE",
                'language_id' => 13,
                'year' => 1902,
                'duration'=> 15,
                'sinopis' => 'Six scholars, members of the Astronomers’ Club, set off on an expedition to the moon. Traveling in a bullet-shaped rocket, these voyagers arrive to meet the moon’s inhabitants: the Selenites. Having to escape the Selenties’ king, the scholars will try to return to Earth in their rocket.',
                'our_take' => 'Hailed as the first sci-fi film, George Méliès’s seminal short embodies the spellbinding possibilities of cinema as a vessel of dreams that shoots for the stars. Achieved through inventive special effects, the image of a rocket ship striking a grimacing moon is forever immortalized in film history.',
                'img_min' => 'img_2_horizontal.jpg',
                'img_max' => 'hero_2.jpg'
            ],
            [
                'name' => 'A SWEDISH LOVE STORY',
                'original_name' => "EN KÄRLEKSHISTORIA",
                'language_id' => 14,
                'year' => 1970,
                'duration'=> 119,
                'sinopis' => 'Two teenagers meet and cautiously fall in love in beautiful surroundings during the peak of an idyllic Swedish summer. Oblivious to social boundaries, they innocently create their own inner world, expecting little from the dysfunctional and world-weary adults around them.',
                'our_take' => 'Thirty years before Songs from the Second Floor, Roy Andersson made his feature debut with this glorious love story. Looser than his later masterworks—but every bit as funny!—its keen eye for balancing the existential and the absurd means there’s little mistaking this for the work of anyone else.',
                'img_min' => 'img_2_horizontal.jpg',
                'img_max' => 'hero_2.jpg'
            ],
        ];
        foreach ($movies as $movie) {
            DB::table('movies')->insert([
                'name' => $movie['name'],
                'original_name' => $movie['original_name'],
                'language_id' => $movie['language_id'],
                'year' => $movie['year'],
                'duration' => $movie['duration'],
                'sinopis' => $movie['sinopis'],
                'our_take' => $movie['our_take'],
                'img_min' => $movie['img_min'],
                'img_max' => $movie['img_max'],
            ]);
        }
    }
}
