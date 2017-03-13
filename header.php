<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Webowo.pl</title>
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <link rel="stylesheet" href="css/flexboxgrid.min.css" type="text/css" >
    <link rel="stylesheet" href="css/layout.css" type="text/css" />
    <link rel="stylesheet" href="css/slider.css" type="text/css" />
    <link rel="stylesheet" href="css/main.css" type="text/css" />
    <link rel="stylesheet" href="css/homepage.css" type="text/css" />
    <link rel="stylesheet" href="css/sidebar.css" type="text/css" />
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
                <h1><a href="#">Webowo.pl</a></h1>
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

            <div class="search-bar">
                <form action="" method="get">
                    <input type="search" name="s" placeholder="Szukaj..." />
                </form>
            </div>
        </div>
    </header>
    <header class="header-fixed">
        <div class="top">
            <div class="logo">
                <h1><a href="#">Webowo.pl</a></h1>
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

            <div class="search-bar">
                <a href="#"><img src="images/icons/search.png" alt="Szukaj" width="32" height="32" /></a>
            </div>
        </div>
    </header>
