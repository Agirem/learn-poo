<?php
    class Personne{
        private $nom;
        private $prenom;
        private $age;

//creation des getters et des setters
        public function getNom(){
            return $this->nom;
        }
        public function getPrenom(){
            return $this->prenom;
        }
        public function getAge(){
            return $this->age;
        }
        public function setNom($nom){
            $this->nom = $nom;
        }
        public function setPrenom($prenom){
            $this->prenom = $prenom;
        }
        public function setAge($age){
            $this->age = $age;
        }

        //methodes
        public function acheter(){
            return 'Je buy';
        }

        public function manger(){
            return 'je Mange';
        }
    }