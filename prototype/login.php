<!DOCTYPE html>
<html lang="fr" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">    
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">
    
    <title>Document</title>
</head>
<body class="d-flex flex-column h-100">

    <!-- header -->
    <?php 
        $page = 'login';
        include("header.php"); 
    ?>
    
    <!-- corp de la page -->
    <main class="my-auto">
        <section>
            <div class="container">
                <div class="row justify-content-center h-100 my-5">
                    <div class="card">
                        <div class="card-header">
                            <h3>Se connecter</h3>
                            <div class="d-flex justify-content-end social_icon">
                                <span><i class="fa fa-facebook-square"></i></span>
                                <span><i class="fa fa-google-plus-square"></i></span>
                                <span><i class="fa fa-twitter-square"></i></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="todolist.php">
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="pseudo" required>
                                </div>
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-key"></i></span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="mot de passe" required>
                                </div>
                                <div class="row align-items-center remember">
                                    <input type="checkbox">Se souvenir de moi
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Login" class="btn float-right login_btn" href="todolist.php">
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-center links">
                                Vous avez pas de compte ?<a href="#">Inscription</a>
                            </div>
                            <div class="d-flex justify-content-center">
    <!-- footer -->
    <?php include("footer.php"); ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.2/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
