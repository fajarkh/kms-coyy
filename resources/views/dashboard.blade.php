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
                <div class="form-group">
                    <img src="{{ asset('lte/dist/img/photo3.jpg') }}" width="500" height="500"
                        alt="tempat ttd" style="border: 1px solid rgb(194, 194, 194);" id="imgmarker">
                    <small>klik kolom diatas untuk ttd</small>
                    {{-- {{ Form::hidden('implentasi') }} --}}
                    <input name="implentasi" type="hidden" value="{&quot;width&quot;:498,&quot;height&quot;:498,&quot;markers&quot;:[{&quot;drawingImgUrl&quot;:&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJIAAAAXCAYAAADgBhblAAAAAXNSR0IArs4c6QAAArZJREFUaEPtmr+LE0EUx9/bPSRok90YQfEPEMTCxkKssrOtiCBX+gdYK2hlKWih+AfYm1Ibb2fPA4vrBRUbSyFcvDUHp4KZeTLZ3A/IXjKTnT2T25kihM28H/N9H97OzgYzxq5CwRgi9oqut5Pke9F1d63eCmDGGJWSgEjZk0TstTi/UMqXM15aBcqDdMTSFV2YQ6aGAIA3QZreXlqlXOJTFagMJG3dc9b2u6Jiz0MUhDggKdNwfX1V25eb+N8UQNPIWRz3QYgQEAFQfVQ/xt1NBmnqVx/NRZhHAasgZIxtgZStyiEjkoA4RIAdCfC1sbv74vTmZnceAZyNHQWsgjQrpYyxHhCdVdun/bnH0NVGHS0P+Cvg/MysPN3v5gocK0jm6QFkUaS6j808HUzzFGKGjc0CVZDegcssil4BwF1LUDmYLFdraUCatu5Bp/NYAKyi511EogYBTG7KJ7uag8kiTCcCJB09Cm+RB+dcMPrq+7+B6JsYDh+2Nzbe6vh1c3IFagOSWmyp/ZYiDfFLwPllB8+kArUCqTRMh/UbnZx6n4IkueLAqllH2it4qc5URA2Retf4rMX5g7pCVbuOpFPofhw/WZHyjkQ8D1I2Rvt0zSMIBBBNzld04pykOQ4kw2pmUfQX1FOhDlj5Zl6Q5z0Nk+SRYailmu5AKlGubcY+I9ElLaj24ozhQt9/3lxbu18i/EKZOpAslWPUqRDt3dLyp0QBRB+bYXgNu131V5yFHQ4ky6XZZuwlEt0z6lIGORw6+jKwGp/1IPYDztvGhhoGDiQNkcpOGTD2QQJcByKsCjDjHBG3giQ5Z2x3hIEDyZaSFvxknc5r8P2bIOWphQFuvC4E+ENE74I0vVW0VAeSBQCqdrHD2HsBcAOIfJpy9qfzIFlVrg6kqpRdUL8/4/gHEYW20/sHi+XfBMNrpBoAAAAASUVORK5CYII=&quot;,&quot;left&quot;:171,&quot;top&quot;:48,&quot;width&quot;:146,&quot;height&quot;:23,&quot;rotationAngle&quot;:0,&quot;visualTransformMatrix&quot;:{&quot;a&quot;:1,&quot;b&quot;:0,&quot;c&quot;:0,&quot;d&quot;:1,&quot;e&quot;:0,&quot;f&quot;:0},&quot;containerTransformMatrix&quot;:{&quot;a&quot;:1,&quot;b&quot;:0,&quot;c&quot;:0,&quot;d&quot;:1,&quot;e&quot;:0,&quot;f&quot;:0},&quot;typeName&quot;:&quot;FreehandMarker&quot;,&quot;state&quot;:&quot;select&quot;}]}">
                    {!! $errors->first('implentasi', '<p class="form-text">:message</p>') !!}
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d785.9600047949851!2d117.14548551144215!3d-0.4542341642842458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1656990615578!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('req-scripts')
    {{-- <script src="{{ asset('lte/plugins/dropzone/min/dropzone.min.js') }}"></script> --}}
    <script src="{{ asset('vendor/markerjs2/markerjs2.js') }}"></script>
    <script src="{{ asset('js/image-marker.js') }}"></script>
    <script>
        $(() => {
            $('#imgmarker').click();
        });
    </script>
@endpush
