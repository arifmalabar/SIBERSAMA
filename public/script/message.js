var btnlog = document.getElementById("btn-logout");
function pesanBerhasil(pesan, header, ikon)
{
    Swal.fire({
        title: header,
        text: pesan,
        icon: ikon,
        confirmButtonText: 'Oke'
    });
}

btnlog.addEventListener('click', function (e) {
  e.preventDefault();
  var link = document.querySelector('.form-logout').getAttribute('action');
    swal.fire({
        title: 'Logout?',
        text: "Anda yakin ingin logout",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya Logout'
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            type: "POST",
            url: link,
            data: $('.form-logout').serialize(),
            success: function (response) {
              Swal.fire(
                'Berhasil',
                'Anda Berhasil logout',
                'danger'
              )
            }
          });
        } else {
          Swal.fire(
            'Gagal!',
            'Anda gagal melakukan aksi',
            'danger'
          )
        }
    })
});

function confirmDlg(pesan, header, ikon, confbtn)
{
    
}