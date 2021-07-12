-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2020 at 07:37 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netflix`
--

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `Id_Movies` varchar(100) NOT NULL,
  `Id_User` varchar(50) NOT NULL,
  `Id_Pri` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`Id_Movies`, `Id_User`, `Id_Pri`) VALUES
('6104062610114', '0', 2),
('6104062610131', '0', 3),
('6104062610131', '1', 20),
('6104062610190', '1', 21),
('6104062611155', '1', 22),
(' 6104062610141', '4', 29),
('6104062610135', '4', 30),
(' 6104062610139', '0', 31),
('6104062610133', '11', 32),
('', '0', 34);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `Username` varchar(20) NOT NULL,
  `Id_Movies` varchar(100) NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`Username`, `Id_Movies`, `DateTime`) VALUES
('a', '6104062610131', '2020-09-28 18:21:00'),
('a', '6104062610114', '2020-09-28 18:55:39'),
('a', '6104062610114', '2020-09-28 19:12:35'),
('a', '6104062610114', '2020-09-28 19:14:45'),
('a', '6104062610114', '2020-09-28 19:14:47'),
('a', '6104062610114', '2020-09-28 19:17:39'),
('a', '6104062610131', '2020-09-28 20:06:00'),
('a', '6104062610190', '2020-09-28 20:06:05'),
('a', '6104062611155', '2020-09-28 20:06:08'),
('a', '6104062610114', '2020-09-28 20:16:26'),
('a', '6104062610131', '2020-09-28 20:17:41'),
('a', '6104062610114', '2020-09-28 20:24:29'),
('a', '6104062610114', '2020-09-28 20:25:12'),
('a', '6104062610114', '2020-09-28 20:30:00'),
('a', '6104062611155', '2020-09-28 20:31:16'),
('a', '6104062610114', '2020-10-04 04:47:11'),
('a', '6104062610114', '2020-10-04 20:58:07'),
('a', '6104062610131', '2020-10-04 21:15:47'),
('a', '6104062610114', '2020-10-04 21:16:57'),
('a', '6104062610114', '2020-10-04 21:22:19'),
('a', '6104062610114', '2020-10-04 21:22:27'),
('a', '6104062610114', '2020-10-04 21:46:07'),
('a', '6104062610114', '2020-10-04 21:46:23'),
('a', '6104062610131', '2020-10-04 21:46:36'),
('a', '6104062610190', '2020-10-04 21:46:39'),
('a', '6104062611155', '2020-10-04 21:46:42'),
('a', '6104062610114', '2020-10-04 21:49:07'),
('a', '6104062610114', '2020-10-04 21:49:30'),
('a', '6104062610131', '2020-10-04 21:49:49'),
('a', '6104062610131', '2020-10-04 21:50:30'),
('a', '6104062610114', '2020-10-04 21:50:47'),
('a', '6104062610114', '2020-10-04 21:53:32'),
('a', '6104062610114', '2020-10-04 21:54:22'),
('a', '6104062610114', '2020-10-04 21:58:06'),
('a', '6104062610114', '2020-10-04 21:59:45'),
('a', '6104062610114', '2020-10-04 22:00:41'),
('a', '6104062610114', '2020-10-04 22:16:39'),
('a', '6104062610131', '2020-10-04 22:16:47'),
('a', '6104062610190', '2020-10-04 22:16:50'),
('a', '6104062610114', '2020-10-04 22:16:59'),
('a', '6104062610131', '2020-10-04 22:17:14'),
('a', '6104062610190', '2020-10-04 22:17:25'),
('a', '6104062610114', '2020-10-04 23:00:43'),
('a', '6104062610190', '2020-10-04 23:00:46'),
('a', '6104062610114', '2020-10-04 23:00:57'),
('a', '6104062610131', '2020-10-04 23:03:33'),
('a', '6104062610190', '2020-10-04 23:03:50'),
('a', '6104062610114', '2020-10-04 23:57:49'),
('a', '6104062610114', '2020-10-05 00:10:05'),
('a', '6104062610131', '2020-10-05 00:13:54'),
('q', '6104062610114', '2020-10-05 00:17:56'),
('q', '6104062610114', '2020-10-05 01:12:15'),
('q', '6104062610131', '2020-10-05 01:12:22'),
('q', '6104062610131', '2020-10-05 01:27:23'),
('q', '6104062610114', '2020-10-05 01:27:29'),
('q', '6104062610190', '2020-10-05 01:27:35'),
('q', '6104062610114', '2020-10-05 01:52:35'),
('q', '6104062611155', '2020-10-05 01:53:03'),
('q', '6104062611155', '2020-10-05 01:53:08'),
('a', '6104062610114', '2020-10-08 18:42:50'),
('e', '6104062610131', '2020-10-08 18:46:33'),
('a', '6104062610114', '2020-10-10 01:35:06'),
('e', '6104062610190', '2020-10-10 01:35:47'),
('a', '6104062610190', '2020-10-10 01:37:04'),
('e', '6104062610131', '2020-10-10 01:37:55'),
('a', '6104062610190', '2020-10-10 01:39:52'),
('a', '6104062610190', '2020-10-10 01:40:01'),
('e', '6104062610114', '2020-10-10 01:42:04'),
('a', '6104062610114', '2020-10-10 01:44:33'),
('e', '6104062610114', '2020-10-10 01:44:55'),
('a', '6104062610114', '2020-10-10 01:45:47'),
('e', '6104062610131', '2020-10-10 01:46:14'),
('a', '6104062611155', '2020-10-11 02:55:37'),
('a', '6104062610114', '2020-10-11 02:56:01'),
('a', '6104062610190', '2020-10-11 03:53:17'),
('a', '6104062610114', '2020-10-11 04:33:44'),
('a', '6104062610114', '2020-10-11 04:38:49'),
('a', '6104062610114', '2020-10-11 04:45:26'),
('a', '6104062610132', '2020-10-20 12:02:04'),
('a', '6104062610133', '2020-10-20 12:02:10'),
('a', '6104062610114', '2020-10-20 12:02:13'),
('a', '6104062610132', '2020-10-20 12:04:16'),
('a', '6104062610133', '2020-10-20 12:04:23'),
('a', '6104062610132', '2020-10-20 12:05:11'),
('a', '6104062610133', '2020-10-20 12:06:00'),
('a', '6104062610132', '2020-10-20 12:06:05'),
('a', '6104062610132', '2020-10-20 12:08:17'),
('a', '6104062610132', '2020-10-20 12:08:44'),
('a', '6104062610136', '2020-10-20 12:15:27'),
('a', '6104062610135', '2020-10-20 12:15:32'),
('a', '6104062610133', '2020-10-20 12:15:37'),
('a', '6104062610132', '2020-10-20 12:15:39'),
('a', '6104062610131', '2020-10-20 12:15:42'),
('a', '6104062610114', '2020-10-20 12:15:44'),
('a', '6104062610135', '2020-10-20 12:15:46'),
('a', '6104062610136', '2020-10-20 12:15:51'),
('a', ' 6104062610139', '2020-10-20 12:27:48'),
('a', ' 6104062610140', '2020-10-20 12:27:56'),
('a', '6104062610132', '2020-10-20 12:28:00'),
('a', '6104062610133', '2020-10-20 12:28:02'),
('n', ' 6104062610139', '2020-10-20 12:57:00'),
('n', ' 6104062610140', '2020-10-20 12:57:26'),
('n', ' 6104062610141', '2020-10-20 12:57:28'),
('n', '6104062610114', '2020-10-20 12:57:30'),
('n', '6104062610131', '2020-10-20 12:57:37'),
('n', '6104062610132', '2020-10-20 12:57:39'),
('n', '6104062610133', '2020-10-20 12:57:43'),
('n', '6104062610135', '2020-10-20 12:57:45'),
('yyy', ' 6104062610139', '2020-10-20 13:02:14'),
('yyy', ' 6104062610140', '2020-10-20 13:02:15'),
('yyy', ' 6104062610141', '2020-10-20 13:02:17'),
('yyy', '6104062610114', '2020-10-20 13:02:18'),
('yyy', '6104062610131', '2020-10-20 13:02:20'),
('yyy', '6104062610132', '2020-10-20 13:02:22'),
('yyy', '6104062610133', '2020-10-20 13:02:23'),
('yyy', '6104062610135', '2020-10-20 13:02:26'),
('Chanasit', ' 6104062610139', '2020-10-20 13:03:20'),
('Sirawit', ' 6104062610139', '2020-10-20 13:27:48'),
('Sirawit', ' 6104062610140', '2020-10-20 13:27:50'),
('Sirawit', ' 6104062610141', '2020-10-20 13:27:52'),
('sirawit', '6104062610190', '2020-10-20 13:28:26'),
('sirawit', ' 6104062610139', '2020-10-20 13:28:31'),
('sirawit', ' 6104062610140', '2020-10-20 13:28:33'),
('sirawit', ' 6104062610141', '2020-10-20 13:28:34'),
('sirawit', '6104062610131', '2020-10-20 13:28:36'),
('sirawit', '6104062610132', '2020-10-20 13:28:38'),
('sirawit', '6104062610133', '2020-10-20 13:28:40'),
('chanasit', '6104062610190', '2020-10-20 13:33:28'),
('chanasit', '6104062610140', '2020-10-20 13:33:35'),
('chanasit12', ' 6104062610139', '2020-10-20 13:36:26'),
('a', ' 6104062610139', '2020-10-20 13:41:13'),
('zz', '6104062610133', '2020-10-20 13:43:21'),
('zz', '6104062610133', '2020-10-20 13:44:06'),
('chanasit12', ' 6104062610139', '2020-10-20 14:09:36'),
('chanasit12', ' 6104062610139', '2020-10-20 14:12:47'),
('baramee', ' 6104062610139', '2020-10-20 14:18:08'),
('baramee', ' 6104062610140', '2020-10-20 14:18:16'),
('Pinyaporn', ' 6104062610139', '2020-10-20 14:26:31'),
('Pinyaporn', ' 6104062610140', '2020-10-20 14:26:38'),
('Chanasit Lortae', ' 6104062610139', '2020-10-20 14:52:31'),
('Chanasit Lortae', ' 6104062610139', '2020-10-20 14:53:14'),
('Chanasit Lortae', ' 6104062610140', '2020-10-20 14:55:37'),
('a', '', '2020-10-20 15:00:29'),
('a', '', '2020-10-20 15:00:53'),
('a', '', '2020-10-20 15:01:08'),
('a', '', '2020-10-20 15:01:23'),
('a', '', '2020-10-20 15:05:28'),
('a', ' 6104062610139', '2020-10-20 15:09:48'),
('a', '6104062610131', '2020-10-20 15:17:57'),
('a', ' 6104062610139', '2020-10-20 15:18:43');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `Id_Movies` varchar(100) NOT NULL,
  `Movie_Name` varchar(20) NOT NULL,
  `Short_Story` varchar(10000) NOT NULL,
  `Actor` varchar(100) NOT NULL,
  `Time` date NOT NULL,
  `Studio` varchar(20) NOT NULL,
  `Director` varchar(20) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `img` text NOT NULL,
  `Runtime` time NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`Id_Movies`, `Movie_Name`, `Short_Story`, `Actor`, `Time`, `Studio`, `Director`, `Type`, `img`, `Runtime`, `url`) VALUES
('', 'MAN', '55555', '', '0000-00-00', '', '', '', '.jpg', '16:59:00', 'https://www.youtube.com/embed/SfZWFDs0LxA'),
(' 6104062610139', 'Tenet', 'Tenet is a 2020 action-thriller and science fiction film written and directed by Christopher Nolan, who produced it with Emma Thomas. A co-production between the United Kingdom and United States, it stars John David Washington, Robert Pattinson, Elizabeth Debicki, Dimple Kapadia, Michael Caine, and Kenneth Branagh. The plot follows a secret agent (Washington) as he manipulates the flow of time to prevent World War III.\r\n\r\nNolan took more than five years to write the screenplay after deliberating about Tenet\'s central ideas for over a decade. Pre-production began in late 2018, casting in March 2019, and principal photography lasted three months in Denmark, Estonia, India, Italy, Norway, the United Kingdom, and United States, from May to November. Cinematographer Hoyte van Hoytema shot on 70 mm and IMAX. Scenes of time manipulation were filmed both backwards and forwards. Upwards of one hundred vessels and thousands of extras were used.\r\n\r\nDelayed three times due to the COVID-19 pandemic, Tenet was released in the United Kingdom on August 26, 2020, and United States on September 3, 2020, in IMAX, 35 mm, and 70 mm. It was the first Hollywood tent-pole to open in theaters after the pandemic shutdown, and has grossed $334 million worldwide, making it the fourth highest-grossing film of 2020. The film received generally positive reviews from critics, who praised the performances, production value, and visuals, though some criticized the complex plot and sound mixing.', 'John David Washington', '0000-00-00', 'Warner Bros. Picture', 'Christopher Nolan', 'Action', ' 6104062610139.jpg', '01:30:00', 'https://www.youtube.com/embed/L3pk_TBkihU'),
(' 6104062610140', 'Interstellar', 'Interstellar is a 2014 British-American epic science fiction film directed, co-written and produced by Christopher Nolan. It stars Matthew McConaughey, Anne Hathaway, Jessica Chastain, Bill Irwin, Ellen Burstyn, John Lithgow, Matt Damon, and Michael Caine. Set in a dystopian future where humanity is struggling to survive, the film follows a group of astronauts who travel through a wormhole near Saturn in search of a new home for mankind.\r\n\r\nBrothers Christopher and Jonathan Nolan wrote the screenplay, which had its origins in a script Jonathan developed in 2007. Christopher produced Interstellar with his wife, Emma Thomas, through their production company Syncopy, and with Lynda Obst through Lynda Obst Productions. Caltech theoretical physicist and 2017 Nobel laureate in Physics[4] Kip Thorne was an executive producer, acted as scientific consultant, and wrote a tie-in book, The Science of Interstellar. Paramount Pictures, Warner Bros., and Legendary Pictures co-financed the film. Cinematographer Hoyte van Hoytema shot it on 35 mm in the Panavision anamorphic format and IMAX 70 mm. Principal photography began in late 2013 and took place in Alberta (Canada), Iceland and Los Angeles. Interstellar uses extensive practical and miniature effects and the company Double Negative created additional digital effects.\r\n\r\nInterstellar premiered on October 26, 2014, in Los Angeles, California. In the United States, it was first released on film stock, expanding to venues using digital projectors. The film had a worldwide gross of over $677 million (and $696 million with subsequent re-releases), making it the tenth-highest-grossing film of 2014. Interstellar received positive reviews for its screenplay, direction, themes, visual effects, musical score, emotional depth, acting, and ambition. At the 87th Academy Awards, the film won the Academy Award for Best Visual Effects, and was nominated for Best Original Score, Best Sound Mixing, Best Sound Editing and Best Production Design.', 'Matthew McConaughey', '2020-05-07', 'Warner Bros. Picture', 'Christopher Nolan', 'Sci-fi', ' 6104062610140.jpg', '02:30:00', 'https://www.youtube.com/embed/zSWdZVtXT7E'),
(' 6104062610141', 'พรจากฟ้า', 'พรจากฟ้า (อังกฤษ: A Gift) เป็นภาพยนตร์ไทยแนวมิวสิคัล-โรแมนติก-ดราม่า-คอมเมดี้ ผลิตโดยจอกว้างฟิล์ม และจัดจำหน่ายโดยจีดีเอช ห้าห้าเก้า ร่วมกับสิงห์ คอร์เปอเรชัน โดยได้รับแรงบันดาลใจจากเพลงพระราชนิพนธ์ใน พระบาทสมเด็จพระมหาภูมิพลอดุลยเดชมหาราช บรมนาถบพิตร 3 เพลงคือ ยามเย็น (Love at sundown), ในดวงใจนิรันดร์ (Still on my Mind) และ พรปีใหม่ ผ่านการเล่าเรื่องราวของหนุ่มสาว 3 คู่ที่มีลักษณะในการใช้ชีวิตที่แตกต่างกันไป[1]\r\n\r\nภาพยนตร์เรื่องดังกล่าวเข้าฉายอย่างไม่เป็นทางการตั้งแต่วันที่ 29 พฤศจิกายน พ.ศ. 2559 ตั้งแต่เวลา 14.00-20.00 น. และเข้าฉายอย่างเป็นทางการตั้งแต่วันที่ 1 ธันวาคม พ.ศ. 2559 และออกอากาศทางโทรทัศน์เป็นครั้งแรกผ่านทางช่องวันในเครือของจีเอ็มเอ็ม แกรมมี่ ในวันที่ 31 ธันวาคม พ.ศ. 2559 เวลา 20:30 น.-23:00 น. โดยประมาณ โดยไม่มีโฆษณาคั่น และครั้งที่ 2 ในวันที่ 1 มกราคม พ.ศ. 2560 เวลา 14:30-17:00 น. อีกทั้งยังเป็นการฉายทางโทรทัศน์โดยที่การเผยแพร่ในโรงภาพยนตร์ก็ยังดำเนินอยู่', 'ฉันทวิชช์ ธนะเสวี', '2020-06-12', 'จอกว้าง ฟิล์ม', 'จิระ มะลิกุล', 'Comady', ' 6104062610141.jpg', '02:34:00', 'https://www.youtube.com/embed/UfIS8RPnDPs'),
('6104062610114', 'Green Lantern', 'Billions of years ago, the Guardians of the Universe use the green essence of willpower to create an intergalactic police force called the Green Lantern Corps. They divide the universe into 3,600 sectors, with one Green Lantern per sector. One such Green Lantern, Abin Sur of Sector 2814, defeats the malevolent being Parallax and imprisons him in the Lost Sector on the desolate planet Ryut. In the present day, Parallax escapes from his prison after becoming strengthened by an encounter with crash survivors who had accidentally fallen into the dugout where Parallax was imprisoned on the abandoned planet. Parallax feeds on their fear to gain strength before pursuing and nearly killing Abin Sur, who escapes and crash-lands on Earth where he commands his power ring to find a worthy successor.\r\n\r\nHal Jordan, a cocky test pilot working at Ferris Aircraft, is chosen by the ring and transported to the crash site, where the dying Abin Sur appoints him a Green Lantern, telling him to take the lantern and speak the oath. Jordan says the oath and is whisked away to the Green Lantern Corps home planet of Oa, where he meets and trains with veteran Corps members Tomar-Re, Kilowog, and Corps leader Sinestro, who believes he is unfit and fearful. Jordan, disheartened by his extreme training sessions and Sinestro\'s doubts, quits and returns to Earth, keeping the power ring and lantern.\r\n\r\nScientist Hector Hammond is summoned by his father, Senator Robert Hammond, to a secret government facility to perform an autopsy on Abin Sur\'s body under the watchful eye of Amanda Waller. A piece of Parallax inside the corpse enters Hammond, giving him telepathic and telekinetic powers at the cost of his sanity. After discovering that he was chosen for the secret work only due to his father\'s influence and not for his own abilities, Hammond attempts to kill his father by telekinetically sabotaging his helicopter at a massive party. Jordan saves the senator and the party guests, including his childhood sweetheart Carol Ferris. Later, at the government facility, Hammond uses telekinesis to successfully kill his father by burning him alive. Hammond also elevates Waller high above the floor. As she\'s falling, Jordan arrives and saves the injured Waller by creating a pool of water which whisks her away out of further danger. During the encounter, Jordan learns of Parallax coming to Earth.\r\n\r\nOn Oa, the Guardians tell Sinestro that Parallax was one of their own until he desired to control the yellow essence of fear, only to become corrupted. Arguing that the way to fight fear is with fear itself, Sinestro requests that the Guardians forge a ring of the same yellow power, preparing to concede Earth\'s destruction to Parallax in order to protect Oa. Jordan appears and tries to convince the Guardians that fear will turn the users evil if its power is used, but they reject his pleas, and he returns to Earth to try to defeat Parallax on his own.\r\n\r\nJordan saves Ferris from Hammond after a brief showdown. Parallax arrives, consumes Hammond\'s entire life force, and then wreaks havoc on Coast City. After a fierce battle, Jordan lures Parallax away from Earth and toward the Sun. Parallax is inadvertently caught in the Sun\'s gravitational pull and is destroyed, while Jordan escapes. Jordan loses consciousness after the battle and falls toward the Sun, but is saved by Sinestro, Kilowog, and Tomar-Re.\r\n\r\nThe entire Green Lantern Corps congratulates Jordan for his bravery. Sinestro tells Jordan he now bears the responsibility of protecting his sector as a Green Lantern.\r\n\r\nIn a mid-credits scene, Sinestro takes the yellow ring and places it on his finger, causing his green suit and eyes to turn yellow.', 'Ryan Reynolds', '2011-06-17', 'DC Entertainment', 'Martin Campbell', '', '6104062610114.jpg\r\n', '01:19:02', 'https://www.youtube.com/embed/7-GO9fo9DtM'),
('6104062610131', 'Deadpool', 'Wade Wilson is a dishonorably discharged special forces operative working as a mercenary when he meets Vanessa, a prostitute. They become romantically involved, and a year later she accepts his marriage proposal. Wilson is diagnosed with terminal cancer, and leaves Vanessa without warning so she will not have to watch him die.\r\n\r\nA mysterious recruiter approaches Wilson, offering an experimental cure for his cancer. He is taken to Ajax and Angel Dust, who inject him with a serum designed to awaken latent mutant genes. They subject Wilson to days of torture to induce stress and trigger any mutation he may have, without success. When Wilson discovers Ajax\'s real name is Francis and mocks him for it, Ajax leaves Wilson in a hyperbaric chamber that periodically takes him to the verge of asphyxiation over a weekend. This finally activates a superhuman healing ability that cures the cancer but leaves Wilson severely disfigured with burn-like scars over his entire body. He escapes from the chamber and attacks Ajax but relents when told that his disfigurement can be cured. Ajax subdues Wilson and leaves him for dead in the now-burning laboratory.\r\n\r\nWilson survives and seeks out Vanessa. He does not reveal to her he is alive fearing her reaction to his new appearance. After consulting with his best friend Weasel, Wilson decides to hunt down Ajax for the cure. He becomes a masked vigilante, adopting the name \"Deadpool\" (from Weasel picking him in a dead pool), and moves into the home of an elderly blind woman named Al. He questions and murders many of Ajax\'s men until one, the recruiter, reveals his whereabouts. Deadpool intercepts Ajax and a convoy of armed men on an expressway. He kills everyone but Ajax, and demands the cure from him but the X-Man Colossus and his trainee Negasonic Teenage Warhead interrupt him. Colossus wants Deadpool to mend his ways and join the X-Men. Taking advantage of this distraction, Ajax escapes. He goes to Weasel\'s bar where he learns of Vanessa.\r\n\r\nAjax kidnaps Vanessa and takes her to a decommissioned helicarrier in a scrapyard. Deadpool convinces Colossus and Negasonic to help him. They battle Angel Dust and several soldiers while Deadpool fights his way to Ajax. During the battle, Negasonic accidentally destroys the equipment stabilizing the helicarrier. Deadpool protects Vanessa from the collapsing ship, while Colossus carries Negasonic and Angel Dust to safety. Ajax attacks Deadpool again but is overpowered. He reveals there is no cure after all and, despite Colossus\'s pleading, Deadpool kills him. He promises to try to be more heroic moving forward. Though Vanessa is angry with Wilson for leaving her, she reconciles with him.', 'Ryan Reynolds', '2016-02-08', 'Marvel Entertainment', 'Tim Miller', '', '6104062610131.jpg', '01:42:17', 'https://www.youtube.com/embed/Xithigfg7dA'),
('6104062610132', 'Detective Pikachu', 'The story begins when ace detective Harry \r\nGoodman goes mysteriously missing, prompting \r\nhis 21-year-old son Tim to find out what happened. \r\nAiding in the investigation is Harry\'s former Pokémon partner, \r\nDetective Pikachu: a hilariously wise-cracking, \r\nadorable super-sleuth who is a puzzlement even to himself.', 'Ryan Reynolds', '2020-10-07', 'Warner Bros. Picture', 'Rob Letterman', 'Fantasy', 'ฟหกด.jpg', '15:57:00', 'https://www.youtube.com/embed/bILE5BEyhdo'),
('6104062610133', 'Zootopia', 'From the biggest elephant to the tiniest shrew, the city \r\nof Zootopia is a beautiful metropolis where all animals \r\nlive peacefully with one another. Determined to prove \r\nher worth, Judy Hopps becomes the first official bunny \r\ncop on the police force. When 14 predator \r\nanimals go missing, Judy immediately takes the case.', 'Ginnifer Goodwin', '2020-10-01', 'Walt Disney Studios', 'Byron Howard', 'Animation comady', '6104062610133.jpg', '01:30:00', 'https://www.youtube.com/embed/jWM0ct-OLsM'),
('6104062610135', 'your name', 'Your Name tells the story of a high school \r\nboy in Tokyo and a high school girl in a \r\nrural town, who suddenly and inexplicably \r\nbegin to swap bodies. The film stars the voices of \r\nRyunosuke Kamiki, Mone Kamishiraishi, \r\nMasami Nagasawa and Etsuko Ichihara.', 'Ryunosuke Kamiki', '2020-10-02', 'Toho', '君の名は。', 'Animation', '6104062610135.jpg', '01:27:00', 'https://www.youtube.com/embed/mPsjLnEtJZI'),
('6104062610136', 'Weathering with You', 'Tenki No Ko: Weathering With You was released\r\n in Japan on July 19th Japan. With all of the hype\r\n and news coverage the film has received, it’ll be \r\nhard for the film to live up to fan expectations. \r\nAs seen on previous Tenki No Ko news posts on \r\nthis blog, I’ve been following the film extensively. \r\nKimi No Na Wa (Your Name) quickly became one \r\nof my favorite anime films of all time and thus \r\nI’ve been anticipating Tenki No Ko since it was \r\nannounced. Did Makoto Shinkai’s follow up film to \r\nYour Name live up to the hype? I’ll let you decide.', 'Kotaro Daigo', '2020-10-22', 'Toho', '天気の子', 'Animation drama', '6104062610136.jpg', '02:58:00', 'https://www.youtube.com/embed/Q6iK6DjV_iE'),
('6104062610140', 'Bad 2018', 'In an era where tattooing became more popular and was not seen as strange as before. But I cannot deny that Sometimes the tattoos are still placed in the same state as the filth, the rebellion and the fray. Why is it so? When looking back on the ancient world history Tattoos used to have a status of high art in many areas. It is something that is equivalent to a sacred amulet that protects humanity from any danger. It also expresses individuality through images or symbols on the body since when the tattoo was taken for granted and it became a bad image for the owner of the tattoo. A film based on true stories based on the life of a tattooed gangster. Many people who are known as striped people and part of them live the lives of the striped people portrayed in the bad movies 2018, which proceeded through the baddies Lay, the frog, Yaowarat Kong Muang Min. A life turnaround comes from childhood oppression when Lay and Frog step into a curious teenager. The two have fully entered the gangster path. By the persuasion of Pa Nung\r\n\r\nSome of the top influencers in the area after the death of a papa who was assassinated by a group of influencers for conflicts of interest. Causing in the group of one father\'s subordinate to shake When a group member wants to be great and removes those who stand in the way The road to greatness at the cost of knives, guns, life, friendship, movies show the love of family. Friendship, love of a friend Protection of loved ones, memory, loyalty. Honesty with yourself and others The journey of a lifetime that has to experience both light and dark. From the oppression to the social Branded as \"bad guys\" and the end of the life path of the society Branded as \"bad guys\"', 'พีรวัฒน์ ธีรภาพเจริญ', '0000-00-00', 'พระเกศฟิล์ม โปรดักชั', 'เกรียงศักดิ์ พินทุสร', 'Action', '6104062610140.jpg', '01:34:00', 'https://www.youtube.com/embed/qhsUT4T8GrY'),
('6104062610190', 'Buried', 'In 2006, Paul Conroy, an American civilian working in Iraq, wakes to find himself buried in a wooden coffin with only a Zippo lighter and a BlackBerry phone at hand. He starts to piece together what has happened to him. He remembers that he and several others were ambushed by terrorists. He was hit by a rock and passed out. He receives a call from his kidnapper, Jagbir, demanding that he pay a ransom of $5 million by 9 PM or he will be left in the coffin to die.\r\n\r\nConroy calls the State Department, which tells him that due to the government policy of not negotiating with terrorists, it will not pay the ransom but will try to rescue him. They connect him with Dan Brenner, head of the Hostage Working Group, who tells Conroy they are doing their best to find him.\r\n\r\nJagbir calls Conroy and demands he makes a ransom video, threatening to execute one of his colleagues who survived the attack. Conroy insists that no one will pay $5 million, so Jagbir drops the amount to $1 million. Despite his compliance in making a video, the kidnappers execute his colleague and send him the video of it. Shortly afterward, distant explosions shake the area, damaging his coffin which begins to slowly fill with sand. Conroy continues sporadic phone calls with Brenner, skeptical of his promises of help. Brenner tells Conroy a man named Mark White was rescued from a similar situation three weeks previously and is home with his family.\r\n\r\nConroy receives a phone call from his employers who inform him that he has been fired from his job due to an alleged prohibited relationship with a colleague, so he and his family will not be entitled to any benefits or pension earned with the company. Brenner calls saying that the explosions that damaged his coffin earlier were in fact F-16 bombings and that his kidnappers may have been killed. Conroy begins to lose hope and makes a last will and testament in video form, giving his son his clothes and his wife his personal savings. Jagbir calls demanding Conroy video record himself cutting off a finger, threatening Conroy\'s family back home if he refuses, saying that he had lost all of his own children. Conroy complies.\r\n\r\nShortly after making the video, the cell phone rings, and Conroy begins to hear digging and distorted voices. The voices become clearer, saying to open the coffin, and the coffin opens. It abruptly becomes obvious that he hallucinated the encounter.\r\n\r\nBrenner calls and tells Conroy an insurgent has given details of where to find a man buried alive, and that they are driving out to rescue him. Conroy then receives a tearful call from his wife Linda, and he assures her that he is going to be okay. As sand continues to fill the coffin to dangerous levels, giving Conroy seconds left to live, Brenner calls and tells him that he and the rescue team have arrived at the burial site. Through the phone, digging is heard, but Conroy cannot hear any digging around him. The team digs up a coffin and opens it, but it turns out that the insurgent led them to Mark White\'s coffin, the man Brenner claimed had been rescued. Now knowing that he is not going to be saved, Conroy tries to calm himself down and accepts his fate. The sand finally fills his coffin and he suffocates as the light goes out and the screen goes black. The last thing we hear is Brenner repeating, \"I\'m sorry, Paul, I\'m so sorry,\" as the connection times out.\r\n\r\nIn a post-credits scene, a lighter illuminates the name \"Mark White\" on the lid of the coffin, written by Paul earlier.', 'Ryan Reynolds', '2010-09-24', 'The Safran Company', 'Rodrigo Cortés', '', '6104062610190.jpg', '01:58:52', 'https://www.youtube.com/embed/aRQ0oqFBoP4'),
('6104062611155', 'Deadpool2', 'After fighting organized crime as the wisecracking mercenary Deadpool for two years, Wade Wilson fails to kill one of his targets on his anniversary with Vanessa, his girlfriend. That night, after the pair decides to start a family together, the target tracks Wade down and inadvertently kills Vanessa. Wade kills all of his men in revenge, before pulling them both into the path of an oncoming truck. He blames himself for Vanessa\'s death and attempts to commit suicide six weeks later by blowing himself up. Wade has a vision of Vanessa in the afterlife, but the pieces of his body remain alive and are put back together by Colossus. Wade is left with only a Skee-Ball token, an anniversary gift, as a final memento of Vanessa.\r\n\r\nRecovering at the X-Mansion, Wade reluctantly agrees to join the X-Men because he believes Vanessa would have wanted him to. He, Colossus, and Negasonic Teenage Warhead respond to a standoff between authorities and the unstable young mutant Russell Collins / Firefist at an orphanage, labeled a \"Mutant Re-education Center\". Wade realizes that Russell has been abused by the orphanage staff, and kills one of the staff members. Colossus stops him from killing anyone else, and both Wade and Russell are arrested. Restrained with collars that suppress their powers, they are taken to the Ice Box, an isolated prison for mutant criminals. Meanwhile, Cable — a cybernetic soldier from the future — travels back in time to kill Russell.\r\n\r\nCable breaks into the Ice Box and attacks Russell. Wade, whose collar breaks in the ensuing melee, attempts to defend Russell. After Cable takes Vanessa\'s token, Wade forces himself and Cable out of the prison, but not before Russell overhears Wade deny that he cares for the young mutant in order to protect him. Near-death again, Wade has another vision of Vanessa in which she convinces him to help Russell. Wade organizes a team called X-Force to break Russell out of a prison-transfer convoy and defend him from Cable. The team launches its assault on the convoy by parachute, but all of the members die during the landing except for Wade and the lucky Domino. While they fight Cable, Russell frees fellow inmate the Juggernaut, who agrees to help Russell kill the abusive orphanage headmaster. The Juggernaut destroys the convoy and rips Wade in half, allowing himself and Russell to escape.\r\n\r\nWhile recovering, Cable offers to work with Wade and Domino to stop Russell from killing the headmaster — in the future, Russell has become a serial killer as a result of the incident, having burned Cable\'s family alive — agreeing to give Wade a chance to talk Russell down. At the orphanage, they are overpowered by the Juggernaut while Wade attacks the headmaster until Colossus — who had at first refused to help Wade due to Wade\'s murderous ways — arrives to distract the Juggernaut. When Wade fails to talk down Russell, Cable shoots at the young mutant. Wade leaps in front of the bullet while wearing the Ice Box collar and dies, reuniting with Vanessa in the afterlife. Seeing this sacrifice, Russell does not kill the headmaster; this changes the future so that Cable\'s family now survives. Cable uses the last charge on his time-traveling device, which he needed for returning to his family, to go back several minutes and strap Vanessa\'s token in front of Wade\'s heart. Now when Wade takes the bullet for Russell, it is stopped by the token and both survive while Russell still has his change of heart. Afterward, the headmaster is run over by Wade\'s taxi-driver friend Dopinder.\r\n\r\nIn a mid-credits sequence, Negasonic Teenage Warhead and her girlfriend Yukio repair Cable\'s time-traveling device for Wade. He uses it to save the lives of Vanessa and X-Force member Peter, and kills both X-Men Origins: Wolverine\'s version of Deadpool and actor Ryan Reynolds while he is considering starring in the film Green Lantern.', 'Ryan Reynolds', '2018-05-18', 'Marvel Entertainment', 'David Leitch', '', '6104062611155.jpg', '02:02:08', 'https://www.youtube.com/embed/D86RtevtfrA'),
('Hffs', 'Fushshi', '', '', '0000-00-00', '', '', '', 'Hffs.', '00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Id_Payment` varchar(10) NOT NULL,
  `Package` varchar(10) NOT NULL,
  `Card_Number` varchar(3) NOT NULL,
  `Credit` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Id_Payment`, `Package`, `Card_Number`, `Credit`) VALUES
('0', 'Basic', 'a', '0'),
('1', 'Basic', '1', '0'),
('10', 'Premium', 'asd', '0'),
('11', 'Basic', '1', '0'),
('12', 'Basic', '123', '0'),
('13', 'Premium', 'qqq', '0'),
('14', 'Premium', '123', '0'),
('15', 'Premium', '123', '0'),
('16', 'Premium', '123', '0'),
('17', 'Premium', '123', '0'),
('2', 'Basic', '1', '0'),
('4', 'Premium', '123', '0'),
('5', 'Premium', 'n', '0'),
('6', 'Premium', 'asd', '0'),
('7', 'Premium', 'yyy', '0'),
('8', 'Premium', 'a', '0'),
('9', 'Premium', '123', '0');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `Username` varchar(20) NOT NULL,
  `Id_User` varchar(50) NOT NULL,
  `Picture` varchar(200) NOT NULL DEFAULT 'image/profile/default.jpg',
  `Phone` varchar(20) DEFAULT NULL,
  `Mobile` varchar(20) DEFAULT NULL,
  `First_Name` varchar(50) DEFAULT NULL,
  `Last_Name` varchar(50) DEFAULT NULL,
  `Location` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`Username`, `Id_User`, `Picture`, `Phone`, `Mobile`, `First_Name`, `Last_Name`, `Location`) VALUES
('a', '0', 'image/profile/0.jpg', '', '', '', '', ''),
('baramee', '14', 'image/profile/default.jpg', NULL, NULL, NULL, NULL, NULL),
('bbbb@gmail.com', '12', 'image/profile/default.jpg', NULL, NULL, NULL, NULL, NULL),
('bubkim94@gmail.com', '10', 'image/profile/default.jpg', NULL, NULL, NULL, NULL, NULL),
('Chanasit', '8', 'image/profile/default.jpg', NULL, NULL, NULL, NULL, NULL),
('Chanasit Lortae', '17', 'image/profile/17.jpg', '', '', 'Chanasit', 'Kaewduangtien', ''),
('Chanasit12', '4', 'image/profile/default.jpg', '0627024846', '029666240', 'ชนสิษฏ์', 'เเก้วดวงเทียน', NULL),
('e', '2', 'image/profile/default.jpg', NULL, NULL, NULL, NULL, NULL),
('n', '5', './image/profile/5.jpg', '0627024846', '029666240', 'ชนสิษฏ์', 'เเก้วดวงเทียน', NULL),
('Pinyaporn', '16', 'image/profile/16.jpg', '', '', '', '', ''),
('q', '1', 'image/profile/default.jpg', NULL, NULL, NULL, NULL, NULL),
('qqq', '13', 'image/profile/default.jpg', NULL, NULL, NULL, NULL, NULL),
('sasdfsadf', '15', 'image/profile/default.jpg', NULL, NULL, NULL, NULL, NULL),
('sirawit', '6', 'image/profile/default.jpg', NULL, NULL, NULL, NULL, NULL),
('Sirawit12', '9', 'image/profile/default.jpg', NULL, NULL, NULL, NULL, NULL),
('yyy', '7', 'image/profile/default.jpg', NULL, NULL, NULL, NULL, NULL),
('zz', '11', 'image/profile/11.jpg', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id_User` varchar(50) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Id_Payment` varchar(100) NOT NULL,
  `Signup_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id_User`, `Name`, `Email`, `Password`, `Status`, `Id_Payment`, `Signup_date`) VALUES
('0', 'a', 'a', 'a', 'member', '0', '2020-09-28'),
('1', 'q', 'q', 'q', 'member', '1', '2020-10-05'),
('10', 'chanasit12', 'bubkim94@gmail.com', '47358', 'member', '10', '2020-10-20'),
('11', 'zz', 'zz', 'z', 'member', '11', '2020-10-20'),
('12', 'Panpana', 'bbbb@gmail.com', '123456', 'member', '12', '2020-10-20'),
('13', 'qqq', 'qqq', 'qqq', 'member', '13', '2020-10-20'),
('14', 'baramee', 'baramee', '123456', 'member', '14', '2020-10-20'),
('15', 'oat', 'sasdfsadf', '123456', 'member', '15', '2020-10-20'),
('16', 'Pinyaporn', 'Pinyaporn', '123456', 'member', '16', '2020-10-20'),
('17', 'Chanasit Lortae', 'Chanasit Lortae', '123456', 'member', '17', '2020-10-20'),
('2', 'sirawit', 'bubkim12@gmail.com', 'e', 'member', '2', '2020-10-08'),
('4', 'Chonny', 's6104062610131@email.kmutnb.ac.th', '47358', 'member', '4', '2020-10-20'),
('5', 'chanasit', 'n', 'n', 'member', '5', '2020-10-20'),
('6', 'eieiza', 's6104062610131@gmail.com', '123456', 'member', '6', '2020-10-20'),
('7', 'yyy', 'yyy', 'yyy', 'member', '7', '2020-10-20'),
('8', 'Chanasit', 'Chanasit', '47358', 'member', '8', '2020-10-20'),
('9', 'Sirawit', 'bubkim@gmail.com', '1234', 'member', '9', '2020-10-20'),
('aa', 'aa', 'aa', 'aa', 'admin', '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `Id_User` varchar(50) NOT NULL,
  `Id_Movies` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`Id_Pri`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`DateTime`),
  ADD KEY `Id_movies` (`Id_Movies`),
  ADD KEY `history_ibfk_2` (`Username`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`Id_Movies`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Id_Payment`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`Username`),
  ADD KEY `Id_user` (`Id_User`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_User`),
  ADD KEY `Id_Payment` (`Id_Payment`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD KEY `Id_movies` (`Id_Movies`),
  ADD KEY `Id_user` (`Id_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `Id_Pri` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`Id_Movies`) REFERENCES `movies` (`Id_Movies`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `history_ibfk_2` FOREIGN KEY (`Username`) REFERENCES `profile` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`Id_User`) REFERENCES `user` (`Id_User`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`Id_Payment`) REFERENCES `payment` (`Id_Payment`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `views`
--
ALTER TABLE `views`
  ADD CONSTRAINT `views_ibfk_1` FOREIGN KEY (`Id_Movies`) REFERENCES `movies` (`Id_Movies`),
  ADD CONSTRAINT `views_ibfk_2` FOREIGN KEY (`Id_User`) REFERENCES `user` (`Id_User`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
