<?php require('partials/head.php'); ?>

<?php $message = filter_input(INPUT_GET, 'message', FILTER_SANITIZE_STRING); ?>
<?php echo empty($message) ? "" : '<div class="alert alert-info">' . $message . '</div>'; ?>

<table class="table">

    <?php if (!empty($feedbacks)) : ?>

        <tr>
            <th>Name</th>
            <th>Date</th>
            <th>Edited</th>
            <th>Delete</th>
        </tr>

        <?php foreach ($feedbacks as $feedback) : ?>
            <tr>
                <td><?php echo $feedback->subject; ?></td>
                <td><?php echo $feedback->added; ?></td>
                <td><a href="/feedback/edit/?id=<?php echo $feedback->id; ?>">Edited</a></td>
                <td><a href="/feedback/delete/?id=<?php echo $feedback->id; ?>">Delete</a></td>
            </tr>
        <?php endforeach ?>

    <?php endif; ?>

</table>

<h1>Submit Feedback</h1>

<form method="post" action="/feedback">
    <input type="text" name="subject" placeholder="Add Subject" class="form-control">
    <textarea name="body" class="form-control"></textarea>
    <button class="btn btn-success" name="action" value="send">Send</button>
</form>

<?php require('partials/footer.php'); ?>
