<?php include "db.php"; ?>


<?php

if (isset($_POST["admin_ekle"])) {
    $isim = $_POST["isim"];
    $pass = $_POST["pass"];
    $email = $_POST["email"];
    $perm = $_POST["perm"];
    if (!empty($_FILES["resim"]["size"])) {
        if (!empty($_FILES["resim"]["size"] < 1024 * 1024)) {

            if ($_FILES["resim"]["type"] == "image/png" || "image/jpeg") {
                $dosya_adi   =    $_FILES["resim"]["name"];

                $uret = array("cv", "fg", "th", "lu", "er");
                $uzanti = substr($dosya_adi, -4, 4);
                $sayi_tut = rand(1, 10000);

                $yeni_ad = "../upload/" . $uret[rand(0, 4)] . $sayi_tut . $uzanti;

                $son = substr($yeni_ad, 3);
                echo $son;

                if (move_uploaded_file($_FILES["resim"]["tmp_name"], $yeni_ad)) {
                    echo 'Dosya başarıyla yüklendi.';
                    $sorgu = $db->prepare("INSERT INTO user SET isim=?,email=?,pass=?,perm=?,resim=?");

                    $sorgu->execute(array($isim, $email, $pass, $perm, $son));

                    if ($sorgu) {
            echo'<meta http-equiv="refresh" content="0;URL=../profile.php">';
                    }
                }
            }
        }
    } else {
        $sorgu = $db->prepare("INSERT INTO user SET isim=?,email=?,pass=?,perm=?");

        $sorgu->execute(array($isim, $email, $pass, $perm));

        if ($sorgu) {
            echo'<meta http-equiv="refresh" content="0;URL=../profile.php">';
        }
    }
}


if (isset($_POST["soru_ekle"])) {


    $soru_baslik = $_POST["soru_baslik"];
    $soru_cevap = $_POST["soru_cevap"];
    $soru_ekle = $db->prepare("INSERT INTO sss SET soru_baslik=?,soru_cevap=?");
    $soru_ekle->execute(array($soru_baslik, $soru_cevap));

    if ($soru_ekle) {
       echo'<meta http-equiv="refresh" content="0;URL=../sss.php">';
    }
}


if (isset($_POST["bilet_ekle"])) {

    $tur_adi = $_POST["tur_adi"];
    $yetiskin1 = $_POST["yetiskin1"];
    $yetiskin2 = $_POST["yetiskin2"];
    $yetiskin3 = $_POST["yetiskin3"];
    $cocuk1 = $_POST["cocuk1"];
    $cocuk2 = $_POST["cocuk2"];
    $cocuk3 = $_POST["cocuk3"];
    $bebek1 = $_POST["bebek1"];
    $bebek2 = $_POST["bebek2"];
    $bebek3 = $_POST["bebek3"];
    $kalkis = $_POST["kalkis"];
    $varis = $_POST["varis"];
    $tekne_adi = $_POST["tekne_adi"];
    $a = $_POST["baslangic_tarih"];
    $b = $_POST["bitis_tarih"];

    $tarih = "$a & $b";
    $bilet_ekle = $db->prepare("INSERT INTO bilet_fiyatlari SET tur_adi=?,yetiskin1=?,yetiskin2=?,yetiskin3=?,cocuk1=?,cocuk2=?,cocuk3=?,bebek1=?,bebek2=?,bebek3=?,kalkis_saat=?,varis_saat=?,tekne_adi=?,tarih=?");
    $bilet_ekle->execute(array($tur_adi, $yetiskin1, $yetiskin2, $yetiskin3, $cocuk1, $cocuk2, $cocuk3, $bebek1, $bebek2, $bebek3, $kalkis, $varis, $tekne_adi, $tarih));
    if ($bilet_ekle) {
        echo'<meta http-equiv="refresh" content="0;URL=../bilet_satis.php">';
    }
}


if (isset($_POST["slider_ekle"])) {

    if (!empty($_FILES["resim"]["size"])) {
        if (!empty($_FILES["resim"]["size"] < 1024 * 1024)) {

            if ($_FILES["resim"]["type"] == "image/png" || "image/jpeg") {
                $dosya_adi   =    $_FILES["resim"]["name"];

                $uret = array("cv", "fg", "th", "lu", "er");
                $uzanti = substr($dosya_adi, -4, 4);
                $sayi_tut = rand(1, 10000);

                $yeni_ad = "../upload/" . $uret[rand(0, 4)] . $sayi_tut . $uzanti;

                $son = substr($yeni_ad, 3);
                echo $son;

                if (move_uploaded_file($_FILES["resim"]["tmp_name"], $yeni_ad)) {
                    echo 'Dosya başarıyla yüklendi.';
                    $sorgu = $db->prepare("INSERT INTO slider SET resim=?");

                    $sorgu->execute(array($son));

                    if ($sorgu) {
                  echo'<meta http-equiv="refresh" content="0;URL=../slider.php">';

                    }
                }
            }
        }
    }
}

if (isset($_POST["haber_ekle"])) {
    $haber_baslik = $_POST["haber_baslik"];
    $haber_metin = $_POST["haber_metin"];

    if (!empty($_FILES["resim"]["size"])) {
        if (!empty($_FILES["resim"]["size"] < 1024 * 1024)) {

            if ($_FILES["resim"]["type"] == "image/png" || "image/jpeg") {
                $dosya_adi   =    $_FILES["resim"]["name"];

                $uret = array("cv", "fg", "th", "lu", "er");
                $uzanti = substr($dosya_adi, -4, 4);
                $sayi_tut = rand(1, 10000);

                $yeni_ad = "../upload/" . $uret[rand(0, 4)] . $sayi_tut . $uzanti;

                $son = substr($yeni_ad, 3);
                echo $son;

                if (move_uploaded_file($_FILES["resim"]["tmp_name"], $yeni_ad)) {
                    echo 'Dosya başarıyla yüklendi.';
                    $sorgu = $db->prepare("INSERT INTO haberler SET haber_baslik=?,haber_metin=?,resim=?");

                    $sorgu->execute(array($haber_baslik, $haber_metin, $son));

                    if ($sorgu) {
                    
                          echo'<meta http-equiv="refresh" content="0;URL=../haber_liste.php">';
                    }
                }
            }
        }
    } else {
        $sorgu = $db->prepare("INSERT INTO haberler SET haber_baslik=?,haber_metin=?");

        $sorgu->execute(array($haber_baslik, $haber_metin));

        if ($sorgu) {
          echo'<meta http-equiv="refresh" content="0;URL=../haber_liste.php">';

        } else {
            echo "Hata";
        }
    }
}

if (isset($_POST["filo_ekle"])) {
    $filo_baslik = $_POST["filo_baslik"];
    $filo_metin = $_POST["filo_metin"];
    $yolcu = $_POST["yolcu"];
    $motor = $_POST["motor"];
    $tekne_k = $_POST["tekne_k"];

    if (!empty($_FILES["resim"]["size"])) {
        if (!empty($_FILES["resim"]["size"] < 1024 * 1024)) {

            if ($_FILES["resim"]["type"] == "image/png" || "image/jpeg") {
                $dosya_adi   =    $_FILES["resim"]["name"];

                $uret = array("cv", "fg", "th", "lu", "er");
                $uzanti = substr($dosya_adi, -4, 4);
                $sayi_tut = rand(1, 10000);

                $yeni_ad = "../upload/" . $uret[rand(0, 4)] . $sayi_tut . $uzanti;

                $son = substr($yeni_ad, 3);
                echo $son;

                if (move_uploaded_file($_FILES["resim"]["tmp_name"], $yeni_ad)) {
                    echo 'Dosya başarıyla yüklendi.';
                    $sorgu = $db->prepare("INSERT INTO filomuz SET filo_baslik=?,filo_metin=?,resim=?,yolcu=?,tekne_k=?,motor=?");

                    $sorgu->execute(array($filo_baslik, $filo_metin, $son, $yolcu, $tekne_k, $motor));

                    if ($sorgu) {
                                  echo'<meta http-equiv="refresh" content="0;URL=../filo_liste.php">';

                    }
                }
            }
        }
    } else {
        $sorgu = $db->prepare("INSERT INTO filomuz SET filo_baslik=?,filo_metin=?,yolcu=?,tekne_k=?,motor=?");

        $sorgu->execute(array($filo_baslik, $filo_metin, $yolcu, $tekne_k, $motor));

        if ($sorgu) {
        echo'<meta http-equiv="refresh" content="0;URL=../haber_liste.php">';

        }
    }
}
?>