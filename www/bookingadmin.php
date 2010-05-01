<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en">
    <head>
    	<title>Booking</title>

        <meta charset=utf-8" />
        <meta http-equiv="Content-Style-Type" content="text/css" />

        <!-- Framework CSS -->
        <!-- <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/960.css" type="text/css" media="screen" />
        <!--[if lt IE 8]><link rel="stylesheet" href="../../css/ie.css" type="text/css" media="screen, projection"><![endif]-->
	<!--<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>-->

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

    </head>
    <body>
        <?php
          $hostname = 'shptech.com:3306'; //shptech.com:3306
          $username = 'booking'; //booking
          $password = '123123'; //123123
          $dbname = 'booking';

          //$link = mysql_connect('shptech.com:3306', 'booking', '123123');
          $link = mysql_connect($hostname, $username, $password);
          if (!$link) {
              die('Could not connect: ' . mysql_error());
          }
          mysql_select_db($dbname);

          // Get data
          $result = mysql_query("SELECT * FROM booking");
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

          $entity = mysql_fetch_array(mysql_query("SELECT * FROM booking"), MYSQL_ASSOC);
          //print_r(implode(", ",array_keys($entity)));
          //print_r($_POST['booking']);
          mysql_query("INSERT INTO booking (".implode(", ",array_keys($entity)).") VALUES ('".implode("', '",array_values($_POST['booking']))."')");
        ?>
        <?php endif; ?>

        <?php
          mysql_close($link);
        ?>

        <h1>Booking admin</h1>

        <form action="bookingadmin.php" method="post">
        <input type="hidden" name="booking[id]" id="booking_id" />

                  <fieldset id="sf_fieldset_none">

                        <div class="form_row first_name">
                <div>
              <label for="booking_first_name">First name</label>

              <div class="content"><input type="text" name="booking[first_name]" id="booking_first_name" /></div>

                  </div>
          </div>
                    <div class="form_row last_name">
                <div>
              <label for="booking_last_name">Last name</label>
              <div class="content"><input type="text" name="booking[last_name]" id="booking_last_name" /></div>

                  </div>
          </div>
                    <div class="form_row email">
                <div>
              <label for="booking_email">Email</label>
              <div class="content"><input type="text" name="booking[email]" id="booking_email" /></div>

                  </div>
          </div>

                    <div class="form_row phone">
                <div>
              <label for="booking_phone">Phone</label>
              <div class="content"><input type="text" name="booking[phone]" id="booking_phone" /></div>

                  </div>
          </div>
                    <div class="form_row seats">
                <div>

              <label for="booking_seats">Seats</label>
              <div class="content"><input type="text" name="booking[seats]" id="booking_seats" /></div>

                  </div>
          </div>
                    <div class="form_row sf_admin_date sf_admin_form_field_arrival">
                <div>
              <label for="booking_arrival">Arrival</label>

              <div class="content"><select name="booking[arrival][month]" id="booking_arrival_month">
        <option value="" selected="selected"></option>
        <option value="1">01</option>
        <option value="2">02</option>
        <option value="3">03</option>
        <option value="4">04</option>
        <option value="5">05</option>
        <option value="6">06</option>
        <option value="7">07</option>
        <option value="8">08</option>
        <option value="9">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        </select>/<select name="booking[arrival][day]" id="booking_arrival_day">
        <option value="" selected="selected"></option>
        <option value="1">01</option>
        <option value="2">02</option>
        <option value="3">03</option>
        <option value="4">04</option>
        <option value="5">05</option>
        <option value="6">06</option>
        <option value="7">07</option>
        <option value="8">08</option>
        <option value="9">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
        </select>/<select name="booking[arrival][year]" id="booking_arrival_year">
        <option value="" selected="selected"></option>
        <option value="2005">2005</option>
        <option value="2006">2006</option>
        <option value="2007">2007</option>
        <option value="2008">2008</option>
        <option value="2009">2009</option>
        <option value="2010">2010</option>
        <option value="2011">2011</option>
        <option value="2012">2012</option>
        <option value="2013">2013</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
        </select> <select name="booking[arrival][hour]" id="booking_arrival_hour">
        <option value="" selected="selected"></option>
        <option value="0">00</option>
        <option value="1">01</option>
        <option value="2">02</option>
        <option value="3">03</option>
        <option value="4">04</option>
        <option value="5">05</option>
        <option value="6">06</option>
        <option value="7">07</option>
        <option value="8">08</option>
        <option value="9">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        </select>:<select name="booking[arrival][minute]" id="booking_arrival_minute">
        <option value="" selected="selected"></option>
        <option value="0">00</option>
        <option value="1">01</option>
        <option value="2">02</option>
        <option value="3">03</option>
        <option value="4">04</option>
        <option value="5">05</option>
        <option value="6">06</option>
        <option value="7">07</option>
        <option value="8">08</option>
        <option value="9">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
        <option value="32">32</option>
        <option value="33">33</option>
        <option value="34">34</option>
        <option value="35">35</option>
        <option value="36">36</option>
        <option value="37">37</option>
        <option value="38">38</option>
        <option value="39">39</option>
        <option value="40">40</option>
        <option value="41">41</option>
        <option value="42">42</option>
        <option value="43">43</option>
        <option value="44">44</option>
        <option value="45">45</option>
        <option value="46">46</option>
        <option value="47">47</option>
        <option value="48">48</option>
        <option value="49">49</option>
        <option value="50">50</option>
        <option value="51">51</option>
        <option value="52">52</option>
        <option value="53">53</option>
        <option value="54">54</option>
        <option value="55">55</option>
        <option value="56">56</option>
        <option value="57">57</option>
        <option value="58">58</option>
        <option value="59">59</option>
        </select></div>

                  </div>
          </div>
                    <div class="form_row sf_admin_boolean sf_admin_form_field_no_show">
                <div>

              <label for="booking_no_show">No show</label>
              <div class="content"><input type="checkbox" name="booking[no_show]" checked="uchecked" id="booking_no_show" /></div>

                  </div>
          </div>
          </fieldset>
        <input type="submit" name="submit" value="Submit">
        </form>

    </body>
</html>