<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
  <a href="index.php">BACK TO INDEX</a><br><br>


<?php
$txtfile = $_GET['txt'];
// $filename = 'konkon.txt';
$lines = file($txtfile, FILE_IGNORE_NEW_LINES);
// print_r($lines);

foreach($lines as $line) {
  ?>
  <a href="https://google.com/search?q=<?= $line ?>&tbm=isch" target="_blank"><?=$line?></a><br>
  <?php
}

?>

</body>
</html>