function sweetAlertComponent(arg) {
    if (arg.type === 'delete') {
        Swal.fire({
            title: 'Anda Yakin?',
            text: "Anda tidak akan dapat mengembalikan ini!",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus',
            cancelButtonText: "Batal",
        }).then((result) => {
            if (result.value) {
                arg.form.submit();
            }
        });
    }
}