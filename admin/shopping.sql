-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 04:22 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_categories`
--

CREATE TABLE `admin_categories` (
  `id` int(255) NOT NULL,
  `Category_Name` varchar(200) NOT NULL,
  `Category_Image` varchar(100) NOT NULL,
  `SelectCategory` varchar(100) NOT NULL,
  `Image_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_categories`
--

INSERT INTO `admin_categories` (`id`, `Category_Name`, `Category_Image`, `SelectCategory`, `Image_Name`) VALUES
(1, 'men', 'Category_pic/cm1.jpg', 'men_category', 'men'),
(2, 'women', 'Category_pic/cm2.jpg', 'women_category', 'women'),
(3, 'Shoes', 'Category_pic/cm4.jpg', 'shoe_category', 'shoe'),
(4, 'Accesories', 'Category_pic/cm3.jpg', 'accesories_category', 'acces');

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `s_id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`s_id`, `username`, `email`, `phone`, `password`) VALUES
(2, 'Bablu ', 'bablu@gmail.com', '9547708474', 'Bm1234@@'),
(3, 'Ramen', 'ramen@gmail.com', '9547708474', 'Ramen@2001');

-- --------------------------------------------------------

--
-- Table structure for table `billing_address`
--

CREATE TABLE `billing_address` (
  `Order_id` int(100) NOT NULL,
  `firstname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `s_id` int(20) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `size_fit` varchar(255) NOT NULL,
  `material_care` varchar(255) NOT NULL,
  `price` varchar(25) NOT NULL,
  `off_price` varchar(25) NOT NULL,
  `discount_off` varchar(25) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `image4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `s_id`, `product_name`, `category`, `description`, `details`, `size_fit`, `material_care`, `price`, `off_price`, `discount_off`, `quantity`, `image`, `image1`, `image2`, `image3`, `image4`) VALUES
(1, 3, 'Anouk', 'men_category', 'Men Navy & Black Solid Layered Kurta ', 'Navy blue and black solid kurta with dhoti pants<br>\r\nNavy blue solid straight above knee layered kurta, has a round neck, long sleeves,<br> straight hem, front slit, button closure, two side pockets<br>\r\nBlack solid dhoti pants, has a partially elasticat', 'The model (height 6\') is wearing a size M', 'Top fabric: 81.9% polyester, 18.1% viscose rayon<br>\r\nBottom fabric: 100% polyester<br>\r\nHand-wash<br>', '1399\r\n', 'Rs. 3499', '(60% OFF)', '10', 'product/men_c11.jpg', 'product/men_c12.jpg', 'product/men_c13.jpg', 'product/men_c14.jpg', 'product/men_c15.jpg'),
(2, 2, 'DEYANN', 'men_category', 'Men Navy Blue Solid Kurta ', 'Navy solid kurta with pyjamas and Nehru jacket<br>\r\nNavy solid straight knee-length kurta, has a mandarin collar, long sleeves, straight hem\r\nNavy solid pajamas, drawstring closure<br>\r\nBlueprinted Nehru jacket, has a mandarin collar, sleeveless, button c', 'The model (height 6\') is wearing a size M', 'Top fabric: Dupion Silk<br>\r\nBottom fabric: Dupion Silk<br>\r\nDry-clean<br>', '2236', 'Rs. 5590', '(60% OFF)', '10', 'product/men_c21.jpg', 'product/men_c22.jpg', 'product/men_c23.jpg', 'product/men_c24.jpg', 'product/men_c25.jpg'),
(3, 3, 'SOJANYA', 'men_category', 'Men Maroon & Beige Self Design Kurta ', 'Maroon and gold-toned solid kurta with dhoti pants<br>\r\nMaroon straight knee-length kurta, has a mandarin collar, long sleeves, straight hem, side slits<br>\r\nGold-toned solid dhoti pants, drawstring closure<br>', 'The model (height 6\') is wearing a size M', 'Top fabric: Silk Blend<br>\r\nBottom fabric: Silk Blend<br>\r\nMachine-wash<br>', '1924', 'Rs. 5499', '(65% OFF)', '10', 'product/men_c31.jpg\r\n', 'product/men_c32.jpg', 'product/men_c33.jpg', 'product/men_c34.jpg', 'product/men_c35.jpg'),
(4, 2, 'HRX ', 'men_category', 'Men Olive Green Solid Active Jacket', 'A lightweight jacket provides insulation and helps maintain body temperature in mild cold<br>\r\nBreathable fabric helps sweat dry fast.<br>\r\nZippered pockets keep your essentials safe<br> \r\nStyle: Full Front Open Zipper<br> \r\nSleeve: Full Sleeves<br> \r\nCol', 'The model (height 6\') is wearing a size M', '100% polyester<br>Machine-wash', '1799', 'Rs. 3599', '(50% OFF)', '10', 'product/men_c41.jpg', 'product/men_c42.jpg', 'product/men_c43.jpg', 'product/men_c44.jpg', 'product/men_c45.jpg'),
(5, 3, 'H&M', 'men_category', 'Men Beige Solid Relaxed Fit Sweatshirt', 'Relaxed-fit top in sweatshirt fabric made from a cotton blend with dropped shoulders and ribbing around the neckline, cuffs, and hem.<br> Soft brushed inside.', 'Relaxed-fit<br>\r\nThe model (height 6\') is wearing a size M', '60% Cotton, 40% Polyester<br>\r\nMachine Wash<br>', '799', '', '', '10', 'product/men_c51.jpg', 'product/men_c52.jpg', 'product/men_c53.jpg', 'product/men_c54.jpg', 'product/men_c55.jpg'),
(6, 2, 'H&M', 'men_category', 'Men Beige Solid Relaxed Fit Sweatshirt', 'Relaxed-fit top in sweatshirt fabric made from a cotton blend with dropped shoulders and ribbing around the neckline, cuffs, and hem.<br> Soft brushed inside.', 'Relaxed-fit<br>\r\nThe model (height 6\') is wearing a size M', '60% Cotton, 40% Polyester<br>\r\nMachine Wash<br>', '799', '', '', '10', 'product/men_c61.jpg', 'product/men_c62.jpg', 'product/men_c63.jpg', 'product/men_c64.jpg', 'product/men_c65.jpg'),
(7, 3, 'Levis', 'men_category', 'Men Blue Slim Fit Opaque Casual Shirt', 'Blue, solid, opaque, casual shirt<br>\r\nSpread collar<br>\r\nFull button placket<br>\r\n1 patch pocket<br>\r\nLong regular sleeves<br>\r\nCurved hem<br>', 'Brand Fit:<br>\r\nFit: Slim Fit<br>\r\nThe model (height 6\') is wearing a size 40<br>', '100% Cotton<br>\r\nCold machine wash<br>\r\nWarm iron<br>\r\nDo not bleach<br>\r\nTumble dry medium<br>', '1469', 'Rs. 2099', '(30% OFF)', '6', 'product/men_c71.jpg', 'product/men_c72.jpg', 'product/men_c73.jpg', 'product/men_c74.jpg', 'product/men_c75.jpg'),
(8, 2, 'HIGHLANDER', 'men_category', 'Men Maroon & Navy Blue Casual Shirt', 'Maroon and navy blue checked casual shirt, has a cutaway collar, long sleeves, curved hem, one patch pocket', 'Slim fit<br>\r\nThe model (height 6\') is wearing a size 40<br>', 'Cotton<br>\r\nMachine-wash<br>', '735', 'Rs. 1599', '(54% OFF)', '6', 'product/men_c81.jpg', 'product/men_c82.jpg', 'product/men_c83.jpg', 'product/men_c84.jpg', 'product/men_c85.jpg'),
(9, 3, 'KALINI', 'women_category', 'Green & Orange Leheriya Saree', 'Green and orange Kota saree<br>\r\nLeheriya Printed saree with printed border<br>\r\nHas jaali detail<br>', 'Length: 5.5 meters plus 0.8-meter blouse piece<br>\r\nWidth: 1.06 metres (approx.)<br>', 'Saree Fabric: Cotton Blend<br>\r\nBlouse fabric: Silk Blend<br>\r\nHand wash<br>', '545', 'Rs. 2099', '(74% OFF)', '6', 'product/women_c11.jpg', 'product/women_c12.jpg', 'product/women_c13.jpg', 'product/women_c14.jpg', 'product/women_c15.jpg'),
(10, 2, 'Juniper', 'women_category', 'Women Green Rayon Slub Kurti', 'Green solid A-line kurti, has a keyhole neck, three-quarter sleeves, and asymmetric hem', 'The model (height 5\'8\") is wearing a size S', 'Liva<br>\r\nMachine Wash<br>', '692', 'Rs. 1049', '(34% OFF)', '10', 'product/women_c31.jpg', 'product/women_c32.jpg', 'product/women_c33.jpg', 'product/women_c34.jpg', 'product/women_c35.jpg'),
(11, 3, 'GERUA', 'women_category', 'Mustard Yellow & Red Pure Cotton Kurti', 'Mustard yellow and red printed empire A-line kurti, has a tie-up neck, short sleeves, flared hem, gathers all over', 'The model (height 5\'8\") is wearing a size S', '100% cotton<br>\r\nHand-wash cold<br>', '527', 'Rs. 1099', '(52% OFF)', '10', 'product/women_c41.jpg', 'product/women_c42.jpg', 'product/women_c43.jpg', 'product/women_c44.jpg', 'product/women_c45.jpg'),
(12, 2, 'Sangria', 'women_category', 'Women Maroon & Silver Anarkali Kurta', 'Maroon and Silver printed Anarkali kurta with mirror work detailing, has a round neck, three-quarter sleeves, two pockets, high-low hem', 'The model (height 5\'8\") is wearing a size S', 'Material: Cotton<br>\r\nMachine Wash<br>', '1159', 'Rs. 2899', '(60% OFF)', '10', 'product/women_c51.jpg', 'product/women_c52.jpg', 'product/women_c53.jpg', 'product/women_c54.jpg', 'product/women_c55.jpg'),
(13, 3, 'Sangria', 'women_category', 'Women Pink & Green Anarkali Kurta', 'Pink, Green, and golden ethnic print Anarkali kurta, v-neck with mandarin collar, soft fabric, and convenient pockets --this kurta has all your favorite details! By teaming wedge heels and gold jewelry with this lovely set, you\'ve created a charming look ', 'The model (height 5\'8\") is wearing a size S', '100% Viscose Rayon<br>\r\nMachine Wash<br>', '1559', 'Rs. 3899', '(60% OFF)', '10', 'product/women_c61.jpg', 'product/women_c62.jpg', 'product/women_c63.jpg', 'product/women_c64.jpg', 'product/women_c65.jpg'),
(14, 2, 'RAJGRANTH', 'women_category', 'Cream-Coloured & Green Lehenga ', 'Cream-colored and green solid lehenga choli with dupatta,<br>\r\nCream-colored and green solid unstitched blouse<br>\r\nCream-colored and green printed semi-stitched lehenga, flared hem<br>\r\nCream-colored and green printed dupatta, tassels border<br>', 'Lehenga length: 1.06 m<br>\r\nLehenga flare: 4 m<br>\r\nBlouse: 0.8 m<br>\r\nDupatta length: 2.25 m<br>\r\nDupatta width:1.06 m<br>', 'Blouse fabric: Satin<br>\r\nLehenga Fabric: Satin<br>\r\nLehenga lining fabric: Silk<br>\r\nDupatta Fabric: Assam Silk<br>', '1499', '', '(Rs. 6500 OFF)', '10', 'product/women_c71.jpg', 'product/women_c72.jpg', 'product/women_c73.jpg', 'product/women_c74.jpg', 'product/women_c75.jpg'),
(15, 3, 'DIVASTRI', 'women_category', 'Pink & Navy Blue Woven Design Lehenga', 'Pink lehenga choli<br>\r\nPink blouse, short sleeves<br>\r\nPink semi-stitched lehenga flared hem<br>', 'Dupatta legnth:2.20 mtr,dupatta width:30 inch,Dupatta fabric:Banarasi silk', 'Blouse fabric: Silk<br>\r\nLehenga Fabric: Silk<br>\r\nLehenga lining fabric: Cotton<br>\r\nDupatta Fabric: Silk<br>', '2279', 'Rs. 5999', '(62% OFF)', '10', 'product/women_c81.jpg', 'product/women_c82.jpg', 'product/women_c83.jpg', 'product/women_c84.jpg', 'product/women_c85.jpg'),
(16, 2, 'Nike', 'shoe_category', 'Unisex Black SB CHRON 2 Suede ', 'A pair of black tennis shoes, has regular styling, lace-up detail<br>\r\nSuede and canvas are durable and breathable<br>\r\nFoam cushions every step<br>\r\nVulcanized construction fuses the sole to the upper for a flexible feel<br>\r\nExtended toe bumper adds dur', 'Comfort-Fit', 'Material: Suede<br>\r\nWipe with a clean, dry cloth to remove dust<br>', '5495', '', '', '10', 'product/shoe_c11.jpg', 'product/shoe_c12.jpg', 'product/shoe_c13.jpg', 'product/shoe_c14.jpg', 'product/shoe_c15.jpg'),
(17, 3, 'ASIAN', 'shoe_category', 'Men Grey Mesh Running Shoes', 'A pair of grey running shoes, has regular Styling, lace-ups detail<br>\r\nMesh upper<br>\r\nCushioned footbed<br>\r\nTextured and patterned outsole<br>\r\nWarranty: 30 days<br>', 'Comfort-Fit', 'Upper material: Mesh<br>\r\nWipe with a clean, dry cloth to remove the dust<br>', '1574', '', '', '10', 'product/shoe_c21.jpg', 'product/shoe_c22.jpg', 'product/shoe_c23.jpg', 'product/shoe_c24.jpg', 'product/shoe_c25.jpg'),
(18, 2, 'El Paso', 'shoe_category', 'Men Brown Derbys', 'A pair of round-toe brown Derbys, has regular styling, lace-up detail<br>\r\nSynthetic Leather upper<br>\r\nCushioned footbed<br>\r\nTextured and patterned outsole<br>\r\nWarranty: 3 months<br>\r\nWarranty provided by brand/manufacturer<br>', 'Comfort-Fit', 'Synthetic Leather<br>\r\nWipe with a clean, dry cloth to remove dust<br>', '899', 'Rs. 4249', '(79% OFF)', '6', 'product/shoe_c31.jpg', 'product/shoe_c32.jpg', 'product/shoe_c33.jpg', 'product/shoe_c34.jpg', 'product/shoe_c35.jpg'),
(19, 3, 'Red Tape', 'shoe_category', 'Men Brown Loafers', 'A pair of round-toe brown loafers, has regular styling, slip-on detail<br>\r\nLeather upper<br>\r\nCushioned footbed<br>\r\nTextured and patterned outsole<br>\r\nWarranty: 3 months<br>\r\nWarranty provided by brand/manufacturer<br>', 'Comfort-Fit', 'Leather<br>\r\nWipe with a clean, dry cloth to remove dust<br>', '1799', 'Rs. 5999', '(70% OFF)', '6', 'product/shoe_c41.jpg', 'product/shoe_c42.jpg', 'product/shoe_c43.jpg', 'product/shoe_c44.jpg', 'product/shoe_c45.jpg'),
(20, 2, 'DressBerry', 'shoe_category', 'Women Peach-Coloured Solid Flats', 'A pair of peach-colored pointed toe flats, has regular styling, buckle detail<br>\r\nSynthetic upper<br>\r\nCushioned footbed<br>\r\nTextured and patterned outsole<br>\r\nWarranty: 1 month<br>\r\nWarranty provided by brand/manufacturer<br>', 'Comfort-Fit', 'Synthetic<br>\r\nWipe with a clean, dry cloth to remove dust<br>', '1169', 'Rs. 1799', '(35% OFF)', '6', 'product/shoe_c51.jpg', 'product/shoe_c52.jpg', 'product/shoe_c53.jpg', 'product/shoe_c54.jpg', 'product/shoe_c55.jpg'),
(21, 3, 'Heel & Buckle ', 'shoe_category', 'Women Beige Solid Leather Slim Heels', 'A pair of beige round toe solid h3eels, has regular styling, open back detail<br>\r\nLeather upper<br>\r\nCushioned footbed<br>\r\nThe textured and patterned outsole has a slim heel<br>', 'Heel height: 3 inches (7.62 cm)', 'Leather<br>\r\nWipe with a clean, dry cloth to remove dust<br>', '4194', 'Rs. 6990', '(40% OFF)', '6', 'product/shoe_c61.jpg', 'product/shoe_c62.jpg', 'product/shoe_c63.jpg', 'product/shoe_c64.jpg', 'product/shoe_c65.jpg'),
(22, 2, 'ZAPATOZ', 'shoe_category', 'Women Gold-Toned Wedge Sandals', 'A pair of gold-toned sandals have regular ankle and open back<br>\r\nPu textured upper<br>\r\nCushioned footbed<br>\r\nThe textured and patterned outsole has a wedge<br>', 'Heel height: 1.5 inches', 'Upper material: PU<br>\r\nWipe with a clean, dry cloth to remove the dust<br>', '749', 'Rs. 999', '(25% OFF)', '10', 'product/shoe_c71.jpg', 'product/shoe_c72.jpg', 'product/shoe_c73.jpg', 'product/shoe_c74.jpg', 'product/shoe_c75.jpg'),
(23, 3, 'House of Pataudi', 'shoe_category', 'Women Off-White & Gold-Toned Mojaris', 'A pair of off-white & gold-toned square toe embellished handcrafted mojaris, has regular styling, slip-on detail<br>\r\nSynthetic and textile upper<br>\r\nCushioned footbed<br>\r\nTextured and patterned leather outsole<br>', 'Comfort-Fit', 'Synthetic and textile<br>\r\nWipe with a clean, dry cloth to remove dust<br>', '2319', 'Rs. 2889', '(20% OFF)', '10', 'product/shoe_c81.jpg', 'product/shoe_c82.jpg', 'product/shoe_c83.jpg', 'product/shoe_c84.jpg', 'product/shoe_c85.jpg'),
(24, 2, 'The Chennai Silks', 'women_category', 'Orange & Green Silk Cotton Saree', 'Orange and green Maheshwari saree<br>\r\nChecked saree with zari border<br>\r\nThe saree comes with an unstitched blouse piece\r\nThe blouse worn by the model might be for modeling purposes only. Check the image of the blouse piece to understand how the actual ', 'Length: 5.5 metres plus 0.8 meter blouse piece<br>\r\nWidth: 1.20 metres<br>', 'Saree fabric: Silk Cotton<br>\r\nBlouse fabric: Silk Cotton<br>\r\nDry clean<br>', '5299', '', '', '10', 'product/women_c21.jpg', 'product/women_c22.jpg', 'product/women_c23.jpg', 'product/women_c24.jpg', 'product/women_c25.jpg'),
(25, 3, 'VILLAIN', 'accesories_category', 'Men Classic Eau De Parfum ', 'Men Classic Eau De Parfum', '100 ML.', 'For external use only, avoid contact with eyes.<br>\r\nKeep away from children.<br>', '600', 'Rs. 750', '(20% OFF)', '6', 'product/acces_c11.jpg', 'product/acces_c12.jpg', 'product/acces_c13.jpg', 'product/acces_c14.jpg', 'product/acces_c15.jpg'),
(26, 2, 'Secret Temptation', 'accesories_category', 'Women Dream Eau De Perfume', 'Whether you are a delicate floral gal, or a fruity, free-spirited kind, let the mild-to-intense concentration help you to define the person you truly are.', '100 ML.', 'For external use only, avoid contact with eyes.<br>\r\nKeep away from children.<br>', '454', 'Rs. 699', '(35% OFF)', '', 'product/acces_c21.jpg', 'product/acces_c22.jpg', 'product/acces_c23.jpg', 'product/acces_c24.jpg', 'product/acces_c25.jpg'),
(27, 3, 'WROGN', 'accesories_category', 'Men Black Analogue Watch ', 'Display: Analogue<br>\r\nMovement: Quartz<br>\r\nPower source: Battery<br>\r\nDial style: Solid round stainless steel dial<br>\r\nFeatures: Reset Time<br>\r\nStrap style: Blue regular, silicon strap with a tang closure<br>\r\nWater resistance: Water-Resistant<br>\r\nCo', 'Onesize', 'Gently wipe with a thoroughly wrung mildly damp and soft cloth', '1079', 'Rs. 2699', '(60% OFF)', '', 'product/acces_c31.jpg', 'product/acces_c32.jpg', 'product/acces_c33.jpg', 'product/acces_c34.jpg', 'product/acces_c35.jpg'),
(28, 2, 'DressBerry', 'accesories_category', 'Women Brown Analogue Watch', 'Display: Analogue<br>\r\nMovement: Mechanical<br>\r\nPower source: Battery<br>\r\nDial style: Solid round stainless steel dial<br>\r\nFeatures: Reset Time<br>\r\nStrap style: Rose Gold-Toned bracelet style, stainless steel strap with a foldover closure\r\nWater-Resis', 'Dial width: 35 mm<br>\r\nStrap width: 18 mm<br>', 'Gently wipe with a thoroughly wrung mildly damp and soft cloth', '1495', '', '', '', 'product/acces_c41.jpg', 'product/acces_c42.jpg', 'product/acces_c43.jpg', 'product/acces_c44.jpg', 'product/acces_c45.jpg'),
(29, 3, 'Voyage', 'accesories_category', 'Men Brown Lens & Gold-Toned Wayfarer', 'Lens Colour: brown<br>\r\nFrame Colour: gold-toned<br>\r\nStyle: full-rim<br>\r\nType: wayfarer sunglasses<br>\r\nFrame Material: plastic<br>\r\nFeatures: UV protected lens<br>\r\nBest suited for oval face<br>\r\nComes in a Voyage hard case<br>', 'Lens width: 60 mm<br>\r\nL size<br>\r\n', 'Plastic<br>\r\nRemove dust and grime by gently wiping the lens with a cloth<br>', '1620', 'Rs. 3000', '(46% OFF)', '', 'product/acces_c51.jpg', 'product/acces_c52.jpg', 'product/acces_c53.jpg', 'product/acces_c54.jpg', 'product/acces_c55.jpg'),
(30, 2, 'Voyage', 'accesories_category', 'Unisex Cateye Sunglasses ', 'Lens color: Brown<br>\r\nLens feature: UV Protected Lens<br>\r\nFrame material: Metal<br>\r\nFrame style: Full Rim<br>\r\nBest suited for Oval face shape<br>\r\nComes in a Voyage cover<br>', 'SIZE MAY DIFFER DEPENDING ON FACE STRUCTURE<br>\r\nS size<br>', 'Metal<br>\r\nRemove dust and grime by gently wiping the lens with a cloth<br>', '756', 'Rs. 1800', '(58% OFF)', '', 'product/acces_c61.jpg', 'product/acces_c62.jpg', 'product/acces_c63.jpg', 'product/acces_c64.jpg', 'product/acces_c65.jpg'),
(31, 3, 'HRX', 'accesories_category', 'Unisex Black Cotton Baseball Cap', 'Black solid baseball cap has a visor', 'Circumference - 56 cm<br>\r\nL size<br>', 'Cotton<br>\r\nMachine wash<br>', '1199', '', '', '', 'product/acces_c71.jpg', 'product/acces_c72.jpg', 'product/acces_c73.jpg', 'product/acces_c74.jpg', 'product/acces_c75.jpg'),
(32, 2, 'H&M', 'accesories_category', 'Women Black Embroidered Canvas Cap', 'Cap in cotton canvas with embroidered details, an adjustable tab, and a metal fastener.', 'onesize<br>\r\nRegular-fit<br>', '100% Cotton<br>\r\nMachine-wash<br>', '699', '', '', '', 'product/acces_c81.jpg', 'product/acces_c82.jpg', 'product/acces_c83.jpg', 'product/acces_c84.jpg', 'product/acces_c85.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `Order_id` int(100) NOT NULL,
  `product_name` text NOT NULL,
  `product_price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_categories`
--
ALTER TABLE `admin_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `billing_address`
--
ALTER TABLE `billing_address`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`Order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_categories`
--
ALTER TABLE `admin_categories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `s_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `billing_address`
--
ALTER TABLE `billing_address`
  MODIFY `Order_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `Order_id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
