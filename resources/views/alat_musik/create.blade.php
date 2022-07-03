@extends('layouts.master')
@section('content-header', 'Buat ' . $title)

@section('content')
    <div class="col-md-12">
        <div class="card border-0 shadow rounded">
            <div class="card-body">
                <form action="{{ route($route . '.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="font-weight-bold">nama</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" name="nama"
                            value="{{ old('nama') }}" placeholder="Masukkan Judul history">
                        @error('nama')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Deskripsi</label>
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="5"
                            placeholder="Masukkan Deskripsi">{{ old('deskripsi') }}</textarea>
                        @error('deskripsi')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                    <button type="reset" class="btn btn-md btn-warning">RESET</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('req-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('deskripsi');
    </script>
@endpush
