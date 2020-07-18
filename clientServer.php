<?php
header("Access-Control-Allow-Origin: *");

$site=isset($_POST['url']);
$decision=exec("python finalCode.py $site 3>&1 ");
echo $decision;
?>
