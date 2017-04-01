-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: localhost
-- Χρόνος δημιουργίας: 24 Ιουν 2015 στις 20:40:37
-- Έκδοση διακομιστή: 5.6.12-log
-- Έκδοση PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Βάση: `db_events`
--
CREATE DATABASE IF NOT EXISTS `db_events` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_events`;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `administrators`
--

CREATE TABLE IF NOT EXISTS `administrators` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Άδειασμα δεδομένων του πίνακα `administrators`
--

INSERT INTO `administrators` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` varchar(100) NOT NULL,
  `onoma` varchar(200) NOT NULL,
  `perigrafi` varchar(6000) NOT NULL,
  `x` float(20,10) NOT NULL,
  `y` float(20,10) NOT NULL,
  `id_page` varchar(100) NOT NULL,
  `image_file` varchar(300) NOT NULL,
  `date_start` datetime NOT NULL,
  `category` varchar(1000) NOT NULL,
  `owner` varchar(2000) NOT NULL,
  `owner_descr` varchar(6000) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_page` (`id_page`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `events`
--

INSERT INTO `events` (`id`, `onoma`, `perigrafi`, `x`, `y`, `id_page`, `image_file`, `date_start`, `category`, `owner`, `owner_descr`) VALUES
('1443463482639059', 'TWERK - the party || 17/6 || @ Sea Through', '*** SEA THROUGH ***\nTwerk - the party \nHosted By : KITAKOS\n----------------------------------------------------------------------------------\nMusic Supervisors : Saradis / Dj Luigi\n--> RnB & TRAP \n--> Indoor - Outdoor Firework Show\n--> CO2 Gun Show\n--> Sensual Dancers\n--> Live Performance by TIM KRIS\n================================================\nEvent Info:\n--> Arrival Time: 23:00\n--> Dress Code: Chic & Glam\n--> Boys & Girls Should Be Balanced\n--> Reservations Attendance Strictly Until 02.00\n--> Covered by patrasevents.gr\n\nSupported by : Genius productions\nDream Team \nFollowers Team\nVice City Stories', 38.3061599731, 21.7779159546, '113176845433307', 'https://scontent.xx.fbcdn.net/hphotos-xfp1/v/t1.0-9/p130x130/10012426_824131520968274_689562664123760717_n.jpg?oh=53cba6ae8197f1cd46b2f86a2726d769&oe=561CF213', '2015-06-17 23:00:00', 'Club', 'Sea Through', 'Unforgettable day & night seaside moments!\ntel. 6945158191 / 6945800157'),
('1613066288970915', 'OPERA CHAOTIQUE', '“BUKOWSKI: ΠΟΙΗΜΑΤΑ ΕΝΟΣ ΠΟΡΝΟΓΕΡΟΥ”\n\nΙστορίες για φθηνά ποτά, ανήθικα θηλυκά, μοναχικές καρδιές και ξεφτισμένα όνειρα. \n\nΕίκοσι χρόνια μετά το θάνατο του κακού παιδιού της διανόησης Charles Bukowski, οι εκκεντρικοί τροβαδούροι του χάους Opera Chaotique παρουσιάζουν τη νέα τους παράσταση με άξονα τον σαγηνευτικά άσωτο βίο του. Με τραγούδια από την καινούργια τους δισκογραφική δουλειά “BUKOWSKI: Poems of a Dirty Old Man”, πειραγμένες διασκευές από Tom Waits μέχρι Tiger Lillies και τις απολαυστικά σουρεαλιστικές ιστορίες τους με πρωταγωνιστές τη Μαρία Μαγδαληνή, το Φάντασμα της Όπερας και τον Μαρκήσιο Ντε Σαντ, οι Opera Chaotique χαρίζουν στο κοινό τους μια απολαυστικά αμαρτωλή μουσική εμπερία.\n\nΜε αναπάντεχα ανατρεπτικό χιούμορ, άκρως σουρεαλιστική φαντασία και εκρηκτικές μουσικές αλχημείες, οι Opera Chaotique έχουν καταφέρει μέσα σε λιγότερο από τρία χρόνια να χαρτογραφηθούν ως ένα απολύτως μοναδικό φαινόμενο του μουσικού στερεώματος. Το ιδιαίτερο αυτό δίδυμο μουσικών αλχημιστών που καταπατά επιδεικτικά τις διαχωριστικές γραμμές ανάμεσα στην όπερα, τη τζαζ, το καμπαρέ και την ποπ, δημιουργηθηκε το 2011 από τον Tenorman (κατά κόσμον Γιώργο Τζιουβάρα) στα φωνητικά και το πιάνο και τον Voodoo Drummer (κατά κοσμον Χρήστο Κουτσογιάννη) στα ντραμς και τα πάσης φύσεως κρουστά. Κι ενώ η γραφειοκρατία της μουσικής βιομηχανίας μάταια πάσχιζε να τους εντάξει σε κάποιο συγκεκριμένο μουσικό είδος, το “ψαγμένο” κοινό της Αθήνας και της επαρχίας τους ξεχώρισε αμέσως για το ιδιαίτερο μουσικό στίγμα, τη μοναδική αισθητική και την σαρωτική σκηνική παρουσία τους. Το ίδιο συνέβη και εκτός συνόρων και το συγκρότημα ήδη αριθμεί πολλές εμφανίσεις σε σημαντικά venues το White Trash του Βερολίνου, το Theaterhaus της Στουτγκάρδης, το Harlem Jazz Club της Βαρκελώνης, το Backstage Club της Αγίας Πετρούπολης και το Secret Garden Party του Ηνωμένου Βασιλείου, ενώ στις δύο δισκογραφικές τους δουλειές συμμετείχαν καλλιτένες όπως ο Bob Brozman, ο Bleine Reininger των Tuxedomoon, ο θρυλικός μπλουζίστας Lousiana Red και ο εκκεντρικός frontman των Tiger Lillies Martyn Jacques.', 0.0000000000, 0.0000000000, '1633453740216528', 'https://scontent.xx.fbcdn.net/hphotos-xtp1/v/t1.0-9/s130x130/11096663_1668296596732242_7355755921950272776_n.jpg?oh=f351a2551848c447844bca1ab51270b6&oe=55F1D7F4', '2015-06-11 10:00:00', 'Performance Art', 'GG Events Patras', ''),
('1616416275264589', 'TWERK vs VICE CITY STORIES || 1/7 || @ Sea Through', '', 38.3061599731, 21.7779159546, '113176845433307', 'https://scontent.xx.fbcdn.net/hphotos-xta1/v/t1.0-9/s130x130/11425201_826367634114221_6060221552442446690_n.jpg?oh=3fb042101e78d9197cf594ef759d0cb1&oe=55E87215', '2015-07-01 23:00:00', 'Club', 'Sea Through', 'Unforgettable day & night seaside moments!\ntel. 6945158191 / 6945800157'),
('1651906995042248', 'Sazman Orkestar', 'Οι Sazman Orkestar είναι ένα ανοιχτό μουσικό σύνολο που εξερευνά μουσικούς δρόμους των Βαλκανίων, έχοντας σαν αφετηρία του την Πάτρα. Από τη Ρουμανία στην Τουρκία και από τη Σερβία στη Βουλγαρία και πάλι πίσω στην Ελλάδα, σαν τσιγγάνικο καραβάνι.\nΟ ήχος του σχήματος αντανακλά αυτή την περιπλάνηση· ένα δυναμικό σύνολο εγχόρδων και κρουστών, πλαισιωμένο από γυναικεία και ανδρικά φωνητικά, σε ένα πάντρεμα τσιγγάνικων και βαλκανικών μελωδιών και ρυθμών, μετατρέπουν με ευκολία τη συναυλία σε πανηγύρι και το πανηγύρι σε συναυλία. Με την τωρινή τους σύνθεση, οι Sazman Orkestar εμφανίστηκαν, την περίοδο 2010 - 2014, σε αρκετές μουσικές σκηνές ανά την Ελλάδα (ενδ.: Άλικο (Αθήνα), Θέατρο Λιθογραφείον (Πάτρα), Κεντρική Πλατεία (Τρίκαλα), Warehouse (Βόλος), Χώρα Τόπος Τεχνών (Λαμία)), καθώς και σε\nδιάφορα φεστιβάλ (ενδ.: Icarus Festival, Ήχοι του Δάσους, Ark Festival Patras).\n\nΟι Sazman είναι οι: Νίνα Καραμολέγκου (φωνή), Κώστας Τσαρούχης (φωνή, κοντραμπάσο),\nΔημήτρης Αναστασίου (βιολί), Χριστίνα Κουκή (σαντούρι), Κώστας Νικολόπουλος\n(ακκορντεόν), Σωτήρης Τσακανίκας (κιθάρες, φωνητικά), Γιάννης Τσεντούρος (κρουστά),\nΧρήστος Παπαναγιώτου (κρουστά) και Τάκης Χρονόπουλος (Μηχ. Ήχου). \nΓενικη Εισοδος : 5€ με μπυρα', 0.0000000000, 0.0000000000, '1633453740216528', 'https://scontent.xx.fbcdn.net/hphotos-xpt1/v/t1.0-9/s130x130/10405345_1675160096045892_8158444621752984781_n.jpg?oh=a674ab31eb02248b3ab713785a4b57a5&oe=561D31A4', '2015-06-28 00:00:00', 'Performance Art', 'GG Events Patras', ''),
('397602337109229', 'SUMMER IN GREECE || @ SEA THROUGH', '*** SEA THROUGH ***\n#Summer #In #Greece\nΗ ΚΑΛΥΤΕΡΗ ΕΛΛΗΝΙΚΗ ΒΡΑΔΙΑ ΤΗΣ ΠΑΤΡΑΣ ΣΤΟ ΟΜΟΡΦΟΤΕΡΟ ΜΑΓΑΖΙ ! ! !', 38.3061599731, 21.7779159546, '113176845433307', 'https://scontent.xx.fbcdn.net/hphotos-xpt1/v/t1.0-9/s130x130/1382121_821938031223848_4057326451111434158_n.jpg?oh=e153c4696b3c053a7316fe1b745ff6fd&oe=562DF03C', '2015-06-30 23:00:00', 'Club', 'Sea Through', 'Unforgettable day & night seaside moments!\ntel. 6945158191 / 6945800157'),
('906477229411890', 'Playmen || 12/6 || ON TOUR || @ Sea Through', 'Οι Playmen είναι ένα δίδυμο μουσικών παραγωγώνDJ, το οποίο αποτελούν ο Παύλος Μανώλης και ο Λευτέρης Ξενάκης,ειδικεύονται στην ηλεκτρονική μουσική και συγκεκριμένα Pop Electro House,θεωρούνται οι καλύτεροι στο είδος τους στην Ελλάδα και αυτή της Παρασκευή έρχονται στο SEA THROUGH να μας το αποδείξουν ! \n--------------------------------------------------------------------------\n\nFaceBook Page : Playmen \nOfficial Site : http://www.playmen.dj \n====================================\nEvent Info:\n--> Arrival Time: 23:00\n--> Dress Code: Chic & Glam\n--> Boys & Girls Should Be Balanced\n--> Reservations Attendance Strictly Until 02.00\n--> Covered by patrasevents.gr \n\n The Most Fascinating Events @ The Best Summer Destination ! ! !\n\n#SEAnightlifeTHROUGHus', 38.3061599731, 21.7779159546, '113176845433307', 'https://scontent.xx.fbcdn.net/hphotos-xtf1/v/t1.0-9/s130x130/11401108_818073608276957_9178210565361358427_n.jpg?oh=9780f44a8e4829d0efbb2b2f665656c4&oe=562BA3F4', '2015-06-12 23:00:00', 'Club', 'Sea Through', 'Unforgettable day & night seaside moments!\ntel. 6945158191 / 6945800157');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` varchar(100) NOT NULL,
  `url` varchar(500) NOT NULL,
  `onoma` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `pages`
--

INSERT INTO `pages` (`id`, `url`, `onoma`) VALUES
('113176845433307', 'https://www.facebook.com/seathrough', 'Sea Through'),
('1633453740216528', 'https://www.facebook.com/pages/GG-Events-Patras/1633453740216528', 'GG Events Patras'),
('186787001370926', 'https://www.facebook.com/pages/Beau-Rivage/186787001370926', 'Beau Rivage');

--
-- Περιορισμοί για άχρηστους πίνακες
--

--
-- Περιορισμοί για πίνακα `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`id_page`) REFERENCES `pages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
