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
                <h3 class="card-title">Data Supplier</h3>

                <div class="card-tools">
                    <a href="<?= base_url; ?>/supplier/tambah"
                       class="btn btn-primary btn-sm">
                        Tambah Supplier
                    </a>
                </div>
            </div>

            <div class="card-body">

                <form action="<?= base_url; ?>/supplier/cari"
                      method="POST" class="mb-3">

                    <div class="input-group" style="max-width: 650px;">

                        <input type="text"
                               name="key"
                               class="form-control"
                               placeholder="Cari supplier..."
                               value="<?= htmlspecialchars(
                                   $data['key'] ?? '',
                                   ENT_QUOTES,
                                   'UTF-8'
                               ); ?>">

                        <div class="input-group-append">
                            <button type="submit"
                                    class="btn btn-outline-secondary">
                                Cari Data
                            </button>

                            <a href="<?= base_url; ?>/supplier"
                               class="btn btn-outline-danger">
                                Reset
                            </a>
                        </div>

                    </div>
                </form>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover">

                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Supplier</th>
                                <th>Alamat</th>
                                <th>HP</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php if (!empty($data['supplier'])): ?>

                                <?php $no = 1; ?>

                                <?php foreach ($data['supplier'] as $row): ?>

                                    <tr>
                                        <td><?= $no++; ?></td>

                                        <td><?= htmlspecialchars(
                                            $row['nama_supplier'],
                                            ENT_QUOTES,
                                            'UTF-8'
                                        ); ?></td>

                                        <td><?= htmlspecialchars(
                                            $row['alamat'],
                                            ENT_QUOTES,
                                            'UTF-8'
                                        ); ?></td>

                                        <td><?= htmlspecialchars(
                                            $row['hp'],
                                            ENT_QUOTES,
                                            'UTF-8'
                                        ); ?></td>

                                        <td><?= htmlspecialchars(
                                            $row['email'],
                                            ENT_QUOTES,
                                            'UTF-8'
                                        ); ?></td>

                                        <td>
                                            <a href="<?= base_url; ?>/supplier/edit/<?= $row['id_supplier']; ?>"
                                               class="btn btn-info btn-sm">
                                                Edit
                                            </a>

                                            <a href="<?= base_url; ?>/supplier/hapus/<?= $row['id_supplier']; ?>"
                                               class="btn btn-danger btn-sm"
                                               onclick="return confirm('Yakin ingin menghapus supplier ini?')">
                                                Hapus
                                            </a>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>

                            <?php else: ?>

                                <tr>
                                    <td colspan="6" class="text-center">
                                        Belum ada data supplier.
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