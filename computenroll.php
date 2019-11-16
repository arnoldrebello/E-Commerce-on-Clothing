<?php
    $con=mysqli_connect("localhost","root","","Zanders");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
$Name=$_POST['name'];
$EMail=$_POST['email'];
$PHONE=$_POST['number'];
$STYLE=$_POST['style'];
$TIME=$_POST['time'];
$DAY="";
foreach($_POST['day'] as $Day)
{
$DAY .=" ".$Day."\n";
}

$result=mysqli_query($con,"INSERT INTO DANCERS VALUES ('$Name', '$EMail','$PHONE','$STYLE','$TIME','$DAY');");
header("refresh:20;url=index.html");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Zanders Academy---Enroll</title>

    <style>



    input{ width: 250px;

    	height: 50px;
        position: relative ;
        left:-15px;
        /* margin-bottom: 20px; */
        border:10px;

        text-align: center;
    border-radius: 8px;}
input[type=text],[type=email],[type=tel] {
  color:white;
  font-family: cursive;
  font-size:25px;
}

    input[type=submit], select{
    	position: relative;
      font-family : cursive;
       font-size : 16pt;
        left: 100px;
          left:-15px;
        padding: 10px;
        border-radius: 25px;
        border: none;
        background-image: linear-gradient(to bottom, #eb94d0, #2079b0);
        color: azure;
        box-shadow: 6px 5px 24px red;
        width: 100px;}
        body{
          background-image: url("Images/Background%20Image%202.jpg");
          background-repeat: repeat;
          background-attachment:fixed;
        }
        .Letter {
          position:absolute center center;

          top:100px;

  height: 750px;
  width: 1000px;
  background-image: url("Images/Letter.png");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;}
p{
  position:relative;
  top:20px;
  font-family: cursive;
  font-style: italic;
  font-size: 28px;
  color: black;
}
::placeholder {
  font-weight: bold;
  color:#eb94d0 ;
  opacity: 1;
}

</style>
    </head>

  <body>

	<div align="center" >
    <div class="Letter">
      <p>Welcome to Zanders Academy!</p>
      <img src="" alt="">
      <p><?php
      echo"<p> Hi &nbsp".$Name.",<br>Thank you for showing your interest in Zanders Academy.<br>Hereby, we wish to confirm that you have chosen<br>".$STYLE." as your Genre.<br>Classes are at ".$TIME." on".$DAY.".<br>Your contacts are: ".$EMail." and ".$PHONE.".<br><br>Regards,<br>Zanders."  ?></p>
    </div>

  </div>
  </body>
  </html>
  <?php
mysqli_close($con);
      ?>
