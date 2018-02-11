-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 02 Janvier 2018 à 20:08
-- Version du serveur :  5.7.20-0ubuntu0.16.04.1
-- Version de PHP :  7.0.26-2+ubuntu16.04.1+deb.sury.org+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `avicene`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `subject` varchar(255) NOT NULL,
  `author` varchar(50) CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `subject`, `author`, `date`, `published`) VALUES
(1, 'How to reduce or compress image size while uploading using PHP', '<p>\r\n	<strong>a^ &agrave;&agrave;&agrave;&agrave;&agrave;&agrave;&agrave; &eacute; It is very common</strong> to upload images to the server or website by the users and admins. Users mostly upload their images for setting their profile picture or to submit documents and so on. But most of the time images are uploaded by the users are not optimized for the web, thus taking much more ... It is very co<strong>mmon to upload</strong> images to the server or website by the users and admins. Users mostly upload their images for setting their profile picture or to submit documents and so on. But most of the time images are uploaded by the users are not optimized for the web, thus taking much more ...It is very common to upload images to the server or website by the users and admins. Users mostly upload their images for setting their profile picture or to submit documents and so on. But most of the time images are uploaded by the users are not optimized for the web, thus taking much more ...It is very common to upload images to the server or website by the users and admins. Users mostly upload their images for setting their profile picture or to submit documents and so on. But most of the time images are uploaded by the users are not optimized for the web, thus taking <strong>much more ...</strong></p>\r\n', 'How to reduce or compress image size while uploading using PHP', 'Avicene', '2017-12-28', 0),
(2, 'Store and retrieve image from database using PHP and MySQL', '<p>\r\n	Upload and store an image into the database and later retrieve that image from the database is very easy and simple. But before store into the database table, the image should be encoded using base64_encode() function. So, in this tutorial, I will show you how to store and retrieve image from database using PHP and MySQL ...&nbsp;images to the server or website by the users and admins. Users mostly upload their images for setting their profile picture or to submit documents and so on. But most of the time images are uploaded by the users are not optimized for the web, thus taking much more ...It is very common to upload images to the server or website by the users and admins. Users mostly upload their images for setting their profile picture or to submit documents and so on. But most of the time images are uploaded by the users are not optimized for the web, thus taking much more ...It is very common to upload images to the server or website by the users and admins. Users mostly upload their images for setting their profile picture or to submit documents and so on. But most of the time images are uploaded by the users are not optimized for the web.&nbsp;Upload and store an image into the database and later retrieve that image from the database is very easy and simple. But before store into the database table, the image should be encoded using base64_encode() function. So, in this tutorial, I will show you how to store and retrieve image from database using PHP and MySQL ...&nbsp;images to the server or website by the users and admins. Users mostly upload their images for setting their profile picture or to submit documents and so on. But most of the time images are uploaded by the users are not optimized for the web, thus taking much more ...It is very common to upload images to the server or website by the users and admins. Users mostly upload their images for setting their profile picture or to submit documents and so on. But most of the time images are uploaded by the users are not optimized for the web, thus taking much more ...It is very common to upload images to the server or website by the users and admins. Users mostly upload their images for setting their profile picture or to submit documents and so on. But most of the time images are uploaded by the users are not optimized for the web.</p>\r\n', '', '', '2018-01-29', 1),
(3, 'Login with Facebook using JavaScript SDK', '<p>\r\n	Login with Facebook using JavaScript SDK provides an easy and simple way to integrate login system to your website without any registration. My earlier tutorial has shown how to login with Facebook using PHP SDK and MySQL in a website. In this tutorial, I will demonstrate you step by step process to learn how to Login with Facebook using ...</p>\r\n', '', '', '0000-00-00', 0),
(4, 'Login with Facebook using PHP and MySQL', 'Registration through filling a long form is a headache to any user. After seeing such big form they run away. But short registration process helps to get more subscribers for your website. Meanwhile, Facebook is the largest social network in Earth and billions of users. Facebook provides PHP SDK through which you can easily integrate registration and login system ...', '', '', '0000-00-00', 1),
(5, 'Create a Facebook App ID for your website', 'This article will show you how to create a Facebook app and get the app ID and app secret code from it. If you wish to use Facebook social, like, login button on your website, then you will need these app ID and secret code. In order to create a Facebook application, you will need ...', '', '', '0000-00-00', 1),
(6, 'Simplest way to add cross browser jQuery date and time picker in web page', 'In this tutorial, I will show you how to add cross browser jQuery date and time picker in the web page. It is a plugin, and it is very simple and easy to implement. Also, this jQuery datetimepicker plugin provides various options to customize datetimepicker as per your requirements. This tutorial helps you to add jQuery date and time ...', '', '', '0000-00-00', 1),
(7, 'Add TinyMCE editor in PHP or HTML', 'When you need to save formatted text or HTML content from users on your website, using any WYSIWYG editor like TinyMCE, you need a textarea field. TinyMCE editor is web based WYSIWYG editor which enables you to convert HTML textarea field to an editor. The TinyMCE editor is converting the formatted text into HTML when the form is submitted to the ...', '', '', '0000-00-00', 1),
(8, 'Multi-step form processing using PHP with jQuery form validation', 'This tutorial will help you to understand how multi-step form processing will work. Here in the tutorial, we will achieve this using PHP. Apart from multi-step form processing, you will also learn how to do form validation using the help of jQuery. Multi-step form processing is very useful functionality when users have to input too much ...', '', '', '0000-00-00', 1),
(9, 'Upload files to the server using jsp and servlet', '<p>\r\n	Upload files to the server using JSP and servlet is a very easy and a common task in Java. The following example will give you a clear idea about how to upload files to the server using JSP and servlet. But before start coding, you need to know some important things.&nbsp;</p>\r\n', '', '', '0000-00-00', 1),
(25, 'Wouzaaa', 'xxxxxxxxxxxxxx', '', '', '0000-00-00', 1),
(10, 'PHP login with PDO connection', 'In this tutorial, I will show you how to do PHP login with PDO connection. Unlike MySQL or SQL, PDO is not database specific. You can connect and use any database using PDO. Different databases may have slightly different connection methods, but its very easy to switch. User_Details Table Create the below table in the database ...', '', '', '0000-00-00', 1),
(11, 'Add Google Map with multiple markers to your website', 'This tutorial, will help you to integrate or add Google Map with multiple markers to your website. You can also visit the following link, if you want to add Google Map with a single marker to your website. We will use Google Maps API for displaying the Google Map with your desired locations. HTML code â?? Add ...', '', '', '0000-00-00', 1),
(12, 'jQuery digital clock plugin', 'Hi friends, in this tutorial, I will show you how to create a simple jQuery digital clock plugin with the help of jQuery and CSS. This clock displays dynamic time. Here is nothing hard enough to understand. Simple HTML, CSS, and jQuery codes are used here. HTML â?? jQuery digital clock The HTML is very ...', '', '', '0000-00-00', 1),
(13, 'Add Google Map with a marker to your website', 'The easiest way to find an address is Google Map. It shows the address with different and shortest routes. You can easily add Google Map with a marker to your website. The marker is your address. In this tutorial, I will tell you how to add Google Map to your website. We will use Google ...', '', '', '0000-00-00', 1),
(14, 'Login using JSP example', 'In this tutorial, I will teach you how to do login using JSP script. The following example will give you a clear and detailed explanation of JSP login script. We will use eclipse editor for code writing and MySQL as the database. Another thing we required, i.e, mysql_connector.jar file. It should be copied into the WebContent\\WEB-INF\\lib folder...', '', '', '0000-00-00', 1),
(15, 'Write data in excel file from database using PHP', 'In this article, I will show you how to use PHPExcel library to write data in excel file. The data which will be written in the excel file will be fetched from the database. In this tutorial we will use MySQL database, you can choose another database if you want. You can also check my...', '', '', '0000-00-00', 1),
(16, 'Read excel file and import data into MySQL database using PHPExcel', 'Sometimes, we need to read a huge amount of data from excel files (.xls or .xlsx in extension) and have to store these data into a database for future use. We can achieve this by using PHP, PHPExcel library, and MySQL. this So, in this tutorial, I will explain to you how to read excel...', '', '', '0000-00-00', 1),
(17, 'Establish MySQL database connection with JSP', 'Making of dynamic website required a database. The database may be MySQL, Oracle, SQL etc., in my case it is MySQL. In this tutorial, I will explain to you how to establish MySQL database connection with JSP (Java Server Pages). We will use eclipse editor for doing so. Also, you need the mysql_connector.jar file which has to be...', '', '', '0000-00-00', 1),
(18, 'Read CSV file using PHP', 'Read CSV file using PHP is very easy and simple. PHP has a built function fgetcsv(), through which we can read CSV file easily. So, in this tutorial, I will teach how to read CSV file using PHP. Friends, if you want to know how to write data into CSV file using PHP, please visit my...', '', '', '0000-00-00', 1),
(19, 'Write data into CSV file using PHP', 'Sometimes we need to generate CSV file containing data from database table. So, in this tutorial, we are going to learn how to write data into CSV file using PHP. PHP has a default function fputcsv(), through which we can write data into CSV file. In this code, we will fetch data from MySQL table ...', '', '', '0000-00-00', 1),
(20, 'Count words and characters using jQuery', 'A simple, word and character counter for HTML textarea and other input fields. The following simple useful HTML and jQuery code will let you help to count words and characters with and without white spaces of a string. In this tutorial hardly I used 20 lines of jQuery code which returns you the desired goal...', '', '', '0000-00-00', 1),
(21, 'Live image preview before upload to the server using jQuery', 'Sometimes it is required to verify the selected image before upload it to the server. So, in this tutorial, I will show you how to see live image preview before upload it using jQuery. HTML live image preview ...', '', '', '0000-00-00', 1),
(22, 'Ajax live search using jQuery Ajax and PHP', 'Ajax live search is a search form where you get search results instantly while you type. Therefore it makes very easier for the users to find what they are looking for. In this tutorial I will demonstrate you Ajax live search using jQueyr Ajax and PHP. Ajax live search The HTML page <div class="searchDiv"> <label>Keywords ...', '', '', '0000-00-00', 1),
(23, 'za', '<p>\r\n	aaaaaaaa</p>\r\n', '', 'moa', '2017-12-27', 1),
(24, 'zaaaaaaaaaaa', 'zoooooooooooooo', '', '', '0000-00-00', 1),
(26, 'GRRRR', 'ooooooooooooooooooooo', '', '', '0000-00-00', 1),
(27, 'BIBI', 'tototototototo', '', '', '0000-00-00', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
