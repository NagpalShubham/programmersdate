<?php
 include("connections.php");
 if(isset($_POST["submit1"]))
 {
     $username = $_POST["username"];
     $password1 = $_POST["password1"];
     $query1 = mysqli_query($conn,"select * from patients where name='$username' && password = '$password1'");
    $rowcount = mysqli_num_rows($query1);
    if($username == false)
     {
         header("location:signup.php");
     }
     else{
     if ($rowcount == true)
     {
         header("location: hospital.php");
     }
     else
     {
         header("location: signup.php");
     }
    }
 }
?>

<!DOCTYPE html>
<html>
<head>
  <script src="sign.js"></script>
  <link rel="stylesheet" type="text/css" href="sign.css">
  
  <title></title>
</head>
<body>
  <h1>Bed Tracker</h1>
  <hr>
  <h3> Book your hospital bed with us.</h3> 
<div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
        <div class="login-form">
            <div class="sign-in-htm">
                <div class="group">
                <form action="signup.php" method="POST">
                    <label for="user" class="label">Username</label>
                    <input id="user" type="text" name ="username" class="input">
                </div>
                <div class="group">
                    <label for="pass" class="label">Password</label>
                    <input id="pass" type="password" class="input" name ="password1" data-type="password">
                </div>
                <div class="group">
                    <input id="check" type="checkbox" class="check" checked>
                    <label for="check"><span class="icon"></span> Keep me Signed in</label>
                </div>
                <div class="group">
                    <input type="submit" class="button" name ="submit1" value="Sign In">
                    </form>
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <a href="#forgot">Forgot Password?</a>
                </div>
            </div>
            <div class="sign-up-htm">
                <div class="group">
                <form action="signup.php" method="POST">
                    <label for="user" class="label">username</label>
                    <input id="user" type="text" name="user" class="input">
                </div>
                <div class="group">
                    <label for="pass" class="label">Password</label>
                    <input id="pass" type="password" name="pwd"  class="input" data-type="password">
                </div>
                <div class="group">
                    <label for="pass" class="label">Repeat Password</label>
                    <input id="pass" type="password" name= "re-pwd" class="input" data-type="password">
                </div>
                <div class="group">
                    <label for="pass" class="label">Email Address</label>
                    <input id="pass" type="text" name="email" class="input">
                </div>
                <div class="group">
                    <input type="submit" class="button" name="submit" value="Sign Up">
                  </form>
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <label for="tab-1">Already Member?</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$first = $_POST['user'];
$last = $_POST['pwd'];
$email = $_POST['re-pwd'];
$uid = $_POST['email'];

 echo "first";
 $query= "INSERT INTO patients (name,password,repassword,email) VALUES ('$first','$last','$email','$uid')";
 mysqli_query($conn, $query);
?> 



</body>
</html>