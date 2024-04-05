<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
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

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/slider.jpg" alt="First slide">
      </div>
    </div>
  </div>


  <div class="container" id="about">
    <center>
      <h2>What we do?</h2>
    </center>
    <br><br>
    <div class="row">
      <div class="col-sm-6">
        <img style="height: 100%;width: 100%;border-radius: 10px" src="images/about.avif">
      </div>
      <div class="col-sm-6">
        <h2>Eco-Scrap Exchange</h2>
        <p>Are you tired of cluttered spaces and unused items taking up precious room in your home or office? Do you
          want to contribute to a greener environment while also earning some extra cash? Look no further! Introducing
          ScrapQ, your one-stop destination for seamless scrap selling and eco-friendly disposal.</p>

        <p>At Eco-Scrap Exchange, we believe in the power of recycling and reusing to create a sustainable future for
          our planet. Our user-friendly platform connects scrap sellers with eager buyers, making the process of selling
          your unwanted items and recyclables easier than ever before.</p>
        <br>
        <a href="https://en.wikipedia.org/wiki/Recycling" class="btn btn-info">Read More</a>
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