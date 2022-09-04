<?php include 'theme/head.php'; ?>

<?php include 'theme/siderbar.php'; ?>
<?php include 'theme/top.php'; ?>

<?php include 'theme/card.php'; ?>
<?php



if ($oturum_ac["perm"] == "Admin") { ?>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <hr>
    <link href="//cdn.bootcss.com/summernote/0.8.2/summernote.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/dropzone/4.3.0/min/dropzone.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/jquery-toggles/2.0.4/toggles.min.js"></script>
    <script src="//cdn.bootcss.com/dropzone/4.3.0/min/dropzone.min.js"></script>

    <form action="aaa.php" class="dropzone">

    </form>
    <div class="container bootstrap snippets bootdey">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-box no-header clearfix">
                    <div class="main-box-body clearfix">
                        <div class="table-responsive">
                            <table class="table user-list">
                                <thead>


                                    <tr>
                                        <th><span>Footer Resim</span></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php


                                    $user_cek = $db->prepare("SELECT *FROM footer");
                                    $user_cek->execute();
                                    $user_list = $user_cek->fetchALL(PDO::FETCH_ASSOC);

                                    foreach ($user_list as $row) {


                                    ?>
                                        <tr>
                                            <td>
                                                <img src="<?php echo $row["resim"]; ?>" alt="">


                                            <td style="width: 20%;">

                                                </a>
                                            
                                                <a href="islemler/delete.php?footer_id=<?php echo $row["id"]; ?>" class="table-link danger">
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

<?php


$ds          = DIRECTORY_SEPARATOR;

$storeFolder = 'upload';

if (!empty($_FILES)) {

    $tempFile = $_FILES['file']['tmp_name'];

    $targetPath = dirname(__FILE__) . $ds . $storeFolder . $ds;

    $targetFile =  $targetPath . $_FILES['file']['name'];

    move_uploaded_file($tempFile, $targetFile);



    $son = substr($targetFile, 33);

    $galeri = $db->prepare("INSERT INTO footer SET resim=?");

    $galeri->execute(array($son));
}
/* Fena Yazdım Git'e yüklicem*/
?>