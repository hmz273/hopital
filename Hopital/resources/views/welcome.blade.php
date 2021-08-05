<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>HMS</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Side-By-Side-Section.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('assets/css/Animation-Cards-1.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('assets/css/Animation-Cards.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('assets/css/Dark-NavBar-1.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('assets/css/Dark-NavBar-2.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('assets/css/Dark-NavBar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Footer-Dark.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Footer-with-social-media-icons.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    {{-- <link rel="stylesheet" href="{{asset('assets/css/Slider-laptop-1.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('assets/css/Slider-laptop.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md fixed-top shadow-sm p-3 mb-5 rounded navigation-clean-button" style="height:80px;background-color:#18454D;color:#ffffff;">
            <div class="container-fluid"><a class="navbar-brand" href="/">HMS</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" style="color:#ffffff;" href="#dashboard">Dashboard</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" style="color:#ffffff;" href="#about">About Us</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" style="color:#ffffff;" href="#contact">Contact Us</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" style="color:#ffffff;" href="{{ route('login') }}">Sign In</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="x_001_laptop_main_wrap" id="dashboard">
        <div class="row">
            <div class="col-md-7">
                <div class="x_001_laptop_inner_wrap">
                    <img data-aos="fade-right"
                    data-aos-easing="linear"
                    data-aos-duration="1500" src="assets/img/undraw_doctors_hwty.svg" alt="EROR_101">
                </div>
            </div>
            <div class="col-md-5">
                <h1 data-aos="fade-left">Hospital Management System</h1>
                <p data-aos="fade-left">
                    is an integrated software that handles different directions of clinic workflows. 
                    It manages the smooth healthcare performance along with administrative, medical, 
                    legal and financial control.
                </p>
                <a class="text-light" href="#">read more</a>
            </div>
        </div>
    </div>
    <br><br>
    <div class="row space-rows mt-5" id="about">
        {{-- CARD 1 --}}
        <div class="col-lg-4 col-md-6 col-sm-12"> 
            <div class="card hover-shadow text-center" style="width: 18rem; border:none;  background:none;">
                <img class="card-img-top img-fluid ml-5" src="assets/img/1.png" style="width: 165px">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>


        
        {{-- CARD 2 --}}
        <div class="col-lg-4 col-md-6 col-sm-12"> 
            <div class="card text-center " style="width: 18rem;  border:none; background:none;">
                <img class="card-img-top img-fluid ml-5" src="assets/img/2.png" style="width: 160px">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>

        {{-- CARD 3 --}}
        <div class="col-lg-4 col-md-6 col-sm-12"> 
            <div class="card text-center" style="width: 17rem;  border:none; background:none;">
                <img class="card-img-top img-fluid ml-5" src="assets/img/3.png" style="width: 130px">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
    <section class="index-howto-alt py-3">
        <div class="container">
            {{-- <div class="psd-line pos-rel" style="position:relative;"> --}}
                <div class="row flex-column-reverse align-items-center flex-sm-row">
                    <div class="col-12 col-sm-6 d-flex flex-column justify-content-center p-5 psd-right1">
                        <p class="m-0 text-center text-sm-left text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum possimus, facere laudantium voluptatem ducimus corporis aperiam quam nam tenetur! Expedita cumque placeat hic molestias pariatur aspernatur earum autem possimus molestiae.
                        Iusto possimus excepturi ea! Quia, eligendi blanditiis reprehenderit architecto assumenda voluptatum minus nostrum rerum omnis nobis voluptates provident cupiditate officiis dicta corrupti libero laboriosam qui ipsa, dignissimos quasi. Reprehenderit, necessitatibus!
                        Cum, tenetur? Temporibus tempora culpa quisquam ea rerum assumenda animi, doloribus veniam reprehenderit ut expedita, provident aliquam porro aspernatur laborum reiciendis, consectetur unde in eos earum vero voluptatum. Odit, iusto?.<br></p>
                    </div>
                    <div class="col-12 col-sm-6 d-flex flex-row justify-content-center align-items-center intro-card-2 p-5">
                        <img class="howto-img" src="assets/img/lady-doctor.png">
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-12 col-sm-6 d-flex flex-row justify-content-center align-items-center intro-card-3 p-5">
                        <img class="howto-img" src="assets/img/doctor.png">
                    </div>
                    <div class="col-12 col-sm-6 d-flex flex-column justify-content-center p-5 psd-left2">
                        <p class="m-0 text-center text-sm-left text-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus ab ullam rem, exercitationem eius tempora consequatur repellat quidem. Labore suscipit a sequi similique reprehenderit eligendi officiis dolor incidunt maxime tempore?
                        Dicta aspernatur recusandae maxime cumque odio nobis quisquam fugiat dolorem, ea, deserunt assumenda necessitatibus voluptas doloremque! Laborum voluptatum, asperiores iste omnis doloremque nihil iure, distinctio illum blanditiis quaerat aspernatur ex?
                        Ducimus nisi sed facilis dicta cumque inventore excepturi molestiae accusamus provident distinctio adipisci minima modi officiis non minus consectetur quos mollitia rerum, doloribus exercitationem unde quasi, harum quisquam quas. Voluptates..<br></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="footer-dark">
        <footer id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Company Name</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Company Name © 2017</p>
            </div>
        </footer>
    </div>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/bs-init.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="{{asset('assets/js/Slider-laptop.js')}}"></script>
    <script>
        AOS.init();
      </script>
      <style>
          .card:hover{
            box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
            }
      </style>
</body>
</html>

