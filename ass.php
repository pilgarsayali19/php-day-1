<html>
<body>
    <?php
    //string operations


    //a.concatation
    $firstname="Sayali";
    $lastname="Pilgar";
    $fullname=$firstname."".$lastname;
    
    //b.string length
    $str="Hello,Beautiful!";
    echo strlen($str);

    
    //c.substring extraction
    $str="hello,world!";
    echo substr($str,0,15);

    //d.case conversion
    $text="my friend, was bron on tuesday";
    echo strtoupper($text);
    echo strtolower($text);                                         //converts to lowercase
    echo ucfirst($text);                                            //capstalizes the first letter
    echo  ucwords($text);                                            //capatalizes the first letter if each world


    //e.trimming
    $str="phpworld";
    echo trim($str);                                             //removes whitespace
    echo trim($str);                                            //removes from the left
    echo rtrim($str);                                           //removes from the right 


    //f.reverse a string
    $str="hello,world!";
    echo strrev($str);

    //g.compares two strings(case-sensitive)
    echo strcmp("HELLO WORLD","Hello beautiful");

    //h.compares two strings(case-insensitive)
    $str="hello,world!";
    echo strcasecmp("HELLO WORLD","Hello beautiful");


    //numeric operations


    //a.arithmetic operations
    $a=12;
    $b=2;
    echo $a+$b;
    echo $a-$b;
    echo $a*$b;
    echo $a/$b;
    echo $a%$b;
    echo $a**$b;
    
    //b.rounds up to the nearest integer
    echo ceil(6.8);

    //c.rounds down to the nearest integer
    echo floor(6.8);

    //d.returns the square root
    echo sqrt(25);

    //e.generates a random number between $min and $max
    echo rand(10,50);

    //f.checks if a value is numeric or not
    echo is_numeric(36);
?>
</body>
</html>
