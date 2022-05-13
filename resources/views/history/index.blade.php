@extends('layouts.master')

@push('req-css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endpush

@section('content-header', 'Data History')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                {!! $dataTable->table(['class' => 'table table-striped table-hover'], true) !!}
            </div>
        </div>
    </div>
@endsection

@push('req-scripts')
    <script src="{{ asset('lte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
    <script src="{{ asset('js/sweetalert-components.js') }}"></script>

    {{ $dataTable->scripts() }}

    <script>
        $.fn.dataTable.ext.errMode = 'throw';

        $(document).on("click", ".btn-delete", function() {
            sweetAlertComponent({
                type: 'delete',
                form: $(this).closest("form")
            });
        })
    </script>
@endpush
