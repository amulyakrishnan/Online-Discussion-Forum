-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 19, 2019 at 03:29 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL,
  `time` varchar(30) NOT NULL,
  `content_id` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `message`, `time`, `content_id`) VALUES
(13, 'Unsubscribed', 'This isht ecommn4t inojf;oisajflk', '27/08/2018', '5'),
(9, 'Unsubscribed', 'this is the second comment in the ', '27/08/2018', '3'),
(10, 'Unsubscribed', 'thisi th the third comment', '27/08/2018', '3'),
(11, 'Unsubscribed', 'My name is ajay yadav and i am building this web page', '27/08/2018', '3'),
(12, 'Unsubscribed', 'this is the comment in the super computer', '27/08/2018', '4'),
(14, 'Unsubscribed', 'Awesome tut', '28/08/2018', '3'),
(15, 'Unsubscribed', 'Last commment', '29/08/2018', '3'),
(16, 'Unsubscribed', 'Last commment', '29/08/2018', '3'),
(17, 'Unsubscribed', 'this  is first comment', '29/08/2018', '6'),
(18, 'Unsubscribed', 'this  is first comment', '29/08/2018', '6'),
(19, 'Unsubscribed', 'hello', '22/12/2018', '6'),
(20, 'Unsubscribed', 'how are you', '22/12/2018', '6'),
(21, 'helo', 'new one', '22/12/2018', '3'),
(22, 'Unsubscribed', 'hei', '22/12/2018', '34'),
(23, 'Unsubscribed', '<script>alert(\'hi\');</script>', '29/12/2018', '6'),
(24, 'Unsubscribed', '<script>alert(\'hi\');</script>', '29/12/2018', '6'),
(25, 'Unsubscribed', '<a href=\'http://localhost/web/blog/index.php\'>Click me </a>', '29/12/2018', '6');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
CREATE TABLE IF NOT EXISTS `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `category` varchar(30) NOT NULL,
  `date` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `email`, `title`, `content`, `category`, `date`) VALUES
(3, 'ajayyadavexpo@gmail.com', 'PHP Tutorial  first', 'This is the first tutorial on php, Have fun with me This is the first tutorial on php, Have fun with me This is the first tutorial on php, Have fun with me This is the first tutorial on php, Have fun with me This is the first tutorial on php, Have fun with me This is the first tutorial on php, Have fun with meThis is the first tutorial on php, Have fun with me This is the first tutorial on php, Have fun with me This is the first tutorial on php, Have fun with me This is the first tutorial on php, Have fun with me This is the first tutorial on php, Have fun with me This is the first tutorial on php, Have fun with me This is the first tutorial on php, Have fun with me This is the first tutorial on php, Have fun with me This is the first tutorial on php, Have fun with me This is the first tutorial on php, Have fun with me This is the first tutorial on php, Have fun with me This is the first tutorial on php, Have fun with me This is the first tutorial on php, Have fun with me', 'tech', '27/08/2018'),
(5, 'ajayyadavexpo@gmail.com', 'HTML Tutorial', 'HTML content is here and going to explain this thing in content is here and going to explain this thing in content is here and going to explain this thing in content is here and going to explain this thing in content is here and going to explain this thing in content is here and going to explain this thing in content is here and going to explain this thing in content is here and going to explain this thing in content is here and going to explain this thing in ', 'tech', '27/08/2018'),
(4, 'ajayyadavexpo@gmail.com', 'Computer', 'Super computers are dominating in the world Super computers are dominating in the world Super computers are dominating in the world Super computers are dominating in the world Super computers are dominating in the world Super computers are dominating in the world Super computers are dominating in the world Super computers are dominating in the world Super computers are dominating in the world Super computers are dominating in the world Super computers are dominating in the world Super computers are dominating in the world Super computers are dominating in the world Super computers are dominating in the world Super computers are dominating in the world Super computers are dominating in the world Super computers are dominating in the world Super computers are dominating in the world Super computers are dominating in the world ', 'tech', '27/08/2018'),
(6, 'ajayyadavexpo@gmail.com', 'Today News', 'This is dummy text posted in the nesThis is dummy text posted in the nesThis is dummy text posted in the nesThis is dummy text posted in the nesThis is dummy text posted in the nesThis is dummy text posted in the nesThis is dummy text posted in the nesThis is dummy text posted in the nesThis is dummy text posted in the nesThis is dummy text posted in the nesThis is dummy text posted in the nesThis is dummy text posted in the nesThis is dummy text posted in the nesThis is dummy tedummy s is dummy text posted in the nesThis is dummy text posted in the nesThis is dummy text posted in the nesThis is dummy text posted in the nesThis is dummy text posted in the nesThis is dummy text posted in the nesThis is dummy tedummy ', 'computer', '29/08/2018');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `rule` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `rule`) VALUES
(1, 'ajay', 'ajayyadavexpo@gmail.com', '1234', 'yes'),
(2, 'Ram', 'ram@gmail.com', '1234', 'yes'),
(3, 'Shyam', 'shyam@gmail.com', '1234', ''),
(4, 'Ashish', 'ashish@gmail.com', '1234', 'yes'),
(5, 'ajay', 'fkjlajjsd@gmail.com', '1234', 'yes'),
(6, 'Ramu', 'ramu@gmail.com', '1234', 'yes');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
