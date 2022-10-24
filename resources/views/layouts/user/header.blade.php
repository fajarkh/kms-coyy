<header class="header">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="header_content d-flex flex-row align-items-center justify-content-start">
                    <div class="logo"><a href="/">KMS Dayak Bahau</a></div>
                    <nav class="main_nav">
                        <ul>
                            <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/">Beranda</a></li>
                            <li class="menu_mm {{ request()->is('*kategori*') ? 'active' : '' }}">
                                <a href="{{ route('kategori', 'Semua') }}">Kategori</a>
                            </li>
                            <li class="menu_mm {{ request()->is('*profil*', '*Profil*') ? 'active' : '' }}">
                                <a href="{{ route('profil') }}">Profil</a>
                            </li>
                            <li class="menu_mm"><a href="{{ route('login') }}">Login</a></li>
                        </ul>
                    </nav>
                    <div class="search_container ml-auto">
                        <form method="get" action="{{ route('search.result') }}">
                            <input type="search" class="header_search_input" name="keywords" required="required"
                                placeholder="Cari...">
                            <img class="header_search_icon" src="{{ asset('avision/images/search.png') }}">
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
            <li class="menu_mm {{ request()->is('/') ? 'active' : '' }}"><a href="/">Beranda</a></li>
            <li class="menu_mm {{ request()->is('*kategori*') ? 'active' : '' }}">
                <a href="{{ route('kategori', 'Semua') }}">Kategori</a>
            </li>
            <li class="menu_mm {{ request()->is('*profil*', '*Profil*') ? 'active' : '' }}">
                <a href="{{ route('profil') }}">Profil</a>
            </li>
            <li class="menu_mm"><a href="{{ route('login') }}">Login</a></li>
        </ul>
    </nav>
</div>
