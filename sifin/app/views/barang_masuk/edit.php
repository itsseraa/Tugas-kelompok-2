<?php $b = $data['barang_masuk']; ?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>Edit Barang Masuk</h1>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url; ?>/barangmasuk/updateBarangMasuk"
                          method="POST">

                        <input type="hidden" name="id_masuk"
                               value="<?= htmlspecialchars((string)$b['id_masuk']); ?>">

                        <div class="form-group">
                            <label>No. Transaksi</label>
                            <input type="text" name="no_transaksi"
                                   class="form-control"
                                   value="<?= htmlspecialchars($b['no_transaksi']); ?>"
                                   required>
                        </div>

                        <div class="form-group">
                            <label>Tanggal Masuk</label>
                            <input type="date" name="tanggal_masuk"
                                   class="form-control"
                                   value="<?= htmlspecialchars($b['tanggal_masuk']); ?>"
                                   required>
                        </div>

                        <div class="form-group">
                            <label>ID Supplier</label>
                            <input type="number" name="id_supplier"
                                   class="form-control"
                                   value="<?= htmlspecialchars((string)$b['id_supplier']); ?>"
                                   min="1" required>
                        </div>

                        <div class="form-group">
                            <label>ID User</label>
                            <input type="number" name="id_user"
                                   class="form-control"
                                   value="<?= htmlspecialchars((string)$b['id_user']); ?>"
                                   min="1" required>
                        </div>

                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="keterangan"
                                      class="form-control"><?= htmlspecialchars($b['keterangan'] ?? ''); ?></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Update
                        </button>

                        <a href="<?= base_url; ?>/barangmasuk"
                           class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>