<?php

$amount = 100;
$vatRate = 0.15; 

$vatAmount = $amount * $vatRate;
$vatAmount = $amount - $vatAmount;
echo "VAT amount: " . $vatAmount . "\n";
echo "Total amount including VAT: " . $totalAmount . "\n";

?>
