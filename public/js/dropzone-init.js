function dropzoneInit(arg) {
    return Dropzone.options.fileDropzone = {
        autoProcessQueue: true,
        url: arg.addUrl,
        acceptedFiles: ".jpeg,.jpg,.png",
        addRemoveLinks: true,
        maxFilesize: 8,
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        removedfile: function (file) {
            let name = file.upload.filename;
            $.ajax({
                type: 'POST',
                url: arg.removeUrl,
                data: {
                    "_token": "{{ csrf_token() }}",
                    name: name
                },
                success: function (data) {
                    console.log("File has been successfully removed!!");
                },
                error: function (e) {
                    console.log(e);
                }
            });
            let fileRef;
            return (fileRef = file.previewElement) != null ?
                fileRef.parentNode.removeChild(file.previewElement) : void 0;
        },
        success: function (file, response) {
            console.log(file);
        },
    }
}