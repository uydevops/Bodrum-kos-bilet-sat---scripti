<?php include "db.php";



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
                        header("location:../filo_liste.php");
                    }
                }
            }
        }
    } else {
        $sorgu = $db->prepare("INSERT INTO filomuz SET filo_baslik=?,filo_metin=?,yolcu=?,tekne_k=?,motor=?");

        $sorgu->execute(array($filo_baslik, $filo_metin, $yolcu, $tekne_k, $motor));

        if ($sorgu) {
            header("location:../filo_liste.php");
        }
    }
}
