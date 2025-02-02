
</head>
<body>
    <?php
    //cookies

    //set a cookie
    $cookieName='langpreference';
    $cookieValue='french';
    $cookieExpire=time()+ (180);

    setcookie($cookieName,$cookieValue,$cookieExpire,"/");
    echo"cookie has been set!";


    //accessing the cookie
    if(isset($_COOKIE[$cookieName])){
        echo"<br> your language preference is:".$_COOKIE[$cookieName];

      }
      else{
        echo"<br> cookie is not set!";
    }
    
    //deleting cookie or block the cookie
    setcookie($cookieName,$cookieValue, time()-(30),"/");
    echo"<br> cookie has been deleted!";
    
    ?>
</body>
</html>