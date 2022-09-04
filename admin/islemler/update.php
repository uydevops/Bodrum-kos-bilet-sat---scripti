<?php include "db.php"; ?>


<?php






if (isset($_POST["profile"])) {

    $isim = $_POST["isim"];
    $pass = $_POST["pass"];
    $email = $_POST["email"];
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
                    $sorgu = $db->prepare("UPDATE user SET isim=?,email=?,pass=?,resim=?");

                    $sorgu->execute(array($isim, $email, $pass, $son));

                    if ($sorgu) {
                       echo'<meta http-equiv="refresh" content="0;URL=../profile.php">';
                    }
                }
            }
        }
    } else {
        $sorgu = $db->prepare("UPDATE user SET isim=?,email=?,pass=?");

        $sorgu->execute(array($isim, $email, $pass));

        if ($sorgu) {
              echo'<meta http-equiv="refresh" content="0;URL=../profile.php">';
        }
    }
}



if (isset($_POST["site_ayar"])) {

    $site_adi = $_POST["site_adi"];
    $site_desc = $_POST["site_desc"];
    $site_footer = $_POST["site_footer"];
    $site_mail = $_POST["site_mail"];

    $site_ayar_update = $db->prepare("UPDATE site_ayar SET site_adi=?,site_desc=?,site_footer=?,site_mail=?");
    $site_ayar_update->execute(array($site_adi, $site_desc, $site_footer, $site_mail));
    if ($site_ayar_update) {
          echo'<meta http-equiv="refresh" content="0;URL=../setting.php">';
    }
}



if (isset($_POST["admin_update"])) {
    $admin_id = $_GET["admin_id"];
    $isim = $_POST["isim"];
    $pass = $_POST["pass"];
    $email = $_POST["email"];
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
                    $sorgu = $db->prepare("UPDATE user SET isim=?,email=?,pass=?,resim=? WHERE id=?");

                    $sorgu->execute(array($isim, $email, $pass, $son, $admin_id));

                    if ($sorgu) {
                   echo'<meta http-equiv="refresh" content="0;URL=../admin_list.php">';
               
                    }
                }
            }
        }
    } else {
        $sorgu = $db->prepare("UPDATE user SET isim=?,email=?,pass=? WHERE id=?");

        $sorgu->execute(array($isim, $email, $pass, $admin_id));

        if ($sorgu) {
               echo'<meta http-equiv="refresh" content="0;URL=../admin_list.php">';
        }
    }
}



if (isset($_POST["iletisim"])) {

    $adres = $_POST["adres"];
    $tel = $_POST["tel"];
    $wp = $_POST["wp"];
    $mail = $_POST["mail"];
    $ilet_guncelle = $db->prepare("UPDATE iletisim SET adres=?,tel=?,wp=?,mail=?");
    $ilet_guncelle->execute(array($adres, $tel, $wp, $mail));

    if ($ilet_guncelle) {
           echo'<meta http-equiv="refresh" content="0;URL=../adres.php">';
    }
}



if (isset($_POST["hakkimizda"])) {
    $metin_baslik = $_POST["metin_baslik"];
    $metin = $_POST["metin"];

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
                    $sorgu = $db->prepare("UPDATE hakkimizda SET metin_baslik=?,metin=?,resim=?");

                    $sorgu->execute(array($metin, $metin_baslik, $son));

                    if ($sorgu) {
                           echo'<meta http-equiv="refresh" content="0;URL=../hakkimizda.php">';
                    }
                }
            }
        }
    } else {
        $sorgu = $db->prepare("UPDATE hakkimizda SET metin=?,metin_baslik=?");

        $sorgu->execute(array($metin, $metin_baslik));

        if ($sorgu) {
             echo'<meta http-equiv="refresh" content="0;URL=../hakkimizda.php">';
    

        }
    }
}


if (isset($_POST["giris_metin_sss"])) {

    $metin = $_POST["metin"];

    $sss_metin_update_version = $db->prepare("UPDATE sss SET giris_metin=?");
    $sss_metin_update_version->execute(array($metin));
     echo'<meta http-equiv="refresh" content="0;URL=../sss.php">';
}


if (isset($_POST["soru_update"])) {

    $ss_id = $_GET["sss_id"];
    $soru_baslik = $_POST["soru_baslik"];
    $soru_cevap = $_POST["soru_cevap"];
    $sss_up = $db->prepare("UPDATE sss SET soru_baslik=?,soru_cevap=? WHERE id=?");
    $sss_up->execute(array($soru_baslik, $soru_cevap, $ss_id));
    echo'<meta http-equiv="refresh" content="0;URL=../sss.php">';
}

if (isset($_POST["kvkk_update"])) {
    $kvk_1 = $_POST["metin_baslik_kvkk"];

    $kvk_2 = $_POST["metin_kvkk"];
    $kvkk_up = $db->prepare("UPDATE kvkk SET metin_baslik=?,metin=?");
    $kvkk_up->execute(array($kvk_1, $kvk_2));
    if ($kvkk_up) {
         echo'<meta http-equiv="refresh" content="0;URL=../kvkk.php">';
    }
}

if (isset($_POST["tur_edit"])) {
    $tur_id = $_GET["bilet_number"];
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
    $bilet_ekle = $db->prepare("UPDATE bilet_fiyatlari SET tur_adi=?,yetiskin1=?,yetiskin2=?,yetiskin3=?,cocuk1=?,cocuk2=?,cocuk3=?,bebek1=?,bebek2=?,bebek3=?,kalkis_saat=?,varis_saat=?,tekne_adi=?,tarih=? WHERE id=?");
    $bilet_ekle->execute(array($tur_adi, $yetiskin1, $yetiskin2, $yetiskin3, $cocuk1, $cocuk2, $cocuk3, $bebek1, $bebek2, $bebek3, $kalkis, $varis, $tekne_adi, $tarih, $tur_id));
}

if (isset($_POST["slider_update"])) {
    $slider_id = $_GET["slider_id"];

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
                    $sorgu = $db->prepare("UPDATE slider SET resim=? WHERE id=?");

                    $sorgu->execute(array($son, $slider_id));

                    if ($sorgu) {
                             echo'<meta http-equiv="refresh" content="0;URL=../slider.php">';

                    }
                }
            }
        }
    }
}

if (isset($_POST["haber_update"])) {
    $haber_id = $_GET["haber_id"];
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
                    $sorgu = $db->prepare("UPDATE haberler SET haber_baslik=?,haber_metin=?,resim=? WHERE id=?");

                    $sorgu->execute(array($haber_baslik, $haber_metin, $son, $haber_id));

                    if ($sorgu) {
                             echo'<meta http-equiv="refresh" content="0;URL=../haber_liste.php">';

                        
                    }
                }
            }
        }
    } else {
        $sorgu = $db->prepare("UPDATE haberler SET haber_baslik=?,haber_metin=? WHERE id=?");

        $sorgu->execute(array($haber_baslik, $haber_metin, $haber_id));

        if ($sorgu) {
                 echo'<meta http-equiv="refresh" content="0;URL=../haber_liste.php">';
        }
    }
}

if (isset($_POST["filo_update"])) {
    $filo_id = $_GET["filo_id"];
    $filo_baslik = $_POST["filo_baslik"];
    $filo_metin = $_POST["filo_metin"];
    $yolcu = $_POST["yolcu"];
    $motor = $_POST["motor"];
    $tekne_k = $_POST["tekne_k"];
}


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
                $filo_sorgu = $db->prepare("UPDATE filomuz SET filo_baslik=?,filo_metin=?,resim=?,yolcu=?,tekne_k=?,motor=?WHERE id=?");

                $filo_sorgu->execute(array($filo_baslik, $filo_metin, $son, $yolcu, $tekne_k, $motor, $filo_id));

                if ($filo_sorgu) {
                     echo'<meta http-equiv="refresh" content="0;URL=../filo_liste.php">';
                    
                }
            }
        }
    }
} else {
    $filo_sorgu = $db->prepare("UPDATE filomuz SET filo_baslik=?,filo_metin=?,yolcu=?,tekne_k=?,motor=? WHERE id=?");

    $filo_sorgu->execute(array($filo_baslik, $filo_metin, $yolcu, $tekne_k, $motor, $filo_id));

    if ($filo_sorgu) {
           echo'<meta http-equiv="refresh" content="0;URL=../filo_liste.php">';
    }
}



if(isset($_POST["duyuru"]))
{
    $duyuru_metin=$_POST["duyuru_metin"];
    $visible=$_POST["visible"];
    $duyuru=$db->prepare("UPDATE duyuru SET metin=?,visible=? WHERE id=1");
    $duyuru->execute(array($duyuru_metin,$visible));
    if($duyuru)
    {
            echo'<meta http-equiv="refresh" content="0;URL=../index.php">';
    }
    
}





?>




