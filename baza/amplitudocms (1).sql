-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2019 at 02:55 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amplitudocms`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_naslov` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `blog_naslov_en` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `blog_datum_unosa` date NOT NULL,
  `blog_ime_autora` varchar(100) CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `blog_vrijeme` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `blog_uvodni_tekst` text CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `blog_uvodni_tekst_en` text CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `blog_glavni_tekst` text CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `blog_glavni_tekst_en` text CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `blog_cover` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_spanish2_ci NOT NULL,
  `blog_alt` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `blog_alt_en` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `blog_tag` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `blog_tag_en` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `blog_status` varchar(30) CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_naslov`, `blog_naslov_en`, `blog_datum_unosa`, `blog_ime_autora`, `blog_vrijeme`, `blog_uvodni_tekst`, `blog_uvodni_tekst_en`, `blog_glavni_tekst`, `blog_glavni_tekst_en`, `blog_cover`, `blog_alt`, `blog_alt_en`, `blog_tag`, `blog_tag_en`, `blog_status`) VALUES
(1, 'Marketing u filmu - Product Placement', 'Marketing u filmu - Product Placement', '2019-03-01', 'ANA VUJADINOVIÄ†', '03/20/2019', 'MarketinÅ¡ki potezi Äesto naruÅ¡avaju samu strukturu filma, ubacujuÄ‡i prozivode gdje im nije mjesto i gdje scenario to ne dozvoljava. U ovoj tvrdnji itekako ima istine, ali, kao i obiÄno, svaka priÄa ima dvije strane.', 'MarketinÅ¡ki potezi Äesto naruÅ¡avaju samu strukturu filma, ubacujuÄ‡i prozivode gdje im nije mjesto i gdje scenario to ne dozvoljava. U ovoj tvrdnji itekako ima istine, ali, kao i obiÄno, svaka priÄa ima dvije strane.', '', '', '46496059_330871457698737_7466176963305013248_n.png', 'marketing', 'marketing', 'maketing', 'marketing', 'aktivan'),
(8, 'Key Account - kljuÄ poslovanja?', 'Key Account - kljuÄ poslovanja?', '2019-03-19', 'JUGOSLAV RADOVIÄ†', '03/20/2019', 'Osnovna uloga Key Account menadÅ¾era u kompaniji jeste izgradnja i njegovanje lojalnih i dugotrajnih odnosa sa svim klijentima i saradnicima. Osoba koja obavlja ovu duÅ¾nost mora biti visprena, snalaÅ¾ljiva i mora imati dobru sposobnost komunikacije sa ljudima.', 'Osnovna uloga Key Account menadÅ¾era u kompaniji jeste izgradnja i njegovanje lojalnih i dugotrajnih odnosa sa svim klijentima i saradnicima. Osoba koja obavlja ovu duÅ¾nost mora biti visprena, snalaÅ¾ljiva i mora imati dobru sposobnost komunikacije sa ljudima.', '', '', '46496059_330871457698737_7466176963305013248_n.png', 'key', 'key', 'key', 'key', 'neaktivan');

-- --------------------------------------------------------

--
-- Table structure for table `karijera`
--

CREATE TABLE `karijera` (
  `karijera_id` int(11) NOT NULL,
  `karijera_naslov` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `karijera_naslov_en` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `karijera_pocetak` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `karijera_kraj` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `karijera_opis` text CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `karijera_opis_en` text CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `karijera_cover` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `karijera_datum_unosa` date NOT NULL,
  `karijera_status` varchar(50) CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karijera`
--

INSERT INTO `karijera` (`karijera_id`, `karijera_naslov`, `karijera_naslov_en`, `karijera_pocetak`, `karijera_kraj`, `karijera_opis`, `karijera_opis_en`, `karijera_cover`, `karijera_datum_unosa`, `karijera_status`) VALUES
(8, 'Senior backend developer', 'Senior backend developer', '12-03-2019', '13-03-2019', 'Zadnjih 6 godina radimo na unapreÄ‘enju i Å¡irenju naÅ¡eg poslovanja u polju inovacija i tehnologija. Za potrebe rada na naÅ¡im velikim projektima koji za cilj imaju izvoz na inostrana trÅ¾iÅ¡ta traÅ¾imo senior backend programera koji Ä‡e svojim znanjem i iskustvom doprinijeti razvoju istih. Osoba Ä‡e raditi na najbitnijim projektima kao Å¡to su www.mojedrvo.me i www.indigoerp.me , i sa dobrom radnom etikom, znanjem i radom Ä‡e imati moguÄ‡nost da napreduje u kratkom roku.', 'Zadnjih 6 godina radimo na unapreÄ‘enju i Å¡irenju naÅ¡eg poslovanja u polju inovacija i tehnologija. Za potrebe rada na naÅ¡im velikim projektima koji za cilj imaju izvoz na inostrana trÅ¾iÅ¡ta traÅ¾imo senior backend programera koji Ä‡e svojim znanjem i iskustvom doprinijeti razvoju istih. Osoba Ä‡e raditi na najbitnijim projektima kao Å¡to su www.mojedrvo.me i www.indigoerp.me , i sa dobrom radnom etikom, znanjem i radom Ä‡e imati moguÄ‡nost da napreduje u kratkom roku.', '46496059_330871457698737_7466176963305013248_n.png', '2019-03-13', 'aktivan'),
(14, 'Agent prodaje', 'Agent prodaje', '03/13/2019', '03/22/2019', 'Amplitudo d.o.o. je moderna i inovativna kompanija koja se bavi razvojem i distribucijom softvera i mobilnih aplikacija, web razvojem i digitalnim marketingom. TraÅ¾imo mladu, ambicioznu, upornu osobu koja Ä‡e raditi direktnu prodaju, koja ima dobre komunikativne i prodajne sposobnosti, vjeÅ¡tine pregovaranja i inicijativnost, kao i prethodno radno iskustvo u prodaji.', 'Amplitudo d.o.o. je moderna i inovativna kompanija koja se bavi razvojem i distribucijom softvera i mobilnih aplikacija, web razvojem i digitalnim marketingom. TraÅ¾imo mladu, ambicioznu, upornu osobu koja Ä‡e raditi direktnu prodaju, koja ima dobre komunikativne i prodajne sposobnosti, vjeÅ¡tine pregovaranja i inicijativnost, kao i prethodno radno iskustvo u prodaji.', '46496059_330871457698737_7466176963305013248_n.png', '0000-00-00', 'neaktivan');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `korisnici_id` int(11) NOT NULL,
  `korisnici_ime_prezime` varchar(50) CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `korisnici_korisnicko_ime` varchar(50) CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `korisnici_lozinka` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `korisnici_pozicija` varchar(100) CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `korisnici_slika` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `korisnici_uloga` varchar(20) CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`korisnici_id`, `korisnici_ime_prezime`, `korisnici_korisnicko_ime`, `korisnici_lozinka`, `korisnici_pozicija`, `korisnici_slika`, `korisnici_uloga`) VALUES
(1, 'Edina Mehmedovic', 'didda', '123', 'Student', '', 'admin'),
(3, 'Nikolina Sekulic', 'inna', 'inna', 'tester', '', 'korisnik');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `proizvodi_id` int(11) NOT NULL,
  `proizvodi_naziv` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `proizvodi_naziv_en` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `proizvodi_datum_unosa` date NOT NULL,
  `proizvodi_opis` text CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `proizvodi_opis_en` text CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `proizvodi_uvodni_tekst` text CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `proizvodi_uvodni_tekst_en` text CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `proizvodi_glavni_tekst` text CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `proizvodi_glavni_tekst_en` text CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `proizvodi_cover` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `proizvodi_uvodna_foto` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `proizvodi_alt` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `proizvodi_alt_en` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL,
  `proizvodi_status` varchar(30) CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`proizvodi_id`, `proizvodi_naziv`, `proizvodi_naziv_en`, `proizvodi_datum_unosa`, `proizvodi_opis`, `proizvodi_opis_en`, `proizvodi_uvodni_tekst`, `proizvodi_uvodni_tekst_en`, `proizvodi_glavni_tekst`, `proizvodi_glavni_tekst_en`, `proizvodi_cover`, `proizvodi_uvodna_foto`, `proizvodi_alt`, `proizvodi_alt_en`, `proizvodi_status`) VALUES
(1, 'Click Attack', 'Click Attack', '2019-03-06', 'Ukoliko razmiÅ¡ljate o tome da vaÅ¡ novac za marketing uloÅ¾ite u bilborde, tv reklamu ili neÅ¡to drugo, osvrnite se oko sebe i izbrojite smartfone. Kada uvidite potencijal mobilnog oglaÅ¡avanja, onda Ä‡e vam biti potreban Click Attack.', 'Ukoliko razmiÅ¡ljate o tome da vaÅ¡ novac za marketing uloÅ¾ite u bilborde, tv reklamu ili neÅ¡to drugo, osvrnite se oko sebe i izbrojite smartfone. Kada uvidite potencijal mobilnog oglaÅ¡avanja, onda Ä‡e vam biti potreban Click Attack.', 'Click Attack je vodeÄ‡a regionalna mobilna mreÅ¾a za oglaÅ¡avanje koja na jednom mjestu spaja oglaÅ¡ivaÄe, agencije, mobilne medije i developere, a kompanija Amplitudo je ekskluzivni partner za Crnu Goru.', 'Click Attack je vodeÄ‡a regionalna mobilna mreÅ¾a za oglaÅ¡avanje koja na jednom mjestu spaja oglaÅ¡ivaÄe, agencije, mobilne medije i developere, a kompanija Amplitudo je ekskluzivni partner za Crnu Goru.', '<p>NaÅ¡ tim vam nudi ciljano dovoÄ‘enje korisnika putem zanimljivih i kreativnih banera, uz plasiranje vaÅ¡eg oglasa na vodeÄ‡e regionalne portale. U ponudi su i interaktivni baneri koji na jako zanimljiv i inovativan naÄin privlaÄe korisnike da posjete vaÅ¡ sajt.</p>', '<p>NaÅ¡ tim vam nudi ciljano dovoÄ‘enje korisnika putem zanimljivih i kreativnih banera, uz plasiranje vaÅ¡eg oglasa na vodeÄ‡e regionalne portale. U ponudi su i interaktivni baneri koji na jako zanimljiv i inovativan naÄin privlaÄe korisnike da posjete vaÅ¡ sajt.</p>', 'tumblr_okz3ux0Llm1vspofpo1_640.jpg', '46496059_330871457698737_7466176963305013248_n.png', 'tumblr', 'tumblr', 'neaktivan'),
(5, 'Google AdWords', 'Google AdWords', '2019-03-19', 'Google AdWords je servis koji omoguÄ‡ava oglaÅ¡avanje putem banera, ciljano dovodeÄ‡i korisnike na vaÅ¡ web sajt. Jedna od prednosti ovog alata je to Å¡to se plaÄ‡a samo po broju klikova na vaÅ¡ baner.', 'Google AdWords je servis koji omoguÄ‡ava oglaÅ¡avanje putem banera, ciljano dovodeÄ‡i korisnike na vaÅ¡ web sajt. Jedna od prednosti ovog alata je to Å¡to se plaÄ‡a samo po broju klikova na vaÅ¡ baner.', 'NaÅ¡ tim, iza kojeg stoji preko 500 uspjeÅ¡nih kampanja, Ä‡e uz pomoÄ‡ ovog servisa omoguÄ‡iti da se vaÅ¡ oglas pojavi na svakom web sajtu koji ima slobodan reklamni prostor i saradnju sa Google-om, kao i na najpopularnijim aplikacijama za mobilne ureÄ‘aje.', 'NaÅ¡ tim, iza kojeg stoji preko 500 uspjeÅ¡nih kampanja, Ä‡e uz pomoÄ‡ ovog servisa omoguÄ‡iti da se vaÅ¡ oglas pojavi na svakom web sajtu koji ima slobodan reklamni prostor i saradnju sa Google-om, kao i na najpopularnijim aplikacijama za mobilne ureÄ‘aje.', '<p>Ovaj servis omoguÄ‡ava i fokusirano tagretiranje u zavisnosti od toga kome Å¾elite da predstavite svoje proizvode. Naime, moguÄ‡e je prilagoditi servis samo korisnicima odreÄ‘enih interesovanja, iz odreÄ‘enih zemalja, kao i ograniÄiti vrijeme trajanja oglaÅ¡avanja i sliÄno. TakoÄ‘e, na Google-u se moÅ¾ete reklamirati i putem search mreÅ¾e, Youtube-a i mobilnih ureÄ‘aja.</p>', '<p>Ovaj servis omoguÄ‡ava i fokusirano tagretiranje u zavisnosti od toga kome Å¾elite da predstavite svoje proizvode. Naime, moguÄ‡e je prilagoditi servis samo korisnicima odreÄ‘enih interesovanja, iz odreÄ‘enih zemalja, kao i ograniÄiti vrijeme trajanja oglaÅ¡avanja i sliÄno. TakoÄ‘e, na Google-u se moÅ¾ete reklamirati i putem search mreÅ¾e, Youtube-a i mobilnih ureÄ‘aja.</p>', '46496059_330871457698737_7466176963305013248_n.png', '46496059_330871457698737_7466176963305013248_n.png', 'peaky blinders', 'pb', 'aktivan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `karijera`
--
ALTER TABLE `karijera`
  ADD PRIMARY KEY (`karijera_id`);

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`korisnici_id`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`proizvodi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `karijera`
--
ALTER TABLE `karijera`
  MODIFY `karijera_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `korisnici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `proizvodi`
--
ALTER TABLE `proizvodi`
  MODIFY `proizvodi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
