@extends('master')

@section('content')

    <body>

        <main id="main">

            <!-- ======= Breadcrumbs ======= -->
            <section id="breadcrumbs" class="breadcrumbs">
                <div class="container">

                    <div class="d-flex justify-content-between align-items-center">
                        <h2>Latar Belakang</h2>
                        <ol>
                            {{-- <li><a href="index.html">Home</a></li> --}}
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Latar Belakang</li>
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
                                    <img src="{{ asset($data->latar_belakang_gambar) }}" alt="" class="img-fluid">
                                </div>

                                <h2 class="entry-title">
                                    <a href="javascript:void(0)">Profil dan Sejarah</a>
                                </h2>



                                <div class="entry-content">
                                    <p>
                                        Percetakan Buya Barokah berdiri pada tahun 2002, merupakan sebuah perusahaan
                                        manufaktur yang lahir dibawah naungan Yayasan Arwaniyah Kudus yang beralamat di Jl.
                                        Raya Bae Gondangmanis Kec. Bae Kab. Kudus. Perusahaan ini bergerak dalam bidang
                                        percetakan yang menyuplai beberapa kitab untuk keperluan pengajaran pondok
                                        pesantren.
                                    </p>

                                    <p>
                                        Selain itu juga menyediakan berbagai jenis layanan cetak, antara lain cetak offset,
                                        cetak digital, buku, brosur, kartu nama, dan masih banyak lagi. Perusahaan ini
                                        menggunakan teknologi percetakan terbaru dan mesin-mesin cetak berkualitas untuk
                                        memastikan kualitas cetakan yang optimal.
                                    </p>

                                    <blockquote>
                                        <i class="icofont-quote-left quote-left"></i>
                                        <p>
                                            Percetakan Buya Barokah mempunyai filosofi hadir untuk pengembangan dakwah,
                                            dengan mencetak buku atau kitab untuk menunjang keberhasilan dakwah di pondok
                                            pesantren. Ini tak lepas dari predikat kota Kudus yang dijuluki sebagai kota
                                            santri, dimana banyak sekali pondok pesantren yang berdiri di kota Kudus.
                                        </p>
                                        <i class="las la-quote-right quote-right"></i>
                                        <i class="icofont-quote-right quote-right"></i>
                                    </blockquote>

                                    <h5>
                                        Keunggulan
                                    </h5>
                                    <ul>
                                        <li>Telah beroperasi selama bertahun-tahun dan memiliki pengalaman yang luas dalam
                                            bidang percetakan.</li>
                                        <li>Telah beroperasi selama bertahun-tahun dan memiliki pengalaman yang luas dalam
                                            bidang percetakan.</li>
                                        <li>Mengutamakan kepuasan pelanggan dan berkomitmen untuk memberikan produk dan
                                            layanan yang terbaik.
                                        </li>
                                        <li>Memiliki tim layanan pelanggan yang profesional dan responsif yang siap membantu
                                            pelanggan dengan kebutuhan mereka.
                                        </li>
                                    </ul>
                                    <p>
                                        Percetakan Buya Barokah memberikan solusi percetakan yang inovatif dan terbaik bagi
                                        pelanggan.
                                    </p>
                                    <div class="accordion custom-accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-block text-left" type="button"
                                                        data-toggle="collapse" data-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        Kualitas Produk yang Tinggi
                                                    </button>
                                                </h2>
                                            </div>

                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p>Percetakan Buya Barokah menggunakan bahan-bahan berkualitas tinggi dan
                                                    teknologi cetak modern untuk memastikan kualitas cetakan yang tinggi.</p>

                                                    <p>Selain itu, perusahaan juga memiliki sistem kontrol kualitas yang ketat
                                                    untuk memastikan setiap produk yang dihasilkan memenuhi standar kualitas
                                                    yang tinggi.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-block text-left" type="button"
                                                        data-toggle="collapse" data-target="#collapseTwo"
                                                        aria-expanded="true" aria-controls="collapseTwo">
                                                        Berbagain Pilihan Produk dan Layanan
                                                    </button>
                                                </h2>
                                            </div>

                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p>Percetakan Buya Barokah menawarkan berbagai pilihan produk dan layanan percetakan, seperti cetak offset, cetak digital, buku, kemasan, dan lain-lain.</p>

                                                    <p>Dengan begitu, pelanggan memiliki banyak pilihan untuk memilih produk dan layanan yang sesuai dengan kebutuhan mereka.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-block text-left" type="button"
                                                        data-toggle="collapse" data-target="#collapseThree"
                                                        aria-expanded="true" aria-controls="collapseThree">
                                                        Fleksiibilitas Produksi
                                                    </button>
                                                </h2>
                                            </div>

                                            <div id="collapseThree" class="collapse" aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p>Percetakan Buya Barokah memiliki fasilitas produksi yang fleksibel dan dapat menyesuaikan dengan permintaan pelanggan.</p>

                                                    <p>Perusahaan dapat menerima pesanan cetak dengan jumlah kecil maupun besar dan dapat menyelesaikan pesanan dengan waktu yang singkat.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-block text-left" type="button"
                                                        data-toggle="collapse" data-target="#collapseFour"
                                                        aria-expanded="true" aria-controls="collapseFour">
                                                        Harga Kompetitif
                                                    </button>
                                                </h2>
                                            </div>

                                            <div id="collapseFour" class="collapse" aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p>Percetakan Buya Barokah menawarkan harga yang kompetitif untuk produk dan layanan yang ditawarkan.</p>

                                                    <p>Harga yang ditawarkan bersaing dengan perusahaan percetakan lain di Indonesia, namun dengan kualitas yang lebih baik.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-block text-left" type="button"
                                                        data-toggle="collapse" data-target="#collapseFive"
                                                        aria-expanded="true" aria-controls="collapseFive">
                                                        Layanan Pelanggan yang Cepat dan Responsif
                                                    </button>
                                                </h2>
                                            </div>

                                            <div id="collapseFive" class="collapse" aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p>Percetakan Buya Barokah memiliki tim layanan pelanggan yang profesional dan responsif untuk menjawab pertanyaan atau permintaan pelanggan.</p>

                                                    <p>Perusahaan berkomitmen untuk memberikan layanan yang cepat dan responsif untuk memastikan kepuasan pelanggan.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </article><!-- End blog entry -->

                        </div><!-- End blog entries list -->

                    </div>





                </div>
            </section><!-- End Portfolio Details Section -->

        </main><!-- End #main -->

    </body>
@endsection
