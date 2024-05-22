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
                    padding: 20px;
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
                    margin-bottom: 24px;
                }

                .text-overlay p {
                    text-shadow: 2px 2px 4px #000000;
                    font-style: italic;
                    font-weight: 500;
                }
            </style>


            <div style="position: relative;">
                <img src="{{ asset('assets/images/karier/min/webp/foto-depan.webp') }}" alt=""
                    class="full-width-image">
                <div class="text-overlay animate__animated animate__fadeInUp">
                    <h2>Kesempatan Karier</h2>
                    <p>PT Buya Barokah Div. Percetakan membuka kesempatan yang luas terhadap para tenaga ahli dan tenaga
                        terampil untuk dapat bergabung di perusahaan kami, serta mampu dan memiliki keinginan untuk
                        meningkatkan kompetensi yang sesuai dengan bidang yang dibutuhkan. Mari bergabung dan berkarir
                        bersama PT. Buya Barokah Div. Percetakan.</p>
                    <div class="text-center">
                        <a href="javascript:void(0)" class="btn-karier" onclick="smoothScroll('about-us')">Baca
                            Selengkapnya</a>
                    </div>
                </div>
            </div>



            <!-- ======= Portfolio Details Section ======= -->
            {{-- <section id="portfolio-details" class="portfolio-details"> --}}
            <section id="blog" class="blog">
                <div class="container" data-aos="fade-up">

                    <div class="row">

                        <div class="col-lg-12 entries">

                            <article class="entry entry-single" data-aos="fade-up" style="margin-bottom: 25px">
                                <div class="entry-content">
                                    <p style="margin-bottom: -20px; line-height: 30px">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem modi nihil
                                        itaque aperiam voluptate rem saepe consectetur. Obcaecati tempora id iste, optio
                                        placeat, explicabo molestiae, expedita tenetur suscipit eveniet laborum aspernatur
                                        at in reprehenderit voluptate quas ex tempore perspiciatis quod? Reprehenderit aut
                                        consectetur officia voluptatum quisquam, deserunt ullam molestias amet culpa cumque
                                        repellat doloremque voluptate iure hic aperiam excepturi eaque sunt asperiores
                                        cupiditate error perspiciatis nisi facere optio vel! In aperiam nulla velit quia
                                        placeat esse vero, cum ut voluptas impedit quibusdam, officia debitis sit deserunt
                                        ullam. Nam impedit voluptate, neque, deleniti nulla, veritatis dolorem ratione eos
                                        culpa ex recusandae.
                                    </p>
                                </div>
                            </article><!-- End blog entry -->

                        </div><!-- End blog entries list -->

                    </div>





                </div>
            </section><!-- End Portfolio Details Section -->

        </main><!-- End #main -->

    </body>
@endsection
