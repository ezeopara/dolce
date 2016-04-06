<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>{{$title}}</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">


        <!-- Custom CSS -->
        <link href="{{ asset('css/modern-business.css')}}" rel="stylesheet">
        <link href="{{ asset('css/style1.css')}}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{ asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body class="body-colour" style="background-image:url('{{ asset('image/bg4.jpg')}}');">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{action('RegisterController@index')}}" ><img src='{{ asset('image/logo1.png')}}'  /></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">

                        <li>
                            <a href="{{action('RegisterController@index')}}">Home</a>
                        </li>
                        <li>
                            <a href="">About</a>
                        </li>
                        <li>
                            <a href="{{action('RegisterController@contact')}}">Contact</a>
                        </li>
                        <?php if (Session::get('key')): ?>
                            <li>
                                <a href="{{action('RegisterController@create')}}">Form</a>
                            </li>
                            <li>
                                <a href="{{action('RegisterController@logout')}}">Logout</a>
                            </li>
                        <?php else: ?>
                            <li>
                                <a href="{{action('RegisterController@show')}}">Register</a>
                            </li>
                        <?php endif; ?>
                        <li>
                            <img src='{{ asset('image/logo.png')}}'  />
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <div style="height: 50px;"></div>
        <!-- Header Carousel -->
        <div class="container body-colour1">
            <header id="myCarousel" class="carousel slide height-line">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner height-line">
                    <div class="item active">
                        <div class="fill" style="background-image:url('{{ asset('image/DSC_2100.jpg')}}');">                     
                        </div>
                        <div class="carousel-caption">
                            <h2>Caption 1</h2>
                        </div>
                    </div>
                    <div class="item">
                        <div class="fill" style="background-image:url('{{ asset('image/DSC_1223.jpg')}}');"></div>
                        <div class="carousel-caption">
                            <h2>Caption 2</h2>
                        </div>
                    </div>
                    <div class="item">
                        <div class="fill" style="background-image:url('{{ asset('image/DSC_0214.jpg')}}');"></div>
                        <div class="carousel-caption">
                            <h2>Caption 2</h2>
                        </div>
                    </div>
                    <div class="item">
                        <div class="fill" style="background-image:url('{{ asset('image/DSC_0142.jpg')}}');"></div>
                        <div class="carousel-caption">
                            <h2>Caption 3</h2>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="icon-prev"></span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="icon-next"></span>
                </a>
            </header>

            <!-- Page Content -->


            <!-- Marketing Icons Section -->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">
                        Welcome to the Most Beautiful Girl in Abuja (MBGA) 2016
                    </h3>
                </div>
                <div class="col-md-12 text-justify">
                    <div class="panel panel-default">

                        <div class="panel-body">
                            <div class="col-md-12">
                                <h3>About Us</h3>
                            </div>
                            <div class="col-md-4">
                                ‎<p>We ‎anticipated A Good Event!.
                                ‎We worked For An Impressive Show!!‎.
                               We Laboured For A Grand Anniversary Edition!</p>

                                ‎<p>We are truly humbled for the overwhelming support and goodwill we received in the bid to host the 15th edition of Most ‎<p>Beautiful Girl In Abuja, words can not quantify ‎how grateful we are.</p>

                                ‎<p>It was indeed a long Journey of success and a memory night that will not be forgotten in a hurry.</p> 

                               

                            </div>
                            <div class="col-md-4">
                                 ‎<p>This remarkable feat was made possible by the following platforms:
                                    ‎<p>AIT, HIP TV, LoveFm, RythmFm,   AlexReports, Option A, Gbenga Deco, Success Studio, Newsland‎, Jimcolours, DMK Media, Shola Creative Studio, Studio24, Merit Digital (Wasiu), Numero Blog, CV Edoziem Blog. 
                                    We will not undermine the immeasurable roles of these hospitality brands Like Transcorp Hilton, Sandralia Hotel, 3Js Hotel, Bolingo Hotel, Top Rank Hotel Galaxy.</p>

                                ‎

                                ‎
                            </div>
                            <div class="col-md-4">
                                <p>The success story will not be complete without mentioning the following : House Of Vodi, SD Production, Sammy Innovation, Razor Sharp Collection, A-Z Couture, EL Jargo Couture, Fashion Africa, Carol & Carol PR Consultant, Ehis Hair, Exquisite‎ Touch Clinic & spa, Enohillz Global Limited, Abeysteph Globalink, Lona Global Resource, Lowo Africa Designs, Faerenz Designs,  Emmy Hair.
                                    etc</p>
                                <p>Great thanks to my ex- MBGA Queens‎ like Princess Ofili , Grace Ndam, Chioma Ezenwa, Stella Charles, Chinelo Chukwura, Esther Obiageli etc</p>

                                ‎<p>To my Lovely Wife and Children, your love and patience was my greatest motivation.</p>
                                <a href="#" class="btn btn-default">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /.row -->

            <!-- Portfolio Section -->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Latest MBGA Photographs</h2>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-portfolio img-hover" src="{{ asset('image/DSC_0214.jpg')}}" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-portfolio img-hover" src="{{ asset('image/DSC_0198.jpg')}}" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-portfolio img-hover" src="{{ asset('image/DSC_0326.jpg')}}" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-portfolio img-hover" src="{{ asset('image/DSC_0346.jpg')}}" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-portfolio img-hover" src="{{ asset('image/DSC_1204.jpg')}}" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-portfolio img-hover" src="{{ asset('image/DSC_1210.jpg')}}" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-portfolio img-hover" src="{{ asset('image/DSC_1298.jpg')}}" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-portfolio img-hover" src="{{ asset('image/DSC_1706.jpg')}}" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-portfolio img-hover" src="{{ asset('image/DSC_0214.jpg')}}" alt="">
                    </a>
                </div>
            </div>
            <!-- /.row -->

            <!-- Features Section -->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Step to Register For MBGA 2016</h2>
                </div>
                <div class="col-md-6">
                    <p>The registration step includes:</p>
                    <ul>
                        <li>Visiting any bank of choice and making payment of N5000 to obtain registration number
                        </li>
                        <li>Visit our website: www.mbga2016.com</li>
                        <li>Click on register</li>
                        <li>Enter your registration number</li>
                        <li>Fill up the registration form</li>
                        <li>Receive an email confirmation</li>
                    </ul>
                    <p>Please note that you can edit your information any time.</p>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive" src="{{ asset('image/DSC_1722.jpg')}}" alt="">
                </div>
            </div>
            <!-- /.row -->

            <hr>

            <!-- Call to Action Section -->
            <div class="well">
                <div class="row">
                    <div class="col-md-8">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
                    </div>
                </div>
            </div>

            <hr>

            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; Dolce Entertainment 2016</p>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.container -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>

        <!-- Script to Activate the Carousel -->
        <script>
$('.carousel').carousel({
    interval: 5000 //changes the speed
})


        </script>

    </body>

</html>
