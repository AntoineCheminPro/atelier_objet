<?php 
class Student {
    // propriétés de l'objet
    public string $firstname;
    public int $age;
    protected string $id;

    // methodes de l'objet
    public function __construct (string $firstname, int $age) {
        $this->firstname = $firstname;
        $this->age = $age;
    }

    // Donne une valeur à id
    public function setId(string $id) 
    {   if(strlen($id) > 3){
            $this->id = $id;
        }
    }

    // Récupére la valeur de id
    public function getId() 
    {
        return $this->id;
    }
}
