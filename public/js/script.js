$(function () {
  $('.tombolTambahData').on('click', function () {
    $('#formModalLabel').html('Tambah Data Pengunjung');
    $('.modal-footer button[type=submit]').html('Tambah Data');

    $('.itung').keyup(function () {
      let dewasa = $('#dewasa').val();
      if (dewasa != '') {
        dewasa = $('#dewasa').val();
      } else {
        dewasa = '0';
      }

      let anak = $('#anak').val();
      if (anak != '') {
        anak = $('#anak').val();
      } else {
        anak = '0';
      }

      let harga = $('#harga').val();
      if (harga != '') {
        harga = $('#harga').val();
      } else {
        harga = '0';
      }

      let totalDewasa = parseInt(dewasa) * 10000;
      let totalAnak = parseInt(anak) * 10000;
      let percent = (totalAnak / 100) * 50;

      let total = parseInt(totalDewasa) + parseInt(percent);
      $('#total').val(total);
    });
  });

  $('.tampilModalUbah').on('click', function () {
    $('#formModalLabel').html('Ubah Data Pengunjung');
    $('.modal-footer button[type=submit]').html('Ubah Data');

    const id = $(this).data('id');

    $.ajax({
      url: 'http:/localhost/wisata/public/tamu/getubah',
      data: { id: id },
      method: 'post',
      dataType: 'json',
      success: function (data) {
        $('#nama_pemesan').val(data.nama_pemesan);
      },
    });
  });
});
