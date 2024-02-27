
<!doctype html>
<html lang="en">
  <head>
  <script>
function showpass() {
    var passInput = document.getElementById("pass");
    if (passInput.type === "password") {
        passInput.type = "text";
    } else {
        passInput.type = "password";
    }
}

function validateLoginForm() {
    var email = document.forms["loginForm"]["email"].value;
    var password = document.forms["loginForm"]["password"].value;

    if (email === "") {
        alert("Please enter your email.");
        return false;
    }

    if (password === "") {
        alert("Please enter your password.");
        return false;
    }
}
</script>

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
  <center><h2>Login</h2></center>
     <br><br>
     <div class="row">
         <div class="col-sm-6">
             <img style="height: 100%;width: 100%;border-radius: 10px" src="images/Login.jpg">
         </div>
         <div class="col-sm-6">
             <div   tabindex="-1" role="dialog" aria-labelledby="exampleModalLabels" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabels">Login Now</h5>
         
      </div>
      <div class="modal-body">
        <?php
         if(isset($_POST['login']))
        {

        $result = $obj->Login($_POST['email'], $_POST['password']);

        if($result==1)
        { 

        $_SESSION['id'] = $obj->iduser();
        
        echo "<script>alert('Login Successfully');</script>";
        echo "<script>window.location.href='home.php';</script>";
        }

        else if($result==2)
        {
        echo "<script>alert('Wrong Username or Password');</script>";
        }

        else
        {
        echo "<script>alert('Not Register');</script>";
        }

        }

        ?>
      
        <form method="POST" onsubmit="return validateLoginForm()" id="loginForm">
           
            <input type="email" name="email" placeholder="Enter Email" class="form-control">
            <br>
            <input type="password" name="password" placeholder="Enter Password" class="form-control" id="pass">
            &nbsp;<input type="checkbox" onclick="showpass()"> Show Password
            <BR>
           
      </div>
      <div class="modal-footer">
         <button class="btn btn-success" type="submit" name="login" form="loginForm">Login</button>
          </form>
        <a href="register.php" type="button" class="btn btn-secondary" data-dismiss="modal">Register</a>
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

 