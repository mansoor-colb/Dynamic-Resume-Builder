<?php
require 'assets/function.php';
$file = "allcv/".$_REQUEST['file'];
deleteCv($_REQUEST['file']);//dlting in data base . function is in assets/function.php 
unlink($file);//deleting from file managr
header('location:savedCv.php');
 ?>