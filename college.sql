-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2023 at 05:57 AM
-- Server version: 8.0.32
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `college_id` int NOT NULL,
  `college_code` varchar(4) NOT NULL,
  `college_name` varchar(64) NOT NULL,
  `logo` varchar(256) NOT NULL,
  `location` varchar(64) NOT NULL,
  `ratings` int NOT NULL,
  `brochure` varchar(128) NOT NULL,
  `exams` varchar(512) NOT NULL,
  `courses_offered` varchar(512) NOT NULL,
  `approx_fees` int NOT NULL,
  `website` varchar(512) NOT NULL,
  `city` varchar(16) NOT NULL,
  `college_type` varchar(8) NOT NULL,
  `mode` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`college_id`, `college_code`, `college_name`, `logo`, `location`, `ratings`, `brochure`, `exams`, `courses_offered`, `approx_fees`, `website`, `city`, `college_type`, `mode`) VALUES
(1, '2777', 'Martins university', 'martins.jpg', 'Thudiyalur rd, saravanampatti', 3, 'martins.pdf', 'KEEM,NEET,SSLC,HSC,KBFC,TNPSC', 'MBA,BBA,MA,BA,BSC,MSC,MTech,BTech', 100000, 'https://www.smec.ac.in/', 'Coimbatore', 'Co-ed', 'Full-time'),
(2, '4545', 'St. Marys College', 'stmarys.jpg', 'Gandhipuram', 4, 'stmarys.pdf', 'NEET,KEAM,COMEDK', 'BSc,BA,BBA,BCA,BCom', 80000, 'https://www.stmarys.ac.in/', 'Coimbatore', 'Co-ed', 'Part-time'),
(3, '9898', 'Vivekanandha College', 'vivekanandha.jpg', 'Elayampalayam', 5, 'vivekanandha.pdf', 'TANCET,NEET,CMAT', 'MBA,MCA,ME,MTech,BTech', 120000, 'https://www.vivekanandha.ac.in/', 'Tiruchengode', 'Co-ed', 'Full-time'),
(4, '6464', 'Bharathi Womens College', 'bharathi.jpg', 'Gopalapuram', 2, 'bharathi.pdf', 'TANCET,NEET,CMAT', 'MBA,MCA,MA,BA,BSc,MSc', 90000, 'https://www.bharathicollege.in/', 'Chennai', 'Girls', 'Full-time'),
(5, '5454', 'Kongu Engineering College', 'kongu.jpg', 'Perundurai', 5, 'kongu.pdf', 'TANCET,GATE,NEET', 'MBA,MCA,ME,MTech,BTech', 150000, 'https://www.kongu.ac.in/', 'Erode', 'Boys', 'Full-time'),
(6, '7878', 'Madras Institute of Technology', 'mit.jpg', 'Chrompet', 4, 'mit.pdf', 'TANCET,GATE,NEET', 'MBA,MCA,ME,MTech,BTech', 180000, 'https://www.mitindia.edu/', 'Chennai', 'Co-ed', 'Full-time'),
(7, '9999', 'Anna University', 'anna.jpg', 'Guindy', 4, 'anna.pdf', 'TANCET, GATE', 'BE, BTECH, ME, MTech, MBA, MCA', 100000, 'https://www.annauniv.edu/', 'Chennai', 'Co-ed', 'Full-time'),
(8, '8888', 'Loyola College', 'loyola.jpg', 'Nungambakkam', 5, 'loyola.pdf', 'TANCET, CAT', 'BA, BSC, MA, MSC, MBA', 75000, 'https://www.loyolacollege.edu/', 'Chennai', 'Co-ed', 'Part-time'),
(9, '7777', 'SRM Institute of Science and Technology', 'srm.jpg', 'Kattankulathur', 3, 'srm.pdf', 'SRMJEEE, JEE Main', 'BE, BTech, ME, MTECH, MBA, MCA', 150000, 'https://www.srmist.edu.in/', 'Chennai', 'Co-ed', 'Full-time'),
(10, '6666', 'St. Joseph College', 'stjosephs.jpg', 'Tiruchirappalli', 4, 'stjosephs.pdf', 'TANCET, CAT', 'BA, BSC, MA, MSC, MBA', 50000, 'https://www.sjctni.edu/', 'Tiruchirappalli', 'Co-ed', 'Full-time'),
(11, '5555', 'PSG College of Technology', 'psg.jpg', 'Peelamedu', 5, 'psg.pdf', 'TANCET, GATE', 'BE, BTech, ME, MTech, MBA, MCA', 100000, 'https://www.psgtech.edu/', 'Coimbatore', 'Co-ed', 'Full-time'),
(12, '5678', 'Sri Sairam Engineering College', 'sairam.jpg', 'Tambaram, Chennai', 1, 'sairam.pdf', 'TANCET, JEE, GATE', 'BE, ME, MBA, MCA', 100000, 'https://www.sairam.edu.in/', 'Chennai', 'Co-ed', 'Full-time'),
(13, '5678', 'Bharathi Arts and Science College', 'bharathiarts.jpg', 'Peelamedu, Coimbatore', 2, 'bharathi.pdf', 'TANCET, CAT, XAT', 'MBA, BBA, MCA, BCA, BCom, MCom, BSc, MSc', 75000, 'https://www.bharathiartscollege.com/', 'Coimbatore', 'Co-ed', 'Part-time'),
(14, '9012', 'Nehru Institute of Engineering and Technology', 'nehru.jpg', 'Thirumalayampalayam, Coimbatore', 3, 'nehru.pdf', 'TNEA, GATE, TANCET', 'BE, BTech, ME, MTech', 95000, 'https://www.nehrucolleges.com/', 'Coimbatore', 'Co-ed', 'Part-time'),
(15, '7890', 'Hindusthan College of Engineering and Technology', 'hindusthan.jpg', 'Pollachi Road, Coimbatore', 5, 'hindusthan.pdf', 'TANCET, GATE, TNEA', 'BE, BTech, ME, MTech', 80000, 'https://hindusthan.net/', 'Coimbatore', 'Co-ed', 'Full-time'),
(16, 'C987', 'Kings College', 'kings.jpg', 'Manhattan, New York', 4, 'kings.pdf', 'SAT, ACT, GRE', 'BSc, MSc, MBA', 50000, 'https://www.kingscollege.edu/', 'New York', 'Co-ed', 'Full-time'),
(17, 'A123', 'Oxford University', 'oxford.jpg', 'Oxford, United Kingdom', 5, 'oxford.pdf', 'IELTS, TOEFL, GRE', 'BA, MA, MPhil, PhD', 80000, 'https://www.ox.ac.uk/', 'Oxford', 'Co-ed', 'Full-time'),
(18, 'B456', 'Harvard University', 'harvard.jpg', 'Cambridge, Massachusetts', 5, 'harvard.pdf', 'SAT, ACT, GRE', 'BA, MA, PhD, JD, MD', 70000, 'https://www.harvard.edu/', 'Cambridge', 'Co-ed', 'Full-time'),
(19, 'D567', 'Stanford University', 'stanford.jpg', 'Stanford, California', 4, 'stanford.pdf', 'SAT, ACT, GRE', 'BA, MA, PhD', 60000, 'https://www.stanford.edu/', 'Stanford', 'Co-ed', 'Full-time'),
(20, 'E789', 'Massachusetts Institute of Technology', 'massachusetts.jpg', 'Cambridge, Massachusetts', 5, 'massachusetts.pdf', 'SAT, ACT, GRE', 'BSc, MSc, PhD', 65000, 'https://www.mit.edu/', 'Cambridge', 'Co-ed', 'Full-time');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `mobile` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `download_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`name`, `email`, `mobile`, `download_id`) VALUES
('Hari', 'asdasd@asdasd.com', '0909097892', 1),
('asdasd', 'asdasd@asdasd.com', '1231212312', 2),
('asdasd', 'asdasd@asdasd.com', '1231231231', 3),
('123123123', '123123123@12', '1231212312', 4),
('asdasd', 'asdasd@asdasd.com', '1231212312', 5),
('asd', 'asdasd@asdasd.com', '0909097892', 6),
('asdasd', 'asdasd@asdasd.com', '1231212312', 7),
('asdasd', 'asdasd@asdasd.com', '1231212312', 8),
('123123123', 'asdasd@asdasd.com', '1231212312', 9),
('asd', 'asdasd@asdasd.com', '1231212312', 10),
('asd', 'asdasd@asdasd.com', '1231212312', 11),
('asdasd', '123123123@12', '0909097892', 12),
('asdasd', 'asdasd@asdasd.com', '1231212312', 13),
('123123123', '123123123@12', '1231212312', 14),
('Hari', 'hari@gmail.com', '0989097898', 15),
('123123123', 'asdasd@asdasd.com', '1231212312', 16),
('asd', 'asdasd@asdasd.com', '1231231231', 17),
('enova', '123123@123', '1234567890', 18),
('123123123', '123123123@12', '1231212312', 19),
('enova', '123123@123', '1234567890', 20),
('enova', '123123@123', '1234567890', 21),
('enova', '123123@123', '1234567890', 22),
('123123123', '123123123@12', '1231212312', 23),
('123123123', '123123123@12', '1231212312', 24);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`college_id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`download_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `college_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `download_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
