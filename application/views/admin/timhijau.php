<div class="app-title">
    <div>
        <h1><i class="fa fa-leaf"></i> Tim Hijau</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item">Tim Hijau</li>
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
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>No. Telp</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tim_hijau as $tim) { ?>
                            <tr>
                                <td><?= $tim->id ?></td>
                                <td><img style="height: 50px;" src="<?= base_url('assets/img/timhijau/') . $tim->foto ?>"></td>
                                <td><?= $tim->nama ?></td>
                                <td><?= $tim->telp ?></td>
                                <td><?= $tim->email ?></td>
                                <td><?= $tim->alamat ?></td>
                                <td><?= $tim->status ?></td>
                                <td>
                                    <div class="btn-group"><a class="btn btn-primary" href="#" data-toggle="modal" data-target="#EditTim<?= $tim->id ?>"><i class="fa fa-lg fa-edit"></i></a><a class="btn btn-danger" href="<?= base_url('admin/timhijau/hapus/') . $tim->id ?>"><i class="fa fa-lg fa-trash"></i></a></div>
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
<?php foreach ($tim_hijau as $tim) { ?>
    <div class="modal fade" id="EditTim<?= $tim->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Tim Hijau</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('admin/timhijau/edit'); ?>
                    <input type="hidden" name="id" value="<?= $tim->id ?>">
                    <div class="form-group row">
                        <label for="harga" class="col-sm-2 col-form-label font-weight-bold">Status</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="status" name="status">
                                <option>Menunggu Konfirmasi</option>
                                <option>Anggota</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= $tim->nama ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-2 col-form-label">No. Telp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="telp" name="telp" placeholder="No. Telp" value="<?= $tim->telp ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= $tim->email ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat"><?= $tim->alamat ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" id="foto" name="foto">
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