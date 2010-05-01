<?php
if (isset($_POST["name"])) { 
     $name = $_POST["name"];
     echo "Hey got your booking $name"; 

}

?>

<form action='' method="post">
<input type="text" name="name" /><br />

<input type="text" name="email" /><br />
<input type="text" name="phone" /><br />
<input type="text" name="seats" /><br />
<input type="submit" value="Book" />
</form>
