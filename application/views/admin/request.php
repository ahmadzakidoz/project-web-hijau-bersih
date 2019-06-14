<div class="app-title">
    <div>
        <h1><i class="fa fa-trash"></i> Request Jual</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item">Request Jual</li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <?= $this->session->flashdata('pesan'); ?>
        <div class="tile">
            <div class="tile-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>No. Telp</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($request as $rq) { ?>
                            <tr>
                                <td><?= $rq->id ?></td>
                                <td><?= $rq->nama ?></td>
                                <td><?= $rq->telp ?></td>
                                <td><?= $rq->email ?></td>
                                <td><?= $rq->alamat ?></td>
                                <td><?= $rq->tanggal ?></td>
                                <td><?= $rq->status ?></td>
                                <td>
                                    <div class="btn-group"><a class="btn btn-primary" href="#" data-toggle="modal" data-target="#EditRequest<?= $rq->id ?>"><i class="fa fa-lg fa-edit"></i></a><a class="btn btn-danger" href="<?= base_url('admin/produk/hapus_request/') . $rq->id ?>"><i class="fa fa-lg fa-trash"></i></a></div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Request -->
<?php foreach ($request as $rq) { ?>
    <div class="modal fade" id="EditRequest<?= $rq->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Request</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?= base_url('admin/request/edit_request'); ?>">
                        <input type="hidden" name="id" value="<?= $rq->id ?>">
                        <div class="form-group row">
                            <label for="harga" class="col-sm-2 col-form-label font-weight-bold">Status</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="status" name="status">
                                    <option>Menunggu Konfirmasi</option>
                                    <option>Menunggu Penjemputan</option>
                                    <option>Proses Transaksi</option>
                                    <option>Transaksi Selesai</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= $rq->nama ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="harga" class="col-sm-2 col-form-label">No. Telp</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="telp" name="telp" placeholder="No. Telp" value="<?= $rq->telp ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="harga" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= $rq->email ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="harga" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat"><?= $rq->alamat ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="harga" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal" value="<?= $rq->tanggal ?>">
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