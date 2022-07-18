<div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('ceritarakyat.index') }}"
                    class="nav-link {{ request()->is('*ceritarakyat*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>Cerita Rakyat
                        {{-- <span class="right badge badge-danger">New</span> --}}
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('sejarah.index') }}"
                    class="nav-link {{ request()->is('*sejarah*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>Sejarah
                        {{-- <span class="right badge badge-danger">New</span> --}}
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('alatmusik.index') }}"
                    class="nav-link {{ request()->is('*alatmusik*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>Alat Musik</p>
                    {{-- <span class="right badge badge-danger">New</span> --}}
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('rumahadat.index') }}"
                    class="nav-link {{ request()->is('*rumahadat*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>Rumah Adat</p>
                    {{-- <span class="right badge badge-danger">New</span> --}}
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('adatlahiran.index') }}"
                    class="nav-link {{ request()->is('*adatlahiran*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>Adat Lahiran</p>
                    {{-- <span class="right badge badge-danger">New</span> --}}
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('adatpernikahan.index') }}"
                    class="nav-link {{ request()->is('*adatpernikahan*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>Adat Pernikahan</p>
                    {{-- <span class="right badge badge-danger">New</span> --}}
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('senjata.index') }}"
                    class="nav-link {{ request()->is('*senjata*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>Senjata</p>
                    {{-- <span class="right badge badge-danger">New</span> --}}
                </a>
            </li>
            <li class="nav-item menu{{ request()->is('*tradisi*') ? '-open' : '' }}">
                <a href="#" class="nav-link {{ request()->is('*tradisi*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>Tradisi<i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('tradisi.index', ['model' => 'TradisiTabuko']) }}"
                            class="nav-link {{ request()->is('*tradisi*') && request()->query('model', 'TradisiTabuko') ? 'active' : '' }}">
                            <p>Tradisi Tabuko</p>
                            {{-- <span class="right badge badge-danger">New</span> --}}
                        </a>
                    </li>
                </ul>
            </li>
            {{-- <li class="nav-item">
                <a href="{{ route('ritual.index') }}"
                    class="nav-link {{ request()->is('*ritual*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>Ritual</p>
                    <span class="right badge badge-danger">New</span>
                </a>
            </li> --}}
            {{-- <li class="nav-item">
                <a href="{{ route('pakaian.index') }}"
                    class="nav-link {{ request()->is('*pakaian*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>Pakaian</p>
                    <span class="right badge badge-danger">New</span>
                </a>
            </li> --}}
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
