<?php

$a = 42;
$b = 1337;

if($a < $b) {
  echo "<p>$a is less than $b</p>";
}

if($a > $b) {
  echo "<p>$a is greater than $b</p>";
} 
else {
  echo "<p>$a is less than (or equal to) $b</p>";
}

if($a > $b) {
  echo "<p>$a is greater than $b</p>";
} 
else if($a == $b) {
  echo "<p>$a is equal to $b</p>";
} 
else {
  echo "<p>$a is indeed less than $b</p>";
}

if($a == 42 && $b == 1337) {
  echo "<p>$a = 42 OCH $b = 1337</p>";
}
else {
  echo "<p>Någon har mixtrat med filen och ändrat 
  	värdena i \$a och eller \$b. Bra gjort.";
}


// Så här gör du med en if-sats
$a = null;
$b = 5;
if($b>1) {
  $a = $b + 1;
}

echo "\$a = $a<br>";
// Så här gör du med ternary operatorn

$a = $b>1 ? $b + 1 : null; 

echo "\$a = $a<br>";

//switch case

$a = "Hello World";

switch($a) {
  case 42:
    echo '<p>$a is equal to 42</p>';
    break;
  
  case 1337:
    echo '<p>$a is equal to 42</p>';
    break;
    
  case "Hello World":
    echo '<p>$a is equal to 42</p>';
    break;
    
  default:
    echo '<p>$a is NOT an known value.</p>';
}

//for , while do while

echo "<p>Räkna till 10 genom en while-loop.</p>";
$i = 0;
while($i <= 10) {
  echo "$i<br>";
  $i++;
}

echo "<p>Räkna till 10 genom en do-while-loop.</p>";
$i = 0;
do {
  echo "$i<br>";
  $i++;
} while($i <= 10);

echo "<p>Räkna till 10 genom en  for-loop.</p>";
for($i = 0; $i <= 10; $i++) {
  echo "$i<br>";
}