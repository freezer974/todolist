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
    <title>Document</title>
</head>
<body class="d-flex flex-column h-100">
    <!-- tête de page -->
    <?php 
        $page = 'accueil'; 
        include 'header.php'; 
    ?>
    <!-- Main Section -->
    <main name="main" class="flex-shrink-0">
        
        <!-- Section Carrousel -->
        <section>
            <div class="container-fluid header h-100">
                <div class="row">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/andrew-neel-308138-unsplash.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/andrew-neel-308138-unsplash2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/andrew-neel-308138-unsplash3.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Section Bienvenue -->
        <section class="bg-blue">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 p-5 text-light">  
                        <h1 class="display-5 font-weight-normal text">Bienvenue sur Xodya</h1>
                        <p class="text-justify font-weight-normal">Xodya est un gestionnaire de tâche (todo-list) simple et accessible. Lorem ipsum dolor sit amet, consectetur ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a class="btn btn-outline-cyan" href="#">Découvrez son fonctionnement</a>
                    </div>
                    <div class="col-lg-6 text-light my-auto p-sm-5 p-lg-0">
                        <img src="img/office-620822_1920.jpg" class="img-fluid" alt="Responsive image">
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Section card -->
        <section class="">
            <div class="container">
                <div class="row p-5">
                    <div class="card-columns text-light">
                        <div class="card bg-brown ">
                            <div class="card-body">
                                <h5 class="card-title">Accessible</h5>
                                <p class="card-text">Xodya est un gestionnaire de tâche (todo-list) simple et accessible. Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                <p class="card-text"><small class="text-white-50">Last updated 3 mins ago</small></p>
                            </div>
                            <img src="img/office-620822_1920.jpg" class="card-img-bottom" alt="Responsive image">
                        </div>
                        <div class="card bg-brown ">
                            <div class="card-body">
                                <h5 class="card-title">Innovant</h5>
                                <p class="card-text">Xodya est un gestionnaire de tâche (todo-list) simple et accessible. Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                <p class="card-text"><small class="text-white-50">Last updated 3 mins ago</small></p>
                            </div>
                            <img src="img/office-620822_1920.jpg" class="card-img-bottom" alt="Responsive image">
                        </div>  
                        <div class="card bg-brown ">
                            <div class="card-body">
                                <h5 class="card-title">zoos</h5>
                                <p class="card-text">Xodya est un gestionnaire de tâche (todo-list) simple et accessible. Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                <p class="card-text"><small class="text-white-50">Last updated 3 mins ago</small></p>
                            </div>
                            <img src="img/office-620822_1920.jpg" class="card-img-bottom" alt="Responsive image">
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Section Qui sommes-nous -->
        <section class="bg-blue">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 p-5 text-light">  
                        <h1 class="display-5 font-weight-normal text">Qui sommes-nous ?</h1>
                        <p class="text-justify font-weight-normal">Xodya est un gestionnaire de tâche (todo-list) simple et accessible. Lorem ipsum dolor sit amet, consectetur ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a class="btn btn-outline-cyan" href="#">Découvrez notre entreprise</a>
                    </div>
                    <div class="col-lg-6 text-light my-auto p-sm-5 p-lg-0">
                        <img src="img/team-3373638_1920.jpg" class="img-fluid" alt="Responsive image">
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <?php include("footer.php"); ?>
 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.2/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
