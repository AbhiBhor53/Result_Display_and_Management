<!doctype html>
<html>
    <head>
        <title>Dashboard</title>
        <link type="text/css" rel="stylesheet" href="d-style.css">
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
           
            .title input{
                margin-top: 2%;
                height: 40px;
                width: 200px;
                text-align: center;
                outline: none;
                font-size: 17px;
                border-radius: 5px;
                border: 1px solid #777;
                transition: 0.4s;
                box-shadow: 4px 4px 8px 4px rgba(63, 145, 233, 0.2), 2px 6px 20px 2px rgba(0, 0, 0, 0.19);
            }
            .form #submit{
              margin-top: 2%;
              height: 45px;
              width: 410px;
              text-align: center;
              background-color: rgb(6, 51, 94);
              color: white;
              outline: none;
              border: none;
              font-size: 17px;
              border-radius: 5px;
              border: 1px solid #555;
            }
            table tr,td{
                border : 2px solid blue;
                padding:20px;
                font-size:20px;
            }
            .form a{
                margin-top: 2%;
                font-size: 17px;
            }
            p{
                color:white;
                text-align:center;
            }
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
            
            </style>
   </head>
    <body>
      
      <?php

      //Session Started

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
                               <a target="_blank" href="login.php">Log-Out</a>
                         </div>
                 </div>
            </div>
        </header>

            <section class="content">
                <ul class="menu">
                    <li><a href="#"><i class="fa fa-home " aria-hidden="true"></i>Profile</a></li>
                    <li><a href="#"><i class="fa fa-cog " aria-hidden="true"></i>settings</a></li>
                    <li><a href="result.php"><i class="fa fa-bell " aria-hidden="true"></i>Results</a></li>
                    <li><a href="#"><i class="fa fa-bar-chart " aria-hidden="true"></i>Reports</a></li>
                    <li><a href="D-pp.html"><i class="fa fa-file-text " aria-hidden="true"></i>Practice Papers</a></li>
                    <li ><a id="ud"  href="D-griev.php"><i class="fa fa-comments " aria-hidden="true"></i> Grievances</a></li>
                </ul>

                <div class="data">
                    <div class="form">
                        <i class="fa-solid fa-user-large"></i>
                        <form action="" method="POST">
                            <?php
                            $host="localhost";
                            $dbusername="root";
                            $dbpass="";
                            $dbname="resultex";
                            $conn=new mysqli($host,$dbusername,$dbpass,$dbname);
                            if($conn->connect_error){
                                echo"error";
                             }
                            $sql="select id, name,exam,email,phone,addr from records where username='$username'";
                            $result=$conn->query($sql);
                            if($result->num_rows > 0){
                                    $row = mysqli_fetch_assoc($result);
                             ?>
                             <center>
                                 <div class="result">
                                 <br>
                                 <br>
                                 <h3>Student Details</h3>
                                 <br>
                                 <table>
                                      <tr>
                                      <td>Name  </td><td><input type="text" name="phy1" value=<?php printf ("%s ", $row["name"]);?>></td>
                                      </tr>
                                      <tr>
                                      <td>Roll Number  </td><td><input type="text" name="phy1" value=<?php printf ("%s ", $row["id"]);?>></td>
                                      </tr>
                                      <tr>
                                      <td>Email  </td><td><input type="text" name="phy1" value=<?php printf ("%s ", $row["email"]);?>></td>
                                      </tr>
                                      <tr>
                                      <td>Phone  </td><td><input type="text" name="phy1" value=<?php printf ("%s ", $row["phone"]);?>></td>
                                      </tr>
                                      <tr>
                                      <td>Address  </td><td><input type="text" name="phy1" value=<?php printf ("%s ", $row["addr"]);?>></td>
                                      </tr>
                                 </table>
                                 </div>
                             </center>
                          <?php
                             }
                          ?>
                       </form>
                      </div>
                    </div>
              </section>
         </body>
</html>
    