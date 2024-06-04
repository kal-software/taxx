<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>ministry of revenue</title>
 <style>
 body {
 font-family: Arial, sans-serif;
 margin: 0;
 padding: 0;
 height: 100%;
}

header {
 background-color: black ;
 color: white;
 /*position: fixed;*/
 justify-content: space-between;

 /*align-items: center;*/
 /*z-index: 99;*/
}
header h1{
   padding-top: 2%;
   padding-right: 3%;
   margin-right: 20%;
   margin-top: 2%;
   float: right;
   font-size: 40px;
   font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
header button{
   width:100%;
   float:right;
}
header button a{
   float: right;
   padding: 5px;
   /*margin-right:10px;*/
   text-decoration:none;
   font-size: 20px;
}

nav {
   
   top: 2;
  left: 0;
  width: 100%;
  background-color: #fff;
 
   float: left;
   margin-top: 0;
   width: 10%;
   height: 110vh;
   background-color: darkgray;
   color: black;
   padding: 20px;
   box-sizing: border-box;
}
nav ul {
display: flex;
flex-direction: column;
 list-style: none;
 margin: 0;
 padding: 0;
}

nav li {
 display: inline-block;
 margin-right: 20px;
}

nav a {
 color: black;
 font-size: 20px;
 font-weight: bold;
 text-decoration: none;
}

nav a:hover {
 color: #ccc;
}

main {
 padding-left:0%;
 margin-top: 60px;
 height: 1000px;
 background-image: url("phote pha/istockphoto-1135284188-1024x1024.jpg");
 background-repeat: no-repeat;
 background-size: cover;
}

ul {
 list-style: none;
 margin: 0;
 padding: 0;
}

li {
 margin-bottom: 10px;
}

i {
 margin-right: 10px;
}

.button {
 display: inline-block;
 background-color: #333;
 color: #fff;
 padding: 10px 20px;
 border-radius: 5px;
 text-decoration: none;
}

.button:hover {
 background-color: #666;
}

footer {
 background-color: #ccc;
 color: #333;
 padding: 2px;
 font-size: 14px;
 text-align: center;
 position: bottom;
 margin-bottom: 3%;
}
footer li a{
   font-size: 25px  ;
}
</style>
</head>
<body>
 <header>
   <Img style="Width:15%;height:30%;" src="phote pha/my logo.PNG">
  <h1>Ethiopian Revenue</h1>
  <button type="button"><a href="logout.php">logout</a></button>
  <button type="button"><a href="registration.php">sign up</a></button>
 </header>
 
 <main>
 <nav>
   <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="Admin_login_form.php">Admin</a></li>
    <li><a href="Gallery.php">Gallery</a></li>
    <li><a href="About_us.php">About_us</a></li>
    <li><a href="contact_us.php">Contact_us</a></li>
   </ul>
  </nav>
  <br><br><br><br><br>
   <section style="text-align: center; font-family:cambria;">
   <h1>Hello all of you  !</h1>
   <pre style="text-align: center; font-family:cambria;"> 
     <h2>If you are an admin, please click the admin on the left
      navigation of this page and you can access an admin page !</h2></pre>
   </section>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
   </main>
 <footer>
 <p>&copy; 2025 Revenue</p>
 <li><a href="About_us.php">About us</a></li><span>
    <li><a href="contact_us.php">Contact</a></li></span>
 </footer>
</body>
</html>