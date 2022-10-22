<div class="small-box bg-{{ $bg ?? '' }}">
    @if ($loading)
        <div class="overlay">
            <i class="fas fa-3x fa-sync-alt"></i>
        </div>
    @endif
    <div class="inner">
        <h3>{{ $item ?? '' }}<sup style="font-size: 20px">{{ $unit }}</sup></h3>
        <p>{{ $title ?? '' }}</p>
    </div>
    <div class="icon">
        <i class="{{ $icon }}"></i>
    </div>
    <a href="#" class="small-box-footer">
        {{ $footer ?? '' }} <i class="fas fa-arrow-circle-right"></i>
    </a>
</div>
