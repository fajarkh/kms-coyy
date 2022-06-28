@extends('layouts.master')
@section('content-header', 'Buat Data Ritual')

@section('content')
    <div class="col-md-12">
        <div class="card border-0 shadow rounded">
            <div class="card-body">
                <form action="{{ route('history.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="font-weight-bold">Judul</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                            value="{{ old('judul') }}" placeholder="Masukkan Judul history">
                        @error('judul')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('jenis', 'Jenis *') !!}
                        {!! Form::select('jenis', ['L' => 'Laki-laki', 'P' => 'Perempuan'], null, ['class' => 'custom-select', 'placeholder' => 'Pilih Jenis']) !!}
                        @error('judul')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Konten</label>
                        <textarea class="form-control @error('konten') is-invalid @enderror" name="konten" rows="5"
                            placeholder="Masukkan Konten history">{{ old('konten') }}</textarea>

                        @error('konten')
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
        CKEDITOR.replace('konten');
    </script>
@endpush
