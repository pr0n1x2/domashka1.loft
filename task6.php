<?php

const ROWS = 10;
const COLS = 10;

echo '<table border="1">';

for ($i = 1; $i <= ROWS; $i++) {
    echo '<tr>';

    for ($j = 1; $j <= COLS; $j++) {
        $result = $i * $j;

        if ($i % 2 == 0 && $j % 2 == 0) {
            $wrapStart = '(';
            $wrapEnd = ')';
        } elseif ($i % 2 != 0 && $j % 2 != 0) {
            $wrapStart = '[';
            $wrapEnd = ']';
        } else {
            $wrapStart = '';
            $wrapEnd = '';
        }

        echo '<td>' . $wrapStart . $result . $wrapEnd . '</td>';
    }

    echo '</tr>';
}

echo '</table>';
