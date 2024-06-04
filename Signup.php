<?php
include ("connection.php");

if (isset($_POST["submit"])) {
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["psw"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script>  alert('Username or Email Has Already Exist'); </script>";
  }
  else{
     if($password == $confirmpassword){
      $query = "INSERT INTO users (username,email,password)
      VALUES ('$username','$email','$password')";
      mysqli_query($conn,$query);
      echo "<script> alert('Registration Successful'); </script>";
     }
     else{
      echo "<script> alert('Password does not match'); </script>";
     }
  }
  $sql = "INSERT INTO users (username,password,email)
  VALUES ('$username', '$password', '$email')";
  
  if ($conn->query($sql) === TRUE) {
      echo "New user created successfully";
  } else {
      echo "Error: ";
  }
}

$conn->close();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Ethiopian revenu- Sign Up</title>
    <link rel="stylesheet" href="Style.css">
  </head>
  <body>
        <div class="container">
        <h2><b>Registration form</b></h2>
        <form method="post" action="" autocomplete="off">
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Insert your name" name="username" width="15px" required>
        <label for="email"><b>Email:</b></label>
        <input type="text" placeholder="Insert your email" name="email" required>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Insert Password" name="psw" required>
        <label for="confirmpassword"><b>Confirm Password</b></label>
        <input type="password" placeholder="Confirm your Password" name="confirmpassword" required>
        <input type="submit" id="button" value="Register" name= "submit">
        </form>
        <p>&copy;2024 Revenu</p>
    </div> 
  </body>
</html>