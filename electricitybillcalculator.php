<?php

echo "Enter the units consumed: ";
$units = (int) readline();

// 1-100 units = $5, 101-200 units = $10, above 200 units = $15

if($units <= 100){
    $bill = $units * 5;
}
else if($units <= 200){
    $bill = 100 * 5 + ($units - 100) * 10;
}
else{
    $bill = 100 * 5 + 100 * 10 + ($units - 200) * 15;
}   

echo "The total electricity bill is: $$bill\n";



