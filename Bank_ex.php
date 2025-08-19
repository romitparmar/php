<?php

class Bank{
    public $balance;

    public function diposite($amount){
        // global $balance;
        if($amount>0){
            return $this->balance+=$amount;
        } else{
            echo "the amount musst be grater then 0!!!!!<br>";
        }
    }

    public function withdraw($amount){
        // global $balance;
        if ($this->balance<$amount) {
            echo "not enough balance!!!!!!!<br>";
        } else {
            return $this->balance-=$amount;
        }
    }
}

$r1 = new Bank();
echo $r1->diposite(100000); 
// echo  $r1->$balance;
echo "<br>";

echo $r1->withdraw(1000);
// $r1->withdraw(1111);


?>