<!DOCTYPE html>
<html lang="tr">
<?php include 'head.php'; ?>

<body>
    <?php include 'header.php'; ?>
    <div class="container-fluid content-header">
        <div class="container ">
            <div class="sayfalama">
                <a title="Anasayfa" href="index.php">Anasayfa<i class="fa fa-angle-right"></i></a>
                <span>FİLOMUZ</span>
            </div>
        </div>
    </div>
    <div class="container-fluid ortaalan anadiv iletisimformu">
        <div class="container">
            <h1>Filomuz</h1>
            <div class="col-12 anadiv no-pad">
                <div class="line"></div>
            </div>
            <p>1980 Yılından bu yana Bodrum'un yerel taşımacı firması olarak günümüze dek hizmet sunmaktayız. Her zaman çağın gerekliliklerine göre şekillenen hizmet anlayışımıza uygun olarak filomuzu yeniliyor ve sizlere en iyi hizmeti vermeye gayret ediyoruz. Feribot ve Catamaran'larımız.. </p>
            <div class="col-12 anadiv no-pad">

                    <?php

                    $filo_cek = $db->prepare("SELECT * FROM filomuz");
                    $filo_cek->execute();
                    $filo = $filo_cek->fetchALL(PDO::FETCH_ASSOC);
                    foreach ($filo as $row) {
                    ?>
                        <div class="col-xs-12 col-md-6 ferrylines-products-page anadiv">
                            <div class="col-12 ferrylines-products anadiv">
                                <figure>
                                    <img src="admin/<?php echo $row["resim"]; ?>" class=" card-img-top" alt="">
                                    <span>YOLCU</span>
                                </figure>
                                <div class="products-text sedhover">
                                    <p><?php echo $row["filo_baslik"]; ?></p>
                                    <ul class="sedhover">

                                        <li><i class="fas fa-user-alt"></i> Yolcu Kapasitesi: <?php echo $row["yolcu"]; ?></li>
                                        <li><i class="fas fa-address-card"></i> Tekne Kodu: <?php echo $row["tekne_k"]; ?></li>
                                        <li><i class="fas fa-tachometer-alt"></i> Motor:<?php echo $row["motor"]; ?></li>
                                    </ul>
                                    <a class="link" href="tekne-detay.php?tekne-adi=<?php echo $row["tekne_k"]; ?>">Tekneyi İncele <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
            </div>

        </div>
    </div>
    </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>