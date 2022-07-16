@extends('layouts.master')
@section('content-header')
    Dashboard
@endsection
@push('req-css')

@endpush
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <x-info-box bg="info" icon="fa-envelope" title="coba" subtitle="100" />
                </div>
            </div>
        </div>
    </div>
@endsection

@push('req-scripts')
    <script>

    </script>
@endpush
