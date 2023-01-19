<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Contact - Periyar EVR Central Library</title>

    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
    <script src="js/jquery-1.10.2.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {

        $("#contact").click(function() {

            fname = $("#fname").val();
            email = $("#email").val();
            message = $("#message").val();

            $.ajax({
                type: "POST",
                url: "sendmsg.php",
                data: "fname=" + fname + "&email=" + email + "&message=" + message,
                success: function(html) {
                    if (html == 'true') {

                        $("#add_err2").html('<div class="alert alert-success"> \
                                                 <strong>Message Sent!</strong> \ \
                                                 </div>');

                    } else if (html == 'fname_long') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> must cannot exceed 50 characters. \ \
                                                 </div>');

                    } else if (html == 'fname_short') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> must exceed 2 characters. \ \
                                                 </div>');

                    } else if (html == 'email_long') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email</strong> must cannot exceed 50 characters. \ \
                                                 </div>');

                    } else if (html == 'email_short') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email</strong> must exceed 2 characters. \ \
                                                 </div>');

                    } else if (html == 'eformat') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email</strong> format incorrect. \ \
                                                 </div>');

                    } else if (html == 'message_long') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Message</strong> must cannot exceed 50 characters. \ \
                                                 </div>');

                    } else if (html == 'message_short') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Message</strong> must exceed 2 characters. \ \
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
                    <h2 class="intro-text text-center"><strong>Contact Us</strong></h2>
                    <hr />
                </div>
                <div class="col-md-8">
                    <iframe class="iframe-maps"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.036324234336!2d79.15465721570854!3d12.969527490857276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bad47a027dadc57%3A0xd800643e56a53e47!2sPeriyar%20Central%20Library%2C%20VIT%20University%2C%20Vellore%2C%20Tamil%20Nadu%20632014!5e0!3m2!1sen!2sin!4v1665057369770!5m2!1sen!2sin"
                        width="100%" height="400px" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <div class="col-md-4">
                    <p>Phone: <strong>04162-243091</strong></p>
                    <p>Email: <strong><a href="mailto:library@vit.ac.in">library@vit.ac.in</a></strong></p>
                    <p>
                        Address:
                        <strong>VIT, Vellore, Tamil Nadu, 632014</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box div-rounded">
                <div class="col-lg-12">
                    <hr />
                    <h2 class="intro-text text-center">
                        Contact <strong>form</strong>
                    </h2>
                    <hr />
                    <div id="add_err2"></div>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Name</label>
                                <input type="text" class="form-control" id="fname" name="fname" maxlength="25" />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" maxlength="25" />
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" rows="6" maxlength="100" id="message"
                                    name="message"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" class="btn btn-default" id="contact">Submit</button>
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