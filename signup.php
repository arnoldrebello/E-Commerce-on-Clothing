
<!DOCTYPE html>
<html>
<head>
<title>Signup</title>
<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
    <h2>Kindly fill in the details</h2>
    <div class="registration">
        <form id="register" method="POST">
            <input type="text" name="fname" id="fname" placeholder="Enter your first name"><br>
            <br>
            <input type="text" name="lname" id="lname" placeholder="Enter your last name"><br>
            <br>
            <input type="email" name="email" id="mail" placeholder="Enter your mail"><br>
            <br>
            <input type="password" name="pwd" id="pname" placeholder="Enter your password"><br>
            <br>
            <input type="password" name="pwd" id="rpname" placeholder="Re-Enter your password"><br>
            <br>
            <select id="num">
                    <option>+91</option>
                    <option>+92</option>
                    <option>+080</option>
             </select>
             <input type="number" name="no" id="pno" placeholder="Enter phone number"><br>
            <br>
            <input type="checkbox" id="check"><span id="check">I agree to all terms and conditions</span>
            <br><br><button type="submit" id="sub"  href="category.html" class="sb" /*onclick="pcheck(this.id)"*/>SUBMIT</button>

</form>
</div>
</body>
</html>