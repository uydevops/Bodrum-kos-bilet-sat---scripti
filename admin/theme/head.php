<?php

error_reporting(0);
include '../conn/db.php';
include 'function.php';
session_start();

if ($_SESSION["email"]) {
    $email = $_SESSION["email"];
    $oturum = $db->prepare("SELECT * FROM user WHERE email=?");
    $oturum->execute(array($email));
    $oturum_ac = $oturum->fetch(PDO::FETCH_ASSOC);
}
else
{
   header("location:../login.php");
}



?>

<?php

$api = json_decode(file_get_contents('https://api.genelpara.com/embed/para-birimleri.json'), true);

?>
<!DOCTYPE html>
<html lang="tr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

    <title><?php echo $site["site_adi"]; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.1/css/font-awesome.css" integrity="sha512-bf5lgyUrZOfPh94XyXFK4+2062lAMQFAfxUTVkOAHZ7R3XQ0tY+TUSkbqt8sjFsq0hVMKvGT/1P39c+vKwesTQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.1/css/font-awesome.min.css" integrity="sha512-H/zVLBHVS8ZRNSR8wrNZrGFpuHDyN6+p6uaADRefLS4yZYRxfF4049g1GhT+gDExFRB5Kf9jeGr8vueDsyBhhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="//cdn.gaic.com/cdn/ui-bootstrap/0.58.0/js/lib/ckeditor/ckeditor.js"></script>
    <script src="//cdn.gaic.com/cdn/ui-bootstrap/0.58.0/js/lib/jquery.min.js"></script>
    <script src="//cdn.gaic.com/cdn/ui-bootstrap/0.58.0/js/lib/angular.min.js"></script>
    <script src="//cdn.gaic.com/cdn/ui-bootstrap/0.58.0/js/gaig-ui-bootstrap.js"></script>

</head>