<?php
include "../config/dbcon.php";

if (isset($_POST["submit"])) {
   $UserID = $_POST['UserID'];
   $Fname = $_POST['Fname'];
   $Lname = $_POST['Lname'];
   $password = $_POST['password'];
   $Position = $_POST['Position'];
   $username = $_POST['username'];


   $sql = "INSERT INTO users( Fname, Lname, password, Position, username) VALUES ('$Fname','$Lname','$password', '$Position', '$username')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location:add-new.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      BLAH BLAH BLAH
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Add New User</h3>
         <p class="text-muted">Complete the form below to add a new user</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">First Name:</label>
                  <input type="text" class="form-control" name="Fname" placeholder="Jhuniel">
               </div>

               <div class="col">
                  <label class="form-label">Last Name:</label>
                  <input type="text" class="form-control" name="Lname" placeholder="Pogi">
               </div>
            </div>

            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Username:</label>
                  <input type="text" class="form-control" name="username" placeholder="Jhuniel">
               </div>

               <div class="col">
                  <label class="form-label">Password:</label>
                  <input type="text" class="form-control" name="password" placeholder="Pogi">
               </div>
            </div>


            <div class="form-group mb-3">
               <label>Position:</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="Position" id="1" value="1">
               <label for="1" class="form-input-label">1</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="Position" id="2" value="2">
               <label for="2" class="form-input-label">2</label>
            </div>

            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="member.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>
