-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2014 at 04:50 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `payquad`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `manager_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `property_style` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `company_info` text COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `background` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `welcome_message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `manager_id`, `name`, `url`, `property_style`, `status`, `company_info`, `logo`, `background`, `website`, `address`, `phone`, `twitter`, `facebook`, `email`, `welcome_message`, `created_at`, `updated_at`) VALUES
(1, 12, 'Berry Russel II', 'http://daughertybuckridge.com/veritatis-minus-dicta-qui-quod-nesciunt.html', 1, 0, 'Sed temporibus esse consequatur ut. Reprehenderit eos quaerat illo aliquid quibusdam accusantium omnis enim. Aperiam dolorum cum reiciendis reiciendis enim temporibus.', 'velit', 'odio', 'http://daniel.org/', '8098 Gaston Points Suite 091\nSouth Jeromy, OH 84577', '785.819.1346x347', 'http://shieldsbecker.org/', 'http://www.beiercummerata.net/recusandae-illo-odit-rerum-ratione-maiores-sunt-sunt', 'grant.shany@gmail.com', 'welcome!', '2014-10-29 05:35:02', '2014-10-29 05:35:02'),
(2, 6, 'Wilfrid Runolfsson DDS', 'http://ratkeskiles.org/aut-modi-ullam-ratione-sit-sint-autem', 1, 0, 'Debitis officiis magnam non ducimus vel fugit atque neque. Vero reiciendis at possimus facilis. Officiis maxime et pariatur in officiis.', 'in', 'dolores', 'https://robelkutch.info/laborum-officiis-non-sed-adipisci.html', '3028 DuBuque Flats Apt. 591\nEast Julianne, MA 49059-2509', '(580)960-3747x232', 'https://haley.com/aut-provident-consequatur-corporis-ut-non-rerum-cum.html', 'http://koss.com/officiis-maiores-consequatur-voluptas-adipisci-perspiciatis-sequi-quo-eum.html', 'hegmann.hattie@wolffhartmann.com', 'welcome!', '2014-10-29 05:35:02', '2014-10-29 05:35:02'),
(3, 20, 'Remington Haley', 'http://www.davis.com/perferendis-nesciunt-at-dolorum-temporibus-consequuntur.html', 0, 0, 'Quod fugit officiis eligendi nemo eveniet. Quis est reprehenderit repudiandae deleniti assumenda. Expedita repellat eum sint et deleniti voluptate delectus.', 'neque', 'expedita', 'http://www.kozeytromp.biz/porro-sint-rerum-in-aut-qui-iste-perspiciatis.html', '81929 Stokes Cove Suite 021\nSouth Adolph, NJ 56129-8156', '250-198-7667x9396', 'https://jones.biz/quibusdam-a-tempore-unde-delectus.html', 'http://hand.info/et-eveniet-voluptate-ratione-et', 'dawn65@graham.com', 'welcome!', '2014-10-29 05:35:02', '2014-10-29 05:35:02'),
(4, 10, 'Erika Miller', 'http://www.denesik.com/', 0, 0, 'Vitae assumenda ab quia aliquam quod repudiandae quia. Ipsum sed ut velit eaque consequatur ut. Cupiditate laudantium aspernatur rerum est commodi cum.', 'fugit', 'recusandae', 'http://www.rosenbaum.com/repudiandae-commodi-molestiae-cum-vel-maiores', '96435 Sydni Forge Apt. 222\nLake Floyd, NM 21583-9407', '1-990-324-7580', 'https://www.orn.com/et-magnam-nesciunt-et-ratione-quaerat-recusandae', 'http://www.lubowitz.com/odit-exercitationem-corrupti-sint-non-fuga-magni', 'hartmann.brain@yahoo.com', 'welcome!', '2014-10-29 05:35:02', '2014-10-29 05:35:02'),
(5, 10, 'Ms. Maida Schuster', 'https://weissnat.org/sint-modi-a-velit-aut-iusto-rem-quod.html', 0, 0, 'Quae qui asperiores rerum perspiciatis. Beatae eos iure ut et. Veniam delectus ducimus aspernatur. Similique quaerat aut quasi debitis. Dolores ad culpa impedit.', 'est', 'est', 'http://jacobivandervort.com/cupiditate-aut-neque-in-dolores-fugiat', '6027 Bertram Crest\nNew Derekbury, ID 75125-8108', '616.235.7782x9731', 'http://www.oconnell.com/', 'http://www.cronawalsh.com/quas-quibusdam-eligendi-non-sed-soluta.html', 'aaron10@hotmail.com', 'welcome!', '2014-10-29 05:35:02', '2014-10-29 05:35:02'),
(6, 7, 'Aubrey Lubowitz', 'http://www.berge.com/', 0, 0, 'Consequatur quis quo ullam in sit. Repellat iusto quia ducimus illo quis. Corrupti facilis non recusandae consequuntur nam blanditiis beatae. Mollitia deserunt sint accusamus sint.', 'sunt', 'facere', 'http://www.schumm.info/eaque-quidem-ipsa-eius-hic-quis-dolore-sint', '435 Raynor Ville Suite 793\nEast Donnie, WY 52521', '09776077814', 'http://erdman.com/', 'http://www.cole.com/expedita-qui-architecto-et-optio-quia.html', 'greenfelder.fleta@hotmail.com', 'welcome!', '2014-10-29 05:35:02', '2014-10-29 05:35:02'),
(7, 1, 'Dr. Lorenzo Russel III', 'https://www.parker.com/consequatur-qui-et-omnis-voluptate', 0, 0, 'Sit doloribus fugiat qui cupiditate deleniti aliquid omnis. Est a sit quia labore reiciendis magni sit.', 'veniam', 'omnis', 'http://www.toy.com/eligendi-exercitationem-laborum-molestiae-quaerat-quos-ad-aut', '5740 Ziemann Falls\nBernierfort, ND 07454', '214.353.7836', 'http://hansenrobel.com/nesciunt-magni-sit-incidunt-alias', 'https://www.hudsonpowlowski.info/animi-non-ut-reprehenderit-eos', 'lschaefer@bernier.com', 'welcome!', '2014-10-29 05:35:02', '2014-10-29 05:35:02'),
(8, 22, 'Kellen Fahey', 'http://www.ryan.net/id-vel-iure-nemo-consequatur', 0, 1, 'Debitis aperiam id accusantium qui et tempore. Perferendis explicabo provident soluta. Inventore repellat dolorem fugiat omnis hic quis.', 'consequatur', 'et', 'http://www.harris.com/officia-provident-velit-perspiciatis-illo-ut-eius', '2749 Bins Turnpike\nEast Donald, DC 07283', '1-300-855-4680x327', 'http://willms.net/dolorum-et-unde-natus', 'http://auer.net/ex-adipisci-beatae-quibusdam-voluptate-non-reiciendis.html', 'jaron50@gmail.com', 'welcome!', '2014-10-29 05:35:02', '2014-10-29 05:35:02'),
(9, 12, 'Prof. Jarret Schoen PhD', 'http://www.hellerhintz.net/sequi-et-et-laudantium-repellat-maxime-est', 1, 0, 'Iste odio libero laboriosam repellendus quia voluptates. Voluptates ab quia quo repellat molestias ad. Excepturi tenetur ut voluptas itaque deserunt voluptate accusamus. Aliquam ad culpa eligendi tempora. Quaerat voluptatum voluptate et delectus.', 'ab', 'ut', 'https://runolfsdottir.com/sequi-rem-consequuntur-qui-nihil-consequatur.html', '61703 Cole Crescent Apt. 106\nNew Kellitown, LA 51163', '1-757-166-3419', 'http://www.schinner.org/officia-occaecati-eius-mollitia-ullam-quo-voluptatem-quia', 'http://olson.info/', 'kozey.rosella@harris.com', 'welcome!', '2014-10-29 05:35:02', '2014-10-29 05:35:02'),
(10, 1, 'Meta Witting', 'http://schoen.biz/tempore-dolores-et-illo-dolorum', 0, 0, 'Cum qui totam ut eaque voluptas. Suscipit suscipit facere soluta ipsam. Magnam hic quae et aut quae rem nobis. Qui possimus est doloremque nihil.', 'eum', 'quo', 'http://www.bosco.com/est-est-voluptas-quaerat-labore-non-est', '02253 Klocko Hills Apt. 619\nEast Mistyville, AK 64176', '784-855-0175', 'http://bogisich.com/nam-hic-nostrum-saepe-enim-sunt-itaque.html', 'https://stamm.com/soluta-recusandae-est-velit-aspernatur-quae-perspiciatis.html', 'wdeckow@yahoo.com', 'welcome!', '2014-10-29 05:35:02', '2014-10-29 05:35:02'),
(11, 7, 'Mr. Barry Gislason', 'http://www.cartwrighttremblay.org/atque-sunt-et-incidunt-necessitatibus-assumenda-repellat-facere', 0, 0, 'Praesentium qui error id delectus occaecati et voluptas laborum. Veniam porro reprehenderit nihil officiis doloribus.', 'dolorem', 'dolor', 'https://emmerich.biz/vel-nesciunt-ut-perferendis-sint.html', '457 Melisa Stream\nDanielfort, GA 55040-6949', '103-406-4823x97628', 'http://www.metz.com/', 'http://www.stehrlowe.com/asperiores-dolorum-vero-hic-excepturi.html', 'ubeier@hotmail.com', 'welcome!', '2014-10-29 05:35:02', '2014-10-29 05:35:02'),
(12, 26, 'Giovanna Toy DVM', 'https://mccullough.org/pariatur-nihil-in-omnis-molestias.html', 0, 1, 'Voluptatum saepe fugiat odit unde aliquam numquam numquam. Ipsum pariatur in dolorem amet et. Tempore id qui eveniet quia beatae eius. Impedit consectetur quisquam adipisci nemo aut.', 'sit', 'reprehenderit', 'http://www.hettingerluettgen.com/ea-veritatis-est-architecto-tempore', '60509 Constance Villages\nLuettgenstad, KS 69200-1000', '1-442-023-2303x441', 'https://runtekerluke.net/commodi-aut-earum-autem-id-saepe-deleniti.html', 'https://rempel.org/non-voluptatem-impedit-eos-deserunt-sed.html', 'arne88@beier.biz', 'welcome!', '2014-10-29 05:35:02', '2014-10-29 05:35:02'),
(13, 24, 'Isabell Bauch', 'http://www.hilpert.net/amet-voluptatem-exercitationem-voluptas-repellendus-non-omnis-aut-doloribus', 1, 0, 'Illum aliquam ut doloremque sed id accusamus quia. Placeat perspiciatis ut praesentium ipsum ipsum. Omnis aut voluptas incidunt vitae et impedit quas.', 'deserunt', 'sed', 'http://www.ankunding.com/est-inventore-error-tempore-et-qui-impedit-animi', '8695 Liana Village Apt. 704\nRashawnburgh, NH 88885', '920.801.9928x6588', 'http://stiedemann.net/', 'http://reichel.com/animi-fuga-voluptatem-repudiandae-qui', 'johnnie.ledner@hills.net', 'welcome!', '2014-10-29 05:35:02', '2014-10-29 05:35:02'),
(14, 26, 'Dale Gutkowski', 'http://runteyost.com/ex-nulla-quam-sed-a-tempore', 0, 0, 'Et et saepe illo quo iure eos. Perspiciatis facere perspiciatis vel. Reprehenderit saepe commodi fuga.', 'aut', 'incidunt', 'http://hettingergibson.info/', '51042 Ian Pine\nEmardshire, KS 34930', '206-646-9925', 'http://www.bradtkelueilwitz.org/et-quas-vel-quasi', 'http://www.leuschke.com/quisquam-sed-non-aut', 'darrin.stokes@shanahan.com', 'welcome!', '2014-10-29 05:35:02', '2014-10-29 05:35:02'),
(15, 4, 'Janice Wiza', 'https://wilderman.com/ut-porro-enim-omnis-veniam-temporibus-quaerat-dolore.html', 0, 1, 'Aut doloribus deserunt pariatur occaecati magnam rem nihil sed. Minima commodi exercitationem est. Et ut maxime ut.', 'sed', 'iure', 'http://www.will.info/sunt-mollitia-repudiandae-laudantium-inventore-ab-nobis', '1726 Bashirian Village Suite 398\nHamillville, OK 45697', '05957192203', 'http://vonrueden.info/molestiae-eaque-maiores-expedita-voluptas-consequatur', 'http://dareboyer.com/ullam-alias-qui-voluptatem-pariatur-vero-ipsa.html', 'ward.jordyn@gmail.com', 'welcome!', '2014-10-29 05:35:02', '2014-10-29 05:35:02'),
(16, 22, 'Emerald Gleason', 'http://bode.com/', 1, 1, 'Corporis sint est at quas in. Quasi nesciunt eligendi magni deserunt. Dolorem rem pariatur et et officia.', 'voluptas', 'praesentium', 'http://www.auerstokes.com/sit-eos-ex-ut-et', '3467 Frederick Burg\nGerholdstad, DE 13823-6932', '452-625-0940', 'http://frami.biz/repudiandae-facilis-totam-similique-debitis-a-vel.html', 'http://russel.biz/quod-quam-sit-quos-fugit.html', 'turner.lisandro@hand.info', 'welcome!', '2014-10-29 05:35:02', '2014-10-29 05:35:02'),
(17, 6, 'Glenna Littel', 'http://www.renner.biz/voluptatem-voluptatem-nulla-nihil-eaque-et-ut-aut', 1, 1, 'Numquam quia est possimus voluptatem soluta nihil. Magnam et sit cum vel ut qui quia ut.', 'voluptatem', 'dignissimos', 'http://www.sanfordoconnell.biz/velit-est-voluptas-velit-quae', '30659 Retha Place Apt. 712\nLake Vincenza, ME 13033', '256-556-3288', 'http://stiedemann.info/ea-repudiandae-aut-alias-animi-rerum-quae', 'https://sanford.com/omnis-ea-tenetur-inventore-laudantium-dolorem-ut-dolor.html', 'louie.predovic@yahoo.com', 'welcome!', '2014-10-29 05:35:03', '2014-10-29 05:35:03'),
(18, 16, 'Rachelle Kris', 'http://www.daniel.info/praesentium-sint-laboriosam-eum-et-quis-nesciunt.html', 0, 0, 'Dignissimos ea tenetur voluptatum nulla praesentium accusamus doloribus. Sit eligendi sapiente ab ipsum porro. Aliquam voluptas nisi rem explicabo qui error ut.', 'et', 'aut', 'http://www.cartwright.net/', '65443 Glenna Fall\nKattieland, NE 09520', '(027)374-5715x735', 'http://www.nikolauswelch.com/quibusdam-hic-repellat-assumenda-quisquam-aut', 'https://funk.biz/nisi-repellendus-voluptates-qui-non-natus-magni.html', 'sean97@quitzon.com', 'welcome!', '2014-10-29 05:35:03', '2014-10-29 05:35:03'),
(19, 5, 'Syble Schiller', 'https://goodwin.com/quasi-architecto-pariatur-molestias-eum-tempore-quidem-voluptate-culpa.html', 0, 0, 'Vitae et vel doloremque qui expedita. Veritatis eos rerum facilis laborum. Dolorem officia pariatur in voluptatum non repudiandae. Cumque magni in et voluptates.', 'unde', 'quia', 'http://wintheiser.info/consequatur-aut-magni-itaque-ab-qui-quas', '3768 Douglas Land\nEast Emmett, MN 69486', '+12(4)6128556515', 'http://www.leannongorczany.info/sint-fugiat-quos-sunt-est', 'http://hoeger.com/at-explicabo-tempore-facilis-mollitia-iusto-rerum-nemo', 'felicia09@bergnaum.com', 'welcome!', '2014-10-29 05:35:03', '2014-10-29 05:35:03'),
(20, 27, 'Edwina Barrows', 'http://zulauf.org/', 0, 1, 'Et et ex aliquam alias. Ab possimus cumque mollitia dolore. Aut architecto dolor dolores dolorem ab molestias a saepe.', 'debitis', 'eos', 'http://schuppehintz.net/qui-asperiores-optio-enim-rem-laudantium-cumque', '51909 Jaylin Crossroad Apt. 713\nGenovevaland, WV 88342-2074', '249.841.0211x9324', 'http://monahan.com/ab-sed-magnam-accusamus-et-voluptas-nihil', 'http://hodkiewiczbrakus.com/autem-iusto-nam-autem-odio-accusamus-pariatur.html', 'iparker@gmail.com', 'welcome!', '2014-10-29 05:35:03', '2014-10-29 05:35:03'),
(21, 22, 'Madaline Jenkins', 'https://www.stiedemann.info/et-enim-quis-voluptas-totam-ut-est', 1, 0, 'Id et sint sed rerum. Nam voluptatem earum est omnis. Ex quia necessitatibus corrupti.', 'rem', 'deserunt', 'http://www.torp.info/modi-eveniet-ullam-quaerat-veniam.html', '1272 Cora Club\nEast Dariotown, VA 97189-9942', '486-495-0129', 'http://runolfsson.com/', 'http://torplegros.com/', 'cherzog@yahoo.com', 'welcome!', '2014-10-29 05:35:03', '2014-10-29 05:35:03'),
(22, 9, 'Ike Wisoky', 'https://www.luettgen.info/qui-sint-laboriosam-ut-aut-inventore-eveniet-temporibus', 0, 1, 'Minima voluptas reprehenderit dolorum nihil consequatur quo. Esse dolor et doloribus dolore incidunt omnis quia. Fugit deleniti et voluptas sequi quidem modi nihil.', 'voluptatibus', 'non', 'https://www.schuster.com/quo-deleniti-quidem-repellat-hic', '98271 Kristy Ports Apt. 924\nRoycefort, CT 96177-2638', '758.625.5526', 'https://www.sipes.com/quod-consectetur-repellendus-autem-maxime-nesciunt-quod', 'http://www.satterfield.biz/', 'constantin70@yahoo.com', 'welcome!', '2014-10-29 05:35:03', '2014-10-29 05:35:03'),
(23, 7, 'Leo Cassin', 'https://www.thiel.net/voluptatem-sint-tempore-molestiae-dolore-illo-hic-iure', 1, 1, 'Et ab consequuntur officiis beatae placeat eum. Id est sint quia in quia eius.', 'ex', 'debitis', 'http://www.stokes.com/assumenda-sed-quas-fugiat-unde-iusto', '592 Hickle Stravenue\nTheomouth, NJ 31502-6788', '1-359-148-7810', 'http://bergstromoberbrunner.net/', 'http://www.miller.com/et-nisi-vitae-nam-hic-vero.html', 'adams.hunter@hotmail.com', 'welcome!', '2014-10-29 05:35:03', '2014-10-29 05:35:03'),
(24, 10, 'Mrs. Mollie Satterfield IV', 'http://abshire.org/autem-modi-fugiat-et-et.html', 1, 1, 'Rerum aut labore sit quaerat. Ut et aliquam quos assumenda et. Ad corrupti eos velit aliquam. Et provident veritatis quia ullam culpa maiores sed.', 'magni', 'voluptate', 'http://www.kuhlman.com/deserunt-dolor-sapiente-eos-est', '9366 Mafalda Garden Suite 240\nFaymouth, KS 59129', '419.364.8291x1912', 'https://lowewunsch.com/eum-eaque-culpa-quia.html', 'https://www.mosciski.com/iusto-dolor-explicabo-ut-nam', 'trisha27@parisianmills.net', 'welcome!', '2014-10-29 05:35:03', '2014-10-29 05:35:03'),
(25, 1, 'Prof. Timothy Cronin', 'https://greenkrajcik.info/est-illo-voluptas-est-sed-exercitationem.html', 1, 1, 'Doloremque eveniet ea sequi a ad. Quae aut nam molestiae nemo totam. Dolores enim ut similique consequatur vel et.', 'et', 'veritatis', 'http://greenholt.org/facilis-exercitationem-dolores-occaecati-culpa-delectus-nostrum', '348 Andreanne Fork Apt. 403\nPricemouth, SC 78007-4658', '797-805-5180x85256', 'http://www.rowe.com/sunt-dolor-consequatur-unde-nihil.html', 'http://www.luettgen.com/', 'valentine51@heidenreich.net', 'welcome!', '2014-10-29 05:35:03', '2014-10-29 05:35:03'),
(26, 28, 'Prof. Alejandrin Kshlerin Jr.', 'http://www.durganmorar.com/occaecati-voluptas-sed-voluptatem-vero-temporibus', 0, 0, 'Qui velit atque quod libero et dolores. Nihil vitae aut harum unde. Asperiores ducimus dolores iusto amet.', 'ut', 'sint', 'https://steuberrice.org/recusandae-labore-sit-qui-temporibus-consectetur-numquam-sit.html', '88767 Cristian Isle Suite 477\nBoview, AL 96455-7128', '1-165-387-0128', 'http://hesselkertzmann.net/aliquid-iusto-ex-asperiores.html', 'https://davisyundt.com/ut-quia-iste-nam-voluptatum-rerum-quos.html', 'schinner.nicolas@runolfsdottiremmerich.com', 'welcome!', '2014-10-29 05:35:03', '2014-10-29 05:35:03'),
(27, 22, 'Pearlie Hand I', 'http://torpbeahan.com/ad-perferendis-reprehenderit-molestias-et-repudiandae-molestiae', 0, 0, 'Amet qui sint iste sit explicabo. Est dolorem et ex praesentium laborum. Et ut voluptatibus possimus rerum excepturi est consequatur.', 'libero', 'cumque', 'https://www.deckow.com/ad-voluptas-et-doloremque-sapiente-itaque-autem', '088 Bechtelar Underpass\nLemuelfurt, MA 96805', '(106)440-6554', 'http://roob.com/', 'http://www.trantow.com/', 'spinka.keara@purdy.com', 'welcome!', '2014-10-29 05:35:03', '2014-10-29 05:35:03'),
(28, 18, 'Kristina Borer Jr.', 'http://willms.com/et-quia-aspernatur-neque-unde-dolores-illum.html', 0, 0, 'Omnis consectetur at ut ab non. Porro eveniet libero eos inventore. Quia in possimus illo voluptas qui.', 'voluptatem', 'voluptatem', 'http://greenolson.com/autem-laboriosam-enim-ratione-maxime.html', '34401 Anika Circle\nBeahanberg, UT 77124-6857', '(739)634-3556x51562', 'http://roberts.com/dolorum-aut-quia-saepe-aut', 'http://www.runolfsson.com/dignissimos-sed-et-ab-explicabo-delectus.html', 'zoe.baumbach@yahoo.com', 'welcome!', '2014-10-29 05:35:03', '2014-10-29 05:35:03'),
(29, 10, 'Prof. Meredith Turcotte Sr.', 'http://schultz.biz/incidunt-odit-soluta-ut-eum-vero-molestias-suscipit-quam', 0, 0, 'Fugiat qui aut odio eum sunt sapiente. Dolore natus veniam aliquid quibusdam quae animi omnis. Quam nulla fugit suscipit corporis. Ea occaecati voluptatibus saepe et eos soluta et dolor.', 'qui', 'et', 'http://haley.com/rerum-sunt-voluptas-beatae-corrupti.html', '11741 Brannon Summit Apt. 399\nNoraview, FL 77744-3905', '1-524-599-0431x34587', 'https://www.leuschke.com/esse-non-delectus-omnis-in-velit-iste', 'https://www.ernser.com/repellendus-dolorem-hic-et-impedit-sit', 'grace.collier@senger.biz', 'welcome!', '2014-10-29 05:35:03', '2014-10-29 05:35:03'),
(30, 22, 'Dion Fay', 'https://www.braun.com/ut-repudiandae-qui-molestiae-aut-magni-est', 0, 0, 'Dolorum et eligendi vero et. Laboriosam blanditiis vitae deleniti aut aperiam aut dicta. Aut libero aut sit distinctio beatae doloremque consequatur.', 'nam', 'natus', 'http://www.adams.com/et-molestiae-maiores-non-aut', '990 Kiara Crest Apt. 996\nSchimmelmouth, ND 95903-4256', '349.547.9782x778', 'http://haagkreiger.net/tenetur-reprehenderit-consectetur-quae-et-rerum-quia-eos.html', 'http://brownstehr.org/ut-adipisci-ratione-vel-vel-illo', 'nona.jerde@jacobs.com', 'welcome!', '2014-10-29 05:35:03', '2014-10-29 05:35:03');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE IF NOT EXISTS `managers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `property_id` int(10) unsigned NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `managers_user_id_foreign` (`user_id`),
  KEY `managers_property_id_foreign` (`property_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `user_id`, `property_id`, `first_name`, `last_name`, `email`, `permissions`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 15, 'Addie', 'Klein', 'marques99@lynchwunsch.com', 'payquad_admin', 'enabled', '2014-10-29 05:35:04', '2014-10-29 05:35:04'),
(2, 2, 5, 'Claude', 'Bogan', 'willard.reilly@hagenes.com', 'payquad_admin', 'enabled', '2014-10-29 05:35:04', '2014-10-29 05:35:04'),
(3, 3, 29, 'Mylene', 'Hermann', 'udavis@pacochaaltenwerth.com', 'junior_manager', 'enabled', '2014-10-29 05:35:04', '2014-10-29 05:35:04'),
(4, 4, 10, 'Jessyca', 'Grady', 'grady.lowe@yahoo.com', 'admin_manager', 'enabled', '2014-10-29 05:35:04', '2014-10-29 05:35:04'),
(5, 5, 23, 'Buford', 'Beatty', 'dahlia.gottlieb@yahoo.com', 'payquad_admin', 'enabled', '2014-10-29 05:35:04', '2014-10-29 05:35:04'),
(6, 6, 11, 'Kaia', 'Jaskolski', 'violette.durgan@hotmail.com', 'junior_manager', 'enabled', '2014-10-29 05:35:04', '2014-10-29 05:35:04'),
(7, 7, 26, 'Milan', 'Gerhold', 'boyle.abbie@yahoo.com', 'junior_manager', 'enabled', '2014-10-29 05:35:04', '2014-10-29 05:35:04'),
(8, 8, 1, 'Lamont', 'Waelchi', 'brady.kassulke@hermistonrenner.com', 'junior_manager', 'enabled', '2014-10-29 05:35:04', '2014-10-29 05:35:04'),
(9, 9, 22, 'Samantha', 'Quigley', 'frances.gusikowski@stiedemannjohnson.info', 'payquad_admin', 'enabled', '2014-10-29 05:35:04', '2014-10-29 05:35:04'),
(10, 10, 16, 'Molly', 'Stehr', 'langosh.corbin@yahoo.com', 'junior_manager', 'enabled', '2014-10-29 05:35:04', '2014-10-29 05:35:04'),
(11, 11, 12, 'Leanne', 'Boyer', 'bbrown@yahoo.com', 'admin_manager', 'enabled', '2014-10-29 05:35:04', '2014-10-29 05:35:04'),
(12, 12, 17, 'Alysson', 'Mann', 'hhackett@gmail.com', 'admin_manager', 'enabled', '2014-10-29 05:35:04', '2014-10-29 05:35:04'),
(13, 13, 7, 'Reyes', 'Kovacek', 'angel76@hoeger.com', 'junior_manager', 'enabled', '2014-10-29 05:35:04', '2014-10-29 05:35:04'),
(14, 14, 10, 'Mariana', 'Quitzon', 'hmcglynn@thompson.com', 'junior_manager', 'enabled', '2014-10-29 05:35:04', '2014-10-29 05:35:04'),
(15, 15, 8, 'Johanna', 'Shields', 'araceli.langworth@toyconnelly.info', 'junior_manager', 'enabled', '2014-10-29 05:35:04', '2014-10-29 05:35:04'),
(16, 16, 19, 'Lyda', 'Mitchell', 'haley.lester@kemmer.com', 'junior_manager', 'enabled', '2014-10-29 05:35:04', '2014-10-29 05:35:04'),
(17, 17, 29, 'Stephanie', 'Carter', 'mozell50@considine.com', 'junior_manager', 'enabled', '2014-10-29 05:35:04', '2014-10-29 05:35:04'),
(18, 18, 18, 'Kiel', 'Haley', 'wuckert.hilbert@wisozk.org', 'payquad_admin', 'enabled', '2014-10-29 05:35:05', '2014-10-29 05:35:05'),
(19, 19, 9, 'Edmund', 'Hyatt', 'jamey57@hotmail.com', 'junior_manager', 'enabled', '2014-10-29 05:35:05', '2014-10-29 05:35:05'),
(20, 20, 30, 'Adrienne', 'Marquardt', 'alana78@gmail.com', 'junior_manager', 'enabled', '2014-10-29 05:35:05', '2014-10-29 05:35:05'),
(21, 21, 21, 'Jackeline', 'Morar', 'teresa27@gmail.com', 'junior_manager', 'enabled', '2014-10-29 05:35:05', '2014-10-29 05:35:05'),
(22, 22, 1, 'Yolanda', 'Runolfsdottir', 'blangosh@hotmail.com', 'junior_manager', 'enabled', '2014-10-29 05:35:05', '2014-10-29 05:35:05'),
(23, 23, 5, 'Kari', 'Harris', 'csipes@hotmail.com', 'payquad_admin', 'enabled', '2014-10-29 05:35:05', '2014-10-29 05:35:05'),
(24, 24, 13, 'Vito', 'Hintz', 'immanuel.bogan@marquardtabbott.com', 'junior_manager', 'enabled', '2014-10-29 05:35:05', '2014-10-29 05:35:05'),
(25, 25, 5, 'Ara', 'Graham', 'oral.keeling@hotmail.com', 'junior_manager', 'enabled', '2014-10-29 05:35:05', '2014-10-29 05:35:05'),
(26, 26, 12, 'Laurel', 'Green', 'yschulist@gmail.com', 'payquad_admin', 'enabled', '2014-10-29 05:35:05', '2014-10-29 05:35:05'),
(27, 27, 20, 'Maria', 'Goyette', 'schoen.syble@lakinpfeffer.com', 'payquad_admin', 'enabled', '2014-10-29 05:35:05', '2014-10-29 05:35:05'),
(28, 28, 20, 'Queenie', 'Lang', 'maryjane.hansen@hotmail.com', 'payquad_admin', 'enabled', '2014-10-29 05:35:05', '2014-10-29 05:35:05'),
(29, 29, 4, 'Jannie', 'Schoen', 'elwyn80@gmail.com', 'payquad_admin', 'enabled', '2014-10-29 05:35:05', '2014-10-29 05:35:05'),
(30, 30, 13, 'Duncan', 'Brown', 'kuhlman.mathilde@gmail.com', 'admin_manager', 'enabled', '2014-10-29 05:35:05', '2014-10-29 05:35:05');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `is_read` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=101 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `from_id`, `to_id`, `subject`, `body`, `is_read`, `created_at`, `updated_at`) VALUES
(1, 16, 25, 'Vitae reprehenderit consequatur.', 'Alias rerum aliquid deleniti. Aperiam aspernatur ducimus facere et illo. Veritatis rerum est qui in ea rem ut. Adipisci tempore quasi est animi voluptas natus nemo.', 0, '2014-10-29 05:35:05', '2014-10-29 05:35:05'),
(2, 10, 26, 'Tempora vel ex sunt.', 'Minus vel corrupti impedit vel consequatur minus.', 0, '2014-10-29 05:35:05', '2014-10-29 05:35:05'),
(3, 15, 17, 'Accusamus neque repellendus porro.', 'Rerum nihil nulla sapiente laborum incidunt eos excepturi. Similique sed blanditiis corporis eveniet.', 0, '2014-10-29 05:35:05', '2014-10-29 05:35:05'),
(4, 15, 1, 'Error est et velit.', 'Sapiente ad accusamus culpa fuga sit. Omnis aliquid ea distinctio quia. Nam autem natus ut voluptatum.', 1, '2014-10-29 05:35:05', '2014-10-29 05:35:05'),
(5, 10, 26, 'Ut inventore sint sequi.', 'Odit occaecati voluptatum autem sint saepe sint aliquam. Quisquam maiores similique sed fuga. Rerum autem corrupti perspiciatis qui quibusdam.', 1, '2014-10-29 05:35:05', '2014-10-29 05:35:05'),
(6, 13, 3, 'Qui quia.', 'Alias molestiae dolorem autem voluptatem. Aut quam explicabo iusto enim molestiae et. Officia aut eum similique. Sunt pariatur impedit voluptatem vel et dignissimos itaque.', 0, '2014-10-29 05:35:05', '2014-10-29 05:35:05'),
(7, 24, 12, 'Facilis repellendus numquam fugit alias.', 'Repudiandae minima sed omnis sunt natus delectus aliquam. Blanditiis eos ut quibusdam atque veniam sint. Aperiam in incidunt quasi sunt quia et.', 1, '2014-10-29 05:35:05', '2014-10-29 05:35:05'),
(8, 26, 25, 'Et sed eius.', 'Possimus minus et est porro eum fugit. Qui quo minima deserunt distinctio. Quas quo mollitia nemo quisquam culpa et quam eos.', 1, '2014-10-29 05:35:05', '2014-10-29 05:35:05'),
(9, 19, 30, 'Debitis culpa.', 'Doloribus ut distinctio cumque laudantium tempore ut. Modi iusto odio eius. Esse quisquam cupiditate nulla fugiat.', 0, '2014-10-29 05:35:05', '2014-10-29 05:35:05'),
(10, 16, 29, 'Qui quis.', 'Qui et adipisci similique laudantium.', 0, '2014-10-29 05:35:05', '2014-10-29 05:35:05'),
(11, 17, 10, 'Sunt cumque qui necessitatibus labore.', 'Provident quo quos laborum provident ea illum optio corporis. Odit minima saepe accusamus. Molestiae laudantium sunt aut est iusto.', 1, '2014-10-29 05:35:05', '2014-10-29 05:35:05'),
(12, 6, 7, 'Inventore ut error quas dolorem aperiam exercitationem.', 'Adipisci et asperiores est et inventore fugiat. Mollitia nostrum consectetur iste architecto est dicta id.', 0, '2014-10-29 05:35:05', '2014-10-29 05:35:05'),
(13, 12, 6, 'Hic voluptate nisi deleniti.', 'Et cupiditate aperiam eum veritatis vero. Sint amet tenetur voluptatibus aut eligendi et.', 0, '2014-10-29 05:35:05', '2014-10-29 05:35:05'),
(14, 18, 12, 'Fugit nemo ratione magni.', 'Sit ex facilis fugiat. Ea quia facilis sit at. Aut voluptas aliquid aperiam laboriosam possimus sed neque perspiciatis.', 0, '2014-10-29 05:35:05', '2014-10-29 05:35:05'),
(15, 25, 11, 'Suscipit odio nulla.', 'Quis mollitia velit molestiae et. Et praesentium quos autem nam consequuntur laboriosam est.', 0, '2014-10-29 05:35:05', '2014-10-29 05:35:05'),
(16, 15, 6, 'Totam in qui.', 'Est labore quos et rerum est repellat. Quis dolores minus eveniet corporis facere praesentium. Excepturi nesciunt corporis non.', 0, '2014-10-29 05:35:05', '2014-10-29 05:35:05'),
(17, 19, 16, 'Nulla nisi dolor.', 'Rem architecto ea vitae fugit veniam id quo quo. Qui ratione minima eius autem expedita ea.', 0, '2014-10-29 05:35:05', '2014-10-29 05:35:05'),
(18, 19, 13, 'Occaecati.', 'Dicta ratione ex et ut provident hic. Quisquam neque assumenda dolor nihil.', 0, '2014-10-29 05:35:05', '2014-10-29 05:35:05'),
(19, 16, 14, 'Nemo quasi ut.', 'Labore dolor et aut quo deleniti.', 0, '2014-10-29 05:35:05', '2014-10-29 05:35:05'),
(20, 23, 23, 'Dolor quia sequi.', 'Minima ut sunt et.', 0, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(21, 10, 28, 'Nisi temporibus tempora illo voluptas enim.', 'Ut ipsa aut nulla enim qui modi non.', 1, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(22, 20, 1, 'Voluptatem voluptatibus.', 'Enim deleniti quo tenetur libero eligendi veritatis sed. Aut excepturi dignissimos saepe eveniet exercitationem. Quaerat architecto alias in architecto ab voluptatibus sed.', 1, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(23, 22, 20, 'Architecto fuga.', 'Officia eum et laudantium dolores. Qui et in est officiis. Cumque ab non autem itaque. Est earum optio et sed nobis.', 0, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(24, 30, 28, 'Et ex et commodi optio qui illum.', 'Ea odit et nisi eum pariatur aut alias. Dolor reprehenderit quaerat vitae. Minima ea nesciunt dolore natus eos.', 0, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(25, 15, 13, 'Perspiciatis.', 'Et eius voluptatum omnis mollitia. Ipsam occaecati porro unde est nostrum.', 1, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(26, 19, 8, 'Incidunt.', 'Qui reiciendis error ratione illo unde. Fugit omnis tenetur sed culpa quis id iste autem. Omnis aperiam vero eos saepe ut facere. Est ipsam laborum consequuntur maxime voluptatem aut eos.', 0, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(27, 11, 29, 'Repudiandae nobis.', 'Consequuntur odit enim quam. Voluptatem quo est voluptatem voluptatum.', 0, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(28, 7, 21, 'Impedit expedita.', 'Unde assumenda qui quis dolorum accusantium. Voluptas aperiam fugit eaque repellendus voluptatem nemo voluptas.', 1, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(29, 4, 1, 'Laudantium natus deleniti assumenda porro porro.', 'Eos itaque soluta nam nihil. Perferendis sed est impedit. Sit aut distinctio aut aperiam voluptatibus omnis quis quo. Adipisci hic ducimus ab occaecati sunt tenetur.', 0, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(30, 17, 2, 'Non qui tempora aperiam.', 'Modi voluptates quidem quia tenetur. Et accusamus rerum sed. Nulla expedita id quam et. Hic ab rerum est quia et.', 0, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(31, 15, 11, 'Nisi quidem similique ut.', 'Ducimus velit esse ex sint. Sit et reiciendis dolorem velit voluptatem accusamus. Inventore et non adipisci saepe incidunt modi sit. Consequuntur fugit velit quis molestiae atque.', 0, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(32, 12, 2, 'Quos et numquam facere.', 'Facere voluptatem aspernatur in a. Ut aspernatur iure ipsam neque. Nemo quis et cupiditate itaque vero totam.', 1, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(33, 7, 22, 'Sequi saepe ut.', 'Voluptatem quis earum quis earum dolore tempore sed. Animi occaecati cum velit aut id voluptatem quis.', 0, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(34, 14, 14, 'Architecto eos alias magni recusandae.', 'Illum vero quo sit non tempore voluptas accusantium voluptas. Et expedita a saepe vel est consequuntur. Nam voluptate non sunt deleniti eligendi non.', 0, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(35, 3, 26, 'Dolorem eveniet maiores.', 'Doloremque at magnam modi laborum consectetur. Sit sunt dolorem et dolore iure quo.', 0, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(36, 16, 1, 'Atque id accusantium eius.', 'Deserunt facere sint molestiae consequatur aliquam repellat ipsa accusantium. Omnis mollitia est consequatur itaque rem. Id dolor consequatur dolore esse a.', 0, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(37, 24, 16, 'Qui dolor amet placeat consequatur.', 'Neque et architecto consequatur ex quas ex. Alias aut omnis aut quibusdam officia iusto blanditiis laborum.', 1, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(38, 11, 14, 'Quisquam enim molestias fugit exercitationem possimus est.', 'Fugit eum voluptatibus sit unde vitae.', 0, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(39, 4, 14, 'Labore enim culpa.', 'Ut aliquam aut ut et velit neque. Dolore nulla cum dolorem doloribus et qui temporibus voluptas. Et deserunt vel nisi repellendus harum molestiae rem.', 0, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(40, 20, 17, 'Neque eius.', 'Nam sed rerum consectetur unde. Culpa sed dolorum nulla accusamus quia et minus aliquid.', 0, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(41, 25, 12, 'Molestiae vero molestiae est nisi.', 'Adipisci corrupti sit quos harum at repellendus. Amet sunt sed quia blanditiis officiis optio dolorum.', 0, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(42, 6, 2, 'Voluptas quas libero quia.', 'Rerum velit omnis accusamus minima sunt. Consectetur illum nobis illo rerum.', 1, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(43, 20, 4, 'Dolorem laboriosam sed.', 'Possimus tempore libero architecto et quaerat. Doloremque molestiae impedit minus vero vel. Et quibusdam sapiente velit nam aut.', 0, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(44, 22, 21, 'Consequatur rem molestiae.', 'Molestias nisi deleniti quia molestiae. Fugit soluta nihil nulla saepe dolorem quo nihil velit. Veritatis et laborum non cum id molestias.', 0, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(45, 11, 11, 'Id et.', 'Et distinctio amet eaque harum. Repudiandae voluptas tempore amet quod. Deleniti repellat repudiandae voluptatum. Sint non qui quam velit nesciunt quo sed.', 0, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(46, 30, 7, 'Eum corrupti.', 'Voluptate eius possimus voluptatum quod recusandae eveniet. Sint illo porro voluptates voluptatem impedit.', 0, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(47, 20, 27, 'Cumque aut dolorum ea sunt.', 'Eum atque omnis exercitationem ullam. Iure a itaque et tenetur eos.', 0, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(48, 24, 13, 'Delectus fuga.', 'Recusandae repellat deleniti dolorem placeat illum qui.', 0, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(49, 10, 13, 'At voluptatibus neque.', 'Quo sint optio a eos esse. Praesentium perferendis nulla et qui nulla rem porro dolorum. Tempore quibusdam magnam aut debitis ut aliquam blanditiis.', 1, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(50, 24, 1, 'Omnis.', 'Ea voluptatem nobis error sequi quisquam. Architecto tempora autem fugit veritatis doloribus qui molestiae. Inventore doloremque est tempore eos. Numquam esse dolores laboriosam voluptas recusandae nemo. Maxime provident eveniet fugiat porro dolore asperiores voluptas.', 1, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(51, 4, 23, 'In nihil.', 'Iure odit sint quod ea.', 0, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(52, 24, 23, 'Ea.', 'Voluptatem eligendi iusto totam vitae omnis.', 1, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(53, 24, 18, 'Esse labore optio.', 'Dolor debitis hic fugit praesentium. Facere voluptatum a mollitia eius provident quia vel.', 0, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(54, 17, 12, 'Eius.', 'Minima est totam rem autem aliquam iusto. Laudantium qui sint iusto explicabo consequuntur est consequatur inventore. Aut adipisci vel quo quia nulla quos. Et molestiae provident qui repudiandae nam praesentium similique.', 0, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(55, 2, 22, 'Nobis provident enim sequi.', 'Distinctio molestiae ad et iusto. Error mollitia qui reprehenderit quisquam architecto culpa et. Perferendis error eos quo similique.', 0, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(56, 24, 20, 'Ex et quibusdam.', 'Sunt culpa velit quibusdam placeat dolor. Et cum est dolorem autem sit nisi. Id eos doloremque quaerat dolores dolorem.', 0, '2014-10-29 05:35:06', '2014-10-29 05:35:06'),
(57, 21, 26, 'Distinctio eum porro impedit facilis illum.', 'Consequatur sed mollitia tempore iure corrupti est. Consequuntur aut consequatur nisi facere aut. Minus autem eos eum porro earum et doloribus.', 1, '2014-10-29 05:35:07', '2014-10-29 05:35:07'),
(58, 8, 11, 'Aut enim et.', 'Velit ipsam vero nam dolores ducimus eum corporis doloremque. Quia repellat itaque aut voluptatum. Perspiciatis ut omnis soluta officia. Iure autem asperiores placeat consectetur.', 0, '2014-10-29 05:35:07', '2014-10-29 05:35:07'),
(59, 14, 23, 'Eaque ut in sit.', 'Voluptate temporibus esse libero iusto et. Occaecati modi id nihil. Vero consequatur ut dolores est molestias eligendi.', 1, '2014-10-29 05:35:07', '2014-10-29 05:35:07'),
(60, 22, 6, 'Voluptatem autem voluptas velit tenetur.', 'Nihil eum quas mollitia natus est quia. Repudiandae in dignissimos aut officiis laboriosam a.', 0, '2014-10-29 05:35:07', '2014-10-29 05:35:07'),
(61, 3, 6, 'Perspiciatis corporis.', 'Aut ipsa neque aut aliquam aut assumenda aut. Natus rerum molestiae quisquam suscipit est deleniti.', 0, '2014-10-29 05:35:07', '2014-10-29 05:35:07'),
(62, 29, 28, 'Et quaerat dolorem fugit et.', 'Odit vel quod facilis eligendi dolores. Optio laborum ab omnis cupiditate aliquid rerum deleniti. Non et voluptas ut molestias illo.', 1, '2014-10-29 05:35:07', '2014-10-29 05:35:07'),
(63, 10, 28, 'Quia.', 'At dicta voluptatem magni veritatis est eum. Laborum itaque nisi nam consequatur inventore. Provident perspiciatis sed possimus et tempora commodi aut. Expedita qui maiores earum quod blanditiis.', 0, '2014-10-29 05:35:07', '2014-10-29 05:35:07'),
(64, 20, 9, 'Ut velit occaecati.', 'Ab ullam officia ipsam ducimus repellat hic qui voluptatum. Quia sunt debitis et architecto incidunt rerum.', 0, '2014-10-29 05:35:07', '2014-10-29 05:35:07'),
(65, 28, 20, 'Recusandae aut suscipit.', 'Odio saepe sint cupiditate nihil aperiam sapiente quia quia. Voluptatem est magnam et dolor esse. Rerum rerum magnam quas dicta quaerat minima voluptas.', 1, '2014-10-29 05:35:07', '2014-10-29 05:35:07'),
(66, 19, 2, 'Veritatis sapiente quaerat sunt quo molestiae.', 'Eius adipisci ipsam quia et itaque fuga ut. A est vero minima odit. Cupiditate molestias voluptatem velit distinctio consequatur explicabo ipsum libero.', 0, '2014-10-29 05:35:07', '2014-10-29 05:35:07'),
(67, 20, 5, 'Molestiae ut suscipit.', 'Incidunt labore quia in nobis perferendis dolorum aliquam. Ut et veritatis omnis nostrum consectetur ea sequi. Fugiat aut distinctio tempora fuga ducimus in dolorem molestiae. Dicta culpa maiores maxime fuga.', 1, '2014-10-29 05:35:07', '2014-10-29 05:35:07'),
(68, 17, 30, 'Quidem doloribus.', 'Velit fuga totam sit quae. Reprehenderit illo sed aliquam qui mollitia saepe. Quia ipsum necessitatibus voluptas ut quo est ut.', 0, '2014-10-29 05:35:07', '2014-10-29 05:35:07'),
(69, 8, 6, 'Animi omnis et.', 'Aliquid qui voluptatem fugiat et sed deleniti. Quis cupiditate magni explicabo consectetur incidunt suscipit corrupti. Totam sed dolorem quia ratione aut mollitia. Pariatur quod voluptatum et distinctio.', 0, '2014-10-29 05:35:07', '2014-10-29 05:35:07'),
(70, 8, 25, 'Ab in sit quas.', 'Consequatur dicta quibusdam qui. Fugit occaecati illo alias odio.', 0, '2014-10-29 05:35:07', '2014-10-29 05:35:07'),
(71, 15, 15, 'Qui et libero ipsum consequuntur officiis ipsa.', 'Dignissimos laudantium labore quia dicta est quae quod. Rerum modi nam aperiam asperiores perferendis et.', 0, '2014-10-29 05:35:07', '2014-10-29 05:35:07'),
(72, 13, 9, 'Sunt numquam adipisci voluptatem dolore labore.', 'Id qui beatae aut ducimus temporibus. Est qui optio accusantium aut pariatur quis.', 0, '2014-10-29 05:35:07', '2014-10-29 05:35:07'),
(73, 2, 25, 'Et sunt doloribus.', 'Ut quo soluta minima eligendi. Ut quia consequatur dolores qui voluptatum quia tenetur sed.', 0, '2014-10-29 05:35:07', '2014-10-29 05:35:07'),
(74, 26, 5, 'Quia distinctio.', 'Vero ipsa est ut totam.', 0, '2014-10-29 05:35:07', '2014-10-29 05:35:07'),
(75, 23, 28, 'Ipsum ipsum assumenda eius.', 'Praesentium aut non hic.', 0, '2014-10-29 05:35:07', '2014-10-29 05:35:07'),
(76, 8, 5, 'Adipisci quam blanditiis praesentium eveniet at.', 'Amet dolor qui officiis quibusdam nesciunt possimus. Praesentium suscipit exercitationem nihil eaque fugiat alias.', 0, '2014-10-29 05:35:07', '2014-10-29 05:35:07'),
(77, 10, 16, 'Tempora eius deserunt.', 'Porro animi voluptatem minima vero occaecati consequatur ipsa aliquam. Ab nam qui facilis rerum itaque possimus.', 1, '2014-10-29 05:35:07', '2014-10-29 05:35:07'),
(78, 13, 3, 'Est libero.', 'Velit ut voluptatem porro reiciendis voluptas delectus fugiat at. Et qui tempore tempora facere dolores.', 0, '2014-10-29 05:35:07', '2014-10-29 05:35:07'),
(79, 15, 13, 'Hic et id et unde deserunt maiores.', 'Dicta alias assumenda itaque numquam. Libero velit quod qui fugiat.', 1, '2014-10-29 05:35:07', '2014-10-29 05:35:07'),
(80, 2, 20, 'Nemo iusto sint laudantium commodi.', 'Dolores cupiditate inventore harum ullam tempora rerum. Rerum ea repellendus rerum molestias. Voluptatem soluta atque a id.', 0, '2014-10-29 05:35:07', '2014-10-29 05:35:07'),
(81, 2, 11, 'Est nihil sint assumenda quam.', 'Velit accusamus sint dicta nisi quia. Voluptatum earum odio dolorum a occaecati enim placeat.', 0, '2014-10-29 05:35:07', '2014-10-29 05:35:07'),
(82, 29, 19, 'Voluptatem.', 'Sequi alias nobis reprehenderit amet atque. Rerum minima soluta quo aperiam aut saepe voluptatum culpa.', 1, '2014-10-29 05:35:07', '2014-10-29 05:35:07'),
(83, 22, 2, 'Non et.', 'Accusantium voluptas vitae placeat. Recusandae necessitatibus aut deleniti aliquid.', 1, '2014-10-29 05:35:07', '2014-10-29 05:35:07'),
(84, 25, 22, 'Et voluptatibus sunt facilis autem illum vel.', 'Magnam architecto quaerat vel non alias deleniti sed.', 1, '2014-10-29 05:35:08', '2014-10-29 05:35:08'),
(85, 8, 8, 'Ex ipsa tempora asperiores.', 'Corporis veritatis earum debitis sed quasi. Voluptatem est magni incidunt sed. Et aut autem voluptatem dignissimos non ipsam.', 0, '2014-10-29 05:35:08', '2014-10-29 05:35:08'),
(86, 14, 23, 'Labore quis ut consectetur.', 'Reprehenderit laborum magni corrupti esse quis in molestias.', 1, '2014-10-29 05:35:08', '2014-10-29 05:35:08'),
(87, 12, 23, 'Ea veniam veniam.', 'Sit voluptatibus tempore harum rerum omnis laudantium alias. Quibusdam eos ipsam est laboriosam atque dignissimos. Distinctio mollitia vel dolor sed magnam et maiores.', 1, '2014-10-29 05:35:08', '2014-10-29 05:35:08'),
(88, 17, 12, 'Nisi magnam.', 'Facilis voluptas reiciendis aut perspiciatis vitae ut ratione ut.', 0, '2014-10-29 05:35:08', '2014-10-29 05:35:08'),
(89, 28, 8, 'Placeat dolores.', 'Quis illum tempora ut minima quisquam labore corrupti. Officia dolorem enim tempora voluptatem quae aut in.', 1, '2014-10-29 05:35:08', '2014-10-29 05:35:08'),
(90, 28, 14, 'Quis atque.', 'Ratione perferendis non molestias recusandae eligendi qui qui error.', 1, '2014-10-29 05:35:09', '2014-10-29 05:35:09'),
(91, 17, 17, 'At sunt tempora.', 'Laborum odio qui iusto a quis laudantium. Voluptatem quae fuga quibusdam alias. Est praesentium sint dolor est odit praesentium. Fugit ex quam sint aut cupiditate dolorem.', 0, '2014-10-29 05:35:09', '2014-10-29 05:35:09'),
(92, 8, 20, 'Ut.', 'Hic sapiente voluptas quia nostrum totam id voluptas. Autem qui qui dolorem iure. Voluptas sed dolor tempora quia architecto impedit quia.', 0, '2014-10-29 05:35:09', '2014-10-29 05:35:09'),
(93, 2, 11, 'Soluta eaque.', 'Labore sit soluta autem perferendis.', 0, '2014-10-29 05:35:09', '2014-10-29 05:35:09'),
(94, 11, 23, 'Aliquid.', 'Quia non praesentium aut.', 0, '2014-10-29 05:35:09', '2014-10-29 05:35:09'),
(95, 5, 14, 'Est.', 'Impedit aut molestiae et. Et facere ratione eum ut sit.', 0, '2014-10-29 05:35:09', '2014-10-29 05:35:09'),
(96, 29, 16, 'Natus in provident laboriosam nulla.', 'Omnis vitae qui harum dolorem. Quasi nesciunt dolorum dolorem repudiandae soluta ab.', 1, '2014-10-29 05:35:09', '2014-10-29 05:35:09'),
(97, 20, 17, 'Accusantium corporis exercitationem.', 'Eos ut et sint tempora rerum. Praesentium quisquam dolor optio.', 0, '2014-10-29 05:35:09', '2014-10-29 05:35:09'),
(98, 23, 20, 'Voluptate vero non laudantium odit in.', 'Ut quas numquam dolores quibusdam et aperiam. Amet rerum aperiam sequi possimus adipisci et voluptatem. Et rerum quis aut maiores ad molestias et rerum. Molestiae debitis illo perferendis est qui illo.', 0, '2014-10-29 05:35:09', '2014-10-29 05:35:09'),
(99, 8, 14, 'Totam laudantium consequatur.', 'Facilis recusandae iusto sit vero veniam repudiandae. Atque quos et non fuga eaque iste id. Dignissimos ex itaque possimus eum aut aut quaerat fugit.', 0, '2014-10-29 05:35:09', '2014-10-29 05:35:09'),
(100, 18, 29, 'Qui veritatis.', 'Quasi cumque omnis quia ullam tempore.', 0, '2014-10-29 05:35:09', '2014-10-29 05:35:09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_24_190937_create_users_table', 1),
('2014_10_25_001019_create_companies_table', 1),
('2014_10_25_001230_create_properties_table', 1),
('2014_10_25_001716_create_messages_table', 1),
('2014_10_25_005814_create_tenants_table', 1),
('2014_10_25_040711_create_managers_table', 1),
('2014_10_28_073705_create_payment_methods_table', 1),
('2014_10_28_073732_create_payment_transactions_table', 1),
('2014_10_28_073806_create_payment_schedule_table', 1),
('2014_10_28_074342_create_notifications_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE IF NOT EXISTS `payment_methods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `friendly_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `card_holder_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `card_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `expiration_date` date NOT NULL,
  `cvv` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payment_schedule`
--

CREATE TABLE IF NOT EXISTS `payment_schedule` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `payment_method` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `recurring` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payment_transactions`
--

CREATE TABLE IF NOT EXISTS `payment_transactions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE IF NOT EXISTS `properties` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `properties_company_id_foreign` (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `company_id`, `user_id`, `name`, `address`, `city`, `province`, `postal_code`, `country`, `created_at`, `updated_at`) VALUES
(1, 17, 27, 'Iure voluptate.', '999 Arturo Lakes\nLake Hiram, OR 17924-3443', 'South Lucas', 'perferendis', '60788-7302', 'Libyan Arab Jamahiriya', '2014-10-29 05:35:03', '2014-10-29 05:35:03'),
(2, 23, 20, 'Enim inventore dolores laudantium.', '9665 Jarrell Lock Suite 856\nKeelyside, NJ 60572-6024', 'Port Avisshire', 'et', '37356', 'Saint Barthelemy', '2014-10-29 05:35:03', '2014-10-29 05:35:03'),
(3, 6, 21, 'Vel deleniti.', '728 Schamberger Fort\nHollieborough, NY 37940', 'Gerlachton', 'consequuntur', '92448', 'Korea', '2014-10-29 05:35:03', '2014-10-29 05:35:03'),
(4, 14, 23, 'Atque temporibus.', '943 Faustino Wall\nPort Elijahview, NH 54515-4303', 'Laishaview', 'corporis', '83607-3343', 'Norfolk Island', '2014-10-29 05:35:03', '2014-10-29 05:35:03'),
(5, 5, 1, 'Ipsum sint vitae consequatur.', '23021 Harber Harbors\nFreedashire, PA 97170', 'Port Murlport', 'veritatis', '81051', 'Cameroon', '2014-10-29 05:35:03', '2014-10-29 05:35:03'),
(6, 9, 14, 'Sit tenetur eveniet cum.', '825 Angelina Green\nNew Milofort, FL 97346-1262', 'Port Jeanshire', 'labore', '97219-2137', 'India', '2014-10-29 05:35:03', '2014-10-29 05:35:03'),
(7, 25, 18, 'Eum aut.', '21332 Asa Shoals\nLake Sammy, WA 46047', 'Lakinport', 'ex', '85110', 'Niue', '2014-10-29 05:35:03', '2014-10-29 05:35:03'),
(8, 13, 24, 'Id quas quo iure.', '355 Ludie Rapids\nJosephinemouth, UT 28460', 'O''Connerberg', 'vel', '29505', 'Philippines', '2014-10-29 05:35:03', '2014-10-29 05:35:03'),
(9, 12, 14, 'Quis.', '778 Thompson Heights Suite 533\nBreitenberghaven, WA 73498', 'Port Chayaberg', 'et', '88396', 'Grenada', '2014-10-29 05:35:03', '2014-10-29 05:35:03'),
(10, 8, 28, 'Deleniti omnis sequi.', '28046 Stanford Canyon Suite 632\nSouth Oceane, AL 00844-7902', 'Lake Josephchester', 'error', '47063-8943', 'Sudan', '2014-10-29 05:35:03', '2014-10-29 05:35:03'),
(11, 27, 8, 'Dolorem repellat sapiente quis.', '47273 Lindgren Ranch Suite 612\nSouth Jordistad, NE 28195-3010', 'South Andres', 'id', '44530', 'Nigeria', '2014-10-29 05:35:03', '2014-10-29 05:35:03'),
(12, 13, 15, 'Fuga.', '531 Fritsch Mill Apt. 448\nWolffmouth, IA 84530-2014', 'East Harmonychester', 'aut', '70409-5879', 'Libyan Arab Jamahiriya', '2014-10-29 05:35:03', '2014-10-29 05:35:03'),
(13, 21, 15, 'Ea voluptate sed voluptas voluptatem error libero.', '0475 Wayne Lock\nSchultzshire, DC 66257-4474', 'Port Brianne', 'omnis', '50915', 'Uganda', '2014-10-29 05:35:03', '2014-10-29 05:35:03'),
(14, 6, 27, 'Qui tempora sunt.', '469 Hodkiewicz Lake Suite 444\nLednerview, MO 04197', 'West Ritachester', 'magnam', '40620-7499', 'Namibia', '2014-10-29 05:35:03', '2014-10-29 05:35:03'),
(15, 16, 23, 'Veniam tempora.', '158 Kuhlman Vista Suite 112\nHarrisonmouth, KS 90738-8788', 'East Delphaview', 'qui', '75036-9054', 'New Zealand', '2014-10-29 05:35:04', '2014-10-29 05:35:04'),
(16, 20, 14, 'Eos et eum.', '839 Konopelski Station\nWest Heavenmouth, HI 74812', 'Macejkovicborough', 'similique', '90833', 'Kenya', '2014-10-29 05:35:04', '2014-10-29 05:35:04'),
(17, 29, 28, 'Quo officiis.', '7827 Adams Knoll Apt. 754\nPort Cindyfort, NE 84357-9629', 'East Dawn', 'rerum', '75624', 'United States Minor Outlying Islands', '2014-10-29 05:35:04', '2014-10-29 05:35:04'),
(18, 3, 24, 'Facere sit necessitatibus voluptatum est.', '01281 Arielle Rapid Suite 758\nGutkowskishire, PA 84831-8896', 'Lake Myrtisview', 'aliquam', '12770', 'Martinique', '2014-10-29 05:35:04', '2014-10-29 05:35:04'),
(19, 13, 17, 'Molestias quasi rem quos est.', '208 Keshaun Forge Suite 210\nEast Allie, CT 55650', 'East Davin', 'fugit', '27825-3754', 'Montserrat', '2014-10-29 05:35:04', '2014-10-29 05:35:04'),
(20, 30, 27, 'Corporis error numquam excepturi quos beatae maiores.', '4830 Curt Plain\nWuckertside, NH 37901-6821', 'Port Colt', 'architecto', '40820-7349', 'Cote d''Ivoire', '2014-10-29 05:35:04', '2014-10-29 05:35:04'),
(21, 18, 30, 'Sed molestias perferendis quia.', '450 Beier Valley\nHammestown, KS 87271', 'North Garnett', 'aut', '49310-3443', 'Falkland Islands (Malvinas)', '2014-10-29 05:35:04', '2014-10-29 05:35:04'),
(22, 16, 16, 'Quia et.', '42914 Halvorson Run Apt. 587\nBrandtside, ID 03730-8634', 'New Luciusmouth', 'ut', '75452', 'Singapore', '2014-10-29 05:35:04', '2014-10-29 05:35:04'),
(23, 20, 22, 'Provident natus et mollitia provident.', '16062 Dixie Route\nClovisport, NJ 84519', 'Quigleymouth', 'minus', '71895', 'Belarus', '2014-10-29 05:35:04', '2014-10-29 05:35:04'),
(24, 21, 13, 'Voluptas.', '070 Malinda Unions\nKeelingberg, WV 54356-2985', 'North Evelynfort', 'nulla', '78425-6141', 'El Salvador', '2014-10-29 05:35:04', '2014-10-29 05:35:04'),
(25, 16, 16, 'Corporis.', '520 Schaefer Ways\nLaylamouth, AR 07384', 'East Vince', 'molestiae', '19617', 'Hong Kong', '2014-10-29 05:35:04', '2014-10-29 05:35:04'),
(26, 16, 16, 'Reprehenderit provident molestias nulla molestiae.', '85692 Ebert Pike Apt. 959\nHallieview, AR 94000-4734', 'Zulachester', 'quis', '91411', 'South Africa', '2014-10-29 05:35:04', '2014-10-29 05:35:04'),
(27, 30, 24, 'Non beatae recusandae.', '45148 Chelsey Lane\nCrooksshire, RI 48336-9609', 'Wiegandshire', 'inventore', '72446', 'United States Virgin Islands', '2014-10-29 05:35:04', '2014-10-29 05:35:04'),
(28, 15, 7, 'Quia velit et doloremque magnam minima.', '377 Neva Prairie Suite 199\nWest Dasiamouth, TN 94119', 'Bettyland', 'nihil', '62496', 'Nigeria', '2014-10-29 05:35:04', '2014-10-29 05:35:04'),
(29, 4, 24, 'Et temporibus harum non et.', '15989 Eryn Squares Suite 565\nDanielaside, NM 67838', 'Lake Hazelstad', 'assumenda', '82040-7705', 'Malaysia', '2014-10-29 05:35:04', '2014-10-29 05:35:04'),
(30, 18, 20, 'Error nam aut soluta maiores nobis.', '20410 Weber Drive Suite 895\nVandervortfurt, AK 19541-9253', 'Johnpaultown', 'eligendi', '62258', 'Eritrea', '2014-10-29 05:35:04', '2014-10-29 05:35:04');

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE IF NOT EXISTS `tenants` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `unit_number` int(11) NOT NULL,
  `property` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `recurring_payment` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `tenants_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`id`, `user_id`, `first_name`, `last_name`, `phone_number`, `unit_number`, `property`, `user_status`, `active`, `recurring_payment`, `created_at`, `updated_at`) VALUES
(1, 1, 'Julien', 'Strosin', '992-692-5813x88881', 4, 'Modi libero nulla illo quidem laudantium.', 'cool', 1, 111, '2014-10-29 05:35:01', '2014-10-29 05:35:01'),
(2, 2, 'Rylee', 'Wolff', '(764)239-1309', 1, '', 'cool', 0, 111, '2014-10-29 05:35:01', '2014-10-29 05:35:01'),
(3, 3, 'Stanton', 'Reilly', '1-064-545-0190x076', 5, 'Excepturi repudiandae quia accusamus et.', 'cool', 1, 111, '2014-10-29 05:35:01', '2014-10-29 05:35:01'),
(4, 4, 'Nayeli', 'Veum', '1-038-016-2647', 2, 'Ut et.', 'cool', 0, 111, '2014-10-29 05:35:01', '2014-10-29 05:35:01'),
(5, 5, 'Adrien', 'Wyman', '585.158.1395x344', 2, 'Vero inventore aut architecto qui.', 'cool', 1, 111, '2014-10-29 05:35:01', '2014-10-29 05:35:01'),
(6, 6, 'Vida', 'Hammes', '240-421-5035x631', 4, '', 'cool', 1, 111, '2014-10-29 05:35:01', '2014-10-29 05:35:01'),
(7, 7, 'Chester', 'Wilderman', '1-215-024-2492', 7, 'Voluptatum omnis voluptatem aliquid deleniti qui.', 'cool', 0, 111, '2014-10-29 05:35:01', '2014-10-29 05:35:01'),
(8, 8, 'Jevon', 'Tromp', '1-562-296-6104', 9, 'Repellat cumque.', 'cool', 0, 111, '2014-10-29 05:35:01', '2014-10-29 05:35:01'),
(9, 9, 'Theresia', 'Hahn', '(695)131-5467x2381', 2, 'Ex necessitatibus dicta numquam.', 'cool', 1, 111, '2014-10-29 05:35:01', '2014-10-29 05:35:01'),
(10, 10, 'Zachary', 'Boyer', '1-129-367-8403', 6, 'Eius esse neque at.', 'cool', 1, 111, '2014-10-29 05:35:01', '2014-10-29 05:35:01'),
(11, 11, 'Ellis', 'Beatty', '829.788.0371', 4, '', 'cool', 1, 111, '2014-10-29 05:35:01', '2014-10-29 05:35:01'),
(12, 12, 'Rusty', 'Zulauf', '1-951-028-2041', 7, '', 'cool', 1, 111, '2014-10-29 05:35:01', '2014-10-29 05:35:01'),
(13, 13, 'Abbigail', 'Carter', '(607)625-1924', 1, 'Beatae aut fugit nostrum.', 'cool', 0, 111, '2014-10-29 05:35:01', '2014-10-29 05:35:01'),
(14, 14, 'Maureen', 'D''Amore', '046-393-1968x03067', 7, 'Beatae.', 'cool', 0, 111, '2014-10-29 05:35:01', '2014-10-29 05:35:01'),
(15, 15, 'Lonnie', 'Kovacek', '(327)406-7842x7147', 8, 'Rem.', 'cool', 1, 111, '2014-10-29 05:35:01', '2014-10-29 05:35:01'),
(16, 16, 'Wilfredo', 'Macejkovic', '+78(3)3548461158', 8, 'Qui et sed voluptatem eveniet.', 'cool', 1, 111, '2014-10-29 05:35:02', '2014-10-29 05:35:02'),
(17, 17, 'Catalina', 'Dooley', '+32(0)9234843944', 5, 'Qui aliquid molestias.', 'cool', 0, 111, '2014-10-29 05:35:02', '2014-10-29 05:35:02'),
(18, 18, 'Mae', 'Swift', '1-623-512-8770x021', 5, 'Dolores similique possimus est.', 'cool', 0, 111, '2014-10-29 05:35:02', '2014-10-29 05:35:02'),
(19, 19, 'Kari', 'Rowe', '(121)270-6536x1847', 5, 'Quisquam pariatur dicta placeat ipsum.', 'cool', 1, 111, '2014-10-29 05:35:02', '2014-10-29 05:35:02'),
(20, 20, 'Hosea', 'Rogahn', '663-122-8869x43135', 9, 'Tenetur placeat.', 'cool', 1, 111, '2014-10-29 05:35:02', '2014-10-29 05:35:02'),
(21, 21, 'Loy', 'Runte', '(399)509-0362x064', 8, 'Accusamus quibusdam numquam.', 'cool', 0, 111, '2014-10-29 05:35:02', '2014-10-29 05:35:02'),
(22, 22, 'Beulah', 'Klein', '04689249046', 7, 'Dolores.', 'cool', 0, 111, '2014-10-29 05:35:02', '2014-10-29 05:35:02'),
(23, 23, 'Reba', 'O''Conner', '1-727-803-3735', 9, '', 'cool', 1, 111, '2014-10-29 05:35:02', '2014-10-29 05:35:02'),
(24, 24, 'Maxine', 'Krajcik', '02319805042', 1, 'Aut eos.', 'cool', 0, 111, '2014-10-29 05:35:02', '2014-10-29 05:35:02'),
(25, 25, 'Lon', 'Lehner', '723-926-3165x05345', 7, 'Odio quia suscipit sed veniam eum quas.', 'cool', 1, 111, '2014-10-29 05:35:02', '2014-10-29 05:35:02'),
(26, 26, 'Norris', 'O''Kon', '(667)886-7771', 3, 'Excepturi delectus corrupti sequi fugit.', 'cool', 0, 111, '2014-10-29 05:35:02', '2014-10-29 05:35:02'),
(27, 27, 'Rodger', 'Lehner', '(200)582-4747', 3, 'Quasi.', 'cool', 1, 111, '2014-10-29 05:35:02', '2014-10-29 05:35:02'),
(28, 28, 'Ari', 'Schmidt', '(560)555-6619', 1, 'Aut saepe ipsa.', 'cool', 1, 111, '2014-10-29 05:35:02', '2014-10-29 05:35:02'),
(29, 29, 'Stacy', 'VonRueden', '575-618-1200', 8, 'Mollitia voluptas.', 'cool', 0, 111, '2014-10-29 05:35:02', '2014-10-29 05:35:02'),
(30, 30, 'Nelson', 'Crona', '987-709-6315', 4, 'Doloremque dolorem quasi laudantium quia rerum.', 'cool', 1, 111, '2014-10-29 05:35:02', '2014-10-29 05:35:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=32 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'yichenzhu1337@gmail.com', '$2y$10$TlgtZMJ4h4OU.smV/LQ5ouApHY3AtGWYSIWkI6k19OzEzR2Pedqey', NULL, NULL, '2014-10-29 05:34:58', '2014-10-29 05:34:58'),
(2, 'waelchi.evan@hotmail.com', '$2y$10$surXIl06vltDughFSDJHsOCnV8B5bf8oBiY96iQqc6qDis2nX245i', NULL, NULL, '2014-10-29 05:34:58', '2014-10-29 05:34:58'),
(3, 'chase.witting@medhurstdavis.info', '$2y$10$r7JHhcW9RC.9AVpN27k9YuTMwJolJEEU/g607Q.XQpXnRTR.ygcau', NULL, NULL, '2014-10-29 05:34:58', '2014-10-29 05:34:58'),
(4, 'stanton.hailie@hegmannwisozk.com', '$2y$10$w8tmu28gLqWtX139kLNWE.dxp.c1luDoNkPx6.cEUz2h0W8ECfAJq', NULL, NULL, '2014-10-29 05:34:58', '2014-10-29 05:34:58'),
(5, 'wiegand.ona@gmail.com', '$2y$10$le8WFa8ASGruG5D1emFZz.5T/AN9Z3J3Vzwm88RYNYTUVhM.LVV6K', NULL, NULL, '2014-10-29 05:34:58', '2014-10-29 05:34:58'),
(6, 'ureilly@yahoo.com', '$2y$10$sICNUsF283JAAcHu8NkJQ.1CTguUosm0dcgLq4JkkqXpzCIn.L/KG', NULL, NULL, '2014-10-29 05:34:58', '2014-10-29 05:34:58'),
(7, 'dmetz@dibbertbauch.info', '$2y$10$GeP91pwOds0lUUYxEqf8bO4J.q4TZ6G3yZ0Tsdxkadt7wypTXvmui', NULL, NULL, '2014-10-29 05:34:58', '2014-10-29 05:34:58'),
(8, 'lorenzo14@hotmail.com', '$2y$10$8TwPDiZ3oxs3z7rkC9fp1eW6gCHoXNh1g.ylujOnQaAevZNqeTI.2', NULL, NULL, '2014-10-29 05:34:58', '2014-10-29 05:34:58'),
(9, 'nweissnat@gmail.com', '$2y$10$XiBrRYlPqleLl1fSsIb.xuxxxd07dsM1t82kVN8p9Pm2PaNVlZV3e', NULL, NULL, '2014-10-29 05:34:58', '2014-10-29 05:34:58'),
(10, 'chanel66@weimannrutherford.biz', '$2y$10$uVWDN6Jv9u2txKo5ElPXQe6HYZErUZ3eSuDE3PLY/66pNxN87JH7C', NULL, NULL, '2014-10-29 05:34:59', '2014-10-29 05:34:59'),
(11, 'ahmed.boyle@bergnaum.com', '$2y$10$pGRF9FIqtBqoGaobKBqyxOGZHDAn/b1zD9DFEHvuTnWSwnuh8tsTe', NULL, NULL, '2014-10-29 05:34:59', '2014-10-29 05:34:59'),
(12, 'marks.elmer@gmail.com', '$2y$10$YHH26tLHwbaTUsFgGRU7weQvUM3V1wIQ2igtBvp9qQJtXIsx.b8mu', NULL, NULL, '2014-10-29 05:34:59', '2014-10-29 05:34:59'),
(13, 'mschaden@johnsemmerich.org', '$2y$10$lNAIcr5u/YvWp.hs0NiMpujui9ggGujaqNqB0Wp66iAO8Hmy5Ok2q', NULL, NULL, '2014-10-29 05:34:59', '2014-10-29 05:34:59'),
(14, 'keanu.bernier@yahoo.com', '$2y$10$8MGpAvvnQn4qkv1n84AZ4e2i.29GvR7pbstrrBiBmzVV4zdMGbBsi', NULL, NULL, '2014-10-29 05:34:59', '2014-10-29 05:34:59'),
(15, 'sgrimes@ebert.net', '$2y$10$AS4xtIxOu4mNOD89/yXIFuymB.NyUdHgUWfbk0dHW1EStCz2n2/LS', NULL, NULL, '2014-10-29 05:34:59', '2014-10-29 05:34:59'),
(16, 'qvonrueden@fay.com', '$2y$10$r6rYSK0tyhxifYlPskh8N.tR7uk5PZNwVOmkwz8EZj67FT28QH.hi', NULL, NULL, '2014-10-29 05:34:59', '2014-10-29 05:34:59'),
(17, 'justice.ullrich@gmail.com', '$2y$10$Imu8wrVVHoYy/tyZA1Z0.u9S8LUtGZcioYEW.joBp1Yv3DHRSj.Wu', NULL, NULL, '2014-10-29 05:34:59', '2014-10-29 05:34:59'),
(18, 'schiller.alayna@bradtke.org', '$2y$10$.yY7NWB6baRkHHDmi4KlleSlW60v39rYw9lNyVAZG5piYB7jtKtMm', NULL, NULL, '2014-10-29 05:34:59', '2014-10-29 05:34:59'),
(19, 'qbode@hotmail.com', '$2y$10$BwA.ul3NdIKh.YlDyhT8Hury3hYIduNUHrVfP4CZMEaHMX0v8zhXG', NULL, NULL, '2014-10-29 05:34:59', '2014-10-29 05:34:59'),
(20, 'mariane66@hermann.com', '$2y$10$YQArJug2/q0qCIk6EuTTN.x7oWtNQtS4p4M7fKKt5sRIg4Ej/lUz2', NULL, NULL, '2014-10-29 05:34:59', '2014-10-29 05:34:59'),
(21, 'vpowlowski@veum.com', '$2y$10$0dJ7.Rs42w3sgv9lN8asDufvv4WKmssTE7/eqM1./i4jv542EZLxa', NULL, NULL, '2014-10-29 05:35:00', '2014-10-29 05:35:00'),
(22, 'annamae29@gmail.com', '$2y$10$Sp/K5LJHVSjp1vC4pfTIZ.WhUvmtZgED8HJWcjy.9jXd82Y0VN1i6', NULL, NULL, '2014-10-29 05:35:00', '2014-10-29 05:35:00'),
(23, 'hprice@littel.com', '$2y$10$nnEq80newPK4IlHUY0VFM.AX/fwTTqG4HqFYsQCOUzCXik964dSqK', NULL, NULL, '2014-10-29 05:35:00', '2014-10-29 05:35:00'),
(24, 'arden70@yahoo.com', '$2y$10$eKCzo5xbmQtx2YJQeTsJ2up2Z07C8AUX0btHe4POeQ9oqCxv5vI9y', NULL, NULL, '2014-10-29 05:35:00', '2014-10-29 05:35:00'),
(25, 'wilkinson.david@hotmail.com', '$2y$10$SK0QjpICmKuFO4HrP5MiEe2LFYMqrMlem3xVuWQaAWNCHci6MdnG.', NULL, NULL, '2014-10-29 05:35:00', '2014-10-29 05:35:00'),
(26, 'macejkovic.annetta@satterfield.com', '$2y$10$31TIImvGX8ncGCy2gUXymOtmHYZcHiAOCBjRDctDeD3McevRd96j6', NULL, NULL, '2014-10-29 05:35:00', '2014-10-29 05:35:00'),
(27, 'mitchel.russel@gmail.com', '$2y$10$l3xUZgXlGp20.CJbfIRVpO.ohE0wuLoWfPS86Lacp.xEKGC71.S5G', NULL, NULL, '2014-10-29 05:35:00', '2014-10-29 05:35:00'),
(28, 'swift.devyn@hotmail.com', '$2y$10$b0Kwv4pB5Ef7MRNQuHE7Qu1VzeENTi58KgHhKUcq76QQxNMQnhnp.', NULL, NULL, '2014-10-29 05:35:00', '2014-10-29 05:35:00'),
(29, 'boyle.candelario@hotmail.com', '$2y$10$Eu1Nfu1HbIDRWvd2qYy33OO6BckN/cNC/fT2Mf.BtoKYtSNVQaNeW', NULL, NULL, '2014-10-29 05:35:00', '2014-10-29 05:35:00'),
(30, 'imraz@yahoo.com', '$2y$10$ugKVbq/en5ETQQjn9bH6I.KEzTy6QGDEDlH6YmiPT/OV.0PeT3oIS', NULL, NULL, '2014-10-29 05:35:01', '2014-10-29 05:35:01'),
(31, 'hcollier@cassin.com', '$2y$10$vtfBM0QbcnsqM4IwaUAJ3u/j7gMsUfqUXSXN.EbQzMhsti88QyB2q', NULL, NULL, '2014-10-29 05:35:01', '2014-10-29 05:35:01');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `managers`
--
ALTER TABLE `managers`
  ADD CONSTRAINT `managers_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `managers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `properties_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tenants`
--
ALTER TABLE `tenants`
  ADD CONSTRAINT `tenants_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
