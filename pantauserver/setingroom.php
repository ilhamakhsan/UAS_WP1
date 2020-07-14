<?php 
session_start();
 
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:login.php");
}
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="icon" type="image/png" href="images/Pulse_16px.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Dashboard Lite</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">


    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">


    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- inject:css -->
    <link rel="stylesheet" href="css/lib/getmdl-select.min.css">
    <link rel="stylesheet" href="css/lib/nv.d3.min.css">
    <link rel="stylesheet" href="css/application.min.css">
    <!-- endinject -->

</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <div><b>PANTAU SERVER</b></div>
            <div class="mdl-layout-spacer"></div>
                    <li class="mdl-list__item">
                    <a href="logout.php"><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-orange">
                        Logout
                    </button></a>
                    </li>
        </div>
    </header>

    <div class="mdl-layout__drawer">
        <header>Server</header>
        <div class="scroll__wrapper" id="scroll__wrapper">
            <div class="scroller" id="scroller">
                <div class="scroll__container" id="scroll__container">
                    <nav class="mdl-navigation">
                        <a class="mdl-navigation__link" href="index.php">
                            <i class="material-icons" role="presentation">dashboard</i>
                            Home
                        </a>
                        
                        <a class="mdl-navigation__link mdl-navigation__link--current" href="setingroom.php">
                            <i class="material-icons">developer_board</i>
                            Seting Room
                        </a>
                        <a class="mdl-navigation__link" href="monitoring.php">
                            <i class="material-icons">multiline_chart</i>
                            Monitoring
                        </a>
                        
                        <div class="mdl-layout-spacer"></div>
                        <hr>
                        <a class="mdl-navigation__link" href="https://github.com/">
                            <i class="material-icons" role="presentation">link</i>
                            GitHub
                        </a>
                    </nav>
                </div>
            </div>
            <div class='scroller__bar' id="scroller__bar"></div>
        </div>
    </div>

    <main class="mdl-layout__content">
        <div class="mdl-grid ui-components">
            <!--Toggles-->
            <!--Toggles-->
            <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">FAN</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                                            
                        <ul class="mdl-list pull-left">
                            <li class="mdl-list__item">
                                <span class="text-color--gray">ROOM 1</span>
                            </li>
                            <li class="mdl-list__item">
                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-A">
                                    <input type="checkbox" id="switch-A" class="mdl-switch__input" >
                                    <span class="mdl-switch__label">light A</span>
                                </label>
                            </li>
                            <li class="mdl-list__item">
                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-B">
                                    <input type="checkbox" id="switch-B" class="mdl-switch__input" checked>
                                    <span class="mdl-switch__label">light B</span>
                                </label>
                            </li>
                            <li class="mdl-list__item">
                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-C">
                                    <input type="checkbox" id="switch-C" class="mdl-switch__input" >
                                    <span class="mdl-switch__label">light C</span>
                                </label>
                            </li>
                            <li class="mdl-list__item">
                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-D">
                                    <input type="checkbox" id="switch-D" class="mdl-switch__input" checked>
                                    <span class="mdl-switch__label">light D</span>
                                </label>
                            </li>
                        </ul>
                        <!--switch 4-->
                        <ul class="mdl-list pull-left">
                            <li class="mdl-list__item">
                                <span class="text-color--gray">ROOM 2</span>
                            </li>
                            <li class="mdl-list__item">
                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-A">
                                    <input type="checkbox" id="switch-A" class="mdl-switch__input" >
                                    <span class="mdl-switch__label">light A</span>
                                </label>
                            </li>
                            <li class="mdl-list__item">
                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-B">
                                    <input type="checkbox" id="switch-B" class="mdl-switch__input" checked>
                                    <span class="mdl-switch__label">light B</span>
                                </label>
                            </li>
                            <li class="mdl-list__item">
                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-C">
                                    <input type="checkbox" id="switch-C" class="mdl-switch__input" checked>
                                    <span class="mdl-switch__label">light C</span>
                                </label>
                            </li>
                            <li class="mdl-list__item">
                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-D">
                                    <input type="checkbox" id="switch-D" class="mdl-switch__input" checked>
                                    <span class="mdl-switch__label">light D</span>
                                </label>
                            </li>
                        </ul>
                        <!---->
                        <ul class="mdl-list pull-left">
                            <li class="mdl-list__item">
                                <span class="text-color--gray">ROOM 3</span>
                            </li>
                            <li class="mdl-list__item">
                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-A">
                                    <input type="checkbox" id="switch-A" class="mdl-switch__input" >
                                    <span class="mdl-switch__label">light A</span>
                                </label>
                            </li>
                            <li class="mdl-list__item">
                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-B">
                                    <input type="checkbox" id="switch-B" class="mdl-switch__input" checked>
                                    <span class="mdl-switch__label">light B</span>
                                </label>
                            </li>
                            <li class="mdl-list__item">
                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-C">
                                    <input type="checkbox" id="switch-C" class="mdl-switch__input" checked>
                                    <span class="mdl-switch__label">light C</span>
                                </label>
                            </li>
                            <li class="mdl-list__item">
                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-D">
                                    <input type="checkbox" id="switch-D" class="mdl-switch__input" checked>
                                    <span class="mdl-switch__label">light D</span>
                                </label>
                            </li>
                        </ul>
                        <!--switch 4-->
                        <ul class="mdl-list pull-left">
                            <li class="mdl-list__item">
                                <span class="text-color--gray">ROOM 4</span>
                            </li>
                            <li class="mdl-list__item">
                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-A">
                                    <input type="checkbox" id="switch-A" class="mdl-switch__input" >
                                    <span class="mdl-switch__label">light A</span>
                                </label>
                            </li>
                            <li class="mdl-list__item">
                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-B">
                                    <input type="checkbox" id="switch-B" class="mdl-switch__input" checked>
                                    <span class="mdl-switch__label">light B</span>
                                </label>
                            </li>
                            <li class="mdl-list__item">
                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-C">
                                    <input type="checkbox" id="switch-C" class="mdl-switch__input" checked>
                                    <span class="mdl-switch__label">light C</span>
                                </label>
                            </li>
                            <li class="mdl-list__item">
                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-D">
                                    <input type="checkbox" id="switch-D" class="mdl-switch__input" checked>
                                    <span class="mdl-switch__label">light D</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--Sliders-->
            <!--Toggles-->
            <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Light</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                                            
                        <ul class="mdl-list pull-left">
                            <li class="mdl-list__item">
                                <span class="text-color--gray">ROOM 1</span>
                            </li>
                            <li class="mdl-list__item">
                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-A">
                                    <input type="checkbox" id="switch-A" class="mdl-switch__input" checked>
                                    <span class="mdl-switch__label">light A</span>
                                </label>
                            </li>
                            <li class="mdl-list__item">
                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-B">
                                    <input type="checkbox" id="switch-B" class="mdl-switch__input" checked>
                                    <span class="mdl-switch__label">light B</span>
                                </label>
                            </li>
                            <li class="mdl-list__item">
                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-C">
                                    <input type="checkbox" id="switch-C" class="mdl-switch__input" checked>
                                    <span class="mdl-switch__label">light C</span>
                                </label>
                            </li>
                            <li class="mdl-list__item">
                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-D">
                                    <input type="checkbox" id="switch-D" class="mdl-switch__input" checked>
                                    <span class="mdl-switch__label">light D</span>
                                </label>
                            </li>
                        </ul>
                        <!--switch 4-->
                        <ul class="mdl-list pull-left">
                            <li class="mdl-list__item">
                                <span class="text-color--gray">ROOM 2</span>
                            </li>
                            <li class="mdl-list__item">
                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-A">
                                    <input type="checkbox" id="switch-A" class="mdl-switch__input" checked>
                                    <span class="mdl-switch__label">light A</span>
                                </label>
                            </li>
                            <li class="mdl-list__item">
                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-B">
                                    <input type="checkbox" id="switch-B" class="mdl-switch__input" checked>
                                    <span class="mdl-switch__label">light B</span>
                                </label>
                            </li>
                            <li class="mdl-list__item">
                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-C">
                                    <input type="checkbox" id="switch-C" class="mdl-switch__input" checked>
                                    <span class="mdl-switch__label">light C</span>
                                </label>
                            </li>
                            <li class="mdl-list__item">
                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-D">
                                    <input type="checkbox" id="switch-D" class="mdl-switch__input" checked>
                                    <span class="mdl-switch__label">light D</span>
                                </label>
                            </li>
                        </ul>
                        <!---->
                        <ul class="mdl-list pull-left">
                            <li class="mdl-list__item">
                                <span class="text-color--gray">ROOM 3</span>
                            </li>
                            <li class="mdl-list__item">
                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-A">
                                    <input type="checkbox" id="switch-A" class="mdl-switch__input" checked>
                                    <span class="mdl-switch__label">light A</span>
                                </label>
                            </li>
                            <li class="mdl-list__item">
                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-B">
                                    <input type="checkbox" id="switch-B" class="mdl-switch__input" checked>
                                    <span class="mdl-switch__label">light B</span>
                                </label>
                            </li>
                            <li class="mdl-list__item">
                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-C">
                                    <input type="checkbox" id="switch-C" class="mdl-switch__input" checked>
                                    <span class="mdl-switch__label">light C</span>
                                </label>
                            </li>
                            <li class="mdl-list__item">
                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-D">
                                    <input type="checkbox" id="switch-D" class="mdl-switch__input" checked>
                                    <span class="mdl-switch__label">light D</span>
                                </label>
                            </li>
                        </ul>
                        <!--switch 4-->
                        <ul class="mdl-list pull-left">
                            <li class="mdl-list__item">
                                <span class="text-color--gray">ROOM 4</span>
                            </li>
                            <li class="mdl-list__item">
                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-A">
                                    <input type="checkbox" id="switch-A" class="mdl-switch__input" checked>
                                    <span class="mdl-switch__label">light A</span>
                                </label>
                            </li>
                            <li class="mdl-list__item">
                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-B">
                                    <input type="checkbox" id="switch-B" class="mdl-switch__input" checked>
                                    <span class="mdl-switch__label">light B</span>
                                </label>
                            </li>
                            <li class="mdl-list__item">
                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-C">
                                    <input type="checkbox" id="switch-C" class="mdl-switch__input" checked>
                                    <span class="mdl-switch__label">light C</span>
                                </label>
                            </li>
                            <li class="mdl-list__item">
                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-D">
                                    <input type="checkbox" id="switch-D" class="mdl-switch__input" checked>
                                    <span class="mdl-switch__label">light D</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--Tooltips-->
            
            <!--TWO LINES-->
            
        </div>
    </main>

</div>

<!-- inject:js -->
<script src="js/d3.min.js"></script>
<script src="js/getmdl-select.min.js"></script>
<script src="js/material.min.js"></script>
<script src="js/nv.d3.min.js"></script>
<script src="js/layout/layout.min.js"></script>
<script src="js/scroll/scroll.min.js"></script>
<script src="js/widgets/charts/discreteBarChart.min.js"></script>
<script src="js/widgets/charts/linePlusBarChart.min.js"></script>
<script src="js/widgets/charts/stackedBarChart.min.js"></script>
<script src="js/widgets/employer-form/employer-form.min.js"></script>
<script src="js/widgets/line-chart/line-charts-nvd3.min.js"></script>
<script src="js/widgets/map/maps.min.js"></script>
<script src="js/widgets/pie-chart/pie-charts-nvd3.min.js"></script>
<script src="js/widgets/table/table.min.js"></script>
<script src="js/widgets/todo/todo.min.js"></script>
<!-- endinject -->

</body>
</html>