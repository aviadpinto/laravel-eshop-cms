-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2017 at 02:42 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dogshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `article`, `image`, `url`, `updated_at`, `created_at`) VALUES
(1, 'Toys', 'Toys that dogs just love to play with !', 'toys.jpg', 'toys', '2017-01-09 17:19:24', '2016-12-21 00:00:00'),
(2, 'Clothes', 'Clothes for winter, custumes and more.', '2017.1.09.17.17.04-clothes.jpg', 'clothes', '2017-01-09 17:17:04', '2016-12-21 00:00:00'),
(3, 'Houses', 'Different cool houses for your dog! !', 'houses.png', 'houses', '2017-01-09 17:19:38', '2016-12-21 00:00:00'),
(7, 'Food', 'The best food for your dog!', '2017.1.09.17.17.22-food.jpg', 'food', '2017-01-09 17:47:12', '2017-01-09 16:58:14'),
(8, 'Harnesses', 'Beautiful and comfortable harnesses!', '2017.1.09.17.17.56-harnesses.jpg', 'harnesses', '2017-01-09 17:17:56', '2017-01-09 17:10:40'),
(11, 'Bark Collars', 'All kinds of bark collars, new brands every day!', '2017.1.17.02.20.49-barkcollars.jpg', 'bark-collars', '2017-01-17 02:20:49', '2017-01-17 02:20:49');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `menu_id`, `title`, `article`, `created_at`, `updated_at`) VALUES
(1, 1, 'About Us', ' <h4><b style="font-family: &quot;Open Sans&quot;, sans-serif; font-size: 13px;">We are a few &nbsp;people who just love dogs, and together we belive:</b><br></h4><ul><li>That dogs are the best, and they are deserve the <b>best products</b>!</li><li>Good products must be with<b> good prices</b>! Walwayes make sure to give you the best deal.</li><li><b>We care about you</b> as a client- If there is any problem, just tell us and we will do anything &nbsp;to give you the best service.&nbsp;<br></li></ul><p><img src="https://cdn.pixabay.com/photo/2014/09/30/22/49/husky-467706_640.jpg" style="width: 50%;"><br></p><h4><b><br></b></h4><h4><b>Are you ready to have fun with your dog? start shop now!</b></h4><p><br></p> ', '2017-01-07 00:00:00', '2017-01-16 18:54:24'),
(5, 3, 'Where we located?', '    <p> </p><div class="gmap"> \r\n<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3380.78685700252!2d34.7840328853312!3d32.07501318118966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151d4b9a68159517%3A0xdf462c7667e790fc!2sWeWork!5e0!3m2!1siw!2sil!4v1484594095628" width="800" height="400" frameborder="0" style="border:0" allowfullscreen=""></iframe>&nbsp;</div><h2><b>Mail us:&nbsp;</b><span style="font-size: 23px;">Aviadpinto89@gmail.com</span></h2><h3><br></h3>    ', '2017-01-16 19:03:28', '2017-01-16 19:27:47');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `link`, `title`, `url`, `updated_at`, `created_at`) VALUES
(1, 'About', 'About Us', 'about', '2017-01-17 13:33:17', '2017-01-07 00:00:00'),
(3, 'Contact', 'Contact Us', 'contact', '2017-01-17 13:33:34', '2017-01-07 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `data` text NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `data`, `total`, `updated_at`, `created_at`) VALUES
(1, 4, 'a:2:{i:6;a:6:{s:2:"id";i:6;s:4:"name";s:19:"Poo-Chi - Robot Dog";s:5:"price";d:35;s:8:"quantity";i:1;s:10:"attributes";a:3:{s:5:"image";s:8:"toy2.jpg";s:3:"url";s:17:"poo-chi-robot-dog";s:6:"catUrl";s:4:"toys";}s:10:"conditions";a:0:{}}i:5;a:6:{s:2:"id";i:5;s:4:"name";s:10:"Short Rope";s:5:"price";d:3;s:8:"quantity";i:1;s:10:"attributes";a:3:{s:5:"image";s:8:"toy1.jpg";s:3:"url";s:10:"short-rope";s:6:"catUrl";s:4:"toys";}s:10:"conditions";a:0:{}}}', '38.00', '2017-01-11 20:19:48', '2017-01-11 20:19:48'),
(2, 6, 'a:2:{i:3;a:6:{s:2:"id";i:3;s:4:"name";s:8:"Dog Coat";s:5:"price";d:20;s:8:"quantity";i:1;s:10:"attributes";a:3:{s:5:"image";s:8:"coat.jpg";s:3:"url";s:8:"dog-coat";s:6:"catUrl";s:7:"clothes";}s:10:"conditions";a:0:{}}i:4;a:6:{s:2:"id";i:4;s:4:"name";s:13:"Carrot Castum";s:5:"price";d:35;s:8:"quantity";i:1;s:10:"attributes";a:3:{s:5:"image";s:10:"carrot.jpg";s:3:"url";s:13:"carrot-castum";s:6:"catUrl";s:7:"clothes";}s:10:"conditions";a:0:{}}}', '55.00', '2017-01-11 20:57:34', '2017-01-11 20:57:34'),
(3, 5, 'a:2:{i:3;a:6:{s:2:"id";i:3;s:4:"name";s:8:"Dog Coat";s:5:"price";d:20;s:8:"quantity";i:2;s:10:"attributes";a:3:{s:5:"image";s:8:"coat.jpg";s:3:"url";s:8:"dog-coat";s:6:"catUrl";s:7:"clothes";}s:10:"conditions";a:0:{}}i:4;a:6:{s:2:"id";i:4;s:4:"name";s:13:"Carrot Castum";s:5:"price";d:35;s:8:"quantity";i:3;s:10:"attributes";a:3:{s:5:"image";s:10:"carrot.jpg";s:3:"url";s:13:"carrot-castum";s:6:"catUrl";s:7:"clothes";}s:10:"conditions";a:0:{}}}', '145.00', '2017-01-11 21:30:59', '2017-01-11 21:30:59'),
(4, 3, 'a:2:{i:1;a:6:{s:2:"id";i:1;s:4:"name";s:16:"Mobile Dog House";s:5:"price";d:80.700000000000003;s:8:"quantity";i:1;s:10:"attributes";a:3:{s:5:"image";s:11:"kennel1.jpg";s:3:"url";s:16:"mobile-dog-house";s:6:"catUrl";s:6:"houses";}s:10:"conditions";a:0:{}}i:2;a:6:{s:2:"id";i:2;s:4:"name";s:26:"Pabst Blue Ribbon Doghouse";s:5:"price";d:45;s:8:"quantity";i:1;s:10:"attributes";a:3:{s:5:"image";s:11:"kennel2.jpg";s:3:"url";s:26:"pabst-blue-ribbon-doghouse";s:6:"catUrl";s:6:"houses";}s:10:"conditions";a:0:{}}}', '125.70', '2017-01-11 22:46:06', '2017-01-11 22:46:06'),
(5, 4, 'a:1:{i:7;a:6:{s:2:"id";i:7;s:4:"name";s:12:"Hotdog Snack";s:5:"price";d:5;s:8:"quantity";i:1;s:10:"attributes";a:3:{s:5:"image";s:29:"2017.1.09.21.35.20-hotdog.jpg";s:3:"url";s:12:"hotdog-snack";s:6:"catUrl";s:4:"food";}s:10:"conditions";a:0:{}}}', '5.00', '2017-01-12 00:21:26', '2017-01-12 00:21:26'),
(6, 4, 'a:2:{i:1;a:6:{s:2:"id";i:1;s:4:"name";s:16:"Mobile Dog House";s:5:"price";d:80.700000000000003;s:8:"quantity";i:1;s:10:"attributes";a:3:{s:5:"image";s:11:"kennel1.jpg";s:3:"url";s:16:"mobile-dog-house";s:6:"catUrl";s:6:"houses";}s:10:"conditions";a:0:{}}i:2;a:6:{s:2:"id";i:2;s:4:"name";s:26:"Pabst Blue Ribbon Doghouse";s:5:"price";d:45;s:8:"quantity";i:2;s:10:"attributes";a:3:{s:5:"image";s:11:"kennel2.jpg";s:3:"url";s:26:"pabst-blue-ribbon-doghouse";s:6:"catUrl";s:6:"houses";}s:10:"conditions";a:0:{}}}', '170.70', '2017-01-12 00:21:48', '2017-01-12 00:21:48'),
(7, 4, 'a:2:{i:7;a:6:{s:2:"id";i:7;s:4:"name";s:12:"Hotdog Snack";s:5:"price";d:5;s:8:"quantity";i:3;s:10:"attributes";a:3:{s:5:"image";s:29:"2017.1.09.21.35.20-hotdog.jpg";s:3:"url";s:12:"hotdog-snack";s:6:"catUrl";s:4:"food";}s:10:"conditions";a:0:{}}i:2;a:6:{s:2:"id";i:2;s:4:"name";s:26:"Pabst Blue Ribbon Doghouse";s:5:"price";d:45;s:8:"quantity";i:4;s:10:"attributes";a:3:{s:5:"image";s:11:"kennel2.jpg";s:3:"url";s:26:"pabst-blue-ribbon-doghouse";s:6:"catUrl";s:6:"houses";}s:10:"conditions";a:0:{}}}', '195.00', '2017-01-12 00:57:27', '2017-01-12 00:57:27'),
(8, 3, 'a:1:{i:2;a:6:{s:2:"id";i:2;s:4:"name";s:26:"Pabst Blue Ribbon Doghouse";s:5:"price";d:45;s:8:"quantity";i:1;s:10:"attributes";a:3:{s:5:"image";s:11:"kennel2.jpg";s:3:"url";s:26:"pabst-blue-ribbon-doghouse";s:6:"catUrl";s:6:"houses";}s:10:"conditions";a:0:{}}}', '45.00', '2017-01-12 01:10:30', '2017-01-12 01:10:30'),
(9, 3, 'a:1:{i:6;a:6:{s:2:"id";i:6;s:4:"name";s:19:"Poo-Chi - Robot Dog";s:5:"price";d:35;s:8:"quantity";i:1;s:10:"attributes";a:3:{s:5:"image";s:8:"toy2.jpg";s:3:"url";s:17:"poo-chi-robot-dog";s:6:"catUrl";s:4:"toys";}s:10:"conditions";a:0:{}}}', '35.00', '2017-01-12 01:10:58', '2017-01-12 01:10:58'),
(10, 8, 'a:2:{i:3;a:6:{s:2:"id";i:3;s:4:"name";s:8:"Dog Coat";s:5:"price";d:20;s:8:"quantity";i:1;s:10:"attributes";a:3:{s:5:"image";s:8:"coat.jpg";s:3:"url";s:8:"dog-coat";s:6:"catUrl";s:7:"clothes";}s:10:"conditions";a:0:{}}i:6;a:6:{s:2:"id";i:6;s:4:"name";s:19:"Poo-Chi - Robot Dog";s:5:"price";d:35;s:8:"quantity";i:2;s:10:"attributes";a:3:{s:5:"image";s:8:"toy2.jpg";s:3:"url";s:17:"poo-chi-robot-dog";s:6:"catUrl";s:4:"toys";}s:10:"conditions";a:0:{}}}', '90.00', '2017-01-12 20:04:38', '2017-01-12 20:04:38'),
(11, 8, 'a:2:{i:6;a:6:{s:2:"id";i:6;s:4:"name";s:19:"Poo-Chi - Robot Dog";s:5:"price";d:35;s:8:"quantity";i:1;s:10:"attributes";a:3:{s:5:"image";s:8:"toy2.jpg";s:3:"url";s:17:"poo-chi-robot-dog";s:6:"catUrl";s:4:"toys";}s:10:"conditions";a:0:{}}i:5;a:6:{s:2:"id";i:5;s:4:"name";s:10:"Short Rope";s:5:"price";d:3;s:8:"quantity";i:1;s:10:"attributes";a:3:{s:5:"image";s:8:"toy1.jpg";s:3:"url";s:10:"short-rope";s:6:"catUrl";s:4:"toys";}s:10:"conditions";a:0:{}}}', '38.00', '2017-01-13 00:38:06', '2017-01-13 00:38:06'),
(12, 10, 'a:1:{i:2;a:6:{s:2:"id";i:2;s:4:"name";s:26:"Pabst Blue Ribbon Doghouse";s:5:"price";d:45;s:8:"quantity";i:1;s:10:"attributes";a:3:{s:5:"image";s:11:"kennel2.jpg";s:3:"url";s:26:"pabst-blue-ribbon-doghouse";s:6:"catUrl";s:6:"houses";}s:10:"conditions";a:0:{}}}', '45.00', '2017-01-13 18:38:13', '2017-01-13 18:38:13'),
(13, 4, 'a:1:{i:2;a:6:{s:2:"id";i:2;s:4:"name";s:20:"Blue Ribbon Doghouse";s:5:"price";d:45;s:8:"quantity";i:1;s:10:"attributes";a:3:{s:5:"image";s:11:"kennel2.jpg";s:3:"url";s:26:"pabst-blue-ribbon-doghouse";s:6:"catUrl";s:6:"houses";}s:10:"conditions";a:0:{}}}', '45.00', '2017-01-16 21:34:16', '2017-01-16 21:34:16'),
(14, 3, 'a:1:{i:4;a:6:{s:2:"id";i:4;s:4:"name";s:13:"Carrot Castum";s:5:"price";d:35;s:8:"quantity";i:1;s:10:"attributes";a:3:{s:5:"image";s:10:"carrot.jpg";s:3:"url";s:13:"carrot-castum";s:6:"catUrl";s:7:"clothes";}s:10:"conditions";a:0:{}}}', '35.00', '2017-01-16 23:44:32', '2017-01-16 23:44:32');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `shortText` text NOT NULL,
  `description` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `shortText`, `description`, `url`, `image`, `price`, `categorie_id`, `updated_at`, `created_at`) VALUES
(1, 'Mobile Dog House', 'A mobile dog house for your dog. Got a lot of space, and  colors! ', '<b>  Sed ut perspiciatis unde </b>omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia volupt<b>as sit aspernatur aut odit</b> aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,<span style="background-color: rgb(255, 255, 0);"> adipisci velit, sed quia non numquam</span> eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?  ', 'mobile-dog-house', 'kennel1.jpg', '80.70', 3, '2017-01-13 11:39:30', '2016-12-21 00:00:00'),
(2, 'Blue Ribbon Doghouse', 'The classic kennel, made with plastic and great in the garden. ', ' Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? ', 'pabst-blue-ribbon-doghouse', 'kennel2.jpg', '45.00', 3, '2017-01-11 14:23:43', '2016-12-21 00:00:00'),
(3, 'Dog Coat', 'Dog coat that will warm you dog, especially for the winter!', ' Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? ', 'dog-coat', 'coat.jpg', '20.00', 2, '2017-01-11 14:24:03', '2016-12-21 00:00:00'),
(4, 'Carrot Castum', 'A beutifull custum for Haloween. Try it on your dog!', ' Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? ', 'carrot-castum', 'carrot.jpg', '35.00', 2, '2017-01-11 14:24:19', '2016-12-21 00:00:00'),
(5, 'Short Rope', 'Short rope to play with your dog! Dogs LOVE it! ', ' Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? ', 'short-rope', 'toy1.jpg', '3.00', 1, '2017-01-11 14:24:28', '2016-12-21 00:00:00'),
(6, 'Poo-Chi - Robot Dog', 'Poo-Chi, one of the first generations of robopet toys. ', ' Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? ', 'poo-chi-robot-dog', 'toy2.jpg', '35.00', 1, '2017-01-11 14:24:39', '2016-12-21 00:00:00'),
(7, 'Hotdog Snack', '10 hotdog snackes for dogs. Try it now!', '  <p><b><br></b></p><p><b>Manufacturer: </b>Kunzler, located in Lancaster Pennslyvania.</p><p><b>Package: </b>10 small hotdogs + small plastic plate.</p><p><b>Delivery:  </b>Estimated in<b> </b>5 days.</p><p><b>Returns: </b>No food returns.</p><p><br></p><p><br></p><p><br></p>  ', 'hotdog-snack', '2017.1.09.21.35.20-hotdog.jpg', '5.00', 7, '2017-01-09 21:35:20', '2017-01-09 21:35:20'),
(9, 'Balibu - Red Harness', 'A nice red harness, very comfortable for dogs. Must!', '<span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;"><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</b> incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex <b>ea commodo consequat</b>. Duis aute irure dolor in reprehenderit in voluptate velit esse<span style="background-color: rgb(255, 255, 0);"> cillum dolore eu fugiat nulla pariatur. </span>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span>', 'balibu-red-harness', '2017.1.17.02.16.43-harneess.jpg', '15.00', 8, '2017-01-17 02:16:43', '2017-01-14 14:07:15'),
(10, 'Electric Trainer ', 'Waterproof Pet Safe Dog Shock Training Collar. Good for practice!', '<ul><li><p><span style="color: rgb(51, 51, 51); font-family: &quot;Helvetica neue&quot;, Helvetica, Verdana, sans-serif;">A brand-new, unused, unopened, undamaged item (including handmade items)</span></p><p><span style="color: rgb(51, 51, 51); font-family: &quot;Helvetica neue&quot;, Helvetica, Verdana, sans-serif;"><br></span></p><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(255, 255, 0);"><u>Lorem ipsum - &nbsp;dolor sit amet consectetur adipiscing</u></span></li><li><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;"> elit, sed do - eiusmod tempor &nbsp;incididunt ut labore</span></li><li><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">et dolore - &nbsp;magna aliqua Ut enim ad minim veniam</span></li><li><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;"> quis nostrud &nbsp;- exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span><table width="100%" cellspacing="0" cellpadding="0" style="margin: 0px; padding: 0px; border: 0px; font-family: &quot;Helvetica neue&quot;, Helvetica, Verdana, sans-serif; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);"><tbody style="margin: 0px; padding: 0px; border: 0px;"><tr style="margin: 0px; padding: 0px; border: 0px;"><td class="attrLabels" style="margin: 0px; padding-top: 3px; padding-right: 30px; padding-bottom: 3px; border: 0px; white-space: nowrap; vertical-align: top;"><p><br></p></td><td width="50.0%" style="margin: 0px; padding-top: 3px; padding-right: 30px; padding-bottom: 3px; border: 0px; vertical-align: top;"><p><br></p><p><br></p></td></tr></tbody></table><p><span style="color: rgb(51, 51, 51); font-family: &quot;Helvetica neue&quot;, Helvetica, Verdana, sans-serif;"><br></span></p></li></ul>', 'electric-trainer', '2017.1.17.12.53.07-barkcollars.jpg', '40.00', 11, '2017-01-17 12:53:07', '2017-01-17 12:53:07'),
(11, 'Bone Toy', 'Blue dog bone toy for a puppy. Good for the first days', '<span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;"><b>in voluptate velit esse </b>cillum dolore eu fugiat nulla pariatur.<span style="background-color: rgb(255, 255, 0);"> Excepteur</span> sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit <b>anim id est laborum.</b></span>', 'bone-toy', '2017.1.17.12.57.17-bone.JPG', '10.00', 1, '2017-01-17 12:57:17', '2017-01-17 12:57:17'),
(12, 'Cool Blue Ball', 'Blue Ball for dogs 5 years old. They just love to play with it.', '<p><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">lor sit amet, consectetur, adipisci velit, sed quia non <b>numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad m</b>inima veniam, quis nostrum </span></p><p><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;"><br></span></p><p><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequat<span style="background-color: rgb(255, 255, 0);">ur? Quis autem vel eum iure reprehenderit qui in e</span>a voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</span></p>', 'cool-blue-ball', '2017.1.17.13.00.50-ball.jpg', '7.00', 1, '2017-01-17 13:00:50', '2017-01-17 13:00:50'),
(13, 'Rubber Ball Chew', 'Rubber Ball Chew Dispensing Holder Pet Dog Puppy ', '    <span style="font-family: "Open Sans", Arial, sans-serif; font-size: 14px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</span>    ', 'rubber-ball-chew', '2017.1.17.13.04.07-ball2.jpg', '25.00', 1, '2017-01-17 13:12:34', '2017-01-17 13:03:21'),
(14, 'Binoculars', 'Very cool binoculars for all kinds of dogs! new brands!', '<span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing <b>elit, sed do eiusmod tempor incididun</b>t ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud e<span style="background-color: rgb(255, 255, 0);">xercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in v</span>oluptate velit esse</span>  ', 'binoculars', '2017.1.17.13.07.13-glasses.jpg', '15.00', 2, '2017-01-17 13:07:13', '2017-01-17 13:07:13'),
(15, 'Old Yeller - Dog Food', '100% complete & balanced for all dog sizes.', '<span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;"><span style="background-color: rgb(255, 255, 0);">&nbsp;odit aut fugit, sed quia consequuntur magni </span>dolores eos qui ratione voluptatem sequi nesciunt. <b>Neque porro quisquam est, qui dolorem ipsum quia </b>dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut lab<b>ore et dolore magnam aliquam quaerat voluptatem.</b> Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi cons</span>  ', 'old-yeller--dog-food', '2017.1.17.13.11.46-oldyellers.jpg', '40.00', 7, '2017-01-17 13:11:46', '2017-01-17 13:11:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `phone`, `updated_at`, `created_at`) VALUES
(1, '-', '-', '-', '', '', '2017-01-05 00:00:00', '2017-01-05 00:00:00'),
(2, '--', '--', '--', '', '', '2017-01-05 00:00:00', '2017-01-05 00:00:00'),
(3, 'Admin', 'admin@gmail.com', '$2y$10$Y51uBaRtIVeUheY3virHpe.eo1wWCc.xF4tDZj8dsGUUXB6eXQZJy', '----', '00-00-0000-000', '2017-01-05 00:00:00', '2017-01-05 00:00:00'),
(4, 'Aviad Pinto', 'aviad@gmail.com', '$2y$10$bvYrdwPXqbDFTQDsx5aaneAlGj3JHLP4/jeaS5frFhrUOhVR801Eu', 'Akko 14, Beer Sheva  Israel', '0546783858', '2017-01-05 00:00:00', '2017-01-05 00:00:00'),
(5, 'Elad Habusha', 'elad@gmail.com', '$2y$10$Y51uBaRtIVeUheY3virHpe.eo1wWCc.xF4tDZj8dsGUUXB6eXQZJy', 'Rishon Lezion, perah 18, Israel', '072-999-5664', '2017-01-05 00:00:00', '2017-01-05 00:00:00'),
(6, 'Itay Hazan', 'itay@gmail.com', '$2y$10$lec4MFfJMy0zJwgkWOR.iuxDoMlJ3xhpxWr47XsOE/qEXy7ijuAyW', 'Bialik 7, Ofaqim, Israel', '050-669-5554', '2017-01-06 19:31:02', '2017-01-06 19:31:02'),
(7, 'Liat Cohen', 'liat@gmail.com', '$2y$10$Tx0cMwrUPgU9BUL1cGYRteSf9RZMhrr9R/YeW7WqNgjUazLtMEcSW', 'Hanarkisim 18, Jerusalem ,Israel', '052-672-7747', '2017-01-11 23:18:34', '2017-01-11 23:18:34'),
(8, 'Idan Aqua', 'idan@gmail.com', '$2y$10$7Mc8FawNLgrLiMtugaPqHemlltp5NMW50fpz32Tr.a5M4FU7eiRLq', 'Petah Tikva, Poalim 14, Israel', '0596727724', '2017-01-12 19:59:37', '2017-01-12 19:59:37'),
(11, 'Ori Hulyo', 'ori@gmail.com', '$2y$10$u3FME3j3rPzZ/5DhZQwX8.73GGDnhAS/XvGFGqyhFaLwvRJPeUP3C', '- Empty Address -', '052-696-88785', '2017-01-16 23:01:17', '2017-01-16 23:01:17');

-- --------------------------------------------------------

--
-- Table structure for table `users_role`
--

CREATE TABLE `users_role` (
  `uid` int(11) NOT NULL,
  `roll_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_role`
--

INSERT INTO `users_role` (`uid`, `roll_id`) VALUES
(3, 3),
(4, 3),
(5, 4),
(6, 4),
(7, 4),
(8, 4),
(9, 4),
(10, 4),
(9, 4),
(10, 4),
(11, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
