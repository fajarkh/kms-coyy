<div class="btn-group d-flex justify-content-center">
    <button type="button" class="btn btn-more dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">
        <i class="ti-more-alt"></i>
    </button>
    <div class="dropdown-menu" x-placement="bottom-start"
        style="position: absolute; transform: translate3d(0px, 35px, 0px); top: 0px; left: 0px; will-change: transform;">
        @php $url = isset($route_destroy) ? (isset($route_destroy['custom']) ? $route_destroy['custom'] : [route($route_destroy, $model->id)]) : null; @endphp
        {!! Form::open(['url' => $url, 'method' => 'DELETE']) !!}
        @if (isset($route_show))
            <a class="dropdown-item" href="{{ route($route_show, $model->id) }}">
                <i class="ti-eye"></i>
                Detail
            </a>
        @endif
        @if (isset($route_edit))
            @if (isset($route_edit['custom']))
                <a class="dropdown-item" href="{{ $route_edit['custom'] }}">
                    <i class="ti-pencil"></i>
                    Edit
                </a>
            @else
                <a class="dropdown-item" href="{{ route($route_edit, $model->id) }}">
                    <i class="ti-pencil"></i>
                    Edit
                </a>
            @endif
        @endif
        @if (isset($route_destroy))
            <a class="dropdown-item btn-delete" href="#">
                <i class="ti-trash"></i>
                Hapus
            </a>
        @endif
        {!! Form::close() !!}
    </div>
</div>
