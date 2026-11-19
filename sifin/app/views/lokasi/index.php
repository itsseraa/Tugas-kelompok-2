<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <h1><?= $data['title']; ?></h1>
        </div>
    </section>
    <section class="content">
        <?php Flasher::Message(); ?>

        <div class="card">

            <div class="card-header">
                <h3 class="card-title">Data Lokasi</h3>

                <div class="card-tools">
                    <a href="<?= base_url; ?>/lokasi/tambah"
                       class="btn btn-primary btn-sm">
                        <i class="fas fa-plus"></i> Tambah Lokasi
                    </a>
                </div>
            </div>

            <div class="card-body">

                <!-- Form pencarian -->
                <form action="<?= base_url; ?>/lokasi/cari"
                      method="POST" class="mb-3">

                    <div class="input-group" style="max-width: 650px;">

                        <input type="text"
                               name="key"
                               class="form-control"
                               placeholder="Cari lokasi..."
                               value="<?= htmlspecialchars($data['key'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">

                        <div class="input-group-append">
                            <button type="submit"
                                    class="btn btn-outline-secondary">
                                Cari Data
                            </button>

                            <a href="<?= base_url; ?>/lokasi"
                               class="btn btn-outline-danger">
                                Reset
                            </a>
                        </div>

                    </div>
                </form>

                <!-- Tabel lokasi -->
                <div class="table-responsive">

                    <table class="table table-bordered table-hover">

                        <thead>
                            <tr>
                                <th style="width: 40px;">#</th>
                                <th>Nama Lokasi</th>
                                <th style="width: 150px;">Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php if (!empty($data['lokasi'])): ?>

                                <?php $no = 1; ?>

                                <?php foreach ($data['lokasi'] as $row): ?>

                                    <tr>
                                        <td><?= $no++; ?></td>

                                        <td>
                                            <?= htmlspecialchars(
                                                $row['nama_lokasi'],
                                                ENT_QUOTES,
                                                'UTF-8'
                                            ); ?>
                                        </td>

                                        <td>
                                            <a href="<?= base_url; ?>/lokasi/edit/<?= $row['id_lokasi']; ?>"
                                               class="btn btn-info btn-sm">
                                                Edit
                                            </a>

                                            <a href="<?= base_url; ?>/lokasi/hapus/<?= $row['id_lokasi']; ?>"
                                               class="btn btn-danger btn-sm"
                                               onclick="return confirm('Yakin ingin menghapus lokasi ini?')">
                                                Hapus
                                            </a>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>

                            <?php else: ?>

                                <tr>
                                    <td colspan="3" class="text-center">
                                        Belum ada data lokasi.
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