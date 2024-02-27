<?php
include ('connection.php');
error_reporting(0);
 
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css?i=<?= (rand(111,999))?>">
 
<nav class="navbar navbar-expand-lg     men" style="background: black;color: white">
  <a class="navbar-brand" href="home.php"><b>Eco-Scrap Exchange</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sell.php">Purchase</a>
      </li>
      <!-- <li class="nav-item">
          <a href="register.php" class="nav-link" >Register</a>      
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="books.php">BookBoard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
      <li class="nav-item">
        <?php
        if (isset($_GET['logout']) && ($_GET['logout'] == 'true')) 
        {
        $obj->log_out();
         echo "<script>window.location.href='index.php'</script>";
        }
         if(!$_SESSION['id'])
         {
          ?>
         <a href="index.php" class="nav-link">Login</a>
         <?php
         }
          
          else  { ?>
         <a href="?logout=true" class="nav-link">Logout</a>
         <?php
         }
         ?>
                
      </li>


 
    </ul>
  </div>
</nav>

<!-- Modal Register-->
<div class="modal fade" id="book" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Book Request Now</h5>
         
      </div>
      <div class="modal-body">
        <?php
        if(isset($_POST['book']))
        {

        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $category = $_POST['category'];
        $address = $_POST['address'];
        $logid = $_SESSION['id'];
        $date = $_POST['date'];
        $kg = $_POST['kg'];
        $price = $_GET['p'];

        $result= $obj->booking($name,$mobile,$category,$address,$date,$kg,$logid,$price);
        
          if($result=='1')
         {
          echo "<script>alert('Booking Successfully');</script>";
          echo "<script>window.location.href='receipt.php?cat=$category';</script>";
         }

         else
         {
          echo "<script>alert('Try Again');</script>";
         }
       }
        ?>
        <form method="POST" autocomplete="off">
            <input type="text" readonly="" value="<?= $_SESSION['name']; ?>" name="name" placeholder="Enter Fullname" class="form-control">
            <br>

            <select name="category" class="form-control"> 
              <option value="<?= $_GET['cat'];?>"><?= $_GET['cat'];?></option>
            </select>
             
            <br>
            <input type="text" required="" maxlength="10" placeholder="Enter Mobile" name="mobile"  autocomplete="off" class="form-control">
      
            <br>
            <textarea required="" name="address" placeholder="Enter Full Address" class="form-control" ></textarea>

            <br>
            <input type="text" required="" maxlength="10" placeholder="Quantity in KG" name="kg"  autocomplete="off" class="form-control">

            <br>
            <label>Pickup Date</label>
            <input type="date" required="" maxlength="10" placeholder="Pickup Date" name="date"  autocomplete="off" class="form-control" >
            
      </div>
      <div class="modal-footer">
         <button class="btn btn-success" type="submit" name="book">Book Request</button>
          </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       </div>
    </div>
  </div>
</div>

<!-- Modal Purchase -->
<div class="modal fade" id="purchaseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Purchase Request Now</h5>
      </div>
      <div class="modal-body">
        <?php
        if(isset($_POST['purchaseModal']))
        {

          $name = $_POST['name'];
          $mobile = $_POST['mobile'];
          $category = $_POST['category'];
          $address = $_POST['address'];
          $item = $_POST['item'];
          $logid = $_SESSION['id'];
          $price = $_GET['p'];

          $result= $obj->purchase($name, $mobile, $category, $address, $item, $logid, $price);

          if($result == '1')
          {
            echo "<script>alert('Purchase Request Sent Successfully');</script>";
            echo "<script>window.location.href='purchasepayment.php?cat=$category';</script>";
          }
          else
          {
            echo "<script>alert('Try Again');</script>";
          }
        }
        ?>
        <form method="POST" autocomplete="off">
            <input type="text" readonly="" value="<?= $_SESSION['name']; ?>" name="name" placeholder="Enter Fullname" class="form-control">
            <br>

            <select name="category" class="form-control"> 
              <option value="<?= $_GET['cat'];?>"><?= $_GET['cat'];?></option>
            </select>
             
            <br>
            <input type="text" required="" maxlength="10" placeholder="Enter Mobile" name="mobile"  autocomplete="off" class="form-control">

            <br>
            <textarea required="" name="address" placeholder="Enter Full Address" class="form-control" ></textarea>

            <br>
            <input type="text" required="" maxlength="10" placeholder="Quantity in Item" name="item"  autocomplete="off" class="form-control">
    
          </div>
      <div class="modal-footer">
         <button class="btn btn-success" type="submit" name="purchaseModal">Purchase Request</button>
          </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       </div>
    </div>
  </div>
</div>





