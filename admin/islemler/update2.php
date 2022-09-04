<?php include "db.php"; ?>


<?php



if(isset($_GET["slid_id"]))
{
    $slid_id=$_GET["slid_id"];
    $slid_metin=$_POST["slider_metin"];
    
    $slider_text_update=$db->prepare("UPDATE slider SET metin=? WHERE id=?");
    $slider_text_update->execute(array($slid_metin,$slid_id));
     if($slid_id>=1)
     {
echo'<meta http-equiv="refresh" content="0;URL=../slider.php">';
     }
    
}


?>