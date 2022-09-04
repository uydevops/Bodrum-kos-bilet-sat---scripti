<?php


include 'db.php';


$site_ayar = $db->prepare("SELECT * FROM site_ayar");
$site_ayar->execute();
$site = $site_ayar->fetch(PDO::FETCH_ASSOC);


$footer_cek = $db->prepare("SELECT * FROM iletisim");
$footer_cek->execute();
$footer = $footer_cek->fetch(PDO::FETCH_ASSOC);


$hakkimizda_cek = $db->prepare("SELECT * FROM hakkimizda");
$hakkimizda_cek->execute();
$hakkimizda = $hakkimizda_cek->fetch(PDO::FETCH_ASSOC);
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <title><?php echo $site["site_adi"]; ?></title>
    <link rel="icon" type="image/png" href="images/favicon.png" />

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/jquery.mmenu.all.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
     <meta name="description" content="<?php echo $site["site_desc"];?>">
         <meta name="google-site-verification" content="+nxGUDJ4QpAZ5l9Bsjdi102tLVC21AIh5d1Nl23908vVuFHs34="/>
           <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
    <link rel="stylesheet" href="css/responsive.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>