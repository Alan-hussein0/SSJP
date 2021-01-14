<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SSJP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: EstateAgency - v3.0.0
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Property Search Section ======= -->
  
  
  
   <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">بحث متقدم</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label class="pb-2" for="Type">الكلمة المفتاحية</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="اكتب الكلمة المفتاحية المراد البحث عنها">
            </div>
			<br>
			 <div class="form-group">
              <label class="pb-2" for="Type">كلمة من العنوان</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="بحث عن كلمة في عنوان المقالة">
            </div>
			<br>
			 <div class="form-group">
              <label class="pb-2" for="Type">الكاتب</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="اكتب اسم الكاتب للبحث">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="Type">فرز النتائج حسب</label>
              <select class="form-control form-select form-control-a" id="Type">
                <option>تاريخ النشر الحديث</option>
                <option>تاريخ النشر القديم</option>
                
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="city">اللغة</label>
              <select class="form-control form-select form-control-a" id="languages">
                <option>عربي</option>
                <option>انكليزي</option>
               
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="bedrooms">مجالات المجلة</label>
              <select class="form-control form-select form-control-a" id="bedrooms">
                <option>Agricultural and Biological Sciences</option>
                <option>Arts and Humanities</option>
                <option>Social Sciences</option>
                <option>Physical and Sports Science and Technology</option>
				<option>Psychology</option>
              </select>
            </div>
          </div>
        <br>
          <div class="col-md-12"><br>
            <button type="submit" class="btn btn-b">ابحث</button>
          </div>
        </div>
      </form>
    </div>
  </div><!-- End Property Search Section -->>

  <!-- ======= Header/Navbar ======= -->
  
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html">SS<span class="color-b">JP</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
          <a class="nav-link active" href="{{url('/')}}">الرئيسة</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{url('/journal')}}">المجلات</a>
          </li>
         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              إضافة مجلة
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{url('/addJournal')}}"> طلب إضافة مجلة</a>
             
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{url('/login')}}">الدخول</a>
          </li>
		  <li class="nav-item">
          <a class="nav-link" href="{{url('/contact')}}">اتصل بنا</a>
          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
    </div>
  </nav><!-- End Header/Navbar -->

 

   

    <!-- ======= Property Single ======= -->
  
<body class="bg-dark">
  
	
	<section class="property-single nav-arrow-b">
      <div class="container">
        <div class="row">
		
 <!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang=""> <!--<![endif]-->

  
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets1/css/normalize.css">
    <link rel="stylesheet" href="assets1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets1/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets1/css/themify-icons.css">
    <link rel="stylesheet" href="assets1/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets1/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets1/scss/style.css">


   

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form>
                        <div class="form-group">
                            <label>عنوان المجلة</label>
                            <input type="email" class="form-control" placeholder="عنوان المجلة">
                        </div>
                        <div class="form-group">
                            <label>وصف المجلة</label>
                            <input type="password" class="form-control" placeholder="وصف المجلة">
                        </div>
                        <div class="form-group">
                            <label>ISSN</label>
                            <input type="password" class="form-control" placeholder="ISSN الطباعة">
                        </div>
                        <div class="form-group">
                            <label>EISSN</label>
                            <input type="password" class="form-control" placeholder="EISSN الرقمي">
                        </div>
                        <div class="form-group">
                            <label>سنة ظهور المجلة</label>
                            <input type="password" class="form-control" placeholder="سنة ظهور المجلة">
                        </div>
                        
                        <div class="form-group ">
                            <label class="pb-2" for="city">مواضيع المجلة</label>
                            <select class="form-control form-select form-control-a">
                                <option>المحاسبة</option>
                                <option>ادارة الاعمال</option>
                            
                            </select>
                        </div>
                        <div class="form-group">
                            <label>البريد الالكتروني للاتصال</label>
                            <input type="password" class="form-control" placeholder="example@example.com">
                        </div>
                        
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">إضافة مجلة</button>
                         
                        
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>


		 
		 
		 
        </div>
      </div>
    </section><!-- End Property Single-->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">SSJP</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                It is an electronic platform for managing the publishing of peer-reviewed scientific journals.

              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Phone :</span> +963 912345678
                </li>
                <li class="color-a">
                  <span class="color-text-a">Email :</span> SSJP@gmail.com
                </li>
              </ul>
            </div>
          </div>
        </div>
       
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
         
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-dribbble" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">SSJP</span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
          -->
            Designed by <a href="https://bootstrapmade.com/">SSJP Team</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/scrollreveal/scrollreveal.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>4