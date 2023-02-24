<!DOCTYPE html>
<html>
<link rel='stylesheet' href='style.css' type='text/css'>
<body> 
<img class='php-logo' src='https://mayecreate.com/wp-content/uploads/2013/12/php.png'/>
<form method='POST'>
   <h2>Please input your name:</h2>
 <input type='text' name='name' class='name'>
</br>
 <input type='submit' value='Submit' class='button'>
 </form>
    <?php
    error_reporting (E_ALL ^ E_NOTICE);
    $name = $_POST['name'];
    echo "<h1 class='welcome-message'> Hello $name </h1>";
    ?>
</body>
</html>