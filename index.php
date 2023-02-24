<!DOCTYPE html>
<html>
<link rel='stylesheet' href='style.css' type='text/css'>
<body> 
   <div class="main-container">
<h1 class="title"> "Honey Nights" 🐝🐝 (+18)</h1>
<form method='POST'>
   <h2>Your name:</h2>
 <input type='text' name='name' class='name'>
 <h2>Your age:</h2>
 <input type='number' name='age' class='name'>
</br>
 <input type='submit' value='Submit' class='button'>
 </form>
    <?php
    error_reporting (E_ALL ^ E_NOTICE);
    $name = $_POST['name'];
    $age = $_POST['age'];
    if ($age >= 18 ){
    echo "<h1 class='welcome-message'> ✅ Welcome to the club $name! </h1>";
    }
    elseif ($age < 18 && $age != null) {
      echo "<h1 class='welcome-message'> 🚫 Sorry $name, access forbidden! </h1>";
    }

    else {
      echo "<h1 class='welcome-message'> ✋ Please fill in the form! </h1>";
    }

    ?>
    </div>
</body>
</html>