<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Eco-Scrap Exchange</title>
</head>

<body>

    <?php
    include('header.php');
    if (isset($_GET['id']) && isset($_GET['item']) && $_GET['item'] == 'booking') {
        $obj->delete($_GET['id']);
    } else if (isset($_GET['id']) && isset($_GET['item']) && $_GET['item'] == 'book') {
        $obj->deleteBook($_GET['id']);
    } else if (isset($_GET['id']) && isset($_GET['item']) && $_GET['item'] == 'purchase') {
        $obj->deletePurchase($_GET['id']);
    }
    $obj->deleteuser($_GET['user']);
    ?>
    <script>
        document.getElementById('anchor-home').href = 'admin.php';
        document.getElementById('nav-item-home').style.display = 'none';
        document.getElementById('nav-item-about').style.display = 'none';
        document.getElementById('nav-item-services').style.display = 'none';
        document.getElementById('nav-item-purchase').style.display = 'none';
        document.getElementById('nav-item-bookboard').style.display = 'none';
        document.getElementById('nav-item-contact').style.display = 'none';
    </script>


    <br><br><br>
    <div class="container-fluid" id="about">
        <center>
            <h2>Dashboard</h2>
        </center>
        <br><br>
        <div class="row">
            <?php
            if (isset($_POST['update'])) {
                $id = $_POST['id'];
                $obj->update($id);
            }

            if (isset($_POST['reject'])) {
                $id = $_POST['id'];
                $obj->reject($id);
            }
            ?>

            <div class="col-sm-12">
                <h2>User List</h2>
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                    <?php

                    $result = $obj->select();
                    foreach ($result as $value) {
                    ?>
                        <tr>
                            <td><?= $value['name']; ?></td>
                            <td><?= $value['email']; ?></td>
                            <td><?= $value['password']; ?></td>
                            <td><a href="admin.php?user=<?= $value['id']; ?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                    <?php $i++;
                    } ?>
                </table>
            </div>


            <div class="col-sm-12">
                <h2>Booking List</h2>
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Category</th>
                        <th>Address</th>
                        <th>Quantity</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    <?php

                    $results = $obj->books();
                    foreach ($results as $value) {
                    ?>
                        <tr>
                            <td><?= $value['name']; ?></td>
                            <td><?= $value['mobile']; ?></td>
                            <td><?= $value['category']; ?><?php if ($value['category'] == "Others") { ?> - <a href="<?php echo $value['url']; ?>"><?php echo $value['others_description']; ?></a><?php } ?></td>
                            <td><?= $value['address']; ?></td>
                            <td><?= $value['kg']; ?></td>
                            <td><?= $value['date']; ?></td>
                            <td>
                                <form method="POST">
                                    <input type="hidden" value="<?= $value['id']; ?>" name="id">
                                    <button class="btn btn-success" type="submit" name="update" style="display: <?php if ($value['status'] == '0' or $value['status'] == '2') {
                                                                                                                } else {
                                                                                                                    echo "none";
                                                                                                                } ?>">Approve</button>
                                    <button class="btn btn-danger" type="submit" name="reject">Reject</button>
                                    <a href="admin.php?item=booking&id=<?= $value['id']; ?>" class="btn btn-danger">Delete</a>
                                    <a href="payment.php?id=<?= $value['id']; ?>" class="btn btn-dark">Pay</a>
                                    <a href="sms.php?id=<?= $value['id']; ?>" class="btn btn-light">Message</a>
                                </form>
                            </td>
                        </tr>
                    <?php $i++;
                    } ?>
                </table>
            </div>


            <div class="col-sm-12">
                <h2>Purchase List</h2>
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Category</th>
                        <th>Address</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                    <?php

                    $results = $obj->buys();
                    foreach ($results as $value) {
                    ?>
                        <tr>
                            <td><?= $value['name']; ?></td>
                            <td><?= $value['mobile']; ?></td>
                            <td><?= $value['category']; ?></td>
                            <td><?= $value['address']; ?></td>
                            <td><?= $value['item']; ?></td>
                            <td>
                                <form method="POST">
                                    <input type="hidden" value="<?= $value['id']; ?>" name="id">
                                    <button class="btn btn-success" type="submit" name="update" style="display: <?php if ($value['status'] == '0' or $value['status'] == '2') {
                                                                                                                } else {
                                                                                                                    echo "none";
                                                                                                                } ?>">Approve</button>
                                    <button class="btn btn-danger" type="submit" name="reject">Reject</button>
                                    <a href="admin.php?item=purchase&id=<?= $value['id']; ?>" class="btn btn-danger">Delete</a>
                                    <a href="receipt.php?id=<?= $value['id']; ?>" class="btn btn-dark">Payment received</a>
                                </form>
                            </td>
                        </tr>
                    <?php $i++;
                    } ?>
                </table>
            </div>


            <div class="col-sm-12">
                <h2>BookBoard List</h2>
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Author</th>
                        <th>Year</th>
                        <th>URL</th>
                        <th>Category</th>
                    </tr>
                    <?php

                    $results = $obj->get_bookboard();
                    foreach ($results as $value) {
                    ?>
                        <tr>
                            <td><?= $value['name']; ?></td>
                            <td><?= $value['author']; ?></td>
                            <td><?= $value['year']; ?></td>
                            <td><a href="<?php echo $value['url']; ?>"><?= $value['url']; ?></a></td>
                            <td><?= $value['category']; ?></td>
                            <td>
                                <form method="POST">
                                    <a href="admin.php?item=book&id=<?= $value['book_id']; ?>" class="btn btn-danger">Delete</a>
                                </form>
                            </td>
                        </tr>
                    <?php
                    } ?>
                </table>
            </div>
        </div>
    </div>

    <style type="text/css">
        .col-sm-4 {
            padding-bottom: 10px;
        }
    </style>

    <?php include('footer.php'); ?>


</body>

</html>