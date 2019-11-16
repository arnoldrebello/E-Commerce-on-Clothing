<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Zanders Academy---Enroll</title>
    <!-- <link rel="stylesheet" type="text/css" href="CIA2.css"> -->
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
        .rectangle {
          position:absolute center center;
          border-radius: 30px;
          top:100px;
          box-shadow: 6px 5px 24px black;
  height: 800px;
  width: 550px;
  background-color: #555;
}
p{
  position:relative;
  top:20px;
  font-family: cursive;
  font-style: italic;
  font-size: 28px;
  color: white;
}
::placeholder {
  font-weight: bold;
  color:#eb94d0 ;
  opacity: 1;
}

</style>
    </head>

  <body>

	<div align="center">
    <div class="rectangle">
<form method="POST" action="computenroll.php"  >
<div style="background-image: linear-gradient(to left,transparent, #eb94d0, transparent); border-radius:30px;font-family:Helvetica;font-style:italic;position:relative;top:10px">  <h1 style="color:white">Zanders Academy</h1></div>
<p >Name:<input type="text" placeholder="Name" align="right" name="name" style="background-color:rgb(175,145,100);float:right;" required></p>
 <p>E-Mail:<input type="email" placeholder="E-Mail" align="center" name="email"style="background-color:rgb(175,145,100);float:right;"required></p>
<p>Phone Number:<input type="tel" placeholder="Phone Number" align="center" name="number" style="background-color:rgb(175,145,100);float:right;" required></p>
<p align="left">Pick a Dance Style(Genre):&nbsp&nbsp&nbsp
<select class="" name="style" style="width:190px;" required>
<option value="NULL">----------------------</option>
<optgroup label="Ballroom">
  <option value="Waltz">Waltz</option>
  <option value="Jive">Jive</option>
  <option value="Pop">Pop</option>
  </optgroup>
  <optgroup label="Traditional Indian">
    <option value="Bharatanatyam">Bharatanayam</option>
    <option value="Kathakali">Kathakali</option>
  </optgroup>
  <optgroup label="World/Latin">
    <option value="Ballet">Ballet</option>
    <option value="Tap Dance">Tap Dance</option>
    <option value="Break Dance">Break Dance</option>
  </optgroup>
<option value="FreeStyle">FreeStyle</option>
<option value="Wedding Dance">Wedding Dances</option>
</select></p>

<p style="position:relative;top:-10px;">Preferred Time Slot: </p>
<p  style="position:relative;top:-40px;">&nbsp <input type="radio" name="time" value="8 AM"style="position:absolute;left:45px">&nbsp8 AM
   &nbsp <input type="radio" name="time" value="10 AM"style="position:absolute;left:165px">&nbsp&nbsp&nbsp10 AM
   &nbsp <input type="radio" name="time" value="4 PM"style="position:absolute;left:295px">&nbsp&nbsp&nbsp4 PM
   &nbsp <input type="radio" name="time" value="6 PM"style="position:absolute;left:415px">&nbsp&nbsp&nbsp6 PM</p>
   <p style="position:relative;top:-60px;left:30px" align="left">&nbspAvailable Day/<br>Days of the Week:<br>
                       <select class="" name="day[]" multiple size="7" style="width:150px;position:relative;left:300px;top:-100px;" required>
                         <option value="Sunday">Sunday</option>
                         <option value="Monday">Monday</option>
                         <option value="Tuesday">Tuesday</option>
                         <option value="Wednesday">Wednesday</option>
                         <option value="Thursday">Thursday</option>
                         <option value="Friday">Friday</option>
                         <option value="Saturday">Saturday</option>
                       </select>
                     </p>
<input type="submit" value="Enroll Now!" name="loginbutton" style="position:relative;top:-160px; width:150px">
</form></div>
</div>
</body>
</html>
