<?php
require('conf.php');

//This script generates a mySQL database connection change the hostname and database name here, other settings are in 'conf.php'

function get_dbc()
{
    $hostname = "localhost";
    $username = getDBUser();
    $password = getDBPass();
    $db = "development";
    $dbc = mysqli_connect($hostname, $username, $password, $db);
    if (!$dbc) die("Unable to connect to MySQL: " . mysqli_error($dbc));
    return $dbc;
}