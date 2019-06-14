<div class="app-title">
    <div>
        <h1><i class="fa fa-shopping-cart"></i> Produk</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item">Produk</li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <?= $this->session->flashdata('pesan'); ?>
        <div class="tile">
            <div class="tile-body">
                <button class="btn btn-primary mb-3" type="button" data-toggle="modal" data-target="#TambahProduk"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Produk</button>
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Gambar</th>
                            <th>Produk</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($produk as $pr) { ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><img style="width: 70px;" src="<?= base_url('assets/img/produk/') . $pr->gambar ?>"></td>
                                <td><?= $pr->nama ?></td>
                                <td><?= $pr->deskripsi ?></td>
                                <td><?= $pr->harga ?></td>
                                <td>
                                    <div class="btn-group"><a class="btn btn-primary" href="#" data-toggle="modal" data-target="#EditProduk<?= $pr->id ?>"><i class="fa fa-lg fa-edit"></i></a><a class="btn btn-danger" href="<?= base_url('admin/produk/hapus_produk/') . $pr->id ?>"><i class="fa fa-lg fa-trash"></i></a></div>
                                </td>
                            </tr>
                            <?php $no++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>





<!-- Modal Tambah Produk -->
<div class="modal fade" id="TambahProduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open_multipart('admin/produk/tambah_produk'); ?>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Produk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Produk">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="harga" name="harga" placeholder="Contoh: 12000">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input type="file" id="gambar" name="gambar">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" name="save" class="btn btn-primary">Tambah</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit Produk -->
<?php foreach ($produk as $pr) { ?>
    <div class="modal fade" id="EditProduk<?= $pr->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('admin/produk/edit_produk'); ?>
                    <input type="hidden" name="id" value="<?= $pr->id ?>">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Produk</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Produk" value="<?= $pr->nama ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="harga" name="harga" placeholder="Contoh: 12000" value="<?= $pr->harga ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi" rows="3"><?= $pr->deskripsi ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Gambar</label>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" id="gambar" name="gambar">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>