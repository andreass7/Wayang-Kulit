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
    <div class=" mb-3">
        <label for="formGroupExampleInput" class="form-label">Example label</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Another label</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Another label</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Another label</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
    </div>
    <div class="d-flex justify-content-center mb-2">
        <button type="submit" class="btn btn-dark">Estimasi</button>
        <button type="submit" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#login">Masuk Sebagai Admin</button>
    </div>
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
</div>
<!-- End Modal -->
<?php $this->endSection() ?>