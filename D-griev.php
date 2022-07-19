<!doctype html>
<html>
    <head>
        <title>Dashboard</title>
        <link type="text/css" rel="stylesheet" href="d-style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel="icon" type="png" href="logo.png">
        <style>
  .dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
    background-color: #f1f1f1;
}
.dropdown:hover .dropdown-content {
    display: block;
}
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
.card{
    box-shadow: 4px 4px 8px 4px rgba(63, 145, 233, 0.2), 2px 6px 20px 2px rgba(0, 0, 0, 0.19);
    text-align: center;
    margin: 5%;
    height: 580px;
    width: 1100px;
     }
input{
              margin-top: 2%;
              height: 40px;
              width: 500px;
              text-align: center;
              outline: none;
              font-size: 17px;
              border-radius: 5px;
              border: 1px solid #999;
              transition: 0.4s;
      }
textarea{
                margin-top: 2%;
                height: 180px;
                width: 500px;
                text-align: center;
                outline: none;
                font-size: 17px;
                border-radius: 5px;
                border: 1px solid #999;
                transition: 0.4s;
            }
#submit{
              margin-top: 2%;
              height: 40px;
              width: 200px;
              text-align: center;
              outline: none;
              font-size: 17px;
              border-radius: 5px;
              color: white;
              border: 1px solid #999;
              transition: 0.4s;
              background-color:  #26688a;
              box-shadow: 4px 4px 8px 4px rgba(63, 145, 233, 0.2), 2px 6px 20px 2px rgba(0, 0, 0, 0.19);
        }
#submit:hover{
                transform: scale(1.2);
            }
p{
              color:white;
              text-align:center;
            }
            
            </style>
    </head>
    <body>
      <?php

      session_start();
      $username=$_SESSION["username"];

      ?>
        <header>
            <div class="logo">
                      <h1>RESUL<span>TEX</span></h1>
            </div>
            
            <div>
                       <h1>Dashboard</h1>
            </div>
            <div>
                       <div class="dropdown" style="float:right;">
                              <p> <i class="fa fa-user-circle" aria-hidden="true"></i></p>
                              <div class="dropdown-content">
                              <a href="#"><?php echo $username  ;?></a>
                              <a href="login.php">Log-Out</a>
                       </div>
           </div>
               
           </div>
        </header>
            <section class="content">
                <ul class="menu">
                   
                    <li><a href="dashboard.php"><i class="fa fa-home " aria-hidden="true"></i>Profile</a></li>
                    <li><a href="#"><i class="fa fa-cog " aria-hidden="true"></i>settings</a></li>
                    <li><a href="result.php"><i class="fa fa-bell " aria-hidden="true"></i>Results</a></li>
                    <li><a href="#"><i class="fa fa-bar-chart " aria-hidden="true"></i>Reports</a></li>
                    <li><a href="D-pp.html"><i class="fa fa-file-text " aria-hidden="true"></i>Practice Papers</a></li>
                    <li ><a id="ud" href="D-griev.php"><i class="fa fa-comments " aria-hidden="true"></i> Grievances</a></li>

                </ul>

                <div class="data">
                     <div class="card">
                     <br>
                           <h1>Grieviences</h1>
                     <br>
                     <br>
                     <form action="" method="POST">
                        <center>
                        <table>
                            <tr>
                                <td>Name :</td><td><input type="text" name="name" ></td>
                            </tr>
                            <tr>
                                <td>Phone :</td><td><input type="phone" name="phone" ></td>
                            </tr>
                            <tr>
                                <td>Email :</td><td><input type="text" name="email" ></td>
                            </tr>
                            <tr>
                                <td>Issue :</td><td><textarea name="issue"cols="50" rows="10"></textarea></td>
                            </tr>
                            <tr>
                                <td></td><td><input id="submit" type="submit" name="submit" value="Submit"></td>
                            </tr>
                        </table>
                        </center>
                    </form>
                  </div>
                </div>
          </section>
    </body>
</html>
<?php
if(isset($_POST["submit"])){
    
$name=$_POST["name"]; 
$phone=$_POST["phone"]; 
$email=$_POST["email"]; 
$issue=$_POST["issue"];    
$host="localhost";
$dbusername="root";
$dbpass="";
$dbname="resultex";
$conn=new mysqli($host,$dbusername,$dbpass,$dbname);
if($conn->connect_error){
    echo"error";
}
$sql="insert into cmt(name,phone,email,issue) values('$name','$phone','$email','$issue')";
if($conn->query($sql)===TRUE)
{

?>
    <script>alert("Query Submitted Succesfully")</script>
<?php
}
}
?>
