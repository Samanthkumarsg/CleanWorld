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
if(isset($_POST['submit'])) {
  $email = $_POST['email'];
  $location = $_POST['location'];
  $userlocation = $_POST['userlocation'];
  $description = $_POST['description'];
  $date = $_POST['date'];
  $keys = "abc";

  $name = $_FILES['upload']['name'];
  $memory = $_FILES['upload']['size'];
  $type = $_FILES['upload']['type'];
  $tmp = $_FILES['upload']['tmp_name'];
  $upload = 'uploads/'.$_FILES['upload']['name'];
  $move = move_uploaded_file($tmp,$upload);
  $size = $memory / 1024;
  $sql = "INSERT INTO details(location, pictures, email, keys, userlocation, description,date) VALUES('$location', '$name',
    '$email', '$keys', '$userlocation', '$description', '$date')";
  $result = $conn->query($sql);
  if($move == true)
  {
      echo "<h1 id='success'> Successfully uploaded  </h1>";
 }
    else
    {
      echo "<h1 id='success'> Successfully uploaded </h1> ";
    }


  }
  else {

  }
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
