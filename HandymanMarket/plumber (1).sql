-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 18, 2021 at 09:17 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plumber`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `Email` varchar(255) NOT NULL,
  `Comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`Email`, `Comment`) VALUES
('hello@h.com', 'hfhfkeajf'),
('', ''),
('', ''),
('iamhamna@maryam.com', 'i am not a terriorist'),
('456789', 'sdfghjkvbnm'),
('hamna@12.com', 'sdfghjk'),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `logincustomerdb`
--

CREATE TABLE `logincustomerdb` (
  `Name` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `plumber`
--

CREATE TABLE `plumber` (
  `Name` varchar(255) NOT NULL,
  `PhoneNumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `signedup`
--

CREATE TABLE `signedup` (
  `ID` int(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `ConfirmPassword` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Age` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Budget` varchar(255) NOT NULL,
  `PhoneNumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signedup`
--

INSERT INTO `signedup` (`ID`, `Password`, `ConfirmPassword`, `Name`, `Age`, `Email`, `Gender`, `Category`, `Location`, `Budget`, `PhoneNumber`) VALUES
(13, 'h11', 'h11', 'h1', '19', 'h@c.com', 'fe', 'bar', 'MT', '100', '123'),
(14, 'h1', 'h1', 'hamna', '19', 'h12@gmail.com', 'fe', 'bar', 'MT', '10', '1234'),
(15, '$2y$10$Px.KdZHfTf.fRe65FSwmCeUYOjzYOoXIWPrpr36puhIkHrSJYkeOO', '$2y$10$vgyrOkOC8W9tUA6YRhxFpeO06U.k.Gvy4x5G1XGkO.omO0zJqNosu', 'hamna', '12', 'h@123.com', 'female', 'barber', 'TM', '10', '123'),
(16, '$2y$10$FBBIukvngcyChIurhVXLieulMEOjALYw3egL0Mh0toqX2lSa9oTku', '$2y$10$Xr2DxKZ6uqMsAsAAJvX7NemNwHvOBFUFeMuweeUuemn07pf9wfsLq', 'h', '1', 'a', 'a', 'a', 'a', '1', '1'),
(17, '$2y$10$1XxhiME0BnHB3cOZSCvRoeUuwEuSn5.2yqXDvjp7JdO5JRRVSVXfu', '$2y$10$o8zAYUY4W1b2SeG3ZeBzXO8V0ryOH0SCBVBCJ8Qeho0lIGr1y3HnO', 'hamna', '12', '12@g.com', 'fem', 'tayler', 'MT', '10000', '123456'),
(19, '$2y$10$Hwa.6w82vlqJoCtkqAe29.IgV/MgRrNu.6sKmyJq4TWdcgryD0QeG', '$2y$10$uRVJG.fR8T8bsqSt1iBWJu7nbePC7cr27A70jZL.F7sVm0u2gWD8O', 'ahsanSP', '000', 'abc@gmail.com', 'Male', 'Plumber', 'Iqbal Town', '500', '00000');

-- --------------------------------------------------------

--
-- Table structure for table `signupcustomer`
--

CREATE TABLE `signupcustomer` (
  `ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `ConfirmPassword` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PhoneNumber` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signupcustomer`
--

INSERT INTO `signupcustomer` (`ID`, `Name`, `Address`, `Password`, `ConfirmPassword`, `Email`, `PhoneNumber`) VALUES
(2, 'hamna', 'hamn1222222', '$2y$10$kKGkOZ8rOE2LIieSrm8XP.wNtltg13bCCO3vLNwEo6E223nQK.Sci', '$2y$10$mGV.9txnZTV4X7rfi1FN5uypnNgH/Fj5GlEDnjYBv5fgLcVPTxWXG', 'h@gmial.com', 1234567),
(3, 'hamna', 'h', '$2y$10$DqFHCu.Rnxp.nj2qgzR7a.eydDsUAFQdOq3U57jXzyZpEziVXLS1O', '$2y$10$Rxs5I3fV0/kn17FcSuj9oenyB6bCys/.YvHmZEkeC/F5mm4HL7N2y', 'h12@gm.com', 12345),
(4, 'a', 'a', '$2y$10$QysDd7Hwzd4Zt29cXxLCjeSJ68YADig8vPkkorSH73dvmz9uT90ee', '$2y$10$gu03ovsF73Vt6LDZWXfac./QE4/6oscAJ/og/D7BFKqaZBsCg247i', 'a', 0),
(5, 'a', 'a', '$2y$10$4wcfDJ6HmT3BMkEHs7cXmOD0mKKkxTpBTwIw6fnccAqAQCg3.heyK', '$2y$10$4bbWwhD77V23Ih/kzA9sNedsSILR.yYmbVXceqturw7DYTnDAdSzG', 'a', 0),
(6, 'Ahsan Ahmed', 'House #01, Lahore', '$2y$10$uJi/mi2OtnsXuPVWIPMGde35.dx5JhU0538aVHfqb7yn8CsTJhN2G', '$2y$10$JlSkCttAIbH8zN6V9Ajnp.DRGCnjjld0rnuAMrsxtc9rqzf4w.OJi', 'ranaahsanahmed868@gmail.com', 0),
(7, 'ahsan', 'House2,Lahore', '$2y$10$dcZJ1z4PEsVpgf1P5pU36uURmImcq2AMOyVYVAXShL8JxgqTo5bGa', '$2y$10$iJ3a.Lvm2mR1BGSbMwAcoedkptvbonUKoD.AymyJci51wfVtsE5CK', 'ahsan@gmail.com', 0),
(8, 'aaa', 'House 01', '123', '123', 'aa@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signedup`
--
ALTER TABLE `signedup`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `signupcustomer`
--
ALTER TABLE `signupcustomer`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signedup`
--
ALTER TABLE `signedup`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `signupcustomer`
--
ALTER TABLE `signupcustomer`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
