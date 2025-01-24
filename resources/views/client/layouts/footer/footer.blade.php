@section('header-link')
    <style>
        /* General Styles */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        /* Footer Styles */
        .w3l-footer {
            background-color: #1a1a1a;
            color: #fff;
            padding: 40px 0 20px;
        }

        .footer-inner-main {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer-hny-grids {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .footer-links {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .footer-links h6 {
            font-size: 18px;
            margin-bottom: 15px;
            color: #ff6f61;
            text-transform: uppercase;
        }

        .footer-links ul {
            list-style: none;
            padding: 0;
        }

        .footer-links ul li {
            margin-bottom: 10px;
        }

        .footer-links ul li a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links ul li a:hover {
            color: #ff6f61;
        }

        .subscribe {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .subscribe input[type="email"] {
            padding: 10px;
            border: 1px solid #444;
            border-radius: 5px 0 0 5px;
            background-color: #333;
            color: #fff;
            width: 70%;
            outline: none;
        }

        .subscribe button {
            padding: 10px 15px;
            border: none;
            background-color: #ff6f61;
            color: #fff;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .subscribe button:hover {
            background-color: #e65a50;
        }

        .subscribe button .fa-envelope {
            font-size: 16px;
        }

        .below-section {
            border-top: 1px solid #444;
            padding-top: 20px;
            margin-top: 40px;
        }

        .copyright-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .copyright-footer p {
            margin: 0;
            color: #ccc;
        }

        .social {
            list-style: none;
            padding: 0;
            display: flex;
            gap: 15px;
        }

        .social li a {
            color: #ccc;
            font-size: 20px;
            transition: color 0.3s ease;
        }

        .social li a:hover {
            color: #ff6f61;
        }

        /* Move to Top Button */
        #movetop {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 99;
            border: none;
            outline: none;
            background-color: #ff6f61;
            color: #fff;
            cursor: pointer;
            padding: 10px 15px;
            border-radius: 50%;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        #movetop:hover {
            background-color: #e65a50;
        }
    </style>
@endsection
<footer class="w3l-footer">
    <section class="footer-inner-main">
        <div class="footer-hny-grids py-5">
            <div class="container py-lg-4">
                <div class="text-txt">
                    <div class="right-side">
                        <div class="row footer-links">
                            <div class="col-md-3 col-sm-6 sub-two-right mt-5">
                                <h6>Movies</h6>
                                <ul>
                                    <li><a href="#"><i class="fa fa-film"></i> Movies</a></li>
                                    <li><a href="#"><i class="fa fa-video"></i> Videos</a></li>
                                    <li><a href="#"><i class="fa fa-globe"></i> English Movies</a></li>
                                    <li><a href="#"><i class="fa fa-tshirt"></i> Tailor</a></li>
                                    <li><a href="#"><i class="fa fa-calendar-alt"></i> Upcoming Movies</a>
                                    </li>
                                    <li><a href="Contact_Us.html"><i class="fa fa-envelope"></i> Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 sub-two-right mt-5">
                                <h6>Information</h6>
                                <ul>
                                    <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                                    <li><a href="about.html"><i class="fa fa-info-circle"></i> About</a></li>
                                    <li><a href="#"><i class="fa fa-tv"></i> Tv Series</a></li>
                                    <li><a href="#"><i class="fa fa-blog"></i> Blogs</a></li>
                                    <li><a href="sign_in.html"><i class="fa fa-lock"></i> Login</a></li>
                                    <li><a href="Contact_Us.html"><i class="fa fa-phone"></i> Contact</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 sub-two-right mt-5">
                                <h6>Locations</h6>
                                <ul>
                                    <li><a href="movies.html"><i class="fa fa-map-marker-alt"></i> Asia</a></li>
                                    <li><a href="movies.html"><i class="fa fa-map-marker-alt"></i> France</a></li>
                                    <li><a href="movies.html"><i class="fa fa-map-marker-alt"></i> Taiwan</a></li>
                                    <li><a href="movies.html"><i class="fa fa-map-marker-alt"></i> United
                                            States</a></li>
                                    <li><a href="movies.html"><i class="fa fa-map-marker-alt"></i> Korea</a></li>
                                    <li><a href="movies.html"><i class="fa fa-map-marker-alt"></i> United
                                            Kingdom</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 sub-two-right mt-5">
                                <h6>Newsletter</h6>
                                <form action="#" class="subscribe mb-3" method="post">
                                    <input type="email" name="email" placeholder="Your Email Address" required>
                                    <button type="submit"><i class="fa fa-envelope"></i></button>
                                </form>
                                <p>Enter your email and receive the latest news, updates, and special offers from
                                    us.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="below-section">
            <div class="container">
                <div class="copyright-footer">
                    <div class="columns text-lg-left">
                        <p>&copy; 2023 MyShowz. All rights reserved</p>
                    </div>
                    <ul class="social text-lg-right">
                        <li><a href="#facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#google"><i class="fa fa-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Move to Top Button -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            <i class="fa fa-arrow-up"></i>
        </button>
    </section>
</footer>

<script>
    // Move to Top Button Script
    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
        } else {
            document.getElementById("movetop").style.display = "none";
        }
    }

    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>