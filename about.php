<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Eco-Scrap Exchange</title>
  
</head>

<body>

  <?php
  include ('header.php');
  if (!isset($_SESSION['id'])) {
    ?>
    <script>
      document.getElementById('nav-item-services').style.display = 'none';
      document.getElementById('nav-item-purchase').style.display = 'none';
      document.getElementById('nav-item-bookboard').style.display = 'none';
    </script>
    <?php
  }
  ?>

  <div class="container" id="about">
    <center>
      <h2>About Us</h2>
    </center>
    <br><br>
    <div class="row">
      <div class="col-sm-6">
        <img style="height: 100%;width: 100%;border-radius: 10px" src="images/about.avif">
      </div>
      <div class="col-sm-6">
        <h2>Eco-Scrap Exchange</h2>
        <p>Welcome to Eco Scrap Exchange, where sustainability meets convenience. We are a dedicated team committed to
          revolutionizing
          the way scrap materials are managed and exchanged. Our platform serves as a bridge between individuals looking
          to responsibly
          dispose of their scrap materials and registered scrap dealers ready to repurpose these items. With a focus on
          user-friendly
          features and efficient processes, we strive to make the recycling journey seamless and rewarding for everyone
          involved. Join
          us in our mission to create a cleaner, greener future, one scrap at a time.</p>
        <br>
        <a href="https://en.wikipedia.org/wiki/Recycling" class="btn btn-info">To Know More</a>
      </div>
    </div>
  </div>

  <style type="text/css">
    .col-sm-4 {
      padding-bottom: 10px;
    }
  </style>

  <?php include ('footer.php'); ?>


</body>

</html>