<?php
  $conn = mysqli_connect('localhost','root','','website');
  if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($conn,$_GET['id']);
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($conn , $sql);
    $bank = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($conn);
  }
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Details of the User</title>
   </head>
   <body>
     <?php include('view_user.php');?>
     <div class="container center">
       <br>
       <br>
       <?php if($bank): ?>
         <h4>Id:-  <?php echo htmlspecialchars($bank['id']);?></h4>
         <p>Name:- <?php echo htmlspecialchars($bank['name']);?></p>
         <p>Email:- <?php echo htmlspecialchars($bank['email']);?></p>
         <p>Balance:- <?php echo htmlspecialchars($bank['balance']);?></p>
       <?php else: ?>
         <h5>No such account exists</h5>
       <?php endif;?>
     </div>
   </body>
 </html>
