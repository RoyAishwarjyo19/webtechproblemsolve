<?php
class MyCircle{
    public $radius;
    function __construct($radius){
        $this->radius = $radius;
    }
   function __destruct(){
    }
    public function getRadius(){
        return $this->radius;
    }
    public function setRadius($radius){
        $this->radius = $radius;
    }
    public function getArea(){
        return 3.14*pow($this->radius,2);
    }
}
$Cobj = new MyCircle(5);
echo "Radius: "; 
echo $Cobj->getRadius(); 
echo "<br>";
echo "Area: "; 
echo $Cobj->getArea();
?>