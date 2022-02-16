<?php

include_once "../../../config/connect.php";

$getReviews = "SELECT * FROM reviews";
$result = mysqli_query($link, $getReviews) or die($link);

for ($reviewsArr = []; $row = mysqli_fetch_assoc($result); $reviewsArr[] = $row) ;
