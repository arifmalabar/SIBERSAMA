function pesanBerhasil(pesan, header, ikon)
{
    Swal.fire({
        title: header,
        text: pesan,
        icon: ikon,
        confirmButtonText: 'Oke'
    });
}
function confirmDlg(pesan, header, ikon, confbtn)
{
    swal.fire({
        title: header,
        text: pesan,
        icon: ikon,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: confbtn
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Berhasil!',
            'Your file has been deleted.',
            'success'
          )
        }
      })
}