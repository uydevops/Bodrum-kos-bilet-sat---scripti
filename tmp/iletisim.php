<!DOCTYPE html>
<html lang="tr">
<?php include 'head.php';?>
<body>
<?php include 'header.php'; ?>
<div class="container-fluid content-header">
    <div class="container ">
         <div class="sayfalama">
            <a title="Anasayfa" href="index.php">Anasayfa<i class="fa fa-angle-right"></i></a>
            <span>İLETİŞİM</span>
        </div>
    </div>
</div>
<div class="container-fluid ortaalan anadiv iletisimformu">
    <div class="container">
        <h1>İletişim Bilgileri</h1>
        <div class="col-12 anadiv no-pad">
            <div class="line"></div>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste inventore nam sequi ex repudiandae ea cumque nesciunt doloremque rem nisi fugiat velit facilis quia assumenda provident quam soluta saepe repellendus vitae obcaecati, corporis consectetur eaque. Tempora, nemo eum libero laboriosam minus consequatur ad quasi sint quo iste consequuntur ipsam excepturi deleniti officia qui repellat, ullam voluptas dolorem eius asperiores incidunt dolorum nobis aut repellendus? Aperiam doloremque sint itaque tempora nisi quod, nulla, voluptatem commodi aliquam eligendi asperiores debitis vero enim distinctio nihil! Necessitatibus ad molestias aliquam dolores autem et veniam?</p>
        <div class="col-12 anadiv no-pad">
            <div class="col-xs-12 col-md-6 col-xl-6 iletisimbox no-pad">
                <div class="col-xs-12 col-md-12 col-xl-12 iletisimbilgileri">
                    <div class="col-12 iletisimpad">
                        <div class="icon">
                            <i class="fa fa-map-marker-alt"></i>
                        </div>
                        <span>Adres</span>
                        <p>Çarşı Mah, Barış Meydanı No:30, 48400 <b>Bodrum/Muğla</b></p>
                    </div>
                    <div class="col-12 iletisimpad">
                        <div class="icon">
                            <i class="fa fa-phone-volume"></i>
                        </div>
                        <span>Telefon & Whatsapp</span>
                        <p><b>T:</b>0322 232 20 05<br> <b>W:</b> 0555 666 77 88</p>
                    </div>
                    <div class="col-12 iletisimpad">
                        <div class="icon iletisimpadicon">
                            <i class="fa fa-envelope-open-text"></i>
                        </div>
                        <span>E-Posta</span>
                        <p>info@bodrumferrylines.com <br>filo@bodrumferrylines.com</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-xl-6 iletisimbox no-pad">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3185.0760103306484!2d27.425567515577598!3d37.03183396232555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14be6d7cb685b601%3A0x8f786ab66b9ae62b!2sBodrum%20Kos%20Feribot!5e0!3m2!1str!2str!4v1655426355541!5m2!1str!2str"></iframe>
            </div>
        </div>
        <h2>İletişim Formu</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor mattis augue. Fusce at suscipit metus, blandit mattis dolor. Curabitur tincidunt est et cursus convallis. Praesent ut elit purus. Suspendisse rutrum massa sem, quis tempor turpis convallis sed. Sed fringilla porttitor libero, at tristique turpis pulvinar a. Donec et lorem laoreet, commodo lectus nec, porttitor est.</p>
        <form data-aos="fade-up" data-aos-duration="2000" id="ajax-insankaynaklari" method="POST" class="contact-form">
            <div class="col-xs-12 col-sm-6 col-md-6 inputs">
                <input type="text" class="form-control" name="adsoyad" placeholder="Adınız Soyadınız*" required>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 inputs">
                <input type="text" class="form-control" name="telefon" placeholder="Telefon*" id="cepTelefonu" >
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 inputs">
                <input type="text" class="form-control" name="eposta" placeholder="E-Posta Adresi*" required>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 inputs">
                <input type="text" class="form-control" name="konu" placeholder="Konu">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 inputs">
                <textarea class="form-control" name="mesaj" rows="5" id="mesaj" placeholder="Mesajınız*" required></textarea>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 inputs inputlabel">
                <input id="izin_kampanya" type="checkbox" name="kampanya" value="1">
                <label for="izin_kampanya>">Kampanyalardan haberdar olmak için <a class="elektronik-ileti" href="javascript:(void)0">elektronik ileti</a> almak istiyorum.</label>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 inputs inputlabel">
                <input id="izin_yasal" type="radio" name="izin" value="1" required>
                <label for="izin_yasal>">
                    <a href="kvkk.php" target="_blank">Bilgilendirme ve Aydınlatma Metni</a>'ni Okudum ve Kabul Ediyorum.
                </label>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 inputs">
                <input type="submit" id="btngonder" class="form-control" name="gonder" value="BAŞVURU YAP">
            </div>
            <div class="col-xs-12 col-md-12 inputs">
                <p class="recaptchaGoogle">This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy" rel="nofollow" target="_blank">Privacy Policy</a> and <a href="https://policies.google.com/terms" rel="nofollow" target="_blank">Terms of Service</a> apply.</p>
            </div>
        </form>
    </div>
</div>
<div class="modal sedpopup" id="elektronik-uyari-popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close Popupkapat" data-dismiss="modal" aria-label="Close">
            <img src="images/cancel-black.png" alt="">
        </button>
        <p><b>Ticari İletişim İzni hakkında bilgilendirme</b></p>
        <p>Bu izin ile birlikte, bizimle paylaşmış olduğunuz kişisel bilgilerinizin; tarafınıza çeşitli hizmet ve ürün grupları hakkında bilgi verebilmek ve bunlara ilişin olarak çeşitli avantajların sağlanıp sunulabilmesi ve size özel tanıtım, promosyon, reklam, satış, pazarlama, anket ve benzeri amaçlı her türlü elektronik iletişimin kısa mesaj (SMS), görüntülü ve sesli mesaj (MMS), elektronik posta, mektup, telefon, çağrı merkezi, otomatik arama ile whatsapp ve benzeri internet uygulamaları üzerinden elektronik iletişim aracı ile sağlanması amacıyla saklanmasına, kullanılmasına ve aynı amaçlara yönelik hizmet sağlayıcılarımızla paylaşılmasına izin vermiş bulunmaktasınız. Bu bilgiler sadece size sağlanacak hizmetlerin kusursuz sunulabilmesi, olası gönderilerinizin sağlıklı şekilde teslim edilmesi, telefon, sms ve/veya e-posta yoluyla bildirimlerimizin zamanında ulaştırılabilmesi amacıyla, sözleşme ilişkisi içinde olduğumuz, veri güvenliği konusundaki hassasiyetimizi paylaşan, ilgili mevzuat hükümlerine riayet eden 3. kişilerle, yalnızca ihtiyaç durumunda ve gerekli ölçüde paylaşılacaktır.</p>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
<script>
    $('.elektronik-ileti').click(function () {
        $("#elektronik-uyari-popup").toggle();
    });
    $('.Popupkapat').click(function () {
        $("#elektronik-uyari-popup").hide();
    });
</script>
</body>
</html>