-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2023 at 02:52 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `event_description` varchar(9999) DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `event_registerdate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `role_id`, `event_description`, `event_date`, `event_registerdate`) VALUES
(6, 'OLIMPIADA DATABASE', NULL, 'OLIMPIADE JENJANG SMA/MA\r\n', '2023-08-17', '14 juli - 14 agustus'),
(7, 'OSN NASIONAL', NULL, 'OLIMPIADE SAINS NASIONAL', '2023-07-05', '1 juni - 1 juli'),
(8, 'KSN KABUPATEN', NULL, 'ini desc', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `question_img` varchar(255) DEFAULT NULL,
  `question_answer` varchar(1) NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL,
  `e` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `event_id`, `question`, `question_img`, `question_answer`, `a`, `b`, `c`, `d`, `e`) VALUES
(1, 6, 'What is the capital of France?', NULL, 'b', 'London', 'Paris', 'Berlin', 'Madrid', 'Rome'),
(2, 6, 'What is the tallest mammal?', NULL, 'a', 'Giraffe', 'Elephant', 'Rhinoceros', 'Hippopotamus', 'Lion'),
(3, 6, 'What is the largest country by area?', NULL, 'd', 'China', 'United States', 'Russia', 'Canada', 'Brazil'),
(4, 6, 'What is the chemical symbol for gold?', NULL, 'c', 'Au', 'Ag', 'Fe', 'Cu', 'Pt'),
(5, 6, 'What is the capital of Italy?', NULL, 'e', 'Rome', 'Venice', 'Florence', 'Naples', 'Milan'),
(6, 6, 'What is the world\'s largest ocean?', NULL, 'b', 'Atlantic', 'Pacific', 'Indian', 'Arctic', 'Southern'),
(7, 6, 'What is the highest mountain in the world?', NULL, 'c', 'Denali', 'Kilimanjaro', 'Mount Everest', 'Aconcagua', 'Mount Fuji'),
(8, 6, 'What is the smallest planet in our solar system?', NULL, 'a', 'Mercury', 'Venus', 'Mars', 'Jupiter', 'Saturn'),
(9, 6, 'What is the capital of Spain?', NULL, 'd', 'Madrid', 'Barcelona', 'Valencia', 'Seville', 'Malaga'),
(10, 6, 'What is the currency of Japan?', NULL, 'b', 'Yuan', 'Yen', 'Dollar', 'Euro', 'Pound'),
(11, 7, 'What is the largest organ in the human body?', NULL, 'b', 'Heart', 'Skin', 'Lungs', 'Liver', 'Brain'),
(12, 7, 'What is the world\'s most populous country?', NULL, 'c', 'India', 'United States', 'China', 'Brazil', 'Indonesia'),
(13, 7, 'What is the capital of Australia?', NULL, 'a', 'Canberra', 'Sydney', 'Melbourne', 'Brisbane', 'Perth'),
(14, 7, 'What is the chemical formula for water?', NULL, 'd', 'HCl', 'NaCl', 'H2SO4', 'H2O', 'CO2'),
(15, 7, 'What is the highest waterfall in the world?', NULL, 'c', 'Niagara Falls', 'Victoria Falls', 'Angel Falls', 'Iguazu Falls', 'Yosemite Falls'),
(16, 7, 'What is the national animal of Canada?', NULL, 'b', 'Kangaroo', 'Beaver', 'Eagle', 'Lion', 'Panda'),
(17, 7, 'What is the longest river in the world?', NULL, 'a', 'Nile', 'Amazon', 'Yangtze', 'Mississippi', 'Danube'),
(18, 7, 'What is the capital of Canada?', NULL, 'e', 'Toronto', 'Vancouver', 'Ottawa', 'Montreal', 'Calgary'),
(19, 7, 'Who is the founder of Microsoft?', NULL, 'c', 'Steve Jobs', 'Steve Wozniak', 'Bill Gates', 'Mark Zuckerberg', 'Larry Page'),
(20, 7, 'What is the name of the first artificial satellite launched into space?', NULL, 'a', 'Sputnik 1', 'Apollo 11', 'Hubble Space Telescope', 'International Space Station', 'Voyager 1'),
(21, 7, 'What is the name of the first successful personal computer?', NULL, 'b', 'Macintosh', 'IBM PC', 'Commodore 64', 'Amiga', 'Atari 800'),
(22, 7, 'Who is the founder of Apple Inc?', NULL, 'd', 'Bill Gates', 'Steve Jobs', 'Steve Wozniak', 'Ronald Wayne', 'Tim Cook'),
(23, 7, 'What is the name of the first web browser?', NULL, 'a', 'WorldWideWeb', 'Netscape Navigator', 'Internet Explorer', 'Mozilla Firefox', 'Google Chrome'),
(24, 7, 'What is the name of the first social networking site?', NULL, 'c', 'Friendster', 'LinkedIn', 'Six Degrees', 'MySpace', 'Facebook'),
(25, 7, 'Who is the founder of Amazon?', NULL, 'e', 'Steve Jobs', 'Mark Zuckerberg', 'Elon Musk', 'Jack Ma', 'Jeff Bezos');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `register_id` int(11) NOT NULL,
  `register_acc` tinyint(1) DEFAULT NULL,
  `register_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`register_id`, `register_acc`, `register_date`, `user_id`, `event_id`) VALUES
(7, 1, '2023-04-06', 27, 6),
(8, 1, '2023-04-06', 26, 6),
(9, 1, '2023-04-06', 27, 7);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `result_id` int(11) NOT NULL,
  `score` decimal(5,2) DEFAULT NULL,
  `grade` varchar(10) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`result_id`, `score`, `grade`, `user_id`, `event_id`) VALUES
(12, '0.00', 'E', 27, 7);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) DEFAULT NULL,
  `role_level` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`, `role_level`) VALUES
(1, 'SISWA', 'SD'),
(2, 'SISWA', 'SMP'),
(3, 'SISWA', 'SMA'),
(4, 'SISWA', 'MAHASISWA'),
(5, 'ADMIN', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_num` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_school` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) DEFAULT NULL,
  `admin_num` varchar(255) DEFAULT NULL,
  `admin_email` varchar(255) DEFAULT NULL,
  `admin_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_num`, `user_email`, `user_password`, `role_id`, `user_school`) VALUES
(17, 'wardana', '13223', 'ervinne.karongkong@gmail.com', '$2y$10$Y10zwhlZ2H3xuKSJH/JYCeYWVihp3Uuuj.shf4QsWtyBuOeFqd7BS', 4, 'sma 1 petasia'),
(18, 'queenunslng', '085240117497', 'queenunslngii@gmail.com', '$2y$10$AjQCaZh.VmGuGvU8GHkF1uORCXddyqHgUwc2rZx5QqPKoD5G8eqUe', 3, 'sma 1 petasia'),
(19, 'wardana', '085240117497', 'wardana@gmail.com', '$2y$10$p7t/gimjeKQNRUfq7tsmz..B9xd7fwdF40gyLKtGtH9vgSluz095O', 3, 'sma 1 petasia'),
(20, 'student', '085240117497', 'asd@gmail.com', '$2y$10$Pbg.66S5ryCqhLwDCihiP.bcIbAByhCudiNbYofx93P5JVUmVWiOK', 4, 'sma 1 petasia'),
(21, 'idon', '085240117497', 'idon@gmail.com', '$2y$10$TGuoci.ul8P0v6qkXkGR4.Qycqpsl9EKuP2PkTyQEyU5zRww.kEBm', 3, 'sma 1 petasia'),
(22, 'enejl', '', 'alipganteng@gmail.com', '$2y$10$1QmOW9kh5U7XGC3Ki7ouhuuRdOLxdJ33FSh2PrB6nxrYPtSjEHBl.', NULL, 'sma 1 aceh tsunami'),
(23, 'saf', '', 'safkeren@gmail.com', '$2y$10$moijB9NMmgWERIaqHMcaoO95xInI1uivb5qYfqKIerXCSSPD3O4zi', NULL, '123'),
(24, 'fakjsklsd', '132321', 'klsjgsdflkj@gmail.com', '$2y$10$yFsJ8/8Wq3NhEMZOrw/V/eI7jXylDZPmjUvwCGbMnxW6poWXAzwc.', NULL, '2132132'),
(25, 'alijfoisdfj', '1231', 'fdkljklfdjdlkf@gmail.com', '$2y$10$8Wstighj/KPddEnK7LcCH.IrmLUtMD9XQ/j1PT68Z2vTbYJDCHOEO', NULL, 'lkj'),
(26, 'admin', '505', 'admin@gmail.com', '$2y$10$q6poWbBJvXumRcAiigQP9.EsEIetZzPqTaQe/JQ9ISuiquqUozzdu', NULL, 'admin'),
(27, 'queen', '0812997623723', 'queen@gmail.com', '$2y$10$VxC6G5uf/Blo4SsGsZzkauG68Mks3ckEvr94fiYsiKWgYdTvA5KYm', NULL, 'sman 1 manado'),
(28, 'danaganteng', '085240117494', 'wardanadann@gmail.com', '$2y$10$tOk.tIWY6cW8heQNjtA4RO/NiEegTZu7FpXcPEAt/ae4Lv47USL72', NULL, 'sma 1 petasia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`register_id`),
  ADD UNIQUE KEY `user_id` (`user_id`,`event_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`result_id`),
  ADD UNIQUE KEY `unique_user_event` (`user_id`,`event_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `register_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `events` ON SCHEDULE AT '2023-04-30 00:00:00' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM nama_tabel WHERE event_id = 8$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
