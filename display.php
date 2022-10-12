<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
         <!--CSS -->
         <!-- <link rel="stylesheet" href="style1.css"> -->
         <style>
              @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap");
          body{
            background-image: url("daimond-cuts1.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            padding: 100px 0px 100px 10px;
            font-family: "Poppins";
          }
            h1{text-align: center; margin-bottom: 20px; text-transform: uppercase; color:white; text-shadow: 0px 0px 5px black;}
           .container{ background-color: white; padding: 20px 50px; border-radius:50px; background-color: #200a3e8c; overflow: scroll;  height: 500px;} 
            a{color: white;}
            a:hover{color:white; text-decoration: none;}
            thead th{font-weight: bold; font-size: 20px; text-align:center;color: #01e7ff; text-shadow: 0px 0px 15px black;}
            tbody th{transform: translateX(10px); font-weight: bold; font-size: 18px; color: white; text-shadow: 0px 0px 20px black;}
            tbody td{transform: translateX(27px); font-weight: bold; font-size: 18px; color: white; text-shadow: 0px 0px 10px black;}
            tbody th{margin-left: 50px}
            .btn{font-weight: bold;}
            .buttons{display: flex; gap: 5px;}
            
             /* /////////////Scrollbar */
             .container::-webkit-scrollbar{
             display: none;
             }


            /* <!-- Media Queries --> */
            @media(max-width: 1010px) {
              .container{font-size: 50%}
            }


         </style>
    <title>Display Page</title>
  </head>
  <body>
    <div class="container">
      <h1>Your Application</h1>
      <a href="index.php" class= "btn btn-success my-4">Add User</a>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    
    <?php
    include "connect.php";
    $query = "SELECT * FROM crud_tb ";
    $result =mysqli_query($conn,$query);
    
    while($row = mysqli_fetch_assoc($result)){
      $id = $row['id'];
      $name = $row['name'];
      $email = $row['email'];
      $mobile = $row['mobile'];
      $password = $row['password'];
      echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$password.'</td>
      <td class = "buttons">
      <a class= "btn btn-warning" href="update.php?id='.$id.'">Update</a>
      <a class= "btn btn-danger" href="delete.php?id='.$id.'">Delete</a>

      </td>
      </tr>';
    }
        ?>

  </tbody>
</table>        
</div>

 </body>
</html>