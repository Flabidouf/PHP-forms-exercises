<?php
        // Display the data in the $name and $lang variables. $_GET is used to grab the data in the form's inputs.
        if (isset($_POST['name'], $_POST['lang'])){
            $name = $_POST['name'];
            $lang = $_POST['lang'];
            echo  $name . '<br>';
            echo  $lang;
        }
    ?>

    <?php

        if(isset($_POST['name'])){
            $name = $_POST['name']; 
        }

        function greeting() {
            $name = $_POST['name'];
            echo "Hello, " . $name;
        }
        greeting();
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GET - POST</title>
</head>

<body>
  

	<form method="post" action="index.php">
	  <input type="text" name="name">
	  <input type="text" name="lang">
	  <input type="submit" value="submit">
	</form>

</body>

</html>