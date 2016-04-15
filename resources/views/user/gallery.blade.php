<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Dolce Entertainment-The Most Beautiful Girl in Abuja">
        <meta name="author" content="Dolce Entertainment">
        <meta name="robots" content="index/follow">
        <meta name="keyword" content="MBGA 2014,MBGA 2015,MBGA 2016,peagent,dolce,Entertainment">

        <title>{{$title}}</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">


        <!-- Custom CSS -->
        <link href="{{ asset('css/modern-business.css')}}" rel="stylesheet">
        <link href="{{ asset('css/style1.css')}}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{ asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <style>
            body {
                background: url(../image/DSC_1126.JPG) no-repeat center fixed;
                background-size: cover;

            }
        </style>

    </head>

    <body>
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-76469133-1', 'auto');
  ga('send', 'pageview');

</script>
        <script type="text/javascript" src="{{ asset('js/js/jquery-1.9.1.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/js/jssor.slider.mini.js')}}"></script>
        <script>
jQuery(document).ready(function ($) {

    var jssor_1_SlideshowTransitions = [
        {$Duration: 1200, $Zoom: 1, $Easing: {$Zoom: $Jease$.$InCubic, $Opacity: $Jease$.$OutQuad}, $Opacity: 2},
        {$Duration: 1000, $Zoom: 11, $SlideOut: true, $Easing: {$Zoom: $Jease$.$InExpo, $Opacity: $Jease$.$Linear}, $Opacity: 2},
        {$Duration: 1200, $Zoom: 1, $Rotate: 1, $During: {$Zoom: [0.2, 0.8], $Rotate: [0.2, 0.8]}, $Easing: {$Zoom: $Jease$.$Swing, $Opacity: $Jease$.$Linear, $Rotate: $Jease$.$Swing}, $Opacity: 2, $Round: {$Rotate: 0.5}},
        {$Duration: 1000, $Zoom: 11, $Rotate: 1, $SlideOut: true, $Easing: {$Zoom: $Jease$.$InExpo, $Opacity: $Jease$.$Linear, $Rotate: $Jease$.$InExpo}, $Opacity: 2, $Round: {$Rotate: 0.8}},
        {$Duration: 1200, x: 0.5, $Cols: 2, $Zoom: 1, $Assembly: 2049, $ChessMode: {$Column: 15}, $Easing: {$Left: $Jease$.$InCubic, $Zoom: $Jease$.$InCubic, $Opacity: $Jease$.$Linear}, $Opacity: 2},
        {$Duration: 1200, x: 4, $Cols: 2, $Zoom: 11, $SlideOut: true, $Assembly: 2049, $ChessMode: {$Column: 15}, $Easing: {$Left: $Jease$.$InExpo, $Zoom: $Jease$.$InExpo, $Opacity: $Jease$.$Linear}, $Opacity: 2},
        {$Duration: 1200, x: 0.6, $Zoom: 1, $Rotate: 1, $During: {$Left: [0.2, 0.8], $Zoom: [0.2, 0.8], $Rotate: [0.2, 0.8]}, $Easing: {$Left: $Jease$.$Swing, $Zoom: $Jease$.$Swing, $Opacity: $Jease$.$Linear, $Rotate: $Jease$.$Swing}, $Opacity: 2, $Round: {$Rotate: 0.5}},
        {$Duration: 1000, x: -4, $Zoom: 11, $Rotate: 1, $SlideOut: true, $Easing: {$Left: $Jease$.$InExpo, $Zoom: $Jease$.$InExpo, $Opacity: $Jease$.$Linear, $Rotate: $Jease$.$InExpo}, $Opacity: 2, $Round: {$Rotate: 0.8}},
        {$Duration: 1200, x: -0.6, $Zoom: 1, $Rotate: 1, $During: {$Left: [0.2, 0.8], $Zoom: [0.2, 0.8], $Rotate: [0.2, 0.8]}, $Easing: {$Left: $Jease$.$Swing, $Zoom: $Jease$.$Swing, $Opacity: $Jease$.$Linear, $Rotate: $Jease$.$Swing}, $Opacity: 2, $Round: {$Rotate: 0.5}},
        {$Duration: 1000, x: 4, $Zoom: 11, $Rotate: 1, $SlideOut: true, $Easing: {$Left: $Jease$.$InExpo, $Zoom: $Jease$.$InExpo, $Opacity: $Jease$.$Linear, $Rotate: $Jease$.$InExpo}, $Opacity: 2, $Round: {$Rotate: 0.8}},
        {$Duration: 1200, x: 0.5, y: 0.3, $Cols: 2, $Zoom: 1, $Rotate: 1, $Assembly: 2049, $ChessMode: {$Column: 15}, $Easing: {$Left: $Jease$.$InCubic, $Top: $Jease$.$InCubic, $Zoom: $Jease$.$InCubic, $Opacity: $Jease$.$OutQuad, $Rotate: $Jease$.$InCubic}, $Opacity: 2, $Round: {$Rotate: 0.7}},
        {$Duration: 1000, x: 0.5, y: 0.3, $Cols: 2, $Zoom: 1, $Rotate: 1, $SlideOut: true, $Assembly: 2049, $ChessMode: {$Column: 15}, $Easing: {$Left: $Jease$.$InExpo, $Top: $Jease$.$InExpo, $Zoom: $Jease$.$InExpo, $Opacity: $Jease$.$Linear, $Rotate: $Jease$.$InExpo}, $Opacity: 2, $Round: {$Rotate: 0.7}},
        {$Duration: 1200, x: -4, y: 2, $Rows: 2, $Zoom: 11, $Rotate: 1, $Assembly: 2049, $ChessMode: {$Row: 28}, $Easing: {$Left: $Jease$.$InCubic, $Top: $Jease$.$InCubic, $Zoom: $Jease$.$InCubic, $Opacity: $Jease$.$OutQuad, $Rotate: $Jease$.$InCubic}, $Opacity: 2, $Round: {$Rotate: 0.7}},
        {$Duration: 1200, x: 1, y: 2, $Cols: 2, $Zoom: 11, $Rotate: 1, $Assembly: 2049, $ChessMode: {$Column: 19}, $Easing: {$Left: $Jease$.$InCubic, $Top: $Jease$.$InCubic, $Zoom: $Jease$.$InCubic, $Opacity: $Jease$.$OutQuad, $Rotate: $Jease$.$InCubic}, $Opacity: 2, $Round: {$Rotate: 0.8}}
    ];

    var jssor_1_options = {
        $AutoPlay: true,
        $SlideshowOptions: {
            $Class: $JssorSlideshowRunner$,
            $Transitions: jssor_1_SlideshowTransitions,
            $TransitionsOrder: 1
        },
        $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$
        },
        $ThumbnailNavigatorOptions: {
            $Class: $JssorThumbnailNavigator$,
            $Rows: 2,
            $Cols: 6,
            $SpacingX: 14,
            $SpacingY: 12,
            $Orientation: 2,
            $Align: 156
        }
    };

    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

    //responsive code begin
    //you can remove responsive code if you don't want the slider scales while window resizing
    function ScaleSlider() {
        var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
        if (refSize) {
            refSize = Math.min(refSize, 960);
            refSize = Math.max(refSize, 300);
            jssor_1_slider.$ScaleWidth(refSize);
        }
        else {
            window.setTimeout(ScaleSlider, 30);
        }
    }
    ScaleSlider();
    $(window).bind("load", ScaleSlider);
    $(window).bind("resize", ScaleSlider);
    $(window).bind("orientationchange", ScaleSlider);
    //responsive code end
});
        </script>
        <style>

            /* jssor slider arrow navigator skin 05 css */
            /*
            .jssora05l                  (normal)
            .jssora05r                  (normal)
            .jssora05l:hover            (normal mouseover)
            .jssora05r:hover            (normal mouseover)
            .jssora05l.jssora05ldn      (mousedown)
            .jssora05r.jssora05rdn      (mousedown)
            */
            .jssora05l, .jssora05r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 40px;
                height: 40px;
                cursor: pointer;
                background: url('img/a17.png') no-repeat;
                overflow: hidden;
            }
            .jssora05l { background-position: -10px -40px; }
            .jssora05r { background-position: -70px -40px; }
            .jssora05l:hover { background-position: -130px -40px; }
            .jssora05r:hover { background-position: -190px -40px; }
            .jssora05l.jssora05ldn { background-position: -250px -40px; }
            .jssora05r.jssora05rdn { background-position: -310px -40px; }

            /* jssor slider thumbnail navigator skin 01 css */
            /*
            .jssort01-99-66 .p            (normal)
            .jssort01-99-66 .p:hover      (normal mouseover)
            .jssort01-99-66 .p.pav        (active)
            .jssort01-99-66 .p.pdn        (mousedown)
            */
            .jssort01-99-66 .p {
                position: absolute;
                top: 0;
                left: 0;
                width: 99px;
                height: 66px;
            }

            .jssort01-99-66 .t {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                border: none;
            }

            .jssort01-99-66 .w {
                position: absolute;
                top: 0px;
                left: 0px;
                width: 100%;
                height: 100%;
            }

            .jssort01-99-66 .c {
                position: absolute;
                top: 0px;
                left: 0px;
                width: 95px;
                height: 62px;
                border: #000 2px solid;
                box-sizing: content-box;
                background: url('img/t01.png') -800px -800px no-repeat;
                _background: none;
            }

            .jssort01-99-66 .pav .c {
                top: 2px;
                _top: 0px;
                left: 2px;
                _left: 0px;
                width: 95px;
                height: 62px;
                border: #000 0px solid;
                _border: #fff 2px solid;
                background-position: 50% 50%;
            }

            .jssort01-99-66 .p:hover .c {
                top: 0px;
                left: 0px;
                width: 97px;
                height: 64px;
                border: #fff 1px solid;
                background-position: 50% 50%;
            }

            .jssort01-99-66 .p.pdn .c {
                background-position: 50% 50%;
                width: 95px;
                height: 62px;
                border: #000 2px solid;
            }

            * html .jssort01-99-66 .c, * html .jssort01-99-66 .pdn .c, * html .jssort01-99-66 .pav .c {
                /* ie quirks mode adjust */
                width /**/: 99px;
                height /**/: 66px;
            }

        </style>


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
                    <a class="navbar-brand hidden-sm hidden-xs" href="{{action('RegisterController@index')}}"><img src='{{ asset('image/logo1.png')}}' height="80"  /></a>
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
                            <a href="{{action('RegisterController@gallery')}}">Gallery</a>
                        </li>
                         <li>
                            <a href="{{action('RegisterController@mbga')}}">MBGA Nigeria</a>
                        </li>
                        <li>
                            <?php if (Session::get('key')): ?>
                            <li>
                                <a href="{{action('RegisterController@create')}}">Form</a>
                            </li>
                            <li>
                                <a href="{{action('RegisterController@success')}}">Print Form</a>
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
                    <h1 class="page-header">Gallery
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="{{action('RegisterController@index')}}">Home</a>
                        </li>
                        <li class="active">Gallery</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <!-- Intro Content -->

            <!-- /.row -->

            <!-- Team Members -->
            <div class="row">
                <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 960px; height: 480px; overflow: hidden; visibility: hidden; background-color: #24262e;">
                    <!-- Loading Screen -->
                    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                        <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                    </div>
                    <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 240px; width: 720px; height: 480px; overflow: hidden;">
                        <div data-p="150.00" style="display: none;">
                            <img data-u="image" src="{{ asset('image/DSC_0142.JPG')}}" />{{ asset('image/DSC_1223.JPG')}}
                            <img data-u="thumb" src="{{ asset('image/DSC_0142.JPG')}}" />
                        </div>
                        <div data-p="150.00" style="display: none;">
                            <img data-u="image" src="{{ asset('image/DSC_1706.JPG')}}" />
                            <img data-u="thumb" src="{{ asset('image/DSC_1706.JPG')}}" />
                        </div>
                        <div data-p="150.00" style="display: none;">
                            <img data-u="image" src="{{ asset('image/DSC_0198.JPG')}}" />
                            <img data-u="thumb" src="{{ asset('image/DSC_0198.JPG')}}" />
                        </div>
                        <div data-p="150.00" style="display: none;">
                            <img data-u="image" src="{{ asset('image/DSC_1298.JPG')}}" />
                            <img data-u="thumb" src="{{ asset('image/DSC_1298.JPG')}}" />
                        </div>
                        <div data-p="150.00" style="display: none;">
                            <img data-u="image" src="{{ asset('image/DSC_0326.JPG')}}" />
                            <img data-u="thumb" src="{{ asset('image/DSC_0326.JPG')}}" />
                        </div>
                        <div data-p="150.00" style="display: none;">
                            <img data-u="image" src="{{ asset('image/DSC_0327.JPG')}}" />
                            <img data-u="thumb" src="{{ asset('image/DSC_0327.JPG')}}" />
                        </div>
                        <div data-p="150.00" style="display: none;">
                            <img data-u="image" src="{{ asset('image/DSC_0346.JPG')}}" />
                            <img data-u="thumb" src="{{ asset('image/DSC_0346.JPG')}}" />
                        </div>
                        <div data-p="150.00" style="display: none;">
                            <img data-u="image" src="{{ asset('image/DSC_0656.jpg')}}" />
                            <img data-u="thumb" src="{{ asset('image/DSC_0656.jpg')}}" />
                        </div>
                        <div data-p="150.00" style="display: none;">
                            <img data-u="image" src="{{ asset('image/DSC_0661.jpg')}}" />
                            <img data-u="thumb" src="{{ asset('image/DSC_0662.jpg')}}" />
                        </div>
                        <div data-p="150.00" style="display: none;">
                            <img data-u="image" src="{{ asset('image/DSC_0673-1.jpg')}}" />
                            <img data-u="thumb" src="{{ asset('image/DSC_0673-1.jpg')}}" />
                        </div>
                        <div data-p="150.00" style="display: none;">
                            <img data-u="image" src="{{ asset('image/DSC_0736.jpg')}}" />
                            <img data-u="thumb" src="{{ asset('image/DSC_0736.jpg')}}" />
                        </div>
                        <div data-p="150.00" style="display: none;">
                            <img data-u="image" src="{{ asset('image/DSC_1223.JPG')}}" />
                            <img data-u="thumb" src="{{ asset('image/DSC_1223.JPG')}}" />
                        </div>
                        <div data-p="150.00" style="display: none;">
                            <img data-u="image" src="{{ asset('image/DSC_0741.jpg')}}" />
                            <img data-u="thumb" src="{{ asset('image/DSC_0741.jpg')}}" />
                        </div>
                        <div data-p="150.00" style="display: none;">
                            <img data-u="image" src="{{ asset('image/DSC_1126.JPG')}}" />
                            <img data-u="thumb" src="{{ asset('image/DSC_1126.JPG')}}" />
                        </div>

                    </div>
                    <!-- Thumbnail Navigator -->
                    <div data-u="thumbnavigator" class="jssort01-99-66" style="position:absolute;left:0px;top:0px;width:240px;height:480px;" data-autocenter="2">
                        <!-- Thumbnail Item Skin Begin -->
                        <div data-u="slides" style="cursor: default;">
                            <div data-u="prototype" class="p">
                                <div class="w">
                                    <div data-u="thumbnailtemplate" class="t"></div>
                                </div>
                                <div class="c"></div>
                            </div>
                        </div>
                        <!-- Thumbnail Item Skin End -->
                    </div>
                    <!-- Arrow Navigator -->
                    <span data-u="arrowleft" class="jssora05l" style="top:158px;left:248px;width:40px;height:40px;" data-autocenter="2"></span>
                    <span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;" data-autocenter="2"></span>
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
        <script src="{{ asset('js/jquery.js')}}"></script>
        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/south-street/jquery-ui.css" id="theme">

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>

    </body>

</html>
