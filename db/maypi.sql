-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2019 pada 10.18
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maypi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `penulis` varchar(30) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `foto` varchar(40) NOT NULL,
  `tgl_post` varchar(20) NOT NULL,
  `hari_post` varchar(10) NOT NULL,
  `jam_post` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `judul`, `isi`, `penulis`, `slug`, `foto`, `tgl_post`, `hari_post`, `jam_post`) VALUES
(5, 'Nilai UN atau Zonasi? Kebingungan Orangtua soal PPDB', '<p style=\"text-align: justify;\">Proses Pendaftaran Penerimaan Siswa Baru ( PPDB) 2019 Jawa Barat untuk jalur zonasi jenjang SMP dan SMA telah dimulai dari Senin (17/6/2019) hingga Sabtu (22/6/2019). Banyak pengalaman dialami orangtua murid ketika mendaftarkan anaknya ke sekolah masing-masing sesuai zonasi yang ditentukan. Salah satunya adalah Eva Butar-butar. Eva mengisahkan, putranya yang bernama Yehezkiel Manurung baru lulus dari SD PSKD Kwitang 8 Depok, Jawa Barat, dan telah didaftarkan ke SMPN 9 Depok pada Senin kemarin secara online. Eva mengaku saat ini tidak mengalami kesulitan dalam pendaftaran anaknya melalui sistem zonasi.</p>\r\n<p style=\"text-align: justify;\">Namun, masih ada kekhawatiran di dalam hatinya jika nanti sistem ini juga mempertimbangkan nilai ujian nasional (UN) untuk seleksi penerimaan siswa baru walaupun hal itu sudah ditegaskan oleh pemerintah. \"Sekarang ini saya masih bingung, katanya sistem zonasi, bukan nilai UN. Boleh saja zonasi asal nilai UN enggak berlaku,\" kata Eva kepada Kompas.com, Selasa (18/6/2019). Dia menuturkan, berdasarkan informasi yang dia ketahui, nilai UN terendah di SMPN 9 Depok ialah 24, sedangkan nilai anaknya di bawah itu. Adapun daya tampung di sekolah tersebut sebanyak 10 kelas, yang terdiri dari 38 sampai 40 siswa dalam satu kelas. Eva mengatakan masih menaruh harapan agar anaknya bisa diterima di sekolah yang dituju dan proses pendaftaran ini segera selesai supaya menenangkan pikirannya. Untuk itu, dia telah menyiapkan berbagai dokumen yang dibutuhkan, termasuk melegalisasi dokumen.</p>\r\n<p style=\"text-align: justify;\">Jika sewaktu-waktu dibutuhkan, dokumen itu telah siap dikumpulkan. &ldquo;Sistem online ini enggak sulit, saya sudah siapkan data-data dan dokumen yang dilegalisasi. Nanti, kalau sudah ketahuan (anaknya diterima di sekolah tujuan) baru disiapkan,&rdquo; kata Eva. Syarat PPDB 2019 Untuk diketahui, pemerintah menerapkan sistem zonasi pada PPDB 2019. Sistem ini mengatur bahwa jarak dari rumah ke sekolah sebagai syarat utama, bukan nilai rapor dan ujian nasional.</p>\r\n<p style=\"text-align: justify;\">Dalam taklimat media di Jakarta, Selasa (15/1/2019), Menteri Pendidikan dan Kebudayaan (Mendikbud) Muhadjir Effendy mengatakan, aturan zonasi semula diterapkan pada PPDB 2018 dan akan diperketat lagi pada 2019. Pengetatan aturan itu diperkuat melalui Peraturan Mendikbud Nomor 51 Tahun 2018 tentang PPDB. Dia menegaskan, sekolah wajib menerapkan PPDB berbasis zonasi untuk 90 persen dari siswa baru, sedangkan jalur prestasi akademik dan nonakademik memliki kuota tersendiri, yaitu 5 persen. \"Dapat juga dipakai untuk kuota 5 persen sisanya bagi pelajar mendaftar ke sekolah di luar zona mereka,\" kata Muhadjir.</p>', 'Muhammad Fajri', 'nilai-un-atau-zonasi-kebingungan-orangtua-soal-ppdb', '04e94acf594eff9b8f9b0c8895e4d187.jpg', '18 Juni 2019', 'Selasa', '23:27'),
(6, 'PPDB, Banyak Orangtua Mendaftar dari Subuh', '<p style=\"text-align: justify;\">Kepala Dinas Pendidikan Provinsi Jawa Barat, Dewi Sartika menanggapi soal banyaknya orangtua siswa yang datang dari subuh dalam proses Penerimaan Peserta Didik Baru ( PPDB). Dewi mengatakan, datang lebih awal tak menjadi patokan diterimanya siswa di sekolah tujuan. \"Karena memang ada Permen dari Kemendikbud yang menyatakan apabila nilainya sama nanti penilaiannya pindah ke pendaftar yang pertama kali,\" ujar Dewi saat ditemui di Gedung Sate, Jalan Diponegoro, Senin (17/6/2019).</p>\r\n<p style=\"text-align: justify;\">Namun, sambung Dewi, situasi itu sangat kecil terjadi mengingat ada kombinasi antara jarak (zonasi) dengan nilai hasil ujian nasional. Terlebih, kata Dewi, waktu penerimaan pendaftar pun dibatasi hingga pukul 14.00 WIB. \"Tapi itu akan kecil kemungkinannya khususnya untuk yang jalur kombinasi, dihitung antara jarak dan NHUN. Kalau yang jarak itu sudah pasti beda-beda. Tadi sudah disampaikan panitia, kemampuan kita memasukan data pukul 14.00 tutup. Nomor antrean berlaku tapi silakan mereka datang besok. Dibatasi karena kalau sampai malam kasihan juga mereka,\" tuturnya. Dewi menambahkan, dari hasil pantauan sementara proses PPDB di Jawa Barat berjalan cukup lancar. Salah satu yang menjadi atensi yakni besarnya animo masyarakat yang akan mendaftarkan anaknya. Hal itu wajar karena dari 774.000 lulusan SMP yang diterima di negeri hanya 281.950 siswa. \"Jadi beberapa sekolah saya tadi pagi bersama Pak Wagub ke SMA 8 dan SMK 3. Artinya memang ada kecenderungan mereka ingin mendaftar di hari pertama. Jadi antusiasme membeludak,\" kata Dewi.</p>\r\n<p style=\"text-align: justify;\">\"Kami juga melakukan video conference bersama dengan beberapa sekolah di Jabar, di Cianjur, Depok. Persiapan mereka cukup bagus. Insyaallah. Kelihatannya di hari pertama ini masalahnya tadi antusiasme yang membeludak,\" jelasnya.</p>', 'Muhammad Fajri', 'ppdb-banyak-orangtua-mendaftar-dari-subuh', 'c16ccf24599b3d4589891a3dff58d288.jpg', '18 Juni 2019', 'Selasa', '23:32'),
(7, 'Protes soal Zonasi, Wali Murid Datangi Dinas Pendidikan Surabaya Malam-malam', '<p style=\"text-align: justify;\">Sejumlah walid murid mendatangi Kantor Dinas Pendidikan Kota Surabaya, Jawa Timur. Mereka memprotes soal sistem zonasi yang diterapkan dalam penerimaan peserta didik baru (PPDB) 2019 di Surabaya.&nbsp;<br /><br />Pantauan&nbsp;detikcom&nbsp;pukul 22.21 WIB, Rabu (19/6/2019), para wali murid yang didominasi oleh ibu-ibu tampak bernegoisasi dengan Kepala Dinas Kota Surabaya M Ikhsan. Mereka mengatakan siap bermalam di kantor Dinas Pendidikan, Jalan Jagir, Surabaya.&nbsp;</p>\r\n<p style=\"text-align: justify;\">\"Harus dibatalkan. Kami juga siap bermalam di sini,\" teriak para wali murid di depan kantor Dinas Pendidikan Kota Surabaya.&nbsp;<br /><br />\"Pak Ikhsan jangan diam saja. Kami butuh jawaban yang pasti,\" ujar ibu-ibu lainnya.&nbsp;</p>\r\n<p style=\"text-align: justify;\">Sebelumnya, sekitar pukul 21.30 WIB sempat terjadi aksi saling dorong antara wali murid dengan petugas Satpol PP Kota Surabaya. Hal itu terjadi akibat para wali murid memaksakan masuk.<br /><br />Kapolsek Wonokromo, Kompol Christoper Lebang, mengatakan pihaknya bakal terus melakukan pengamanan di lokasi. Dia menyebut pengamanan sudah dilakukan sejak pagi.&nbsp;<br /><br />\"Kami sejak pagi hingga kini melakukan pengamanan,\" kata Christoper.&nbsp;</p>', 'Muhammad Fajri', 'protes-soal-zonasi-wali-murid-datangi-dinas-pendidikan-surabaya-malam-malam', '75c914d55287c659f5735f1e2e6be8f5.jpeg', '22 Juni 2019', 'Sabtu', '21:12'),
(8, 'Sistem Zonasi PPDB 2019 Diprotes Wali Murid, Jokowi: Tanyakan Kepada Menteri Pendidikan', '<p style=\"text-align: justify;\">Pelaksanaan pendaftaran peserta didik baru (PPDB) 2019 menggunakan sistem zonasi mengundang banyak masalah. Presiden&nbsp;<a href=\"http://www.tribunnews.com/tag/jokowi\">Jokowi</a>&nbsp;mengakui sistem zonasi PPDB tahun ini banyak masalah.</p>\r\n<p style=\"text-align: justify;\">\"Tanyakan kepada Menteri Pendidikan, memang di lapangan banyak masalah yang perlu dievaluasi. Tanyakan lebih detail kepada Menteri Pendidikan, (Muhadjir Effendy),\" ujar&nbsp;<a href=\"http://www.tribunnews.com/tag/jokowi\">Jokowi</a>&nbsp;usai membagikan 3.200 sertifikat tanah di Gor Tri Dharma, Gresik, Kamis (20/5/2019).</p>\r\n<p style=\"text-align: justify;\">Sebelumnya, gelombang protes terus berdatangan dari wali murid. Mereka tidak rela anaknya tidak bisa melanjutkan pendidikan di sekolah negeri karena hanya terbentur jarak.</p>\r\n<p style=\"text-align: justify;\">Artikel ini telah tayang di&nbsp;<a href=\"http://www.tribunnews.com/\">Tribunnews.com</a> dengan judul Sistem Zonasi PPDB 2019 Diprotes Wali Murid, Jokowi: Tanyakan Kepada Menteri Pendidikan.<br /><br />Di Kabupaten Gresik, sistem PPDB 2019 membuat DPRD Kabupaten Gresik memanggil Dinas Pendidikan (Dispendik). Sebab, para wali murid tidak terima anaknya tidak masuk sekolah negeri.</p>\r\n<p style=\"text-align: justify;\">Artikel ini telah tayang di&nbsp;<a href=\"http://www.tribunnews.com/\">Tribunnews.com</a> dengan judul Sistem Zonasi PPDB 2019 Diprotes Wali Murid, Jokowi: Tanyakan Kepada Menteri Pendidikan.</p>', 'Muhammad Fajri', 'sistem-zonasi-ppdb-2019-diprotes-wali-murid-jokowi-tanyakan-kepada-menteri-pendidikan', '21b8581ec43d917ac880e76cebe08db8.jpg', '22 Juni 2019', 'Sabtu', '21:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ekstrakurikuler`
--

CREATE TABLE `tb_ekstrakurikuler` (
  `id` int(2) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ekstrakurikuler`
--

INSERT INTO `tb_ekstrakurikuler` (`id`, `nama`, `keterangan`, `foto`) VALUES
(1, 'Tilawatil Qur\'an', '<p>Tilawatil Qur\'an adalah</p>', 'default.png'),
(2, 'Seni Baca Qur\'an', '<p>Seni Baca Qur\'an adalah</p>', 'default.png'),
(3, 'Robbana', '<p>Robbana adalah</p>', 'e0ca117c8f4d9ceb2d8af012744cb739.png'),
(4, 'Kaligrafi', '<p>Kaligrafi adalah</p>', 'default.png'),
(5, 'Palang Merah Remaja', '<p>Palang Merah Remaja adalah</p>', 'default.png'),
(6, 'Pramuka', '<p>Pramuka adalah</p>', 'f68a3188925cb8d12b64ea95b1f0ebfd.jpg'),
(7, 'Kegitatan Keagamaan', '<p>Kegitatan Keagamaan adalah</p>', 'default.png'),
(8, 'Futsal', '<p>Futsal adalah</p>', 'default.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fasilitas`
--

CREATE TABLE `tb_fasilitas` (
  `id` int(1) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_fasilitas`
--

INSERT INTO `tb_fasilitas` (`id`, `judul`, `isi`, `foto`) VALUES
(1, 'Sarana dan Prasarana', '<p class=\"MsoListParagraph\" style=\"margin-left: 14.2pt; mso-add-space: auto; text-align: justify; text-indent: -14.2pt; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]-->1.&nbsp;&nbsp;&nbsp; <!--[endif]-->Keadaan Sarana Pendidikan</p>\r\n<p style=\"padding-left: 40px;\">Adapun sarana MA Martapura Kabupaten OKUT adalah sebagai berikut :</p>\r\n<p style=\"padding-left: 40px;\"><!-- [if !supportLists]-->a.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Meja dan Buku untuk murid : 60 stel</p>\r\n<p style=\"padding-left: 40px;\"><!-- [if !supportLists]-->b.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Meja guru : 20 buah</p>\r\n<p style=\"padding-left: 40px;\"><!-- [if !supportLists]-->c.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Papan Tulis : 3 buah</p>\r\n<p style=\"padding-left: 40px;\"><!-- [if !supportLists]-->d.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Papan Pengumuman : 1 buah</p>\r\n<p><!-- [if !supportLists]-->2.&nbsp;&nbsp;&nbsp; <!--[endif]-->Keadaan Prasarana Pendidikan</p>\r\n<p style=\"padding-left: 40px;\">Adapun prasarana MA Martapura Kabupaten OKUT adalah sebagai berikut :</p>\r\n<p style=\"padding-left: 40px;\"><!-- [if !supportLists]-->a.&nbsp;&nbsp;&nbsp; <!--[endif]-->Tanah</p>\r\n<p style=\"padding-left: 40px;\"><!-- [if !supportLists]-->1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Lapangan upacara : 1 buah</p>\r\n<p style=\"padding-left: 40px;\"><!-- [if !supportLists]-->2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Lapangan olahraga : 1 buah</p>\r\n<p style=\"padding-left: 40px;\"><!-- [if !supportLists]-->b.&nbsp;&nbsp;&nbsp; <!--[endif]-->Bangunan</p>\r\n<p style=\"padding-left: 40px;\"><!-- [if !supportLists]-->1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Ruang Belajar :&nbsp; 3 Ruang</p>\r\n<p style=\"padding-left: 40px;\"><!-- [if !supportLists]-->2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Ruang Kepala MA : 1 Ruang</p>\r\n<p style=\"padding-left: 40px;\"><!-- [if !supportLists]-->3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Ruang Guru : 1 buah</p>\r\n<p style=\"padding-left: 40px;\"><!-- [if !supportLists]-->4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Ruang TU : 1 buah</p>\r\n<p style=\"padding-left: 40px;\"><!-- [if !supportLists]-->5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Ruang Perpustakaan : 1 Buah</p>\r\n<p style=\"padding-left: 40px;\"><!-- [if !supportLists]-->6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Ruang WC Guru : 1 Buah</p>\r\n<p style=\"padding-left: 40px;\"><!-- [if !supportLists]-->7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Ruang WC Siswa : 2 Buah</p>', '11a2be1428a78480749365ab539a7d0e.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_foto_galeri`
--

CREATE TABLE `tb_foto_galeri` (
  `id` int(11) NOT NULL,
  `foto` varchar(40) NOT NULL,
  `kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_foto_galeri`
--

INSERT INTO `tb_foto_galeri` (`id`, `foto`, `kategori`) VALUES
(1, 'ce052fd5512b98aca262588f45d6fb2a.jpg', 1),
(5, '9c18490fbce9ddb49833d8bd531021de.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id` int(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `mapel` varchar(30) NOT NULL,
  `jum_jam` int(2) NOT NULL,
  `foto` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`id`, `nama`, `jabatan`, `mapel`, `jum_jam`, `foto`) VALUES
(1, 'Syamsul Arifin, S.Pd.I', 'Kepala Madrasah', 'Akidah Akhlak', 6, '4217aa48a64d56dd4bc0cf1f4a22eb7e.jpg'),
(2, 'Heri Yanto, S.Pd', 'Waka Kurikulum', 'Bahasa Inggris', 12, '7cfedb1929b075457b263336b998254a.png'),
(4, 'Muhammad Ansori, S.Pd', 'Waka Kesiswaan', 'Bahasa Indonesia', 12, '10eada2a9f7e89d13c056644dd5b2f1a.png'),
(5, 'Isrohlaini, S.P.d.I', 'Bendahara', 'Bahasa Arab', 6, '84248d1e072150907f9385bd01d8b805.png'),
(6, 'Kencana Wati, S.Pd', 'Guru Wali Kelas XII', 'Matematika', 12, 'cf8e2a831045b9b73c8396dd4dc9d482.jpg'),
(7, 'Novie Haryanti, S.Pd', 'Guru Wali Kelas XI', 'Matematika', 12, 'fb2c53fdf7220837b52d223dc9d71dce.png'),
(8, 'Sugiarti, S.Pd', 'Guru Wali Kelas X', 'Ekonomi', 10, '32ae7e70cf42d36bab9cdc8bc1b109cd.png'),
(9, 'Mukhsin, S.Ag', 'Guru', 'Alquran Hadis', 6, '9633f58199b563bc3393f6e372195ae1.png'),
(10, 'Rinasih, S. Hum.', 'Guru', 'Sosiologi', 8, '1bea3674db96f853194e3100bff160b9.png'),
(11, 'Lenny Oktaria, S.Pd', 'Guru', 'SBK, Fisika, Kimia', 6, '9dbd11ec362f511a36d3de9f1b540c5c.png'),
(12, 'Ulan Fitriani', 'Guru', 'Sejarah', 8, '4d7f38a0da092e0cb8fe152a07d3fa4e.png'),
(13, 'Sopiyan Nugraha, S.Pd', 'Guru', 'Fiqih', 6, '033bb58b748c720895c6a589e23765ae.png'),
(14, 'Wiji Astuti, S.Pd', 'Guru', 'SKI', 6, 'e7c3fcde9485b1615fcbe9c639fb0408.png'),
(15, 'Novie Haryanti, S.Pd', 'Guru', 'Geografi', 10, 'c812b23e9e8e9d5c993f9f9a6a11fd72.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_header`
--

CREATE TABLE `tb_header` (
  `id` int(1) NOT NULL,
  `slide` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_header`
--

INSERT INTO `tb_header` (`id`, `slide`) VALUES
(1, '846d6995b3c6d32ea101f678872eb0c7.jpg'),
(2, 'e2a14deee7b850c8f259fa5cc32570d0.jpg'),
(3, 'be074f3badbdc60db1182964a8e24b50.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_galeri`
--

CREATE TABLE `tb_kategori_galeri` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `foto` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori_galeri`
--

INSERT INTO `tb_kategori_galeri` (`id`, `nama`, `slug`, `foto`) VALUES
(1, 'ok', 'ok', 'ae9311d00ce6b62ec234579339fedc88.jpg'),
(2, 'asdasd', 'asdasd', '73c7ee1ab6333f1ac8fa45192711ab15.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `id` int(1) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telp` varchar(14) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kontak`
--

INSERT INTO `tb_kontak` (`id`, `email`, `telp`, `alamat`) VALUES
(1, 'maypimpa@gmail.com', '0735888', 'Kumpul Mulyo, Martapura, Kab. OKU Timur Sumatera Selatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengumuman`
--

CREATE TABLE `tb_pengumuman` (
  `id` int(3) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `slug` varchar(50) NOT NULL,
  `foto` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengumuman`
--

INSERT INTO `tb_pengumuman` (`id`, `judul`, `isi`, `slug`, `foto`) VALUES
(12, 'Libur Semester Genap Tahun Ajaran 2019/2020', '<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut officia ipsam nihil quisquam voluptas culpa quaerat praesentium totam perferendis obcaecati nisi unde deserunt nesciunt labore dicta, enim repudiandae minus suscipit dolore, vitae assumenda fugiat harum itaque cum dignissimos. In unde saepe laborum illo repellat adipisci, iste, amet totam. Tenetur officia maxime optio reiciendis harum, quis ipsa eos quam, dolores! Explicabo, nemo, labore? Soluta et, ipsa fugit tempora, culpa voluptatem atque labore eligendi voluptas alias repellendus id minus blanditiis nostrum omnis quaerat. Excepturi assumenda, alias minima officiis, non nam doloremque necessitatibus quas deleniti ipsa ipsum, dolor libero voluptas numquam placeat, eum?</p>', 'libur-semester-genap-tahun-ajaran-20192020', 'none'),
(15, 'Libur Lebaran 1440 Hijriah 2019', '<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa fuga voluptatibus aspernatur optio tenetur ad ducimus voluptas architecto eum provident voluptates nesciunt odio expedita laboriosam id obcaecati, veniam illo quis quasi, deserunt totam. Atque molestias autem repellendus magni cupiditate earum veritatis illum sint incidunt quaerat, voluptatem ratione sed a unde maxime animi voluptates laudantium, provident voluptate suscipit enim, ex excepturi. Minus possimus neque, quo in reiciendis quas dolorem voluptatum harum nobis. Ipsam quaerat ipsa accusamus ea, libero vero. Eveniet, cum.</p>', 'libur-lebaran-1440-hijriah-2019', 'none');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ppdb`
--

CREATE TABLE `tb_ppdb` (
  `id` int(1) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ppdb`
--

INSERT INTO `tb_ppdb` (`id`, `judul`, `isi`, `foto`) VALUES
(1, 'Informasi Penerimaan Peserta Didik Baru', '<p><strong>Persyaratan Pendaftaran :</strong></p>\r\n<p>1. Mengisi Formulir Pendaftaran</p>\r\n<p>2. Menyerahkan Photo Copy Izajah Terakhir yang telah dilegalisir sebanyak 2 lembar</p>\r\n<p>3. Menyerahkan Photo Copy SKHU Terakhir yang telah dilegalisir sebanyak 2 lembar</p>\r\n<p>4. Menyerahkan Pas Photo Hitam Putih ukuran 3x4 dan 2x3 masing - masing&nbsp; 5 lembar</p>\r\n<p>5. Menyerahkan Stop Maf sebanyak 1 lembar</p>\r\n<p>&nbsp; &nbsp; Keterangan :</p>\r\n<p>&nbsp; &nbsp; &gt; Laki - laki Warna Hijau</p>\r\n<p>&nbsp; &nbsp; &gt; Perempuan Warna Kuning</p>\r\n<p>&nbsp;</p>\r\n<p><strong>UNTUK 25 PENDAFTAR PERTAMA AKAN MENDAPATKAN :</strong></p>\r\n<p><strong>1. Perlengkapan Sekolah (Buku dan Alat Tulis)</strong></p>\r\n<p><strong>2. Baju Seragam Batik</strong></p>\r\n<p><strong>3. Baju Kaos Olahraga</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Waktu Pendaftaran&nbsp;</p>\r\n<p>April s.d Agustus 2019</p>\r\n<p>Di MA YPI Martapura&nbsp;</p>\r\n<p>Alamat : Kumpul Mulyo Desa Perjaya Barat Kec. Martapura Kab. OKU Timur.</p>\r\n<p>&nbsp;</p>\r\n<p>Contact Person :</p>\r\n<p>&gt; Syamsul Arifin : 0853-1164-3394</p>\r\n<p>&gt; Heryanto, S.Pd : 0823-7389-1329</p>\r\n<p>&gt; Muhammad Ansori : 0858-4089-7299</p>\r\n<p>&gt; Kencana Wati, S.Pd : 0852-6722-9363</p>\r\n<p>&nbsp;</p>', 'none');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_prestasi`
--

CREATE TABLE `tb_prestasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_prestasi`
--

INSERT INTO `tb_prestasi` (`id`, `judul`, `keterangan`, `foto`) VALUES
(1, 'Juara', '', '46b3febf0f05fe8353ca6bbabc15f45d.jpg'),
(6, 'Juara', '', '2d8e82d73ef814e3b0ecc12f488c2673.jpg'),
(7, 'Juara', '', '6306aa028585457c47f269af2359fa6f.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_program_unggulan`
--

CREATE TABLE `tb_program_unggulan` (
  `id` int(1) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_program_unggulan`
--

INSERT INTO `tb_program_unggulan` (`id`, `judul`, `keterangan`, `foto`) VALUES
(1, 'Program Unggulan', '<p>Berikut ini adalah program unggulan yang kami :</p>\r\n<p>1. Tahfidz Al-Qur\'an</p>\r\n<p>2. Kahataman Al-Qur\'an</p>\r\n<p>3. Tertib Tadarus Al-Qur\'an</p>\r\n<p>4. Tertib Sholat DZuhur Berjamaah</p>\r\n<p>5. Tertib Sholat Duha Berjamaah</p>\r\n<p>6. Diriwayatkan bagi yang mampu untuk ziarah ke makam wali songo</p>', 'ccc702b1e9939e604065de7179f25b7d.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sambutan`
--

CREATE TABLE `tb_sambutan` (
  `id` int(1) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sambutan`
--

INSERT INTO `tb_sambutan` (`id`, `judul`, `isi`, `foto`) VALUES
(1, 'Sambutan Kepala Sekolah', '<p style=\"text-align: center;\">Bismillahirohmannirrohim</p>\r\n<p style=\"text-align: center;\">Assalamualaikum Warahmatullah Wabarakatuh</p>\r\n<p style=\"text-align: center;\">Alhamdulillahi robbil alamin kami panjatkan kehadlirat Allah SWT, bahwasannya dengan rahmat dan karunia-Nya lah akhirnya Website sekolah ini dapat kami bangun. Kami mengucapkan selamat datang di Website kami Madrasah Aliyah Yayasan Pendidikan Islam Martapura yang saya tujukan untuk seluruh unsur pimpinan, guru, karyawan dan siswa serta khalayak umum guna dapat mengakses seluruh informasi tentang segala profil, aktifitas/kegiatan serta fasilitas sekolah kami. Tentunya Website sekolah kami masih terdapat banyak kekurangan, oleh karena itu kepada seluruh civitas akademika dan masyarakat umum dapat memberikan saran dan kritik yang membangun demi kemajuan Website ini lebih lanjut. Saya berharap Website ini dapat dijadikan wahana interaksi yang positif baik antar civitas akademika maupun masyarakat pada umumnya sehingga dapat menjalin silaturahmi yang erat disegala unsur. Mari kita bekerja dan berkarya dengan mengharap ridho sang Kuasa dan keikhlasan yang tulus dijiwa demi anak bangsa.</p>', '4a5fa2a3fc2b2b9a7a8673f69727ff93.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sejarah`
--

CREATE TABLE `tb_sejarah` (
  `id` int(1) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sejarah`
--

INSERT INTO `tb_sejarah` (`id`, `judul`, `isi`) VALUES
(1, 'Sejarah MA YPI Martpura', '<p style=\"text-align: justify;\">Madrasah Aliyah Martapura yang berada dibawah&nbsp; Yayasan Pendidikan Islam (YPI) Martapura berdiri pada tahun pelajaran 1995/1996 dibawah pimpinan Bapak Suwarno, BA yang pada waktu&nbsp; pertama beridir menumpang pada gedung MTs Negeri Martapura dengan jumlah siswa 11 orang yang merupakan alumni / tamatan MTs Martapura pada saat itu, serta didukung oleh tenga pengajar berjumlah 9 orang yang juga guru-guru dari MTs Negeri Martapura.</p>\r\n<p style=\"text-align: justify;\">Inisiatif untuk mendirikan Madrasah Aliyah Martapura berawal dari ide Bapak Drs. H. Khaeri selaku kepala MTs Negeri Martapura mengingat ada MTs Negeri, namun belum ada madrasah setingkat Aliyah baik negeri maupun swasta. Dengan konsep dasar untuk dapat melanjutkan kependidikan Agama bagi Madrasah setingkat Tsanawiyah, maka dengan dukungan beberapa guru MTs Negeri Martapura pada saat itu sepakat untuk mendirikan Madrasah Aliyah yang diberi nama Madrasah Aliyah Martapura dibawah naungan Yayasan Pendidikan Islam (YPI) dengan akte notaries Achmad Haidar Reza, SH Nomor 10 Tanggal 06 November 1997.</p>\r\n<p style=\"text-align: justify;\">Pada 22 juli 1998 kantor wilayah Deparatemen Agama Provinsi Sumatera Selatan mengeluarkan izin operasional dengan nomor : Wf / 6 &ndash; d / PP.03.2 / 1904 / 1998 tanggal 22 juli 1998 dengan nomor statistik madrasah (NSM) : 312160106123. Untuk kepala Madrasah pada saat berdirinya Yayasan Pendidikan Islam (YPI) Martapura menunjuk Bapak Suwarno, BA sebagai Kepala Madrasah yang statusnya adalah guru PNS pada MTs Negeri Martapura.</p>\r\n<p style=\"text-align: justify;\">Pada tanggal 20 juni 2001 Bapak Suwarno, BA ditetapkan sebagai kepala Madrasah Aliyah Martapura dengan masa jabatan 3 tahun. Pada tahun berikutnya yaitu pada petikan surat keputusan Menteri Agama RI Nomor : B.H/2/8577 tanggal 23 april 2003 Bapak Suwarno, S.Pd.I ditetapkan sebagai kepala Madrasah Aliyah Martapura hingga sekarang.</p>\r\n<p style=\"text-align: justify;\">Berdasarkan undang - undang bahawa sekolah swasta tidak diperkenankan menumpang pada sekolah Negeri maka pada tahun pelajaran 2004/2005 Madrasah Aliyah Martapura pindah ke gedung MTs Miftahul Huda di Kumpul Mulyo Kec. Martapura sampai sekarang.</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_struktur`
--

CREATE TABLE `tb_struktur` (
  `id` int(1) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `foto` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_struktur`
--

INSERT INTO `tb_struktur` (`id`, `judul`, `foto`) VALUES
(1, 'Struktur Organisasi', 'e029d798ca18db2a98224cdac07b5e87.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_token`
--

CREATE TABLE `tb_token` (
  `id` int(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `token` varchar(32) NOT NULL,
  `date_created` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `level` varchar(10) NOT NULL,
  `status` int(1) NOT NULL,
  `foto` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `email`, `password`, `level`, `status`, `foto`) VALUES
(1, 'Administrator', 'mfajri429@gmail.com', '$2y$10$3i9KTWyfXqN0BlHwJlVycu0tGncuS.T28FrXba0mc1BOPapAaxMnG', 'superadmin', 1, '350376a2d6f951938cdb17703f6d3095.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_visi_misi`
--

CREATE TABLE `tb_visi_misi` (
  `id` int(1) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_visi_misi`
--

INSERT INTO `tb_visi_misi` (`id`, `judul`, `isi`) VALUES
(1, 'Visi dan Misi MA YPI', '<h3 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-weight: 500; line-height: 1.2; color: #212529; font-size: 1.75rem; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-weight: bolder;\"><span style=\"box-sizing: border-box; font-size: 18pt;\">Visi</span></span></h3>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: medium; font-weight: 400; background-color: #ffffff;\">Menjadikan lulusan yang berprestasi, beriman dan bertakwa kepada Tuhan Yang Maha Esa, menuju manusia yang berkualitas.</p>\r\n<h3 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-weight: 500; line-height: 1.2; color: #212529; font-size: 1.75rem; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-weight: bolder;\"><span style=\"box-sizing: border-box; font-size: 18pt;\">Misi</span></span></h3>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: medium; font-weight: 400; background-color: #ffffff;\">Mendidikan siswa yang terampil, kreatif, inovatif ahlaulkarimah, menumbuhkan jiwa kemandirian siswa dengan mempersiapkan wawasan sosial, ekonomi dan keterapilan hidup serta pemahaman agama yang kuat</p>');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_ekstrakurikuler`
--
ALTER TABLE `tb_ekstrakurikuler`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_foto_galeri`
--
ALTER TABLE `tb_foto_galeri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori` (`kategori`);

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_header`
--
ALTER TABLE `tb_header`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kategori_galeri`
--
ALTER TABLE `tb_kategori_galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_ppdb`
--
ALTER TABLE `tb_ppdb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_program_unggulan`
--
ALTER TABLE `tb_program_unggulan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_sambutan`
--
ALTER TABLE `tb_sambutan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_sejarah`
--
ALTER TABLE `tb_sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_struktur`
--
ALTER TABLE `tb_struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_token`
--
ALTER TABLE `tb_token`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_visi_misi`
--
ALTER TABLE `tb_visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_ekstrakurikuler`
--
ALTER TABLE `tb_ekstrakurikuler`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_foto_galeri`
--
ALTER TABLE `tb_foto_galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_header`
--
ALTER TABLE `tb_header`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori_galeri`
--
ALTER TABLE `tb_kategori_galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_kontak`
--
ALTER TABLE `tb_kontak`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_ppdb`
--
ALTER TABLE `tb_ppdb`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_program_unggulan`
--
ALTER TABLE `tb_program_unggulan`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_sambutan`
--
ALTER TABLE `tb_sambutan`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_sejarah`
--
ALTER TABLE `tb_sejarah`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_struktur`
--
ALTER TABLE `tb_struktur`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_token`
--
ALTER TABLE `tb_token`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_visi_misi`
--
ALTER TABLE `tb_visi_misi`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_foto_galeri`
--
ALTER TABLE `tb_foto_galeri`
  ADD CONSTRAINT `tb_foto_galeri_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `tb_kategori_galeri` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
