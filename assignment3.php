<?php
// List of student names
$student_names = array("pallavi", "yashu", "tanishka", "samruddhi", "kiran");

// Write the names to a text file
$file = fopen("students.txt", "w");
if ($file) {
    foreach ($student_names as $name) {
        fwrite($file, $name . "\n");
    }
    fclose($file);
} else {
    echo "Unable to open file for writing.";
}

// Read and display the contents of the text file
$contents = file_get_contents("students.txt");
if ($contents !== false) {
    echo "Contents of the file:<br>";
    // Convert newlines to <br> for HTML output
    echo nl2br($contents);
} else {
    echo "Unable to read the file.";
}
?>
