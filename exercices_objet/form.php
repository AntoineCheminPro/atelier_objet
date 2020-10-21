<?php
class Form {
    protected string $formContent;

    public function __construct(string $action){
        $this->formContent = "<div class='form-row'><form action='$action' method='post'>";
    }

    public function setTexte(string $name, string $value=null){
        $this->formContent .="<div class='form-group col-md-6'><label>$name</label><br>";
        $this->formContent .= "<input type='text' name='$name' value='$value'></div>";
    }
    
    public function setSubmit(string $name, string $value=null){
        $this->formContent .= "<input type='submit' name='$name' value='$value'></div></form>";
    }

    public function showForm(){
        echo $this->formContent;
    }

    
}
?>