@extends('master')

@section('content')

    <body>

        <main id="main">

            <!-- ======= Breadcrumbs ======= -->
            <section id="breadcrumbs" class="breadcrumbs">
                <div class="container">

                    <div class="d-flex justify-content-between align-items-center">
                        <h2>Visi Misi dan Tujuan</h2>
                        <ol>
                            {{-- <li><a href="index.html">Home</a></li> --}}
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Visi Misi dan Tujuan</li>
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
                                    <img src="{{ asset($data->visi_misi_gambar) }}" alt="" class="img-fluid">
                                </div>

                                <h2 class="entry-title">
                                    <a href="javascript:void(0)">Visi Misi dan Tujuan</a>
                                </h2>



                                <div class="entry-content">
                                    <p>
                                        Percetakan Buya Barokah adalah sebuah perusahaan percetakan yang berdiri di bawah
                                        naungan Yayasan Arwaniyyah. Sebagai perusahaan yang bernaung di bawah yayasan yang
                                        memiliki latar belakang pondok pesantren, Percetakan Buya Barokah memiliki visi dan
                                        misi yang berorientasi pada pelayanan yang berkualitas tinggi serta nilai-nilai
                                        keagamaan yang kuat.
                                    </p>



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

                                    <section id="blog" class="blog-visi section-bg"
                                        style="padding: 40px 20px; margin: 10px 0">
                                        <div class="container" data-aos="fade-up">
                                            <div class="row content">
                                                <div class="col-lg-12 pt-lg-0 blog-visi-tujuan" data-aos="fade-up"
                                                    style="text-align: center">
                                                    <div style="">
                                                        <h4 style="font-weight: bold">Visi</h4>
                                                    </div>
                                                    <span style="line-height: 30px; font-style: italic;font-weight: 600">
                                                        <p>Terwujudnya usaha percetakan di lingkungan Yayasan Arwaniyyah
                                                            berdasarkan
                                                            nilai-nilai Islam Ahlus Sunnah Wal Jamaah dengan semangat sosial
                                                            ekonomi.</p>
                                                    </span>
                                                </div>
                                                <div class="col-lg-6 pt-lg-0" data-aos="fade-right"
                                                    style="margin-top: 50px">
                                                    <div style="">
                                                        <h4 style="font-weight: bold">Misi</h4>
                                                    </div>
                                                    <div style="margin-left: 20px">
                                                        <span style="font-weight: 600">
                                                            <ul id="visimisi">
                                                                {{-- {!! $profil_sekolah->misi !!} --}}
                                                                <li>Memenuhi kebutuhan produk percetakan terutama Al Qur'an,
                                                                    Yanbu’a, dan Kitab-Kitab pondok pesantren, serta produk
                                                                    percetakan umum lainnya.</li>
                                                                <li>Menciptakan pola pengelolaan bisnis berbasis syariah
                                                                    yang produktif, efektif, dan efisien.</li>
                                                                <li>Menciptakan sistem administrasi dan pencatatan yang
                                                                    memenuhi prinsip akuntabilitas dan transparansi.</li>
                                                            </ul>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 pt-lg-0" data-aos="fade-left" style="margin-top: 50px">
                                                    <div style="">
                                                        <h4 style="font-weight: bold">Tujuan</h4>
                                                    </div>
                                                    <div style="margin-left: 20px">
                                                        <span style="font-weight: 600">
                                                            <ul id="visimisi">
                                                                Meningkatkan kualitas dan kuantitas produk yang mendukung
                                                                kebutuhan pondok pesantren dan masyarakat umum.
                                                            </ul>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </section><!-- End Our Team Section -->

                                    <p>Dalam menjalankan visi, misi dan tujuan tersebut, Percetakan Buya Barokah akan terus
                                        berupaya meningkatkan kualitas produk dan layanan, mengembangkan produk yang
                                        inovatif, serta menjaga kepercayaan dan kepuasan pelanggan. Dengan demikian,
                                        Percetakan Buya Barokah akan terus berkontribusi positif bagi masyarakat dan
                                        lingkungan sekitar.</p>

                                    <br>
                                    <h5>Lokasi Percetakan Buya Barokah Kudus</h5>
                                    <p>Untuk lokasi bisa dicek di google map berikut:</p>

                                    <div class="map-section">
                                        <div class="mapouter">
                                            <div class="gmap_canvas">
                                                {{-- <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no"
                                                    marginheight="0" marginwidth="0"
                                                    src="https://maps.google.com/maps?width=650&amp;height=400&amp;hl=en&amp;q=mi nu nurul ulum kedopok&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                                                    href="https://embedmapgenerator.com">embed code google maps</a> --}}
                                                {{-- <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no"
                                                    marginheight="0" marginwidth="0"
                                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7923.9698883228175!2d110.866978!3d-6.771686000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70db110c303993%3A0x4c5a12c409659e4c!2sPT.%20Buya%20Barokah%20Kudus!5e0!3m2!1sid!2sid!4v1704859295789!5m2!1sid!2sid"
                                                    style="border:0;" allowfullscreen="" loading="lazy"
                                                    referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                                                <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no"
                                                    marginheight="0" marginwidth="0"
                                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d247.62416164538777!2d110.86700700000002!3d-6.771486!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70c4cbccb4c773%3A0x1ce567bf24fcbf32!2sPT.%20Buya%20Barokah%20Kudus%20Div.%20Percetakan!5e0!3m2!1sen!2sus!4v1708330025488!5m2!1sen!2sus"
                                                    style="border:0;" allowfullscreen="" loading="lazy"
                                                    referrerpolicy="no-referrer-when-downgrade"></iframe>


                                            </div>
                                            <style>
                                                .mapouter {
                                                    position: relative;
                                                    text-align: right;
                                                    width: 100%;
                                                    height: 400px;
                                                }

                                                .gmap_canvas {
                                                    overflow: hidden;
                                                    background: none !important;
                                                    width: 100%;
                                                    height: 400px;
                                                }

                                                .gmap_iframe {
                                                    height: 400px !important;
                                                }
                                            </style>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('ul#visimisi li').each(function() {
                $(this).html('<i class="ri-check-double-line"></i> ' + $(this).text());
                $(this).css('padding-left', '30px');
            });
        });
    </script>
@endsection
