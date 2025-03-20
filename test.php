<?php
// Generate a random number between 1 and 100
$randomNumber = rand(1, 100);

// Display the random number
echo "Random Number: $randomNumber <br>";

// Provide a message based on the number
if ($randomNumber <= 33) {
    echo "The number is low!";
} elseif ($randomNumber <= 66) {
    echo "The number is medium!";
} else {
    echo "The number is high!";
}
?>
