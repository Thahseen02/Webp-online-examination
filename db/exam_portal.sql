-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2019 at 07:16 PM
-- Server version: 5.7.19-log
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `option` varchar(10) NOT NULL,
  `value` varchar(100) NOT NULL,
  `qid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `option`, `value`, `qid`) VALUES
(1, 'a', 'System Calls', 1),
(2, 'b', 'API', 1),
(3, 'c', 'library', 1),
(4, 'd', 'assembly instructions', 1),
(5, 'a', 'kernel is the program that constitutes the central core of the operating system', 2),
(6, 'b', 'kernel is the first part of operating system to load into memory during booting', 2),
(7, 'c', 'kernel is made of various modules which can not be loaded in running operating system', 2),
(8, 'd', 'kernel remains in the memory during the entire computer session', 2),
(9, 'a', 'to get and execute the next user-specified command', 3),
(10, 'b', 'to provide the interface between the API and application program', 3),
(11, 'c', 'to handle the files in operating system', 3),
(12, 'd', 'none of the mentioned', 3),
(13, 'a', 'time division multiplexing', 4),
(14, 'b', 'space division multiplexing', 4),
(15, 'c', 'both (a) and (b)', 4),
(16, 'd', 'none of the mentioned', 4),
(17, 'a', 'log file', 5),
(18, 'b', 'another running process', 5),
(19, 'c', 'new file', 5),
(20, 'd', 'none of the mentioned', 5),
(21, 'a', 'VxWorks', 6),
(22, 'b', 'Windows CE', 6),
(23, 'c', 'RTLinux', 6),
(24, 'd', 'Palm OS', 6),
(25, 'a', 'Linker', 7),
(26, 'b', 'Loader', 7),
(27, 'c', 'Assembler', 7),
(28, 'd', 'Compiler', 7),
(29, 'a', 'It improves system performance', 8),
(30, 'b', 'It implies excessive page I/O', 8),
(31, 'c', 'It decreases the degree of multiprogramming', 8),
(32, 'd', 'It reduces page I/O', 8),
(33, 'a', 'Identification information is written on all tracks and sectors', 9),
(34, 'b', 'The system area is deleted', 9),
(35, 'c', 'Data is written', 9),
(36, 'd', 'Data is arranged on the disk in contiguous fashion', 9),
(37, 'a', 'It will allocate space for the literals', 10),
(38, 'b', 'It will generate the code for all the load and store register instruction', 10),
(39, 'c', 'It will build the symbol table for the symbols and their values', 10),
(40, 'd', 'It will compute the total length of the program', 10);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(250) NOT NULL,
  `coption` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `coption`) VALUES
(1, 'To access the services of operating system, the interface is provided by the', 'a'),
(2, 'Which one of the following is not true?', 'c'),
(3, 'The main function of the command interpreter is', 'a'),
(4, 'By operating system, the resource management can be done via', 'c'),
(5, 'If a process fails, most operating system write the error information to a', 'a'),
(6, 'Which one of the following is not a real time operating system?', 'd'),
(7, 'What must reside in the main memory under all situations in a resident - OS computer? ', 'b'),
(8, 'What is the use of thrashing?', 'c'),
(9, 'What will happen when we format a floppy disk?', 'd'),
(10, 'What will a simple two pass assembler do in the first pass?', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  `mobile` bigint(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `college`, `mobile`, `email`, `password`) VALUES
(1, 'Adeeb', 'M', 'nitc', 9544677590, 'adeeb@email.com', 'adeeb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
