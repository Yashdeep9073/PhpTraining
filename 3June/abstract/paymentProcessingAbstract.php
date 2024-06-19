<?php
abstract class PaymentProcessor {
    
    abstract public function processPayment($amount);

    public function startPayment($amount){
        echo "Starting payment of $" . $amount . "<br>";
        $this->processPayment($amount);
    }

}

//Child classess
class PayPalProceesor extends PaymentProcessor {
    public function processPayment($amount){
        echo "Processing payment of $". $amount . "through PayPal";
    }
}

$paypal = new PayPalProceesor();
$paypal->startPayment(500);
?>