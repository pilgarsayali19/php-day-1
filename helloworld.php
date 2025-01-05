<html>
    <body>
<?php
//This is single line comment
echo "Hello World!";

echo "Hello World!";
echo "This is a comment example";

//scalar types
$name = "sayali";   //string
$age = 17;           //integer
$time = 14.47;      //float
$class = true;     //boolean

//compound types
$student_arr = array("samruddhi","kiran","sakshi");  //arrays

class student{               //class
    public $marks;
}

$stud = new student();      //object
$stud->name = 90;

//special types
$null_var = null;

echo "<br> string :" , $name;
echo "<br> integer :" , $age;
echo "<br> float :" , $time;
echo "<br> boolean :" , $class;
echo "<br> array :", $student_arr[0];

//echo"object : ", $stud:
echo "<br> null : ", $null_var;

/* This is multiline comments
Developed for php session */

?>
</body>
</html>