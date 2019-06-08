<div class="bg-light py-3">
    <div class="container">
        <h4 class="text-secondary">Tim Hijau</h4>
    </div>
</div>

<div class="container">
    <h3 class="text-center mt-5">Bergabunglah Dengan Tim Hijau</h3>
    <h6 class="text-center text-secondary mb-3">Dan kemungkinan daerahmu yang akan menjadi tempat penghijauan selanjutnya dari Tim Hijau!</h6>
    <div class="row border-bottom">
        <div class="col-md-3 text-center col-xs-12" style="margin-bottom: 35px;padding: 0 30px">
            <div class="clearfix">
                <img src="<?= base_url('assets/img/hijau1.jpg'); ?>" alt="logo+" style="height: 125px;">
                <br>
                <br>
            </div>
        </div>
        <div class="col-md-3 text-center col-xs-12" style="margin-bottom: 35px;padding: 0 30px">
            <div class="clearfix">
                <img src="<?= base_url('assets/img/hijau2.jpg'); ?>" alt="logo+" style="height: 125px;">
                <br>
                <br>
            </div>
        </div>
        <div class="col-md-3 text-center col-xs-12" style="margin-bottom: 35px;padding: 0 30px">
            <div class="clearfix">
                <img src="<?= base_url('assets/img/hijau3.jpg'); ?>" alt="logo+" style="height: 125px;">
                <br>
                <br>
            </div>
        </div>
        <div class="col-md-3 text-center col-xs-12" style="margin-bottom: 35px;padding: 0 30px">
            <div class="clearfix">
                <img src="<?= base_url('assets/img/hijau4.jpg'); ?>" alt="logo+" style="height: 125px;">
                <br>
                <br>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <?= $this->session->flashdata('pesan'); ?>
    <!-- Nested Row within Card Body -->
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 mb-4">Daftar Tim Hijau!</h1>
                </div>
                <?= form_open_multipart('timhijau'); ?>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?= base_url('assets/img/timhijau/user.png'); ?>" class="img-thumbnail" style="height: 160px; width: 100%;" alt="">
                        <input type="file" class="my-2" id="foto" name="foto">
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="telp" name="telp" placeholder="No. Telp/HP" value="<?= set_value('telp'); ?>">
                            <?= form_error('telp', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Kelurahan">
                                <?= form_error('kelurahan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan">
                                <?= form_error('kecamatan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-user btn-block">
                    Daftar
                </button>
                </form>
            </div>
        </div>
    </div>

</div>