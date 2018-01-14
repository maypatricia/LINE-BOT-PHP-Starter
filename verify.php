<?php
$access_token = 'NQsFW+40cEdbzEEml2POkaZSxtP+ayedbCN1hirZGYX6U4eIPQvp+zKNHGcFcTD42pWU3JHwJAURi9Bkns3s8bOFyQ0uqbgqcB82QClbmmxTX1cQ1ubV39txbS5htzHce4N4uqxdSfO78gfYIFR0QgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
