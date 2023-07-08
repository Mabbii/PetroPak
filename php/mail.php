<?php


$email = $_POST['con_email'];
$name = $_POST['con_name'];
$namel = $_POST['con_lname'];
$mess = $_POST['con_message'];
$sub = $_POST['con_sub'];





$to = 'rmuneeb85@gmail.com';
$subject = ($sub != '') ? $sub : 'Martin User Query';

$message = '<strong>Name : </strong>'.$name.'<br/><br/>';
$message = '<strong>Last Name : </strong>'.$namel.'<br/><br/>';
$message = '<strong>Eamil : </strong>'.$email.'<br/><br/>';
$message .= $mess.'<br/>';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <'.$email.'>' . "\r\n";

mail($to,$subject,$message,$headers);
echo 1;