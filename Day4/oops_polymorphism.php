<head>
    <?php
    //ploymorphism
    class shape{
        public function calculatearea(){
            return"area not defined !";
        }
    }
    class circle extends shape{
        public $radius;
        public function calculatearea(){
            return 3.14*($this->radius* $this->radius);
        }
    }
    class rectangle extends shape{
        public $length;
        public $width;
        public function calculatearea(){
            return $this->length*$this->width;
        }
    }

    $circle=new circle();
    $circle->radius=5;
    echo"circle area:".$circle->calculatearea()."<br>";

    $react=new rectangle();
    $react->length=5;
    $react->width=10;
    echo"react area:".$react->calculatearea()."<br>"
    ?>
</head>
<body>
    
</body>
</html>