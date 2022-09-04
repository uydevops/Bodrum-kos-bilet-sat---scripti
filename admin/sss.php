<?php include 'theme/head.php'; ?>

<?php include 'theme/siderbar.php'; ?>
<?php include 'theme/top.php'; ?>

<?php include 'theme/card.php'; ?>
<?php



if ($oturum_ac["perm"] == "Admin") { ?>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

    <style>

.fas fa-plus{
    background: red;
}
    </style>
<a href="sss_add.php"><i  class="fas fa-plus" style="font-size:30px;color:#3498db; float: right; border-radius: 1px;"></i></a>
<form action="islemler/update.php" method="POST">
    <label for="">S.S.S Hakkında Metin</label>
    <textarea name="metin" class="ckeditor" name="giris_metin" cols="30" rows="10"><?php echo $sss["giris_metin"];  ?></textarea>
    <button class="w-100 btn btn-primary" name="giris_metin_sss">Kaydet</button>

</form>

    <hr>
    <div class="container bootstrap snippets bootdey">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-box no-header clearfix">
                    <div class="main-box-body clearfix">
                        <div class="table-responsive">
                            <table class="table user-list">
                                <thead>

                                    <tr>
                                        <th><span>Soru Baslik</span></th>
                                        <th><span>Soru Cevap</span></th>
                                        <th><span>Email</span></th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php



                                    $sss_cek = $db->prepare("SELECT * FROM sss");
                                    $sss_cek->execute();
                                    $sss = $sss_cek->fetchALL(PDO::FETCH_ASSOC);


                                    foreach ($sss as $row) {


                                    ?>
                                        <tr>
                                            <td>
                                                <span class="user-subhead"><?php echo $row["soru_baslik"]; ?></span>
                                            </td>
                                            <td><?php echo $row["soru_cevap"]; ?></td>


                                            <td style="width: 20%;">

                                                </a>
                                                <a href="sss_up.php?sss_id=<?php echo $row["id"]; ?>"" class=" table-link text-info">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-square fa-stack-2x"></i>
                                                        <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                                <a href="islemler/delete.php?sss_id=<?php echo $row["id"]; ?>" class="table-link danger">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-square fa-stack-2x"></i>
                                                        <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } else {
    echo '
<div class="alert alert-danger" role="alert"><center>
Yetkisiz Giriş</center>
</div>';
} ?>

<!-- End of Main Content -->

<?php include 'theme/footer.php'; ?>

<style>
    .main-box.no-header {
        padding-top: 20px;
    }

    .main-box {
        background: #FFFFFF;
        -webkit-box-shadow: 1px 1px 2px 0 #CCCCCC;
        -moz-box-shadow: 1px 1px 2px 0 #CCCCCC;
        -o-box-shadow: 1px 1px 2px 0 #CCCCCC;
        -ms-box-shadow: 1px 1px 2px 0 #CCCCCC;
        box-shadow: 1px 1px 2px 0 #CCCCCC;
        margin-bottom: 16px;
        -webikt-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }

    .table a.table-link.danger {
        color: #e74c3c;
    }

    .label {
        border-radius: 3px;
        font-size: 0.875em;
        font-weight: 600;
    }

    .user-list tbody td .user-subhead {
        font-size: 0.875em;
        font-style: italic;
    }

    .user-list tbody td .user-link {
        display: block;
        font-size: 1.25em;
        padding-top: 3px;
        margin-left: 60px;
    }

    a {
        color: #3498db;
        outline: none !important;
    }

    .user-list tbody td>img {
        position: relative;
        max-width: 50px;
        float: left;
        margin-right: 15px;
    }

    .table thead tr th {
        text-transform: uppercase;
        font-size: 0.875em;
    }

    .table thead tr th {
        border-bottom: 2px solid #e7ebee;
    }

    .table tbody tr td:first-child {
        font-size: 1.125em;
        font-weight: 300;
    }

    .table tbody tr td {
        font-size: 0.875em;
        vertical-align: middle;
        border-top: 1px solid #e7ebee;
        padding: 12px 8px;
    }

    a:hover {
        text-decoration: none;
    }
</style>