SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `courses` (
  `Cours` int(6) NOT NULL,
  `Cours_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `progress` (
  `Login` varchar(32) NOT NULL,
  `Word` int(6) NOT NULL,
  `Known` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `units` (
  `Unit_id` int(6) NOT NULL,
  `Unit_name` varchar(32) NOT NULL,
  `Cours` int(6) NOT NULL,
  `Author` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `users` (
  `Login` varchar(32) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `E_mail` varchar(32) NOT NULL,
  `Name` varchar(32) NOT NULL,
  `Lastname` varchar(32) NOT NULL,
  `Admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `words` (
  `Word_id` int(6) NOT NULL,
  `Word_pl` varchar(32) NOT NULL,
  `Word_eng` varchar(32) NOT NULL,
  `Unit` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `courses`
  ADD PRIMARY KEY (`Cours`);

ALTER TABLE `progress`
  ADD PRIMARY KEY (`Login`,`Word`),
  ADD KEY `progress_ibfk_1` (`Word`);

ALTER TABLE `units`
  ADD PRIMARY KEY (`Unit_id`),
  ADD KEY `Author` (`Author`),
  ADD KEY `Cours` (`Cours`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`Login`);

ALTER TABLE `words`
  ADD PRIMARY KEY (`Word_id`),
  ADD KEY `Unit` (`Unit`);


ALTER TABLE `progress`
  ADD CONSTRAINT `progress_ibfk_1` FOREIGN KEY (`Word`) REFERENCES `words` (`Word_id`),
  ADD CONSTRAINT `progress_ibfk_2` FOREIGN KEY (`Login`) REFERENCES `users` (`Login`);

ALTER TABLE `units`
  ADD CONSTRAINT `units_ibfk_1` FOREIGN KEY (`Author`) REFERENCES `users` (`Login`),
  ADD CONSTRAINT `units_ibfk_2` FOREIGN KEY (`Cours`) REFERENCES `courses` (`Cours`);

ALTER TABLE `words`
  ADD CONSTRAINT `words_ibfk_1` FOREIGN KEY (`Unit`) REFERENCES `units` (`Unit_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
