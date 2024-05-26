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
                .button-daftar {
                    -moz-appearance: none;
                    -webkit-appearance: none;
                    appearance: none;
                    border: none;
                    background: none;
                    color: #1e1e1e;
                    cursor: pointer;
                    position: relative;
                    padding: 8px;
                    text-transform: uppercase;
                    font-weight: bold;
                    font-size: 14px;
                    transition: all .15s ease;
                }

                .button-daftar::before,
                .button-daftar::after {
                    content: '';
                    display: block;
                    position: absolute;
                    right: 0;
                    left: 0;
                    height: calc(50% - 5px);
                    border: 1px solid #7D8082;
                    transition: all .15s ease;
                }

                .button-daftar::before {
                    top: 0;
                    border-bottom-width: 0;
                }

                .button-daftar::after {
                    bottom: 0;
                    border-top-width: 0;
                }

                .button-daftar:active,
                .button-daftar:focus {
                    outline: none;
                }

                .button-daftar:active::before,
                .button-daftar:active::after {
                    right: 3px;
                    left: 3px;
                }

                .button-daftar:active::before {
                    top: 3px;
                }

                .button-daftar:active::after {
                    bottom: 3px;
                }

                .button_lg {
                    position: relative;
                    display: block;
                    padding: 10px 20px;
                    color: #fff;
                    background-color: #1e1e1e;
                    overflow: hidden;
                    box-shadow: inset 0px 0px 0px 1px transparent;
                }

                .button_lg::before {
                    content: '';
                    display: block;
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 2px;
                    height: 2px;
                    background-color: #1e1e1e;
                }

                .button_lg::after {
                    content: '';
                    display: block;
                    position: absolute;
                    right: 0;
                    bottom: 0;
                    width: 4px;
                    height: 4px;
                    background-color: #1e1e1e;
                    transition: all .2s ease;
                }

                .button_sl {
                    display: block;
                    position: absolute;
                    top: 0;
                    bottom: -1px;
                    left: -8px;
                    width: 0;
                    background-color: #128450;
                    transform: skew(-15deg);
                    transition: all .2s ease;
                }

                .button_text {
                    position: relative;
                }

                .button-daftar:hover {
                    color: #1e1e1e;
                }

                .button-daftar:hover .button_sl {
                    width: calc(100% + 15px);
                }

                .button-daftar:hover .button_lg::after {
                    background-color: #fff;
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
                                <button class="button-daftar">
                                    <span class="button_lg">
                                        <span class="button_sl"></span>
                                        <span class="button_text">Klik di sini untuk mendaftar</span>
                                    </span>
                                </button>
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
                                <button class="button-daftar">
                                    <span class="button_lg">
                                        <span class="button_sl"></span>
                                        <span class="button_text">Klik di sini untuk mendaftar</span>
                                    </span>
                                </button>
                            </div>

                        </div>
                    </div>





                </div>
            </section>

        </main>

    </body>
@endsection
