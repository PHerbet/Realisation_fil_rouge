<?php
    class Utilisateur
    {
        /*---------------------------------------------
                        ATTRIBUTS
        ---------------------------------------------*/
        private $id_utilisateur;
        private $login_utilisateur;
        private $mdp_utilisateur;
        private $mail_utilisateur;
        private $img_utilisateur;
        private $statut_utilisateur;
        /*---------------------------------------------
                        CONSTRUCTOR
        ---------------------------------------------*/
        public function __construct($login_utilisateur, $mdp_utilisateur, $mail_utilisateur)
        {
            $this->$login_utilisateur = $login;
            $this->$mdp_utilisateur = $mdp;
            $this->$mail_utilisateur = $mail;
        }
        /*---------------------------------------------
                    GETTER AND SETTER
        ---------------------------------------------*/
        public function getIdUtilisateur():int
        {
            return $this->id_article;
        }
        public function getLoginUtilisateur():string
        {
            return $this->nom_article;
        }
        public function getMdpUtilisateur():string
        {
            return $this->mdp_utilisateur;
        }
        public function getMailUtilisateur():string
        {
            return $this->mail_utilisateur;
        }
        public function getImgUtilisateur():string
        {
            return $this->img_utilisateur;
        }
        public function getStatut_utilisateur():bool 
        {
            return $this->statut_utilisateur;
        }
        /*---------------------------------------------
                        METHODS
        ---------------------------------------------*/
        //Account creation:
        public function add_utilisateur($bdd, $login, $mail, $mdp):void
        {//object instance:
            $login_utilisateur = $this->login_utilisateur;
            $mdp_utilisateur = $this->mdp_utilisateur;
            $mail_utilisateur = $this->mail_utilisateur;
            $login_utilisateur = $this->img_utilisateur;
            try
            {
                $req = $bdd->prepare('INSERT INTO utilisateur(login_utilisateur, mdp_utilisateur, mail_utilisateur, img_utilisateur) 
                VALUES (:login_utilisateur, :mdp_utilisateur, :mail_utilisateur, :img_utilisateur)');
                $req -> execute(array(
                    'login_utilisateur' => $login_utilisateur,
                    'mdp_utilisateur' => $mdp_utilisateur,
                    'mail_utilisateur' => $mail_utilisateur,
                    'img_utilisateur' => $img_utilisateur
                ));
            }//Catching and return exception:
            catch(Exception $e)
            {
                die('Erreur : '.$e->getMessage());
            }
        }
    }
?>