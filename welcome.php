<?php
session_start();
if( !isset($_SESSION['zalogowany']))
{
header('Location: index.php');
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
<center>     
<?php
echo "<p> Hello ".$_SESSION['user'].'! [ <a href="logout.php">logout!</a> ]</p><br/>';
$now = new DateTime();
echo "Today is:<br/>";
echo $now->format('Y-m-d');
echo "<br/><br/><b>email:  </b>".$_SESSION['email'];
?>
<br/><br/>
<img src="globe-2491989_640.jpg" >
</center>
</body>
</html>
