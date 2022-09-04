<?php include 'theme/head.php'; ?>

<?php include 'theme/siderbar.php'; ?>
<?php include 'theme/top.php'; ?>

<?php include 'theme/card.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/3.6.1/dropzone.min.js" integrity="sha512-O+F9aLsGFeh5VP5POQKtdojQuSeTqKBw2zec9ZSAhgFrx/2vxGimF3lhvU5hDScN5S6eeyCArZwtyW+pUsLhcQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/3.6.1/dropzone.js" integrity="sha512-dyd36nwRA12wLFO31kOMVtHYh2WZUxVvm/4jqhfpaCcuIe2bODMB2pqsAH2eGyoLOf1e91mxehbDaRSKWY5FmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/3.6.1/dropzone-amd-module.js" integrity="sha512-41YTKQkocYmSGb8E4TsMGTCaIZpMDzhGQNL53a2nOnwRSqrL0Q6Ux8AMKiYdDhMZymnctMOETAnJ3nGZ1zpzvw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/3.6.1/css/basic.css" integrity="sha512-bBscOKgk9UXkrSAdF0IGT3BVnrySfU+Fryqd8Q05H2VCR7kq6H1PPQq+/Tn+nsh7ba8RT1P2fSvKheD8+ZDtAA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<?php


if (isset($_GET["filo_id"])) {
    $id = $_GET["filo_id"];
    $filo = $db->prepare("SELECT * FROM filomuz WHERE id=?");
    $filo->execute(array($id));
    $ha = $filo->fetch(PDO::FETCH_ASSOC);
    $id=$ha["id"];
}
?>
<br>
<br>
<br>
<center>
    <div class="btn btn-primary" style="text-align:center;"><i class="fas fa-wrench"></i>  V2 Güncellemesi Sınırsız Fotograf Ekleme Özelliği Sadece Seçtiğiniz Fotografları Sürükleyip "Drop Files here to upload" Alanına Bırakın :) </div>
</center>
<br>
<br>
<br>
<form method="post" action="" class="dropzone"></form>
<?php

$ds = DIRECTORY_SEPARATOR;

$storeFolder = 'upload';

if (!empty($_FILES)) {

    $tempFile = $_FILES['file']['tmp_name'];

    $targetPath = dirname(__FILE__) . $ds . $storeFolder . $ds;

    $targetFile = $targetPath . $_FILES['file']['name'];

    move_uploaded_file($tempFile, $targetFile);

$son = substr($targetFile,27);



    $img=$db->prepare("INSERT INTO filo_image SET parent_id=?,image=?");
    $img->execute(array($id,$son));
}
?>

<div class="container light-style flex-grow-1 container-p-y">

    <h4 class="font-weight-bold py-3 mb-4">
        Filo
    </h4>

    <p class="float-right"><a href="filo_liste.php" target="_blank" alt="filo Listesi"><i class="fas fa-list" style="color:blue;"></i></p></a>
    <div class="col-md-9">
        <div class="tab-content">
            <div class="tab-pane fade active show" id="account-general">

                <form action="islemler/update.php?filo_id=<?php echo $ha["id"]; ?>" method="POST" enctype="multipart/form-data">
                    <div class="card-body media align-items-center">
                        <img src="<?php echo $ha["resim"]; ?>" alt="" class=" d-block ui-w-80">

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
                            <input type="text" name="filo_baslik" class="form-control mb-1" value="<?php echo $ha["filo_baslik"]; ?>">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Yolcu Kapasitesi</label>
                            <input type="text" name="yolcu" class="form-control mb-1" value="<?php echo $ha["yolcu"]; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Tekne Kodu</label>
                        <input type="text" name="tekne_k" class="form-control mb-1" value="<?php echo $ha["tekne_k"]; ?>">
                    </div>
            </div>
            <div class="form-group">
                <label class="form-label">Motor Bilgileri</label>
                <input type="text" name="motor" class="form-control mb-1" value="<?php echo $ha["motor"]; ?>">
            </div>
        </div>

        <div class="form-group w-100">
            <label class="form-label">Metin</label>
            <textarea name="filo_metin" class="ckeditor" name="deger" cols="30" rows="10"><?php echo $ha["filo_metin"]; ?></textarea>
        </div>
    </div>
    <div class="text-center mt-1">
        <button type="submit" name="filo_update" class="btn btn-primary">Kaydet</button>&nbsp;
    </div>
    </form>

</div>

</div>
</div>


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