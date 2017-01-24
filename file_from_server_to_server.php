<?php 

//this php script transfers a file from one server to another
//very useful when you want to change the server of a website

ini_set('max_execution_time', 0);
set_time_limit(0);
ini_set('default_socket_timeout', 900);
file_put_contents("humans.txt", fopen("http://365label.gr/humans.txt", 'r'));

?>
