<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item">Dashboard</li>
    </ul>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="widget-small info coloured-icon"><i class="icon fa fa-trash fa-3x"></i>
            <div class="info">
                <h4>Request</h4>
                <p><b><?= $tot_jual ?></b></p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="widget-small primary coloured-icon"><i class="icon fa fa-leaf fa-3x"></i>
            <div class="info">
                <h4>Tim Hijau</h4>
                <p><b><?= $tot_tim ?></b></p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="widget-small warning coloured-icon"><i class="icon fa fa-shopping-cart fa-3x"></i>
            <div class="info">
                <h4>Produk</h4>
                <p><b><?= $tot_produk ?></b></p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="widget-small danger coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
                <h4>Users</h4>
                <p><b><?= $tot_user ?></b></p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">Create a beautiful dashboard</div>
        </div>
    </div>
</div>