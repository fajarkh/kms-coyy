@extends('layouts.admin.master')
@section('content-header', 'Edit ' . $title . ' - ' . $item->nama)

@section('content')
    <div class="col-md-12">
        <div class="card border-0 shadow rounded">
            <div class="card-body">
                <form action="{{ route($route . '.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="font-weight-bold">Gambar</label>
                        <input type="file" class="form-control" name="gambar">
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                            value="{{ old('nama', $item->nama) }}" placeholder="Masukkan Nama">
                        @error('nama')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- <div class="form-group">
                        <label class="font-weight-bold">Deskripsi</label>
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="5"
                            placeholder="Masukkan Deskripsi Blog">{{ old('deskripsi', $item->deskripsi) }}</textarea>
                        @error('deskripsi')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div> --}}
                    @php $deskripsi = str_replace('&', '&amp;', $item->deskripsi); @endphp
                    <div class="form-group">
                        <label class="font-weight-bold">Deskripsi</label>
                        <div id="toolbar-container"></div>
                        <div id="deskripsi"></div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('lte/plugins/ckeditor/build/ckeditor.js') }}"></script>
    <script>
        let editor;
        DecoupledDocumentEditor
            .create(document.querySelector('#deskripsi')).then(newEditor => {
                editor = newEditor;
                const toolbarContainer = document.querySelector('#toolbar-container');
                toolbarContainer.appendChild(newEditor.ui.view.toolbar.element);
                // let dataDeskripsi = 
                // editor.setData('{{ trim($item->deskripsi) }}');
            }).catch(error => {
                console.error(error);
            });

        $(document).ready(function() {
            console.log('<p>{{ $item->deskripsi }}</p>');
            // editor.setData('{{ $deskripsi }}').insertHtml();
            // editor.insertHtml('<p>This is a new paragraph.</p>');
            $('#deskripsi').empty().append('<p>{{ $deskripsi }}</p>');
            // console.log('{{ $item->deskripsi }}');
            // $('#deskripsi').append('{{ $deskripsi }}');
        });
    </script>
@endpush
