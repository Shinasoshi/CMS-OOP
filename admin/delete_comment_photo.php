
<?php require_once("includes/header.php"); ?>

<?php

if (empty($_GET['id'])) {
    redirect("comment_photo.php?id={$comment->photo_id}");
}else{
    $comment = Comment::find_by_id($_GET['id']);
    $comment->delete();

    redirect("comment_photo.php?id={$comment->photo_id}");
}





?>