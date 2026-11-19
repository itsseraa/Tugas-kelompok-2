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
                    <h3 class="card-title">Tabel Data Barang Keluar</h3>
                    <div class="card-tools">
                        <a href="<?= base_url; ?>/barangkeluar/tambah"
                           class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> Tambah Barang Keluar
                        </a>
                    </div>
                </div>

                <div class="card-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Keluar</th>
                                <th>No. Transaksi</th>
                                <th>Tanggal Keluar</th>
                                <th>Penerima</th>
                                <th>ID Lokasi</th>
                                <th>ID User</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php if (!empty($data['barangKeluar'])) : ?>
                                <?php $no = 1; ?>
                                <?php foreach ($data['barangKeluar'] as $barang) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= htmlspecialchars((string)$barang['id_keluar']); ?></td>
                                        <td><?= htmlspecialchars($barang['no_transaksi']); ?></td>
                                        <td><?= htmlspecialchars($barang['tanggal_keluar']); ?></td>
                                        <td><?= htmlspecialchars($barang['penerima']); ?></td>
                                        <td><?= htmlspecialchars((string)$barang['id_lokasi']); ?></td>
                                        <td><?= htmlspecialchars((string)$barang['id_user']); ?></td>
                                        <td><?= htmlspecialchars($barang['keterangan'] ?? ''); ?></td>
                                        <td>
                                            <a href="<?= base_url; ?>/barangkeluar/edit/<?= urlencode((string)$barang['id_keluar']); ?>"
                                               class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>

                                            <form action="<?= base_url; ?>/barangkeluar/hapus/<?= urlencode((string)$barang['id_keluar']); ?>"
                                                  method="POST"
                                                  style="display:inline;"
                                                  onsubmit="return confirm('Yakin ingin menghapus data barang keluar ini?');">
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
                                    <td colspan="9" class="text-center">
                                        Belum ada data barang keluar.
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