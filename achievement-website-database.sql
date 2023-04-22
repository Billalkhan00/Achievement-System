-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2023 at 11:43 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `achievement-website-database`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `AchievementID` int(11) NOT NULL,
  `Reason` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `Milestone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`AchievementID`, `Reason`, `Date`, `Milestone`) VALUES
(1, 'Arriving to lesson on time', '0000-00-00', 0),
(2, 'Arriving to school on time', '0000-00-00', 0),
(3, 'Finishing your homework on time', '0000-00-00', 0),
(4, 'Good behaviour during lesson ', '0000-00-00', 0),
(5, 'Good interaction with the class ', '0000-00-00', 0),
(6, 'Helped another student with there work', '0000-00-00', 0),
(7, 'Highest grade in their exam', '0000-00-00', 0),
(8, 'Passed the spelling test', '0000-00-00', 0),
(9, 'Passed the Maths test', '0000-00-00', 0),
(10, 'Good points made during lesson', '0000-00-00', 0),
(11, '100% attendance during the week', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `child_account`
--

CREATE TABLE `child_account` (
  `ChildID` int(11) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Email_Address` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Class` varchar(10) NOT NULL,
  `Date_Of_Birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `child_account`
--

INSERT INTO `child_account` (`ChildID`, `First_Name`, `Last_Name`, `Email_Address`, `Password`, `Class`, `Date_Of_Birth`) VALUES
(1, 'Billal', 'Khan', 'billalkhan00@hotmail.com', '$2y$10$dIWxjexQzgQcj5EYp10elePtofrraUCOLtPpHMWO3auJpUqzgVHF6', '6KH', '2001-01-01'),
(122, 'Selina', 'Reilly', 'Selina.Reilly@school.ac.uk', '$2y$10$0hPxBei6Lytoy812W.xYH.y2vOJyY1qXV4skzITLTZ8buITKw5ESu', '6KH', '2007-01-05'),
(123, 'Jeremiah', 'Neill', 'Jeremiah.Neill@school.ac.uk', '$2y$10$RUeCtcjW536s3qkBtZfKKekcLuG6a2/Z/JVmiXkRs0/VfzVoiRP6W', '6KH', '2007-01-14'),
(124, 'Maariyah', 'Morales', 'Maariyah.Morales@school.ac.uk', '$2y$10$Myf6vMcgFML7v/h2dtbBa.rVqDWSpWNffnQINF/SDol7XW7YkH60W', '6KH', '2007-02-05'),
(125, 'Abu', 'Chandler', 'Abu.Chandler@school.ac.uk', '$2y$10$pZALQOL85f4.RCR0QRonluMqQ7SmauNGK5oqzplHCdapEAgRsigX2', '6KH', '2007-02-13'),
(126, 'Dillon', 'Vincent', 'Dillon.Vincent@school.ac.uk', '$2y$10$RNzebG8PcGmu2GJXx..QTuW8bI0dNPXyW/ulN7oGMgmLDqBrqAt3W', '6KH', '2007-02-20'),
(127, 'Connor', 'Gaines', 'Connor.Gaines@school.ac.uk', '$2y$10$sCizZf7ag7GsPD1R0WVi3.wxsW5.7nJBTue6J458dzH.CAwh0N/eK', '6KH', '2007-03-11'),
(128, 'Ricardo', 'Wells', 'Ricardo.Wells@school.ac.uk', '$2y$10$13Scw9qNbNkRbLiANc0cDeEcmmv5fER6x2rqR7M86PrXtBL6ksd/6', '6KH', '2007-04-02'),
(129, 'Reid', 'Bowen', 'Reid.Bowen@school.ac.uk', '$2y$10$Yfb7zCY4PenfvSaqt0F88uJWOwxcBcXd4m5Xg0AWFNAy/t58NWZyC', '6KH', '2007-04-09'),
(130, 'Hamzah', 'Blevins', 'Hamzah.Blevins@school.ac.uk', '$2y$10$Pg.JWIiKzerlnGijDcsjieGRkvT/WaQuR8UJanN7JFox8sSLL.ww2', '6KH', '2007-05-04'),
(131, 'Caiden', 'Black', 'Caiden.Black@school.ac.uk', '$2y$10$1SkLiZqN4oHc/EiQaUXzFu/oKF4vpmZfTpG1.8jvBuiO3QjM8g0ca', '6KH', '2007-05-07'),
(132, 'Kiara', 'Santana', 'Kiara.Santana@school.ac.uk', '$2y$10$btk1evIyHDnnaRKIFcXrxuwpGk3zqk5uRQmtKm5/DfwJP/JKY7OEG', '6KH', '2007-05-28'),
(133, 'Kaitlyn', 'Montes', 'Kaitlyn.Montes@school.ac.uk', '$2y$10$r.wuSmqLeeHEuBE6bPE7je56hbxWc95oUPhSbWTYFusJJs3biWNne', '6KH', '2007-06-05'),
(134, 'Tess', 'Fleming', 'Tess.Fleming@school.ac.uk', '$2y$10$nu6FKuqvb7yo6/MPZC7U2./cyNvsiiB1X2yu/CjyCKdZK7AEerASK', '6KH', '2007-06-26'),
(135, 'Zayd', 'Olsen', 'Zayd.Olsen@school.ac.uk', '$2y$10$ofpQZ2K8S6FoMuf.9VkOCOUNPif3pwunBRfRiZ.FtPY8xbb7.KZZu', '6KH', '2007-07-03'),
(136, 'Alesha', 'Cervantes', 'Alesha.Cervantes@school.ac.uk', '$2y$10$L97Nr91MiBGJjQ/w1eU/nO2l/QFM1e3mWUBBGWZhW3YPmh/.FqSCO', '6KH', '2007-07-19'),
(137, 'Paula', 'Macdonald', 'Paula.Macdonald@school.ac.uk', '$2y$10$6/gXRKOv/9sPY.5Wm3qPwOv/S7TYBYoFBiwEaEFi.wP0e3OYgQ4sC', '6KH', '2007-07-22'),
(138, 'Dale', 'Gallegos', 'Dale.Gallegos@school.ac.uk', '$2y$10$NJBWXCKtj7Ldq9EHd5u9G.yLKnJf3Ek203s5bfR4QoMdRAJc4X2rK', '6KH', '2007-08-15'),
(139, 'Yasin', 'Schneider', 'Yasin.Schneider@school.ac.uk', '$2y$10$KdpM9sFjgbJ4KFsPFrAXXeFNwD4b33J2PP4ClPCv87k2DyCxXZWaG', '6KH', '2007-08-23'),
(140, 'Mackenzie', 'Luna', 'Mackenzie.Luna@school.ac.uk', '$2y$10$5OcR9RWjc8gs4PvKbh94j.4Od5Ea7PvVyNDjQbmVWvm3GfRIdS85y', '6KH', '2007-08-26'),
(141, 'Zoya', 'Durham', 'Zoya.Durham@school.ac.uk', '$2y$10$bsfVD/p..meIrOxMVA5RFeYlGL20Y1z5bWMRSmXmuMSV4CguX9NY.', '6KH', '2007-09-03'),
(142, 'Hayden', 'Ayers', 'Hayden.Ayers@school.ac.uk', '$2y$10$ZklGvtnYNOeXexRcfc0PpuK8.Vynk87zechdiZyIJS9GDbWb5gWZi', '6KH', '2007-09-19'),
(143, 'Rio', 'Dillon', 'Rio.Dillon@school.ac.uk', '$2y$10$6U8OnUQeJmcMj5qqH/pYuecPVG1VLRVdljy78bJ9mzDbBYRt6VgEG', '6BD', '2007-10-18'),
(144, 'Gene', 'Payne', 'Gene.Payne@school.ac.uk', '$2y$10$mADhaQ0.06ghhN4.DBIWbOWTOctxdIxptJ6aa7U8cxvplF8p8q/jq', '6BD', '2007-11-09'),
(145, 'Karim', 'Trujillo', 'Karim.Trujillo@school.ac.uk', '$2y$10$HjXq/983eYozuWtfD/4hG.r1jdgqyBHNXVLRyvVkEkUIFDunc2B/e', '6BD', '2007-11-18'),
(146, 'Crystal', 'Monroe', 'Crystal.Monroe@school.ac.uk', '$2y$10$TyHNnAkMs4C7LymQfP0Yb.jK.hJOKDpxTCtIzN12s1j0pkpmhnkPu', '6BD', '2007-12-06'),
(147, 'Lilli', 'Carlson', 'Lilli.Carlson@school.ac.uk', '$2y$10$oyqSnCz9NrYcs7XQmqg6ge2e/yQfFFhAGlPctf/GX9mJ1LPc/Cka6', '6BD', '2007-01-11'),
(148, 'Ayah', 'Duncan', 'Ayah.Duncan@school.ac.uk', '$2y$10$KZRBlp66cXTWcD476FxHEO0SlWqt76hEc/REE6AC/qarPd6boIE0q', '6BD', '2007-02-09'),
(149, 'Sharon', 'Sullivan', 'Sharon.Sullivan@school.ac.uk', '$2y$10$bGCuUQ2Ksdsp001FYWY/u.kT5iGVy9auwnBrK/.YFcTFOedfpES/2', '6BD', '2007-03-07'),
(150, 'Rebecca', 'Wade', 'Rebecca.Wade@school.ac.uk', '$2y$10$5r3XGhoY5.T8khbpguQsfOUzONxa8l7TQ45dJO9dHfItq4eX.uSfG', '6BD', '2007-03-20'),
(151, 'Joyce', 'Pearce', 'Joyce.Pearce@school.ac.uk', '$2y$10$SjUtlz2YURe.5f89pdhmyeVpObqBvp7UEHhlwS1ioqPdLoNXCbr2W', '6BD', '2007-03-23'),
(152, 'Kendra', 'Short', 'Kendra.Short@school.ac.uk', '$2y$10$SSA5JDsdVXKqvJhQFsW.juPs83bWT30kYNLoxdIl9Erkcr6ObmJEC', '6BD', '2007-03-26'),
(153, 'Jordan', 'Harrington', 'Jordan.Harrington@school.ac.uk', '$2y$10$HIZprlMhqMiN5mnssnK.r.rYEZhrcJBgvrXyhRohIbqWPsfpy.oua', '6BD', '2007-04-03'),
(154, 'Larissa', 'Bradford', 'Larissa.Bradford@school.ac.uk', '$2y$10$1OHWlgTfqPF3C3QJ3QsgIOJDTsWaWwBqurFnXmcl066G02cAaQ8de', '6BD', '2007-04-28'),
(155, 'Hannah', 'Vega', 'Hannah.Vega@school.ac.uk', '$2y$10$QtgA0rgGtp7D8lV.6ETjyuM8WVE2k7/HjnK1jU1md/fDAYigCLSeq', '6BD', '2007-04-29'),
(156, 'Frankie', 'Kaufman', 'Frankie.Kaufman@school.ac.uk', '$2y$10$RihN0nG30Rz8IBaxlg03tuID16eDv3oc8oJYDeUCJ5e38n2nXQiDe', '6BD', '2007-05-13'),
(157, 'Harun', 'Wheeler', 'Harun.Wheeler@school.ac.uk', '$2y$10$CzimsYAtsZ2OSGCoLdxrqOlhOBZ6CHEzk8Pn3iDf.MMkdE4gqlkLu', '6BD', '2007-06-08'),
(158, 'Gladys', 'Winters', 'Gladys.Winters@school.ac.uk', '$2y$10$8MrFaePFuP5aavey1nwNR.BCZwBmzlC50cN7yrNzJdCMmHWKdaESG', '6BD', '2007-06-09'),
(159, 'Edmund', 'Hull', 'Edmund.Hull@school.ac.uk', '$2y$10$NIVKkZTpxscz8pfFK0IseukRTLb4bcgUY/yOehzAmaLQfjJp3oMaa', '6BD', '2007-06-16'),
(160, 'Zaynab', 'Hunter', 'Zaynab.Hunter@school.ac.uk', '$2y$10$8U38HKhHZphH1V6Juj9dyOBr9uJ5bt75mw/5C0LXN/y3Se.HAv9i.', '6BD', '2007-06-19'),
(161, 'Annabelle', 'Jennings', 'Annabelle.Jennings@school.ac.uk', '$2y$10$eFYPy/9zNEvXF9JqTECq/.plKrBD/zl3VIULkwRPpBgvoKQhAfAni', '6BD', '2007-07-14'),
(162, 'Melanie', 'Walters', 'Melanie.Walters@school.ac.uk', '$2y$10$A1.MwcMI8GKwoto38GKNAe2V93/lA5TQPtlFcT6tzmILgVUg53ZPq', '6BD', '2007-07-26'),
(163, 'Kyra', 'Martin', 'Kyra.Martin@school.ac.uk', '$2y$10$qKA9vKbsALhwrfn.pdtU4uCF/gOE877gWLM4YePO4PCPbVEvwgRPO', '6BD', '2007-07-31'),
(164, 'Ophelia', 'John', 'Ophelia.John@school.ac.uk', '$2y$10$w10F/OCYk/ZcddWCcP0CK.pW3/ujdNsxsI1I5CKv66yrf15F3oT..', '6RS', '2007-08-07'),
(165, 'Siobhan', 'Odonnell', 'Siobhan.Odonnell@school.ac.uk', '$2y$10$fHFkBYopT1ig.stMy0Bcze7Xcsm0f6.HYWF8T2YrBcXEIeYEhgeV6', '6RS', '2007-08-10'),
(166, 'Tallulah', 'Galvan', 'Tallulah.Galvan@school.ac.uk', '$2y$10$xjczZlsSvOqsiGBcuCZgU.5wwomh7Imh.ZXoGC8wxCd7AGWiKfco.', '6RS', '2007-08-13'),
(167, 'Millicent', 'Russell', 'Millicent.Russell@school.ac.uk', '$2y$10$hzyuqBtwSosNXgbxiDKd0ObyqTFA4ijNM0h4H1LHCvuEc.8pHfZV2', '6RS', '2007-08-30'),
(168, 'Francis', 'Hampton', 'Francis.Hampton@school.ac.uk', '$2y$10$V5APgrBSFlqLBJBcLAlXZ.2YLt9ryz20A9mgL0p/XwNOzlKRCd1fu', '6RS', '2007-09-30'),
(169, 'Barnaby', 'Neal', 'Barnaby.Neal@school.ac.uk', '$2y$10$0qAmfcuvVue4jrj6OIM2CusJjSciA/DsL7w9Zwqm.7UGqn8lbGTQG', '6RS', '2007-11-20'),
(170, 'Rhodri', 'Warren', 'Rhodri.Warren@school.ac.uk', '$2y$10$fYwM596FycHuLLeha1rBr.MEF8etH/aHyFOxkIHw/NKMW1.w6OoCW', '6RS', '2007-12-02'),
(171, 'Wilson', 'Wood', 'Wilson.Wood@school.ac.uk', '$2y$10$81JVZO4P2hnCTnDye31xDOSo.2dngXiiuwE0wxsc8uT9xeg1VpXOu', '6RS', '2007-12-06'),
(172, 'Maria', 'Orozco', 'Maria.Orozco@school.ac.uk', '$2y$10$evZH34klH6ZV7mpf7Phq7uACv2LJ0wxL39Mta47nfFzr74Kn4zNaG', '6RS', '2007-03-12'),
(173, 'Patricia', 'Owens', 'Patricia.Owens@school.ac.uk', '$2y$10$eFoQ1qn88qSI3xqIoyYW6ujbMxnb.60lykEdsbFoymX05Jk9ATTNO', '6RS', '2007-03-22'),
(174, 'Luther', 'Frank', 'Luther.Frank@school.ac.uk', '$2y$10$uD4iZwQomXBjQ.kIe6jdyuConHxIFlEaDGl1cFLWjRpertiiB2j/K', '6RS', '2007-04-04'),
(175, 'Constance', 'Coffey', 'Constance.Coffey@school.ac.uk', '$2y$10$Rx3/vtHXMxigvCkX/kpn4.JhJ30u4N4tdhyMDfBxgJlARaVTdOxBy', '6RS', '2007-04-23'),
(176, 'Charley', 'Guerra', 'Charley.Guerra@school.ac.uk', '$2y$10$X8Ce3IcwC.354ENgNrsQgu9L.wbc2YPwV66pOR4TdyQSMiWW6Ov2S', '6RS', '2007-04-25'),
(177, 'Kirsten', 'Mcgee', 'Kirsten.Mcgee@school.ac.uk', '$2y$10$IyFiBtfCVSLrX/XWDp/.v.qjGeYgPe2d045GPkJgkiaJCOtT/HtZ.', '6RS', '2007-05-25'),
(178, 'Ivan', 'Allen', 'Ivan.Allen@school.ac.uk', '$2y$10$64GN6SON5N3Ca1hyitUDd.kdy5vNFx2eyYtFpFom5UbL9KXN.fExC', '6RS', '2007-05-26'),
(179, 'Pauline', 'Dean', 'Pauline.Dean@school.ac.uk', '$2y$10$ZArWwJ0aynkIIxNXej16/eme.SfnceNbeNQrBtHvM5xz65KxEPI4q', '6RS', '2007-06-02'),
(180, 'Kevin', 'Walter', 'Kevin.Walter@school.ac.uk', '$2y$10$ObjS3xhJLOpaolf/lwIfsO46kbeOwBkcW/AUV.VaUCciA1BHlIlRC', '6RS', '2007-06-06'),
(181, 'Aqsa', 'Salinas', 'Aqsa.Salinas@school.ac.uk', '$2y$10$8s1xnS0B7ZiQ.eL480O8h.cOuYdyQ8K/MUaxMVwgtxAIgFBhXj3tS', '6RS', '2007-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `child_achievements`
--

CREATE TABLE `child_achievements` (
  `ChildID` int(11) NOT NULL,
  `AchievementID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `child_achievements`
--

INSERT INTO `child_achievements` (`ChildID`, `AchievementID`) VALUES
(1, 4),
(1, 4),
(1, 7),
(1, 10),
(175, 4),
(179, 10);

-- --------------------------------------------------------

--
-- Table structure for table `parent_account`
--

CREATE TABLE `parent_account` (
  `ParentID` int(11) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Email_Address` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parent_account`
--

INSERT INTO `parent_account` (`ParentID`, `First_Name`, `Last_Name`, `Email_Address`, `Password`) VALUES
(2, 'Nettie', 'Stevens', 'Nettie.Stevens@parent.ac.uk', '$2y$10$9YVllicoMbgAEAhlzGHlC.RSHGaiIAXVk0zO8F2gb7UNqSHQjPo/i'),
(3, 'Isaac', 'Williamson', 'Isaac.Williamson@parent.ac.uk', '$2y$10$DdSZ5ys763Nuq9jcWRf3H..TAcTIAvUVeglnHaZcjEXdA3g3ISj92'),
(4, 'Neo', 'Meyer', 'Neo.Meyer@parent.ac.uk', '$2y$10$P/7/DRRjJSlej1uJ/cNH4.uRO5A2oLeTHRf6gS7wbHRyEKxtT1gXq'),
(5, 'Ruby', 'Simon', 'Ruby.Simon@parent.ac.uk', '$2y$10$AjvBc3KLRrqOM7Em5kNeluBcVAvag22uodK3cr8gGdiRxzbT5MD7a'),
(6, 'Zoya', 'Bowers', 'Zoya.Bowers@parent.ac.uk', '$2y$10$j6IavTdfm711NvLy9xQrjei8bDD36PWxE1noXpsP36LG0QNhzRute'),
(7, 'Maya', 'Christensen', 'Maya.Christensen@parent.ac.uk', '$2y$10$ZJAJYBvcQ8leXI7FDm4xXuCl7hkVQvbgXOusffHhwdztGoF8pXlpu'),
(8, 'Arjan', 'Stark', 'Arjan.Stark@parent.ac.uk', '$2y$10$385SzKFEFfYxSmiVoH1nnOjAhT/zBr91knH0goYOF3zSvszP436IS'),
(9, 'Katerina', 'Patton', 'Katerina.Patton@parent.ac.uk', '$2y$10$eLQEMsFTwRqTNcythSBoNOnGLU22swIFbQrGcDY1iJqPrphPlLQK6'),
(10, 'Emre', 'Ibarra', 'Emre.Ibarra@parent.ac.uk', '$2y$10$9W/JjhebUrTP6rgTxpNEtenhK2c3HdR9G5WHWycyrIn40xRWbzi9e'),
(11, 'Jesse', 'Jensen', 'Jesse.Jensen@parent.ac.uk', '$2y$10$dCZ9MqK097uSxgMOZtuD/OrDiaT6rX3kX0s2SvtmpmSA4JZGgHAGu'),
(12, 'Andreas', 'Bauer', 'Andreas.Bauer@parent.ac.uk', '$2y$10$cYxPy8XMZkEeWARNgprgh.Tihqg1U/TJurCPYRlyQ1OavkZhKgaU2'),
(13, 'Jackson', 'Browning', 'Jackson.Browning@parent.ac.uk', '$2y$10$A9nZ07I0OhfOlUwoT64fwuS6ZZsNCCAs4JX6EEHOspCLiW3fggsom'),
(14, 'Enya', 'Hilton', 'Enya.Hilton@parent.ac.uk', '$2y$10$cfBr6XSjpDQbCtWyqdEIoOm8Bv5thp6S/qNUXJ3vNYzHf7nZI6w6O'),
(15, 'Dean', 'Phelps', 'Dean.Phelps@parent.ac.uk', '$2y$10$g1G09GjgVqxyfaWlPrJ21eY05Anzj43DTNq.vOhjlrGmp7Z6BdHQa'),
(16, 'Ffion', 'Wilson', 'Ffion.Wilson@parent.ac.uk', '$2y$10$ZEfOLwSDMhJc2oG2cGbWIOq1PZqJoiQoUgrjECnJhY.QTN9Wq1Pea'),
(17, 'Anya', 'Harper', 'Anya.Harper@parent.ac.uk', '$2y$10$p9aXgTZ0o5G5CiV6GX9nEO.rtJXo2XBZAHmQGQOjQpVid4FgNb/5O'),
(18, 'Larry', 'Kerr', 'Larry.Kerr@parent.ac.uk', '$2y$10$Jm9zeut1LuglQ3xsfHc9.uheXMmrcifTwz/Y3mHbi8NKe17NKC6re'),
(19, 'Wendy', 'Griffin', 'Wendy.Griffin@parent.ac.uk', '$2y$10$CjwJXZf2hnMylwrKvWWoyOK3JRhFDKgYPhd7zGKo7x0foIikwEiSS'),
(20, 'Laila', 'Knight', 'Laila.Knight@parent.ac.uk', '$2y$10$Am9zbhJU2wdMrGvcjZYFJOcBgiQ4jzEWT3seBzanwcJG0JOa64Khi'),
(21, 'Wojciech', 'Duncan', 'Wojciech.Duncan@parent.ac.uk', '$2y$10$6r4aSVPX0HLcGikz2LalOOoBtOyaDvUqiqQElcW6.z.FOXancGlTO'),
(22, 'Kathleen', 'Shepherd', 'Kathleen.Shepherd@parent.ac.uk', '$2y$10$9tiJvM.UfNFyJI9NovjKwuQuitwW8ttcUkeEOsAKQNov0Xzzh8Mkm'),
(23, 'Callie', 'Pitts', 'Callie.Pitts@parent.ac.uk', '$2y$10$NmdAqSe/R8KA8ED4W5z01.kEdXBTgwj9hSYAP/USKTD/VEzk1268K'),
(24, 'Rupert', 'Roman', 'Rupert.Roman@parent.ac.uk', '$2y$10$6W0JjChOd.xi5rvXILbjm.n4i3acyE0MuFtp4rtWWGw9vQPR4AgYO'),
(25, 'Romeo', 'Mccoy', 'Romeo.Mccoy@parent.ac.uk', '$2y$10$wThDqjSuRVDLybphTKljQu790m.xLbqC/EIte3fQbTieAA0HQeSCi'),
(26, 'Philip', 'Cortez', 'Philip.Cortez@parent.ac.uk', '$2y$10$Pn1RkM7jT/YUqMhMX48Y9u5KSkA393SiJloBlv6zHcPzjRmGymlUC'),
(27, 'Elouise', 'Hale', 'Elouise.Hale@parent.ac.uk', '$2y$10$bVD8L/EIUkbLzcpGubSHte5hnNlMKUiRGeR4.vI5kLG4oBJEMZYE2'),
(28, 'Dante', 'Parks', 'Dante.Parks@parent.ac.uk', '$2y$10$Zk3UNzdOPjYyfbi10lHbxe98uhToua9gRzQ4opHAzsLNh/OTA91/q'),
(29, 'Ivan', 'Andrews', 'Ivan.Andrews@parent.ac.uk', '$2y$10$zjO5n0qQOcKHUwSTMZosy.CobJRIiVsJF7qml1Qt7o0EzHU7yQRL6'),
(30, 'Sasha', 'Hubbard', 'Sasha.Hubbard@parent.ac.uk', '$2y$10$7/SiTovKuNunGw4NuIwor.gFR0diT5//vi0ZGwVTQkPJlcIm4lb8i'),
(31, 'Ayah', 'Dejesus', 'Ayah.Dejesus@parent.ac.uk', '$2y$10$ZERTYWtbGpvN4CyQ2XZex.j2F0YqBDdhC8U75SVSRvK/qGZS7G7p2'),
(32, 'Rihanna', 'Fox', 'Rihanna.Fox@parent.ac.uk', '$2y$10$gIPn2nzJifw.wPmIs3hD6.IwmGmolh.tnFdjP0GeMUhVhCTtva04i'),
(33, 'Layton', 'Waters', 'Layton.Waters@parent.ac.uk', '$2y$10$t1q9GjyN8M1zwjkL5zUbVOPjAnTnljt4/OxeT3UsCGjjpzB/SL99S'),
(34, 'Annalise', 'Merrill', 'Annalise.Merrill@parent.ac.uk', '$2y$10$gtspgHbNjuxhhoiDVCCms.lvIM.emeQbUd0SE5NMGIcDT4Swb7wmG'),
(35, 'Halle', 'Salazar', 'Halle.Salazar@parent.ac.uk', '$2y$10$K6wKq50MJb3WWsU03BpEQOVf7M9XGOpLCgeua5gkGYe9XgZUi1X5q'),
(36, 'Maisy', 'Gibbons', 'Maisy.Gibbons@parent.ac.uk', '$2y$10$lK3Tc68Qf3PsSh5ef785F.88WREtltChvukyKnRmOWsH0BQgiEkai'),
(37, 'Ameera', 'Pittman', 'Ameera.Pittman@parent.ac.uk', '$2y$10$ns/xTIbzBO0/C6yVgfmphO8D.XXjqE9sAF3XyC1t.l2pUteDc/ROm'),
(38, 'Yash', 'Ali', 'Yash.Ali@parent.ac.uk', '$2y$10$Sk4rCrXIfLc2I7L.QZEjwuCmOjmg3HWv7OgetYkgJsssBqTiYUY8O'),
(39, 'Lochlan', 'Hampton', 'Lochlan.Hampton@parent.ac.uk', '$2y$10$7IlAaZ3Sh38fsgpo0e3EB.tWWQ04ZyVJ5FtkTizY8eL.fOLex4jOm'),
(40, 'Christina', 'Hopkins', 'Christina.Hopkins@parent.ac.uk', '$2y$10$.FhW9Vs3Si7Bz.hze6rmduHYCDacEo3hbAvydLcEjqltqXwVN4hLW'),
(41, 'Kenneth', 'Pennington', 'Kenneth.Pennington@parent.ac.uk', '$2y$10$gSU5MlEOtVXDFf2EnqSXwOYA3a7WBucubksDD2FsNa4c6BHHw3xsa'),
(42, 'Alasdair', 'Pacheco', 'Alasdair.Pacheco@parent.ac.uk', '$2y$10$qHSHXAO7PNCcWGfgjtFdAOkfyPltYPA3qezl6gxlDI0vf00euL4Cy'),
(43, 'Carolyn', 'Kline', 'Carolyn.Kline@parent.ac.uk', '$2y$10$cbd07KdEDWV4ujZ3d9t27eN6iZVvxFFDnBc9a9aaK9KWm0YXEahIm'),
(44, 'Amelie', 'Randolph', 'Amelie.Randolph@parent.ac.uk', '$2y$10$yfGvCCRyfWDUgihUgSwLk.gaDn/nveowFanaLj5eJP788mqE25FjW'),
(45, 'Bessie', 'Vega', 'Bessie.Vega@parent.ac.uk', '$2y$10$aR3Gw.BWJ8xeEETJ8gT/KeGF5GD8.UNeYUOkRQzt6sZ18Zca/t1hy'),
(46, 'Abdulrahman', 'Beck', 'Abdulrahman.Beck@parent.ac.uk', '$2y$10$45gjmoLW6/i2VglyWC6dk.8knrh0377Qp5RSxe5XqyM2YeAoastUm'),
(47, 'May', 'Jones', 'May.Jones@parent.ac.uk', '$2y$10$e8PeUQHOaC4SiNgI.kO9we6axQzyZBf13w1Usiopx6IHWh3wR3DKe'),
(48, 'Monty', 'Mcbride', 'Monty.Mcbride@parent.ac.uk', '$2y$10$qOsUn5Sc.LTRJH/r3h8EGemmlt1/gcyquZrcpN/MNsmJOdmvhygT2'),
(49, 'Louie', 'Tucker', 'Louie.Tucker@parent.ac.uk', '$2y$10$wou1LNSlegpYZQO60kfSkOeLih6jCcEzA07dKqHH6bNWFNuf4a78W'),
(50, 'Lucian', 'Mcintyre', 'Lucian.Mcintyre@parent.ac.uk', '$2y$10$nsSXsQWxmZHSbS.LxQh5UuheEtdB.Hqbww2KehlKl7CxEF0SAzPNq'),
(51, 'Malika', 'Rodgers', 'Malika.Rodgers@parent.ac.uk', '$2y$10$.uRhh9lIqq6OLZW2Q/TCA.Px80lXVnt53tyzfWpWcl8ULsisR8Z6O'),
(52, 'john', 'smith', 'john.smith@parent.ac.uk', '$2y$10$23tJemUQwxAlnGqRYDSL8O6vnbhfbgqJaQsUyqFVlSGEOWF0WjHH2'),
(53, 'john', 'doe', 'john.doe@mail.com', '$2y$10$1f674FG3OlD3DYEtkxBRWuFHiqFnh2cCScUIhAJB0AD3kv6QYEF7K'),
(56, 'Billal', 'Khan', 'billalkhan00@hotmail.com', '$2y$10$dcJyBIJvExEEtk4xSzFdVu1D9RXRpfsXgFMgPf0vQvjC1P1H5Tm9S');

-- --------------------------------------------------------

--
-- Table structure for table `parent_of_child`
--

CREATE TABLE `parent_of_child` (
  `ChildID` int(11) NOT NULL,
  `ParentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parent_of_child`
--

INSERT INTO `parent_of_child` (`ChildID`, `ParentID`) VALUES
(1, 56),
(122, 2),
(123, 3),
(124, 4),
(125, 5),
(125, 46),
(126, 6),
(127, 7),
(128, 8),
(129, 9),
(130, 10),
(131, 11),
(132, 12),
(133, 13),
(134, 14),
(135, 15),
(136, 16),
(137, 17),
(138, 18),
(139, 19),
(140, 20),
(141, 21),
(142, 22),
(143, 23),
(144, 24),
(145, 25),
(146, 26),
(147, 27),
(148, 28),
(149, 29),
(150, 30),
(151, 31),
(152, 32),
(153, 33),
(154, 34),
(155, 35),
(156, 36),
(157, 37),
(158, 38),
(159, 39),
(160, 40),
(161, 41),
(162, 42),
(163, 43),
(164, 44),
(165, 45),
(166, 46),
(167, 47),
(168, 48),
(169, 49),
(170, 50);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_account`
--

CREATE TABLE `teacher_account` (
  `TeacherID` int(11) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Email_Address` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher_account`
--

INSERT INTO `teacher_account` (`TeacherID`, `First_Name`, `Last_Name`, `Email_Address`, `Password`) VALUES
(1, 'Billal', 'Khan', 'afdfawd@hotmail.com', '$2y$10$oAoTcZZa5/jQDzRtGvuBRO4Z9iMcZl/vyQdTHSSnYjejmDf95IGRi'),
(3, 'test', '123', 'test123@hotmail.com', '$2y$10$FBIXCnaxiXaZCIOO8NBfWuB8AhgkBD/RErFwk.38E8ZtDxRxA4ZVO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`AchievementID`);

--
-- Indexes for table `child_account`
--
ALTER TABLE `child_account`
  ADD PRIMARY KEY (`ChildID`);

--
-- Indexes for table `child_achievements`
--
ALTER TABLE `child_achievements`
  ADD KEY `ChildID` (`ChildID`,`AchievementID`),
  ADD KEY `AchievementID` (`AchievementID`);

--
-- Indexes for table `parent_account`
--
ALTER TABLE `parent_account`
  ADD PRIMARY KEY (`ParentID`);

--
-- Indexes for table `parent_of_child`
--
ALTER TABLE `parent_of_child`
  ADD KEY `ChildID` (`ChildID`,`ParentID`),
  ADD KEY `ParentID` (`ParentID`);

--
-- Indexes for table `teacher_account`
--
ALTER TABLE `teacher_account`
  ADD PRIMARY KEY (`TeacherID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `AchievementID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `child_account`
--
ALTER TABLE `child_account`
  MODIFY `ChildID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT for table `parent_account`
--
ALTER TABLE `parent_account`
  MODIFY `ParentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `teacher_account`
--
ALTER TABLE `teacher_account`
  MODIFY `TeacherID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `child_achievements`
--
ALTER TABLE `child_achievements`
  ADD CONSTRAINT `child_achievements_ibfk_2` FOREIGN KEY (`AchievementID`) REFERENCES `achievements` (`AchievementID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `child_achievements_ibfk_3` FOREIGN KEY (`ChildID`) REFERENCES `child_account` (`ChildID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parent_of_child`
--
ALTER TABLE `parent_of_child`
  ADD CONSTRAINT `parent_of_child_ibfk_1` FOREIGN KEY (`ChildID`) REFERENCES `child_account` (`ChildID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `parent_of_child_ibfk_2` FOREIGN KEY (`ParentID`) REFERENCES `parent_account` (`ParentID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
