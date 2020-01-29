<!DOCTYPE html>
<html lang="en">

<head>
    <meta property="og:site_name" content="Blog | Legacy House Title">
    <meta property="og:title" content="Blog | Legacy House Title">
    <meta property="og:url" content="https://legacyhousetitle.com/blog">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://legacyhousetitle.com/images/LH%20Title%20Vertical%20-%20Black/LH%20Title%20Vertical%20-%20Black.jpg">
    <meta property="og:image:width" content="3516">
    <meta property="og:image:height" content="3516">
    <meta itemprop="name" content="Legacy House Title">
    <meta itemprop="url" content="https://www.legacyhousetitle.com/blog">
    <meta name="twitter:title" content="Blog | Legacy House Title">
    <meta name="twitter:url" content="https://www.legacyhousetitle.com/blog">
    <meta name="twitter:card" content="summary">
    <meta name="description" content="Legacy House Title Blog">
    <link rel="shortcut icon" type="image/x-icon" href="images/LH/LH%20-%20Black.png">
    <link rel="canonical" href="https://www.legacyhousetitle.com/blog">
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
    <title>Blog | Legacy House Title</title>
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
    
    <div class="posts">
        <?php

        function OpenCon() {
            $dbhost = "localhost";
            $dbuser = "xzedc5gissli";
            $dbpass = "Summer21!";

            $db = "phptest";
            $url = $_SERVER['QUERY_STRING'];
            error_log($url);
            $response;

            $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die ("Connect failed: %s\n". $conn -> error);
            if ($conn->connect_errno) {
                $response = 'fail';
            } else {
                $response = 'success';
                $sql = 'SELECT Author, Content, Date, Category, Image, URL, Title FROM myTest WHERE URL = "'.$url.'"';
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        error_log($row["Image"]);
                    echo "<div class='card col'><a href='https://www.legacyhousetitle.com/blog?".$row["URL"]."'><img src='". $row["Image"]."'></a><div class='article-content-wrap'><div class='post-header'><h2 class='title'><a href='https://www.legacyhousetitle.com/blog-post.php?".$row["URL"]."'>".$row["Title"]."</a></h2><span class='meta-author'><a href='https://www.legacyhousetitle.com/author.php?".$row["Author"]."'>".$row["Author"]."</a></span></div></div></div>";
                    }
                } else {
                    echo "<h2>0 results</h2>";
                }
            }
            return $response;
        }

        function CloseCon($conn) {
            $conn -> close();
        }

        $connection = OpenCon();

        ?>
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