<?php

$ingredient = !empty($_GET['ingredient']) ? $_GET['ingredient'] : 'Tomato';


$url = 'https://www.themealdb.com/api/json/v1/1/filter.php?';
$url .= http_build_query(
    [
        'i' => $ingredient
    ]
);
// $url2 = 'https://www.themealdb.com/api/json/v1/1/search.php?'
// $url2 .= http_build_query(
//     [
//         's' => $name
//     ]
// )

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
$result = curl_exec($curl);
curl_close($curl);

$result = json_decode($result);
echo '<pre>';
print_r($url);
echo '</pre>';

?>