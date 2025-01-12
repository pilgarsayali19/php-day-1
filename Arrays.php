<html>
    <body>
        <?php
        //Arrays indexed

        $fruits=["Banana","Apple","Cherry","Orange"];
        echo "Selected Fruit: ". $fruits[1];
        foreach($fruits as $fruit){
            echo "<br> Fruit :". $fruit;

        }


        
        //associative arrays
        echo "<br>";
        $ages=["john" => 25, "raj=> 18", "alice" => 22];
        echo "<br> selected age :". $ages["alice"];
        foreach($ages as $name => $age){
            echo "<br>". $name . "is". $age. "years old";
        }

      

        //Array Manipulation 
        echo "<br>";
        $classroom=["stuart","ben","rick"];
        foreach($classroom as $student){
            echo "<br> student :".$student;
            
        }


        //Addiing elements
        echo "<br>";
        $classroom[] ="alen";
        array_push($classroom,"xavier");
        foreach($classroom as $student){
            echo "<br> student :".$student;

        }

        //updating elements
        echo "<br>";
        $classroom[2] = "raj";
        foreach($classroom as $student){
            echo "<br> student :".$student;

        }

        //deleting elements
        unset($classroom[1]);
        echo"<br>";
        print_r($classroom);


        //re-indexing element

        $classroom = array_values($classroom);
        echo "<br>";
        print_r ($classroom);
        