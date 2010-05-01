<?php
if (isset($_POST["name"])) { 
     $name = $_POST["name"];
     echo "Hey got your booking $name"; 

}

?>

<form action='' method="post">
    <label for="first_name">First Name:</label>
        <input type="text" name="first_name" /><br />
    <label for="last_name">Last Name:</label>
        <input type="text" name="email" /><br />
    <label for="email">Email:</label>
        <input type="text" name="email" /><br />
<input type="text" name="phone" /><br />
<input type="text" name="seats" /><br />
<input type="submit" value="Book" />
</form>
