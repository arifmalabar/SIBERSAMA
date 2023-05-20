var btnlog = document.getElementById("btn-logout");
const flashdata = $('.flash-data').data('flashdata');
const flashdata1 = $('.flash-error').data('flashdata');
if(flashdata){
    pesanBerhasil(flashdata, "Berhasil", "success");
} else if(flashdata1){
    pesanGagal(flashdata1, "Error", "error");
}
function pesanBerhasil(pesan, header, ikon)
{
    Swal.fire({
        title: header,
        text: pesan,
        icon: ikon,
        confirmButtonText: 'Oke'
    });
}
function pesanGagal(pesan, header, ikon)
{
    Swal.fire({
        title: header,
        text: pesan,
        icon: ikon,
        confirmButtonText: 'Oke'
    });
}
$('.btn_del').on('click', function (e) {
    e.preventDefault();
    swal.fire({
        title: 'Mengapus data?',
        text: "Anda yakin ingin mengahpus data",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus Data'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = $('.btn_del').attr('href');
        } else {
            Swal.fire(
                'Gagal!',
                'Anda gagal melakukan aksi',
                'danger'
            )
        }
    })
})
/*btn_del.addEventListener('click', function (e) {

})*/
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
              );
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
