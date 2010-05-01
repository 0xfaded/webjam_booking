
<?php require_once("inc/header.php"); ?>

Database info: <br>
<pre><?php
if (isset($_POST["name"])) { 
     $name = $_POST["name"];
     echo "Hey got your booking $name\n";
     $namearr = split(" ", $name);
     $firstname = $namearr[0];
     $lastname = $namearr[1];
     $email = $_POST["email"];
     $phone = $_POST["phone"];
     $seats = $_POST["seats"];

     $sql = "INSERT INTO `booking`.`booking` (`id`, `first_name`, `last_name`, `email`, `phone`, `seats`, `arrival`, `no_show`) VALUES (NULL, '$firstname', '$lastname', '$email', '$phone', '$seats', '2010-05-17 18:10:54', '0');";
     echo "SQL: $sql\n";
     mysql_query($sql, $link);
}

?>
</pre>
<form action='' method="post">
<input type="text" name="name" /><br />

<input type="text" name="email" /><br />
<input type="text" name="phone" /><br />
<input type="text" name="seats" /><br />
<input type="submit" value="Book" />
</form>
<?php require_once("inc/footer.php"); ?>
