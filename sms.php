<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>PHP Send SMS</h1>
        <form method="post" action="phpsendsms.php">
            <div class="form-group">
                <label for="phoneno">Mobile Number</label>
                <input type="text" name="phoneno" class="form-control" placeholder="Enter Phone Number">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea3">Enter Text Message</label>
                <textarea class="form-control" name="smstext" rows="7"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary" value="Send Message" id="submitBtn">
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function () {
            $('#submitBtn').click(function (e) {
                e.preventDefault();
                $('#successModal').modal('show');
            });
        });
    </script>

    <!-- Modal for success message -->
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="successModalLabel">Success</h4>
                </div>
                <div class="modal-body">
                    SMS sent successfully!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>