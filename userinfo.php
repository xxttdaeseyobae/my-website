<?php

$con =mysqli_connect('localhost','root');
if ($con){
	echo "Connection success";
}
else { echo "not connected";
	# code...
}

 
 mysqli_select_db($con,'website_test');

 $username = $_POST['username'];
 $email = $_POST['email'];
 $contact = $_POST['contact'];
 $comment = $_POST['comment'];

 $query = "insert into website_test (username, email, contact, comment)
 values ('$username', '$email', '$contact' ,'$comment')";

 mysqli_query($con, $query);

 echo "$query";
 ?>