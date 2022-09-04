<?php


include 'db.php';


$site_ayar = $db->prepare("SELECT * FROM iletisim");
$site_ayar->execute();
$sites = $site_ayar->fetch(PDO::FETCH_ASSOC);


?>

<?php

$duyuru=$db->prepare("SELECT *FROM duyuru");
$duyuru->execute();
$duy=$duyuru->fetch(PDO::FETCH_ASSOC);

if($duy["visible"]=="on")
{?>
<div class="info-msg">
  <i class="fa fa-info-circle"></i>
 <?php echo $duy["metin"];?>
</div>
  <?php } ?>
  
  <style>
      @import url('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');

.info-msg,
.success-msg,
.warning-msg,
.error-msg {
  margin: 10px 0;
  padding: 10px;
  border-radius: 3px 3px 3px 3px;
}
.info-msg {
  color: #059;
  background-color: #BEF;
}
  </style>
 
<div class="container-fluid anadiv header-top">
    
    <div class="container">
        <div class="col-xs-12 col-md-12 anadiv no-pad mobilnone">
            <span class="phone"><i class="fa fa-phone"></i> <?php echo $sites["tel"]; ?> </span>
            <span><i class="far fa-envelope"></i><a style="color:black;" href="mailto:<?php echo $sites["mail"];?>"><?php echo $sites["mail"]; ?></a></span>
        </div>
    </div>
</div>
<div class="container-fluid header">
    <div class="container">
        <div class="col-12 anadiv no-pad">
            <div class="col-4 col-md-2 anadiv no-pad">
                <a href="index.php" class="logo"><img src="images/logo.png" alt="Food Packing"></a>

            </div>
        
          <div class="col-8 col-md-10 anadiv no-pad">
                <div class="header-phone">
                    <div class="phone-border">
                        <a href="https://api.whatsapp.com/send?phone=05416699999" class="phone-bg">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
                <nav class="main-manu">
                    <ul>
                        <li><a href="hakkimizda.php">KURUMSAL</a>
                            <ul class="kurumsalacilirmenu">
                                <li><a href="hakkimizda.php">HAKKIMIZDA</a></li>
                                <li><a href="sikca-sorulan-sorular.php">S.S.S</a></li>
                                <li><a href="kvkk.php">KVKK</a></li>
                            </ul>
                        </li>
                        <li><a href="bilet-fiyatlari.php">BİLET FİYATLARI</a></li>
                        <li><a href="sefer-saatleri.php">SEFER SAATLERİ</a></li>
                        <li><a href="filomuz.php">FİLOMUZ</a></li>
                        <li><a href="haberler.php">MEDYA</a>
                            <ul>
                                <li><a href="haberler.php">Yunan Adaları</a></li>
                                <li><a href="videolar.php">VİDEOLAR</a></li>
                            </ul>
                        </li>
                        <li><a href="iletisim.php">İLETİŞİM</a></li>
                    </ul>
                </nav>
                <a href="#mobilmenu" id="close"><i class="fa fa-bars" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>