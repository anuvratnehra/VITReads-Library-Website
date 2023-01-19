<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Login - Periyar EVR Central Library</title>

    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
    <!-- jQuery -->
    <script src="js/jquery-1.10.2.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {

        $("#login").click(function() {

            email = $("#email").val();
            password = $("#password").val();
            $.ajax({
                type: "POST",
                url: "pcheck.php",
                data: "email=" + email + "&password=" + password,
                success: function(html) {
                    if (html == 'true') {

                        $("#add_err2").html('<div class="alert alert-success"> \
													<strong>Authenticated</strong> \ \
												</div>');

                        window.location.href = "blog.php";

                    } else if (html == 'false') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
													<strong>Authentication</strong> failure. \ \
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
                    <div class="alert alert-danger"><strong>You must be logged in to view the blog.</strong></div>
                    <hr />
                    <h2 class="intro-text text-center">
                        <strong>Login</strong>
                    </h2>
                    <hr />
                    <div id="add_err2"></div>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" id="email" name="email" maxlength="50" class="form-control" />
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Password</label>
                                <input type="password" id="password" name="password" maxlength="10"
                                    class="form-control">
                            </div><br>
                            <div class="form-group col-lg-12">
                                <button type="submit" class="btn btn-default" id="login">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="form-group col-lg-6">
                    <a href="register.php"><button class="btn btn-default">New
                            Registration</button></a>
                </div>
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