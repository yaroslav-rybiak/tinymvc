<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
                <a class="navbar-brand" href="/">TinyMVC</a>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="centered-text">
                <?= (!empty($result)) ? '<div class="alert alert-danger" role="alert">' . $result . '</div>' : "" ?>
            </div>
            <form name="loginForm" method="POST" action="index.php">

                <div class="form-group">

                    <label for="email">E-mail</label>
                    <input type="text" class="form-control" placeholder="Enter your email" id="email"
                           name="email">
                </div>
                <div class="form-group">

                    <label for="password1">Choose password</label>
                    <input type="password" class="form-control" placeholder="Enter your password" id="password1"
                           name="password1">
                </div>
                <div class="form-group">

                    <label for="password2">Repeat password</label>
                    <input type="password" class="form-control" placeholder="Repeat your password" id="password2"
                           name="password2">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default pull-left" id="submitLogin"
                            name="submitLogin">Sign up
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <p class="text-muted">Yaroslav Rybyak <?= date('Y') ?></p>
    </div>
</footer>
</body>
</html>