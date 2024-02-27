
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Eco-Scrap Exchange</title>
  </head>
  <body>
    
<?php include ('header.php');?>
 
 <div class="container" id="about">
  <center><h2>Register Now</h2></center>
     <br><br>
     <div class="row">
         <div class="col-sm-6">
             <img style="height: 100%;width: 100%;border-radius: 10px" src="images/Login.jpg">
         </div>
         <div class="col-sm-6">
          <div>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register Now</h5>
         
      </div>
      <div class="modal-body">
        <?php
        if(isset($_POST['save']))
        {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $result= $obj->insert($name,$email,$password);
        
          if($result=='1')
         {
          echo "<script>alert('Register Successfully');</script>";
          echo "<script>window.location.href='index.php';</script>";
         }

         else
         {
          echo "<script>alert('You are already register');</script>";
         }
       }
        ?>
        <form method="POST">
            <input type="text" name="name" placeholder="Enter Fullname" class="form-control">
            <br>
            <input type="email" name="email" placeholder="Enter Email" class="form-control">
            <br>
            <input type="password" name="password" placeholder="Enter Password" class="form-control" id="myInput">
            &nbsp;<input type="checkbox" onclick="myFunction()"> Show Password
            <BR>
           
      </div>
      <div class="modal-footer">
         <button class="btn btn-success" type="submit" name="save">Register</button>
          </form>
                  <a href="index.php" type="button" class="btn btn-secondary" data-dismiss="modal">Login</a>
        </div>
    </div>
  </div>
</div>   
  </div>
</div>
<br>
          </div>
     </div>
 </div>

<style type="text/css">
    .col-sm-4
    {
        padding-bottom: 10px;
    }
</style>
 
 <?php include ('footer.php');?>

 
  </body>
</html>

