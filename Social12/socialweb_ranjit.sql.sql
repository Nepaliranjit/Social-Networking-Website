-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 28, 2014 at 05:26 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `socialweb_ranjit.sql`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(126) NOT NULL,
  `name` varchar(66) NOT NULL,
  `created` varchar(66) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=280 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `content`, `name`, `created`) VALUES
(189, 'KERA', '6', ''),
(191, 'puti thero', '6', ''),
(193, 'fuck you ', '6', ''),
(195, ':k', '6', ''),
(196, ':k', '6', ''),
(204, 'hi', '6', ''),
(206, ':b:', '6', ''),
(209, 'mm', '6', ''),
(210, 'i love you sital............', '13', ''),
(217, 'll', '6', ''),
(219, 'm', '6', ''),
(220, 'Enjoy chat :b', '3', ''),
(222, 'felling good:l', '4', ''),
(225, 'hello', '3', '1392455646'),
(236, 'What a cool wheather in dhapakhel today', '11', '1392456492'),
(246, ':f hehe..', '16', '1392596579'),
(249, 'fuck', '6', '1392596718'),
(250, 'fuck', '1', '1392596760'),
(253, 'fuck you....', '3', '1392609272'),
(254, 'this is the chat i just sent...', '2', '1392616702'),
(255, 'bad fghgfhf', '6', '1392617210'),
(256, 'bad boy:b', '6', '1392618109'),
(257, 'bad man:b:', '6', '1392618122'),
(258, ':l', '6', '1392618131'),
(259, ':a', '6', '1392618150'),
(260, ':l', '6', '1392618185'),
(261, 'bad man:b:', '6', '1392618188'),
(262, 'bad boy:b', '6', '1392618190'),
(263, 'bad boy :l', '6', '1392618808'),
(264, 'bad boy3 :l', '6', '1392623573'),
(265, 'bad aman', '6', '1392625375'),
(266, 'bad aman', '6', '1392625681'),
(267, 'bad aman', '6', '1392625686'),
(268, 'dick shit', '6', '1392626463'),
(269, 'dick shit', '6', '1392626472'),
(270, 'yo man....:l', '6', '1392626570'),
(271, 'this is cool...)', '6', '1392626582'),
(272, 'im a good boy..:b:b', '6', '1392626596'),
(273, 'what a cool weather today at pespicola', '6', '1392626681'),
(274, 'go:l', '6', '1392626690'),
(275, 'love:a', '6', '1392626699'),
(276, 'cool web :b', '5', '1392626709'),
(277, 'What a cool wheather!:c', '4', '1392626718'),
(278, 'nice tweet :e', '3', '1392626733'),
(279, 'Ranjeet created this :f', '6', '1392626751');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commentid` varchar(10) NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(300) NOT NULL,
  `poster` varchar(30) NOT NULL,
  `created` varchar(30) NOT NULL,
  `url` varchar(122) NOT NULL,
  `postcat` varchar(30) NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `views` varchar(125) NOT NULL,
  `privacy` varchar(55) NOT NULL,
  `highlight` varchar(66) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=385 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `commentid`, `content`, `name`, `poster`, `created`, `url`, `postcat`, `comment`, `views`, `privacy`, `highlight`) VALUES
(269, '8', 'postphoto/1530315_744736352212385_402126229_n.jpg', '8', '6', '1390306731', '', 'photos', '&#2325;&#2360;&#2376;&#2354;&#2375; &#2349;&#2366;&#2327;&#2381;&#2351;&#2350;&#2366; &#2354;&#2375;&#2326;&#2375;&#2352;&#2376; &#2354;&#2381;&#2351;&#2366;&#2319;&#2325;&#2379; &#2361;&#2369;&#2344;&#2381;&#2331;, &#2325;&#2360;&#2376;&#2354;&#2375; &#2325;&#2352;&#2381;&#2350;&#2354;&#2375; &#2346;&#2381;&#2352;&#2366;&#2346;&#2381;&#2340; &#2327;&#2352;&#2381;&#2331;&#2404; &#2360;&#2370;&#2352;&#2381;&#2351;&#2348;&#2361;&#2366;&#2342;&#2369;&#2352; &#2341;&#2366;&#2346;&#2366; &#2344;&#2375;&#2346;&#2366;&#2354;&#2368; &#2352;&#2366;&#2332;&#2344;&#2368;&#2340;&#2367;&#2325;&#2366; &#2340;&#2381;&#2351;&#2360;&#2381;&#2340;&#2366; &#2357;&#2381;&#2351;&#2325;&#2381;&#2340;&#2367; &#2361;&#2369;&#2344;&#2381;, &#2332;&#2379; &#2325;&#2361;&#2367;&#2354;&#2375; &#2349;&#2366;&#2327;&#2381;&#2351;&#2325;&#2366; &#2349;&#2352;&#2350;&#2366; &#2309;&#2328;&#2367; &#2348;&#2338;&#2381;&#2331;&#2344;&#2381; &#2340; &#2325;&#2361;&#2367;&#2354;&#2375; &#2310;&#2347;&#2381;&#2344;&#2376; &#2325;&#2352;&#2381;&#2350;&#2354;&#2375; &#2349;&#2366;&#2327;&#2381;&#2351; &#2344;&#2367;&#2352;&#2381;&#2350;&#2366;&#2339; &#2327;&#2352;&#2381;&#2331;&#2344;&#2381;&#2404; See more at: http://nagariknews.com/feature-article/story/12458#sthash.j0dfcOGy.dpuf', '1', '', ''),
(270, '9', 'postphoto/1520663_10152165034286416_955997465_n.jpg', '9', '6', '1390307980', '', 'photos', ' Atlantic puffins spend most of their lives at sea, but return to land to form breeding colonies during spring and summer.', '', '', ''),
(271, '6', 'postphoto/1601539_10152173632170419_797130539_n.jpg', '6', '6', '1390308075', '', 'photos', ' &#2310;&#2340;&#2381;&#2350;&#2361;&#2340;&#2381;&#2351;&#2366;&#2325;&#2379; &#2342;&#2371;&#2358;&#2381;&#2351; &#2361;&#2375;&#2352;&#2381;&#2342;&#2366;&#2361;&#2375;&#2352;&#2381;&#2342;&#2376; &#2325;&#2376;&#2354;&#2366;&#2354;&#2368;&#2350;&#2366; &#2408;&#2412; &#2357;&#2352;&#2381;&#2359;&#2368;&#2351;&#2366; &#2350;&#2361;&#2367;&#2354;&#2366;&#2325;&#2379; &#2310;&#2347;&#2381;&#2344;&#2376; &#2332;&#2381;&#2351;&#2366;&#2344; &#2327;&#2351;&#2379; !! &#2349;&#2367;&#2337;&#2367;&#2351;&#2379; &#2361;&#2375;&#2352;&#2381;&#2344;&#2325;&#2379; &#2354;&#2366;&#2327;&#2367; &#2351;&#2379; &#2354;&#2367;&#2306;&#2325;&#2350;&#2366; &#2325;&#2381;&#2354;&#2367;&#2325; &#2327;&#2352;&#2381;&#2344;&#2369;&#2361;&#2379;&#2360;&#2381; !! http://www.canadanepalvids.info/2014/01/news-kailali-district-january-20th-2014.html', '', '', ''),
(272, '10', 'postphoto/safe_image (1).jpg', '10', '6', '1390308230', '', 'photos', ' eKantipur\r\n&#2360;&#2346;&#2341;&#2325;&#2366; &#2325;&#2375;&#2361;&#2368; &#2352;&#2379;&#2330;&#2325; &#2342;&#2371;&#2359;&#2381;&#2351; &#2341;&#2366;&#2361;&#2366; &#2346;&#2366;&#2313;&#2344; &#2350;&#2344; &#2331; ?', '', '', ''),
(273, '5', 'postphoto/1509729_10152272670881754_1566108960_n.jpg', '5', '5', '1390308371', '', 'photos', ' &#2412;&#2406; &#2325;&#2352;&#2379;&#2337;&#2325;&#2379; &#2330;&#2354;&#2326;&#2375;&#2354; &#2331;\r\n&#2337;&#2366;. &#2358;&#2358;&#2366;&#2306;&#2325; &#2325;&#2379;&#2311;&#2352;&#2366;&#2354;&#2366;\r\n&#2325;&#2366;&#2306;&#2327;&#2381;&#2352;&#2375;&#2360; &#2325;&#2375;&#2344;&#2381;&#2342;&#2381;&#2352;&#2368;&#2351; &#2360;&#2342;&#2360;&#2381;&#2351; &#2319;&#2357;&#2306; &#2360;&#2381;&#2357;&#2366;&#2360;&#2381;&#2341;&#2381;&#2351; &#2357;&#2367;&#2349;&#2366;&#2327; &#2346;&#2381;&#2352;&#2350;&#2369;&#2326;\r\n- See more at: http://www.ekantipur.com/np/2070/10/7/full-story/382862.html#sthash.YzB7i5iP.dpuf\r\nhttp://www.ekantipur.com/np/2070/10/7/full-story/382862.html\r\n', '', '', ''),
(274, '6', 'postphoto/safe_image (2).jpg', '6', '6', '1390308458', '', 'photos', ' &#2352;&#2375;&#2327;&#2381;&#2350;&#2368;&#2354;&#2366;&#2312; &#2352;&#2366;&#2359;&#2381;&#2335;&#2381;&#2352;&#2346;&#2340;&#2367; &#2348;&#2344;&#2366;&#2313;&#2344; &#2342;&#2370;&#2340;&#2325;&#2379; &#2342;&#2380;&#2337;&#2343;&#2370;&#2346; ? :: Nepal, Political News, Science, Social, Sport,...\r\nwww.onlinekhabar.com\r\nOnlinekhabar.com - No. 1 News Portal from Nepal, Business news, Bank Credit Profit, ', '', '', ''),
(275, '2', 'postphoto/1623762_688288417860298_1181358116_n.jpg', '2', '2', '1390561079', '', 'photos', ' \r\nStudent work from Miami Ad School featuring #Obama for #Volkswagen : http://adsoftheworld.com/media/print/volkswagen_original_parts_obama\r\n', '', '', ''),
(278, '6', 'Timi chhau ra ta [official video] by Aakanshya Bashyal featuring Kama ', '6', '6', '1390989510', 'http://www.youtube.com/watch?v=N3xnwWMmq4s', '', '', '', '', ''),
(285, '5', 'postphoto/safe_image (3).jpg', '6', '6', '1391322814', '', 'photos', ' &#2346;&#2366;&#2344;&#2368;&#2346;&#2369;&#2352;&#2368; &#2348;&#2375;&#2330;&#2381;&#2344;&#2375; ‘&#2330;&#2335;&#2346;&#2335;&#2375; &#2342;&#2366;&#2311;’ &#2349;&#2344;&#2381;&#2331;&#2344;&#2381;, ‘&#2346;&#2366;&#2344;&#2368; &#2346;&#2366;&#2319; &#2346;&#2379; &#2361;&#2366;&#2340; &#2343;&#2369;&#2344;&#2369;’', '', '', ''),
(286, '6', 'hello :spr::00', '6', '6', '1391742565', '', '', '', '', '', ''),
(287, '6', ' hi:)', '6', '6', '1391746088', '', '', '', '', '', ''),
(288, '6', 'postphoto/156332_10152259740316754_2084584233_n.jpg', '6', '6', '1391746691', '', 'photos', ' cricket', '', '', ''),
(289, '6', 'Kya Dami Bho-Shiva Pariyar ', '6', '6', '1391770810', 'http://www.youtube.com/watch?v=GnfGc2iyPBI', '', '', '', '', ''),
(290, '6', ' Samjhana Birsana Salalalala...A Cover by VJ/Priety:00', '6', '6', '1391843421', 'http://www.youtube.com/watch?feature=player_embedded&v=WtZMto-WHQ0', '', '', '', '', ''),
(292, '3', 'dadagiri:b:', '3', '3', '1392015077', '', '', '', '', '', ''),
(294, '3', 'postphoto/1452267_755320337820653_1140614710_n.jpg', '3', '3', '1392015345', '', 'photos', 'सादा जीवन उच्च विचारका धनी प्रजातान्त्रिक आन्दोलनका अथक योद्धा नेपाली काँग्रेसका सभापति सुशील कोइराला संघीय गणतान्त्रिक नेपालको छैटौँ प्रधानमन्त्रीमा चयन हुनुभएको छ । सन्त नेताको रुपमा परिचित ७४ वर्षीय कोइराला अविवाहित हुनुहुन्छ । See more at: http://nagariknews.com/friday/story/12687#sthash.qp6g0TWo.dpuf via Shukrabar, Nepal Republic Media', '', '', ''),
(295, '3', 'postphoto/1010970_755354437817243_705515872_n.jpg', '3', '3', '1392017460', '', 'photos', ' , &#2340;&#2375;&#2360;&#2381;&#2352;&#2379; &#2354;&#2367;&#2306;&#2327;&#2368;, &#2325;&#2379;&#2352;&#2367;&#2351;&#2344; &#2347;&#2352;&#2381;&#2360;&#2368;, &#2340;&#2325;&#2381;&#2350;&#2375; &#2348;&#2369;&#2338;&#2366; &#2361;&#2369;&#2305;&#2342;&#2376; &#2357;&#2367;&#2354;&#2381;&#2360;&#2344;&#2357;&#2367;&#2325;&#2381;&#2352;&#2350; &#2352;&#2366;&#2312; &#2347;&#2367;&#2354;&#2381;&#2350; &#2346;&#2381;&#2352;&#2379;&#2337;&#2381;&#2351;&#2369;&#2360;&#2352; &#2350;&#2366;&#2352;&#2381;&#2347;&#2340; &#2346;&#2346;&#2381;&#2346;&#2369; &#2346;&#2381;&#2352;&#2379;&#2337;&#2325;&#2381;&#2360;&#2344;&#2325;&#2366; &#2352;&#2370;&#2346;&#2350;&#2366; &#2342;&#2375;&#2326;&#2367;&#2305;&#2342;&#2376; &#2331;&#2344;&#2381;&#2404; &#2332;&#2369;&#2344;&#2360;&#2369;&#2325;&#2376; &#2346;&#2366;&#2340;&#2381;&#2352;&#2350;&#2366; &#2310;&#2347;&#2370;&#2354;&#2366;&#2312; &#2342;&#2369;&#2352;&#2369;&#2360;&#2381;&#2340; &#2313;&#2340;&#2366;&#2352;&#2381;&#2344;&#2375; &#2357;&#2367;&#2354;&#2381;&#2360;&#2344;&#2349;&#2344;&#2381;&#2342;&#2366; &#2313;&#2344;&#2325;&#2366; &#2346;&#2366;&#2340;&#2381;&#2352; &#2360;&#2375;&#2354;&#2367;&#2348;&#2381;&#2352;&#2367;&#2335;&#2368; &#2331;&#2344;&#2381;&#2404; &#2343;&#2344;&#2348;&#2361;&#2366;&#2342;&#2369;&#2352; &#2326;&#2337;&#2381;&#2325;&#2366;&#2360;&#2305;&#2327; &#2313;&#2344;&#2354;&#2375; &#2310;&#2347;&#2381;&#2344;&#2366; &#2309;&#2344;&#2369;&#2349;&#2357; &#2348;&#2366;&#2305;&#2337;&#2375;&#2325;&#2366; &#2331;&#2344;&#2381;&#2404; See more at: http://nagariknews.com/friday/story/12687#sthash.qp6g0TWo.dpuf via Shukrabar, Nepal Republic Media', '', '', ''),
(296, '6', 'postphoto/1782058_638677122865833_1780201743_n.jpg', '6', '6', '1392040537', '', 'photos', ' billgate daughter', '', '', ''),
(297, '6', 'hello:b: ', '6', '6', '1392118545', '', '', '', '', '', ''),
(298, '6', ':b: :spr:hi', '6', '6', '1392118582', '', '', '', '', 'nocomment', ''),
(299, '6', ' &#1575;&#1604;&#1604;&#1607; &#1571;&#1603;&#1576;&#1585;. &#1571;&#1606;&#1576;&#1575;&#1569; &#1593;&#1606; &#1587;&#1602;&#1608;&#1591; &#1591;&#1575;&#1574;&#1585;&#1607; &#1606;&#1602;&#1604; &#1593;&#1587;&#1603;&#1585;&#1610;&#1607; &#1578;&#1585;&#1576;&#1591; &#1602;&#1587;&#1606;&#1591;&#1610;&#1606;&#1607; &#1576;&#1608;&#1585;&#1602;&#1604;&#1607; &#1576;&#1571;&#1605; &#1571;&#1604;&#1576;&#1608;&#1575;&#1602;&#1610;.. 103 &#1602;&#1578;&#1610;&#1604; &#1605;&#1581;&#1578;&#1605;&#1604; &#1573;&#1606;&#1602;&#1591;&#1593; &#1575;&#1604;&#1573;&#1578;&#1589;&#1575;&#1604; &#1605;&#1593; &#1575;&#1604;&#1591;&#1575;&#1574;&#1585;&#1577; &#1605;&#1606; &#1602;&#1587;&#1606;&#1591;&#1610;&#1606;&#1577; &#1575;&#1604;&#1578;&#1610; &#1578;&#1588;&#1607;&#1583; &#1575;&#1604;&#1570;&#1606; &#1605;&#1587;&#1578;&#1588;&#1601;&#1610;&#1575;&#1578;&#1607;&#1575; &#1581;&#1575;&#1604;&#1577; &#1591;&#1608;&#1575;&#1585;&#1574; . &#1575;&#1604;&#1604;&#1607; &#1610;&#1585;&#1581;&#1605;&#1607;&#1605; &#1608; &#1610;&#1585;&#1586;&#1602; &#1584;&#1608;&#1610;&#1607;&#1605; &#1580;&#1605;&#1610;&#1604; &#1575;&#1604;&#1589;&#1576;&#1585; &#1608; &#1575;&#1604;&#1587;&#1604;&#1608;&#1575;&#1606; .\r\n', '6', '6', '1392122106', '', '', '', '', '', ''),
(300, '6', 'Japan concept:-\r\n-----------------------------\r\n"If one can do, I also can do, if none can do, I must do".\r\n\r\nNEPAL concept: -\r\n-----------------------------\r\n"If one can do, Let him do. If none can do, "how can I do?" ', '6', '6', '1392159117', '', '', '', '', '', 'highlight text'),
(303, '16', 'postphoto/1392024_218823001625063_521524407_n.jpg', '16', '16', '1392376859', '', 'photos', ' Happy valentine day:)', '', '', ''),
(304, '6', ' ', '6', '6', '1392451989', '', '', '', '', '', ''),
(305, '6', ' ', '6', '6', '1392452142', '', '', '', '', '', ''),
(306, '6', ' llllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll:kiss:', '6', '6', '1392454800', '', '', '', '', 'nocomment', ''),
(307, '6', 'postphoto/1.jpg', '6', '6', '1392477258', '', 'photos', ' ', '', '', ''),
(308, '8', ' nepali songs', '8', '8', '1392523567', 'http://www.youtube.com/watch?v=GrcC4l6gvoA', '', '', '', '', ''),
(317, '6', ' ', '6', '6', '1392593338', '', '', '', '', '', ''),
(321, '6', ' :j:feeling gud:s:', '6', '6', '1392605744', '', '', '', '', 'nocomment', ''),
(324, '6', ' :j:gfgfhgfhf', '6', '6', '1392606155', '', '', '', '', 'nocomment', ''),
(326, '6', 'postphoto/1653716_10152117180389123_520007602_n.jpg', '6', '6', '1392606412', '', 'photos', ' ', '', '', ''),
(327, '6', 'postphoto/safe_image (1).jpg', '6', '6', '1392606846', '', 'photos', ' mark and his wife ', '', '', ''),
(329, '3', 'you the......... ', '3', '3', '1392608937', '', '', '', '', '', ''),
(330, '6', 'postphoto/safe_image (2).jpg', '6', '6', '1392612539', '', 'photos', ' &#2352;&#2375;&#2327;&#2381;&#2350;&#2368;&#2354;&#2366;&#2312; &#2352;&#2366;&#2359;&#2381;&#2335;&#2381;&#2352;&#2346;&#2340;&#2367; &#2348;&#2344;&#2366;&#2313;&#2344; &#2342;&#2370;&#2340;&#2325;&#2379; &#2342;&#2380;&#2337;&#2343;&#2370;&#2346; ? :: Nepal, Political News, Science, Social, Sport,... www.onlinekhabar.com Onlinekhabar.com - No. 1 News Portal from Nepal, Business news, Bank Credit Profit, \r\n', '', '', ''),
(331, '6', 'postphoto/1779971_626495487422967_1340059316_n.jpg', '6', '6', '1392617992', '', 'photos', ' bill gate daughter', '', '', ''),
(332, '6', 'good ', '6', '6', '1392618918', '', '', '', '', 'nocomment', ''),
(333, '6', 'postphoto/1800266_10151903662522694_1190935905_n.jpg', '6', '6', '1392618950', '', 'photos', ' pic', '', '', ''),
(334, '6', 'postphoto/14855_1391972091067174_1232160828_n.jpg', '6', '6', '1392619532', '', 'photos', ' my pic', '', '', ''),
(335, '6', 'postphoto/3.jpg', '6', '6', '1392620598', '', 'photos', ' my pic', '', '', ''),
(336, '6', 'good ', '6', '6', '1392621091', '', '', '', '', 'nocomment', ''),
(337, '6', 'postphoto/image.jpg', '6', '6', '1392621210', '', 'photos', ' football', '', '', ''),
(338, '6', 'postphoto/1.jpg', '6', '6', '1392622034', '', 'photos', ' ', '', '', ''),
(339, '6', 'postphoto/1528711_660459454010839_592850061_n.jpg', '6', '6', '1392622689', '', 'photos', ' web', '', '', ''),
(340, '6', 'postphoto/1779971_626495487422967_1340059316_n.jpg', '6', '6', '1392622775', '', 'photos', ' nice', '', '', ''),
(341, '6', '&#1575;&#1604;&#1604;&#1607; &#1571;&#1603;&#1576;&#1585;. &#1571;&#1606;&#1576;&#1575;&#1569; &#1593;&#1606; &#1587;&#1602;&#1608;&#1591; &#1591;&#1575;&#1574;&#1585;&#1607; &#1606;&#1602;&#1604; &#1593;&#1587;&#1603;&#1585;&#1610;&#1607; &#1578;&#1585;&#1576;&#1591; &#1602;&#1587;&#1606;&#1591;&#1610;&#1606;&#1607; &#1576;&#1608;&#1585;&#1602;&#1604;&#1607; &#1576;&#1571;&#1605; &#1571;&#1604;&#1576;&#1608;&#1575;&#1602;&#1610;.. 103 &#1602;&#1578;&#1610;&#1604; &#1605;&#1581;&#1578;&#1605;&#1604; &#1573;&#1606;&#1602;&#1591;&#1593; &#1575;&#1604;&#1573;&#1578;&#1589;&#1575;&#1604; &#1605;&#1593; &#1575;&#1604;&#1591;&#1575;&#1574;&#1585;&#1577; &#1605;&#1606; &#1602;&#1587;&#1606;&#1591;&#1610;&#1606;&#1577; &#1575;&#1604;&#1578;&#1610; &#1578;&#1588;&#1607;&#1583; &#1575;&#1604;&#1570;&#1606; &#1605;&#1587;&#1578;&#1588;&#1601;&#1610;&#1575;&#1578;&#1607;&#1575; &#1581;&#1575;&#1604;&#1577; &#1591;&#1608;&#1575;&#1585;&#1574; . &#1575;&#1604;&#1604;&#1607; &#1610;&#1585;&#1581;&#1605;&#1607;&#1605; &#1608; &#1610;&#1585;&#1586;&#1602; &#1584;&#1608;&#1610;&#1607;&#1605; &#1580;&#1605;&#1610;&#1604; &#1575;&#1604;&#1589;&#1576;&#1585; &#1608; &#1575;&#1604;&#1587;&#1604;&#1608;&#1575;&#1606; .\r\n\r\n :s:', '6', '6', '1392625154', '', '', '', '', '', ''),
(342, '24', 'la sahi ho!!!!!!!!!!!!!!!!!!\r\n ', '24', '24', '1392630032', '', '', '', '', '', ''),
(343, '6', 'postphoto/20140217_140933.jpg', '6', '6', '1392692309', '', 'photos', ' at KEC technical expo', '', '', ''),
(344, '6', 'postphoto/20140217_140825.jpg', '6', '6', '1392692495', '', 'photos', ' felling tired :)', '', '', ''),
(345, '26', 'postphoto/10415647_728286817233506_9201783281515427317_n.jpg', '26', '26', '1411130217', '', 'photos', ' In College', '', '', ''),
(346, '1', 'postphoto/tumblr_m0zj9vjzNO1r99f4t.gif', '1', '1', '1411145592', '', 'photos', ' ', '', '', ''),
(347, '26', ' This is text..!', '26', '26', '1411279992', '', '', '', '', '', ''),
(348, '26', 'postphoto/waitingforu.jpg', '26', '26', '1411441727', '', 'photos', ' ', '', '', ''),
(349, '26', 'postphoto/969139_572901776075618_411690510_n.jpg', '26', '26', '1411441883', '', 'photos', ' At manakamana', '', '', ''),
(350, '6', 'postphoto/DSC04552.JPG', '6', '6', '1411484758', '', 'photos', ' During Pokhara tour...!', '', '', ''),
(351, '6', 'postphoto/DSC04317.JPG', '6', '6', '1411484975', '', 'photos', ' During Pokhara tour...Manakamana.', '', '', ''),
(352, '6', 'v ', '6', '6', '1411523097', 'https://www.youtube.com/watch?v=cZR1LReaTi0', '', '', '', '', ''),
(353, '6', ' ', '6', '6', '1411523462', '', '', '', '', '', ''),
(354, '6', ' ', '6', '6', '1411524430', '', '', '', '', '', ''),
(355, '6', ' ', '6', '6', '1411524444', '', '', '', '', '', ''),
(359, '6', ' Feeling happy    :00', '6', '6', '1411524611', '', '', '', '', '', ''),
(363, '6', 'postphoto/1005585_6135959.jpg', '6', '6', '1411528201', '', 'photos', ' ', '', '', ''),
(364, '6', 'postphoto/1005243_6124652_51.jpg', '6', '6', '1411528235', '', 'photos', ' ', '', '', ''),
(365, '6', '       \r\npostphoto/10415647_728286817233506_9201783281515427317_n.jpg\r\n\r\n', '6', '6', '1411530618', '', 'photos', ' ', '1', '', ''),
(366, '6', '      :s:Internet.org', '6', '6', '1411637373', 'https://www.youtube.com/watch?v=AdXwthh-xLQ', '', '', '', '', ''),
(368, '6', '           <a href="http://localhost/go/Social12/status.php" target="_blank">http://localhost/go/Social12/status.php</a>  ', '6', '6', '1411730570', '', '', '', '', '', ''),
(373, '6', '             <a href="http://localhost/go/Social12/status.php" target="_blank">http://localhost/go/Social12/status.php</a>', '6', '6', '1411731241', '', '', '', '', '', ''),
(374, '6', '             :s::s:donot forget to hit like or leave comment or follow me on facebook.<a href="http://www.facebook.com/ranjit.karki.140" target="_blank">http://www.facebook.com/ranjit.karki.140</a>             ', '6', '6', '1411731271', '', '', '', '', '', ''),
(375, '6', 'donot forget to hit like or leave comment or follow me on facebook.<a href="http://www.facebook.com/ranjit.karki.140" target="_blank">http://www.facebook.com/ranjit.karki.140</a>             :e', '6', '6', '1411731324', '', '', '', '', '', ''),
(376, '6', 'postphoto/IMG_7703.JPG', '6', '6', '1411731866', '', 'photos', ' make this desgin by yourself', '2', '', ''),
(377, '6', 'postphoto/home_page.PNG', '6', '6', '1411731941', '', 'photos', ' My next project comming soon', '2', '', ''),
(378, '6', '             hello', '6', '', '1411748509', '', '', '', '', '', ''),
(379, '6', 'postphoto/watch.PNG', '6', '6', '1411749033', '', 'photos', 'my next project', '103', '', ''),
(380, '6', '             donot forget to hit like or leave comment or follow me on facebook.<a href="http://www.facebook.com/ranjit.karki.140" target="_blank">http://www.facebook.com/ranjit.karki.140</a>\r\n:00', '6', '', '1411749120', '', '', '', '', '', ''),
(381, '26', 'Donot forget to hit like or leave comment or follow me on facebook.<a href="http://www.facebook.com/ranjit.karki.140" target="_blank">http://www.facebook.com/ranjit.karki.140</a>  .WHAT CHANGES YOU WANT ...! COMMENT IF I HAVE TIME THAN I WILL UPDATE THIS PROJECT.            ', '26', '', '1411796351', '', '', '', '', 'nocomment', ''),
(383, '26', '             :j::s::kiss::00', '26', '', '1411889513', '', '', '', '', 'nocomment', ''),
(384, '26', 'HELLO             ', '26', '', '1411917685', '', '', '', '', 'nocomment', '');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `addedby` int(11) NOT NULL,
  `requested` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `addedby`, `requested`, `status`) VALUES
(1, 3, 2, 'accepted'),
(6, 1, 6, 'pending'),
(7, 6, 2, 'pending'),
(8, 4, 1, 'accepted'),
(10, 6, 4, 'accepted'),
(11, 4, 6, 'accepted'),
(12, 6, 2, 'accepted'),
(13, 2, 3, 'accepted'),
(15, 18, 3, 'accepted'),
(16, 6, 3, 'pending'),
(17, 3, 6, 'accepted'),
(18, 6, 16, 'pending'),
(20, 6, 3, 'pending'),
(22, 11, 7, 'pending'),
(23, 11, 6, 'accepted'),
(24, 6, 9, 'pending'),
(25, 6, 3, 'accepted'),
(26, 6, 11, 'accepted'),
(27, 5, 26, 'pending'),
(28, 1, 26, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_liked` varchar(55) NOT NULL,
  `total_likes` varchar(55) NOT NULL,
  `uid` varchar(33) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `likes`
--


-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `city` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `bday` varchar(100) NOT NULL,
  `work` varchar(55) NOT NULL,
  `profilepic` varchar(100) NOT NULL,
  `coverphoto` varchar(300) NOT NULL,
  `content` varchar(125) NOT NULL,
  `relation` varchar(66) NOT NULL,
  `search_result` varchar(55) NOT NULL,
  `friends_condition` varchar(55) NOT NULL,
  `school` varchar(55) NOT NULL,
  `college` varchar(66) NOT NULL,
  `interest` varchar(55) NOT NULL,
  `aboutme` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `fname`, `lname`, `address`, `city`, `contact`, `email`, `password`, `gender`, `bday`, `work`, `profilepic`, `coverphoto`, `content`, `relation`, `search_result`, `friends_condition`, `school`, `college`, `interest`, `aboutme`) VALUES
(1, 'jenish', 'Shreatha', 'Dhapakhel', 'kathmandu', 2147483647, 'jenish@yahoo.com', '77b116c99bce06fb11dfb6d79814f718', 'Male', '03/07/2012', 'engineer', 'profilepic/DSC04423.JPG', '', '', 'Single', '', 'yes', '', '', '', ''),
(2, 'Avijit', 'karna', 'Dhapakhel', 'kathmandu', 0, 'Avijit@yahoo.com', 'Avijit', 'Male', '03/06/2012', 'engineer', 'profilepic/1005585_6135959.jpg', 'coverphotos/2.jpg', '', '', 'yes', 'yes', '', '', '', ''),
(3, 'Zenish', 'Shakya', 'kathmandu', 'Jaulakhel', 2147483647, 'Zenish@.com', 'Zenish', 'Male', 'April/4/2009', 'engineer', 'profilepic/1376248533.gif', 'coverphotos/1794545_10152116541129123_1118899118_n.jpg', '', 'Single', 'yes', 'yes', 'vidya sadan school', 'molihss', 'nothing', 'im cool'),
(4, 'sujata', 'thapa', 'Dhapakhel', 'kathmandu', 2147483647, 'sugata@yahoo.com', 'sugata', 'female', '03/06/2012', 'engineer', 'profilepic/matlab_main (1).jpg', 'coverphotos/rachna-maurya-8a.jpg', '', '', '', 'yes', '', '', '', ''),
(5, 'sirgina', 'basnet', 'kathmandu', 'dhapakhel', 2147483647, 'sirgina@gmail.com', '1f4dbdac4cc7d9fa58e84b6a8e60a962', 'female', '04/19/2012', 'engineer', 'profilepic/2.jpeg', 'coverphotos/IMG_80492428338207.jpeg', '', '', 'yes', 'yes', '', '', '', ''),
(6, 'ranjit', 'Karki', 'japan', 'Jhapa', 0, 'ranjitkarki2@gmail.com', '77b116c99bce06fb11dfb6d79814f718', 'Female', 'February/12/1998', 'Engineer', 'profilepic/20140217_140825.jpg', 'coverphotos/Capture1.PNG', '', 'In a relationship', 'No', ' yes', 'kkec', 'kec', 'male', 'boy'),
(7, 'rupak', 'nepal', 'Dhapakhel', 'kathmandu', 2147483647, 'rupak@yahoo.com', 'rupak', 'Male', '03/01/2012', 'student', 'profilepic/SAM_0004.JPG', '', '', '', 'yes', 'yes', '', '', '', ''),
(8, 'sam', 'maharajan', 'Dhapakhel', 'kathmandu', 0, 'sam@yahoo.com', 'sam', 'Male', '03/06/2012', 'student', 'profilepic/DSC04319.JPG', '', '', '', 'yes', 'yes', '', '', '', ''),
(9, 'partik', 'kharel', 'dhapakhel', 'dhapakhel', 444444, 'purtik@yahoo.com', 'purtik', 'male', '2047/03/08', 'eee', 'profilepic/1118695_100000702644504_1683430572_q.jpg', '', '', '', 'yes', 'no', '', '', '', ''),
(10, 'Ustab', 'Neupane', 'Dhapakhel', 'kathmandu', 2147483647, 'ustab@yahoo.com', 'ustab', 'Male', '03/06/2012', 'nothing', 'profilepic/DSC04294.JPG', '', '', '', 'yes', 'yes', '', '', '', ''),
(11, 'Binaya', 'Shrestha', 'jhapa', 'Nepal', 2147483647, 'binaya@yahoo.com', 'binaya', 'Male', '1971-09-15', '', 'profilepic/1118247_100000093465156_1952022755_q.jpg', '', '', '', '', '', '', '', '', ''),
(16, 'Ayusha ', 'Kshetri', 'kathmandu', '', 2147483647, 'Ayusha_12@yahoo.com', 'ayusha', 'Female', '1971-10-29', '', 'profilepic/happy-girl-in-spring.jpg', '', '', '', '', '', '', '', '', ''),
(17, 'Nabin', 'Kumar', 'dharan', '', 2147483647, 'Nabin_12@yahoo.com', 'nabinn', 'Male', '1972-11-29', '', 'profilepic/5 - Copy.jpg', '', '', '', '', '', '', '', '', ''),
(18, 'Samna', 'Acharya', 'Patan', '', 2147483647, 'samna_hope@yahoo.com', 'nightmare@', 'Female', '1992-08-18', '', 'profilepic/1.jpg', 'coverphotos/3672_387975537931304_580217174_n (1).jpg', '', '', '', '', '', '', '', ''),
(19, 'Sushila', 'Shakya', 'jhapa', 'pokhara', 2147483647, 'curium_122@yahoo.com', 'aaaaaa', 'Female', 'September/15/1996', '', 'profilepic/safes_image.png', '', '', 'In a relationship', '', '', '', '', '', ''),
(20, 'Ronisha', 'nirula', 'kathmandu', '', 2147483647, 'ronisha_12@yahoo.com', 'mmmmmm', 'Female', '1970-08-16', '', 'profilepic/14855_1391972091067174_1232160828_n.jpg', 'coverphotos/abstract-496a.jpg', '', '', 'No', '', '', '', '', ''),
(21, 'Rojina', 'Malla', 'Kanibahal', '', 0, 'rojina_hope@yahoo.com', 'rojina', 'Female', '1993-12-10', '', 'profilepic/823831062.jpg', '', '', '', 'yes', '', '', '', '', ''),
(22, 'Ham', 'Maharjan', 'Lalitpur', '', 0, 'ham@yahoo.com', 'hammig', 'Male', '1957-05-11', '', 'profilepic/3.jpg', '', '', '', 'yes', '', '', '', '', ''),
(23, 'Chandan', 'Maharjan', 'kanibahal', '', 0, 'chandan_hope@yahoo.com', 'chandan', 'Male', '1993-09-7', '', 'profilepic/156332_10152259740316754_2084584233_n.jpg', '', '', '', 'yes', '', '', '', '', ''),
(26, 'Ranjit', 'karki[ADMIN]', 'jhapa', 'Jhapa,damak', 2147483647, 'ranjit_12@yahoo.com', '77b116c99bce06fb11dfb6d79814f718', 'Male', 'May/21/1991', '', 'profilepic/10415647_728286817233506_9201783281515427317_n.jpg', 'coverphotos/1005243_6124652_51.jpg', '', 'Single', 'yes', '', 'Damak multiple campus,jhapa,damak', ' kec', 'Everything', 'iam a  boy'),
(27, 'ranjit', 'karki', 'bgf', '', 0, 'c_1@yahoo.com', 'ghgghgj', 'Female', 'Year-Month-DD', '', '', '', '', '', 'yes', '', '', '', '', ''),
(28, 'ranjit', 'karki', 'jhapa', '', 2147483647, 'curium_12@yahoo.com', 'mmmmmm', 'Male', '1966-08-15', '', '', '', '', '', 'yes', '', '', '', '', ''),
(29, 'ranjit', 'karki', 'jhapa', '', 2147483647, 'curium_12@yahoo.com', 'mmmmmm', 'Male', '1971-12-18', '', '', '', '', '', 'yes', '', '', '', '', ''),
(30, 'ranjit', 'karki', 'jhapa', '', 2147483647, 'curium_12@yahoo.com', 'mmmmmm', 'Male', '1971-12-18', '', '', '', '', '', 'yes', '', '', '', '', ''),
(31, 'herbert sam', 'Shrestha', 'jhapa', '', 2147483647, 'curium_1992@yahoo.com', 'mmmmmm', 'Female', '1971-12-17', '', '', '', '', '', 'yes', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `menu1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `menu2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `menu3` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `menu4` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `menu5` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `menu6` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu1`, `menu2`, `menu3`, `menu4`, `menu5`, `menu6`) VALUES
('पूरा नाम', 'उपनाम', 'ईमेल ठेगाना', 'पासवर्ड', 'फोन नम्बर (वैकल्पिक)', 'साइन अपमा क्लिक गर्नु भयो भने तपाईं हाम्रो नियमहरू र गोपनीय नीति मा सहमत हुनुहुन्छ');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(200) NOT NULL,
  `receiver` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `status` varchar(200) NOT NULL,
  `created` varchar(30) NOT NULL,
  `image` varchar(55) NOT NULL,
  `url` varchar(144) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender`, `receiver`, `content`, `status`, `created`, `image`, `url`) VALUES
(14, '2', '26', 'i got your message', 'unread', 'Wednesday,1st January 2014,10:', '', ''),
(17, '6', '3', 'thanks', 'unread', 'Thursday,2nd January 2014,1:16', '', ''),
(27, '6', '3', 'i receive your message', 'unread', 'Thursday,13th February 2014,1:', 'fotos/', ''),
(30, '3', '26', 'Hello admin', 'unread', 'Sunday,16th February 2014,5:34', 'fotos/', ''),
(31, '3', '26', 'thanks', 'unread', 'Sunday,16th February 2014,5:35', 'fotos/', ''),
(32, '6', '2', 'kkkkkk', 'unread', 'Sunday,16th February 2014,5:40', 'fotos/', ''),
(33, '4', '26', 'hello', 'unread', 'Sunday,16th February 2014,5:46', 'fotos/', ''),
(34, '6', '1', 'hi', 'unread', 'Sunday,16th February 2014,5:47', 'fotos/', ''),
(35, '6', '19', 'hi', 'unread', 'Monday,17th February 2014,4:26', 'fotos/', ''),
(36, '19', '6', 'thankks', 'unread', 'Monday,17th February 2014,4:27', 'fotos/', ''),
(38, '23', '6', 'this is so cool.....', 'unread', 'Monday,17th February 2014,6:32', 'fotos/', ''),
(39, '6', '23', 'thjaasdaw', 'unread', 'Monday,17th February 2014,7:03', 'fotos/', ''),
(41, '7', '26', 'cool', 'unread', 'Monday,17th February 2014,7:14', 'fotos/', ''),
(42, '6', '3', 'hjh<br />\r\n', 'unread', 'Monday,17th February 2014,10:0', 'fotos/', ''),
(43, '1', '6', 'Thanks bro for making cool socialweb... ', 'unread', 'Tuesday,18th February 2014,8:3', 'fotos/', ''),
(44, '6', '4', 'mm', 'unread', 'Tuesday,23rd September 2014,8:', 'fotos/', ''),
(45, '6', '4', 'mm', 'unread', 'Tuesday,23rd September 2014,8:', 'fotos/', ''),
(46, '6', '4', 'r', 'unread', 'Tuesday,23rd September 2014,8:', 'fotos/', ''),
(47, '6', '1', 'dfdgsd', 'unread', 'Friday,26th September 2014,1:0', 'fotos/', ''),
(48, '6', '26', 'hello admin from another ranjit', 'unread', 'Saturday,27th September 2014,2', 'fotos/', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(66) NOT NULL,
  `memberid` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=211 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `content`, `memberid`) VALUES
(198, 'My name anthone and i am boy', '6'),
(207, 'What a cool wheathe', '8'),
(208, 'Be kind to unkin', '4'),
(210, 'iam fine & you???????', '8');

-- --------------------------------------------------------

--
-- Table structure for table `photocomment`
--

CREATE TABLE IF NOT EXISTS `photocomment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(66) NOT NULL,
  `image` varchar(66) NOT NULL,
  `person` varchar(44) NOT NULL,
  `commentid` varchar(66) NOT NULL,
  `comment` varchar(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `photocomment`
--

INSERT INTO `photocomment` (`id`, `content`, `image`, `person`, `commentid`, `comment`) VALUES
(7, '', 'fotos/1604737_800574553302887_887403683_n.jpg', '6', '327', 'nice couple'),
(8, '', 'fotos/images (5).jpg', '6', '326', ''),
(9, '', 'fotos/b128.gif', '3', '303', 'coool pic'),
(10, '', 'fotos/1239754_251870731660574_1617489864_n.jpg', '6', '307', 'ff'),
(11, '', 'fotos/20.jpg', '6', '334', ''),
(12, '', 'fotos/1520663_10152165034286416_955997465_n.jpg', '6', '299', ''),
(13, '', 'fotos/1618654_693116107375569_1301703362_a.jpg', '6', '331', ''),
(14, '', 'fotos/1239754_251870731660574_1617489864_n.jpg', '6', '335', ''),
(15, '', 'fotos/1654015_731705890203647_806297338_a.jpg', '6', '337', ''),
(16, '', 'fotos/1354172_6011368825632_9109460_n.png', '6', '340', 'nice'),
(17, '', 'fotos/1012264_693168054067132_1711416130_n.jpg', '6', '340', ''),
(18, '', 'fotos/1656432_628617613872209_1583736203_a.jpg', '26', '339', ''),
(19, '', 'fotos/1005585_6135959.jpg', '1', '345', ''),
(20, '', 'fotos/1376248533.gif', '6', '349', 'kum foo panda'),
(21, '', 'fotos/can2will.jpg', '2', '377', 'Nice'),
(22, '', 'fotos/kute.gif', '26', '374', ''),
(23, '', 'fotos/1376248533.gif', '26', '378', 'comment');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uploadedby` varchar(100) NOT NULL,
  `location` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `uploadedby`, `location`) VALUES
(1, '2', 'photos/envelope.png'),
(2, '2', 'photos/submit.png'),
(3, '2', 'photos/applications_internet.png');

-- --------------------------------------------------------

--
-- Table structure for table `subcomment`
--

CREATE TABLE IF NOT EXISTS `subcomment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subcommentid` varchar(10) NOT NULL,
  `subcommentname` varchar(100) NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=305 ;

--
-- Dumping data for table `subcomment`
--

INSERT INTO `subcomment` (`id`, `subcommentid`, `subcommentname`, `content`, `time`) VALUES
(253, '276', '6', 'Good actor of meribasi:)', '1392431926'),
(254, '288', '6', 'nn', '1392431925'),
(255, '276', '5', 'nice ', '1392431927'),
(256, '288', '2', 'good', '1392431955'),
(257, '276', '3', 'nice', '1392431921'),
(258, '276', '7', 'takme budo', '1392431928'),
(259, '290', '6', 'nice song', '1392431977'),
(260, '276', '6', 'like:b', '1392431920'),
(261, '276', '6', ':b:', '1392431920'),
(262, '289', '6', 'nice track', '1391950520'),
(263, '289', '6', 'gud', '2014-02-09 13:56:16'),
(264, '297', '6', '1 comment', '2014-02-11 12:37:02'),
(265, '300', '3', 'YO MAN....', '2014-02-12 04:02:56'),
(266, '300', '4', 'thumbs up!:)', '2014-02-13 12:04:36'),
(267, '303', '6', 'nice', '1392376859'),
(268, '303', '2', 'superhit movie', '1392431920'),
(269, '274', '6', 'let me comment:b:', '1392432371'),
(270, '305', '6', 'hhhhhh', '1392454814'),
(271, '327', '6', 'nice', '1392607200'),
(272, '329', '3', 'you are good', '1392608996'),
(273, '329', '3', 'jenish shakya like this', '1392609685'),
(274, '330', '6', 'kool pic.....', '1392615565'),
(275, '330', '6', ':b', '1392615579'),
(276, '330', '6', ':b:', '1392615591'),
(277, '330', '6', ':b:', '1392615808'),
(278, '331', '6', 'nice', '1392618058'),
(279, '334', '6', 'nnice', '1392619588'),
(280, '331', '6', 'ranjit..!!', '1392619735'),
(281, '331', '6', 'ranjit..!!', '1392619735'),
(282, '337', '6', 'nice', '1392621955'),
(283, '326', '6', 'simply elegant &amp; best', '1392622573'),
(284, '333', '6', 'fjg', '1392623509'),
(285, '333', '6', 'nycc one', '1392625672'),
(286, '335', '6', ':cheese: cheese', '1392630336'),
(287, '344', '6', 'cool :lol:', '1392693211'),
(288, '329', '1', ' U r not enough young to lead tha nation. So beter to give up to b a political leader.', '1392708595'),
(289, '344', '6', ':roll::bug::down::red::sick::shut:', '1392980849'),
(290, '349', '6', ':what:', '1395496143'),
(291, '349', '6', 'nice', '1395496168'),
(292, '349', '6', ':m busy now  days:spr:', '1395496180'),
(293, '349', '3', 'gud', '1395496197'),
(294, '349', '6', ':)', '1395496253'),
(295, '347', '26', 'Next comment...!', '1411280297'),
(296, '346', '26', 'crying', '1411280323'),
(297, '295', '26', 'what is this?', '1411453281'),
(298, '294', '26', 'nice', '1411453425'),
(299, '349', '6', 'nice', '1411484232'),
(300, '345', '3', 'cool:}', '1411561328'),
(301, '365', '3', 'nice', '1411561363'),
(303, '364', '2', ':):(:', '1411870353'),
(304, '380', '26', 'ok', '1411889665');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_comment`
--

CREATE TABLE IF NOT EXISTS `user_sub_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subcommentid` varchar(255) NOT NULL,
  `subcommentname` varchar(255) NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(54) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_sub_comment`
--

INSERT INTO `user_sub_comment` (`id`, `subcommentid`, `subcommentname`, `content`, `time`) VALUES
(1, '255', '6', ':cheese: cheese', '1390232614'),
(2, '241', '6', ':mad:', '1390232664');

-- --------------------------------------------------------

--
-- Table structure for table `viewer`
--

CREATE TABLE IF NOT EXISTS `viewer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photoid` varchar(22) NOT NULL,
  `views` varchar(66) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `viewer`
--

