@extends('layouts.admin.master')
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
                <div class="col-lg-4 col-6">
                    <x-small-box bg="info" icon="fas fa-book" item="{{ $countPengetahuan }}" title="Pengetahuan" />
                </div>
                <div class="col-lg-4 col-6">
                    <x-small-box bg="info" icon="fas fa-envelope" item="0" title="slot 2" />
                </div>
                <div class="col-lg-4 col-6">
                    <x-small-box bg="info" icon="fas fa-envelope" item="0" title="slot 3" />
                </div>
            </div>
        </div>
    </div>
@endsection

@push('req-scripts')
    <script></script>
@endpush
