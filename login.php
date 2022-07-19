<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>login page</title>
<link rel="icon" type="png" href="logo.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
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
  color: #26688a;
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
                        <input type="text" name="username" placeholder="Username">
                        <br>
                        <input type="password" name="password"placeholder="Password">
                        <br>
                        <input id="submit" type="submit" name="submit" value="LOGIN">
                        <br>
                        <input id="submit" type="submit" name="admin" value="ADMIN">
                        <br>
                        <br>
                        <a href="register.php" target="_blank">Don't have account already? </a>
                  </form>
   </div>
</body>
</html>
<?php

//MySQL Connectivity

$host="localhost";
$dbusername="root";
$dbpass="";
$dbname="resultex";
if(isset($_POST['submit'])){
     $username=$_POST['username'];
     $password=$_POST['password'];
     $conn=new mysqli($host,$dbusername,$dbpass,$dbname);

   //Starting Session

    session_start();
    $_SESSION["username"]=$username;

if($conn->connect_error){
     echo"error";
}
    $sql="select*from records where username='$username' and password='$password'";
    $result=$conn->query($sql);
if($result->num_rows>0){
  
?>
  <Script>alert("Logged in Successful")</Script>
  <script>window.location.href = "dashboard.php";</script>

<?php
}
}

if(isset($_POST['admin'])){
      $username=$_POST['username'];
      $password=$_POST['password'];
      $conn=new mysqli($host,$dbusername,$dbpass,$dbname);
  
      //Starting Session

      session_start();
      $_SESSION["username"]=$username;
  
      if($conn->connect_error){
          echo"error";
       }
      $sql="select*from admin where username='$username' and password='$password'";
      $result=$conn->query($sql);
      if($result->num_rows>0){
      ?>
     <Script>alert("Logged in Successful")</Script>
     <script>window.location.href = "admin.php";</script>
     <?php
  }
  else{
    ?>
    <Script>alert("Registered failed")</Script>
    <?php
  }
  }
?>
