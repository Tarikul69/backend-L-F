<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <title>Medi Tech</title>
    <style>
    .jumbotron {width: 100%;height: 250px;}
        .jumbotron h2 {padding-bottom: 0;}
    </style>
</head>

<body>
    <header class="header bg">
        <div class="container text-white">
            <div class="row">
                <!-- <div class="col-sm-4 align-self-center text-left">
                    <h6>Estd 1905</h6>
                </div> -->
                <!-- <div class="col-sm-1 col-1 align-self-center box-1 text-center">
                    <a class="navbar-brand" href="index"><h6>Lab</h6></a>
                </div> -->
                <!-- <div class="col-sm-4 align-self-center text-right">
                    <div class="social-icons">
                        <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    </div>
                </div> -->
            </div>
            <!--/row-->
        </div>
        <!--container-->
    </header>
    <span class="position-absolute trigger"><!-- hidden trigger to apply 'stuck' styles --></span>
    <nav class="navbar navbar-expand-sm sticky-top navbar-dark">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar1">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbar1">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="support">Support</a>
                    </li>
                   <!--  <li class="nav-item">
                        <a class="nav-link" href="blog">blog</a>
                    </li> -->
                </ul>
            </div>
        </div>
        <!--container end-->
    </nav>
    <!--Section-1-->
    <section class="section-1">
        <div class="jumbotron d-flex align-items-center">
            <div class="gradient"></div>
            <div class="container-fluid content">
                <h1 data-aos="fade-right" data-aos-delay="300">Welcome to Meditech Corporation</h1>
                <h2 data-aos="fade-left" data-aos-delay="300"></h2>
            </div>
            <!--container-fluid end-->
        </div>
    </section>
    
    <!--Services-->
    <section class="services">
        <div class="container">
           <h2>Our Services</h2>
            <div class="row">
                <div class="col-sm-12 col-12 box-1"  data-aos="fade-up" data-aos-delay="300">
                    <div class="row box">
                        <div class="col-sm-1 col-12">
                            <i class="fa fa-desktop" aria-hidden="true"></i>
                        </div>
                        @foreach($data as $ab)
                        <div class="col-sm-11 col-12">
                            <h3><a href="services">{{$ab->name}}</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five</p>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- <div class="col-sm-12 col-12 box-2"  data-aos="fade-up" data-aos-delay="300">
                    <div class="row box">
                        <div class="col-sm-1 col-12">
                            <i class="fa fa-code" aria-hidden="true"></i>
                        </div>
                        <div class="col-sm-11 col-12">
                            <h3><a href="blog">coding.</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-12 box-2"  data-aos="fade-up" data-aos-delay="300">
                    <div class="row box">
                        <div class="col-sm-1 col-12">
                            <i class="fa fa-cogs" aria-hidden="true"></i>
                        </div>
                        <div class="col-sm-11 col-12">
                            <h3><a href="blog">support.</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-12 box-2"  data-aos="fade-up" data-aos-delay="300">
                    <div class="row box">
                        <div class="col-sm-1 col-12">
                            <i class="fa fa-suitcase" aria-hidden="true"></i>
                        </div>
                        <div class="col-sm-11 col-12">
                            <h3><a href="blog">coding.</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five</p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
   
    <section class="section-7">
        <!-- Footer -->
        <footer class="page-footer font-small stylish-color-dark">

            <!-- Footer Links -->
            
            <!-- Footer Links -->

            <!-- Copyright -->
            <div class="footer-copyright text-center">
                <div class="gradient"></div>
                <p>© <?php echo date("Y")?>, All Rights reserved by Medi Tech Corporation<a href="https://www.meditech-corporation.com"></a></p>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="assets/js/animate.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>
