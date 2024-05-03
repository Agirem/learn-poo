<?php
    include("Personne.php");
    class ClientPlus extends Personne{
        private $client_id;
        private $email;


        public function __construct($nom, $prenom, $client_id, $email){
           $this->setNom($nom);
           $this->setPrenom($prenom);
           $this->setClientID($client_id);
           $this->setEmail($email);
        }

        public function getClientId(){
            return $this->client_id;
            }
            public function setClientId($client_id){
                $this->client_id = $client_id;
            }
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this->email = $email;
        }


        public function manger(){
           return parent::manger().' Au restaurant';
        }
    }




