<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <h1><?= $data['title']; ?></h1>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <?php Flasher::Message(); ?>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Barang Masuk</h3>
                    <div class="card-tools">
                        <a href="<?= base_url; ?>/barangmasuk/tambah"
                           class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> Tambah Barang Masuk
                        </a>
                    </div>
                </div>

                <div class="card-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No. Transaksi</th>
                                <th>Tanggal Masuk</th>
                                <th>ID Supplier</th>
                                <th>ID User</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($data['barang_masuk'])) : ?>
                                <?php $no = 1; ?>
                                <?php foreach ($data['barang_masuk'] as $row) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= htmlspecialchars($row['no_transaksi']); ?></td>
                                        <td><?= htmlspecialchars($row['tanggal_masuk']); ?></td>
                                        <td><?= htmlspecialchars((string)$row['id_supplier']); ?></td>
                                        <td><?= htmlspecialchars((string)$row['id_user']); ?></td>
                                        <td><?= htmlspecialchars($row['keterangan'] ?? ''); ?></td>
                                        <td>
                                            <a href="<?= base_url; ?>/barangmasuk/edit/<?= urlencode((string)$row['id_masuk']); ?>"
                                               class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>

                                            <form action="<?= base_url; ?>/barangmasuk/hapus/<?= urlencode((string)$row['id_masuk']); ?>"
                                                  method="POST"
                                                  style="display:inline;"
                                                  onsubmit="return confirm('Yakin ingin menghapus data barang masuk ini?');">
                                                <button type="submit"
                                                        class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i> Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="7" class="text-center">
                                        Belum ada data barang masuk.
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>