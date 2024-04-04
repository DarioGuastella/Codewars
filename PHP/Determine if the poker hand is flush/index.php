<!-- kata link: https://www.codewars.com/kata/5acbc3b3481ebb23a400007d/php -->
<?php

function checkIfFlush($cards)
{
    $suits = array();
    foreach ($cards as $card) {
        $suits[] = substr($card, -1);
    }
    return count(array_unique($suits)) == 1;
}
