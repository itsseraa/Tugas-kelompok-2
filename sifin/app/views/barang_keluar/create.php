<div class="content-wrapper">
    <section class="content-header">
        <h1>Tambah Barang Keluar</h1>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url; ?>/barangkeluar/simpanBarangKeluar"
                          method="POST">

                        <div class="form-group">
                            <label>No. Transaksi</label>
                            <input type="text" name="no_transaksi"
                                   class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Tanggal Keluar</label>
                            <input type="date" name="tanggal_keluar"
                                   class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Penerima</label>
                            <input type="text" name="penerima"
                                   class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>ID Lokasi</label>
                            <input type="number" name="id_lokasi"
                                   class="form-control" min="1" required>
                        </div>

                        <div class="form-group">
                            <label>ID User</label>
                            <input type="number" name="id_user"
                                   class="form-control" min="1" required>
                        </div>

                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="keterangan"
                                      class="form-control"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Simpan
                        </button>

                        <a href="<?= base_url; ?>/barangkeluar"
                           class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>