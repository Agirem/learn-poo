<?php
    include("Personne.php");
    class Client extends Personne{
        private $client_id;
        private $email;


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

$client=new Client();
$client->setNom('Ousmane');
$client->setEmail('ousmane.meriga12@gmail.com');
$client->setPrenom('Meriga');

echo $client->manger();


