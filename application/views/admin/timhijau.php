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
                                <td>Proses</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>