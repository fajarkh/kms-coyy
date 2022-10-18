@extends('layouts.admin.master')
@section('content-header', 'Edit ' . $title . ' - ' . $item->nama)

@section('content')
    <div class="col-md-12">
        <div class="card border-0 shadow rounded">
            <div class="card-body">
                <form action="{{ route('history.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="font-weight-bold">Nama</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" name="nama"
                            value="{{ old('nama', $item->nama) }}" placeholder="Masukkan Nama">
                        @error('judul')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Gambar</label>
                        <input type="file" class="form-control" name="gambar">
                        @error('gambar')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Deskripsi</label>
                        <div id="toolbar-container"></div>
                        <div id="deskripsi">{!! $item->deskripsi !!}</div>
                        {{ Form::hidden('deskripsi') }}
                        @error('deskripsi')
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

    <script src="{{ asset('lte/plugins/ckeditor/build/ckeditor.js') }}"></script>
    <script>
        let editor;
        DecoupledDocumentEditor
            .create(document.querySelector('#deskripsi')).then(newEditor => {
                editor = newEditor;
                const toolbarContainer = document.querySelector('#toolbar-container');
                toolbarContainer.appendChild(newEditor.ui.view.toolbar.element);
            }).catch(error => {
                console.error(error);
            });

        $(document).on("click", ":submit", function(e) {
            e.preventDefault();
            $('[name="deskripsi"]').val(editor.getData());
            $(this).closest('form').submit();
        });
    </script>
@endpush
