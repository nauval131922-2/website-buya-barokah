<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// halaman utama
Route::get('/', function () {
    // alquran
    $alquran = (object) [
        'judul' => "Al-Qu'ran",
        'kategori' => "Al-Qur'an Al-Quddus",

        'a1_nama' => "Al-Quddus A1",
        'a1_gambar' => 'assets/img/al-quran/2/min/A1.png',
        'a1_deskripsi' => "Al-Quddus A1 adalah Al-Qur'an Al-Quddus dengan ukuran kecil dan tidak berisi terjemahan. Dengan dimensi 11,5 x 15 cm dan berat hanya 0,4 kg, Al-Quddus A1 sangat praktis untuk dibawa dan dipegang. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, halaman-halaman ini dijamin nyaman untuk dibaca. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, dan poly silver, Al-Quddus A1 tahan lama dan terlindungi. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Carton 150 gsm dengan laminasi glossy. Produk ini cocok untuk mereka yang mencari Al-Qur'an berkualitas dengan desain yang elegan, sekaligus mudah dibawa dan dipegang. Dapatkan Al-Quddus A1 sekarang dengan harga Rp 40.000.",

        'a97_nama' => "Al-Quddus A97",
        'a97_gambar' => 'assets/img/al-quran/2/min/A97.png',
        'a97_deskripsi' => "Al-Quddus A97 adalah Al-Qur'an Al-Quddus dengan ukuran kecil yang dilengkapi dengan terjemahan dalam 2 jilid. Dengan dimensi 11,5 x 15 cm dan berat 0,6 kg, Al-Quddus A97 tetap mudah dibawa dan dipegang. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, pembaca akan menemukan kenyamanan dalam membaca setiap halamannya. Dibungkus dengan cover kalep yang dipoles dengan hot print dan sablon, produk ini memiliki daya tahan yang tinggi. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Carton 350 gsm dengan laminasi glossy. Al-Quddus A97 merupakan pilihan yang sempurna bagi mereka yang mencari Al-Qur'an dengan terjemahan yang jelas dan desain yang elegan. Dapatkan Al-Quddus A97 sekarang dengan harga Rp 46.000.",

        'b1-a_nama' => 'Al-Quddus B1-a',
        'b1-a_gambar' => 'assets/img/al-quran/2/min/B1a.png',
        'b1-a_deskripsi' => "Al-Quddus B1-a adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B1-a memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff dan UV spot, Al-Quddus B1-a memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B1-a menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B1-a dengan harga Rp 55.000.",

        'b1-b_nama' => 'Al-Quddus B1-b',
        'b1-b_gambar' => 'assets/img/al-quran/2/min/B1b.png',
        'b1-b_deskripsi' => "Al-Quddus B1-b adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B1-b memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff dan UV spot, Al-Quddus B1-b memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B1-b menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B1-b dengan harga Rp 55.000.",

        'b1-c_nama' => 'Al-Quddus B1-c',
        'b1-c_gambar' => 'assets/img/al-quran/2/min/B1c.png',
        'b1-c_deskripsi' => "Al-Quddus B1-c adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B1-c memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff dan UV spot, Al-Quddus B1-c memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B1-c menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B1-c dengan harga Rp 55.000.",

        'b1-d_nama' => 'Al-Quddus B1-d',
        'b1-d_gambar' => 'assets/img/al-quran/2/min/B1d.png',
        'b1-d_deskripsi' => "Al-Quddus B1-d adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B1-d memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff dan UV spot, Al-Quddus B1-d memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B1-d menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B1-d dengan harga Rp 55.000.",

        'b2_nama' => 'Al-Quddus B2',
        'b2_gambar' => 'assets/img/al-quran/2/min/B2.png',
        'b2_deskripsi' => "Al-Quddus B2 adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,8 kg, Al-Quddus B2 memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, hot print, dan emboss, Al-Quddus B2 memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta dua warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B2 menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B2 dengan harga Rp 60.000.",

        'b2-lux_nama' => 'Al-Quddus B2 Lux',
        'b2-lux_gambar' => 'assets/img/al-quran/2/min/B2 Lux.png',
        'b2-lux_deskripsi' => "Al-Quddus B2 Lux adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,8 kg, Al-Quddus B2 Lux memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan cover berresleting dan emboss, Al-Quddus B2 Lux memiliki tampilan yang mewah dan tahan lama. Isinya mencakup tulisan dengan tinta dua warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B2 Lux menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang elegan dan praktis. Segera miliki Al-Quddus B2 Lux dengan harga Rp 66.000.",

        'b3_nama' => 'Al-Quddus B3',
        'b3_gambar' => 'assets/img/al-quran/2/min/B3.png',
        'b3_deskripsi' => "Al-Quddus B3 adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,8 kg, Al-Quddus B3 memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, hot print, dan emboss, Al-Quddus B3 memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta empat warna pada kertas HVS 70 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B3 menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B3 dengan harga Rp 65.000.",

        'b5_nama' => 'Al-Quddus B5',
        'b5_gambar' => 'assets/img/al-quran/2/min/B5.png',
        'b5_deskripsi' => "Al-Quddus B5 adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B5 memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, hot print, dan emboss, Al-Quddus B5 memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta dua warna pada kertas QPP 55 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B5 menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B5 dengan harga Rp 65.000.",

        'b5-lux_nama' => 'Al-Quddus B5 Lux',
        'b5-lux_gambar' => 'assets/img/al-quran/2/min/B5 Lux.png',
        'b5-lux_deskripsi' => "Al-Quddus B5 Lux adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B5 Lux memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan cover berresleting dan emboss, Al-Quddus B5 Lux memiliki tampilan yang mewah dan tahan lama. Isinya mencakup tulisan dengan tinta dua warna pada kertas QPP 50 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B5 Lux menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang elegan dan praktis. Segera miliki Al-Quddus B5 Lux dengan harga Rp 75.000.",

        'b6-a_nama' => 'Al-Quddus B6-a',
        'b6-a_gambar' => 'assets/img/al-quran/2/min/B6a.png',
        'b6-a_deskripsi' => "Al-Quddus B6-a adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,8 kg, Al-Quddus B6-a memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, hot print, dan emboss, Al-Quddus B6-a memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta empat warna pada kertas QPP 50 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B6-a menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B6-a dengan harga Rp 70.000.",

        'b6-a-lux_nama' => 'Al-Quddus B6-a Lux',
        'b6-a-lux_gambar' => 'assets/img/al-quran/2/min/B6a Lux.png',
        'b6-a-lux_deskripsi' => "Al-Quddus B6-a Lux adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,8 kg, Al-Quddus B6-a Lux memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan cover berresleting dan emboss, Al-Quddus B6-a Lux memiliki tampilan yang mewah dan tahan lama. Isinya mencakup tulisan dengan tinta empat warna pada kertas QPP 50 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B6-a Lux menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang elegan dan praktis. Segera miliki Al-Quddus B6-a Lux dengan harga Rp 86.000.",

        'b6-b_nama' => 'Al-Quddus B6-b',
        'b6-b_gambar' => 'assets/img/al-quran/2/min/B6b.png',
        'b6-b_deskripsi' => "Al-Quddus B6-b adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,9 kg, Al-Quddus B6-b memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, hot print, dan emboss, Al-Quddus B6-b memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta empat warna pada kertas Art Paper 85 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B6-b menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B6-b dengan harga Rp 85.000.",

        'deskripsi_alquran' => "Al-Quran adalah kitab suci agama Islam yang dianggap sebagai firman Allah yang diwahyukan kepada Nabi Muhammad SAW melalui perantara Malaikat Jibril selama periode sekitar 23 tahun. Terdiri dari 114 surat yang memuat ayat-ayat yang menjadi pedoman hidup umat Islam. Al-Quran mengandung ajaran moral, hukum, panduan spiritual, dan petunjuk bagi umat Islam untuk menjalani kehidupan dengan mengikuti ajaran Allah SWT. Kitab ini dihafal dan dipelajari oleh jutaan umat Muslim di seluruh dunia sebagai sumber utama ajaran Islam.",
    ];

    // yanbua
    $yanbua = (object) [
        'judul' => "Yanbu'a",
        'kategori' => "Yanbu'a",

        'yanbua_jilid_pemula_nama' => "Yanbu'a Jilid Pemula",
        'yanbua_jilid_pemula_gambar' => 'assets/img/yanbua/min/yan-pml.jpg',
        'yanbua_jilid_pemula_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid Pemula.",

        'yanbua_jilid_1_nama' => "Yanbu'a Jilid 1",
        'yanbua_jilid_1_gambar' => 'assets/img/yanbua/min/yan-1.jpg',
        'yanbua_jilid_1_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 1.",

        'yanbua_jilid_2_nama' => "Yanbu'a Jilid 2",
        'yanbua_jilid_2_gambar' => 'assets/img/yanbua/min/yan-2.jpg',
        'yanbua_jilid_2_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 2.",

        'yanbua_jilid_3_nama' => "Yanbu'a Jilid 3",
        'yanbua_jilid_3_gambar' => 'assets/img/yanbua/min/yan-3.jpg',
        'yanbua_jilid_3_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 3.",

        'yanbua_jilid_4_nama' => "Yanbu'a Jilid 4",
        'yanbua_jilid_4_gambar' => 'assets/img/yanbua/min/yan-4.jpg',
        'yanbua_jilid_4_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 4.",

        'yanbua_jilid_5_nama' => "Yanbu'a Jilid 5",
        'yanbua_jilid_5_gambar' => 'assets/img/yanbua/min/yan-5.jpg',
        'yanbua_jilid_5_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 5.",

        'yanbua_jilid_6_nama' => "Yanbu'a Jilid 6",
        'yanbua_jilid_6_gambar' => 'assets/img/yanbua/min/yan-6.jpg',
        'yanbua_jilid_6_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 6.",

        'yanbua_jilid_7_nama' => "Yanbu'a Jilid 7",
        'yanbua_jilid_7_gambar' => 'assets/img/yanbua/min/yan-7.jpg',
        'yanbua_jilid_7_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 7.",

        'yanbua_jilid_makhorj_nama' => "Yanbu'a Jilid Makhorj",
        'yanbua_jilid_makhorj_gambar' => 'assets/img/yanbua/min/yan-mkh.jpg',
        'yanbua_jilid_makhorj_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid Makhorj.",

        'deskripsi_yanbua' => "Kitab Yanbu'a adalah kitab yang berisi metode baca tulis dan menghafal Al-Qur'an. Metode ini disusun oleh KH. Muhammad Ulin Nuha Arwani dari Pondok Tahfidh Yanbu'ul Qur'an Kudus.Yanbu'a berarti sumber, yang mengambil dari kata Yanbu'ul Qur'an yang artinya sumber Al-Qur'an. Metode ini mengajarkan santri untuk membaca Al-Qur'an dengan cepat, tepat, lancar, dan tidak putus-putus. Santri tidak boleh mengeja, melainkan membaca langsung disesuaikan dengan makhorijul huruf.Kitab Yanbu'a juga berisi panduan untuk mengajarkan anak menulis huruf Arab, angka Arab, dan Arab Pegon.",
    ];

    // buku
    $buku = (object) [
        'judul' => "Buku",
        'kategori' => "Buku",

        'buku_umum_1_nama' => "Buku Makesta",
        'buku_umum_1_gambar' => 'assets/img/buku/min/umum-1.png',
        'buku_umum_1_deskripsi' => "Merupakan salah satu buku umum untuk acara kegiatan IPNU/IPPNU.",

        'buku_umum_2_nama' => "Amaliyah An-Nahdliyah",
        'buku_umum_2_gambar' => 'assets/img/buku/min/umum-2.png',
        'buku_umum_2_deskripsi' => "Merupakan salah satu buku umum untuk acara kegiatan NU.",

        'buku_umum_3_nama' => "Buku Khot Kelas VI",
        'buku_umum_3_gambar' => 'assets/img/buku/min/umum-3.png',
        'buku_umum_3_deskripsi' => "Merupakan salah satu buku umum untuk pengajaran kelas VI.",

        'buku_umum_4_nama' => "Buku Multaqo Nasional",
        'buku_umum_4_gambar' => 'assets/img/buku/min/umum-4.png',
        'buku_umum_4_deskripsi' => "Merupakan salah satu buku umum untuk acara Multaqo Yanbu'a.",

        'buku_umum_5_nama' => "Amaliyah Ahlussunnah",
        'buku_umum_5_gambar' => 'assets/img/buku/min/umum-5.png',
        'buku_umum_5_deskripsi' => "Merupakan salah satu buku umum amalan-amalan NU.",

        'buku_umum_6_nama' => "Buku At-Tanwir",
        'buku_umum_6_gambar' => 'assets/img/buku/min/umum-6.png',
        'buku_umum_6_deskripsi' => "Merupakan salah satu buku umum untuk pengajaran pondok.",

        'deskripsi_buku' => "Buku adalah kumpulan kertas atau bahan lainnya yang dijilid menjadi satu pada salah satu ujungnya dan berisi tulisan atau gambar, atau keduanya, dan merupakan bentuk media publikasi atau hiburan. Buku dapat berisi tulisan dan gambar yang berfungsi untuk memberikan informasi, menghibur, atau menginspirasi pembacanya. Buku dapat berisi tulisan dan gambar yang berfungsi untuk memberikan informasi, menghibur, atau menginspirasi pembacanya.",
    ];

    // kalender
    $kalender = (object) [
        'judul' => "Kalender",
        'kategori' => "Kalender",

        'kalender_rejo_nama' => "Kalender Redjo Jaya",
        'kalender_rejo_gambar' => 'assets/img/kalender/min/rejo.jpg',
        'kalender_rejo_deskripsi' => "Kalender dinding dengan ukuran 32 x 48 cm.",

        'kalender_apik_nama' => "Kalender PP. APIK Semarang",
        'kalender_apik_gambar' => 'assets/img/kalender/min/apik.jpg',
        'kalender_apik_deskripsi' => "Kalender dinding dengan ukuran 48 x 64 cm.",

        'kalender_banyuwangi_nama' => "Kalender LMY Banyuwangi",
        'kalender_banyuwangi_gambar' => 'assets/img/kalender/min/banyuwangi.jpg',
        'kalender_banyuwangi_deskripsi' => "Kalender dinding dengan ukuran 48 x 64 cm.",

        'deskripsi_kalender' => "Kalender adalah sistem penanggalan yang digunakan untuk menghitung dan menampilkan hari dalam suatu periode. Nama kalender berasal dari bahasa Latin calendarium yang berarti buku catatan hutang, karena pada zaman dahulu, kalender digunakan untuk mencatat berbagai hutang yang harus dibayar pada tanggal-tanggal tertentu. Kalender juga dapat diartikan sebagai alat untuk menghitung hari, minggu, bulan, dan tahun. Kalender juga dapat diartikan sebagai alat untuk menghitung hari, minggu, bulan, dan tahun.",
    ];

    // nota
    $nota = (object) [
        'judul' => "Nota Custom",
        'kategori' => "Nota",

        'nota_custom_1_nama' => "Nota Custom 1",
        'nota_custom_1_gambar' => 'assets/img/nota/min/nota-custom-1.jpg',
        'nota_custom_1_deskripsi' => "Merupakan salah satu jenis nota custom.",

        'nota_custom_2_nama' => "Nota Custom 2",
        'nota_custom_2_gambar' => 'assets/img/nota/min/nota-custom-2.jpg',
        'nota_custom_2_deskripsi' => "Merupakan salah satu jenis nota custom.",

        'nota_custom_3_nama' => "Nota Custom 3",
        'nota_custom_3_gambar' => 'assets/img/nota/min/nota-custom-3.jpg',
        'nota_custom_3_deskripsi' => "Merupakan salah satu jenis nota custom.",

        'nota_custom_4_nama' => "Nota Custom 4",
        'nota_custom_4_gambar' => 'assets/img/nota/min/nota-custom-4.jpg',
        'nota_custom_4_deskripsi' => "Merupakan salah satu jenis nota custom.",

        'nota_custom_5_nama' => "Nota Custom 5",
        'nota_custom_5_gambar' => 'assets/img/nota/min/nota-custom-5.jpg',
        'nota_custom_5_deskripsi' => "Merupakan salah satu jenis nota custom.",

        'nota_custom_6_nama' => "Nota Custom 6",
        'nota_custom_6_gambar' => 'assets/img/nota/min/nota-custom-6.jpg',
        'nota_custom_6_deskripsi' => "Merupakan salah satu jenis nota custom.",

        'nota_custom_7_nama' => "Nota Custom 7",
        'nota_custom_7_gambar' => 'assets/img/nota/min/nota-custom-7.jpg',
        'nota_custom_7_deskripsi' => "Merupakan salah satu jenis nota custom.",

        'nota_custom_8_nama' => "Nota Custom 8",
        'nota_custom_8_gambar' => 'assets/img/nota/min/nota-custom-8.jpg',
        'nota_custom_8_deskripsi' => "Merupakan salah satu jenis nota custom.",

        'nota_custom_9_nama' => "Nota Custom 9",
        'nota_custom_9_gambar' => 'assets/img/nota/min/nota-custom-9.jpg',
        'nota_custom_9_deskripsi' => "Merupakan salah satu jenis nota custom.",

        'nota_custom_10_nama' => "Nota Custom 10",
        'nota_custom_10_gambar' => 'assets/img/nota/min/nota-custom-10.jpg',
        'nota_custom_10_deskripsi' => "Merupakan salah satu jenis nota custom.",

        'deskripsi_nota' => "Nota adalah kertas yang digunakan untuk mencatat sesuatu. Nota biasanya digunakan untuk mencatat transaksi jual beli, transaksi sewa menyewa, transaksi peminjaman, dan lain-lain. Nota biasanya digunakan untuk mencatat transaksi jual beli, transaksi sewa menyewa, transaksi peminjaman, dan lain-lain.",
    ];

    // yasin
    $yasin = (object) [
        'judul' => "Yasin Custom",
        'kategori' => "Yasin",

        'yasin_1_nama' => "Yasin 1",
        'yasin_1_gambar' => 'assets/img/yasin/min/yasin-1.jpg',
        'yasin_1_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        'yasin_2_nama' => "Yasin 2",
        'yasin_2_gambar' => 'assets/img/yasin/min/yasin-2.jpg',
        'yasin_2_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        'yasin_3_nama' => "Yasin 3",
        'yasin_3_gambar' => 'assets/img/yasin/min/yasin-3.jpg',
        'yasin_3_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        'yasin_4_nama' => "Yasin 4",
        'yasin_4_gambar' => 'assets/img/yasin/min/yasin-4.jpg',
        'yasin_4_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        'yasin_5_nama' => "Yasin 5",
        'yasin_5_gambar' => 'assets/img/yasin/min/yasin-5.jpg',
        'yasin_5_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        'yasin_6_nama' => "Yasin 6",
        'yasin_6_gambar' => 'assets/img/yasin/min/yasin-6.jpg',
        'yasin_6_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        'yasin_7_nama' => "Yasin 7",
        'yasin_7_gambar' => 'assets/img/yasin/min/yasin-7.jpg',
        'yasin_7_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        'yasin_8_nama' => "Yasin 8",
        'yasin_8_gambar' => 'assets/img/yasin/min/yasin-8.jpg',
        'yasin_8_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        'yasin_9_nama' => "Yasin 9",
        'yasin_9_gambar' => 'assets/img/yasin/min/yasin-9.jpg',
        'yasin_9_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        'yasin_10_nama' => "Yasin 10",
        'yasin_10_gambar' => 'assets/img/yasin/min/yasin-10.jpg',
        'yasin_10_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        'yasin_11_nama' => "Yasin 11",
        'yasin_11_gambar' => 'assets/img/yasin/min/yasin-11.jpg',
        'yasin_11_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        'yasin_12_nama' => "Yasin 12",
        'yasin_12_gambar' => 'assets/img/yasin/min/yasin-12.jpg',
        'yasin_12_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        'yasin_13_nama' => "Yasin 13",
        'yasin_13_gambar' => 'assets/img/yasin/min/yasin-13.jpg',
        'yasin_13_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        'yasin_14_nama' => "Yasin 14",
        'yasin_14_gambar' => 'assets/img/yasin/min/yasin-14.jpg',
        'yasin_14_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        'yasin_15_nama' => "Yasin 15",
        'yasin_15_gambar' => 'assets/img/yasin/min/yasin-15.jpg',
        'yasin_15_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        'deskripsi' => "Yasin adalah salah satu surat dalam Al-Qur'an yang terdiri dari 83 ayat. Yasin termasuk surat Makkiyah, diturunkan sesudah surat Al-Jin. Dinamakan Yasin karena dimulai dengan huruf Ya Sin. Yasin termasuk surat Makkiyah, diturunkan sesudah surat Al-Jin. Dinamakan Yasin karena dimulai dengan huruf Ya Sin.",
    ];

    // kitab pesantren
    $kitab_pesantren = (object) [
        'judul' => "Kitab Pesantren",
        'kategori' => "Kitab Pesantren",

        'kitab_pesantren_1_nama' => "Kitab Ahlussunnah",
        'kitab_pesantren_1_gambar' => 'assets/img/kitab-pesantren/min/ahlussunnah.jpg',
        'kitab_pesantren_1_deskripsi' => "Merupakan salah satu kitab Soft Cover dengan ukuran tanggung.",

        'kitab_pesantren_2_nama' => "Kitab Zadul Ajyal",
        'kitab_pesantren_2_gambar' => 'assets/img/kitab-pesantren/min/zadul.jpg',
        'kitab_pesantren_2_deskripsi' => "Merupakan salah satu kitab Soft Cover dengan ukuran tanggung.",

        'kitab_pesantren_3_nama' => "Kitab Alfiyah Ibnu Malik",
        'kitab_pesantren_3_gambar' => 'assets/img/kitab-pesantren/min/alfiyah.jpg',
        'kitab_pesantren_3_deskripsi' => "Merupakan salah satu kitab Matan Soft Cover dengan ukuran tanggung.",

        'kitab_pesantren_4_nama' => "Kitab Jurumiyyah",
        'kitab_pesantren_4_gambar' => 'assets/img/kitab-pesantren/min/jurumiyah.jpg',
        'kitab_pesantren_4_deskripsi' => "Merupakan salah satu kitab Matan Soft Cover dengan ukuran tanggung.",

        'kitab_pesantren_5_nama' => "Kitab Sulam Taufiq",
        'kitab_pesantren_5_gambar' => 'assets/img/kitab-pesantren/min/sulam.jpg',
        'kitab_pesantren_5_deskripsi' => "Merupakan salah satu kitab Matan Soft Cover dengan ukuran tanggung.",

        'kitab_pesantren_6_nama' => "Kitab Arbain Nawawiyah",
        'kitab_pesantren_6_gambar' => 'assets/img/kitab-pesantren/min/talim.jpg',
        'kitab_pesantren_6_deskripsi' => "Merupakan salah satu kitab Matan Soft Cover dengan ukuran tanggung.",

        'deskripsi' => "Kitab Pesantren umumnya merujuk pada kumpulan buku atau materi pembelajaran yang digunakan di pesantren, yang merupakan institusi pendidikan Islam tradisional di Indonesia. Pesantren adalah lembaga pendidikan yang memadukan pendidikan agama, kehidupan santri (murid), dan pengajaran tradisional.",
    ];

    // brosur
    $brosur = (object) [
        'judul' => "Brosur Custom",
        'kategori' => "Brosur",

        'brosur_1_nama' => "Brosur Custom 1",
        'brosur_1_gambar' => 'assets/img/brosur/min/brosur-custom-1.jpg',
        'brosur_1_deskripsi' => "Merupakan salah satu jenis brosur custom.",

        'brosur_2_nama' => "Brosur Custom 2",
        'brosur_2_gambar' => 'assets/img/brosur/min/brosur-custom-2.jpg',
        'brosur_2_deskripsi' => "Merupakan salah satu jenis brosur custom.",

        'brosur_3_nama' => "Brosur Custom 3",
        'brosur_3_gambar' => 'assets/img/brosur/min/brosur-custom-3.jpg',
        'brosur_3_deskripsi' => "Merupakan salah satu jenis brosur custom.",

        'brosur_4_nama' => "Brosur Custom 4",
        'brosur_4_gambar' => 'assets/img/brosur/min/brosur-custom-4.jpg',
        'brosur_4_deskripsi' => "Merupakan salah satu jenis brosur custom.",

        'deskripsi' => "Brosur adalah kertas yang digunakan untuk mencatat sesuatu. Nota biasanya digunakan untuk mencatat transaksi jual beli, transaksi sewa menyewa, transaksi peminjaman, dan lain-lain. Nota biasanya digunakan untuk mencatat transaksi jual beli, transaksi sewa menyewa, transaksi peminjaman, dan lain-lain.",
    ];

    // kop surat
    $kop_surat = (object) [
        'judul' => "Kop Surat",
        'kategori' => "Kop Surat",

        'kop_surat_1_nama' => "Kop Surat 1",
        'kop_surat_1_gambar' => 'assets/img/kop-surat/min/kop-surat-1.jpg',
        'kop_surat_1_deskripsi' => "Merupakan salah satu jenis kop surat.",

        'deskripsi' => "Kop surat adalah bagian dari surat resmi yang berisi informasi tentang identitas instansi atau perusahaan pengirim surat. Kop surat biasanya diletakkan di bagian atas kertas surat dan mencakup beberapa elemen penting.",
    ];

    return view('home', compact('alquran', 'yanbua', 'buku', 'kalender', 'nota', 'yasin', 'kitab_pesantren', 'brosur', 'kop_surat'));
})->name('home');


















// navbar alquran
Route::get('/alquran', function () {
    $data = (object) [
        'judul' => "Al-Qu'ran",
        'kategori' => "Al-Qur'an Al-Quddus",

        'a1_nama' => "Al-Quddus A1",
        'a1_gambar' => 'assets/img/al-quran/2/min/A1.png',
        'a1_deskripsi' => "Al-Quddus A1 adalah Al-Qur'an Al-Quddus dengan ukuran kecil dan tidak berisi terjemahan. Dengan dimensi 11,5 x 15 cm dan berat hanya 0,4 kg, Al-Quddus A1 sangat praktis untuk dibawa dan dipegang. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, halaman-halaman ini dijamin nyaman untuk dibaca. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, dan poly silver, Al-Quddus A1 tahan lama dan terlindungi. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Carton 150 gsm dengan laminasi glossy. Produk ini cocok untuk mereka yang mencari Al-Qur'an berkualitas dengan desain yang elegan, sekaligus mudah dibawa dan dipegang. Dapatkan Al-Quddus A1 sekarang dengan harga Rp 40.000.",

        'a97_nama' => "Al-Quddus A97",
        'a97_gambar' => 'assets/img/al-quran/2/min/A97.png',
        'a97_deskripsi' => "Al-Quddus A97 adalah Al-Qur'an Al-Quddus dengan ukuran kecil yang dilengkapi dengan terjemahan dalam 2 jilid. Dengan dimensi 11,5 x 15 cm dan berat 0,6 kg, Al-Quddus A97 tetap mudah dibawa dan dipegang. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, pembaca akan menemukan kenyamanan dalam membaca setiap halamannya. Dibungkus dengan cover kalep yang dipoles dengan hot print dan sablon, produk ini memiliki daya tahan yang tinggi. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Carton 350 gsm dengan laminasi glossy. Al-Quddus A97 merupakan pilihan yang sempurna bagi mereka yang mencari Al-Qur'an dengan terjemahan yang jelas dan desain yang elegan. Dapatkan Al-Quddus A97 sekarang dengan harga Rp 46.000.",

        'b1-a_nama' => 'Al-Quddus B1-a',
        'b1-a_gambar' => 'assets/img/al-quran/2/min/B1a.png',
        'b1-a_deskripsi' => "Al-Quddus B1-a adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B1-a memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff dan UV spot, Al-Quddus B1-a memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B1-a menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B1-a dengan harga Rp 55.000.",

        'b1-b_nama' => 'Al-Quddus B1-b',
        'b1-b_gambar' => 'assets/img/al-quran/2/min/B1b.png',
        'b1-b_deskripsi' => "Al-Quddus B1-b adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B1-b memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff dan UV spot, Al-Quddus B1-b memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B1-b menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B1-b dengan harga Rp 55.000.",

        'b1-c_nama' => 'Al-Quddus B1-c',
        'b1-c_gambar' => 'assets/img/al-quran/2/min/B1c.png',
        'b1-c_deskripsi' => "Al-Quddus B1-c adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B1-c memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff dan UV spot, Al-Quddus B1-c memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B1-c menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B1-c dengan harga Rp 55.000.",

        'b1-d_nama' => 'Al-Quddus B1-d',
        'b1-d_gambar' => 'assets/img/al-quran/2/min/B1d.png',
        'b1-d_deskripsi' => "Al-Quddus B1-d adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B1-d memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff dan UV spot, Al-Quddus B1-d memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B1-d menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B1-d dengan harga Rp 55.000.",

        'b2_nama' => 'Al-Quddus B2',
        'b2_gambar' => 'assets/img/al-quran/2/min/B2.png',
        'b2_deskripsi' => "Al-Quddus B2 adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,8 kg, Al-Quddus B2 memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, hot print, dan emboss, Al-Quddus B2 memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta dua warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B2 menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B2 dengan harga Rp 60.000.",

        'b2-lux_nama' => 'Al-Quddus B2 Lux',
        'b2-lux_gambar' => 'assets/img/al-quran/2/min/B2 Lux.png',
        'b2-lux_deskripsi' => "Al-Quddus B2 Lux adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,8 kg, Al-Quddus B2 Lux memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan cover berresleting dan emboss, Al-Quddus B2 Lux memiliki tampilan yang mewah dan tahan lama. Isinya mencakup tulisan dengan tinta dua warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B2 Lux menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang elegan dan praktis. Segera miliki Al-Quddus B2 Lux dengan harga Rp 66.000.",

        'b3_nama' => 'Al-Quddus B3',
        'b3_gambar' => 'assets/img/al-quran/2/min/B3.png',
        'b3_deskripsi' => "Al-Quddus B3 adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,8 kg, Al-Quddus B3 memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, hot print, dan emboss, Al-Quddus B3 memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta empat warna pada kertas HVS 70 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B3 menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B3 dengan harga Rp 65.000.",

        'b5_nama' => 'Al-Quddus B5',
        'b5_gambar' => 'assets/img/al-quran/2/min/B5.png',
        'b5_deskripsi' => "Al-Quddus B5 adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B5 memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, hot print, dan emboss, Al-Quddus B5 memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta dua warna pada kertas QPP 55 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B5 menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B5 dengan harga Rp 65.000.",

        'b5-lux_nama' => 'Al-Quddus B5 Lux',
        'b5-lux_gambar' => 'assets/img/al-quran/2/min/B5 Lux.png',
        'b5-lux_deskripsi' => "Al-Quddus B5 Lux adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B5 Lux memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan cover berresleting dan emboss, Al-Quddus B5 Lux memiliki tampilan yang mewah dan tahan lama. Isinya mencakup tulisan dengan tinta dua warna pada kertas QPP 50 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B5 Lux menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang elegan dan praktis. Segera miliki Al-Quddus B5 Lux dengan harga Rp 75.000.",

        'b6-a_nama' => 'Al-Quddus B6-a',
        'b6-a_gambar' => 'assets/img/al-quran/2/min/B6a.png',
        'b6-a_deskripsi' => "Al-Quddus B6-a adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,8 kg, Al-Quddus B6-a memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, hot print, dan emboss, Al-Quddus B6-a memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta empat warna pada kertas QPP 50 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B6-a menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B6-a dengan harga Rp 70.000.",

        'b6-a-lux_nama' => 'Al-Quddus B6-a Lux',
        'b6-a-lux_gambar' => 'assets/img/al-quran/2/min/B6a Lux.png',
        'b6-a-lux_deskripsi' => "Al-Quddus B6-a Lux adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,8 kg, Al-Quddus B6-a Lux memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan cover berresleting dan emboss, Al-Quddus B6-a Lux memiliki tampilan yang mewah dan tahan lama. Isinya mencakup tulisan dengan tinta empat warna pada kertas QPP 50 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B6-a Lux menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang elegan dan praktis. Segera miliki Al-Quddus B6-a Lux dengan harga Rp 86.000.",

        'b6-b_nama' => 'Al-Quddus B6-b',
        'b6-b_gambar' => 'assets/img/al-quran/2/min/B6b.png',
        'b6-b_deskripsi' => "Al-Quddus B6-b adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,9 kg, Al-Quddus B6-b memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, hot print, dan emboss, Al-Quddus B6-b memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta empat warna pada kertas Art Paper 85 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B6-b menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B6-b dengan harga Rp 85.000.",

        'deskripsi_alquran' => "Al-Quran adalah kitab suci agama Islam yang dianggap sebagai firman Allah yang diwahyukan kepada Nabi Muhammad SAW melalui perantara Malaikat Jibril selama periode sekitar 23 tahun. Terdiri dari 114 surat yang memuat ayat-ayat yang menjadi pedoman hidup umat Islam. Al-Quran mengandung ajaran moral, hukum, panduan spiritual, dan petunjuk bagi umat Islam untuk menjalani kehidupan dengan mengikuti ajaran Allah SWT. Kitab ini dihafal dan dipelajari oleh jutaan umat Muslim di seluruh dunia sebagai sumber utama ajaran Islam.",
    ];

    return view('products.alquran', compact('data'));
})->name('product.alquran'); // resources/views/products/alquran.blade.php

// navbar yanbua
Route::get('/yanbua', function () {
    $data = (object) [
        'judul' => "Yanbu'a",
        'kategori' => "Yanbu'a",

        'yanbua_jilid_pemula_nama' => "Yanbu'a Jilid Pemula",
        'yanbua_jilid_pemula_gambar' => 'assets/img/yanbua/min/yan-pml.jpg',
        'yanbua_jilid_pemula_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid Pemula.",

        'yanbua_jilid_1_nama' => "Yanbu'a Jilid 1",
        'yanbua_jilid_1_gambar' => 'assets/img/yanbua/min/yan-1.jpg',
        'yanbua_jilid_1_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 1.",

        'yanbua_jilid_2_nama' => "Yanbu'a Jilid 2",
        'yanbua_jilid_2_gambar' => 'assets/img/yanbua/min/yan-2.jpg',
        'yanbua_jilid_2_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 2.",

        'yanbua_jilid_3_nama' => "Yanbu'a Jilid 3",
        'yanbua_jilid_3_gambar' => 'assets/img/yanbua/min/yan-3.jpg',
        'yanbua_jilid_3_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 3.",

        'yanbua_jilid_4_nama' => "Yanbu'a Jilid 4",
        'yanbua_jilid_4_gambar' => 'assets/img/yanbua/min/yan-4.jpg',
        'yanbua_jilid_4_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 4.",

        'yanbua_jilid_5_nama' => "Yanbu'a Jilid 5",
        'yanbua_jilid_5_gambar' => 'assets/img/yanbua/min/yan-5.jpg',
        'yanbua_jilid_5_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 5.",

        'yanbua_jilid_6_nama' => "Yanbu'a Jilid 6",
        'yanbua_jilid_6_gambar' => 'assets/img/yanbua/min/yan-6.jpg',
        'yanbua_jilid_6_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 6.",

        'yanbua_jilid_7_nama' => "Yanbu'a Jilid 7",
        'yanbua_jilid_7_gambar' => 'assets/img/yanbua/min/yan-7.jpg',
        'yanbua_jilid_7_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 7.",

        'yanbua_jilid_makhorj_nama' => "Yanbu'a Jilid Makhorj",
        'yanbua_jilid_makhorj_gambar' => 'assets/img/yanbua/min/yan-mkh.jpg',
        'yanbua_jilid_makhorj_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid Makhorj.",

        'deskripsi_yanbua' => "Kitab Yanbu'a adalah kitab yang berisi metode baca tulis dan menghafal Al-Qur'an. Metode ini disusun oleh KH. Muhammad Ulin Nuha Arwani dari Pondok Tahfidh Yanbu'ul Qur'an Kudus.Yanbu'a berarti sumber, yang mengambil dari kata Yanbu'ul Qur'an yang artinya sumber Al-Qur'an. Metode ini mengajarkan santri untuk membaca Al-Qur'an dengan cepat, tepat, lancar, dan tidak putus-putus. Santri tidak boleh mengeja, melainkan membaca langsung disesuaikan dengan makhorijul huruf.Kitab Yanbu'a juga berisi panduan untuk mengajarkan anak menulis huruf Arab, angka Arab, dan Arab Pegon.",
    ];

    return view('products.yanbua', compact('data'));
})->name('product.yanbua'); // resources/views/products/yanbua.blade.php

// navbar buku
Route::get('/buku', function () {
    $data = (object) [
        'judul' => "Buku",
        'kategori' => "Buku",

        'buku_umum_1_nama' => "Buku Makesta",
        'buku_umum_1_gambar' => 'assets/img/buku/min/umum-1.png',
        'buku_umum_1_deskripsi' => "Merupakan salah satu buku umum untuk acara kegiatan IPNU/IPPNU.",

        'buku_umum_2_nama' => "Amaliyah An-Nahdliyah",
        'buku_umum_2_gambar' => 'assets/img/buku/min/umum-2.png',
        'buku_umum_2_deskripsi' => "Merupakan salah satu buku umum untuk acara kegiatan NU.",

        'buku_umum_3_nama' => "Buku Khot Kelas VI",
        'buku_umum_3_gambar' => 'assets/img/buku/min/umum-3.png',
        'buku_umum_3_deskripsi' => "Merupakan salah satu buku umum untuk pengajaran kelas VI.",

        'buku_umum_4_nama' => "Buku Multaqo Nasional",
        'buku_umum_4_gambar' => 'assets/img/buku/min/umum-4.png',
        'buku_umum_4_deskripsi' => "Merupakan salah satu buku umum untuk acara Multaqo Yanbu'a.",

        'buku_umum_5_nama' => "Amaliyah Ahlussunnah",
        'buku_umum_5_gambar' => 'assets/img/buku/min/umum-5.png',
        'buku_umum_5_deskripsi' => "Merupakan salah satu buku umum amalan-amalan NU.",

        'buku_umum_6_nama' => "Buku At-Tanwir",
        'buku_umum_6_gambar' => 'assets/img/buku/min/umum-6.png',
        'buku_umum_6_deskripsi' => "Merupakan salah satu buku umum untuk pengajaran pondok.",

        'deskripsi_buku' => "Buku adalah kumpulan kertas atau bahan lainnya yang dijilid menjadi satu pada salah satu ujungnya dan berisi tulisan atau gambar, atau keduanya, dan merupakan bentuk media publikasi atau hiburan. Buku dapat berisi tulisan dan gambar yang berfungsi untuk memberikan informasi, menghibur, atau menginspirasi pembacanya. Buku dapat berisi tulisan dan gambar yang berfungsi untuk memberikan informasi, menghibur, atau menginspirasi pembacanya.",
    ];

    return view('products.buku', compact('data'));
})->name('product.buku'); // resources/views/products/buku.blade.php

// navbar kalender
Route::get('/kalender', function () {
    $data = (object) [
        'judul' => "Kalender",
        'kategori' => "Kalender",

        'kalender_rejo_nama' => "Kalender Redjo Jaya",
        'kalender_rejo_gambar' => 'assets/img/kalender/min/rejo.jpg',
        'kalender_rejo_deskripsi' => "Kalender dinding dengan ukuran 32 x 48 cm.",

        'kalender_apik_nama' => "Kalender PP. APIK Semarang",
        'kalender_apik_gambar' => 'assets/img/kalender/min/apik.jpg',
        'kalender_apik_deskripsi' => "Kalender dinding dengan ukuran 48 x 64 cm.",

        'kalender_banyuwangi_nama' => "Kalender LMY Banyuwangi",
        'kalender_banyuwangi_gambar' => 'assets/img/kalender/min/banyuwangi.jpg',
        'kalender_banyuwangi_deskripsi' => "Kalender dinding dengan ukuran 48 x 64 cm.",

        'deskripsi_kalender' => "Kalender adalah sistem penanggalan yang digunakan untuk menghitung dan menampilkan hari dalam suatu periode. Nama kalender berasal dari bahasa Latin calendarium yang berarti buku catatan hutang, karena pada zaman dahulu, kalender digunakan untuk mencatat berbagai hutang yang harus dibayar pada tanggal-tanggal tertentu. Kalender juga dapat diartikan sebagai alat untuk menghitung hari, minggu, bulan, dan tahun. Kalender juga dapat diartikan sebagai alat untuk menghitung hari, minggu, bulan, dan tahun.",
    ];

    return view('products.kalender', compact('data'));
})->name('product.kalender'); // resources/views/products/kalender.blade.php

// navbar nota
Route::get('/nota', function () {
    $data = (object) [
        'judul' => "Nota Custom",
        'kategori' => "Nota",

        'nota_custom_1_nama' => "Nota Custom 1",
        'nota_custom_1_gambar' => 'assets/img/nota/min/nota-custom-1.jpg',
        'nota_custom_1_deskripsi' => "Merupakan salah satu jenis nota custom.",

        'nota_custom_2_nama' => "Nota Custom 2",
        'nota_custom_2_gambar' => 'assets/img/nota/min/nota-custom-2.jpg',
        'nota_custom_2_deskripsi' => "Merupakan salah satu jenis nota custom.",

        'nota_custom_3_nama' => "Nota Custom 3",
        'nota_custom_3_gambar' => 'assets/img/nota/min/nota-custom-3.jpg',
        'nota_custom_3_deskripsi' => "Merupakan salah satu jenis nota custom.",

        'nota_custom_4_nama' => "Nota Custom 4",
        'nota_custom_4_gambar' => 'assets/img/nota/min/nota-custom-4.jpg',
        'nota_custom_4_deskripsi' => "Merupakan salah satu jenis nota custom.",

        'nota_custom_5_nama' => "Nota Custom 5",
        'nota_custom_5_gambar' => 'assets/img/nota/min/nota-custom-5.jpg',
        'nota_custom_5_deskripsi' => "Merupakan salah satu jenis nota custom.",

        'nota_custom_6_nama' => "Nota Custom 6",
        'nota_custom_6_gambar' => 'assets/img/nota/min/nota-custom-6.jpg',
        'nota_custom_6_deskripsi' => "Merupakan salah satu jenis nota custom.",

        'nota_custom_7_nama' => "Nota Custom 7",
        'nota_custom_7_gambar' => 'assets/img/nota/min/nota-custom-7.jpg',
        'nota_custom_7_deskripsi' => "Merupakan salah satu jenis nota custom.",

        'nota_custom_8_nama' => "Nota Custom 8",
        'nota_custom_8_gambar' => 'assets/img/nota/min/nota-custom-8.jpg',
        'nota_custom_8_deskripsi' => "Merupakan salah satu jenis nota custom.",

        'nota_custom_9_nama' => "Nota Custom 9",
        'nota_custom_9_gambar' => 'assets/img/nota/min/nota-custom-9.jpg',
        'nota_custom_9_deskripsi' => "Merupakan salah satu jenis nota custom.",

        'nota_custom_10_nama' => "Nota Custom 10",
        'nota_custom_10_gambar' => 'assets/img/nota/min/nota-custom-10.jpg',
        'nota_custom_10_deskripsi' => "Merupakan salah satu jenis nota custom.",

        'deskripsi_nota' => "Nota adalah kertas yang digunakan untuk mencatat sesuatu. Nota biasanya digunakan untuk mencatat transaksi jual beli, transaksi sewa menyewa, transaksi peminjaman, dan lain-lain. Nota biasanya digunakan untuk mencatat transaksi jual beli, transaksi sewa menyewa, transaksi peminjaman, dan lain-lain.",
    ];

    return view('products.nota', compact('data'));
})->name('product.nota'); // resources/views/products/nota.blade.php

// navbar yasin
Route::get('/yasin', function () {
    $data = (object) [
        'judul' => "Yasin Custom",
        'kategori' => "Yasin",

        'yasin_1_nama' => "Yasin 1",
        'yasin_1_gambar' => 'assets/img/yasin/min/yasin-1.jpg',
        'yasin_1_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        'yasin_2_nama' => "Yasin 2",
        'yasin_2_gambar' => 'assets/img/yasin/min/yasin-2.jpg',
        'yasin_2_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        'yasin_3_nama' => "Yasin 3",
        'yasin_3_gambar' => 'assets/img/yasin/min/yasin-3.jpg',
        'yasin_3_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        'yasin_4_nama' => "Yasin 4",
        'yasin_4_gambar' => 'assets/img/yasin/min/yasin-4.jpg',
        'yasin_4_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        'yasin_5_nama' => "Yasin 5",
        'yasin_5_gambar' => 'assets/img/yasin/min/yasin-5.jpg',
        'yasin_5_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        'yasin_6_nama' => "Yasin 6",
        'yasin_6_gambar' => 'assets/img/yasin/min/yasin-6.jpg',
        'yasin_6_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        'yasin_7_nama' => "Yasin 7",
        'yasin_7_gambar' => 'assets/img/yasin/min/yasin-7.jpg',
        'yasin_7_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        'yasin_8_nama' => "Yasin 8",
        'yasin_8_gambar' => 'assets/img/yasin/min/yasin-8.jpg',
        'yasin_8_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        'yasin_9_nama' => "Yasin 9",
        'yasin_9_gambar' => 'assets/img/yasin/min/yasin-9.jpg',
        'yasin_9_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        'yasin_10_nama' => "Yasin 10",
        'yasin_10_gambar' => 'assets/img/yasin/min/yasin-10.jpg',
        'yasin_10_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        'yasin_11_nama' => "Yasin 11",
        'yasin_11_gambar' => 'assets/img/yasin/min/yasin-11.jpg',
        'yasin_11_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        'yasin_12_nama' => "Yasin 12",
        'yasin_12_gambar' => 'assets/img/yasin/min/yasin-12.jpg',
        'yasin_12_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        'yasin_13_nama' => "Yasin 13",
        'yasin_13_gambar' => 'assets/img/yasin/min/yasin-13.jpg',
        'yasin_13_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        'yasin_14_nama' => "Yasin 14",
        'yasin_14_gambar' => 'assets/img/yasin/min/yasin-14.jpg',
        'yasin_14_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        'yasin_15_nama' => "Yasin 15",
        'yasin_15_gambar' => 'assets/img/yasin/min/yasin-15.jpg',
        'yasin_15_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        'deskripsi' => "Yasin adalah salah satu surat dalam Al-Qur'an yang terdiri dari 83 ayat. Yasin termasuk surat Makkiyah, diturunkan sesudah surat Al-Jin. Dinamakan Yasin karena dimulai dengan huruf Ya Sin. Yasin termasuk surat Makkiyah, diturunkan sesudah surat Al-Jin. Dinamakan Yasin karena dimulai dengan huruf Ya Sin.",
    ];

    return view('products.yasin', compact('data'));
})->name('product.yasin'); // resources/views/products/yasin.blade.php

// navbar kitab pesantren
Route::get('/kitab-pesantren', function () {
    $data = (object) [
        'judul' => "Kitab Pesantren",
        'kategori' => "Kitab Pesantren",

        'kitab_pesantren_1_nama' => "Kitab Ahlussunnah",
        'kitab_pesantren_1_gambar' => 'assets/img/kitab-pesantren/min/ahlussunnah.jpg',
        'kitab_pesantren_1_deskripsi' => "Merupakan salah satu kitab Soft Cover dengan ukuran tanggung.",

        'kitab_pesantren_2_nama' => "Kitab Zadul Ajyal",
        'kitab_pesantren_2_gambar' => 'assets/img/kitab-pesantren/min/zadul.jpg',
        'kitab_pesantren_2_deskripsi' => "Merupakan salah satu kitab Soft Cover dengan ukuran tanggung.",

        'kitab_pesantren_3_nama' => "Kitab Alfiyah Ibnu Malik",
        'kitab_pesantren_3_gambar' => 'assets/img/kitab-pesantren/min/alfiyah.jpg',
        'kitab_pesantren_3_deskripsi' => "Merupakan salah satu kitab Matan Soft Cover dengan ukuran tanggung.",

        'kitab_pesantren_4_nama' => "Kitab Jurumiyyah",
        'kitab_pesantren_4_gambar' => 'assets/img/kitab-pesantren/min/jurumiyah.jpg',
        'kitab_pesantren_4_deskripsi' => "Merupakan salah satu kitab Matan Soft Cover dengan ukuran tanggung.",

        'kitab_pesantren_5_nama' => "Kitab Sulam Taufiq",
        'kitab_pesantren_5_gambar' => 'assets/img/kitab-pesantren/min/sulam.jpg',
        'kitab_pesantren_5_deskripsi' => "Merupakan salah satu kitab Matan Soft Cover dengan ukuran tanggung.",

        'kitab_pesantren_6_nama' => "Kitab Arbain Nawawiyah",
        'kitab_pesantren_6_gambar' => 'assets/img/kitab-pesantren/min/talim.jpg',
        'kitab_pesantren_6_deskripsi' => "Merupakan salah satu kitab Matan Soft Cover dengan ukuran tanggung.",

        'deskripsi' => "Kitab Pesantren umumnya merujuk pada kumpulan buku atau materi pembelajaran yang digunakan di pesantren, yang merupakan institusi pendidikan Islam tradisional di Indonesia. Pesantren adalah lembaga pendidikan yang memadukan pendidikan agama, kehidupan santri (murid), dan pengajaran tradisional.",
    ];

    return view('products.kitab-pesantren', compact('data'));
})->name('product.kitab-pesantren'); // resources/views/products/kitab-pesantren.blade.php

// navbar brosur
Route::get('/brosur', function () {
    $data = (object) [
        'judul' => "Brosur Custom",
        'kategori' => "Brosur",

        'brosur_1_nama' => "Brosur Custom 1",
        'brosur_1_gambar' => 'assets/img/brosur/min/brosur-custom-1.jpg',
        'brosur_1_deskripsi' => "Merupakan salah satu jenis brosur custom.",

        'brosur_2_nama' => "Brosur Custom 2",
        'brosur_2_gambar' => 'assets/img/brosur/min/brosur-custom-2.jpg',
        'brosur_2_deskripsi' => "Merupakan salah satu jenis brosur custom.",

        'brosur_3_nama' => "Brosur Custom 3",
        'brosur_3_gambar' => 'assets/img/brosur/min/brosur-custom-3.jpg',
        'brosur_3_deskripsi' => "Merupakan salah satu jenis brosur custom.",

        'brosur_4_nama' => "Brosur Custom 4",
        'brosur_4_gambar' => 'assets/img/brosur/min/brosur-custom-4.jpg',
        'brosur_4_deskripsi' => "Merupakan salah satu jenis brosur custom.",

        'deskripsi' => "Brosur adalah kertas yang digunakan untuk mencatat sesuatu. Nota biasanya digunakan untuk mencatat transaksi jual beli, transaksi sewa menyewa, transaksi peminjaman, dan lain-lain. Nota biasanya digunakan untuk mencatat transaksi jual beli, transaksi sewa menyewa, transaksi peminjaman, dan lain-lain.",
    ];

    return view('products.brosur', compact('data'));
})->name('product.brosur'); // resources/views/products/brosur.blade.php

// navbar kop surat
Route::get('/kop-surat', function () {
    $data = (object) [
        'judul' => "Kop Surat",
        'kategori' => "Kop Surat",

        'kop_surat_1_nama' => "Kop Surat 1",
        'kop_surat_1_gambar' => 'assets/img/kop-surat/min/kop-surat-1.jpg',
        'kop_surat_1_deskripsi' => "Merupakan salah satu jenis kop surat.",

        'deskripsi' => "Kop surat adalah bagian dari surat resmi yang berisi informasi tentang identitas instansi atau perusahaan pengirim surat. Kop surat biasanya diletakkan di bagian atas kertas surat dan mencakup beberapa elemen penting.",
    ];

    return view('products.kop-surat', compact('data'));
})->name('product.kop-surat'); // resources/views/products/kop-surat.blade.php

// navbar jasa cetak
Route::get('/jasa-cetak', function () {
    $data = (object) [
        'jasa_cetak_gambar' => 'assets/img/jasa cetak/min/buya-1.jpg',
    ];

    return view('jasa.jasa-cetak', compact('data'));
})->name('jasa.jasa-cetak'); // resources/views/jasa/jasa-cetak.blade.php

// navbar latar belakang
Route::get('/latar-belakang', function () {
    $data = (object) [
        'latar_belakang_gambar' => 'assets/img/latar belakang/min/buya-1.jpg',
    ];

    return view('tentang-kami.latar-belakang', compact('data'));
})->name('tentang-kami.latar-belakang'); // resources/views/tentang-kami/latar-belakang.blade.php

// navbar visi misi
Route::get('/visi-misi', function () {
    $data = (object) [
        'visi_misi_gambar' => 'assets/img/visi misi/min/buya-1.jpg',
    ];

    return view('tentang-kami.visi-misi', compact('data'));
})->name('tentang-kami.visi-misi'); // resources/views/tentang-kami/visi-misi.blade.php






























// per produk: alquran
Route::get('/alquran/{produk}', function ($produk) {
    $data = (object) [
        'judul' => "Al-Qu'ran",
        'kategori' => "Al-Qur'an Al-Quddus",
    ];

    if ($produk == 'a1') {
        $data->nama = "Al-Quddus A1";
        $data->kategori = "Al-Qur'an Al-Quddus";
        $data->gambar = 'assets/img/al-quran/2/min/A1.png';
        $data->deskripsi = "Al-Quddus A1 adalah Al-Qur'an Al-Quddus dengan ukuran kecil dan tidak berisi terjemahan. Dengan dimensi 11,5 x 15 cm dan berat hanya 0,4 kg, Al-Quddus A1 sangat praktis untuk dibawa dan dipegang. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, halaman-halaman ini dijamin nyaman untuk dibaca. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, dan poly silver, Al-Quddus A1 tahan lama dan terlindungi. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Carton 150 gsm dengan laminasi glossy. Produk ini cocok untuk mereka yang mencari Al-Qur'an berkualitas dengan desain yang elegan, sekaligus mudah dibawa dan dipegang. Dapatkan Al-Quddus A1 sekarang dengan harga Rp 40.000.";
        $data->judul = "Al-Quddus Kecil";
        $data->ukuran = "11,5 x 15 cm";
        $data->halaman = "612 Halaman";
        $data->cover = "Hard Cover | Laminasi Doff | UV Spot | Poly Silver";
        $data->isi = "HVS 60 gsm | 1 Warna";
        $data->skiblat = "Art Carton 150 gsm | Laminasi Glossy";
        $data->berat = "0,4 kg";
        $data->harga = "Rp 40.000";
    } elseif ($produk == 'a97') {
        $data->nama = "Al-Quddus A97";
        $data->kategori = "Al-Qur'an Al-Quddus";
        $data->gambar = 'assets/img/al-quran/2/min/A97.png';
        $data->deskripsi = "Al-Quddus A97 adalah Al-Qur'an Al-Quddus dengan ukuran kecil yang dilengkapi dengan terjemahan dalam 2 jilid. Dengan dimensi 11,5 x 15 cm dan berat 0,6 kg, Al-Quddus A97 tetap mudah dibawa dan dipegang. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, pembaca akan menemukan kenyamanan dalam membaca setiap halamannya. Dibungkus dengan cover kalep yang dipoles dengan hot print dan sablon, produk ini memiliki daya tahan yang tinggi. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Carton 350 gsm dengan laminasi glossy. Al-Quddus A97 merupakan pilihan yang sempurna bagi mereka yang mencari Al-Qur'an dengan terjemahan yang jelas dan desain yang elegan. Dapatkan Al-Quddus A97 sekarang dengan harga Rp 46.000.";
        $data->judul = "Al-Quddus Kecil Terjemah 2 Jilid";
        $data->ukuran = "11,5 x 15 cm";
        $data->halaman = "612 Halaman";
        $data->cover = "Kalep | Hot Print | Sablon";
        $data->isi = "HVS 60 gsm | 1 Warna";
        $data->skiblat = "Art Carton 350 gsm | Laminasi Glossy";
        $data->berat = "0,6 kg";
        $data->harga = "Rp 46.000";
    } elseif ($produk == 'b1-a') {
        $data->nama = 'Al-Quddus B1-a';
        $data->kategori = "Al-Qur'an Al-Quddus";
        $data->gambar = 'assets/img/al-quran/2/min/B1a.png';
        $data->deskripsi = "Al-Quddus B1-a adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B1-a memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff dan UV spot, Al-Quddus B1-a memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B1-a menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B1-a dengan harga Rp 55.000.";
        $data->judul = "Tanggung Hard Cover Hijau";
        $data->ukuran = "14,5 x 20,5 cm";
        $data->halaman = "612 Halaman";
        $data->cover = "Hard Cover | Laminasi Doff | UV Spot";
        $data->isi = "HVS 60 gsm | 1 Warna";
        $data->skiblat = "Art Paper 150 gsm | Laminasi Glossy";
        $data->berat = "0,7 kg";
        $data->harga = "Rp 55.000";
    } elseif ($produk == 'b1-b') {
        $data->nama = 'Al-Quddus B1-b';
        $data->kategori = "Al-Qur'an Al-Quddus";
        $data->gambar = 'assets/img/al-quran/2/min/B1b.png';
        $data->deskripsi = "Al-Quddus B1-b adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B1-b memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff dan UV spot, Al-Quddus B1-b memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B1-b menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B1-b dengan harga Rp 55.000.";
        $data->judul = "Tanggung Hard Cover Hijau Pink";
        $data->ukuran = "14,5 x 20,5 cm";
        $data->halaman = "612 Halaman";
        $data->cover = "Hard Cover | Laminasi Doff | UV Spot";
        $data->isi = "HVS 60 gsm | 1 Warna";
        $data->skiblat = "Art Paper 150 gsm | Laminasi Glossy";
        $data->berat = "0,7 kg";
        $data->harga = "Rp 55.000";
    } elseif ($produk == 'b1-c') {
        $data->nama = 'Al-Quddus B1-c';
        $data->kategori = "Al-Qur'an Al-Quddus";
        $data->gambar = 'assets/img/al-quran/2/min/B1c.png';
        $data->deskripsi = "Al-Quddus B1-c adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B1-c memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff dan UV spot, Al-Quddus B1-c memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B1-c menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B1-c dengan harga Rp 55.000.";
        $data->judul = "Tanggung Hard Cover Pink";
        $data->ukuran = "14,5 x 20,5 cm";
        $data->halaman = "612 Halaman";
        $data->cover = "Hard Cover | Laminasi Doff | UV Spot";
        $data->isi = "HVS 60 gsm | 1 Warna";
        $data->skiblat = "Art Paper 150 gsm | Laminasi Glossy";
        $data->berat = "0,7 kg";
        $data->harga = "Rp 55.000";
    } elseif ($produk == 'b1-d') {
        $data->nama = 'Al-Quddus B1-d';
        $data->kategori = "Al-Qur'an Al-Quddus";
        $data->gambar = 'assets/img/al-quran/2/min/B1d.png';
        $data->deskripsi = "Al-Quddus B1-d adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B1-d memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff dan UV spot, Al-Quddus B1-d memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B1-d menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B1-d dengan harga Rp 55.000.";
        $data->judul = "Tanggung Hard Cover Hitam";
        $data->ukuran = "14,5 x 20,5 cm";
        $data->halaman = "612 Halaman";
        $data->cover = "Hard Cover | Laminasi Doff | UV Spot";
        $data->isi = "HVS 60 gsm | 1 Warna";
        $data->skiblat = "Art Paper 150 gsm | Laminasi Glossy";
        $data->berat = "0,7 kg";
        $data->harga = "Rp 55.000";
    } elseif ($produk == 'b2') {
        $data->nama = 'Al-Quddus B2';
        $data->kategori = "Al-Qur'an Al-Quddus";
        $data->gambar = 'assets/img/al-quran/2/min/B2.png';
        $data->deskripsi = "Al-Quddus B2 adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,8 kg, Al-Quddus B2 memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, hot print, dan emboss, Al-Quddus B2 memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta dua warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B2 menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B2 dengan harga Rp 60.000.";
        $data->judul = "Tanggung Hard Cover";
        $data->ukuran = "14,5 x 20,5 cm";
        $data->halaman = "612 Halaman";
        $data->cover = "Hard Cover | Laminasi Doff | UV Spot | Hot Print | Emboss";
        $data->isi = "HVS 60 gsm | 2 Warna";
        $data->skiblat = "Art Paper 150 gsm | Laminasi Glossy";
        $data->berat = "0,8 kg";
        $data->harga = "Rp 60.000";
    } elseif ($produk == 'b2-lux') {
        $data->nama = 'Al-Quddus B2 Lux';
        $data->kategori = "Al-Qur'an Al-Quddus";
        $data->gambar = 'assets/img/al-quran/2/min/B2 Lux.png';
        $data->deskripsi = "Al-Quddus B2 Lux adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,8 kg, Al-Quddus B2 Lux memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan cover berresleting dan emboss, Al-Quddus B2 Lux memiliki tampilan yang mewah dan tahan lama. Isinya mencakup tulisan dengan tinta dua warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B2 Lux menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang elegan dan praktis. Segera miliki Al-Quddus B2 Lux dengan harga Rp 66.000.";
        $data->judul = "Tanggung HVS 2 Warna Lux";
        $data->ukuran = "14,5 x 20,5 cm";
        $data->halaman = "612 Halaman";
        $data->cover = "Resleting | Emboss";
        $data->isi = "HVS 60 gsm | 2 Warna";
        $data->skiblat = "Art Paper 150 gsm | Laminasi Glossy";
        $data->berat = "0,8 kg";
        $data->harga = "Rp 66.000";
    } elseif ($produk == 'b3') {
        $data->nama = 'Al-Quddus B3';
        $data->kategori = "Al-Qur'an Al-Quddus";
        $data->gambar = 'assets/img/al-quran/2/min/B3.png';
        $data->deskripsi = "Al-Quddus B3 adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,8 kg, Al-Quddus B3 memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, hot print, dan emboss, Al-Quddus B3 memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta empat warna pada kertas HVS 70 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B3 menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B3 dengan harga Rp 65.000.";
        $data->judul = "Tanggung Hard Cover";
        $data->ukuran = "14,5 x 20,5 cm";
        $data->halaman = "612 Halaman";
        $data->cover = "Hard Cover | Laminasi Doff | UV Spot | Hot Print | Emboss";
        $data->isi = "HVS 70 gsm | 4 Warna";
        $data->skiblat = "Art Paper 150 gsm | Laminasi Glossy";
        $data->berat = "0,8 kg";
        $data->harga = "Rp 65.000";
    } elseif ($produk == 'b5') {
        $data->nama = 'Al-Quddus B5';
        $data->kategori = "Al-Qur'an Al-Quddus";
        $data->gambar = 'assets/img/al-quran/2/min/B5.png';
        $data->deskripsi = "Al-Quddus B5 adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B5 memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, hot print, dan emboss, Al-Quddus B5 memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta dua warna pada kertas QPP 55 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B5 menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B5 dengan harga Rp 65.000.";
        $data->judul = "Tanggung Hard Cover";
        $data->ukuran = "14,5 x 20,5 cm";
        $data->halaman = "612 Halaman";
        $data->cover = "Hard Cover | Laminasi Doff | UV Spot | Hot Print | Emboss";
        $data->isi = "QPP 55 gsm | 2 Warna";
        $data->skiblat = "Art Paper 150 gsm | Laminasi Glossy";
        $data->berat = "0,7 kg";
        $data->harga = "Rp 65.000";
    } elseif ($produk == 'b5-lux') {
        $data->nama = 'Al-Quddus B5 Lux';
        $data->kategori = "Al-Qur'an Al-Quddus";
        $data->gambar = 'assets/img/al-quran/2/min/B5 Lux.png';
        $data->deskripsi = "Al-Quddus B5 Lux adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B5 Lux memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan cover berresleting dan emboss, Al-Quddus B5 Lux memiliki tampilan yang mewah dan tahan lama. Isinya mencakup tulisan dengan tinta dua warna pada kertas QPP 50 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B5 Lux menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang elegan dan praktis. Segera miliki Al-Quddus B5 Lux dengan harga Rp 75.000.";
        $data->judul = "Tanggung QPP 2 Warna Lux";
        $data->ukuran = "14,5 x 20,5 cm";
        $data->halaman = "612 Halaman";
        $data->cover = "Resleting | Emboss";
        $data->isi = "QPP 50 gsm | 2 Warna";
        $data->skiblat = "Art Paper 150 gsm | Laminasi Glossy";
        $data->berat = "0,7 kg";
        $data->harga = "Rp 75.000";
    } elseif ($produk == 'b6-a') {
        $data->nama = 'Al-Quddus B6-a';
        $data->kategori = "Al-Qur'an Al-Quddus";
        $data->gambar = 'assets/img/al-quran/2/min/B6a.png';
        $data->deskripsi = "Al-Quddus B6-a adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,8 kg, Al-Quddus B6-a memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, hot print, dan emboss, Al-Quddus B6-a memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta empat warna pada kertas QPP 50 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B6-a menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B6-a dengan harga Rp 70.000.";
        $data->judul = "Tanggung Hard Cover";
        $data->ukuran = "14,5 x 20,5 cm";
        $data->halaman = "612 Halaman";
        $data->cover = "Hard Cover | Laminasi Doff | UV Spot | Hot Print | Emboss";
        $data->isi = "QPP 50 gsm | 4 Warna";
        $data->skiblat = "Art Paper 150 gsm | Laminasi Glossy";
        $data->berat = "0,8 kg";
        $data->harga = "Rp 70.000";
    } elseif ($produk == 'b6-a-lux') {
        $data->nama = 'Al-Quddus B6-a Lux';
        $data->kategori = "Al-Qur'an Al-Quddus";
        $data->gambar = 'assets/img/al-quran/2/min/B6a Lux.png';
        $data->deskripsi = "Al-Quddus B6-a Lux adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,8 kg, Al-Quddus B6-a Lux memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan cover berresleting dan emboss, Al-Quddus B6-a Lux memiliki tampilan yang mewah dan tahan lama. Isinya mencakup tulisan dengan tinta empat warna pada kertas QPP 50 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B6-a Lux menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang elegan dan praktis. Segera miliki Al-Quddus B6-a Lux dengan harga Rp 86.000.";
        $data->judul = "Tanggung 4 Warna Lux";
        $data->ukuran = "14,5 x 20,5 cm";
        $data->halaman = "612 Halaman";
        $data->cover = "Resleting | Emboss";
        $data->isi = "QPP 50 gsm | 4 Warna";
        $data->skiblat = "Art Paper 150 gsm | Laminasi Glossy";
        $data->berat = "0,8 kg";
        $data->harga = "Rp 86.000";
    } elseif ($produk == 'b6-b') {
        $data->nama = 'Al-Quddus B6-b';
        $data->kategori = "Al-Qur'an Al-Quddus";
        $data->gambar = 'assets/img/al-quran/2/min/B6b.png';
        $data->deskripsi = "Al-Quddus B6-b adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,9 kg, Al-Quddus B6-b memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, hot print, dan emboss, Al-Quddus B6-b memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta empat warna pada kertas Art Paper 85 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B6-b menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B6-b dengan harga Rp 85.000.";
        $data->judul = "Tanggung Hard Cover";
        $data->ukuran = "14,5 x 20,5 cm";
        $data->halaman = "612 Halaman";
        $data->cover = "Hard Cover | Laminasi Doff | UV Spot | Hot Print | Emboss";
        $data->isi = "Art Paper 85 gsm | 4 Warna";
        $data->skiblat = "Art Paper 150 gsm | Laminasi Glossy";
        $data->berat = "0,9 kg";
        $data->harga = "Rp 85.000";
    }

    return view('products.alquran-detail', compact('data'));
})->name('product.alquran-detail'); // resources/views/products/alquran-detail.blade.php

// per produk: yanbua
Route::get('/yanbua/{produk}', function ($produk) {
    $data = (object) [
        'judul' => "Yanbu'a",
        'kategori' => "Yanbu'a",
    ];

    if ($produk == 'jilid-pemula') {
        $data->nama = "Yanbu'a Jilid Pemula";
        $data->kategori = "Yanbu'a";
        $data->gambar = 'assets/img/yanbua/min/yan-pml.jpg';
        $data->deskripsi = "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid Pemula.";
    } elseif ($produk == 'jilid-1') {
        $data->nama = 'Yanbu\'a Jilid 1';
        $data->kategori = "Yanbu'a";
        $data->gambar = 'assets/img/yanbua/min/yan-1.jpg';
        $data->deskripsi = "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 1.";
    } elseif ($produk == 'jilid-2') {
        $data->nama = 'Yanbu\'a Jilid 2';
        $data->kategori = "Yanbu'a";
        $data->gambar = 'assets/img/yanbua/min/yan-2.jpg';
        $data->deskripsi = "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 2.";
    } elseif ($produk == 'jilid-3') {
        $data->nama = 'Yanbu\'a Jilid 3';
        $data->kategori = "Yanbu'a";
        $data->gambar = 'assets/img/yanbua/min/yan-3.jpg';
        $data->deskripsi = "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 3.";
    } elseif ($produk == 'jilid-4') {
        $data->nama = 'Yanbu\'a Jilid 4';
        $data->kategori = "Yanbu'a";
        $data->gambar = 'assets/img/yanbua/min/yan-4.jpg';
        $data->deskripsi = "Merupakan salah satu
        jilid dari yanbu'a yaitu Yanbu'a Jilid 4.";
    } elseif ($produk == 'jilid-5') {
        $data->nama = 'Yanbu\'a Jilid 5';
        $data->kategori = "Yanbu'a";
        $data->gambar = 'assets/img/yanbua/min/yan-5.jpg';
        $data->deskripsi = "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 5.";
    } elseif ($produk == 'jilid-6') {
        $data->nama = 'Yanbu\'a Jilid 6';
        $data->kategori = "Yanbu'a";
        $data->gambar = 'assets/img/yanbua/min/yan-6.jpg';
        $data->deskripsi = "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 6.";
    } elseif ($produk == 'jilid-7') {
        $data->nama = 'Yanbu\'a Jilid 7';
        $data->kategori = "Yanbu'a";
        $data->gambar = 'assets/img/yanbua/min/yan-7.jpg';
        $data->deskripsi = "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 7.";
    } elseif ($produk == 'jilid-makhorj') {
        $data->nama = 'Yanbu\'a Jilid Makhorj';
        $data->kategori = "Yanbu'a";
        $data->gambar = 'assets/img/yanbua/min/yan-mkh.jpg';
        $data->deskripsi = "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid Makhorj.";
    }

    return view('products.yanbua-detail', compact('data'));
})->name('product.yanbua-detail'); // resources/views/products/yanbua-detail.blade.php

// per produk: buku
Route::get('/buku/{produk}', function ($produk) {
    $data = (object) [
        'judul' => "Buku",
        'kategori' => "Buku",
    ];

    if ($produk == 'umum-1') {
        $data->nama = "Buku Makesta";
        $data->kategori = "Buku";
        $data->gambar = 'assets/img/buku/min/umum-1.png';
        $data->deskripsi = "Merupakan salah satu buku umum untuk acara kegiatan IPNU/IPPNU.";
    } elseif ($produk == 'umum-2') {
        $data->nama = 'Amaliyah An-Nahdliyah';
        $data->kategori = "Buku";
        $data->gambar = 'assets/img/buku/min/umum-2.png';
        $data->deskripsi = "Merupakan salah satu buku umum untuk acara kegiatan NU.";
    } elseif ($produk == 'umum-3') {
        $data->nama = 'Buku Khot Kelas VI';
        $data->kategori = "Buku";
        $data->gambar = 'assets/img/buku/min/umum-3.png';
        $data->deskripsi = "Merupakan salah satu buku umum untuk pengajaran kelas VI.";
    } elseif ($produk == 'umum-4') {
        $data->nama = 'Buku Multaqo Nasional';
        $data->kategori = "Buku";
        $data->gambar = 'assets/img/buku/min/umum-4.png';
        $data->deskripsi = "Merupakan salah satu buku umum untuk acara Multaqo Yanbu'a.";
    } elseif ($produk == 'umum-5') {
        $data->nama = 'Amaliyah Ahlussunnah';
        $data->kategori = "Buku";
        $data->gambar = 'assets/img/buku/min/umum-5.png';
        $data->deskripsi = "Merupakan salah satu buku umum amalan-amalan NU.";
    } elseif ($produk == 'umum-6') {
        $data->nama = 'Buku At-Tanwir';
        $data->kategori = "Buku";
        $data->gambar = 'assets/img/buku/min/umum-6.png';
        $data->deskripsi = "Merupakan salah satu buku umum untuk pengajaran pondok.";
    }

    return view('products.buku-detail', compact('data'));

})->name('product.buku-detail'); // resources/views/products/buku-detail.blade.php

// per produk: kalender
Route::get('/kalender/{produk}', function ($produk) {
    $data = (object) [
        'judul' => "Kalender",
        'kategori' => "Kalender",
    ];

    if ($produk == 'rejo') {
        $data->nama = "Kalender Redjo Jaya";
        $data->kategori = "Kalender";
        $data->gambar = 'assets/img/kalender/min/rejo.jpg';
        $data->deskripsi = "Kalender dinding dengan ukuran 32 x 48 cm.";
    } elseif ($produk == 'apik') {
        $data->nama = 'Kalender PP. APIK Semarang';
        $data->kategori = "Kalender";
        $data->gambar = 'assets/img/kalender/min/apik.jpg';
        $data->deskripsi = "Kalender dinding dengan ukuran 48 x 64 cm.";
    } elseif ($produk == 'banyuwangi') {
        $data->nama = 'Kalender LMY Banyuwangi';
        $data->kategori = "Kalender";
        $data->gambar = 'assets/img/kalender/min/banyuwangi.jpg';
        $data->deskripsi = "Kalender dinding dengan ukuran 48 x 64 cm.";
    }

    return view('products.kalender-detail', compact('data'));
})->name('product.kalender-detail'); // resources/views/products/kalender-detail.blade.php

// per produk: nota
Route::get('/nota/{produk}', function ($produk) {
    $data = (object) [
        'judul' => "Nota Custom",
        'kategori' => "Nota",
    ];

    if ($produk == 'custom-1') {
        $data->nama = "Nota Custom 1";
        $data->kategori = "Nota";
        $data->gambar = 'assets/img/nota/min/nota-custom-1.jpg';
        $data->deskripsi = "Merupakan salah satu jenis nota custom.";
    } elseif ($produk == 'custom-2') {
        $data->nama = 'Nota Custom 2';
        $data->kategori = "Nota";
        $data->gambar = 'assets/img/nota/min/nota-custom-2.jpg';
        $data->deskripsi = "Merupakan salah satu jenis nota custom.";
    } elseif ($produk == 'custom-3') {
        $data->nama = 'Nota Custom 3';
        $data->kategori = "Nota";
        $data->gambar = 'assets/img/nota/min/nota-custom-3.jpg';
        $data->deskripsi = "Merupakan salah satu jenis nota custom.";
    } elseif ($produk == 'custom-4') {
        $data->nama = 'Nota Custom 4';
        $data->kategori = "Nota";
        $data->gambar = 'assets/img/nota/min/nota-custom-4.jpg';
        $data->deskripsi = "Merupakan salah satu jenis nota custom.";
    } elseif ($produk == 'custom-5') {
        $data->nama = 'Nota Custom 5';
        $data->kategori = "Nota";
        $data->gambar = 'assets/img/nota/min/nota-custom-5.jpg';
        $data->deskripsi = "Merupakan salah satu jenis nota custom.";
    } elseif ($produk == 'custom-6') {
        $data->nama = 'Nota Custom 6';
        $data->kategori = "Nota";
        $data->gambar = 'assets/img/nota/min/nota-custom-6.jpg';
        $data->deskripsi = "Merupakan salah satu jenis nota custom.";
    } elseif ($produk == 'custom-7') {
        $data->nama = 'Nota Custom 7';
        $data->kategori = "Nota";
        $data->gambar = 'assets/img/nota/min/nota-custom-7.jpg';
        $data->deskripsi = "Merupakan salah satu jenis nota custom.";
    } elseif ($produk == 'custom-8') {
        $data->nama = 'Nota Custom 8';
        $data->kategori = "Nota";
        $data->gambar = 'assets/img/nota/min/nota-custom-8.jpg';
        $data->deskripsi = "Merupakan salah satu jenis nota custom.";
    } elseif ($produk == 'custom-9') {
        $data->nama = 'Nota Custom 9';
        $data->kategori = "Nota";
        $data->gambar = 'assets/img/nota/min/nota-custom-9.jpg';
        $data->deskripsi = "Merupakan salah satu jenis nota custom.";
    } elseif ($produk == 'custom-10') {
        $data->nama = 'Nota Custom 10';
        $data->kategori = "Nota";
        $data->gambar = 'assets/img/nota/min/nota-custom-10.jpg';
        $data->deskripsi = "Merupakan salah satu jenis nota custom.";
    }

    return view('products.nota-detail', compact('data'));
})->name('product.nota-detail'); // resources/views/products/nota-detail.blade.php

// per produk: yasin
Route::get('/yasin/{produk}', function ($produk) {
    $data = (object) [
        'judul' => "Yasin Custom",
        'kategori' => "Yasin",
    ];

    if ($produk == 'yasin-1') {
        $data->nama = "Yasin 1";
        $data->kategori = "Yasin";
        $data->gambar = 'assets/img/yasin/min/yasin-1.jpg';
        $data->deskripsi = "Merupakan salah satu jenis yasin custom.";
    } elseif ($produk == 'yasin-2') {
        $data->nama = 'Yasin 2';
        $data->kategori = "Yasin";
        $data->gambar = 'assets/img/yasin/min/yasin-2.jpg';
        $data->deskripsi = "Merupakan salah satu jenis yasin custom.";
    } elseif ($produk == 'yasin-3') {
        $data->nama = 'Yasin 3';
        $data->kategori = "Yasin";
        $data->gambar = 'assets/img/yasin/min/yasin-3.jpg';
        $data->deskripsi = "Merupakan salah satu jenis yasin custom.";
    } elseif ($produk == 'yasin-4') {
        $data->nama = 'Yasin 4';
        $data->kategori = "Yasin";
        $data->gambar = 'assets/img/yasin/min/yasin-4.jpg';
        $data->deskripsi = "Merupakan salah satu jenis yasin custom.";
    } elseif ($produk == 'yasin-5') {
        $data->nama = 'Yasin 5';
        $data->kategori = "Yasin";
        $data->gambar = 'assets/img/yasin/min/yasin-5.jpg';
        $data->deskripsi = "Merupakan salah satu jenis yasin custom.";
    } elseif ($produk == 'yasin-6') {
        $data->nama = 'Yasin 6';
        $data->kategori = "Yasin";
        $data->gambar = 'assets/img/yasin/min/yasin-6.jpg';
        $data->deskripsi = "Merupakan salah satu jenis yasin custom.";
    } elseif ($produk == 'yasin-7') {
        $data->nama = 'Yasin 7';
        $data->kategori = "Yasin";
        $data->gambar = 'assets/img/yasin/min/yasin-7.jpg';
        $data->deskripsi = "Merupakan salah satu jenis yasin custom.";
    } elseif ($produk == 'yasin-8') {
        $data->nama = 'Yasin 8';
        $data->kategori = "Yasin";
        $data->gambar = 'assets/img/yasin/min/yasin-8.jpg';
        $data->deskripsi = "Merupakan salah satu jenis yasin custom.";
    } elseif ($produk == 'yasin-9') {
        $data->nama = 'Yasin 9';
        $data->kategori = "Yasin";
        $data->gambar = 'assets/img/yasin/min/yasin-9.jpg';
        $data->deskripsi = "Merupakan salah satu jenis yasin custom.";
    } elseif ($produk == 'yasin-10') {
        $data->nama = 'Yasin 10';
        $data->kategori = "Yasin";
        $data->gambar = 'assets/img/yasin/min/yasin-10.jpg';
        $data->deskripsi = "Merupakan salah satu jenis yasin custom.";
    } elseif ($produk == 'yasin-11') {
        $data->nama = 'Yasin 11';
        $data->kategori = "Yasin";
        $data->gambar = 'assets/img/yasin/min/yasin-11.jpg';
        $data->deskripsi = "Merupakan salah satu jenis yasin custom.";
    } elseif ($produk == 'yasin-12') {
        $data->nama = 'Yasin 12';
        $data->kategori = "Yasin";
        $data->gambar = 'assets/img/yasin/min/yasin-12.jpg';
        $data->deskripsi = "Merupakan salah satu jenis yasin custom.";
    } elseif ($produk == 'yasin-13') {
        $data->nama = 'Yasin 13';
        $data->kategori = "Yasin";
        $data->gambar = 'assets/img/yasin/min/yasin-13.jpg';
        $data->deskripsi = "Merupakan salah satu jenis yasin custom.";
    } elseif ($produk == 'yasin-14') {
        $data->nama = 'Yasin 14';
        $data->kategori = "Yasin";
        $data->gambar = 'assets/img/yasin/min/yasin-14.jpg';
        $data->deskripsi = "Merupakan salah satu jenis yasin custom.";
    } elseif ($produk == 'yasin-15') {
        $data->nama = 'Yasin 15';
        $data->kategori = "Yasin";
        $data->gambar = 'assets/img/yasin/min/yasin-15.jpg';
        $data->deskripsi = "Merupakan salah satu jenis yasin custom.";
    }

    return view('products.yasin-detail', compact('data'));
})->name('product.yasin-detail'); // resources/views/products/yasin-detail.blade.php

// per produk: kitab pesantren
Route::get('/kitab-pesantren/{produk}', function ($produk) {
    $data = (object) [
        'judul' => "Kitab Pesantren",
        'kategori' => "Kitab Pesantren",
    ];

    if ($produk == 'ahlussunnah') {
        $data->nama = "Kitab Ahlussunnah";
        $data->kategori = "Kitab Pesantren";
        $data->gambar = 'assets/img/kitab-pesantren/min/ahlussunnah.jpg';
        $data->deskripsi = "Merupakan salah satu kitab Soft Cover dengan ukuran tanggung.";
    } elseif ($produk == 'zadul') {
        $data->nama = 'Kitab Zadul Ajyal';
        $data->kategori = "Kitab Pesantren";
        $data->gambar = 'assets/img/kitab-pesantren/min/zadul.jpg';
        $data->deskripsi = "Merupakan salah satu kitab Soft Cover dengan ukuran tanggung.";
    } elseif ($produk == 'alfiyah') {
        $data->nama = 'Kitab Alfiyah Ibnu Malik';
        $data->kategori = "Kitab Pesantren";
        $data->gambar = 'assets/img/kitab-pesantren/min/alfiyah.jpg';
        $data->deskripsi = "Merupakan salah satu kitab Matan Soft Cover dengan ukuran tanggung.";
    } elseif ($produk == 'jurumiyah') {
        $data->nama = 'Kitab Jurumiyyah';
        $data->kategori = "Kitab Pesantren";
        $data->gambar = 'assets/img/kitab-pesantren/min/jurumiyah.jpg';
        $data->deskripsi = "Merupakan salah satu kitab Matan Soft Cover dengan ukuran tanggung.";
    } elseif ($produk == 'sulam') {
        $data->nama = 'Kitab Sulam Taufiq';
        $data->kategori = "Kitab Pesantren";
        $data->gambar = 'assets/img/kitab-pesantren/min/sulam.jpg';
        $data->deskripsi = "Merupakan salah satu kitab Matan Soft Cover dengan ukuran tanggung.";
    } elseif ($produk == 'talim') {
        $data->nama = 'Kitab Arbain Nawawiyah';
        $data->kategori = "Kitab Pesantren";
        $data->gambar = 'assets/img/kitab-pesantren/min/talim.jpg';
        $data->deskripsi = "Merupakan salah satu kitab Matan Soft Cover dengan ukuran tanggung.";
    }

    return view('products.kitab-pesantren-detail', compact('data'));
})->name('product.kitab-pesantren-detail'); // resources/views/products/kitab-pesantren-detail.blade.php

// per produk: brosur
Route::get('/brosur/{produk}', function ($produk) {
    $data = (object) [
        'judul' => "Brosur Custom",
        'kategori' => "Brosur",
    ];

    if ($produk == 'custom-1') {
        $data->nama = "Brosur Custom 1";
        $data->kategori = "Brosur";
        $data->gambar = 'assets/img/brosur/min/brosur-custom-1.jpg';
        $data->deskripsi = "Merupakan salah satu jenis brosur custom.";
    } elseif ($produk == 'custom-2') {
        $data->nama = 'Brosur Custom 2';
        $data->kategori = "Brosur";
        $data->gambar = 'assets/img/brosur/min/brosur-custom-2.jpg';
        $data->deskripsi = "Merupakan salah satu jenis brosur custom.";
    } elseif ($produk == 'custom-3') {
        $data->nama = 'Brosur Custom 3';
        $data->kategori = "Brosur";
        $data->gambar = 'assets/img/brosur/min/brosur-custom-3.jpg';
        $data->deskripsi = "Merupakan salah satu jenis brosur custom.";
    } elseif ($produk == 'custom-4') {
        $data->nama = 'Brosur Custom 4';
        $data->kategori = "Brosur";
        $data->gambar = 'assets/img/brosur/min/brosur-custom-4.jpg';
        $data->deskripsi = "Merupakan salah satu jenis brosur custom.";
    }

    return view('products.brosur-detail', compact('data'));
})->name('product.brosur-detail'); // resources/views/products/brosur-detail.blade.php

// per produk: kop surat
Route::get('/kop-surat/{produk}', function ($produk) {
    $data = (object) [
        'judul' => "Kop Surat",
        'kategori' => "Kop Surat",
    ];

    if ($produk == 'kop-surat-1') {
        $data->nama = "Kop Surat 1";
        $data->kategori = "Kop Surat";
        $data->gambar = 'assets/img/kop-surat/min/kop-surat-1.jpg';
        $data->deskripsi = "Merupakan salah satu jenis kop surat.";
    }

    return view('products.kop-surat-detail', compact('data'));
})->name('product.kop-surat-detail'); // resources/views/products/kop-surat-detail.blade.php
