-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 23 Agu 2020 pada 16.27
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ciprojectapp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritas`
--

CREATE TABLE `beritas` (
  `berita_id` varchar(64) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `contents` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `beritas`
--

INSERT INTO `beritas` (`berita_id`, `title`, `image`, `contents`) VALUES
('5f3e5a89d3211', 'Sri Mulyani: Pemerintah Salurkan Stimulus Lewat Bank Konvensional Maupun Syariah', '5f3e5a89d3211.jpg', 'Merdeka.com - Menteri Keuangan, Sri Mulyani menganggarkan dana sebesar Rp123,47 triliun untuk stimulus UMKM dalam program Pemulihan Ekonomi Nasional. Stimulus ekonomi tersebut disalurkan pemerintah melalui bank dan lembaga keuangan lainnya. Penyaluran stimulus ini bisa didapat masyarakat melalui bank konvensional maupun syariah.\r\n\r\n\"Pemerintah memberikan pinjaman lewat bank atau lembaga keuangan baik yang konvensional maupun syariah,\" kata Sri Mulyani dalam diskusi bertajuk Recovery Of Indonesia Economy In The Post Covid-19: The Role Of Islamic Economics di akun Youtube IAEI TV, Jakarta, Kamis (20/8).\r\n\r\nSebagaimana diketahui, pemerintah menganggarkan dana Pemulihan Ekonomi Nasional sebesar Rp694 triliun. Sektor kesehatan yang memiliki anggaran Rp87, 55 triliun, namun baru merealisasikan 7 persen.\r\n\r\nSektor Kementerian/Lembaga dan Pemerintah Daerah terealisasi 6,5 persen dari anggaran Rp106,11 triliun. Sektor Insentif Usaha terealisasi 13 persen dari anggaran Rp120,61 triliun.\r\n\r\nKemudian Sektor UMKM terealisasi 25 persen dari anggaran Rp123,46 triliun. Sektor Perlindungan Sosial terealisasi 38 persen dari anggaran Rp203,9 triliun. Sementara sektor pembiayaan korporasi dari anggaran Rp53,57 triliun belum terealisasi sama sekali.'),
('5f3e5b0618e10', 'Nasib Pesawat N-250 Gatot Kaca Buatan BJ Habibie yang Berakhir di Museum', '5f3e5b0618e10.jpg', 'Merdeka.com - PT Dirgantara Indonesia (PTDI) menyerahkan pesawat N250 Prototype Aircraft 01 (PA01) Gatotkaca untuk melengkapi koleksi Museum Pusat Dirgantara Mandala (Muspusdirla) Yogyakarta. Penyerahan ini sesuai dengan mandat Surat Keputusan Kepala Staf TNI Angkatan Udara (SKEP) Nomor 284/VIII/2020 tanggal 14 Agustus 2020 tentang Penugasan Penerimaan Hibah Pesawat PA01 N250 milik PTDI untuk ditempatkan di Museum Pusat Dirgantara Mandala (Muspusdirla), Yogyakarta.\r\n\r\nManager Komunikasi Perusahaan dan Promosi PTDI, Adi Prastowo mengatakan, pihaknya sudah melakukan proses pembongkaran pesawat. Diawali dengan membuka semua panel akses di bagian utama, baik itu engine, propeller, maupun struktur utama pesawat N250 seperti body, wing dan vertical stabilizer.\r\n\r\n\"Pelaksanaan pembongkaran mengedepankan safety, baik itu personil maupun peralatan yang digunakan. Ini dilakukan agar bagian-bagian struktur pesawat yang dibongkar tidak mengalami kerusakan hingga nanti dipasang kembali di Yogyakarta,\" ujar Adi dalam keterangan resminya ditulis Bandung, Kamis (20/8).\r\n\r\nAdi mengatakan pesawat N250 PA01 Gatotkaca dikirimkan ke Yogyakarta melalui jalur darat. Rencanaya, Museum Pusat Dirgantara Mandala (Muspusdirla) Yogyakarta akan melakukan proses penerimaan pada tanggal 25 Agustus 2020 yang akan dihadiri oleh Panglima TNI, Kepala Staf TNI Angkatan Udara, Direktur Utama PTDI beserta jajaran pejabat di lingkungan TNI AU dan PTDI.\r\n\r\nPesawat N250 PA01 Gatotkaca merupakan pesawat pertama hasil dari Grand Strategy tahap tiga yang dicanangkan oleh B.J. Habibie yakni Tahap Pengembangan Teknologi.\r\n\r\nPesawat N250 merupakan pesawat turboprop yang menggunakan teknologi mutakhir, antara lain fly by wire system, full glass cockpit with engine instrument and crew alerting system (EICAS), engine control with full autorithy digital engine control (FADEC), electrical power system with variable speed constant frequency (VSCF) generator yang biasa dipakai dalam pesawat tempur dan saat itu baru diterapkan pada B737-500.\r\n\r\n\"Tahun 1989, pesawat N250 diperkenalkan di Paris Airshow, Le Bourget, Perancis oleh Bapak B.J. Habibie. Pada 10 November 1994, prototipe N250 Gatotkaca berkapasitas 50 penumpang keluar dari hanggar (roll-out) ditarik 50 karyawan IPTN,\" jelas Adi.\r\n\r\nAdi menuturkan Gatotkaca adalah nama yang diberikan oleh Presiden Soeharto untuk prototipe pertama N250. Setelah itu beliau memberi nama tiga prototipe N250 berikutnya yang dibangun dengan kapasitas 70 penumpang yaitu Krincingwesi, Koconegoro dan Putut Guritno.\r\n\r\nTanggal 10 Agustus 1995, pesawat N250 Gatotkaca dengan registrasi PK-XNG berhasil melakukan penerbangan perdana (first flight) dihadiri oleh Presiden Soeharto, Tien Soeharto, Wakil Presiden Try Sutrisno, dan Tuti Sutrisno. Keberhasilan terbang perdana N250 pada tanggal 10 Agustus 1995 ditetapkan sebagai Hari Kebangkitan Teknologi Nasional (HAKTEKNAS) yang diperingati setiap tahunnya.\r\n\r\n\"Penyerahan N250 PA01 Gatotkaca ke Museum Pusat Dirgantara Mandala (Muspusdirla), Yogyakarta sebagai bentuk menjaga aset negara karena mempunyai nilai historis yang tinggi dan merupakan sejarah berdirinya industri dirgantara sehingga masyarakat dapat melihat langsung Pesawat N250 Gatotkaca di Museum, serta menjadi ajang edukasi dan motivasi bagi para penerus bangsa,\" ungkap Adi.'),
('5f3e5b923ccbe', 'Disebut Tidak Becus oleh Obama, Begini Reaksi Trump', '5f3e5b923ccbe.jpeg', 'Jakarta - Presiden Amerika Serikat Donald Trump menanggapi dengan marah pada pendahulunya, mantan presiden Barack Obama yang menyebut dirinya sebagai presiden yang tidak serius yang telah menempatkan demokrasi AS dalam bahaya.\r\nMenanggapi komentar Obama itu, Trump mengatakan kepada wartawan bahwa Obama adalah pemimpin yang \"tidak efektif\" dan \"buruk\".\r\n\r\n\"Saya melihat kengerian yang dia tinggalkan pada kita, kebodohan transaksi yang dia lakukan,\" cetus Trump.\r\n\r\n\r\n\"Lihatlah betapa buruknya dia, betapa tidak efektifnya dia sebagai presiden, dia sangat tidak efektif, sangat buruk,\" imbuh Trump.\r\n\r\nBaca juga:\r\nObama Tuding Trump Bikin \'Reality Show\' di Gedung Putih\r\n\"Presiden Obama tidak melakukan pekerjaan dengan baik. Alasan saya di sini adalah karena Presiden Obama dan Joe Biden,\" imbuhnya seperti dilansir kantor berita AFP, Kamis (20/8/2020).\r\n\r\nDalam pidatonya di konvensi Partai Demokrat, Obama mengatakan bahwa Trump memperlakukan jabatan kepresidenan AS seperti \"reality show\". Mantan presiden AS itu mengatakan bahwa penggantinya dari Partai Republik itu \"belum melakukan pekerjaannya dengan baik karena memang tidak becus\".\r\n\r\nBaca juga:\r\nSering Bikin Kesalahan, Mungkinkah Biden Kalahkan Trump di Pilpres AS?\r\nSebelumnya pada Senin (17/8) malam di konvensi Demokrat, istri Obama, Michelle Obama menyampaikan serangan yang berapi-api terhadap penerus suaminya, menyebut Trump tidak kompeten dan \"jelas kewalahan\".\r\n\r\nSerangannya sangat mengejutkan banyak orang Amerika karena ibu negara AS, baik mantan maupun yang sedang menjabat, cenderung menjauh dari pentas politik.\r\n\r\n(ita/ita)\r\namerika serikat\r\ndonald trump\r\nobama\r\n'),
('5f3e5befa581f', 'Pemerintah Jelaskan soal Hasil Rapid Test Corona Nonreaktif tapi Swab Positif', '5f3e5befa581f.jpeg', 'Jakarta - Juru bicara Satgas Penanganan COVID-19 Wiku Adisasmito menjelaskan perihal penggunaan rapid test. Wiku mengatakan rapid test hanya berfungsi sebagai screening.\r\nPenjelasan itu disampaikan Wiku untuk menjawab adanya warga yang melakukan rapid test tiga kali dan hasilnya nonreaktif tapi, setelah melakukan tes swab, hasilnya menunjukkan positif COVID-19.\r\n\r\n\"Kami perlu sampaikan bahwa rapid test fungsinya adalah fungsi screening,\" kata Wiku dalam jumpa pers yang disiarkan kanal YouTube Sekretariat Presiden, Kamis (20/8/2020).\r\n\r\n\r\nBaca juga:\r\nJubir Satgas COVID-19 Beberkan Rekomendasi Obat untuk Pasien Corona\r\nWiku mengatakan rapid test tidak bisa dijadikan acuan untuk mendiagnosis seseorang terpapar COVID-19. Rapid test, kata dia, harus disertai tes Corona lanjutan, seperti tes polymerase chain reaction (PCR).\r\n\r\n\"Apabila fungsi screening tersebut misalnya dites positif, harus dilanjutkan dengan tes PCR. Apabila rapid test-nya negatif tapi memiliki riwayat kontak dengan penderita, tentunya itu harus hati-hati dan melakukan isolasi mandiri,\" tuturnya.\r\n\r\nKarena itu, kata Wiku, yang diutamakan dalam melakukan rapid test adalah prinsip kehati-hatian. Dia meminta semua fasilitas kesehatan yang menggunakan rapid test menjaga kualitasnya.\r\n\r\n\"Jadi kita semua prinsipnya harus berhati-hati. Demikian pula untuk penyelenggara rapid test, apa pun itu, fasilitas kesehatan mohon agar menjaga kualitas rapid test tersebut agar apabila digunakan dapat memberikan hasil yang optimal,\" kata Wiku.\r\n\r\nBaca juga:\r\nPemerintah Jelaskan soal Kasus Aktif RI di Bawah Global Berikut Sebarannya\r\nBegitu pula dengan tes PCR. Wiku meminta laboratorium yang melakukan pengetesan memastikan reagen atau pereaksi kimia yang biasa digunakan untuk pemeriksaan virus Corona dengan metode PCR dalam kualitas baik.\r\n\r\n\"Begitu juga PCR, seluruh laboratorium yang menyelenggarakan tes PCR agar betul-betul memastikan bahwa reagen yang dimilikinya berkualitas baik dan dalam pelaksanaannya juga dijalankan dengan protokol yang baik dan benar sambil menjaga keselamatan keamanan dari seluruh laborat yang bekerja di laboratorium,\" katanya.\r\n\r\n\"Karena seluruh petugas kesehatan ini adalah garda penting di dalam diagnosis atau identifikasi kasus dan kita semuanya harus menjaga itu dengan baik sehingga kenaikan tasting sangat bergantung pada kualitas laboratorium dan tenaga kesehatan yang mewakilinya,\" imbuh Wiku.\r\n\r\n(mae/idh)\r\nwiku adisasmito\r\ncovid-19\r\nrapid test\r\nrapid test corona\r\ntes swab'),
('5f3e5c3ed9131', '147.211 Kasus Positif Corona di RI Per 20 Agustus, Ini Sebarannya', '5f3e5c3ed9131.jpeg', 'Jakarta - Kasus virus Corona (COVID-19) di Indonesia hari ini bertambah 2.266 kasus. Kasus Corona sudah tersebar di 34 provinsi.\r\nBerdasarkan data yang diterima dari tim Humas BNPB, Kamis (20/8/2020), total kasus Corona di Indonesia hari ini menjadi 147.211 kasus. Jumlah itu berdasarkan data per hari ini dengan cut off time pukul 12.00 WIB.\r\n\r\nDari data yang didapat, ada tambahan 2.017 pasien sembuh hari ini, sehingga totalnya menjadi 100.647. Pasien meninggal karena Corona bertambah 72 dengan total menjadi 6.418.\r\n\r\n\r\nSelain itu, spesimen yang diperiksa hari ini sebanyak 28.824. Pemerintah juga memantau 79.484 suspek Corona hari ini.\r\n\r\nBerikut ini sebaran kasus positif Corona di 34 provinsi per 20 Agustus:\r\n\r\n1. Aceh: 5 (1.137) kasus positif\r\n2. Bali: 72 (4.292) kasus positif\r\n3. Banten: 23 (2.434) kasus positif\r\n4. Bangka Belitung: 1 (220) kasus positif\r\n5. Bengkulu: 0 (286) kasus positif\r\n6. DI Yogyakarta: 48 (1.138) kasus positif\r\n7. DKI Jakarta: 594 (31.610) kasus positif\r\n8. Jambi: 0 (250) kasus positif\r\n9. Jawa Barat: 199 (8.988) kasus positif\r\n10. Jawa Tengah: 168 (12.092) kasus positif\r\n\r\n11. Jawa Timur: 371 (29.257) kasus positif\r\n12. Kalimantan Barat: 15 (471) kasus positif\r\n13. Kalimantan Timur: 28 (2.697) Kasus positif\r\n14. Kalimantan Tengah: 33 (2.291) Kasus positif\r\n15. Kalimantan Selatan: 181 (7.544) kasus positif\r\n16. Kalimantan Utara: 5 (337) kasus positif\r\n17. Kepulauan Riau: 1 (680) kasus positif\r\n18. Nusa Tenggara Barat: 21 (2.526) kasus positif\r\n19. Sumatera Selatan: 24 (3.988) kasus positif\r\n20. Sumatera Barat: 44 (1.483) kasus positif\r\n\r\n21. Sulawesi Utara: 65 (3.401) kasus positif\r\n22. Sumatera Utara: 59 (5.957) kasus positif\r\n23. Sulawesi Tenggara: 60 (1.277) kasus positif\r\n24. Sulawesi Selatan: 59 (11.278) kasus positif\r\n25. Sulawesi Tengah: 0 (233) kasus positif\r\n26. Lampung: 6 (352) kasus positif\r\n27. Riau: 47 (1.097) kasus positif\r\n28. Maluku Utara: 5 (1.761) kasus positif\r\n29. Maluku: 58 (1.611) kasus positif\r\n30. Papua Barat: 6 (640) kasus positif\r\n\r\n31. Papua: 67 (3.520) kasus positif\r\n32. Sulawesi Barat: 1 (323) kasus positif\r\n33. Nusa Tenggara Timur: 0 (165) kasus positif\r\n34. Gorontalo: 0 (1.875) kasus positif\r\n\r\nTotal: 147.211 kasus positif\r\n\r\nTonton video \'Kata WHO soal Mutasi Virus COVID-19 yang Disebut Makin Ganas\':\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n(zak/dhn)\r\nvirus corona\r\ncovid-19\r\nsebaran kasus corona.'),
('5f3e5c808a407', 'Video Oknum Polisi di Bali Tilang dan Palak Turis Rp 1 Juta', '5f3e5c808a407.jpeg', 'Jakarta - Sebuah video yang menunjukkan polisi menilang warga negara asing di kawasan Jembrana, Bali, viral di media sosial. Dalam video, polisi dari unit Sabhara meminta uang Rp 1 juta sebelum mempersilakan turis yang ditilang kembali melanjutkan perjalanan.\r\nKapolres Jembrana AKBP I Ketut Gede Adiwibawa mengaku masih mendalami dan memeriksa polisi dalam video yang viral itu. Padahal aksi \'pemalakan\' oknum polisi itu terjadi pada 2019.'),
('5f3e5d173c08a', 'BI Jatim Beri Uang Baru Pecahan Rp 75.000 kepada Risma', '5f3e5d173c08a.jpeg', 'Liputan6.com, Jakarta - Pemerintah Kota (Pemkot) Surabaya akan menjadikan uang baru pecahan Rp 75.000 dari Bank Indonesia (BI) sebagai koleksi.\r\n\r\nTiba di rumah dinas, Difi beserta jajarannya langsung berbincang-bincang seputar pecahan uang di Indonesia dengan Risma, mulai dari uang kertas sampai dengan pecahan uang logam.\r\n\r\nBahkan, di tengah perbincangannya saat itu, wali kota perempuan pertama di Surabaya ini pun mulai memikirkan dimana uang tersebut akan diletakkan.  \r\n\r\nSelembar uang yang sudah tertempel rapi berbentuk menyerupai buku dan dimasukkan ke dalam kotak berwarna merah langsung diserahkan kepada Risma.\r\n\r\nTidak hanya itu, di sela pertemuannya, Wali Kota Risma menceritakan pengalamannya saat membongkar brankas yang ada di Balai Kota Surabaya beberapa tahun lalu. Ia pun memaparkan telah menemukan uang koin yang memiliki nilai sejarah. \r\n\r\n\"Nominalnya ada yang setengah rupiah dan ada yang satu rupiah. Sekarang sudah kami amankan,\" ujar dia.\r\n\r\nWali Kota Surabaya Tri Rismaharini (Risma) menyampaikan hal itu saat menerima uang baru pecahan Rp75 ribu dari Bank Indonesia (BI) yang diterbitkan dalam rangka memperingati Hari Ulang Tahun (HUT) ke 75 Kemerdekaan Republik Indonesia.\r\n\r\n\"Terima kasih bapak. Uang ini akan kami jadikan koleksi,\" ujar Risma saat menerima uang pecahan Rp75 ribu dari Kepala Perwakilan Bank Indonesia Wilayah IV Jawa Timur Difi Ahmad Johansyah di Rumah Dinas Wali Kota Surabaya, Rabu, (19/8/2020) seperti dikutip dari Antara.'),
('5f3e5ea8ad5da', 'Libur Panjang, Polisi Buka Tutup Jalur Wisata Lembang', '5f3e5ea8ad5da.jpeg', 'Bandung, CNN Indonesia -- Arus lalu lintas menuju kawasan wisata Lembang, Kabupaten Bandung Barat, Jawa Barat, dipadati kendaraan yang akan menghabiskan waktu libur panjang Tahun Baru Islam 1442 Hijriah. Untuk mengatasi kepadatan lalu lintas, pihak kepolisian menerapkan sistem buka tutup jalur di simpang Beatrix.\r\nBerdasarkan pantauan CNNIndonesia.com, Kamis (20/8), terlihat kendaraan pribadi mendominasi di Jalan Raya Lembang. Kendaraan pribadi tersebut rata-rata berplat Bandung, Jakarta, dan Cirebon.\r\n\r\nMenurut Kaur Bin Ops (KBO) Satlantas Polres Cimahi Inspektur Satu Duddy Iskandar, volume kendaraan saat libur Tahun Baru Islam di kawasan wisata Lembang mengalami peningkatan hingga 40 persen dibanding dengan arus lalu lintas hari sebelumnya.\r\n\r\n\"Untuk libur Tahun Baru Islam hari ini, mulai ada peningkatan volume kendaraan di Lembang sampai 40 persen. Kondisinya sama kondisinya dengan saat libur Agustusan kemarin,\" ujar Duddy saat ditemui di Lembang, Kamis (20/8).\r\n\r\nLihat juga: Lalu Lintas Arah Puncak Mulai Ramai Jelang Libur Panjang\r\nDuddy mengaku pihaknya menerapkan sistem buka tutup jalur untuk mengurai padatnya arus lalu lintas. Buka tutup jalur dilakukan mulai dari Simpang Beatrix hingga RSUD Lembang.\r\n\r\n\"Sejauh ini sudah dua kali buka tutup jalur untuk menarik kendaraan karena kita utamakan dulu yang mau masuk ke kawasan Lembang. Tadi itu ekor kendaraannya sudah sampai di perbatasan Bandung dan KBB (Cidadap),\" ujarnya.\r\n\r\nMenurut Duddy, sejak pagi hingga siang pukul 13.00 WIB, kendaraan dari luar Bandung raya lebih dominan masuk ke jalur wisata.\r\n\r\nLihat juga: Libur Panjang, KAI Tambah Rute ke Malang hingga Surabaya\r\nSementara puncak arus lalu lintas pada libur panjang kali ini diprediksi terjadi pada hari Sabtu (22/8) mendatang. Untuk itu, petugas kepolisian sudah disiagakan untuk mengatasi kepadatan kendaraan.\r\n\r\n\"Puncak kunjungan wisatawan diprediksi Sabtu nanti. Tapi kita belum bisa prediksi berapa persen peningkatan volume kendaraannya,\" ungkapnya.\r\n\r\nSeperti diketahui, kawasan Lembang memiliki sejumlah destinasi pariwisata. Seperti The Great Asia Africa, Farmhouse, Gunung Tangkuban Parahu, Floating Market, Dusun Bambu, dan The Lodge Maribaya.'),
('5f3e5fb2bbb34', 'Kasus Aktif Corona 46 Kabupaten/Kota di Bawah 10 Persen', '5f3e5fb2bbb34.jpeg', 'Jakarta, CNN Indonesia -- Juru Bicara Satgas Penanganan Covid-19, Wiku Adisasmito mengatakan tercatat 46 kabupaten/kota di Indonesia memiliki kasus aktif positif virus corona di bawah 10 persen. Sementara kasus aktif secara nasional 27,2 persen.\r\nKasus aktif adalah kasus positif Covid-19 yang sedang dirawat dibagi dengan kasus kumulatif di wilayah masing-masing. Kasus aktif nasional 27,2 persen.\r\n\r\nLihat juga: Daftar 29 Zona Merah Covid: Medan, Depok hingga Surabaya\r\n\"Ada 46 kab kota kasus aktif di bawah 10 persen. Apresiasi kepada Forkopimda bisa menjaga kasus aktif di bawah 10 persen,\" ujar Wiku dalam jumpa pers video teleconference, Kamis (20/8).\r\n\r\nDiketahui, kasus positif virus corona (Covid-19) di Indonesia secara kumulatif hingga Kamis (20/8) mencapai 147.211 orang. Dari jumlah itu, orang lainnya 100.674 sembuh dan 6.418 orang meninggal dunia.\r\n\r\nData tersebut dihimpun Kementerian Kesehatan dan disampaikan lewat https://www.kemkes.go.id/.\r\n\r\nDalam waktu 24 jam, pasien positif virus corona bertambah 2.266 orang. Sementara pasien sembuh bertambah 2.017 orang dan pasien meninggal bertambah 72 orang\r\n\r\nBerikut rincian kabupaten/kota dengan kasus aktif corona di bawah 10 persen:\r\n\r\n- Sumatera Selatan\r\nOKU Timur 3,70 persen\r\n\r\nYou may also like\r\n\r\nOKU 2,38\r\nMusi Rawas 7,14\r\nOKI 6,58\r\nOgan ilir 7,48\r\n\r\n- Sumatera Barat\r\nDharmasraya 5,88\r\nSijunjung 8,33\r\n\r\n- Riau\r\nIndragiri Hilir 2,17\r\n\r\n- Jambi\r\nBatangharu 6,24\r\n\r\n- Bangka Belitung\r\nBangka 6,15\r\n\r\n- Lampung\r\nLampung Tengah 8,57\r\n\r\n- Jawa Timur\r\nTulungangung 3,66\r\nMojokerto 7,24\r\nPamekasan 6,90\r\nBangkalan 9,09\r\nLamongan 7,84\r\nSampang 7,48\r\n\r\n-Jawa Tengah\r\nBatang 6,15,\r\nWonosobo 7,29\r\nSulawesi tengah :\r\nBuol 3,45,\r\nMorowali Utara 6,25, palu 7,84\r\n- Sulawesi Selatan\r\nBantaeng 2,70\r\nSultengara:\r\nBombana 1,41\r\nKolaka Utara 1,19\r\n\r\n- Gorontalo\r\nBoalemo 2,15\r\nBone Bolango 9,09\r\n\r\n- Kalimantan Selatan\r\nTabalong 4,17\r\n\r\n- Kalimantan Tengah\r\nGunung Mas 4,17\r\nMurung Raya 4,17\r\nLamandau 5,88\r\n\r\n- Kalimantan Timur\r\nKutai Timur 8,53\r\n\r\n- Kalimantan Utara\r\nNunukan 6,25\r\nMalinau 5,44\r\n\r\n- Kalimantan Barat\r\nKetapamg 6,90\r\nPontianak 6,00\r\n\r\n- NTB\r\nLombok Tengah 4,85\r\nDompu 3,64\r\n\r\n- Bali\r\nDenpasar 6,84\r\nBadung 9,80\r\n\r\n- Maluku Utara\r\nKepulauan Sula 8,16\r\n\r\n- Papua Barat\r\nTeluk Bintuni 2,13\r\nPahuwato 1,41\r\nSorong 8,49.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `password`, `email`, `name`, `role_id`, `image`, `is_active`, `date_created`) VALUES
(1, '$2y$10$BSbikq4mBIxQB6.do2xDIuSf36uDP34ASoGiD3ASz3vhrNjw83zB.', 'user@gmail.com', 'Eldir Buulolo', 2, 'eldir.jpg', 1, 0),
(2, '$2y$10$m1mY6C48JSzVG3In9Tey2eSOv4N4/jOgSYRx5CsHiUWDLo5OZiFx.', 'admin@gmail.com', 'Eldir Admin', 1, 'eldir.jpg', 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'User');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
