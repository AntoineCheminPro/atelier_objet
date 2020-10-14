<?php 
class People
{
    protected string $firstame;
    protected string $lastame;
    protected string $adress;

    public function __construct(array $people){
        $this->setFirstname($people[0]);
        $this->setLastname($people[1]);
        $this->setAdress($people[2]);
    }

    public function setFirstname(string $firstname){
        $this->firstname=$firstname;
        return $this;
    }
    public function getFirstname(){
        return $this->firstname;
    }

    public function setLastname(string $lastname){
        $this->lastname=$lastname;
        return $this;
    }
    public function getLastname(){
        return $this->lastname;
    }

    public function setAdress(string $adress){
        $this->adress=$adress;
        return $this;      
    }
    public function getAdress(){
        return $this->adress;
    }

    public function getCoord(){
        echo "<p>" . $this->getFirstname() ." ". $this->getLastname() ." ". $this->getAdress() ."</p>";
    }
}
