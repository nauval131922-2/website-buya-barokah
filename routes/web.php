<?php

use App\Models\ViewCount;
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

        '1_nama' => "Al-Quddus A1",
        '1_gambar' => 'assets/images/al-quran/2/min/webp/A1.webp',
        '1_deskripsi' => "Al-Quddus A1 adalah Al-Qur'an Al-Quddus dengan ukuran kecil dan tidak berisi terjemahan. Dengan dimensi 11,5 x 15 cm dan berat hanya 0,4 kg, Al-Quddus A1 sangat praktis untuk dibawa dan dipegang. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, halaman-halaman ini dijamin nyaman untuk dibaca. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, dan poly silver, Al-Quddus A1 tahan lama dan terlindungi. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Carton 150 gsm dengan laminasi glossy. Produk ini cocok untuk mereka yang mencari Al-Qur'an berkualitas dengan desain yang elegan, sekaligus mudah dibawa dan dipegang. Dapatkan Al-Quddus A1 sekarang dengan harga Rp 40.000.",

        '2_nama' => "Al-Quddus A97",
        '2_gambar' => 'assets/images/al-quran/2/min/webp/A97.webp',
        '2_deskripsi' => "Al-Quddus A97 adalah Al-Qur'an Al-Quddus dengan ukuran kecil yang dilengkapi dengan terjemahan dalam 2 jilid. Dengan dimensi 11,5 x 15 cm dan berat 0,6 kg, Al-Quddus A97 tetap mudah dibawa dan dipegang. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, pembaca akan menemukan kenyamanan dalam membaca setiap halamannya. Dibungkus dengan cover kalep yang dipoles dengan hot print dan sablon, produk ini memiliki daya tahan yang tinggi. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Carton 350 gsm dengan laminasi glossy. Al-Quddus A97 merupakan pilihan yang sempurna bagi mereka yang mencari Al-Qur'an dengan terjemahan yang jelas dan desain yang elegan. Dapatkan Al-Quddus A97 sekarang dengan harga Rp 46.000.",

        '3_nama' => 'Al-Quddus B1-a',
        '3_gambar' => 'assets/images/al-quran/2/min/webp/B1a.webp',
        '3_deskripsi' => "Al-Quddus B1-a adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B1-a memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff dan UV spot, Al-Quddus B1-a memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B1-a menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B1-a dengan harga Rp 55.000.",

        '4_nama' => 'Al-Quddus B1-b',
        '4_gambar' => 'assets/images/al-quran/2/min/webp/B1b.webp',
        '4_deskripsi' => "Al-Quddus B1-b adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B1-b memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff dan UV spot, Al-Quddus B1-b memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B1-b menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B1-b dengan harga Rp 55.000.",

        '5_nama' => 'Al-Quddus B1-c',
        '5_gambar' => 'assets/images/al-quran/2/min/webp/B1c.webp',
        '5_deskripsi' => "Al-Quddus B1-c adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B1-c memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff dan UV spot, Al-Quddus B1-c memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B1-c menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B1-c dengan harga Rp 55.000.",

        '6_nama' => 'Al-Quddus B1-d',
        '6_gambar' => 'assets/images/al-quran/2/min/webp/B1d.webp',
        '6_deskripsi' => "Al-Quddus B1-d adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B1-d memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff dan UV spot, Al-Quddus B1-d memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B1-d menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B1-d dengan harga Rp 55.000.",

        '7_nama' => 'Al-Quddus B2',
        '7_gambar' => 'assets/images/al-quran/2/min/webp/B2.webp',
        '7_deskripsi' => "Al-Quddus B2 adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,8 kg, Al-Quddus B2 memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, hot print, dan emboss, Al-Quddus B2 memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta dua warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B2 menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B2 dengan harga Rp 60.000.",

        '8_nama' => 'Al-Quddus B2 Lux',
        '8_gambar' => 'assets/images/al-quran/2/min/webp/B2 Lux.webp',
        '8_deskripsi' => "Al-Quddus B2 Lux adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,8 kg, Al-Quddus B2 Lux memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan cover berresleting dan emboss, Al-Quddus B2 Lux memiliki tampilan yang mewah dan tahan lama. Isinya mencakup tulisan dengan tinta dua warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B2 Lux menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang elegan dan praktis. Segera miliki Al-Quddus B2 Lux dengan harga Rp 66.000.",

        '9_nama' => 'Al-Quddus B3',
        '9_gambar' => 'assets/images/al-quran/2/min/webp/B3.webp',
        '9_deskripsi' => "Al-Quddus B3 adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,8 kg, Al-Quddus B3 memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, hot print, dan emboss, Al-Quddus B3 memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta empat warna pada kertas HVS 70 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B3 menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B3 dengan harga Rp 65.000.",

        '10_nama' => 'Al-Quddus B5',
        '10_gambar' => 'assets/images/al-quran/2/min/webp/B5.webp',
        '10_deskripsi' => "Al-Quddus B5 adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B5 memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, hot print, dan emboss, Al-Quddus B5 memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta dua warna pada kertas QPP 55 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B5 menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B5 dengan harga Rp 65.000.",

        '11_nama' => 'Al-Quddus B5 Lux',
        '11_gambar' => 'assets/images/al-quran/2/min/webp/B5 Lux.webp',
        '11_deskripsi' => "Al-Quddus B5 Lux adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B5 Lux memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan cover berresleting dan emboss, Al-Quddus B5 Lux memiliki tampilan yang mewah dan tahan lama. Isinya mencakup tulisan dengan tinta dua warna pada kertas QPP 50 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B5 Lux menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang elegan dan praktis. Segera miliki Al-Quddus B5 Lux dengan harga Rp 75.000.",

        '12_nama' => 'Al-Quddus B6-a',
        '12_gambar' => 'assets/images/al-quran/2/min/webp/B6a.webp',
        '12_deskripsi' => "Al-Quddus B6-a adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,8 kg, Al-Quddus B6-a memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, hot print, dan emboss, Al-Quddus B6-a memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta empat warna pada kertas QPP 50 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B6-a menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B6-a dengan harga Rp 70.000.",

        '13_nama' => 'Al-Quddus B6-a Lux',
        '13_gambar' => 'assets/images/al-quran/2/min/webp/B6a Lux.webp',
        '13_deskripsi' => "Al-Quddus B6-a Lux adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,8 kg, Al-Quddus B6-a Lux memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan cover berresleting dan emboss, Al-Quddus B6-a Lux memiliki tampilan yang mewah dan tahan lama. Isinya mencakup tulisan dengan tinta empat warna pada kertas QPP 50 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B6-a Lux menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang elegan dan praktis. Segera miliki Al-Quddus B6-a Lux dengan harga Rp 86.000.",

        '14_nama' => 'Al-Quddus B6-b',
        '14_gambar' => 'assets/images/al-quran/2/min/webp/B6b.webp',
        '14_deskripsi' => "Al-Quddus B6-b adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,9 kg, Al-Quddus B6-b memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, hot print, dan emboss, Al-Quddus B6-b memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta empat warna pada kertas Art Paper 85 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B6-b menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B6-b dengan harga Rp 85.000.",

        '15_nama' => 'Al-Quddus B65',
        '15_gambar' => 'assets/images/al-quran/2/min/webp/B65.webp',
        '15_deskripsi' => "Al-Quddus B65 adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B65 memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, hot print, dan emboss, Al-Quddus B65 memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta dua warna pada kertas QPP 55 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B65 menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B5 dengan harga Rp 66.000.",

        '16_nama' => 'Al-Quddus B97',
        '16_gambar' => 'assets/images/al-quran/2/min/webp/B97.webp',
        '16_deskripsi' => "Al-Quddus B97 adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang dilengkapi dengan terjemahan dalam 2 jilid. Dengan dimensi 14,5 x 20,5 cm dan berat 0,8 kg, Al-Quddus B97 tetap mudah dibawa dan dipegang. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, pembaca akan menemukan kenyamanan dalam membaca setiap halamannya. Dibungkus dengan cover kalep yang dipoles dengan hot print dan sablon, produk ini memiliki daya tahan yang tinggi. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Carton 350 gsm dengan laminasi glossy. Al-Quddus B97 merupakan pilihan yang sempurna bagi mereka yang mencari Al-Qur'an dengan terjemahan yang jelas dan desain yang elegan. Dapatkan Al-Quddus B97 sekarang dengan harga Rp 56.000.",

        '17_nama' => 'Al-Quddus D1',
        '17_gambar' => 'assets/images/al-quran/2/min/webp/D1.webp',
        '17_deskripsi' => "Al-Quddus D1 adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran besar yang memudahkan pembaca untuk membaca dengan jelas. Dengan dimensi 20,5 x 29,5 cm dan berat 1,7 kg, Al-Quddus D1 memberikan pengalaman membaca yang nyaman. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, dan hot print, Al-Quddus D1 memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 70 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus D1 menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus D1 dengan harga Rp 77.000.",

        '18_nama' => 'Al-Quddus D65',
        '18_gambar' => 'assets/images/al-quran/2/min/webp/D65.webp',
        '18_deskripsi' => "Al-Quddus D65 adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran besar yang dilengkapi dengan terjemahan. Dengan dimensi 20,5 x 29,5 cm dan berat 1,4 kg, Al-Quddus D65 memberikan pengalaman membaca yang nyaman dan informatif. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan UV spot, laminaasi doff, hot print, dan emboss, Al-Quddus D65 memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta dua warna pada kertas Imperial 55 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus D65 menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan terjemahan yang jelas dan desain yang menawan. Segera miliki Al-Quddus D65 dengan harga Rp 110.000.",

        'deskripsi' => "Al-Quran adalah kitab suci agama Islam yang dianggap sebagai firman Allah yang diwahyukan kepada Nabi Muhammad SAW melalui perantara Malaikat Jibril selama periode sekitar 23 tahun. Terdiri dari 114 surat yang memuat ayat-ayat yang menjadi pedoman hidup umat Islam. Al-Quran mengandung ajaran moral, hukum, panduan spiritual, dan petunjuk bagi umat Islam untuk menjalani kehidupan dengan mengikuti ajaran Allah SWT. Kitab ini dihafal dan dipelajari oleh jutaan umat Muslim di seluruh dunia sebagai sumber utama ajaran Islam.",
    ];

    // yanbua
    $yanbua = (object) [
        'judul' => "Yanbu'a",
        'kategori' => "Yanbu'a",

        '1_nama' => "Yanbu'a Jilid Pemula",
        '1_gambar' => 'assets/images/yanbua/min/webp/yan-pml.webp',
        '1_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid Pemula.",

        '2_nama' => "Yanbu'a Jilid 1",
        '2_gambar' => 'assets/images/yanbua/min/webp/yan-1.webp',
        '2_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 1.",

        '3_nama' => "Yanbu'a Jilid 2",
        '3_gambar' => 'assets/images/yanbua/min/webp/yan-2.webp',
        '3_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 2.",

        '4_nama' => "Yanbu'a Jilid 3",
        '4_gambar' => 'assets/images/yanbua/min/webp/yan-3.webp',
        '4_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 3.",

        '5_nama' => "Yanbu'a Jilid 4",
        '5_gambar' => 'assets/images/yanbua/min/webp/yan-4.webp',
        '5_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 4.",

        '6_nama' => "Yanbu'a Jilid 5",
        '6_gambar' => 'assets/images/yanbua/min/webp/yan-5.webp',
        '6_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 5.",

        '7_nama' => "Yanbu'a Jilid 6",
        '7_gambar' => 'assets/images/yanbua/min/webp/yan-6.webp',
        '7_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 6.",

        '8_nama' => "Yanbu'a Jilid 7",
        '8_gambar' => 'assets/images/yanbua/min/webp/yan-7.webp',
        '8_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 7.",

        '9_nama' => "Yanbu'a Jilid Makhorj",
        '9_gambar' => 'assets/images/yanbua/min/webp/yan-mkh.webp',
        '9_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid Makhorj.",

        'deskripsi' => "Kitab Yanbu'a adalah kitab yang berisi metode baca tulis dan menghafal Al-Qur'an. Metode ini disusun oleh KH. Muhammad Ulin Nuha Arwani dari Pondok Tahfidh Yanbu'ul Qur'an Kudus.Yanbu'a berarti sumber, yang mengambil dari kata Yanbu'ul Qur'an yang artinya sumber Al-Qur'an. Metode ini mengajarkan santri untuk membaca Al-Qur'an dengan cepat, tepat, lancar, dan tidak putus-putus. Santri tidak boleh mengeja, melainkan membaca langsung disesuaikan dengan makhorijul huruf.Kitab Yanbu'a juga berisi panduan untuk mengajarkan anak menulis huruf Arab, angka Arab, dan Arab Pegon.",
    ];

    // buku
    $buku = (object) [
        'judul' => "Buku",
        'kategori' => "Buku",

        '1_nama' => "Buku Makesta",
        '1_gambar' => 'assets/images/buku/min/webp/umum-1.webp',
        '1_deskripsi' => "Merupakan salah satu buku umum untuk acara kegiatan IPNU/IPPNU.",

        '2_nama' => "Amaliyah An-Nahdliyah",
        '2_gambar' => 'assets/images/buku/min/webp/umum-2.webp',
        '2_deskripsi' => "Merupakan salah satu buku umum untuk acara kegiatan NU.",

        '3_nama' => "Buku Khot Kelas VI",
        '3_gambar' => 'assets/images/buku/min/webp/umum-3.webp',
        '3_deskripsi' => "Merupakan salah satu buku umum untuk pengajaran kelas VI.",

        '4_nama' => "Buku Multaqo Nasional",
        '4_gambar' => 'assets/images/buku/min/webp/umum-4.webp',
        '4_deskripsi' => "Merupakan salah satu buku umum untuk acara Multaqo Yanbu'a.",

        '5_nama' => "Amaliyah Ahlussunnah",
        '5_gambar' => 'assets/images/buku/min/webp/umum-5.webp',
        '5_deskripsi' => "Merupakan salah satu buku umum amalan-amalan NU.",

        '6_nama' => "Buku At-Tanwir",
        '6_gambar' => 'assets/images/buku/min/webp/umum-6.webp',
        '6_deskripsi' => "Merupakan salah satu buku umum untuk pengajaran pondok.",

        'deskripsi' => "Buku adalah kumpulan kertas atau bahan lainnya yang dijilid menjadi satu pada salah satu ujungnya dan berisi tulisan atau gambar, atau keduanya, dan merupakan bentuk media publikasi atau hiburan. Buku dapat berisi tulisan dan gambar yang berfungsi untuk memberikan informasi, menghibur, atau menginspirasi pembacanya. Buku dapat berisi tulisan dan gambar yang berfungsi untuk memberikan informasi, menghibur, atau menginspirasi pembacanya.",
    ];

    // kalender
    $kalender = (object) [
        'judul' => "Kalender",
        'kategori' => "Kalender",

        '1_nama' => "Kalender Redjo Jaya",
        '1_gambar' => 'assets/images/kalender/min/webp/rejo.webp',
        '1_deskripsi' => "Kalender dinding dengan ukuran 32 x 48 cm.",

        '2_nama' => "Kalender PP. APIK Semarang",
        '2_gambar' => 'assets/images/kalender/min/webp/apik.webp',
        '2_deskripsi' => "Kalender dinding dengan ukuran 48 x 64 cm.",

        '3_nama' => "Kalender LMY Banyuwangi",
        '3_gambar' => 'assets/images/kalender/min/webp/banyuwangi.webp',
        '3_deskripsi' => "Kalender dinding dengan ukuran 48 x 64 cm.",

        'deskripsi' => "Kalender adalah sistem penanggalan yang digunakan untuk menghitung dan menampilkan hari dalam suatu periode. Nama kalender berasal dari bahasa Latin calendarium yang berarti buku catatan hutang, karena pada zaman dahulu, kalender digunakan untuk mencatat berbagai hutang yang harus dibayar pada tanggal-tanggal tertentu. Kalender juga dapat diartikan sebagai alat untuk menghitung hari, minggu, bulan, dan tahun. Kalender juga dapat diartikan sebagai alat untuk menghitung hari, minggu, bulan, dan tahun.",
    ];

    // nota
    $nota = (object) [
        'judul' => "Nota Custom",
        'kategori' => "Nota",

        '1_nama' => "Nota Custom 1",
        '1_gambar' => 'assets/images/nota/min/webp/nota-custom-1.webp',
        '1_deskripsi' => "Merupakan salah satu jenis nota custom.",

        '2_nama' => "Nota Custom 2",
        '2_gambar' => 'assets/images/nota/min/webp/nota-custom-2.webp',
        '2_deskripsi' => "Merupakan salah satu jenis nota custom.",

        '3_nama' => "Nota Custom 3",
        '3_gambar' => 'assets/images/nota/min/webp/nota-custom-3.webp',
        '3_deskripsi' => "Merupakan salah satu jenis nota custom.",

        '4_nama' => "Nota Custom 4",
        '4_gambar' => 'assets/images/nota/min/webp/nota-custom-4.webp',
        '4_deskripsi' => "Merupakan salah satu jenis nota custom.",

        '5_nama' => "Nota Custom 5",
        '5_gambar' => 'assets/images/nota/min/webp/nota-custom-5.webp',
        '5_deskripsi' => "Merupakan salah satu jenis nota custom.",

        '6_nama' => "Nota Custom 6",
        '6_gambar' => 'assets/images/nota/min/webp/nota-custom-6.webp',
        '6_deskripsi' => "Merupakan salah satu jenis nota custom.",

        '7_nama' => "Nota Custom 7",
        '7_gambar' => 'assets/images/nota/min/webp/nota-custom-7.webp',
        '7_deskripsi' => "Merupakan salah satu jenis nota custom.",

        '8_nama' => "Nota Custom 8",
        '8_gambar' => 'assets/images/nota/min/webp/nota-custom-8.webp',
        '8_deskripsi' => "Merupakan salah satu jenis nota custom.",

        '9_nama' => "Nota Custom 9",
        '9_gambar' => 'assets/images/nota/min/webp/nota-custom-9.webp',
        '9_deskripsi' => "Merupakan salah satu jenis nota custom.",

        '10_nama' => "Nota Custom 10",
        '10_gambar' => 'assets/images/nota/min/webp/nota-custom-10.webp',
        '10_deskripsi' => "Merupakan salah satu jenis nota custom.",

        'deskripsi' => "Nota adalah kertas yang digunakan untuk mencatat sesuatu. Nota biasanya digunakan untuk mencatat transaksi jual beli, transaksi sewa menyewa, transaksi peminjaman, dan lain-lain. Nota biasanya digunakan untuk mencatat transaksi jual beli, transaksi sewa menyewa, transaksi peminjaman, dan lain-lain.",
    ];

    // yasin
    $yasin = (object) [
        'judul' => "Yasin Custom",
        'kategori' => "Yasin",

        '1_nama' => "Yasin 1",
        '1_gambar' => 'assets/images/yasin/min/webp/yasin-1.webp',
        '1_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        '2_nama' => "Yasin 2",
        '2_gambar' => 'assets/images/yasin/min/webp/yasin-2.webp',
        '2_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        '3_nama' => "Yasin 3",
        '3_gambar' => 'assets/images/yasin/min/webp/yasin-3.webp',
        '3_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        '4_nama' => "Yasin 4",
        '4_gambar' => 'assets/images/yasin/min/webp/yasin-4.webp',
        '4_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        '5_nama' => "Yasin 5",
        '5_gambar' => 'assets/images/yasin/min/webp/yasin-5.webp',
        '5_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        '6_nama' => "Yasin 6",
        '6_gambar' => 'assets/images/yasin/min/webp/yasin-6.webp',
        '6_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        '7_nama' => "Yasin 7",
        '7_gambar' => 'assets/images/yasin/min/webp/yasin-7.webp',
        '7_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        '8_nama' => "Yasin 8",
        '8_gambar' => 'assets/images/yasin/min/webp/yasin-8.webp',
        '8_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        '9_nama' => "Yasin 9",
        '9_gambar' => 'assets/images/yasin/min/webp/yasin-9.webp',
        '9_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        '10_nama' => "Yasin 10",
        '10_gambar' => 'assets/images/yasin/min/webp/yasin-10.webp',
        '10_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        '11_nama' => "Yasin 11",
        '11_gambar' => 'assets/images/yasin/min/webp/yasin-11.webp',
        '11_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        '12_nama' => "Yasin 12",
        '12_gambar' => 'assets/images/yasin/min/webp/yasin-12.webp',
        '12_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        '13_nama' => "Yasin 13",
        '13_gambar' => 'assets/images/yasin/min/webp/yasin-13.webp',
        '13_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        '14_nama' => "Yasin 14",
        '14_gambar' => 'assets/images/yasin/min/webp/yasin-14.webp',
        '14_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        '15_nama' => "Yasin 15",
        '15_gambar' => 'assets/images/yasin/min/webp/yasin-15.webp',
        '15_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        'deskripsi' => "Yasin adalah salah satu surat dalam Al-Qur'an yang terdiri dari 83 ayat. Yasin termasuk surat Makkiyah, diturunkan sesudah surat Al-Jin. Dinamakan Yasin karena dimulai dengan huruf Ya Sin. Yasin termasuk surat Makkiyah, diturunkan sesudah surat Al-Jin. Dinamakan Yasin karena dimulai dengan huruf Ya Sin.",
    ];

    // kitab pesantren
    $kitab_pesantren = (object) [
        'judul' => "Kitab Pesantren",
        'kategori' => "Kitab Pesantren",

        '1_nama' => "Kitab Ahlussunnah",
        '1_gambar' => 'assets/images/kitab-pesantren/min/webp/ahlussunnah.webp',
        '1_deskripsi' => "Merupakan salah satu kitab Soft Cover dengan ukuran tanggung.",

        '2_nama' => "Kitab Zadul Ajyal",
        '2_gambar' => 'assets/images/kitab-pesantren/min/webp/zadul.webp',
        '2_deskripsi' => "Merupakan salah satu kitab Soft Cover dengan ukuran tanggung.",

        '3_nama' => "Kitab Alfiyah Ibnu Malik",
        '3_gambar' => 'assets/images/kitab-pesantren/min/webp/alfiyah.webp',
        '3_deskripsi' => "Merupakan salah satu kitab Matan Soft Cover dengan ukuran tanggung.",

        '4_nama' => "Kitab Jurumiyyah",
        '4_gambar' => 'assets/images/kitab-pesantren/min/webp/jurumiyah.webp',
        '4_deskripsi' => "Merupakan salah satu kitab Matan Soft Cover dengan ukuran tanggung.",

        '5_nama' => "Kitab Sulam Taufiq",
        '5_gambar' => 'assets/images/kitab-pesantren/min/webp/sulam.webp',
        '5_deskripsi' => "Merupakan salah satu kitab Matan Soft Cover dengan ukuran tanggung.",

        '6_nama' => "Kitab Arbain Nawawiyah",
        '6_gambar' => 'assets/images/kitab-pesantren/min/webp/talim.webp',
        '6_deskripsi' => "Merupakan salah satu kitab Matan Soft Cover dengan ukuran tanggung.",

        'deskripsi' => "Kitab Pesantren umumnya merujuk pada kumpulan buku atau materi pembelajaran yang digunakan di pesantren, yang merupakan institusi pendidikan Islam tradisional di Indonesia. Pesantren adalah lembaga pendidikan yang memadukan pendidikan agama, kehidupan santri (murid), dan pengajaran tradisional.",
    ];

    // brosur
    $brosur = (object) [
        'judul' => "Brosur Custom",
        'kategori' => "Brosur",

        '1_nama' => "Brosur Custom 1",
        '1_gambar' => 'assets/images/brosur/min/webp/brosur-custom-1.webp',
        '1_deskripsi' => "Merupakan salah satu jenis brosur custom.",

        '2_nama' => "Brosur Custom 2",
        '2_gambar' => 'assets/images/brosur/min/webp/brosur-custom-2.webp',
        '2_deskripsi' => "Merupakan salah satu jenis brosur custom.",

        '3_nama' => "Brosur Custom 3",
        '3_gambar' => 'assets/images/brosur/min/webp/brosur-custom-3.webp',
        '3_deskripsi' => "Merupakan salah satu jenis brosur custom.",

        '4_nama' => "Brosur Custom 4",
        '4_gambar' => 'assets/images/brosur/min/webp/brosur-custom-4.webp',
        '4_deskripsi' => "Merupakan salah satu jenis brosur custom.",

        'deskripsi' => "Brosur adalah kertas yang digunakan untuk mencatat sesuatu. Nota biasanya digunakan untuk mencatat transaksi jual beli, transaksi sewa menyewa, transaksi peminjaman, dan lain-lain. Nota biasanya digunakan untuk mencatat transaksi jual beli, transaksi sewa menyewa, transaksi peminjaman, dan lain-lain.",
    ];

    // kop surat
    $kop_surat = (object) [
        'judul' => "Kop Surat",
        'kategori' => "Kop Surat",

        '1_nama' => "Kop Surat 1",
        '1_gambar' => 'assets/images/kop-surat/min/webp/kop-surat-1.webp',
        '1_deskripsi' => "Merupakan salah satu jenis kop surat.",

        'deskripsi' => "Kop surat adalah bagian dari surat resmi yang berisi informasi tentang identitas instansi atau perusahaan pengirim surat. Kop surat biasanya diletakkan di bagian atas kertas surat dan mencakup beberapa elemen penting.",
    ];

    return view('home', compact('alquran', 'yanbua', 'buku', 'kalender', 'nota', 'yasin', 'kitab_pesantren', 'brosur', 'kop_surat'));
})->name('home');






























// test menggunakan 1 file
// navbar alquran
Route::get('/alquran', function () {
    $data = (object) [
        'url' => 'alquran',
        'judul' => "Al-Qu'ran",
        'kategori' => "Al-Qur'an Al-Quddus",

        '1_nama' => "Al-Quddus A1",
        '1_gambar' => 'assets/images/al-quran/2/min/webp/A1.webp',
        '1_deskripsi' => "Al-Quddus A1 adalah Al-Qur'an Al-Quddus dengan ukuran kecil dan tidak berisi terjemahan. Dengan dimensi 11,5 x 15 cm dan berat hanya 0,4 kg, Al-Quddus A1 sangat praktis untuk dibawa dan dipegang. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, halaman-halaman ini dijamin nyaman untuk dibaca. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, dan poly silver, Al-Quddus A1 tahan lama dan terlindungi. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Carton 150 gsm dengan laminasi glossy. Produk ini cocok untuk mereka yang mencari Al-Qur'an berkualitas dengan desain yang elegan, sekaligus mudah dibawa dan dipegang. Dapatkan Al-Quddus A1 sekarang dengan harga Rp 40.000.",

        '2_nama' => "Al-Quddus A97",
        '2_gambar' => 'assets/images/al-quran/2/min/webp/A97.webp',
        '2_deskripsi' => "Al-Quddus A97 adalah Al-Qur'an Al-Quddus dengan ukuran kecil yang dilengkapi dengan terjemahan dalam 2 jilid. Dengan dimensi 11,5 x 15 cm dan berat 0,6 kg, Al-Quddus A97 tetap mudah dibawa dan dipegang. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, pembaca akan menemukan kenyamanan dalam membaca setiap halamannya. Dibungkus dengan cover kalep yang dipoles dengan hot print dan sablon, produk ini memiliki daya tahan yang tinggi. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Carton 350 gsm dengan laminasi glossy. Al-Quddus A97 merupakan pilihan yang sempurna bagi mereka yang mencari Al-Qur'an dengan terjemahan yang jelas dan desain yang elegan. Dapatkan Al-Quddus A97 sekarang dengan harga Rp 46.000.",

        '3_nama' => 'Al-Quddus B1-a',
        '3_gambar' => 'assets/images/al-quran/2/min/webp/B1a.webp',
        '3_deskripsi' => "Al-Quddus B1-a adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B1-a memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff dan UV spot, Al-Quddus B1-a memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B1-a menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B1-a dengan harga Rp 55.000.",

        '4_nama' => 'Al-Quddus B1-b',
        '4_gambar' => 'assets/images/al-quran/2/min/webp/B1b.webp',
        '4_deskripsi' => "Al-Quddus B1-b adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B1-b memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff dan UV spot, Al-Quddus B1-b memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B1-b menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B1-b dengan harga Rp 55.000.",

        '5_nama' => 'Al-Quddus B1-c',
        '5_gambar' => 'assets/images/al-quran/2/min/webp/B1c.webp',
        '5_deskripsi' => "Al-Quddus B1-c adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B1-c memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff dan UV spot, Al-Quddus B1-c memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B1-c menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B1-c dengan harga Rp 55.000.",

        '6_nama' => 'Al-Quddus B1-d',
        '6_gambar' => 'assets/images/al-quran/2/min/webp/B1d.webp',
        '6_deskripsi' => "Al-Quddus B1-d adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B1-d memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff dan UV spot, Al-Quddus B1-d memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B1-d menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B1-d dengan harga Rp 55.000.",

        '7_nama' => 'Al-Quddus B2',
        '7_gambar' => 'assets/images/al-quran/2/min/webp/B2.webp',
        '7_deskripsi' => "Al-Quddus B2 adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,8 kg, Al-Quddus B2 memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, hot print, dan emboss, Al-Quddus B2 memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta dua warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B2 menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B2 dengan harga Rp 60.000.",

        '8_nama' => 'Al-Quddus B2 Lux',
        '8_gambar' => 'assets/images/al-quran/2/min/webp/B2 Lux.webp',
        '8_deskripsi' => "Al-Quddus B2 Lux adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,8 kg, Al-Quddus B2 Lux memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan cover berresleting dan emboss, Al-Quddus B2 Lux memiliki tampilan yang mewah dan tahan lama. Isinya mencakup tulisan dengan tinta dua warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B2 Lux menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang elegan dan praktis. Segera miliki Al-Quddus B2 Lux dengan harga Rp 66.000.",

        '9_nama' => 'Al-Quddus B3',
        '9_gambar' => 'assets/images/al-quran/2/min/webp/B3.webp',
        '9_deskripsi' => "Al-Quddus B3 adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,8 kg, Al-Quddus B3 memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, hot print, dan emboss, Al-Quddus B3 memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta empat warna pada kertas HVS 70 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B3 menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B3 dengan harga Rp 65.000.",

        '10_nama' => 'Al-Quddus B5',
        '10_gambar' => 'assets/images/al-quran/2/min/webp/B5.webp',
        '10_deskripsi' => "Al-Quddus B5 adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B5 memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, hot print, dan emboss, Al-Quddus B5 memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta dua warna pada kertas QPP 55 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B5 menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B5 dengan harga Rp 65.000.",

        '11_nama' => 'Al-Quddus B5 Lux',
        '11_gambar' => 'assets/images/al-quran/2/min/webp/B5 Lux.webp',
        '11_deskripsi' => "Al-Quddus B5 Lux adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B5 Lux memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan cover berresleting dan emboss, Al-Quddus B5 Lux memiliki tampilan yang mewah dan tahan lama. Isinya mencakup tulisan dengan tinta dua warna pada kertas QPP 50 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B5 Lux menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang elegan dan praktis. Segera miliki Al-Quddus B5 Lux dengan harga Rp 75.000.",

        '12_nama' => 'Al-Quddus B6-a',
        '12_gambar' => 'assets/images/al-quran/2/min/webp/B6a.webp',
        '12_deskripsi' => "Al-Quddus B6-a adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,8 kg, Al-Quddus B6-a memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, hot print, dan emboss, Al-Quddus B6-a memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta empat warna pada kertas QPP 50 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B6-a menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B6-a dengan harga Rp 70.000.",

        '13_nama' => 'Al-Quddus B6-a Lux',
        '13_gambar' => 'assets/images/al-quran/2/min/webp/B6a Lux.webp',
        '13_deskripsi' => "Al-Quddus B6-a Lux adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,8 kg, Al-Quddus B6-a Lux memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan cover berresleting dan emboss, Al-Quddus B6-a Lux memiliki tampilan yang mewah dan tahan lama. Isinya mencakup tulisan dengan tinta empat warna pada kertas QPP 50 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B6-a Lux menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang elegan dan praktis. Segera miliki Al-Quddus B6-a Lux dengan harga Rp 86.000.",

        '14_nama' => 'Al-Quddus B6-b',
        '14_gambar' => 'assets/images/al-quran/2/min/webp/B6b.webp',
        '14_deskripsi' => "Al-Quddus B6-b adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,9 kg, Al-Quddus B6-b memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, hot print, dan emboss, Al-Quddus B6-b memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta empat warna pada kertas Art Paper 85 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B6-b menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B6-b dengan harga Rp 85.000.",

        '15_nama' => 'Al-Quddus B65',
        '15_gambar' => 'assets/images/al-quran/2/min/webp/B65.webp',
        '15_deskripsi' => "Al-Quddus B65 adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B65 memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, hot print, dan emboss, Al-Quddus B65 memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta dua warna pada kertas QPP 55 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B65 menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B5 dengan harga Rp 66.000.",

        '16_nama' => 'Al-Quddus B97',
        '16_gambar' => 'assets/images/al-quran/2/min/webp/B97.webp',
        '16_deskripsi' => "Al-Quddus B97 adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang dilengkapi dengan terjemahan dalam 2 jilid. Dengan dimensi 14,5 x 20,5 cm dan berat 0,8 kg, Al-Quddus B97 tetap mudah dibawa dan dipegang. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, pembaca akan menemukan kenyamanan dalam membaca setiap halamannya. Dibungkus dengan cover kalep yang dipoles dengan hot print dan sablon, produk ini memiliki daya tahan yang tinggi. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Carton 350 gsm dengan laminasi glossy. Al-Quddus B97 merupakan pilihan yang sempurna bagi mereka yang mencari Al-Qur'an dengan terjemahan yang jelas dan desain yang elegan. Dapatkan Al-Quddus B97 sekarang dengan harga Rp 56.000.",

        '17_nama' => 'Al-Quddus D1',
        '17_gambar' => 'assets/images/al-quran/2/min/webp/D1.webp',
        '17_deskripsi' => "Al-Quddus D1 adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran besar yang memudahkan pembaca untuk membaca dengan jelas. Dengan dimensi 20,5 x 29,5 cm dan berat 1,7 kg, Al-Quddus D1 memberikan pengalaman membaca yang nyaman. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, dan hot print, Al-Quddus D1 memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 70 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus D1 menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus D1 dengan harga Rp 77.000.",

        '18_nama' => 'Al-Quddus D65',
        '18_gambar' => 'assets/images/al-quran/2/min/webp/D65.webp',
        '18_deskripsi' => "Al-Quddus D65 adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran besar yang dilengkapi dengan terjemahan. Dengan dimensi 20,5 x 29,5 cm dan berat 1,4 kg, Al-Quddus D65 memberikan pengalaman membaca yang nyaman dan informatif. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan UV spot, laminaasi doff, hot print, dan emboss, Al-Quddus D65 memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta dua warna pada kertas Imperial 55 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus D65 menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan terjemahan yang jelas dan desain yang menawan. Segera miliki Al-Quddus D65 dengan harga Rp 110.000.",

        'deskripsi' => "Al-Quran adalah kitab suci agama Islam yang dianggap sebagai firman Allah yang diwahyukan kepada Nabi Muhammad SAW melalui perantara Malaikat Jibril selama periode sekitar 23 tahun. Terdiri dari 114 surat yang memuat ayat-ayat yang menjadi pedoman hidup umat Islam. Al-Quran mengandung ajaran moral, hukum, panduan spiritual, dan petunjuk bagi umat Islam untuk menjalani kehidupan dengan mengikuti ajaran Allah SWT. Kitab ini dihafal dan dipelajari oleh jutaan umat Muslim di seluruh dunia sebagai sumber utama ajaran Islam.",
    ];

    return view('produk', compact('data'));
})->name('product.alquran'); // resources/views/products/alquran.blade.php

// navbar yanbua
Route::get('/yanbua', function () {
    $data = (object) [
        'url' => 'yanbua',
        'judul' => "Yanbu'a",
        'kategori' => "Yanbu'a",

        '1_nama' => "Yanbu'a Jilid Pemula",
        '1_gambar' => 'assets/images/yanbua/min/webp/yan-pml.webp',
        '1_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid Pemula.",

        '2_nama' => "Yanbu'a Jilid 1",
        '2_gambar' => 'assets/images/yanbua/min/webp/yan-1.webp',
        '2_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 1.",

        '3_nama' => "Yanbu'a Jilid 2",
        '3_gambar' => 'assets/images/yanbua/min/webp/yan-2.webp',
        '3_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 2.",

        '4_nama' => "Yanbu'a Jilid 3",
        '4_gambar' => 'assets/images/yanbua/min/webp/yan-3.webp',
        '4_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 3.",

        '5_nama' => "Yanbu'a Jilid 4",
        '5_gambar' => 'assets/images/yanbua/min/webp/yan-4.webp',
        '5_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 4.",

        '6_nama' => "Yanbu'a Jilid 5",
        '6_gambar' => 'assets/images/yanbua/min/webp/yan-5.webp',
        '6_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 5.",

        '7_nama' => "Yanbu'a Jilid 6",
        '7_gambar' => 'assets/images/yanbua/min/webp/yan-6.webp',
        '7_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 6.",

        '8_nama' => "Yanbu'a Jilid 7",
        '8_gambar' => 'assets/images/yanbua/min/webp/yan-7.webp',
        '8_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 7.",

        '9_nama' => "Yanbu'a Jilid Makhorj",
        '9_gambar' => 'assets/images/yanbua/min/webp/yan-mkh.webp',
        '9_deskripsi' => "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid Makhorj.",

        'deskripsi' => "Kitab Yanbu'a adalah kitab yang berisi metode baca tulis dan menghafal Al-Qur'an. Metode ini disusun oleh KH. Muhammad Ulin Nuha Arwani dari Pondok Tahfidh Yanbu'ul Qur'an Kudus.Yanbu'a berarti sumber, yang mengambil dari kata Yanbu'ul Qur'an yang artinya sumber Al-Qur'an. Metode ini mengajarkan santri untuk membaca Al-Qur'an dengan cepat, tepat, lancar, dan tidak putus-putus. Santri tidak boleh mengeja, melainkan membaca langsung disesuaikan dengan makhorijul huruf.Kitab Yanbu'a juga berisi panduan untuk mengajarkan anak menulis huruf Arab, angka Arab, dan Arab Pegon.",
    ];

    return view('produk', compact('data'));
})->name('product.yanbua'); // resources/views/products/yanbua.blade.php

// navbar buku
Route::get('/buku', function () {
    $data = (object) [
        'url' => 'buku',
        'judul' => "Buku",
        'kategori' => "Buku",

        '1_nama' => "Buku Makesta",
        '1_gambar' => 'assets/images/buku/min/webp/umum-1.webp',
        '1_deskripsi' => "Merupakan salah satu buku umum untuk acara kegiatan IPNU/IPPNU.",

        '2_nama' => "Amaliyah An-Nahdliyah",
        '2_gambar' => 'assets/images/buku/min/webp/umum-2.webp',
        '2_deskripsi' => "Merupakan salah satu buku umum untuk acara kegiatan NU.",

        '3_nama' => "Buku Khot Kelas VI",
        '3_gambar' => 'assets/images/buku/min/webp/umum-3.webp',
        '3_deskripsi' => "Merupakan salah satu buku umum untuk pengajaran kelas VI.",

        '4_nama' => "Buku Multaqo Nasional",
        '4_gambar' => 'assets/images/buku/min/webp/umum-4.webp',
        '4_deskripsi' => "Merupakan salah satu buku umum untuk acara Multaqo Yanbu'a.",

        '5_nama' => "Amaliyah Ahlussunnah",
        '5_gambar' => 'assets/images/buku/min/webp/umum-5.webp',
        '5_deskripsi' => "Merupakan salah satu buku umum amalan-amalan NU.",

        '6_nama' => "Buku At-Tanwir",
        '6_gambar' => 'assets/images/buku/min/webp/umum-6.webp',
        '6_deskripsi' => "Merupakan salah satu buku umum untuk pengajaran pondok.",

        'deskripsi' => "Buku adalah kumpulan kertas atau bahan lainnya yang dijilid menjadi satu pada salah satu ujungnya dan berisi tulisan atau gambar, atau keduanya, dan merupakan bentuk media publikasi atau hiburan. Buku dapat berisi tulisan dan gambar yang berfungsi untuk memberikan informasi, menghibur, atau menginspirasi pembacanya. Buku dapat berisi tulisan dan gambar yang berfungsi untuk memberikan informasi, menghibur, atau menginspirasi pembacanya.",
    ];

    return view('produk', compact('data'));
})->name('product.buku'); // resources/views/products/buku.blade.php

// navbar kalender
Route::get('/kalender', function () {
    $data = (object) [
        'url' => 'kalender',
        'judul' => "Kalender",
        'kategori' => "Kalender",

        '1_nama' => "Kalender Redjo Jaya",
        '1_gambar' => 'assets/images/kalender/min/webp/rejo.webp',
        '1_deskripsi' => "Kalender dinding dengan ukuran 32 x 48 cm.",

        '2_nama' => "Kalender PP. APIK Semarang",
        '2_gambar' => 'assets/images/kalender/min/webp/apik.webp',
        '2_deskripsi' => "Kalender dinding dengan ukuran 48 x 64 cm.",

        '3_nama' => "Kalender LMY Banyuwangi",
        '3_gambar' => 'assets/images/kalender/min/webp/banyuwangi.webp',
        '3_deskripsi' => "Kalender dinding dengan ukuran 48 x 64 cm.",

        'deskripsi' => "Kalender adalah sistem penanggalan yang digunakan untuk menghitung dan menampilkan hari dalam suatu periode. Nama kalender berasal dari bahasa Latin calendarium yang berarti buku catatan hutang, karena pada zaman dahulu, kalender digunakan untuk mencatat berbagai hutang yang harus dibayar pada tanggal-tanggal tertentu. Kalender juga dapat diartikan sebagai alat untuk menghitung hari, minggu, bulan, dan tahun. Kalender juga dapat diartikan sebagai alat untuk menghitung hari, minggu, bulan, dan tahun.",
    ];

    return view('produk', compact('data'));
})->name('product.kalender'); // resources/views/products/kalender.blade.php

// navbar nota
Route::get('/nota', function () {
    $data = (object) [
        'url' => 'nota',
        'judul' => "Nota Custom",
        'kategori' => "Nota",

        '1_nama' => "Nota Custom 1",
        '1_gambar' => 'assets/images/nota/min/webp/nota-custom-1.webp',
        '1_deskripsi' => "Merupakan salah satu jenis nota custom.",

        '2_nama' => "Nota Custom 2",
        '2_gambar' => 'assets/images/nota/min/webp/nota-custom-2.webp',
        '2_deskripsi' => "Merupakan salah satu jenis nota custom.",

        '3_nama' => "Nota Custom 3",
        '3_gambar' => 'assets/images/nota/min/webp/nota-custom-3.webp',
        '3_deskripsi' => "Merupakan salah satu jenis nota custom.",

        '4_nama' => "Nota Custom 4",
        '4_gambar' => 'assets/images/nota/min/webp/nota-custom-4.webp',
        '4_deskripsi' => "Merupakan salah satu jenis nota custom.",

        '5_nama' => "Nota Custom 5",
        '5_gambar' => 'assets/images/nota/min/webp/nota-custom-5.webp',
        '5_deskripsi' => "Merupakan salah satu jenis nota custom.",

        '6_nama' => "Nota Custom 6",
        '6_gambar' => 'assets/images/nota/min/webp/nota-custom-6.webp',
        '6_deskripsi' => "Merupakan salah satu jenis nota custom.",

        '7_nama' => "Nota Custom 7",
        '7_gambar' => 'assets/images/nota/min/webp/nota-custom-7.webp',
        '7_deskripsi' => "Merupakan salah satu jenis nota custom.",

        '8_nama' => "Nota Custom 8",
        '8_gambar' => 'assets/images/nota/min/webp/nota-custom-8.webp',
        '8_deskripsi' => "Merupakan salah satu jenis nota custom.",

        '9_nama' => "Nota Custom 9",
        '9_gambar' => 'assets/images/nota/min/webp/nota-custom-9.webp',
        '9_deskripsi' => "Merupakan salah satu jenis nota custom.",

        '10_nama' => "Nota Custom 10",
        '10_gambar' => 'assets/images/nota/min/webp/nota-custom-10.webp',
        '10_deskripsi' => "Merupakan salah satu jenis nota custom.",

        'deskripsi' => "Nota adalah kertas yang digunakan untuk mencatat sesuatu. Nota biasanya digunakan untuk mencatat transaksi jual beli, transaksi sewa menyewa, transaksi peminjaman, dan lain-lain. Nota biasanya digunakan untuk mencatat transaksi jual beli, transaksi sewa menyewa, transaksi peminjaman, dan lain-lain.",
    ];

    return view('produk', compact('data'));
})->name('product.nota'); // resources/views/products/nota.blade.php

// navbar yasin
Route::get('/yasin', function () {
    $data = (object) [
        'url' => 'yasin',
        'judul' => "Yasin Custom",
        'kategori' => "Yasin",

        '1_nama' => "Yasin 1",
        '1_gambar' => 'assets/images/yasin/min/webp/yasin-1.webp',
        '1_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        '2_nama' => "Yasin 2",
        '2_gambar' => 'assets/images/yasin/min/webp/yasin-2.webp',
        '2_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        '3_nama' => "Yasin 3",
        '3_gambar' => 'assets/images/yasin/min/webp/yasin-3.webp',
        '3_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        '4_nama' => "Yasin 4",
        '4_gambar' => 'assets/images/yasin/min/webp/yasin-4.webp',
        '4_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        '5_nama' => "Yasin 5",
        '5_gambar' => 'assets/images/yasin/min/webp/yasin-5.webp',
        '5_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        '6_nama' => "Yasin 6",
        '6_gambar' => 'assets/images/yasin/min/webp/yasin-6.webp',
        '6_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        '7_nama' => "Yasin 7",
        '7_gambar' => 'assets/images/yasin/min/webp/yasin-7.webp',
        '7_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        '8_nama' => "Yasin 8",
        '8_gambar' => 'assets/images/yasin/min/webp/yasin-8.webp',
        '8_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        '9_nama' => "Yasin 9",
        '9_gambar' => 'assets/images/yasin/min/webp/yasin-9.webp',
        '9_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        '10_nama' => "Yasin 10",
        '10_gambar' => 'assets/images/yasin/min/webp/yasin-10.webp',
        '10_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        '11_nama' => "Yasin 11",
        '11_gambar' => 'assets/images/yasin/min/webp/yasin-11.webp',
        '11_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        '12_nama' => "Yasin 12",
        '12_gambar' => 'assets/images/yasin/min/webp/yasin-12.webp',
        '12_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        '13_nama' => "Yasin 13",
        '13_gambar' => 'assets/images/yasin/min/webp/yasin-13.webp',
        '13_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        '14_nama' => "Yasin 14",
        '14_gambar' => 'assets/images/yasin/min/webp/yasin-14.webp',
        '14_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        '15_nama' => "Yasin 15",
        '15_gambar' => 'assets/images/yasin/min/webp/yasin-15.webp',
        '15_deskripsi' => "Merupakan salah satu jenis yasin custom.",

        'deskripsi' => "Yasin adalah salah satu surat dalam Al-Qur'an yang terdiri dari 83 ayat. Yasin termasuk surat Makkiyah, diturunkan sesudah surat Al-Jin. Dinamakan Yasin karena dimulai dengan huruf Ya Sin. Yasin termasuk surat Makkiyah, diturunkan sesudah surat Al-Jin. Dinamakan Yasin karena dimulai dengan huruf Ya Sin.",
    ];

    return view('produk', compact('data'));
})->name('product.yasin'); // resources/views/products/yasin.blade.php

// navbar kitab pesantren
Route::get('/kitab-pesantren', function () {
    $data = (object) [
        'url' => 'kitab-pesantren',
        'judul' => "Kitab Pesantren",
        'kategori' => "Kitab Pesantren",

        '1_nama' => "Kitab Ahlussunnah",
        '1_gambar' => 'assets/images/kitab-pesantren/min/webp/ahlussunnah.webp',
        '1_deskripsi' => "Merupakan salah satu kitab Soft Cover dengan ukuran tanggung.",

        '2_nama' => "Kitab Zadul Ajyal",
        '2_gambar' => 'assets/images/kitab-pesantren/min/webp/zadul.webp',
        '2_deskripsi' => "Merupakan salah satu kitab Soft Cover dengan ukuran tanggung.",

        '3_nama' => "Kitab Alfiyah Ibnu Malik",
        '3_gambar' => 'assets/images/kitab-pesantren/min/webp/alfiyah.webp',
        '3_deskripsi' => "Merupakan salah satu kitab Matan Soft Cover dengan ukuran tanggung.",

        '4_nama' => "Kitab Jurumiyyah",
        '4_gambar' => 'assets/images/kitab-pesantren/min/webp/jurumiyah.webp',
        '4_deskripsi' => "Merupakan salah satu kitab Matan Soft Cover dengan ukuran tanggung.",

        '5_nama' => "Kitab Sulam Taufiq",
        '5_gambar' => 'assets/images/kitab-pesantren/min/webp/sulam.webp',
        '5_deskripsi' => "Merupakan salah satu kitab Matan Soft Cover dengan ukuran tanggung.",

        '6_nama' => "Kitab Arbain Nawawiyah",
        '6_gambar' => 'assets/images/kitab-pesantren/min/webp/talim.webp',
        '6_deskripsi' => "Merupakan salah satu kitab Matan Soft Cover dengan ukuran tanggung.",

        'deskripsi' => "Kitab Pesantren umumnya merujuk pada kumpulan buku atau materi pembelajaran yang digunakan di pesantren, yang merupakan institusi pendidikan Islam tradisional di Indonesia. Pesantren adalah lembaga pendidikan yang memadukan pendidikan agama, kehidupan santri (murid), dan pengajaran tradisional.",
    ];

    return view('produk', compact('data'));
})->name('product.kitab-pesantren'); // resources/views/products/kitab-pesantren.blade.php

// navbar brosur
Route::get('/brosur', function () {
    $data = (object) [
        'url' => 'brosur',
        'judul' => "Brosur Custom",
        'kategori' => "Brosur",

        '1_nama' => "Brosur Custom 1",
        '1_gambar' => 'assets/images/brosur/min/webp/brosur-custom-1.webp',
        '1_deskripsi' => "Merupakan salah satu jenis brosur custom.",

        '2_nama' => "Brosur Custom 2",
        '2_gambar' => 'assets/images/brosur/min/webp/brosur-custom-2.webp',
        '2_deskripsi' => "Merupakan salah satu jenis brosur custom.",

        '3_nama' => "Brosur Custom 3",
        '3_gambar' => 'assets/images/brosur/min/webp/brosur-custom-3.webp',
        '3_deskripsi' => "Merupakan salah satu jenis brosur custom.",

        '4_nama' => "Brosur Custom 4",
        '4_gambar' => 'assets/images/brosur/min/webp/brosur-custom-4.webp',
        '4_deskripsi' => "Merupakan salah satu jenis brosur custom.",

        'deskripsi' => "Brosur adalah kertas yang digunakan untuk mencatat sesuatu. Nota biasanya digunakan untuk mencatat transaksi jual beli, transaksi sewa menyewa, transaksi peminjaman, dan lain-lain. Nota biasanya digunakan untuk mencatat transaksi jual beli, transaksi sewa menyewa, transaksi peminjaman, dan lain-lain.",
    ];

    return view('produk', compact('data'));
})->name('product.brosur'); // resources/views/products/brosur.blade.php

// navbar kop surat
Route::get('/kop-surat', function () {
    $data = (object) [
        'url' => 'kop-surat',
        'judul' => "Kop Surat",
        'kategori' => "Kop Surat",

        '1_nama' => "Kop Surat 1",
        '1_gambar' => 'assets/images/kop-surat/min/webp/kop-surat-1.webp',
        '1_deskripsi' => "Merupakan salah satu jenis kop surat.",

        'deskripsi' => "Kop surat adalah bagian dari surat resmi yang berisi informasi tentang identitas instansi atau perusahaan pengirim surat. Kop surat biasanya diletakkan di bagian atas kertas surat dan mencakup beberapa elemen penting.",
    ];

    return view('produk', compact('data'));
})->name('product.kop-surat'); // resources/views/products/kop-surat.blade.php

// navbar jadwal imsakiyah
Route::get('/jadwal-imsakiyah', function () {
    $data = (object) [
        'url' => 'jadwal-imsakiyah',
        'judul' => "Download Jadwal Imsakiyah Ramadhan Tahun 1445 H/2024 M untuk Wilayah Kabupaten Kudus",
        'judul_2' => "Download Jadwal Imsakiyah Ramadhan Tahun 1445 H/2024 M untuk Wilayah sekitar Kabupaten Kudus",
        'judul_3' => "Download Jadwal Imsakiyah Ramadhan 1445 H/2024 M untuk Daerah lainnya",
        'kategori' => "Jadwal Imsakiyah",

        '1_nama' => "Jadwal Imsakiyah Model 1",
        '1_gambar' => 'assets/images/jadwal-imsakiyah/1445 H/kota kudus/min/webp/1.webp',
        '1_pdf' => 'assets/pdf/jadwal-imsakiyah/1445 H/kota kudus/1.pdf',
        '1_deskripsi' => "Merupakan salah satu jenis jadwal imsakiyah.",

        '2_nama' => "Jadwal Imsakiyah Model 2",
        '2_gambar' => 'assets/images/jadwal-imsakiyah/1445 H/kota kudus/min/webp/2.webp',
        '2_pdf' => 'assets/pdf/jadwal-imsakiyah/1445 H/kota kudus/2.pdf',
        '2_deskripsi' => "Merupakan salah satu jenis jadwal imsakiyah.",

        '3_nama' => "Jadwal Imsakiyah Model 3",
        '3_gambar' => 'assets/images/jadwal-imsakiyah/1445 H/kota kudus/min/webp/3.webp',
        '3_pdf' => 'assets/pdf/jadwal-imsakiyah/1445 H/kota kudus/3.pdf',
        '3_deskripsi' => "Merupakan salah satu jenis jadwal imsakiyah.",

        '4_nama' => "Jadwal Imsakiyah Model 4",
        '4_gambar' => 'assets/images/jadwal-imsakiyah/1445 H/kota kudus/min/webp/4.webp',
        '4_pdf' => 'assets/pdf/jadwal-imsakiyah/1445 H/kota kudus/4.pdf',
        '4_deskripsi' => "Merupakan salah satu jenis jadwal imsakiyah.",

        '1_daerah_nama' => "Demak",
        '1_daerah_link_model_1' => 'assets/pdf/jadwal-imsakiyah/1445 H/seluruh indonesia/model 1/Demak.pdf',
        '1_daerah_link_model_2' => 'assets/pdf/jadwal-imsakiyah/1445 H/seluruh indonesia/model 2/Demak.pdf',

        '2_daerah_nama' => "Grobogan",
        '2_daerah_link_model_1' => 'assets/pdf/jadwal-imsakiyah/1445 H/seluruh indonesia/model 1/Grobogan.pdf',
        '2_daerah_link_model_2' => 'assets/pdf/jadwal-imsakiyah/1445 H/seluruh indonesia/model 2/Grobogan.pdf',

        '3_daerah_nama' => "Jakarta",
        '3_daerah_link_model_1' => 'assets/pdf/jadwal-imsakiyah/1445 H/seluruh indonesia/model 1/Jakarta.pdf',
        '3_daerah_link_model_2' => 'assets/pdf/jadwal-imsakiyah/1445 H/seluruh indonesia/model 2/Jakarta.pdf',

        '4_daerah_nama' => "Jepara",
        '4_daerah_link_model_1' => 'assets/pdf/jadwal-imsakiyah/1445 H/seluruh indonesia/model 1/Jepara.pdf',
        '4_daerah_link_model_2' => 'assets/pdf/jadwal-imsakiyah/1445 H/seluruh indonesia/model 2/Jepara.pdf',

        '5_daerah_nama' => "Kendal",
        '5_daerah_link_model_1' => 'assets/pdf/jadwal-imsakiyah/1445 H/seluruh indonesia/model 1/Kendal.pdf',
        '5_daerah_link_model_2' => 'assets/pdf/jadwal-imsakiyah/1445 H/seluruh indonesia/model 2/Kendal.pdf',

        '6_daerah_nama' => "Pati",
        '6_daerah_link_model_1' => 'assets/pdf/jadwal-imsakiyah/1445 H/seluruh indonesia/model 1/Pati.pdf',
        '6_daerah_link_model_2' => 'assets/pdf/jadwal-imsakiyah/1445 H/seluruh indonesia/model 2/Pati.pdf',

        '7_daerah_nama' => "Rembang",
        '7_daerah_link_model_1' => 'assets/pdf/jadwal-imsakiyah/1445 H/seluruh indonesia/model 1/Rembang.pdf',
        '7_daerah_link_model_2' => 'assets/pdf/jadwal-imsakiyah/1445 H/seluruh indonesia/model 2/Rembang.pdf',

        '8_daerah_nama' => "Semarang",
        '8_daerah_link_model_1' => 'assets/pdf/jadwal-imsakiyah/1445 H/seluruh indonesia/model 1/Semarang.pdf',
        '8_daerah_link_model_2' => 'assets/pdf/jadwal-imsakiyah/1445 H/seluruh indonesia/model 2/Semarang.pdf',

        '9_daerah_nama' => "Surabaya",
        '9_daerah_link_model_1' => 'assets/pdf/jadwal-imsakiyah/1445 H/seluruh indonesia/model 1/Surabaya.pdf',
        '9_daerah_link_model_2' => 'assets/pdf/jadwal-imsakiyah/1445 H/seluruh indonesia/model 2/Surabaya.pdf',

        '10_daerah_nama' => "Yogyakarta",
        '10_daerah_link_model_1' => 'assets/pdf/jadwal-imsakiyah/1445 H/seluruh indonesia/model 1/Yogyakarta.pdf',
        '10_daerah_link_model_2' => 'assets/pdf/jadwal-imsakiyah/1445 H/seluruh indonesia/model 2/Yogyakarta.pdf',

        '1_sekitar_kudus_link' => 'assets/pdf/jadwal-imsakiyah/1445 H/kota sekitar kudus/1.pdf',

        '2_sekitar_kudus_link' => 'assets/pdf/jadwal-imsakiyah/1445 H/kota sekitar kudus/2.pdf',

        '3_sekitar_kudus_link' => 'assets/pdf/jadwal-imsakiyah/1445 H/kota sekitar kudus/3.pdf',

        'deskripsi' => "Ramadhan adalah bulan suci dalam agama Islam di mana umat muslim berpuasa dari terbit fajar hingga terbenam matahari. Puasa Ramadhan juga menjadi momen untuk meningkatkan ketaqwaan dan memperkuat ikatan dengan Allah SWT. Selain itu, Ramadhan juga merupakan waktu yang tepat untuk berbagi dan saling memberi kepada sesama.\n\nSalah satu hal yang penting dalam menjalankan ibadah puasa Ramadhan adalah mengetahui jadwal imsakiyah. Jadwal imsakiyah adalah jadwal yang menentukan waktu berbuka dan sahur. Berikut adalah jadwal imsakiyah yang dapat anda download untuk Ramadhan tahun 1445 H/2024 M di wilayah kabupaten Kudus.",

        'deskripsi_2' => "Jadwal imsakiyah dapat berbeda-beda di setiap daerah karena perbedaan letak geografis. Oleh karena itu, penting bagi umat muslim untuk memeriksa jadwal imsakiyah yang sesuai dengan lokasi tempat tinggalnya.\n\nSelain itu, dalam menjalankan ibadah puasa Ramadhan, diperlukan juga kesiapan fisik dan mental. Berpuasa selama sebulan penuh dapat menimbulkan rasa lelah dan menguras energi. Oleh karena itu, penting untuk mengatur pola makan dan aktivitas sehari-hari agar tetap sehat dan bugar selama menjalankan ibadah puasa.\n\nDalam kesempatan yang baik ini, mari kita manfaatkan momentum Ramadhan untuk meningkatkan ketaqwaan dan kebaikan kita. Selamat menjalankan ibadah puasa Ramadhan 1445 H/2024 M. Semoga Allah SWT senantiasa memberikan rahmat dan keberkahan kepada kita semua. Amin.",

        'deskripsi_3' => "Selain daerah kudus, kami juga meneyediakan jadwal imsakiyah untuk wilayah sekitar Kabupaten Kudus yang bisa di download secara GRATIS, antara lain:",

        'deskripsi_4' => "Kami juga meneyediakan jadwal imsakiyah untuk beberapa daerah yang bisa didownload secara GRATIS, antara lain:",
    ];


    $page = 'jadwal-imsakiyah'; // Ganti dengan halaman yang sesuai

    // Mencari atau membuat entry visitor baru untuk halaman ini
    $visitor = ViewCount::firstOrCreate(['page' => $page]);

    // Menambahkan visitor count
    $visitor->increment('visit_count');

    // Kemudian Anda akan mengirimkan nilai visit_count ini bersama dengan data lain yang ingin Anda tampilkan di halaman tersebut
    // return view('produk', ['data' => $data, 'visit_count' => $visitor->visit_count]);

    return view('produk', compact('data'), ['visit_count' => $visitor->visit_count]);
})->name('product.jadwal-imsakiyah'); // resources/views/products/jadwal-imsakiyah.blade.php

// navbar video imsakiyah
Route::get('/video-imsakiyah', function () {
    $data = (object) [
        'url' => 'video-imsakiyah',
        'judul' => "Video Jadwal Imsakiyah",
        'judul_2' => "Video Jadwal Imsakiyah Ramadhan Tahun 1445 H/2024 M Untuk Wilayah Kabupaten Kudus",
        'judul_3' => "Video Jadwal Imsakiyah Ramadhan 1445 H/2024 M",
        'kategori' => "Video Imsakiyah",

        '1_nama' => "Video Imsakiyah 1",
        '1_video_sore' => 'assets/video/jadwal-imsakiyah/kudus/sore/sore-1.mp4',
        '1_video_pagi' => 'assets/video/jadwal-imsakiyah/kudus/pagi/pagi-1.mp4',
        '1_deskripsi' => "Merupakan salah satu jenis video imsakiyah.",
        '1_link_preview_480p' => "https://drive.google.com/file/d/1FNDS-4TFXmPHVD_tkUexZQMutHLUCpYK/preview",
        '1_link_preview_720p' => "https://drive.google.com/file/d/1b1L-_4AoQPsNtPIoVChm90rKrH74LZIH/preview",
        '1_link_download_480p' => "https://drive.google.com/file/d/1FNDS-4TFXmPHVD_tkUexZQMutHLUCpYK/view",
        '1_link_download_720p' => "https://drive.google.com/file/d/1b1L-_4AoQPsNtPIoVChm90rKrH74LZIH/view",
        '1_tanggal' => "2024-03-12",

        '2_nama' => "Video Imsakiyah 2",
        '2_video_sore' => 'assets/video/jadwal-imsakiyah/kudus/sore/sore-2.mp4',
        '2_video_pagi' => 'assets/video/jadwal-imsakiyah/kudus/pagi/pagi-2.mp4',
        '2_deskripsi' => "Merupakan salah satu jenis video imsakiyah.",
        '2_link_preview_480p' => "https://drive.google.com/file/d/1Ut6nUfHwCum9ypYbFz45R_RLgt1BCEqU/preview",
        '2_link_preview_720p' => "",
        '2_link_download_480p' => "https://drive.google.com/file/d/1Ut6nUfHwCum9ypYbFz45R_RLgt1BCEqU/view",
        '2_link_download_720p' => "",
        '2_tanggal' => "2024-03-13",

        '3_nama' => "Video Imsakiyah 3",
        '3_video_sore' => 'assets/video/jadwal-imsakiyah/kudus/sore/sore-3.mp4',
        '3_video_pagi' => 'assets/video/jadwal-imsakiyah/kudus/pagi/pagi-3.mp4',
        '3_deskripsi' => "Merupakan salah satu jenis video imsakiyah.",
        '3_link_preview_480p' => "",
        '3_link_preview_720p' => "",
        '3_link_download_480p' => "",
        '3_link_download_720p' => "",
        '3_tanggal' => "2024-03-14",

        '4_nama' => "Video Imsakiyah 4",
        '4_video_sore' => 'assets/video/jadwal-imsakiyah/kudus/sore/sore-4.mp4',
        '4_video_pagi' => 'assets/video/jadwal-imsakiyah/kudus/pagi/pagi-4.mp4',
        '4_deskripsi' => "Merupakan salah satu jenis video imsakiyah.",
        '4_link_preview_480p' => "",
        '4_link_preview_720p' => "",
        '4_link_download_480p' => "",
        '4_link_download_720p' => "",
        '4_tanggal' => "",

        '5_nama' => "Video Imsakiyah 5",
        '5_video_sore' => 'assets/video/jadwal-imsakiyah/kudus/sore/sore-5.mp4',
        '5_video_pagi' => 'assets/video/jadwal-imsakiyah/kudus/pagi/pagi-5.mp4',
        '5_deskripsi' => "Merupakan salah satu jenis video imsakiyah.",
        '5_link_preview_480p' => "",
        '5_link_preview_720p' => "",
        '5_link_download_480p' => "",
        '5_link_download_720p' => "",
        '5_tanggal' => "",

        '6_nama' => "Video Imsakiyah 6",
        '6_video_sore' => 'assets/video/jadwal-imsakiyah/kudus/sore/sore-6.mp4',
        '6_video_pagi' => 'assets/video/jadwal-imsakiyah/kudus/pagi/pagi-6.mp4',
        '6_deskripsi' => "Merupakan salah satu jenis video imsakiyah.",
        '6_link_preview_480p' => "",
        '6_link_preview_720p' => "",
        '6_link_download_480p' => "",
        '6_link_download_720p' => "",
        '6_tanggal' => "",

        '7_nama' => "Video Imsakiyah 7",
        '7_video_sore' => 'assets/video/jadwal-imsakiyah/kudus/sore/sore-7.mp4',
        '7_video_pagi' => 'assets/video/jadwal-imsakiyah/kudus/pagi/pagi-7.mp4',
        '7_deskripsi' => "Merupakan salah satu jenis video imsakiyah.",
        '7_link_preview_480p' => "",
        '7_link_preview_720p' => "",
        '7_link_download_480p' => "",
        '7_link_download_720p' => "",
        '7_tanggal' => "",

        '8_nama' => "Video Imsakiyah 8",
        '8_video_sore' => 'assets/video/jadwal-imsakiyah/kudus/sore/sore-8.mp4',
        '8_video_pagi' => 'assets/video/jadwal-imsakiyah/kudus/pagi/pagi-8.mp4',
        '8_deskripsi' => "Merupakan salah satu jenis video imsakiyah.",
        '8_link_preview_480p' => "",
        '8_link_preview_720p' => "",
        '8_link_download_480p' => "",
        '8_link_download_720p' => "",
        '8_tanggal' => "",

        '9_nama' => "Video Imsakiyah 9",
        '9_video_sore' => 'assets/video/jadwal-imsakiyah/kudus/sore/sore-9.mp4',
        '9_video_pagi' => 'assets/video/jadwal-imsakiyah/kudus/pagi/pagi-9.mp4',
        '9_deskripsi' => "Merupakan salah satu jenis video imsakiyah.",
        '9_link_preview_480p' => "",
        '9_link_preview_720p' => "",
        '9_link_download_480p' => "",
        '9_link_download_720p' => "",
        '9_tanggal' => "",

        '10_nama' => "Video Imsakiyah 10",
        '10_video_sore' => 'assets/video/jadwal-imsakiyah/kudus/sore/sore-10.mp4',
        '10_video_pagi' => 'assets/video/jadwal-imsakiyah/kudus/pagi/pagi-10.mp4',
        '10_deskripsi' => "Merupakan salah satu jenis video imsakiyah.",
        '10_link_preview_480p' => "",
        '10_link_preview_720p' => "",
        '10_link_download_480p' => "",
        '10_link_download_720p' => "",
        '10_tanggal' => "",

        '11_nama' => "Video Imsakiyah 11",
        '11_video_sore' => 'assets/video/jadwal-imsakiyah/kudus/sore/sore-11.mp4',
        '11_video_pagi' => 'assets/video/jadwal-imsakiyah/kudus/pagi/pagi-11.mp4',
        '11_deskripsi' => "Merupakan salah satu jenis video imsakiyah.",
        '11_link_preview_480p' => "",
        '11_link_preview_720p' => "",
        '11_link_download_480p' => "",
        '11_link_download_720p' => "",
        '11_tanggal' => "",

        '12_nama' => "Video Imsakiyah 12",
        '12_video_sore' => 'assets/video/jadwal-imsakiyah/kudus/sore/sore-12.mp4',
        '12_video_pagi' => 'assets/video/jadwal-imsakiyah/kudus/pagi/pagi-12.mp4',
        '12_deskripsi' => "Merupakan salah satu jenis video imsakiyah.",
        '12_link_preview_480p' => "",
        '12_link_preview_720p' => "",
        '12_link_download_480p' => "",
        '12_link_download_720p' => "",
        '12_tanggal' => "",

        '13_nama' => "Video Imsakiyah 13",
        '13_video_sore' => 'assets/video/jadwal-imsakiyah/kudus/sore/sore-13.mp4',
        '13_video_pagi' => 'assets/video/jadwal-imsakiyah/kudus/pagi/pagi-13.mp4',
        '13_deskripsi' => "Merupakan salah satu jenis video imsakiyah.",
        '13_link_preview_480p' => "",
        '13_link_preview_720p' => "",
        '13_link_download_480p' => "",
        '13_link_download_720p' => "",
        '13_tanggal' => "",

        '14_nama' => "Video Imsakiyah 14",
        '14_video_sore' => 'assets/video/jadwal-imsakiyah/kudus/sore/sore-14.mp4',
        '14_video_pagi' => 'assets/video/jadwal-imsakiyah/kudus/pagi/pagi-14.mp4',
        '14_deskripsi' => "Merupakan salah satu jenis video imsakiyah.",
        '14_link_preview_480p' => "",
        '14_link_preview_720p' => "",
        '14_link_download_480p' => "",
        '14_link_download_720p' => "",
        '14_tanggal' => "",

        '15_nama' => "Video Imsakiyah 15",
        '15_video_sore' => 'assets/video/jadwal-imsakiyah/kudus/sore/sore-15.mp4',
        '15_video_pagi' => 'assets/video/jadwal-imsakiyah/kudus/pagi/pagi-15.mp4',
        '15_deskripsi' => "Merupakan salah satu jenis video imsakiyah.",
        '15_link_preview_480p' => "",
        '15_link_preview_720p' => "",
        '15_link_download_480p' => "",
        '15_link_download_720p' => "",
        '15_tanggal' => "",

        '16_nama' => "Video Imsakiyah 16",
        '16_video_sore' => 'assets/video/jadwal-imsakiyah/kudus/sore/sore-16.mp4',
        '16_video_pagi' => 'assets/video/jadwal-imsakiyah/kudus/pagi/pagi-16.mp4',
        '16_deskripsi' => "Merupakan salah satu jenis video imsakiyah.",
        '16_link_preview_480p' => "",
        '16_link_preview_720p' => "",
        '16_link_download_480p' => "",
        '16_link_download_720p' => "",
        '16_tanggal' => "",

        '17_nama' => "Video Imsakiyah 17",
        '17_video_sore' => 'assets/video/jadwal-imsakiyah/kudus/sore/sore-17.mp4',
        '17_video_pagi' => 'assets/video/jadwal-imsakiyah/kudus/pagi/pagi-17.mp4',
        '17_deskripsi' => "Merupakan salah satu jenis video imsakiyah.",
        '17_link_preview_480p' => "",
        '17_link_preview_720p' => "",
        '17_link_download_480p' => "",
        '17_link_download_720p' => "",
        '17_tanggal' => "",

        '18_nama' => "Video Imsakiyah 18",
        '18_video_sore' => 'assets/video/jadwal-imsakiyah/kudus/sore/sore-18.mp4',
        '18_video_pagi' => 'assets/video/jadwal-imsakiyah/kudus/pagi/pagi-18.mp4',
        '18_deskripsi' => "Merupakan salah satu jenis video imsakiyah.",
        '18_link_preview_480p' => "",
        '18_link_preview_720p' => "",
        '18_link_download_480p' => "",
        '18_link_download_720p' => "",
        '18_tanggal' => "",

        '19_nama' => "Video Imsakiyah 19",
        '19_video_sore' => 'assets/video/jadwal-imsakiyah/kudus/sore/sore-19.mp4',
        '19_video_pagi' => 'assets/video/jadwal-imsakiyah/kudus/pagi/pagi-19.mp4',
        '19_deskripsi' => "Merupakan salah satu jenis video imsakiyah.",
        '19_link_preview_480p' => "",
        '19_link_preview_720p' => "",
        '19_link_download_480p' => "",
        '19_link_download_720p' => "",
        '19_tanggal' => "",

        '20_nama' => "Video Imsakiyah 20",
        '20_video_sore' => 'assets/video/jadwal-imsakiyah/kudus/sore/sore-20.mp4',
        '20_video_pagi' => 'assets/video/jadwal-imsakiyah/kudus/pagi/pagi-20.mp4',
        '20_deskripsi' => "Merupakan salah satu jenis video imsakiyah.",
        '20_link_preview_480p' => "",
        '20_link_preview_720p' => "",
        '20_link_download_480p' => "",
        '20_link_download_720p' => "",
        '20_tanggal' => "",

        '21_nama' => "Video Imsakiyah 21",
        '21_video_sore' => 'assets/video/jadwal-imsakiyah/kudus/sore/sore-21.mp4',
        '21_video_pagi' => 'assets/video/jadwal-imsakiyah/kudus/pagi/pagi-21.mp4',
        '21_deskripsi' => "Merupakan salah satu jenis video imsakiyah.",
        '21_link_preview_480p' => "",
        '21_link_preview_720p' => "",
        '21_link_download_480p' => "",
        '21_link_download_720p' => "",
        '21_tanggal' => "",

        '22_nama' => "Video Imsakiyah 22",
        '22_video_sore' => 'assets/video/jadwal-imsakiyah/kudus/sore/sore-22.mp4',
        '22_video_pagi' => 'assets/video/jadwal-imsakiyah/kudus/pagi/pagi-22.mp4',
        '22_deskripsi' => "Merupakan salah satu jenis video imsakiyah.",
        '22_link_preview_480p' => "",
        '22_link_preview_720p' => "",
        '22_link_download_480p' => "",
        '22_link_download_720p' => "",
        '22_tanggal' => "",

        '23_nama' => "Video Imsakiyah 23",
        '23_video_sore' => 'assets/video/jadwal-imsakiyah/kudus/sore/sore-23.mp4',
        '23_video_pagi' => 'assets/video/jadwal-imsakiyah/kudus/pagi/pagi-23.mp4',
        '23_deskripsi' => "Merupakan salah satu jenis video imsakiyah.",
        '23_link_preview_480p' => "",
        '23_link_preview_720p' => "",
        '23_link_download_480p' => "",
        '23_link_download_720p' => "",
        '23_tanggal' => "",

        '24_nama' => "Video Imsakiyah 24",
        '24_video_sore' => 'assets/video/jadwal-imsakiyah/kudus/sore/sore-24.mp4',
        '24_video_pagi' => 'assets/video/jadwal-imsakiyah/kudus/pagi/pagi-24.mp4',
        '24_deskripsi' => "Merupakan salah satu jenis video imsakiyah.",
        '24_link_preview_480p' => "",
        '24_link_preview_720p' => "",
        '24_link_download_480p' => "",
        '24_link_download_720p' => "",
        '24_tanggal' => "",

        '25_nama' => "Video Imsakiyah 25",
        '25_video_sore' => 'assets/video/jadwal-imsakiyah/kudus/sore/sore-25.mp4',
        '25_video_pagi' => 'assets/video/jadwal-imsakiyah/kudus/pagi/pagi-25.mp4',
        '25_deskripsi' => "Merupakan salah satu jenis video imsakiyah.",
        '25_link_preview_480p' => "",
        '25_link_preview_720p' => "",
        '25_link_download_480p' => "",
        '25_link_download_720p' => "",
        '25_tanggal' => "",

        '26_nama' => "Video Imsakiyah 26",
        '26_video_sore' => 'assets/video/jadwal-imsakiyah/kudus/sore/sore-26.mp4',
        '26_video_pagi' => 'assets/video/jadwal-imsakiyah/kudus/pagi/pagi-26.mp4',
        '26_deskripsi' => "Merupakan salah satu jenis video imsakiyah.",
        '26_link_preview_480p' => "",
        '26_link_preview_720p' => "",
        '26_link_download_480p' => "",
        '26_link_download_720p' => "",
        '26_tanggal' => "",

        '27_nama' => "Video Imsakiyah 27",
        '27_video_sore' => 'assets/video/jadwal-imsakiyah/kudus/sore/sore-27.mp4',
        '27_video_pagi' => 'assets/video/jadwal-imsakiyah/kudus/pagi/pagi-27.mp4',
        '27_deskripsi' => "Merupakan salah satu jenis video imsakiyah.",
        '27_link_preview_480p' => "",
        '27_link_preview_720p' => "",
        '27_link_download_480p' => "",
        '27_link_download_720p' => "",
        '27_tanggal' => "",

        '28_nama' => "Video Imsakiyah 28",
        '28_video_sore' => 'assets/video/jadwal-imsakiyah/kudus/sore/sore-28.mp4',
        '28_video_pagi' => 'assets/video/jadwal-imsakiyah/kudus/pagi/pagi-28.mp4',
        '28_deskripsi' => "Merupakan salah satu jenis video imsakiyah.",
        '28_link_preview_480p' => "",
        '28_link_preview_720p' => "",
        '28_link_download_480p' => "",
        '28_link_download_720p' => "",
        '28_tanggal' => "",

        '29_nama' => "Video Imsakiyah 29",
        '29_video_sore' => 'assets/video/jadwal-imsakiyah/kudus/sore/sore-29.mp4',
        '29_video_pagi' => 'assets/video/jadwal-imsakiyah/kudus/pagi/pagi-29.mp4',
        '29_deskripsi' => "Merupakan salah satu jenis video imsakiyah.",
        '29_link_preview_480p' => "",
        '29_link_preview_720p' => "",
        '29_link_download_480p' => "",
        '29_link_download_720p' => "",
        '29_tanggal' => "",

        '30_nama' => "Video Imsakiyah 30",
        '30_video_sore' => 'assets/video/jadwal-imsakiyah/kudus/sore/sore-30.mp4',
        '30_video_pagi' => 'assets/video/jadwal-imsakiyah/kudus/pagi/pagi-30.mp4',
        '30_deskripsi' => "Merupakan salah satu jenis video imsakiyah.",
        '30_link_preview_480p' => "",
        '30_link_preview_720p' => "",
        '30_link_download_480p' => "",
        '30_link_download_720p' => "",
        '30_tanggal' => "",

        'deskripsi' => "Ramadhan adalah bulan suci dalam agama Islam di mana umat muslim berpuasa dari terbit fajar hingga terbenam matahari. Puasa Ramadhan juga menjadi momen untuk meningkatkan ketaqwaan dan memperkuat ikatan dengan Allah SWT. Selain itu, Ramadhan juga merupakan waktu yang tepat untuk berbagi dan saling memberi kepada sesama.\n\nSalah satu hal yang penting dalam menjalankan ibadah puasa Ramadhan adalah mengetahui jadwal imsakiyah. Jadwal imsakiyah adalah jadwal yang menentukan waktu berbuka dan sahur. Berikut kami sediakan Video jadwal imsakiyah untuk Ramadhan tahun 1445 H/2024 M untuk wilayah kabupaten Kudus.\n\n",

        'deskripsi_2' => "Jadwal imsakiyah dapat berbeda-beda di setiap daerah karena perbedaan letak geografis. Oleh karena itu, penting bagi umat muslim untuk memeriksa jadwal imsakiyah yang sesuai dengan lokasi tempat tinggalnya.\n\nSelain itu, dalam menjalankan ibadah puasa Ramadhan, diperlukan juga kesiapan fisik dan mental. Berpuasa selama sebulan penuh dapat menimbulkan rasa lelah dan menguras energi. Oleh karena itu, penting untuk mengatur pola makan dan aktivitas sehari-hari agar tetap sehat dan bugar selama menjalankan ibadah puasa.\n\nDalam kesempatan yang baik ini, mari kita manfaatkan momentum Ramadhan untuk meningkatkan ketaqwaan dan kebaikan kita. Selamat menjalankan ibadah puasa Ramadhan 1445 H/2024 M. Semoga Allah SWT senantiasa memberikan rahmat dan keberkahan kepada kita semua. Amin.",
    ];

    $page = 'video-imsakiyah'; // Ganti dengan halaman yang sesuai

    // Mencari atau membuat entry visitor baru untuk halaman ini
    $visitor = ViewCount::firstOrCreate(['page' => $page]);

    // Menambahkan visitor count
    $visitor->increment('visit_count');

    return view('produk', compact('data'), ['visit_count' => $visitor->visit_count]);
})->name('product.video-imsakiyah'); // resources/views/products/video-imsakiyah.blade.php

// navbar jasa cetak
Route::get('/jasa-cetak', function () {
    $data = (object) [
        'jasa_cetak_gambar' => 'assets/images/jasa cetak/min/webp/buya-1.webp',
    ];

    return view('jasa.jasa-cetak', compact('data'));
})->name('jasa.jasa-cetak'); // resources/views/jasa/jasa-cetak.blade.php

// navbar latar belakang
Route::get('/latar-belakang', function () {
    $data = (object) [
        'latar_belakang_gambar' => 'assets/images/latar belakang/min/webp/buya-1.webp',
    ];

    return view('tentang-kami.latar-belakang', compact('data'));
})->name('tentang-kami.latar-belakang'); // resources/views/tentang-kami/latar-belakang.blade.php

// navbar visi misi
Route::get('/visi-misi', function () {
    $data = (object) [
        'visi_misi_gambar' => 'assets/images/visi misi/min/webp/buya-1.webp',
    ];

    return view('tentang-kami.visi-misi', compact('data'));
})->name('tentang-kami.visi-misi'); // resources/views/tentang-kami/visi-misi.blade.php











































// test menggunakan 1 file
// per produk: alquran
Route::get('/alquran/{produk}', function ($produk) {
    $data = (object) [
        'url' => "alquran",
        'judul' => "Al-Qu'ran",
        'kategori' => "Al-Qur'an Al-Quddus",
    ];

    if ($produk == '1') {
        $data->nama = "Al-Quddus A1";
        $data->kategori = "Al-Qur'an Al-Quddus";
        $data->gambar = 'assets/images/al-quran/2/min/webp/A1.webp';
        $data->deskripsi = "Al-Quddus A1 adalah Al-Qur'an Al-Quddus dengan ukuran kecil dan tidak berisi terjemahan. Dengan dimensi 11,5 x 15 cm dan berat hanya 0,4 kg, Al-Quddus A1 sangat praktis untuk dibawa dan dipegang. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, halaman-halaman ini dijamin nyaman untuk dibaca. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, dan poly silver, Al-Quddus A1 tahan lama dan terlindungi. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Carton 150 gsm dengan laminasi glossy. Produk ini cocok untuk mereka yang mencari Al-Qur'an berkualitas dengan desain yang elegan, sekaligus mudah dibawa dan dipegang. Dapatkan Al-Quddus A1 sekarang dengan harga Rp 40.000.";
        $data->judul = "Al-Quddus Kecil";
        $data->ukuran = "11,5 x 15 cm";
        $data->halaman = "612 Halaman";
        $data->cover = "Hard Cover | Laminasi Doff | UV Spot | Poly Silver";
        $data->isi = "HVS 60 gsm | 1 Warna";
        $data->skiblat = "Art Carton 150 gsm | Laminasi Glossy";
        $data->berat = "0,4 kg";
        $data->harga = "Rp 40.000";
    } elseif ($produk == '2') {
        $data->nama = "Al-Quddus A97";
        $data->kategori = "Al-Qur'an Al-Quddus";
        $data->gambar = 'assets/images/al-quran/2/min/webp/A97.webp';
        $data->deskripsi = "Al-Quddus A97 adalah Al-Qur'an Al-Quddus dengan ukuran kecil yang dilengkapi dengan terjemahan dalam 2 jilid. Dengan dimensi 11,5 x 15 cm dan berat 0,6 kg, Al-Quddus A97 tetap mudah dibawa dan dipegang. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, pembaca akan menemukan kenyamanan dalam membaca setiap halamannya. Dibungkus dengan cover kalep yang dipoles dengan hot print dan sablon, produk ini memiliki daya tahan yang tinggi. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Carton 350 gsm dengan laminasi glossy. Al-Quddus A97 merupakan pilihan yang sempurna bagi mereka yang mencari Al-Qur'an dengan terjemahan yang jelas dan desain yang elegan. Dapatkan Al-Quddus A97 sekarang dengan harga Rp 46.000.";
        $data->judul = "Al-Quddus Kecil Terjemah 2 Jilid";
        $data->ukuran = "11,5 x 15 cm";
        $data->halaman = "612 Halaman";
        $data->cover = "Kalep | Hot Print | Sablon";
        $data->isi = "HVS 60 gsm | 1 Warna";
        $data->skiblat = "Art Carton 350 gsm | Laminasi Glossy";
        $data->berat = "0,6 kg";
        $data->harga = "Rp 46.000";
    } elseif ($produk == '3') {
        $data->nama = 'Al-Quddus B1-a';
        $data->kategori = "Al-Qur'an Al-Quddus";
        $data->gambar = 'assets/images/al-quran/2/min/webp/B1a.webp';
        $data->deskripsi = "Al-Quddus B1-a adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B1-a memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff dan UV spot, Al-Quddus B1-a memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B1-a menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B1-a dengan harga Rp 55.000.";
        $data->judul = "Tanggung Hard Cover Hijau";
        $data->ukuran = "14,5 x 20,5 cm";
        $data->halaman = "612 Halaman";
        $data->cover = "Hard Cover | Laminasi Doff | UV Spot";
        $data->isi = "HVS 60 gsm | 1 Warna";
        $data->skiblat = "Art Paper 150 gsm | Laminasi Glossy";
        $data->berat = "0,7 kg";
        $data->harga = "Rp 55.000";
    } elseif ($produk == '4') {
        $data->nama = 'Al-Quddus B1-b';
        $data->kategori = "Al-Qur'an Al-Quddus";
        $data->gambar = 'assets/images/al-quran/2/min/webp/B1b.webp';
        $data->deskripsi = "Al-Quddus B1-b adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B1-b memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff dan UV spot, Al-Quddus B1-b memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B1-b menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B1-b dengan harga Rp 55.000.";
        $data->judul = "Tanggung Hard Cover Hijau Pink";
        $data->ukuran = "14,5 x 20,5 cm";
        $data->halaman = "612 Halaman";
        $data->cover = "Hard Cover | Laminasi Doff | UV Spot";
        $data->isi = "HVS 60 gsm | 1 Warna";
        $data->skiblat = "Art Paper 150 gsm | Laminasi Glossy";
        $data->berat = "0,7 kg";
        $data->harga = "Rp 55.000";
    } elseif ($produk == '5') {
        $data->nama = 'Al-Quddus B1-c';
        $data->kategori = "Al-Qur'an Al-Quddus";
        $data->gambar = 'assets/images/al-quran/2/min/webp/B1c.webp';
        $data->deskripsi = "Al-Quddus B1-c adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B1-c memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff dan UV spot, Al-Quddus B1-c memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B1-c menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B1-c dengan harga Rp 55.000.";
        $data->judul = "Tanggung Hard Cover Pink";
        $data->ukuran = "14,5 x 20,5 cm";
        $data->halaman = "612 Halaman";
        $data->cover = "Hard Cover | Laminasi Doff | UV Spot";
        $data->isi = "HVS 60 gsm | 1 Warna";
        $data->skiblat = "Art Paper 150 gsm | Laminasi Glossy";
        $data->berat = "0,7 kg";
        $data->harga = "Rp 55.000";
    } elseif ($produk == '6') {
        $data->nama = 'Al-Quddus B1-d';
        $data->kategori = "Al-Qur'an Al-Quddus";
        $data->gambar = 'assets/images/al-quran/2/min/webp/B1d.webp';
        $data->deskripsi = "Al-Quddus B1-d adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B1-d memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff dan UV spot, Al-Quddus B1-d memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B1-d menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B1-d dengan harga Rp 55.000.";
        $data->judul = "Tanggung Hard Cover Hitam";
        $data->ukuran = "14,5 x 20,5 cm";
        $data->halaman = "612 Halaman";
        $data->cover = "Hard Cover | Laminasi Doff | UV Spot";
        $data->isi = "HVS 60 gsm | 1 Warna";
        $data->skiblat = "Art Paper 150 gsm | Laminasi Glossy";
        $data->berat = "0,7 kg";
        $data->harga = "Rp 55.000";
    } elseif ($produk == '7') {
        $data->nama = 'Al-Quddus B2';
        $data->kategori = "Al-Qur'an Al-Quddus";
        $data->gambar = 'assets/images/al-quran/2/min/webp/B2.webp';
        $data->deskripsi = "Al-Quddus B2 adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,8 kg, Al-Quddus B2 memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, hot print, dan emboss, Al-Quddus B2 memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta dua warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B2 menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B2 dengan harga Rp 60.000.";
        $data->judul = "Tanggung Hard Cover";
        $data->ukuran = "14,5 x 20,5 cm";
        $data->halaman = "612 Halaman";
        $data->cover = "Hard Cover | Laminasi Doff | UV Spot | Hot Print | Emboss";
        $data->isi = "HVS 60 gsm | 2 Warna";
        $data->skiblat = "Art Paper 150 gsm | Laminasi Glossy";
        $data->berat = "0,8 kg";
        $data->harga = "Rp 60.000";
    } elseif ($produk == '8') {
        $data->nama = 'Al-Quddus B2 Lux';
        $data->kategori = "Al-Qur'an Al-Quddus";
        $data->gambar = 'assets/images/al-quran/2/min/webp/B2 Lux.webp';
        $data->deskripsi = "Al-Quddus B2 Lux adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,8 kg, Al-Quddus B2 Lux memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan cover berresleting dan emboss, Al-Quddus B2 Lux memiliki tampilan yang mewah dan tahan lama. Isinya mencakup tulisan dengan tinta dua warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B2 Lux menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang elegan dan praktis. Segera miliki Al-Quddus B2 Lux dengan harga Rp 66.000.";
        $data->judul = "Tanggung HVS 2 Warna Lux";
        $data->ukuran = "14,5 x 20,5 cm";
        $data->halaman = "612 Halaman";
        $data->cover = "Resleting | Emboss";
        $data->isi = "HVS 60 gsm | 2 Warna";
        $data->skiblat = "Art Paper 150 gsm | Laminasi Glossy";
        $data->berat = "0,8 kg";
        $data->harga = "Rp 66.000";
    } elseif ($produk == '9') {
        $data->nama = 'Al-Quddus B3';
        $data->kategori = "Al-Qur'an Al-Quddus";
        $data->gambar = 'assets/images/al-quran/2/min/webp/B3.webp';
        $data->deskripsi = "Al-Quddus B3 adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,8 kg, Al-Quddus B3 memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, hot print, dan emboss, Al-Quddus B3 memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta empat warna pada kertas HVS 70 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B3 menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B3 dengan harga Rp 65.000.";
        $data->judul = "Tanggung Hard Cover";
        $data->ukuran = "14,5 x 20,5 cm";
        $data->halaman = "612 Halaman";
        $data->cover = "Hard Cover | Laminasi Doff | UV Spot | Hot Print | Emboss";
        $data->isi = "HVS 70 gsm | 4 Warna";
        $data->skiblat = "Art Paper 150 gsm | Laminasi Glossy";
        $data->berat = "0,8 kg";
        $data->harga = "Rp 65.000";
    } elseif ($produk == '10') {
        $data->nama = 'Al-Quddus B5';
        $data->kategori = "Al-Qur'an Al-Quddus";
        $data->gambar = 'assets/images/al-quran/2/min/webp/B5.webp';
        $data->deskripsi = "Al-Quddus B5 adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B5 memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, hot print, dan emboss, Al-Quddus B5 memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta dua warna pada kertas QPP 55 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B5 menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B5 dengan harga Rp 65.000.";
        $data->judul = "Tanggung Hard Cover";
        $data->ukuran = "14,5 x 20,5 cm";
        $data->halaman = "612 Halaman";
        $data->cover = "Hard Cover | Laminasi Doff | UV Spot | Hot Print | Emboss";
        $data->isi = "QPP 55 gsm | 2 Warna";
        $data->skiblat = "Art Paper 150 gsm | Laminasi Glossy";
        $data->berat = "0,7 kg";
        $data->harga = "Rp 65.000";
    } elseif ($produk == '11') {
        $data->nama = 'Al-Quddus B5 Lux';
        $data->kategori = "Al-Qur'an Al-Quddus";
        $data->gambar = 'assets/images/al-quran/2/min/webp/B5 Lux.webp';
        $data->deskripsi = "Al-Quddus B5 Lux adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B5 Lux memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan cover berresleting dan emboss, Al-Quddus B5 Lux memiliki tampilan yang mewah dan tahan lama. Isinya mencakup tulisan dengan tinta dua warna pada kertas QPP 50 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B5 Lux menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang elegan dan praktis. Segera miliki Al-Quddus B5 Lux dengan harga Rp 75.000.";
        $data->judul = "Tanggung QPP 2 Warna Lux";
        $data->ukuran = "14,5 x 20,5 cm";
        $data->halaman = "612 Halaman";
        $data->cover = "Resleting | Emboss";
        $data->isi = "QPP 50 gsm | 2 Warna";
        $data->skiblat = "Art Paper 150 gsm | Laminasi Glossy";
        $data->berat = "0,7 kg";
        $data->harga = "Rp 75.000";
    } elseif ($produk == '12') {
        $data->nama = 'Al-Quddus B6-a';
        $data->kategori = "Al-Qur'an Al-Quddus";
        $data->gambar = 'assets/images/al-quran/2/min/webp/B6a.webp';
        $data->deskripsi = "Al-Quddus B6-a adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,8 kg, Al-Quddus B6-a memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, hot print, dan emboss, Al-Quddus B6-a memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta empat warna pada kertas QPP 50 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B6-a menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B6-a dengan harga Rp 70.000.";
        $data->judul = "Tanggung Hard Cover";
        $data->ukuran = "14,5 x 20,5 cm";
        $data->halaman = "612 Halaman";
        $data->cover = "Hard Cover | Laminasi Doff | UV Spot | Hot Print | Emboss";
        $data->isi = "QPP 50 gsm | 4 Warna";
        $data->skiblat = "Art Paper 150 gsm | Laminasi Glossy";
        $data->berat = "0,8 kg";
        $data->harga = "Rp 70.000";
    } elseif ($produk == '13') {
        $data->nama = 'Al-Quddus B6-a Lux';
        $data->kategori = "Al-Qur'an Al-Quddus";
        $data->gambar = 'assets/images/al-quran/2/min/webp/B6a Lux.webp';
        $data->deskripsi = "Al-Quddus B6-a Lux adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,8 kg, Al-Quddus B6-a Lux memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan cover berresleting dan emboss, Al-Quddus B6-a Lux memiliki tampilan yang mewah dan tahan lama. Isinya mencakup tulisan dengan tinta empat warna pada kertas QPP 50 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B6-a Lux menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang elegan dan praktis. Segera miliki Al-Quddus B6-a Lux dengan harga Rp 86.000.";
        $data->judul = "Tanggung 4 Warna Lux";
        $data->ukuran = "14,5 x 20,5 cm";
        $data->halaman = "612 Halaman";
        $data->cover = "Resleting | Emboss";
        $data->isi = "QPP 50 gsm | 4 Warna";
        $data->skiblat = "Art Paper 150 gsm | Laminasi Glossy";
        $data->berat = "0,8 kg";
        $data->harga = "Rp 86.000";
    } elseif ($produk == '14') {
        $data->nama = 'Al-Quddus B6-b';
        $data->kategori = "Al-Qur'an Al-Quddus";
        $data->gambar = 'assets/images/al-quran/2/min/webp/B6b.webp';
        $data->deskripsi = "Al-Quddus B6-b adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang tidak berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,9 kg, Al-Quddus B6-b memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, hot print, dan emboss, Al-Quddus B6-b memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta empat warna pada kertas Art Paper 85 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B6-b menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B6-b dengan harga Rp 85.000.";
        $data->judul = "Tanggung Hard Cover";
        $data->ukuran = "14,5 x 20,5 cm";
        $data->halaman = "612 Halaman";
        $data->cover = "Hard Cover | Laminasi Doff | UV Spot | Hot Print | Emboss";
        $data->isi = "Art Paper 85 gsm | 4 Warna";
        $data->skiblat = "Art Paper 150 gsm | Laminasi Glossy";
        $data->berat = "0,9 kg";
        $data->harga = "Rp 85.000";
    } elseif ($produk == '15') {
        $data->nama = 'Al-Quddus B65';
        $data->kategori = "Al-Qur'an Al-Quddus";
        $data->gambar = 'assets/images/al-quran/2/min/webp/B65.webp';
        $data->deskripsi = "Al-Quddus B65 adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang berisi terjemahan. Dengan dimensi 14,5 x 20,5 cm dan berat 0,7 kg, Al-Quddus B65 memberikan kenyamanan dalam membaca yang luar biasa. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, hot print, dan emboss, Al-Quddus B65 memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta dua warna pada kertas QPP 55 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus B65 menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus B5 dengan harga Rp 66.000.";
        $data->judul = "Tanggung Hard Cover Terjemah";
        $data->ukuran = "14,5 x 20,5 cm";
        $data->halaman = "612 Halaman";
        $data->cover = "Hard Cover | Laminasi Doff | UV Spot | Hot Print | Emboss";
        $data->isi = "QPP 55 gsm | 2 Warna";
        $data->skiblat = "Art Paper 150 gsm | Laminasi Glossy";
        $data->berat = "0,7 kg";
        $data->harga = "Rp 66.000";
    } elseif ($produk == '16') {
        $data->nama = 'Al-Quddus B97';
        $data->kategori = "Al-Qur'an Al-Quddus";
        $data->gambar = 'assets/images/al-quran/2/min/webp/B97.webp';
        $data->deskripsi = "Al-Quddus B97 adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran tanggung yang dilengkapi dengan terjemahan dalam 2 jilid. Dengan dimensi 14,5 x 20,5 cm dan berat 0,8 kg, Al-Quddus B97 tetap mudah dibawa dan dipegang. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, pembaca akan menemukan kenyamanan dalam membaca setiap halamannya. Dibungkus dengan cover kalep yang dipoles dengan hot print dan sablon, produk ini memiliki daya tahan yang tinggi. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 60 gsm, sementara sampul belakangnya menggunakan Art Carton 350 gsm dengan laminasi glossy. Al-Quddus B97 merupakan pilihan yang sempurna bagi mereka yang mencari Al-Qur'an dengan terjemahan yang jelas dan desain yang elegan. Dapatkan Al-Quddus B97 sekarang dengan harga Rp 56.000.";
        $data->judul = "Tanggung Kalep Terjemah 2 Jilid";
        $data->ukuran = "14,5 x 20,5 cm";
        $data->halaman = "612 Halaman";
        $data->cover = "Kalep | Hot Print | Sablon";
        $data->isi = "HVS 60 gsm | 1 Warna";
        $data->skiblat = "Art Carton 350 gsm | Laminasi Glossy";
        $data->berat = "0,8 kg";
        $data->harga = "Rp 56.000";
    } elseif ($produk == '17') {
        $data->nama = 'Al-Quddus D1';
        $data->kategori = "Al-Qur'an Al-Quddus";
        $data->gambar = 'assets/images/al-quran/2/min/webp/D1.webp';
        $data->deskripsi = "Al-Quddus D1 adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran besar yang memudahkan pembaca untuk membaca dengan jelas. Dengan dimensi 20,5 x 29,5 cm dan berat 1,7 kg, Al-Quddus D1 memberikan pengalaman membaca yang nyaman. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan doff, UV spot, dan hot print, Al-Quddus D1 memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta satu warna pada kertas HVS 70 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus D1 menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan desain yang menawan dan ukuran yang nyaman. Segera miliki Al-Quddus D1 dengan harga Rp 77.000.";
        $data->judul = "Besar Hard Cover";
        $data->ukuran = "20,5 x 29,5 cm";
        $data->halaman = "612 Halaman";
        $data->cover = "Hard Cover | Laminaasi Doff | UV Spot | Hot Print";
        $data->isi = "HVS 70 gsm | 1 Warna";
        $data->skiblat = "Art Paper 150 gsm | Laminasi Glossy";
        $data->berat = "1,7 kg";
        $data->harga = "Rp 77.000";
    } elseif ($produk == '18') {
        $data->nama = 'Al-Quddus D65';
        $data->kategori = "Al-Qur'an Al-Quddus";
        $data->gambar = 'assets/images/al-quran/2/min/webp/D65.webp';
        $data->deskripsi = "Al-Quddus D65 adalah salah satu jenis Al-Qur'an Al-Quddus dengan ukuran besar yang dilengkapi dengan terjemahan. Dengan dimensi 20,5 x 29,5 cm dan berat 1,4 kg, Al-Quddus D65 memberikan pengalaman membaca yang nyaman dan informatif. Terdiri dari 612 halaman dengan kertas berkualitas tinggi, setiap halaman ditampilkan dengan jelas. Dibungkus dengan hardcover yang dilaminasi dengan UV spot, laminaasi doff, hot print, dan emboss, Al-Quddus D65 memiliki tampilan yang elegan dan tahan lama. Isinya mencakup tulisan dengan tinta dua warna pada kertas Imperial 55 gsm, sementara sampul belakangnya menggunakan Art Paper 150 gsm dengan laminasi glossy. Al-Quddus D65 menjadi pilihan yang tepat bagi mereka yang menginginkan Al-Qur'an dengan terjemahan yang jelas dan desain yang menawan. Segera miliki Al-Quddus D65 dengan harga Rp 110.000.";
        $data->judul = "Besar HC Terjemah";
        $data->ukuran = "20,5 x 29,5 cm";
        $data->halaman = "612 Halaman";
        $data->cover = "Hard Cover | UV Spot | Laminaasi Doff | Hot Print | Emboss";
        $data->isi = "Imperial 55 gsm | 2 Warna";
        $data->skiblat = "Art Paper 150 gsm | Laminasi Glossy";
        $data->berat = "1,4 kg";
        $data->harga = "Rp 110.000";
    }

    return view('produk-detail', compact('data'));
})->name('product.alquran-detail'); // resources/views/products/alquran-detail.blade.php

// per produk: yanbua
Route::get('/yanbua/{produk}', function ($produk) {
    $data = (object) [
        'url' => "yanbua",
        'judul' => "Yanbu'a",
        'kategori' => "Yanbu'a",
    ];

    if ($produk == '1') {
        $data->nama = "Yanbu'a Jilid Pemula";
        $data->kategori = "Yanbu'a";
        $data->gambar = 'assets/images/yanbua/min/webp/yan-pml.webp';
        $data->deskripsi = "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid Pemula.";
    } elseif ($produk == '2') {
        $data->nama = 'Yanbu\'a Jilid 1';
        $data->kategori = "Yanbu'a";
        $data->gambar = 'assets/images/yanbua/min/webp/yan-1.webp';
        $data->deskripsi = "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 1.";
    } elseif ($produk == '3') {
        $data->nama = 'Yanbu\'a Jilid 2';
        $data->kategori = "Yanbu'a";
        $data->gambar = 'assets/images/yanbua/min/webp/yan-2.webp';
        $data->deskripsi = "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 2.";
    } elseif ($produk == '4') {
        $data->nama = 'Yanbu\'a Jilid 3';
        $data->kategori = "Yanbu'a";
        $data->gambar = 'assets/images/yanbua/min/webp/yan-3.webp';
        $data->deskripsi = "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 3.";
    } elseif ($produk == '5') {
        $data->nama = 'Yanbu\'a Jilid 4';
        $data->kategori = "Yanbu'a";
        $data->gambar = 'assets/images/yanbua/min/webp/yan-4.webp';
        $data->deskripsi = "Merupakan salah satu
        jilid dari yanbu'a yaitu Yanbu'a Jilid 4.";
    } elseif ($produk == '6') {
        $data->nama = 'Yanbu\'a Jilid 5';
        $data->kategori = "Yanbu'a";
        $data->gambar = 'assets/images/yanbua/min/webp/yan-5.webp';
        $data->deskripsi = "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 5.";
    } elseif ($produk == '7') {
        $data->nama = 'Yanbu\'a Jilid 6';
        $data->kategori = "Yanbu'a";
        $data->gambar = 'assets/images/yanbua/min/webp/yan-6.webp';
        $data->deskripsi = "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 6.";
    } elseif ($produk == '8') {
        $data->nama = 'Yanbu\'a Jilid 7';
        $data->kategori = "Yanbu'a";
        $data->gambar = 'assets/images/yanbua/min/webp/yan-7.webp';
        $data->deskripsi = "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid 7.";
    } elseif ($produk == '9') {
        $data->nama = 'Yanbu\'a Jilid Makhorj';
        $data->kategori = "Yanbu'a";
        $data->gambar = 'assets/images/yanbua/min/webp/yan-mkh.webp';
        $data->deskripsi = "Merupakan salah satu jilid dari yanbu'a yaitu Yanbu'a Jilid Makhorj.";
    }

    return view('produk-detail', compact('data'));
})->name('product.yanbua-detail'); // resources/views/products/yanbua-detail.blade.php

// per produk: buku
Route::get('/buku/{produk}', function ($produk) {
    $data = (object) [
        'url' => "buku",
        'judul' => "Buku",
        'kategori' => "Buku",
    ];

    if ($produk == '1') {
        $data->nama = "Buku Makesta";
        $data->kategori = "Buku";
        $data->gambar = 'assets/images/buku/min/webp/umum-1.webp';
        $data->deskripsi = "Merupakan salah satu buku umum untuk acara kegiatan IPNU/IPPNU.";
    } elseif ($produk == '2') {
        $data->nama = 'Amaliyah An-Nahdliyah';
        $data->kategori = "Buku";
        $data->gambar = 'assets/images/buku/min/webp/umum-2.webp';
        $data->deskripsi = "Merupakan salah satu buku umum untuk acara kegiatan NU.";
    } elseif ($produk == '3') {
        $data->nama = 'Buku Khot Kelas VI';
        $data->kategori = "Buku";
        $data->gambar = 'assets/images/buku/min/webp/umum-3.webp';
        $data->deskripsi = "Merupakan salah satu buku umum untuk pengajaran kelas VI.";
    } elseif ($produk == '4') {
        $data->nama = 'Buku Multaqo Nasional';
        $data->kategori = "Buku";
        $data->gambar = 'assets/images/buku/min/webp/umum-4.webp';
        $data->deskripsi = "Merupakan salah satu buku umum untuk acara Multaqo Yanbu'a.";
    } elseif ($produk == '5') {
        $data->nama = 'Amaliyah Ahlussunnah';
        $data->kategori = "Buku";
        $data->gambar = 'assets/images/buku/min/webp/umum-5.webp';
        $data->deskripsi = "Merupakan salah satu buku umum amalan-amalan NU.";
    } elseif ($produk == '6') {
        $data->nama = 'Buku At-Tanwir';
        $data->kategori = "Buku";
        $data->gambar = 'assets/images/buku/min/webp/umum-6.webp';
        $data->deskripsi = "Merupakan salah satu buku umum untuk pengajaran pondok.";
    }

    return view('produk-detail', compact('data'));
})->name('product.buku-detail'); // resources/views/products/buku-detail.blade.php

// per produk: kalender
Route::get('/kalender/{produk}', function ($produk) {
    $data = (object) [
        'url' => "kalender",
        'judul' => "Kalender",
        'kategori' => "Kalender",
    ];

    if ($produk == '1') {
        $data->nama = "Kalender Redjo Jaya";
        $data->kategori = "Kalender";
        $data->gambar = 'assets/images/kalender/min/webp/rejo.webp';
        $data->deskripsi = "Kalender dinding dengan ukuran 32 x 48 cm.";
    } elseif ($produk == '2') {
        $data->nama = 'Kalender PP. APIK Semarang';
        $data->kategori = "Kalender";
        $data->gambar = 'assets/images/kalender/min/webp/apik.webp';
        $data->deskripsi = "Kalender dinding dengan ukuran 48 x 64 cm.";
    } elseif ($produk == '3') {
        $data->nama = 'Kalender LMY Banyuwangi';
        $data->kategori = "Kalender";
        $data->gambar = 'assets/images/kalender/min/webp/banyuwangi.webp';
        $data->deskripsi = "Kalender dinding dengan ukuran 48 x 64 cm.";
    }

    return view('produk-detail', compact('data'));
})->name('product.kalender-detail'); // resources/views/products/kalender-detail.blade.php

// per produk: nota
Route::get('/nota/{produk}', function ($produk) {
    $data = (object) [
        'url' => 'nota',
        'judul' => "Nota Custom",
        'kategori' => "Nota",
    ];

    if ($produk == '1') {
        $data->nama = "Nota Custom 1";
        $data->kategori = "Nota";
        $data->gambar = 'assets/images/nota/min/webp/nota-custom-1.webp';
        $data->deskripsi = "Merupakan salah satu jenis nota custom.";
    } elseif ($produk == '2') {
        $data->nama = 'Nota Custom 2';
        $data->kategori = "Nota";
        $data->gambar = 'assets/images/nota/min/webp/nota-custom-2.webp';
        $data->deskripsi = "Merupakan salah satu jenis nota custom.";
    } elseif ($produk == '3') {
        $data->nama = 'Nota Custom 3';
        $data->kategori = "Nota";
        $data->gambar = 'assets/images/nota/min/webp/nota-custom-3.webp';
        $data->deskripsi = "Merupakan salah satu jenis nota custom.";
    } elseif ($produk == '4') {
        $data->nama = 'Nota Custom 4';
        $data->kategori = "Nota";
        $data->gambar = 'assets/images/nota/min/webp/nota-custom-4.webp';
        $data->deskripsi = "Merupakan salah satu jenis nota custom.";
    } elseif ($produk == '5') {
        $data->nama = 'Nota Custom 5';
        $data->kategori = "Nota";
        $data->gambar = 'assets/images/nota/min/webp/nota-custom-5.webp';
        $data->deskripsi = "Merupakan salah satu jenis nota custom.";
    } elseif ($produk == '6') {
        $data->nama = 'Nota Custom 6';
        $data->kategori = "Nota";
        $data->gambar = 'assets/images/nota/min/webp/nota-custom-6.webp';
        $data->deskripsi = "Merupakan salah satu jenis nota custom.";
    } elseif ($produk == '7') {
        $data->nama = 'Nota Custom 7';
        $data->kategori = "Nota";
        $data->gambar = 'assets/images/nota/min/webp/nota-custom-7.webp';
        $data->deskripsi = "Merupakan salah satu jenis nota custom.";
    } elseif ($produk == '8') {
        $data->nama = 'Nota Custom 8';
        $data->kategori = "Nota";
        $data->gambar = 'assets/images/nota/min/webp/nota-custom-8.webp';
        $data->deskripsi = "Merupakan salah satu jenis nota custom.";
    } elseif ($produk == '9') {
        $data->nama = 'Nota Custom 9';
        $data->kategori = "Nota";
        $data->gambar = 'assets/images/nota/min/webp/nota-custom-9.webp';
        $data->deskripsi = "Merupakan salah satu jenis nota custom.";
    } elseif ($produk == '10') {
        $data->nama = 'Nota Custom 10';
        $data->kategori = "Nota";
        $data->gambar = 'assets/images/nota/min/webp/nota-custom-10.webp';
        $data->deskripsi = "Merupakan salah satu jenis nota custom.";
    }

    return view('produk-detail', compact('data'));
})->name('product.nota-detail'); // resources/views/products/nota-detail.blade.php

// per produk: yasin
Route::get('/yasin/{produk}', function ($produk) {
    $data = (object) [
        'url' => 'yasin',
        'judul' => "Yasin Custom",
        'kategori' => "Yasin",
    ];

    if ($produk == '1') {
        $data->nama = "Yasin 1";
        $data->kategori = "Yasin";
        $data->gambar = 'assets/images/yasin/min/webp/yasin-1.webp';
        $data->deskripsi = "Merupakan salah satu jenis yasin custom.";
    } elseif ($produk == '2') {
        $data->nama = 'Yasin 2';
        $data->kategori = "Yasin";
        $data->gambar = 'assets/images/yasin/min/webp/yasin-2.webp';
        $data->deskripsi = "Merupakan salah satu jenis yasin custom.";
    } elseif ($produk == '3') {
        $data->nama = 'Yasin 3';
        $data->kategori = "Yasin";
        $data->gambar = 'assets/images/yasin/min/webp/yasin-3.webp';
        $data->deskripsi = "Merupakan salah satu jenis yasin custom.";
    } elseif ($produk == '4') {
        $data->nama = 'Yasin 4';
        $data->kategori = "Yasin";
        $data->gambar = 'assets/images/yasin/min/webp/yasin-4.webp';
        $data->deskripsi = "Merupakan salah satu jenis yasin custom.";
    } elseif ($produk == '5') {
        $data->nama = 'Yasin 5';
        $data->kategori = "Yasin";
        $data->gambar = 'assets/images/yasin/min/webp/yasin-5.webp';
        $data->deskripsi = "Merupakan salah satu jenis yasin custom.";
    } elseif ($produk == '6') {
        $data->nama = 'Yasin 6';
        $data->kategori = "Yasin";
        $data->gambar = 'assets/images/yasin/min/webp/yasin-6.webp';
        $data->deskripsi = "Merupakan salah satu jenis yasin custom.";
    } elseif ($produk == '7') {
        $data->nama = 'Yasin 7';
        $data->kategori = "Yasin";
        $data->gambar = 'assets/images/yasin/min/webp/yasin-7.webp';
        $data->deskripsi = "Merupakan salah satu jenis yasin custom.";
    } elseif ($produk == '8') {
        $data->nama = 'Yasin 8';
        $data->kategori = "Yasin";
        $data->gambar = 'assets/images/yasin/min/webp/yasin-8.webp';
        $data->deskripsi = "Merupakan salah satu jenis yasin custom.";
    } elseif ($produk == '9') {
        $data->nama = 'Yasin 9';
        $data->kategori = "Yasin";
        $data->gambar = 'assets/images/yasin/min/webp/yasin-9.webp';
        $data->deskripsi = "Merupakan salah satu jenis yasin custom.";
    } elseif ($produk == '10') {
        $data->nama = 'Yasin 10';
        $data->kategori = "Yasin";
        $data->gambar = 'assets/images/yasin/min/webp/yasin-10.webp';
        $data->deskripsi = "Merupakan salah satu jenis yasin custom.";
    } elseif ($produk == '11') {
        $data->nama = 'Yasin 11';
        $data->kategori = "Yasin";
        $data->gambar = 'assets/images/yasin/min/webp/yasin-11.webp';
        $data->deskripsi = "Merupakan salah satu jenis yasin custom.";
    } elseif ($produk == '12') {
        $data->nama = 'Yasin 12';
        $data->kategori = "Yasin";
        $data->gambar = 'assets/images/yasin/min/webp/yasin-12.webp';
        $data->deskripsi = "Merupakan salah satu jenis yasin custom.";
    } elseif ($produk == '13') {
        $data->nama = 'Yasin 13';
        $data->kategori = "Yasin";
        $data->gambar = 'assets/images/yasin/min/webp/yasin-13.webp';
        $data->deskripsi = "Merupakan salah satu jenis yasin custom.";
    } elseif ($produk == '14') {
        $data->nama = 'Yasin 14';
        $data->kategori = "Yasin";
        $data->gambar = 'assets/images/yasin/min/webp/yasin-14.webp';
        $data->deskripsi = "Merupakan salah satu jenis yasin custom.";
    } elseif ($produk == '15') {
        $data->nama = 'Yasin 15';
        $data->kategori = "Yasin";
        $data->gambar = 'assets/images/yasin/min/webp/yasin-15.webp';
        $data->deskripsi = "Merupakan salah satu jenis yasin custom.";
    }

    return view('produk-detail', compact('data'));
})->name('product.yasin-detail'); // resources/views/products/yasin-detail.blade.php

// per produk: kitab pesantren
Route::get('/kitab-pesantren/{produk}', function ($produk) {
    $data = (object) [
        'url' => 'kitab-pesantren',
        'judul' => "Kitab Pesantren",
        'kategori' => "Kitab Pesantren",
    ];

    if ($produk == '1') {
        $data->nama = "Kitab Ahlussunnah";
        $data->kategori = "Kitab Pesantren";
        $data->gambar = 'assets/images/kitab-pesantren/min/webp/ahlussunnah.webp';
        $data->deskripsi = "Merupakan salah satu kitab Soft Cover dengan ukuran tanggung.";
    } elseif ($produk == '2') {
        $data->nama = 'Kitab Zadul Ajyal';
        $data->kategori = "Kitab Pesantren";
        $data->gambar = 'assets/images/kitab-pesantren/min/webp/zadul.webp';
        $data->deskripsi = "Merupakan salah satu kitab Soft Cover dengan ukuran tanggung.";
    } elseif ($produk == '3') {
        $data->nama = 'Kitab Alfiyah Ibnu Malik';
        $data->kategori = "Kitab Pesantren";
        $data->gambar = 'assets/images/kitab-pesantren/min/webp/alfiyah.webp';
        $data->deskripsi = "Merupakan salah satu kitab Matan Soft Cover dengan ukuran tanggung.";
    } elseif ($produk == '3') {
        $data->nama = 'Kitab Jurumiyyah';
        $data->kategori = "Kitab Pesantren";
        $data->gambar = 'assets/images/kitab-pesantren/min/webp/jurumiyah.webp';
        $data->deskripsi = "Merupakan salah satu kitab Matan Soft Cover dengan ukuran tanggung.";
    } elseif ($produk == '5') {
        $data->nama = 'Kitab Sulam Taufiq';
        $data->kategori = "Kitab Pesantren";
        $data->gambar = 'assets/images/kitab-pesantren/min/webp/sulam.webp';
        $data->deskripsi = "Merupakan salah satu kitab Matan Soft Cover dengan ukuran tanggung.";
    } elseif ($produk == '6') {
        $data->nama = 'Kitab Arbain Nawawiyah';
        $data->kategori = "Kitab Pesantren";
        $data->gambar = 'assets/images/kitab-pesantren/min/webp/talim.webp';
        $data->deskripsi = "Merupakan salah satu kitab Matan Soft Cover dengan ukuran tanggung.";
    }

    return view('produk-detail', compact('data'));
})->name('product.kitab-pesantren-detail'); // resources/views/products/kitab-pesantren-detail.blade.php

// per produk: brosur
Route::get('/brosur/{produk}', function ($produk) {
    $data = (object) [
        'url' => 'brosur',
        'judul' => "Brosur Custom",
        'kategori' => "Brosur",
    ];

    if ($produk == '1') {
        $data->nama = "Brosur Custom 1";
        $data->kategori = "Brosur";
        $data->gambar = 'assets/images/brosur/min/webp/brosur-custom-1.webp';
        $data->deskripsi = "Merupakan salah satu jenis brosur custom.";
    } elseif ($produk == '2') {
        $data->nama = 'Brosur Custom 2';
        $data->kategori = "Brosur";
        $data->gambar = 'assets/images/brosur/min/webp/brosur-custom-2.webp';
        $data->deskripsi = "Merupakan salah satu jenis brosur custom.";
    } elseif ($produk == '3') {
        $data->nama = 'Brosur Custom 3';
        $data->kategori = "Brosur";
        $data->gambar = 'assets/images/brosur/min/webp/brosur-custom-3.webp';
        $data->deskripsi = "Merupakan salah satu jenis brosur custom.";
    } elseif ($produk == '4') {
        $data->nama = 'Brosur Custom 4';
        $data->kategori = "Brosur";
        $data->gambar = 'assets/images/brosur/min/webp/brosur-custom-4.webp';
        $data->deskripsi = "Merupakan salah satu jenis brosur custom.";
    }

    return view('produk-detail', compact('data'));
})->name('product.brosur-detail'); // resources/views/products/brosur-detail.blade.php

// per produk: kop surat
Route::get('/kop-surat/{produk}', function ($produk) {
    $data = (object) [
        'url' => 'kop-surat',
        'judul' => "Kop Surat",
        'kategori' => "Kop Surat",
    ];

    if ($produk == '1') {
        $data->nama = "Kop Surat 1";
        $data->kategori = "Kop Surat";
        $data->gambar = 'assets/images/kop-surat/min/webp/kop-surat-1.webp';
        $data->deskripsi = "Merupakan salah satu jenis kop surat.";
    }

    return view('produk-detail', compact('data'));
})->name('product.kop-surat-detail'); // resources/views/products/kop-surat-detail.blade.php
