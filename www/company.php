<?php require_once("inc/connection.php"); ?>
<?php include("inc/header.php"); ?>

<h1>Booking admin</h1>

<style type="text/css">
  body    {
    background-color: #fff;
  }
  .flash  {
    background:none repeat scroll 0 0 #FFF6BF;
    border-color:#FFD324;
    color:#514721;
    width:100%;
  }
  fieldset {
    border:1px solid #ddd;
  }
</style>

<?php
  mysql_select_db($dbname);

  // Get data
  $result = mysql_query("SELECT * FROM company");
  while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
    echo "<pre>";
    print_r($row);
    echo "</pre>";
  }
  mysql_free_result($result);

  //mysql_close($link);
?>
<?php if (isset($_POST['submit'])): ?>
<?php
  echo "<div class=\"flash\">Form submitted</div>";

  $entity = mysql_fetch_array(mysql_query("SELECT * FROM company"), MYSQL_ASSOC);
  print_r(implode(", ",array_keys($entity)));
  //print_r($_POST['booking']);
  //mysql_query("INSERT INTO company (".implode(", ",array_keys($entity)).") VALUES ('".implode("', '",array_values($_POST['booking']))."')");
?>
<?php endif; ?>

<form action="bookingadmin.php" method="post">
  <fieldset id="company_admin">
    <div class="row text">
        <div>
            <label for="company_name">Name</label>
            <div class="content">
                <input type="text" name="company[name]" value="Restaurant" id="company_name">
            </div>
        </div>
    </div>
    <div class="row text">
        <div>
            <label for="company_description">Description</label>
            <div class="content">
                <input type="text" name="company[description]" value="Bla bla" id="company_description">
            </div>
        </div>
    </div>
    <div class="row text">
      
    </div>
    <input type="submit" name="submit" value="Save">
</fieldset>
  </form>

<?php include("inc/footer.php"); ?>