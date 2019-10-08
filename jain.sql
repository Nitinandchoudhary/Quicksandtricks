-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2019 at 05:56 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jain`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(5) NOT NULL,
  `background_course` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `background_course`) VALUES
(1, 'B.A'),
(2, 'BBA '),
(3, 'B.com'),
(4, 'BMS'),
(5, 'B.Sc'),
(6, 'BCA'),
(7, 'B.Tech'),
(8, 'B.Design'),
(9, 'M.A'),
(10, 'M.com'),
(11, 'MBA'),
(12, 'MMA'),
(13, 'M.Sc'),
(14, 'MCA'),
(15, 'PGD'),
(16, 'PGDIT'),
(17, 'LLM'),
(18, 'PGDM'),
(19, 'MBA PGD'),
(20, 'PGDM MBA'),
(21, 'M.Design'),
(22, 'M.Tech'),
(23, 'M.Sc(IT)');

-- --------------------------------------------------------

--
-- Table structure for table `recommends`
--

CREATE TABLE `recommends` (
  `course_id` int(11) NOT NULL,
  `JET` varchar(11) NOT NULL,
  `back_ids` int(11) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recommends`
--

INSERT INTO `recommends` (`course_id`, `JET`, `back_ids`, `comment`) VALUES
(1, 'YES', 0, ' Pass in 10+2 examination with Aggregated Percentage above 60% in Science / Commerce / Arts from PUC / ISC / CBSE or equivalent board. A course recognized as equivalent thereto by the University.'),
(2, 'YES', 0, ' Pass in 10+2 examination with Aggregated Percentage above 60% in Science / Commerce / Arts from PUC / ISC / CBSE or equivalent board. A course recognized as equivalent thereto by the University.'),
(3, 'YES', 0, ' Pass in 10+2 examination with Aggregated Percentage above 60% in Science / Commerce / Arts from PUC / ISC / CBSE or equivalent board. A course recognized as equivalent thereto by the University.'),
(4, 'YES', 0, ' Pass in 10+2 examination with Aggregated Percentage above 60% in Science / Commerce / Arts from PUC / ISC / CBSE or equivalent board. A course recognized as equivalent thereto by the University.'),
(5, 'YES', 0, ' Pass in 10+2 examination with Aggregated Percentage above 60% in Science / Commerce / Arts from PUC / ISC / CBSE or equivalent board. A course recognized as equivalent thereto by the University.'),
(6, 'YES', 0, ' Pass in 10+2 examination with Aggregated Percentage above 60% in Science / Commerce / Arts from PUC / ISC / CBSE or equivalent board. A course recognized as equivalent thereto by the University.'),
(7, 'YES', 0, ' Pass in 10+2 examination with Aggregated Percentage above 60% in Science / Commerce / Arts from PUC / ISC / CBSE or equivalent board. A course recognized as equivalent thereto by the University.'),
(8, 'YES', 0, ' Pass in 10+2 examination with Aggregated Percentage above 60% in Science / Commerce / Arts from PUC / ISC / CBSE or equivalent board. A course recognized as equivalent thereto by the University.'),
(9, 'YES', 0, 'The Candidate should have Minimum Aggregate of 55% in Bachelor\'s degree(BA) in respective discipline or equivalent (10+2+3) from a recognized university and students appearing in their final semester / year exams are also eligible to apply for Jain Entrance Test. *Note: For eligibility criteria of SC / ST Category, please contact the admissions office. '),
(10, 'YES', 0, 'The Candidate should have Minimum Aggregate of 55% in Bachelor\'s degree(M.com) in respective discipline or equivalent (10+2+3) from a recognized university and students appearing in their final semester / year exams are also eligible to apply for Jain Entrance Test. Students who have passed B.B.S.,  B.B.A.,  BFIA and  B.B.E.  with atleast 60% marks can also apply for (JET) *Note: For eligibility criteria of SC / ST Category, please contact the admissions office. '),
(11, 'YES', 0, 'The Candidate should have Minimum Aggregate of 50% in Bachelor\'s degree(BBA)  in respective discipline or equivalent (10+2+3) from a recognized university and students appearing in their final semester / year exams are also eligible to apply for Jain Entrance Test. *Note: For eligibility criteria of SC / ST Category, please contact the admissions office.'),
(12, 'YES', 0, 'The Candidate should have Minimum Aggregate of 55% in Bachelor\'s degree in respective discipline or equivalent (10+2+3) from a recognized university and students appearing in their final semester / year exams are also eligible to apply for Jain Entrance Test. *Note: For eligibility criteria of SC / ST Category, please contact the admissions office.'),
(13, 'YES', 0, 'The Candidate should have Minimum Aggregate of 60% in Bachelor\'s degree (B.sc) in respective discipline or equivalent (10+2+3) from a recognized university and students appearing in their final semester / year exams are also eligible to apply for Jain Entrance Test. *Note: For eligibility criteria of SC / ST Category, please contact the admissions office.'),
(14, 'YES', 0, 'The Candidate should have Minimum Aggregate of 60% in Bachelor\'s degree (BCA ,B.sc in Computer Science  and B.sc in Information Technology) in respective discipline or equivalent (10+2+3) from a recognized university and students appearing in their final semester / year exams are also eligible to apply for Jain Entrance Test. *Note: For eligibility criteria of SC / ST Category, please contact the admissions office.'),
(15, 'YES', 0, 'Not mentioned yet'),
(16, 'YES', 0, 'Not mentioned yet'),
(17, 'YES', 0, 'Not mentioned yet'),
(18, 'YES', 0, 'Not mentioned yet'),
(19, 'YES', 0, 'Not mentioned yet'),
(20, 'YES', 0, 'Not mentioned yet'),
(21, 'YES', 0, 'The Candidate should have Minimum Aggregate of 60% in bachelor\'s degree  in respective discipline or equivalent (10+2+3) from a recognized university and students appearing in their final semester / year exams are also eligible to apply for Jain Entrance Test. *Note: For eligibility criteria of SC / ST Category, please contact the admissions office.'),
(22, 'YES', 0, 'The Candidate should have Minimum Aggregate of 60% in Bachelor\'s of Engineering degree (B.Tech) in respective discipline or equivalent (10+2+4) from a recognized university and students appearing in their final semester / year exams are also eligible to apply for Jain Entrance Test. *Note: For eligibility criteria of SC / ST Category, please contact the admissions office.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `recommends`
--
ALTER TABLE `recommends`
  ADD PRIMARY KEY (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
