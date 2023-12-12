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
        <button type="submit" class="btn btn-light">Masuk Sebagai Admin</button>
    </div>
</div>
<!-- end Form -->

<?php $this->endSection() ?>