<html lang="tr">
<?php include 'head.php'; ?>

<body>
    <?php include 'header.php'; ?>


    <?php
    error_reporting(0);
    $slider = $db->prepare("SELECT * FROM slider WHERE id=1");
    $slider->execute();
    $slid = $slider->fetch(PDO::FETCH_ASSOC);
    ?>

    <div class="container-fluid slider anadiv">
        <div class="owl-carousel owl-slider">
            <div class="item">
                <div class="slides slide1 webslider" style="background-image: url(images/slider/banner.jpg);">
                    <div class="container">
                        <div class="slidetext">
                            <p>BODRUM' DAN 20 DAKİKADA <br><b>KOS' A SEYAHAT</b></p>

                            <span><?php echo $slid["metin"]; ?></span>
                            <a href="https://www.kosticket.com/Online/Satis/" style="font-size:30px;">ONLINE BİLET AL <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <img class="mobilslider" src="images/slider/mobil-slider-1.jpg" alt="">
            </div>
            <div class="item">
                <div class="slides slide1 webslider" style="background-image: url(images/slider/slide1.jpg);">
                    <div class="container">
                        <div class="slidetext">
                            <p>BODRUM' DAN 20 DAKİKADA <br><b>KOS' A SEYAHAT</b></p>

                            <span><?php echo $slid["metin"]; ?></span>
                            <a href="https://www.kosticket.com/Online/Satis/" style="font-size:30px;">ONLINE BİLET AL <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <img class="mobilslider" src="images/slider/mobil-slider-1.jpg" alt="">
            </div>
            <?php

            $resimler = $db->prepare("SELECT * FROM slider WHERE id>1");
            $resimler->execute();
            $res = $resimler->fetchALL(PDO::FETCH_ASSOC);
            foreach ($res as $img) { ?>
                <div class="item">
                    <div class="slides slide1 webslider" style="background-image: url(admin/<?php echo $img["resim"]; ?>);">
                        <div class="container">
                            <div class="slidetext">
                                <p>BODRUM' DAN 20 DAKİKADA <br><b>KOS' A SEYAHAT</b></p>

                                <a href="https://www.kosticket.com/Online/Satis/" style="font-size:30px;">ONLINE BİLET AL <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <img class="mobilslider" src="images/slider/mobil-slider-1.jpg" alt="">
                </div>

            <?php } ?>
        </div>
    </div>


    <div class="container-fluid home-content anadiv">
        <div class="container">
            <h2>Filomuz</h2>
            <p>1980 Yılından bu yana Bodrum'un yerel taşımacı firması olarak günümüze dek hizmet sunmaktayız. Her zaman çağın gerekliliklerine göre şekillenen hizmet anlayışımıza uygun olarak filomuzu yeniliyor ve sizlere en iyi hizmeti vermeye gayret ediyoruz.</p>
            <div class="col-12 anadiv no-pad">
                <div class="owl-carousel col-12 owl-products">
                    <?php


                    $filo = $db->prepare("SELECT * FROM filomuz ORDER BY id DESC");
                    $filo->execute();
                    $filoo = $filo->fetchALL(PDO::FETCH_ASSOC);
                    foreach ($filoo as $rows) {
                    ?>
                        <div class="item">
                            <div class="col-xs-12 ferrylines-products ">
                                <figure>
                                    <img src="admin/<?php echo $rows["resim"]; ?>" class="card-img-top" alt="">
                                    <span>YOLCU</span>
                                </figure>
                                <div class="products-text sedhover">
                                    <p><?php echo $rows["filo_baslik"]; ?></p>
                                    <ul class="sedhover">
                                        <li><i class="fas fa-user-alt"></i> Yolcu Kapasitesi: <?php echo $rows["yolcu"]; ?></li>
                                        <li><i class="fas fa-address-card"></i> Tekne Kodu: <?php echo $rows["tekne_k"]; ?></li>
                                        <li><i class="fas fa-tachometer-alt"></i> Motor: <?php echo $rows["motor"]; ?></li>
                                    </ul>
                                    <a class="link" href="tekne-detay.php?tekne-adi=<?php echo $rows["tekne_k"]; ?>">Tekneyi İncele <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid ferryKurumsal">
        <div class="container">
            <div class="col-6 col-md-6 col-xl-3 kurumsalBox">
                <a href="iletisim.php">
                    <img src="images/rodos-tekne.png" alt="">
                    <span>Bodrum & Kos</span>
                    <p>HIZLI <br>ULAŞIM</p>
                </a>
            </div>
            <div class="col-6 col-md-6 col-xl-3 kurumsalBox">
                <a href="sikca-sorulan-sorular.php">
                    <img src="images/musteri-memnuniyeti.png" alt="">
                    <span>%100</span>
                    <p>MÜŞTERİ <br>MEMNUNİYETİ</p>
                </a>
            </div>
            <div class="col-6 col-md-6 col-xl-3 kurumsalBox tbmb0 mmb20">
                <a href="sefer-saatleri.php">
                    <img src="images/duzergah.png" alt="">
                    <span>Ferry Lines</span>
                    <p>DÜZENLİ <br>SEFER</p>
                </a>
            </div>
            <div class="col-6 col-md-6 col-xl-3 kurumsalBox tbmb0">
                <a href="videolar.php">
                    <img src="images/bilet.png" alt="">
                    <span>Ferry Lines</span>
                    <p>ONLINE <br>BİLET</p>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid home-content anadiv haberbg">
        <div class="container">
            <h2>Yunan Adalarına Bir Bakış</h2>
            <p>Yunanistan kültür ve geleneğinin ayrılmaz bir parçası olan Yunan Adaları dediğimizde aslında sayıları neredeyse 6000’i buluyor. İrili ufaklı bu adaların 227 tanesinde ise yerleşim var. Masmavi sular, karakteristik köyler, leziz tavernalar ve hepimizin ihtiyaç duyduğu “zamanı yavaşlatma” arzusuyla Yunan Adaları her zaman çok keyifli.
                İki antik dünya medeniyetinin ortaya çıktığı Yunan Adaları sadece deniz ve güzel havasından dolayı değil; tarihi, kültürü, antik yapıları, müzeleri ve huzur veren ambiyansıyla da Ege’nin gözbebeği… Bu yaz Yunan Adaları’nın karakteristik mimarisi ve aheste yaşam ritmi ile ciğerlerinizi buram buram iyot ve çam kokan Ege Havası ile doldurmaya ne dersiniz?</p>
            <div class="col-12 anadiv no-pad">


                <?php

                $haber_cek = $db->prepare("SELECT * FROM haberler ORDER BY id DESC");
                $haber_cek->execute();
                $haber = $haber_cek->fetchALL(PDO::FETCH_ASSOC);
                foreach ($haber as $row) {

                ?>
                    <div class="col-xs-12 col-md-6 col-xl-4 haber-right anadiv">
                        <a href="haber-detay.php?id=<?php echo $row["id"]; ?>">
                            <figure>
                                <img src="admin/<?php echo $row["resim"]; ?>" class="card-img-top" alt="Haber 1">
                            </figure>
                            <div class="kadro-text">
                                <span class="etiket">Yeni Haber</span>
                                <span class="baslik"><?php echo $row["haber_baslik"]; ?></span>
                                <span class="tarih"><i class="fas fa-clock"></i><?php echo substr($row["date"], 0, 10); ?></span>
                            </div>
                        </a>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>