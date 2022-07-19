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
.data{
     display:flex;
}
.card{
                box-shadow: 4px 4px 8px 4px rgba(63, 145, 233, 0.2), 2px 6px 20px 2px rgba(0, 0, 0, 0.19);
                text-align: center;
                margin: 2%;
                height: 340px;
                width: 320px;
                padding: 2%;
    }
table tr,td{
             
                padding:10px;
                font-size:20px;
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
            .card i{
               font-size: 20px;
               margin-right:10px;
               color:  #26688a; 
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
                   
                       <li><a href="admin.php"><i class="fa fa-home " aria-hidden="true"></i>Profile</a></li>
                       <li><a href="#"><i class="fa fa-cog " aria-hidden="true"></i>settings</a></li>
                       <li><a href="#"><i class="fa fa-bell " aria-hidden="true"></i>Results</a></li>
                       <li><a href="#"><i class="fa fa-bar-chart " aria-hidden="true"></i>Reports</a></li>
                       <li><a href="#"><i class="fa fa-file-text " aria-hidden="true"></i>Practice Papers</a></li>
                       <li ><a id="ud" href="#"><i class="fa fa-comments " aria-hidden="true"></i> Grievances</a></li>
                 
                      </ul>

                  <div class="data">
                  
                    <br>
                    <br>
                    <br>
                   
 <?php
   
$host="localhost";
$dbusername="root";
$dbpass="";
$dbname="resultex";
$conn=new mysqli($host,$dbusername,$dbpass,$dbname);
if($conn->connect_error){
    echo"error";
}
$sql="select name,email,phone,issue from cmt";
$result=$conn->query($sql);
$i=0;
while($row = mysqli_fetch_array($result)) {

?>


<div class="card">
    <center>
        <table>
            
            <tr><td><i class="fa fa-user-circle" aria-hidden="true"></i></td>  <td><?php printf ("%s ", $row["name"]);?><td></tr>
            <tr><td><i class="fa fa-envelope" aria-hidden="true"></i></td> <td><?php printf ("%s ", $row["email"]);?><td></tr>
            <tr><td><i class="fa fa-phone-square" aria-hidden="true"></i></td> <td><?php printf ("%s ", $row["phone"]);?><td></tr>
            <tr><td><i class="fa fa-file-text" aria-hidden="true"></i></td> <td><?php printf ("%s ", $row["issue"]); ?><td></tr>
            
        </table>
    </center>
</div>   

<?php

}
?>
</div>
</div>
</section>
</body>
</html>
