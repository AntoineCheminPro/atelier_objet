<?php
class Clio {
    const FIVEDOORS=5;
    const THREEDOORS=3;
    const COLORS = [
        "bleu nuit" =>213800058,
        "beige todi"=>010 7401,
        "gris acier"=>266,
        "blanc glacier"=>369,
        "noir nacre"=>676,
        "rouge flamme"=>"NNP",
        "bleu iron"=>"RQH",
        "jaune sirius"=>"J37"
    ];

    protected int $doorNumber;
    protected string $color;
    private static $cost = 15000;

    function __construc(array $clio){
        $this->setDoorNumber();
        $this->setColor();
        $this->setDepartement();

    }
    function setDoorNumber(int $doorNumber):int
    {
        if (in_array($doorNumber, array [self::THREEDOORS, self::FIVEDOORS])){
            $this->DoorNumber=$doorNumber;
            return $this;
        }
    }
    function getDoorNumber()
    {
        return $this->doorNumber;

    }

    function setColor(string $color){
        if(in_array($color, self::COLORS));
        return $this;
    }
    function getColor(){
        return $this->color;
    }

    function getCost():int{
        return self::$cost;
    }
    
    public function hydrate($data) {
        foreach ($data as $key => $value) {
          $methode = "set". ucfirst($key);
          $this->$methode($value);
        }
      }
    
      public function __construct($data) {
        $this->hydrate($data);
      }

}