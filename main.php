<?php

$conn = mysqli_connect('localhost', 'root', '', 'cleanworld');

if(!$conn)
{
  die("Connection Failed!".mysqli_connect_error());
}
else{

}

function Insertdata($conn)
{
if(isset($_POST['submit'])) {echo"<script> alert('a');</script>";}
}



function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}



?>
