<P>List of files:</p>
<UL>
  
<?php
$thelist = '';

if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle)))
    {
        if ($file != "." && $file != ".." && strtolower(substr($file, strrpos($file, '.') + 1)) == 'txt')
        {
            $thelist .= '<li><a href="'.$file.'">'.$file.'</a></li>';

            ?>

<li><a href="link.php?txt=<?=$file?>"><?=$file?></a></li>

            <?php
        }
    }
    closedir($handle);
}

?>

</UL>