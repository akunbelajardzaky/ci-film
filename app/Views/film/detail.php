<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-2">
    <h1>Detail Buku</h1>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="/img/<?= $books['sampul']; ?>" class="card-img" alt="sampul">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $books['judul']; ?></h5>
                    <p class="card-text">Penulis : <?= $books['penulis']; ?></p>
                    <p class="card-text">Penerbit : <?= $books['penerbit']; ?></p>
                   
                    <!-- <a href="" class="btn btn-danger">Hapus</a> -->
                    <div class="mt-2">
                        <a href="/books">Kembali ke Daftar Buku</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>