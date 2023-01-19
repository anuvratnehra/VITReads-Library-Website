<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Register - Periyar EVR Central Library</title>

    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
    <!-- jQuery -->
    <script src="js/jquery-1.10.2.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {

        $("#register").click(function() {

            fname = $("#fname").val();
            lname = $("#lname").val();
            email = $("#email").val();
            password = $("#password").val();

            $.ajax({
                type: "POST",
                url: "adduser.php",
                data: "fname=" + fname + "&lname=" + lname + "&email=" + email + "&password=" +
                    password,
                success: function(html) {
                    if (html == 'true') {

                        $("#add_err2").html('<div class="alert alert-success"> \
                                                 <strong>Account</strong> processed. \ \
                                                 </div>');

                        window.location.href = "index.php";

                    } else if (html == 'false') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> already in system. \ \
                                                 </div>');

                    } else if (html == 'fname') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> is required. \ \
                                                 </div>');

                    } else if (html == 'lname') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Last Name</strong> is required. \ \
                                                 </div>');

                    } else if (html == 'eshort') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> is required. \ \
                                                 </div>');

                    } else if (html == 'eformat') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> format is not valid. \ \
                                                 </div>');

                    } else if (html == 'pshort') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Password</strong> must be at least 4 characters . \ \
                                                 </div>');

                    } else {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Error</strong> processing request. Please try again. \ \
                                                 </div>');
                    }
                },
                beforeSend: function() {
                    $("#add_err2").html("loading...");
                }
            });
            return false;
        });
    });
    </script>
</head>

<body>
    <div class="bg-image"></div>
    <div class="brand">Periyar EVR Central Library</div>
    <div class="address-bar">
        Vellore Institute of Technology (VIT) | Vellore | Tamil Nadu | India |
        632014
    </div>
    <?php require_once 'nav.php'; ?>
    <div class="container">


        <div class="row">
            <div class="box div-rounded">
                <div class="col-lg-12">
                    <hr />
                    <h2 class="intro-text text-center">
                        <strong>Register</strong>
                    </h2>
                    <hr />
                    <div id="add_err2"></div>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>First Name</label>
                                <input type="text" id="fname" name="name" maxlength="25" class="form-control" />
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Last Name</label>
                                <input type="text" id="lname" name="lname" maxlength="25" class="form-control" />
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" id="email" name="email" maxlength="50" class="form-control" />
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Password</label>
                                <input type="password" id="password" name="password" maxlength="10"
                                    class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" class="btn btn-default" id="register">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container rounded">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; 2022</p>
                </div>
            </div>
        </div>
    </footer>


    <script src="js/bootstrap.js"></script>
</body>

</html>