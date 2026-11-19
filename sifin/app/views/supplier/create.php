<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <h1><?= $data['title']; ?></h1>
        </div>
    </section>

    <section class="content">
        <div class="card card-primary">

            <div class="card-header">
                <h3 class="card-title"><?= $data['title']; ?></h3>
            </div>

            <form action="<?= base_url; ?>/supplier/simpanSupplier"
                  method="POST">

                <div class="card-body">

                    <div class="form-group">
                        <label>Nama Supplier</label>
                        <input type="text"
                               class="form-control"
                               name="nama_supplier"
                               maxlength="150"
                               required
                               placeholder="Masukkan nama supplier">
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control"
                                  name="alamat"
                                  rows="3"
                                  required
                                  placeholder="Masukkan alamat supplier"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Nomor HP</label>
                        <input type="text"
                               class="form-control"
                               name="hp"
                               maxlength="20"
                               required
                               placeholder="Masukkan nomor HP">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email"
                               class="form-control"
                               name="email"
                               maxlength="100"
                               required
                               placeholder="Masukkan email supplier">
                    </div>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>

                    <a href="<?= base_url; ?>/supplier"
                       class="btn btn-secondary">
                        Kembali
                    </a>
                </div>

            </form>
        </div>
    </section>
</div>