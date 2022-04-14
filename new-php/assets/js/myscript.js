const flashData = $('.flash-data').data('flashdata');

$(window).on('load', function () {
    $('.fd').addClass('muncul');
});

if (flashData) {
    Swal({
        title: 'Data Pasien',
        text: 'Berhasil ' + flashData,
        type: 'success'
    });
}

// tombol-hapus
$('.tombol-hapus').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal({
        title: 'Apakah anda yakin',
        text: "data pasien akan dihapus",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus!'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })
});