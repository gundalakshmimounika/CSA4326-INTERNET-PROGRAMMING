<?php
class Calculator {

    public function add($a, $b) {
        return (float)$a + (float)$b;
    }

    public function sub($a, $b) {
        return (float)$a - (float)$b;
    }

    public function mul($a, $b) {
        return (float)$a * (float)$b;
    }

    public function div($a, $b) {
        if ((float)$b == 0) return "Cannot divide by zero";
        return (float)$a / (float)$b;
    }

    public function pow($a, $b) {
        return pow((float)$a, (float)$b);
    }
}

$server = new SoapServer(null, [
    "uri" => "http://localhost/soap_calc/server.php"
]);

$server->setClass("Calculator");
$server->handle();
?>
