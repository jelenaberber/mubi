-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2024 at 07:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mubi`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(5) NOT NULL,
  `writer_id` int(5) NOT NULL,
  `title` varchar(150) NOT NULL,
  `text` text NOT NULL,
  `img_min` varchar(30) NOT NULL,
  `img_max` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `writer_id`, `title`, `text`, `img_min`, `img_max`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 7, 'Krzysztof Kieślowski: Framing Reality', '“It comes from a deep-rooted conviction that if there is anything worthwhile doing for the sake of culture, then it is touching on subject matters and situations which link people, and not those that divide people. There are too many things in the world that divide people, such as religion, politics, history, and nationalism. If culture is capable of anything, then it is finding that which unites us all. And there are so many things that unite people. It doesn\'t matter who you are or who I am, if your tooth aches or mine; it\'s still the same pain. Feelings are what link people together, because the word \'love\' has the same meaning for everybody. Or \'fear\', or \'suffering\'. We all fear the same way and the same things. And we all love in the same way. That\'s why I tell about these things, because in all other things I immediately find division.”\r\n—Krzysztof Kieślowski\r\n\r\nBorn in Warsaw, Poland in 1941, Krzysztof Kieślowski is considered alongside Andrzej Wajda, Roman Polanski, Jerzy Skolimowski , Krzysztof Zanussi, and Agnieszka Holland as one of the titans of  Polish cinema. Initially attracted to the theatre, Kieślowski decided to study film as a route to working in theatre, but it was only on his third attempt that he gained entry to the Lødź Film School.\r\n\r\nFirst truly receiving international recognition for The Decalogue (1988), a series of ten films originally made for Polish television with further funding from West Germany, The Decalogue focuses on the residents of a housing complex in late-Communist era Poland whose lives become subtly intertwined as they face emotional dilemmas that are at once deeply personal and universally human. A series of ten one hour-long films drawing from the Ten Commandments for thematic inspiration and an overarching structure, the films grapple deftly with complex moral and existential questions concerning life, death, love, hate, truth, and the passage of time. Shot by nine different cinematographers with music by Zbigniew Preisner and scripts courtesy of Krzysztof Piesiewicz, two abiding collaborators, and featuring compelling performances from both established and unknown Polish actors, The Decalogue arrestingly explores the unknowable forces that shape our lives. A masterwork, the project stands as one of the twentieth century’s greatest achievements in visual storytelling.\r\n\r\nDrawing huge viewing figures when it screened in Poland, reaching an estimated 15 million viewers according to Kieślowski2, the success of the project, including a FIPRESCI prize at Venice, led to two episodes being expanded to feature length for international release. Particularly potent was A Short Film About Killing (1988), in which a disaffected youth murders a taxi driver and is then tried and executed for his crime. Winning prizes at Cannes, the timing of the release of the film ultimately contributed to the abolition of the death penalty in Poland.  \r\n\r\n“I think I wanted to make this film precisely because all this takes place in my name, because I’m a member of this society, I’m a citizen of this country, Poland, and, if someone in this country puts a noose around someone else’s neck and kicks the stool from under his feet, he’s doing it in my name,”3 commented the director, discussing how his films reflect the social and political climate of his homeland and how his characters are ultimately at the mercy of the state and the wider conditions in which they live.  Considered representative of a cinema of moral anxiety, the director has argued that all his films are about individuals and not politics, but it is impossible to deny that most of them, especially the works up to and including The Decalogue, reflect the political climate of their time and the struggles of the Polish people.  \r\n\r\nWhen considering the themes and aesthetics of the director’s work and their reflection of a commitment to social-realism, it is worth remembering that Kieślowski began his career as a documentary filmmaker in the Poland of the 1960s and 70s. Working in television and focusing on the everyday lives of city dwellers, workers, and soldiers, he was not an overtly political filmmaker but still soon found that attempting to authentically depict Polish life brought him into conflict with the authorities. Workers \'71 (1971), which showed workers discussing the reasons for the mass strikes of 1970, was only shown in a drastically censored form.\r\n\r\nThe director then turned his camera on the workers themselves in Curriculum Vitae (1975), a film that combined documentary footage of Politburo meetings with a fictional story about a man under scrutiny by the officials. Though Kieślowski believed the film\'s message was anti-authoritarian, he was criticised by his colleagues for cooperating with the government in its production. \r\n\r\nKieślowski later declared that he abandoned documentary filmmaking due to two experiences: the censorship of Workers \'71, which caused him to doubt whether truth could be told literally under an authoritarian regime, and an incident during the filming of Station (1980) in which some of his footage was nearly used as evidence in a criminal case. The director decided that fiction not only allowed more artistic freedom, but that it could portray everyday life more truthfully and perhaps with less interference. However, his features were to develop very organically from his documentary practice, with the abiding principle being that the films must evolve “through ideas and not action.”4 The work of Ken Loach, and specifically Kes (1969), acted as something of a template for what the director desired to accomplish.  “There was something about that film that I’ve always been interested in, a documentary registration with the use of fictional film elements.”5\r\n\r\nTaking a customary path to fiction in Poland by making half-hour dramas for television including projects such as Pedestrian Subway (1975) and Personel (1975), an extended work that Kieślowski viewed as inauthentic, the director graduated to a feature length project conceived for the cinema with The Scar (1976). Described as evolving from a socio-realist tradition, the film showed the upheaval of a small town by a poorly planned industrial project and the positioning of a new chemical factory. Placed in charge of the construction is Bednarz (Franciszek Piecka), an honest party man whose conviction that he can serve his people finally dissipates in the face of bureaucracy and the selfishness of the town people he had intended to aid. A film that flickers with ideas and intent, it was not held in high regard by its maker. “There are many reasons why it is not a good film. No doubt the flaw, as with any film that doesn’t work, began with the script. This was based on a report, which was simply a collection of facts, written by a journalist called Karaś. But I deviated from the report a great deal because I had to invent the action, a plot and character, and I did it badly.”6\r\n\r\nCamera Buff (1979) marked a major progression both in terms of Kieślowski’s firmer grasp of fiction filmmaking and in serving to alert the West to his talents. A factory worker, Filip Mosz (Jerzy Stuhr), purchases an 8mm film camera to record his new-born baby. Fascinated by the possibilities of preserving life on film, Mosz begins to use his camera more widely, documenting life in his factory. As his talents soar he gains recognition and begins to win prizes. But his dedication to his camera causes a rupture in his personal life and fissures soon also appear at work when one of his films leads to the sacking of his immediate superior. The film ends with Mosz destroying his cans of film. Displaying Kieslowski’s ethic that all actions must be carried out to their logical conclusions, Camera Buff is redolent of Peeping Tom (1960) in its consideration of how lives mediated by technology ultimately combust. The Armenian director Atom Egoyan would go on to consistently explore similar terrain. Written specifically for Stuhr, the film’s self-reflexive nature and rumination on the difficulties of trying to reconcile film and life is further enhanced by the casting of Zanussi as himself. As for the question of why Filip destroys his films, Kieślowski asserted “he realises that as an amateur filmmaker he’s found himself in a trap and that making films with good intentions, he might prove useful to people who will use the film with bad intentions.”7\r\n\r\nWinning the Grand Prix at the Moscow International Film Festival, Camera Buff undoubtedly marked a major artistic shift in Kieślowski’s practice. From this point on the director’s films still took the penetratingly observant eye of a documentarian, but also considered broader philosophical questions, focused more on the actions of a single individual rather than an entire community.\r\n\r\nBlind Chance (1981) offered further progression and a second successful attempt at combining theme and form in a highly original manner. Featuring a more virtuoso cinematic style, the film is now popularly viewed as the director’s first work of metaphysical genius. Adopting a tripartite structure, the film follows Witek (Boguslaw Linda), a medical student with an uncertain future and dramatizes his journey as a series of different possibilities, all beginning with his attempts to catch a train. In the first section, Witek catches the train and after meeting a Communist party member on board himself becomes a party activist. In the second, rumination Witek is arrested while running for the train and sentenced to a labor camp and becomes a militant member of the opposition. In the final scenario, Witek misses the train, begins a romance with a fellow student, marries and then lives a life free from politics as a doctor.\r\n\r\nSuggesting that chance rules our lives as much as choice, the film was first suppressed and then censored by the Polish government. Kieślowski viewed the film as a considerable improvement on his other excursions into feature length fiction—he was still making documentaries alongside features and T.V. dramas—but a fierce and at times merciless critic of his own endeavors still regarded the film as flawed, mainly in relation to the plotting and the script. It is however instructive that he would later speak of the central kernel of the film as being rich and interesting, specifically in regard to the way it enabled him to examine how outside forces impact upon the fate of mortals. It is undoubtedly the work that birthed both future thematic concerns, working practices and an interest in meta-textual stories and large-scale projects that interconnect and intersect.\r\n\r\nIn No End (1984) the ghost of a young lawyer, Antek, observes the realm of the living in the Poland of 1982, during the country’s period of martial law. Thanks to the help of his widow Ulla (Grazyna Szapolowska, who would feature in A Short Film About Killing), one of Antek’s former clients— a worker accused of being an opposition activist— will now be defended by one of Antek’s colleagues, an older, experienced lawyer. But Ulla finds life without her husband increasingly hard and must make a difficult choice.\r\n\r\nA highly original blend of ghost story, political drama, and meditation on the nature of love that burns with a passionate engagement with the system, No End was Kieślowski’s first collaboration with Piesiewicz and Preisner. A compassionate, spiritual, and frequently tender work, it was highly regarded by Western critics on release, though it did not appear internationally until 1986, and hailed as one of the finest films to emerge from contemporary European cinema.\r\n\r\nKieślowski’s final four films would prove his commercially most successful. International in scope and funding, they continued to focus on moral and metaphysical issues on an abstract level and again frequently returned to notice of chance, and the ways in which people connect and disconnect on a physical and spiritual level. The Double Life of Veronique (1991), one of the director’s most beloved and accessible films, offered a ravishing, mysterious rumination on identity, love, and human intuition. Aided by Slawomir Idziak’s shimmering cinematography and Preisner’s haunting, operatic score, Kieślowski creates one of cinema’s most purely metaphysical works.  \r\n\r\nThe Double Life of Veronique was followed by The Three Colors Trilogy. A return to the multi-strand scope and ambition of The Decalogue, the films—Three Colors: Blue (1993), Three Colors: White (1994) and Three Colors: Red (1994)—were named for the colors of the French flag and stand for the tenets of the French Revolution—liberty, equality, and fraternity—but that hardly begins to explain their enigmatic beauty and rich humanity.\r\n\r\nSet in Paris, Warsaw, and Geneva, and ranging from tragedy to comedy, Blue, White, and Red examine with artistic clarity a group of ambiguously interconnected people experiencing profound personal disruptions. Marked by intoxicating cinematography, again utilizing scripts by Piesiewicz and the scores of Zbigniew Preisner and stirring performances by international figures including Juliette Binoche, Julie Delpy, Irène Jacob, and Jean-Louis Trintignant, Kieślowski’s Three Colors is one of the benchmarks of contemporary European cinema. \r\n\r\nThough enjoying prize triumphs at Venice and Berlin and securing an Academy Award nomination in the Best original Screenplay and Best Director category, Kieślowski was left exhausted by the completion of 14 films between 1975 and 1994. He announced his retirement but returned to start work on a further trilogy Piesiewicz based on the concept of heaven, hell and purgatory. At the age of 54 the director suffered a heart attack and died during open-heart surgery.\r\n', 'ABOUT-LOVE.jpg', 'ABOUT-LOVE.jpg', '2024-03-10 17:45:01', NULL, NULL),
(2, 7, 'A Short Film About Love', 'Like A Short Film About Killing, this is a movie spin-off from Kieslowski\'s ten-part TV series The Decalogue, each segment of which sardonically re-examines one of the Ten Commandments. It\'s about a 19-year-old postal clerk who covets the slightly older woman in the flat opposite, to the extent that he keeps his astronomical telescope fixed on her windows and spends his every free minute glued to its sys-piece. Without fathoming the depths of his passion, the woman learns of his obsession and starts responding to his surveillance - with potentially disastrous results. Well aware that Hitchcock and Michael Powell have been down these streets before him, Kieslowski turns in an absolutely masterly movie that yields equal parts of humour and wry emotional truth. As an account of love in the late 20th century, it\'s in a league of its own. See also Dekalog 6: \'Thou shalt not commit adultery\'.', 'ABOUT-LOVE.jpg', 'ABOUT-LOVE.jpg', '2024-03-10 17:44:57', NULL, NULL),
(5, 11, 'Cannes 2009: \"Spring Fever\" (Lou)', 'Impressionism in the cinema is a volatile, tricky technique, as it strives to give a sense of something rather than the thing itself. To pull off something like Mann’s Miami Vice, Malick’s The New World, and Denis’ 35 rhums—where the object escapes the grasp of the camera—one needs a sure hand and an even surer sensibility.  Lou Ye’s Spring Fever has neither, and confirms, after Summer Palace, that we should be looking elsewhere for interesting Chinese cinema.  Where that film’s hackneyed look at revolution recalled Bertolucci’s regrettable The Dreamers, Spring Fever’s contrived, mobile ménage a trois melodrama steps on the spurned romantic toes of Happy Together, and is but another pale imitation, this time of a far better film.\r\n\r\nIt is a relief, actually, to see international cinema beset by the same problems that plague trendy American “indie” films—inexcusable handheld camerawork, plastic use of digital photography, jump cuts as artless cover-ups, all resulting in terrible decoupage.  Just because your fancy camera can shoot scenes in natural light doesn’t mean your shot looks good, or natural.  And—another tip—avoiding dialog, in inexperienced hands, doesn’t lend sensuality or pregnancy to scenes but instead showcases an inability to characterize people and dramatic situations.\r\n\r\nSpring Fever, from a torrid, trite script about how gay men wreck heterosexual relationships and are left miserable, looks drab, feels drab, and is drab.  Actually, at its best moments Spring Fever has a remarkable drabness that does seem natural; a wandering walk home at the end of the movie is so regular and plain as to break through Lou’s attempt at realism and show us a moment between the calculated tragedy and mourning of the drama.   Happenstance, it seems, as the rest of the movie yawns at its contrived melancholy, its undistinguished—and indistinguishable—images.  Thankfully, instead of talking, characters read poetry out loud and sing karaoke whose lyrics express inner conflict so we don’t need to actually watch the film at all.', 'spring_fever_max.jpg', 'spring_fever_max.jpg', '2024-03-10 17:44:52', NULL, NULL),
(6, 17, 'Review: Spring Fever', 'When a movie takes it upon itself to exorcise a society’s moral and sexual hang-ups, the process can be both exhilarating and exhausting to watch. If the filmmaker’s attempt to play cultural crusader elicits something less than the intended shock and awe, we are left wondering what all the fuss is about, and whether the taboos at hand have not already become old news. Following in the footsteps of such recent hot-blooded provocations as the New French Extremity and the marathon sex in Ang Lee’s PRC-censored Lust, Caution, Lou Ye’s Spring Fever opens with two men, Jiang Cheng (Qin Hao) and Wang Ping (Wu Wei), making their way to a secluded shack in the woods for an afternoon fuck. Cloaked in heavy shadows, their tryst becomes an act of disappearance. “I love you,” one whispers, his wedding ring gleaming in the dark.\r\n\r\nSteadfastly flesh-focused, Spring Fever drifts from one sweaty, murkily lit encounter to the next, manufacturing enough drama along the way for a pair of overlapping love triangles. The first quickly disintegrates when Wang’s wife enlists a private investigator (Chen Sicheng) to follow the two lovers and, upon obtaining evidence of their affair, stomps into Jiang’s office to scold and out him in front of his colleagues. After cutting ties with the emotionally unstable Wang, Jiang returns to the safe bosom of Nanjing’s gay nightlife, where he is embraced as a charismatic drag starlet. Soon enough he finds himself inconveniently smitten with the spy who’s been trailing him, a puppy-eyed heartthrob who also happens to be romantically involved with a woman.\r\n\r\nSex is so sanitized in most films that it’s understandable why its deglamorized depiction is still considered some sort of artistic victory. But Lou isn’t merely interested in coital verisimilitude. His two most recent films may remind American viewers of the late Sixties and early Seventies, when X-rated fare was elevated as edgy, serious art redefining the zeitgeist. Lou uses the emotional undercurrents of intercourse as an entry point for exploring a wider social malaise, so that sex is never just sex—it’s a catharsis of an entire generation’s existential suffering and political anxiety. By weighing his characters’ libidos down with all the dashed hopes of the youths who lived through the 1989 Tiananmen massacre, Lou may have marred Summer Palace (06) with a tone of shrill hysteria, but this also gave that film its unmistakable passion. Spring Fever, on the other hand, employs the messiness of down-low gay life as a stand-in for shiftless, apathetic young adulthood in urban China—a metaphor that makes all the male-on-male action on screen look like an endless cycle of boredom and self-annihilation.\r\n\r\nChinese cinema has offered its fair share of anguished material over the years, but what sets Lou apart from his Sixth Generation peers is his unwavering commitment to personal, subjective experience. You won’t find very many Jia-like long shots in his work; instead, there’s jittery handheld cinematography and dreamlike editing that emphasizes the myriad sensations of the body moving within a disorienting cityscape. Perhaps even more distinctive is that, where the history of Chinese melodrama has tended to depict romances that entail painful compromise or self-denial, Lou consistently envisions love as an all-consuming, destructive force to which his characters have no choice but to submit.\r\n\r\nBy the end, Spring Fever has taken this notion to new sadistic extremes, leaving in its wake a suicide and a gruesome attempted murder. Wallowing in unmitigated bleakness, Mei Feng’s Cannes-feted screenplay misses the chance to explore thematic angles that might have distinguished it from being a dreary Happy Together wannabe. Nanjing is buried underneath layers of dark blues and grays, preventing Spring Fever from redeeming itself as a rare contemporary portrait of this vital city. In his determination to position the film as a universal love story, Lou sacrifices the political engagement and specificity that makes the work of queer auteurs like Cui Zi’en so valuable. When Spring Fever finally ends with an achingly meditative quote from Yu Dafu, it reframes itself as a tribute to this modern Chinese author’s pioneering exploration of sexuality, but also highlights how miserably Lou has failed to learn from his predecessor’s richly emotional, humanistic worldview.', 'spring_fever_max.jpg', 'spring_fever_max.jpg', '2024-03-07 20:28:20', NULL, NULL),
(7, 17, 'Extradimensional Counterpoint: Johnnie Burn, Sound Designer', 'When you start to really hear a movie, you’ll never be able to unhear it. The sound designer, like the cinematographer, is an artist disguised as a technician, a wielder of microphones and mixers whose deepest desire is to serve a cinematic vision. Sound design usually stays in the shadows, but sometimes a film comes along that really makes you listen: Jonathan Glazer’s The Zone of Interest (2023) is one of those films. Its soundscapes are intense, involving, and essential to our narrative comprehension of the film; this is sound design as storytelling, as counterpoint, as argument.\r\n\r\nThe artist in disguise behind The Zone of Interest is Johnnie Burn, a British sound designer who, over the past decade, has carved a reputation as the ear of new auteur cinema. Through longstanding collaborations with Glazer and Yorgos Lanthimos (Burn is also behind the surreal soundscapes of Poor Things [2023]), plus standout contributions to Trey Edward Shults’s Waves (2019), Francis Lee’s Ammonite (2020), and Jordan Peele’s Nope (2022), Burn has established himself as the first choice for filmmakers who care as much about how their films sounds as how they look. Now his work on Glazer’s latest has landed Burn his first Oscar nomination (shared with Tarn Willers) for Best Sound.\r\n\r\nA rigorous study of the banality of evil, The Zone of Interest unfolds mostly within a house on the grounds of the Auschwitz concentration camp where Rudolf Höss (Christian Friedel) lives in bucolic peace with his wife, Hedwig (Sandra Hüller), and their children. In interviews, Glazer has spoken about not wanting to reenact atrocities, with the attendant ethical risk of rendering such horrors as perverse entertainment. Instead he has talked about making two films, “the one you see and the one you hear.” In The Zone of Interest, we do not see inside the camp; this horror is conveyed via a relentless grinding, an indistinct hum coming from just beyond the Hösses’ garden wall, within which we can occasionally discern gunshots and human cries.\r\n\r\nEffectively, it’s Burn’s job to produce that second film, the one we hear, which discordantly plays alongside otherwise benign images. This layering creates unsettling cognitive dissonance; our eyes see tranquil domesticity, our ears hear horror, our mind fills in the blanks. This approach, which Glazer describes as “ears first,” is established in the film’s opening moments: a black screen plunges the viewer into darkness for over a minute, accompanied only by composer Mica Levi’s hellish, swirling prelude. With nothing to look at, our ears search for sense but find only dread and panic.\r\n\r\nDuring preproduction, Burn embarked on a year of archival research, building a bank of sounds. Fine details—knowing that the camp’s guns were old because modern weapons were sent to the front, for instance—were crucial. Acquiring old machines or finding ways to approximate them was important, but even more vital was finding a way to evoke the sounds of the people living, and suffering, within the camp’s walls. After experimenting with actors (“awfully hammy”), Burn eventually found the sounds he needed in the real world. The vocal samples in The Zone of Interest include snippets harvested from the streets of Berlin at 3 a.m., from outside of hospital emergency departments, and from riots in Paris. After principal photography concluded, Burn spent another extended period in close collaboration with Glazer, Levi, and editor Paul Watts as the film took shape in postproduction. The result of this process is an unusually complex soundscape, bookended by Levi’s eerie music.\r\n\r\nThat four-way collaboration between Watts, Levi, Burn, and Glazer was established while working on Under the Skin (2013), Burn’s first film as head of sound. Glazer’s road-movie/sci-fi/horror experiment casts Scarlett Johansson as a man-eating alien driving a van around the gray streets of Glasgow, picking up real Glaswegians, non-actors filmed with hidden cameras, as prey. For this hybrid creature Burn developed a fittingly chimerical working process, borrowing techniques from documentary to gather a library of sounds and then working closely with Levi to develop that alien soundscape: a wash of buzzing strings, manipulated street sound, and ambiguous drones. Glazer’s storytelling is opaque and fragmented, echoing the dislocation of Johansson’s protagonist, but Burn and Levi’s soundtrack connects those disparate pieces—the sci-fi imagery, inky fantasy sequences, documentary-style footage, and bleak Scottish landscapes—drawing the viewer through the sparse story.\r\n\r\nUnder the Skin was a breakthrough for Burn, bringing him to the attention of both Yorgos Lanthimos and Jordan Peele. An invitation to work on The Lobster (2015) kicked off a series of collaborations, and Burn has worked on every Lanthimos film since. Although Glazer and Lanthimos are very different directors, both are driven by a perfectionist obsession with detail. Although Burn describes The Favourite (2018) as a film in which the sound is not especially conspicuous, rewatching with attuned ears reveals the layers that go into creating convincing audio. The Favourite unfolds in a clattering, rattling world of empty corridors and gusty rooms. The palace is opulently alienating, chilly, and claustrophobic, despite its size. The clink of jewelry and swish of skirts are subliminal reminders of gendered social expectations, evoking the rigid hierarchies that confine the female characters. The sounds of the courtiers are brittle and metallic (chinking metal, well-heeled feet on polished wood) while lower-status characters are associated with wetter sounds (bubbling saucepans, squelching mud). The squeaking of rabbits is central to the unsettling final shot, and ducks also play a prominent role (one early idea was to include a laugh track of quacks). In the mix, Burn blurs the boundaries between the film’s harpsichord-heavy chamber score and atmospheric sound, adding a level of uncanny modernity to otherwise familiar classical music. Burn’s work is about more than augmentation; it tells us about the characters and draws out key themes.\r\n\r\nIf working on a period piece like The Zone of Interest or The Favourite is about recreation, then fantasy projects are about invention. Poor Things, which follows the adventures of Bella Baxter (Emma Stone), a corpse reanimated by an eccentric scientist, Godwin Baxter (Willem Dafoe), takes place in a steampunk vision of the nineteenth century. There were no real locations to record, as the film was shot entirely in a studio, so Burn worked instead with found sounds: a horse and cart is accompanied by the sounds of a steam-powered machine, a cruise ship engine by human heartbeats, and Godwin’s digestion by churning test tubes (“We had to understand: would it be really annoying to just hear bubbling the whole time when you\'re trying to listen to the words?”). Combined with Jerskin Fendrix’s score, which explores how wind instruments rely on the interplay of both natural breath and mechanically drawn air, Burn’s work blurs divides between animal and machine. Fittingly for a film about stitched together creatures, the soundscape is itself a Frankenstein’s monster, a disarming fusion of the mechanical and organic.\r\n\r\nI spoke to Burn before the Oscar nominations were announced, but it was already clear that this current wave of success has brought him to a new career peak. We fit in two interviews around his schedule, the first over the phone from a noisy Heathrow departure lounge as Burn set off to Los Angeles for a flurry of awards-season events, the second from his home office in Brighton.\r\n\r\nNOTEBOOK: Sound design is a niche area of the industry, and you don’t come from a film background. How did you find your way into this kind of work?\r\n\r\nJOHNNIE BURN: I always loved music. I grew up in welfare housing, and things were not affordable, but what I did absolutely love was the digital sampling equipment and synthesizers which were coming out. When I was in my teen years, it was a boom time for electronic music equipment. I would spend all my money going to Soho and going around music shops.\r\n\r\nWeirdly, I ended up doing a business degree at City University in London. I would spend most of my time yawning and looking out the window. I had this weird thing where I left an Evian bottle running under a tap, when I went out for a run … and when I came back it exploded. It made me profoundly deaf for about twenty minutes, and I thought that I had lost my hearing. I remember going up to my bedroom, I must have been about nineteen years old. And I was putting my hands on the speakers and realizing that I couldn’t hear anything… I just decided there and then to quit university, and I went and got an apprenticeship at a recording studio in Soho. I worked there for about ten years, and that was my intro. They had this machine called a Synclavier. Every evening at 6 p.m. when the studio closed, this extraordinary piece of kit that Michael Jackson had made Thriller on was mine as long as I could stay awake. I didn\'t know until that point that my hobby was something you could get paid for.\r\n\r\nThrough that route, I met Jonathan Glazer, who is a not-half-bad director! He said to me, around 2002, “I\'m gonna do a film one day, and you’re gonna do the sound for me. Can you figure out what you need to know, the difference between a 30-second TV commercial to movies?” That\'s how I got into movies.\r\n\r\nNOTEBOOK: How did that professional relationship in advertising lead you into films?\r\n\r\nBURN: I worked with Jonathan at this company, [then] I ended up leaving to set up my own business. One of the first things we did together was a Guinness commercial, which is quite well known, with a surfer who goes out to sea and swims amongst horses. We also worked together on the video for UNKLE [featuring Thom Yorke], “Rabbit in Your Headlights,” with a man walking through a tunnel constantly being run over by cars. Jon was very forward-thinking, really one of the first people to include real sound outside of the artist’s music in a pop video.\r\n\r\nI’ve done all of Jon’s work for the last 25 years or something, so I’m very lucky. What’s been extraordinary for me is that I was always absolutely in sound [but] what Jon gave me access to was an extraordinary world of film. I was never a cinephile growing up, but because Jon is such a hands-on director, I’ve spent probably about three years in total nonstop, joined together, sitting in a room with one of the best directors of our time, with him constantly telling me what he likes about various different films, or why the sound that we\'re working on works with that shot. That was my film school, really. \r\n\r\nNOTEBOOK: The first feature film you worked on with Glazer on was Birth [2004].\r\n\r\nBURN: To be honest, I didn’t really know what I was doing with film at all. For the rough mix of Birth Jonathan said, “You’re gonna be the head of sound for this,” and I was like, “Great!” You do something called a temp mix when you are about two months in; you throw it together the best you can and do a screening. [James Bond producer] Barbara Broccoli—she was one of the ten people there—stood up mid-screening and said, “Stop! I cannot watch this anymore!” Because I’d mixed it like a TV commercial. It was super loud and horrible. I actually got fired from Birth, but ultimately Jon hired me back on because he said to the producers, “This guy’s great. I can’t finish the film without him.” But it wasn’t so much a baptism of fire, more of a drowning in fire.\r\n\r\nSo Birth came and went, and I did a lot of great work on it, but I wasn’t the head of sound or the sound designer. And then, about four years before Under the Skin, Jon said, “By the way, I’ve got another film coming. You are definitely doing it. So you have to figure out exactly what you didn’t know, because we’re not going through that again.” So I did a couple of terrible movies which I’m really glad no one ever sees, bottom-dwelling things which I happened to find out about through someone. But they really helped me understand how to tell a story through sound.\r\n\r\nNOTEBOOK: What was it that you had to learn?\r\n\r\nBURN: It was twofold. One was the connections, knowing the right people to do the other teamwork things that we need—like foley, which is a whole big area of film that you don’t really do in commercial [work]. But more so, that sound can be such a powerful tool and have so much more to say than just the narrative of what you\'re saying. It can be juxtaposition and counterpoint. In a commercial you want to have things very clearly there and as loud as possible, an impactful call to action. In a film, you can play a sound which an hour later will appear again later. I had to learn how to use it in a “sound design” kind of way.\r\n\r\nPeople use sound design in different ways. Sound design can mean music, this kind of score which can often be a bit more atonal. And sound designer can also mean the guy who is hired specifically to do the helicopter sounds or the spaceship. The way I tend to use it is more holistic. You’re the person in charge of how the whole aspect of sound is recorded, and how it is used narratively and to emotionally convey the whole narrative of the film from beginning to end, and also how that is presented to the audience.', 'The-Zone-of-Interest.jpg', 'the-favorite.jpg', '2024-03-07 20:36:02', NULL, NULL),
(8, 7, 'Fairy Tale Starts to Melt: Sofia Coppola Discusses \"Priscilla\"', 'Sofia Coppola’s Priscilla (2023) is deceptively soft to the touch. In adapting Priscilla Presley’s 1985 Elvis and Me memoir, the filmmaker brings an astonishing life story to the big screen, but also all of the beautiful, enviable objects that line the cage of celebrity. From luxurious Cadillacs to a lush array of sparkly designer dresses, accessorized with equally shiny handguns, these markers of luxury hum with palpable allure. At the same time, a sense of foreboding looms large. The opening shot lingers on the perfectly manicured feet of Cailee Spaeny’s Priscilla as they gingerly step across a shaggy, coral-pink rug. The seductive, tactile tableau conjures pleasure and comfort, yet it also foreshadows how Priscilla will sink further and further into a gilded sepulcher throughout her turbulent relationship with Elvis, embodied here by Jacob Elordi. \r\n\r\nCelebrated for her keen sensitivity to the aesthetics of girlhood, as seen in The Virgin Suicides (1999), Marie Antoinette (2006), and elsewhere, Coppola—along with costume designer Stacey Battat and production designer Tamara Deverell—furnishes the world of Priscilla with instantly iconic details. Their Graceland, constructed on a soundstage, resembles a wedding cake with a hollow core; the creamy white furniture of the resplendent living room as well as the gaudy lavishness of Elvis’s bedroom bear witness to the couple’s marital breakdown. While the film’s stylized artifice reflects the promulgation of Priscilla’s image to the public, such domestic extravagance is rendered lifeless by Coppola’s muted approach, a juxtaposition that heightens the quietly harrowing tragedy of this emotionally measured film. As her husband and his circle foist a new identity upon her, Priscilla loses the teenage opportunity to sculpt her own inner world, finding herself frozen into an ornamental existence; there is little difference between her and the decorative objects of Graceland. Once the glitz and glamor of celebrity are stripped away, there remains a young woman who, like many of Coppola’s heroines, is forced into a state of perpetual waiting for a change that can’t arrive soon enough.\r\n\r\nOn the day of our interview, Coppola had a packed schedule, including an in-depth conversation with Richard Curtis at the British Film Institute and an appearance at Hatchards bookstore, where she signed copies of her art book, Archive, 1999-2023, which includes visual references as well as behind-the-scenes materials surrounding her filmography. The event was fervidly covered by a legion of teenage girls and young women on social media, a testament to Coppola’s beloved and enduring legacy. In our conversation, we dig deep into the loneliness of sequestered adolescence, a satin-wrapped solitude steeped in the melancholy of fairy tales. \r\n\r\nNOTEBOOK: For each film, you have a mood board of visual references. What did you have in mind for the Priscilla mood board?\r\n\r\nSOFIA COPPOLA: We had so many photos of Priscilla from her life. I think the first ones were her wedding photos. There\'s one image of her with a flower arch standing next to him with this giant wedding cake. To me, that was the strongest image. I was really excited to recreate that moment. She felt sort of framed in this flower archway and they looked a lot like the figures on top of a wedding cake. That became the starting point for the visual world and the kind of over-the-top romance of her world. William Eggleston also did photos of Graceland. [I used] his still lives for reference for the opening and then pieced together pictures from her life and from that era.\r\n\r\nNOTEBOOK: There\'s a lot of melancholy in Eggleston\'s photography. Does that influence the look of the film as well?\r\n\r\nCOPPOLA: I always loved his photos and his color palette and, yeah, I thought of him right away. Also because he was from the South at that time.\r\n\r\nNOTEBOOK: What was it like for you to work on a soundstage, compared to shooting on real locations?\r\n\r\nCOPPOLA: That was really interesting. It\'s the first time I\'ve done that, and I had thought I never wanted to do it. Real places feel like real places, and how can you make [a soundstage] feel naturalistic and real? I was impressed that you can make it feel real by having a great cinematographer and a great production team. It was really exciting to work in a new way because we could shoot so much in a day. We could run back and forth from her childhood Germany bedroom to Graceland. I guess it\'s kind of how TV is done, but it felt like an Old Hollywood studio where the sets and the props are all next to each other. And they just go to another room and make the movie.\r\n\r\nNOTEBOOK: I thought of the Las Vegas set in [Francis Ford Coppola’s] One from the Heart [1981] as well. Sometimes a set can feel more real than a location. And there\'s a tactile quality in Tamara Deverell\'s production design. Lots of close-ups of shaggy rugs, satin beddings, and drapes.\r\n\r\nCOPPOLA: She\'s just so talented. And she was so thoughtful about the textures and the shine. It just felt like Graceland in 1960s Memphis, and Elvis has to have a lavish feeling. It was so in contrast to [Priscilla’s] childhood in Germany, which felt like all the fabrics were scratchy, and it was always winter there.\r\n\r\nNOTEBOOK: Her bedroom is quite cute and quite pink.\r\n\r\nCOPPOLA: It was really cute, yes, but it\'s all faded colors and kind of sad.\r\n\r\nNOTEBOOK: What was it like shooting a feature on digital? Because that\'s also new for you.\r\n\r\nCOPPOLA: Philippe [Le Sourd] suggested it because our shooting schedule was so short. He said, \"I really think we need to shoot digital.\" We both love film, and I prefer to shoot on film, especially for period movies. It just has a different feeling. But with digital, we can move more quickly. I was really happy and impressed with the look he was able to make on digital because I\'m kind of sentimental and snobby about film. Philippe had shot digital before, when we did a short film for the New York Ballet. So I knew that he could make anything look beautiful.\r\n\r\nNOTEBOOK: And the wedding footage was shot on film.\r\n\r\nCOPPOLA: Yes, that was shot on 16mm, as well as the home movies. Priscilla shot a lot of home movies and you can see them on YouTube, so that was a big reference. We shot all the pool parties on 16mm, and also the prop Super 8 cameras had film in them that we used. We wanted to have that feeling of their real home movies. The actors had fun shooting it, and it\'s nice to have a different texture too. \r\n\r\nNOTEBOOK: I\'m also curious about your writing process. On the one hand, it feels like adaptation as you were bringing Priscilla\'s memoir to screen. But you were also working with a real-life, living person. Were there any moments when you and Priscilla might have different interpretations of the same event?\r\n\r\nCOPPOLA: I tried to always defer to her and how she saw it. I wanted to feel her point of view. So I really went by the book. And then we went through the script. I think sometimes she was—you know, she\'s still protective of his legacy. I think I had to push a little more to include the darker side. But she understood that it had to have the highs and lows and the light and the dark to have a full picture of a complex relationship.\r\n\r\nNOTEBOOK: When I read the book, I was amazed to see that the scene when she took the pills and didn\'t wake up for two days actually happened.\r\n\r\nCOPPOLA: I know; I was so shocked! I remember reading that in the book. You\'re like, What? That is so crazy? A lot of the stuff in the book is really surprising.\r\n\r\nNOTEBOOK: Did you try to reserve judgment when it comes to a moment like that?\r\n\r\nCOPPOLA: I mean, when I read the book I definitely had opinions. But then when I made the film, I wanted it to be non-judgmental. I want to really show what it was like through her eyes. And I saw it sort of like Alice in Wonderland, her going through this strange world.\r\n\r\nNOTEBOOK: It reminds me of a dark fairy tale, almost like the Bluebeard story. She has come into this house, and there\'s this mysterious, intimidating figure.\r\n\r\nCOPPOLA: I don\'t know Bluebeard as much, but I did think about it being like a fairy tale, because there are this fairy tale prince and the beautiful castle. And then, to me, the idea was that the fairy tale starts to melt, and it\'s not. In the end, she gets out.', 'pricilla-min.jpg', 'pricilla-max.jpg', '2024-03-07 20:36:02', NULL, NULL);
INSERT INTO `articles` (`id`, `writer_id`, `title`, `text`, `img_min`, `img_max`, `created_at`, `updated_at`, `deleted_at`) VALUES
(9, 17, 'Translation | Jean Eustache on Ernst Lubitsch', 'Jean Eustache orbited the world of criticism without ever fully falling into it. His intellectual biographer, Alain Philippon, describes him as a marginal figure at Cahiers du Cinéma in the 1960s and yet actively involved in the debates unfolding in its offices.1 Though Eustache was close with future Cahiers editor-in-chief Jean-Louis Comolli and the magazine championed his films from the start, his critical output was minuscule. He started contributing to Cahiers only after completing his first short, Bad Company (1963). Even then, he wrote little, publishing a few brief pieces on some early films by Paul Vecchiali, Jean-Daniel Pollet, and Costa-Gavras. Luc Moullet would later admit that prior to Bad Company, he thought him the only person at Cahiers “that had absolutely nothing to do with the movies.”2 Indeed, Eustache was often at the offices to pick up his wife, who was employed as a secretary at the magazine. \r\n\r\nEustache loved cinema, but unsystematically. His tastes were on par with his comrades’ at Cahiers, but unlike Godard or Rivette, he did not write about film history to stake a claim in contemporary cinema. Dreyer, Bresson, Guitry, Mizoguchi, and above all Renoir and Lang were his saints,3 but he never theorized their work in writing. Instead, Eustache’s reflections on cinema have come through interviews and writings on his own movies, which reveal an artist constantly recontouring the limits of his form. \r\n\r\nAlthough last summer’s touring restoration of his complete oeuvre—previously seldom-screened and hard to find—has finally made Eustache more accessible, none of his film criticism is available in English. This lack has only bolstered Eustache’s romantic mien. Reading him through his bracingly and openly autobiographical films can feel overdetermined; our interpretation of them gets sieved through his personal struggles, from his difficult childhood to his early death by suicide at 42. Considering his writing allows us further insight into Eustache as a thinker of film. His brief, theoretically dense 1962 review of Ernst Lubitsch’s masterpiece To Be or Not To Be (1942), published in the journal Cinéma 62, offers insight into his thinking on cinema just as he was making the leap into filmmaking. This text, perhaps Eustache’s only one that looks back on a movie from the past, is all the more interesting because French film culture  of his moment often overlooked Lubitsch; his films didn’t benefit from the critical reappraisal of Hollywood cinema in the 1950s that elevated the profile of directors like Howard Hawks or Alfred Hitchcock. Though Lubitsch was by no means forgotten by Cahiers, it wasn’t until 1968 that he was fully embraced in an issue dedicated to his work.4 Comedy benefited less from these reevaluations than genres like suspense or the western, so it’s especially notable that Eustache is interested in Lubitsch for the ways he troubles the line between comedy and drama.\r\n\r\nAt first blush, Lubitsch and Eustache seem like unlikely bedmates. The former was a cosmopolitan artificer of a weightless bourgeois world. The latter was a naturalist, a provincial proletarian, a grave chronicler of disillusion and the sad passions. But Eustache’s Lubitsch is a formal master deftly laying bare the fundamental relationship between comedy and drama, the actor and reality. We can find kernels of Eustache’s later filmmaking in this analysis. In Eustache’s films, doubling and repetition are often used to underline the dramatic structure of experience, to complicate the relation between reality and appearance. If, for him, tragedy and farce easily transform into each other, Eustache’s focus on the myriad reversals, dupes, and ellipses in To Be or Not To Be suggest he may have gleaned some of this from Lubitsch.5\r\n\r\nEustache’s tantalizingly brief argument about Lubitsch’s mise-en-scène is the article’s most interesting, if beguiling, aspect. In his 1967 essay “Death of a Word,” André S. Labarthe argued that \"mise-en-scène\" had become an irrelevant critical term in light of the stylistic innovations of the New Wave, Eustache’s films included.6 Here, Eustache is already critically interrogating the concept, arguing that Lubitsch has unsettled mise-en-scène, subordinating it to the direction of actors and the script rather than treating it as an autonomous element of film grammar. In this early piece, we can see Eustache’s formal sensibility taking shape. Serge Daney justly eulogized Eustache as “an ethnologist of his own reality.”7 He was also an engineer who continuously resurveyed the structure of his medium.\r\n\r\nIn their offices, German officials discuss the greatness of their country, of their Führer. Hitler appears, preceded by a chorus of “Heil Hitlers” in the halls. Everyone salutes him. Carried away by their enthusiasm, he salutes himself: “Heil myself.” The director objects, because we are in a theater rehearsal in Poland, 1942.9 They are preparing a biting work called Gestapo, and “Heil myself” wasn’t in the script.\r\n\r\nWhat we believed to be reality turns out to be theater. Inversely, comedy will soon turn out to be reality. Later on the lead actor of the company, Joseph Tura, ends up playing the roles first of a Gestapo colonel and then of a Nazi professor spy—both in real life. (One sees that we’re not far from the question posed by the sublime Camilla in Le Carrosse d’or [Jean Renoir, 1952]: “Where does theater end, where does life begin?”) The more he acts, the more he becomes himself through his characters, to the point of anticipating their reactions before ever actually meeting them: while Tura is passing himself off as Colonel Erhardt of the SS, the actual professor reveals that in London they call him “Concentration Camp Erhardt.” He laughs in the same way as the real Colonel Erhardt does later on when Tura, now playing the professor, reveals the nickname to him.\r\n\r\nIt’s significant that the real professor—indeed, this is the key to the film—dies behind the curtain on the stage where Gestapo was being performed at the opening. A fundamental inversion complicates Lubitsch’s mise-en-scène: the real character actually dies on stage, a place dedicated to performance (to falsehood); and the actor (an unreal character by definition), taking over in real life, will be even realer than the actual professor. In this life, as in the theater, truth lies in appearances. When they’ve recovered the body of the professor, who has a beard, the Gestapo sets up a confrontation between the corpse and the impersonator. Alone in the room, Tura shaves the dead man and puts a false beard on his chin. He thus proves through mere appearances, when the SS colonel yanks the beard from the dead man, that the impersonator was not the one the colonel thought. Theater wins the day. But does it hold onto it? No, because soon after, SS officials barge in and tear the fake beard from Tura, revealing his trick. After having won, the theater loses, but then in the next shot, Tura is in a room arguing with members of the Polish resistance. A remarkable ellipsis: believing him to be in danger, they got him away from the Gestapo in this manner. This ceaseless shift of appearances and coups de théâtre in the true sense of the term make the actor the driving character of comedy and, paradoxically, makes comedy the key to drama.', 'film-min.jpg', 'film-max.jpg', '2024-03-07 20:36:02', NULL, NULL),
(10, 7, 'Tales from the International Buster Keaton Convention', 'I don’t know what I expected. For some reason, when booking my plane ticket from Chicago to Muskegon, Michigan (a relatively short, three-hour journey by car, but having lived in the city for over ten years, I no longer have a driver\'s license and thus had to seek another mode of transportation), I just assumed it would be a “normal,” albeit probably smaller, plane that would chariot us intrepid travelers to the neighboring state. So when I turned up at O’Hare, I thought nothing of being asked to provide my weight and having my carry-on bags weighed as well, nothing of the smaller-than-usual waiting area, nothing of taking an elevator directly to the tarmac rather than descending via the usual jet bridge. \r\n\r\nThe sight of the nine-seat Cessna shouldn’t have surprised me, but it did. More disconcerting was the passenger who reveled in telling the lot of us why the plane flew around Lake Michigan, not across it: in case it crashed, it could more easily be found. \r\n\r\nThis seemed an appropriate way to get to the International Buster Keaton Society\'s 2023 Convention, its 29th overall and, per usual, held as close to Keaton’s October 4 birthday as possible (the convention took place on October 6 and 7). The Great Stone Face was certainly prone to feats of bravery; I’m exaggerating a bit here, but smaller planes are more susceptible to accidents than larger ones, and when is flying ever fun? The sort of jovially funereal countenance with which Keaton faced comic adversity seemed the most fitting response to this puddle-jumper—nay, the only response, if one is to consider themselves a true Buster fan. \r\n\r\nThe International Buster Keaton Society is a volunteer-run nonprofit. Their mission, according to their website, is “to foster and perpetuate an appreciation and understanding of the life, career, and films of Buster Keaton, to advocate for historical accuracy about Keaton’s life and work, to encourage dissemination of information about Keaton, and to endorse preservation and restoration of Keaton’s films and performances.” As for what drew me, a devoted Buster fan but a convention novitiate nevertheless, to this rather niche cinema-centric event, I had it on good authority that this convention was the most fun a person could legally have. This was imparted to me by Dennis Scott, house organist at the Music Box Theatre in Chicago, who regularly attends the convention and accompanies its attendant film screenings at Muskegon’s majestic Frauenthal Center. As I trust every silent-film accompanist unquestioningly and I adore Buster Keaton, this seemed like a worthwhile investment of time and money. \r\n\r\nKeaton is an iconic figure, his non-smiling facade and ever-present porkpie hat as familiar to cinema lovers as Chaplin’s bowler hat and toothbrush-style mustache. His lasting appeal ranges from his everyman stoicism, to his bold feats of acrobatics and special effects, to his impact as a consummate auteur. Orson Welles said of Keaton that he was “the greatest of all the clowns in the history of the cinema” and considered him to be one of the most beautiful people ever photographed. Jackie Chan admires the comedian enough to have recreated many of his famous stunts in his own death-defying spectacles of cinema. \r\n\r\nIn many ways Keaton’s star power has endured into the 21st century as that of other classic cinema stars—especially from the silent era—has not. Within just the last decade, he\'s been both celebrated and studied in Peter Bogdanovich\'s 2018 The Great Buster: A Celebration, featuring the likes of Johnny Knoxville, Mel Brooks, and Werner Herzog waxing poetic over their eidolon, and a pair of new books published in 2022: Buster Keaton: A Filmmaker\'s Life by prolific biographer James Curtis (who appeared at the convention via a prerecorded interview with one of the organizers) and Slate critic Dana Stevens’s Camera Man: Buster Keaton, the Dawn of Cinema, and the Invention of the Twentieth Century. \r\n\r\nKeaton’s legacy surpasses these more “inside-baseball” sources. There are references to Keaton in all four John Wick films, and a headline in GeekTyrant, a self-branded “source for geek culture,” goes so far as to claim that “Buster Keaton was the Tom Cruise of the silent film era.” (Another recent headline, in Queerty, exclaims, “Why the gays are still thirsty for silent film star Buster Keaton, the original short king.”) Keaton was undeniably ahead of his time, allowing him to be perennially of the times, whenever that time may be. In a recent screening of Sherlock Jr. (1924) with an audience that included children, hearing their laughter cemented this for me. His brilliance supersedes verbal language, and he uses his body as a tool to communicate broad truths with a quick wit. Keaton is a singular physical talent, but his persona is ultimately relatable: an underdog who emerges as the hero of his own story, unflappable in the face of adversity. His 1921 two-reeler The High Sign begins with an intertitle that reads, “Our hero came from nowhere—He wasn’t going anywhere and got kicked off somewhere”; film writer Brad Stevens remarked in a 2006 roundtable for Eureka’s complete box set of Keaton shorts that the adage “so neatly demonstrates why Keaton appealed to the existentialists.”\r\n\r\nMembers of the Society, Scott included, proudly adopt the label “Damfino” to identify themselves as Keaton fans. This is the name of the titular vessel in Keaton’s 1921 short film The Boat; Keaton’s character had built the craft, which leads to one among many mishaps after he and his family set sail. Then, when all is said and done, and the family has been washed ashore following the loss of their boat, his wife asks where they are. “Damn if I know,” Buster mouths. The phrase, the Society’s website declares, “is also what we encourage anyone in the world to say, anytime and anywhere that times are tough, the questions are tougher, and the answer is just too elusive: Damfino!” How very existential, indeed. \r\n\r\n', 'buster-min.jpg', 'buster-max.jpg', '2024-03-07 20:45:34', NULL, NULL),
(11, 11, 'Island of Misfit Toys: Julio Torres on “Problemista”', 'As a former Saturday Night Live writer, co-creator of the bilingual HBO cult favorite Los Espookys, and government-certified “alien of extraordinary ability,” Julio Torres has been preoccupied with the secret life of objects: the existential dilemmas that plague baubles and trinkets divorced from their original purpose. In Problemista (2024), Torres’s debut feature, the efficacy of form and function, as it applies to the predominant social order and the flimsy structures that reinforce it, is up for constant reconsideration. Through fabulist vignettes and an iridescent array of signs and symbols (the egg, the hourglass, the mythical hydra), the film offers a buoyant critique of institutional frameworks, especially the Kafkaesque bureaucracy of the American immigration system, but also the avarice of corporate banks and the innumerable hypocrisies of the art world. Contributing a singular perspective to the discourse surrounding “the queer art of failure,” Torres views conventional notions of utility with puckish skepticism and advocates for a deliberate misuse of the proverbial toolkit (or toybox) when addressing both genre and his overall design for living. \r\n\r\nTorres stars as the meek and aspirational toymaker Alejandro, who has moved to New York City from El Salvador in hopes of landing a job at Hasbro. His ideas for novelty playthings, like a slinky that refuses to descend the stairs, are Fisher-Price by way of Andy Kaufman, and they do not appear to generate much enthusiasm from his prospective employer. In order to secure a work visa, Alejandro must overcome endless logistical hurdles and navigate a prickly relationship with the high-strung art-world pariah Elizabeth (played with frenzied vitriol and motor-mouthed desperation by Tilda Swinton), whom he encounters while working as an archivist at the cryogenic facility where her husband, Bobby (an unsung painter played by RZA), is frozen. Narration by an unseen Isabella Rossellini provides an oracular, matriarchal ambience to what soon becomes an unlikely buddy comedy with lysergic bursts of social satire. \r\n\r\nWith tableaux reminiscent of a cubicle-bound Remedios Varo and set design from Katie Byron that posits what the office sequence from Jean-Luc Godard’s Tout va bien (1972) would look like as an escape room by Michel Gondry, Alejandro’s journey to self-discovery is mediated and diffracted by the gig economy and the looming prospect of deportation. One of Problemista’s most inspired creations is the personification of Craigslist, embodied by Larry Owens as a malevolent djinn spouting the titles of classified ads from within a swirling torrent of cyber-detritus. In scenes like this, Terry Gilliam comes to mind as a key progenitor: a sketch comedian with an outré sensibility turned surrealist auteur, concerned with the mechanics of broken systems and the narrative potential of the neo-mythological impulse. With Torres, the resulting conceptual sprawl and penchant for niche bits is bolstered by a fascination with the tradition of gay male diva worship, a winsome opposition to neoliberal complacency, and a revitalized approach to cinematic expressionism.\r\n\r\nOn the day of the limited US release of Problemista, I spoke to Torres about queer community, the epistemology of the “Karen,” labyrinths, astrology, and the joy of obstacles.\r\n\r\nNOTEBOOK: In both Los Espookys and Problemista, there\'s a narrative emphasis on crafting, building, and designing in the most literal sense—as a means of self-actualization. How does the act of making inform your ethos as an artist?\r\n\r\nJULIO TORRES: I was really raised with the motto \"If it doesn\'t exist, make it,\" or \"If it doesn\'t exist, don\'t settle for the things that do exist.\" That is not only such a big part of the way that I operate visually, but also the core of this movie: if you are presented with options A, B, and C, but you want D, or some secret, unlisted option, make it. \r\n\r\nNOTEBOOK: You frequently collaborate with your mom and your sister; they\'re both designers, and your mom\'s an architect as well. \r\n\r\nTORRES: My mom, other than being the direct influence for Alejandro\'s mother in the movie, designed the magical playhouse castle that we see in the opening scene. I asked her to draw something up, and we gave it to the production designer, who made it happen, and that was such a joyous moment.\r\n\r\nNOTEBOOK: Did you have a particular transitional object or toy that you were sentimentally attached to as a child?\r\n\r\nTORRES: I had a lot of them. I definitely had a revolving door of Barbies that I really cared about, which inspired the Esmeralda Barbie in the movie. I had a Cinderella and an Ariel Barbie. I loved anything that made me feel like a little storyteller. I was more into dolls and figurines than active objects, because to me I was not the one having fun—I was just a storyteller, and the stories were passing through me. A ball or a puzzle weren\'t that interesting to me, but I did have these little wooden blocks that I would use to make labyrinths and mazes. I love making little mazes.\r\n\r\nNOTEBOOK: For the Barbies to traverse? \r\n\r\nTORRES: No, the Barbies were too big for the mazes.', 'problemista-min.jpg', 'problemista-max.jpg', '2024-03-07 20:45:34', NULL, NULL),
(12, 7, 'Rushes | Berlinale Hackers, Hot for Cronenberg, Crying at the Chocolate Factory', 'Mati Diop’s Dahomey (2024), a documentary about the repatriation of artifacts plundered by French colonists to the present-day Republic of Benin, won the Golden Bear at the Berlinale. It is only the second film from the African continent to take the festival’s top prize.\r\nThe Berlinale has filed criminal charges against activists who hacked the festival’s Instagram account on Sunday to post calls for an immediate and permanent ceasefire in Gaza, which the festival deemed “anti-Semitic.”\r\nThe festival has also released a statement disavowing the acceptance speeches of award winners who used their platform to speak out against the occupation and war. Such speeches included those by Ben Russell and Guillaume Cailleau, whose Direct Action won Best Film in the Encounters section, and by Yuval Abraham, whose No Other Land, co-directed with Basel Adra, Hamdan Ballal, and Rachel Szor, won the Panorama Audience Award for Best Documentary. Abraham, who is Israeli, reported receiving death threats after his speech was excerpted on television in his home country.\r\nLast week’s Independent Spirit Awards were disrupted by a demonstration against the bombardment of Gaza, which made use of a loudspeaker. “I don’t know what they’re saying,” said Babak Jalali as he accepted the John Cassevetes Award for Fremont (2023), “but whatever they’re saying is probably a lot more important than what I’m about to say.”\r\n\r\nKumar Shahani, a pioneer of India’s Parallel Cinema movement, is dead at 83. Shahani is known for such films as Mirror of Illusion (1972), The Saga of Khayal (1989), and Kasba (1990), as well as for his writing and teaching. His passing brings with it a sense of an ending, Shubhra Gupta writes in his obituary for the Indian Express, “of the passionate young votaries who embraced, without wavering even slightly, the art-for-art’s-sake credo.”', 'saga-of-khayal-min.jpg', 'saga-of-khayal.jpg', '2024-03-07 20:45:34', NULL, NULL),
(13, 17, 'Frankenpixie Dream Girl: On Yorgos Lanthimos\'s \"Poor Things\"', 'Little from Sofia Coppola’s Priscilla (2023) has haunted me quite so much as a line from the half-dreamy, half-perverse meet-cute between its fourteen-year-old heroine and her future husband, Elvis Presley: “Why,” Elvis says, upon learning that the girl he’s planning to romance is still a child, “you’re just a baby.” Strangely, no romantic prospect who sets eyes on Bella Baxter (Emma Stone), the lovable Frankengirlboss at the center of Yorgos Lanthimos’s new film, Poor Things (2023), thinks to say the same thing, in spite of the fact that she begins the movie spitting out her food and wobbling unsteadily on her feet. \r\n\r\nPhysically, Bella is—to deploy a phrase I’m certain many female readers will remember hearing in their teens—mature for her age, thanks to her unusual construction: a professor of surgery named Dr. Godwin Baxter (Willem Dafoe), subtly nicknamed “God,” has sewn her together from the body of an adult female suicide and the brain of that woman’s unborn child, producing a happy, curious baby-woman with a perfect face and body and a total lack of sexual self-consciousness. In having three male characters admit to their desire to fuck Bella more or less immediately, Poor Things makes a bleakly funny, baldly provocative point straight out of the gate: that a girl who is hot, always turned on, and as intellectually developed as a toddler would be very, very popular with men. Or, as one of her suitors puts it, scarcely able to contain his glee: “What a very pretty r—rd!”\r\n\r\nSo far, so bracingly nasty—if the film’s suggestion that a man might so desire a naïve, easily controlled lover that one with a baby’s brain would be ideal is a grim exaggeration of the truth, well, hyperbole is the stuff of satire, and some men are more satyrical than others. It’s a pity, then, that Lanthimos’s latest begins at a point of such high savagery only to gradually devolve into something more like an X-rated fairy tale. God, a brilliant scientist, is shunned by the establishment for both his unconventional methods and his strange, carved-pumpkin face; he makes Bella as a curiosity, and learns to love her like a daughter. One day, he brings home a gentle protégé named Max McCandles (Ramy Youssef), and the introduction of a man into the pair’s topsy-turvy, surgically enhanced Garden of Eden is enough to induce Bella to a sexual awakening. She discovers masturbation, and in lieu of biting into a forbidden apple, she inserts one from the fruit bowl into a forbidden place, instead. (Poor Things takes a great many liberties with its quasi-Victorian setting but, alas for Bella, not enough to provide her with a more comfortably-shaped fruit.) \r\n\r\nBewitched by her spontaneity and whimsy, McCandles decides he must marry Bella; the fact that she expresses these qualities by doing things like fingering herself in polite company is an amusing riff on the flogged-to-death archetype of the manic pixie dream girl, whose failure to comply with society’s rules does not exempt her from conforming to the beauty standard. As is typical in cinematic romance, a challenger appears: Duncan Wedderburn (Mark Ruffalo), a lawyer-cum-Casanova-cum-absolute-moron who, visiting God under the auspices of doing some legal work, meets Bella and immediately senses her untapped potential. When the two run off together to spend day and night doing what Bella describes as “furious jumping,” the film transitions from Goreyesque black and white into glorious Technicolor, and we’re meant to see the shift as being indicative of a transformation in our heroine, who develops like a Polaroid as she is shaken by the act of love. (Enlightenment, as it turns out, is only a cock away.) For all of its Wizard of Oz  (1939) visual flair, this polarity—crepuscular gloom for home and childhood, dazzling luridness for erotic maturity—is an unintentional mirror of the film’s refusal to believe in emotional, perhaps even sexual, shades of gray.  \r\n\r\nFrom here, Poor Things follows an eerily similar trajectory to that of Greta Gerwig’s Barbie (2023), being a kind of bildungsroman about a sheltered, man-made heroine venturing out into the intimidating “real” world and discovering what one does with a vagina, if not necessarily in that order. In Lisbon, she learns about dancing and pastel de nata; on a cruise, she quirkily meets an “interesting older lady” and a noble Black philosopher, and begins thinking about politics and socialism and basic existentialism; docking in Alexandria, she learns that poverty exists and has a fleeting breakdown; in Paris, she needs money after giving hers away, and thus ends up embodying another classic filmic cliché, that of the tart with a heart. This is an odyssey of feminine empowerment written by one man (The Favourite [2018] screenwriter Tony McNamara) and directed by another, both of whom are comfortable enough with the material to be a little horny, but not comfortable enough to make it genuinely thorny. It has relatively little salt hidden beneath its kooky sugar, and nothing about this latest film from the director of such cool, peculiar works as Dogtooth (2009) and The Killing of a Sacred Deer (2017) is quite as peculiar as the fact that it’s so thoroughly agreeable, so cute.', 'poor-things-max.jpg', 'poor-things-max.jpg', '2024-03-07 20:45:34', NULL, NULL),
(14, 11, 'The Atrocity Is Present: Jonathan Glazer\'s \"The Zone of Interest\"', 'Watching The Zone of Interest (2023) is an act of endurance. The latest film by British director Jonathan Glazer depicts the lives of the commanding officer at Auschwitz, Rudolf Höss (Christian Friedel), his wife, Hedwig (Sandra Hüller), and their children, with most of the action set within and around their idyllic home. Viewers must face the intolerable sight of the house existing right alongside the concentration camp, with the camp’s roofs hovering above the adjoining perimeter fence. On the camera’s side of this divide, the children swim and Hedwig attends to her garden. Unlike most films about the Holocaust, representations of the Nazi regime’s victims are only occasionally in the foreground, yet—through distant screams, the flicker of flames, alarm sounds, and splatters of blood—the atrocity is present. Meanwhile, the film’s focus is on those who enact this atrocity: how they eat together, how their children play, and how husband and wife make jokes before falling asleep.\r\n\r\nLoosely based on a Martin Amis novel of the same name, The Zone of Interest is only Glazer’s fourth film in 23 years. His retelling takes notable turns away from the 2014 book, in which the Auschwitz commander, named Paul Doll, spies on his cheating wife and her lover before attempting to murder both. Fulfilling the generic expectations of storytelling, Amis uses dramatic action to lead to resolution. By contrast, the film uses the real Auschwitz commander as its protagonist, multiple elements of the novel have been omitted, and the story\'s development in any recognizable sense is absent. It explores the continuation of a horror that cannot be recognized. This denial is sustained by the film’s anti-narrative mode, pressurizing the viewing experience by refusing any of the devices by which stories can give relief or provide moral reassurance.\r\n\r\nIn his feature debut, Sexy Beast (2000), Glazer began portraying those who would disturb a settled world. Sexy Beast is set poolside at a Spanish villa, where the idyll of retired criminal Gal (Ray Winstone) is disturbed by the terrifying Don (Ben Kingsley), who has come to force him back to London for one final job. In Birth (2004), Nicole Kidman plays Anna, a woman whose world, desire, and loyalties are turned upside down when a young boy appears in her New York apartment building claiming he is the reincarnation of her dead husband. Under the Skin (2013) saw the director’s work turn even more macabre, using the extra-worldly tropes of science fiction to depict the journey of a seductive alien, played by Scarlett Johansson, who abducts men from the streets of Glasgow before devouring them. \r\n\r\nGlazer’s disturbed worlds have become weirder and darker with each film. But The Zone of Interest begins with feigned innocence, which we gradually understand as the hateful suppression of the humanity of others. The opening scene is a middle-European pastoral, with bathers by a lake, an orchestra of bird song, and pet dogs roaming among the group of pasty bodies. We see the beautiful life that Höss has given to his family, rewarded for his loyalty to the party (the real-life Höss joined in 1922, eleven years before Hitler came to power). In contrast to Glazer’s three previous films, in which it’s the disturbances of a character—a gangster, a child, an alien—that creates narrative progression, this most recent work is about a totally settled world where the disturbance is internal—where the moral horror can never be acknowledged by any on-screen characters. This sublimation of violent disturbances creates a cognitive dissonance that the audience must endure. The film\'s challenge to its viewers is to comprehend how inhuman cruelties can be enacted by other humans, and how within the sphere of family life such things can become tolerated and lived alongside.\r\n\r\nThroughout, the film gives us space to consider a Nazi officer in his most mundane aspects. There are repeated shots of Höss walking up and down a corridor in the family home, or putting on and taking off parts of his military uniform. In the silence of his actions we grapple with what he stands for. Cinematographer Łukasz Żal arranged to shoot multiple scenes in the house simultaneously with ten cameras. Glazer has stated that the purpose was to “achieve that sense of present tense.” Žal’s cameras produce a documentary style as, again and again, we watch Höss cross his home. The effect is not only anti-narrative but also anti-dramatic. Glazer has said that his formal intention was to remove artifice from the subject matter. This formal absorption within an undramatized present tense reinforces a constant, inescapable, dull reality. Atrocity is present, but we only witness the present tense of the banality adjacent to it.', 'zone-max.jpg', 'zone-min.jpg', '2024-03-07 20:45:34', NULL, NULL),
(15, 17, 'Prove Them Wrong: In Conversation with Alanis Obomsawin', 'This past fall, the Art Museum at the University of Toronto presented The Children Have to Hear Another Story, a retrospective exhibition of the life and work of Alanis Obomsawin, a musician, artist, poet, activist, and documentarian. The show, curated by Richard William Hill and Hila Peleg, began at the Haus der Kulturen der Welt in Berlin, continued at the Vancouver Art Gallery, and will travel to the Musée d\'art contemporain de Montréal in September 2024.\r\n\r\nThe exhibition is organized chronologically, beginning in 1932, when Obomsawin was born in Odanak, an Abenaki reserve near Montreal. When she was nine, her family moved to Trois-Rivières, Quebec, where she was forced to learn French and subjected to physical and verbal abuse by classmates and teachers. In the 1950s, Obomsawin began singing professionally, performing songs in Abenaki, French, and English. She toured across the country, was interviewed by leading newspapers and magazines, and performed on CBC (Canadian Broadcasting Corporation). \r\n\r\nThe title of the show captures a belief that spurred Obomsawin on when she was traveling to schools as a singer: the stories being told about Indigenous people were inaccurate and harmful. “I was fighting against the educational system and what they were teaching about our history, which was false,” Obomsawin told me. In 1967, the National Film Board of Canada (NFB), a prolific producer of documentaries, hired Obomsawin as an advisor for Native work. “I’ve seen Film Board films dealing with Aboriginal people,” she told a producer in an initial meeting, “and we never hear the [Native] people speak.”\r\n\r\nThe traveling retrospective allows viewers to trace the development of Obomsawin’s career, showcasing the breadth of media with which she has worked and demonstrating how her music, fine art, activism, and poetry inform and activate her films. Curators Hill and Peleg have included Obomsawin’s work in other media, including drypoint etchings of horses and other animals, whose shortened limbs and elongated bodies are rendered in soft, hazy lines. This surreal, dreamlike quality throws the realism of the rest of the exhibit into sharp relief.  In a central gallery in Toronto, selected clips of her 1960s television appearances and awards acceptance speeches could be viewed.\r\n\r\nMore than a dozen films are shown in full, with production memoranda, treatments, correspondence, and posters displayed nearby. These documents find Obomsawin pleading for funding and resources from the NFB, organizing the productions, and facilitating their distribution. One through line that emerges is Obomsawin’s insertion of herself into her work. She is not just a narrator or a spectral figure behind the camera but the singular catalyst for these productions and an active participant in the films’ discourse. The ancillary materials in the exhibition speak to her central presence as a kind of corrective strategy, contesting the racist and colonialist lies that had long formed the public perception of Native people in Canada.\r\n\r\nIncident at Restigouche (1984) documents a series of police raids the Quebec government conducted on a Mi\'gmaq reserve. The reserve had rejected the government’s attempts to restrict their salmon fishing, an act of cultural and economic importance for the community. Obomsawin interviews the Minister of Fisheries Lucien Lessard, who ordered the raid. At one point, the Minister says, “You cannot ask for sovereignty because to have sovereignty one must have one’s own culture, language, and land.”\r\n\r\n“Quebec does not begin with the French Canadians,” Obomsawin retorts, and goes on to describe the hypocrisy of Quebec’s fight for their own sovereignty in the light of its rejection of Native sovereignty. One sees in this moment of confrontation the promise that the medium offered Obomsawin: she could be both participant and documentarian, retaining the vitality and improvisation of performance in her new role as a filmmaker.\r\n\r\nI spoke with Obomsawin, now 91 years old, in October. She was in Toronto for the imagineNATIVE Film and Media Arts Festival, where she presented the Alanis Obomsawin Award for Best Long Format Documentary.\r\n\r\n', 'prove-min.jpg', 'prove-max.jpg', '2024-03-07 20:45:34', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments_articles`
--

CREATE TABLE `comments_articles` (
  `id` int(5) NOT NULL,
  `article_id` int(5) NOT NULL,
  `user_id` int(10) NOT NULL,
  `text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments_movies`
--

CREATE TABLE `comments_movies` (
  `comment_id` int(10) NOT NULL,
  `movie_id` int(5) NOT NULL,
  `user_id` int(10) NOT NULL,
  `rate` int(1) NOT NULL,
  `text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments_movies`
--

INSERT INTO `comments_movies` (`comment_id`, `movie_id`, `user_id`, `rate`, `text`, `created_at`) VALUES
(55, 12, 1, 5, 'Great movie', '2024-03-09 17:13:05'),
(56, 1, 1, 5, 'Very nice... I started thinking \"Really?! Shall I watch a film about a trunk?\" and in few minutes It became \"oh wow a tree house!!! I also want to live there!\" eheh beautiful sweet simple tale, which shows the beauty of nature and of being a child. I got transported into a different dimention and I remembered a lot of my childhood, very nice, thank you (:', '2024-03-10 18:25:25'),
(57, 1, 15, 2, 'The scenery is 75% of what makes this short for me. However the remaining 25% is composed by the charming portrait of family life and the time-capsule element of it\'s narrative. Watching the seasons change throughout the course of a year on 35mm is nothing short of amazing. The director has a real eye for capturing magic with the camera.', '2024-03-10 18:25:25'),
(58, 1, 2, 4, 'I loved it, the timeless evocation of childhood, the gorgeous scenery and how we see only a fixed window into it, and those kids made me properly grin', '2024-03-10 18:25:25'),
(59, 2, 14, 5, 'The self assured master of seduction is made a fool of.Whoever made up this story and turned it\r\ninto a movie is brilliant.', '2024-03-10 18:37:18'),
(60, 3, 16, 5, 'Unrequited love that might perhaps not last but the feeling couldn\'t be more intense, Kieślowski explores longing, love and desire from an unconventional angle but still in a moving way. One of a kind experience.', '2024-03-10 18:25:25'),
(61, 3, 3, 4, 'Surveillance equals desire and the peeping obsession here is not only tellling for the young boy and the woman (as this is a reciprocal shape of moral confusion) but, by default and through the sheer mastery of Kieslowski\'s images, for us viewers too. Communicative gaps -verbal and non-verbal- enhance the melancholic realization of disconnection, which, in this longer version, is now partially redeemed at the end', '2024-03-10 18:25:25'),
(62, 4, 8, 3, 'An impressive first shot and then a dive into an anachronism and disturbed state of mind. The trauma of war and the historical weight (the shrine with the dead heroes is uncanny) are given an engaging twist with the Bobbio town and the Trebbia river bathed in Bellochio\'s characteristic blue color. A short that honors one\'s home and its history.', '2024-03-10 18:27:24'),
(63, 4, 18, 3, 'Parfaire une projection subjective vers l\'inactuelle année de résistance italienne mais toujours ensoleillée de retranscriptions documentées, Bellocchio retrace figurativement l\'ode au renoncement des armes, fugitivité de plans rédempteurs. C\'est par un réveil soudain que l\'exode pour la survie tremble une plongée vers une dissemblable temporalité, des locations sautillées les uns envers les autres sans obstacle. A la fois réaliste et biographie rugueuse sous fantastique, on n\'y perd le fil conducteur des lumières d\'obscuration mais non le prisme des réalités alternatives. Revivre dorénavant.', '2024-03-10 18:27:24'),
(64, 5, 11, 3, 'A haunting and beautifully observed portrait of forbidden romance through a love triangle between 2 men and a woman.', '2024-03-10 18:28:12'),
(65, 5, 9, 4, 'Si «Souzhu He» fue la búsqueda incesante de un amor que se ha esfumado caminando a través de un surrealismo mágico japonés, «Spring Fever» sería el hermano con puños poéticos, ojos empalidecidos y aura hostil.\r\n\r\nUna vez más Lou Ye demuestra su versatilidad al tratarse en técnicas del lente, tanto en su intercambiabilidad de planos como en una inmersión del body cam.', '2024-03-10 18:28:12'),
(68, 2, 7, 4, 'Great movie', '2024-03-10 18:45:23');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(3) NOT NULL,
  `name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(1, 'Congo'),
(2, 'Estonia'),
(3, 'Puerto Rico'),
(4, 'Japan'),
(5, 'Tuvalu'),
(6, 'Luxembourg'),
(7, 'Fiji'),
(8, 'Peru'),
(9, 'Spain'),
(10, 'Jamaica'),
(11, 'Samoa'),
(12, 'Panama'),
(13, 'Kuwait'),
(14, 'Solomon Islands'),
(15, 'Anguilla'),
(16, 'Malaysia'),
(17, 'Japan'),
(18, 'United Kingdom'),
(19, 'Tokelau'),
(20, 'French Polynesia'),
(21, 'Burundi'),
(22, 'Vanuatu'),
(23, 'Jamaica'),
(24, 'United Kingdom'),
(25, 'Georgia'),
(26, 'Paraguay'),
(27, 'Dominican Republic'),
(28, 'Ethiopia'),
(29, 'India'),
(30, 'Netherlands'),
(31, 'Peru'),
(32, 'Monaco'),
(33, 'French Guiana'),
(34, 'Marshall Islands'),
(35, 'Croatia'),
(36, 'Romania'),
(37, 'Israel'),
(38, 'Gibraltar'),
(39, 'American Samoa'),
(40, 'Turks and Caicos Islands'),
(41, 'Bouvet Island (Bouvetoya)'),
(42, 'China'),
(43, 'Greece'),
(44, 'Serbia'),
(45, 'Finland'),
(46, 'Albania'),
(47, 'Belgium'),
(48, 'Saint Helena'),
(49, 'Myanmar'),
(50, 'Niue'),
(51, 'Maldives'),
(52, 'Myanmar'),
(53, 'Morocco'),
(54, 'Fiji'),
(55, 'Mauritania'),
(56, 'Kiribati'),
(57, 'Bulgaria'),
(58, 'Afghanistan'),
(59, 'Martinique'),
(60, 'United States of America'),
(61, 'India'),
(62, 'Grenada'),
(63, 'Swaziland'),
(64, 'Syrian Arab Republic'),
(65, 'Grenada'),
(66, 'Thailand'),
(67, 'Saint Martin'),
(68, 'Bahrain'),
(69, 'Libyan Arab Jamahiriya'),
(70, 'El Salvador'),
(71, 'Norway'),
(72, 'Peru'),
(73, 'Mexico'),
(74, 'Niue'),
(75, 'Swaziland'),
(76, 'Hungary'),
(77, 'Haiti'),
(78, 'Turkmenistan'),
(79, 'Chile'),
(80, 'Mayotte'),
(81, 'Monaco'),
(82, 'Korea'),
(83, 'Peru'),
(84, 'Martinique'),
(85, 'Mauritania'),
(86, 'Togo'),
(87, 'Belgium'),
(88, 'Mauritania'),
(89, 'Swaziland'),
(90, 'Thailand'),
(91, 'Thailand'),
(92, 'Serbia'),
(93, 'Zimbabwe'),
(94, 'China'),
(95, 'Malta'),
(96, 'Qatar'),
(97, 'Somalia'),
(98, 'Chad'),
(99, 'Liechtenstein'),
(100, 'Madagascar'),
(101, 'Macao'),
(102, 'Belarus'),
(103, 'Czech Republic'),
(104, 'Turks and Caicos Islands'),
(105, 'Taiwan'),
(106, 'Palau'),
(107, 'Sudan'),
(108, 'Anguilla'),
(109, 'Yemen'),
(110, 'Saint Lucia'),
(111, 'Cote d\'Ivoire'),
(112, 'Ghana'),
(113, 'Mongolia'),
(114, 'Saint Martin'),
(115, 'Ireland'),
(116, 'Isle of Man'),
(117, 'Antigua and Barbuda'),
(118, 'Saint Vincent and the Grenadines'),
(119, 'Guernsey'),
(120, 'Nigeria'),
(121, 'Montserrat'),
(122, 'Iran'),
(123, 'Bermuda'),
(124, 'Oman'),
(125, 'Ireland'),
(126, 'Rwanda'),
(127, 'Nicaragua'),
(128, 'Ukraine'),
(129, 'Holy See (Vatican City State)'),
(130, 'Honduras'),
(131, 'Palestinian Territories'),
(132, 'Cyprus'),
(133, 'Palau'),
(134, 'Belarus'),
(135, 'Maldives'),
(136, 'Mayotte'),
(137, 'Guadeloupe'),
(138, 'Mauritania'),
(139, 'Mayotte'),
(140, 'Liechtenstein'),
(141, 'Austria'),
(142, 'Nauru'),
(143, 'Northern Mariana Islands'),
(144, 'Netherlands Antilles'),
(145, 'Peru'),
(146, 'Macao'),
(147, 'Cayman Islands'),
(148, 'Spain'),
(149, 'Germany'),
(150, 'Hungary'),
(151, 'Latvia'),
(152, 'Czech Republic'),
(153, 'Madagascar'),
(154, 'Micronesia'),
(155, 'Nepal'),
(156, 'Togo'),
(157, 'Honduras'),
(158, 'South Africa'),
(159, 'Poland'),
(160, 'Nicaragua'),
(161, 'Niue'),
(162, 'Finland'),
(163, 'Zimbabwe'),
(164, 'Mozambique'),
(165, 'Colombia'),
(166, 'Guinea-Bissau'),
(167, 'Latvia'),
(168, 'Malawi'),
(169, 'Germany'),
(170, 'Saint Lucia'),
(171, 'Ecuador'),
(172, 'Uganda'),
(173, 'Burkina Faso'),
(174, 'Taiwan'),
(175, 'Saint Lucia'),
(176, 'Greece'),
(177, 'Holy See (Vatican City State)'),
(178, 'Thailand'),
(179, 'Sudan'),
(180, 'Armenia'),
(181, 'Madagascar'),
(182, 'Dominican Republic'),
(183, 'Solomon Islands'),
(184, 'Gabon'),
(185, 'Ethiopia'),
(186, 'Svalbard & Jan Mayen Islands'),
(187, 'Solomon Islands'),
(188, 'Tokelau'),
(189, 'Mongolia'),
(190, 'Tonga'),
(191, 'United States of America'),
(192, 'New Caledonia'),
(193, 'Libyan Arab Jamahiriya'),
(194, 'Armenia'),
(195, 'Albania'),
(196, 'Peru'),
(197, 'Ghana'),
(198, 'Denmark'),
(199, 'Iceland'),
(200, 'France'),
(201, 'Italy'),
(202, 'Hong Kong'),
(203, 'Argentina'),
(204, 'Philippines'),
(205, 'Sweden');

-- --------------------------------------------------------

--
-- Table structure for table `directors`
--

CREATE TABLE `directors` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `directors`
--

INSERT INTO `directors` (`id`, `name`) VALUES
(1, 'Hlynur Palmason'),
(2, 'Nelly Kaplan'),
(3, 'Krzysztof Kieślowski'),
(4, 'Marco Bellocchio'),
(5, 'Lou Ye'),
(6, 'Esteban Sapir'),
(7, 'Abbas Kiarostami'),
(8, 'Lav Diaz'),
(9, 'Yorgos Lanthimos'),
(10, 'Yuri Ancarani'),
(11, 'Georges Méliès'),
(12, 'Roy Andersson');

-- --------------------------------------------------------

--
-- Table structure for table `festivals`
--

CREATE TABLE `festivals` (
  `id` int(3) NOT NULL,
  `name` varchar(70) NOT NULL,
  `logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `festivals`
--

INSERT INTO `festivals` (`id`, `name`, `logo`) VALUES
(1, 'Cannes Film Festival', 'cannes_logo.webp'),
(2, 'Academy Awards', 'logo-academy-awards.webp'),
(3, 'Locarno Film Festival', 'logo-Locarno.webp'),
(4, 'International Film Festival Rotterdam', 'logo-rotterdam.webp'),
(5, 'Berlin International Film Festival', 'logo-berlin.webp'),
(6, 'San Sebastián International Film Festival', 'logo-san-sebastian.webp'),
(7, 'AFI Fest', 'logo-afi.webp'),
(8, 'Venice Film Festival', 'logo-venice.webp'),
(9, 'Toronto International Film Festival', 'logo_tiff.webp'),
(10, 'Busan International Film Festival', 'logo-busan.webp'),
(11, 'Bilbao International Festival of Documentary and Short Films', 'logo-bilbao.webp'),
(12, 'Golden Horse Film Festival', 'logo-golden-horse.webp'),
(13, 'Chicago International Film Festival', 'logo-festival.png'),
(14, 'Argentine Film Critics Association Awards', 'logo-festival.png'),
(15, 'New York Film Festival', 'logo-new-york.webp'),
(16, 'San Francisco International Film Festival', 'logo-san-francisco.webp'),
(17, 'Melbourne International Film Festival', 'logo-festival.png'),
(18, 'CPH:DOX', 'logo-cphdox.webp');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(2) NOT NULL,
  `name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`) VALUES
(1, 'Drama'),
(2, 'Romance'),
(3, 'Silent'),
(4, 'Sci-Fi'),
(5, 'Short'),
(6, 'Documentary'),
(7, 'Avant-Garde'),
(8, 'Cult'),
(9, 'Comedy'),
(10, 'Horor'),
(11, 'Western');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`) VALUES
(2, 'English'),
(3, 'Icelandic'),
(4, 'Polish'),
(5, 'French'),
(6, 'Italian'),
(7, 'Mandarin'),
(8, 'Spanish'),
(9, 'Farsi'),
(10, 'Tagalog'),
(11, 'Greek'),
(12, 'Arabic'),
(13, 'Silent'),
(14, 'Swedish');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(5) NOT NULL,
  `name` varchar(60) NOT NULL,
  `original_name` varchar(60) NOT NULL,
  `director_id` int(11) DEFAULT NULL,
  `language_id` int(11) NOT NULL,
  `year` int(4) NOT NULL,
  `duration` int(3) NOT NULL,
  `sinopis` text NOT NULL,
  `our_take` text NOT NULL,
  `trailer` varchar(500) DEFAULT NULL,
  `img_min` varchar(40) DEFAULT NULL,
  `img_max` varchar(40) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `original_name`, `director_id`, `language_id`, `year`, `duration`, `sinopis`, `our_take`, `trailer`, `img_min`, `img_max`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'NEST', 'HREIÐUR', 1, 3, 2022, 22, 'A story of three siblings building a tree house together over the course of a year. We experience the beauty and brutality of the seasons, as we follow them through their struggles and moments of joy.', 'With a year at home with his children suddenly on his hands, Icelandic rising star Hlynur Pálmason forged his own microcosmic utopia with this warm and whimsical short. Exquisitely capturing the changing seasons on 35mm, Nest is a tactile wonder charged with the untamed energy of its young cast.', 'https://www.youtube.com/embed/svq5OzzT7s4?si=45IG-QDsO4tnUhi7', 'nestfilm.jpg', 'nestfilm.jpg', '2024-03-10 18:19:08', NULL, '2024-03-10 15:42:36'),
(2, 'THE PLEASURE OF LOVE', 'PLAISIR D\'AMOUR', 2, 5, 1991, 102, 'A depressed man of letters, Pierre Arditi, lucks into a tutoring gig and is whisked away to a tropical colonial island. There, three educated and alluring women hire him to tutor the 13-year-old Flo—but they also have plans in mind to seduce him.', 'An island populated by lusty temptresses might sound like the ultimate male fantasy. Under Nelly Kaplan’s satirical and surreal gaze, however, such paradise warps into men’s worst nightmare! Wielding erotic control over a serial Don Juan, the idyll’s sirens playfully subvert the rules of attraction.', 'https://www.youtube.com/embed/dz724UB3KOg?si=AfxA_Z5rT5hixD1z', 'pleasure-of-love_min.jpg', 'pleasure-of-love_max.png', '2024-03-10 17:30:28', NULL, NULL),
(3, 'A SHORT FILM ABOUT LOVE', 'KRÓTKI FILM O MIŁOŚCI', 3, 4, 1988, 84, '19-year-old postal worker Tomek routinely spies on his older neighbor Magda, a sexually liberated artist who lives in the apartment across the courtyard from his. As their private worlds merge, fascination turns to obsession, and the line between love and curiosity becomes blurred.', 'Developed from an episode of Krzysztof Kieślowski’s epic, ten-part television series, Dekalog, this acclaimed romantic comedy-drama tells a darkly twisted and ironic tale of voyeurism and fantasy. Kieślowski brings his typically compelling and cerebral style to explore the feeling—or idea—of love.', 'https://www.youtube.com/embed/A6jFanHPcFM?si=7ldb29F6J6a0lhb3', 'short-film.jpg', 'ABOUT-LOVE.jpg', '2024-03-10 13:29:26', NULL, NULL),
(4, 'THE FIGHT', 'LA LOTTA', 4, 6, 2018, 15, 'It is a sunny day on the river Trebbia. In the distance a patrol of German soldiers is approaching: they are nazis, guns blazing. It seems like they are chasing somebody. Tonino is the fugitive, a partisan with nothing left to do but dive into the river. This river will bring him to his real life.', 'A young partisan drifts through clashing epochs in Marco Bellocchio’s magical-realist short, a poignant ode to the 1940s resistance movement in his Italian hometown of Bobbio. At once a historical witness and a symbol of rebirth, the beautiful Trebbia river provides a beguiling portal to the past.', 'https://www.youtube.com/embed/ono3iYNJ_sg?si=qWN5uYUmDO7zlnrZ', 'la-lotta.jpg', 'fight.webp', '2024-03-10 13:29:23', NULL, NULL),
(5, 'SPRING FEVER', 'CHUN FENG CHEN ZUI DE YE WAN', 5, 7, 2009, 111, 'Wang Ping’s wife suspects him of adultery. She hires Luo Haitao to spy on him and discovers that her husband’s lover is a man. It’s with this man that Luo Haitao and his girlfriend form a torrid love triangle—the beginning of asphyxiating, sultry nights of physical abandon that exalt the senses.', 'The insubordinate nature of Spring Fever detonated when, bypassing the Chinese authorities, the film premiered in Cannes competition during the five-year ban from filmmaking imposed on Lou Ye. A film that challenges social and moral taboos, alive with stirring rebelliousness and queer sensuality.', 'https://www.youtube.com/embed/U0DTUErg9-A?si=IQEtiwn_oS8GtHoZ', 'spring_fever_max.jpg', 'spring_fever_max.jpg', '2024-03-10 13:29:20', NULL, NULL),
(6, 'LA ANTENA', 'LA ANTENA', 6, 8, 2007, 99, 'An entire city has lost its voice. Mr. TV, the owner of the city’s only television channel, is carrying out a sinister plan to control all of the city’s inhabitants. He kidnaps a singer, the only one who still has The Voice. An inventor witnesses the kidnapping and flees to thwart approaching doom.', 'The first film ever to screen on MUBI, this surreal fairytale from visionary auteur Esteban Sapir champions the power of the human voice over consumerism and totalitarian control. Using the language of silent cinema, La Antena devises a fantastical dreamscape, packed with eye-popping visual effects.', 'https://www.youtube.com/embed/dMs0n0qUMUY?si=4-u9LEDxQkh9aG83', 'la_antena.jpg', 'la-antena_max.webp', '2024-03-10 13:29:17', NULL, NULL),
(7, 'TASTE OF CHERRY', 'TA\'M E GUILASS', 7, 9, 1997, 99, 'Middle-aged Mr. Badii wishes to die in a society where suicide is considered an abomination. Driving in the hills above Tehran, he searches for an accomplice who is willing to bury him after he is dead. He meets an assortment of different characters, but each have reasons to turn down the job.', 'Capturing the miracles and mysteries of everyday life in all his films, Iranian master Abbas Kiarostami will always be one of cinema’s greatest poets. His Palme d’Or-winning Taste of Cherry is a spiritual road movie of tremendous humility: a meditation on mortality with an unforgettable coda.', 'https://www.youtube.com/embed/-6tpG3JCAFU?si=c_E7bYN74K53my0z', 'taste-of-cherry.jpg', 'taste-of-cherry-max.webp', '2024-03-10 13:31:53', NULL, '2024-03-10 13:31:52'),
(8, 'EVOLUTION OF A FILIPINO FAMILY', 'EBOLUSYON NG ISANG PAMILYANG PILIPINO', 8, 10, 2005, 99, 'An intimate epic made with uncompromising and austere seriousness that patiently and methodically observes the collapse and hopeful revival of a poor farming clan.', 'From Filipino auteur Lav Diaz comes his greatest epic. Nine years in the making, ten hours of running time (!), first shot on film, then video: this intimate yet expansive family saga will draw you in hypnotically. Like the later Boyhood, marvel as you watch the young actors grow up before you.', 'https://www.youtube.com/embed/79EtADrXuvk?si=le1GAc9Km_7HaJ4G', 'evolution.jpg', 'evolution-max.webp', '2024-03-03 19:31:35', NULL, NULL),
(9, 'DOGTOOTH', 'KYNODONTAS | ΚΥΝΌΔΟΝΤΑΣ', 9, 11, 2009, 97, 'In an effort to protect their children from the corrupting influence of the outside world, a couple transforms their home into a gated compound of cultural deprivation. When the father invites a trusted outsider into their home their reality begins to crumble, with devastating consequences.', 'A festival hit nominated for an Academy Award®, Dogtooth is a darkly comic insight into a surreal world of parental control gone mad. As shocking and brutal as it is humorous, elegant, and entertaining, Greek “Weird Wave” auteur Yorgos Lanthimos’s film is bold and inventive cinema.', 'https://www.youtube.com/embed/yQdjxQN4ieg?si=9-qwmxPZ3d2Ai8bI', 'dogtooth .jpg', 'dogtooth-max.webp', '2024-03-03 19:32:31', NULL, NULL),
(10, 'THE CHALLENGE', 'चुनौती', 10, 12, 2009, 68, 'In an effort to protect their children from the corrupting influence of the outside world, a couple transforms their home into a gated compound of cultural deprivation. When the father invites a trusted outsider into their home their reality begins to crumble, with devastating consequences.', 'A festival hit nominated for an Academy Award®, Dogtooth is a darkly comic insight into a surreal world of parental control gone mad. As shocking and brutal as it is humorous, elegant, and entertaining, Greek “Weird Wave” auteur Yorgos Lanthimos’s film is bold and inventive cinema.', 'https://www.youtube.com/embed/msiaw32R81M?si=_qJE5MXSd0XvyYxM', 'the-challange.webp', 'the-challange.webp', '2024-03-10 18:19:23', NULL, NULL),
(11, 'A TRIP TO THE MOON', 'LE VOYAGE DANS LA LUNE', 11, 13, 1902, 15, 'Six scholars, members of the Astronomers’ Club, set off on an expedition to the moon. Traveling in a bullet-shaped rocket, these voyagers arrive to meet the moon’s inhabitants: the Selenites. Having to escape the Selenties’ king, the scholars will try to return to Earth in their rocket.', '', '//www.youtube.com/embed/LjLARUwvRI8?si=oBeFn9Qli7zzTFg_', 'moon.jpg', 'moon.jpg', '2024-03-10 18:19:31', NULL, NULL),
(12, 'A SWEDISH LOVE STORY', 'EN KÄRLEKSHISTORIA', 12, 14, 1970, 119, 'Two teenagers meet and cautiously fall in love in beautiful surroundings during the peak of an idyllic Swedish summer. Oblivious to social boundaries, they innocently create their own inner world, expecting little from the dysfunctional and world-weary adults around them.', 'Thirty years before Songs from the Second Floor, Roy Andersson made his feature debut with this glorious love story. Looser than his later masterworks—but every bit as funny!—its keen eye for balancing the existential and the absurd means there’s little mistaking this for the work of anyone else.', 'https://www.youtube.com/embed/wvrp7zaZq0o?si=Si-f0tMKEVfOsaba\"', 'love-story.jpg', 'swedish-max.webp', '2024-03-03 19:33:58', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `movies_countries`
--

CREATE TABLE `movies_countries` (
  `id` int(5) NOT NULL,
  `movie_id` int(3) NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies_countries`
--

INSERT INTO `movies_countries` (`id`, `movie_id`, `country_id`) VALUES
(1, 1, 198),
(2, 1, 199),
(3, 2, 200),
(4, 3, 159),
(5, 4, 201),
(7, 5, 200),
(6, 5, 202),
(8, 6, 203),
(9, 7, 122),
(10, 8, 204),
(11, 9, 43),
(13, 10, 200),
(12, 10, 201),
(14, 11, 200),
(15, 12, 205);

-- --------------------------------------------------------

--
-- Table structure for table `movies_festivals`
--

CREATE TABLE `movies_festivals` (
  `id` int(11) NOT NULL,
  `movie_id` int(5) NOT NULL,
  `festival_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies_festivals`
--

INSERT INTO `movies_festivals` (`id`, `movie_id`, `festival_id`) VALUES
(1, 1, 5),
(2, 1, 6),
(4, 1, 7),
(3, 1, 18),
(5, 2, 9),
(8, 3, 3),
(7, 3, 5),
(6, 3, 8),
(9, 3, 9),
(10, 4, 1),
(11, 4, 10),
(12, 4, 11),
(13, 5, 1),
(15, 5, 4),
(14, 5, 9),
(16, 5, 12),
(17, 6, 7),
(18, 6, 13),
(19, 6, 14),
(20, 7, 1),
(21, 7, 3),
(22, 7, 4),
(23, 7, 15),
(25, 8, 4),
(24, 8, 9),
(26, 8, 16),
(27, 9, 1),
(28, 9, 2),
(30, 9, 4),
(29, 9, 9),
(31, 10, 3),
(33, 10, 17),
(32, 10, 18),
(34, 11, 1),
(35, 11, 3),
(36, 11, 4),
(37, 11, 6),
(39, 12, 4),
(38, 12, 5),
(40, 12, 18);

-- --------------------------------------------------------

--
-- Table structure for table `movies_genres`
--

CREATE TABLE `movies_genres` (
  `id` int(10) NOT NULL,
  `genre_id` int(2) NOT NULL,
  `movie_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies_genres`
--

INSERT INTO `movies_genres` (`id`, `genre_id`, `movie_id`) VALUES
(2, 1, 1),
(6, 1, 3),
(8, 1, 4),
(9, 1, 5),
(11, 1, 6),
(14, 1, 7),
(16, 1, 8),
(15, 1, 9),
(22, 1, 12),
(4, 2, 2),
(5, 2, 3),
(10, 2, 5),
(23, 2, 12),
(20, 3, 11),
(19, 4, 11),
(1, 5, 1),
(7, 5, 4),
(21, 5, 11),
(17, 6, 10),
(12, 7, 6),
(13, 8, 6),
(18, 8, 9),
(3, 9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'writer'),
(3, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `role_id` int(1) NOT NULL DEFAULT 3,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(15) NOT NULL,
  `profile_img` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `first_name`, `last_name`, `username`, `email`, `password`, `profile_img`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Jelena', 'Berber', 'jelena_berber', 'jelena.berber00@gmail.com', 'lozinka123', 'avatar.webp', '2024-03-10 17:33:25', NULL, '2024-03-09 19:10:33'),
(2, 3, 'Liliana', 'Morissette', 'schuppe.adeline', 'yjerde@zulauf.org', 'sifra123', 'avatar.webp', '2024-03-09 19:11:55', NULL, '2024-03-09 19:11:55'),
(3, 3, 'Lawson', 'Brown', 'kenneth96', 'bayer.caroline@hotmail.com', 'sifra123', 'avatar.webp', '2024-03-09 19:37:38', NULL, '2024-03-09 19:37:38'),
(4, 3, 'Stewart', 'Auer', 'chester38', 'medhurst.rocky@wiegand.info', 'sifra123', 'avatar.webp', '2024-03-09 21:02:58', NULL, NULL),
(5, 3, 'Cullen', 'McCullough', 'glenda.erdman', 'vmurazik@spencer.biz', 'sifra123', 'avatar.webp', '2024-03-09 21:03:04', NULL, NULL),
(6, 1, 'Demetris', 'Johnson', 'rohan.kaitlin', 'nash.bradtke@ryan.com', 'sifra123', 'avatar.webp', '2024-03-10 11:34:41', NULL, NULL),
(7, 2, 'Howard', 'McDermott', 'erdman.maida', 'oscar03@gmail.com', 'sifra123', 'person_4.jpg', '2024-03-10 11:34:27', NULL, NULL),
(8, 3, 'Laurel', 'Marquardt', 'jalen.harris', 'hmurazik@strosin.biz', 'sifra123', 'avatar.webp', '2024-03-08 19:27:45', NULL, NULL),
(9, 3, 'Mckenzie', 'Hickle', 'vicente23', 'brown.alysson@walker.info', 'sifra123', 'avatar.webp', '2024-03-08 19:27:45', NULL, NULL),
(10, 3, 'Monserrate', 'Jacobs', 'sporer.juvenal', 'bosco.gabe@gmail.com', 'sifra123', 'avatar.webp', '2024-03-09 19:12:54', NULL, '2024-03-09 19:12:54'),
(11, 2, 'Misty', 'Wunsch', 'klein.tina', 'jarret79@donnelly.com', 'sifra123', 'person_2.jpg', '2024-03-09 19:45:40', NULL, NULL),
(12, 3, 'Rozella', 'Smith', 'ibergnaum', 'alexie03@gmail.com', 'sifra123', 'avatar.webp', '2024-03-08 19:27:45', NULL, NULL),
(13, 3, 'Kaden', 'Turcotte', 'clementina.langosh', 'helen.kiehn@yahoo.com', 'sifra123', 'avatar.webp', '2024-03-08 19:27:45', NULL, NULL),
(14, 3, 'Kieran', 'Renner', 'helmer87', 'bridget.morar@yahoo.com', 'sifra123', 'avatar.webp', '2024-03-08 19:27:45', NULL, NULL),
(15, 3, 'Krystal', 'Hansen', 'bethany.kirlin', 'kerluke.estelle@nikolaus.com', 'sifra123', 'avatar.webp', '2024-03-08 19:27:45', NULL, NULL),
(16, 3, 'Lenna', 'Zieme', 'nienow.filiberto', 'kariane94@lind.com', 'sifra123', 'avatar.webp', '2024-03-08 19:27:45', NULL, NULL),
(17, 2, 'Magnolia', 'Cronin', 'arno47', 'mina.johnston@labadie.com', 'sifra123', 'person_3.jpg', '2024-03-09 19:45:44', NULL, NULL),
(18, 3, 'Milton', 'Pfeffer', 'rogahn.aleen', 'anibal.corwin@gmail.com', 'sifra123', 'avatar.webp', '2024-03-08 19:38:56', NULL, NULL),
(19, 3, 'Pansy', 'Goldner', 'anika.jerde', 'vkilback@langosh.biz', 'sifra123', 'avatar.webp', '2024-03-08 19:38:59', NULL, NULL),
(20, 3, 'Tommie', 'Hickle', 'lleannon', 'adolphus45@hotmail.com', 'sifra123', 'avatar.webp', '2024-03-08 19:39:03', NULL, NULL),
(21, 3, 'Emelie', 'Denesik', 'lherzog', 'upton.ernestine@mckenzie.com', 'sifra123', 'avatar.webp', '2024-03-08 19:39:07', NULL, NULL),
(22, 3, 'Ana', 'Antic', 'ana_antic', 'ana.antic@gmail.com', '5555555', 'avatar.webp', '2024-03-08 19:39:11', NULL, NULL),
(23, 3, 'Jelena', 'Berber', 'jsjsjsjsj', 'jsjjsjsjjs@gmail.com', '55555555555', '1709221506_65e0a6820a44d.jpg', '2024-02-29 15:45:06', NULL, NULL),
(24, 3, 'Jelena', 'Berber', 'jelena123456', 'jelena666@gmail.com', 'Lozinka123!', 'avatar.webp', '2024-03-08 19:39:15', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `watchlist`
--

CREATE TABLE `watchlist` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `movie_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `watchlist`
--

INSERT INTO `watchlist` (`id`, `user_id`, `movie_id`) VALUES
(42, 7, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `writer_id` (`writer_id`);

--
-- Indexes for table `comments_articles`
--
ALTER TABLE `comments_articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `article_id` (`article_id`);

--
-- Indexes for table `comments_movies`
--
ALTER TABLE `comments_movies`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `directors`
--
ALTER TABLE `directors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `festivals`
--
ALTER TABLE `festivals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `language_id` (`language_id`),
  ADD KEY `director_id` (`director_id`);

--
-- Indexes for table `movies_countries`
--
ALTER TABLE `movies_countries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_id` (`movie_id`,`country_id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `movies_festivals`
--
ALTER TABLE `movies_festivals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_id` (`movie_id`,`festival_id`),
  ADD KEY `festival_id` (`festival_id`);

--
-- Indexes for table `movies_genres`
--
ALTER TABLE `movies_genres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genre_id` (`genre_id`,`movie_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `watchlist`
--
ALTER TABLE `watchlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`movie_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `comments_articles`
--
ALTER TABLE `comments_articles`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `comments_movies`
--
ALTER TABLE `comments_movies`
  MODIFY `comment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `directors`
--
ALTER TABLE `directors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `festivals`
--
ALTER TABLE `festivals`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `movies_countries`
--
ALTER TABLE `movies_countries`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `movies_festivals`
--
ALTER TABLE `movies_festivals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `movies_genres`
--
ALTER TABLE `movies_genres`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `watchlist`
--
ALTER TABLE `watchlist`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`writer_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `comments_articles`
--
ALTER TABLE `comments_articles`
  ADD CONSTRAINT `comments_articles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comments_articles_ibfk_2` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`);

--
-- Constraints for table `comments_movies`
--
ALTER TABLE `comments_movies`
  ADD CONSTRAINT `comments_movies_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comments_movies_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);

--
-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_ibfk_1` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`),
  ADD CONSTRAINT `movies_ibfk_2` FOREIGN KEY (`director_id`) REFERENCES `directors` (`id`);

--
-- Constraints for table `movies_countries`
--
ALTER TABLE `movies_countries`
  ADD CONSTRAINT `movies_countries_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `movies_countries_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);

--
-- Constraints for table `movies_festivals`
--
ALTER TABLE `movies_festivals`
  ADD CONSTRAINT `movies_festivals_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `movies_festivals_ibfk_2` FOREIGN KEY (`festival_id`) REFERENCES `festivals` (`id`);

--
-- Constraints for table `movies_genres`
--
ALTER TABLE `movies_genres`
  ADD CONSTRAINT `movies_genres_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`),
  ADD CONSTRAINT `movies_genres_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `watchlist`
--
ALTER TABLE `watchlist`
  ADD CONSTRAINT `watchlist_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `watchlist_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
