-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2021 at 06:28 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cd_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `album` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `songs` text NOT NULL,
  `year` year(4) NOT NULL,
  `price` int(255) NOT NULL,
  `score` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `artist`, `album`, `genre`, `description`, `songs`, `year`, `price`, `score`, `img`) VALUES
(1, 'Brave new world full album 2019', 'Iron Maiden', 'Brave new world', 'Metal | Heavy', 'Album Brave new world z roku 2000 od Iron Maiden.', '1. The Wicker Man ;2. Ghost of the Navigator ;3. Brave New World ;4. Blood Brothers ;5. The Mercenary ;6. Dream of Mirrors ;7. The Fallen Angel ;8. The Nomad ;9. Out of the Silent Planet ;10. The Thin Line Between Love and Hate', 2000, 195, 5, 'img/brave_new_world.jpg'),
(2, 'Covered in blood full album', 'Arch Enemy', 'Covered in blood', 'Metal | Death', 'Album Covered in blood z roku 2019 od Arch Enemy.', '1. Shout (Tears for Fears cover) ;2. Back to Back (Pretty Maids cover) ;3. Shadow on the Wall (Mike Oldfield cover) ;4. Breaking the Law (Judas Priest cover) ;5. Nitad (Moderat Likvidation cover) ;6. When the Innocent Die (Anti Cimex cover) ;7. Warsystem (Shitlickers cover) ;8. Armed Revolution (Shitlickers cover) ;9. Spräckta snutskallar (Shitlickers cover) ;10. The Leader (of the Fuckin\' Assholes) (Shitlickers cover) ;11. City Baby Attacked by Rats (Charged GBH cover) ;12. Warning (Discharge cover) ;13. The Zoo (Scorpions cover) ;14. Wings of Tomorrow (Europe cover) ;15. The Oath (KISS cover) ;16. The Book of Heavy Metal (Dream Evil cover) ;17. Walk in the Shadows (Queensrÿche cover) ;18. Incarnated Solvent Abuse (Carcass cover) ;19. Kill with Power (Manowar cover) ;20. Symphony of Destruction (Megadeth cover) ;21. Aces High (Iron Maiden cover) ;22. Scream of Anger (Europe cover) ;23. Starbreaker (Judas Priest cover) ;24. The Ides of March (Iron Maiden cover)', 2019, 339, 4, 'img/covered_in_blood.jpg'),
(3, 'Flight 666 live soundtrack 2cd', 'Iron Maiden', 'Flight 666', 'Metal | Heavy', 'Album Flight 666 z roku 2009 od Iron Maiden.', 'CD 1 : ;1. ACES HIGH (Bandra Kurla Complex/Mumbai, India February 1, 2008) ;2. 2 MINUTES TO MIDNIGHT (Rod Laver Arena/Melbourne, Australia February 7, 2008) ;3. REVELATIONS (Acer Arena/Sydney, Australia February 9, 2008) ;4. THE TROOPER (Makuhari Messe/Tokyo, Japan February 16, 2008) ;5. WASTED YEARS (Arena Monterrey/Monterrey, Mexico February 22, 2008) ;6. THE NUMBER OF THE BEAST (The Forum/Los Angeles, USA February 19, 2008) ;7. CAN I PLAY WITH MADNESS (Foro Sol/Mexico City, Mexico February 24, 2008) ;8. RIME OF THE ANCIENT MARINER (Izod Center/New Jersey, USA March 14, 2008) ;CD 2 : ;1. POWERSLAVE (Saprissa Stadium/San Jose, Costa Rica February 26, 2008) ;2. HEAVEN CAN WAIT (Palmeiras Stadium/Sao Paulo, Brazil March 2, 2008) ;3. RUN TO THE HILLS (Simon Bolivar Park/Bogota, Colombia February 28, 2008)) ;4. FEAR OF THE DARK (Ferrocarril Oeste Stadium/Buenos Aires, Argentina March 7, 2008) ;5. IRON MAIDEN (Pista Atletica/Santiago, Chile March 9, 2008) ;6. MOONCHILD (Coliseo de Puerto Rico/San Juan, Puerto Rico March 12, 2008) ;7. THE CLAIRVOYANT (Pedreira Paulo Leminski/Curitiba, Brazil March 4, 2008) ;8. HALLOWED BE THY NAME (Air Canada Centre/Toronto, Canada March 16, 2008)', 2009, 245, 3, 'img/flight_666_live.jpg'),
(4, 'Dance of death', 'Iron Maiden', 'Dance of death', 'Metal | Heavy', 'Album Dance of death z roku 2003 od Iron Maiden.', '1. Wildest Dreams ;2. Rainmaker ;3. No More Lies ;4. Montségur ;5. Dance of Death ;6. Gates of Tomorrow ;7. New Frontier ;8. Paschendale ;9. Face in the Sand ;10. Age of Innocence ;11. Journeyman', 2003, 205, 4, 'img/dance_of_death.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
