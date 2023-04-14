
<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="logininfo.js"></script>
  
  <title>Document</title>
</head>
<body>
 <div id="Login" class="modal">

  <form class="modal-content animate"  id="myform"  action="login.php" method="post" name="form" required>
    <div class="imgcontainer">
      
      <img src="./IMAGES/images1.jfif" alt="Avatar" class="avatar">
      <h2>Login Form</h2>
    </div>
   
     <div class="container">
      <label for="uname"><b>Username</b></label>
      <input placeholder="Enter Your Student Id" class="stdinpt" id="stdid" type="text" name="sid" required size="15" >
      <label for="uname"><b>Password</b></label>
      <input type="password" placeholder="Enter Password"  id="pswd2" name="password" > 
      <input type="checkbox" onclick="ShowPassword() ">Show Password <br> <br>
     

      <button type="register" name="login" onclick=" validateForm()"  >Login</button> <br>
      
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>

      <p>
        New Here?
        <a href="index.html">
            Click here to register!
        </a>
    </p>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button"  class="cancelbtn"><a href="index.html">Cancel</button></a>
      
    </div>
   </form>
</div>
</body>
</html>