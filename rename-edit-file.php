<?php


$old=$_REQUEST["old"];
$new=$_REQUEST["new_name"];


if(rename("allcv/".$old,$new)){

    echo 1;
}





?>