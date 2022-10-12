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

    <title>CRUD</title>
  </head>
  <body>

    <!-- ///Registraion Part================================ --> 
      <form action="submit.php" method = "post" enctype = "multipart/form-data" class="signup-container">
        <header class="head">
          <h1><span>CRUD</span> Application</h1>
        </header>

        <section class="input-section">
        <div class="name-form form div">
          <i class="fas fa-user"></i>
          <input type="text" required name = "name" placeholder="Enter your Name" class="usernameInput">
          <br><br>
        </div>

        <div class="email-form1 form div">
          <i class="fas fa-envelope"></i>
          <input type="email" required name = "email" placeholder="Enter your Email" id="email2" />
          <br><br>
        </div>

        <div class="password-form2 form div">
        <i class="fa fa-mobile"></i>
        <input type="number" required name = "mobile" placeholder="Enter your Mobile" id="password2" />
        </div>
        <br>
        <div class="password2-form form div" id="confirm">
          <i class="fa fa-lock"></i>
          <input type="text" required name = "password" placeholder="Enter Your Password" class="confirmPassword"/>
          <p class="message"></p>
        </div>

        <div class="rememberme">
          <div>
            <input type="checkbox" required name="checkbtn" class="checkbtn" id = "checkbtn" />
            <label for="checkbtn" style="display: inline-block" class = "checkboxLabel">I acknowledged, that all the information is correct</label>
          </div>
        </div>
    </section>

        <input type="submit" name  = "submit" value = "Submit" class="submit">
      </form>


    <!-- <script src="script.js"></script> -->
  </body>
</html>
