<?php
$db = mysqli_connect('127.0.0.1','root','','registration');
$name = "";
  $email = "";
  $phone = "";
  $id = "";


if (isset($_POST['submit'])) {
$name =$_POST['name'];
$id =$_POST['id'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$slot =$_POST['slot'];


    $sql_u = "SELECT * FROM user WHERE name='$name'";
  	$sql_e = "SELECT * FROM user WHERE email='$email'";
    $sql_p = "SELECT * FROM user WHERE phone='$phone'";
  	$sql_i = "SELECT * FROM user WHERE id='$id'";
  	
  	$res_u = mysqli_query($db, $sql_u);
  	$res_e = mysqli_query($db, $sql_e);
  	$res_p = mysqli_query($db, $sql_p);
  	$res_i = mysqli_query($db, $sql_i);
  	
  	if (mysqli_num_rows($res_u) > 0) {
  	  $name_error = "Sorry... username already taken"; 	
  	}
  	else if(mysqli_num_rows($res_e) > 0){
  	  $email_error = "Sorry... email already taken";
  	}
  	else if(mysqli_num_rows($res_p) > 0){
  	  $phone_error = "Sorry... Number already taken";
  	}else if(mysqli_num_rows($res_i) > 0){
  	  $id_error = "Sorry... SID already taken";
  	}


else{
$sql="INSERT INTO user(name,id,email,phone,slot) VALUES('$name','$id','$email','$phone','$slot')";
$results = mysqli_query($db, $sql);
           echo 'Registration Done!';
           exit();
  	}
  }
?>
