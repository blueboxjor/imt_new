-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2025 at 11:13 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imt`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` int(11) NOT NULL,
  `titleEn` varchar(55) NOT NULL,
  `locationEn` varchar(55) NOT NULL,
  `website` varchar(100) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `logo` varchar(75) NOT NULL,
  `type` int(11) NOT NULL,
  `data-id` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `titleEn`, `locationEn`, `website`, `phone`, `logo`, `type`, `data-id`) VALUES
(1, 'Biosensors Europe SA', 'Switzerland - Morges', 'https://www.biosensors.com/intl/', '+41 21 804 80 00', 'biosensors-international-group-.jpg', 1, 'CH'),
(2, 'Erbozeta Group', 'Italy - San marino', 'https://www.erbozeta.com/', '+39 0549 907000', 'Gruppo-Erbozeta.png', 1, 'IT'),
(3, 'pharmidea', 'Latvia, Olaine district', 'http://www.pharmidea.lv/', '+371 67069889', 'pharmidea.png', 1, 'LV'),
(4, 'Vita Range', 'USA  Miami FL', 'https://vitarangellc.com/', '+305 433 7038', 'vita.png', 1, 'US'),
(5, 'AL-Ehtimam For Pharmaceuticals And Medical Equipments', 'Libya, Misurata', 'https://www.ehtimam.com/', '+218 911374851', 'e.jpg', 2, 'LY'),
(6, 'Private Pharma ', 'Iraq, Erbil', 'https://privatepharma.net/', '+964 750 330 31 87', 'private-pharma-logo-1.png', 2, 'IQ'),
(7, 'Triangle Medical Trading', 'UAE, Abu Dhabi ', 'http://www.trianglem.com/', '+971 2673 0376', 'triangle-390x119-1.png', 2, 'AE'),
(8, 'IMT-RAK', 'Jordan-Amman', 'https://www.imt-rak.com/', '+96265513435ssss', 'logo.png', 1, 'JO');

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

CREATE TABLE `attachments` (
  `id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `showImage` varchar(100) NOT NULL,
  `relatedId` int(11) NOT NULL,
  `typeId` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `extensionId` int(11) NOT NULL DEFAULT 1,
  `created` varchar(20) NOT NULL,
  `brandId` int(11) NOT NULL,
  `subBrand` varchar(50) NOT NULL,
  `colorId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `attachment_type`
--

CREATE TABLE `attachment_type` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `attachment_type`
--

INSERT INTO `attachment_type` (`id`, `name`) VALUES
(1, 'News Station '),
(2, 'Client Section');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `titleEn` text NOT NULL,
  `titleAr` varchar(55) NOT NULL,
  `descriptionEn` text NOT NULL,
  `descriptionAr` text NOT NULL,
  `createdDate` date NOT NULL,
  `createdBy` int(11) NOT NULL,
  `udatedDate` date NOT NULL,
  `updatedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `image`, `titleEn`, `titleAr`, `descriptionEn`, `descriptionAr`, `createdDate`, `createdBy`, `udatedDate`, `updatedBy`) VALUES
(1, 'IMT62a892edc5eec6.72795507.jpg', 'Regional Regulatory and Logistics Experience', '', 'More than 25 years of experience in regional and local regulatory and logistics requirements  for different Middle East and North Africa (MENA) Countries.', '', '2021-10-18', 0, '2022-06-14', 0),
(2, 'IMT62a892f6affd92.17473110.jpg', 'Strong Network of Business Partners and Local Distributors', '', 'Well established network with distributors in many countries in the Middle East and North Africa (MENA), assuring efficient regional business coverage.', '', '2021-10-18', 0, '2022-06-14', 0),
(3, 'IMT62a89307af7579.95875284.jpg', 'Successful Products Launches', '', 'In depth knowledge of the market place supported by innovative marketing approaches to secure efficient market penetration.', '', '2021-10-18', 0, '2022-06-14', 0),
(4, 'IMT62a8931575df36.85644814.jpg', 'State of Art Business Model', '', 'Unique business model, based \non establishing “one point of contact” \nto provide medical, product and \ncompetitors handling training \nsupported by marketing tools, \nmarket analysis and in-market\nfield coaching.', '', '2022-06-14', 0, '2022-06-14', 0);

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `titleEn` varchar(55) NOT NULL,
  `titleAr` varchar(55) NOT NULL,
  `descriptionEn` text NOT NULL,
  `descriptionAr` text NOT NULL,
  `createdDate` date NOT NULL,
  `createdBy` int(11) NOT NULL,
  `udatedDate` date NOT NULL,
  `updatedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`id`, `image`, `titleEn`, `titleAr`, `descriptionEn`, `descriptionAr`, `createdDate`, `createdBy`, `udatedDate`, `updatedBy`) VALUES
(1, 'IMT63281f3e37a682.76095275.png', 'Cardiology', '', 'Coronary portfolio to manage acute coronary syndrome (ACS).', '', '2021-10-20', 0, '2022-09-19', 0),
(2, 'IMT6328210ca77659.04671735.png', 'Obstetrics & Gynecology  ', '', 'Full portfolio to secure a healthy lifestyle for women throughout their life journey.', '', '2021-10-20', 0, '2022-09-19', 0),
(3, 'IMT632823caefb477.33139163.png', 'Gastroenterology', '', 'Market leader in irritable bowel syndrome and dyspepsia management.', '', '2021-10-20', 0, '2022-09-19', 0),
(4, 'IMT632823e91812a7.75662695.png', 'Pediatric', '', 'Full range of products for infantile colic, gastroenteritis, and immunity boosting.', '', '2021-10-31', 0, '2022-09-19', 0),
(5, 'IMT6328266c6b3058.51697422.png', 'Orthopedic', '', 'First of it’s kind innovative products for the management of Osteoarthritis and Osteoporosis.', '', '2022-09-19', 0, '0000-00-00', 0),
(6, 'IMT63282694ed4cb8.05312574.png', 'Dermatology', '', 'Unique range of products for the management of androgenic alopecia, cellulite and scars in oral and topical forms.', '', '2022-09-19', 0, '0000-00-00', 0),
(7, 'IMT63282694ed4cb8.05312574.png', 'Urology', '', 'Unique remedies for men infertility and hypogonadism.', '', '2022-09-19', 0, '0000-00-00', 0),
(8, 'IMT6939f6389983e3.42963690.png', 'Respiratory', '', '', '', '2025-12-11', 0, '2025-12-11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `nameEn` varchar(55) NOT NULL,
  `nameAr` varchar(55) NOT NULL,
  `parentId` int(11) NOT NULL,
  `virtualSerial` varchar(55) NOT NULL,
  `serial` int(11) NOT NULL,
  `isDeleted` int(11) NOT NULL DEFAULT 0,
  `createdDate` date NOT NULL,
  `createdBy` int(11) NOT NULL,
  `udatedDate` date NOT NULL,
  `updatedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `nameEn`, `nameAr`, `parentId`, `virtualSerial`, `serial`, `isDeleted`, `createdDate`, `createdBy`, `udatedDate`, `updatedBy`) VALUES
(1, 'Cardiology', '', 0, '1', 1, 0, '2021-10-20', 0, '0000-00-00', 0),
(2, 'Obstetric & Gynecology ', '', 0, '2', 2, 0, '2021-10-20', 0, '0000-00-00', 0),
(3, 'Gastroenterology ', '', 0, '3', 3, 0, '2021-10-20', 0, '0000-00-00', 0),
(4, 'Pediatric', '', 0, '4', 4, 0, '2021-10-20', 0, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `company_information`
--

CREATE TABLE `company_information` (
  `id` int(11) NOT NULL,
  `nameEn` varchar(55) NOT NULL,
  `nameAr` varchar(55) NOT NULL,
  `locationEn` text NOT NULL,
  `locationAr` varchar(55) NOT NULL,
  `aboutUsEn` text NOT NULL,
  `aboutUsAr` text NOT NULL,
  `visionEn` text NOT NULL,
  `visionAr` text NOT NULL,
  `missionEn` text NOT NULL,
  `missionAr` text NOT NULL,
  `welcomeEn` text NOT NULL,
  `welcomeAr` text NOT NULL,
  `logo` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `facebook` text NOT NULL,
  `instagram` text NOT NULL,
  `snapchat` text NOT NULL,
  `tiktok` text NOT NULL,
  `youtube` text NOT NULL,
  `fax` varchar(25) NOT NULL,
  `createdDate` date NOT NULL,
  `createdBy` int(11) NOT NULL,
  `udatedDate` date NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `facebook2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `company_information`
--

INSERT INTO `company_information` (`id`, `nameEn`, `nameAr`, `locationEn`, `locationAr`, `aboutUsEn`, `aboutUsAr`, `visionEn`, `visionAr`, `missionEn`, `missionAr`, `welcomeEn`, `welcomeAr`, `logo`, `email`, `phone`, `facebook`, `instagram`, `snapchat`, `tiktok`, `youtube`, `fax`, `createdDate`, `createdBy`, `udatedDate`, `updatedBy`, `facebook2`) VALUES
(1, 'IMT-RAK', '', 'Sharjah Media City, Sharjah, UAE', '', 'Registered in United Arab Emirates (UAE) , IMT RAK\n( Innovative Medical Technologies Trading FZ-LLC) a regional distributor of Pharmaceutical Products, Food Supplements\nand Medical Devices, operating in the Middle East and North Africa (MENA) Region for the past 15 years. Our executive team at the regional\noffice our executive team at the regional office, has more than 25 years of experience in the Pharmaceutical and medical business, in different\nfields, including but not limited to business management, regulatory, logistics, sales and marketing assuring efficient\nmarket penetration based on implementing reliable code of conduct.', '', 'Our Vision is to provide (MENA) patients with innovative remedies to boost their health status and reflect positively on their quality of life.', '', 'Offering patients, health care providers and stakeholders the state of Art quality products that support their health and well-being.', '', 'Biocare Pharma LLC is a UAE based company for distributing therapeutic drug, supplements and medical devices to many countries in the Middle East and North Africa (MENA), having more than 15 years of experience in this domain.', '', 'IMT617516fe111863.96178604.jpeg', 'customerservice@bioc', '+9627 9552 6998', 'https://www.facebook.com/alrayahdrugstorejo/', 'https://www.instagram.com/alrayahdrugstorejo/', '', '', '', '+962 65514353', '2021-10-07', 0, '2022-09-19', 0, 'https://www.facebook.com/imt.rak');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `nameEn` varchar(55) NOT NULL,
  `nameAr` varchar(55) NOT NULL,
  `descriptionEn` text NOT NULL,
  `descriptionAr` text NOT NULL,
  `bestBeforeEn` text NOT NULL,
  `packageEn` text NOT NULL,
  `posolgyEn` text NOT NULL,
  `usageEn` text NOT NULL,
  `productionPlaceEn` text NOT NULL,
  `storageConditionEn` text NOT NULL,
  `categoryId` int(11) NOT NULL,
  `createdDate` date NOT NULL,
  `createdBy` int(11) NOT NULL,
  `udatedDate` date NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `image`, `nameEn`, `nameAr`, `descriptionEn`, `descriptionAr`, `bestBeforeEn`, `packageEn`, `posolgyEn`, `usageEn`, `productionPlaceEn`, `storageConditionEn`, `categoryId`, `createdDate`, `createdBy`, `udatedDate`, `updatedBy`, `count`) VALUES
(28, 'k1.jpg', 'ArgiFast', '', 'ARGIFAST FORTE SACHETS is a nutritional supplement containing arginine, coenzyme Q10, vitamins, inositol, and plant extracts (tribulus and ginseng) designed to support male reproductive function. Its components help protect cells from oxidative stress, improve sperm quality and motility, and support hormonal balance.', '', '', '', '', '', '', '', 7, '2025-12-10', 0, '0000-00-00', 0, 1),
(29, 'IMT6939ed63d010e1.65189108.jpeg', 'GinFast Plus PRL', '', 'GinFast Plus PRL helps in managing hyperprolactinemia in both men and women and for conditions linked to elevated prolactin or hormonal imbalance, including gynecomastia, amenorrhea, breast pain, oligomenorrhea, polymenorrhea, PMS, galactorrhea, mood disturbances, irritability associated with premenstrual dysphoric disorder, and migraine.', '', '', '', '', '', '', '', 2, '2025-12-11', 0, '0000-00-00', 0, 1),
(30, 'IMT6939ed93a30181.94945869.jpeg', 'GinFast Women Plus', '', 'GinFast Women Plus is a comprehensive dietary supplement designed to support women’s hormonal balance, reproductive health, and overall well-being. It combines ingredients such as myo-inositol, melatonin, and active folate to promote healthy ovarian function, regulate energy and antioxidant activity, and support normal cell development.', '', '', '', '', '', '', '', 2, '2025-12-11', 0, '0000-00-00', 0, 2),
(31, 'IMT6939edc89e5448.28807472.jpeg', 'Logus Mag', '', 'Logus Mag is a magnesium-based food supplement designed to support energy metabolism, muscle and nerve function, bone health, and overall balance in the body.', '', '', '', '', '', '', '', 5, '2025-12-11', 0, '0000-00-00', 0, 1),
(32, 'IMT6939f24b44bdf5.50434772.jpeg', 'Munatoril Solution', '', 'Munatoril Solution is a natural-based food supplement formulated to support respiratory well-being. Its blend of Iceland moss, thyme, ivy, propolis, plantain, and resveratrol helps soothe cough, protect irritated tissues, promote mucus clearance, and support the body’s natural defenses thanks to their soothing, antimicrobial, and antioxidant properties.', '', '', '', '', '', '', '', 8, '2025-12-11', 0, '0000-00-00', 0, 1),
(33, 'IMT6939f269a225a2.28505858.jpeg', 'Munatoril Spray', '', 'Munatoril Spray is a natural respiratory care supplement designed to soothe and protect the upper respiratory tract. Its blend of Iceland moss, plantain, aloe vera, propolis, resveratrol, vitamin C, and sodium hyaluronate helps reduce inflammation, hydrate and protect mucosal tissues, support immune function, and alleviate cough and irritation, promoting overall respiratory comfort.', '', '', '', '', '', '', '', 8, '2025-12-11', 0, '0000-00-00', 0, 2),
(34, 'IMT6939f2ea3f5562.71114003.jpeg', 'Persitil', '', 'Persitil is a gentle digestive supplement that supports regular bowel function and intestinal health. Its combination of lactulose and inulin softens stools, promotes healthy intestinal motility, and encourages the growth of beneficial gut bacteria, while also providing antioxidant support for the digestive system.', '', '', '', '', '', '', '', 3, '2025-12-11', 0, '0000-00-00', 0, 1),
(35, 'IMT6939f31cbe0423.45760970.jpeg', 'FertiBoost Sachet', '', 'FertiBoost Sachet is a fertility support supplement designed to promote reproductive health in women. Its blend of inositol, Co-enzyme Q10, melatonin, and vitamin E helps support regular ovulation, improve egg quality, protect against oxidative stress, and support hormonal balance, enhancing overall chances of conception.', '', '', '', '', '', '', '', 2, '2025-12-11', 0, '0000-00-00', 0, 3),
(36, 'IMT6939f349b0c462.95942990.jpeg', 'Lindoflor', '', 'Lindoflor Vaginal Suppositories Soothe and protect the vaginal mucosa while supporting the prevention and treatment of fungal and bacterial infections, mucosal disorders, and recurrent urinary infections.', '', '', '', '', '', '', '', 2, '2025-12-11', 0, '0000-00-00', 0, 4),
(37, 'IMT6939f37d7ae408.62963438.jpeg', 'Cardioril', '', 'Cardioril is a dietary supplement formulated to help relieve muscle pain and weakness associated with statin use, featuring natural ingredients that protect muscles and support their health.', '', '', '', '', '', '', '', 1, '2025-12-11', 0, '0000-00-00', 0, 1),
(38, 'IMT6939f40dd0a5a5.62704842.jpeg', 'Revaginal Foam', '', 'Revaginal Foam is a ready-to-use intimate cleansing solution that helps restore the natural pH and protect the vulvo-perineal area. Formulated with lactic acid and boric acid, it supports a healthy balance and helps reduce itching, redness, light burning, and discomfort, even in cases of fungal-related irritation. Ideal when regular hygiene practices aren’t possible.', '', '', '', '', '', '', '', 2, '2025-12-11', 0, '0000-00-00', 0, 5),
(39, 'IMT6939f453122864.07892302.jpeg', 'Caregyn', '', 'Caregyn Ovules help restore the vagina’s natural balance by hydrating, soothing, and supporting healthy pH levels. Formulated with hyaluronic acid, lactic acid, and boric acid, they relieve dryness, irritation, burning, and itching.', '', '', '', '', '', '', '', 2, '2025-12-11', 0, '0000-00-00', 0, 6),
(40, 'IMT6939f4a9e1d3a1.16427472.jpeg', 'Revaginal Wash', '', 'Revaginal Wash is a delicate daily intimate cleanser that helps maintain and restore the natural pH of the vulvo-perineal area. Its gentle formula supports comfort and protection, helping reduce minor irritation such as itching, redness, and light burning. Ideal for everyday hygiene and as an adjunct in preventing small intimate discomforts.', '', '', '', '', '', '', '', 2, '2025-12-11', 0, '0000-00-00', 0, 7),
(41, 'IMT6939f51215f9a0.47710753.jpeg', 'Lactocyst', '', 'Lactocyst is a food supplement that combines cranberry, D-mannose, Vitamin C, and beneficial Lactobacillus strains to help reduce the risk of urinary tract infections. Its ingredients support the body’s natural defenses by preventing harmful bacteria—especially E. coli—from adhering to the urinary tract and by promoting a balanced urinary and vaginal flora. Ideal for individuals prone to recurrent UTIs.', '', '', '', '', '', '', '', 7, '2025-12-11', 0, '0000-00-00', 0, 2),
(42, 'IMT6939f5443bb595.77085907.jpeg', 'Spermact', '', 'Spermact provides antioxidant protection against free radicals and helps stimulate sperm production, supporting both sperm count and quality. Ideal for promoting male reproductive health.', '', '', '', '', '', '', '', 7, '2025-12-11', 0, '0000-00-00', 0, 3),
(43, 'IMT6939f576ab7446.57750726.jpeg', 'MenoStop', '', 'Meno Stop is a menopause support supplement made with soy isoflavones, calcium, and Vitamin D3 to help maintain bone health and support overall well-being.', '', '', '', '', '', '', '', 2, '2025-12-11', 0, '0000-00-00', 0, 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `ProfilePic` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `RoleId` int(11) NOT NULL,
  `IsDeleted` int(11) NOT NULL,
  `IsOnline` int(11) NOT NULL DEFAULT 0,
  `Created` date NOT NULL,
  `LastSeen` varchar(30) NOT NULL,
  `IsOwner` int(11) NOT NULL DEFAULT 0,
  `UpdatedDate` varchar(20) NOT NULL,
  `UpdatedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `Phone`, `ProfilePic`, `Password`, `RoleId`, `IsDeleted`, `IsOnline`, `Created`, `LastSeen`, `IsOwner`, `UpdatedDate`, `UpdatedBy`) VALUES
(1, 'IMT', '00000', 'IMT616c0f57e0cc72.45748195.jpeg', 'IMFs9/uIjljSA', 0, 0, 1, '2021-08-19', '2025-12-10 06:30', 1, '2021-10-26', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attachments`
--
ALTER TABLE `attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attachment_type`
--
ALTER TABLE `attachment_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_information`
--
ALTER TABLE `company_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `attachments`
--
ALTER TABLE `attachments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attachment_type`
--
ALTER TABLE `attachment_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company_information`
--
ALTER TABLE `company_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
