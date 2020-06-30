-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2020 at 07:27 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_Id` int(11) NOT NULL,
  `A_Username` varchar(50) NOT NULL,
  `A_password` varchar(50) NOT NULL,
  `A_Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_Id`, `A_Username`, `A_password`, `A_Email`) VALUES
(1, 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `Id` int(11) NOT NULL,
  `D_id` int(11) NOT NULL,
  `P_id` int(11) NOT NULL,
  `Avail_id` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `availabe`
--

CREATE TABLE `availabe` (
  `id` int(11) NOT NULL,
  `D_id` int(50) NOT NULL,
  `days` varchar(100) NOT NULL,
  `stime` time NOT NULL,
  `etime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `availabe`
--

INSERT INTO `availabe` (`id`, `D_id`, `days`, `stime`, `etime`) VALUES
(2, 12, 'monday', '20:00:00', '23:00:00'),
(3, 12, 'Tuesday', '20:00:00', '23:00:00'),
(4, 12, 'Wednesday', '20:00:00', '23:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `C_id` int(50) NOT NULL,
  `C_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`C_id`, `C_name`) VALUES
(1, 'Karachi'),
(2, 'Lahore');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `d_email` varchar(50) NOT NULL,
  `d_password` varchar(50) NOT NULL,
  `image` blob,
  `city` int(11) NOT NULL,
  `education` varchar(50) NOT NULL,
  `specialization` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`d_id`, `d_name`, `d_email`, `d_password`, `image`, `city`, `education`, `specialization`) VALUES
(12, 'ZAfar Mirza', 'test@gmail.com', 'test', 0x4749463839613e002f00f7ff002ba3dc28abe23fa3d7d1c84100a1e42e94cd269cd300629db0c6d57fb5d5fecc073f97ca8fc6e574714a91c2d93d2f1d0080c6cfc95fe9d02ea4bc521c9bd8f3751af1691f0078bc0068a5b0ae2800568bcdcaa19fcce6eff7fbbfe3f40094d93f8cbaf9a819cbb74b34b7e9d1f1fc4093c4003a66d39a10afad64ae78250065a1004a7ccfe8f59ead860099ddcab29e5fc0eadfecf43f87b40088ce007ec5afb28a7fa8c1f7951640b2e50082c8006dadb19b2d1f66946fa9cb00447249aab700aaeb96c18991ac790075b97fb9da0084cae6773b7baf6d4083ad0091d6bfdaeb0070ab009ee12d7caa062f505fb7e37fc2e5998f530071b2416682c4731995cf71b5c5832f6c94f5821c6fbbe21f73a6008cd2005d95fdd8070086cc5fadd91f7db378a6833e76976f4f1b006aa8d3b70999bfa1bb8c436f9fbd005991cfdc259fd3eec5aa39bfd6e4cc8d6d5fa2b5d5a50ab79f8d8cb4c940ade13f80a92f84b60074b780caec1f8ac73fade17fadc8005286dfeaf1006caa008ad0fbb30cafd5eb004e81f9a310d9aa2a407ba24f87ac005f9940a7dcfbf003eac3433f391be0d26fd0e63e007cc10072b3779976dee419dbbe25d176176fc1e8008fd45298754d91955f94b5d09f4b00a5e7bca3212f8bc13faaded0e1eb22b0e9007abe00406d41b6e87fbee100588e006a9eeff5f8cfdee82093cdbfdff04fa5d5afdaf039402a107bb96fb1d82d3842abb6bc0f7fc05fb3de0075b27fc5e8409ed3409bcf005b940f76b20f91d39fd8f2006fb00f5a8a006097005c920f85c87fb1d00f8bcd4faddd0077b69fc1d64fb1e0004676c2cdd0fbb9133fbdecbfd7e6cdca2acfae03808799afcfe23e90a10f8ed00048786fc089cfe4f0dfeff8d3a81b9ed978ebb54590cfec8a40123f90bf9aa1a610699e2f4d45d0d6400fa3e35fa7d05db48ae78637f0e4371d87b9c64f16187c8f69c6f04f98c3e1bc0891c0b5fcc30e00568ea8d4bca2e3fadabf6f0f669b7faac59fbdd022a5dfdec225baa54ac2a65b40a8d7106193c7ab1f106fa7e49745406e8f3fa39be0e066ffffffffffff21f904010000ff002c000000003e002f000008ff00fffdeb20ca1e8e500813263c88a3a14387731a469c43b122454e733869dcc8e990c78f1e05d012d541e0bf4ef9847d82c09265a3979f620a9b294c964d595296e85cd2a727190ca480aa187aa028afa3bcb870e9d52b4d9a51a33468e0628795b47f7cee91d160a2abd7af60bd8202e5a318b4158102edd9a3218d2d2e860ea8c040970c993e3af2ead0b544975f29521c61d080e1568c4bb6f67c1deba331b4b369d5b25d37ca2ddcb872e7dedd0bd88e9d21173ebda441a3658e1c45527b99d1884b9f6f844d8092cdb8ec59b469d7de2b04af4d1b7fc081276bd6030c5ece9e418b6e44da346ad533a20b3ba04383a1ae63c9dabe9d76171a53c0db0cffd3a347868c1ebf86c500aea484aec09f438b6ecef274ea22aba3cf80405d032fdada1563d60a68f1108f3fa6c04387534a613614066480e100700e38125f68ccd177da73f945e7077fd55d979d63b7ed120f1f36f0a04165961912d78310e2b58934fe38001a86a49506c186aa75e8c71639f427628090adc0c3256bad58d95b2e16f5e066efb1d2813f0b6098617df6e1e7e38f4186684263b61168833f362449995b4dc8e0a0667d00b7893f1c7c03e772f4edc8e1965b0029e497615e81c098654ab52417bf39c9a60e6ec2098b3fa88ca6a39df7e1996797d69135e015a51442880d74f0000f3ce469c14532fefca2453e3d24d0c32d88fa6321688c5eff8965a4facdf0639e941441dd3a5c8022e059a6c413c8980a06e74f298690eacf399d04a7842ec07d3644018ce6382b74faddba0525b90ae9eb5997f8c3c3b0fe14abc73bcdca40aa0a3dc0798b12febce9cf8d0cf8c3000d05ac6127870c0433032e1edcfac41a6b78e1ed6d0820b016b148f8a307a1fea8eb0f06bff8d38912ebb5021c68d4fa83070da988128b28590093051487a87248166b4c03c02c9300708d2a0687080a818190b9163ce536ac47b2fe80402a0609c0990011442c00dc050594622f4b1c40d10114fe509d4530fe64c1c21a1e4cd33227492451f3543ee0a6b3063cebe133d042fb9340d1d29c430407764cd931073aa292853f45f8ff738a2a1d04338d072ccfe28f071e0010f60cfd7151765afec821151d0efb7c00a92054ec4f36f002270d1e13d6e28f288f66cd82001d30e041076ba8a2ca341d10d3010b2c849d04e33af0ea436ea5f0a1a4165a6c23831607d401423e64d491cd2dba6cb2c002cae1e18b2f8f422000300660ffcc21a75040012e1a5142c11c1484fd811f8defbe1602fea0e114932fce152367af5e10da175f6898e596b7724b89ed1f389f0a72e7b82451ce1f88b98c93ea8297f7d40f16ad98c6e874c4232d652b4fb8fa9ff902b885014ea51866928370d464a8f9bd470a76d8442b00612c5160e94ed9d216b70018c00f50c2835c80065bda92063d042706c3f8c539ff40908d2296e0684a9892b1a6f105e7d0ca431fd2406422b3962a06c20926980a340465992628cb586004e33418508096400a5bd129c2289cf000453cc015ab50c42adae84627948307ccd0e28a2c03970368a107cd584f1863a004067c010fb23a237e6a250b1370031b6540c7095e108113644013e880c309c4000e24fc632a2b6011934a08211d94a0049ba81f8ef4c721fde4608d53d88105d4710c416cc01dc7504624d4f1871b38231a9ef48a8008849bdc98691def835f510c351418d5651d4e5805365e21010b28401d21d8c02272190905f4f2979e6486015ca18872d2f101ab70051c9dc0ce07b8d38d6d3c671ccb494f39c2f30163a082058c21ff0e0b744101d9ec0737bbf0871058220c9efcc7081a1085329ca01e42a8c40e4450037a50630795d0c40934b90c8ec2611965c0070ae8410f36b001052845c119c891821448020bfb4c84058e31801a38201d41c869105ad08237fca009edf807321a100605dce005dab0041bdc610c6b842004fc508354a70a89aa42021112708310228089adc6c10a11d0c70d22310841dc000bfc34023bcc11004fb8f5ad700dc029fe118a060cc2a82f70c335dd818044a8431d6a4006324610007914220a6c788431dca1800a1ca1b18f3d83081480057a1ce11183b841058cb1816b84a2861f70816899405a02b800038e102a518d1a870d20a20b11a06617ba108d6aff54a30ab89d001b2231817e24a20216a80070851bdc0a60c1ac4fbd4138d6600e6f242180a21d6d694d4b06479060a142180026b461064630c20a728880777f2082f29ab71be635ef00d6ebdd6eac37bd14bd030e3ef05ce84a970904c8af0baa6b80008ce3140006b001bae73d0a18c0c014908701e4c1e0063bf8c10d6eab3c3c1180f28136ba2e202d7e099089fd3a42037d18855c207417bc2cc111b218824ae623ab2c2d128a18dc9606eb1bdae86a38bf1c664275419c86271d4717df9852075a510054000715bee8983fa656845828d1031468d92c28c1097fe4010088435c006c3c5d0e6742c71fee832d344386bc346fc94460802824c8000e304aff008c82020bfc01e70ecc62164fd802279e00360adc617cfec8c51dee208ffbe238138806b30696c0051237500a1afb86fdf0e00f409066ce70864211327d385b61d07f79f0c71c26e10f79d438c35d46742680c0843e7c78098630616088e08f5a844674a4838091e18c0a39fb03004b468507ae21e3ff853a0f77004e07ae81ea0d7b19d1402080ab176d0828c187d6b5100d2d46c7925d1b8b01335832e26621e3b01d1bd977f0803f6070e367af3adaae5ec7120ef068140e81d6a9600ea539c0124c578d6ab308b7073e3de363d71807feb8c37455fd6e78bf7a80c8f90cb5a4f10551acd95ef54245a69f013b5cf8631ac4e00400669c845037040638edc8c5ba71fc6c20b81c089988b72c0c41bf0b7d2138502880043f6e804ccf2016fe5883e180e301db3dd7e430088e079cadea97bbfcb48eb844a331001fe5cca78c7602301a3d9d274e948f86a7764100bcc174683b3d13c2d0c137b2a2022e1c80c425d6cb5efe021847a058167698c9058461bf982ca711905a4dff36187617344205b798c649b681012e50062a4e710a5326af14a520e5f24739002f965914521c80142a2085e8474f7ad22f8114a3c8c75504528a0494a016b4a885ec9fb780539eb288d90081ee41601e1920e1f748a083f009417ce28be1f8c8df87f297bf8f2934dff962b04129041210003b, 1, 'MBBS', 1),
(13, 'Doctor Syed A Dewan', 'test', 'test', '', 2, 'MBBS', 1),
(14, 'Doctor Syed A Dewan', 'test', 'test', '', 2, 'MBBS', 1);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pid` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `city` int(50) NOT NULL,
  `contact` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Gender` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `name`, `city`, `contact`, `username`, `password`, `Gender`) VALUES
(1, 'hassan', 1, 131, 'hassan', 'hassan', 'male'),
(2, 'hassan', 1, 2147483647, 'hassanasif302672@gmail.com', 'hassan', 'Male'),
(3, 'hassan', 1, 2147483647, 'hassan', 'hassan', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `specialist`
--

CREATE TABLE `specialist` (
  `id` int(50) NOT NULL,
  `specialist` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specialist`
--

INSERT INTO `specialist` (`id`, `specialist`) VALUES
(1, 'General');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_Id`);

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `doct_fk` (`D_id`),
  ADD KEY `patient_name_fk` (`P_id`),
  ADD KEY `available_Fk` (`Avail_id`);

--
-- Indexes for table `availabe`
--
ALTER TABLE `availabe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_doc` (`D_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`C_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`d_id`),
  ADD KEY `city` (`city`),
  ADD KEY `specialization` (`specialization`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `fk_city` (`city`);

--
-- Indexes for table `specialist`
--
ALTER TABLE `specialist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `A_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `availabe`
--
ALTER TABLE `availabe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `C_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `specialist`
--
ALTER TABLE `specialist`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD CONSTRAINT `available_Fk` FOREIGN KEY (`Avail_id`) REFERENCES `availabe` (`id`),
  ADD CONSTRAINT `doct_fk` FOREIGN KEY (`D_id`) REFERENCES `doctor` (`d_id`),
  ADD CONSTRAINT `patient_name_fk` FOREIGN KEY (`P_id`) REFERENCES `patient` (`pid`);

--
-- Constraints for table `availabe`
--
ALTER TABLE `availabe`
  ADD CONSTRAINT `fk_doc` FOREIGN KEY (`D_id`) REFERENCES `doctor` (`d_id`);

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `FK_GAMENUMBER` FOREIGN KEY (`specialization`) REFERENCES `specialist` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`city`) REFERENCES `city` (`C_id`);

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `fk_city` FOREIGN KEY (`city`) REFERENCES `city` (`C_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
