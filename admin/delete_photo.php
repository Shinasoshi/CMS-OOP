
<?php require_once("includes/header.php"); ?>

<?php

if (empty($_GET['id'])) {
    redirect("photos.php");
}else{
    $photo = Photo::find_by_id($_GET['id']);
    $photo->delete_photo();

    redirect("photos.php");
}





?>