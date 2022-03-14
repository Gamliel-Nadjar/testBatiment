<?php
    class Immeuble extends Batiment
    {
        private int $idImmeuble;
        private bool $ascenseur;
        private int $nbAppartement;
        private bool $garage;
        
        public function getIdImmeuble()
        {
            return $this->idImmeuble;
        }

        public function getGarage()
        {
            return $this->garage;
        }

        public function getNbAppartement()
        {
            return $this->nbAppartement;
        }

        public function getAscenseur()
        {
            return $this->ascenseur;
        }

        public function getId()
        {
            return $this->idBatiment;
        }

        public function getNom()
        {
            return $this->nomBatiment;
        }

        public function getSuperficie()
        {
            return $this->superficieBatiment;
        }

        public function getType()
        {
            return $this->typeBatiment;
        }

        public function getNbEtage()
        {
            return $this->nbEtage;
        }
    }
?>