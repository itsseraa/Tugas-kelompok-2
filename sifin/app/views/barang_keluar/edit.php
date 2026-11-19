<?php $b = $data['barangKeluar']; ?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>Edit Barang Keluar</h1>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url; ?>/barangkeluar/updateBarangKeluar"
                          method="POST">

                        <input type="hidden" name="id_keluar"
                               value="<?= htmlspecialchars((string)$b['id_keluar']); ?>">

                        <div class="form-group">
                            <label>No. Transaksi</label>
                            <input type="text" name="no_transaksi"
                                   class="form-control"
                                   value="<?= htmlspecialchars($b['no_transaksi']); ?>"
                                   required>
                        </div>

                        <div class="form-group">
                            <label>Tanggal Keluar</label>
                            <input type="date" name="tanggal_keluar"
                                   class="form-control"
                                   value="<?= htmlspecialchars($b['tanggal_keluar']); ?>"
                                   required>
                        </div>

                        <div class="form-group">
                            <label>Penerima</label>
                            <input type="text" name="penerima"
                                   class="form-control"
                                   value="<?= htmlspecialchars($b['penerima']); ?>"
                                   required>
                        </div>

                        <div class="form-group">
                            <label>ID Lokasi</label>
                            <input type="number" name="id_lokasi"
                                   class="form-control"
                                   value="<?= htmlspecialchars((string)$b['id_lokasi']); ?>"
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

                        <a href="<?= base_url; ?>/barangkeluar"
                           class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>