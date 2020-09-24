<?php 

//dans le contrôleur frontal
//front controller
//ce fichier reçoit toutes les requêtes faite à mon site

//on récupère le paramètre d'URL page et on le stocke dans une belle petite variable
//opérateur ternaire, équivalent du code commenté ci-dessous ! 
//short & sweet
$page = (!empty($_GET['page'])) ? $_GET['page'] : "home";

/*
//exactement équivalent à ces 6 lignes
if(!empty($_GET['page'])){
    $page = $_GET['page'];
}
else {
    $page = "home";
}
*/


//inclue la définition de notre classe
require("controllers/MainController.php");
require("models/Data.php");

//instancie notre classe MainController
$controller = new MainController();

//nos routes
if ($page == "home"){
    //dispatcher
    $controller->home();
}
elseif ($page == "store"){
    $controller->store();
}
elseif ($page == "products"){
    $controller->products();
}
elseif ($page == "about"){
    $controller->aboutUs();
}
else {
    $controller->fourofour();
}
