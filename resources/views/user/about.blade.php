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
                    <a class="navbar-brand" href="{{action('RegisterController@index')}}"><img src='{{ asset('image/logo1.png')}}' height="80"  /></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{action('RegisterController@index')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{action('RegisterController@about')}}">About</a>
                        </li>
                        <li>
                            <a href="{{action('RegisterController@contact')}}">Contact</a>
                        </li>
                        <li>
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
        <!-- Page Content -->
        <div style="height: 50px;"></div>
        <!-- Header Carousel -->
        <div class="container body-colour1">

            <!-- Page Heading/Breadcrumbs -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">About
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a>
                        </li>
                        <li class="active">About</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <!-- Intro Content -->

            <!-- /.row -->

            <!-- Team Members -->
            <div class="row-fluid text-justify">
                <div class="col-md-12">
                    <h2>ABOUT US</h2>
                    <h4>INTRODUCTION</h4>
                    <p>The MBGA is a beauty pageant organized annually by Dolce Entertainment Limited in the Federal Capital of Abuja. The pageant has been in existence for over Fifteen (15) years and has gained good reputation throughout the federation.
                        This year’s edition shall be the 16th  and promises to be the most glamorous one of all.</p>
                    <p>The objective of the pageant is to produce world class pageant and models who shall be the ambassadors of our great country Nigeria outside the shores of this country. Indeed  the  show  has  produced  many  of  such  models  and
                        some  of  our previous winners/contestants have made stunning appearances at other pageants within and outside Nigeria. We are also determined to showcase Nigeria cultural heritage such as dance and dress at the international arena.</p>
                    <p>From the inception of the pageant to date, we have received collaboration and sponsorship from various corporate bodies including ERCAS INTEGRATED SOLUTIONS LIMITED, the Nigerian Breweries Plc (AMSTEL MALTA), CHIMA MOVIE EMPIRE U.S.A, Visafone,  Nafdac,  DAAR  Communications  Owners  of  AIT/Ray  Power
                        100.5FM, NTA Plus, AM Express, ITV, DBN Television, Hot FM, Cool FM, Gem Electronic Board, The Sun Newspaper, This Day Newspaper, High  Society Magazine, Chapters  Digital, Arik  Air, Chanchangi-Airline,
                        Transcorp Hilton, Abuja Sheraton Hotel & Towers, Sandralia Hotel, Top
                        Rank Hotel Galaxy, 3J’s Hotel, Chida Hotels, Febson Hotel, Nicon Luxury, Nanet Suites, Studio 24, Mattson Creatives Studio, VODI Tailors, Shola
                        Creative   Studio,   Bnatural,   Dreswel   Ventures   Limited,   I’AM,   Doxa, Eat.Com, Drumstix, Tetrazzini Foods Limited, Aqua Nite Club, Basement Nite Club, Cubana Lounge, Kryxtal Lounge, Denis Hotels, Agura Hotel,
                        Chancellery Suites etc.
                    </p>
                    <p><strong>FOR  SPONSORSHIP  AND  ADVERT  PLACEMENT  CONTACT  US  @  NO.  8
                            BIRNIN KEBBI STREET GARKI 2 NEAR IQ ACADEMY.
                            CALL OUR LINES: 0803-4523698, 0805-1774413. 0r send us an e-mail:
                            info@mbgaevents.com, dolceentertainmentng@yahoo.com
                        </strong></p>
                    <p><strong>MISSION:</strong> We are created to promote the great image of our country
                        Nigeria to the fullest.
                    </p>
                    <p><strong>VISSION: </strong>To up hold the values of our traditional and cultural heritage.</p>
                    <p><strong>OUR DRIVE:</strong></p>
                    <ul>
                        <li>In the light of social emancipation and curbing of youth vices.</li>
                        <li>Also responding to a wake up call to focus the youths in activities that will empower them.</li>
                        <li>In a bid to help some youth realize their potentials and areas of fame and best representations</li>
                        <li>Our drive circles round these social responsibilities.</li>
                    </ul>
                    <p><strong>MEDIA PUBLICITY: </strong>we are open to accept any Nigerian media organizations that can publizes the activities of the event nationwide.</p>
                    <p></p><br />
                    <p><strong>REGISTRATION</strong></p>
                    <p><strong>Bank details: </strong>ANY BANK NATIONWIDE</p>
                    <p><strong>ACC. NAME:</strong> DOLCE ENTERTAINMENT LTD.</p>
                    <p>Contestant’s forms: N5, 000 only</p>
                    <p></p><br />
                    <p><strong>NAMES OF PAST QUEENS:</strong></p>
                    <p>2001- GLORIA JULIUS</p>
                    <p>2002- BINTA AGU</p>
                    <p>2003- STEPHINE ISEAKO</p>
                    <p>2004- ESTHER OKORO</p>
                    <p>2005- GLORIA OKORO</p>
                    <p>2006- PRINCESS OFILI</p>
                    <p>2007- GRACE NDAM</p>
                    <p>2008- UDEME USORO</p>
                    <p>2009- DEBORAH ENEBELI</p>
                    <p>2010- CHIOMA EZENWA</p>
                    <p>2011- STELLA CHARLES</p>
                    <p>2012 - CHINELO CHUKWURA</p>
                    <p>2013 –ESTHER OBIAGELI</p>
                    <p>2014- VOILET OKWUAZU</p>
                    <p>2015- REIGNING QUEEN- QUEEN DEBBIE DOUGLAS</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <p><strong>DONATIONS:</strong>All interested individuals and corporate companies who wish to support our event pet project in cash or kind should let us know, it accepted by Dolce Entertainment Limited by calling us for discussions as fast as possible. 08034523698, 08051774413, 07026272670. 0r send us an e-mail: info@mbgaevents.com, dolceentertainmentng@yahoo.com</p>
                    <p><strong>SPONSORSHIP:</strong> all interested organizations are welcome on board to be part of the 2013 edition of the Most Beautiful Girl in Abuja Beauty Pageant show. Call the following numbers for detailed considerations. 08034523698,
                        08051774413, 07026272670. 0r send us an e-mail:
                        info@mbgaevents.com, dolceentertainmentng@yahoo.com
                    </p>
                    <p>
                        <strong>PARTNERS:</strong> we are open for all corporate partnership in media and other areas in the promotions of the 13th edition of the mbga event. 08034523698,
                        08051774413, 07026272670. 0r send us an e-mail:
                        info@mbgaevents.com, dolceentertainmentng@yahoo.com

                    </p>
                </div>
            </div>
            <!-- /.row -->

            <!-- Our Customers -->

            <!-- /.row -->

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
        <script src="js/bootstrap.min.js"></script>

    </body>

</html>
