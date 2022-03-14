<?php
    class Maison extends Batiment
    {
        public  $idMaison,  $garage,  $cheminee;

        public function __construct($idMaison, $garage, $cheminee)
        {
        parent:: __construct($idMaison);
            $this->idMaison = $idMaison;
            $this->garage = $garage;
            $this->cheminee = $cheminee;
        }

    }
?>