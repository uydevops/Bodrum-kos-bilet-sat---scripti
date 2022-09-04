<?php include 'theme/head.php'; ?>

<?php include 'theme/siderbar.php'; ?>
<?php include 'theme/top.php'; ?>

<?php include 'theme/card.php'; ?>


<div class="container light-style flex-grow-1 container-p-y">

    <h4 class="font-weight-bold py-3 mb-4">
        S.S.S Ekleme Formu
    </h4>

    <div class="alert alert-success" role="alert">
        Yazılacak Soru ve Cevaplar SEO Açısından Önem Arz etmektedir😍
    </div>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">


    <div class="col-md-9">
        <div class="tab-content">
            <div class="tab-pane fade active show" id="account-general">

                <form action="islemler/add.php" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">Soru <i class="fas fa-question" style="font-size:15px;color:red;"></i></label>
                            <textarea class="ckeditor" name="soru_baslik" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Cevap <i class="fas fa-comment" style="color:blue"></i></i></label>
                            <textarea class="ckeditor" name="soru_cevap" cols="30" rows="10"></textarea>
                        </div>

                    </div>

            </div>
        </div>

        <div class="text-center mt-1">
            <button type="submit" name="soru_ekle" class="btn btn-primary">Kaydet</button>&nbsp;
        </div>
        </form>
    </div>
    <?php include 'theme/footer.php'; ?>

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