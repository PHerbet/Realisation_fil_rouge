<?php
    class Favoris
    {
        /*---------------------------------------------
                        ATTRIBUTS
        ---------------------------------------------*/
        private $id_favoris;
        private $nom_favoris;
        private $url_favoris;
        private $description_favoris;
        private $imag_favoris;
        private $id_utilisateur;
        /*---------------------------------------------
                        CONSTRUCTOR
        ---------------------------------------------*/
        public function __construct($nom_favoris, $url_favoris)
        {
            $this->nom_favoris = $nom;
            $this->url_favoris = $url;
        }

    }
?>