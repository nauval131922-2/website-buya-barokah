@extends('master')

@section('content')
    <?php
    if (strpos(url()->current(), 'alquran')) {
        $n = 18;
    } elseif (strpos(url()->current(), 'yanbua')) {
        $n = 9;
    } elseif (strpos(url()->current(), 'buku')) {
        $n = 6;
    } elseif (strpos(url()->current(), 'kalender')) {
        $n = 3;
    } elseif (strpos(url()->current(), 'nota')) {
        $n = 10;
    } elseif (strpos(url()->current(), 'yasin')) {
        $n = 15;
    } elseif (strpos(url()->current(), 'kitab-pesantren')) {
        $n = 6;
    } elseif (strpos(url()->current(), 'brosur')) {
        $n = 4;
    } elseif (strpos(url()->current(), 'kop-surat')) {
        $n = 1;
    } elseif (strpos(url()->current(), 'jadwal-imsakiyah')) {
        $n = 3;
        $jumlah_daerah = 10;
    } elseif (strpos(url()->current(), 'video-imsakiyah')) {
        // $n = 30;
        $jumlah_hari = 29;
        $jumlah_link_preview = 29; // Jumlah link preview yang ingin ditampilkan
    }
    ?>

    @if (strpos(url()->current(), 'jadwal-imsakiyah') !== false || strpos(url()->current(), 'video-imsakiyah') !== false)
        <style>
            .visit-counter {
                position: fixed;
                bottom: 15px;
                /* Ubah posisi ke bawah */
                left: 15px;
                font-size: 12px;
                /* Ukuran font kecilkan */
                background-color: #1bbd36;
                color: #fff;
                padding: 5px 8px;
                /* Sesuaikan padding */
                border-radius: 5px;
                transition: transform 0.3s ease;
                margin-bottom: 0;
            }

            .visit-counter:hover {
                transform: translateY(0) scale(1.05);
                /* Ubah transform */
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            }

            .visit-counter strong {
                display: none;
            }

            .visit-counter:hover .bx-stats {
                display: none;
            }

            .visit-counter:hover strong,
            .visit-counter:hover span {
                display: inline-block;
            }

            .visit-counter span {
                font-weight: bold;
            }

            .visit-counter .bx-stats {
                display: inline-block;
                font-size: 16px;
                /* Sesuaikan ukuran font */
                margin-right: 5px;
                /* Sesuaikan margin */
            }

            .visit-counter .actual-count {
                display: none;
                /* Sembunyikan nilai sebenarnya */
            }

            .visit-counter:hover .actual-count {
                display: inline-block;
                /* Tampilkan nilai sebenarnya saat dihover */
            }

            .visit-counter:hover .plus-sign {
                display: none;
                /* Sembunyikan tanda + saat dihover */
            }
        </style>
    @endif

    @if (strpos(url()->current(), 'video-imsakiyah') !== false)
        <style>
            /* CSS for pop-up video player */
            /* Customize as needed */
            .video-popup {
                display: none;
                position: fixed;
                top: 55%;
                left: 90%;
                transform: translate(-50%, -50%);
                z-index: 9999;
                background: #fff;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            }

            iframe {
                border-radius: 10px;
                margin-bottom: -10px;
            }

            /*  tombol close taruh di pojok kiri atas */
            .video-popup button {
                position: absolute;
                top: -10px;
                right: -10px;
                background: #fff;
                border: none;
                font-size: 20px;
                cursor: pointer;
                padding: 5px 10px;
                border-radius: 50%;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                font-weight: bold;
                color: #5c5c5c;
                font-size: 12px;
            }

            .video-popup button:hover {
                background-color: #f1f1f1;
            }

            .video-popup button:focus {
                outline: none;
            }

            .video-popup h2 {
                text-align: center;
                margin-top: 10px;
                font-size: 14px;
                font-weight: bold;
            }

            /*  atur untuk tampilan mobile */
            @media (max-width: 767px) {
                .video-popup {
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                }
            }
        </style>
    @endif


    <body>

        <main id="main">

            <!-- ======= judul paling atas (bawah navbar) ======= -->
            <section id="breadcrumbs" class="breadcrumbs">
                <div class="container">

                    <div class="d-flex justify-content-between align-items-center">
                        @if (strpos(url()->current(), 'video-imsakiyah') == true)
                            <h2>{{ $data->judul }}</h2>
                        @else
                            <h2>{{ $data->kategori }}</h2>
                        @endif

                        <ol>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>{{ $data->kategori }}</li>
                        </ol>
                    </div>

                </div>
            </section>
            <!-- End judul paling atas (bawah navbar) -->


            <!-- ======= Portfolio Details Section ======= -->
            <section id="portfolio-details" class="portfolio-details">
                <div class="container" data-aos="fade-up">

                    {{-- gambar preview --}}
                    @if (strpos(url()->current(), 'video-imsakiyah') === false)
                        <div class="portfolio-details-container">

                            <div class="owl-carousel portfolio-details-carousel">
                                @for ($i = 1; $i <= $n; $i++)
                                    <img src="{{ asset($data->{$i . '_gambar'}) }}" class="img-fluid"
                                        alt="{{ $data->{$i . '_nama'} }}">
                                @endfor
                            </div>

                            @if (strpos(url()->current(), 'jadwal-imsakiyah') === false)
                                <div class="portfolio-info">
                                    <h3>Product information</h3>
                                    <ul>
                                        <li><strong>Category</strong>: {{ $data->kategori }}</li>
                                    </ul>
                                </div>
                            @else
                            @endif

                        </div>
                    @else
                    @endif
                    {{-- end gambar preview --}}

                    {{-- judul dan deskripsi --}}
                    <div class="portfolio-description">
                        @if (strpos(url()->current(), 'jadwal-imsakiyah') == true)
                            <h2 style="width: 100%">{{ $data->judul }}</h2>
                        @elseif (strpos(url()->current(), 'video-imsakiyah') == true)
                            <h2 style="width: 100%; margin-top: -50px">{{ $data->judul_2 }}</h2>
                        @else
                            <h2>{{ $data->kategori }}</h2>
                        @endif
                        <p>
                            {!! nl2br($data->deskripsi) !!}
                        </p>
                    </div>
                    {{-- end judul dan deskripsi --}}

                    {{-- card produk --}}
                    @if (strpos(url()->current(), 'video-imsakiyah') == false)
                        <div class="row row-cols-1 row-cols-md-3">
                            @for ($i = 1; $i <= $n; $i++)
                                <div class="col mb-4">
                                    <div class="card">
                                        @if (strpos(url()->current(), 'jadwal-imsakiyah') === false)
                                            <img src="{{ asset($data->{$i . '_gambar'}) }}" class="card-img-top"
                                                alt="{{ $data->{$i . '_nama'} }}">
                                        @else
                                            <img src="{{ asset($data->{$i . '_gambar'}) }}" class="card-img-top"
                                                alt="{{ $data->{$i . '_nama'} }}"
                                                style="height: 200px; object-fit: cover; object-position: top">
                                        @endif

                                        <div class="card-body">
                                            <p class="card-text"><small class="text-muted">{{ $data->kategori }}</small>
                                            </p>
                                            <h5 class="card-title" style="font-weight: 600">{{ $data->{$i . '_nama'} }}
                                            </h5>
                                            @if (strpos(url()->current(), 'jadwal-imsakiyah') === false && strpos(url()->current(), 'video-imsakiyah') === false)
                                                <p class="card-text">
                                                    {{ Str::words($data->{$i . '_deskripsi'}, 10, '...') }} <a
                                                        href="{{ route('product.' . $data->url . '-detail', ['produk' => $i]) }}">Baca
                                                        Selengkapnya</a></p>
                                            @else
                                                <div class="text-center">
                                                    <a href="{{ asset($data->{$i . '_pdf'}) }}" class="btn-download"
                                                        target="_blank">
                                                        Download <i class="bx bx-download"></i>
                                                    </a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    @else
                    @endif
                    {{-- end card produk --}}

                    {{-- tambahan lainnya (di bawah card produk) --}}
                    @if (strpos(url()->current(), 'jadwal-imsakiyah') == true)
                        <div class="portfolio-description" style="margin-top: -50px">
                            <p>
                                {!! nl2br($data->deskripsi_2) !!}
                            </p>

                            <h2 style="width: 100%; margin-top: 50px">{{ $data->judul_3 }}</h2>

                            <p>
                                {!! nl2br($data->deskripsi_4) !!}
                            </p>

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle">Nama Daerah
                                        </th>
                                        <th colspan="2" style="text-align: center; vertical-align: middle">Link Download
                                        </th>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center; vertical-align: middle">Model 1</th>
                                        <th style="text-align: center; vertical-align: middle">Model 2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($i = 1; $i <= $jumlah_daerah; $i++)
                                        <tr>
                                            <td>{{ $data->{$i . '_daerah_nama'} }}</td>
                                            <td><a href="{{ asset($data->{$i . '_daerah_link_model_1'}) }}" class=""
                                                    target="_blank">
                                                    Download</a></td>
                                            <td><a href="{{ asset($data->{$i . '_daerah_link_model_2'}) }}" class=""
                                                    target="_blank">
                                                    Download</a></td>
                                        </tr>
                                    @endfor
                                </tbody>
                            </table>

                            <p>
                                {!! nl2br($data->deskripsi_2) !!}
                            </p>
                        </div>
                    @elseif (strpos(url()->current(), 'video-imsakiyah') == true)
                        <div class="portfolio-description" style="margin-top: -50px">


                            <table class="table table-striped" style="margin-top: -20px">
                                <thead>
                                    <tr>
                                        {{-- <th rowspan="2" style="text-align: center; vertical-align: middle">Ramadhan</th>
                                        <th colspan="2" style="text-align: center; vertical-align: middle">Link Preview</th>
                                        <th colspan="2" style="text-align: center; vertical-align: middle">Link Download</th> --}}
                                        <th >Ramadhan</th>
                                        <th >Link Download</th>
                                    </tr>
                                    {{-- <tr>
                                        <th style="text-align: center; vertical-align: middle">480p</th>
                                        <th style="text-align: center; vertical-align: middle">720p</th>
                                        <th style="text-align: center; vertical-align: middle">480p</th>
                                        <th style="text-align: center; vertical-align: middle">720p</th>
                                    </tr> --}}
                                </thead>
                                <tbody>
                                    @for ($i = 1; $i <= $jumlah_hari; $i++)
                                        <tr>
                                            <td>Ramadhan-{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</td>
                                            {{-- <td><a href="{{ asset($data->{$i . '_link_preview_480p'}) }}" class=""
                                                    target="_blank">Preview</a>
                                            </td>
                                            <td><a href="{{ asset($data->{$i . '_link_preview_720p'}) }}" class=""
                                                    target="_blank">Preview</a> --}}
                                            <td><a href="{{ asset($data->{$i . '_link_download_480p'}) }}" class=""
                                                    target="_blank">Download</a>
                                            </td>
                                            {{-- <td><a href="{{ asset($data->{$i . '_link_download_720p'}) }}" class=""
                                                    target="_blank">Download</a>
                                            </td> --}}
                                            </td>
                                        </tr>
                                    @endfor

                                </tbody>
                            </table>

                            <p>
                                {!! nl2br($data->deskripsi_2) !!}
                            </p>
                        </div>
                    @endif
                    {{-- end tambahan lainnya (di bawah card produk) --}}

                </div>
            </section><!-- End Portfolio Details Section -->

        </main><!-- End #main -->

        @if (strpos(url()->current(), 'jadwal-imsakiyah') !== false || strpos(url()->current(), 'video-imsakiyah') !== false)
            <p class="visit-counter">
                <i class='bx bx-stats'></i>
                <strong>Jumlah kunjungan:</strong>
                <span class="plus-sign">
                    @if ($visit_count > 99)
                        99+
                    @else
                        {{ $visit_count }}
                    @endif
                </span>
                <span class="actual-count">
                    {{ $visit_count }}
                </span>
            </p>
        @endif

        @if ((strpos(url()->current(), 'video-imsakiyah') !== false) && (date('Y-m-d') == '2024-03-12'))
            <!-- HTML for pop-up video player -->
            <div class="video-popup" id="videoPopup">
                <h2><i class='bx bx-video bx-flashing'></i> Video Imsakiyah Hari Ini</h2>

                @for ($i = 1; $i <= $jumlah_link_preview; $i++)
                    @if (date('Y-m-d') == $data->{$i . '_tanggal'})
                        <iframe width="225" height="400" src="{{ asset($data->{$i . '_link_preview_480p'}) }}" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"allowfullscreen></iframe>
                    @else
                        @continue
                    @endif
                @endfor

                <button onclick="closeVideo()">X</button>
            </div>
        @endif

    </body>

    <!-- JavaScript to show pop-up on page load -->
    <script>
        // Function to show the pop-up video player
        function showVideo() {
            document.getElementById('videoPopup').style.display = 'block';
        }

        // Function to close the pop-up video player
        function closeVideo() {
            document.getElementById('videoPopup').style.display = 'none';
        }

        // Show the video pop-up when the page is loaded
        window.onload = function() {
            showVideo();
        };
    </script>
@endsection
