<?php include 'conn/db.php';
  
  session_start();

  if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    if (empty($_POST["email"]) && empty($_POST["pass"])) {
      echo "Boş Bırakmayınız"; // SwallAlert Basacam.
    } else {
      $sorgu = "SELECT *FROM user WHERE email=:email AND pass=:pass";
      $statment = $db->prepare($sorgu);
      $statment->execute(
        array(
          'email' => $_POST["email"],
          'pass' => $_POST["pass"]
        )
      );
      $say = $statment->rowCount();
      if ($say > 0) {
        $_SESSION["email"] = $_POST["email"];
        header("location:admin/index.php");
      } else { ?>
        <script>
          swal({
            title: "Giriş Başarısız!",
            text: "Parola ve Emailinizi Kontrol Edin!",
            icon: "warning",

          });
        </script>
  <?php
      }
    }
  }

  ?>


<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <title>Bodrum Kos Ferry Lınes</title>
</head>

<body>



  <body id="particles-js"></body>
  <div class="animated bounceInDown">
    <div class="container">
      <span class="error animated tada" id="msg"></span>
      <form name="form1" method="post" class="box" onsubmit="return checkStuff()">
        <h4>Bodrum Kos Ferry Lınes <span></span></h4>
        <h5>Panel</h5>
        <input type="text" name="email" placeholder="E-mail Adresi" autocomplete="off">
        <i class="typcn typcn-eye" id="eye"></i>
        <input type="password" name="pass" placeholder="pass" id="pwd" autocomplete="off">
        <label>


          <input type="submit" value="Log in" name="login" class="btn1">


    </div>

</body>

</html>
<style>
  @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400');

  body,
  html {
    font-family: 'Source Sans Pro', sans-serif;
    background-color: #1d243d;
    padding: 0;
    margin: 0;
  }

  #particles-js {
    position: absolute;
    width: 100%;
    height: 100%;
  }

  .container {
    margin: 0;
    top: 50px;
    left: 50%;
    position: absolute;
    text-align: center;
    transform: translateX(-50%);
    background-color: rgb(33, 41, 66);
    border-radius: 9px;
    border-top: 10px solid #79a6fe;
    border-bottom: 10px solid #8BD17C;
    width: 400px;
    height: 500px;
    box-shadow: 1px 1px 108.8px 19.2px rgb(25, 31, 53);
  }

  .box h4 {
    font-family: 'Source Sans Pro', sans-serif;
    color: #5c6bc0;
    font-size: 18px;
    margin-top: 94px;
    ;
  }

  .box h4 span {
    color: #dfdeee;
    font-weight: lighter;
  }

  .box h5 {
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 13px;
    color: #a1a4ad;
    letter-spacing: 1.5px;
    margin-top: -15px;
    margin-bottom: 70px;
  }

  .box input[type="text"],
  .box input[type="password"] {
    display: block;
    margin: 20px auto;
    background: #262e49;
    border: 0;
    border-radius: 5px;
    padding: 14px 10px;
    width: 320px;
    outline: none;
    color: #d6d6d6;
    -webkit-transition: all .2s ease-out;
    -moz-transition: all .2s ease-out;
    -ms-transition: all .2s ease-out;
    -o-transition: all .2s ease-out;
    transition: all .2s ease-out;

  }

  ::-webkit-input-placeholder {
    color: #565f79;
  }

  .box input[type="text"]:focus,
  .box input[type="password"]:focus {
    border: 1px solid #79A6FE;

  }

  a {
    color: #5c7fda;
    text-decoration: none;
  }

  a:hover {
    text-decoration: underline;
  }

  label input[type="checkbox"] {
    display: none;
    /* hide the default checkbox */
  }

  /* style the artificial checkbox */
  label span {
    height: 13px;
    width: 13px;
    border: 2px solid #464d64;
    border-radius: 2px;
    display: inline-block;
    position: relative;
    cursor: pointer;
    float: left;
    left: 7.5%;
  }

  .btn1 {
    border: 0;
    background: #7f5feb;
    color: #dfdeee;
    border-radius: 100px;
    width: 340px;
    height: 49px;
    font-size: 16px;
    position: absolute;
    top: 79%;
    left: 8%;
    transition: 0.3s;
    cursor: pointer;
  }

  .btn1:hover {
    background: #5d33e6;
  }

  .rmb {
    position: absolute;
    margin-left: -24%;
    margin-top: 0px;
    color: #dfdeee;
    font-size: 13px;
  }

  .forgetpass {
    position: relative;
    float: right;
    right: 28px;
  }

  .dnthave {
    position: absolute;
    top: 92%;
    left: 24%;
  }

  [type=checkbox]:checked+span:before {
    /* <-- style its checked state */
    font-family: FontAwesome;
    font-size: 16px;
    content: "\f00c";
    position: absolute;
    top: -4px;
    color: #896cec;
    left: -1px;
    width: 13px;
  }

  .typcn {
    position: absolute;
    left: 339px;
    top: 282px;
    color: #3b476b;
    font-size: 22px;
    cursor: pointer;
  }

  .typcn.active {
    color: #7f60eb;
  }

  .error {
    background: #ff3333;
    text-align: center;
    width: 337px;
    height: 20px;
    padding: 2px;
    border: 0;
    border-radius: 5px;
    margin: 10px auto 10px;
    position: absolute;
    top: 31%;
    left: 7.2%;
    color: white;
    display: none;
  }

  .footer {
    position: relative;
    left: 0;
    bottom: 0;
    top: 605px;
    width: 100%;
    color: #78797d;
    font-size: 14px;
    text-align: center;
  }

  .footer .fa {
    color: #7f5feb;
    ;
  }
</style>