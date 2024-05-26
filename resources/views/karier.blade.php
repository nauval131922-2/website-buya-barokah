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

            {{-- style card dari ui verse --}}
            <style>
                .card {
                    margin-bottom: 2rem;
                    border-radius: 0.5rem;
                    padding: 1.5rem;
                    background: linear-gradient(45deg, #ffffff 0%, #ffffff 100%);
                    box-shadow: 0 0.125rem 0.5rem rgba(0, 0, 0, 0.3), 0 0.0625rem 0.125rem rgba(0, 0, 0, 0.2);
                }

                .header {
                    display: flex;
                    flex-direction: column;
                }

                .title {
                    font-size: 1.5rem;
                    line-height: 2rem;
                    font-weight: 700;
                    /* color: #fff */
                }

                .price {
                    font-size: 3.75rem;
                    line-height: 1;
                    font-weight: 700;
                    color: #fff
                }

                .desc {
                    margin-top: 0.75rem;
                    margin-bottom: 0.75rem;
                    line-height: 1.625;
                    color: rgb(56, 56, 56);
                }

                .lists {
                    margin-bottom: 1.5rem;
                    flex: 1 1 0%;
                    color: rgb(47, 47, 47);
                }

                .lists .list {
                    margin-bottom: 0.5rem;
                    display: flex;
                    margin-left: 0.5rem
                }

                .lists .list svg {
                    height: 1.5rem;
                    width: 1.5rem;
                    flex-shrink: 0;
                    margin-right: 0.5rem;
                    color: rgba(167, 139, 250, 1);
                    color: #128450;
                }

            </style>

            {{-- style button --}}
            <style>
                button,
                button::after {
                    padding: 16px 20px;
                    font-size: 18px;
                    background: linear-gradient(45deg, transparent 5%, #128450 5%);
                    border: 0;
                    color: #fff;
                    letter-spacing: 3px;
                    line-height: 1;
                    box-shadow: 6px 0px 0px #00e6f6;
                    outline: transparent;
                    position: relative;
                }

                button::after {
                    --slice-0: inset(50% 50% 50% 50%);
                    --slice-1: inset(80% -6px 0 0);
                    --slice-2: inset(50% -6px 30% 0);
                    --slice-3: inset(10% -6px 85% 0);
                    --slice-4: inset(40% -6px 43% 0);
                    --slice-5: inset(80% -6px 5% 0);
                    content: "Klik di sini untuk medaftar";
                    display: block;
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    background: linear-gradient(45deg, transparent 3%, #00e6f6 3%, #00e6f6 5%, #ff013c 5%);
                    text-shadow: -3px -3px 0px #f8f005, 3px 3px 0px #00e6f6;
                    clip-path: var(--slice-0);
                }

                button:hover::after {
                    animation: 1s glitch;
                    animation-timing-function: steps(2, end);
                }

                @keyframes glitch {
                    0% {
                        clip-path: var(--slice-1);
                        transform: translate(-20px, -10px);
                    }

                    10% {
                        clip-path: var(--slice-3);
                        transform: translate(10px, 10px);
                    }

                    20% {
                        clip-path: var(--slice-1);
                        transform: translate(-10px, 10px);
                    }

                    30% {
                        clip-path: var(--slice-3);
                        transform: translate(0px, 5px);
                    }

                    40% {
                        clip-path: var(--slice-2);
                        transform: translate(-5px, 0px);
                    }

                    50% {
                        clip-path: var(--slice-3);
                        transform: translate(5px, 0px);
                    }

                    60% {
                        clip-path: var(--slice-4);
                        transform: translate(5px, 10px);
                    }

                    70% {
                        clip-path: var(--slice-2);
                        transform: translate(-10px, 10px);
                    }

                    80% {
                        clip-path: var(--slice-5);
                        transform: translate(20px, -10px);
                    }

                    90% {
                        clip-path: var(--slice-1);
                        transform: translate(-10px, 0px);
                    }

                    100% {
                        clip-path: var(--slice-1);
                        transform: translate(0);
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



                    <div class="row">
                        <div class="col-lg-12 k-karier-bot">
                            <div class="card ">
                                <div class="header">
                                    <span class="title" style="text-align: center">Kesempatan Karier</span>
                                </div>
                                <p class="desc" style="margin-bottom:0; text-align: center">PT Buya Barokah Div.
                                    Percetakan membuka kesempatan yang luas terhadap para tenaga ahli dan tenaga terampil
                                    untuk dapat bergabung di perusahaan kami, serta mampu dan memiliki keinginan untuk
                                    meningkatkan kompetensi yang sesuai dengan bidang yang dibutuhkan. Mari bergabung dan
                                    berkarir bersama PT. Buya Barokah Div. Percetakan.
                                </p>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="card ">
                                <div class="header">
                                    <span class="title">Digital Marketing</span>
                                </div>
                                <p class="desc">Kualifikasi</p>
                                <ul class="lists" style="padding-left: 0px">
                                    <li class="list">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Pria dan Wanita max usia 27 tahun</span>
                                    </li>
                                    <li class="list">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Lulusan SMK/SMK semua jurusan</span>
                                    </li>
                                    <li class="list">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Memahami Excel & digital marketting</span>
                                    </li>
                                    <li class="list">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Bisa bekerja secara mandiri ataupun tim</span>
                                    </li>
                                    <li class="list">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Terbiasa bekerja target/deadline</span>
                                    </li>
                                    <li class="list">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Kreatif dan energik</span>
                                    </li>
                                    <li class="list">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Berpengalaman menjadi nilai plus</span>
                                    </li>
                                    <li class="list">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Terbiasa mengedit gambar dan video</span>
                                    </li>
                                    <li class="list">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Mempunyai keinginan belajar yang tinggi</span>
                                    </li>
                                    <li class="list">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Disiplin dan bertanggung jawab</span>
                                    </li>
                                    <li class="list">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Punya keinginan berkarier di dunia digital marketting</span>
                                    </li>
                                </ul>
                                <button type="button" class="action">Klik di sini untuk medaftar</button>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="card ">
                                <div class="header">
                                    <span class="title">Digital Marketing</span>
                                </div>
                                <p class="desc">Kualifikasi</p>
                                <ul class="lists" style="padding-left: 0px">
                                    <li class="list">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Pria dan Wanita max usia 27 tahun</span>
                                    </li>
                                    <li class="list">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Lulusan SMK/SMK semua jurusan</span>
                                    </li>
                                    <li class="list">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Memahami Excel & digital marketting</span>
                                    </li>
                                    <li class="list">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Bisa bekerja secara mandiri ataupun tim</span>
                                    </li>
                                    <li class="list">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Terbiasa bekerja target/deadline</span>
                                    </li>
                                    <li class="list">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Kreatif dan energik</span>
                                    </li>
                                    <li class="list">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Berpengalaman menjadi nilai plus</span>
                                    </li>
                                    <li class="list">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Terbiasa mengedit gambar dan video</span>
                                    </li>
                                    <li class="list">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Mempunyai keinginan belajar yang tinggi</span>
                                    </li>
                                    <li class="list">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Disiplin dan bertanggung jawab</span>
                                    </li>
                                    <li class="list">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Punya keinginan berkarier di dunia digital marketting</span>
                                    </li>
                                </ul>
                                <button type="button" class="action">Klik di sini untuk medaftar</button>
                            </div>

                        </div>
                    </div>





                </div>
            </section>

        </main>

    </body>
@endsection
