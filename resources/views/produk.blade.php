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
        $n = 30;
        $jumlah_hari = 30;
    }
    ?>

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
                        {{-- <div class="portfolio-description" style="margin-top: -50px">
                            <p>
                                {!! nl2br($data->deskripsi_2) !!}
                            </p>

                            <h2 style="width: 100%; margin-top: 50px">{{ $data->judul_2 }}</h2>

                            <p>
                                {!! nl2br($data->deskripsi_3) !!}
                            </p>

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Model</th>
                                        <th>Link Download</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($i = 1; $i <= 3; $i++)
                                        <tr>
                                            <td>Model {{ $i }}</td>
                                            <td><a href="{{ asset($data->{$i . '_sekitar_kudus_link'}) }}" class=""
                                                    target="_blank">
                                                    Download</a></td>
                                        </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div> --}}

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
                                        <th rowspan="2" style="text-align: center; vertical-align: middle">Nama Daerah</th>
                                        <th colspan="2" style="text-align: center; vertical-align: middle">Link Download</th>
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
                                        <th>Ramadhan</th>
                                        <th>Download Imsakiyyah Pagi</th>
                                        <th>Download Imsakiyyah Petang</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($i = 1; $i <= $jumlah_hari; $i++)
                                        <tr>
                                            <td>Ramadhan-{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</td>
                                            {{-- jika i kurang dari sama dengan 7 maka tampilkan link download imsakiyyah pagi --}}
                                            {{-- @if ($i <= 7) --}}
                                            <td><a href="{{ asset($data->{$i . '_video_pagi'}) }}" class=""
                                                    target="_blank">Download</a>
                                            </td>
                                            {{-- @else --}}
                                            {{-- </td>-</td> --}}
                                            {{-- @endif --}}
                                            <td><a href="{{ asset($data->{$i . '_video_sore'}) }}" class=""
                                                    target="_blank">Download</a>
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

    </body>
@endsection
