<header class="header">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="header_content d-flex flex-row align-items-center justify-content-start">
                    <div class="logo"><a href="#">KMS Suku Dayak</a></div>
                    <nav class="main_nav">
                        <ul>
                            <li class="active"><a href="#">Beranda</a></li>
                            <li><a href="{{ route('kategori', 'CeritaRakyat') }}">Cerita Rakyat</a></li>
                            <li><a href="{{ route('kategori', 'Sejarah') }}">Sejarah</a></li>
                            <li><a href="{{ route('kategori', 'AlatMusuk') }}">Alat Musik</a></li>
                            <li><a href="{{ route('kategori', 'Adat') }}">Adat</a></li>
                            <li><a href="{{ route('kategori', 'Senjata') }}">Senjata</a></li>
                            <li><a href="{{ route('kategori', 'Tradisi') }}">Tradisi</a></li>
                        </ul>
                    </nav>
                    <div class="search_container ml-auto">
                        <form action="#">
                            <input type="search" class="header_search_input" required="required" placeholder="Cari...">
                            <img class="header_search_icon" src="{{ asset('avision/images/search.png') }}"
                                alt="">
                        </form>
                    </div>
                    <div class="hamburger ml-auto menu_mm">
                        <i class="fa fa-bars trans_200 menu_mm" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
    <div class="menu_close_container">
        <div class="menu_close">
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="logo menu_mm"><a href="#">KMS Suku Dayak</a></div>
    <nav class="menu_nav">
        <ul class="menu_mm">
            <li class="menu_mm"><a href="#">Beranda</a></li>
            <li class="menu_mm"><a href="{{ route('kategori', 'CeritaRakyat') }}">Cerita Rakyat</a></li>
            <li class="menu_mm"><a href="{{ route('kategori', 'Sejarah') }}">Sejarah</a></li>
            <li class="menu_mm"><a href="{{ route('kategori', 'AlatMusik') }}">Alat Musik</a></li>
            <li class="menu_mm"><a href="{{ route('kategori', 'Adat') }}">Adat</a></li>
            <li class="menu_mm"><a href="{{ route('kategori', 'Senjata') }}">Senjata</a></li>
            <li class="menu_mm"><a href="{{ route('kategori', 'Tradisi') }}">Tradisi</a></li>
        </ul>
    </nav>
</div>