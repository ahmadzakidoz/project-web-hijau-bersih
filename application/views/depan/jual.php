<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $judul ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?= base_url('assets/'); ?>vendor/fontawesome/css/all.css" rel="stylesheet">

    <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<style>
    #regForm {
        background-color: #ffffff;
        margin: 100px auto;
        font-family: Raleway;
    }

    h1 {
        text-align: center;
    }

    input {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
        display: none;
    }

    button {
        background-color: #4CAF50;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 17px;
        font-family: Raleway;
        cursor: pointer;
    }

    button:hover {
        opacity: 0.8;
    }

    #prevBtn {
        background-color: #bbbbbb;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #4CAF50;
    }
</style>

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
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="bg-light py-3">
        <div class="container">
            <h4 class="text-secondary">Jual Sampah</h4>
        </div>
    </div>

    <div class="container">
        <h3 class="text-center my-3">Langkah-Langkah Jual Sampah</h3>
        <div class="row border-bottom">
            <div class="col-md-3 text-center col-xs-12" style="margin-bottom: 35px;padding: 0 30px">
                <div class="clearfix">
                    <img src="https://sampahmuda.com/assets/img/sampahmuda/how/1order.png" alt="logo+" style="height: 125px;">
                    <br>
                    <br>
                </div>
                <div class="clearfix">
                    <h4 style="margin: 0 0 20px 0">ISI FORM JUAL SAMPAH</h4>
                </div>
            </div>
            <div class="col-md-3 text-center col-xs-12" style="margin-bottom: 35px;padding: 0 30px">
                <div class="clearfix">
                    <img src="https://sampahmuda.com/assets/img/sampahmuda/how/5belanja.png" alt="logo+" style="height: 125px;">
                    <br>
                    <br>
                </div>
                <div class="clearfix">
                    <h4 style="margin: 0 0 20px 0">KOMFIRMASI</h4>
                </div>
            </div>
            <div class="col-md-3 text-center col-xs-12" style="margin-bottom: 35px;padding: 0 30px">
                <div class="clearfix">
                    <img src="https://sampahmuda.com/assets/img/sampahmuda/how/3timbang.png" alt="logo+" style="height: 125px;">
                    <br>
                    <br>
                </div>
                <div class="clearfix">
                    <h4 style="margin: 0 0 20px 0">TIMBANG</h4>
                </div>
            </div>
            <div class="col-md-3 text-center col-xs-12" style="margin-bottom: 35px;padding: 0 30px">
                <div class="clearfix">
                    <img src="https://sampahmuda.com/assets/img/sampahmuda/how/4bayar.png" alt="logo+" style="height: 125px;">
                    <br>
                    <br>
                </div>
                <div class="clearfix">
                    <h4 style="margin: 0 0 20px 0">DAPATKAN UANG</h4>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form id="regForm" method="post" action="<?= base_url('jual/submit_jual'); ?>">
                    <!-- One "tab" for each step in the form: -->
                    <div class="tab">
                        <h3 class="text-center my-3">FORM JUAL SAMPAH</h3>
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" oninput="this.className = ''">
                        </div>
                        <div class="form-group">
                            <label for="nama">No. Telp/Hp</label>
                            <input type="text" class="form-control" id="telp" name="telp" oninput="this.className = ''">
                        </div>
                        <div class="form-group">
                            <label for="nama">Email</label>
                            <input type="text" class="form-control" id="email" name="email" oninput="this.className = ''">
                        </div>
                    </div>
                    <div class="tab">
                        <h3 class="text-center my-3">Alamat Lengkap</h3>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" oninput="this.className = ''">
                        </div>
                        <div class="form-group">
                            <label for="kelurahan">Kelurahan</label>
                            <input type="text" class="form-control" id="kelurahan" name="kelurahan" oninput="this.className = ''">
                        </div>
                        <div class="form-group">
                            <label for="kecamatan">Kecamatan</label>
                            <input type="text" class="form-control" id="kecamatan" name="kecamatan" oninput="this.className = ''">
                        </div>
                    </div>
                    <div class="tab">
                        <h3 class="text-center my-3">Tanggal Pengambilan</h3>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" oninput="this.className = ''">
                        </div>
                    </div>
                    <div class="tab">
                        <h3 class="text-center my-3">Konfirmasi</h3>
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-4">
                                Nama
                            </div>
                            <div class="col-4">
                                : <span id="dispnama"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-4">
                                No. Telp/HP
                            </div>
                            <div class="col-4">
                                : <span id="disptelp"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-4">
                                Email
                            </div>
                            <div class="col-4">
                                : <span id="dispemail"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-4">
                                Alamat
                            </div>
                            <div class="col-4">
                                : <span id="dispalamat"></span>, <span id="dispkelurahan"></span>, <span id="dispkecamatan"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-4">
                                Tanggal
                            </div>
                            <div class="col-4">
                                : <span id="disptanggal"></span>
                            </div>
                        </div>
                    </div>
                    <div style="overflow:auto;">
                        <div style="float:right;">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                        </div>
                    </div>
                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="bg-success py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-5">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-primary">Langganan</button>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>

    <div class="bg-dark py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="text-white">Bersih Hijau</h5>
                    <ul>
                        <li><a href="#">Apa itu Bersih Hijau?</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Hubungi Kami</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="text-white">Bantuan</h5>
                    <ul>
                        <li><a href="#">Syarat dan Ketentuan</a></li>
                        <li><a href="#">Kebijakan Privasi</a></li>
                        <li><a href="#">FAQ's</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="text-white">Get in Touch</h5>
                    <ul>
                        <li><i class="fas fa-envelope text-white"></i><a href="#"> bersih.hijau@gmail.com</a></li>
                        <li><i class="fab fa-facebook-square text-white"></i><a href="#"> Facebook</a></li>
                        <li><i class="fab fa-instagram text-white"></i><a href="#"> Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-dark py-3">
        <div class="container">
            <span class="text-white">Copyright &copy; Bersih Hijau <?= date('Y'); ?></span>
        </div>
    </div>

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>


    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.slim.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
        $(function() {
            $('#nama').on("input", function() {
                $('#dispnama').text($(this).val());
            });
        });
        $(function() {
            $('#telp').on("input", function() {
                $('#disptelp').text($(this).val());
            });
        });
        $(function() {
            $('#email').on("input", function() {
                $('#dispemail').text($(this).val());
            });
        });
        $(function() {
            $('#alamat').on("input", function() {
                $('#dispalamat').text($(this).val());
            });
        });
        $(function() {
            $('#kelurahan').on("input", function() {
                $('#dispkelurahan').text($(this).val());
            });
        });
        $(function() {
            $('#kecamatan').on("input", function() {
                $('#dispkecamatan').text($(this).val());
            });
        });
        $(function() {
            $('#tanggal').on("input", function() {
                $('#disptanggal').text($(this).val());
            });
        });
    </script>
</body>

</html>