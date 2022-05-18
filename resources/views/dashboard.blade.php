@extends('layouts.master')
@section('content-header')
    Dashboard
@endsection
@push('req-css')
    {{-- <link rel="stylesheet" href="{{ asset('lte/plugins/dropzone/min/dropzone.min.css') }}"> --}}
@endpush
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <x-modal title="In" id="ayam">
                        <div class="alert alert-danger" role="alert">
                            Are you sure you want to do this?
                        </div>
                    </x-modal>

                    <x-button id="tombol" type="success" title="Modal" openModal="ayam" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <x-info-box bg="info" icon="fa-envelope" title="coba" subtitle="100" />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-6">
                    {{-- <x-small-box /> --}}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('req-scripts')
    {{-- <script src="{{ asset('lte/plugins/dropzone/min/dropzone.min.js') }}"></script> --}}
    <script>
        $(() => {
            $('#tombol').click();
        });
    </script>
@endpush
