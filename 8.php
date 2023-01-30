<?php

for ($i = 0; $i < 19; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "* ";
    }
    echo '<br>';
}

for ($i = 0; $i < 19; $i++) {
    for ($j = 19; $j > $i; $j--) {
        echo "* ";
    }
    echo '<br>';
}

