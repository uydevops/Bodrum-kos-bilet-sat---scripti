<!DOCTYPE html>
<html lang="tr">
<?php include 'head.php';?>
<body>
<?php include 'header.php'; ?>
<div class="container-fluid content-header">
    <div class="container ">
         <div class="sayfalama">
            <a title="Anasayfa" href="index.php">Anasayfa<i class="fa fa-angle-right"></i></a>
            <span>BİLET FİYATLARI</span>
        </div>
    </div>
</div>
<div class="container-fluid ortaalan anadiv iletisimformu">
    <div class="container">
        <h1>Bilet Fiyatları</h1>
        <div class="col-12 anadiv no-pad">
            <div class="line"></div>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste inventore nam sequi ex repudiandae ea cumque nesciunt doloremque rem nisi fugiat velit facilis quia assumenda provident quam soluta saepe repellendus vitae obcaecati, corporis consectetur eaque. Tempora, nemo eum libero laboriosam minus consequatur ad quasi sint quo iste consequuntur ipsam excepturi deleniti officia qui repellat <b>bodrum & kos bilet fiyatlarını</b> aşağıdan görebilirsiniz.</p>
        <div class="col-xs-12 anadiv margin-t-10">
            <h2>Fahri Kaptan 5 Bilet Fiyatları</h2>
            <div class="table-responsive">
                <table>
                    <tbody>
                        <tr>
                          
                            <th>
                                <p>Yetişkin</p>
                            </th>
                            <th>
                                <p>Çocuk (3-6)</p>
                            </th>
                            <th>
                                <p>Bebek (0-2)</p>
                            </th>
                            <th>
                                <p>Online Bilet</p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <p>01.<b>05</b>.2022 & 01.<b>06</b>.2022</p>
                            </td>
                            <td>
                                <p>33 EUR</p>
                            </td>
                            <td>
                                <p>17 EUR</p>
                            </td>
                            <td>
                                <p>5 EUR</p>
                            </td>
                            <td>
                                <p><a href="">Bileti Satın Al</a></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
              <?php


                $bilet = $db->prepare("SELECT * FROM bilet_fiyatlari");
                $bilet->execute();

                $bilets = $bilet->fetchALL(PDO::FETCH_ASSOC);
                foreach ($bilets as $row) {

                ?>
                    <h2><?php echo $row["tekne_adi"]; ?></h2>
                    <div class="table-responsive">
                        <table>
                            <tbody>
                                <tr>
                                    
                                    <th>
                                        <p>Yetişkin</p>
                                    </th>
                                    <th>
                                        <p>Çocuk (6-12)</p>
                                    </th>
                                    <th>
                                        <p>Bebek (0-5)</p>
                                    </th>
                                    <th>
                                        <p>Online Bilet</p>
                                    </th>
                                </tr>
                                <tr>

                                    <td>
                                        <?php echo $row["yetiskin"];
                                        ?> €
                                    </td>
                                    <td>
                                        <?php echo $row["cocuk"];
                                        ?>€
                                    </td>
                                    <td>
                                        <?php echo $row["bebek"];

                                        ?>
                                        €
                                    </td>
                                    <td>
                                        <p><a href="">Bileti Satın Al</a></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>