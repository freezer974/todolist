<!DOCTYPE html>
<html lang="fr" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/todolist.css">
    <title>Document</title>
</head>
<body class="d-flex flex-column h-100">
    <!-- tête de page -->
    <?php 
        $page = 'todolist';
        include("header.php"); 
    ?>
   
    <!-- Section Todolist (modif de la suppression par un système d'archivage) -->
    <main name="main" class="flex-shrink-0">
        <section>
            <div class="container-fluid">
                <div class="row px-4 p-1">
                    <div class="container-fluid">
                        <div class="row d-flex align-items-center">
                            <p class="h5 font-weight-bold">To do list</p>
                            <span class="ajouteList mx-2 text-primary h5">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="container-fluid scrollH">
                <div class="row flex-row flex-nowrap card-deck drake_listes">
                    <div class="ml-4 mb-4 scrollV">
                        <div class="card card-block m-0">
                            <div class="card-body p-2">
                                <p class="card-title justify-content-between d-flex align-items-center font-weight-bold h6 mb-1">List 0</p>
                                <span class="removeList mr-2 mt-2"><i class="fa fa-times-circle text-danger" aria-hidden="true"></i></span>
                                <p class="card-text text-muted mb-2">Manage your tasks easily.</p>
                            </div>            
                            <ul class="list-group list-group-flush drake_taches">
                                <li class="list-group-item d-flex justify-content-between align-items-center p-2">
                                    <div class="check w-100">
                                        <span class="checkbox"><i class="fa fa-square-o text-muted" aria-hidden="true"></i></span>
                                        Walk the dog this evening
                                    </div>
                                    <span class="archive text-danger d-none"><i class="fa fa-archive" aria-hidden="true"></i></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-2">
                                    <div class="check w-100">
                                        <span class="checkbox"><i class="fa fa-check-square-o mr-2 text-success" aria-hidden="true"></i></span>
                                        Go shopping at 3 PM
                                    </div>
                                    <span class="archive text-danger"><i class="fa fa-archive" aria-hidden="true"></i></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-2">
                                    <div class="check w-100">
                                        <span class="checkbox"><i class="fa fa-square-o text-muted" aria-hidden="true"></i></span>
                                        Sleep well tonight
                                    </div>                    
                                    <span class="archive text-danger d-none"><i class="fa fa-archive" aria-hidden="true"></i></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-2">
                                    <div class="check w-100">
                                        <span class="checkbox"><i class="fa fa-square-o text-muted" aria-hidden="true"></i></span>
                                        Keep coding 'till you're dead
                                    </div>
                                    <span class="archive text-danger d-none"><i class="fa fa-archive" aria-hidden="true"></i></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-2">
                                    <div class="check w-100">
                                        <span class="checkbox"><i class="fa fa-square-o text-muted" aria-hidden="true"></i></span>
                                        Enjoy every moment you have
                                    </div>                 
                                    <span class="archive text-danger d-none"><i class="fa fa-archive" aria-hidden="true"></i></span>
                                </li>
                            </ul>
                            <div class="card-footer p-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Votre tâche ici ...">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary button-addon" type="button" id="button-addon">Ajouter</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ml-4 mb-4 scrollV d-none">
                        <div class="card card-block m-0">
                            <div class="card-body p-2">
                                <p class="card-title justify-content-between d-flex align-items-center font-weight-bold h6 mb-1">List </p>
                                <span class="removeList mr-2 mt-2"><i class="fa fa-times-circle text-danger" aria-hidden="true"></i></span>
                                <p class="card-text text-muted mb-2">Manage your tasks easily.</p>
                            </div>            
                            <ul class="list-group list-group-flush drake_taches">
                                <li class="list-group-item d-flex justify-content-between align-items-center p-2">
                                    <div class="check w-100">
                                        <span class="checkbox"><i class="fa fa-square-o text-muted" aria-hidden="true"></i></span>
                                        Walk the dog this evening
                                    </div>
                                    <span class="archive text-danger d-none"><i class="fa fa-archive" aria-hidden="true"></i></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-2">
                                    <div class="check w-100">
                                        <span class="checkbox"><i class="fa fa-check-square-o mr-2 text-success" aria-hidden="true"></i></span>
                                        Go shopping at 3 PM
                                    </div>
                                    <span class="archive text-danger"><i class="fa fa-archive" aria-hidden="true"></i></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-2">
                                    <div class="check w-100">
                                        <span class="checkbox"><i class="fa fa-square-o text-muted" aria-hidden="true"></i></span>
                                        Sleep well tonight
                                    </div>                    
                                    <span class="archive text-danger d-none"><i class="fa fa-archive" aria-hidden="true"></i></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-2">
                                    <div class="check w-100">
                                        <span class="checkbox"><i class="fa fa-square-o text-muted" aria-hidden="true"></i></span>
                                        Keep coding 'till you're dead
                                    </div>
                                    <span class="archive text-danger d-none"><i class="fa fa-archive" aria-hidden="true"></i></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-2">
                                    <div class="check w-100">
                                        <span class="checkbox"><i class="fa fa-square-o text-muted" aria-hidden="true"></i></span>
                                        Enjoy every moment you have
                                    </div>                 
                                    <span class="archive text-danger d-none"><i class="fa fa-archive" aria-hidden="true"></i></span>
                                </li>
                            </ul>
                            <div class="card-footer p-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Votre tâche ici ...">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary button-addon" type="button" id="button-addon">Ajouter</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <!-- pied de page -->
    <footer class="footer mt-auto">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                
                <div class="copyright text-light">
                    © 2018 - Tous droits réservés - exodya
                </div>
                <ul class="nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link disabled text-light" href="#" tabindex="-1" aria-disabled="true"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mention légale</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">A propos</a>
                    </li>
                </ul>
                <div class="social text-light">
                    <span>
                        <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
                    </span> 
                    <span>
                        <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
                    </span>
                    <span>
                        <i class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i>
                    </span>
                    <span>
                        <i class="fa fa-apple fa-2x"  aria-hidden="true"></i>
                    </span>
                    <span>
                        <i class="fa fa-android fa-2x" aria-hidden="true"></i>
                    </span>   
                </div>
                
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.2/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/todolist.js"></script>
</body>
</html>
