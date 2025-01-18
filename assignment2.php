<?php
//q1
// Initialize the sum variable
$sum = 0;

// Loop through numbers from 1 to 100
for ($i = 1; $i <= 100; $i++) {
    // Check if the number is even
    if ($i % 2 == 0) {
        // Add the even number to the sum
        $sum += $i;
    }
}

// Output the result
echo "The sum of all even numbers between 1 and 100 is: " . $sum;


//q2
// Define the associative array
$cities = array(
    "New York" => 8419600,
    "Los Angeles" => 3980400,
    "Chicago" => 2716000
);

// Find the city with the highest population
$mostPopulousCity = array_keys($cities, max($cities))[0];

// Print the result
echo "<br>The city with the highest population is $mostPopulousCity with a population of " . number_format($cities[$mostPopulousCity]) . ".";


//q3
function isPalindrome($string) {
    // Remove any non-alphanumeric characters and convert the string to lowercase
    $cleanedString = preg_replace("/[^a-zA-Z0-9]/", "", strtolower($string));

    // Check if the cleaned string is equal to its reverse
    return $cleanedString === strrev($cleanedString);
}

// Test the function
$string = "A man, a plan, a canal, Panama";
if (isPalindrome($string)) {
    echo "<br> '$string' is a palindrome.";
} else {
    echo "'$string' is not a palindrome.";
}