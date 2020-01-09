<?php require('partials/head.php'); ?>
<form action="/login" method="post" class="form-signin">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <button name="action" value="login" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
</form>
<?php require('partials/footer.php'); ?>