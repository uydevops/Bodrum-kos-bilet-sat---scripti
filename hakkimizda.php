<!DOCTYPE html>
<html lang="tr">
<?php include 'head.php'; ?>

<body>
    <?php include 'header.php'; ?>

    <?php


    $hakkimizda = $db->prepare("SELECT * FROM hakkimizda");
    $hakkimizda->execute();
    $hak = $hakkimizda->fetch(PDO::FETCH_ASSOC);
    ?>
    <div class="container-fluid content-header">
        <div class="container ">
            <div class="sayfalama">
                <a title="Anasayfa" href="index.php">Anasayfa<i class="fa fa-angle-right"></i></a>
                <a title="Kurumsal" href="javascript:(void)0">Kurumsal<i class="fa fa-angle-right"></i></a>
                <span><?php echo $hak["metin_baslik"]; ?></span>
            </div>
        </div>
    </div>
    <div class="container-fluid ortaalan anadiv iletisimformu">
        <div class="container">
            <h1><?php echo $hak["metin_baslik"]; ?></h1>
            <div class="col-12 anadiv no-pad">
                <div class="line"></div>
            </div>
            <figure class="kurumsal-detay-img">
                <a href="admin/<?php echo $hak["resim"]; ?>" class="galerigrup" data-fancybox="ortadogu-haberler" title="Dörtyol Ticaret ve Sanayi Odası İle Anlaşma İmzalandı">
                    <img src="admin/<?php echo $hak["resim"]; ?>" alt="Dörtyol Ticaret ve Sanayi Odası İle Anlaşma İmzalandı">
                </a>
            </figure>
            <?php echo $hak["metin"]; ?>
            <div class="col-xs-12 anadiv">

            </div>
        </div>
    </div>
</body>

</html>