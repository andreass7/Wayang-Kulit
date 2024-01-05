<?php $this->extend('layout/layout') ?>
<?php $this->section('containt') ?>

<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2></h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Produk</li>
            </ol>
        </div>
    </div>
</section><!-- End Breadcrumbs Section -->

<!-- ======= Produk Section ======= -->
<section id="portfolio" class="portfolio section-bg">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Produk Wayang</h2>
        </div>

        <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">Wayang</li>
                    <li data-filter=".filter-card">Dokumentasi</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-1.jpeg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Wayang Gatot Kaca</h4>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-1.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            <a href="#" i class="bx bx-link" data-bs-toggle="modal" data-bs-target="#wayang1" title="More Details"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-3.jpeg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Wayang Buto Geni</h4>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-3.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            <a href="#" title="More Details"><i class="bx bx-link" data-bs-toggle="modal" data-bs-target="#wayang2"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-6.jpeg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Wayang Kresna</h4>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-6.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            <a href="#" title="More Details"><i class="bx bx-link" data-bs-toggle="modal" data-bs-target="#wayang3"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-7.jpeg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Dokumentasi 1</h4>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-7.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-4.jpeg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Dokumentasi 2</h4>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-4.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-8.jpeg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Dokumentasi 3</h4>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-8.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Produk Section -->

<!-- Modal Gatot Kaca -->
<div class="modal fade" id="wayang1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="wayang1"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="mb-5">
                        <div class="portfolio-info">
                            <h3>Wayang Gatot Kaca</h3>
                            <ul>
                                <li><strong>Kulit yang dibutuhkan</strong>: 60 cm</li>
                                <li><strong>Cat warna yang dibutuhkan</strong>: 8 Jenis Warna </li>
                                <li><strong>Waktu Pengerjaan</strong>: 3 bulan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Buto Geni -->
<div class="modal fade" id="wayang2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="wayang2"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="mb-5">
                        <div class="portfolio-info">
                            <h3>Wayang Buto Geni</h3>
                            <ul>
                                <li><strong>Kulit yang dibutuhkan</strong>: 70 cm</li>
                                <li><strong>Cat warna yang dibutuhkan</strong>: 7 Jenis Warna </li>
                                <li><strong>Waktu Pengerjaan</strong>: 4 bulan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Gatot Kaca -->
<div class="modal fade" id="wayang3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="wayang3"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="mb-5">
                        <div class="portfolio-info">
                            <h3>Wayang Kresna</h3>
                            <ul>
                                <li><strong>Kulit yang dibutuhkan</strong>: 50 cm</li>
                                <li><strong>Cat warna yang dibutuhkan</strong>: 7 Jenis Warna </li>
                                <li><strong>Waktu Pengerjaan</strong>: 2 bulan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection() ?>