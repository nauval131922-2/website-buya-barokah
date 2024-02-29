@extends('master')

@section('content')

    <body>

        <main id="main">

            <!-- ======= Breadcrumbs ======= -->
            <section id="breadcrumbs" class="breadcrumbs">
                <div class="container">

                    <div class="d-flex justify-content-between align-items-center">
                        <h2>Jasa Cetak</h2>
                        <ol>
                            {{-- <li><a href="index.html">Home</a></li> --}}
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Jasa Cetak</li>
                        </ol>
                    </div>

                </div>
            </section><!-- End Breadcrumbs -->

            <!-- ======= Portfolio Details Section ======= -->
            {{-- <section id="portfolio-details" class="portfolio-details"> --}}
            <section id="blog" class="blog">
                <div class="container" data-aos="fade-up">

                    <div class="row">

                        <div class="col-lg-12 entries">

                            <article class="entry entry-single" data-aos="fade-up">

                                <div class="entry-img">
                                    <img src="{{ asset($data->jasa_cetak_gambar) }}" alt="" class="img-fluid">
                                </div>

                                <h2 class="entry-title">
                                    <a href="javascript:void(0)">Ongkos Cetak di Percetakan Buya Barokah</a>
                                </h2>



                                <div class="entry-content">
                                    <p>
                                        Percetakan Buya Barokah Kudus adalah perusahaan yang menyediakan jasa cetak untuk
                                        berbagai
                                        kebutuhan bisnis dan personal Anda. Dengan pengalaman lebih dari 10 tahun dalam
                                        industri ini,
                                        percetakan ini telah menjadi pilihan utama bagi banyak pelanggan di Kudus dan
                                        sekitarnya.
                                    </p>

                                    <p>
                                        Kami menawarkan berbagai jenis layanan cetak yang dapat disesuaikan dengan kebutuhan
                                        Anda, mulai
                                        dari cetak digital hingga cetak offset, dari brosur hingga katalog produk, dan dari
                                        kartu nama
                                        hingga undangan pernikahan. Kami juga menyediakan jasa desain grafis yang kreatif
                                        dan
                                        profesional untuk membantu Anda membuat desain yang sesuai dengan merek atau acara
                                        Anda.
                                    </p>

                                    <p>
                                        Kami mengutamakan kepuasan pelanggan dan selalu siap membantu Anda dari awal hingga
                                        akhir proses
                                        cetak. Kami juga menawarkan harga yang terjangkau dan kompetitif, tanpa mengorbankan
                                        kualitas
                                        cetak.
                                    </p>

                                    <ol>
                                        <h5>
                                            <li>Ongkos Mesin Cetak Heidelberg Speedmaster SM-102</li>
                                        </h5>
                                        Partner Ongkos Cetak Anda Ukuran s.d. Plano 70x100cm. Jasa ongkos cetak berkualitas,
                                        berpengalaman, dan terjangkau.
                                        <br>
                                        <h6 id="harga-jasa-cetak">1.240.000 /Set Untuk 3.000 druck</h6>
                                        <ul>
                                            <li>Ukuran cetak s.d. 70 x 100 cm.</li>
                                            <li>Grammatur 85 ~ 400 gsm.</li>
                                            <li>Sudah 4 warna.</li>
                                            <li>Kecepatan cetak s.d. 10.000 druck /jam (kecepatan tergantung konten
                                                cetaknya).</li>
                                            <li>Harga belum termasuk pembuatan plat cetak CTP.</li>
                                            <li>Harga berlaku untuk pekerjaan standard. Pekerjaan dengan tingkat kesulitan
                                                tinggi atau
                                                warna blok, dihitung berbeda.</li>
                                        </ul>

                                        <br>

                                        <h5>
                                            <li>Ongkos Mesin Cetak OLIVER 72</li>
                                        </h5>
                                        Partner Ongkos Cetak Anda Ukuran 50x70cm. Jasa ongkos cetak berkualitas,
                                        berpengalaman, dan
                                        terjangkau.
                                        <br>
                                        <h6 id="harga-jasa-cetak">Rp. 85.000 /Plat Untuk 1.000 druck</h6>
                                        <ul>
                                            <li>Lebih dari 1.000 dreg dengan plat sama di hitung Rp. 45/druck</li>
                                            <li>Ukuran cetak s.d. 50 x 70 cm.</li>
                                            <li>Grammatur 85 ~ 400 gsm.</li>
                                            <li>Jika Cetakan C,M,Y,K berarti kelipatan di X4.</li>
                                            <li>Kecepatan cetak s.d. 7.000 druck /jam (kecepatan tergantung konten
                                                cetaknya).</li>
                                            <li>Harga belum termasuk pembuatan plat cetak CTP.</li>
                                            <li>Harga berlaku untuk pekerjaan standard. Pekerjaan dengan tingkat kesulitan
                                                tinggi atau
                                                warna blok, dihitung berbeda.</li>
                                        </ul>

                                        <br>

                                        <h5>
                                            <li>Ongkos Mesin Cetak OLIVER 72E</li>
                                        </h5>
                                        Partner Ongkos Cetak Anda Ukuran 50x70cm. Jasa ongkos cetak berkualitas,
                                        berpengalaman, dan
                                        terjangkau.
                                        <br>
                                        <h6 id="harga-jasa-cetak">Rp. 85.000 /Plat Untuk 1.000 druck</h6>
                                        <ul>
                                            <li>Lebih dari 1.000 dreg dengan plat sama di hitung Rp. 45/druck</li>
                                            <li>Ukuran cetak s.d. 50 x 70 cm.</li>
                                            <li>Grammatur 85 ~ 400 gsm.</li>
                                            <li>Jika Cetakan C,M,Y,K berarti kelipatan di X4.</li>
                                            <li>Kecepatan cetak s.d. 7.000 druck /jam (kecepatan tergantung konten
                                                cetaknya).</li>
                                            <li>Harga belum termasuk pembuatan plat cetak CTP.</li>
                                            <li>Harga berlaku untuk pekerjaan standard. Pekerjaan dengan tingkat kesulitan
                                                tinggi atau
                                                warna blok, dihitung berbeda.</li>
                                        </ul>

                                        <br>

                                        <h5>
                                            <li>Ongkos Mesin Cetak OLIVER 272</li>
                                        </h5>
                                        Partner Ongkos Cetak Anda Ukuran 50x70cm. Jasa ongkos cetak berkualitas,
                                        berpengalaman, dan
                                        terjangkau.
                                        <br>
                                        <h6 id="harga-jasa-cetak">Rp. 85.000 /Plat Untuk 1.000 druck</h6>
                                        <ul>
                                            <li>Lebih dari 1.000 dreg dengan plat sama di hitung Rp. 45/druck</li>
                                            <li>Ukuran cetak s.d. 50 x 70 cm.</li>
                                            <li>Grammatur 85 ~ 400 gsm.</li>
                                            <li>Jika Cetakan C,M,Y,K berarti kelipatan di X4.</li>
                                            <li>Kecepatan cetak s.d. 7.000 druck /jam (kecepatan tergantung konten
                                                cetaknya).</li>
                                            <li>Harga belum termasuk pembuatan plat cetak CTP.</li>
                                            <li>Harga berlaku untuk pekerjaan standard. Pekerjaan dengan tingkat kesulitan
                                                tinggi atau
                                                warna blok, dihitung berbeda.</li>
                                        </ul>

                                        <br>

                                        <h5>
                                            <li>Ongkos Mesin KORS 72</li>
                                        </h5>
                                        Partner Ongkos Cetak Anda Ukuran 50x70cm. Jasa ongkos cetak berkualitas,
                                        berpengalaman, dan
                                        terjangkau.
                                        <br>
                                        <h6 id="harga-jasa-cetak">Rp. 85.000 /Plat Untuk 1.000 druck</h6>
                                        <ul>
                                            <li>Lebih dari 1.000 dreg dengan plat sama di hitung Rp. 45/druck</li>
                                            <li>Ukuran cetak s.d. 50 x 70 cm.</li>
                                            <li>Grammatur 85 ~ 400 gsm.</li>
                                            <li>Jika Cetakan C,M,Y,K berarti kelipatan di X4.</li>
                                            <li>Kecepatan cetak s.d. 7.000 druck /jam (kecepatan tergantung konten
                                                cetaknya).</li>
                                            <li>Harga belum termasuk pembuatan plat cetak CTP.</li>
                                            <li>Harga berlaku untuk pekerjaan standard. Pekerjaan dengan tingkat kesulitan
                                                tinggi atau
                                                warna blok, dihitung berbeda.</li>
                                        </ul>

                                        <br>

                                        <h5>
                                            <li>Ongkos Mesin Ryobi 500 N</li>
                                        </h5>
                                        Partner Ongkos Cetak Anda Ukuran 21,5x33cm. Jasa ongkos cetak berkualitas,
                                        berpengalaman, dan
                                        terjangkau.
                                        <br>
                                        <h6 id="harga-jasa-cetak">Rp. 8.000 /Plat Untuk 500 druck</h6>
                                        <ul>
                                            <li>Ukuran cetak 21,5 x 33 cm.</li>
                                            <li>Grammatur 65 ~ 120 gsm.</li>
                                            <li>Kecepatan cetak s.d. 6.000 druck /jam (kecepatan tergantung konten
                                                cetaknya).</li>
                                            <li>Harga belum termasuk pembuatan plat cetak CTP.</li>
                                            <li>Harga berlaku untuk pekerjaan standard. Pekerjaan dengan tingkat kesulitan
                                                tinggi atau
                                                warna blok, dihitung berbeda.</li>
                                        </ul>

                                        <br>

                                        <h5>
                                            <li>Jasa Lainnya</li>
                                        </h5>
                                        Percetakan Buya Barokah selain melayani ongkos cetak juga melayani jasa finishing
                                        antara lain
                                        sebagai berikut:
                                        <div class="accordion custom-accordion" id="accordionExample">
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-block text-left" type="button"
                                                            data-toggle="collapse" data-target="#collapseOne"
                                                            aria-expanded="true" aria-controls="collapseOne">
                                                            Jasa Mesin Potong Polar QZ
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        Mesin yang di gunakan untuk memotong dengan ukuran 100 cm.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-block text-left" type="button"
                                                            data-toggle="collapse" data-target="#collapseTwo"
                                                            aria-expanded="true" aria-controls="collapseTwo">
                                                            Jasa Mesin Hard Cover
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingOne"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        Melayani Jasa Hard Cover Buku.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-block text-left" type="button"
                                                            data-toggle="collapse" data-target="#collapseThree"
                                                            aria-expanded="true" aria-controls="collapseThree">
                                                            Jasa Mesin Bending
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapseThree" class="collapse" aria-labelledby="headingOne"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        Melayani Jasa Bending Buku.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-block text-left" type="button"
                                                            data-toggle="collapse" data-target="#collapseFour"
                                                            aria-expanded="true" aria-controls="collapseFour">
                                                            Jasa Mesin Laminasi Glossy/Doff
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapseFour" class="collapse" aria-labelledby="headingOne"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        Melayani Jasa Laminasi Doff maupun Glossy.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-block text-left" type="button"
                                                            data-toggle="collapse" data-target="#collapseFive"
                                                            aria-expanded="true" aria-controls="collapseFive">
                                                            Jasa UV Varnish
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapseFive" class="collapse" aria-labelledby="headingOne"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        Melayani Jasa UV Varnish Cover Buku.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-block text-left" type="button"
                                                            data-toggle="collapse" data-target="#collapseSix"
                                                            aria-expanded="true" aria-controls="collapseSix">
                                                            Jasa SPOT UV
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapseSix" class="collapse" aria-labelledby="headingOne"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        Melayani Jasa Spot UV Cover.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </ol>


























                                </div>


                            </article><!-- End blog entry -->

                        </div><!-- End blog entries list -->

                    </div>





                </div>
            </section><!-- End Portfolio Details Section -->

        </main><!-- End #main -->

    </body>

@endsection
