@include('layouts.user.header')
<div class="page_content">
    <div class="container">
        <div class="row row-lg-eq-height">
            @include('layouts.user.sidebar')
        </div>
    </div>
</div>
@yield('content')
@include('layouts.user.footer')
