<?php
 
    session_start();
     
    if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
    {
        header('Location: welcome.php');
        exit();
    }
 
?>
 
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>example app</title>
</head>
 
<body style="background-color:#d8cccb;">
     
    <br/>
     <center>
    <form action="zaloguj.php" method="post">
     
        Login: <br /> <input type="text" name="login" /> <br />
        Password: <br /> <input type="password" name="haslo" /> <br /><br />
        <input type="submit" value="Login" />
     
    </form>
     
<?php
    if(isset($_SESSION['blad']))    echo $_SESSION['blad'];
?>
 </center>
</body>
</html>
