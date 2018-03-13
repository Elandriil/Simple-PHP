-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Loomise aeg: Veebr 06, 2018 kell 06:32 PM
-- Serveri versioon: 10.1.16-MariaDB
-- PHP versioon: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Andmebaas: `filmid`
--

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `aasta` int(4) NOT NULL,
  `poster_link` text NOT NULL,
  `pealkiri` varchar(50) NOT NULL,
  `riik` varchar(30) NOT NULL,
  `rating` varchar(50) NOT NULL DEFAULT '0',
  `zanr_id` int(11) NOT NULL,
  `trailer_link` text NOT NULL,
  `pikkus` int(3) NOT NULL,
  `kirjeldus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Andmete tõmmistamine tabelile `film`
--

INSERT INTO `film` (`id_film`, `aasta`, `poster_link`, `pealkiri`, `riik`, `rating`, `zanr_id`, `trailer_link`, `pikkus`, `kirjeldus`) VALUES
(1, 1999, 'https://img.yescdn.ru/2016/07/20/cover/4a00330ad38c44e6f0de91f1d2517d59-the-world-is-not-enough-james-bond-007-1468998854.jpg', 'The World Is Not Enough', 'United Kingdom', '10', 1, 'https://www.youtube.com/embed/9nH1DwQP2Xs', 128, 'The film''s plot revolves around the assassination of billionaire Sir Robert King by the terrorist Renard, and Bond''s subsequent assignment to protect King''s daughter Elektra, who had previously been held for ransom by Renard. During his assignment, Bond unravels a scheme to increase petroleum prices by triggering a nuclear meltdown in the waters of Istanbul.'),
(2, 1988, 'http://1125996089.rsc.cdn77.org/wp-content/uploads/2016/09/the_naked_gun_from_the_files_of_police_squad.jpg', 'The Naked Gun: From the Files of Police Squad!', 'United States', '10', 2, 'https://www.youtube.com/embed/DEYpcCCS-QY', 253, 'Detective Frank Drebin (Leslie Nielsen) tries to uncover a plan to assassinate Queen Elizabeth II, who is on a state visit to the USA. The main suspect is Vincent Ludwig, a rich businessman (Ricardo Montalban), who uses a hypnotic device to turn others into murderers. As with previous ZAZ spoof comedies, the plot was mostly culled from another more serious movie. In this case, it was Telefon wherein people were triggered into assassins via hypnotic phone calls (indeed, dialogue in the post-hypnotic suggestion demonstration scene is copied word-for-word from Telefon).\r\n\r\nOn the case, Drebin falls in love with Ludwig''s assistant, Jane Spencer (Priscilla Presley). She knows nothing about Ludwig''s plot, and after the pair spend the night together, Jane helps with Frank''s investigation.'),
(3, 2015, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTUyMTE0ODcxNF5BMl5BanBnXkFtZTgwODE4NDQzNTE@._V1_SY1000_CR0,0,687,1000_AL_.jpg', 'Mad Max: Fury Road', 'Australia', '9', 1, 'https://www.youtube.com/embed/hEJnMQG9ev8', 120, 'An apocalyptic story set in the furthest reaches of our planet, in a stark desert landscape where humanity is broken, and almost everyone is crazed fighting for the necessities of life. Within this world exist two rebels on the run who just might be able to restore order. There''s Max, a man of action and a man of few words, who seeks peace of mind following the loss of his wife and child in the aftermath of the chaos. And Furiosa, a woman of action and a woman who believes her path to survival may be achieved if she can make it across the desert back to her childhood homeland.'),
(4, 1985, 'https://images-na.ssl-images-amazon.com/images/M/MV5BZmU0M2Y1OGUtZjIxNi00ZjBkLTg1MjgtOWIyNThiZWIwYjRiXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SY1000_CR0,0,643,1000_AL_.jpg', 'Back to the Future', 'USA', '8.6', 2, 'https://www.youtube.com/embed/qvsgGtivCgs', 116, 'Marty McFly, a typical American teenager of the Eighties, is accidentally sent back to 1955 in a plutonium-powered DeLorean "time machine" invented by a slightly mad scientist. During his often hysterical, always amazing trip back in time, Marty must make certain his teenage parents-to-be meet and fall in love - so he can get back to the future.'),
(5, 1972, 'https://images-na.ssl-images-amazon.com/images/M/MV5BZTRmNjQ1ZDYtNDgzMy00OGE0LWE4N2YtNTkzNWQ5ZDhlNGJmL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_SY1000_CR0,0,704,1000_AL_.jpg', 'The Godfather', 'USA', '10', 3, 'https://www.youtube.com/embed/sY1S34973zA', 175, 'When the aging head of a famous crime family decides to transfer his position to one of his subalterns, a series of unfortunate events start happening to the family, and a war begins between all the well-known families leading to insolence, deportation, murder and revenge, and ends with the favorable successor being finally chosen.'),
(6, 1974, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMjZiNzIxNTQtNDc5Zi00YWY1LThkMTctMDgzYjY4YjI1YmQyL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_SY1000_CR0,0,702,1000_AL_.jpg', 'The Godfather: Part II', 'USA', '9', 3, 'https://www.youtube.com/embed/qJr92K_hKl0', 202, 'The continuing saga of the Corleone crime family tells the story of a young Vito Corleone growing up in Sicily and in 1910s New York; and follows Michael Corleone in the 1950s as he attempts to expand the family business into Las Vegas, Hollywood and Cuba.'),
(7, 2006, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMDI5ZWJhOWItYTlhOC00YWNhLTlkNzctNDU5YTI1M2E1MWZhXkEyXkFqcGdeQXVyNTIzOTk5ODM@._V1_SY1000_CR0,0,672,1000_AL_.jpg', 'Casino Royale', 'USA', '10', 4, 'https://www.youtube.com/embed/36mnx8dBbGE', 144, 'James Bond goes on his first ever mission as a 00. Le Chiffre is a banker to the world''s terrorists. He is participating in a poker game at Montenegro, where he must win back his money, in order to stay safe among the terrorist market. The boss of MI6, known simply as M sends Bond, along with Vesper Lynd to attend this game and prevent Le Chiffre from winning. Bond, using help from Felix Leiter, Mathis and having Vesper pose as his partner, enters the most important poker game in his already dangerous career. But if Bond defeats Le Chiffre, will he and Vesper Lynd remain safe?'),
(8, 1975, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMmVmODY1MzEtYTMwZC00MzNhLWFkNDMtZjAwM2EwODUxZTA5XkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_SX651_CR0,0,651,999_AL_.jpg', 'Jaws', 'USA', '8.6', 4, 'https://www.youtube.com/embed/U1fu_sA7XhE', 124, 'It''s a hot summer on Amity Island, a small community whose main business is its beaches. When new Sheriff Martin Brody discovers the remains of a shark attack victim, his first inclination is to close the beaches to swimmers. This doesn''t sit well with Mayor Larry Vaughn and several of the local businessmen. Brody backs down to his regret as that weekend a young boy is killed by the predator. The dead boy''s mother puts out a bounty on the shark and Amity is soon swamped with amateur hunters and fisherman hoping to cash in on the reward. A local fisherman with much experience hunting sharks, Quint, offers to hunt down the creature for a hefty fee. Soon Quint, Brody and Matt Hooper from the Oceanographic Institute are at sea hunting the Great White shark. As Brody succinctly surmises after their first encounter with the creature, they''re going to need a bigger boat.'),
(9, 1986, 'https://images-na.ssl-images-amazon.com/images/M/MV5BNDQwNjgwOTg3M15BMl5BanBnXkFtZTcwNjI2ODYyMw@@._V1_.jpg', 'Mezon Ikkoku', 'japan', '8', 5, 'https://www.youtube.com/embed/et7jnupRe7Y', 25, 'Yusaku Godai, a bumbling college student, is in love with his landlord, Kyoko Otonashi. Otonashi, while attracted to Godai, is hesitant, having lost her first husband in the not-too-distant past. The rest is history: Godai schemes to win Otonashi''s heart, all the while battling off his rival, Shun Mitaka, and fending off his lunatic neighbors, who include an old woman who lives on gossip and liquor (Ichinose), a scantily-clad flirt (Akemi), and a bizarre, enigmatic man (Yotsuya)'),
(10, 2005, 'https://images-na.ssl-images-amazon.com/images/M/MV5BOTg2NzA4MTg0Nl5BMl5BanBnXkFtZTcwMDMyNjM1MQ@@._V1_.jpg', ' Mushishi', 'japan', '0', 0, '', 0, ''),
(11, 2005, 'https://images-na.ssl-images-amazon.com/images/M/MV5BOTg2NzA4MTg0Nl5BMl5BanBnXkFtZTcwMDMyNjM1MQ@@._V1_.jpg', 'Mushishi', 'japan', '7', 5, 'https://www.youtube.com/embed/CXhPRWY1L0E', 24, 'They are neither plants nor animals. They differ from other forms of life such as the micro-organisms and the fungi. Instead they resemble the primeval body of life and are generally known as "Mushi". Their existence and appearance are unknown to many and only a limited number of humans are aware of them. Ginko is a "Mushi-shi" who travels around to investigate and find out more about the "Mushi". In the process, he also lends a helping hand to people who face problems with supernatural occurrences which may be related to the "Mushi".'),
(12, 2016, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTgyMDc0OTI0NF5BMl5BanBnXkFtZTgwOTk1Mjg2MTI@._V1_SY1000_CR0,0,674,1000_AL_.jpg', 'Their Finest', 'Uk', '9', 6, 'https://www.youtube.com/embed/IDdbBRlszHQ', 117, 'A former secretary, newly appointed as a scriptwriter for propaganda films, joins the cast and crew of a major production while the Blitz rages around them.'),
(13, 2017, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMjAzMTE1NzQxNF5BMl5BanBnXkFtZTgwNjcwODY3MTI@._V1_SY1000_CR0,0,674,1000_AL_.jpg', ' Everything, Everything', 'USA', '7', 6, 'https://www.youtube.com/embed/0LyEE7eR0nM', 96, 'A 17 year old girl named Madeline Whittier has a rare disease that causes her to have to stay indoors 24/7 with her filtered air. Her whole life is basically books, her mom, and Carla(her nurse). One day, a moving truck pulls in next door. There she sees Olly. Olly Bright is Maddy''s new neighbor. They get to know each other through emails. The more they get to know each other, the more they fall in love. Olly starts to make Maddy realize that she isn''t really living. This starts the adventures of Maddy''s new life.'),
(14, 2017, 'https://images-na.ssl-images-amazon.com/images/M/MV5BNzI5MzM3MzkxNF5BMl5BanBnXkFtZTgwOTkyMjI4MTI@._V1_SY1000_CR0,0,673,1000_AL_.jpg', 'Alien: Covenant', 'UK', '6', 7, 'https://www.youtube.com/embed/svnAD0TApb8', 122, 'The crew of the colony ship Covenant, bound for a remote planet on the far side of the galaxy, discovers what they think is an uncharted paradise, but is actually a dark, dangerous world. When they uncover a threat beyond their imagination, they must attempt a harrowing escape'),
(15, 2014, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTAwMjU5OTgxNjZeQTJeQWpwZ15BbWU4MDUxNDYxODEx._V1_SY1000_CR0,0,674,1000_AL_.jpg', 'Guardians of the Galaxy', 'USA', '8', 7, 'https://www.youtube.com/embed/pE9vypfwbvk', 121, 'After stealing a mysterious orb in the far reaches of outer space, Peter Quill from Earth, is now the main target of a manhunt led by the villain known as Ronan the Accuser. To help fight Ronan and his team and save the galaxy from his power, Quill creates a team of space heroes known as the "Guardians of the Galaxy" to save the world.'),
(16, 2017, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMjQ3MDA0ODA2N15BMl5BanBnXkFtZTgwNzg0NzgwMjI@._V1_SY1000_CR0,0,676,1000_AL_.jpg', ' It Comes at Night', 'USA', '6', 8, 'https://www.youtube.com/embed/o-0hcF97wy0', 97, 'Secure within a desolate home as an unnatural threat terrorizes the world, the tenuous domestic order he has established with his wife and son is put to the ultimate test with the arrival of a desperate young family seeking refuge. Despite the best intentions of both families, paranoia and mistrust boil over as the horrors outside creep ever-closer, awakening something hidden and monstrous within him as he learns that the protection of his family comes at the cost of his soul.'),
(17, 2016, 'https://images-na.ssl-images-amazon.com/images/M/MV5BZGI5ZTU2M2YtZWY4MC00ZDFhLTliYTItZTk1NjdlN2NkMzg2XkEyXkFqcGdeQXVyMjY5ODI4NDk@._V1_SY1000_SX625_AL_.jpg', 'Don''t Breathe', 'USA', '7', 8, 'https://www.youtube.com/embed/76yBTNDB6vU', 88, 'Rocky, a young woman wanting to start a better life for her and her sister, agrees to take part in the robbery of a house owned by a wealthy blind man with her boyfriend Money and their friend Alex. But when the blind man turns out to be a more ruthless adversary than he seems, the group must find a way to escape his home before they become his latest victims.'),
(18, 2003, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTU1NDg1Mzg4M15BMl5BanBnXkFtZTYwMDExOTc3._V1_.jpg', 'Kill Bill: Vol. 1', 'USA', '7', 9, 'https://www.youtube.com/embed/7kSuas6mRpk', 111, 'The lead character, called ''The Bride,'' was a member of the Deadly Viper Assassination Squad, led by her lover ''Bill.'' Upon realizing she was pregnant with Bill''s child, ''The Bride'' decided to escape her life as a killer. She fled to Texas, met a young man, who, on the day of their wedding rehearsal was gunned down by an angry and jealous Bill (with the assistance of the Deadly Viper Assassination Squad). Four years later, ''The Bride'' wakes from a coma, and discovers her baby is gone. She, then, decides to seek revenge upon the five people who destroyed her life and killed her baby. The saga of Kill Bill Volume I begins.'),
(19, 2001, 'https://images-na.ssl-images-amazon.com/images/M/MV5BNWM2MDZmMDgtYjViOS00YzBmLWE4YzctMDMyYTQ2YTc4MmVkXkEyXkFqcGdeQXVyNDk3NzU2MTQ@._V1_SY1000_CR0,0,666,1000_AL_.jpg', 'Mulholland Dr.', 'France', '8', 9, 'https://www.youtube.com/embed/jbZJ487oJlY', 147, 'A bright-eyed young actress travels to Hollywood, only to be ensnared in a dark conspiracy involving a woman who was nearly murdered, and now has amnesia because of a car crash. Eventually, both women are pulled into a psychotic illusion involving a dangerous blue box, a director named Adam Kesher, and the mysterious night club Silencio.'),
(20, 2017, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTYyMTcxNzc5M15BMl5BanBnXkFtZTgwOTg2ODE2MTI@._V1_SY1000_CR0,0,674,1000_AL_.jpg', 'Pirates of the Caribbean: Dead Men Tell No Tales', 'USA', '9', 10, 'https://www.youtube.com/embed/a5V5C8mEVzY', 129, 'Captain Jack Sparrow finds the winds of ill-fortune blowing even more strongly when deadly ghost pirates led by his old nemesis, the terrifying Captain Salazar, escape from the Devil''s Triangle, determined to kill every pirate at sea...including him. Captain Jack''s only hope of survival lies in seeking out the legendary Trident of Poseidon, a powerful artifact that bestows upon its possessor total control over the seas.'),
(22, 2017, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTE0Mjg4MTMwMDZeQTJeQWpwZ15BbWU4MDAwMDQ1ODAy._V1_SY1000_CR0,0,674,1000_AL_.jpg', 'Dunkirk', 'Netherlands', '0', 11, 'https://www.youtube.com/embed/F-eMt3SrfFU', 0, 'Evacuation of Allied soldiers from Belgium, the British Empire, Canada, and France, who were cut off and surrounded by the German army from the beaches and harbor of Dunkirk, France, between May 26- June 04, 1940, during Battle of France in World War II.'),
(23, 2016, 'https://images-na.ssl-images-amazon.com/images/M/MV5BYTI5NmI0N2UtOWQyOC00MDg2LWI5YWUtNWEwZTgyM2VlYThmXkEyXkFqcGdeQXVyMTk1MDM0OTc@._V1_SY1000_CR0,0,675,1000_AL_.jpg', 'The Promise', 'Spain', '5', 11, 'https://www.youtube.com/embed/mtekphm2ipM', 133, 'Set during the last days of the Ottoman Empire, The Promise follows a love triangle between Michael, a brilliant medical student, the beautiful and sophisticated Ana, and Chris - a renowned American journalist based in Paris.'),
(25, 1555, 'https://upload.wikimedia.org/wikipedia/en/d/d8/CrazyFilm.jpg', 'CRAZY', 'Estonia', '1', 2, 'https://www.youtube.com/watch?v=OzvasAJIHb4', 1, 'Testing');

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `komentaar`
--

CREATE TABLE `komentaar` (
  `id_komm` int(11) NOT NULL,
  `pealkiri` varchar(30) NOT NULL,
  `sisu` text NOT NULL,
  `kasutaja_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `kuup` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `pass` text NOT NULL,
  `userName` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `isAdmin` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `zanr`
--

CREATE TABLE `zanr` (
  `id_zanr` int(11) NOT NULL,
  `nimetus` varchar(30) NOT NULL,
  `kirjeldus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Andmete tõmmistamine tabelile `zanr`
--

INSERT INTO `zanr` (`id_zanr`, `nimetus`, `kirjeldus`) VALUES
(1, 'Action', 'pew-pew'),
(2, 'Comedy', 'muahahaa'),
(3, 'Drama', 'cry a lil'),
(4, 'Adventure', 'exploring cave and stuff'),
(5, 'Anime', 'japanese animation'),
(6, 'Romance', 'awwwwwwwwww'),
(7, 'Sci-fi', 'Aliens and stuff'),
(8, 'Horror', 'scary stuff'),
(9, 'Thriller', 'suspension till the very end'),
(10, 'Fantasy', 'elves and stuff'),
(11, 'History', 'hitler won');

--
-- Indeksid tõmmistatud tabelitele
--

--
-- Indeksid tabelile `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indeksid tabelile `komentaar`
--
ALTER TABLE `komentaar`
  ADD PRIMARY KEY (`id_komm`);

--
-- Indeksid tabelile `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- Indeksid tabelile `zanr`
--
ALTER TABLE `zanr`
  ADD PRIMARY KEY (`id_zanr`);

--
-- AUTO_INCREMENT tõmmistatud tabelitele
--

--
-- AUTO_INCREMENT tabelile `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT tabelile `komentaar`
--
ALTER TABLE `komentaar`
  MODIFY `id_komm` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT tabelile `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT tabelile `zanr`
--
ALTER TABLE `zanr`
  MODIFY `id_zanr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
