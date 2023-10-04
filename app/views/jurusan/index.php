<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Jurusan
            </button>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>jurusan/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="cari jurusan..." name="keyword" id="keyword" aria-describedby="button-addon" autocomplete="off">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <br><br>
    <h1>Daftar Jurusan</h1>
    <ul class="list-group">
        <?php foreach ($data['jurusan'] as $jurusan) : ?>
            <li class="list-group-item d-flex flex-row justify-content-between">
                 Jurusan: <?= $jurusan['nama'] ?>
                <div class="d-flex gap-2">
                    <a href="<?= BASEURL; ?>jurusan/detail/<?= $jurusan['id'] ?>" class="badge text-bg-primary text-decoration-none float-right">detail</a>
                    <a href="<?= BASEURL; ?>jurusan/ubah/<?= $jurusan['id'] ?>" class="badge text-bg-success text-decoration-none float-right tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $jurusan['id']; ?>">ubah</a>
                    <a href="<?= BASEURL; ?>jurusan/hapus/<?= $jurusan['id'] ?>" class="badge text-bg-danger text-decoration-none float-right" onclick="return confirm('apakah anda yakin ingin mengahapus Jurusan yang bernama <?= $jurusan['nama'] ?>?')">hapus</a>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
</div>
</div>

<!-- Modal -->
<div class=" modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Tambah Data Jurusan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>jurusan/tambah" method="post">
                    <input type="hidden" name="id" id="id">

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama: </label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>