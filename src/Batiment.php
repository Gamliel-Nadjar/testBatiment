<?php
    class Batiment
    {
        
        private  $idBatiment;
        private  $nomBatiment;
        private  $superficieBatiment;
        private  $typeBatiment;
        private  $nbEtage;

        public function __construct($id, $nom, $sup, $typ, $nb)
        {
            $this->idBatiment = $id;
            $this->nomBatiment = $nom;
            $this->superficieBatiment = $sup;
            $this->typeBatiment = $typ;
            $this->nbEtage = $nb;
        }

        public function getId()
        {
            echo $this->idBatiment;

        }
            

        
    }


    

?>