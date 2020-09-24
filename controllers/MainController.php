<?php 

class MainController 
{

    //responsable d'afficher la page d'accueil
    public function home()
    {
        //traiter un formulaire par exemple

        $this->show("home");
    }

    public function products()
    {
        //envoyer un email par exemple
        //ou tester si le user est connecté

        $this->show("products");
    }

    public function store()
    {
        //on instancie notre classe qui nous permet de récupérer nos données
        $data = new Data();
        //on va chercher les heures d'ouverture
        $hours = $data->getOpeningHours();

        //on les passe à la vue pour affichage ! 
        $this->show("store", ["hours" => $hours]);
    }

    public function aboutUs()
    {
        $this->show("about");
    }

    //page d'erreur 404
    public function fourofour()
    {
        //on indique aux robots genre Google que c'est une page d'erreur
        header("HTTP/1.0 404 Not Found");
        $this->show('404');
    }

    /**
     * private parce que je ne prévois appeler cette méthode que depuis cette classe
     * alors je verrouille
     */
    private function show($templateName, $viewVars = [])
    {
        //pour faire le gros flemmard c'est pas possible de faire des choses comme ça
        //on récrée la variable $page parce qu'on l'utilise dans header.tpl.php
        //et qu'on a la grosse flemme
        //Ils m'ont forcé à le faire
        $page = $templateName;

        require("views/header.tpl.php");
        require("views/$templateName.tpl.php");
        //ou en version concaténation
        //require("views/".$templateName.".tpl.php");
        require("views/footer.tpl.php");
    }
}