-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 08, 2020 at 12:51 PM
-- Server version: 10.3.12-MariaDB
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `training`
--

-- --------------------------------------------------------

--
-- Table structure for table `ingredient`
--

DROP TABLE IF EXISTS `ingredient`;
CREATE TABLE IF NOT EXISTS `ingredient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredient`
--

INSERT INTO `ingredient` (`id`, `name`, `price`, `image`) VALUES
(1, 'Pepperoni', '110.00', 'p1.jpg'),
(2, 'Mushroom', '35.00', 'p2.jpg'),
(3, 'Black Beans', '45.00', 'p3.jpg'),
(4, 'Black Olive ', '40.00', 'p4.jpg'),
(5, 'Green Olive', '50.00', 'p5.jpg'),
(6, 'Jalapeno', '45.00', 'p6.jpg'),
(7, 'Chicken', '60.00', 'p7.jpg'),
(8, 'Tomato', '20.00', 'p8.jpg'),
(9, 'Red Peprika', '30.00', 'p9.jpg'),
(10, 'Paneer', '45.00', 'p10.jpg'),
(11, 'Fried Onion', '18.00', 'p11.jpg'),
(12, 'Capsicum', '15.00', 'p12.jpg'),
(13, 'Sweet Corn', '38.00', 'p13.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `details` text NOT NULL,
  `type` enum('veg','non-veg') NOT NULL,
  `ingredients` text DEFAULT NULL,
  `toppings` text DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `details`, `type`, `ingredients`, `toppings`, `image`) VALUES
(1, 'Paneer Tikka ', '290.00', 'This is popular italian Pizza Flavoured with marinated tikka sauce and paneer.', 'veg', 'Dough/flour, Pizza Sauce, Pizza sauce seasoning, cheese', 'Paneer, Fried onion, Green Olive, Capsicum, Red peprika', 'p1.jpg'),
(3, 'Veggie Supreme', '310.00', 'This is Italian pizza flavoured with crushed garlic, with multiple herbs topped up with sweet corn.', 'veg', 'Deep dish pizza mix, pizza sauce seasoning, cheese, garlic herbs,flavoured butter.', 'Fried onion, Sweet corn, mushroom, Capsicum, black olive.', 'p2.jpg'),
(4, 'Triple Chicken Feast ', '400.00', 'This is popular Italian pizza flavoured with unique greek dressing topped up with keema and meat ball.', 'non-veg', 'low carbs pizza dough, pizza sauce, pizza sauce seasoning, cheese , greek dressing, cajun. ', 'Chicken keema , Fried Onion, Chicken meat ball, Capsicum, sweet corn.', 'p3.jpg'),
(2, 'Chicken Italiaona', '350.00', 'This is popular Italian Pizza flavoure with light sugary taste and creamy touch.', 'non-veg', 'Deep dish pizza mix, pizza sauce seasoning, cheese, sugar, cinnamon blend, plain butter.', 'Pepperoni, chicken sauce, Mushroom, Capsicum, black beans.', 'p4.jpg'),
(5, 'Ultimate Chicken', '625.00', 'This is popular Italian pizza flavoured with BBA Sauce, flavoured butter.unique taste with multiple toppings.', 'non-veg', 'deep dish pizza mix, pizza sauce, pizza sauce seasoning, cheese, BBQ sauce, cajun, flavoured butter.', 'peperoni, fried onion, chicken meat ball, chicken keema, chicken Sausage.', 'p5.jpg'),
(6, 'Triple Chicken Feast', '400.00', 'This is popular Italian pizza flavoured with unique greek dressing topped up with keema and meat ball.', 'non-veg', 'low carb pizza dough, pizza sauce, pizza sauce seasoning, cheese, cajun, greek dressing.', 'Chicken keema, fried onion, chicken meat ball, Capsicum, sweet corn.', 'p6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(250) NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `email`, `password`, `datetime`) VALUES
(5, 'Roshan', '8804018388', 'amit@abc.com', '81dc9bdb52d04dc20036dbd8313ed055', '2020-06-07 06:55:52');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
