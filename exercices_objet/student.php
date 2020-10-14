<?php 
class Student
{
  protected string $name;
  protected int $age;

  public function setName($name) {
      if (strlen($name)>2) {
        $this->name = $name ;
      }
      else {
          echo "<p>ce nom est trop court</p>";
      }
  }
  public function setAge($age) {
      if ($age<123){
        $this->age = $age ;
      }
      else {
          echo "<p>Le record de longévité prouvé chez les femmes est actuellement détenu par la Française Jeanne Calment, qui a vécu jusqu'à l'âge de 122 ans et 164 jours.<br> Le record de longévité prouvé chez les hommes est actuellement détenu par le Japonais Jirōemon Kimura, qui a vécu jusqu'à l'âge de 116 ans et 54 jours.<br> Cet age ne convient donc pas!</p>";
      }
  }

}
