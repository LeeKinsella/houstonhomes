<!DOCTYPE html>
<html lang="en">

<head>
    <meta property="og:site_name" content="Contact | Legacy House Title">
    <meta property="og:title" content="Contact | Legacy House Title">
    <meta property="og:url" content="https://legacyhousetitle.com/contact.html">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://legacyhousetitle.com/images/LH%20Title%20Vertical%20-%20Black/LH%20Title%20Vertical%20-%20Black.jpg">
    <meta property="og:image:width" content="3516">
    <meta property="og:image:height" content="3516">
    <meta itemprop="name" content="Legacy House Title">
    <meta itemprop="url" content="https://www.legacyhousetitle.com/contact.html">
    <meta name="twitter:title" content="Contact | Legacy House Title">
    <meta name="twitter:url" content="https://www.legacyhousetitle.com/contact.html">
    <meta name="twitter:card" content="summary">
    <meta name="description" content="Contact | Legacy House Title">
    <link rel="shortcut icon" type="image/x-icon" href="images/LH/LH%20-%20Black.png">
    <link rel="canonical" href="https://www.legacyhousetitle.com/contact.html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/tkt1igk.css" crossorigin="anonymous">
    <link href="css/site.less" type="text/css" rel="stylesheet/less" media="screen,projection" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b3561d853c.js" crossorigin="anonymous"></script>
<!--    <link rel="stylesheet" href="https://i.icomoon.io/public/temp/12b75888b0/LegacyHouseTitle/style.css">-->
    <script src="js/jquery-3.4.1.slim.min.js" type="text/javascript"></script>
    <script async src="js/less.min.js" type="text/javascript" crossorigin="anonymous"></script>
    <script async src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="js/init.js" type="text/javascript" defer></script>
    <script async src="https://connect.qualia.com/quote-widget/scripts/init" id="qualia-quote-widget-loader" data-token="3BXAwKdNrCdimuxzE" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback" async defer></script>
    <script>
    var onloadCallback = function() {
        grecaptcha.execute();
    };

    function setResponse(response) { 
        document.getElementById('captcha-response').value = response; 
    }
    </script>
    <title>Contact | Legacy House Title</title>
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
            <a class="navbar-brand" href="home.html"><img src="images/LH Title Horizontal - White/LH%20Title%20Horizontal%20-%20White.png" alt="Logo"></a>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation" aria-controls="main-navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main-navigation">
                <div class="navbar-nav">
                    <a class="nav-link active" href="home.html">Home<span class="sr-only"> (current)</span></a>
                    <a class="nav-link" href="#">Testimonials</a>
                    <a class="nav-link" href="blog.php">Blog</a>
                    <a class="nav-link" href="#">Contact</a>
                    <a class="nav-link" id="searchbox"><i class="fas fa-search"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <div class="jumbotron contact">
        <div class="background"></div>
        <div class="overlay"></div>
        <div class="promo container">
            <div class="col-8">
                <h3 class="display-3 font-weight-bold">Contact</h3>
                <h6>Don't hesitate to reach out!</h6>
            </div>
        </div>
    </div>
    
    <div class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 mb-5 mb-sm-0">
                    <div class="card">
                        <h3>Phone</h3>
                        <p><a href="tel:2405496960">240.549.6960</a></p>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="card">
                        <h3>Email</h3>
                        <p><a href="mailto:info@legacyhousetitle.com">info@legacyhousetitle.com</a></p>
                    </div>
                </div>
            </div>
            <h2>Contact Us</h2>
            <form action="" method="post">
                <p>Your Name (required)</p> <input type="text" name="name" required>
                <p>Your Email (required)</p> <input type="text" name="email" required>
                <p>Subject</p> <input type="text" name="subject">
                <p>Your Message</p><textarea name="message" rows="10" cols="40"></textarea><br />
                
                <input type="hidden" id="captcha-response" name="captcha-response" />
                <div class="form-bottom">
                    <div class="buttons">
                        <input class="mr-sm-5" type="submit" name="submit" value="Submit">
                        <input type="reset" name="reset" value="Clear">
                    </div>
                    <!-- Google reCAPTCHA widget -->
                    <div class="g-recaptcha" data-sitekey="6LfcUdQUAAAAAN8v0kGeUbpj8KeCkOiva08TgY9k" data-badge="inline" data-size="invisible" data-callback="setResponse"></div>
                </div>
            </form>
        </div>
    </div>
    
    <?php
    $secretKey = "6LfcUdQUAAAAAALmswBPdSQe7TNL0Fb5GsUq7clR";
    $statusMsg = "";

    if (isset($_POST['submit'])) {
        error_log('here');
        error_log($_POST['captcha-response']);
        if (isset($_POST['captcha-response']) && !empty($_POST['captcha-response'])) {
            error_log('success');
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['captcha-response']);
            $responseData = json_decode($verifyResponse);
            error_log($verifyResponse);
            if ($responseData->success) {
            error_log('success again!');
                $name = $_POST['name'];
                $email = $_POST['email'];
                $subject = $_POST['subject'];
                $message = $_POST['message'];
                $formcontent="From: $name \n Message: $message";
                $recipient = "info@legacyhousetitle.com";
                $subject = "Contact Form";
                $mailheader = "From: $email \r\n";
                mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
                $statusMsg = "Your contact request has submitted successfully.";
            } else {
                $statusMsg = "Robot verification failed, please try again.";
            }
        } else {
            $statusMsg = "Robot verification failed, please try again.";
        }
    }
    ?>


    <footer class="page-footer">
        <div class="footer-container">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 mb-5 mb-md-0">
                        <img src="images/LH Title Horizontal - White/LH%20Title%20Horizontal%20-%20White.png" alt="Footer logo">
                        <p>&copy; Legacy House Title Company</p>
                        <p>5100 Buckeystown Pike, Suite 250, Frederick, MD 21704</p>
                        <p><a href="tel:240-549-6960">240.549.6960</a></p>
                        <p>&reg; All rights reserved | Sitemap | Privacy Policy</p>
                    </div>
                    <div class="col-12 col-md-6">
                        <h6 class="font-weight-bold">Quick links</h6>
                        <ul class="menu">
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="blog.php">Blog</a></li>
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
