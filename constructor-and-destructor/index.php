<?php 
class Bill{
    public $dinner=20;
    public $drinks= 5;
    public $desert=8;
    public $bill;

    //Assign constructor which will be run very fast in object create

    public function __construct()
    {
        $this->bill=100;
    }

    public function dinner($person){
        $this->bill+=$this->dinner*$person;
        return $this;

    }
    public function drinks($person){
        $this->bill+=$this->drinks*$person;
        return $this;
    }
    public function __destruct()
    {
    echo $this->bill;
    }
}

//Create Bill objects

$bill = new Bill();
$bill->dinner(5)->drinks(2)->bill;


?>