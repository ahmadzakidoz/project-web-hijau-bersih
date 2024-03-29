<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $judul ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?= base_url('assets/'); ?>vendor/fontawesome/css/all.css" rel="stylesheet">

    <!-- custom styles -->
    <link href="<?= base_url('assets/'); ?>css/ui.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)">

    <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?>"><i class="fas fa-seedling"></i> Bersih Hijau</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url(); ?>">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('jual'); ?>">Jual Sampah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('timhijau'); ?>">Tim Hijau</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('produk'); ?>">Produk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>