<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Shareboard</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Fixed navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">

        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Shares</a>
            </li>
        </ul>
        <?php if (isset($_SESSION['is_logged_in'])): ?>
            <ul class="navbar-nav mt-2 mt-md-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo ROOT_URL; ?>">Welcome <?php echo $_SESSION['user_data']['name']?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo ROOT_URL; ?>users/logout">Logout</a>
                </li>
            </ul>
        <?php else: ?>
        <ul class="navbar-nav mt-2 mt-md-0">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Register</a>
            </li>
        </ul>
        <?php endif;?>
    </div>
</nav>
   <div class="container">
       <div class="row">
           <?php require($view) ?>
       </div>
   </div>
</body>
</html>