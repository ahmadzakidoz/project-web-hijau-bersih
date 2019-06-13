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
                                <td>Proses</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>