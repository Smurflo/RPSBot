<?php
/**
 * Created by PhpStorm.
 */
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Base Template</title>

        <link rel="stylesheet" href="<?php echo $baseUrl . '/assets/css/bootstrap.min.css'; ?>">
        <link rel="stylesheet" href="<?php echo $baseUrl . '/assets/css/bootstrap-theme.min.css'; ?>">
    </head>
<body class="homepage">

    <div class="container">
        <div class="well signin-form">

            <?php if(!empty($flash['error'])): ?>
                <div class="alert alert-danger"><?php echo $flash['error']; ?></div>
            <?php endif; ?>
            <form action="<?php echo $baseUrl . '/login'; ?>" method="POST">
                <h3 class="form-group">Login</h3>
                <p>Enter anything, nothing actually gets checked</p>
                <label for="username" class="sr-only">Username</label>
                <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus><br>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required><br>

                <input type="submit" value="Login" class="btn btn-lg btn-primary btn-block">
            </form>
        </div> <!-- /container -->
    </div>

</body>
</html>
