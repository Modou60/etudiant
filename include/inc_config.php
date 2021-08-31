<?php
session_start();
const APP_NAME="promo";
const APP_SLOGAN="Front et Back Office";
$_SESSION["debug"]=false;

//connexion à la base de données
$link = mysqli_connect("localhost","root","","promo");

require "inc_fonction.php";
