@extends('layouts.master')
@section('content-header', 'Edit ' . $title . ' - ' . $item->judul)

@section('content')
    <div class="col-md-12">
        <div class="card border-0 shadow rounded">
            <div class="card-body">
                <form action="{{ route('history.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="font-weight-bold">Gambar</label>
                        <input type="file" class="form-control" name="gambar">
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Judul</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                            value="{{ old('judul', $item->judul) }}" placeholder="Masukkan Judul">

                        @error('judul')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Konten</label>
                        <textarea class="form-control @error('konten') is-invalid @enderror" name="konten" rows="5"
                            placeholder="Masukkan Konten Blog">{{ old('konten', $item->konten) }}</textarea>

                        @error('konten')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
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
