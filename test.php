<?php
$data=array();
$data["name"]="abc";
$data["age"]=25;

$friend=array();
$friend["name"]="abcd";
$friend["age"]=250;
$data["friend"]=$friend;
echo json_encode($data);
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

?>