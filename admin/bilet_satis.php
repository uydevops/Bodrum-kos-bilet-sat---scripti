<?php include 'theme/head.php'; ?>

<?php include 'theme/siderbar.php'; ?>
<?php include 'theme/top.php'; ?>

<?php include 'theme/card.php'; ?>


<div class="container light-style flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-4">
        Bilet Satışı Ekleme
    </h4>

    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.css" />
    </head>

    <body>
        <div class="container">
            <form action="islemler/add.php" method="post">
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationServer013">Tur
                            Başlangıç Tarihi</label>
                        <input type="date" name="baslangic_tarih" class="form-control is-valid" id="validationServer013" required>
                        <div class="valid-feedback">
                            Boş Bırakmamalısın!
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationServer013">Tur Bitis
                            Tarihi</label>
                        <input type="date" name="bitis_tarih" class="form-control is-valid" id="validationServer013" required>
                        <div class="valid-feedback">
                            Boş Bırakmamalısın!
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationServer013">Kalkis Saati
                            Tarihi</label>
                        <input type="time" name="kalkis" class="form-control is-valid" id="validationServer013" required>
                        <div class="valid-feedback">
                            Boş Bırakmamalısın!
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationServer013">Varis Saati
                            Tarihi</label>
                        <input type="time" name="varis" class="form-control is-valid" id="validationServer013" required>
                        <div class="valid-feedback">
                            Boş Bırakmamalısın!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationServer033">Tur Adı</label>
                        <input type="text" name="tur_adi" class="form-control" required>

                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-6">
                            <label for="validationServer033">Tekne Adı</label>
                            <input type="text" name="tekne_adi" class="form-control" required>
                        </div>
                        <legend>Bilet Fiyatlandırma</legend>
            <table border="1" class="table table-bordered">
              
                <tr>
                    <td><input type="text" name="bebek1" placeholder="Bebek Tek Yön Fiyatı Giriniz" class="form-control" required></td>
                    <td><input type="text" name="bebek2" placeholder="Bebek Günübirlik Fiyatı Giriniz"  class="form-control" required></td>
                    <td><input type="text" name="bebek3" placeholder="Bebek Gidiş - Dönüş Fiyatı Giriniz"  class="form-control" required></td>
                </tr>
            
                <tr>
                    <td><input type="text" name="cocuk1" placeholder="Çocuk Tek Yön Fiyatı Giriniz" class="form-control" required></td>
                    <td><input type="text" name="cocuk2" placeholder="Çocuk Günübirlik Fiyatı Giriniz"  class="form-control" required></td>
                    <td><input type="text" name="cocuk3" placeholder="Çocuk Gidiş - Dönüş Fiyatı Giriniz"  class="form-control" required></td>
                </tr>

                <tr>
                    <td><input type="text" name="yetiskin1" placeholder="Yetişkin Tek Yön Fiyatı Giriniz" class="form-control" required></td>
                    <td><input type="text" name="yetiskin2" placeholder="Yetişkin Günübirlik Fiyatı Giriniz"  class="form-control" required></td>
                    <td><input type="text" name="yetiskin3" placeholder="Yetişkin Gidiş - Dönüş Fiyatı Giriniz"  class="form-control" required></td>
                </tr>
            </table>
            <button type="submit" name="bilet_ekle" class="w-100 btn btn-success">Bilet Ekle</button>
</form>
                    </div>
                    
        <br>
        <br>
        <br>
        <center>
        <br>
        <br>
        <br>
            <table border="1" class="table table-bordered">
                <tr>
                    <td>#</td>
                    <td>Tur Adi</td>
                    <td>Tarih</td>
                    <td>Yetiskin Fiyati</td>
                    <td>Çocuk Fiyati</td>
                    <td>Bebek Fiyati</td>
                    <td>Kalkıs Saati</td>
                    <td>Varis Saati</td>
                    <td>Tekne Adi</td>
                </tr>
                <?php


                $data_load = $db->prepare("SELECT * FROM bilet_fiyatlari");
                $data_load->execute();
                $pre = $data_load->fetchALL(PDO::FETCH_ASSOC);
                foreach ($pre as $row) { ?>


                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["tur_adi"]; ?></td>
                        <td><?php echo $row["tarih"]; ?></td>
                        <td><?php echo $row["yetiskin"]; ?></td>
                        <td><?php echo $row["cocuk"]; ?></td>
                        <td><?php echo $row["bebek"]; ?></td>
                        <td><?php echo $row["kalkis_saat"]; ?></td>
                        <td><?php echo $row["varis_saat"]; ?></td>
                        <td><?php echo $row["tekne_adi"]; ?></td>



                        <td style="width: 5%;">

                            </a>
                            <a href="bilet_update.php?tur_id=<?php echo $row["id"]; ?>"" class=" table-link text-info">
                                <span class="fa-stack">
                                    <i class="fa fa-square fa-stack-2x"></i>
                                    <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                            <a href="islemler/delete.php?tur_id=<?php echo $row["id"]; ?>" class="table-link danger">
                                <span class="fa-stack">
                                    <i class="fa fa-square fa-stack-2x"></i>
                                    <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </td>

                    </tr>
                <?php } ?>
            </table>

        </center>



        <style>
            .ui-w-80 {
                width: 80px !important;
                height: auto;
            }

            .btn-default {
                border-color: rgba(24, 28, 33, 0.1);
                background: rgba(0, 0, 0, 0);
                color: #4E5155;
            }

            label.btn {
                margin-bottom: 0;
            }

            .btn-outline-primary {
                border-color: #26B4FF;
                background: transparent;
                color: #26B4FF;
            }

            .btn {
                cursor: pointer;
            }

            .text-light {
                color: #babbbc !important;
            }

            .btn-facebook {
                border-color: rgba(0, 0, 0, 0);
                background: #3B5998;
                color: #fff;
            }

            .btn-instagram {
                border-color: rgba(0, 0, 0, 0);
                background: #000;
                color: #fff;
            }

            .card {
                background-clip: padding-box;
                box-shadow: 0 1px 4px rgba(24, 28, 33, 0.012);
            }

            .row-bordered {
                overflow: hidden;
            }

            .account-settings-fileinput {
                position: absolute;
                visibility: hidden;
                width: 1px;
                height: 1px;
                opacity: 0;
            }

            .account-settings-links .list-group-item.active {
                font-weight: bold !important;
            }

            html:not(.dark-style) .account-settings-links .list-group-item.active {
                background: transparent !important;
            }

            .account-settings-multiselect~.select2-container {
                width: 100% !important;
            }

            .light-style .account-settings-links .list-group-item {
                padding: 0.85rem 1.5rem;
                border-color: rgba(24, 28, 33, 0.03) !important;
            }

            .light-style .account-settings-links .list-group-item.active {
                color: #4e5155 !important;
            }

            .material-style .account-settings-links .list-group-item {
                padding: 0.85rem 1.5rem;
                border-color: rgba(24, 28, 33, 0.03) !important;
            }

            .material-style .account-settings-links .list-group-item.active {
                color: #4e5155 !important;
            }

            .dark-style .account-settings-links .list-group-item {
                padding: 0.85rem 1.5rem;
                border-color: rgba(255, 255, 255, 0.03) !important;
            }

            .dark-style .account-settings-links .list-group-item.active {
                color: #fff !important;
            }

            .light-style .account-settings-links .list-group-item.active {
                color: #4E5155 !important;
            }

            .light-style .account-settings-links .list-group-item {
                padding: 0.85rem 1.5rem;
                border-color: rgba(24, 28, 33, 0.03) !important;
            }
        </style>