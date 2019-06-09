<div class="bg-light py-3">
    <div class="container">
        <h4 class="text-secondary">Produk dari Sampah</h4>
    </div>
</div>
<div class="container">
    <div class="row p-5">
        <?php foreach ($produk as $pr) { ?>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <figure class="card card-product">
                    <div class="img-wrap">
                        <img src="<?= base_url('assets/img/produk/') . $pr->gambar; ?>" class="img-fluid">
                        <a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
                    </div>
                    <figcaption class="info-wrap">
                        <a href="#" class="title"><?= $pr->nama ?></a>
                        <div class="action-wrap">
                            <a href="#" class="btn btn-primary btn-sm float-right"> Order </a>
                            <div class="price-wrap h5">
                                <span class="price-new">Rp. <?= $pr->harga ?></span>
                            </div> <!-- price-wrap.// -->
                        </div> <!-- action-wrap -->
                    </figcaption>
                </figure> <!-- card // -->
            </div> <!-- col // -->
        <?php } ?>
    </div> <!-- row.// -->
</div>