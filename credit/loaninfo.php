<?php
session_start();
include_once 'includes/dbconnect.php';
$id = addslashes($_SESSION['usr_id']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Credit.com - Credit Company </title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-flex justify-content-between">
                        <!-- Logo Area -->
                        <div class="logo">
                            <a><img src="img/core-img/logo.png" alt=""></a>
                        </div>

                        <!-- Top Contact Info -->
                        <div class="top-contact-info d-flex align-items-center">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="25 th Street Avenue, Karachi, PAK"><img src="img/core-img/placeholder.png" alt=""> <span>25 th Street Avenue, Karachi, PAK</span></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="info@credit.com"><img src="img/core-img/message.png" alt=""> <span>info@credit.com</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="credit-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="creditNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <!-- <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="services.html">Services</a>
                                        <div class="dropdown">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">Portfolio 1</a></li>
                                                <li><a href="#">Portfolio 2</a></li>
                                                <li><a href="#">Portfolio 3</a></li>
                                            </ul>
                                        </li>
                                    <li><a href="post.html">Blog</a></li> -->
                                    <li><a href="contact.html">Contact</a></li>
                                    <!-- <li><a href="login.html">Login</a></li> -->
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Contact -->
                        <div class="contact">
                            <!-- <a href="#"><img src="img/core-img/call2.png" alt=""> +92123456789 </a> -->
                            <?php if (isset($_SESSION['usr_id']))  ?>
				            <li><a href="logout.php">Log Out</a></li>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/13.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Dashboard</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">DashBoard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Elements Area Start ##### -->
    <section class="elements-area section-padding-100-0">
       

                <!-- ========== Web Icons ========== -->
                <div class="col-12">
                    <div class="elements-title mb-30">
                        <div class="line"></div>
                        <h2>User DashBoard</h2>
                    </div>
                </div>
                
                <div class="col-12 mb-70">
                    <div class="row">
                        
                        
                          
                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="single-icons mb-30">
                                    <i class="icon-diamond"></i>
                                    <a href="loaninfo.php"><span>Loan Info</span></a>
                                    
                                </div>
                            </div>
                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        
                            
                        
                            <div class="container">
                            <div class="container">
                            <article class="row">
		<section class="col-lg-8">
			<div class="page-header">
				<h2>Loan info</h2>
			</div>
				<table class="table table-bordered">
				   		<thead>
				   			<th>Loan type</th>
				   			<th>Loan Amount</th>
				   			<th>Customer ID</th>
				   			<th>Interest</th>
				   			<th>Issued Date</th>

				   			</thead>
	<?php
	
		$in_sql = "SELECT * FROM accounts WHERE customerid = $id";
		$ru_sql = mysqli_query($con, $in_sql);

		$rows = mysqli_fetch_array($ru_sql);
		$accno = $rows['accno'];

		$ins_sql = "SELECT * FROM loan WHERE loanid = '$accno'";
		$run_sql = mysqli_query($con, $ins_sql);
		while($rows = mysqli_fetch_array($run_sql)){

			echo '

				<tbody>
					      <tr>
					        <td>'.$rows['loantype'].'</td>
					        <td>'.$rows['loanamount'].'</td>
					        <td>'.$rows['customerid'].'</td>
					        <td>'.$rows['interest'].'</td>
					        <td>'.$rows['startdate'].'</td>
					      </tr>
					    </tbody>
				
			';

		}
	?>
    </table>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            
                            <i class="icon-purse"></i>
                         <a href="customer.php"> <span>Dash Board</span></a>  
                        </div>

</section></article></div>
		
		
    
    
                    
                        
                        
            
                    </div>
                </div>
                
            </div>
        </div>
        
                    
                  
    </section>
    <!-- ##### Elements Area End ##### -->

    <!-- ##### Newsletter Area Start ###### -->
    <section class="newsletter-area section-padding-100 bg-img jarallax" style="background-image: url(img/bg-img/6.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-lg-8">
                    <div class="nl-content text-center">
                        <h2>Subscribe to our newsletter</h2>
                        <form action="#" method="post">
                            <input type="email" name="nl-email" id="nlemail" placeholder="Your e-mail">
                            <button type="submit">Subscribe</button>
                        </form>
                        <p>Curabitur elit turpis, maximus quis ullamcorper sed, maximus eu neque. Cras ultrices erat nec auctor blandit.</p>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <!-- ##### Newsletter Area End ###### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0">
        <div class="container">
            <div class="row">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title">About Us</h5>
                        <!-- Nav -->
                        <nav>
                            <ul>
                                <li><a href="#">Homepage</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Services &amp; Offers</a></li>
                                <li><a href="#">Portfolio Presentation</a></li>
                                <li><a href="#">The News</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title">Solutions</h5>
                        <!-- Nav -->
                        <nav>
                            <ul>
                                <li><a href="#">Our Loans</a></li>
                                <li><a href="#">Trading &amp; Commerce</a></li>
                                <li><a href="#">Banking &amp; Private Equity</a></li>
                                <li><a href="#">Industrial &amp; Factory</a></li>
                                <li><a href="#">Financial Solutions</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title">Latest News</h5>

                        <!-- Single News Area -->
                        <div class="single-latest-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <img src="img/bg-img/7.jpg" alt="">
                            </div>
                            <div class="news-content">
                                <a href="#">How to get the best loan?</a>
                                <div class="news-meta">
                                    <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane Smith</a>
                                    <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April 26</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-latest-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <img src="img/bg-img/8.jpg" alt="">
                            </div>
                            <div class="news-content">
                                <a href="#">A new way to get a loan</a>
                                <div class="news-meta">
                                    <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane Smith</a>
                                    <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April 26</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-latest-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <img src="img/bg-img/9.jpg" alt="">
                            </div>
                            <div class="news-content">
                                <a href="#">Finance you home</a>
                                <div class="news-meta">
                                    <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane Smith</a>
                                    <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April 26</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copywrite-content d-flex flex-wrap justify-content-between align-items-center">
                            <!-- Footer Logo -->
                            <a href="index.html" class="footer-logo"><img src="img/core-img/logo.png" alt=""></a>

                            <!-- Copywrite Text -->
                            <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->
    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>