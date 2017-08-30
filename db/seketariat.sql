-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2017 at 02:54 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `seketariat`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
`id` mediumint(8) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
`id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE IF NOT EXISTS `peserta` (
`id_peserta` int(10) NOT NULL,
  `nomor` varchar(10) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `nomor`, `nama`, `created`, `updated`) VALUES
(11, '2341237698', 'Nurlia Nori', '2017-01-11 00:00:00', '0000-00-00 00:00:00'),
(12, '4910235867', 'Dillah', '2017-01-11 00:00:00', '0000-00-00 00:00:00'),
(13, '123465987', 'Abdillah', '2017-01-11 00:00:00', '0000-00-00 00:00:00'),
(14, '12349878', 'Lala', '2017-01-11 00:00:00', '0000-00-00 00:00:00'),
(15, '34234234', 'dsfsdf', '2017-01-11 00:00:00', '0000-00-00 00:00:00'),
(16, '53425345', 'sdfsdfsdf', '2017-01-11 00:00:00', '0000-00-00 00:00:00'),
(17, '76756756', 'sdfsgrtge445', '2017-01-11 00:00:00', '0000-00-00 00:00:00'),
(18, '56456456', 'dertert', '2017-01-11 00:00:00', '0000-00-00 00:00:00'),
(19, '343213423', 'dfsdfsdf', '2017-01-11 00:00:00', '0000-00-00 00:00:00'),
(20, '45353453', 'sadasdfe4', '2017-01-11 00:00:00', '0000-00-00 00:00:00'),
(22, '123546879', 'asdasdjlk', '2017-01-11 00:00:00', '0000-00-00 00:00:00'),
(23, '0123457', 'jktjgrtgjkt', '2017-01-11 00:00:00', '0000-00-00 00:00:00'),
(24, '7856437856', 'hjgfdjkfg fkggfdg', '2017-01-11 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
`testid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`testid`, `name`) VALUES
(1, 'asdweqweqw'),
(2, 'rgevbrve'),
(3, 'ergerverdsvtr'),
(4, 'dfsdfsdf'),
(5, 'asdasd'),
(6, 'asdasderwerw'),
(7, 'frfvbrbrbyr'),
(8, 'yrdbdfbytbrtyb'),
(9, 'dfgdfgunyuyn'),
(10, 'ygkimumui'),
(11, 'kuykyunhnyn'),
(12, 'sadfsgrtbbyb  fgbrtgbtg'),
(13, 'gkdfjgkldfgg'),
(14, 'coba'),
(16, 'dasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `t_bk_nego`
--

CREATE TABLE IF NOT EXISTS `t_bk_nego` (
`id_nego` int(30) NOT NULL,
  `tgl` date NOT NULL,
  `brg_jasa` text NOT NULL,
  `no_spk` int(11) NOT NULL,
  `no_hasil` int(11) NOT NULL,
  `rekanan` text NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_bk_nego`
--

INSERT INTO `t_bk_nego` (`id_nego`, `tgl`, `brg_jasa`, `no_spk`, `no_hasil`, `rekanan`, `ket`) VALUES
(1, '2017-08-09', 'Minyak, Beras, Pokok kebutuhan ceweklah', 1, 1, '2', 'Belum Lunas'),
(2, '2017-08-11', 'Barang berat', 1, 1, 'Kratingdeng', 'minuman'),
(3, '2017-08-23', 'asad', 1212323, 13232, 'wrfewf', 'efewfwf');

-- --------------------------------------------------------

--
-- Table structure for table `t_bk_penerimaan`
--

CREATE TABLE IF NOT EXISTS `t_bk_penerimaan` (
`id_bk_penerimaan` int(20) NOT NULL,
  `tgl` date NOT NULL,
  `brg_yg_dikirim` text NOT NULL,
  `no_spk_pesanan` int(11) NOT NULL,
  `no_berita` int(11) NOT NULL,
  `rekanan` text NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_bk_penerimaan`
--

INSERT INTO `t_bk_penerimaan` (`id_bk_penerimaan`, `tgl`, `brg_yg_dikirim`, `no_spk_pesanan`, `no_berita`, `rekanan`, `ket`) VALUES
(2, '2017-08-09', 'Beras, Gula, Minyak, Gula, Garam', 12, 12, '12', 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `t_bk_pesanan`
--

CREATE TABLE IF NOT EXISTS `t_bk_pesanan` (
`id_pesanan` int(30) NOT NULL,
  `tgl` date NOT NULL,
  `brg_dipesan` varchar(40) NOT NULL,
  `rekanan` text NOT NULL,
  `petunjuk_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_register_sk`
--

CREATE TABLE IF NOT EXISTS `t_register_sk` (
`id` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `no` int(11) NOT NULL,
  `kpd` text NOT NULL,
  `isi_surat` text NOT NULL,
  `no_surat` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_register_sk`
--

INSERT INTO `t_register_sk` (`id`, `tgl`, `no`, `kpd`, `isi_surat`, `no_surat`) VALUES
(1, '2017-08-11', 2, 'i dont know', 'i dont know', 543);

-- --------------------------------------------------------

--
-- Table structure for table `t_reg_kontrak`
--

CREATE TABLE IF NOT EXISTS `t_reg_kontrak` (
`id_kontrak` int(30) NOT NULL,
  `tgl` date NOT NULL,
  `kpd` varchar(30) NOT NULL,
  `isi_surat` varchar(30) NOT NULL,
  `petunjuk` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_surat_keluar`
--

CREATE TABLE IF NOT EXISTS `t_surat_keluar` (
`id_srt_keluar` int(30) NOT NULL,
  `no` int(11) NOT NULL,
  `tgl_surat` date NOT NULL,
  `kepada` text NOT NULL,
  `perihal` text NOT NULL,
  `petunjuk_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_surat_masuk`
--

CREATE TABLE IF NOT EXISTS `t_surat_masuk` (
`id_srt_msk` int(11) NOT NULL,
  `no_srt` int(11) NOT NULL,
  `tgl_surat` date NOT NULL,
  `surat_dari` text NOT NULL,
  `tgl_terima` date NOT NULL,
  `perihal` text NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=286 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_surat_masuk`
--

INSERT INTO `t_surat_masuk` (`id_srt_msk`, `no_srt`, `tgl_surat`, `surat_dari`, `tgl_terima`, `perihal`, `ket`) VALUES
(9, 1, '2016-11-29', 'SEKDA Kab. Kediri 450/1203/418.12/2016', '2017-01-03', 'Undangan perayaan Natal 2016. Jumat 06 Januari 2017 Pukul : 15.00 WIB', 'Kepada Disbudpar\r\nPrioritaskan'),
(10, 2, '2016-12-29', 'Dharma Wanita Persatuan Kab. Kediri B/12/Sekrt/DWP Kab KDR/XII/2016', '2017-01-03', 'Undangan Pleno Kab. Kediri \r\nKamis, 5 Januari 2017\r\nTempat : Pendopo Kab. Kediri \r\nPukul : 08.00 WIB', '-'),
(11, 3, '2017-08-28', 'SEKDA KAB. KEDIRI 005/000/418.09/2017', '2017-01-03', 'Sosialisasi Perhub tentang tambahan perbaikan penghasilan PNS di lingkungan Pemkab Kediri th 2016 dan sosialisasi aplikasi sitamsil berbasis E-Kinerja', 'Kepala Disbudpar\r\nTulis dipapan'),
(12, 4, '2017-08-28', 'SEKDA KAB KEDIRI 005/001/418.09/2017', '2017-01-03', 'Sosialiasi Perhub tentang tambahan perbaikan penghasilan bagi PNS dilingkungan Pemkab Kediri th 2016 & Sosialiasi Aplikasi Sitamsil berbasis E-kinerja', 'Kepala Disbudpar\r\nHadiri bersama bendahara'),
(13, 5, '2017-08-28', 'PANGESTU 09/Set.Cab/C.504/XII/2016', '2017-01-04', 'Pemberitahuan berakhirnya jadwal kegiatan Pangestu', 'Kabid Jakala\r\nBendel'),
(15, 6, '2017-01-03', 'BKD Kab.kediri (800/01/418.64/2017', '2017-01-04', 'penghadapan PNS atas Patarino,S.Hut NIP.19740309 200003 2 002', '*Sdr.keuangan ybs agar menghadapnya\r\n*bendel'),
(16, 7, '2017-01-03', 'BKD Kab.Kediri\r\n800/04/418.64/2017', '2017-01-04', 'salinan dan petikan keputusan bupati kediri pada 30 desember 2016 tentang Plt di lingkungan pemkab kediri', 'Sdr.Kasubag Keuangan \r\n*salinan bendel\r\n*berikan ybs'),
(17, 8, '2017-01-04', 'Ke.Grogol Desa Gambyok (479/009/4892.08/1/2017)', '2017-01-05', 'pelantikan lukis tekstil dalam upaya pelestarian situs panji \r\nhari/tgl : minggu, 8 januari 2017\r\npukul : 08.00 WIB \r\ntempat : situs panji desa gambyok', 'semua kabid ikut hadir'),
(18, 9, '2017-01-03', 'SEKDA Kab.Kediri (451/003/418.12/2017)', '2017-01-05', 'undangan pembinaan mental agama \r\nhari/tgl : senin,09 januari 2017\r\npukul : 07.16 WIB\r\ntempat : bhagawanta bhari', '*kumpulkan\r\n*siapkan daftar absensi'),
(19, 10, '2017-01-05', 'SEKDA Kab.kediri (005/14/418.64/2017)', '2017-01-05', 'jalan sehat \r\nhari/tgl : jumat,6 januari 2017\r\npukul : 05.30 WIB s/d selesai', 'umumkan semua staf'),
(20, 11, '2017-01-05', 'SEKDA Kab.kediri (188/018/418.08/2017)', '2017-01-05', 'pengajuan peraturan bupati/keputusan bupati', 'diteruskan semua bidang'),
(21, 12, '2016-12-22', 'BKD Pemkab Kediri 824/1918/418.64/2016', '2017-01-05', 'Salinan Keputusan Sekretaris Daerah Kab. Kediri No.814/279/418.64 tanggal 15-12-2016 tentang pemindahan PNS dilingkungan Pemkab Kediri a.n. Sdr. Dian Sastra Negara, SPd NIP. 19820114 201001 1 013', '-'),
(22, 13, '2017-01-05', 'Arizqy Hania', '2017-01-05', 'Lamaran Pekerjaan', 'Kepala Disbudpar\r\n*Himpun'),
(23, 14, '2017-01-05', 'Naryoko', '2017-01-05', 'Surat lamaran pekerjaan', 'Kepala Disbudpar\r\n*Himpun'),
(24, 15, '2017-01-04', 'Yodi Febrianto', '2017-01-05', 'Surat lamaran pekerjaan', 'Kepala Dibudpar\r\n*Himpun'),
(25, 16, '2016-12-28', 'GRAVINCI 002/GRV AGRAYA/2016', '2017-01-06', 'Permohonan ijin TIKUM (Titik Kumpul) dan start menuju Kampoeng Anggrek \r\nMinggu, 8 Januari 2017\r\nPukul 07.00 - 09.0 WIB\r\nTempat : Area Sekitar SLG', 'Kabid Pengembangan\r\n*Usahakan tidak mengganggu CFD'),
(26, 17, '2017-01-06', 'PEMKAB KEDIRI 070/06/418.62/2016', '2017-01-06', 'Persetujuan lokasi penelitian', 'Proses lebih lanjut'),
(27, 18, '2017-01-09', 'Febritika Fia Arfianti', '2017-01-09', 'Lamaran pekerjaan', 'Kabid Pengembangan\r\nTanggapan dan Saran'),
(28, 19, '2017-01-06', 'SMK Karya Wates 23/104.21.6/SMK.KRY 1/2017', '2017-01-09', 'Surat Pengantar Siswa PSG', 'Sdr. Kasubag UMPEG \r\n*bimbing dan beri arahan\r\n*alokasikan sesuai kebutuhan'),
(29, 20, '2017-01-04', 'Kec Plosoklaten Kepala Desa Jarak 410/03/418.88/04/2017', '2017-01-09', 'Permohonan pemanfaatan kavling bekas di sumber Ubalan', 'Kabid Pengembangan milik siapa paving itu ?'),
(30, 21, '2017-01-08', 'Suyono', '2017-01-09', 'Lamaran Pekerjaan', 'Kabid Pengembangan tanggapan dan saran'),
(31, 22, '2017-01-09', 'ASPPI DPD JATIM', '2017-01-09', 'Pengiriman Kalender', '-'),
(32, 23, '2017-01-09', 'SEKDA KAB KEDIRI 005/104/418.03/2017', '2017-01-09', 'Rapat Koordinasi pembahasan PKS dengan KPP pratama Pare tentang penyampaian data informasi dan perpajakan', '-'),
(33, 24, '2017-01-09', 'BKD CUP KEDIRI', '2017-01-09', 'Permohonan peserta diklat pemasaran dan promosi Pariwisata th 2017', 'Sdr Kasubag UMPEG \r\nTugaskan Mas Nadlirin'),
(34, 25, '2017-01-04', 'STIKES KARYA HUSADA 05.B/S1KEP/STIKES/KH/1/2017', '2017-01-10', 'Permohonan ijin penggunaan kawasan wisata Ubalan untuk kegiatan simulasi Ds. Disaster Manajemen', 'Kabid Pengembangan\r\nkomunikasikan tiket dibayar di dinas apa bisa P. Zaenal ?\r\nproses lebih lanjut'),
(35, 26, '2017-01-05', 'DISBUDPAR PROV JATIM 431/235/107.91/2017', '2017-01-10', 'Pembentukan tentang penyaji pagelaran seni budaya dan jadwal penampilan di UPT taman budaya JATIM 2017', 'Kabid Kesenian persiapkan dengan sebaik-baiknya'),
(36, 27, '2017-01-09', 'BPD KAB KEDIRI 005/098/418.57/2017', '2017-01-10', 'Undangan rekonsiliasi penerimaan PAD \r\nhari/tanggal : kamis, 12 Januari 2017\r\nPukul 09.00 WIB \r\nTempat ruang bidang pembukuan BAPPEDA', 'Sdr Kasubag UMPEG KEU tugaskan bendahara penerimaan'),
(37, 28, '2017-01-10', 'BANKESBANGPOL 070/08/418.62/2017', '2017-01-10', 'Rekomendasi PKL dari UNP', '-'),
(38, 29, '2017-01-10', 'SEKDA KAB KEDIRI 050/053/418.05/2017', '2017-01-10', 'Permintaan data lelang 2017', 'Kabid Pengembangan siapkan datanya'),
(39, 30, '2017-01-10', 'SEKDA KAB KEDIRI 800/092/418.50/2017', '2017-01-10', 'Kegiatan peningkatan kompetensi SDA pejabat th 2017 mulai tanggal 2 s/d 4 februari 2017 desa bandung', 'Sdr Kasubag UMPEG'),
(40, 31, '2017-01-03', 'KPRI canda bhirawa 518/B5/1/2017', '2017-01-10', 'pemberian bantuan beasiswa prestasi', 'Sdr. kasubag umpeg umumkan ke semua staf KPRI bila ada'),
(41, 32, '2017-01-09', 'CIMB Niaga 001/KMK/XI/2017', '2017-01-11', 'permohonan ijin tempat parkir', '-'),
(42, 33, '2017-01-11', 'Balikpapan', '2017-01-11', 'partisipasi mengikuti pameran balikpapan fair 2017', '-'),
(43, 34, '2016-12-22', 'RENAULT Production 19/RP/XII/16', '2017-01-10', 'permohonan donatur', 'kabid pemasaran \r\nproses lebih lanjut segera'),
(44, 35, '2017-01-10', 'emti gallery kediri', '2017-01-11', 'digital painting exhibition dengan tema "tokoh ulama nusantara" \r\nsabtu 14 januari 2017 pukul 19.00 WIB s/d selesai di EMTI gallery', 'tulis di papan'),
(45, 36, '2017-01-11', 'SEKDA KAB KEDIRI', '2017-01-11', 'undangan rapat koordinasi persiapan jalan santai PKH dalam rangka memperingati HKSN dan hari ibu', 'kepala disbudpar'),
(46, 37, '2016-12-31', 'bupati buleleng 556/999/111/disbudpar/2016', '2017-01-11', 'buleleng expo 2017 dalam rangka peserta kesenian bali xxxix ta 2017 tingkat kabupaten buleleng', 'kabid pemasaran tanggapan dan saran'),
(47, 38, '2017-01-05', 'disbudpar pemrov.jatim 431/235/107.91/2017', '2017-01-11', 'pemberitahuan tentang penyaji pagelaran seni budaya dan jadwal penampilan di UPT taman budaya jatim 2017', 'kabid kesenian persiapkan sebaik-baiknya'),
(48, 39, '2016-12-14', 'walikota balikpapan 503/9511/BPMP2T/2016', '2017-01-11', 'partisipasi mengikuti balikpapan fair 2017', 'kabid pemasaran tanggapan dan saran'),
(49, 40, '2017-01-12', 'PEMKAB KEDIRI SEKDA 005/074/418.07/2017', '2017-01-12', 'gladi bersih upacara pada 17 januari 2017 pukul 08.00 WIB', 'kabid kesenian siapkan dan hadiri acaranya'),
(50, 41, '2017-01-11', 'SEKDA KAB KEDIRI 005/066/418.07/2017', '2017-01-12', 'Upacara tgl 17 januari 2017 pukul 07.00 tempat halaman pemkab Kediri', 'kabid umpeg\r\numumkan ke semua staff dan siapkan daftar hadir'),
(51, 42, '2017-01-10', 'DINAS PERIKANAN 100/011/418.38/2017', '2017-01-12', 'Pemberitahuan bahwa tgl 3 januari 2017 telah terbentuk organisasi perangkat daerah dinas perikanan kab Kediri', 'kasubag umpeg'),
(52, 43, '2017-01-12', 'SEKDA KAB KEDIRI 800/39/415.50/2017', '2017-01-12', 'Undangan rapat koordinasi kenaikan pangkat periode 1 april 2017 \r\njumat, 13 januari 2017\r\n07.30 \r\ntempat ruang rapat dekade kab kediri', 'sdr kasubag umpeg hadiri'),
(53, 44, '2017-01-12', 'SINERGI 0340/SIN/2017', '2017-01-12', 'Informasi dan partisipasi pameran 2017', 'kabid pemasaran'),
(54, 45, '2016-11-10', 'kantor kepala desa dukuh 400/686/418.83/xii/2016', '2017-01-11', 'permohonan ijin pariwisata', 'kabid pengembangan \r\nproses lebih lanjut'),
(55, 46, '2017-01-11', 'program keluarga harapan 61/B16/jalansehat/1/2017', '2017-01-12', 'perhomonan ijin kegiatan\r\nhari minggu 13 januari 2017\r\n05.30 wib s/d selesai\r\ntempat taman kereta api area SLG', 'kabid pengembangan proses lebih lanjut'),
(56, 47, '2017-01-12', 'Rinault production 80/rp/1/2017', '2017-01-12', 'undangan dan permohonan memberi kata sambutan acara " temu kangen artis dan musisi dangdut sejati "', 'kabid pemasaran siapkan persiapannya'),
(57, 48, '2017-01-13', 'perhimpunan hotel dan resort Indonesia badan pimpinan cabang sidoarjo', '2017-01-13', 'menjalankan program kerja PHRI BPC', 'kabid pemasaran\r\nsalah alamat perlu hadir tidak ?'),
(58, 49, '2017-01-12', 'SEKDA KAB KEDIRI 800/40/418.50/2017', '2017-01-13', 'kegiatan monitoring dan evaluasi pelaksanaan penilaian prestasi kerja PNS di lingkungan pemerintah', '-'),
(59, 50, '2017-01-10', 'DISBUDPAR PROV JATIM 430/438/118.22/2017', '2017-01-13', 'kegiatan uyon - uyon 2017 di DISBUDPAR PROV JATIM', 'kabid kesenian\r\nhadiri dan laporkan'),
(60, 51, '2017-01-05', 'BKD KAB KEDIRI 80015/418.64/2017', '2017-01-13', 'sekda tentang kewenangan pejabat plt dan pih', 'sdr.kasubag umpeg'),
(61, 51, '2017-01-12', 'BKD KAB KEDIRI 800/49/418.50/2017', '2017-01-13', 'satuan keputusan bupati kediri tentang pengangkatan jabatan struktual', 'sdr.kasubag umpeg'),
(62, 52, '2017-01-13', 'garuda aquastic swimming center 001/gasc/2017', '2017-01-13', 'permohonan ijin kolam renang corah', 'kabid pegembangan'),
(63, 53, '2017-01-13', 'dinas sosial kab kediri 005/057/418.56/2017', '2017-01-13', 'jalan santai PKH kab kediri dalam rangka peringatan HKSN dan hari ibu pada minggu 13 januari 2017 \r\npukul 05.30 WIB tempat taman kepala kereta api', 'kepala diparbud'),
(64, 54, '2017-01-10', 'disbudpar prov jatim 556.4/439/118.4/2017', '2017-01-16', 'Undangan untuk partisipasi pada matta fair 2017 tanggal 17 s/d 19 Maret 2017 di Kuala Lumpur Malaysia', 'Kabid Pemasaran'),
(65, 55, '2017-01-06', 'Kementrian Pendidikan dan Kebudayaan 480/A.A1.2/2017', '2017-01-16', 'Undangan rembug nasional pendidikan dan kebudayaan Tahun 2017 \r\nHari Jumat s/d Minggu tanggal 27 s/d 29 Januari 2017\r\nTempat Pusdiklat Kemendikbud', 'Sdr. Kasubag Umpeg'),
(66, 56, '2017-01-16', 'Disbudpar Prov. Jatim', '2017-10-16', 'Undangan gelar pesona Jawa Timur \r\nSabtu, 21 Januari 2017\r\nPukul 19.00 WIB\r\nTempat Gedung Cakdurasih', 'Kabid. Kesenian'),
(67, 58, '2017-01-13', 'Sekda. 005/092/418.07/2017', '2017-01-16', 'Hari Selasa\r\nTanggal 17 Januari 2017 \r\nPukul 12.30 WIB\r\nTempat Ruang Rapat \r\nKomisi BDPRD Kab. Kediri\r\nAcara Rapat dengar pendapat DPRD bersama komisi BDPRD KAb. Kediri', 'Kepala DIsparbud'),
(68, 57, '2017-01-13', 'Sekda. 005/090/418.07/2017', '2017-01-16', 'Undangan Rapat Paripurna\r\nHari Senin\r\nTanggal 16 Januari 2017\r\nPukul 13.00 WIB\r\nTempat Ruang Graha Saba Canda Birawa DPRD Kab. Kediri', 'Kepada Disparbud'),
(69, 59, '2017-01-02', 'Memorandum 053/PK-M/11/2016', '2017-01-16', 'Penawaran Berlangganan Koran', 'Kasubag Umpeg'),
(70, 60, '2017-01-12', 'Dinas Koperasi dan Usaha Mikro 050/26/418-28/2017', '2017-01-16', 'Pemberitahuan bahwa sejak tanggal 3 Jnuari 2017 telah terbentuk organisasi daerah DINAS KOPERASI DAN USAHA MIKRO', 'Kasubag Umpeg'),
(71, 61, '2017-01-11', 'Badan Perhubungan Daerah 431/349/207/2017', '2016-01-16', 'Jadwal paket pergelaran seni budaya daerah di Anj. Jatim TMII Jakarta tahun 2017', 'KB. Kesenian'),
(72, 62, '2017-01-13', 'Sekda 050/086/418-54/2-17', '2017-01-16', 'Permintaan Laporan Evaluasi RKPD Semester II Tahun 2016', '-'),
(73, 63, '2017-01-12', 'Surabaya Cell Cup 2 001/PRO/1/2017', '2017-01-16', 'Permohonan izin lomba burung\r\nHari Minggu, 12 Maret 2017\r\nWaktu 10.00 WIB s/d selesai\r\nTempat Kawasan WIsata Sumber Ubalan, Kalasan - PLosoklaten, Kediri', 'KB. Pengembangan'),
(74, 64, '2017-01-13', 'Supriyono', '2017-01-16', 'Lamaran Pekerjaan', 'Sdr. Kasubag Umpag'),
(75, 65, '2017-01-15', 'Maulana Muhammad Ibrahim Fahrudin', '2017-01-16', 'Lamaran Pekerjaan', 'Sdr. Kasubag Umpag'),
(76, 66, '2017-01-16', 'DisBudpar Prov. Jatim 556.3/704/118.5/2017', '2017-01-16', 'Pendataanpekparun', 'kabid pengembangan segera cukupi'),
(77, 67, '2017-01-16', 'sekda kab kediri 05/103/418.05/2017', '2017-01-16', 'undangan rapat evaluasi penyerahan anggaran th 2017', 'tulis dipapan'),
(78, 68, '2017-01-13', 'BKD kab kediri 800/158/418.56/2017', '2017-01-16', 'permintaan admin', 'kasubag umpeng cukupi segera'),
(79, 69, '2017-01-13', 'BKD kab kediri870/139/418.50/2017', '2017-01-16', 'permintaan hasil prestasi kerja pns tahun 2016', 'sdr.kasubag keuangan segera cukupi'),
(80, 70, '2017-01-09', 'komisariat.kementrian PPN/BAPPENAS/01/AP21/2017', '0017-01-12', 'undangan bimtek strategi kebijakan perencanaan pembangunan pariwisata di pulau2 kecil sebagai pusat pertubuhan', '-'),
(81, 71, '2017-01-17', 'winardi', '2017-01-17', 'lamaran pekerjaan', 'kasubag umoeg segera proses'),
(82, 72, '2017-01-16', 'SC OUT ADDICT 001/ijin/1/2017', '2017-01-17', 'irrenggolo fun camp', 'kabid pengembangan proses lebih lanjut'),
(83, 73, '2017-01-13', 'sekda kab kediri 900/085/418.51/2017', '2017-01-17', 'undangan rekonsiliasi realisasi dan pertangung jawaban pelaksanaan APBD TA 2016', 'sdr.PDK bendahara pengeluaran & bendahara barang hadiri'),
(84, 74, '2017-01-03', 'samudra langit \r\n001/DU/slg.agenda/1/2017', '2017-01-17', 'penawaran agenda event 2017', 'kasubag umpeg proses segera'),
(85, 75, '2016-12-10', 'dedn ery prabowo', '2017-01-17', 'lamaran pekerjaan', 'sdr.kasubag umpeg proses segera'),
(86, 76, '2017-01-17', 'ahmad ilham', '2017-01-17', 'lamaran pekerjaan', 'kasubag umoeg proses segera'),
(87, 77, '2017-01-16', 'disbudpar prov.jatim 556.3/705/118.2017', '2017-01-17', 'permintaan data desa wisata dan homestay', 'kabid pengembangan segera cukupi'),
(88, 78, '2017-01-16', 'sekda kab kediri 050/105418.05/2017', '2017-10-17', 'RKA laporan realisasi fisik non fisik dan penunjukan admin sismentepra', 'sdr.persiapkan tepat waktu'),
(89, 79, '2017-01-16', 'SMAN 6 NGANJUK 421/13/411201.026/2017', '2017-01-17', 'ijin tempat berkemah', 'kabid pengembangan beri jawaban dan rekomendasikan perhutani'),
(90, 80, '2017-01-11', 'bankesbangpol o70/16/418.62.2017', '2017-01-17', 'rekomendasi a.n yessy winata sari', 'kasubag umpeg bimbing dan arahkan'),
(91, 81, '2017-01-09', 'asosiasi perencanaan pemerintah indo bappenas 01/AP21/1/2017', '2017-01-17', 'undangan bimket perencanaan pembangunan pariwisata di pulau2 kecil', '-'),
(92, 82, '2017-01-17', 'sekda kab kediri 800/19/418.11/2017', '2017-01-17', 'asistensi SAKIP kab.kediri', 'kasubag program siapkan bahan dan ikut hadiri'),
(93, 83, '2017-01-09', 'sekda kab kediri 065/045/418.09/2017', '2017-01-18', 'permintaan perjanjian kerja th 2017', 'kasubag umpeg segera selesaikan'),
(94, 84, '2017-01-18', 'PHDRI badan pimpinan cabang kediri', '2017-01-19', 'agenda pertemuan rutin bulanan BPC PHRI jediri raya', 'kabid pemasaran perlu hadir atau tidak'),
(95, 85, '2017-01-18', 'sekda kab kediri 061/021/418.09/2017', '2017-01-19', 'usernama si tamsil', 'kasubag umpeg kok tetap ya'),
(96, 86, '2017-01-18', 'SEKDA KAB KEDIRI 061/021/418.09/2017', '2017-01-19', 'Username Sitamsil', 'sdr. kasubag umpeg'),
(97, 87, '2017-01-19', 'Gelar Pesona Jatim', '2017-01-19', 'Launching kegiatan Seni Budaya', '-'),
(98, 88, '2017-01-12', 'Palang Merah Indonesia 05/0206.21/UM/1/2017', '2017-01-20', 'Undangan rapat pembagian kupon bulan dana PMI 2017\r\nsenin, 23 januari 2017\r\njam : 09.00 WIB\r\nTempat : Ruang joyoboyo pemkab Kediri', 'Sdr Kasubag UMPEG'),
(99, 89, '2017-01-14', 'Pandu Saputra', '2017-01-20', 'Lamaran Pekerjaan', 'Sdr. Kasubag UMPEG'),
(100, 90, '2017-01-16', 'PEACE 476/80/PEACE/1/2017', '2017-01-20', 'Pemberitahuan Kegiatan outbond', 'Kabid Pengembangan'),
(101, 91, '2017-01-19', 'SEKDA KAB KEDIRI 005/144/418.05/2017', '2017-01-20', 'Sosialisasi sistem informasi rencana umum pengadaan v2.o', 'sdr. kasubag umpeg'),
(102, 92, '2017-01-18', 'SEKDA KAB. KEDIRI 900/131/418.52/2017', '2017-01-20', 'Usulan pejabat pengelola barang milik daerah th. 2017', 'sdr kasubag umpeg'),
(103, 93, '2017-01-11', 'BPD PROV JATIM 431/349/207/2017', '2017-01-20', 'Jadwal paket pagelaran seni budaya daerah di Anj Jatim TMII Jakarta th 2017 Kab. Kediri tgl 30 April 2017 di Anjungan Jatim TMII Jakarta', 'Kabid Kesenian'),
(104, 94, '2017-01-03', 'Yuka Mitra Promo 018/YMP.SNN/1/2017', '2017-01-20', 'Bintek, seminar dan kunjungan lapangan 2 hari gel 1 : 8 s/d 9 maret 2017 di Yogyakarta', '-'),
(105, 95, '2017-01-03', 'Expoasia 005/EGN.ITAX/1/2017', '2017-01-20', 'Undangan mengikuti pameran dan forum Indonesia today Expo  di Singapura dan paviliun Indonesia Show di Hongkong \r\npada tgl 7 s/d10 september 2017 di Singapura dan Paviliun Indonesia Show tgl 20 Okt 2017 di Hongkong', 'Kabid Pemasaran'),
(106, 96, '2017-01-19', 'Gubernur Jatim 431/902/118.7.121.2017', '2017-01-23', 'Pekan serta pekan seni pelajar th 2017', 'Sdr. Kasubag UMPEG'),
(107, 97, '2017-01-21', 'Panji Dwiaji', '2017-01-23', 'Lamaran Pekerjaan', '-'),
(108, 98, '2017-01-19', 'Dinas Perumahan dan kawasan permukiman', '2017-01-23', 'Pemberitahuan dan susunan perangkat daerah kab. Kediri', '-'),
(109, 99, '2017-01-19', 'Dinas Penanaman Modal dan Peminjaman Terpadu Satu Pintu 005/0230/418.27/2017', '2017-01-23', 'Acara : Rapat Koordinasi Pelaksanaan Kegiatan bimbingan pembangunan investasi daerah\r\nHari : Selasa, 24 Januari 2017\r\nPukul : 08.30 s/d selesai\r\nTempat : Ruang Rapat BPM.P2TSP JL. Soekarno Hatta no.4 Kediri', 'Kabid Pengembangan'),
(110, 100, '2017-01-23', 'SEKDA KAB. KEDIRI 550/132/418.31/2017', '2017-01-23', 'Online Meeting pembahasan kerjasama antara pemerintahan kab Kediri dengan Pemerintah Kota Bandung\r\nHari : Selasa, 24 Januari 2017\r\nPukul : 10.00 WIB\r\nTempat : Ruang Pamenang Pemkab Kediri', 'Kepala Disbudpar'),
(111, 101, '2017-01-18', 'DISPARBUD KAB. Lumajang 556/28/427.50/2017', '2017-01-23', 'Pemberitahuan perubahan nemenklator maupun cup stempel pada Dinas Kami', 'Sdr. Kasubag UMPEG'),
(112, 102, '2017-01-20', 'DISPARBUD PROV JATIM 005/974/118.7.121/2017', '2017-01-23', 'Undangan sosialisasi program kebudayaan th 2017 \r\nHari : Rabu, 25 januari 2017\r\nwaktu : 08.00 s/d selesai\r\ntempat : aula graha wisata disparbud prov. jatim\r\nJl. Wisata Henanggal, Surabaya', 'Sdr. Kasubag UMPEG'),
(113, 103, '2017-01-18', 'Kementrian Pendidikan dan Kebudayaan 1693/A.AI.2/PR/2017', '2017-01-23', 'Ralat Undangan Rembuk nasional pendidikan dan kebudayaan (RNPK) th 2017\r\nRabu s/d Jumat\r\n25 s/d 27 januari 2017\r\ntempat : pusat pendi dan pelatihan pegawai (pusdiklat) (kemendikbud) jl.raya Ciputat - purungkan 19, Bojongsari Sawangan Jar', 'Sdr. Kasubag Umpeg'),
(114, 104, '2017-01-18', 'DISPARBUD PROV JATIM 005/034/118.6/2017', '2017-01-23', 'Rapat persiapan DutaWisata Raka Raki\r\nHari : Selasa, 7 Februari 2017\r\nPukul : 09.00 WIB - Selesai\r\nTempat : Graha Wisata', 'Kabid. Pengembangan'),
(115, 105, '2017-01-18', 'CANDA BIRAWA 518/RAT/3/1/2017', '2017-01-23', 'Undangan rapat anggota tahunan (RAT) tahun buku 2016', 'sdr. kasubag umpeg'),
(116, 106, '2017-01-19', 'RENAULT 26/RP/1/2017', '2017-01-23', 'Ungkapan Kekecewaan', 'Kabid Kesenian\r\nwas - was gimana maksut surat ini'),
(117, 107, '2017-01-16', 'Komunitas Pelestari Budaya Kediri 01/KPBK/1/2017', '2017-01-23', 'Pemberitahuan bahwa terhitung mulai tgl 12 Okt 2016 Komunitas Pelestari Budaya Kediri yang bergerak dalam bidang seni budaya materi maupun non materi telah berdiri dengan resmi', 'Kabid Jakala'),
(118, 108, '2017-01-18', 'BPD Kab Kediri 011/270/418.52/2017', '2017-01-24', 'Pemberitahuan Pindah Kantor', 'Sdr. kasubag umpeg'),
(119, 109, '2017-01-23', 'SEKDA Kab. Kediri 800/175/418.05/2017', '2017-01-24', 'Usulan daftar nama anggota PPHP TA 2017', 'Sdr. Kasubag Umpeg'),
(120, 110, '2017-01-23', 'Dinas Perdagangan Kab. Kediri 800/030/418.29/2017', '2017-01-24', 'Pemberitahuan peraturan Daerah', 'Sdr. Kasubag umpeg'),
(121, 111, '2017-01-18', 'DISBUDPAR PROV. JATIM 430/850/118.7.1101/2017', '2017-01-24', 'Penyampaian brosur dan pemasangan spanduk', 'Kabid Pemasaran'),
(122, 112, '2017-01-13', 'DISBUDPAR Prov Jatim 556A/643/118.4/2017', '2017-01-24', 'Petugas pengelola data pariwisata th 2017', 'Kabid Pemasaran'),
(123, 113, '2017-01-23', 'SEKDA Kab. Kediri 06B/166/418.09/2017', '2017-01-24', 'Laporan tahunan standar pelayanan minimal (SPM) th 2016', 'sdr. kasubag umpeg'),
(124, 114, '2017-01-23', 'SEKDA Kab. Kediri 005/A74/418.54/2017', '2017-01-24', 'undangan forum konsultasi publik penyusunan ranwal RKPD Kab. Kediri th 2017', 'Sdr. Kasubag Prog'),
(125, 115, '2017-01-24', 'Badan Perencanaan Pembangunan Daerah 005/601/418.54/2017', '2017-01-24', 'Rapat koordinasi penyusunan LKPI Bupati akhir th anggaran 2016', 'sdr. kasubag'),
(126, 116, '2017-01-23', 'SEKDA Kab. Kediri 050/lbg/418.54/2017', '2017-01-24', 'Edaran tentang pedoman penyusun rencana kerja perangkat daerah th 2018', 'sdr kasubag'),
(127, 117, '2017-01-24', 'DISBUDPAR PROV JATIM 556/1107/118.1.13/2017', '2017-01-24', 'Undangan focus group discussion (FGD) penyusunan perda RIPPAR PROV pada :\r\nHari/tgl : Selasa - Rabu / 7 - 8 Feb 2017\r\nTempat Hotel Kusuma Agrowisata Jl. Abdul Gani Atas Batu', '-'),
(128, 118, '2017-01-01', 'panitia downhill open 2017 -BUPATI KEDIRI CUP \r\n004/BKC/1/1/2017', '2017-01-24', 'ijin kegiatan di kawasan wisata air terjun irenggolo pada \r\nhari/tgl : jumat-minggu \r\ntanggal: 24-26 maret 2017', 'kabid pengembangan,pemasaran dan jakala \r\nhadirkan ketua panitia untuk rapat persiapannya'),
(129, 119, '2017-01-23', 'dinas sosial\r\n460/120/418.26/2017', '2017-01-25', 'ucapan terimakasih', 'sdr.kasubag umpeg UMP'),
(130, 120, '2017-01-19', 'gubernur JATIM 431/902/118.7/121/2017', '2017-01-25', 'peran serta pekan seni pelajar th 2017', 'kabid kesenian segera persiapkan dan komunikasikan dengan dikpora'),
(131, 121, '2017-01-25', 'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu 510/3/0300/418.27/2017', '2017-01-25', 'Materi Promosi Investasi', 'Kb. Pemasaran \r\nTanggapi dan Saran'),
(132, 122, '2017-01-24', 'Dinas Koperasi dan Usaha Mikro 050/051/418/2017', '2017-01-25', 'Revisi alamat email \r\nResmi OPD', 'sdr. Kasubag\r\nUmpeg\r\nUMP'),
(133, 123, '2017-01-18', 'Gubernur Jatim 556/5/836/1186/2017', '2017-01-25', 'Pemilihan Duta Wisata Raka Raki Jatim th 2017', 'Kb. Pengembangan'),
(134, 124, '2017-01-18', 'Disbudpar Pemprov Jatim\r\n005/834/118.6/2017', '2017-01-25', 'Rapat persiapan Duta Wisata Raka Raki Jatim th 2017', '-'),
(135, 125, '2017-01-06', 'Dinas Pertanian dan Perkebunan 521/ /418.32/2017', '2017-01-25', 'Pemberitahuan bahwa tgl 3 Januari 2017 telah terbentuk organisasi perangkat daerah "Dinas Pertanian dan Perkebunan" Kab Kediri', 'Sdr. Kasubag Umpeg'),
(136, 126, '2017-01-25', 'SEKDA KAB KEDIRI\r\n893.3/97/418.02/2017', '2017-01-25', 'Panggilan peserta kegiatan peningkatan kompetensi SDA Pejabat th 2017', ''),
(137, 127, '2017-01-25', 'SEKDA KAB KEDIRI \r\n893.3/96/418.02/2017', '2017-01-25', 'Rencana penyelenggara bintek dan uji sertifikasi barang/jasa oleh undip th 2017', 'Sdr. Kasubag umpeg\r\nhadiri dan wakili'),
(138, 128, '2017-01-24', 'Kodim 0809 Kediri\r\nB/07/1/2017', '2017-01-25', 'Pemberitahuan Rencana Kunjungan IBU Pangdam V/Brawijaya ke lokasi gunung kelud dan wisata Kampoeng anggrek beserta keluarga ', 'Kb. Pemasaran \r\nBantu Akomodasi dan konsumsi\r\nGd Teater'),
(139, 129, '2017-01-24', 'Bakesbangpol 003/081/418.62/2017', '2017-01-25', 'Undangan rapat koordinasi dengan jajaran civitas akademika univ prof Dr. Mustopo', 'Kepala Disbudpar'),
(140, 130, '2017-01-25', 'Disbudpar prov jatim\r\n005/1179/118.4/2017', '2017-01-25', 'Undangan rapat konfirmasi akhir keikutsertaan sebagai peserta Matta', 'Kb. Pemasaran Hadiri'),
(141, 131, '2017-01-24', 'SEKDA Kab. Kediri 800/173/418.05/2017', '2017-01-26', 'usulan daftar nama anggota PPHP T.A 2017', 'sdr. kasubag umpeg'),
(142, 132, '2017-01-24', 'SEKDA KAB KEDIRI\r\n065/180/418/09/2017', '2017-01-26', 'Permintaan SK penerimaan tambahan perbaikan penghasilan', ''),
(143, 133, '2017-01-24', 'SEKDA KAB KEDIRI\r\n061/182/418.09/2017', '2017-01-26', 'Keputusan kepala OPD tentang penjabaran fungsi eselon IV', 'Sdr. Kasubag umpeg\r\nGimana kita sudah kirim apa belum'),
(144, 134, '2017-01-24', 'Ikatan Himpunan Mahasiswa Biologi Indonesia (IKAHIMBI) 053/pan-pel/BDB/BPW V IKAHIMBI/VI/2017', '2017-01-20', 'Permohonan ijin tempat di kantor balai desa Jugo Kec. Mojo Kab. Kediri dan kawasan wisata air terjun Irwenggolo', 'Kb. Pengembangan\r\nInfakan pada koordinator Objek'),
(145, 135, '2017-01-10', 'disparbud prov jatim\r\n430/438/118.2/2017', '2017-01-26', 'kegiatan uyon uyon pada hari kamis, 26 jan 2017 pukul 14.00 WIB di ruang bromo disbudpar jatim', 'kabid kesenian hadiri bersama ketua organisasi karawistan'),
(146, 136, '2017-01-24', 'disbudpar prov jatim\r\n005/02/118.7.121/2017', '2017-01-26', 'undangan workshop pedalangan 2017', 'kabid kesenia hadiri bersama lketua pepadi'),
(149, 137, '2017-01-24', 'disbudpar prov jatim \r\n\r\n431/1102/118.2/2017', '2017-01-26', 'perubahan jadwal kegiatan 2017', 'kabid kesenian UMP dan siapkan'),
(152, 138, '2017-01-24', 'disparbud prov jatim\r\n431/101/118.7.91/2017', '2017-01-26', 'undangan rapat temu teknis festival dalang th 2017', 'kabid jakala hadiri'),
(155, 139, '2017-01-23', 'sekda kab kediri\r\n065/166/418.09/2017', '2017-01-26', 'laporan tahunan standar pelayanan minimal (SPM) th 2016', 'kasubag umpeg cukupi tepat waktu'),
(156, 140, '2017-01-19', 'mandiri syariah', '2017-01-26', 'penawaran dan permohonan sosialisasi fasilitas perbaikan syariah di bank syariah mandiri', 'kepada disbuudpar'),
(157, 141, '2016-12-02', 'gubernur jatim\r\n556.4/16074/107.51/2016', '2017-01-26', 'undangan mengikuti majapahit travel fair 2017', 'kabid pemasaran telaah'),
(158, 142, '2017-01-03', 'PT. DEBINDO MITRA TAMA\r\n020/DMT/MTF/PER/1/2017', '2017-01-26', 'penawaran partisipasi kepesertaan majapahit travel fair 2017', 'tanggapan dan saran kabid pemasaran'),
(161, 143, '2017-01-20', 'DPPKB P3\r\n050171/418.22/2017', '2017-01-26', 'perubahan data perangkat daerah', 'sdr.kasubag umpeg'),
(164, 144, '2017-01-19', 'OSIS SMP AL KAMAL\r\n215/SK/OSIS/SMP/A-VVNY/XI/2017', '2017-01-26', 'permohonan ijin menepati kawasan wisata ubalan', 'kabid pengembangan proses lebih lanjut'),
(165, 145, '2017-01-20', 'Badan kepegawaian daerah 800/90/418.50/2017', '2017-01-26', 'Berita acara no 877/1886/418.64/2016 tentang pengambilan sumpah/janji pegawai negeri sipil', 'sdr. kasubag umpeg \r\nsampaikan ke yang bersangkutan'),
(166, 146, '2017-01-20', 'Radar kab. kediri 006/RK--8/SCX/1/2017', '2017-01-26', 'Penawaran sponsorship', 'Kabid Pemasaran'),
(167, 147, '2017-01-26', 'BNN KAB KEDIRI B/31/ka/com.00/2017/BNNK - KDR', '2017-01-26', 'Bimtek bidang P4GN di hotel penataran jl. dhoho no.190 pakelan kota kediri', 'Kb. Pemasaran\r\nIkut hadir'),
(168, 148, '2017-01-26', 'Dinas Perdagangan 800/030/418.29/2017', '2017-01-26', 'Pemberitahuan pembentukan dan susunan perangkat daerah kab kediri', 'sdr kasubag umpeg'),
(169, 149, '2017-01-24', 'Badan Pendidikan dan Pelatihan 092.4/4411/205.3/2017', '2017-01-27', 'Pengembalian peserta diklat pemasaran dan promosi pariwisata 2017', 'sdr. kasubag umpeg'),
(170, 150, '2017-01-03', 'PT EXPO Ana Global NET 005/EGH-ITEX/1/2017', '2017-01-27', 'Undangan mengikuti pameran dan forum Indonesia TPDDAY EXPO di Singapura \r\ntgl : 7 - 10 Sept 2017 dan pavilium Indonesia SHOW di Hongkong tgl 20 - 23 Oktober 2017', 'Kb. Pemasaran'),
(171, 151, '2017-01-18', 'Gubernur Jatim 556.5/836/1186/2017', '2017-01-27', 'Pemilihan Duta Wisata Raka Raki Jatim 2017', 'Kb Pengembangan\r\npersiapkan sebaik-baiknya'),
(172, 152, '2017-01-27', 'Badan Kesatuan Bangsa dan Politik 070/52/418.62/2017', '2017-01-27', 'Permohonan ijin PKL', '-'),
(173, 153, '2017-01-25', 'Kementrian Pariwisata HM 304/115/DP2M/kempar/2017', '2017-01-30', 'Partisipasi pada MATTA Fair Kuala Lumpur Maret 2017', 'Telaan kb. Pemasaran'),
(174, 154, '2017-01-27', 'SEKDA KAB KEDIRI 050/166/418.2017', '2017-01-30', 'Perubahan data perangkat daerah', 'sdr. kasubag umpeg'),
(175, 155, '2017-01-30', 'CV Muray Enterprise', '2017-01-30', 'Pemasangan ridying diarea CFD', 'kb. pengembangan  \r\nproses lebih lanjut'),
(176, 156, '2017-01-25', 'Estilo Genio Society Chapter Kediri\r\n001/EGA/KDR/2017', '2017-01-30', 'Pengajuan ijin peminjaman gd museum kelud kediri', 'kb. pengembangan'),
(177, 157, '2017-01-30', 'SEKDA KAB KEDIRI\r\n05/238/418.25/2017', '2017-01-30', 'Undangan rapat koordinasi persiapan verifikasi kab sehat dan pembahasan penetapan SK tim pembina dan forum kab sehat kab kediri ', 'kapala disbudpar'),
(178, 158, '2017-01-24', 'Perhutani 07/022.2/kdr/drive jatim', '2017-01-31', 'permohonan ijin pemakaian lokasi wisara air terjun irenggolo', 'kb pengembangan\r\nbendel'),
(179, 159, '2017-01-24', 'DISBUDPAR PROV JATIM 431/1102/118.2/2017', '2017-01-31', 'Perubahan jadwal kegiatan th 2017', '-'),
(180, 160, '2017-02-01', 'GPI warerpark OP 04/WP-GPI II/2017', '2017-01-31', '2th Aniversary kediri brio community \r\nminggu, 12 feb 2017\r\npukul 09.00-16.00 wib area parkir dalam GPI', 'kabid Pemasaran\r\nproses lebih lanjut'),
(181, 161, '2017-01-30', 'SEKDA KAB KEDIRI 005/266/418.51/2017', '2017-01-31', 'Undangan rapat koordinasi pengurus barang \r\nrabu 1 februari 2017\r\npukul 08.00 wib\r\ntempat : ruang joyoboy', 'sdr kasubag umpeg'),
(182, 162, '2017-01-31', 'Sekda Kab Kediri 451/089/418.04/2017', '2017-02-01', 'Undangan pembinaan mental agama\r\nsenin, 6 februari 2017\r\npukul 07.15 wib\r\ntempat gedung bagawan ta bhari', 'Kepala disparbud'),
(183, 163, '2017-01-01', 'PKK KAB KEDIRI 16/SEKR/PKK.KAB.KDR/I/207', '2017-01-02', 'Permintaan Kegiatan', 'Kabid Pengembangan\r\nSegera Cukupi'),
(184, 164, '2017-01-31', 'Hazan Marzuki', '2017-01-02', 'Lamaran Pekerjaan', 'Sdr. Kasubag Umpeg'),
(185, 165, '2017-01-30', 'SEKDA KAB KEDIRI 050053/418.03/2017', '2017-02-02', 'Perubahan Data Perangkat Daerah', 'Sdr. Kasubag Umpeg'),
(186, 166, '2017-01-31', 'SEKDA KAB KEDIRI 0194.5/264/418.31/2017', '2017-02-02', 'Permintaan Data', 'Sdr Kasubag'),
(187, 167, '2017-01-27', 'Lina Ratnasari', '2017-02-02', 'Lamaran Pekerjaan', 'sdr. kasubag umpeg'),
(188, 168, '2017-01-31', 'SEKDA KAB KEDIRI 050/269/418.21/2017', '2017-02-02', 'program/kegiatan penanggulangan kemiskinan', 'sdr kasubag'),
(189, 169, '2017-02-02', 'BKBP 005/117/418.62/2017', '2017-02-02', 'Mendampingi ibu bupati dalam rangka audiensi kegiatan ajang kompetisi seni dan olahraga', 'Kepala disparbud'),
(191, 170, '2017-01-03', 'DISPARBUD KOTA BLITAR 800/04/410.107/2017', '2017-02-03', 'perubahan nomenklatur', '-'),
(192, 171, '2017-01-13', 'air einventing events 009/SL5-JTF/ONE-EVENT/1/17', '2017-02-03', 'Penawaran partisipasi pameran jatim trade dan tourism fair 2017', 'kb. pemasaran'),
(193, 172, '2017-02-02', 'BPPD 005/881/418.54/2017', '2017-02-03', 'Bimbingan teknis Aplikasi Sistem Informasi Perencanaan Pembangunan daerah\r\nhari : senin - selasa\r\ntgl : 6 - 7 februari 2017\r\nwaktu : sesuai jadwal\r\ntempat : ruang rapat pamenang kab kediri', 'sdr kasubag kediri'),
(194, 173, '2017-02-02', 'Aliensi Kebangsaan Kediri 002/ABK/I/2017', '2017-02-03', 'Permohonan ijin\r\nhari : sabtu\r\ntgl : 4 feb 2017\r\nwaktu : 07.00wib\r\ntempat : bundaran SLG', 'sdr kasubag'),
(195, 174, '2017-02-02', 'Suratno', '2017-02-06', 'Laporan pekerjaan', 'sdr. kasubag'),
(196, 175, '2017-02-01', 'Sigit kabut Al Khafi', '2017-02-06', 'Lamaran Pekerjaan', 'Sdr Kasubag Umpeg'),
(197, 176, '2017-02-03', 'Disparbud 005/1652/118.7.121/2017', '2017-02-06', 'Undangan Tamu teknis seni pelajar prov jatim ke 8 th 2017', 'kabid kesenian'),
(198, 177, '2017-02-03', 'Disparbud 005/1653/118.7.121/2017', '2017-02-06', 'Undang pelatihan teknis di bidang seni musik tradisi', 'kabid kesenian'),
(199, 178, '2017-01-25', 'Dinas Tenaga Kerja\r\n005/143/418.30/2017', '2017-02-06', 'Perubahan data \r\nperangkat daerah', 'sdr kasubag umpeg'),
(200, 179, '2017-01-31', 'Direktorat Jenderal Kebudayaan', '2017-02-06', 'forum pengusulan', 'kabid jakala'),
(201, 180, '2017-02-02', 'Pemprov Jatim Peraturan Daerah Prov Jatim', '2017-02-06', 'Rencana Induk pembangunan kepariwisataan prov jatim 2017 - 2032', '-'),
(202, 181, '2017-02-03', 'DISBUDPAR PROV JATIM 431/1644/118.2/2017', '2017-02-07', 'Apresiasi pengeluaran wayang kulit di kab kediri', 'kabid kesenian'),
(203, 182, '2017-02-01', 'Koperasi wanita "sekartaji" kab kediri 03/kopskij/kabkdr/11/2017', '2017-02-07', 'mohon bantuan tenaga\r\nhari : kamis, 9 feb 2017\r\nwaktu : 08.00 wib\r\ntempat : kantor koperasi\r\nwanita "sekartaji" kab kediri jl. soekarno hatta 99 II/no 1 tepus ngasem kediri', 'sdr kasubag umpeg'),
(204, 183, '2017-02-01', 'koperasi wanita "sekartaji" kab kediri 03/kop"skij"/kab kediri/II/2017', '2017-02-07', 'undangan PAT Koperasi wanita "sekartaji" kab kediri tutup tahun buku 2016', 'sdr kasubag umpeg'),
(205, 184, '2017-01-16', 'dinas pendidikan smkn 2 kediri 420/011.1/420.42.12/2017', '2017-02-07', 'permohonan pelaksanaan praktik pengalaman kerja (PPK) th 2017', 'sdr kasubag umpeg'),
(206, 185, '2016-11-10', 'Kapolres resort kediri jl P.B sudirman 56, pare 64211 B/2945/XI/2016/Bagsumda', '2017-02-07', 'Ucapan terima kasih', 'sdr kasubag umpeg'),
(207, 186, '2017-01-31', 'SEKDA Kediri 028/263/418.07/2017', '2017-02-07', 'penggunaan papan informasi u/ agenda pemerintah kab kediri', 'kabid pemasaran'),
(208, 187, '2017-01-31', 'prodiklat otonomi daerah 052/POD/DIK-PARIWISATA/III/2017', '2017-02-07', 'Undangan Diklat Ds. Wisata', '-'),
(209, 188, '2017-01-10', 'DISKEBUDPAR PROV JATIM 556.4/437/118.4/2017', '2017-02-07', 'undangan mengikuti event jenggolo travel mart 2017\r\nhari : rabu - kamis\r\ntgl : 1 - 2 maret 2017\r\ntempat : premeire Inn Hotel, Sidoarjo', 'Kabid Pemasaran'),
(210, 189, '2017-02-07', 'BAKESBANGPOL 070/78/418.62/2017', '2017-02-07', 'rekomendasi permohonan izin PKL', 'sdr kasubag umpeg'),
(211, 190, '2017-02-03', 'DISBUDPAR JATIM 556/1649/118.1.12/2017', '2017-02-07', 'permohonan nama tim pembuatan profil', 'kabid pemasaran'),
(212, 191, '2017-02-07', 'BAKESBANGPOL  070/67/418.62/2017', '2017-02-07', 'riset', '-'),
(213, 192, '2017-02-07', 'Sekda Kab Kediri 005/370/418.31/2016', '2017-02-08', 'undangan verifikasi data dan profil dalam subdivisi organisasi pemerintah daerah', 'sdr kasubag program'),
(214, 193, '2017-02-03', 'disbudpar prov jatim 556.2/1646/18.5/2017', '2017-02-08', 'permohonan peserta "rembug desa wisata jawa timur th 2017"', 'kabid pengembangan\r\nhadiri bersama desa wisata'),
(215, 194, '2017-02-07', 'sinergi travel dan event management 034/SIN/I/2017', '2017-02-08', 'informasi dan partisipasi pameran 2017', 'kabid pemasaran \r\ntanggapan dan saran'),
(216, 195, '2017-01-30', 'Sekda 045/27/418.39/2017', '2017-02-08', 'pembinaan kearsipan OPD dilingkungan pemerintah kab kediri \r\nhari : senin - kamis 13 s/d 16 feb 2017\r\npukul 08.00 wib s/d selesai \r\ntempat : dinas kearsipan dan perpustakaan kab kediri', 'sdr kasubag umpeg'),
(217, 196, '2017-02-08', 'sekda 005/321/418.08/2017', '2017-02-08', 'undangan \r\nhari : kamis, 9 feb 2017\r\n09.00 wib\r\ntempat : ruang rapat', '-'),
(218, 197, '2017-02-06', 'bakesbangpol 070/70/418.62/2017', '2017-02-08', 'rekomendasi', '-'),
(219, 198, '2017-02-08', 'candra birawa cycling club kab kediri 001/cbcc/11/2017', '2017-08-02', 'undangan kegiatan sepeda rantai bersama', '-'),
(220, 199, '2017-02-08', 'dinas penanaman model dan pelayanan terpadu satu pintu 005/0457/418.27/2017', '2017-02-08', 'undangan\r\nhari : kamis, 9 feb 2017\r\npkl : 09.00 - selesai\r\ntmpt : ruang rapat DPMPTSP Kab Kediri', '-'),
(221, 200, '2017-02-08', 'komisi penanggulangan aids daerah kab kediri 1157/kpad/11/2017', '2017-02-08', 'permohonan data belanja APBD th 2015 dan 2016 untuk penanggulangan aids', 'sdr kasubag prog'),
(222, 201, '2017-02-01', 'PMI 04/PAN.Dikjut/Ksr-Pmi/LII K/II/2017', '2017-02-08', 'Perizinan Diklat Lanjutan 2017, Hari; jumat s/d Minggu  Waktu 17-19 Februari 2017', '-'),
(223, 202, '2017-02-03', 'sekda kab kediri \r\n970/301/418.52/2017', '2017-02-08', 'laporan mingguan pendapatan', 'sdr.kasubag program pedoman dan pacu'),
(224, 203, '2017-01-31', 'sekda kab kediri\r\n970/268/418.52/2017', '2017-02-08', 'laporan mingguan pendapatan', 'sdr.kasubag program pedoman dan pacu'),
(225, 204, '2017-02-08', 'DKPS \r\n050/2347/418.23/2017', '2017-02-08', 'pembukaan gedung dinas kependudukan dan pencatatan sipil', 'sdr.kasubag umpeg *UMP'),
(226, 205, '2017-02-06', 'jenggolo travel mart 2017\r\n013/JTM/APPWS/II/2017', '2017-02-08', 'undangan sebagai seller di jenggolo travel mart 2017', 'keliru surat untuk kota'),
(227, 206, '2017-02-08', 'sekda kab kediri\r\n900/334/418.51/2017', '2017-02-09', 'pemeriksaan LKPD TA 2016', 'kasubag program siapkan sesuai permintaan'),
(228, 207, '2017-02-07', 'KSTV 63/MKT/KSTV/II/2017', '2017-02-09', 'penawaran kerjasama', 'kabis pemasaran tanggapan dan saran'),
(229, 208, '2017-02-07', 'bankesbangpol \r\n070/81/418.62/2017', '2017-02-09', 'rekomendasi', 'kasubag umpeg bantu dan arahkan'),
(230, 209, '2017-02-09', 'sekda kab kediri \r\n005/356/418.07/2017', '2017-02-09', 'undangan pelantikan jabatan', 'tulis dipapan'),
(231, 210, '2017-08-11', 'sekda kab kediri\r\n005/30/418.07/2017', '2017-02-09', 'pengambilan buku agenda kerja th 2017', 'kasubag umpeg tugaskan staf'),
(232, 211, '2017-02-06', 'majalah bulanan mitrana \r\n024.004/re-mk.110/II/2017', '2017-02-09', 'permohonan wawancara', 'kabid pengembangan \r\nbuat telaah'),
(233, 212, '2017-02-09', 'bankesbangpol\r\n070/73/418.62/2017', '2017-02-09', 'persetujuan ijin melakukan penelitian', '-'),
(234, 213, '2017-02-08', 'sekda kab kediri\r\n005/341/418.09/2017', '2017-02-09', 'undangan bimbingan teknis peningkatan penerapan SAKIP', 'tulis dipapan'),
(235, 214, '2017-02-06', 'fajar demokrasi \r\n01/FD/LSM/II/2017', '2017-02-06', 'melaksanakan program pemerintah khususnya dalam bidang pelayanan publik', 'kasubag umpeg'),
(236, 215, '2017-01-23', 'turunggo setya putro', '2017-02-06', 'mohon bantuan dana kegiatan', 'kabid kesenian tanggapan dan saran'),
(237, 216, '2017-02-06', 'disbudpar prov jatim \r\n556.4/1741/118.4/2017', '2017-02-10', 'pendukungan event budaya dan pariwisata di jatim 2017', 'kabid pemasaran segera cukupi'),
(238, 217, '2017-02-08', 'SMP pawiyatan dhaha I kediri', '2017-02-10', 'pagelaran wayang orang dan sarasehan seni budaya', '-'),
(239, 218, '2017-02-08', 'PBD 005/908/418.52/2017', '2017-02-10', 'undangan re4komendasi penerimaan PAD', 'sekertaris tugaskan bendahara'),
(240, 219, '2017-02-10', 'DPMPTSP\r\n072/0498/418.27/2017', '2017-02-10', 'kajian bisnis prospektus', 'kabid pengembangan proses lebih lanjut'),
(241, 220, '2017-02-09', 'SEKDA kab kediri\r\n005/360/418.05/2017', '2017-02-10', 'undangan evalusi penyerahan evaluasi penyerapan anggaran', 'tulis di papan'),
(242, 221, '2017-02-09', 'sekda \r\n005/359/418.05/2017', '2017-02-10', 'entry data sismentepta', 'kasubag umpeg tugaskan staf'),
(243, 222, '2017-01-06', 'APJI \r\n01/DPD-APJI/I/2017', '2017-02-10', 'pembentukan pengurus', 'kabid pengembangan'),
(244, 223, '2017-02-10', 'bankesbangpol \r\n070/88/418.62/2017', '2017-02-10', 'rekomendasi', '-'),
(245, 224, '2017-02-10', 'jenggolo travel mart\r\n028/JTM/APPWS/II/2017', '2017-02-10', 'undangan sebagai seller', 'pemasaran \r\n*tanggapan dan saran'),
(246, 225, '2017-02-10', 'disbudpar prov jatim\r\n431/2012/108.2017', '2017-02-13', 'undangan kegiatan FGD revitilisasi', 'ikut hadir'),
(247, 226, '2017-02-07', 'sekda kab kediri\r\n555/321/418.31/2017', '2017-02-13', 'pendapatan sistem elektronik instansi penyelenggaraan negara', 'tugaskan staf'),
(248, 227, '2017-01-20', 'gerakan pramuka gugus dpan \r\n01.153/154.31/GP.01.153-154/I/2017', '2017-02-13', 'pemberitahuan kegiatan', 'proses sesuai ketentuan'),
(249, 228, '2017-02-09', 'sekda', '2017-02-13', '-', 'surat sudah masuk'),
(250, 229, '2017-02-09', 'sekda \r\n005/364/418.25/2017', '2017-02-13', 'undangan rapat verifikasi kab/kota', '-'),
(251, 230, '2017-02-13', 'DPRD prov jatim', '2017-02-13', 'kunjungan kerja komisi A DPRD prov jatim', 'kabid jakala'),
(252, 231, '2017-02-10', 'SEKDA 005/197/418.50/2017', '2017-02-13', 'undangan pelaksanaan general check up pejabat', 'tulis dipapan'),
(253, 232, '2017-02-13', 'sekda kab kediri \r\n005/390/418.03/2017', '2017-02-13', 'undangan rapat kordinasi pembahasan draft pembaharuan bupati kediri', 'tulis dipapan'),
(254, 233, '2017-02-09', 'dinas kearsipan dan perpustakaan \r\n065/65/418.39/2017', '2017-02-13', 'perubahan data perangkat daerah', '-'),
(255, 234, '2017-02-13', 'dinas kearsipan dan perpustakaan \r\n041/076/418.39/2017', '2017-02-13', 'permintaan data kelembagaan dan SDM perpustakaan', '-'),
(256, 235, '2017-02-10', 'sekda \r\n970/374/418/52/2017', '2017-02-13', 'laporan mingguan pendapatan', 'kasubag keuangan \r\nbendel'),
(257, 236, '2017-02-10', 'BAPPEDA \r\n005/1121/418.54/2017', '2017-02-13', 'undangan rapat persiapan forum perangkat daerah kab kediri 2017', '-'),
(258, 237, '2017-02-13', 'BKD\r\n800/216/418.50/2017', '2017-02-13', 'penghadapan PNS a.n patarina,S.Hut', 'umpeg buat saran'),
(259, 238, '2017-02-13', 'PERHUTANI\r\n14/022.2/kdr/divre jatim', '2017-02-13', 'permohonan ijin pemakaian lokasi air terjun irrenggolo', 'pengembangan proses lebih lanjut'),
(260, 239, '2017-02-13', 'kantor imigrasi \r\nWIS.IMI.UM.01.01-362', '2017-02-14', 'undangan rapat tim para wilayah kerja kantor imigrasi kals III kediri', 'tulis dipapan'),
(261, 240, '2017-02-14', 'yopy erlina sari', '2017-02-14', 'lamaran pekerjaan', 'maaf tidak ada lowongan pekerjaan'),
(262, 241, '2017-02-13', 'BPPP\r\n005/1162/418.52/2017', '2017-02-14', 'undangan pembahasan laporan pendahuluan penijauan RT/RW', 'pengembangan - hadiri dan laporkan'),
(263, 242, '2017-02-14', 'gelar seni dan budaya daerah jatim 2017', '2017-02-14', 'undangan gelar seni budaya daerah 2017', 'kabid kesenian hadiri'),
(264, 243, '2017-02-08', 'BAPEDA\r\n012/BAPEDA/DIK/03/B/2017', '2017-02-14', 'undangan', '-'),
(265, 244, '2017-02-13', 'sekda kab kediri\r\n005/27/418.50/2017', '2017-02-14', 'undangan sosialisasi', 'pengembangan -hadiri'),
(266, 245, '2017-02-13', 'sekda\r\n800/200418.50/2017', '2017-02-14', 'pemberitahuan hari libur', 'umpeg umumkan ke pegawai'),
(267, 246, '2017-02-13', 'SEKDA \r\n028/386/418.51/2017', '2017-02-14', 'permintaan data kendaraan', 'umpeg segera cukupi'),
(268, 247, '2017-02-13', 'sekda\r\n005/364/418.25/2017', '2017-02-14', 'undangan rapat  persiapan verifikasi', 'tulis dipapan'),
(269, 248, '2017-02-14', 'sekda\r\n005/407/418.07/2017', '2017-02-14', 'undangan gladi bersih upacara tgl 17 feb 2017', 'kabid kesenian siapkan sebaik2nya'),
(270, 249, '2017-02-14', 'sekda kab kediri\r\n005/405/418.07/2017', '2017-02-14', 'undangan upacara tgl 17 feb 2017', 'umumkan ke semua staf'),
(271, 250, '2017-02-14', 'sekda kab keiri \r\n100/418/418.03/2017', '2017-02-14', 'permintaan data dan tembusan', 'kasubag keuangan segera cukupi'),
(272, 251, '2017-02-14', 'panitia aksioma \r\naksioma/MI-MTS-MA//JATIM/11/104/2017', '2017-02-16', 'Undangan rapat koordinasi persiapan dan pemantapan aksioma Mi-MTS-MA Jawa Timur th 2017\r\nkamis, 16 februari 2017\r\npukul : 08.00 wib\r\ntempat : aula MTSN Pare', 'Kabid Pemasaran\r\nHadiri dan laporkan'),
(273, 252, '2017-02-14', 'SEKDA PROV Jatim 485/1657/033/2017', '2017-02-16', 'Wawancara \r\nJumat 17 Februari 2017\r\ntempat : disparbud kab kediri', 'semua kabid ikut mendampingi'),
(274, 253, '2017-02-14', 'sekda 050/418.54/2017', '2017-02-16', 'usulan program/kegiatan th anggaran 2018', 'kasubag keu\r\ncukupi tepat waktu'),
(275, 254, '2017-02-13', 'kemendikbud \r\n035/E20/KB/2017', '2017-02-16', 'Usaha data calon penerima penghargaan kebudayaan th 2017', 'kb jakala'),
(276, 255, '2017-01-14', 'SEKDA 005/240/418.50/2017', '2017-02-16', 'Undangan menindak lanjuti hasil sosialisasi penyusunan kebutuhan pegawai ATN TA. 2017\r\nHari : rabu, 22 februari 2017\r\npkl : 09.00 - 11.30', 'sdr kasubag umpeg \r\nhadiri sesuai jadwal'),
(277, 256, '2017-01-14', 'Sekda 800/24/418.50/2017', '2017-02-16', 'penyusunan kebutuhan pegawai ATN TA. 2017', 'Sdr. Kasubag Umpeg\r\nsegera cukupi'),
(278, 257, '2017-02-16', 'BPPD 005/1280/418.54/2017', '2017-02-16', 'Undangan rapat koordinasi kerja sama pembangunan daerah \r\nhari : senin, 20 februari 2017\r\npkl : 08.30 s/d selesai', 'kabid pengembangan'),
(279, 258, '2017-02-09', 'SMKN 3 Kediri\r\n412.5/091/101.614/11/2017', '2017-02-16', 'permohonan ijin liputan dan pengambilan gambar \r\ntgl : 9 s/d 18 februari 2017\r\npkl : 11.30 - selesai\r\ntempat : disparbud kab kediri', 'sdr kasubag umpeg'),
(280, 259, '2017-02-16', 'Kampung wisara besuki', '2017-02-16', 'permohonan ijin tempat untuk kemah dan outbond dari PT TRINAMAS FINANCE\r\nhari : sabtu-minggu\r\nwaktu : tgl 18 s/d 19 2017\r\npeserta : 100 orang', 'kabid pengembangan\r\nproses lebih lanjut'),
(281, 260, '2017-02-16', 'kampung wisata besuki', '2017-02-16', 'permohonan ijin tempat untuk kemah dan outbond dari univ kediri\r\nhari : jumat s/d sabtu\r\nwaktu : 17 s/d 18 februari 2017\r\npeserta : 50 orang', 'kabid pengembangan\r\n*proses sesuai ketentuan'),
(282, 261, '2017-02-15', 'PAJERO INDONESIA \r\n01/P1-JBC/11/2017', '2017-02-17', 'permohonan dukungan gathering pajero Indonesia', 'Kabid Pemasaran\r\nproses sesuai ketentuan'),
(283, 262, '2017-02-08', 'Panitia pelaksanaan hari raya nyepi tahun baru caka 1939 8/panpel-nyepi/PHDI Kab. Kediri/11/2017', '2017-02-17', 'Mohon izin penggunaan area waduk siman\r\nhari : kamis s/d sabtu\r\nhari : minggu, pkl : 07.00 s/d selesai', 'kabid jakala\r\npantau kegiatannya'),
(284, 263, '2017-02-14', 'kementerian pendidikan dan kebudayaan 0347/E20/TU/2017', '2017-02-17', 'Surat Pengantar', 'kabid jakala\r\nbendel'),
(285, 264, '2017-02-16', 'SEKDA KAB KEDIRI \r\n005/442/41840/2017', '2017-02-16', 'Undangan rapat koordinasi persiapan pra perencanaan pembangunan sirkuit gunung kelud \r\nsenin 20 februari 2017\r\npukul 08.00 wib\r\ntempat : ruang graha', 'sdr. kasubag umpeg');

-- --------------------------------------------------------

--
-- Table structure for table `t_surat_tgs`
--

CREATE TABLE IF NOT EXISTS `t_surat_tgs` (
`id_srt_tgs` int(20) NOT NULL,
  `no` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `dasar_tgs` text NOT NULL,
  `kepada` text NOT NULL,
  `petunjuk_no` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_surat_tgs`
--

INSERT INTO `t_surat_tgs` (`id_srt_tgs`, `no`, `tgl`, `dasar_tgs`, `kepada`, `petunjuk_no`) VALUES
(1, 1, '2017-08-08', 'menjalankan ibadah puasa', 'Allah SWT', '1'),
(2, 2, '2017-08-12', 'menjalankan amanah dari orang tua', 'Allah SWT', '3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) unsigned NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, '1uXbJq5BFgmBsFfIG3AOp.', 1268889823, 1503957731, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '::1', 'Sekretariat', '$2y$08$2fnBYqq2DdbzVK0NiQhUr.A6OcR9ljKXYGEElB27F.M2084c5kcxi', NULL, 'nenyrestukinanthi@gmail.com', NULL, NULL, NULL, 'LzeoiY0.wown1.H/rv0qUO', 1503631127, 1503631320, 1, 'sekretariat', 'asnomo', 'disparbud', '082230782144');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
`id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(4, 2, 1),
(5, 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
 ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
 ADD PRIMARY KEY (`testid`);

--
-- Indexes for table `t_bk_nego`
--
ALTER TABLE `t_bk_nego`
 ADD PRIMARY KEY (`id_nego`);

--
-- Indexes for table `t_bk_penerimaan`
--
ALTER TABLE `t_bk_penerimaan`
 ADD PRIMARY KEY (`id_bk_penerimaan`);

--
-- Indexes for table `t_bk_pesanan`
--
ALTER TABLE `t_bk_pesanan`
 ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `t_register_sk`
--
ALTER TABLE `t_register_sk`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_reg_kontrak`
--
ALTER TABLE `t_reg_kontrak`
 ADD PRIMARY KEY (`id_kontrak`);

--
-- Indexes for table `t_surat_keluar`
--
ALTER TABLE `t_surat_keluar`
 ADD PRIMARY KEY (`id_srt_keluar`);

--
-- Indexes for table `t_surat_masuk`
--
ALTER TABLE `t_surat_masuk`
 ADD PRIMARY KEY (`id_srt_msk`);

--
-- Indexes for table `t_surat_tgs`
--
ALTER TABLE `t_surat_tgs`
 ADD PRIMARY KEY (`id_srt_tgs`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`), ADD KEY `fk_users_groups_users1_idx` (`user_id`), ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
MODIFY `id_peserta` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
MODIFY `testid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `t_bk_nego`
--
ALTER TABLE `t_bk_nego`
MODIFY `id_nego` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t_bk_penerimaan`
--
ALTER TABLE `t_bk_penerimaan`
MODIFY `id_bk_penerimaan` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `t_bk_pesanan`
--
ALTER TABLE `t_bk_pesanan`
MODIFY `id_pesanan` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_register_sk`
--
ALTER TABLE `t_register_sk`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_reg_kontrak`
--
ALTER TABLE `t_reg_kontrak`
MODIFY `id_kontrak` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_surat_keluar`
--
ALTER TABLE `t_surat_keluar`
MODIFY `id_srt_keluar` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_surat_masuk`
--
ALTER TABLE `t_surat_masuk`
MODIFY `id_srt_msk` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=286;
--
-- AUTO_INCREMENT for table `t_surat_tgs`
--
ALTER TABLE `t_surat_tgs`
MODIFY `id_srt_tgs` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
