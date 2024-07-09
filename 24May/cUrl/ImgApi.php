<?php
$url = "https://picsum.photos/v2/list";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);

curl_close($ch);

$data = json_decode($result, true);
// echo "<pre>";
// print_r($data);
?>
