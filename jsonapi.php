<?php
$items = array();

for($ = 0; $i<10; $i++;
{
$items[$i] = "This is message $i";
}
header('Content-Type: application/json');

$jsonOutput = json_encode($iitems);

echo $jsonOutput;
