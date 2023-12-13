-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2023 pada 12.30
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aulias`
--

CREATE TABLE `aulias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `aulias`
--

INSERT INTO `aulias` (`id`, `image`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'AseELNUtTLSOFjYwq1Y8Br1DvcATvu0PYJnMK0R9.jpg', 'Produk Gula UMKM ini tembus 10 negara', 'Lembaga Pembiayaan Ekspor Indonesia (LPEI) menyebutkan salah satu usaha kecil dan menengah (UKM) yang menerima fasilitas pembiayaannya, yaitu UKM gula kelapa, menembus pasar ekspor ke sepuluh negara. Direktur Pelaksana Bidang Pengembangan Bisnis LPEI Maqin U. Norhadi mengatakan UKM tersebut memanfaatkan program Penugasan Khusus Ekspor untuk mendukung sektor Usaha Kecil dan Menengah Berorientasi Ekspor (PKE UKM). “Program PKE UKM merupakan bentuk kehadiran negara melalui Kementerian Keuangan RI yang diberikan kepada LPEI sebagai bentuk dukungan APBN kepada para pelaku usaha berorientasi ekspor,” kata Maqin dalam keterangan tertulis, pekan lalu.\r\nUKM tersebut adalah CV Hugo Inovasi yang bergerak pada bidang produksi kelapa organik. Pendiri CV Hugo Inovasi, Astin Atsna mengungkapkan pembiayaan dari LPEI digunakan sebagai modal kerja untuk memenuhi permintaan buyer dari luar negeri serta meningkatkan kapasitas produksi. Hasilnya, produk gula kelapa asal Banyumas itu telah menembus 10 negara seperti Amerika Serikat, Spanyol, Ghana, Inggris, Arab Saudi, Bahrain, Singapura, Korea Selatan, Hong Kong, Malaysia, dan Australia. Astin menyebutkan saat ini lebih dari 90 persen penjualan CV Hugo Inovasi berasal dari ekspor. Selain memperoleh pembiayaan, Astin mengaku juga mendapatkan fasilitas konsultasi dari LPEI, seperti konsultasi mengenai penyusunan laporan keuangan.Ia berharap dukungan yang diberikan LPEI dapat meningkatkan kapasitas usaha dan memperluas akses pasar.\r\nProgram PKE UKM merupakan bentuk kehadiran negara melalui Kementerian Keuangan RI yang diberikan kepada LPEI sebagai bentuk dukungan APBN kepada para pelaku usaha berorientasi ekspor. Dengan program tersebut, UKM berorientasi ekspor memiliki akses yang lebih mudah ke pembiayaan, penjaminan, asuransi ekspor, dan jasa konsultasi. Sejak 2021 hingga September 2023 dukungan APBN melalui program PKE UKM telah mencapai Rp 924 miliar yang dimanfaatkan oleh lebih dari 120 pelaku UKM pada lebih dari 30 produk ke lebih dari 40 negara tujuan ekspor.', '2023-11-14 19:53:13', '2023-12-10 23:10:25'),
(2, 'fxPiMP1zmTNaBEGs1dRzFdLU7QVCYCw73Pp3boeX.jpg', 'Tergerak Membantu Petambak Udang, Nafi\'ah Bangun Bisnis Startup Crustea', 'Sektor pertanian atau agribisnis adalah salah satu sektor yang masih banyak mengalami permasalahan dalam pengelolaannya. Hal ini disebabkan karena para petani atau petambak, masih menggunakan cara tradisional dalam mengurus segala keperluan lahannya. Padahal, saat ini sudah semakin banyak kesempatan bagi para petani dan petambak untuk memaksimalkan hasil panen mereka menggunakan startup teknologi. Rokhanatun Nafi’ah adalah salah seorang pengembang startup yang berasal dari Surabaya, Jawa Timur. Ia sudah mulai menekuni hal ini sejak dirinya masih mengenyam pendidikan tinggi di salah satu universitas dengan jurusan teknik industri.\r\nMembangun Crustea sebagai Solusi Permasalahan Petambak Wanita yang akrab dipanggil Nafi ini menceritakan, bagaimana ia dan seorang rekan kuliahnya mulai membangun bisnis startup dengan nama Crustea, berdasarkan pengalaman yang dirasakan keduanya. “Dulu, ketika masih kuliah, saya dan founder Crustea sering berinteraksi dengan para petambak yang berkeluh kesah sering mengalami gagal panen. Salah satunya, karena kadar oksigen di tambaknya tidak stabil,” ungkap Nafi membuka pembicaraan dalam sambungan telepon. Mendengar keluhan dari para petambak, menggerakkan hati Nafi untuk membuat sebuah solusi bagi para petambak, agar bisa memaksimalkan produktivitas mereka. Ia tidak bergerak sendiri, melainkan bersama dengan seorang rekannya memulai semuanya dengan berupaya untuk membudidayakan udang di tambak mereka sendiri. Sayang, bukan hasil manis yang mereka terima, tetapi justru mereka turut merasakan gagal panen oleh karena beberapa penyebab.\r\nDari pengalaman tersebut, akhirnya Nafi dan rekan-rekannya merancang beberapa inovasi teknologi akuakultur yang ramah lingkungan. Tiga produk yang telah dihasilkan Crustea di antaranya adalah Eco-Aerator atau aerator yang terintegrasi dengan panel surya, EBII System atau teknologi monitoring kualitas air tambak secara real time dalam empat parameter. Dan produk ketiga adalah Smart Energy untuk memonitor penggunaan energi listrik, serta adanya sistem early warning system.\r\nMembangun dan Mengembangkan Crustea Bersama “Awalnya kami membangun ini memang dari internal saja. Kebetulan karena saya dari jurusan teknik industri dan founder saya dari teknik elektro, jadi kami memikirkan solusi masalah para petambak,” jelas Nafi. Melalui ketekunan dan semangat pantang menyerah, mereka berhasil menciptakan solusi, yakni untuk permasalahan kadar oksigen dalam air dan juga menurunkan biaya operasional penggunaan listrik. Meski berhasil mengembangkan teknologi tersebut, kendala yang dialami oleh Nafi dan rekannya adalah kurangnya keterampilan berbisnis, sehingga mereka belum bisa mengimplementasikannya kepada petambak mitra. Beruntung, mereka terpilih menjadi salah satu peserta inkubasi bisnis pada awal tahun 2022.\r\n“Waktu itu kami terpilih dalam sebuah program inkubasi pengembangan bisnis di bidang green technology atau teknologi hijau karena kita mengangkat panel surya, manajemen energi listrik, dan sebagainya,” lanjut Nafi. Tidak hanya itu, Crustea juga pernah terpilih dalam Grand International yang berdampak pada berjalannya proses eksekusi produk Crustea, sehingga dapat diimplementasikan kepada para petambak mitranya. Sabet Berbagai Penghargaan Lokal dan Internasional Berbagai inovasi yang dihasilkan Crueste, membuat startup yang terbilang baru ini, berhasil menyabet berbagai prestasi di ajang penghargaan. Pada awal tahun 2022, Crustea mendapat Grand International, menjadi juara pertama Best Startup pada kompetisi ‘Startup Astranauts’ yang digadang oleh PT Astra Digital Internasional, dan The Best Startup di program GSMA, sebuah program internasional di bidang digital.“Di tahun ini, kami mendapat penghargaan melalui “Entrepreneur Award” dari KemenKop-UKM. Yang terbaru, kami memperoleh juara kedua dalam APEC Catalyst Pitch Competition International di San Fransisco, Amerika Serikat,” pungkas Nafi.', '2023-12-05 22:51:32', '2023-12-10 23:36:55'),
(3, 'jcH538Z8byIXzMDdOMEJnKmNqTPFGfGTK3PXb4kf.jpg', 'Jakarta Sneaker Day, Platform Sneaker yang Sudah Membawa Seribu Brand Lokal', 'Pekembangan pelaku Usaha Mikro, Kecil, dan Menengah (UMKM) bertumbuh pesat, termasuk di bidang sepatu atau sneakers. Oleh karena itu, saat ini banyak bermunculan platform atau media untuk membuat event sneakers.\r\n\r\nJakarta Sneaker Day (JSD) salah satunya. JSD merupakan sebuah platform (media dan event) yang berfokus pada kultur sneaker dan subkultur lainnya yang masih berhubungan dengan sepatu.\r\n\r\n“Kita event pertama pada bulan Januari di tahun 2017. Tapi sebelumnya kita sudah buat akun instagram di tahun 2016 sebagai media yang mengumpulkan orang dan untuk promosi, bahwa di tahun depan kita akan mengadakan event pertama Jakarta Sneaker Day.”\r\n\r\nHal itu diungkap Dimas Aditya selaku Head of Media & Strategist JSD, saat gelaran Cerita Nusantara 2023 di JCC, Jakarta Pusat beberapa waktu lalu.\r\nSeribu Brand Turut Berpartisipasi Sejak tahun 2017 hingga tahun 2023, Jakarta Sneaker Day (JSD) berhasil mengadakan lima event yang dilakukan secara offline dan 10 event secara online. “Kalau event offline kita ada 100 brand biasanya yang masuk, sedangkan kalau online biasanya di sekitar 100 hingga130 brand lokal. Jadi, kalau ditotal mungkin sudah ada lebih dari 1.000 brand yang sudah berpartisipasi dengan JSD,” kata Dimas.\r\nBawa Jaket Viral Jokowi di Gelaran Cerita Nusantara 2023 Cerita Nusantara 2023 merupakan gelaran kriya dan wastra yang diadakan selama satu hari di JCC, Jakarta Pusat pada Selasa (28/11/2023). Pada gelaran tersebut, JSD membawa kurang lebih 15 brand lokal, termasuk jaket yang pernah dipakai Presiden Republik Indonesia, Joko Widodo. “Kita bawa jaket viral dari Nevertoolavish yang dulu digunakan oleh Jokowi. Tahun 2018 Nevertoolavish bertemu langsung dengan Jokowi saat event kita. Jadi jaket ini memang di request langsung oleh Jokowi. Hal itu membuka peluang yang lebih besar untuk brand lokal dan JSD sendiri pastinya,” tutur Dimas.\r\nFokus Membuat Brand Marchandise Event Saat tidak ada event, JSD secara konsisten memberikan edukasi atau berita tentang sneaker, informasi brand, dan berbagai hal lain mengenai sneaker. Dimas mengatakan, di tahun 2023, ia bersama tim fokus membuat marchandise event untuk menjadi brand sendiri di bawah JSD, yang fokus memberikan apparel atau fashion item yang memang selaras dengan sneaker.\r\nCiptakan Berbagai Kolaborasi Sementara untuk event, JSD terus berusaha untuk memberikan sesuatu yang baru dan menarik dari segi konsep, acara, program, tenant, penawaran bagi konsumen dan para visitor event JSD. Di event terakhir JSD yang bernama JSD 2023 Celebration, JSD mampu menciptakan lima kolaborasi dengan lima brand berbeda. “Salah satunya kita kolaborasi dengan brand luar negeri yang bernama Kinn, jadi kita bikin dua edisi Kinn saat itu. Kita juga ada maskot JSD yang bernama deadstock drop zone,” kata Dimas. Selain itu, JSD bersama Indonesia Sneaker Team yang merupakan komunitas sneaker terbesar di Indonesia, juga telah menciptakan sebuah buku yang berjudul Made In Indonesia. “Di dalam buku tersebut berisi informasi sneakers culture di Indonesia. Jadi di buku itu ada informasi pemain brand, kolektor, event yang kita bikin, hingga brand lokal ada semua di situ,” pungkas Dimas.', '2023-12-05 22:57:34', '2023-12-10 23:27:20'),
(4, 'rWWwi5Al8FwDXRq9BbTqWDnUjXgpEcYau3tZr3EH.jpg', 'Merintis Bisnis Daur Ulang, Sukriyatun Niamah Ubah Sampah Plastik Jadi Produk Home Decor', 'Permasalahan limbah plastik masih menjadi salah satu isu yang sering dibahas berbagai pihak. Sebab, belum banyak pihak yang bisa mengolah limbah plastik dan mendaur ulangnya menjadi barang yang memiliki nilai guna.\r\n\r\nSalah seorang yang telah melakukannya adalah Sukriyatun Niamah atau akrab disapa Niam, founder dari Robries.\r\n\r\nRobries atau PT Siklus Karya Global adalah sebuah perusahaan yang bergerak di bidang pengolahan limbah sampah plastik, menjadi furniture dan juga home decoration.\r\n\r\nlasan Mengolah Sampah Plastik Sebagai seorang mahasiswa praktisi product designer, Niam melihat timbunan sampah plastik yang begitu banyak bisa diolah menjadi material produk dengan fungsi lain. Sejak remaja, Niam memang memiliki awareness atau perhatian terhadap sampah plastik yang kian menimbun. Dan sebagai product designer, ia menyiasati untuk mengolah limbah plastik. “Pandangan saya sebagai seorang product designer, sampah plastik ini adalah sebuah material, yang mana setelah saya olah, orang-orang yang melihatnya pun kaget dan terkagum,” kata Niam saat dihubungi Kompas.com beberapa waktu lalu.\r\n\r\nDengan mengolah limbah plastik menjadi sebuah material baru, Niam juga ingin menyuarakan gerakan kurangi penggunaan plastik dan mulai membiasakan diri memilah sampah, agar dapat didaur ulang dan memiliki nilai guna. Memulai Eksperimen di Kost Niam bercerita, ia mulai bereksperimen untuk melelehkan limbah plastik menggunakan sebuah oven bekas. Hal ini dilakukannya saat masih berkuliah dan tinggal di sebuah kost.\r\n\r\n“Dulu untuk mulai eksperimen, saya mengeluarkan modal untuk membeli oven bekas dan beberapa perlengkapan lain, yang semua bernilai sekitar Rp 3 hingga 4 juta. Saya eksperimen saat masih ngekost,” katanya. Dari alat yang sangat sederhana dan sebuah kamar kost, rupanya mampu membawa Niam pada proses kreatif dan mengembangkan inovasi. Pada tahun 2020, Niam sudah menyelesaikan masa perkuliahannya. Ia kembali mengembangkan inovasi Robries bersama rekan barunya hingga memiliki sebuah workshop khusus untuk Robries. Kemudian di awal tahun 2023, Robries telah resmi memiliki sebuah pabrik produksi.\r\nDari Eksperimen Menjadi Prestasi Gemilang Berawal dari eksperimen yang dilakukan Niam kala kuliah, Niam memberanikan diri menampilkan produk inovasinya mendaur ulang sampah plastik ke mata dunia. Bersama rekan barunya, yakni Tita, Ano, dan Handhhy, mereka memberanikan diri untuk ikut serta dalam sebuah lomba yang diselenggarakan di Italia, dan berhasil lolos ke sana. Setelah berhasil membawa nama Robries ke Italia, mereka semakin bergairah untuk mengembangkan potensi pasar yang tidak hanya di Indonesia, melainkan menjangkau ke beberapa negara hingga benua lain.\r\n“Kami makin semangat untuk memperkenalkan produk kami, dengan ikut pameran di sana-sini. Meski awalnya sulit karena ini merupakan produk daur ulang sampah, kini kampanye kurangi sampah plastik sudah banyak, sehingga produk kami juga sudah jauh lebih diterima,” tutur Niam.\r\nBerhasil Menjangkau Pasar Lokal dan Ekspor Barang-barang yang dihasilkan Robries pada dasarnya adalah lembaran seperti triplek yang dapat dibentuk sesuai dengan kebutuhan konsumen. Misalnya, untuk dijadikan hiasan interior, topper meja bar, ataupun produk turunannya berupa furniture dan home decor. Dengan inovasi, kematangan desain produk, pembentukan pola, dan kualitas yang dipertahankan, produk Robries tidak hanya memikat perhatian individu, melainkan juga perusahaan dan lembaga besar yang memiliki kesadaran ekosistem hijau. Hotel, restoran, kafe, dan pribadi adalah segmentasi jangkauan pasar Robries.\r\nNiam menyebutkan, semua sektor tersebut sekarang telah semakin bertumbuh di dalam negeri dan terbilang menguasai lebih dari 50 persen pasar produk Robries. “Sekarang ini kami sudah menemukan pasar potensial dan dapat dikatakan Robries sudah cukup menguasai pasar untuk produk recycle,” jelasnya. “Paling banyak adalah dari lokal, seperti di Jakarta dan Bali itu sekitar 60-70 persen pasarnya, sedangkan sisanya adalah ekspor,” tutup Niam.', '2023-12-05 23:01:38', '2023-12-10 23:35:55'),
(5, 'KF7nokh5KnQNKhh0sBXx9ILO85YkQKuswRxfWluY.jpg', 'Kisah Rian, Disabilitas Tuli yang Merintis Bisnis Kue dan Catering Bersama Istrinya', 'Setiap orang tentunya memiliki keterbatasan pada dirinya, seperti yang dialami oleh teman-teman disabilitas. Pria berusia 31 tahun tersebut merintis usaha ini sejak tahun 2020 dengan dibantu oleh istri dan berjualan dari rumah. Di balik nama Dapur Cinta Tuli Setiap pelaku usaha tentunya memiliki kisah dan alasan di balik nama yang mereka gunakan untuk mereka mereka. Bisnis kue dan catering milik Rian diberi nama Dapur Cinta Tuli. “Nama Dapur Cinta Tuli saya gunakan karena saya Tuli dan istri saya juga Tuli, jadi kita berdua yang memulai dan memasak makanan,” tutur Rian saat ditemui Kompas.com pada pameran Karya Tanpa Batas di Lantai 2 Ashta District 8 Mall, Jakarta Selatan pada Minggu (3/12/2023).\r\nSebagai seorang disabilitas, Rian mengaku banyak sekali mendapatkan diskriminasi dari masyarakat dan tempat kerja. “Saya pernah daftar kerja, saya kan tidak bisa mendengar, hal ini menjadi tantangan bagi perusahaan untuk menerima saya,” ungkap Rian. Rian juga pernah diterima kerja tapi hal itu berlangsung selama dua bulan saya, setelah itu dirinya keluar dari pekerjaan tersebut.\r\nSulit Memasarkan Produk Dapur Cinta Tuli Sejak tahun 2020, Dapur Cinta Tuli sudah menggunakan media sosial sebagai media pemasaran, seperti menggunakan Instagram, Whatsapp, Shopeefood, dan Gofood dengan menggunakan sistem pre-order (PO). Mesikpun demikian, Rian mengatakan, dirinya mengalami kesulitan dalam hal mempromosikan produk Dapur Cinta Tuli, seperti aneka kue dan juga makanan. “Sebulan saya hanya mendapat tiga hingga empat pesanan karena orang-orang mungkin kurang tertarik dengan postingan saya pada media promosi yang kurang menarik,” kata Rian. Mesikpun demikian, Rian akan segera memperbaiki dan akan lebih banyak belajar untuk menutupi kesulitannya di bidang promosi agar desain postingannya lebih bagus dan menarik. Selain itu, peralatan membuat kue juga masih menjadi tantangan bagi Rian. Hal ini karena dalam proses pembuatan kue menggunakan mesin atau alat yang bervariatif. “Mengapa menjadi tantangan? karena untuk membeli peralatan ini pasti membutuhkan modal yang besar,” ujar Rian.\r\nSeminggu Mampu Menjual 300 Paket Nasi Rian mengalami hambatan dan rintangan dalam menjalankan usaha Dapur Cinta Tuli. Namun hal tersebut tidak mematahkan semangat Rian.\r\nHal ini dibuktikan oleh Rian yang mampu menjual sebanyak 300 paket nasi per minggunya. Rian rela memasak dari malam hingga pagi hanya untuk membakar semangatnya dalam memenuhi target penjualan. “Saya berharap Dapur Cinta Tuli semakin berkembang agar bisa membantu teman-teman disabilitas sehingga mereka bisa bekerja dan berkembang. Saya berusaha membantu teman Tuli daripada mereka mengganggur,” ujar Rian.', '2023-12-05 23:05:30', '2023-12-10 23:36:15'),
(6, '3HxUbJMOgBscvpoazcHFRGOOIlGuE1ZMTLImgQno.jpg', 'Kisah Helmi Rintis Sound of Art, Radio Vintage yang Jadi Souvenir G20 dan MotoGP', 'Barang-barang vintage terkadang membawa ingatan kita berwisata ke masa lalu. Vintage merupakan sesuatu dari masa lalu yang memiliki kualitas tinggi, seperti karya seni dan barang koleksi lainnya. Termasuk juga radio, teknologi yang marak digunakan di tahun 1900 hingga 2000-an,  sebelum kehadiran televisi dan internet. Untuk membangkitkan suasana masa lalu, Helmi Suana Permanahadi menyulap sebuah radio menggunakan kayu dengan desain vintage. Baca juga: TxTure, Sepatu Vintage Modern Buatan Bandung yang Mendunia Helmi memberi nama Sound of Art sebagai merek usahanya, yang didirikan pada tahun 2018, dengan menggabungkan antara seni, desain, dan musik elektronika.\r\nProduk radio vintage Helmi merupakan sebuah karya yang unik, yang masih sangat jarang ditemui di Indonesia. Hal ini membuatnya kesulitan untuk memperkenalkan produk-produk Sound of Art. Namun demikian, Helmi tetap berusaha untuk terus memperkenalkan produknya, salah satunya melalui kegiatan pameran. Dengan menjadi peserta pameran, Helmi bisa mengetahui, kalangan mana saja yang menyukai produknya dan sejauh mana produknya bisa diterima oleh masyarakat Indonesia dan dunia. “Selama pameran Brilianpreneur, saya berkesimpulan, produk ini diminati oleh orang yang memang paham dengan seni, rentang usia 15 tahun ke atas. Meskipun demikian, ada juga anak SMP yang datang karena menyukai vintage yang kami tawarkan,” ujar Helmi.\r\nMenjadi Souvenir pada g20 dan MotoGP Upaya Helmi tak sia-sia, produk Sound of Art terpilih menjadi salah satu souvenir pada event G20 Indonesia 2022 dan MotoGP Mandalika 2023. “Kami merupakan salah satu UMKM binaan BUMN. Kemudian kami dipilih BUMN untuk menjadi souvenir pada event tersebut,” jelas Helmi.Sebagai Usaha Mikro, Kecil, dan Menengah (UMKM) binaan BUMN, Helmi juga diajak beberapa instansi untuk melakukan pameran di luar negeri, salah satunya China. “Ke depannya, kami ingin mencoba skema business to business (B2B) dan ingin menembus pasar Korea dan China,” harapnya.', '2023-12-10 19:55:57', '2023-12-10 23:06:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_19_035638_create_aulias_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'inka aulia', 'admin1@gmail.com', NULL, '$2y$10$w2axSfHCGCaxuuj.jYkYNeLDBg6PaGHCz2PASEsPbNkBG2LnQm1IS', NULL, '2023-11-13 19:23:26', '2023-11-13 19:23:26'),
(2, 'cahya', 'cahya@gmail.com', NULL, '$2y$10$brtznwp.YqNsVlhOqokm4eL.IPcUNILVWRgF9tTtOm8IFer2bl4lG', NULL, '2023-11-14 00:07:17', '2023-11-14 00:07:17'),
(3, 'rara', 'rara@gmail.com', NULL, '$2y$10$f1.Mr27Kgd6ufd4e7m0q0OAbomlvOsIH1z31IYnsSsjzYmV0VVxpq', NULL, '2023-11-14 00:39:05', '2023-11-14 00:39:05'),
(4, 'inka ningsih', 'ningsih@gmail.com', NULL, '$2y$10$kBjbCmx41ico/WKBxvIUG.RrAe/./SvxGW1kxLFxEEjy2pt6oC.Ou', NULL, '2023-11-14 20:21:37', '2023-11-14 20:21:37'),
(5, 'yogi', 'yogi@gmail.com', NULL, '$2y$10$mDc91jTOeiW4nIr3YT19ter5JXspASffPNl2IGqif11w/AofEGrwa', NULL, '2023-11-27 23:58:56', '2023-11-27 23:58:56'),
(7, 'dwi', 'dwi23@gmail.com', NULL, '$2y$10$AK9ULIf5SpkfcGkOTqr5iOTkXbqEAna2i7htHJUvy1Vt54UuqcK6a', NULL, '2023-12-05 21:44:48', '2023-12-05 21:44:48');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aulias`
--
ALTER TABLE `aulias`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aulias`
--
ALTER TABLE `aulias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
