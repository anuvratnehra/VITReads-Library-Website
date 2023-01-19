<?php
session_start();
if (isset($_SESSION['login'])) {
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Blog - Periyar EVR Central Library</title>

    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
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
                    <h2 class="text-center">Welcome <?php echo $fname . " " . $lname . " - "; ?> <a
                            href="logout.php">Logout</a>
                    </h2>
                    <hr />
                    <h2 class="intro-text text-center">
                        <strong>blog</strong>
                    </h2>
                    <hr />
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full div-rounded" src="img/slide-1.jpg" alt="" />
                    <h2>
                        Post Title
                        <br />
                        <small>Date</small>
                    </h2>
                    <p>
                        Lid est laborum dolo rumes fugats untras. Etharums ser quidem
                        rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums
                        unsers sadips amets. Sed ut perspiciatis unde omnis iste natus
                        error sit voluptatem accusantium doloremque laudantium, totam rem
                        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                        architecto beatae vitae dicta sunt explicabo.
                    </p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Read
                        More</button>
                    <hr />
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full div-rounded" src="img/slide-2.jpg" alt="" />
                    <h2>
                        Post Title
                        <br />
                        <small>Date</small>
                    </h2>
                    <p>
                        Lid est laborum dolo rumes fugats untras. Etharums ser quidem
                        rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums
                        unsers sadips amets. Sed ut perspiciatis unde omnis iste natus
                        error sit voluptatem accusantium doloremque laudantium, totam rem
                        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                        architecto beatae vitae dicta sunt explicabo.
                    </p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Read
                        More</button>
                    <hr />
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full div-rounded" src="img/slide-3.jpg" alt="" />
                    <h2>
                        Post Title
                        <br />
                        <small>Date</small>
                    </h2>
                    <p>
                        Lid est laborum dolo rumes fugats untras. Etharums ser quidem
                        rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums
                        unsers sadips amets. Sed ut perspiciatis unde omnis iste natus
                        error sit voluptatem accusantium doloremque laudantium, totam rem
                        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                        architecto beatae vitae dicta sunt explicabo.
                    </p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal3">Read
                        More</button>
                    <hr />
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a></li>
                        <li class="next"><a href="#">Newer &rarr;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 1 -->
    <div id="myModal" class="modal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">POST TITLE</h4>
                </div>
                <div class="modal-body">
                    <p>SAMPLE TEXT</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal 2 -->
    <div id="myModal2" class="modal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">POST TITLE</h4>
                </div>
                <div class="modal-body">
                    <p>Sample text</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Modal 3 -->
    <div id="myModal3" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">POST TITLE</h4>
                </div>
                <div class="modal-body">
                    <p>Sample Text</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div> -->

    <footer>
        <div class="container">
            <div class="row" style="border-radius: 12px">
                <div class="col-lg-12 text-center" style="border-radius: 12px">
                    <p>Copyright &copy; 2022</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>
<?php
} else {
    header("location:login.php");
}
?>