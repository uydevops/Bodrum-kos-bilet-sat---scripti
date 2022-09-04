<?php 
$foot=$db->prepare("SELECT * FROM footer");
$foot->execute();
$fot=$foot->fetch(PDO::FETCH_ASSOC);
?>

<div class="container-fluid anadiv footer">
	<div class="container">
		<div class="col-xs-12 col-md-6 col-xl-4 footer-box tabletnone">
			<span class="baslik">KURUMSAL</span>
			<div class="line"></div>
			<?php

			$degisken = $hakkimizda["metin"];
			$sonhali = substr($degisken, 0, 108);
			?>
	<P><?php echo $sonhali; ?></P>
			<div class="col-12 anadiv no-pad Linka">
				<a href="hakkimizda.php">Bodrum Kos Hakkında <i class="fas fa-long-arrow-alt-right"></i></a>
			</div>
		</div>
		<div class="col-xs-12 col-md-6 col-xl-4 footer-box">
			<span class="baslik">HIZLI MENÜ</span>
			<div class="line"></div>
			<ul>
			    <li><a href="">Hakkımızda</a></li>
			    <li><a href="">Sıkça Sorulan Sorular</a></li>
			    <li><a href="">Bilet Fiyatları</a></li>
			    <li><a href="">Sefer Saatleri</a></li>
			    <li><a href="">Filomuz</a></li>
			    <li><a href="">Blog</a></li>
			</ul>
		</div>
	<div class="col-xs-12 col-md-6 col-xl-4 footer-box footer-box-mobil">
			<span class="baslik">İLETİŞİM BİLGİLERİ</span>
			<div class="line"></div>
			<p><i class="fa fa-map-marker-alt iletisimicon"></i><?php echo $footer["adres"]; ?></p>
			<p><i class="fa fa-phone-square-alt iletisimicon"></i><a class="link" href="tel:<?php echo $footer["tel"]; ?>"><?php echo $footer["tel"]; ?></a></p>
			<p><i class="fab fa-whatsapp iletisimicon"></i><a class="link" href="https://api.whatsapp.com/send?phone=05416699999"><?php echo $footer["wp"]; ?></a></p>
				<p><i class="fab fa-instagram iletisimicon"></i><a class="link" href="https://www.instagram.com/ifsshippingagency/">ifsshippingagency</a></p>
				<p><i class="fab fa-facebook iletisimicon"></i><a class="link" href="https://www.facebook.com/ifsshippingagency/">ifsshippingagency</a></p>
					<p><i class="fab fa-twitter iletisimicon"></i><a class="link" href="https://twitter.com/ifsshipping">ifsshippingagency</a></p>
			<p><i class=" fa fa-envelope iletisimicon"></i><a class="link" href="mailto:info@bodrumkosferrylines.com"><?php echo $footer["mail"]; ?></a></p>
		</div>
	</div>
	
	<img src="images/footer.jpg" alt="Bodrum Kos Ferry Lines" class="footer-img-a" width="100%">  
</div>
<a href="javascript:void(0)" id="yukari" title="Yukarı Çık">
    <i class="fa fa-arrow-up"></i>
</a>
<!-- Optional JavaScript; choose one of the two! -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- AOS js -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script> AOS.init();</script>
<!-- owl-carousel -->
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.mmenu.all.min.js" ></script>
<!-- fancybox -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<!-- Local JS -->
<script src="js/jquery.enllax.js" ></script>
<script>
  AOS.init();
</script>
<script src="js/script.js" ></script>
