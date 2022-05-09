<?php
/*----------------------------------------
                IMPORT
----------------------------------------*/
//Import view connexion
    include './view/view_connexion.php';
//Connexion BDD
    include './util/connect_bdd.php';
//Import model
    include './model/model_user.php';
/*----------------------------------------
                CONDITIONS
----------------------------------------*/
//We check that the require conditions for create an account are present and not null
// if (isset($_POST['inscription'])){
// if (isset($_POST['login']) && isset($_POST['mail']) && isset($_POST['mdp'])
// && $_POST['login'] !="" && $_POST['mail'] !="" && $_POST['mdp'] !="")


?>