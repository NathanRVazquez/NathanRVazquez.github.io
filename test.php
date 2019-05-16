<DOCTYPE!html>
<html>
<head>
  <title>
  </title>
  <head>
    <body>

      <?php
  $db_host = "localhost";
  $db_username = "root";
  $db_pass = "admin";
  $db_name = "test_database";

  @mysql_connect("$db_host","$db_username","$db_pass") or die ("Could not connect to MySql");
  @mysql_select_db("$db_name")or die ("No database");


  echo"successful Connection";



       ?>

     </body>
     </html>
