<?php
$DB_host = "bhxcvvnq9j6lo7aynk87-mysql.services.clever-cloud.com:3306";
$DB_user = "u5kqcja6qbfwixja";
$DB_pass = "vzKTAoGQctvrmZ3BuEoG";
$DB_name = "bhxcvvnq9j6lo7aynk87";


try
{
 $DB_con = new PDO("mysql://u5kqcja6qbfwixja:vzKTAoGQctvrmZ3BuEoG@bhxcvvnq9j6lo7aynk87-mysql.services.clever-cloud.com:3306/bhxcvvnq9j6lo7aynk87");
 $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
 $e->getMessage();
}
?>