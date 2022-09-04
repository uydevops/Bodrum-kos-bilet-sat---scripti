<?php


$site_ayar = $db->prepare("SELECT *FROM site_ayar");
$site_ayar->execute();
$site = $site_ayar->fetch(PDO::FETCH_ASSOC);



$adres = $db->prepare("SELECT *FROM iletisim");
$adres->execute();
$ilet = $adres->fetch(PDO::FETCH_ASSOC);



$hakkimizda = $db->prepare("SELECT * FROM hakkimizda");
$hakkimizda->execute();
$hak = $hakkimizda->fetch(PDO::FETCH_ASSOC);


$sss_cek = $db->prepare("SELECT * FROM sss");
$sss_cek->execute();
$sss = $sss_cek->fetch(PDO::FETCH_ASSOC);


$kvkk_a = $db->prepare("SELECT * FROM kvkk");
$kvkk_a->execute();
$kvkk = $kvkk_a->fetch(PDO::FETCH_ASSOC);
