<?php
// session_start();
// $connection=mysqli_connect("localhost:3307","root","");
// $db=mysqli_select_db($connection,'demo');
include '../connection.php';
$msg=0;
if(isset($_POST['sign']))
{

    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $location=$_POST['district'];

    // $location=$_POST['district'];

    $pass=password_hash($password,PASSWORD_DEFAULT);
    $sql="select * from delivery_persons where email='$email'" ;
    $result= mysqli_query($connection, $sql);
    $num=mysqli_num_rows($result);
    if($num==1){
        // echo "<h1> already account is created </h1>";
        // echo '<script type="text/javascript">alert("already Account is created")</script>';
        echo "<h1><center>Account already exists</center></h1>";
    }
    else{
    
    $query="insert into delivery_persons(name,email,password,city) values('$username','$email','$pass','$location')";
    $query_run= mysqli_query($connection, $query);
    if($query_run)
    {
        // $_SESSION['email']=$email;
        // $_SESSION['name']=$row['name'];
        // $_SESSION['gender']=$row['gender'];
       
        header("location:delivery.php");
        // echo "<h1><center>Account does not exists </center></h1>";
        //  echo '<script type="text/javascript">alert("Account created successfully")</script>'; -->
    }
    else{
        echo '<script type="text/javascript">alert("data not saved")</script>';
        
    }
}


   
}
?>





<!DOCTYPE html>
<html lang="en">


  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Animated Login Form | CodingNepal</title>
    <link rel="stylesheet" href="deliverycss.css">
  </head>
  <body>
    <div class="center">
      <h1>Register</h1>
      <form method="post" action=" ">
        <div class="txt_field">
          <input type="text" name="username" required/>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required/>
          <span></span>
          <label>Password</label>
        </div>
        <div class="txt_field">
            <input type="email" name="email" required/>
            <span></span>
            <label>Email</label>
          </div>
          <div class="">
                           <!-- <label for="district">District:</label> -->
                           <select id="district" name="district" style="padding:10px; padding-left: 20px;">
  <option value="Adilabad">Adilabad</option>
  <option value="Bhadradri Kothagudem">Bhadradri Kothagudem</option>
  <option value="Hyderabad">Hyderabad</option>
  <option value="Jagtial">Jagtial</option>
  <option value="Jangaon">Jangaon</option>
  <option value="Jayashankar Bhupalpally">Jayashankar Bhupalpally</option>
  <option value="Jogulamba Gadwal">Jogulamba Gadwal</option>
  <option value="Kamareddy">Kamareddy</option>
  <option value="Karimnagar">Karimnagar</option>
  <option value="Khammam">Khammam</option>
  <option value="Kumuram Bheem Asifabad">Kumuram Bheem Asifabad</option>
  <option value="Mahabubabad">Mahabubabad</option>
  <option value="Mahabubnagar">Mahabubnagar</option>
  <option value="Mancherial">Mancherial</option>
  <option value="Medak">Medak</option>
  <option value="Medchal–Malkajgiri" selected>Medchal–Malkajgiri</option>
  <option value="Mulugu">Mulugu</option>
  <option value="Nagarkurnool">Nagarkurnool</option>
  <option value="Nalgonda">Nalgonda</option>
  <option value="Narayanpet">Narayanpet</option>
  <option value="Nirmal">Nirmal</option>
  <option value="Nizamabad">Nizamabad</option>
  <option value="Peddapalli">Peddapalli</option>
  <option value="Rajanna Sircilla">Rajanna Sircilla</option>
  <option value="Ranga Reddy">Ranga Reddy</option>
  <option value="Sangareddy">Sangareddy</option>
  <option value="Siddipet">Siddipet</option>
  <option value="Suryapet">Suryapet</option>
  <option value="Vikarabad">Vikarabad</option>
  <option value="Wanaparthy">Wanaparthy</option>
  <option value="Warangal Rural">Warangal Rural</option>
  <option value="Warangal Urban">Warangal Urban</option>
  <option value="Yadadri Bhuvanagiri">Yadadri Bhuvanagiri</option>
</select>

                        
          </div>
          <br>
        <!-- <div class="pass">Forgot Password?</div> -->
        <input type="submit" name="sign" value="Register">
        <div class="signup_link">
          Alredy a member? <a href="deliverylogin.php">Sigin</a>
        </div>
      </form>
    </div>

  </body>
</html>
