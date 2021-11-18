<?php
$host = 'localhost';
$user = 'root';
$pswd = '';
$dbname = 'senarai_kelas';

$conn = new mysqli($host, $user, $pswd, $dbname);
session_start();
