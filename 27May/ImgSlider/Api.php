<?php
    $url = "https://picsum.photos/v2/list?page=3&limit=10";

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);

    $response = curl_exec($ch);

    if ($response === false) {
        echo 'cURL Error: ' . curl_error($ch);
    } 

    $data = json_decode($response, true);
    

    curl_close($ch);
?>