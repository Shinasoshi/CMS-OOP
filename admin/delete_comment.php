
<?php require_once("includes/header.php"); ?>

<?php

if (empty($_GET['id'])) {
    redirect("comments.php");
}else{
    $comment = Comment::find_by_id($_GET['id']);
    $comment->delete();

    redirect("comments.php");
}





?>