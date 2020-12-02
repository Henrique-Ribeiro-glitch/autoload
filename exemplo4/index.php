<?php
require_once("vendor/autoload.php");

use Model\Product;
$product1 = new Product();
$product1->setDescription("Telephone");
echo "<br>Description: ".$product1->getDescription();

//Primeira maneira
use Model\Client;
$client1 = new Client();
$client1->setName("Miguel");
echo "<br>Name: ".$client1->getName();


//Segunda maneira
$client2 = new Model\Client();
$client2->setName("Jhon");
echo "<br>Name; ".$client2->getName();

//Terceira maneira
use Model\Client as PF;
$client3 = new PF();
$client3->setName("Lilian");
echo "<br>Name: ".$client3->getName();

?>
