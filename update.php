<?php
include "connect.php"; 

$id = $_REQUEST["id"];
//Getting previous values
$sql = "SELECT * FROM crud_tb WHERE id = $id";
$run = $conn->query($sql);
$row = mysqli_fetch_assoc($run);
$pname = $row["name"];
$pemail = $row["email"];
$pmobile= $row["mobile"];
$ppassword = $row["password"];

//To update the Row...
if(isset($_POST["submit"])){
      $name = $_POST["name"]; 
      $email = $_POST["email"]; 
      $mobile = $_POST["mobile"]; 
      $password = $_POST["password"]; 

      $query = "UPDATE `crud_tb` SET id = $id, name = '$name', email = '$email', mobile = '$mobile', password = '$password' WHERE id = $id";
      $result = mysqli_query($conn,$query);
        if($result){
          echo "W";
            header("location:display.php");
        }else{
            echo "Query Failed";
        }                 
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap");
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"rel="stylesheet"/>
    <link rel="stylesheet" href="style1.css" />

    <title>Update CRUD</title>
  </head>
  <body>

    <!-- ///Registraion Part================================ --> 
      <form method = "post" enctype = "multipart/form-data" class="signup-container">
        <header class="head">
          <h1><span>Update</span> Application</h1>
        </header>

        <section class="input-section">
        <div class="name-form form div">
          <i class="fas fa-user" style = "color: #3e3e53"></i>
          <input type="text" name = "name" value = "<?php echo $pname?>" placeholder="Enter your Name" class="usernameInput">
          <br><br>
        </div>

        <div class="email-form1 form div">
          <i class="fas fa-envelope" style = "color: #3e3e53"></i>
          <input type="email" name = "email" value = "<?php echo $pemail?>" placeholder="Enter your Email" id="email2" />
          <br><br>
        </div>

        <div class="password-form2 form div">
        <i class="fa fa-mobile" style = "color: #3e3e53"></i>
        <input type="text" name = "mobile" value = "<?php echo $pmobile?>" placeholder="Enter your Mobile" id="password2" />
        </div>
        <br>
        <div class="password2-form form div" id="confirm">
          <i class="fa fa-lock" style = "color: #3e3e53"></i>
          <input type="text" name = "password" value = "<?php echo $ppassword?>" placeholder="Enter Your Password" class="confirmPassword"/>
          <p class="message"></p>
        </div>

        <div class="rememberme">
          <div>
            <input type="checkbox" required name="checkbtn" class="checkbtn" id = "checkbtn" />
            <label for="checkbtn" style="display: inline-block" class = "checkboxLabel">Are you sure that all the information is correct?</label>
          </div>
        </div>
    </section>

        <input type="submit" name  = "submit" value = "Update" class="submit" style = "background-color: #3e3e53">
      </form>
  </body>
</html>
