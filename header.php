<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Webowo.pl</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Secular+One&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Capriola&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/flexboxgrid.min.css" type="text/css" >
    <link rel="stylesheet" href="css/layout.css" type="text/css" />
    <link rel="stylesheet" href="css/slider.css" type="text/css" />
    <link rel="stylesheet" href="css/main.css" type="text/css" />
    <link rel="stylesheet" href="css/homepage.css" type="text/css" />
    <link rel="stylesheet" href="css/sidebar.css" type="text/css" />
    <link rel="stylesheet" href="css/post-full.css" type="text/css" />
    <link rel="stylesheet" href="css/comments.css" type="text/css" />
    <link rel="stylesheet" href="css/mobile.css" type="text/css" />
    <link rel="shortcut icon" href="images/icons/favicon.ico" type="image/x-icon" />
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="js/jssor.slider-22.2.11.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    jssor_1_slider_init = function() {

    var jssor_1_options = {
    $AutoPlay: true,
    $SlideDuration: 2000,
    $SlideEasing: $Jease$.$OutQuint,
    $ArrowNavigatorOptions: {
    $Class: $JssorArrowNavigator$
    },
    $BulletNavigatorOptions: {
    $Class: $JssorBulletNavigator$
    }
    };

    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

    /*responsive code begin*/
    /*you can remove responsive code if you don't want the slider scales while window resizing*/
    function ScaleSlider() {
    var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
    if (refSize) {
    refSize = Math.min(refSize, 1920);
    jssor_1_slider.$ScaleWidth(refSize);
    }
    else {
    window.setTimeout(ScaleSlider, 30);
    }
    }
    ScaleSlider();
    $Jssor$.$AddEvent(window, "load", ScaleSlider);
    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
    /*responsive code end*/
    };
    </script>
</head>

<body>
    <header class="header-static">
        <div class="top">
            <div class="logo">
                <a href="index.php"><img src="images/logo.png" alt="Webowo.pl" /></a>
            </div>
        </div>

        <div class="navigation">
            <nav class="header-nav">
                <ul class="header-menu">
                    <li><a href="#">Aktualności</a></li>
                    <li><a href="#">Technologia</a></li>
                    <li><a href="#">Gry</a></li>
                    <li><a href="#">Mobilnie</a></li>
                    <li><a href="#">O nas</a></li>
                </ul>
            </nav>

            <nav class="links-nav">
                <ul class="links-menu">
                    <li><a href="#"><img src="images/icons/fb.png" alt="Facebook" /></a></li>
                    <li><a href="#"><img src="images/icons/yt.png" alt="Youtube" /></a></li>
                    <li>
                        <img src="images/icons/search.png" alt="Szukaj" onclick="showSearch();" />
                        <div class="search-form">
                            <form action="" method="get">
                                <input type="search" name="s" placeholder="Szukaj..." />
                                <button type="submit">Szukaj</button>
                            </form>
                        </div>
                    <li>
                </ul>
            </nav>
        </div>
    </header>
    <header class="header-fixed">
        <div class="top">
            <div class="logo">
                <a href="#"><img src="images/logo.png" alt="Webowo.pl" /></a>
            </div>
            <nav class="header-nav">
                <ul class="header-menu">
                    <li><a href="#">Aktualności</a></li>
                    <li><a href="#">Technologia</a></li>
                    <li><a href="#">Gry</a></li>
                    <li><a href="#">Mobilnie</a></li>
                    <li><a href="#">O nas</a></li>
                </ul>
            </nav>

            <nav class="links-nav">
                <ul class="links-menu">
                    <li><a href="#"><img src="images/icons/fb.png" alt="Facebook" /></a>
                    <li><a href="#"><img src="images/icons/yt.png" alt="Youtube" /></a>
                    <li>
                        <img src="images/icons/search.png" alt="Szukaj" onclick="showSearch();" />
                        <div class="search-form">
                            <form action="" method="get">
                                <input type="search" name="s" placeholder="Szukaj..." />
                                <button type="submit">Szukaj</button>
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
