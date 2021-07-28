<?php
// get will show the info in the url
// $a=$_GET["firstname"];
// $b=$_GET["lastname"];

// post will not show the info in the url

// $a=$_POST["firstname"];
// $b=$_POST["lastname"];

// request will handel both get and post and it aslo not the the info in the url

$a=$_REQUEST["firstname"];
$b=$_REQUEST["lastname"];
$c=$_REQUEST["password"];
echo "hello".$a ." ".$b.". Your passworld is :".$c;
?>