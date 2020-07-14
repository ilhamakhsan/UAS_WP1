<?php 
session_start();
 
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:login.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="images/Pulse_16px.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pantau Server</title>
    <!---->
    <script>
        window.onload = function () {
        
        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            theme: "light2",
            title:{
                text: "Rata-rata Suhu Server"
            },
            axisY:{
                includeZero: false
            },
            data: [{        
                type: "line",       
                dataPoints: [
                    { y: 30 },
                    { y: 32},
                    { y: 35, indexLabel: "highest",markerColor: "red", markerType: "triangle" },
                    { y: 29 },
                    { y: 31 },
                    { y: 30 },
                    { y: 30 },
                    { y: 30 },
                    { y: 27 , indexLabel: "lowest",markerColor: "DarkSlateGrey", markerType: "cross" },
                    { y: 30 },
                    { y: 30 },
                    { y: 30 },
                    { y: 30 },
                    { y: 30 },
                    { y: 30 },
                    { y: 30 },
                    { y: 30 },
                    { y: 30 },
                    { y: 30 },
                    { y: 30 },
                    { y: 30 },
                    { y: 30 },
                    { y: 30 },
                    { y: 30 },
                    { y: 30 },
                    { y: 30 },
                    { y: 30 },
                ]
            }]
        });
        chart.render();
        
        }
        </script>
        <script src="canvasjs.min.js"></script>
    <!---->
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
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header is-small-screen">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <div><b>PANTAU SERVER</b></div>
            <div class="mdl-layout-spacer"> </div>
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
                        <a class="mdl-navigation__link mdl-navigation__link--current" href="index.php">
                            <i class="material-icons" role="presentation">dashboard</i>
                            Home
                        </a>
                        
                        <a class="mdl-navigation__link" href="setingroom.php">
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

        <div class="mdl-grid mdl-grid--no-spacing dashboard">

            <div class="mdl-grid mdl-cell mdl-cell--9-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top">

                <!-- Pie chart-->
                <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
                    <div class="mdl-card mdl-shadow--2dp weather">
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Temperature</h2>

                            <div class="mdl-layout-spacer"></div>
                            <div class="mdl-card__subtitle-text">
                               Celcius
                            </div>
                        </div>
                        <div class="mdl-card__supporting-text mdl-card--expand">
                            <p class="weather-temperature"> 
                            <?php
                            function bacaURL($url){
                                $session = curl_init(); // buat session
                                // setting CURL
                                curl_setopt($session, CURLOPT_URL, $url);
                            curl_setopt($session, CURLOPT_RETURNTRANSFER, 1);
                                $hasil = curl_exec($session);
                                curl_close($session);
                                return $hasil;
                            }
                            $sumber =  bacaURL('http://192.168.0.111');
                            $ambil_kata = explode('<b>', $sumber);
                            $ambil_kata_lagi = explode('</b>', $ambil_kata[1]);
                            echo $ambil_kata_lagi[0];
                            ?>
                            <sup>&deg;C</sup></p>

                            
                        </div>
                    </div>
                </div>
                <!-- Weather widget-->
                <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
                    <div class="mdl-card mdl-shadow--2dp weather">
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Temperature</h2>

                            <div class="mdl-layout-spacer"></div>
                            <div class="mdl-card__subtitle-text">
                                Fahrenheit
                            </div>
                        </div>
                        <div class="mdl-card__supporting-text mdl-card--expand">
                            <p class="weather-temperature">
                                <?php
                                    $ambil_kata = explode('<b>', $sumber);
                                    $ambil_kata_lagi = explode('</b>', $ambil_kata[2]);
                                    echo $ambil_kata_lagi[0];

                                ?>
                            
                            <sup>&deg;F</sup></p>

                            
                        </div>
                    </div>
                </div>
                <!-- Trending widget-->
                <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
                    <div class="mdl-card mdl-shadow--2dp weather">
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Humidity</h2>

                            <div class="mdl-layout-spacer"></div>
                            <div class="mdl-card__subtitle-text">
                               RH
                            </div>
                        </div>
                        <div class="mdl-card__supporting-text mdl-card--expand">
                            <p class="weather-temperature">
                            <?php
                                    $ambil_kata = explode('<b>', $sumber);
                                    $ambil_kata_lagi = explode('</b>', $ambil_kata[3]);
                                    echo $ambil_kata_lagi[0];

                                ?>
                            <sup>%</sup></p>
                        </div>
                    </div>
                </div>
                <!-- Cotoneaster card-->
                <div class="mdl-cell mdl-cell--5-col-desktop mdl-cell--5-col-tablet mdl-cell--2-col-phone">
                    <div class="mdl-card mdl-shadow--2dp cotoneaster">
                        <div class="mdl-card__title mdl-card--expand">
                            <h2 class="mdl-card__title-text">Server</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <div>
                                Server adalah sebuah sistem komputer yang menyediakan jenis layanan (service) 
                                tertentu dalam sebuah jaringan komputer. Server didukung dengan prosesor yang 
                                bersifat scalable dan RAM yang besar, juga dilengkapi dengan sistem operasi khusus, 
                                yang disebut sebagai sistem operasi jaringan (network operating system).
                            </div>
                            <a href="https://www.it-jurnal.com/apa-yang-di-maksud-dengan-server/" target="_blank">it-jurnal</a>
                        </div>
                    </div>
                </div>
                <!-- Line chart-->
                <div class="mdl-cell mdl-cell--7-col-desktop mdl-cell--7-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card mdl-shadow--2dp line-chart">
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Rata-rata Suhu Server</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <div class="">
                               <div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table-->
                
                <!-- Table-->
                <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone ">
                    <table align="center" class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp projects-table">
                        <thead>
                        
                        <tr >
                            <td>A. Zidni R. A. (17090132)</td>
                            <td>Mualif Dwi S.(18090043)</td>
                            <td>ilham akhsani (18090044)</td>
                        </tr>
                        
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mdl-grid mdl-cell mdl-cell--3-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top">
                <!-- Robot card-->
                
                <!-- ToDo_widget-->
               

            </div>
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
