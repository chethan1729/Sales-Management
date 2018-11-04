<?php

$con=mysql_connect("localhost","root","");
if(!$con)
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("dbtest"))
{
     die('oops database selection problem ! --> '.mysql_error());
}
?>