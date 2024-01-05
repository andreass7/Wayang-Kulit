<?php $this->extend('layout/layout') ?>
<?php $this->section('containt') ?>

<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h3>Estimasi Produk</h3>
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
    <p>Untuk melakukan estimasi produk silahkan login terlebih dahulu</p>
    <div class="d-flex justify-content-center mb-2">
        <button type="submit" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#login">Masuk Sebagai Admin</button>
    </div>
    </form>
</div>
<!-- end Form -->

<!-- Modal Login -->
<div class="modal" tabindex="-1" id="login">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login Sebagai Admin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/loginUser" method="post">
                    <div class="mb-3">
                        <label for="inputusername" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="inputusername" placeholder="masukkan username">
                    </div>
                    <div>
                        <label for="inputPassword" class="form-label">Password</label>
                        <input type="password" id="password" class="form-control" name="password" placeholder="masukan Password">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" name='login'>Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<?php $this->endSection() ?>