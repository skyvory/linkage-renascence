<?php
function mb_rawurlencode($url){
$encoded='';
$length=mb_strlen($url);
for($i=0;$i<$length;$i++){
$encoded.='%'.wordwrap(bin2hex(mb_substr($url,$i,1)),2,'%',true);
}
return $encoded;
}
?>

<html>
<head>
  <meta charset="UTF-8">
</head>

<body>
  <a href="index.php">BACK TO INDEX</a><br><br>

  <!--<a href="#" id="superurl"><button onclick="supercharge()">SUPERCHARGE</button></a><br><br><br><br>-->
  <script>
    function supercharge() {
      var el = document.getElementById('superurl');
      console.log(el.href);
    }
  </script>


  <?php
$txtfile = $_GET['txt'];
// $filename = 'konkon.txt';
$lines = file($txtfile, FILE_IGNORE_NEW_LINES);
// print_r($lines);

foreach($lines as $line) {
  ?>
    <a href="https://google.com/search?q=<?= $line ?>&tbm=isch" target="_blank" class="tabable" onclick="clack()">
      <?=$line?>
    </a><br>
    <?php
}

?>

</body>

</html>