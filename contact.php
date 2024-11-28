<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Teh Sosro</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout inner_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <div class="header">
            <div class="container-fluid">
               <div class="row d_flex">
                  <div class=" col-md-2 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.php"><img src="images/logo2.png" alt="#"/></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-8 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item ">
                                 <a class="nav-link" href="index.php">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.php">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="shop.php">shop</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="dashboard2.php">Dashboard</a>
                              </li>
                              <li class="nav-item active">
                                 <a class="nav-link" href="contact.php">Contact Us</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
                  <div class="col-md-2">
                     <ul class="email text_align_right">
                        <li class="d_none"><a href="login (2).php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                        <li class="d_none"> <a href="https://www.google.com/"><i class="fa fa-search" style="cursor: pointer;" aria-hidden="true"></i></a> </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
      </header>

       <!-- contact -->
      <div class="contact">
         <div class="container">
            <div class="row">
                  <div class="col-md-12">
                     <div class="titlepage text_align_center">
                        <h2>Contact Us</h2>
                     </div>
                  </div>
                  <div class="col-md-10 offset-md-1">
                     <form id="request" class="main_form" action="proses_contact.php" method="POST">
                        <div class="row">
                              <div class="col-md-6">
                                 <input class="contactus" placeholder="Full Name" type="text" name="full_name" required>
                              </div>
                              <div class="col-md-6">
                                 <input class="contactus" placeholder="Email" type="email" name="email" required>
                              </div>
                              <div class="col-md-6">
                                 <input class="contactus" placeholder="Phone Number" type="text" name="phone_number" required>
                              </div>
                              <div class="col-md-6">
                                 <textarea class="textarea" placeholder="Message" name="message" required></textarea>
                              </div>
                              <div class="col-md-12">
                                 <button type="submit" class="send_btn">Send</button>
                              </div>
                        </div>
                     </form>
                  </div>
            </div>
         </div>
      </div>
      <!-- contact -->

     <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-3 col-sm-6">
                     <div class="infoma text_align_left">
                           <h3>About</h3>
                           <p class="ipsum">Teh Botol Sosro, sejak 1969, adalah minuman teh siap saji yang menyegarkan, terbuat dari daun teh berkualitas tinggi, hadir untuk menemani setiap momen Anda. </p>
                           <ul class="social_icon">
                              <li><a href="https://web.facebook.com/tehbotolsosroID/?locale=id_ID&_rdc=1&_rdr"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="https://x.com/tehbotolsosroID?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="https://id.linkedin.com/company/pt.-sinar-sosro"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                              <li><a href="https://www.instagram.com/tehbotolsosroid/?hl=id"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  <div class="col-md-3 col-sm-6">
                     <div class="infoma">
                        <h3>Adderess</h3>
                        <ul class="conta">
                           <li>Gedung Graha Sosro, Jl. Raya Sultan Agung KM 28, Kel. Medan Satria, Bekasi, Jawa Barat 17132​(
                              PT. Sinar Sosro
                              ). <br> 
                           </li>
                           <li> (021) 8241 5545<br></li>
                           <li> <a href="Javascript:void(0)"> Tehbotolsosro@gmail.com</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-3 pad_lrft col-sm-6">
                     <div class="infoma">
                        <h3>Links</h3>
                        <ul class="fullink">
                           <li><a href="index.php">Home</a></li>
                           <li><a href="about.php">About</a></li>
                           <li><a href="shop.php">Shop</a></li>
                           <li><a href="contact.php">Contact</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <div class="infoma">
                        <h3>Newsletter</h3>
                        <form class="form_subscri" action="proses_newsletter.php" method="POST">
                              <div class="row">
                                 <div class="col-md-12">
                                    <input class="newsl" placeholder="Your Name" type="text" name="your_name" required>
                                 </div>
                                 <div class="col-md-12">
                                    <input class="newsl" placeholder="Email" type="email" name="email" required>
                                 </div>
                                 <div class="col-md-12">
                                    <button type="submit" class="subsci_btn">Subscribe</button>
                                 </div>
                              </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2020 All Rights Reserved</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/custom.js"></script>
   </body>
</html>