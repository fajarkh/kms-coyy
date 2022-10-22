@extends('layouts.admin.master')
@section('content-header')
    Dashboard
@endsection
@push('req-css')
@endpush
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <div class="col-lg-4 col-6">
                    <x-small-box bg="info" icon="fas fa-book" item="{{ $countPengetahuan }}" title="Pengetahuan" />
                </div>
                <div class="col-lg-4 col-6">
                    <x-small-box bg="info" icon="fas fa-user" item="{{ $countAdmin }}" title="Admin" />
                </div>
                <div class="col-lg-4 col-6">
                    <x-small-box bg="info" icon="fas fa-list-alt" item="11" title="Kategori Pengetahuan" />
                </div>
            </div>
        </div>
    </div>
@endsection

@push('req-scripts')
    <script></script>
@endpush
