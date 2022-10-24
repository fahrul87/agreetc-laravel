<!DOCTYPE html>
<html lang="en">
<link rel="icon" type="images/jpg" href="images/logoagritc.jpg">

<head>
    <title>AgriTC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Agri Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- bootstrap-css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--// bootstrap-css -->
    <!-- css -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!--// css -->
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- font -->
    <link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300'
        rel='stylesheet' type='text/css'>
    <!-- //font -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- light-box -->
    <link rel="stylesheet" href="css/lightbox.css">
    <!-- //light-box -->
    <script src="js/SmoothScroll.min.js"></script>
</head>

<body>
    @include('partials.navbar')


    @yield('content')

    <div class="contact" id="contact">
        <div class="container">
            <div class="services-heading">
                <h3>Contact Us</h3>
                <div class="border border2"> </div>
            </div>
            <div class="address">
                <div class="col-sm-4 address-grids">
                    <h4>Address :</h4>
                    <p>AgriTC<br>
                        <span>Jalan Bung Hatta 25,</span>
                        Mataram NTB
                    </p>
                </div>
                <div class="col-sm-4 address-grids">
                    <h4>Phone :</h4>
                    <p>+2 123 456 789</p>
                    <p>+2 987 654 321</p>
                </div>
                <div class="col-sm-4 address-grids">
                    <h4>Email :</h4>
                    <p><a href="mailto:example@agritc.com">mail@agritc.com</a></p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!-- <div class="contact-form">
    <h4>Contact Form</h4>
    <form action="#" method="post">
     <div class="fields-grid">
      <div class="styled-input agile-styled-input-top">
       <input type="text" name="Full Name" required="">
       <label>Full Name</label>
       <span></span>
      </div>
      <div class="styled-input agile-styled-input-top">
       <input type="text" name="Phone" required=""> 
       <label>Phone</label>
       <span></span>
      </div>
      <div class="styled-input">
       <input type="text" name="Email" required=""> 
       <label>Email</label>
       <span></span>
      </div> 
      <div class="styled-input">
       <input type="text" name="Subject" required="">
       <label>Subject</label>
       <span></span>
      </div>
      <div class="clearfix"> </div>
     </div>
     <div class="styled-input textarea-grid">
      <textarea name="Message" required=""></textarea>
      <label>Message</label>
      <span></span>
     </div>	 
     <input type="submit" value="SEND">
    </form>
   </div> -->
        </div>
    </div>
    <!-- //contact -->
    <!-- newsletter -->
    <!-- <div class="newsletter">
  <div class="container">
   <div class="col-sm-6 newsletter-left">
    <h5>Subscribe to our email newsletter to receive updates</h5>
   </div>
   <div class="col-sm-6 newsletter-right">
    <form action="#" method="post">
     <input type="text" placeholder="Subscribe" name="Subscribe" required="">
     <button class="btn1"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
    </form>
   </div>
   <div class="clearfix"> </div>
  </div>
 </div> -->
    <!-- //newsletter -->
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="agile-footer-grids">
                <div class="col-md-4 agile-footer-grid">
                    <center>
                        <h4>AgriTC</h4>
                    </center>
                    <center>
                        <p>Resources Management <span>Community Empowerment</span> <span>Sustainable Development</span>
                        </p>
                    </center>
                </div>
                <div class="col-md-4 agile-footer-grid">
                    <center>
                        <h4>News</h4>
                    </center>
                    <center>
                        <ul class="w3agile_footer_grid_list">
                            <li><a href="#news">News View</a></li>

                        </ul>
                    </center>
                </div>
                <div class="col-md-4 agile-footer-grid">
                    <center>
                        <h4>Menuju Pertanian Tangguh</h4>
                    </center>
                    <div class="popular-grids">
                        <div class="popular-grid">
                            <a href="#"><img src="images/9.jpg" alt=""></a>
                        </div>
                        <div class="popular-grid">
                            <a href="#"><img src="images/10.jpg" alt=""></a>
                        </div>
                        <div class="popular-grid">
                            <a href="#"><img src="images/11.jpg" alt=""></a>
                        </div>
                        <div class="popular-grid">
                            <a href="#"><img src="images/14.jpg" alt=""></a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="popular-grids">
                        <div class="popular-grid">
                            <a href="#"><img src="images/15.jpg" alt=""></a>
                        </div>
                        <div class="popular-grid">
                            <a href="#"><img src="images/16.jpg" alt=""></a>
                        </div>
                        <div class="popular-grid">
                            <a href="#"><img src="images/9.jpg" alt=""></a>
                        </div>
                        <div class="popular-grid">
                            <a href="#"><img src="images/10.jpg" alt=""></a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="copyright">
            <p>© 2020 AgriTC. All rights reserved | Design by ARAZSOFT</p>
        </div>
    </div>
    <!-- //footer -->
    <script src="js/responsiveslides.min.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });

    </script>
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });

    </script>
    <!-- //here ends scrolling icon -->
</body>

</html>
