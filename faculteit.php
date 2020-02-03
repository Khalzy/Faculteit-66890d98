
<?php

$question = readline("van welk getal wil je de faculiteit weten") . PHP_EOL;
$r = 1;

for ($i = 0; $i <= $question - 1; $i++) {
    $r *= ($i + 1);
}

echo ("The factorial of " . $question . "=" . $r . "\n");
