-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2019 at 03:52 AM
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
  `blog_naslov` varchar(255) NOT NULL,
  `blog_naslov_en` varchar(255) NOT NULL,
  `blog_datum_unosa` date NOT NULL,
  `blog_ime_autora` varchar(100) NOT NULL,
  `blog_vrijeme` varchar(255) NOT NULL,
  `blog_uvodni_tekst` text NOT NULL,
  `blog_uvodni_tekst_en` text NOT NULL,
  `blog_glavni_tekst` text NOT NULL,
  `blog_glavni_tekst_en` text NOT NULL,
  `blog_cover` varchar(255) NOT NULL,
  `blog_alt` varchar(255) NOT NULL,
  `blog_alt_en` varchar(255) NOT NULL,
  `blog_tag` varchar(255) NOT NULL,
  `blog_tag_en` varchar(255) NOT NULL,
  `blog_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_naslov`, `blog_naslov_en`, `blog_datum_unosa`, `blog_ime_autora`, `blog_vrijeme`, `blog_uvodni_tekst`, `blog_uvodni_tekst_en`, `blog_glavni_tekst`, `blog_glavni_tekst_en`, `blog_cover`, `blog_alt`, `blog_alt_en`, `blog_tag`, `blog_tag_en`, `blog_status`) VALUES
(1, 'Marketing u filmu - Product Placement', '', '2019-03-01', 'Ana Vujadinovic', '2019-03-01', 'Marketinški potezi ?esto narušavaju samu strukturu filma, ubacuju?i prozivode gdje im nije mjesto i gdje scenario to ne dozvoljava. U ovoj tvrdnji itekako ima istine, ali, kao i obi?no, svaka pri?a ima dvije strane.', '', 'Ukoliko pitate filmske stvaraoce, manipulacija sedmom umjetnoš?u u svrhe marketinga je najve?e skrnavljenje iste. Kadar ne postoji da bi plasirao proizvode na tržište, ve? je osnova umjetni?kog dojma filma kao cjeline. Marketinški potezi narušavaju filmsku strukturu, ubacivaju?i prozivode gdje im nije mjesto i gdje scenario to ?esto ne dozvoljava.', '', '-', 'alt', '', 'marketing', '', 'neaktivan');

-- --------------------------------------------------------

--
-- Table structure for table `karijera`
--

CREATE TABLE `karijera` (
  `karijera_id` int(11) NOT NULL,
  `karijera_naslov` varchar(255) NOT NULL,
  `karijera_naslov_en` varchar(255) NOT NULL,
  `karijera_pocetak` varchar(255) NOT NULL,
  `karijera_kraj` varchar(255) NOT NULL,
  `karijera_opis` text NOT NULL,
  `karijera_opis_en` text NOT NULL,
  `karijera_cover` varchar(255) NOT NULL,
  `karijera_datum_unosa` date NOT NULL,
  `karijera_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karijera`
--

INSERT INTO `karijera` (`karijera_id`, `karijera_naslov`, `karijera_naslov_en`, `karijera_pocetak`, `karijera_kraj`, `karijera_opis`, `karijera_opis_en`, `karijera_cover`, `karijera_datum_unosa`, `karijera_status`) VALUES
(8, 'Senior backend developer', 'Senior backend developer', '03-03-2019', '04-04-2019', 'Zadnjih 6 godina radimo na unapre?enju i širenju našeg poslovanja u polju inovacija i tehnologija. Za potrebe rada na našim velikim projektima koji za cilj imaju izvoz na inostrana tržišta tražimo senior backend programera koji ?e svojim znanjem i iskustvom doprinijeti razvoju istih. Osoba ?e raditi na najbitnijim projektima kao što su www.mojedrvo.me i www.indigoerp.me , i sa dobrom radnom etikom, znanjem i radom ?e imati mogu?nost da napreduje u kratkom roku.', 'Zadnjih 6 godina radimo na unapre?enju i širenju našeg poslovanja u polju inovacija i tehnologija. Za potrebe rada na našim velikim projektima koji za cilj imaju izvoz na inostrana tržišta tražimo senior backend programera koji ?e svojim znanjem i iskustvom doprinijeti razvoju istih. Osoba ?e raditi na najbitnijim projektima kao što su www.mojedrvo.me i www.indigoerp.me , i sa dobrom radnom etikom, znanjem i radom ?e imati mogu?nost da napreduje u kratkom roku.', '-', '2019-03-13', 'aktivan');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `korisnici_id` int(11) NOT NULL,
  `korisnici_ime_prezime` varchar(50) NOT NULL,
  `korisnici_korisnicko_ime` varchar(50) NOT NULL,
  `korisnici_lozinka` varchar(255) NOT NULL,
  `korisnici_pozicija` varchar(100) NOT NULL,
  `korisnici_slika` varchar(255) NOT NULL,
  `korisnici_uloga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`korisnici_id`, `korisnici_ime_prezime`, `korisnici_korisnicko_ime`, `korisnici_lozinka`, `korisnici_pozicija`, `korisnici_slika`, `korisnici_uloga`) VALUES
(1, 'Edina Mehmedovic', 'admin', '123', 'CEO', 'aszdfg.jpg', 'admin'),
(3, 'Nikolina Sekulic', 'inna', 'inna', 'CEO', '-', 'korisnik');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `proizvodi_id` int(11) NOT NULL,
  `proizvodi_naziv` varchar(255) NOT NULL,
  `proizvodi_naziv_en` varchar(255) NOT NULL,
  `proizvodi_datum_unosa` date NOT NULL,
  `proizvodi_opis` text NOT NULL,
  `proizvodi_opis_en` text NOT NULL,
  `proizvodi_uvodni_tekst` varchar(255) NOT NULL,
  `proizvodi_uvodni_tekst_en` text NOT NULL,
  `proizvodi_glavni_tekst` text NOT NULL,
  `proizvodi_glavni_tekst_en` text NOT NULL,
  `proizvodi_cover` varchar(255) NOT NULL,
  `proizvodi_uvodna_foto` varchar(255) NOT NULL,
  `proizvodi_alt` varchar(255) NOT NULL,
  `proizvodi_alt_en` varchar(255) NOT NULL,
  `proizvodi_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`proizvodi_id`, `proizvodi_naziv`, `proizvodi_naziv_en`, `proizvodi_datum_unosa`, `proizvodi_opis`, `proizvodi_opis_en`, `proizvodi_uvodni_tekst`, `proizvodi_uvodni_tekst_en`, `proizvodi_glavni_tekst`, `proizvodi_glavni_tekst_en`, `proizvodi_cover`, `proizvodi_uvodna_foto`, `proizvodi_alt`, `proizvodi_alt_en`, `proizvodi_status`) VALUES
(1, 'Google AdWords', '', '2019-03-06', 'Google AdWords je servis koji omogu?ava oglašavanje putem banera, ciljano dovode?i korisnike na vaš web sajt. Jedna od prednosti ovog alata je to što se pla?a samo po broju klikova na vaš baner. ', '', 'Naš tim, iza kojeg stoji preko 500 uspješnih kampanja, ?e uz pomo? ovog servisa omogu?iti da se vaš oglas pojavi na svakom web sajtu koji ima slobodan reklamni prostor i saradnju sa Google-om, kao i na najpopularnijim aplikacijama za mobilne ure?aje.', '', 'Ovaj servis omogu?ava i fokusirano tagretiranje u zavisnosti od toga kome želite da predstavite svoje proizvode. Naime, mogu?e je prilagoditi servis samo korisnicima odre?enih interesovanja, iz odre?enih zemalja, kao i ograni?iti vrijeme trajanja oglašavanja i sli?no. Tako?e, na Google-u se možete reklamirati i putem search mreže, Youtube-a i mobilnih ure?aja.', '', '-', '-', 'alt', '', 'neaktivan');

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
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `karijera`
--
ALTER TABLE `karijera`
  MODIFY `karijera_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `korisnici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `proizvodi`
--
ALTER TABLE `proizvodi`
  MODIFY `proizvodi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
