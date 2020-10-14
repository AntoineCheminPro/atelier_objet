<?php 
class Bird
{
    public string $type;
    public string $color;
    public int $age;
    public array $areas;

    public function sing() {
        echo "<br>$this->type : Cui cui<br>";
      }
    
    public function fly($destination) {
        if ($this->age >4) {
            echo "The bird is flying to $destination";
        }
        else {
            echo "This bird is too young to fly";
        }
    }
    public function __construct (string $type, string $color, int $age, array $areas) {
        $this->type = $type;
        $this->color = $color;
        $this->age = $age;
        $this->areas = $areas;
    }
}
