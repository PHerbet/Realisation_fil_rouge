<?php
/*----------------------------------------
                IMPORT
----------------------------------------*/
//Import view connexion
    include './view/view_connexion.php';
//Connexion BDD
    include './utils/connectBDD.php';
//Import model
    include './model/model_account';
/*----------------------------------------
                CONDITIONS
----------------------------------------*/
//We check that the require conditions for create an account are present and not null
if (isset($_POST['login']) && isset($_POST['mail']) && isset($_POST['mdp'])
&& $_POST['login'] !="" && $_POST['mail'] !="" && $_POST['mdp'] !="")
{
    //instantiation of a new Object
    $article = new Article($_POST['login'], $_POST['mail'], $_POST['mail'], $_POST['img']);
    {//Using method add_utilisateur to create an account
        $article->add_utilisateur;
        echo '<p> Inscription réussie!<p>';
    }
}
else
{
    echo '<p> Veuillez remplir les champs du formulaires<p>';
}
?>