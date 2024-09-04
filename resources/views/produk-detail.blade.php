@extends('master')

@section('content')

    <body>
        <main id="main">
            <!-- ======= Breadcrumbs ======= -->
            <section id="breadcrumbs" class="breadcrumbs">
                <div class="container">

                    <div class="d-flex justify-content-between align-items-center">
                        <h2>{{ $data->nama }}</h2>
                        <ol>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ route('product.' . $data->url) }}">{{ $data->kategori }}</a></li>
                            <li>{{ $data->nama }}</li>
                        </ol>
                    </div>

                </div>
            </section><!-- End Breadcrumbs -->

            <!-- ======= Portfolio Details Section ======= -->
            <section id="blog" class="blog">
                <div class="container" data-aos="fade-up">

                    <div class="row">

                        <div class="col-lg-12 entries">

                            <article class="entry entry-single" data-aos="fade-up">

                                <div class="entry-img">
                                    <img src="{{ asset($data->gambar) }}" alt="" class="img-fluid" style="width: 100%; height: 100%;">
                                </div>

                                <h2 class="entry-title">
                                    <a href="javascript:void(0)">{{ $data->nama }}</a>
                                </h2>



                                <div class="entry-content">
                                    <p>
                                        {{ $data->deskripsi }}
                                    </p>
                                </div>

                                {{-- jika route mengandung kata alquran maka tampilkan spesifikasi --}}
                                @if (strpos(url()->current(), 'alquran'))
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Spesifikasi</th>
                                                <th>Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Judul</td>
                                                <td>{{ $data->judul }}</td>
                                            </tr>
                                            <tr>
                                                <td>Ukuran</td>
                                                <td>{{ $data->ukuran }}</td>
                                            </tr>
                                            <tr>
                                                <td>Halaman</td>
                                                <td>{{ $data->halaman }}</td>
                                            </tr>
                                            <tr>
                                                <td>Cover</td>
                                                <td>{{ $data->cover }}</td>
                                            </tr>
                                            <tr>
                                                <td>Isi</td>
                                                <td>{{ $data->isi }}</td>
                                            </tr>
                                            <tr>
                                                <td>Skiblat</td>
                                                <td>{{ $data->skiblat }}</td>
                                            </tr>
                                            <tr>
                                                <td>Berat</td>
                                                <td>{{ $data->berat }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                @endif


                            </article><!-- End blog entry -->
                        </div><!-- End blog entries list -->
                    </div>
                </div>
            </section><!-- End Portfolio Details Section -->
        </main><!-- End #main -->
    </body>
@endsection
