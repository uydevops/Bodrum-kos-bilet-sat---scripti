<!DOCTYPE html>
<html lang="tr">
<?php include 'head.php';?>
<body>
<?php include 'header.php'; ?>
<div class="container-fluid content-header">
    <div class="container ">
         <div class="sayfalama">
            <a title="Anasayfa" href="index.php">Anasayfa<i class="fa fa-angle-right"></i></a>
            <a title="Kurumsal" href="javascript:(void)0">Kurumsal<i class="fa fa-angle-right"></i></a>
            <span>SIKÇA SORULAN SORULAR</span>
        </div>
    </div>
    <br>

</div>



<div id="top" class="container">

<div class="accordion accordion-flush" id="accordionFlushExample">

<div class="ic">

<?php 

$cek=$db->prepare("SELECT * FROM sss");

$cek->execute();
$sss=$cek->fetchALL(PDO::FETCH_ASSOC);

foreach($sss as $row)
{
?>

<button class="accordion"><?php echo $row["soru_baslik"];?></button>
<div class="panel">
<?php echo $row["soru_cevap"];?>
</div>
<?php } ?>

  
       </div>
       </div>
       </div>
<?php include 'footer.php'; ?>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
<style>
.ic
{
    margin:30px;
}
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
 
}

#top{
    margin-top:50px !important;
}

.active, .accordion:hover {
  background-color: #ccc; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
</style>
</body>
</html>