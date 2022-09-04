<!DOCTYPE html>
<html lang="tr">
<?php include 'head.php'; ?>

<body>
    <?php include 'header.php'; ?>

    <?php



    if (isset($_GET["id"])) {
        $id = $_GET["id"];

        $cek = $db->prepare("SELECT *FROM haberler WHERE id=?");
        $cek->execute(array($id));
        $haber = $cek->fetch(PDO::FETCH_ASSOC);
        $id=$haber["id"];
    }
    ?>
    <div class="container-fluid content-header">
        <div class="container ">
            <div class="sayfalama">
                <a title="Anasayfa" href="index.php">Anasayfa<i class="fa fa-angle-right"></i></a>
                <a title="Medya" href="javascript:(void)0">Medya<i class="fa fa-angle-right"></i></a>
                <a title="Haberler" href="haberler.php">Haberler<i class="fa fa-angle-right"></i></a>
                <span><?php echo $haber["haber_baslik"]; ?></span>
            </div>
        </div>
    </div>
    <div class="container-fluid ortaalan anadiv iletisimformu">
        <div class="container">
            <div class="col-xs-12 col-md-3 anadiv no-pad">
                <figure class="haber-detay-img">
                    <a href="admin/<?php echo $haber["resim"]; ?>" class="galerigrup" data-fancybox="ortadogu-haberler" title="Dörtyol Ticaret ve Sanayi Odası İle Anlaşma İmzalandı">
                        <img src="admin/<?php echo $haber["resim"]; ?>" alt="Dörtyol Ticaret ve Sanayi Odası İle Anlaşma İmzalandı">
                    </a>
                </figure>
            </div>
            <div class="col-xs-12 col-md-9 anadiv textalan tabletpl">
                <h1><?php echo $haber["haber_baslik"]; ?></h1>
                <div class="col-12 anadiv no-pad">
                    <div class="line"></div>
                </div>
                <?php echo $haber["haber_metin"]; ?>
                <p><b>Haber Foto Galeri</b></p>
                <div class="col-12 anadiv no-pad">
                    <div class="col-xs-12 col-md-4 col-xl-3 anadiv foto-galeri">
                        <figure>
                            <a href="admin/<?php echo $haber["resim"]; ?>" class="galerigrup" data-fancybox="ortadogu-haberler" title="Dörtyol Ticaret ve Sanayi Odası İle Anlaşma İmzalandı">
                                <img src="admin/<?php echo $haber["resim"]; ?>" alt="Dörtyol Ticaret ve Sanayi Odası İle Anlaşma İmzalandı">
                            </a>
                        </figure>
                    </div><?php
                    $image=$db->prepare("SELECT *FROM image WHERE parent_id=?");
                    $image->execute(array($id));
                    $img=$image->fetchAll(PDO::FETCH_ASSOC);
                    foreach($img as $gx)
                    {

                    ?>
                    <div class="col-xs-12 col-md-4 col-xl-3 anadiv foto-galeri">
                        <figure>
                            <a href="admin/<?php echo $gx["image"]; ?>" class="galerigrup" data-fancybox="ortadogu-haberler" title="Dörtyol Ticaret ve Sanayi Odası İle Anlaşma İmzalandı">
                                <img src="admin/<?php echo $gx["image"]; ?>" alt="Dörtyol Ticaret ve Sanayi Odası İle Anlaşma İmzalandı">
                            </a>
                        </figure>
                    </div>
                <?php } ?>
                </div>
                <div class="clearfix"></div>
                <div class="sosyalMedyadapaylas">
                    <span class="sosyalPaylas">Sosyal Medyada Paylaş</span>
                    <div class="clearfix width100"></div>
                    <a href="" target="_blank" class="sosyal facebook text-dark"><i class="fab fa-facebook sosyalmedya sosyal-face" aria-hidden="true"></i></a>
                    <a href="" target="_blank" class="sosyal twitter text-dark"><i class="fab fa-twitter sosyalmedya sosyal-tw" aria-hidden="true"></i></a>
                    <a href="" target="_blank" class="sosyal linkedin text-dark"><i class="fab fa-linkedin sosyalmedya sosyal-ins" aria-hidden="true"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-12 anadiv no-pad">
                <span class="benzerhaberler">Benzer Haberler</span>
                <div class="col-12 anadiv no-pad">
                    <div class="col-xs-12 col-md-6 col-xl-4 haber-right anadiv">
                        <a href="haber-detay.php">
                            <figure>
                                <img src="admin/<?php echo $haber["resim"]; ?>" class="card-img-top" alt="Haber 1">
                            </figure>
                            <div class="kadro-text">
                                <span class="etiket">Bodrum</span>
                                <span class="baslik">Havalar da Isınmışken Hafta Sonu Kaçamakları İçin Gidebileceğiniz 10 Yer</span>
                                <span class="tarih"><i class="fas fa-clock"></i> 15.06.2022</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-md-6 col-xl-4 haber-right anadiv">
                        <a href="haber-detay.php">
                            <figure>
                                <img src="admin/<?php echo $haber["resim"]; ?>" class="card-img-top" alt="Haber 1">
                            </figure>
                            <div class="kadro-text">
                                <span class="etiket">Bodrum</span>
                                <span class="baslik">Havalar da Isınmışken Hafta Sonu Kaçamakları İçin Gidebileceğiniz 10 Yer</span>
                                <span class="tarih"><i class="fas fa-clock"></i> 15.06.2022</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-md-6 col-xl-4 haber-right anadiv tabletnone">
                        <a href="haber-detay.php">
                            <figure>
                                <img src="admin/<?php echo $haber["resim"]; ?>" class="card-img-top" alt="Haber 1">
                            </figure>
                            <div class="kadro-text">
                                <span class="etiket">Bodrum</span>
                                <span class="baslik">Havalar da Isınmışken Hafta Sonu Kaçamakları İçin Gidebileceğiniz 10 Yer</span>
                                <span class="tarih"><i class="fas fa-clock"></i> 15.06.2022</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>