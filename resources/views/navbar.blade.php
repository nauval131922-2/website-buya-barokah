<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto"><a href="{{ route('home') }}"><img
                    src="{{ asset('assets/images/logo/min/webp/logo2.webp') }}" class="img-fluid"
                    alt="Logo (Panjang) Percetakan Buya Barokah"></a></h1>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                <li class="{{ Str::contains(request()->route()->getName(), 'product.alquran') ? 'active' : '' }}"><a
                        href="{{ route('product.alquran') }}">Al-Qur'an Al-Quddus</a></li>

                <li class="{{ request()->routeIs('jasa.jasa-cetak') ? 'active' : '' }}"><a
                        href="{{ route('jasa.jasa-cetak') }}">Jasa Cetak</a></li>


                <li
                    class="drop-down {{ request()->routeIs('product.*') && !Str::contains(request()->route()->getName(), 'product.alquran') ? 'active' : '' }}">


                    <a href="javascript:void(0)">Produk Kami</a>
                    <ul>
                        <li
                            class="{{ Str::contains(request()->route()->getName(), 'product.yanbua') ? 'active' : '' }}">
                            <a href="{{ route('product.yanbua') }}">Yanbu'a</a></li>
                        <li class="{{ Str::contains(request()->route()->getName(), 'product.buku') ? 'active' : '' }}">
                            <a href="{{ route('product.buku') }}">Buku</a>
                        </li>
                        <li
                            class="{{ Str::contains(request()->route()->getName(), 'product.kalender') ? 'active' : '' }}">
                            <a href="{{ route('product.kalender') }}">Kalender</a>
                        </li>
                        <li class="{{ Str::contains(request()->route()->getName(), 'product.nota') ? 'active' : '' }}">
                            <a href="{{ route('product.nota') }}">Nota</a>
                        </li>
                        <li
                            class="{{ Str::contains(request()->route()->getName(), 'product.yasin') ? 'active' : '' }}">
                            <a href="{{ route('product.yasin') }}">Yasin</a>
                        </li>
                        <li
                            class="{{ Str::contains(request()->route()->getName(), 'product.kitab-pesantren') ? 'active' : '' }}">
                            <a href="{{ route('product.kitab-pesantren') }}">Kitab Pesantren</a>
                        </li>
                        <li
                            class="{{ Str::contains(request()->route()->getName(), 'product.brosur') ? 'active' : '' }}">
                            <a href="{{ route('product.brosur') }}">Brosur</a>
                        </li>
                        <li
                            class="{{ Str::contains(request()->route()->getName(), 'product.kop-surat') ? 'active' : '' }}">
                            <a href="{{ route('product.kop-surat') }}">Kop Surat</a>
                        </li>
                        <li
                            class="{{ Str::contains(request()->route()->getName(), 'product.jadwal-imsakiyah') ? 'active' : '' }}">
                            <a href="{{ route('product.jadwal-imsakiyah') }}">Jadwal Imsakiyah</a>
                        </li>
                        <li
                            class="{{ Str::contains(request()->route()->getName(), 'product.video-imsakiyah') ? 'active' : '' }}">
                            <a href="{{ route('product.video-imsakiyah') }}">Video Imsakiyah</a>
                        </li>

                    </ul>
                </li>

                <li class="drop-down {{ request()->routeIs('tentang-kami.*') ? 'active' : '' }}">
                    <a href="javascript:void(0)">Tentang Kami</a>
                    <ul>
                        <li class="{{ request()->routeIs('tentang-kami.latar-belakang') ? 'active' : '' }}">
                            <a href="{{ route('tentang-kami.latar-belakang') }}">Latar Belakang</a>
                        </li>
                        <li class="{{ request()->routeIs('tentang-kami.visi-misi') ? 'active' : '' }}">
                            <a href="{{ route('tentang-kami.visi-misi') }}">Visi, Misi, dan Tujuan</a>
                        </li>
                    </ul>
                </li>

                <li class="{{ Str::contains(request()->route()->getName(), 'karier') ? 'active' : '' }}"><a
                    href="{{ route('karier') }}">Karier</a></li>


            </ul>
        </nav><!-- .nav-menu -->

        <div class="header-social-links">
            <a href="https://www.facebook.com/percetakanbuyabarokah/" class="facebook"><i
                    class="icofont-facebook"></i></a>
            <a href="https://www.instagram.com/buyabarokah/" class="instagram"><i class="icofont-instagram"></i></a>
            <a href="https://twitter.com/buyabarokah" class="twitter"><i class="icofont-twitter"></i></a>
            <a href="https://www.youtube.com/@buyabarokah" class="youtube"><i class="icofont-youtube"></i></i></a>
        </div>

    </div>
</header><!-- End Header -->
