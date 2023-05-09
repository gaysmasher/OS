<html>
<body>    

<?php
    $name="counting";
    session_start();
    if(!isset($_SESSION[$name])){
        $_SESSION[$name]=1;
    }
    else{
        $_SESSION[$name]=$_SESSION[$name]++;//same as cookie but for server
    }
        echo "session<br>";
    echo "you have visted the page ".$_SESSION[$name]." times";
?>
</body>
</html>