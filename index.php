<!doctype html>
<html>

<head>
    <title>sparks's GRIP Bank</title>
    <?php include 'script.html';?>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    <?php include 'indexstyles.html';
    ?>
</style>

<body onload="loader()">
    <div class="bg">
        <div class="scroll">



            <div class="btn-group" style="width:100%">

                <button onclick="location.href='index.php'" style="width:25%; font-size=20px">Home</button>
                <button onclick="location.href='view.php'" style="width:25%">View</button>
                <button onclick="location.href='transaction.php'" style="width:25%">Transaction</button>
                <button onclick="location.href='#scroll'" style="width:25%"><i class="fa fa-phone" aria-hidden="true"> Contact</i></button>
                </a>
            </div>
            <main>


                <section class="middle">
                    <div class="w3-container w3-center w3-animate-left">

                        <h1 style="text-align:center; font-family:'Times New Roman', Times, serif"><strong>GRIP
                                BANK</strong></h1>
                        <h2 style="text-align:center; font-family:'Times New Roman', Times, serif">Grow with us!</h2>

                    </div>
                    <!--image slideshow-->

                    <div class="slideshow-container">

                        <div class="mySlides fade">

                            <img src="img1.webp" style="width:100%">

                        </div>

                        <div class="mySlides fade">

                            <img src="img2.jpg" style="width:100%">

                        </div>

                        <div class="mySlides fade">

                            <img src="img3.jpg" style="width:100%">

                        </div>

                    </div>
                    <br>

                    <div style="text-align:center">
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                    <script>
                        var slideIndex = 0;
                        showSlides();

                        function showSlides() {
                            var i;
                            var slides = document.getElementsByClassName("mySlides");
                            var dots = document.getElementsByClassName("dot");
                            for (i = 0; i < slides.length; i++) {
                                slides[i].style.display = "none";
                            }
                            slideIndex++;
                            if (slideIndex > slides.length) { slideIndex = 1 }
                            for (i = 0; i < dots.length; i++) {
                                dots[i].className = dots[i].className.replace(" active", "");
                            }
                            slides[slideIndex - 1].style.display = "block";
                            dots[slideIndex - 1].className += " active";
                            setTimeout(showSlides, 2000); // Change image every 2 seconds
                        }
 
                    </script>
                    <!--image slideshow-->
                </section>
            </main>
            <!--Scrolling text-->
            <div class="marquee">
                <p> GRIP Bank © 2021.This site is Designed by Tanvi Deore as part of SPARK's internship</p>
            </div>
            <!--Scrolling text-->
            <!--footer-->
            <footer id="scroll">
                <div class="footer">
                    <div class="footer-content">
                        <div class="footer-section about">
                            <center>
                                <h3 style="font-family:'Times New Roman', Times, serif">About us</h3>
                                <p>A leading Multi-State scheduled co-operative bank offering a range of financial
                                    services like personal banking, net banking & much more.</p>
                                <p>
                                    <i class="fa fa-map-marker" aria-hidden="true">
                                        GRIP Bank,Plot No. A-5, Road No.1,Green city Estate,Mulund(W) - 400501
                                    </i>
                                </p>
                                <p style="text-align:center; font-size:20px"><i class="fa fa-phone" aria-hidden="true"> 022-1234-5678</i></p>
                                <p style="text-align:center; font-size:20px"><i class="fa fa-envelope" aria-hidden="true"> mailus@bank.co.in</i></p>
                            </center>
                        </div>
                        <div class="footer-section links">
                            <center>
                                <h3 style="font-family:'Times New Roman', Times, serif">Get in touch<h3>
                                        <p><i class="fa fa-twitter" aria-hidden="true" ><a href="#"> Twitter</a></i></p>
                                        <p><i class="fa fa-instagram" aria-hidden="true"><a href="#"> Instagram</a></i></p>
                                        <p><i class="fa fa-facebook-official" aria-hidden="true"><a href="#"> Facebook</a></i></p>
                                        <p><i class="fa fa-youtube-play" aria-hidden="true"><a href="#"> YouTube</a></i></p>
                                        <p><i class="fa fa-linkedin" aria-hidden="true"><a href="#"> Linkedin</a></i></p>
                            </center>
                        </div>
                        <div class="footer-section Queries">
                            <h3 style="font-family:'Times New Roman', Times, serif">Quick Links</h3>
                            <br>
                            <center>
                                <p style="text-align:left; font-size:20px"><a href="#"><i class="fa fa-chevron-right"
                                            aria-hidden="true">Loan EMI calculator</i></a></p>
                                <p style="text-align:left; font-size:20px"><a href="#"><i class="fa fa-chevron-right"
                                            aria-hidden="true">Interest Rates</i></a></p>
                                <p style="text-align:left; font-size:20px"><a href="#"><i class="fa fa-chevron-right"
                                            aria-hidden="true">Auctions</i></a></p>
                                <p style="text-align:left; font-size:20px"><a href="#"><i class="fa fa-chevron-right"
                                            aria-hidden="true">Form Center</i></a></p>
                                <p style="text-align:left; font-size:20px"><a href="#"><i class="fa fa-chevron-right"
                                            aria-hidden="true">Holidays</i></a></p>
                                <p style="text-align:left; font-size:20px"><a href="#"><i class="fa fa-chevron-right"
                                            aria-hidden="true">Privacy Policy</i></a></p>
                            </center>
                        </div>
                        <div class="footer-section Queries">
                            <h3 style="font-family:'Times New Roman', Times, serif">Products and services</h3>
                            <br>
                            <center>
                                <p style="text-align:left; font-size:20px"><a href="#"><i class="fa fa-chevron-right"
                                            aria-hidden="true">Savings Account</i></a></p>
                                <p style="text-align:left; font-size:20px"><a href="#"><i class="fa fa-chevron-right"
                                            aria-hidden="true">Current Account</i></a></p>
                                <p style="text-align:left; font-size:20px"><a href="#"><i class="fa fa-chevron-right"
                                            aria-hidden="true">Deposits</i></a></p>
                                <p style="text-align:left; font-size:20px"><a href="#"><i class="fa fa-chevron-right"
                                            aria-hidden="true">Online Transaction</i></a></p>

                            </center>
                        </div>

                        <div class="footer-section Queries">
                            <h3 style="font-family:'Times New Roman', Times, serif">Drop your Query</h3>
                            <form action="index.html" method="post">
                                <input type="email" name="email" size="20" placehoder="Your email Address">
                                <textarea name="message" size="20" placeholder="Your Query..."></textarea>
                                <br>
                                <button type="submit" onclick="myFunction()">Submit


                                </button>
                                <h4 style="font-family:'Times New Roman', Times, serif">Toll free Number</h4>
                                <p>1800-123-123</p>
                                <h4 style="font-family:'Times New Roman', Times, serif">For Balance Enquiry</h4>
                                <p>Give Missed call:8888888888</p>

                            </form>
                        </div>
                    </div>
            </footer>
            <!--footer-->


        </div>

</body>

</html>