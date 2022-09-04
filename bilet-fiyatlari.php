<!DOCTYPE html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

<html lang="tr">
<?php include 'head.php'; ?>

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
            <center>
                <div class="title"><i class="fas fa-ship"></i> FERİBOT BİLET SATIŞ FİYATLARI</div>
            </center>

         
            <div class="col-xs-12 anadiv margin-t-10">

                <?php
                $bilet = $db->prepare("SELECT * FROM bilet_fiyatlari");
                $bilet->execute();

                $bilets = $bilet->fetchALL(PDO::FETCH_ASSOC);
                foreach ($bilets as $row) {
                

                ?>
                <div class="table-responsive">
                    <table>
                        <tbody>
                            <tr>
                                <th>
                                    <p><?php echo $row["tekne_adi"]; ?></p>
                                </th>

                                <th>
                                    <p>Birim</p>
                                </th>
                                <th>
                                    <p>Tek Yön</p>
                                </th>
                                <th>
                                    <p>Günübirlik</p>
                                </th>
                                <th>
                                    <p>Gidiş - Dönüş</p>
                                </th>
                            </tr>

                            <tr>
                                <td>
                                    <p><i class="fas fa-baby"></i> BEBEK (0 - 2)</p>
                                </td>
                                <td>
                                    <p>EURO</p>
                                </td>
                                <td>
                                    <p><?php echo $row["bebek1"]; ?></p>
                                </td>
                                <td>
                                <p><?php echo $row["bebek2"]; ?></p>
                                </td>
                                <td>
                                <p><?php echo $row["bebek3"]; ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><i class="fas fa-child"></i> ÇOCUK (3- 6)</p>
                                </td>
                                <td>
                                    <p>EURO</p>
                                </td>
                                <td>
                                <p><?php echo $row["cocuk1"]; ?></p>
                                </td>
                                <td>
                                <p><?php echo $row["cocuk2"]; ?></p>
                                </td>
                                <td>
                                <p><?php echo $row["cocuk3"]; ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><i class="fas fa-male"></i> YETİŞKİN</p>
                                </td>
                                <td>
                                    <p>EURO</p>
                                </td>
                                <td>
                                <p><?php echo $row["yetiskin1"]; ?></p>
                                </td>
                                <td>
                                <p><?php echo $row["yetiskin2"]; ?></p>
                                </td>
                                <td>
                                <p><?php echo $row["yetiskin3"]; ?></p>
                                </td>
                            </tr>
<?php } ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <style>
                .title {
                    font-size: 20px;
                    font-weight: bold;
                    color: white;
                    margin-bottom: 20px;
                    background-color: #003459;
                    padding: 20px;
                    text-align: center;
                    max-width: 500px;


                }
            </style>
    <?php include 'footer.php'; ?>