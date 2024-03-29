<!-- Menu Bar -->
<div class="container">
    <h5 style="margin-top:100px; margin-left:30px">Pusat Penjual ( <?= $penjual['name']; ?> )</h5>
    <br>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><?= $this->session->flashdata('pesanInsertProduk'); ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <!-- Akhir Menu Bar -->

    <!-- data -->
    <div class="row">
        <div class="col-lg-3" style="padding: 5px;">
            <div class="kotak">
                <h6>Akun Penjual</h6>

                <img src="<?= base_url(); ?>/assets/img/user/<?= $penjual['image']; ?>" alt="profil User">
                <ul>
                    <li>Nama : <?= $penjual['name']; ?></li>
                    <li>Email : <?= $penjual['email']; ?></li>
                    <li>Tanggal Dibuat : <?= $penjual['date_created']; ?></li>
                    <li><a href="" class="badge badge-primary text-white">Edit Profil</a></li>
                </ul>

                <h6 class="white-text">Produk</h6>
                <ul>
                    <li><a href="<?= base_url('Penjual/createProduk'); ?>">Buat Produk</a></li>
                    <li><a href="<?= base_url('Penjual/daftarProduk'); ?>">Daftar Produk</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-6" style="padding: 5px;">
            <div class="kotak">
                <h6 class="white-text text-center" style="margin: 0;background:rgb(95, 220, 45);padding:5px">Penjualan</h6>
                <div class="row text-center">
                    <div class="col 12 m3 s6">
                        <h6 class="mt--20">Jumlah Penjualan</h6>
                        <h5>20</h5><br>
                    </div>
                    <div class="col 12 m3 s6">
                        <h6 class="mt--20">Total Penjualan</h6>
                        <h5>Rp. 500.000</h5><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>