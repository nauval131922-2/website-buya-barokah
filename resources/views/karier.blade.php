@extends('master')

@section('content')

    <body>

        <main id="main">
            <style>
                .full-width-image {
                    width: 100%;
                    display: block;
                    filter: brightness(70%);
                    position: relative;
                    margin-top: 55.5px;
                }

                .text-overlay {
                    position: absolute;
                    text-align: center;
                    margin: auto;
                    top: 0;
                    left: 0;
                    bottom: 0;
                    right: 0;
                    max-width: 1000px;
                    max-height: 200px;
                    transform: translate(-50%, -50%);
                    max-width: 1000px;
                    color: #ffffff;
                }

                .text-overlay h2 {
                    text-shadow: 2px 2px 4px #000000;
                    font-size: 40px;
                    font-weight: bold;
                }

                .text-overlay p {
                    text-shadow: 2px 2px 4px #000000;
                    font-style: italic;
                    font-weight: 500;
                }
            </style>

            <style>

                .k-karier-bot {
                    display: none;
                }

                @media (max-width: 1149px) {
                    .text-overlay {
                        display: none;
                    }

                    .k-karier-bot {
                        display: block;
                    }
                }
            </style>

            <div style="position: relative;">
                <img src="{{ asset('assets/images/karier/min/webp/foto-depan.webp') }}" alt=""
                    class="full-width-image">
                <div class="text-overlay animate__animated animate__fadeInUp">
                    <h2>Kesempatan Karier</h2>
                    <br>
                    <p>PT Buya Barokah Div. Percetakan membuka kesempatan yang luas terhadap para tenaga ahli dan tenaga
                        terampil untuk dapat bergabung di perusahaan kami, serta mampu dan memiliki keinginan untuk
                        meningkatkan kompetensi yang sesuai dengan bidang yang dibutuhkan. Mari bergabung dan berkarir
                        bersama PT. Buya Barokah Div. Percetakan.</p>
                </div>
            </div>



            <section id="blog" class="blog">
                <div class="container" data-aos="fade-up">

                    <div class="row k-karier-bot">

                        <div class="col-lg-12 entries">

                            <article class="entry entry-single" data-aos="fade-up" style="margin-bottom: 25px">
                                <div class="entry-content">
                                    <h2 style="font-weight: bold;text-align: center;">Kesempatan Karier</h2>
                                    <br>
                                    <p style="margin-bottom: -20px; line-height: 30px">PT Buya Barokah Div. Percetakan
                                        membuka kesempatan yang luas terhadap para tenaga
                                        ahli dan tenaga
                                        terampil untuk dapat bergabung di perusahaan kami, serta mampu dan memiliki
                                        keinginan untuk
                                        meningkatkan kompetensi yang sesuai dengan bidang yang dibutuhkan. Mari bergabung
                                        dan berkarir
                                        bersama PT. Buya Barokah Div. Percetakan.</p>
                                </div>
                            </article>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-lg-12 entries">

                            <article class="entry entry-single" data-aos="fade-up" style="margin-bottom: 25px">
                                <div class="entry-content">

                                    <div class="row">
                                        <div class="col-8" style="text-decoration: underline">
                                            <h2 style="font-weight: bold">Digital Marketing</h2>

                                        </div>
                                        <div class="col-4">
                                            <div class="text-right">
                                                <a href="javascript:void(0)" class="btn-karier"
                                                    onclick="smoothScroll('about-us')" style="margin:0">KLIK DI SINI UNTUK
                                                    MENDAFTAR</a>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 style="font-weight: bold;font-size: 18px">Kualifikasi</h5>
                                            <ul>
                                                <li>Pria dan Wanita max usia 27 tahun</li>
                                                <li>Lulusan SMK/SMK semua jurusan</li>
                                                <li>Memahami Excel & digital marketting</li>
                                                <li>Bisa bekerja secara mandiri ataupun tim</li>
                                                <li>Terbiasa bekerja target/deadline</li>
                                                <li>Kreatif dan energik</li>
                                                <li>Berpengalaman menjadi nilai plus</li>
                                                <li>Terbiasa mengedit gambar dan video</li>
                                                <li>Mempunyai keinginan belajar yang tinggi</li>
                                                <li>Disiplin dan bertanggung jawab</li>
                                                <li>Punya keinginan berkarier di dunia digital marketting</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>

                        </div>

                    </div>





                </div>
            </section>

        </main>

    </body>
@endsection
