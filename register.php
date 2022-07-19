<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>login page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="icon" type="png" href="logo.png">
<style>
.head{
  text-align: center;
  margin-top: 5%;
}
.head h1{
  
    color: rgb(6, 51, 94);;
}
span{
    font-size: 35px;
}
.form{
  text-align: center;
  margin-top: 2%;
}
.form i{
  font-size: 70px;
  color:  #26688a;
}
.form input{
  margin-top: 2%;
  height: 40px;
  width: 400px;
  text-align: center;
  outline: none;
 font-size: 17px;
 border-radius: 5px;
  border: 1px solid #777;
  transition: 0.4s;
  box-shadow: 4px 4px 8px 4px rgba(63, 145, 233, 0.2), 2px 6px 20px 2px rgba(0, 0, 0, 0.19);

}
.form input:hover{
  transform: scale(1.1);
 
}
.form #submit{
  margin-top: 2%;
  height: 45px;
  width: 410px;
  text-align: center;
  background-color:  #26688a;
  color: white;
  outline: none;
  border: none;
  font-size: 17px;
  border-radius: 5px;
  border: 1px solid #555;
}
.form a{
  margin-top: 2%;
  font-size: 17px;
}

</style>
</head>
<body>
  <div class="head">
    <h1>RESUL<span>TEX</span></h1>
  </div>
  <div class="form">
    <i class="fa-solid fa-user-large"></i>
    <form action="" method="POST">
      <input type="text" name="username" placeholder="Username" require>
      <br>
      <input type="password" name="password"placeholder="Password" require>
      <br>
      <input type="text" name="name" placeholder="Name" require>
      <br>
      <input type="text" name="exam" placeholder="Exam" require>
      <br>
      <input type="text" name="email" placeholder="Email" require>
      <br>
      <input type="phone" name="phone" placeholder="Mobile Number" require>
      <br>
      <input type="text" name="addr" placeholder="Address" require>
      <br>
      <input id="submit" type="submit" name="submit" value="Register">
      <br>
      <br>
      <a href="login.php">Already Registered?</a>
      <br>
      <br>
      
      
    </form>
  </div>

</body>
</html>
<?php
if( isset($_POST['submit'])){
$hostname="localhost";
$dbusername="root";
$password="";
$dbname="resultex";
$user=$_POST['username'];
$pass=$_POST['password'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$exam=$_POST['exam'];
$addr=$_POST['addr'];
$conn=new mysqli($hostname,$dbusername,$password,$dbname);
if($conn->connect_error){
    echo"error";
}
echo $user;
echo $pass;
echo $name;
$sql="insert into records(username,password,name,email,phone,exam,addr) values('$user','$pass','$name','$email','$phone','$exam','$addr')";
if($conn->query($sql)===TRUE){
  ?>
    <script>alert( "Registered Successfully!");</script>
<?php
}
else{
   ?>
    <script>alert( "error in registration!");</script>
<?php
}
}
?>
