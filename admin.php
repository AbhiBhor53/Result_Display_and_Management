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

.dropdown-content a:hover {background-color: #f1f1f1;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: #3e8e41;}
             p{
              color:white;
              text-align:center;
            }
            table tr,td{
                border : 2px solid blue;
                padding:20px;
                font-size:20px;
            }
            .result{
                display:flex;
                justify-content:space-between;
                margin:70px;
            }
            input {
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
            #submit{
            margin-top: 2%;
              height: 40px;
              width: 200px;
              background-color:  #26688a;
              text-align: center;
              outline: none;
             font-size: 17px;
             border-radius: 5px;
              border: 1px solid #777;
              transition: 0.4s;
              color:white;
              box-shadow: 4px 4px 8px 4px rgba(63, 145, 233, 0.2), 2px 6px 20px 2px rgba(0, 0, 0, 0.19);
            }
            select{
                outline: none;
                
                margin-left:500px;
                height: 40px;
                width: 200px;
                border-radius: 5px;
                box-shadow: 4px 4px 8px 4px rgba(63, 145, 233, 0.2), 2px 6px 20px 2px rgba(0, 0, 0, 0.19);
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
                   
                   <li><a href="#"><i class="fa fa-home " aria-hidden="true"></i>Profiles</a></li>
                   <li><a href="#"><i class="fa fa-cog " aria-hidden="true"></i>settings</a></li>
                   <li><a href="#"><i class="fa fa-bell " aria-hidden="true"></i>Results</a></li>
                   <li><a href="#"><i class="fa fa-bar-chart " aria-hidden="true"></i>Reports</a></li>
                    <li><a href="#"><i class="fa fa-file-text " aria-hidden="true"></i>Practice Papers</a></li>
                    <li ><a id="ud" href="D-griev-admin.php"><i class="fa fa-comments " aria-hidden="true"></i> Grievances</a></li>
                </ul>
                <div class="data">
                    <div class="form">
                       
                        <form action="" method="POST">

                            <select name="select">
                                <option>--Select Roll Number Below--</option>
                                <option value="1">1</option>
                                <option value="2" >2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                

                           </select>
                           <input  id="submit" type="submit" name="submit" value="Get Data">
                       </form>
                        <form action="" method="POST">
                            <?php
                            if(isset($_POST["submit"])){
$host="localhost";
$dbusername="root";
$dbpass="";
$dbname="resultex";
$roll=$_POST['select'];

$conn=new mysqli($host,$dbusername,$dbpass,$dbname);
if($conn->connect_error){
  echo"error";
}
$sql="select id,phy1,chem1,math1,total1,phy2,chem2,math2,total2,phy3,chem3,math3,total3,name,exam,email,phone,addr from records where id='$roll'";

$result=$conn->query($sql);
if($result->num_rows > 0){
  $row = mysqli_fetch_assoc($result);

  
 
       
    ?>
    <div class="result">
    <center>
    
    <h3>MHT-CET Mocktest 1</h3>
    <br>
    
    <table>
    
        <tr>
    <td>Physics  </td><td><input type="text" name="phy1" value=<?php printf ("%s ", $row["phy1"]);?>></td>
</tr>
<tr>
    <td>Chemistry  </td><td><input type="text" name="chem1" value=<?php printf ("%s ", $row["chem1"]);?>></td>
</tr>
<tr>
    <td>Mathematics  </td><td><input type="text" name="math1" value=<?php printf ("%s ", $row["math1"]);?>></td>
</tr>
<tr>
    <td>Grand Total  </td><td><input type="text"name="total1" value=<?php printf ("%s ", $row["total1"]);?>></td>
</tr>
<tr>
    <td>Name  </td><td><input type="text" name="name" value=<?php printf ("%s ", $row["name"]);?>></td>
</tr>
<tr>
    <td>Email  </td><td><input type="text" name="email" value=<?php printf ("%s ", $row["email"]);?>></td>
</tr>


</table>
</center>
<center>
    
    <h3>MHT-CET Mocktest 2</h3>
    <br>
    
    <table>
        <tr>
    <td>Physics  </td><td><input type="text" name="phy2" value=<?php printf ("%s ", $row["phy2"]);?>></td>
</tr>
<tr>
    <td>Chemistry  </td><td><input type="text" name="chem2" value=<?php printf ("%s ", $row["chem2"]);?>></td>
</tr>
<tr>
    <td>Mathematics  </td><td><input type="text" name="math2" value=<?php printf ("%s ", $row["math2"]);?>></td>
</tr>
<tr>
    <td>Grand Total  </td><td><input type="text" name="total2" value=<?php printf ("%s ", $row["total2"]);?>></td>
</tr>
<tr>
    <td>Exam  </td><td><input type="text" name="exam" value=<?php printf ("%s ", $row["exam"]);?>></td>
</tr>
<tr>
    <td>Address  </td><td><input type="text" name="addr" value=<?php printf ("%s ", $row["addr"]);?>></td>
</tr>
</table>
</center>
<center>

    <h3>MHT-CET Mocktest 3</h3>
    <br>
    
    <table>
        <tr>
    <td>Physics  </td><td><input type="text" name="phy3"value=<?php printf ("%s ", $row["phy3"]);?>></td>
</tr>
<tr>
    <td>Chemistry  </td><td><input type="text" name="chem3" value=<?php printf ("%s ", $row["chem3"]);?>></td>
</tr>
<tr>
    <td>Mathematics  </td><td><input type="text" name="math3" value=<?php printf ("%s ", $row["math3"]);?>></td>
</tr>
<tr>
    <td>Grand Total  </td><td><input type="text" name="total3" value=<?php printf ("%s ", $row["total3"]);?>></td>
</tr>
<tr>
    <td>Roll No.  </td><td><input type="text" name="roll" value=<?php printf ("%d ", $row["id"]);?>></td>
</tr>
</table>
<br>
<br>
<input id="submit" type="submit" name="update" value="Save Changes">
</center>
</div>
    <?php
}
 
}

?>
</form>
<?php

if(isset($_POST["update"])){
    $host="localhost";
    $dbusername="root";
    $dbpass="";
    $dbname="resultex";
    
    $conn=new mysqli($host,$dbusername,$dbpass,$dbname);
    if($conn->connect_error){
      echo"error";
    } 
       
$phy1=$_POST["phy1"];
$chem1=$_POST["chem1"];
$math1=$_POST["math1"];
$total1=$_POST["total1"];
$phy2=$_POST["phy2"];
$chem2=$_POST["chem2"];
$math2=$_POST["math2"];
$total2=$_POST["total2"];
$phy3=$_POST["phy3"];
$chem3=$_POST["chem3"];
$math3=$_POST["math3"];
$total3=$_POST["total3"];
$roll=$_POST["roll"];

$update="update records set phy1='$phy1',chem1='$chem1',math1='$math1',total1='$total1',phy2='$phy2',chem2='$chem2',math2='$math2',total2='$total2',phy3= '$phy3',chem3='$chem3',math3='$math3',total3='$total3'  where id='$roll'";
if($conn->query($update)===TRUE){
    ?>
    <Script>alert("Updated Successfully")</Script>
    
  
    <?php
}
else{
    echo"error";
}

}

?>



                      </div>
                    
                </div>

            </section>
       
        
    </body>
</html>
    
