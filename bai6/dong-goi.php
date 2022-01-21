<?php

class LopCha{
    public $name = "FPT Poly";
    protected $age = 12;
    private $salary = 5000;
    public function getSalary(){
        return $this->salary;
    }

    
    
}

class LopCon extends LopCha{
    public function getAge(){
        return $this->age;
    }
    
}

$x = new LopCha();
echo $x->name;

?>