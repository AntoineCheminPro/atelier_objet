<?php 
class City
{
    protected string $name;
    protected int $departement;

    public function __construct(array $city){
        $this->setName($city[0]);
        $this->setDepartement($city[1]);
    }
    public function setName(string $name){
        $this->name=$name;
        return $this;
    }
    public function getName(){
        return $this->name;
    }
    public function setDepartement(int $departement){
        $this->departement=$departement;
        return $this;      
    }
    public function getDepartement(){
        return $this->departement;
    }

    public function showLocation(){
        echo "<p>" . $this->getName() ." ". $this->getDepartement() . "</p>";
    }
}
