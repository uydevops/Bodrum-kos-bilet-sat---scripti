<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="tr">
<?php include 'head.php'; ?>

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
            <p>Aşağıda bulunan Telefon & Whatsapp, e-mail ve adres bölümlerinden bizimle iletişime geçebilirsiniz.</p>
            <div class="col-12 anadiv no-pad">
                <div class="col-xs-12 col-md-6 col-xl-6 iletisimbox no-pad">
                    <div class="col-xs-12 col-md-12 col-xl-12 iletisimbilgileri">
                        <div class="col-12 iletisimpad">
                            <div class="icon">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <span>Adres</span>
                            <p><?php echo $sites["adres"]; ?></p>
                        </div>
                        <div class="col-12 iletisimpad">
                            <div class="icon">
                                <i class="fa fa-phone-volume"></i>
                            </div>
                            <span>Telefon & Whatsapp</span>
                            <p><b>T:</b><?php echo $sites["tel"]; ?><br> <b>W:</b> <?php echo $sites["wp"]; ?></p>
                        </div>
                        <div class="col-12 iletisimpad">
                            <div class="icon iletisimpadicon">
                                <i class="fa fa-envelope-open-text"></i>
                            </div>
                            <span>E-Posta</span>
                            <p><?php echo $sites["mail"]; ?><br>filo@bodrumferrylines.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-xl-6 iletisimbox no-pad">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3185.0760103306484!2d27.425567515577598!3d37.03183396232555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14be6d7cb685b601%3A0x8f786ab66b9ae62b!2sBodrum%20Kos%20Feribot!5e0!3m2!1str!2str!4v1655426355541!5m2!1str!2str"></iframe>
                </div>
            </div>
            <h2>İletişim Formu</h2>
            <p>Aşağıdaki formu doldurup, bizimle iletişime geçebilirsiniz.</p>
            <form data-aos="fade-up" data-aos-duration="2000" id="ajax-insankaynaklari" method="POST" class="contact-form">
                <div class="col-xs-12 col-sm-6 col-md-6 inputs">
                    <input type="text" class="form-control" name="adsoyad" placeholder="Adınız Soyadınız*" required>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 inputs">
                    <input type="text" class="form-control" name="telefon" placeholder="Telefon*" id="cepTelefonu">
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
        $('.elektronik-ileti').click(function() {
            $("#elektronik-uyari-popup").toggle();
        });
        $('.Popupkapat').click(function() {
            $("#elektronik-uyari-popup").hide();
        });
    </script>
</body>

</html>

<?php
if (isset($_POST["gonder"])) {
    function url_get_contents($Url)
    {
        if (!function_exists('curl_init')) {
            die('CURL is not installed!');
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $Url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }
    $response = $_POST["g-recaptcha-response"];
    $secret = "6Lc4AE8cAAAAAE7ZNLMI3ZCSLVMjNgLP4uzXHQqp";
    $remoteip = $_SERVER["REMOTE_ADDR"];
    $captcha = url_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip");
    $result = json_decode($captcha);
    $result = 1;
    //if($result->success==1){
    if ($result == 1) {
        $adsoyad = $_POST["adsoyad"];
        $eposta = $_POST["eposta"];
        $telefon = $_POST["telefon"];
        $konu = $_POST["konu"];
        $mesaj = $_POST["mesaj"];
        if (empty($adsoyad) || empty($eposta) || empty($mesaj) || empty($telefon)) {
            echo "<script> alert('Bilgileri Kontrol Edip Tekrar Deneyiniz...'); </script>";
        } else {
            require "formlar/mail/class.phpmailer.php";
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->SMTPDebug = 1;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            $mail->Host = 'smtp.yandex.com.tr';
            $mail->Port = 587;
            $mail->Username = 'mail@sahnemedya.com';
            $mail->Password = 'DKC-CEMAL-NILGUN-7563';
            $mail->SetFrom($mail->Username, 'Bodrum Kos Ferry Lınes | İletişim Formu');
            // $mail->AddAddress('info@mehtaperciyes.com.tr');
            $mail->AddAddress('info@bodrumkosferrylines.com');

            $mail->CharSet = 'UTF-8';
            $mail->Subject = 'İletişim Formu - Bodrum Kos Ferry Lınes';
            $content = '
                <table style="font-family:Arial,Helvetica,sans-serif;background:#EEE;border:1px solid #CCC;" width="440" border="0" align="center" cellpadding="3" cellspacing="0">
                <tbody><tr>
                <td style="background:#575757;color:#FFF;padding:10px;"><h1 style="color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12pt;margin:0;">Bodrum Kos Ferry Lınes | İletişim Formu</h1></td>
                </tr>
                <tr>
                <td>
                <table style="border:1px solid #ccc;border-collapse:collapse;" width="100%" border="1" cellspacing="3" cellpadding="5">
                <tbody>
                <tr>
                <td style="font-family:Arial,Helvetica,sans-serif;font-size:10pt;width:100px;font-weight:bold;color:#4E4E4E;" align="right">Ad Soyad:</td>
                <td style="font-size:10pt;background-color:#fff;">' . $adsoyad . '</td>
                </tr>
                <tr>
                <td style="font-family:Arial,Helvetica,sans-serif;font-size:10pt;width:100px;font-weight:bold;color:#4E4E4E;" align="right">E-Posta:</td>
                <td style="font-size:10pt;background-color:#fff;"><a href="mailto:' . $eposta . '" >' . $eposta . '</a> </td>
                </tr>
                <tr>
                <td style="font-family:Arial,Helvetica,sans-serif;font-size:10pt;width:100px;font-weight:bold;color:#4E4E4E;" align="right">Telefon:</td>
                <td style="font-size:10pt;background-color:#fff;"><span class="wmi-callto">' . $telefon . '</span> </td>
                </tr>
                <tr>
                <td style="font-family:Arial,Helvetica,sans-serif;font-size:10pt;width:100px;font-weight:bold;color:#4E4E4E;" align="right">Konu:</td>
                <td style="font-size:10pt;background-color:#fff;">' . $konu . '</td>
                </tr>
                <tr>
                <td style="font-family:Arial,Helvetica,sans-serif;font-size:10pt;width:100px;font-weight:bold;color:#4E4E4E;" align="right">Mesaj:</td>
                <td style="font-size:10pt;background-color:#fff;">' . $mesaj . '</td>
                </tr>
                <tr>
                <td colspan="2" style="font-family:Arial,Helvetica,sans-serif;font-size:10pt;font-weight:bold;color:#f00;">UYARI:Lütfen bu maili yanıtlamayınız. Formu gönderen kişiye mail atmak için Eposta bölümünde yazan mail adresine mail gönderiniz</td>
                </tr>
                </tbody>
                </table>
                </td>
                </tr>
                <tr>
                <td></td>
                </tr>
                </tbody>
                </table>
                ';
            $mail->MsgHTML($content);
            if ($mail->Send()) {
                echo "<script>alert('Mesajınız Başarı ile Gönderilmiştir.')</script>";
            } else {
                echo "<script>alert(" . $mail->ErrorInfo . ")</script>";
            }
        }
    } else {
        echo "<script>alert('Doğrulama Kodunu İşaretleyin Lütfen.')</script>";
    }
}
?>