<?php
include("connections.php");
$query = @unserialize (file_get_contents('http://ip-api.com/php/'));
if ($query && $query['status'] == 'success') {
//echo 'Hey user from ' . $query['country'] . ', ' . $query['city'] . '!';
}
foreach ($query as $data) {
    //echo $data . "<br>";
}
//echo $query['lat'];
//echo $query['lon'];
//echo $query['country'];

$latitude = $query['lat'];
$longitude = $query['lon'];
$country = $query['country'];

$query= "INSERT INTO cordinates (longitude,latitude,country) VALUES ('$longitude','$latitude','$country')";
 mysqli_query($conn, $query);
?>