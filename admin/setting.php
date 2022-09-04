<?php include 'theme/head.php'; ?>

<?php include 'theme/siderbar.php'; ?>
<?php include 'theme/top.php'; ?>

<?php include 'theme/card.php'; ?>


<div class="container light-style flex-grow-1 container-p-y">

    <h4 class="font-weight-bold py-3 mb-4">
        Site Ayarlari
    </h4>


    <div class="col-md-9">
        <div class="tab-content">
            <div class="tab-pane fade active show" id="account-general">

                <form action="islemler/update.php" method="POST" enctype="multipart/form-data">



                    <hr class="border-light m-0">

                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">Site Adi</label>
                            <input type="text" name="site_adi" class="form-control mb-1" required="on" value="<?php echo $site["site_adi"]; ?>">
                        </div>
                        <div class=" form-group">
                            <label class="form-label">Site Description</label>
                            <p id="desc" class="form-label">Site açıklaması, sitenize <b>SEO</b> amaçları için eklenmiştir. HTML sayfalarının içerisine yerleştirilen bir HTML meta etiketidir. Bu etiket içerisine sayfanın ne hakkında olduğuyla ilgili açıklamaya yer verilir ve yaygın olarak bu açıklamalar arama motorlarının sonuç sayfaları içerisinde <a href="https://www.seohocasi.com/meta-description-nedir/">kullanılır.</a></p>
                            <input type="text" name="site_desc" class="form-control" required="on" value="<?php echo $site["site_desc"]; ?>">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Site Email</label>
                            <input type="mail" name="site_mail" class="form-control mb-1" required="on" value="<?php echo $site["site_mail"]; ?>">

                        </div>
                        <div class="form-group">
                            <label class="form-label">Site Footer</label>
                            <p id="desc"> Footer Nedir? Bir doküman veya bir web sayfasında en altta yer alan ve belirli verilen yer aldığı bir kısma footer denir.</p>
                            <textarea name="site_footer" class="ckeditor" cols="30" rows="10"><?php echo $site["site_footer"]; ?></textarea>

                        </div>
                    </div>

            </div>

        </div>
    </div>

    <div class="text-center mt-1">
        <button type="submit" name="site_ayar" class="btn btn-primary">Kaydet</button>&nbsp;
    </div>
    </form>
</div>
<?php include 'theme/footer.php'; ?>

<style>
    #desc {
        font-size: 12px;

    }

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