<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Periyar EVR Central Library</title>

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
    <?php
    if (isset($_GET["logout"])) {
        if ($_GET["logout"] == "true") { ?>
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>You have been logged out of the system.</strong>
    </div>
    <?php
        }
    }
    ?>
    <?php require_once 'nav.php'; ?>
    <div class="container">
        <div class="row">
            <div class="box div-rounded">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full div-rounded" src="img/slide-1.jpg" alt="" />
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full div-rounded" src="img/slide-2.jpg" alt="" />
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full div-rounded" src="img/slide-3.jpg" alt="" />
                            </div>
                        </div>

                        <a class="left carousel-control div-rounded" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control div-rounded" href="#carousel-example-generic"
                            data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2>
                        <small>Welcome to</small>
                    </h2>
                    <h1>
                        <span class="brand-name">Periyar EVR Central Library</span>
                    </h1>
                    <hr class="tagline-divider" />
                    <h2>
                        <small><strong>VIT Vellore</strong></small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box div-rounded">
                <div class="col-lg-12">
                    <hr />
                    <h2 class="intro-text text-center">
                        Guaranteeing<strong> Access to Knowledge</strong>
                    </h2>
                    <hr />
                    <img class="rounded img-fluid img-left" src="img/intro-image.jpg" alt="" />
                    <hr class="visible-xs" />
                    <p class="text-justify">
                        As gateways to knowledge and culture, libraries play a fundamental
                        role in society. The resources and services they offer create
                        opportunities for learning, support literacy and education, and
                        help shape the new ideas and perspectives that are central to a
                        creative and innovative society. They also help ensure an
                        authentic record of knowledge created and accumulated by past
                        generations. In a world without libraries, it would be difficult
                        to advance research and human knowledge or preserve the world’s
                        cumulative knowledge and heritage for future generations.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; 2022</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
    $(".carousel").carousel({
        interval: 5000,
    });
    </script>
</body>

</html>