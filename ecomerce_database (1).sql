-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2023 at 01:41 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomerce_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `mens_product_table`
--

CREATE TABLE `mens_product_table` (
  `id` int(11) NOT NULL,
  `product_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_count1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_count2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_count3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_count4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_count5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_count6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size7` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_count7` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_img1` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_img2` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_img3` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_offer` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_details` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_description` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mens_product_table`
--

INSERT INTO `mens_product_table` (`id`, `product_category`, `product_brand`, `product_name`, `product_size1`, `product_count1`, `product_size2`, `product_count2`, `product_size3`, `product_count3`, `product_size4`, `product_count4`, `product_size5`, `product_count5`, `product_size6`, `product_count6`, `product_size7`, `product_count7`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_offer`, `product_details`, `product_description`) VALUES
(2, 'Jeans', 'Diesel', 'Black Jeans', 'S', '3', 'M', '4', 'L', '5', 'XL', '6', 'XXL', '3', 'XXXL', '3', '4XL', '6', '6zp5a_512.jpg', '1af8z_512.jpg', 'dnymg_512.jpg', '243', '4%', 'Name : Black Jeans<br><br>\r\n\r\nFabric : Denim<br><br>\r\n\r\nPattern : Solid<br><br>\r\n\r\nNet Quantity (N) : 1<br><br>\r\n\r\nBlack jeans for men<br><br>\r\n\r\nColor : z black<br><br>\r\nFabric : denim Introducing our stylish black jeans for men, a must-have for any modern wardrobe. Made from high-quality denim material, these jeans are designed to be comfortable, breathable, and long-lasting. The black color is sleek and versatile, making it easy to pair with a variety of outfits.<br><br>\r\n\r\nOur black jeans for men come in a slim fit style, flattering the legs with a tapered silhouette. They also feature a classic five-pocket design, a button and zipper fly closure, and belt loops. The belt loops are perfect for adding your favorite belt to complete your look.<br><br>\r\n\r\nThese black jeans are perfect for casual occasions, but also suitable for dressing up with a stylish shirt and dress shoes for a night out. They are machine washable and easy to care for.<br><br>\r\n\r\n\r\n\r\nCheap and best rate<br><br>\r\n\r\nSizes : <br><br>\r\n\r\n28 (Waist Size : 29 in, Length Size: 40 in, Hip Size: 30 in)<br><br>\r\n\r\n30 (Waist Size : 31 in, Length Size: 40 in, Hip Size: 32 in)<br><br>\r\n\r\n32 (Waist Size : 33 in, Length Size: 40 in, Hip Size: 42 in)<br><br>\r\n\r\nCountry of Origin : India                                    ', 'Upgrade your wardrobe with these stylish and functional black jeans for men. They\'re the perfect addition to any modern man\'s wardrobe and will provide comfort and style for years to come.                                       '),
(4, 'Jeans', 'Diesel', 'Gorgeous Glamarous Men Jeans', 'S', '2', 'M', '3', 'L', '5', 'XL', '3', 'XXL', '8', 'XXXL', '2', '4XL', '1', 'uavx8_512.jpg', 'ruf6i_512.jpg', 'hvgih_512.jpg', '441', '5%', 'Name : Gorgeous Glamarous Men Jeans<br><br>\r\n\r\nFabric : Denim<br><br>\r\n\r\nPattern : Solid<br><br>\r\n\r\nNet Quantity (N) : 1<br><br>\r\n\r\nL,Zard Regular Fit Men\'s Jeans - Crafted from cotton to cater to your comfort demands, this pair of Mid rise jeans from L,zard offers you a fashionable look effortlessly.<br><br>\r\n\r\nSizes : <br><br>\r\n\r\n28 (Waist Size : 28 in, Length Size: 42 in, Hip Size: 28 in)<br><br>\r\n\r\n30 (Waist Size : 30 in, Length Size: 42 in, Hip Size: 30 in)<br><br>\r\n\r\n32 (Waist Size : 32 in, Length Size: 42 in, Hip Size: 32 in)<br><br>\r\n\r\n34 (Waist Size : 34 in, Length Size: 42 in, Hip Size: 34 in)<br><br>\r\n\r\n36 (Waist Size : 36 in, Length Size: 42 in, Hip Size: 36 in)<br><br>\r\n\r\n38 (Waist Size : 38 in, Length Size: 42 in, Hip Size: 38 in)<br><br>\r\n\r\n40 (Waist Size : 40 in, Length Size: 42 in, Hip Size: 40 in)<br><br>\r\n\r\n42 (Waist Size : 42 in, Length Size: 42 in, Hip Size: 42 in)<br><br>\r\n\r\nCountry of Origin : India     <br><br>                            ', 'Good Quality Product   '),
(5, 'Jeans', 'Alen', 'Stylish Latest Men Jeans', 'S', '2', 'M', '3', 'L', '2', 'XL', '5', 'XXL', '3', 'XXXL', '3', '4XL', '1', '9crbx_512.jpg', 'ejhgl_512.jpg', 'dso5j_512.jpg', '499', '8%', 'Name : Stylish Latest Men Jeans<br><br>\r\n\r\nFabric : Denim<br><br>\r\n\r\nPattern : Solid<br><br>\r\n\r\nNet Quantity (N) : 1<br><br>\r\n\r\nL,Zard Regular Fit Men\'s Jeans - Crafted from cotton to cater to your comfort demands, this pair of Mid rise jeans from L,zard offers you a fashionable look effortlessly.<br><br>\r\n\r\nSizes : <br><br>\r\n\r\n28 (Waist Size : 28 in, Length Size: 42 in, Hip Size: 28 in)<br><br>\r\n\r\n30 (Waist Size : 30 in, Length Size: 42 in, Hip Size: 30 in)<br><br>\r\n\r\n32 (Waist Size : 32 in, Length Size: 42 in, Hip Size: 32 in)<br><br>\r\n\r\n34 (Waist Size : 34 in, Length Size: 42 in, Hip Size: 34 in)<br><br>\r\n\r\n36 (Waist Size : 36 in, Length Size: 42 in, Hip Size: 36 in)<br><br>\r\n\r\n38 (Waist Size : 38 in, Length Size: 42 in, Hip Size: 38 in)<br><br>\r\n\r\n40 (Waist Size : 40 in, Length Size: 42 in, Hip Size: 40 in)<br><br>\r\n\r\n42 (Waist Size : 42 in, Length Size: 42 in, Hip Size: 42 in)<br><br>\r\n\r\nCountry of Origin : India        <br><br>                                     ', 'Best Quality For Cheap Price                        '),
(6, 'none', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '                                                ', '                                                '),
(7, 'Jeans', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'hvgih_512.jpg', '', '', '', '', 'Name : Myra Petite Sarees<br><br>\r\n\r\nSaree Fabric : Banarasi Silk<br><br>\r\n\r\nBlouse : Separate Blouse Piece<br><br>\r\n\r\nBlouse Fabric : Banarasi Silk<br><br>\r\n\r\nPattern : Zari Woven<br><br>\r\n\r\nBlouse Pattern : Same as Border<br><br>\r\n\r\nNet Quantity (N) : Single<br><br>\r\n\r\nSizes : <br><br>\r\n\r\nFree Size (Saree Length Size : 5.5 m, Blouse Length Size: 0.8 m)<br><br>\r\n\r\nCountry of Origin : India       <br><br>                        ', '                                                ');

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `id` int(11) NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`id`, `username`, `password`) VALUES
(1, 'Subash07', 'Subash07@'),
(2, 'Anand', 'Anand@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mens_product_table`
--
ALTER TABLE `mens_product_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mens_product_table`
--
ALTER TABLE `mens_product_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
