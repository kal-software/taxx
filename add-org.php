<?php
include 'connection.php';
// get the user inputs from the form and insert in to database

$name = mysqli_real_escape_string($connection, $_POST["name"]);
$tin_number = mysqli_real_escape_string($connection, $_POST["tin_number"]);
$business_type =mysqli_real_escape_string($connection, $_POST["business_type"]);
$gumruk = mysqli_real_escape_string($connection, $_POST["gumruk"]);
$exice = mysqli_real_escape_string($connection, $_POST["exice"]);
$vat = mysqli_real_escape_string($connection, $_POST["vat"]);
$sur = mysqli_real_escape_string($connection, $_POST["sur"]);
$tot = mysqli_real_escape_string($connection, $_POST["tot"]);
$capital = mysqli_real_escape_string($connection, $_POST["capital"]);
$email= mysqli_real_escape_string($connection, $_POST["email"]);
$phone= mysqli_real_escape_string($connection, $_POST["phone"]);
$adress= mysqli_real_escape_string($connection, $_POST["adress"]);
$user_name= mysqli_real_escape_string($connection, $_POST["user_name"]);
$password= mysqli_real_escape_string($connection, $_POST["password"]);
//sql quary to add the organization into the database
$sql = "insert into organization (name,tin_number,business_type,gumruk,exice,vat,sur,tot,capital,email,phone,adress,ser_name,password) values($name,$tin_number,$business_type,$gumruk,$exice,$vat,$sur,$tot,$capital,$email,$phone,$adress,$user_name,$password)"
//execute the query
if(mysqli_query($connection,$sql)){
    echo "Organization added suceddfully";
}
else{
    echo "Error adding orginization".mysqli_error($connection);
}
//close connection
mysqli_close($connection);
?>

