<!DOCTYPE html>
<html lang="tr">
<?php include 'head.php'; ?>

<body>
    <?php include 'header.php'; ?>
    <div class="container-fluid content-header">
        <div class="container ">
            <div class="sayfalama">
                <a title="Anasayfa" href="index.php">Anasayfa<i class="fa fa-angle-right"></i></a>
                <a title="Medya" href="javascript:(void)0">Medya<i class="fa fa-angle-right"></i></a>
                <span>HABERLER</span>
            </div>
        </div>
    </div>
    <div class="container-fluid ortaalan anadiv iletisimformu">
        <div class="container">
            <h1>Haberler</h1>
            <div class="col-12 anadiv no-pad">
                <div class="line"></div>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste inventore nam sequi ex repudiandae ea cumque nesciunt doloremque rem nisi fugiat velit facilis quia assumenda provident quam soluta saepe repellendus vitae obcaecati, corporis consectetur eaque. Tempora, nemo eum libero laboriosam minus consequatur ad quasi sint quo iste consequuntur ipsam excepturi deleniti officia qui repellat.</p>
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
                                <span class="etiket">Yeni</span>
                                <span class="baslik"><?php echo $row["haber_baslik"]; ?>"</span>
                                <span class="tarih"><i class="fas fa-clock"></i> <?php echo substr($row["date"], 0, 10); ?></span>
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