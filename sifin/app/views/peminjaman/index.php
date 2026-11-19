<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <h1><?= htmlspecialchars($data['title']); ?></h1>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Peminjaman</h3>
            </div>

            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>No. Peminjaman</th>
                            <th>ID Peminjam</th>
                            <th>Tanggal Pinjam</th>
                            <th>Rencana Kembali</th>
                            <th>Kembali Aktual</th>
                            <th>Status</th>
                            <th>ID Lokasi</th>
                            <th>ID User</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if (!empty($data['peminjaman'])): ?>
                            <?php $no = 1; ?>
                            <?php foreach ($data['peminjaman'] as $row): ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= htmlspecialchars($row['no_peminjaman']); ?></td>
                                    <td><?= htmlspecialchars($row['id_peminjam']); ?></td>
                                    <td><?= htmlspecialchars($row['tanggal_pinjam']); ?></td>
                                    <td><?= htmlspecialchars($row['tanggal_rencana_kembali']); ?></td>
                                    <td><?= htmlspecialchars($row['tanggal_kembali_aktual']); ?></td>
                                    <td><?= htmlspecialchars($row['status']); ?></td>
                                    <td><?= htmlspecialchars($row['id_lokasi']); ?></td>
                                    <td><?= htmlspecialchars($row['id_user']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="9" class="text-center">
                                    Belum ada data peminjaman.
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
