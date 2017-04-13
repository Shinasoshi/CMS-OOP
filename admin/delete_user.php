
<?php require_once("includes/header.php"); ?>

<?php

if (empty($_GET['id'])) {
    redirect("users.php");
}else{
    $user = User::find_by_id($_GET['id']);
    $session->message("The {$user->username} user has been deleted.");
    $user->delete();

    redirect("users.php");
}





?>