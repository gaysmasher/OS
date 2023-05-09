<html>
    <body>
        <form method="post">
            <input type="text" id="user" name="user"/><br>
            <input type="password" id="pass" name="pass"/><br>
            <input type="submit" id="submit" name="submit" value="go!"/>
        </form>
    </body>
</html>
<?php
    if(isset($_POST["submit"])){
        session_start();
        if(!isset($_SESSION["count"]))
            $_SESSION["count"]=0;
        if($_POST["user"]=="user" && $_POST["pass"]=="pass"){
            setcookie("login","welcome",time()+543,"/");
            header("Location:login.php");
            exit;
        }elseif($_SESSION["count"]<3){
            $_SESSION["count"]=$_SESSION["count"]+1;
        }
        if($_SESSION["count"]==3){
            setcookie("login","error",time()+543,"/");
            header("Location:login.php");
            exit;
        }
     
    }
?>