<div class="col-lg-9" style="margin-top:20px">
    <div class="main_content">
        <div class="blog_section">
            <div class="section_panel d-flex flex-row align-items-center justify-content-start">
                <div class="section_title">Profil</div>
            </div>
            <div class="section_content">
                <div class="grid clearfix" wire:init="loadPosts">
                    @foreach ($items as $item)
                        <div class="card card_largest_with_image grid-item" style="width: 850px">
                            <img class="card-img-top" src="{{ $item->urlGambar() }}" alt="">
                            <div class="card-body">
                                <div class="card-title">
                                    <a href="{{ route('post.show', ['model' => 'Profil', 'id' => $item->id]) }}">
                                        {{ $item->nama }}
                                    </a>
                                </div>
                                <p class="card-text">{{ $item->ringkasan }}</p>
                            </div>
                        </div>
                    @endforeach
                    <div class="card card_default card_small_no_image grid-item" style="display: none"></div>
                </div>
            </div>
        </div>
    </div>
</div>
