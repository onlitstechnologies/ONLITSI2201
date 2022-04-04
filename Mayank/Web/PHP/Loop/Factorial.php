<?php
$fact = 1;
$n = readline("Enter a number: ");
for ($i = $n; $i >= 1; $i--) {
    $fact = $fact * $i;
}

echo "The factorial of $n is $fact.\n";

// 5! = 5 x 4 x 3 x 2 x 1