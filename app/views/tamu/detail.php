<div class="container mt-5">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['tamu']['nama_pemesan']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted">NIK : <?= $data['tamu']['nik']; ?></h6>
            <p class="card-text">No Hp : <?= $data['tamu']['no_hp']; ?></p>
            <p class="card-text">Tempat Wisata : <?= $data['tamu']['tempat_wisata']; ?></p>
            <p class="card-text">Pengunjung Dewasa : <?= $data['tamu']['dewasa']; ?></p>
            <p class="card-text">Pengunjung Anak-anak : <?= $data['tamu']['anak']; ?></p>
            <p class="card-text">Tanggal Kunjungan : <?= $data['tamu']['tgl_bln_thn']; ?></p>
            <p class="card-text">Harga : <?= $data['tamu']['harga']; ?></p>
            <p class="card-text">Total Harga : <?= $data['tamu']['total']; ?></p>

            <a href="<?= BASEURL; ?>/tamu" class="card-link">Kembali</a>
        </div>
    </div>

</div>