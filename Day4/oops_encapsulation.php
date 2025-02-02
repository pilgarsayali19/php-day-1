<html>
    <body>
        <?php
        //encapsulation
        class bankaccount{
            private $balance;

            public function setbalance($amount){
                if($amount>0){
                    $this->balance = $amount;
                  
                }
            }
            public function getbalance(){
                return $this->balance;

            }
        }
        $account= new bankaccount();
        $account->setbalance(20000);
        echo "account balance(in Rs.):". $account->getbalance();