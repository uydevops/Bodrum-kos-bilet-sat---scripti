<!DOCTYPE html>
<html lang="tr">
<?php include 'head.php'; ?>
<?php

error_reporting(0);

if (isset($_GET["tekne-adi"])) {
    $id = $_GET["tekne-adi"];

    $tekne = $db->prepare("SELECT *FROM filomuz WHERE tekne_k=?");
    $tekne->execute(array($id));
    $row = $tekne->fetch(PDO::FETCH_ASSOC);
    $id=$row["id"];
}

?>

<body>
    <?php include 'header.php'; ?>
    <div class="container-fluid content-header">
        <div class="container ">
            <div class="sayfalama">
                <a title="Anasayfa" href="index.php">Anasayfa<i class="fa fa-angle-right"></i></a>
                <a title="Filomuz" href="javascript:(void)0">Filomuz<i class="fa fa-angle-right"></i></a>
                <span><?php echo $row["filo_baslik"]; ?> </span>

            </div>
        </div>
    </div>
    <div class="container-fluid ortaalan anadiv iletisimformu">
        <div class="container">
            <div class="col-md-12 textalan">
                <div class="col-xs-12 col-md-12 col-xl-5 pad-0 urun-gorselleri">
                    <div class="owl-carousel owl-urundetay">
                        <div class="item" data-hash="gorsel1">
                            <div class="col-12 urunler-owl">
                                <a href="admin/<?php echo $row["resim"]; ?>" class="galerigrup" data-fancybox="sirinoglubaklava" title="Cevizli Baklava Görsel 1">
                                    <figure>
                                        <img src="admin/<?php echo $row["resim"]; ?>" alt="Cevizli Baklava Görsel 1">
                                    </figure>
                                </a>
                            </div>
                        </div>
                        <?php
                        
                        $filo_image=$db->prepare("SELECT *FROM filo_image WHERE parent_id=?");
                        $filo_image->execute(array($id));
                        $filo_image_cek=$filo_image->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($filo_image_cek as $row_filo_image) {
                            ?>
                        <div class="item" data-hash="gorsel2">
                            <div class="col-12 urunler-owl">
                                <a href="admin/<?php echo $row_filo_image["image"]; ?>" class="galerigrup" data-fancybox="sirinoglubaklava" title="Cevizli Baklava Görsel 2">
                                    <figure>
                                        <img src="admin/<?php echo $row_filo_image["image"]; ?>" alt="Cevizli Baklava Görsel 2">
                                    </figure>
                                </a>
                            </div>
                        </div>
                       
                    <?php } ?>
                    </div>
                    <div class="owl-carousel owl-urundetay-thumbnail">
                        <?php
                        
                        $filo_image=$db->prepare("SELECT *FROM filo_image WHERE parent_id=?");
                        $filo_image->execute(array($id));
                        $filo_image_cek=$filo_image->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($filo_image_cek as $row_filo_image) {
                            ?>
                   
                        <div class="item">
                            <a class="button secondary url" href="admin/<?php echo $row_filo_image["image"]; ?>"><img src="admin/<?php echo $row_filo_image["image"]; ?>" alt="<?php echo $row["filo_baslik"]; ?>"></a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 col-xl-7 pad-l-40 urun-detay-right">
                    <h1><?php echo $row["filo_baslik"]; ?></h1>
                    <div class="col-12 anadiv no-pad">
                        <div class="line"></div>
                    </div>
                    <span class="detayh1-span">Bodrum & Kos Ferry Lines</span>
                    <ul>
                        <li><b>Yolcu Kapasitesi:</b> <?php echo $row["yolcu"]; ?></li>
                        <li><b>Tekne Kodu:</b> <?php echo $row["tekne_k"]; ?></li>
                        <li><b>Motor:</b> <?php echo $row["motor"]; ?></li>
                        <?php echo $row["filo_metin"]; ?>
                        <div class="clearfix margin-t-25"></div>
                        <div class="clearfix"></div>
                        <div class="sosyalMedyadapaylas">
                            <span class="sosyalPaylas">Sosyal Medyada Paylaş</span>
                            <div class="clearfix width100"></div>
                            <a href="" target="_blank" class="sosyal facebook text-dark"><i class="fab fa-facebook sosyalmedya sosyal-face" aria-hidden="true"></i></a>
                            <a href="" target="_blank" class="sosyal twitter text-dark"><i class="fab fa-twitter sosyalmedya sosyal-tw" aria-hidden="true"></i></a>
                            <a href="" target="_blank" class="sosyal linkedin text-dark"><i class="fab fa-linkedin sosyalmedya sosyal-ins" aria-hidden="true"></i></a>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>