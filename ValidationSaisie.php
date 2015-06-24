<?php
//initialisation des variables
    $email=(string)"";
    $emailError="";
    $objet=(string)"";
    $objetError="";
    $objet=(string)"";
    $objetError="";
    $contenu=(string)"";
    $contenuError="";
    
    //Validation de la saisie
    if(isset($_POST['envoyer'])){
        //Vérification pour l'email
        $email = $_POST['email'];
        var_dump($email);
        if(empty($_POST['email'])){
            $emailError = "Vous devez saisir une adresse mail !";
        }
        
        //Vérification pour l'objet
        $objet = $_POST['objet'];
        var_dump($objet);
        if(empty($_POST['objet'])){
            $objetError = "Vous devez indiquez un objet !";
        }

        //Vérification pour le contenu
        $contenu  = $_POST['contenu'];
        var_dump($contenu);
        if(empty($_POST['contenu'])){
            $contenuError = "Vous devez saisir du contenu !";
        }
    }