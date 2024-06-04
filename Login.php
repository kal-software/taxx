<?php
include ("conn.php");

// Process form data
if (isset($_POST["submit"])) {
  $username = $_POST["username"];
  $password = $_POST["psw"];
  $sql = "SELECT * FROM users WHERE username='$username' OR email = '$username' and password = '$password'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);
  if($count==1){
      header("location: home.php");
    }
    else{
      echo
    '<script>  
    window.location.href = "index.php";
    alert("Invalid username and password"); </script>';
    }
  }
$conn->close();
?>