<div class="container mt-5">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col--6">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal"
                data-bs-target="#formModal">
                Tambah Data Pengunjung
            </button>
            <br><br>
            <!-- akhir button -->
            <h3>Daftar Pengunjung</h3>
            <ul class="mt-3">
                <?php foreach( $data['tamu'] as $tamu ) : ?>
                <div class="list-group col-9">
                    <li class="list-group-item list-group-item-action list-group-item-info ">
                        <?= $tamu['nama_pemesan']; ?>
                        <a href="<?= BASEURL; ?>/tamu/hapus/<?= $tamu['id']; ?>" class="badge text-bg-danger float-end"
                            onclick="return confirm('Yakin ?')">Hapus</a>

                        <a href="<?= BASEURL; ?>/tamu/ubah/<?= $tamu['id']; ?>"
                            class="badge text-bg-warning float-end tampilModalUbah me-2" data-bs-toggle="modal"
                            data-bs-target="#formModal" data-id="<?= $tamu['id']; ?>">Ubah</a>

                        <a href="<?= BASEURL; ?>/tamu/detail/<?= $tamu['id']; ?>"
                            class="badge text-bg-success float-end me-2">Detail</a>

                    </li>
                </div>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data Pengunjung</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL; ?>/tamu/tambah" method="POST">

                    <div class="mb-3">
                        <label for="nama_pemesan" class="form-label">Nama Pemesan</label>
                        <input type="text" class="form-control" id="nama_pemesam" name="nama_pemesan">
                    </div>

                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="number" min="1" max="9999999999999999" class="form-control" id="ni" name="nik">
                    </div>

                    <div class="mb-3">
                        <label for="no_hp" class="form-label">No Handphone</label>
                        <input type="number" class="form-control" id="no_hp" name="no_hp">
                    </div>
                    <br>

                    <select for="tempat_wisata" class="form-select" aria-label="Default select example"
                        id="tempat_wisata" name="tempat_wisata">
                        <option selected>Tempat Wisata</option>
                        <option value="taman safari">Taman Safari</option>
                        <option value="the highland park">The Highland Park</option>
                        <option value="kebun raya">Kebun Raya</option>
                    </select>
                    <br><br>
                    <div class="mb-3">
                        <label for="dewasa" class="form-label">Pengunjung Dewasa</label>
                        <input type="number" class="form-control itung" id="dewasa" name="dewasa">
                    </div>

                    <div class="mb-3">
                        <label for="anak" class="form-label">Pengunjung Anak-anak</label>
                        <input type="number" class="form-control itung" id="anak" name="anak">
                    </div>

                    <div class="mb-3">
                        <label for="tgl_bln_thn" class="form-label">Tanggal Kunjungan</label>
                        <input type="date" min="1970-12-30" class="form-control" id="tgl_bln_thn" name="tgl_bln_thn">
                    </div>

                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga Tiket</label>
                        <input type="number" class="form-control itung" id="harga" name="harga" readonly
                            placeholder="10000">
                    </div>

                    <div class="mb-3">
                        <label for="total" class="form-label">Total Harga Tiket</label>
                        <input type="text" class="form-control" id="total" name="total" readonly>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- akhir modal -->