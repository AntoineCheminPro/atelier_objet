<?php 
class Student {
    const MAX = 20;

    // propriétés de l'objet
    public ?string $firstname;
    public ?int $age;
    protected ?string $id;
    public static $base;
    public static $number_student = 0;



    // methodes de l'objet
    public function __construct (string $firstname=null, int $age=null) {
        self::$base = "12";
        $this->firstname = $firstname;
        $this->age = $age;
        self::$number_student ++;
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

    public static function setBase(string $base_int){
        if ($base_int <= self::MAX){
            self::$base=$base_int;
        }
    }
}
