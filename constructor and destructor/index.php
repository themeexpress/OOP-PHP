<?php 
class Bill{
    public $dinner=20;
    public $drinks= 5;
    public $desert=8;
    public $previousBill=100;

    //Assign constructor which will be run very fast in object create

    public function __construct()
    {
        $this->previousBill=100;
    }

    public function dinner($person){
        $this->previousBill=$this->previousBill+$this->dinner*$person;
        return $this;

    }
    public function drinks($person){
        $this->previousBill=$this->previousBill+$this->drinks*$person;
        return $this;
    }
}

//Create Bill objects

$bill = new Bill();
echo $bill->dinner(2)->drinks(2)->previousBill;


?>