<html>
<head>
  <title>CleanWorld</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script src="jquery-3.3.1.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <script src="script.js"></script>
  <body>
    <header>
      <span id="logo">Clean World</span>
    </header>
    <div class="container-fluid a">
      <div class="row justify-content-center">
      <div class="col-md-4 box">

<?php
      include 'main.php';

      echo "<form class='form-group' action='".Insertdata($conn)."' method='POST' enctype='multipart/form-data'>
          <input type='text' class='form-control' id='txt' name='userlocation' placeholder='Where are you from ?'/>
          <input type='text' class='form-control' id='txt' name='location' placeholder='Where do you want to Clean ? '/>
          <input type='email' class='form-control' id='txt' name='email' placeholder='Your Email' required/>
          <input type='text' class='form-control' id='txt' name='description' placeholder='Talk more about your place'/>
          <input type='file' class='form-control-file border' id='txt' name='image' />
          <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'/>
          <button class='form-control btn btn-md ' id='submit' type='submit'> Submit </button>
        </form>";
 ?>
      </div>
    </div>
      </div>
  </body>
  </html>
