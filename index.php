<?php 
require_once("includes/config.php");
if(isset($_POST['submit']))
{
  $name=$_POST['aname'];
  $adate=$_POST['adate'];
  $acalls=$_POST['acalls']; 
  $acontact=$_POST['acontact']; 
  $a_app=$_POST['a_appointment']; 

  $sql="INSERT INTO `agent`(`name`, `date`, `agentcall`, `Contact`, `appointment`) 
        VALUES ('$name','$adate','$acalls','$acontact','$a_app')";
  
   if(mysqli_query($conn,$sql))
   {
    echo "<script>alert('Successfully Data Added');</script>";
  }else{
    echo "<script>alert('Something went wrong. Please try again');</script>";
  }
}
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Agent Details </title>
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Agent Details</div>
    <div class="content">
      <form action="" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Agent Name</span>
            <input type="text" name="aname" placeholder="Agent Name" required>
          </div>
          <div class="input-box">
            <span class="details">Date</span>
            <input type="date" name="adate" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Calls</span>
            <input type="text" name="acalls" placeholder="Calls" required>
          </div>
          <div class="input-box">
            <span class="details">Contact</span>
            <input type="text" name="acontact" placeholder="Contact" required>
          </div>
          <div class="input-box">
            <span class="details">Appointments</span>
            <input type="text" name="a_appointment" placeholder="Appointments" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Submit">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
