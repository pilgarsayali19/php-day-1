<html>
    <body>
        <?php
          //function
          function firstfunction(){
            echo " hello world";

          }
          firstfunction();


          //with parameter function 
           function greet($name){
            echo "<br> hello ". $name;

          }
          greet("calss");


          //with default parameter function
          function defaultParameter($name ="guest"){
            echo "<br> Hello ". $name;
          }
          defaultParameter();
          defaultParameter("Default parameter !");


          //function that returns a value
          function multiply($a,$b){
            return $a*$b;

          }
          $result=multiply(8,9);
          echo"<br>". $result;        

          //function by value example 
          function addTen($num){
            $num += 10;
            echo "<br> Function Value :". $num;

          }
          $x=5;
          addTen($x);
          echo "<br> Original Value : ". $x;
          echo"<br>";

           //function by Reference example 
           function addTenByRefer(&$num){
            $num += 10;
            echo "<br> Function Value :". $num;

          }
          $y=5;
          addTen($y);
          echo "<br> Original Value : ". $y;
          echo"<br>";


          //early returning the values in function (conditional return)
          function checkEvenOdd($num){
            if($num % 2 == 0){
                return "Even";

            }
            return "Odd";
        }
        echo "<br>";
        echo checkEvenOdd(18);
        echo "<br>";
        echo checkEvenOdd(15);
        





        



