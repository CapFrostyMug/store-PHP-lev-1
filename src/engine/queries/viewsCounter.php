<?php

include_once "../../../config/connect.php";

function viewsCounter($imageId)
{

    global $link;
    $counter = 0;

    $getCurrentCountViews = "SELECT views FROM images WHERE id = '$imageId'";
    $result = mysqli_query($link, $getCurrentCountViews) or die($link);

    foreach (mysqli_fetch_assoc($result) as $number) {
        $counter = $number[0];
        $counter += 1;
    }

    $updateCountViews = "UPDATE images SET views = '$counter' WHERE id = '$imageId'";
    $result = mysqli_query($link, $updateCountViews) or die($link);

    $result = mysqli_query($link, $getCurrentCountViews) or die($link);

    foreach (mysqli_fetch_assoc($result) as $number) {
        return $number[0];
    }

}
