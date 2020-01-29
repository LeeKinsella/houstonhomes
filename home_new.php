<?php

function OpenCon() {
    $dbhost = "localhost";
    $dbuser = "xzedc5gissli";
    $dbpass = "Summer21!";
    
    $db = "phptest";
    $response;
    
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die ("Connect failed: %s\n". $conn -> error);
    if ($conn->connect_errno) {
        $response = 'fail';
    } else {
        $response = 'success';
        $sql = "SELECT Author, Content, Date, Category FROM myTest";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "Author: " . $row["Author"]. " - Content: " . $row["Content"]. " - Date: " . $row["Date"]. " - Category: " . $row["Category"]. "<br>";
            }
        } else {
            echo "0 results";
        }
    }
    return $response;
}

function CloseCon($conn) {
    $conn -> close();
}

$connection = OpenCon();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta property="og:site_name" content="Legacy House Title">
    <meta property="og:title" content="Legacy House Title">
    <meta property="og:url" content="https://legacyhousetitle.com">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://legacyhousetitle.com/images/LH%20Title%20Vertical%20-%20Black/LH%20Title%20Vertical%20-%20Black.jpg">
    <meta property="og:image:width" content="3516">
    <meta property="og:image:height" content="3516">
    <meta itemprop="name" content="Legacy House Title">
    <meta itemprop="url" content="https://www.legacyhousetitle.com">
    <meta name="twitter:title" content="Legacy House Title">
    <meta name="twitter:url" content="https://www.legacyhousetitle.com">
    <meta name="twitter:card" content="summary">
    <meta name="description" content="Legacy House Title">
    <link rel="shortcut icon" type="image/x-icon" href="images/LH/LH%20-%20Black.png">
    <link rel="canonical" href="https://www.legacyhousetitle.com">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/tkt1igk.css" crossorigin="anonymous">
    <link href="css/site.less" type="text/css" rel="stylesheet/less" media="screen,projection" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b3561d853c.js" crossorigin="anonymous"></script>
    <script src="js/jquery-3.4.1.slim.min.js" type="text/javascript"></script>
    <script async src="js/less.min.js" type="text/javascript" crossorigin="anonymous"></script>
    <script async src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="js/init.js" type="text/javascript" defer></script>
    <script async src="https://connect.qualia.com/quote-widget/scripts/init" id="qualia-quote-widget-loader" data-token="3BXAwKdNrCdimuxzE" crossorigin="anonymous"></script>
    <title>Legacy House Title</title>
</head>

<body>
    <nav class="navbar navbar-expand-md sticky-top">
        <div class="search-container">
            <div class="container" id="search-box">
                <form action="https://www.legacyhousetitle.com/" method="GET">
                    <input type="text" name="s" id="s" placeholder="Start Typing..." class="ui-autocomplete-input" autocomplete="off">
                </form>
                <i class="search-close fas fa-times"></i>
            </div>
        </div>
        <div class="header-container d-flex flex-row justify-content-between active">
            <a class="navbar-brand" href="#"><img src="images/LH Title Horizontal - White/LH%20Title%20Horizontal%20-%20White.png" alt="Logo"></a>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation" aria-controls="main-navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main-navigation">
                <div class="navbar-nav">
                    <a class="nav-link active" href="#">Home<span class="sr-only"> (current)</span></a>
                    <a class="nav-link" href="#">Testimonials</a>
                    <a class="nav-link" href="#">Blog</a>
                    <a class="nav-link" href="#">Contact</a>
                    <a class="nav-link" id="searchbox"><i class="fas fa-search"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <?php
    echo "hello world!<br>";
    ?>
    <div class="jumbotron">
        <div class="overlay"></div>
        <div class="promo container">
            <div class="col-8">
                <h3 class="display-3 font-weight-bold">Your legacy</h3>
                <h3 class="display-3 font-weight-bold">starts with us</h3>
                <h6>Let our first class service start your Legacy off right.</h6>
                <button type="button" class="btn btn-primary btn-lg font-weight-bold get-qualia-quote">Get started today!</button>
            </div>
        </div>
    </div>

    <div class="cards pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 mb-5 mb-sm-0">
                    <h2 class="font-weight-bold">Buyers & Sellers</h2>
                    <button type="button" class="btn btn-primary btn-sm font-weight-bold get-qualia-quote">Get an estimate today!</button>
                </div>
                <div class="col-12 col-sm-6">
                    <h2 class="font-weight-bold">Agents & Lenders</h2>
                    <button type="button" class="btn btn-primary btn-sm font-weight-bold get-qualia-quote">Learn how we can help</button>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonials">
        <div class="container">
            <div id="testimonialsCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-4">
                                <div class="card">
                                    <div class="wpbr-review wpbr-review-17089 wpbr-theme-google-places js-wpbr-review" data-wpbr-rating="5">
                                        <div class="wpbr-review__header">
                                            <div class="wpbr-review__reviewer-image"><img src="https://lh4.ggpht.com/-Ln8angz9Y9o/AAAAAAAAAAI/AAAAAAAAAAA/QacE6VbunTg/s128-c0x00000000-cc-rp-mo/photo.jpg" alt=""></div>
                                            <div class="wpbr-review__details">
                                                <i class="wpbr-review__platform-icon"></i>
                                                <h3 class="wpbr-review__reviewer-name">Gonzalo R</h3>
                                                <span class="wpbr-review__rating"><span class="wpbr-stars wpbr-stars--5" aria-label="Rated 5"></span></span>


                                                <span class="wpbr-review__timestamp">
                                                    November 14, 2019
                                                    via Google
                                                </span>

                                            </div>
                                        </div>
                                        <div class="wpbr-review__content">
                                            <p>Agents are very personable and easy to work with. Jamie Banks did a great job of answering all my questions and preparing my closing... <a class="wpbr-review__omission" href="https://www.google.com/maps/contrib/112190627641155559570/place/ChIJZYOxKpfJt4kR0V17kVYs4SQ" target="_blank" rel="noopener noreferrer">Read more</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card">
                                    <h1>TEST 2</h1>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card">
                                    <h1>TEST 3</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item row">
                        <div class="card"></div>
                        <div class="card"></div>
                        <div class="card"></div>
                    </div>
                    <div class="carousel-item row">
                        <div class="card"></div>
                        <div class="card"></div>
                        <div class="card"></div>
                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#testimonialsCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#testimonialsCarousel" data-slide-to="1"></li>
                    <li data-target="#testimonialsCarousel" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </div>

    <footer class="page-footer">
        <div class="footer-container">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 mb-5 mb-md-0">
                        <img src="images/LH Title Horizontal - White/LH%20Title%20Horizontal%20-%20White.png" alt="Footer logo">
                        <p>&copy; Legacy House Title Company</p>
                        <p>3636 16th Street NW, Apt B624, Washington, D.C.</p>
                        <p>20010 | 443.603.2701</p>
                        <p>&reg; All rights reserved | Sitemap | Privacy Policy</p>
                    </div>
                    <div class="col-12 col-md-6">
                        <h6 class="font-weight-bold">Quick links</h6>
                        <ul class="menu">
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container d-flex flex-row justify-content-between">
                <p>&copy; Legacy Title Company. All rights reserved.</p>
                <div class="contact-icons">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

    </footer>

</body>

</html>