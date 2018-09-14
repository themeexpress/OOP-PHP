<?php 
class Person{

    public $name = "Kamrul Islam";
    public $phone = 1425478;
    public $mark = 90;

public function details ($name=null,$phone=null,$mark=null){
    $this->name= $name;
    $this->phone= $phone;
    $this->mark=$mark;
    
    }
}
$details_object = new Person();
$details_object->details('Hello Default',02135444,86);
echo $details_object->name;
echo '<br>';
echo $details_object->phone;
echo '<br>';
echo $details_object->mark;




?>