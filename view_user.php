<!DOCTYPE html>
<html lang="en">
<head>
  <title>View User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="table.css">
  <link rel="stylesheet" type="text/css" href="navbar.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  body{
    background-image: url('https://www.knoxalliance.store/wp-content/uploads/2017/05/light-color-background-images-for-website-top-hd-images-for-free-background-for-website-in-light-color-1-1024x640.jpg');
  }
  </style>
</head>
<body>
  <?php
   include 'navbar.php';
   ?>
<br><br>
<div class="container">
  <h2 style="text-align:center;">View Customers</h2>
  <?php
  $conn = mysqli_connect('localhost','root','','website');
  if(isset($_GET['del'])){
  $del_Id = $_GET['del'];
  $delete = "DELETE FROM user WHERE Id='$del_Id'";
  $run_delete = mysqli_query($conn , $delete);
  if($run_delete === true){
        echo "Record has been deleted successfully";
      }else {
        echo "Failed Try Again";
      }
  }
   ?>
  <br>
  <br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Current Balance</th>
        <th>Delete</th>
        <th>View</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $conn = mysqli_connect('localhost','root','','website');
        $select = "SELECT * FROM users";
        $run = mysqli_query($conn, $select);
      while($row_user = mysqli_fetch_array($run)){
        $user_id = $row_user['id'];
        $user_name = $row_user['name'];
        $user_email = $row_user['email'];
        $user_currentbalance = $row_user['balance'];
       ?>
      <tr>
        <td><?php echo $user_id;?></td>
        <td><?php echo $user_name;?></td>
        <td><?php echo $user_email;?></td>
        <td><?php echo $user_currentbalance;?></td>
        <td><a class="btn btn-danger" href="view_user.php?del=<?php echo $user_id;?>">Delete</a></td>
        <td><a class="btn btn-success" href="details.php?id=<?php echo $user_id;?>">View</a></td>
         </tr>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
</body>
</html>
