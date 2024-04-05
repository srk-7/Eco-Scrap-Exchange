<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Eco-Scrap Exchange
  </title>
</head>

<body>

  <?php
  include ('header.php');
  $cat = $_GET['cat'];

  if ($cat == 'NewsPapers') {
    $image = "paper.jpg";
    $p = "Unlock the value of old newspapers with Eco-Scrap Exchange! Say goodbye to clutter and hello to cash by selling newspapers as scrap on our platform. Connect with buyers who are passionate about recycling and contribute to a greener planet. Whether it's yesterday's headlines or old magazines, turn them into eco-friendly currency. Join Eco-Scrap Exchange's community today and let your scrap make a positive impact. Declutter, earn, and help create a sustainable future!";
  } else if ($cat == 'Magazines') {
    $image = "Magazin.jpg";
    $p = "Transform unused magazines into treasure! Clear your space and earn by selling magazines as scrap on Eco-Scrap Exchange. Our platform links you with eco-conscious buyers ready to upcycle discarded magazines. Make an eco-friendly choice, declutter, and contribute to a greener world. Join Eco-Scrap Exchange now to turn your magazines into meaningful value. Let sustainability and earnings go hand in hand!";
  } else if ($cat == 'Cardboards') {
    $image = "cardboard.jpg";
    $p = "Redefine cardboard waste with Eco-Scrap Exchange! Convert those cardboard boxes into cash by selling them as scrap on our platform. Connect with buyers who see the potential in recycling cardboard and be a part of the sustainable solution. Declutter your space while contributing to a cleaner environment. Join Eco-Scrap Exchange today and turn your cardboard scraps into valuable resources. Make a difference while earning!";
  } else if ($cat == "Oil Tin") {
    $image = "tin.jpeg";
    $p = "Turn your used oil tins into cash! Sell your old oil tins as scrap on Eco-Scrap Exchange and contribute to a greener environment. Connect with buyers who value recycling and help reduce waste. Join Eco-Scrap Exchange now to start earning from your scrap!";
  } else if ($cat == "Iron") {
    $image = "iron.jpeg";
    "Recycle your iron scraps for a cleaner tomorrow! Sell your old iron items as scrap on Eco-Scrap Exchange and join the movement towards sustainability. Connect with buyers who understand the importance of recycling and be a part of the change. Join Eco-Scrap Exchange today and turn your iron scraps into valuable resources!";
  } else if ($cat == "Plastic") {
    $image = "plastic.jpg";
    $p = "Convert your plastic waste into cash! Sell your plastic items as scrap on Eco-Scrap Exchange and contribute to a cleaner environment. Connect with buyers who value recycling and help reduce plastic pollution. Join Eco-Scrap Exchange now to start earning from your plastic scraps!";
  } else if ($cat == "Copper") {
    $image = "copper.jpeg";
    $p = "Turn your copper scraps into cash! Sell your old copper items as scrap on Eco-Scrap Exchange and contribute to sustainable practices. Connect with buyers who understand the value of copper recycling and help conserve natural resources. Join Eco-Scrap Exchange today and turn your copper scraps into valuable assets!";
  } else if ($cat == "Aluminium") {
    $image = "alu.jpg";
    $p = "Give your aluminium scraps a new life! Sell your old aluminium items as scrap on Eco-Scrap Exchange and contribute to recycling efforts. Connect with buyers who appreciate the value of aluminium recycling and help reduce waste. Join Eco-Scrap Exchange now and turn your aluminium scraps into valuable resources!";
  } else if ($cat == "Steel") {
    $image = "steel.jpeg";
    $p = "Monetize your steel scraps with Eco-Scrap Exchange! Sell your old steel items as scrap on our platform and contribute to a sustainable future. Connect with buyers who value steel recycling and help reduce waste. Join Eco-Scrap Exchange now and turn your steel scraps into valuable resources!";
  } else if ($cat == "Brass") {
    $image = "brass.jpg";
    $p = "Convert your brass items into cash! Sell your old brass items as scrap on Eco-Scrap Exchange and contribute to recycling efforts. Connect with buyers who understand the value of brass recycling and help reduce waste. Join Eco-Scrap Exchange today and turn your brass scraps into valuable resources!";
  } else {
    $image = "2-500x500.webp";
    $p = "Give old books a new chapter! Monetize your book collection by selling them as scrap on Eco-Scrap Exchange. Connect with book enthusiasts who appreciate the value of recycling and reusing. Clear your shelves, contribute to sustainability, and earn from your literary treasures. Join Eco-Scrap Exchange's platform today and let your old books find new purpose. Embrace eco-friendly selling and make a positive impact!";
  }

  ?>

  <br><br>

  <div class="container" id="about">
    <center>
      <h2>
        <?= $cat; ?>
      </h2>
    </center>
    <br><br>
    <div class="row">
      <div class="col-sm-6">
        <img style="height: 100%;width: 100%;border-radius: 10px" src="images/<?= $image; ?>">
      </div>
      <div class="col-sm-6">
        <h2> Read more about
          <?= $cat; ?>.
        </h2>
        <p style="line-height: 38px;">
          <?= $p; ?>
        </p>
        <br>
        <a href="services-details.php?cat=Magazines" data-toggle="modal" data-target="#book"
          class="btn btn-success"><img src="images/icon.png" class="icon"> Request For Pickup </a>

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