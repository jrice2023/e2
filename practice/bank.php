<?php

# Associative arrays

// $coin_values = [
//     "penny" => .01,
//     "nickel" => .05,
//     "dime" => .10,
//     "quarters" => .25
// ];

// $coin_counts = [
//     "penny" => 100,
//     "nickel" => 25,
//     "dime" => 100,
//     "quarters" => 34,
// ];

$coins = [
    'penny' => [100, .01],
    'nickel' => [25, .05],
    'dime' => [100, .10],
    'quarter' => [34, .25]
];

$total = 0;

// foreach ($coin_counts as $coin => $count) {
//     $total = $total + ($count * $coin_values[$coin]);
// }

foreach($coins as $coin => $info) {
    $total = $total + ($info[0] * $info [1]);
}
require 'bank-view.php';