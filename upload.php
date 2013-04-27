<?php
foreach ($_FILES["images"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $name = $_FILES["images"]["name"][$key];
        move_uploaded_file( $_FILES["images"]["tmp_name"][$key], "imgs/bespoke/monograms/EMBLEM/" . $name);
    }
}

//.Math.random()

echo  $name;
?>
