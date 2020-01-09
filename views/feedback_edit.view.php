<?php require('partials/head.php'); ?>

<form method="post" action="/feedback/edit?id=<?php echo $feedback->id ?>">
    <input type="text" name="subject" placeholder="Add Subject" class="form-control" value="<?php echo $feedback->subject ?>">
    <textarea name="body" class="form-control"><?php echo $feedback->body ?></textarea>
    <button class="btn btn-success" name="action" value="send">Save</button>
</form>

<?php require('partials/footer.php'); ?>