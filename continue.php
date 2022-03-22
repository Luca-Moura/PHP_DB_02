<?php

for ($x = 0; $x < 10; $x++) {
    if ($x == 6) {
        continue; // Pula este ítem, rodando o loop
    }
    echo "O número é: $x <br>";
}

echo '<hr>';

$x = 0;
while ($x < 10) {

    if ($x == 4) {
        break; // Interrompe o loop
    }

    echo "O número é: $x <br>";
    $x++;
}
