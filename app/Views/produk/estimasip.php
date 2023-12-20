<?php $this->extend('layout/layout') ?>
<?php $this->section('containt') ?>

<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Estimasi Produk</h1>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Estimasi Produk</li>
            </ol>
        </div>
    </div>
</section><!-- End Breadcrumbs Section -->

<!-- Form -->
<br></br>
<div class="container">
    <form action="<?php base_url('/estimasiProduk') ?>" method="post">
        <div class=" mb-3">
            <label for="kulit" class="form-label">Kulit</label>
            <input type="text" class="form-control" id="kulit" name="kulit" placeholder="Panjang Kulit yang dibtutuhkan(cm)">
        </div>
        <div class="mb-3">
            <label for="waktu" class="form-label">Waktu</label>
            <input type="text" class="form-control" id="waktu" name="waktu" placeholder="Waktu Yang dibutuhkan">
        </div>
        <div class="mb-3">
            <label for="cat" class="form-label">Cat</label>
            <input type="text" class="form-control" id="cat" name="cat" placeholder="Cat yang dibutuhkan">
        </div>
        <div class="d-flex justify-content-center mb-2">
            <button type="submit" class="btn btn-dark" name="btnhitung">Estimasi</button>
            <!-- <button type="submit" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#login">Masuk Sebagai Admin</button> -->
        </div>
    </form>
</div>
<!-- end Form -->

<!-- Modal Login -->
<!-- <div class="modal" tabindex="-1" id="login">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login Sebagai Admin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <label for="inputPassword5" class="form-label">Password</label>
                <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                <div id="passwordHelpBlock" class="form-text">
                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div> -->
<!-- End Modal -->
<?php $this->endSection() ?>