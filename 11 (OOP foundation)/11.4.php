<?php

class Fund{

    private $fund;
    function __construct($initialFund = 0){
        $this->fund = $initialFund;
    }
    public function addFund($money){
        $this->fund += $money;
        $this-> deductFund(0);
    }
    
    private function deductFund($money){
        $this->fund -= $money;
    }

    public function getTotal(){
        echo "Total fund is {$this->fund}\n";
    }
}

$ourFund = new Fund(200);
// $ourFund->fund =70;
$ourFund->getTotal();
$ourFund->addFund(20);
$ourFund->getTotal();
// $ourFund->deductFund(50);
// $ourFund->getTotal();

