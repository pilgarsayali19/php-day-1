<?php
//$name="SAYALI";
echo"Hello World!";
?>



<html>
    <body>
        <?php
        //scalar types
            $name="sayali";
            $age=17;
            $time=9.27;
            $class=true;

            $student_arr=array("samruddhi","sakshi","kiran");
            
            class student{
                public $marks;
            }

            $stud=new student();
            $stud->name=90;

            //special types
            $null_var=null;


            echo "<br>string:",$name;
            echo "<br>integer:",$age;
            echo "<br>float:",$time;
            echo "<br>boolean:",$class;
            echo "<br>array:",$student_arr[0];
            
            //echo"object:",$stud:
            echo "<br>null:",$null_var;

            ?>







