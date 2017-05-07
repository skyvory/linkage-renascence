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
  <!--<meta charset="text/html;shift_jis">-->
  <meta charset="UTF-8">
  <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
		<meta content="utf-8" http-equiv="encoding">
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
sort($lines, SORT_REGULAR);

 $already1 = file("hgama pack 7b.txt", FILE_IGNORE_NEW_LINES);
 $already2 = file("pack8b.txt", FILE_IGNORE_NEW_LINES);
foreach($lines as $line) {
 // $line = mb_convert_encoding($line, "SJIS");
 $url = mb_rawurlencode($line);
 //$link = '<a href="https://google.com/search?q=' . $url . '&tbm=isch" target="_blank">' . $url . '</a><br>';

  ?>
    <a href="https://google.com/search?q=<?= $url ?>&tbm=isch">

    <?php if(in_array($line,$already1) || in_array($line, $already2)) { ?>
    <p style="margin:0 0;display:block;background-color:pink;">
    <?php } else { ?>
    <p style="margin:0 0;display:block;">
    <?php } ?>
      <?=$line?>
    </p>
    </a>
    <?php
}

?>

</body>

<style>
  p:hover {
    background-color: aquamarine;
  }
  a:visited {
    color: red;
  }
</style>

</html>