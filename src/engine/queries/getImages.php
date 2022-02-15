<?php

include_once "../config/connect.php";

function getImagesData()
{

    global $link;

    $query = "SELECT * FROM images";
    $result = mysqli_query($link, $query) or die($link);

    $imagesArr = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $imagesArr[] = $row;
    }

    return $imagesArr;

}

getImagesData();
