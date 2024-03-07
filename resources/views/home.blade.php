@extends('master')

@section('content')
    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade carousel-slide" data-ride="carousel">
            {{-- <div class="carousel-inner" role="listbox"> --}}
            <div class="carousel-inner">
                <!-- Slide 1 -->

                {{-- <div class="carousel-item active" style="background-image: url(assets/images/slider/min/webp/slider-1.webp)"> --}}
                {{-- note: nama folder tidak bisa pakai spasi, semula slider ramadhan, saya ubah ke slider-ramadhan --}}
                <div class="carousel-item active"
                    style="background-image: url(assets/images/slider/slider-ramadhan/slider-1.jpg)">
                    {{-- <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <h2>Selamat Datang di <span>Percetakan Buya Barokah</span></h2>
                            <p>Percetakan Buya Barokah adalah Perusahaan yang bergerak dibawah naungan Yayasan Arwaniyyah
                                Melayani bermacam Jenis Produk cetak, Brosur, Majalah, Buku, Kalender, Undangan, Kartu Nama,
                                Nota dan produk cetak lainnya.</p>
                            <div class="text-center"><a href="javascript:void(0)" class="btn-get-started"
                                    onclick="smoothScroll('about-us')">Baca Selengkapnya</a></div>
                        </div>
                    </div> --}}
                </div>


                <div class="carousel-item slide-bg"
                    style="background-image: url(assets/images/slider/min/webp/slider-2.webp);">
                </div>
                <div class="carousel-item slide-bg"
                    style="background-image: url(assets/images/slider/min/webp/slider-3.webp);">
                </div>
                <div class="carousel-item slide-bg"
                    style="background-image: url(assets/images/slider/min/webp/slider-4.webp);">
                </div>
                <div class="carousel-item slide-bg"
                    style="background-image: url(assets/images/slider/min/webp/slider-5.webp);">
                </div>
                <div class="carousel-item slide-bg"
                    style="background-image: url(assets/images/slider/min/webp/slider-6.webp);">
                </div>
                <div class="carousel-item slide-bg"
                    style="background-image: url(assets/images/slider/min/webp/slider-7.webp);">
                </div>
                <div class="carousel-item slide-bg"
                    style="background-image: url(assets/images/slider/min/webp/slider-8.webp);">
                </div>


            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        </div>
    </section><!-- End Hero -->

    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about-us" class="about-us">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Mengubah Ide menjadi karya seni</strong></h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6" data-aos="fade-right">
                        <h2>Percetakan <br>Buya Barokah</h2>
                        <h3>Menawarkan solusi terbaik untuk mewujudkan semua ide kreatif dari konsumen menjadi produk
                            cetakan dengan kualitas terbaik.</h3>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
                        <p>
                            Percetakan Buya Barokah Perusahaan dibawah naungan Yayasan Arwaniyyah Melayani bermacam Jenis
                            Produk cetak,
                            Brosur, Majalah, Buku, Kalender, Undangan, Kartu Nama, Nota dan produk cetak lainnya.
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Buat Ide, Kirim Desain, Terima Cetak</li>
                            <li><i class="ri-check-double-line"></i> Kualitas, Jaringan Besar</li>
                            <li><i class="ri-check-double-line"></i> Kapasitas Kecil sampai Besar</li>
                        </ul>
                        <p class="font-italic">
                            Kami berkomitmen menghadirkan produk cetak terbaik dalam skala industri. Dengan dukungan
                            teknologi dan SDM berpengalaman,
                            kami siap memenuhi kebutuhan pasar dengan kualitas terbaik.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Produk Kami</h2>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            {{-- <li data-filter="*" class="filter-active">All</li> --}}
                            <li data-filter=".filter-all" class="filter-active">All</li>
                            <li data-filter=".filter-alquran">Al Qur'an</li>
                            <li data-filter=".filter-yanbua">Yanbu'a</li>
                            <li data-filter=".filter-buku">Buku</li>
                            <li data-filter=".filter-kalender">Kalender</li>
                            <li data-filter=".filter-nota">Nota</li>
                            <li data-filter=".filter-yasin">Yasin</li>
                            <li data-filter=".filter-kitab-pesantren">Kitab Pesantren</li>
                            <li data-filter=".filter-brosur">Brosur</li>
                            <li data-filter=".filter-kop-surat">Kop Surat</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-all">
                        <img src="{{ asset('assets\images\al-quran\min\webp\all.webp') }}" class="img-fluid"
                            alt="Al Quran All Thumbnail">
                        <div class="portfolio-info">
                            <h4>Al-Qur'an Al-Quddus</h4>
                            <a href="{{ asset('assets\images\al-quran\min\webp\all.webp') }}" data-gall="portfolioGallery"
                                class="venobox preview-link" title="Al-Qur'an Al-Quddus"><i class="bx bx-plus"></i></a>
                            <a href="{{ route('product.alquran') }}" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-all">
                        <img src="{{ asset('assets\images\yanbua\min\webp\all.webp') }}" class="img-fluid"
                            alt="Yanbua All Thumbnail">
                        <div class="portfolio-info">
                            <h4>Yanbu'a</h4>
                            {{-- <p>Al-Qur'an Al-Quddus</p> --}}
                            <a href="{{ asset('assets\images\yanbua\min\webp\all.webp') }}" data-gall="portfolioGallery"
                                class="venobox preview-link" title="Yanbu'a"><i class="bx bx-plus"></i></a>
                            <a href="{{ route('product.yanbua') }}" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-all">
                        <img src="{{ asset('assets\images\buku\min\webp\all.webp') }}" class="img-fluid"
                            alt="Buku All Thumbnail">
                        <div class="portfolio-info">
                            <h4>Buku</h4>
                            {{-- <p>Al-Qur'an Al-Quddus</p> --}}
                            <a href="{{ asset('assets\images\buku\min\webp\all.webp') }}" data-gall="portfolioGallery"
                                class="venobox preview-link" title="Buku"><i class="bx bx-plus"></i></a>
                            <a href="javascript:void(0)" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-all">
                        <img src="{{ asset('assets\images\kalender\min\webp\all.webp') }}" class="img-fluid"
                            alt="Kalender All Thumbnail">
                        <div class="portfolio-info">
                            <h4>Kalender</h4>
                            {{-- <p>Al-Qur'an Al-Quddus</p> --}}
                            <a href="{{ asset('assets\images\kalender\min\webp\all.webp') }}" data-gall="portfolioGallery"
                                class="venobox preview-link" title="Kalender"><i class="bx bx-plus"></i></a>
                            <a href="{{ route('product.kalender') }}" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-all">
                        <img src="{{ asset('assets\images\yasin\min\webp\all.webp') }}" class="img-fluid"
                            alt="Yasin All Thumbnail">
                        <div class="portfolio-info">
                            <h4>Yasin</h4>
                            <a href="{{ asset('assets\images\yasin\min\webp\all.webp') }}" data-gall="portfolioGallery"
                                class="venobox preview-link" title="Yasin"><i class="bx bx-plus"></i></a>
                            <a href="{{ route('product.yasin') }}" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-all">
                        <img src="{{ asset('assets\images\nota\min\webp\all.webp') }}" class="img-fluid"
                            alt="Nota All Thumbnail">
                        <div class="portfolio-info">
                            <h4>Nota Custom</h4>
                            <a href="{{ asset('assets\images\nota\min\webp\all.webp') }}" data-gall="portfolioGallery"
                                class="venobox preview-link" title="Nota Custom"><i class="bx bx-plus"></i></a>
                            <a href="{{ route('product.nota') }}" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-all">
                        <img src="{{ asset('assets\images\kitab-pesantren\min\webp\all.webp') }}" class="img-fluid"
                            alt="Kitab Pesantren All Thumbnail">
                        <div class="portfolio-info">
                            <h4>Kitab Pesantren</h4>
                            <a href="{{ asset('assets\images\kitab-pesantren\min\webp\all.webp') }}"
                                data-gall="portfolioGallery" class="venobox preview-link" title="Kitab Pesantren"><i
                                    class="bx bx-plus"></i></a>
                            <a href="{{ route('product.kitab-pesantren') }}" class="details-link"
                                title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-all">
                        <img src="{{ asset('assets\images\brosur\min\webp\all.webp') }}" class="img-fluid"
                            alt="Brosur All Thumbnail">
                        <div class="portfolio-info">
                            <h4>Brosur</h4>
                            <a href="{{ asset('assets\images\brosur\min\webp\all.webp') }}" data-gall="portfolioGallery"
                                class="venobox preview-link" title="Brosur"><i class="bx bx-plus"></i></a>
                            <a href="{{ route('product.brosur') }}" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-all">
                        <img src="{{ asset('assets\images\kop-surat\min\webp\all.webp') }}" class="img-fluid"
                            alt="Kop Surat All Thumbnail">
                        <div class="portfolio-info">
                            <h4>Kop Surat</h4>
                            <a href="{{ asset('assets\images\kop-surat\min\webp\all.webp') }}"
                                data-gall="portfolioGallery" class="venobox preview-link" title="Kop Surat"><i
                                    class="bx bx-plus"></i></a>
                            <a href="{{ route('product.kop-surat') }}" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    @for ($i = 1; $i <= 18; $i++)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-alquran hidden-div">
                            <img src="{{ $alquran->{$i . '_gambar'} }}" class="img-fluid"
                                alt="{{ $alquran->{$i . '_nama'} }}">
                            <div class="portfolio-info">
                                <h4>{{ $alquran->{$i . '_nama'} }}</h4>
                                <p>{{ $alquran->kategori }}</p>
                                <a href="{{ $alquran->{$i . '_gambar'} }}" data-gall="portfolioGallery"
                                    class="venobox preview-link" title="{{ $alquran->{$i . '_nama'} }}"><i
                                        class="bx bx-plus"></i></a>
                                <a href="{{ route('product.alquran-detail', ['produk' => $i]) }}" class="details-link"
                                    title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    @endfor

                    @for ($i = 1; $i <= 9; $i++)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-yanbua hidden-div">
                            <img src="{{ $yanbua->{$i . '_gambar'} }}" class="img-fluid"
                                alt="{{ $yanbua->{$i . '_nama'} }}">
                            <div class="portfolio-info">
                                <h4>{{ $yanbua->{$i . '_nama'} }}</h4>
                                <p>{{ $yanbua->kategori }}</p>
                                <a href="{{ $yanbua->{$i . '_gambar'} }}" data-gall="portfolioGallery"
                                    class="venobox preview-link" title="{{ $yanbua->{$i . '_nama'} }}"><i
                                        class="bx bx-plus"></i></a>
                                <a href="{{ route('product.yanbua-detail', ['produk' => $i]) }}" class="details-link"
                                    title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    @endfor

                    @for ($i = 1; $i <= 6; $i++)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-buku hidden-div">
                            <img src="{{ $buku->{$i . '_gambar'} }}" class="img-fluid"
                                alt="{{ $buku->{$i . '_nama'} }}">
                            <div class="portfolio-info">
                                <h4>{{ $buku->{$i . '_nama'} }}</h4>
                                <p>{{ $buku->kategori }}</p>
                                <a href="{{ $buku->{$i . '_gambar'} }}" data-gall="portfolioGallery"
                                    class="venobox preview-link" title="{{ $buku->{$i . '_nama'} }}"><i
                                        class="bx bx-plus"></i></a>
                                <a href="{{ route('product.buku-detail', ['produk' => $i]) }}" class="details-link"
                                    title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    @endfor



                    @for ($i = 1; $i <= 3; $i++)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-kalender hidden-div">
                            <img src="{{ $kalender->{$i . '_gambar'} }}" class="img-fluid"
                                alt="{{ $kalender->{$i . '_nama'} }}">
                            <div class="portfolio-info">
                                <h4>{{ $kalender->{$i . '_nama'} }}</h4>
                                <p>{{ $kalender->kategori }}</p>
                                <a href="{{ $kalender->{$i . '_gambar'} }}" data-gall="portfolioGallery"
                                    class="venobox preview-link" title="{{ $kalender->{$i . '_nama'} }}"><i
                                        class="bx bx-plus"></i></a>
                                <a href="{{ route('product.kalender-detail', ['produk' => $i]) }}" class="details-link"
                                    title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    @endfor


                    @for ($i = 1; $i <= 10; $i++)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-nota hidden-div">
                            <img src="{{ $nota->{$i . '_gambar'} }}" class="img-fluid"
                                alt="{{ $nota->{$i . '_nama'} }}">
                            <div class="portfolio-info">
                                <h4>{{ $nota->{$i . '_nama'} }}</h4>
                                <p>{{ $nota->kategori }}</p>
                                <a href="{{ $nota->{$i . '_gambar'} }}" data-gall="portfolioGallery"
                                    class="venobox preview-link" title="{{ $nota->{$i . '_nama'} }}"><i
                                        class="bx bx-plus"></i></a>
                                <a href="{{ route('product.nota-detail', ['produk' => $i]) }}" class="details-link"
                                    title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    @endfor


                    @for ($i = 1; $i <= 15; $i++)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-yasin hidden-div">
                            <img src="{{ $yasin->{$i . '_gambar'} }}" class="img-fluid"
                                alt="{{ $yasin->{$i . '_nama'} }}">
                            <div class="portfolio-info">
                                <h4>{{ $yasin->{$i . '_nama'} }}</h4>
                                <p>{{ $yasin->kategori }}</p>
                                <a href="{{ $yasin->{$i . '_gambar'} }}" data-gall="portfolioGallery"
                                    class="venobox preview-link" title="{{ $yasin->{$i . '_nama'} }}"><i
                                        class="bx bx-plus"></i></a>
                                <a href="{{ route('product.yasin-detail', ['produk' => $i]) }}" class="details-link"
                                    title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    @endfor



                    @for ($i = 1; $i <= 6; $i++)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-kitab-pesantren hidden-div">
                            <img src="{{ $kitab_pesantren->{$i . '_gambar'} }}" class="img-fluid"
                                alt="{{ $kitab_pesantren->{$i . '_nama'} }}">
                            <div class="portfolio-info">
                                <h4>{{ $kitab_pesantren->{$i . '_nama'} }}</h4>
                                <p>{{ $kitab_pesantren->kategori }}</p>
                                <a href="{{ $kitab_pesantren->{$i . '_gambar'} }}" data-gall="portfolioGallery"
                                    class="venobox preview-link" title="{{ $kitab_pesantren->{$i . '_nama'} }}"><i
                                        class="bx bx-plus"></i></a>
                                <a href="{{ route('product.kitab-pesantren-detail', ['produk' => $i]) }}"
                                    class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    @endfor



                    @for ($i = 1; $i <= 4; $i++)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-brosur hidden-div">
                            <img src="{{ $brosur->{$i . '_gambar'} }}" class="img-fluid"
                                alt="{{ $brosur->{$i . '_nama'} }}">
                            <div class="portfolio-info">
                                <h4>{{ $brosur->{$i . '_nama'} }}</h4>
                                <p>{{ $brosur->kategori }}</p>
                                <a href="{{ $brosur->{$i . '_gambar'} }}" data-gall="portfolioGallery"
                                    class="venobox preview-link" title="{{ $brosur->{$i . '_nama'} }}"><i
                                        class="bx bx-plus"></i></a>
                                <a href="{{ route('product.brosur-detail', ['produk' => $i]) }}" class="details-link"
                                    title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    @endfor

                    @for ($i = 1; $i <= 1; $i++)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-kop-surat hidden-div">
                            <img src="{{ $kop_surat->{$i . '_gambar'} }}" class="img-fluid"
                                alt="{{ $kop_surat->{$i . '_nama'} }}">
                            <div class="portfolio-info">
                                <h4>{{ $kop_surat->{$i . '_nama'} }}</h4>
                                <p>{{ $kop_surat->kategori }}</p>
                                <a href="{{ $kop_surat->{$i . '_gambar'} }}" data-gall="portfolioGallery"
                                    class="venobox preview-link" title="{{ $kop_surat->{$i . '_nama'} }}"><i
                                        class="bx bx-plus"></i></a>
                                <a href="{{ route('product.kop-surat-detail', ['produk' => $i]) }}" class="details-link"
                                    title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    @endfor




                </div>

            </div>
        </section><!-- End Portfolio Section -->


        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Mengapa Kami?</strong></h2>
                    <p>Pelayanan kami mancakup pembuatan buku, cetakan komersil hingga proyek besar pemerintah.
                        Kami senantiasa menjaga reputasi kami dengan memenuhi semua pesanan dengan kualitas dan tenggat
                        waktu terbaik sesuai dengan kesepakatan.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                    </path>
                                </svg>
                                <i class="bx bx-book-content"></i>
                            </div>
                            <h4><a href="">Produk Beragam</a></h4>
                            <p>Kami bisa memenuhi hampir seluruh kebutuhan cetak Anda. mulai dari kalender, buku, undangan,
                                nota dan masih banyak lainnya.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box iconbox-orange ">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426">
                                    </path>
                                </svg>
                                <i class="bx bx-file"></i>
                            </div>
                            <h4><a href="">Harga Kompetitif</a></h4>
                            <p>Kami memberikan dan menyarankan harga yang optimal serta harga yang bersaing di pasaran
                                dengan kualitas terbaik.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box iconbox-pink">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781">
                                    </path>
                                </svg>
                                <i class="bx bx-edit-alt"></i>
                            </div>
                            <h4><a href="">Belum Punya Desain?</a></h4>
                            <p>jangan khawatir, Kami siap bantu dengan alternatif desain sesuai keinginan dengan bagian
                                berpengalaman di bidangnya.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box iconbox-yellow">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813">
                                    </path>
                                </svg>
                                <i class="bx bx-package"></i>
                            </div>
                            <h4><a href="">Pengiriman Seluruh Indonesia</a></h4>
                            <p>Kami sudah berpengalaman mengirim barang ke seluruh Indonesia. Melalui ekspedisi yang telah
                                di sepakati kedua belah pihak.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box iconbox-red">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572">
                                    </path>
                                </svg>
                                <i class="bx bx-message-dots"></i>
                            </div>
                            <h4><a href="">Konsultasikan Pada Kami</a></h4>
                            <p>Kami siap memberikan masukan, saran untuk optimasi untuk kebutuhan cetak Anda, sehingga
                                menghasilkan produk yang memuaskan.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box iconbox-teal">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762">
                                    </path>
                                </svg>
                                <i class="bx bx-chat"></i>
                            </div>
                            <h4><a href="">Berbagai Media Komunikasi</a></h4>
                            <p>Melalui Whatsapp, e-mail, Telpon, dan juga media sosial seperti tiktok, instagram, facebook,
                                kami siap berkomunikasi dengan Anda.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->



        <!-- ======= Our Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>collaboration</h2>
                </div>


                <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="client-logo">
                            <img src="{{ asset('assets/images/kolaborasi/min/webp/yayasan.webp') }}" class="img-fluid"
                                alt="Logo Yayasan Arwaniyyah">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="client-logo">
                            <img src="{{ asset('assets/images/kolaborasi/min/webp/alquddus.webp') }}" class="img-fluid"
                                alt="Logo Al Quran Al Quddus">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="client-logo">
                            <img src="{{ asset('assets/images/kolaborasi/min/webp/yanbua.webp') }}" class="img-fluid"
                                alt="Logo Yanbua">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="client-logo">
                            <img src="{{ asset('assets/images/kolaborasi/min/webp/mth.webp') }}" class="img-fluid"
                                alt="Logo Mubarokatan Thoyyibah">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="client-logo">
                            <img src="{{ asset('assets/images/kolaborasi/min/webp/ptyq-remaja.webp') }}"
                                class="img-fluid" alt="Logo Pondok Tahfidh Yanbu'ul Quran Remaja">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="client-logo">
                            <img src="{{ asset('assets/images/kolaborasi/min/webp/ptyq-menawan.webp') }}"
                                class="img-fluid" alt="Logo Pondok Tahfidh Yanbu'ul Quran Menawan">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="client-logo">
                            <img src="{{ asset('assets/images/kolaborasi/min/webp/ptyq-pati.webp') }}" class="img-fluid"
                                alt="Logo Pondok Tahfidh Yanbu'ul Quran Boarding School 1 Pati (PTYQBS 1) Yayasan Asem Bungkuk">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="client-logo">
                            <img src="{{ asset('assets/images/kolaborasi/min/webp/ptyq-anak.webp') }}" class="img-fluid"
                                alt="Logo Pondok Tahfidh Yanbu'ul Quran Anak-anak">
                        </div>
                    </div>

                </div>


            </div>
        </section><!-- End Our Clients Section -->

    </main>

    <script>
        function smoothScroll(target) {
            var targetElement = document.getElementById(target);
            if (targetElement) {
                var offset = 70; // Sesuaikan dengan tinggi navbar Anda
                window.scroll({
                    behavior: 'smooth',
                    left: 0,
                    top: targetElement.offsetTop - offset
                });
            }
        }
    </script>
@endsection
