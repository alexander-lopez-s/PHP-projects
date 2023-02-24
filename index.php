<!DOCTYPE html>
<html>
<link rel='stylesheet' href='style.css' type='text/css'>
<body> 
<img class='php-logo' src='https://mayecreate.com/wp-content/uploads/2013/12/php.png'/>;
<form method='POST'>
   <h2>Please input your name:</h2>
 <input type='text' name='name' class='name'>
</br>
 <input type='submit' value='Submit' class='button'>
 </form>
    <?php
    $name = $_POST['name'];
    $exMark = '!';
    echo "<h1 class='welcome-message'> Hello $name$exMark </h1>";
    ?>
</body>
</html>