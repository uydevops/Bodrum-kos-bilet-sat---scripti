<!DOCTYPE html>
<html lang="tr">
<?php include 'head.php'; ?>

<body>
    <?php include 'header.php'; ?>

    <?php


    $kvkk = $db->prepare("SELECT * FROM kvkk");
    $kvkk->execute();
    $kvk = $kvkk->fetch(PDO::FETCH_ASSOC);
    ?>
    <div class="container-fluid content-header">
        <div class="container ">
            <div class="sayfalama">
                <a title="Anasayfa" href="index.php">Anasayfa<i class="fa fa-angle-right"></i></a>
                <a title="Kurumsal" href="javascript:(void)0">Kurumsal<i class="fa fa-angle-right"></i></a>
                <span>KVKK</span>
            </div>
        </div>
    </div>
    <div class="container-fluid ortaalan anadiv iletisimformu">
        <div class="container">
            <h1><?php echo $kvk["metin_baslik"]; ?></h1>
            <div class="col-12 anadiv no-pad">
                <div class="line"></div>
            </div>
            <?php
            echo $kvk["metin"]; ?>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>