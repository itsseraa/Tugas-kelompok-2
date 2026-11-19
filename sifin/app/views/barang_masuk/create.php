<div class="content-wrapper">
    <section class="content-header">
        <h1>Tambah Barang Masuk</h1>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url; ?>/barangmasuk/simpanBarangMasuk"
                          method="POST">

                        <div class="form-group">
                            <label>No. Transaksi</label>
                            <input type="text" name="no_transaksi"
                                   class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Tanggal Masuk</label>
                            <input type="date" name="tanggal_masuk"
                                   class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>ID Supplier</label>
                            <input type="number" name="id_supplier"
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

                        <a href="<?= base_url; ?>/barangmasuk"
                           class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>