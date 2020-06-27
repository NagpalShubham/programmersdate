<?php 
include("connections.php");
//include("map.php");
?>
<?php

$query2 ="SELECT count(id) AS total FROM hospital";
$result = mysqli_query($conn,$query2);
$value = mysqli_fetch_assoc($result);
$num_row = $value['total'];
//echo "$num_row"; 
//echo "<br>";


$query ="SELECT * FROM cordinates";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
$lon1 = $result['longitude'];
$lat1 = $result['latitude'];





$query2 ="SELECT * FROM hospital";
$data = mysqli_query($conn,$query2);
$result = mysqli_fetch_assoc($data);





$lon2 =  $result['hosp_longitude'];
$lat2 = $result['hosp_lat'];






$point = ($lat2-$lat1)*($lat2-$lat1) + ($lon2-$lon1)*($lon2-$lon1);
$point1 = sqrt($point);
//echo "$point1 <br>";


$query2 ="SELECT * FROM hospital";
$data = mysqli_query($conn,$query2);
while($row = mysqli_fetch_array($data))
{
  $lat1 = $row['hosp_lat'];
  $lon2 = $row['hosp_longitude'];
  $beds =  $row['description']; 
$point = ($lat2-$lat1)*($lat2-$lat1) + ($lon2-$lon1)*($lon2-$lon1);
$point1 = sqrt($point);
//echo $point1 ;
//echo "km";
//echo "<br>";
$total_distance[]= $point1;
$total_beds[] = $beds;
}
 


?>