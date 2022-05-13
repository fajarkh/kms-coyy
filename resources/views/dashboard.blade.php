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

                    <x-button type="success" title="Modal" openModal="ayam" />
                </div>
            </div>
        </div>
    </div>
@endsection

@push('req-scripts')
    {{-- <script src="{{ asset('lte/plugins/dropzone/min/dropzone.min.js') }}"></script> --}}
    <script>
    </script>
@endpush
