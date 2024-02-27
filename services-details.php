<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Eco-Scrap Exchange
    </title>
  </head>
  <body>
    
<?php 
include ('header.php');
$cat = $_GET['cat'];

 if($cat=='NewsPapers')
 {
    $image = "paper.jpg";
    $p = "Unlock the value of old newspapers with Eco-Scrap Exchange! Say goodbye to clutter and hello to cash by selling newspapers as scrap on our platform. Connect with buyers who are passionate about recycling and contribute to a greener planet. Whether it's yesterday's headlines or old magazines, turn them into eco-friendly currency. Join Eco-Scrap Exchange's community today and let your scrap make a positive impact. Declutter, earn, and help create a sustainable future!";
 }

 else if($cat=='Magazines')
 {
    $image = "Magazin.jpg";
    $p="Transform unused magazines into treasure! Clear your space and earn by selling magazines as scrap on Eco-Scrap Exchange. Our platform links you with eco-conscious buyers ready to upcycle discarded magazines. Make an eco-friendly choice, declutter, and contribute to a greener world. Join Eco-Scrap Exchange now to turn your magazines into meaningful value. Let sustainability and earnings go hand in hand!";
 }

 else if($cat=='Cardboards')
 {
    $image = "cardboard.jpg";
    $p="Redefine cardboard waste with Eco-Scrap Exchange! Convert those cardboard boxes into cash by selling them as scrap on our platform. Connect with buyers who see the potential in recycling cardboard and be a part of the sustainable solution. Declutter your space while contributing to a cleaner environment. Join Eco-Scrap Exchange today and turn your cardboard scraps into valuable resources. Make a difference while earning!";
 }

 else if($cat== "Oil"){
  $image = "tin.jpeg";
  $p= "";
 }

 else if($cat== "Iron"){
  $image = "iron.jpeg";
  $p= "";
 }

 else if($cat== "Plastic"){
  $image = "plastic.jpeg";
  $p= "Plastic";
 }

 else if($cat== "Copper"){
  $image = "copper.jpeg";
  $p= "";
 }

 else if($cat== "Alu"){
  $image = "alu.jpg";
  $p= "Aluminium";
 }

 else if($cat== "Steel"){
  $image = "steel.jpeg";
  $p= "";
 }

 else if($cat== "Brass"){
  $image = "brass.jpg";
  $p= "";
 }

 else
 {
    $image = "2-500x500.webp";
    $p="Give old books a new chapter! Monetize your book collection by selling them as scrap on Eco-Scrap Exchange. Connect with book enthusiasts who appreciate the value of recycling and reusing. Clear your shelves, contribute to sustainability, and earn from your literary treasures. Join Eco-Scrap Exchange's platform today and let your old books find new purpose. Embrace eco-friendly selling and make a positive impact!";
 }

?>

<br><br>     
   
 <div class="container" id="about">
  <center><h2><?= $cat;?></h2></center>
     <br><br>
     <div class="row">
         <div class="col-sm-6">
             <img style="height: 100%;width: 100%;border-radius: 10px" src="images/<?= $image;?>">
         </div>
         <div class="col-sm-6">
            <h2> Read more about <?= $cat;?>.</h2>
                <p style="line-height: 38px;">
                <?= $p;?>
                </p>
<br>
<a href="services-details.php?cat=Magazines" data-toggle="modal" data-target="#book"  class="btn btn-success"><img src="images/icon.png" class="icon"> Request For Pickup</a>

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

 