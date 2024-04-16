-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Feb 2020 pada 08.52
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `per`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(400) NOT NULL,
  `tgl` date NOT NULL,
  `desing` varchar(150) NOT NULL,
  `deskrip` varchar(1000) NOT NULL,
  `foto` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `tgl`, `desing`, `deskrip`, `foto`) VALUES
(6, 'Ikuti pawai taâ€™aruf OBJ II', '2017-09-11', 'Pawai Taâ€™aruf merupakan acara pembukaan dalam kegiatan Olimpiade Budaya Jawa II atau OBJ II. Acara yang dilaksanakan 9 September 2017 ini selengarak', 'Pawai Taâ€™aruf merupakan acara pembukaan dalam kegiatan Olimpiade Budaya Jawa II atau OBJ II. Acara yang dilaksanakan 9 September 2017 ini selengarakan oleh Pimpinan Wilayah Muhammadiyah (PWM) Yogyakarta. SD Muhammadiyah Jogodayoh turut serta dalam memeriahkan kegiatan ini.Petani Tradisional Jawa merupakan tema yang diusung dari SD Muhammadiyah Jogodayoh dalam mengikuti pawai taâ€™aruf OBJ II. Memamerkan hasil bumi masyarakat sekitar SD Muhammadiyah Jogodayoh, sebagai wujud apresiasi nilai-nilai budaya.Dengan titik kumpul di halaman DPRD DI Yogyakarta, Dinas Pariwisata yang ada di Malioboro, Abu Bakar Ali dan Selatan Gereja Kotabaru. Awal masuk peserta memang ada di Stadion Kridosono, dan akan berakhir di Alun Alun Utara', '16102019234928IMG-20170911-WA0000.jpg'),
(7, 'Juara di PKU Bantul Cup', '2017-08-27', 'SD Muhammadiyah Jogodayoh turut serta mengikuti PKU Cup I. PKU Cup I yang diselengarakan selama 3 hari, pada tanggal 25-27 Agustus 2017 ini merupakan ', 'SD Muhammadiyah Jogodayoh turut serta mengikuti PKU Cup I. PKU Cup I yang diselengarakan selama 3 hari, pada tanggal 25-27 Agustus 2017 ini merupakan dalam rangka menyambut Milad ke-53 RSU PKU Muhammadiyah Bantul menyelengarakan berbagai iven kegiatan, salah satu yang diikuti oleh SD Muhammadiyah Jogodayoh adalah Pecak Silat Tapak Suci antar Sekolah Dasar se-DIY.\r\n\r\nDalam iven PKU Cup I ini SD Muhammadiyah Jogodayoh meraih 3 (tiga) juara yaitu; Juara 3 putra diraih ananda Maulana Iqbal Pamungkas, Juara 2 Putri diraih ananda Aulia Maharani dan Juara 3 Putri diraih ananda Aisya Nesha Saputri. Semoga dengan hasil ini dapat menjadi pengalaman berharga bagi peserta dan menjadi motifasi semangat bagi yang lain dalam berolahraga.', '27012020082306juara di PKU Bantul CUP.jpg'),
(8, 'Kegiatan Bakti Sosial', '2017-09-03', 'SD Muhammadiyah Jogodayoh mengadakan kegiatan bhakti sosial, dimana tempatnya ada di SD Muhammadiyah Jogodayoh serta dilingkungan sekitar, dalam kegia', 'SD Muhammadiyah Jogodayoh mengadakan kegiatan bhakti sosial, dimana tempatnya ada di SD Muhammadiyah Jogodayoh serta dilingkungan sekitar, dalam kegiatan ini diberikan bantuan kepada fakir dan miskin serta anak yatim-piatu berupa paket sembako.Dalam kegiatan ini dari kepala sekolah hingga para siswa turut serta dalam kegiatan baksos,\r\n\r\nKegiatan ini bertujuan menjalakan perintah Alloh Swt, yakni memberi kepada fakir miskin, anak yatim-piatu , menanmkan kepada anak jiwa penderma, sehingga terlatih diri menjadi anak yang sholeh/sholehah.Tampak dalam kegiatan ini anak-anak sangat antusias, anak-anak dan para guru berperan serta membawa paket sembako untuk diberikan secara langsung kepada penerima.', '27012020082924bakti sosial.jpg'),
(9, 'Imunisasi MR untuk kelas 1-6', '2017-08-18', 'SD Muhammadiyah Jogodayoh adakanImunisasi MR untuk kelas 1 sampai 6 , kegiatan ini merupakan program dari pemerintah guna menanggulangi penyakit campa', 'SD Muhammadiyah Jogodayoh adakanImunisasi MR untuk kelas 1 sampai 6 , kegiatan ini merupakan program dari pemerintah guna menanggulangi penyakit campak dan rubella.petugas puskesmas Bambanglipuro berjumlah 8 orang.Bulan Agustus 2017 merupakan bulan pertama dilaksanakannya program Imunisasi MR oleh pemerintah secara GRATIS di seluruh Posyandu, Puskesmas, RS Pemerintah dan Sekolah Dasar.\r\n\r\nSeperti yang kita tahu, campak dan rubella merupakan penyakit infeksi menular yang berisiko tinggi. Kedua penyakit tersebut ditularkan kepada seseorang yang belum pernah mengalami penyakit campak dan rubella. Selain itu juga dapat menyerang seseorang yang belum pernah mendapatkan vaksin campak dan rubella sebelumnya.\r\n\r\nPada tahun 2000, lebih dari Â½ juta anak di dunia meninggal karena komplikasi serius penyakit campak seperti diare, radang paru (pneumonia), radang otak (ensefalitis), kebutaan, dan gizi buruk. Sedangkan penyakit rubella berisiko menyebabkan keguguran atau kecacatan pada bayi yang dila', '27012020083110Imunisasi.jpeg'),
(10, 'Pengenalan lingkungan bagi siswa baru', '2017-08-18', 'Kegiatan MPL di SD Muhammadiyah Jogodayoh, Pengenalan lingkungan diadakan selama 2 hari untuk siswa baru, jumlah siswa baru yang mana untu tahun ajara', 'Kegiatan MPL di SD Muhammadiyah Jogodayoh, Pengenalan lingkungan diadakan selama 2 hari untuk siswa baru, jumlah siswa baru yang mana untu tahun ajaran 2017/2018 ini SD Muhammadiyah menerima sebanyak 84 siswa.Semua guru ikut berpartisipasi dalam kegiatan ini.Kegiatan diawali dengan saling berkenalan sesama teman.Nampak dianatara mereka masih canggung dan malu-malu.\r\n\r\nSetelah saling mengenal teman barunya, kemudian acara dilanjutkan dengan mengenal nama guru-guru SD Muhammadiyah Jogodayoh dan mengenal fasilitas-fasiltas yang ada di SD Muhammadiyah Jogodayoh, seperti Kamar mandi, toilet, UKS dan seluruh fasilatas dan ruang yang ada.\r\n\r\nKegiatan ini bertujuan agar para siswa baru dapat beradaptasi dan merasa nyaman dengan lingkungan barunya.\r\n', '27012020083738pengenalan lingkungan maba.jpg'),
(11, 'Visitasi akreditasi', '2017-07-25', 'Alhamdulillah pada tanggal 24 &amp; 25 di SD Muhammadiyah  Jogodayoh terdapat agenda Visitasi Akreditasi, dimana  kegiatan  ini merupakan  salah satu ', 'Alhamdulillah pada tanggal 24 &amp; 25 di SD Muhammadiyah  Jogodayoh terdapat agenda Visitasi Akreditasi, dimana  kegiatan  ini merupakan  salah satu  cara guna mengetahui seberapa majunya kinerja dari para guru dan  staf yan g ada di SD Muhammadiyah Jogodayoh.', '27012020083942Visitasi Akreditasi.jpg'),
(12, 'Kunjungan Mahasiswa Fakultas Kedokteran UMY', '2017-01-18', 'SD Muhammadiyah Jogodayoh mendapat kunjungan dar Mahasiswa UMY Fakultas Kedokteran, Mahasswa yang berjumlah 15 orang datang ke SD Muhammadiyah Jogoday', 'SD Muhammadiyah Jogodayoh mendapat kunjungan dar Mahasiswa UMY Fakultas Kedokteran, Mahasswa yang berjumlah 15 orang datang ke SD Muhammadiyah Jogodayoh, dalam rangka mengadakan pelatihan cara melakukan tindakan pertama dalam kecelakaan, mengobati luka dan sebagainya pada dokter kecil yang ada di beberapa kelas.', '27012020084122kunjungan mhs umy.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` char(4) NOT NULL,
  `judul` varchar(400) NOT NULL,
  `pengarang` varchar(400) NOT NULL,
  `edisi` varchar(400) NOT NULL,
  `kategori` enum('Matematika','Ensiklopedia','Kamus','Buku Cerita','Agama','Majalah','Koran','Novel','dll','Tematik','Kemuhammadiyahan','Bahasa Arab','') NOT NULL,
  `penerbit` varchar(400) NOT NULL,
  `thn_tb` char(4) NOT NULL,
  `rak` int(4) NOT NULL,
  `jdl_sr` varchar(400) NOT NULL,
  `bahasa` varchar(400) NOT NULL,
  `deskripsi_f` varchar(400) NOT NULL,
  `foto` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `pengarang`, `edisi`, `kategori`, `penerbit`, `thn_tb`, `rak`, `jdl_sr`, `bahasa`, `deskripsi_f`, `foto`) VALUES
('!(@*', 'adnjaksndj', 'ajdnajsdn', 'ajksdnajksdk', 'Matematika', 'asmdlkasdmk', 'alsm', 0, '', 'lakmdsalkmd', '', '01022020140948140.pdf'),
('\"\":{', 'ndalknasdnklN', 'lnkdsakldnf', 'ndflknfkln', 'Tematik', 'ndslfsnln', ';dsk', 0, '', 'lknsdlknfds', '', '01022020140614uad.jpg'),
('\"?>@', 'ioasjdiosjoiO', 'ojisajdioajioaj', 'oijsiojdfsj', 'Ensiklopedia', 'sdmkskofdosk', 'dgdf', 0, '', 'edfsfsf', '', '01022020140831uad.jpg'),
('&#', 'asndasdn', 'kasjknsadkjsa', 'kansdkjsansdjkn', 'Matematika', 'sadjnjkdasn', 'asnd', 0, '', 'ksajndsajknd', '', '01022020141029184.pdf'),
('0010', 'Lebah Mengantuk', ' ', '', 'Buku Cerita', ' ', '', 4, '', 'Indonesia', '', '27012020023439Lebah Mengantuk.jpg'),
('0011', 'Cinderella', 'Disney', '', 'Novel', 'Gramedia Pustaka Utama', '2015', 8, '', 'Indonesia', '', '27012020024037Cinderellaa.jpg'),
('0012', 'Aku Rajin Shalat', 'Nagiga', '', 'Buku Cerita', 'Bhuana Ilmu Populer', '2016', 4, '', 'Indonesia', '', '27012020025341Aku Rajin Shalat.jpg'),
('0013', 'Surat Untuk Jibrin', 'Pyo Son Guk', '', 'Buku Cerita', 'Bhuana Ilmu Populer', '2016', 4, '', 'Indonesia', '', '27012020025824Surat Untuk Jibrin.JPG'),
('0014', 'Memburu Kelinci Kembar', 'Kim Soon Mi', '', 'Buku Cerita', 'Bhuana Ilmu Populer', '2016', 4, '', 'Indonesia', '', '27012020030001Memburu Kelinci.jpg'),
('0015', 'Ande-Ande Lumut', 'Okki Ardana Ardi', '', 'Buku Cerita', 'Muzamzamah', '', 4, '', 'Indonesia', '', '27012020030857Ande Ande Lumut.jpg'),
('0016', 'Timun Mas dan Raksasa', 'Bahimsyah', '', 'Buku Cerita', 'Bintang Indonesia jakarta', '', 4, '', 'Indonesia', '', '27012020031341Timun Mas dan Raksasa.jpg'),
('0017', 'Laskar Pelangi', 'Andrea Hirata', '', 'Novel', 'Bentang Pustaka', '2005', 8, '', 'Indonesia', '', '27012020031557Laskar Pelangi.jpg'),
('0018', 'Akhlak Mulia Hidup Sehat', 'Prof. Dr. Achmad Mubarok, M.A. dan Asy_ari, S.Pd., M.Pd. ', '', 'Agama', 'Wahana Aksara Prima, CV', '', 5, '', 'Indonesia', '', '27012020031803seri buku 1 akhlak mulia hidup sehat.jpg'),
('0019', 'Bumi Masunsia', 'Pramoedya Ananta Toer', '', 'Novel', 'Lentera Dipantara Jakarta', '2018', 8, '', 'Indonesia', '', '27012020031938Bumi Manusia.jpg'),
('0020', 'Mata di Tanah Melus', 'Okky Madasari', '', 'Novel', 'Gramedia Pustaka Utama', '2018', 8, '', 'Indonesia', '', '27012020032043Mata di Tanah Melus.jpg'),
('0021', 'Mata dan Rahasia Pulau Gapi', 'Okky Madasari', '', 'Novel', 'Gramedia Pustaka Utama', '2018', 8, '', 'Indonesia', '', '27012020032153Mata dan Rahasia Pulau Gapi.jpg'),
('0022', 'Mata dan Manusia Laut', 'Okky Madasari', '', 'Novel', 'Gramedia Pustaka Utama', '2019', 8, '', 'Indonesia', '', '27012020032917Mata dan Manusia Laut.jpg'),
('0023', 'Jejak Kaki Misterius', 'Riawani Elyta', '', 'Novel', 'Indiva Media Kreasi', '2016', 8, '', 'Indonesia', '', '27012020033040Jejak Kaki Misterius.jpg'),
('0024', 'Berjuang Mengukir Prestasi', 'Siti Nur Fitria', '', 'Buku Cerita', 'Dirjen Manpendas Kemendiknas', '', 4, '', 'Indonesia', '', '27012020033201Berjuang Mengukir Prestasi.jpg'),
('0025', 'Kelas 1 Tema 5 Pengalamanku', 'Tafina Dkk', '', 'Tematik', 'Kemendikbud', '2014', 1, '', 'Indonesia', '', '27012020033342Pengalamanku.jpg'),
('0026', 'Kelas 2 Tema 4 Hidup Bersih dan Sehat', 'Tafina Dkk', '', 'Tematik', 'Kemendikbud', '2014', 1, '', 'Indonesia', '', '27012020033505Hidup Bersih dan Sehat.jpg'),
('0027', 'Kelas 1 Tema 2 Kegemaranku', 'Tafina Dkk', '', 'Tematik', 'Kemendikbud', '', 1, '', 'Indonesia', '', '27012020033610Kegemaranku.jpg'),
('0028', 'Kelas 3 Tema 6 Energi dan Perubahannya', 'Tafina Dkk', '', 'Tematik', 'Kemendikbud', '2014', 1, '', 'Indonesia', '', '27012020033850Energi dan Perubahannya.jpg'),
('0029', 'Kelas 4 Tema 5 Pahlawanku', 'Tafina Dkk', '', 'Tematik', 'Kemendikbud', '2014', 1, '', 'Indonesia', '', '27012020034222Pahlawanku.jpg'),
('0030', 'Kelas 3 Tema 7 Energi dan Perubahannya', 'Tafina Dkk', '', 'Tematik', 'Kemendikbud', '2014', 1, '', 'Indonesia', '', '27012020034521kelas 3 energi dan perubahannya.jpg'),
('0031', 'Kelas 3 Tema 8 Praja Muda Karana', 'Tafina Dkk', '', 'Tematik', 'Kemendikbud', '2014', 1, '', 'Indonesia', '', '27012020034625Praja Muda Karana.jpg'),
('0032', 'Kelas 6 Tema 7 Kepemimpinan', 'Kemendikbud', '', 'Tematik', 'Kemendikbud', '2014', 1, '', 'Indonesia', '', '27012020034725Kepemimpinan.jpg'),
('0033', 'Kelas 2 Tema 5 Pengalamanku', 'Tafina Dkk', '', 'Tematik', 'Kemendikbud', '2014', 1, '', 'Indonesia', '', '27012020035009Pengalamankuu.jpg'),
('0034', 'Kelas 2 Tema 8 Keselamatan di Rumah dan Perjalanan', 'Tafina Dkk', '', 'Tematik', 'Kemendikbud', '2014', 1, '', 'Indonesia', '', '27012020040057Kelesamatan di Rumah dan Perjalanan.jpeg'),
('0035', 'Matematika Kelas 3 Kurikulum 2006', 'Nur Fajariyah dan Defi Triatnawati', '', 'Matematika', 'Kemendikbud', '2008', 2, '', 'Indonesia', '', '27012020043424Matematika sd 3.jpg'),
('0036', 'Dunia Matematika 3 Kurikulum 2013', 'indriyastuti', '', 'Matematika', 'Tiga Serangkai', '2014', 2, '', 'Indonesia', '', '27012020044004Dunia Matematika 3.JPG'),
('0037', 'Matematika Kelas 5 Kurikulum 2013', 'Desi Damayanti', '', 'Matematika', 'Bina Pustaka', '2014', 2, '', 'Indonesia', '', '27012020070132Matematika kelas 5.jpg'),
('0038', 'Matematika kelas 6', 'Suparmin, Kurniawati, Sa adah Nuraini', '', 'Matematika', 'Mediatama', '', 2, '', 'Indonesia', '', '27012020070927Matematika kelas 6.jpg'),
('0039', 'Matematika kelas 4', 'Umi Supraptinah', '', 'Matematika', 'Wangsa Jatra Lestari', '2014', 2, '', 'Indonesia', '', '27012020071649Matematika kelas 4.jpg'),
('0040', 'Pahlawanku Berani Karena Benar', 'Ifa Avianty', '', 'Ensiklopedia', 'Gema Insani', '', 3, '', 'Indonesia', '', '27012020072632Berani Karena Benar 4.JPG'),
('0041', 'Pustaka Anak Cerdas', 'Hendro Setyanto M.Si', '', 'Ensiklopedia', 'Pelangi Ilmu Nusantara', '2013', 3, '', 'Indonesia', '', '27012020073131Pustaka Anak Cerdas.JPG'),
('0042', 'Enisklopedia Anak Nasional seri 7', ' ', '', 'Ensiklopedia', 'Pt. Cipta Adi Pustaka', '2002', 3, '', 'Indonesia', '', '27012020074009Ensiklopedia Anak Nasional 7.JPG'),
('0043', 'Ensiklopedia Mukjizat Al-Quran dan Hadis Jilid 1', ' ', '', 'Ensiklopedia', ' ', '', 3, '', 'Indonesia', '', '27012020074524Ensiklopedia Mukjizat AlQur an dan Hadis 1.jpg'),
('0044', 'Ensiklopedia Mukjizat Al-Quran dan Hadis Jilid 2', ' ', '', 'Ensiklopedia', ' ', '', 3, '', 'Indonesia', '', '27012020074905Ensiklopedia Mukjizat AlQur an dan Hadis 2.jpg'),
('0045', 'Ensiklopedia Mukjizat Al-Quran dan Hadis Jilid 3', ' ', '', 'Ensiklopedia', ' ', '', 3, '', 'Indonesia', '', '27012020074951Ensiklopedia Mukjizat AlQur an dan Hadis 3.jpg'),
('0046', 'Ensiklopedia Mukjizat Al-Quran dan Hadis Jilid 4', ' ', '', 'Ensiklopedia', ' ', '', 3, '', 'Indonesia', '', '27012020075023Ensiklopedia Mukjizat AlQur an dan Hadis 4.jpg'),
('0047', 'Ensiklopedia Mukjizat Al-Quran dan Hadis Jilid 5', ' ', '', 'Ensiklopedia', ' ', '', 3, '', 'Indonesia', '', '27012020075056Ensiklopedia Mukjizat AlQur an dan Hadis 5.jpg'),
('0048', 'Ensiklopedia Mukjizat Al-Quran dan Hadis Jilid 6', ' ', '', 'Ensiklopedia', ' ', '', 3, '', 'Indonesia', '', '27012020075140Ensiklopedia Mukjizat AlQur an dan Hadis 6.jpg'),
('0049', 'Ensiklopedia Mukjizat Al-Quran dan Hadis Jilid 7', ' ', '', 'Ensiklopedia', ' ', '', 3, '', 'Indonesia', '', '27012020075212Ensiklopedia Mukjizat AlQur an dan Hadis 7.jpg'),
('0050', 'Ensiklopedia Mukjizat Al-Quran dan Hadis Jilid 8', ' ', '', 'Ensiklopedia', ' ', '', 3, '', 'Indonesia', '', '27012020075249Ensiklopedia Mukjizat AlQur an dan Hadis 8.jpg'),
('0051', 'Ensiklopedia Mukjizat Al-Quran dan Hadis Jilid 9', ' ', '', 'Ensiklopedia', ' ', '', 3, '', 'Indonesia', '', '27012020075316Ensiklopedia Mukjizat AlQur an dan Hadis 9.jpg'),
('0052', 'Bocah Muslim Tokoh Idolaku', ' ', '', 'Ensiklopedia', ' ', '', 3, '', 'Indonesia', '', '27012020081524Bocah Muslim Tokoh Idolaku.jpg'),
('0053', 'Asal Mula Gunung Merapi', 'Imam Kr. Moncol', '', 'Buku Cerita', 'Bintang Indonesia jakarta', '', 4, '', 'Indonesia', '', '27012020084603asal mula gunung merapi.jpg'),
('0054', 'Putri Serindang Bulan', ' ', '', 'Buku Cerita', 'Pustaka Sandro Jaya', '', 4, '', 'Indonesia', '', '27012020085004putri serindang bulan.jpg'),
('0055', 'Kisah Nabi Muhammad SAW', 'Anak Muslim', '', 'Buku Cerita', 'Anak Kita', '', 4, '', 'Indonesia', '', '27012020090149kisah nabi muhammad.JPG'),
('0056', 'Kemuhammadiyahan Kelas 6', 'Suranto, Dkk', '', 'Kemuhammadiyahan', ' ', '', 6, '', 'Indonesia', '', '27012020091034Kemuhammadiyahan 6.JPG'),
('0057', 'Kemuhammadiyahan Kelas 5', 'Suranto, Dkk', '', 'Kemuhammadiyahan', ' ', '', 6, '', 'Indonesia', '', '27012020091914Kemuhammadiyahan 5.JPG'),
('0058', 'Kemuhammadiyahan Kelas 4', 'Suranto, Dkk', '', 'Kemuhammadiyahan', ' ', '', 6, '', 'Indonesia', '', '27012020092320Kemuhammadiyahan 4.JPG'),
('0059', 'Kemuhammadiyahan Kelas 3', 'Suranto, Dkk', '', 'Kemuhammadiyahan', ' ', '', 6, '', 'Indonesia', '', '27012020092438Kemuhammadiyahan 3.JPG'),
('0060', 'Bahasa Arab Kelas 4', 'Suranto, Dkk', '', 'Bahasa Arab', ' ', '', 7, '', 'Indonesia, Arab', '', '27012020092713Bahasa Arab 4.JPG'),
('0061', 'Bahasa Arab Kelas 6', 'Suranto, Dkk', '', 'Bahasa Arab', ' ', '', 7, '', 'Indonesia, Arab', '', '27012020093006Bahasa Arab 6.JPG'),
('0062', 'Bahasa Arab Kelas 5', 'Suranto, Dkk', '', 'Bahasa Arab', ' ', '', 7, '', 'Indonesia, Arab', '', '27012020093135Bahasa Arab 5.JPG'),
('0063', 'Pendidikan Agama Islam dan Budi Pekerti Kelas 5', 'Feisal Ghozaly dan Achmad Buchori Ismail', '', 'Agama', 'Kemendikbud', '', 5, '', 'Indonesia', '', '27012020165152Pendidikan Agama Islam dan Budi Pekerti.jpg'),
('0064', 'Pendidikan Agama Islam dan Budi Pekerti Kelas 6', 'Feisal Ghozaly dan Achmad Buchori Ismail', '', 'Agama', 'Kemendikbud', '', 5, '', 'Indonesia', '', '27012020165923Pendidikan Agama Islam dan Budi Pekerti 6 .jpg'),
('0065', 'Pendidikan Agama Islam dan Budi Pekerti Kelas 4', 'Feisal Ghozaly dan Achmad Buchori Ismail', '', 'Agama', 'Kemendikbud', '', 5, '', 'Indonesia', '', '27012020185723pai kelas 4.JPG'),
('0066', 'Pendidikan Agama Islam dan Budi Pekerti Kelas 2', 'Feisal Ghozaly dan Achmad Buchori Ismail', '', 'Agama', 'Kemendikbud', '', 5, '', 'Indonesia', '', '27012020192230pai 2.jpg'),
('0067', 'Akhlak Mulia Meraih Kesuksesan', 'Prof. Dr. Achmad Mubarok, M.A. dan Asy ari, S.Pd., M.Pd.', '', 'Agama', 'Wahana Aksara Prima', '', 5, '', 'Indonesia', '', '28012020032110meraih kesuksesan.JPG'),
('0068', 'Pendidikan Agama Islam dan Budi Pekerti Kelas 3', 'Feisal Ghozaly dan Achmad Buchori Ismail', '', 'Agama', 'Kemendikbud', '', 5, '', 'Indonesia', '', '28012020031858pai 3.JPG'),
('0069', 'Akhlak Mulia Menciptakan Kedamaian', 'Prof. Dr. Achmad Mubarok, M.A. dan Asy ari, S.Pd., M.Pd.', '', 'Agama', 'Wahana Aksara Prima', '', 5, '', 'Indonesia', '', '28012020032923menciptakan kedamaian.JPG'),
('0070', 'Akhlak Mulia Kasih Sayang', 'Prof. Dr. Achmad Mubarok, M.A. dan Asy ari, S.Pd., M.Pd.', '', 'Agama', 'Wahana Aksara Prima', '', 5, '', 'Indonesia', '', '28012020033112kasih sayang.JPG'),
('0071', 'Kesenian Rakyat di Tengah Globalisasi', 'Endang Retnowati', '', 'dll', 'Dirjen Menejemen Pendidikan Dasar dan Menengah', '', 9, '', 'Indonesia', '', '28012020033453kesenian rakyat.JPG'),
('0072', 'Jangan Menyesatkan Orang', 'Yaridianto', '', 'dll', 'PT Indah Jaya Adipratama', '2008', 9, '', 'Indonesia', '', '28012020033844jangan menyesatkan orang.jpg'),
('0073', 'Anak-Anak Berhati Mulia', 'Setiawan', '', 'Agama', 'PT Indah Jaya Adipratama', '2007', 5, '', 'Indonesia', '', '28012020034129anak berhati mulia.JPG'),
('0074', 'Berkarya Bakti', 'Goenarto', '', 'dll', 'PT Indah Jaya Adipratama', '2008', 9, '', 'Indonesia', '', '28012020034754Berkarya Bakti.jpg'),
('0075', 'Penerapan Pembelajaran Pada Anak', 'Prof. Dr. Conny R. Semiawan', '', 'Novel', 'PT Indeks', '2009', 9, '', 'Indonesia', '', '28012020035211Penerapan Pembelajaran Pada Ank.jpg'),
('0076', 'Pendidikan Agama Islam dan Budi Pekerti Kelas 1', 'Feisal Ghozaly dan Achmad Buchori Ismail', '', 'Agama', 'Kemendikbud', '', 5, '', 'Indonesia', '', '28012020040752pai 1.jpg'),
('0077', 'Ensiklopedia Hari Akhir', 'Abu Fatiah Al-Adnani', '', 'Ensiklopedia', 'Granada Media Tama', '2017', 3, '', 'Indonesia', '', '28012020041547Ensiklopedia Hari Akhir.JPG'),
('0078', 'Sinau Bahasa Jawa Kelas 5', 'Drs. Haryono, dkk', '', 'dll', 'Yudistira', '2010', 9, '', 'Indonesia', '', '28012020041858bjawa 5.jpg'),
('0079', 'Sinau Bahasa Jawa Kelas 2', 'Drs. Haryono, dkk', '', 'dll', 'Yudistira', '2010', 9, '', 'Indonesia', '', '28012020042034bjawa 2.jpg'),
('0081', 'Kamus Bahasa Inggris-Indonesia', 'Purwono Sastro', '', 'dll', 'Widya Karya', '', 9, '', 'Indonesia, Inggris', '', '28012020042824inggris-indonesia.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ebook`
--

CREATE TABLE `ebook` (
  `id` int(11) NOT NULL,
  `judul` varchar(400) NOT NULL,
  `pengarang` varchar(400) NOT NULL,
  `baca` varchar(400) NOT NULL,
  `foto` varchar(10000) NOT NULL,
  `berkas` varchar(400) NOT NULL,
  `jumlah_unduh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ebook`
--

INSERT INTO `ebook` (`id`, `judul`, `pengarang`, `baca`, `foto`, `berkas`, `jumlah_unduh`) VALUES
(36, 'Sujud Sahwi', 'Maharati Marfuah, Lc', 'http://bit.ly/2GDSw1D', '27012020152102Sujud Sahwi.jpg', '27012020152102681.pdf', 0),
(38, 'Ibadah Haji : Syarat-syarat', 'Ahmad Sarwat, Lc., MA', 'http://bit.ly/3aLbbWX', '27012020153037Ibadah Haji.jpg', '27012020153037184.pdf', 0),
(40, 'Bersalaman Sesudah Shalat', 'M. Aqil Haidar, Lc', 'https://drive.google.com/file/d/1Hek3ZmwirN8rPas95mfLUWUf4iyBaItY/view?usp=sharing', '27012020153705Bersalaman Sesudah Shalat.jpg', '27012020153705186.pdf', 0),
(41, 'Zakat Uang', 'Ahmad Sarwat, Lc., MA', 'https://drive.google.com/file/d/1Hek3ZmwirN8rPas95mfLUWUf4iyBaItY/view?usp=sharing', '27012020154040Zakat Uang.jpg', '27012020154040273.pdf', 0),
(42, 'Bekal Ramadhan dan Idul Fithri', 'Saiyid Mahadhir, Lc, MA', 'https://drive.google.com/file/d/1jKw3B0poLLj4NUfM34ZGGYr-SweLOrxV/view?usp=sharing', '27012020154251Idul Fitri.jpg', '27012020154251256.pdf', 0),
(43, 'Bijak Dalam Berbeda', 'Ahmad Sarwat, Lc., MA', 'https://drive.google.com/file/d/1cT0fhaq6fMB8wXgKpyWfarxcB-lorqzb/view?usp=sharing', '27012020154717Bijak dalam Berbeda.jpg', '2701202015471734.pdf', 0),
(44, 'Fiqih Pinjam Meminjam (Ariyah)', 'M. Abdul Wahab, Lc', 'https://drive.google.com/file/d/16qkDQ72VJQ4FmPNS479D87x-xH1tyh1W/view?usp=sharing', '27012020154907Fiqih Pinjam Meminjam.jpg', '2701202015490733.pdf', 1),
(46, 'Antara Kita, Jenazah dan Kuburan', 'Ahmad Sarwat, Lc., MA', 'https://drive.google.com/file/d/1YO_rcA6ssFpUFs5QENeaCmwu_oaO89Lg/view?usp=sharing', '27012020155301Antara Kita Jenazah dan Kuburan.jpg', '2701202015530168.pdf', 0),
(47, 'Khusyu Dalam Shalat', 'Syafri M. Noor, Lc', 'https://drive.google.com/file/d/19PxX-tXBMhjXfWw8p1WAtwa1xbNVmC0l/view?usp=sharing', '27012020155445Khusyu dalam Shalat.jpg', '27012020155445102.pdf', 4),
(48, 'Waktu Shalat', 'Ahmad Sarwat, Lc., MA', 'https://drive.google.com/file/d/1PG2csE0BTp6hrzBhP7OBVeAxlTDP9kmu/view?usp=sharing', '27012020155624Waktu Shalat.jpg', '27012020155624140.pdf', 5),
(49, 'Shalat Orang Sakit', 'Ahmad Sarwat, Lc., MA', 'https://drive.google.com/file/d/19imGyMDuudXFjVRihy32saNqk-tmOJvT/view?usp=sharing', '27012020160819Shalat Orang Sakit.jpg', '270120201608191.pdf', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `komen`
--

CREATE TABLE `komen` (
  `id` int(11) NOT NULL,
  `nama` varchar(400) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kritik` varchar(800) NOT NULL,
  `saran` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komen`
--

INSERT INTO `komen` (`id`, `nama`, `email`, `kritik`, `saran`) VALUES
(18, 'fajri', 'yunusf42@gmail.com', 'masih banyak kekurangan', 'diperbagus lagi'),
(24, 'dimas', '', 'ok', 'ok');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perpus`
--

CREATE TABLE `perpus` (
  `id` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `program` text NOT NULL,
  `sop` text NOT NULL,
  `ttb` text NOT NULL,
  `foto` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perpus`
--

INSERT INTO `perpus` (`id`, `visi`, `misi`, `program`, `sop`, `ttb`, `foto`) VALUES
(57647, 'Menjadikan Perpustakaan Sekolah yang mampu memberikan pelayanan informasi dan pengetahuan yang efektif, efisien, cepat dan tepat, sehingga mampu menjadi penopang keberhasilan pendidikan di sekolah.', 'Peningkatan pelayanan pemakai dengan memberikan pelayanan yang penuh. Peningkatan sarana penunjang untuk pemakai. Peningkatan sumber daya manusia dengan pengikutsertaan pengelola dalam setiap even kegiatan perpustakaan. Menyediakan sumber informasi dan ilmu pengetahuan yang menunjang proses pembelajaran dan pendidikan di sekolah dan masyarakat.', 'Osporavan rijeÄima Kei Kaminari na gozbi, Chris Hanafiah dokazat Ä‡e da se neÄ‡e tako lako zaljubiti, a kamoli povrijediti zbog Å¾ena. MeÄ‘utim, kad je upoznao Akija, Chrisov se svijet okrenuo naglavaÄke. Å toviÅ¡e, Chris se morao suoÄiti sa neÄim Å¡to je dosad najmanje oÄekivao: vlastitim osjeÄ‡ajima.', 'Radoznalost Nare Hanafiah o rodnim markama nalik na tetovaÅ¾u na leÄ‘ima dovela ju je do izloÅ¾be drevnih moÅ¡tiju sliÄnog oblika u Metropolitan Museum of Art, New York. MeÄ‘utim, on nije jedini koji je zainteresiran za te predmete. TakoÄ‘e ga je ciljala grupa ljudi s mraÄnom magijom.', 'Peminjam harus memiliki kartu anggota perpustakaan. peminjam hanya diperbolehkan meminjam satu buku dalam satu minggu. Peminjam diwajibkan memelihara kebersihan dan keutuhan buku. Peminjam harus mengembalikan buku perpustakaan sesuai dengan waktu yang telah ditentukan. Keterlambatan pengembalian buku akan dikenakan sanksi berupa tidak diperbolehkan meminjam buku perpustakaan selama waktu Keterlambatan pengembalian buku. Apabila buku rusak atau hilang peminjam dikenakan sanksi mengganti dengan buku yang sama atau mengganti dengan buku yang seharga pada saat itu. ', '06092019103824struktur.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(400) NOT NULL,
  `deskrip` text NOT NULL,
  `foto` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prestasi`
--

INSERT INTO `prestasi` (`id`, `nama`, `deskrip`, `foto`) VALUES
(66674, 'Olimpiade Fisika Internasional', 'Hirata, yang pernah dianggap sebagai anak ajaib, berusia 13 tahun ketika ia memenangkan medali emas pada tahun 1996 di Olimpiade Fisika Internasional. Ia belajar fisika di Caltech dari usia 14 hingga 18 tahun, lulus dengan gelar sarjana pada tahun 2001. Ia diteliti pada usia 16 untuk NASA tentang penjajahan Mars dan menerima gelar PhD di bawah pengawasan Uros Seljac di 2005 dari Princeton University in Astrophysics (tesis: &quot;Teori Lensa Gravitasi Lemah dan Analisis Data&quot;). Dari 2005 hingga 2007, ia adalah sarjana tamu di Institute for Advanced Study. Dari 2006 hingga 2012 ia adalah asisten profesor dan kemudian profesor penuh di Caltech sebelum pindah ke Ohio State University pada tahun akademik berikutnya dalam kapasitas yang sama. Dia saat ini adalah profesor di Pusat Kosmologi dan Fisika AstroPartikel OSU (CCAPP).', '17102019003659images.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pustakawan`
--

CREATE TABLE `pustakawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(400) NOT NULL,
  `nomor` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `ig` varchar(40) NOT NULL,
  `fb` varchar(40) NOT NULL,
  `foto` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pustakawan`
--

INSERT INTO `pustakawan` (`id`, `nama`, `nomor`, `alamat`, `ig`, `fb`, `foto`) VALUES
(1, 'Christopher Hirata', '0821412314', 'Ypsilanti, Michigan, Amerika', 'https://www.instagram.com/', 'https://web.facebook.com/', '30012020092036index.jpg'),
(6, 'yunus', '087', 'gunungkidul', 'https://www.instagram.com/', 'https://web.facebook.com/', '03022020063733WhatsApp Image 2020-01-10 at 22.54.24.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'yunus fajri', 'yunus faj', 'yns15', 'admin'),
(67, 'sd muhammadiyah jogodayoh', 'jogodayoh', 'jogodayoh', 'admin'),
(68, 'admin', 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `ebook`
--
ALTER TABLE `ebook`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komen`
--
ALTER TABLE `komen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `perpus`
--
ALTER TABLE `perpus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pustakawan`
--
ALTER TABLE `pustakawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `ebook`
--
ALTER TABLE `ebook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `komen`
--
ALTER TABLE `komen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `perpus`
--
ALTER TABLE `perpus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57648;

--
-- AUTO_INCREMENT untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66675;

--
-- AUTO_INCREMENT untuk tabel `pustakawan`
--
ALTER TABLE `pustakawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
