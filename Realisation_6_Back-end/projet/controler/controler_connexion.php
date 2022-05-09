<?php
session_start();
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
//We check if the button was pressed
var_dump($_POST['connection']);
    if (isset($_POST['connection']))
    {//We check if fields are not empty
        if (isset($_POST['mail']) && isset($_POST['mdp'])
        && $_POST['mail'] !="" && $_POST['mdp'] !="")
            {
                //Instanciation of a new object
                $utilisateur = new Utilisateur("", $_POST['mail'], $_POST['mdp']);
                //Stockage the information in an array
                $test = $utilisateur->show_user_by_mail($bdd);
                //If the user exist in database, we check the password
                if(!empty($test))
                {//Getting the hash
                    $hash = $test[0]['mdp'];
                    //We check the correspondance between the password in the datatbase an in the form
                    $password = password_verify($_POST['mdp'], $hash);
                    if($password)
                    {//Creating super globale SESSION
                        $_SESSION['connected'] = true;
                        $_SESSION['login'] = $test[0]['login'];
                        $_SESSION['mail'] = $test[0]['mail'];
                        $_SESSION['mdp'] = $test[0]['mdp'];
                        $_SESSION['img'] = $test[0]['img'];
                        $_SESSION['statut'] = $test[0]['statut'];
                        //Connection message
                        echo 'Vous êtes connecté !';
                        //Redirection
                        header( 'Location: /projet/favoris');
                    }
                    else
                    {
                        echo 'les informations sont incorrectes';
                    }
                }
                else
                {
                    echo 'Veuillez compléter les champs !';
                }

            }
    }
?>