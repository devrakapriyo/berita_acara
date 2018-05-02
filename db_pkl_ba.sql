-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2018 at 05:32 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_pkl_ba`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatt_cs`
--

CREATE TABLE IF NOT EXISTS `chatt_cs` (
`id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `chatt` text NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `chatt_fi`
--

CREATE TABLE IF NOT EXISTS `chatt_fi` (
  `id` int(11) NOT NULL DEFAULT '0',
  `nama` varchar(100) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `chatt` text NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chatt_si`
--

CREATE TABLE IF NOT EXISTS `chatt_si` (
`id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `chatt` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `chatt_to`
--

CREATE TABLE IF NOT EXISTS `chatt_to` (
`id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `chatt` text NOT NULL,
  `foto` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lcse`
--

CREATE TABLE IF NOT EXISTS `lcse` (
  `key` varchar(255) NOT NULL,
  `masaberlaku` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deskripsi` varchar(255) NOT NULL,
  `cc` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lcse`
--

INSERT INTO `lcse` (`key`, `masaberlaku`, `deskripsi`, `cc`, `created_at`, `updated_at`) VALUES
('eyJpdiI6IkFLVzVpWE5IUThOQVpJQ09NNHpEMmc9PSIsInZhbHVlIjoiT1FTZTJrRWVmK3ByNERlclJNU3ZWc0JtNStzUmlWVVRaYmlWWkdOTjNkMD0iLCJtYWMiOiJiOGNmMjkzZjNiNDFiODU3MDc1YjVhNmJiZDUyYTRjNTg3ZWRhNjU5NTczNGE2MTc5YzMzNGZjODU4OTgyYzhkIn0=', '2015-09-30 06:50:50', '', '', '2015-09-29 23:50:50', '2015-09-29 23:50:50'),
('eyJpdiI6InFubnlNXC9pSkQzdzhEeVpGYzdYeFRnPT0iLCJ2YWx1ZSI6ImR2Q1V4c3FHMVNvWk5pdG80TUNWdjdrbGlPQ2xIQVEwWjVaXC9LcUh5Zk8wPSIsIm1hYyI6IjkyNDU5YTlkMmZkYzVkYzhmNjQ3NDNmYTg5NDFmNzA3ZjgwMTg5ZTI4MTIyZWE0ZjhlOGE3NmEzYTIwZGY3YjMifQ==', '2015-09-30 06:59:49', '', '', '2015-09-29 23:59:49', '2015-09-29 23:59:49'),
('eyJpdiI6IjFaaDR0MDh2Mjc4SEZrZGhyNWhHTVE9PSIsInZhbHVlIjoiNnJudEZNUkxDUmlRbWc1OExcL1lrQ1wvRyt1a295ejdMSmsxNDg4UkxuM3JrPSIsIm1hYyI6Ijc2YTU5ZjliODkwN2JmMTBiN2MwNWNkZDZiYTY0NGUwYTU0MWU5NzljMWZjMjhjODZlNDcyMTkwMjIxNTNkNjkifQ==', '2015-09-30 07:01:13', '', '', '2015-09-30 00:01:13', '2015-09-30 00:01:13');

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
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `q_berita`
--
CREATE TABLE IF NOT EXISTS `q_berita` (
`id_to` int(10)
,`id_buat_ba` varchar(200)
,`id_cr` varchar(200)
,`no_bprp` varchar(200)
,`no_pengajuan` varchar(200)
,`nota_lama` varchar(200)
,`dok_pendukung` varchar(150)
,`id_user_to` int(10)
,`tgl_to` date
,`jam_to` time
,`status_to` varchar(20)
,`created_at` timestamp
,`updated_at` timestamp
,`nama_to` varchar(100)
,`jab_to` varchar(50)
,`foto_to` varchar(150)
,`nama_customer` varchar(100)
,`jenis_nota` varchar(50)
,`tagihan` varchar(100)
,`surat_kuasa` varchar(10)
,`nama_cr` varchar(100)
,`foto_cr` varchar(150)
,`tgl_cr` date
,`jab_cr` varchar(50)
,`jam_cr` time
,`terminal_operasi` varchar(100)
,`no_req` varchar(200)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `q_berita1`
--
CREATE TABLE IF NOT EXISTS `q_berita1` (
`id_to` int(10)
,`id_buat_ba` varchar(200)
,`id_cr` varchar(200)
,`no_bprp` varchar(200)
,`no_pengajuan` varchar(200)
,`nota_lama` varchar(200)
,`dok_pendukung` varchar(150)
,`id_user_to` int(10)
,`tgl_to` date
,`jam_to` time
,`status_to` varchar(20)
,`created_at` timestamp
,`updated_at` timestamp
,`nama_to` varchar(100)
,`jab_to` varchar(50)
,`foto_to` varchar(150)
,`nama_customer` varchar(100)
,`jenis_nota` varchar(50)
,`tagihan` varchar(100)
,`surat_kuasa` varchar(10)
,`nama_cr` varchar(100)
,`foto_cr` varchar(150)
,`tgl_cr` date
,`jab_cr` varchar(50)
,`jam_cr` time
,`terminal_operasi` varchar(100)
,`no_req` varchar(200)
,`tot_pengajuan` bigint(21)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `q_berita_si`
--
CREATE TABLE IF NOT EXISTS `q_berita_si` (
`id_si` int(10)
,`id_buat_ba` varchar(200)
,`nota_lama` varchar(200)
,`id_user_si` int(10)
,`tgl_si` date
,`jam_si` time
,`nota_baru` varchar(100)
,`tagihan_baru` varchar(200)
,`keterangan` varchar(200)
,`status_si` varchar(50)
,`created_at` timestamp
,`updated_at` timestamp
,`nama_si` varchar(100)
,`foto_si` varchar(150)
,`jab_si` varchar(50)
,`nama_customer` varchar(100)
,`dok_pendukung` varchar(150)
,`nama_to` varchar(100)
,`jab_to` varchar(50)
,`foto_to` varchar(150)
,`tgl_to` date
,`jam_to` time
,`no_pengajuan` varchar(200)
,`id_cr` varchar(200)
,`jenis_nota` varchar(50)
,`tagihan` varchar(100)
,`surat_kuasa` varchar(10)
,`nama_cr` varchar(100)
,`tgl_cr` date
,`foto_cr` varchar(150)
,`jab_cr` varchar(50)
,`jam_cr` time
,`terminal_operasi` varchar(100)
,`no_req` varchar(200)
,`no_bprp` varchar(200)
,`selisih` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `q_berita_si1`
--
CREATE TABLE IF NOT EXISTS `q_berita_si1` (
`id_si` int(10)
,`id_buat_ba` varchar(200)
,`nota_lama` varchar(200)
,`id_user_si` int(10)
,`tgl_si` date
,`jam_si` time
,`nota_baru` varchar(100)
,`tagihan_baru` varchar(200)
,`keterangan` varchar(200)
,`status_si` varchar(50)
,`created_at` timestamp
,`updated_at` timestamp
,`nama_si` varchar(100)
,`foto_si` varchar(150)
,`jab_si` varchar(50)
,`nama_customer` varchar(100)
,`dok_pendukung` varchar(150)
,`nama_to` varchar(100)
,`jab_to` varchar(50)
,`foto_to` varchar(150)
,`tgl_to` date
,`jam_to` time
,`no_pengajuan` varchar(200)
,`id_cr` varchar(200)
,`jenis_nota` varchar(50)
,`tagihan` varchar(100)
,`surat_kuasa` varchar(10)
,`nama_cr` varchar(100)
,`tgl_cr` date
,`foto_cr` varchar(150)
,`jab_cr` varchar(50)
,`jam_cr` time
,`terminal_operasi` varchar(100)
,`no_req` varchar(200)
,`no_bprp` varchar(200)
,`selisih` double
,`tot_pengajuan` bigint(21)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `q_cr`
--
CREATE TABLE IF NOT EXISTS `q_cr` (
`id_cs` int(20)
,`id_cr` varchar(200)
,`nama_customer` varchar(100)
,`no_pengajuan` varchar(200)
,`jenis_nota` varchar(50)
,`nota_lama` varchar(200)
,`tagihan` varchar(100)
,`surat_kuasa` varchar(10)
,`terminal_operasi` varchar(100)
,`id_user_cr` int(10)
,`tgl_cr` date
,`jam_cr` time
,`status_cr` varchar(20)
,`no_req` varchar(200)
,`created_at` timestamp
,`updated_at` timestamp
,`nama_cr` varchar(100)
,`foto_cr` varchar(150)
,`jab_cr` varchar(50)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `q_cr1`
--
CREATE TABLE IF NOT EXISTS `q_cr1` (
`id_cs` int(20)
,`id_cr` varchar(200)
,`nama_customer` varchar(100)
,`no_pengajuan` varchar(200)
,`jenis_nota` varchar(50)
,`nota_lama` varchar(200)
,`tagihan` varchar(100)
,`surat_kuasa` varchar(10)
,`terminal_operasi` varchar(100)
,`id_user_cr` int(10)
,`tgl_cr` date
,`jam_cr` time
,`status_cr` varchar(20)
,`no_req` varchar(200)
,`created_at` timestamp
,`updated_at` timestamp
,`nama_cr` varchar(100)
,`foto_cr` varchar(150)
,`jab_cr` varchar(50)
,`tot_pengajuan` bigint(21)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `q_detail_monitoring`
--
CREATE TABLE IF NOT EXISTS `q_detail_monitoring` (
`id_finance` int(10)
,`id_buat_ba` varchar(200)
,`nota_lama` varchar(200)
,`tgl_finance` varchar(100)
,`jam_finance` time
,`status_fi` varchar(20)
,`jml_finance` varchar(200)
,`id_user_finance` int(10)
,`created_at` timestamp
,`updated_at` timestamp
,`nama_finance` varchar(100)
,`jab_finance` varchar(100)
,`foto_finance` varchar(150)
,`id_cr` varchar(200)
,`nama_customer` varchar(100)
,`tgl_si` date
,`jam_si` time
,`nama_si` varchar(100)
,`jab_si` varchar(50)
,`foto_si` varchar(150)
,`dok_pendukung` varchar(150)
,`tgl_to` date
,`jam_to` time
,`no_pengajuan` varchar(200)
,`jenis_nota` varchar(50)
,`tagihan` varchar(100)
,`surat_kuasa` varchar(10)
,`nama_cr` varchar(100)
,`foto_cr` varchar(150)
,`tgl_cr` date
,`jab_cr` varchar(50)
,`jam_cr` time
,`nama_to` varchar(100)
,`foto_to` varchar(150)
,`jab_to` varchar(50)
,`terminal_operasi` varchar(100)
,`no_req` varchar(200)
,`nota_baru` varchar(100)
,`tagihan_baru` varchar(200)
,`selisih` double
,`keterangan` varchar(200)
,`tot_pengajuan` bigint(21)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `q_finance`
--
CREATE TABLE IF NOT EXISTS `q_finance` (
`id_finance` int(10)
,`id_buat_ba` varchar(200)
,`nota_lama` varchar(200)
,`tgl_finance` varchar(100)
,`jam_finance` time
,`status_fi` varchar(20)
,`jml_finance` varchar(200)
,`id_user_finance` int(10)
,`created_at` timestamp
,`updated_at` timestamp
,`nama_finance` varchar(100)
,`jab_finance` varchar(100)
,`foto_finance` varchar(150)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `q_monitoring`
--
CREATE TABLE IF NOT EXISTS `q_monitoring` (
`id_finance` int(10)
,`id_buat_ba` varchar(200)
,`nota_lama` varchar(200)
,`tgl_finance` varchar(100)
,`jam_finance` time
,`status_fi` varchar(20)
,`jml_finance` varchar(200)
,`id_user_finance` int(10)
,`created_at` timestamp
,`updated_at` timestamp
,`nama_finance` varchar(100)
,`jab_finance` varchar(100)
,`foto_finance` varchar(150)
,`id_cr` varchar(200)
,`nama_customer` varchar(100)
,`tgl_si` date
,`jam_si` time
,`nama_si` varchar(100)
,`jab_si` varchar(50)
,`foto_si` varchar(150)
,`dok_pendukung` varchar(150)
,`tgl_to` date
,`jam_to` time
,`no_pengajuan` varchar(200)
,`jenis_nota` varchar(50)
,`tagihan` varchar(100)
,`surat_kuasa` varchar(10)
,`nama_cr` varchar(100)
,`foto_cr` varchar(150)
,`tgl_cr` date
,`jab_cr` varchar(50)
,`jam_cr` time
,`nama_to` varchar(100)
,`foto_to` varchar(150)
,`jab_to` varchar(50)
,`terminal_operasi` varchar(100)
,`no_req` varchar(200)
,`nota_baru` varchar(100)
,`tagihan_baru` varchar(200)
,`selisih` double
,`keterangan` varchar(200)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `q_proses_ba`
--
CREATE TABLE IF NOT EXISTS `q_proses_ba` (
`id_cr` varchar(200)
,`pro_cr` varchar(1)
,`pro_to` varchar(1)
,`pro_si` varchar(1)
,`pro_fi` varchar(1)
,`tgl_proses` date
,`created_at` timestamp
,`updated_at` timestamp
,`nama_customer` varchar(100)
,`tot_pengajuan` bigint(21)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `q_si`
--
CREATE TABLE IF NOT EXISTS `q_si` (
`id_si` int(10)
,`id_buat_ba` varchar(200)
,`nota_lama` varchar(200)
,`id_user_si` int(10)
,`tgl_si` date
,`jam_si` time
,`nota_baru` varchar(100)
,`tagihan_baru` varchar(200)
,`keterangan` varchar(200)
,`status_si` varchar(50)
,`created_at` timestamp
,`updated_at` timestamp
,`nama_si` varchar(100)
,`foto_si` varchar(150)
,`jab_si` varchar(50)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `q_to`
--
CREATE TABLE IF NOT EXISTS `q_to` (
`id_to` int(10)
,`id_buat_ba` varchar(200)
,`id_cr` varchar(200)
,`no_bprp` varchar(200)
,`no_pengajuan` varchar(200)
,`nota_lama` varchar(200)
,`dok_pendukung` varchar(150)
,`id_user_to` int(10)
,`tgl_to` date
,`jam_to` time
,`status_to` varchar(20)
,`created_at` timestamp
,`updated_at` timestamp
,`nama_to` varchar(100)
,`jab_to` varchar(50)
,`foto_to` varchar(150)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `rpt_monitoring`
--
CREATE TABLE IF NOT EXISTS `rpt_monitoring` (
`nama_customer` varchar(200)
,`no_pengajuan` varchar(200)
,`tgl_cs` date
,`nota_lama` varchar(200)
,`jenis_nota` varchar(200)
,`tgl_kirim_to` date
,`tgl_kembalicr_to` date
,`tgl_kirim_datin` date
,`tgl_kembalicr_si` date
,`tagihan_awal` varchar(200)
,`tagihan_akhir` varchar(200)
,`tgl_kirim_keuangan` date
,`no_berita_acara` varchar(200)
,`nota_baru` varchar(200)
,`tgl_kirim_restitusi` date
,`id_warna` varchar(10)
,`jml_restitusi` double
,`lama_proses_cr` int(7)
,`lama_sd_selesai` int(7)
);
-- --------------------------------------------------------

--
-- Table structure for table `tb_buat_ba`
--

CREATE TABLE IF NOT EXISTS `tb_buat_ba` (
  `buat_ba` text NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `id_buat_ba` varchar(200) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buat_ba`
--

INSERT INTO `tb_buat_ba` (`buat_ba`, `updated_at`, `created_at`, `id_buat_ba`, `status`) VALUES
('<p style="text-align: center; margin: 0px;"><span style="text-decoration: underline;"><strong><span style="font-size: 14pt;">BERITA ACARA</span></strong> </span></p>\r\n<p style="text-align: center; margin: 0px;"><span style="font-size: 10pt;">NO. 238060-23-10-2015</span></p>\r\n<p style="text-align: center;"><span style="font-size: 12pt;"><strong>TENTANG</strong></span></p>\r\n<p style="text-align: center; margin: 0px;"><span style="font-size: 12pt;">PT. CIAPUS JAYA</span></p>\r\n<p style="text-align: left;"><span style="font-size: 10pt;">Pada hari ini Selasa tanggal 15 bulan 09 tahun Dua Ribu Lima Belas, yang bertanda tangan di bawah ini menyatakan bahwa:</span></p>\r\n<ol>\r\n<li><span style="font-size: 10pt;">Berdasarkan Nota Jasa Penumpukan dengan pemakaian jasa PT. CIAPUS JAYA sebagai berikut: (nota terlampir).</span></li>\r\n</ol>\r\n<div class="tabel">\r\n<table style="font-size: 12px; border-collapse: collapse; width: 100%;" border="2">\r\n<thead>\r\n<tr>\r\n<td class="aligcen">NO</td>\r\n<td class="aligcen">BPRP</td>\r\n<td class="aligcen">NO PENGAJUAN</td>\r\n<td class="aligcen">NO PERMOHONAN</td>\r\n<td class="aligcen">JENIS NOTA</td>\r\n<td class="aligcen">NOTA LAMA</td>\r\n<td class="aligcen">NO REQ</td>\r\n<td class="aligcen">TAGIHAN</td>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td class="aligcen">1</td>\r\n<td class="aligcen">839301-23-10-2015</td>\r\n<td class="aligcen">238060-23-10-2015</td>\r\n<td class="aligcen">17936-23-10-2015</td>\r\n<td class="aligcen">Kapal</td>\r\n<td class="aligcen">12345-2015</td>\r\n<td class="aligcen">ART-0910</td>\r\n<td class="aligcen">200000</td>\r\n</tr>\r\n<tr>\r\n<td class="aligcen">2</td>\r\n<td class="aligcen">73045-23-10-2015</td>\r\n<td class="aligcen">238060-23-10-2015</td>\r\n<td class="aligcen">17936-23-10-2015</td>\r\n<td class="aligcen">Barang</td>\r\n<td class="aligcen">54321-2015</td>\r\n<td class="aligcen">aTY-90-201</td>\r\n<td class="aligcen">30000</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n<ol>\r\n<li style="text-align: left;" value="2">\r\n<p style="margin: 0px;"><span style="font-size: 10pt;">Setelah diadakan penelitian atas dokumen tersebut diatas dapat kami jelaskan sebagai berikut:</span></p>\r\n<ol style="list-style-type: lower-alpha;">\r\n<li style="margin: 0.5em;"><span style="font-size: 10pt;">Bahwa tarif container 20" Empty pada Nota Jasa Penumpukan tersebut diatas adalah Rp. 17.500,-/Box seharusnya adalah sebesar Rp. 8.500,-/Box.</span></li>\r\n<li style="margin: 0.5em;"><span style="font-size: 10pt;">Terkait hal tersebut diatas, mohon dapat dikoreksi dan direstitusi Nota Jasa Penumpukan atas nama Pemakai Jasa PT. CIAPUS JAYA Sebesar Rp. 3.137.750,- (Tiga Juta Seratus Tiga Puluh Tujuh Ribu Tujuh Ratus Lima Puluh Rupiah).</span></li>\r\n</ol>\r\n</li>\r\n<li style="text-align: left;"><span style="font-size: 10pt;">Demikian Berita Acara ini di buat dengan sebenarnya untuk diketahui dan dapat dipergunakan seperlunya, apabila dikemudian hari terdapat kekeliruan dapat dibetulkan sebagaimana mestinya.</span></li>\r\n</ol>\r\n<table style="height: 218px; margin-left: auto; margin-right: auto;" border="0px" width="90%">\r\n<tbody>\r\n<tr style="text-align: left;">\r\n<td style="text-align: center;" colspan="3"><span style="font-size: 12pt;">Diverifikasi oleh :</span></td>\r\n</tr>\r\n<tr style="text-align: center;">\r\n<td><span style="font-size: 10pt;"><strong>JABATAN</strong></span></td>\r\n<td style="text-align: center;"><span style="font-size: 10pt;">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<strong>JABATAN</strong></span></td>\r\n<td style="text-align: center;"><span style="font-size: 10pt;">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<strong>JABATAN</strong></span></td>\r\n</tr>\r\n<tr style="text-align: center;">\r\n<td style="text-align: center;">&nbsp;</td>\r\n<td style="text-align: center;"><span style="font-size: 10pt;">&nbsp;</span></td>\r\n<td style="text-align: center;"><span style="font-size: 10pt;">&nbsp;</span></td>\r\n</tr>\r\n<tr style="text-align: center;">\r\n<td style="text-align: center;"><span style="font-size: 10pt;"><strong>NAMA</strong></span></td>\r\n<td style="text-align: center;"><span style="font-size: 10pt;">&nbsp;&nbsp;&nbsp;<strong>NAMA</strong></span></td>\r\n<td style="text-align: center;"><span style="font-size: 10pt;">&nbsp;&nbsp;&nbsp;<strong>NAMA</strong></span></td>\r\n</tr>\r\n<tr style="text-align: center;">\r\n<td style="text-align: center;" colspan="3">\r\n<p><span style="font-size: 10pt;">&nbsp;</span></p>\r\n<p><span style="font-size: 12pt;">Mengetahui :</span></p>\r\n</td>\r\n</tr>\r\n<tr style="text-align: center;">\r\n<td style="text-align: center;"><span style="font-size: 10pt;"><strong>JABATAN</strong></span></td>\r\n<td style="text-align: center;"><span style="font-size: 10pt;">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<strong>JABATAN</strong></span></td>\r\n<td style="text-align: center;"><span style="font-size: 10pt;">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<strong>JABATAN</strong></span></td>\r\n</tr>\r\n<tr style="text-align: center;">\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td><span style="font-size: 10pt;">&nbsp;</span></td>\r\n</tr>\r\n<tr style="text-align: center;">\r\n<td style="text-align: center;"><span style="font-size: 10pt;"><strong>NAMA</strong></span></td>\r\n<td style="text-align: center;"><span style="font-size: 10pt;">&nbsp;&nbsp;&nbsp;<strong>NAMA</strong></span></td>\r\n<td style="text-align: center;"><span style="font-size: 10pt;">&nbsp;&nbsp;&nbsp;<strong>NAMA</strong></span></td>\r\n</tr>\r\n</tbody>\r\n</table>', '2015-11-23 08:41:45', '2015-11-23 15:40:37', '238060-23-10-2015', 'tersedia'),
('<p style="text-align: center; margin: 0px;"><span style="text-decoration: underline;"><strong><span style="font-size: 14pt;">BERITA ACARA</span></strong> </span></p>\r\n<p style="text-align: center; margin: 0px;"><span style="font-size: 10pt;">NO. 238060-23-10-2015</span></p>\r\n<p style="text-align: center;"><span style="font-size: 12pt;"><strong>TENTANG</strong></span></p>\r\n<p style="text-align: center; margin: 0px;"><span style="font-size: 12pt;">PT. CIAPUS JAYA</span></p>\r\n<p style="text-align: left;"><span style="font-size: 10pt;">Pada hari ini Selasa tanggal 15 bulan 09 tahun Dua Ribu Lima Belas, yang bertanda tangan di bawah ini menyatakan bahwa:</span></p>\r\n<ol>\r\n<li><span style="font-size: 10pt;">Berdasarkan Nota Jasa Penumpukan dengan pemakaian jasa PT. CIAPUS JAYA sebagai berikut: (nota terlampir).</span></li>\r\n</ol>\r\n<div class="tabel">\r\n<table style="font-size: 12px; border-collapse: collapse; width: 100%;" border="2">\r\n<thead>\r\n<tr>\r\n<td class="aligcen">NO</td>\r\n<td class="aligcen">BPRP</td>\r\n<td class="aligcen">NO PENGAJUAN</td>\r\n<td class="aligcen">NO PERMOHONAN</td>\r\n<td class="aligcen">JENIS NOTA</td>\r\n<td class="aligcen">NOTA LAMA</td>\r\n<td class="aligcen">NO REQ</td>\r\n<td class="aligcen">TAGIHAN</td>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td class="aligcen">1</td>\r\n<td class="aligcen">839301-23-10-2015</td>\r\n<td class="aligcen">238060-23-10-2015</td>\r\n<td class="aligcen">17936-23-10-2015</td>\r\n<td class="aligcen">Kapal</td>\r\n<td class="aligcen">12345-2015</td>\r\n<td class="aligcen">ART-0910</td>\r\n<td class="aligcen">200000</td>\r\n</tr>\r\n<tr>\r\n<td class="aligcen">2</td>\r\n<td class="aligcen">73045-23-10-2015</td>\r\n<td class="aligcen">238060-23-10-2015</td>\r\n<td class="aligcen">17936-23-10-2015</td>\r\n<td class="aligcen">Barang</td>\r\n<td class="aligcen">54321-2015</td>\r\n<td class="aligcen">aTY-90-201</td>\r\n<td class="aligcen">30000</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n<ol>\r\n<li style="text-align: left;" value="2">\r\n<p style="margin: 0px;"><span style="font-size: 10pt;">Setelah diadakan penelitian atas dokumen tersebut diatas dapat kami jelaskan sebagai berikut:</span></p>\r\n<ol style="list-style-type: lower-alpha;">\r\n<li style="margin: 0.5em;"><span style="font-size: 10pt;">Bahwa tarif container 20" Empty pada Nota Jasa Penumpukan tersebut diatas adalah Rp. 17.500,-/Box seharusnya adalah sebesar Rp. 8.500,-/Box.</span></li>\r\n<li style="margin: 0.5em;"><span style="font-size: 10pt;">Terkait hal tersebut diatas, mohon dapat dikoreksi dan direstitusi Nota Jasa Penumpukan atas nama Pemakai Jasa PT. CIAPUS JAYA Sebesar Rp. 3.137.750,- (Tiga Juta Seratus Tiga Puluh Tujuh Ribu Tujuh Ratus Lima Puluh Rupiah).</span></li>\r\n</ol>\r\n</li>\r\n<li style="text-align: left;"><span style="font-size: 10pt;">Demikian Berita Acara ini di buat dengan sebenarnya untuk diketahui dan dapat dipergunakan seperlunya, apabila dikemudian hari terdapat kekeliruan dapat dibetulkan sebagaimana mestinya.</span></li>\r\n</ol>\r\n<table style="height: 218px; margin-left: auto; margin-right: auto;" border="0px" width="90%">\r\n<tbody>\r\n<tr style="text-align: left;">\r\n<td style="text-align: center;" colspan="3"><span style="font-size: 12pt;">Diverifikasi oleh :</span></td>\r\n</tr>\r\n<tr style="text-align: center;">\r\n<td><span style="font-size: 10pt;"><strong>JABATAN</strong></span></td>\r\n<td style="text-align: center;"><span style="font-size: 10pt;">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<strong>JABATAN</strong></span></td>\r\n<td style="text-align: center;"><span style="font-size: 10pt;">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<strong>JABATAN</strong></span></td>\r\n</tr>\r\n<tr style="text-align: center;">\r\n<td style="text-align: center;">&nbsp;</td>\r\n<td style="text-align: center;"><span style="font-size: 10pt;">&nbsp;</span></td>\r\n<td style="text-align: center;"><span style="font-size: 10pt;">&nbsp;</span></td>\r\n</tr>\r\n<tr style="text-align: center;">\r\n<td style="text-align: center;"><span style="font-size: 10pt;"><strong>NAMA</strong></span></td>\r\n<td style="text-align: center;"><span style="font-size: 10pt;">&nbsp;&nbsp;&nbsp;<strong>NAMA</strong></span></td>\r\n<td style="text-align: center;"><span style="font-size: 10pt;">&nbsp;&nbsp;&nbsp;<strong>NAMA</strong></span></td>\r\n</tr>\r\n<tr style="text-align: center;">\r\n<td style="text-align: center;" colspan="3">\r\n<p><span style="font-size: 10pt;">&nbsp;</span></p>\r\n<p><span style="font-size: 12pt;">Mengetahui :</span></p>\r\n</td>\r\n</tr>\r\n<tr style="text-align: center;">\r\n<td style="text-align: center;"><span style="font-size: 10pt;"><strong>JABATAN</strong></span></td>\r\n<td style="text-align: center;"><span style="font-size: 10pt;">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<strong>JABATAN</strong></span></td>\r\n<td style="text-align: center;"><span style="font-size: 10pt;">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<strong>JABATAN</strong></span></td>\r\n</tr>\r\n<tr style="text-align: center;">\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td><span style="font-size: 10pt;">&nbsp;</span></td>\r\n</tr>\r\n<tr style="text-align: center;">\r\n<td style="text-align: center;"><span style="font-size: 10pt;"><strong>NAMA</strong></span></td>\r\n<td style="text-align: center;"><span style="font-size: 10pt;">&nbsp;&nbsp;&nbsp;<strong>NAMA</strong></span></td>\r\n<td style="text-align: center;"><span style="font-size: 10pt;">&nbsp;&nbsp;&nbsp;<strong>NAMA</strong></span></td>\r\n</tr>\r\n</tbody>\r\n</table>', '2015-11-23 08:41:45', '2015-11-23 15:40:54', '238060-23-10-2015', 'tersedia');

-- --------------------------------------------------------

--
-- Stand-in structure for view `tb_buat_ba1`
--
CREATE TABLE IF NOT EXISTS `tb_buat_ba1` (
`buat_ba` text
,`updated_at` datetime
,`created_at` datetime
,`id_buat_ba` varchar(200)
,`status` varchar(25)
);
-- --------------------------------------------------------

--
-- Table structure for table `tb_cr`
--

CREATE TABLE IF NOT EXISTS `tb_cr` (
`id_cs` int(20) NOT NULL,
  `id_cr` varchar(200) NOT NULL,
  `nama_customer` varchar(100) NOT NULL,
  `no_pengajuan` varchar(200) NOT NULL,
  `jenis_nota` varchar(50) NOT NULL,
  `nota_lama` varchar(200) NOT NULL,
  `tagihan` varchar(100) NOT NULL,
  `surat_kuasa` varchar(10) NOT NULL,
  `terminal_operasi` varchar(100) NOT NULL,
  `id_user_cr` int(10) NOT NULL,
  `tgl_cr` date NOT NULL,
  `jam_cr` time NOT NULL,
  `status_cr` varchar(20) NOT NULL,
  `no_req` varchar(200) NOT NULL,
  `time` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_cr`
--

INSERT INTO `tb_cr` (`id_cs`, `id_cr`, `nama_customer`, `no_pengajuan`, `jenis_nota`, `nota_lama`, `tagihan`, `surat_kuasa`, `terminal_operasi`, `id_user_cr`, `tgl_cr`, `jam_cr`, `status_cr`, `no_req`, `time`, `created_at`, `updated_at`) VALUES
(1, '17936-23-10-2015', 'PT. CIAPUS JAYA', '238060-23-10-2015', 'Kapal', '12345-2015', '200000', 'Ada', 'TO 1', 1, '2015-11-23', '15:30:41', 'KONFIRMASI', 'ART-0910', '', '2015-11-23 08:40:53', '2015-11-23 08:40:53'),
(2, '17936-23-10-2015', 'PT. CIAPUS JAYA', '238060-23-10-2015', 'Barang', '54321-2015', '30000', 'Ada', 'TO 2', 1, '2015-11-23', '15:30:41', 'KONFIRMASI', 'aTY-90-201', '', '2015-11-23 08:40:53', '2015-11-23 08:40:53');

-- --------------------------------------------------------

--
-- Table structure for table `tb_finance`
--

CREATE TABLE IF NOT EXISTS `tb_finance` (
`id_finance` int(10) NOT NULL,
  `id_buat_ba` varchar(200) NOT NULL,
  `nota_lama` varchar(200) NOT NULL,
  `tgl_finance` varchar(100) NOT NULL,
  `jam_finance` time NOT NULL,
  `status_fi` varchar(20) NOT NULL,
  `jml_finance` varchar(200) NOT NULL,
  `id_user_finance` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_finance`
--

INSERT INTO `tb_finance` (`id_finance`, `id_buat_ba`, `nota_lama`, `tgl_finance`, `jam_finance`, `status_fi`, `jml_finance`, `id_user_finance`, `created_at`, `updated_at`) VALUES
(1, '238060-23-10-2015', '12345-2015', '2015-11-23', '15:50:27', 'NEW', 'Rp. 100000', 1, '2015-11-23 08:50:27', '2015-11-23 08:50:27'),
(2, '238060-23-10-2015', '54321-2015', '2015-11-23', '15:50:43', 'NEW', 'Rp. 28000', 1, '2015-11-23 08:50:43', '2015-11-23 08:50:43');

-- --------------------------------------------------------

--
-- Table structure for table `tb_proses_ba`
--

CREATE TABLE IF NOT EXISTS `tb_proses_ba` (
  `id_cr` varchar(200) NOT NULL,
  `pro_cr` varchar(1) NOT NULL,
  `pro_to` varchar(1) NOT NULL,
  `pro_si` varchar(1) NOT NULL,
  `pro_fi` varchar(1) NOT NULL,
  `tgl_proses` date NOT NULL,
  `time` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_proses_ba`
--

INSERT INTO `tb_proses_ba` (`id_cr`, `pro_cr`, `pro_to`, `pro_si`, `pro_fi`, `tgl_proses`, `time`, `created_at`, `updated_at`) VALUES
('17936-23-10-2015', '1', '1', '1', '1', '2015-11-23', '1448267323', '2015-11-23 08:50:44', '2015-11-23 08:50:44'),
('684154-23-10-2015', '1', '0', '0', '0', '2015-11-23', '1448269207', '2015-11-23 02:00:07', '2015-11-23 02:00:07'),
('853044-31-0-2016', '1', '0', '0', '0', '2016-01-31', '1454209551', '2016-01-30 20:05:51', '2016-01-30 20:05:51');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rpt_monitoring`
--

CREATE TABLE IF NOT EXISTS `tb_rpt_monitoring` (
  `nama_customer` varchar(200) NOT NULL,
  `no_pengajuan` varchar(200) NOT NULL,
  `tgl_cs` date NOT NULL,
  `nota_lama` varchar(200) NOT NULL,
  `jenis_nota` varchar(200) NOT NULL,
  `tgl_kirim_to` date NOT NULL,
  `tgl_kembalicr_to` date NOT NULL,
  `tgl_kirim_datin` date NOT NULL,
  `tgl_kembalicr_si` date NOT NULL,
  `tagihan_awal` varchar(200) NOT NULL,
  `tagihan_akhir` varchar(200) NOT NULL,
  `tgl_kirim_keuangan` date NOT NULL,
  `no_berita_acara` varchar(200) NOT NULL,
  `nota_baru` varchar(200) NOT NULL,
  `tgl_kirim_restitusi` date NOT NULL,
  `id_warna` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rpt_monitoring`
--

INSERT INTO `tb_rpt_monitoring` (`nama_customer`, `no_pengajuan`, `tgl_cs`, `nota_lama`, `jenis_nota`, `tgl_kirim_to`, `tgl_kembalicr_to`, `tgl_kirim_datin`, `tgl_kembalicr_si`, `tagihan_awal`, `tagihan_akhir`, `tgl_kirim_keuangan`, `no_berita_acara`, `nota_baru`, `tgl_kirim_restitusi`, `id_warna`, `created_at`, `updated_at`) VALUES
('PT. CIAPUS JAYA', '238060-23-10-2015', '2015-11-23', '12345-2015', 'Kapal', '2015-11-23', '2015-11-23', '2015-11-23', '2015-11-23', '200000', '100000', '2015-11-23', '238060-23-10-2015', '98978-2015', '2015-11-23', '1', '2015-11-23 08:50:28', '2015-11-23 08:50:28'),
('PT. CIAPUS JAYA', '238060-23-10-2015', '2015-11-23', '54321-2015', 'Barang', '2015-11-23', '2015-11-23', '2015-11-23', '2015-11-23', '30000', '2000', '2015-11-23', '238060-23-10-2015', '898999-2015', '2015-11-23', '1', '2015-11-23 08:50:44', '2015-11-23 08:50:44');

-- --------------------------------------------------------

--
-- Table structure for table `tb_si`
--

CREATE TABLE IF NOT EXISTS `tb_si` (
`id_si` int(10) NOT NULL,
  `id_buat_ba` varchar(200) NOT NULL,
  `nota_lama` varchar(200) NOT NULL,
  `id_user_si` int(10) NOT NULL,
  `tgl_si` date NOT NULL,
  `jam_si` time NOT NULL,
  `nota_baru` varchar(100) NOT NULL,
  `tagihan_baru` varchar(200) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `status_si` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_si`
--

INSERT INTO `tb_si` (`id_si`, `id_buat_ba`, `nota_lama`, `id_user_si`, `tgl_si`, `jam_si`, `nota_baru`, `tagihan_baru`, `keterangan`, `status_si`, `created_at`, `updated_at`) VALUES
(1, '238060-23-10-2015', '12345-2015', 1, '2015-11-23', '15:46:38', '98978-2015', '100000', 'pasal uud 1995', 'KONFIRMASI', '2016-11-19 14:59:55', '2016-11-19 07:59:55'),
(2, '238060-23-10-2015', '54321-2015', 1, '2015-11-23', '15:47:07', '898999-2015', '2000', 'pasal uud 1995', 'KONFIRMASI', '2016-11-19 15:00:16', '2016-11-19 08:00:16');

-- --------------------------------------------------------

--
-- Table structure for table `tb_to`
--

CREATE TABLE IF NOT EXISTS `tb_to` (
`id_to` int(10) NOT NULL,
  `id_buat_ba` varchar(200) NOT NULL,
  `id_cr` varchar(200) NOT NULL,
  `no_bprp` varchar(200) NOT NULL,
  `no_pengajuan` varchar(200) NOT NULL,
  `nota_lama` varchar(200) NOT NULL,
  `dok_pendukung` varchar(150) NOT NULL,
  `id_user_to` int(10) NOT NULL,
  `tgl_to` date NOT NULL,
  `jam_to` time NOT NULL,
  `status_to` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_to`
--

INSERT INTO `tb_to` (`id_to`, `id_buat_ba`, `id_cr`, `no_bprp`, `no_pengajuan`, `nota_lama`, `dok_pendukung`, `id_user_to`, `tgl_to`, `jam_to`, `status_to`, `created_at`, `updated_at`) VALUES
(1, '238060-23-10-2015', '17936-23-10-2015', '839301-23-10-2015', '238060-23-10-2015', '12345-2015', 'Laporan PKL.docx', 2, '2015-11-23', '15:40:37', 'KONFIRMASI', '2015-11-23 08:47:07', '2015-11-23 08:47:07'),
(2, '238060-23-10-2015', '17936-23-10-2015', '73045-23-10-2015', '238060-23-10-2015', '54321-2015', 'Laporan PKL.docx', 2, '2015-11-23', '15:40:53', 'KONFIRMASI', '2015-11-23 08:47:07', '2015-11-23 08:47:07');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_cr`
--

CREATE TABLE IF NOT EXISTS `tb_user_cr` (
`id_user_cr` int(10) NOT NULL,
  `nipp_cr` varchar(100) NOT NULL,
  `nama_cr` varchar(100) NOT NULL,
  `user_cr` varchar(100) NOT NULL,
  `pass_cr` text NOT NULL,
  `jab_cr` varchar(50) NOT NULL,
  `foto_cr` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_user_cr`
--

INSERT INTO `tb_user_cr` (`id_user_cr`, `nipp_cr`, `nama_cr`, `user_cr`, `pass_cr`, `jab_cr`, `foto_cr`, `created_at`, `updated_at`) VALUES
(1, 'Adit', 'Aditya Maulana AKbar', '', '$2y$10$.N//paa.lYJq3vsUFuIVxeLgSMmf.jIUWVf1RT8oA.7moIB8pPfUS', 'Customer Relation', '', '2015-11-22 19:29:26', '2015-11-22 19:29:26');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_finance`
--

CREATE TABLE IF NOT EXISTS `tb_user_finance` (
`id_user_finance` int(10) NOT NULL,
  `nipp_finance` varchar(100) NOT NULL,
  `nama_finance` varchar(100) NOT NULL,
  `user_finance` varchar(100) NOT NULL,
  `pass_finance` text NOT NULL,
  `jab_finance` varchar(100) NOT NULL,
  `foto_finance` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_user_finance`
--

INSERT INTO `tb_user_finance` (`id_user_finance`, `nipp_finance`, `nama_finance`, `user_finance`, `pass_finance`, `jab_finance`, `foto_finance`, `created_at`, `updated_at`) VALUES
(1, 'Wahyu', 'Wahyu Sahaja', '', '$2y$10$OwNkRJGabAX2azWWRRcpkuAHSN7wrG9/cmBoAl1yZKt4EIxvQETqa', 'Finance', '', '2015-11-22 19:37:09', '2015-11-22 19:37:09');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_si`
--

CREATE TABLE IF NOT EXISTS `tb_user_si` (
`id_user_si` int(10) NOT NULL,
  `nipp_si` varchar(100) NOT NULL,
  `nama_si` varchar(100) NOT NULL,
  `jab_si` varchar(50) NOT NULL,
  `user_si` varchar(100) NOT NULL,
  `pass_si` text NOT NULL,
  `foto_si` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_user_si`
--

INSERT INTO `tb_user_si` (`id_user_si`, `nipp_si`, `nama_si`, `jab_si`, `user_si`, `pass_si`, `foto_si`, `created_at`, `updated_at`) VALUES
(1, 'Raka', 'Raka Priyo Rachmanda', 'Data dan Informasi', '', '$2y$10$hhey5NCH0AJwUunpgtTWSeRL08I474SuKmMDsElJK9oDXYDxZp2ae', '', '2015-11-22 19:34:35', '2015-11-22 19:34:35');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_to`
--

CREATE TABLE IF NOT EXISTS `tb_user_to` (
`id_user_to` int(10) NOT NULL,
  `nipp_to` varchar(100) NOT NULL,
  `nama_to` varchar(100) NOT NULL,
  `user_to` varchar(100) NOT NULL,
  `pass_to` text NOT NULL,
  `jab_to` varchar(50) NOT NULL,
  `foto_to` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_user_to`
--

INSERT INTO `tb_user_to` (`id_user_to`, `nipp_to`, `nama_to`, `user_to`, `pass_to`, `jab_to`, `foto_to`, `created_at`, `updated_at`) VALUES
(1, 'Dimas', 'Dimas Adi Satria', '', '$2y$10$n8HUye0YNQAPRgToVnKzBOW.YBbiGQF/MP0.4XGWIgqX6BlRRRNBC', 'Terminal Operation', '', '2015-11-22 19:32:47', '2015-11-22 19:32:47'),
(2, 'dimasadi', 'bambang', '', '$2y$10$calAWoklJ0ZyfvKTJttSKOEvQaZyNbNJTxFmKR0qGD01WBWNNh1Yu', 'Terminal Operation', '', '2015-11-23 01:38:58', '2015-11-23 01:38:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jab` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `jab`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Admin Utama', 'Admin', '$2y$10$xXhgGr5j/Dlrj.vytnSBbOOSNGNxwChktgj8o6ZahYjCvV8XWH29S', 'yZTzsFPg9A40D65mbIAvSFh7wVsx9H0DkPc1FG8S0IWjXd5fGdHCuqjPrIjT', 'Admin', 'Masjid-Qolsharif-1024x768.jpg', '0000-00-00 00:00:00', '2015-11-23 01:39:06'),
(18, 'Mochamad Suhada', 'Suhada', '$2y$10$xXhgGr5j/Dlrj.vytnSBbOOSNGNxwChktgj8o6ZahYjCvV8XWH29S', NULL, 'Admin', '100_3492 (2).JPG', '2015-11-22 19:28:22', '2015-11-22 23:51:28'),
(19, 'Customer Service', 'cs', '$2y$10$xXhgGr5j/Dlrj.vytnSBbOOSNGNxwChktgj8o6ZahYjCvV8XWH29S', 'U16ZTwPkYLPB727TWl91S4LOPmGpH0nEQnYt5JrCDaEtNkR6OWNmSAxtcmu1', 'Customer Relation', 'call_of_duty_black_ops_3-1366x768.jpg', '2015-11-22 19:29:26', '2015-11-23 02:03:08'),
(20, 'Terminal Opration', 'to', '$2y$10$xXhgGr5j/Dlrj.vytnSBbOOSNGNxwChktgj8o6ZahYjCvV8XWH29S', 'IYMBBaPjQNVgzqpLGKpy668X0ynG0H25dTVbaMEOggbuDRc7S30864bxe12r', 'Terminal Operasi', 'call_of_duty_black_ops_3-1366x768.jpg', '2015-11-22 19:32:46', '2015-11-22 23:52:42'),
(21, 'Data Information', 'datin', '$2y$10$xXhgGr5j/Dlrj.vytnSBbOOSNGNxwChktgj8o6ZahYjCvV8XWH29S', 'TEnjidpLoJQvb5U0vmAm0xQw8ZcgENzfUI38TcbHJWsfwk3Qp0rRc72DoPLk', 'Data dan Informasi', '100_3492 (2).JPG', '2015-11-22 19:34:34', '2016-11-19 08:01:34'),
(22, 'Finance', 'finance', '$2y$10$xXhgGr5j/Dlrj.vytnSBbOOSNGNxwChktgj8o6ZahYjCvV8XWH29S', NULL, 'Finance', 'call_of_duty_black_ops_3-1366x768.jpg', '2015-11-22 19:37:09', '2015-11-22 19:37:09'),
(23, 'Customer', 'customer', '$2y$10$xXhgGr5j/Dlrj.vytnSBbOOSNGNxwChktgj8o6ZahYjCvV8XWH29S', NULL, 'User', 'steve-jobs-typographic-portrait-wallpaper-for-1366x768-67-574.jpg', '2015-11-22 19:38:19', '2015-11-22 19:38:19'),
(25, 'Dimas', 'dimas', '$2y$10$xXhgGr5j/Dlrj.vytnSBbOOSNGNxwChktgj8o6ZahYjCvV8XWH29S', 'GZ2UFqUxGHelUfGx5n1EnXUeTMQEg5qrEIp3laPX3CDq3jokwgPRm115fEIh', 'Terminal Operation', 'IMG_5987.jpg', '2015-11-23 01:38:58', '2015-11-23 01:43:49');

-- --------------------------------------------------------

--
-- Structure for view `q_berita`
--
DROP TABLE IF EXISTS `q_berita`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `q_berita` AS select `q_to`.`id_to` AS `id_to`,`q_to`.`id_buat_ba` AS `id_buat_ba`,`q_to`.`id_cr` AS `id_cr`,`q_to`.`no_bprp` AS `no_bprp`,`q_to`.`no_pengajuan` AS `no_pengajuan`,`q_to`.`nota_lama` AS `nota_lama`,`q_to`.`dok_pendukung` AS `dok_pendukung`,`q_to`.`id_user_to` AS `id_user_to`,`q_to`.`tgl_to` AS `tgl_to`,`q_to`.`jam_to` AS `jam_to`,`q_to`.`status_to` AS `status_to`,`q_to`.`created_at` AS `created_at`,`q_to`.`updated_at` AS `updated_at`,`q_to`.`nama_to` AS `nama_to`,`q_to`.`jab_to` AS `jab_to`,`q_to`.`foto_to` AS `foto_to`,`q_cr`.`nama_customer` AS `nama_customer`,`q_cr`.`jenis_nota` AS `jenis_nota`,`q_cr`.`tagihan` AS `tagihan`,`q_cr`.`surat_kuasa` AS `surat_kuasa`,`q_cr`.`nama_cr` AS `nama_cr`,`q_cr`.`foto_cr` AS `foto_cr`,`q_cr`.`tgl_cr` AS `tgl_cr`,`q_cr`.`jab_cr` AS `jab_cr`,`q_cr`.`jam_cr` AS `jam_cr`,`q_cr`.`terminal_operasi` AS `terminal_operasi`,`q_cr`.`no_req` AS `no_req` from (`q_to` join `q_cr` on((`q_cr`.`nota_lama` = `q_to`.`nota_lama`)));

-- --------------------------------------------------------

--
-- Structure for view `q_berita1`
--
DROP TABLE IF EXISTS `q_berita1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `q_berita1` AS select `q_berita`.`id_to` AS `id_to`,`q_berita`.`id_buat_ba` AS `id_buat_ba`,`q_berita`.`id_cr` AS `id_cr`,`q_berita`.`no_bprp` AS `no_bprp`,`q_berita`.`no_pengajuan` AS `no_pengajuan`,`q_berita`.`nota_lama` AS `nota_lama`,`q_berita`.`dok_pendukung` AS `dok_pendukung`,`q_berita`.`id_user_to` AS `id_user_to`,`q_berita`.`tgl_to` AS `tgl_to`,`q_berita`.`jam_to` AS `jam_to`,`q_berita`.`status_to` AS `status_to`,`q_berita`.`created_at` AS `created_at`,`q_berita`.`updated_at` AS `updated_at`,`q_berita`.`nama_to` AS `nama_to`,`q_berita`.`jab_to` AS `jab_to`,`q_berita`.`foto_to` AS `foto_to`,`q_berita`.`nama_customer` AS `nama_customer`,`q_berita`.`jenis_nota` AS `jenis_nota`,`q_berita`.`tagihan` AS `tagihan`,`q_berita`.`surat_kuasa` AS `surat_kuasa`,`q_berita`.`nama_cr` AS `nama_cr`,`q_berita`.`foto_cr` AS `foto_cr`,`q_berita`.`tgl_cr` AS `tgl_cr`,`q_berita`.`jab_cr` AS `jab_cr`,`q_berita`.`jam_cr` AS `jam_cr`,`q_berita`.`terminal_operasi` AS `terminal_operasi`,`q_berita`.`no_req` AS `no_req`,count(`q_berita`.`id_cr`) AS `tot_pengajuan` from `q_berita` group by `q_berita`.`id_cr`;

-- --------------------------------------------------------

--
-- Structure for view `q_berita_si`
--
DROP TABLE IF EXISTS `q_berita_si`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `q_berita_si` AS select `q_si`.`id_si` AS `id_si`,`q_si`.`id_buat_ba` AS `id_buat_ba`,`q_si`.`nota_lama` AS `nota_lama`,`q_si`.`id_user_si` AS `id_user_si`,`q_si`.`tgl_si` AS `tgl_si`,`q_si`.`jam_si` AS `jam_si`,`q_si`.`nota_baru` AS `nota_baru`,`q_si`.`tagihan_baru` AS `tagihan_baru`,`q_si`.`keterangan` AS `keterangan`,`q_si`.`status_si` AS `status_si`,`q_si`.`created_at` AS `created_at`,`q_si`.`updated_at` AS `updated_at`,`q_si`.`nama_si` AS `nama_si`,`q_si`.`foto_si` AS `foto_si`,`q_si`.`jab_si` AS `jab_si`,`q_berita`.`nama_customer` AS `nama_customer`,`q_berita`.`dok_pendukung` AS `dok_pendukung`,`q_berita`.`nama_to` AS `nama_to`,`q_berita`.`jab_to` AS `jab_to`,`q_berita`.`foto_to` AS `foto_to`,`q_berita`.`tgl_to` AS `tgl_to`,`q_berita`.`jam_to` AS `jam_to`,`q_berita`.`no_pengajuan` AS `no_pengajuan`,`q_berita`.`id_cr` AS `id_cr`,`q_berita`.`jenis_nota` AS `jenis_nota`,`q_berita`.`tagihan` AS `tagihan`,`q_berita`.`surat_kuasa` AS `surat_kuasa`,`q_berita`.`nama_cr` AS `nama_cr`,`q_berita`.`tgl_cr` AS `tgl_cr`,`q_berita`.`foto_cr` AS `foto_cr`,`q_berita`.`jab_cr` AS `jab_cr`,`q_berita`.`jam_cr` AS `jam_cr`,`q_berita`.`terminal_operasi` AS `terminal_operasi`,`q_berita`.`no_req` AS `no_req`,`q_berita`.`no_bprp` AS `no_bprp`,(`q_berita`.`tagihan` - `q_si`.`tagihan_baru`) AS `selisih` from (`q_si` join `q_berita` on((`q_berita`.`nota_lama` = `q_si`.`nota_lama`)));

-- --------------------------------------------------------

--
-- Structure for view `q_berita_si1`
--
DROP TABLE IF EXISTS `q_berita_si1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `q_berita_si1` AS select `q_berita_si`.`id_si` AS `id_si`,`q_berita_si`.`id_buat_ba` AS `id_buat_ba`,`q_berita_si`.`nota_lama` AS `nota_lama`,`q_berita_si`.`id_user_si` AS `id_user_si`,`q_berita_si`.`tgl_si` AS `tgl_si`,`q_berita_si`.`jam_si` AS `jam_si`,`q_berita_si`.`nota_baru` AS `nota_baru`,`q_berita_si`.`tagihan_baru` AS `tagihan_baru`,`q_berita_si`.`keterangan` AS `keterangan`,`q_berita_si`.`status_si` AS `status_si`,`q_berita_si`.`created_at` AS `created_at`,`q_berita_si`.`updated_at` AS `updated_at`,`q_berita_si`.`nama_si` AS `nama_si`,`q_berita_si`.`foto_si` AS `foto_si`,`q_berita_si`.`jab_si` AS `jab_si`,`q_berita_si`.`nama_customer` AS `nama_customer`,`q_berita_si`.`dok_pendukung` AS `dok_pendukung`,`q_berita_si`.`nama_to` AS `nama_to`,`q_berita_si`.`jab_to` AS `jab_to`,`q_berita_si`.`foto_to` AS `foto_to`,`q_berita_si`.`tgl_to` AS `tgl_to`,`q_berita_si`.`jam_to` AS `jam_to`,`q_berita_si`.`no_pengajuan` AS `no_pengajuan`,`q_berita_si`.`id_cr` AS `id_cr`,`q_berita_si`.`jenis_nota` AS `jenis_nota`,`q_berita_si`.`tagihan` AS `tagihan`,`q_berita_si`.`surat_kuasa` AS `surat_kuasa`,`q_berita_si`.`nama_cr` AS `nama_cr`,`q_berita_si`.`tgl_cr` AS `tgl_cr`,`q_berita_si`.`foto_cr` AS `foto_cr`,`q_berita_si`.`jab_cr` AS `jab_cr`,`q_berita_si`.`jam_cr` AS `jam_cr`,`q_berita_si`.`terminal_operasi` AS `terminal_operasi`,`q_berita_si`.`no_req` AS `no_req`,`q_berita_si`.`no_bprp` AS `no_bprp`,`q_berita_si`.`selisih` AS `selisih`,count(`q_berita_si`.`id_cr`) AS `tot_pengajuan` from `q_berita_si` group by `q_berita_si`.`id_cr`;

-- --------------------------------------------------------

--
-- Structure for view `q_cr`
--
DROP TABLE IF EXISTS `q_cr`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `q_cr` AS select `tb_cr`.`id_cs` AS `id_cs`,`tb_cr`.`id_cr` AS `id_cr`,`tb_cr`.`nama_customer` AS `nama_customer`,`tb_cr`.`no_pengajuan` AS `no_pengajuan`,`tb_cr`.`jenis_nota` AS `jenis_nota`,`tb_cr`.`nota_lama` AS `nota_lama`,`tb_cr`.`tagihan` AS `tagihan`,`tb_cr`.`surat_kuasa` AS `surat_kuasa`,`tb_cr`.`terminal_operasi` AS `terminal_operasi`,`tb_cr`.`id_user_cr` AS `id_user_cr`,`tb_cr`.`tgl_cr` AS `tgl_cr`,`tb_cr`.`jam_cr` AS `jam_cr`,`tb_cr`.`status_cr` AS `status_cr`,`tb_cr`.`no_req` AS `no_req`,`tb_cr`.`created_at` AS `created_at`,`tb_cr`.`updated_at` AS `updated_at`,`tb_user_cr`.`nama_cr` AS `nama_cr`,`tb_user_cr`.`foto_cr` AS `foto_cr`,`tb_user_cr`.`jab_cr` AS `jab_cr` from (`tb_cr` join `tb_user_cr` on((`tb_user_cr`.`id_user_cr` = `tb_cr`.`id_user_cr`)));

-- --------------------------------------------------------

--
-- Structure for view `q_cr1`
--
DROP TABLE IF EXISTS `q_cr1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `q_cr1` AS select `q_cr`.`id_cs` AS `id_cs`,`q_cr`.`id_cr` AS `id_cr`,`q_cr`.`nama_customer` AS `nama_customer`,`q_cr`.`no_pengajuan` AS `no_pengajuan`,`q_cr`.`jenis_nota` AS `jenis_nota`,`q_cr`.`nota_lama` AS `nota_lama`,`q_cr`.`tagihan` AS `tagihan`,`q_cr`.`surat_kuasa` AS `surat_kuasa`,`q_cr`.`terminal_operasi` AS `terminal_operasi`,`q_cr`.`id_user_cr` AS `id_user_cr`,`q_cr`.`tgl_cr` AS `tgl_cr`,`q_cr`.`jam_cr` AS `jam_cr`,`q_cr`.`status_cr` AS `status_cr`,`q_cr`.`no_req` AS `no_req`,`q_cr`.`created_at` AS `created_at`,`q_cr`.`updated_at` AS `updated_at`,`q_cr`.`nama_cr` AS `nama_cr`,`q_cr`.`foto_cr` AS `foto_cr`,`q_cr`.`jab_cr` AS `jab_cr`,count(`q_cr`.`id_cr`) AS `tot_pengajuan` from `q_cr` group by `q_cr`.`id_cr`;

-- --------------------------------------------------------

--
-- Structure for view `q_detail_monitoring`
--
DROP TABLE IF EXISTS `q_detail_monitoring`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `q_detail_monitoring` AS select `q_monitoring`.`id_finance` AS `id_finance`,`q_monitoring`.`id_buat_ba` AS `id_buat_ba`,`q_monitoring`.`nota_lama` AS `nota_lama`,`q_monitoring`.`tgl_finance` AS `tgl_finance`,`q_monitoring`.`jam_finance` AS `jam_finance`,`q_monitoring`.`status_fi` AS `status_fi`,`q_monitoring`.`jml_finance` AS `jml_finance`,`q_monitoring`.`id_user_finance` AS `id_user_finance`,`q_monitoring`.`created_at` AS `created_at`,`q_monitoring`.`updated_at` AS `updated_at`,`q_monitoring`.`nama_finance` AS `nama_finance`,`q_monitoring`.`jab_finance` AS `jab_finance`,`q_monitoring`.`foto_finance` AS `foto_finance`,`q_monitoring`.`id_cr` AS `id_cr`,`q_monitoring`.`nama_customer` AS `nama_customer`,`q_monitoring`.`tgl_si` AS `tgl_si`,`q_monitoring`.`jam_si` AS `jam_si`,`q_monitoring`.`nama_si` AS `nama_si`,`q_monitoring`.`jab_si` AS `jab_si`,`q_monitoring`.`foto_si` AS `foto_si`,`q_monitoring`.`dok_pendukung` AS `dok_pendukung`,`q_monitoring`.`tgl_to` AS `tgl_to`,`q_monitoring`.`jam_to` AS `jam_to`,`q_monitoring`.`no_pengajuan` AS `no_pengajuan`,`q_monitoring`.`jenis_nota` AS `jenis_nota`,`q_monitoring`.`tagihan` AS `tagihan`,`q_monitoring`.`surat_kuasa` AS `surat_kuasa`,`q_monitoring`.`nama_cr` AS `nama_cr`,`q_monitoring`.`foto_cr` AS `foto_cr`,`q_monitoring`.`tgl_cr` AS `tgl_cr`,`q_monitoring`.`jab_cr` AS `jab_cr`,`q_monitoring`.`jam_cr` AS `jam_cr`,`q_monitoring`.`nama_to` AS `nama_to`,`q_monitoring`.`foto_to` AS `foto_to`,`q_monitoring`.`jab_to` AS `jab_to`,`q_monitoring`.`terminal_operasi` AS `terminal_operasi`,`q_monitoring`.`no_req` AS `no_req`,`q_monitoring`.`nota_baru` AS `nota_baru`,`q_monitoring`.`tagihan_baru` AS `tagihan_baru`,`q_monitoring`.`selisih` AS `selisih`,`q_monitoring`.`keterangan` AS `keterangan`,count(`q_monitoring`.`id_cr`) AS `tot_pengajuan` from `q_monitoring` group by `q_monitoring`.`id_cr`;

-- --------------------------------------------------------

--
-- Structure for view `q_finance`
--
DROP TABLE IF EXISTS `q_finance`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `q_finance` AS select `tb_finance`.`id_finance` AS `id_finance`,`tb_finance`.`id_buat_ba` AS `id_buat_ba`,`tb_finance`.`nota_lama` AS `nota_lama`,`tb_finance`.`tgl_finance` AS `tgl_finance`,`tb_finance`.`jam_finance` AS `jam_finance`,`tb_finance`.`status_fi` AS `status_fi`,`tb_finance`.`jml_finance` AS `jml_finance`,`tb_finance`.`id_user_finance` AS `id_user_finance`,`tb_finance`.`created_at` AS `created_at`,`tb_finance`.`updated_at` AS `updated_at`,`tb_user_finance`.`nama_finance` AS `nama_finance`,`tb_user_finance`.`jab_finance` AS `jab_finance`,`tb_user_finance`.`foto_finance` AS `foto_finance` from (`tb_finance` join `tb_user_finance` on((`tb_user_finance`.`id_user_finance` = `tb_finance`.`id_user_finance`)));

-- --------------------------------------------------------

--
-- Structure for view `q_monitoring`
--
DROP TABLE IF EXISTS `q_monitoring`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `q_monitoring` AS select `q_finance`.`id_finance` AS `id_finance`,`q_finance`.`id_buat_ba` AS `id_buat_ba`,`q_finance`.`nota_lama` AS `nota_lama`,`q_finance`.`tgl_finance` AS `tgl_finance`,`q_finance`.`jam_finance` AS `jam_finance`,`q_finance`.`status_fi` AS `status_fi`,`q_finance`.`jml_finance` AS `jml_finance`,`q_finance`.`id_user_finance` AS `id_user_finance`,`q_finance`.`created_at` AS `created_at`,`q_finance`.`updated_at` AS `updated_at`,`q_finance`.`nama_finance` AS `nama_finance`,`q_finance`.`jab_finance` AS `jab_finance`,`q_finance`.`foto_finance` AS `foto_finance`,`q_berita_si`.`id_cr` AS `id_cr`,`q_berita_si`.`nama_customer` AS `nama_customer`,`q_berita_si`.`tgl_si` AS `tgl_si`,`q_berita_si`.`jam_si` AS `jam_si`,`q_berita_si`.`nama_si` AS `nama_si`,`q_berita_si`.`jab_si` AS `jab_si`,`q_berita_si`.`foto_si` AS `foto_si`,`q_berita_si`.`dok_pendukung` AS `dok_pendukung`,`q_berita_si`.`tgl_to` AS `tgl_to`,`q_berita_si`.`jam_to` AS `jam_to`,`q_berita_si`.`no_pengajuan` AS `no_pengajuan`,`q_berita_si`.`jenis_nota` AS `jenis_nota`,`q_berita_si`.`tagihan` AS `tagihan`,`q_berita_si`.`surat_kuasa` AS `surat_kuasa`,`q_berita_si`.`nama_cr` AS `nama_cr`,`q_berita_si`.`foto_cr` AS `foto_cr`,`q_berita_si`.`tgl_cr` AS `tgl_cr`,`q_berita_si`.`jab_cr` AS `jab_cr`,`q_berita_si`.`jam_cr` AS `jam_cr`,`q_berita_si`.`nama_to` AS `nama_to`,`q_berita_si`.`foto_to` AS `foto_to`,`q_berita_si`.`jab_to` AS `jab_to`,`q_berita_si`.`terminal_operasi` AS `terminal_operasi`,`q_berita_si`.`no_req` AS `no_req`,`q_berita_si`.`nota_baru` AS `nota_baru`,`q_berita_si`.`tagihan_baru` AS `tagihan_baru`,`q_berita_si`.`selisih` AS `selisih`,`q_berita_si`.`keterangan` AS `keterangan` from (`q_finance` join `q_berita_si` on((`q_berita_si`.`nota_lama` = `q_finance`.`nota_lama`)));

-- --------------------------------------------------------

--
-- Structure for view `q_proses_ba`
--
DROP TABLE IF EXISTS `q_proses_ba`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `q_proses_ba` AS select `tb_proses_ba`.`id_cr` AS `id_cr`,`tb_proses_ba`.`pro_cr` AS `pro_cr`,`tb_proses_ba`.`pro_to` AS `pro_to`,`tb_proses_ba`.`pro_si` AS `pro_si`,`tb_proses_ba`.`pro_fi` AS `pro_fi`,`tb_proses_ba`.`tgl_proses` AS `tgl_proses`,`tb_proses_ba`.`created_at` AS `created_at`,`tb_proses_ba`.`updated_at` AS `updated_at`,`tb_cr`.`nama_customer` AS `nama_customer`,count(`tb_cr`.`no_pengajuan`) AS `tot_pengajuan` from (`tb_proses_ba` join `tb_cr` on((`tb_cr`.`id_cr` = `tb_proses_ba`.`id_cr`))) group by `tb_proses_ba`.`id_cr`;

-- --------------------------------------------------------

--
-- Structure for view `q_si`
--
DROP TABLE IF EXISTS `q_si`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `q_si` AS select `tb_si`.`id_si` AS `id_si`,`tb_si`.`id_buat_ba` AS `id_buat_ba`,`tb_si`.`nota_lama` AS `nota_lama`,`tb_si`.`id_user_si` AS `id_user_si`,`tb_si`.`tgl_si` AS `tgl_si`,`tb_si`.`jam_si` AS `jam_si`,`tb_si`.`nota_baru` AS `nota_baru`,`tb_si`.`tagihan_baru` AS `tagihan_baru`,`tb_si`.`keterangan` AS `keterangan`,`tb_si`.`status_si` AS `status_si`,`tb_si`.`created_at` AS `created_at`,`tb_si`.`updated_at` AS `updated_at`,`tb_user_si`.`nama_si` AS `nama_si`,`tb_user_si`.`foto_si` AS `foto_si`,`tb_user_si`.`jab_si` AS `jab_si` from (`tb_si` join `tb_user_si` on((`tb_user_si`.`id_user_si` = `tb_si`.`id_user_si`)));

-- --------------------------------------------------------

--
-- Structure for view `q_to`
--
DROP TABLE IF EXISTS `q_to`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `q_to` AS select `tb_to`.`id_to` AS `id_to`,`tb_to`.`id_buat_ba` AS `id_buat_ba`,`tb_to`.`id_cr` AS `id_cr`,`tb_to`.`no_bprp` AS `no_bprp`,`tb_to`.`no_pengajuan` AS `no_pengajuan`,`tb_to`.`nota_lama` AS `nota_lama`,`tb_to`.`dok_pendukung` AS `dok_pendukung`,`tb_to`.`id_user_to` AS `id_user_to`,`tb_to`.`tgl_to` AS `tgl_to`,`tb_to`.`jam_to` AS `jam_to`,`tb_to`.`status_to` AS `status_to`,`tb_to`.`created_at` AS `created_at`,`tb_to`.`updated_at` AS `updated_at`,`tb_user_to`.`nama_to` AS `nama_to`,`tb_user_to`.`jab_to` AS `jab_to`,`tb_user_to`.`foto_to` AS `foto_to` from (`tb_to` join `tb_user_to` on((`tb_user_to`.`id_user_to` = `tb_to`.`id_user_to`)));

-- --------------------------------------------------------

--
-- Structure for view `rpt_monitoring`
--
DROP TABLE IF EXISTS `rpt_monitoring`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `rpt_monitoring` AS select `tb_rpt_monitoring`.`nama_customer` AS `nama_customer`,`tb_rpt_monitoring`.`no_pengajuan` AS `no_pengajuan`,`tb_rpt_monitoring`.`tgl_cs` AS `tgl_cs`,`tb_rpt_monitoring`.`nota_lama` AS `nota_lama`,`tb_rpt_monitoring`.`jenis_nota` AS `jenis_nota`,`tb_rpt_monitoring`.`tgl_kirim_to` AS `tgl_kirim_to`,`tb_rpt_monitoring`.`tgl_kembalicr_to` AS `tgl_kembalicr_to`,`tb_rpt_monitoring`.`tgl_kirim_datin` AS `tgl_kirim_datin`,`tb_rpt_monitoring`.`tgl_kembalicr_si` AS `tgl_kembalicr_si`,`tb_rpt_monitoring`.`tagihan_awal` AS `tagihan_awal`,`tb_rpt_monitoring`.`tagihan_akhir` AS `tagihan_akhir`,`tb_rpt_monitoring`.`tgl_kirim_keuangan` AS `tgl_kirim_keuangan`,`tb_rpt_monitoring`.`no_berita_acara` AS `no_berita_acara`,`tb_rpt_monitoring`.`nota_baru` AS `nota_baru`,`tb_rpt_monitoring`.`tgl_kirim_restitusi` AS `tgl_kirim_restitusi`,`tb_rpt_monitoring`.`id_warna` AS `id_warna`,(`tb_rpt_monitoring`.`tagihan_awal` - `tb_rpt_monitoring`.`tagihan_akhir`) AS `jml_restitusi`,(to_days(`tb_rpt_monitoring`.`tgl_kirim_restitusi`) - to_days(`tb_rpt_monitoring`.`tgl_kirim_to`)) AS `lama_proses_cr`,(to_days(`tb_rpt_monitoring`.`tgl_kirim_keuangan`) - to_days(`tb_rpt_monitoring`.`tgl_cs`)) AS `lama_sd_selesai` from `tb_rpt_monitoring`;

-- --------------------------------------------------------

--
-- Structure for view `tb_buat_ba1`
--
DROP TABLE IF EXISTS `tb_buat_ba1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tb_buat_ba1` AS select `tb_buat_ba`.`buat_ba` AS `buat_ba`,`tb_buat_ba`.`updated_at` AS `updated_at`,`tb_buat_ba`.`created_at` AS `created_at`,`tb_buat_ba`.`id_buat_ba` AS `id_buat_ba`,`tb_buat_ba`.`status` AS `status` from `tb_buat_ba` group by `tb_buat_ba`.`id_buat_ba`;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatt_cs`
--
ALTER TABLE `chatt_cs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chatt_fi`
--
ALTER TABLE `chatt_fi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chatt_si`
--
ALTER TABLE `chatt_si`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chatt_to`
--
ALTER TABLE `chatt_to`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `tb_cr`
--
ALTER TABLE `tb_cr`
 ADD PRIMARY KEY (`id_cs`);

--
-- Indexes for table `tb_finance`
--
ALTER TABLE `tb_finance`
 ADD PRIMARY KEY (`id_finance`);

--
-- Indexes for table `tb_proses_ba`
--
ALTER TABLE `tb_proses_ba`
 ADD PRIMARY KEY (`id_cr`);

--
-- Indexes for table `tb_si`
--
ALTER TABLE `tb_si`
 ADD PRIMARY KEY (`id_si`);

--
-- Indexes for table `tb_to`
--
ALTER TABLE `tb_to`
 ADD PRIMARY KEY (`id_to`);

--
-- Indexes for table `tb_user_cr`
--
ALTER TABLE `tb_user_cr`
 ADD PRIMARY KEY (`id_user_cr`);

--
-- Indexes for table `tb_user_finance`
--
ALTER TABLE `tb_user_finance`
 ADD PRIMARY KEY (`id_user_finance`);

--
-- Indexes for table `tb_user_si`
--
ALTER TABLE `tb_user_si`
 ADD PRIMARY KEY (`id_user_si`);

--
-- Indexes for table `tb_user_to`
--
ALTER TABLE `tb_user_to`
 ADD PRIMARY KEY (`id_user_to`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatt_cs`
--
ALTER TABLE `chatt_cs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `chatt_si`
--
ALTER TABLE `chatt_si`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `chatt_to`
--
ALTER TABLE `chatt_to`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_cr`
--
ALTER TABLE `tb_cr`
MODIFY `id_cs` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_finance`
--
ALTER TABLE `tb_finance`
MODIFY `id_finance` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_si`
--
ALTER TABLE `tb_si`
MODIFY `id_si` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_to`
--
ALTER TABLE `tb_to`
MODIFY `id_to` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_user_cr`
--
ALTER TABLE `tb_user_cr`
MODIFY `id_user_cr` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_user_finance`
--
ALTER TABLE `tb_user_finance`
MODIFY `id_user_finance` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_user_si`
--
ALTER TABLE `tb_user_si`
MODIFY `id_user_si` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_user_to`
--
ALTER TABLE `tb_user_to`
MODIFY `id_user_to` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
