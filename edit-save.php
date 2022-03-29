<?php
session_start();
$cvData = $_REQUEST['data'];
$cvData="<body><div class='cover '><div class=' ' id='get'>".$cvData."</div></div></body>";

$cvName = $_REQUEST['name'];

$cvStyle=$_REQUEST['style'];
$theme=$_POST["theme"];
$oldname=$_REQUEST["file_old"];
// $cvStyle="<head>".$cvStyle."</head>";
$theme=$_POST["theme"];
$cv = "<html><head id='styleback'>".$cvStyle."</head>".$cvData."</html>";
// $time4name = time();
// $fileName= $time4name."-".$_SESSION['userId'].".html";
$file  = "allcv/".$oldname;
$handle = fopen($file, 'w') or die('Cannot open file:  '.$file);
fwrite($handle, $cv);
fclose($handle);
date_default_timezone_set("asia/kolkata");

// $new_time=date('y':'m'-'j'-'G'-'i'-'s');
$new_time=date("y-m-j G-i-s");

$conn = new mysqli('localhost','root','','cv');
if ($cvName == "") {$cvName = "No Name";}
// $conn->query("insert into allCv (cvName,cvFileName,userId,theme)values('$cvName','$fileName','$_SESSION[userId]','$theme')");
$succes=$conn->query("UPDATE allcv SET cvName='{$cvName}',cvFileName='{$oldname}',userId='{$_SESSION["userId"]}',theme='{$theme}',date='{$new_time}' WHERE cvFileName='{$oldname}'");
// echo $filename;
if($succes){
    echo $oldname;
}
 ?>