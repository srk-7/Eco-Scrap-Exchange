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

    <?php include ('header.php'); ?>

    <style type="text/css">
        .col-sm-3 {
            padding-bottom: 10px;
        }
    </style>

    <div class="container-fluid" id="Services" style="padding-bottom:35px;padding-top: 35px;padding:25px">
        <h2 style="text-align: center">EXCHANGE BOOKS DASHBOARD</h2>
        <br><br>
        <div class="row">
            <div class="col-sm-4">
                <img style="border-radius:7px;height: 300px;width: 100%" src="images/story.jpeg">
                <h4 style="text-align: center;padding-top: 10px">Story Books</h4>
                <p style="text-align: center;">Rs : 99.00 per book</p>
                <center><a href="books-details.php?cat=story&p=40" class="btn btn-success"><img src="images/icon.png"
                            class="icon"> Request For Purchase</a></center>
            </div>
            <div class="col-sm-4">
                <img style="border-radius:7px;height: 300px;width: 100%" src="images/novels.jpg">

                <h4 style="text-align: center;padding-top: 10px">Novels</h4>
                <p style="text-align: center;">Rs : 149.00 per book</p>
                <center><a href="books-details.php?cat=Novels&p=40" class="btn btn-success"><img src="images/icon.png"
                            class="icon"> Request For Purchase</a></center>
            </div>
            <div class="col-sm-4">
                <img style="border-radius:7px;height: 300px;width: 100%" src="images/comp.jpeg">
                <h4 style="text-align: center;padding-top: 10px">Competitive Exam Books</h4>
                <p style="text-align: center;">Starting from 150/-</p>
                <center><a href="books-details.php?cat=Comp&p=40" class="btn btn-success"><img src="images/icon.png"
                            class="icon"> Request For Purchase</a></center>
            </div>
            <br>
        </div>
    </div>
    <br><br>
    <div id="bookForm">

        <h3 style="text-align: center">Are you having books but not using them?</h3>
        <h3 style="text-align: center; color: #999990">Be a Book Donor</h3>
        <form id="scrapDetailsForm" method="POST" autocomplete="off">
            <div class="form-group">
                <label for="productName">Book Name</label>
                <input type="text" class="form-control" id="productName" name="bookName" required>
            </div>
            <div class="form-group">
                <label for="productName">Author Name</label>
                <input type="text" class="form-control" id="authorName" name="authorName" required>
            </div>
            <div class="form-group">
                <label for="productName">Year of publishing</label>
                <input type="month" class="form-control" id="yearpublish" name="yearpublish" required>
            </div>
            <div class="form-group">
                <label for="image">Book Image URL</label>
                <input type="url" class="form-control" id="url" name="book_url" required>
            </div>

            <div class="form-group">
                <label for="category">Book Category</label>
                <select class="form-control" id="category" name="category" required>
                    <option disabled selected value="">Select</option>
                    <option value="phd">PHD</option>
                    <option value="ug">Under Graduate</option>
                    <option value="school">School</option>
                    <option value="comp">Competitive</option>
                    <option value="others">Others</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success" name="bookboard">Submit</button>
        </form>
    </div>

    <?php include ('footer.php'); ?>
</body>

</html>