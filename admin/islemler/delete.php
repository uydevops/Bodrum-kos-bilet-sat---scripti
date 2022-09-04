<?php include "db.php"; ?>



<?php



if (isset($_GET["admin_id"])) {
    $admin_id = $_GET["admin_id"];

    $admin_sil = $db->prepare("DELETE FROM user WHERE id=?");
    $admin_sil->execute(array($admin_id));
    if ($admin_sil) {
        echo'<meta http-equiv="refresh" content="0;URL=../admin_list.php">';
    }
}

if (isset($_GET["sss_id"])) {

    $sss_id = $_GET["sss_id"];
    $sss = $db->prepare("DELETE FROM sss WHERE id=?");
    $sss->execute(array($sss_id));
    if ($sss) {
                echo'<meta http-equiv="refresh" content="0;URL=../sss.php">';

        
    }
}


if (isset($_GET["tur_id"])) {

    $tur_id = $_GET["tur_id"];
    $tur = $db->prepare("DELETE FROM bilet_fiyatlari WHERE id=?");
    $tur->execute(array($tur_id));
    if ($tur) {
   echo'<meta http-equiv="refresh" content="0;URL=../bilet_satis.php">';

    }
}
if(isset($_GET["slider_id"]))
{
    $slider_id=$_GET["slider_id"];
    $slider_sil = $db->prepare("DELETE FROM slider WHERE id=?");
    $slider_sil->execute(array($slider_id));
    if ($slider_sil) {
           echo'<meta http-equiv="refresh" content="0;URL=../slider.php">';

    }

}

if(isset($_GET["haber_id"]))
{

    $haber_id=$_GET["haber_id"];
    $haber_sil = $db->prepare("DELETE FROM haberler WHERE id=?");
    $haber_sil->execute(array($haber_id));
    if ($haber_id) {
                   echo'<meta http-equiv="refresh" content="0;URL=../haber_liste.php">';

    }
}

if(isset($_GET["filo_id"]))
{

    $filomuz=$_GET["filo_id"];
    $filo_sil = $db->prepare("DELETE FROM filomuz WHERE id=?");
    $filo_sil->execute(array($filomuz));
    if ($filo_sil) {
                           echo'<meta http-equiv="refresh" content="0;URL=../filo_liste.php">';

    }
}

if(isset($_GET["footer_id"]))
{
    $f_id=$_GET["footer_id"];
    $footer_sil=$db->prepare("DELETE FROM footer WHERE id=?");
    $footer_sil->execute(array($f_id));
    if($footer_sil)
    {
         echo'<meta http-equiv="refresh" content="0;URL=../aaa.php">';
    }
}

?>