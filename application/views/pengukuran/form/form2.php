<body onload="initialize()">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <?php
                if ($max1['id'] == $max1['id']) { ?>
                    <h1 class="mt-4 mb-4"><?= $title; ?></h1>
                <?php
                } else if ($max1['id'] != $max8['id']) { ?>
                    <h1 class="mt-4 mb-4"><?= $title; ?></h1>
                    <div class="row">
                        <div class="col-lg-8">
                            <h5 class="mb-3 ml-4 alert alert-danger">Ada Form yang belum terisi sepenuhnya,
                                <a href="<?= base_url('pengukuran/kembali'); ?>" style="color: red;"> Mohon Isi Kembali!</a>
                            </h5>
                        </div>
                    </div>
                <?php } else { ?>
                    <h1 class="mt-4 mb-4"><?= $title; ?></h1> <?php
                                                            }
                                                                ?>
                <div class="card mb-3 ml-4 mb-2" style="max-width: 750px;">
                    <div class="card-header bg-primary" style="color: white;">
                        Form Pengukuran Radio
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 pr-5 pl-4">
                                        <form action="<?= base_url('form/form2'); ?>" method="POST" onsubmit="return confirm('Data Sudah Lengkap?');">
                                            <div class="card-header mb-4 pl-0" style="color: black; background-color:transparent; font-size:20px;">
                                                <b>Nama Stasiun Radio Siaran</b>
                                            </div>
                                            <div class="form-group row">
                                                <label for="penyelenggara" class="col-sm-3 col-form-label">Penyelenggara</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="penyelenggara" name="penyelenggara" value="" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" id="alamat" name="alamat" value="" required rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="kelurahan" class="col-sm-3 col-form-label">Kelurahan</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="kelurahan" name="kelurahan" value="" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="kecamatan" class="col-sm-3 col-form-label">Kecamatan</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="kotamadya" class="col-sm-3 col-form-label">Kota Madya</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="kotamadya" name="kotamadya" value="" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" for="telp">Telp/Fax</label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control no_telp" id="telp" name="telp">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <script>
                                    function no_telp() {
                                        //normalize string and remove all unnecessary characters
                                        var telp = document.getElementById('telp').value;
                                        var phone = telp.replace(/[^\d]/g, "");
                                        //check if number length equals to 10
                                        if (phone.length < 15) {
                                            //reformat and return phone number
                                            document.getElementById('telp').value = phone.replace(/(\d{4})(\d{4})(\d{4})/, "($1) $2-$3");;
                                        }
                                        if (phone.length == 10) {
                                            //reformat and return phone number
                                            document.getElementById('telp').value = phone.replace(/(\d{4})(\d{4})/, "($1) $2");;
                                        }
                                        return null;
                                    }
                                </script> -->
                                            <div class="form-group row">
                                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="email" name="email" value="">
                                                </div>
                                            </div>
                                            <div class="card-footer bg-transparent text-center">
                                                <button type="submit" class="btn btn-primary">Next</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>