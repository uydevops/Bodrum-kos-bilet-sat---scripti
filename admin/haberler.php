<?php include 'theme/head.php'; ?>

<?php include 'theme/siderbar.php'; ?>
<?php include 'theme/top.php'; ?>

<?php include 'theme/card.php'; ?>


<div class="container light-style flex-grow-1 container-p-y">

    <h4 class="font-weight-bold py-3 mb-4">
        Haberler
    </h4>

<p class="float-right"><a href ="haber_liste.php" target="_blank" alt="Haber Listesi"><i class="fas fa-list" style="color:blue;"></i></p></a>
    <div class="col-md-9">
        <div class="tab-content">
            <div class="tab-pane fade active show" id="account-general">

                <form action="islemler/add.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body media align-items-center">
                        <img src="" alt="" class=" d-block ui-w-80">

                        <div class="media-body ml-4">
                            <label class="btn btn-outline-primary">
                                Hakkimizda Sayfası Fotograf
                                <input type="file" name="resim" class="account-settings-fileinput">
                            </label> &nbsp;

                            <div class="text-light small mt-1">İzin verilen JPG, GIF veya PNG. Maksimum boyut 800K</div>
                        </div>
                    </div>
                    <hr class="border-light m-0">

                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">Metin Baslik</label>
                            <input type="text" name="haber_baslik" class="form-control mb-1" value="">
                        </div>

                        <div class="form-group w-100">
                            <label class="form-label">Metin</label>
                            <textarea name="haber_metin" class="ckeditor" name="deger" cols="30" rows="10"></textarea>
                        </div>
                    </div>

            </div>

        </div>
    </div>

    <div class="text-center mt-1">
        <button type="submit" name="haber_ekle" class="btn btn-primary">Kaydet</button>&nbsp;
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