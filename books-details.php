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
    
<?php 
include ('header.php');
$cat = $_GET['cat'];

    if($cat=='Novels')
    {
    $image = "novels.jpg";
    $p="When you sell a man a book you don’t sell him just twelve ounces of paper and ink and glue - you sell him a whole new life. Love and friendship and humour. Connect with us and find your favourite book and enjoy!";
    }

    else if($cat=='story')
    {
        $image = "story.jpeg";
        $p = "A storybook is a collection of stories, often bound together in a book format. These stories can be fictional or based on real events, and they are typically written to entertain, educate, or inspire readers. Storybooks come in various genres and formats, catering to different age groups and interests.";
    }

    else if($cat=='Comp')
    {
        $image = "comp.jpeg";
        $p = "Competitive books which are used for competitive exams";
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
<a href="sell-details.php?cat=Recycled-papers" data-toggle="modal" data-target="#purchaseModal" class="btn btn-success"><img src="images/icon.png" class="icon"> Request For Purchase</a>
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

 