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
    <form action="/estimasip" method="post">
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
        </div>
    </form>
</div>
<!-- end Form -->

<?php $this->endSection() ?>