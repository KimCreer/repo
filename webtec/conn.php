<?php

global $con;
$con = mysqli_connect('localhost','root','','loginsystem');
if(!$con)
{
 echo 'unable to connect with db';
 die();
}