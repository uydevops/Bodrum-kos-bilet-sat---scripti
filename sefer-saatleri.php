<!DOCTYPE html>
<html lang="tr">
<?php include 'head.php'; ?>

<body>
    <?php include 'header.php'; ?>
    <div class="container-fluid content-header">
        <div class="container ">
            <div class="sayfalama">
                <a title="Anasayfa" href="index.php">Anasayfa<i class="fa fa-angle-right"></i></a>
                <span>SEFER SAATLERİ</span>
            </div>
        </div>
    </div>
    <div class="container-fluid ortaalan anadiv iletisimformu">
        <div class="container">
            <h1>Sefer Saatleri</h1>
            <div class="col-12 anadiv no-pad">
                <div class="line"></div>
            </div>
            <div class="col-xs-12 anadiv margin-t-10">

                <h2>Bodrum & Kos Sefer Saatleri</h2>
                <div class="table-responsive">
                    <table>
                        <tbody>
                            <tr>

                                <th>
                                    <p>Kalkış Saati</p>
                                </th>
                                <th>
                                    <p>Dönüş Saati</p>
                                </th>
                                <th>
                                    <p>Tekne Adı</p>
                                </th>
                                <th>
                                    <p>Online Bilet</p>
                                </th>
                            </tr>

                            <?php


                            $bodrum_kos = $db->prepare("SELECT * FROM bilet_fiyatlari WHERE tur_adi='BODRUM-KOS (30 MINUTE)'");
                            $bodrum_kos->execute();
                            $bodrum_koss = $bodrum_kos->fetchALL(PDO::FETCH_ASSOC);

                            foreach ($bodrum_koss as $gidis) {

                            ?>
                                <tr>
                                  
                                    <td>
                                        <p><?php echo $gidis["kalkis_saat"]; ?></p>
                                    </td>
                                    <td>
                                        <p><?php echo $gidis["varis_saat"]; ?>
                                        </p>
                                    </td>
                                    <td>
                                        <p><?php echo $gidis["tekne_adi"]; ?></p>
                                    </td>
                                    <td>
                                        <p><a href="https://www.kosticket.com/Online/Satis/">Bileti Satın Al</a></p>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <h2 class="margin-t-30">Kos & Bodrum Sefer Saatleri</h2>
                <div class="table-responsive">
                    <table>
                        <tbody>
                            <tr>
                              
                                <th>
                                    <p>Kalkış Saati</p>
                                </th>
                                <th>
                                    <p>Dönüş Saati</p>
                                </th>
                                <th>
                                    <p>Tekne Adı</p>
                                </th>
                                <th>
                                    <p>Online Bilet</p>
                                </th>
                            </tr>
                            <?php


                            $kos = $db->prepare("SELECT * FROM bilet_fiyatlari WHERE tur_adi='Kos & Bodrum'");
                            $kos->execute();
                            $koss = $kos->fetchALL(PDO::FETCH_ASSOC);
                            foreach ($koss as $donus) {
                            ?>
                                <tr>
                                    
                                    <td>
                                        <p><?php echo $donus["kalkis_saat"]; ?></p>
                                    </td>
                                    <td>
                                        <p><?php echo $donus["varis_saat"]; ?></p>
                                    </td>
                                    <td>
                                        <p><?php echo $donus["tekne_adi"]; ?></p>
                                    </td>
                                    <td>
                                        <p><a href="https://www.kosticket.com/Online/Satis/">Bileti Satın Al</a></p>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>