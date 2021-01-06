<?php

$connect=mysqli_connect('localhost','root','','my_database');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

?>
