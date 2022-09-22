@extends('layouts.admin.master')
@section('content-header', 'Buat ' . $title)

@section('content')
    <div class="col-md-12">
        <div class="card border-0 shadow rounded">
            <div class="card-body">
                <form action="{{ route($route . '.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="font-weight-bold">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                            value="{{ old('nama') }}" placeholder="Masukkan Nama">
                        @error('nama')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Gambar</label>
                        <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar">
                        @error('gambar')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Deskripsi</label>
                        <div id="toolbar-container"></div>
                        <div id="deskripsi">{{ old('deskripsi') }}</div>
                        {{ Form::hidden('deskripsi') }}
                        @error('deskripsi')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" id="btn-submit" class="btn btn-md btn-primary">SIMPAN</button>
                    <button type="reset" class="btn btn-md btn-warning">RESET</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('req-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('lte/plugins/ckeditor/build/ckeditor.js') }}"></script>
    <script src="{{ asset('js/custom-image-upload.js') }}"></script>
    <script>
        let editor;
        let imageUploadUrl = "{{ route('upload', ['_token' => csrf_token()]) }}";
        DecoupledDocumentEditor
            .create(document.querySelector('#deskripsi'), {
                extraPlugins: [CustomUploadAdapterPlugin]
            }).then(newEditor => {
                editor = newEditor;
                const toolbarContainer = document.querySelector('#toolbar-container');
                toolbarContainer.appendChild(editor.ui.view.toolbar.element);
            }).catch(error => {
                console.error(error);
            });

        $(document).on("click", "#btn-submit", function(e) {
            e.preventDefault();
            $('[name="deskripsi"]').val(editor.getData());
            $(this).closest('form').submit();
        });
    </script>
@endpush
