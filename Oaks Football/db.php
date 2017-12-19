<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = 'mypass123';
$db = 'loginsystemdb';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
