<html>
    <body>
        <?php
           //Control Structures
           $name=" kiran ";
           if($name==" sayali "){
            echo $name."Name is correct";

           }
           else{
            echo $name."Name is not correct";
           }


           //Conditional Statement if and if---else
           $marks=61;

           if ($marks >= 80){
            echo "<br> You got Grade A";

           }
           elseif($marks >= 60){
           echo "<br> You got Grade B";

           }
         elseif($marks >= 40){
            echo "<br> You got Grade C";
         }
         

         else{
            echo "<br> You got Grade F";
         }

         //Conditional Statement Switch
         echo"<br>";
         $day="Sunday";
         switch($day){
            case "Sunday":
                echo "Its Sunday !!!";
                break;

                case "Monday":
                     echo "Its Monday !!!";
                     break;

                    case "Tuesday":
                        echo "Its Tuesday !!!";
                        break;

                    case "Wednesday":
                        echo "Its Wednesday !!!";
                        break;

                    default:
                    echo"No matching day found !!";

                    }




                                
         //Iteratic control structures while loop
         echo"<br>";

         $count=1;
         while($count<+ 10){
            echo "<br> count is". $count;
            $count++;
         }


         //Iteratic control structures do while loop
         echo"<br>";
         $num= 1;
         do{
            echo"<br> Do While Number is ". $num;
            $num++;

         }
         while($num <+3);


         //Iteratic control structures for loop
         echo"<br>";
         for($i=1; $i<=3; $i++){
            echo "<br> for loop number :".$i;
         }

         //Iteratic control structures foreach loop
         echo"<br>";
         $array=["Red","Green","Blue","Yellow","Pink"];  
         foreach($array as $color){
            echo "<br> Color :". $color;
         }               

        ?>
    <body>
<html>  