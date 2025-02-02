<htnl>
    <body>
        <?php
        //classes and object
        class car{
            public $brand;   //property of car
            public $color;
            //private
            //protected
            public function startengine(){       //method
                return "the engine is starting...";
            
                
            }
        }
        //create an object
        $car=new car();
        $car->brand="mercedes";
        $car->color="black";
        echo"car brand:".$car->brand."<br>";
        echo $car->startengine();
    