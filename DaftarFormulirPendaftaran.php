<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="icon" type="image/png" href="images/DB_16х16.png">
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
            <div class="mdl-layout-spacer"></div>
           
           <div class="avatar-dropdown" id="icon">
                <span>155150400111089</span>
                <img src="images/Icon_header.png">
            </div>
            <!-- Account dropdawn-->
            <ul class="mdl-menu mdl-list mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-shadow--2dp account-dropdown"
                for="icon">
                <li class="mdl-list__item mdl-list__item--two-line">
                    <span class="mdl-list__item-primary-content">
                        <span class="material-icons mdl-list__item-avatar"></span>
                        <span>Azkia Samara Devi</span>
                        <span class="mdl-list__item-sub-title">azkiasam@gmail.com</span>
                    </span>
                </li>
                <li class="list__item--border-top"></li>
                
                <a href="login.html">
                    <li class="mdl-menu__item mdl-list__item">
                        <span class="mdl-list__item-primary-content">
                            <i class="material-icons mdl-list__item-icon text-color--secondary">exit_to_app</i>
                            Log out
                        </span>
                    </li>
                </a>
            </ul>


        </div>
    </header>

   <div class="mdl-layout__drawer">
        <header>SIPPL</header>
        <div class="scroll__wrapper" id="scroll__wrapper">
            <div class="scroller" id="scroller">
                <div class="scroll__container" id="scroll__container">
                    <nav class="mdl-navigation">
                        <a class="mdl-navigation__link mdl-navigation__link--current" href="indexcivitas.php">
                            <i class="material-icons" role="presentation">dashboard</i>
                            Dashboard
                        </a>
                       
                        <a class="mdl-navigation__link" href="DaftarKetersediaanMitra.php">
                            <i class="material-icons" role="description">description</i>
                            Ketersediaan Mitra
                        </a>
                        <a class="mdl-navigation__link" href="DaftarKetersediaanDosenPembimbing.php">
                            <i class="material-icons" role="description">description</i>
                            Ketersediaan Dosen 
                        </a>
                        <a class="mdl-navigation__link" href="DaftarFormulirPendaftaran.php">
                            <i class="material-icons" role="description">description</i>
                            Formulir Pendaftaran
                        </a>
                        <a class="mdl-navigation__link" href="BuatAkunMitra.php">
                            <i class="material-icons" role="description">description</i>
                            Buat Akun Mitra
                        </a>

                    </nav>
                </div>
            </div>
            <div class='scroller__bar' id="scroller__bar"></div>
        </div>
    </div>

   
        <main class="mdl-layout__content mdl-color--grey-100">
            <div class="mdl-cell mdl-cell--11-col-desktop mdl-cell--11-col-tablet mdl-cell--4-col-phone">
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h2 style="text-align: center;" class="mdl-card__title-text">Daftar Formulir Pendaftaran Mahasiswa PPL</h2>
                    </div>
                    
                    <table class="mdl-data-table mdl-data-table--selectable mdl-shadow--2dp projects-table">
                        <thead>
                        <tr>
                            <th style="width: 10%" class="mdl-data-table__cell--non-numeric">KELOMPOK</th>
                            <th style="width: 40%" class="mdl-data-table__cell--non-numeric">NAMA MAHASISWA</th>
                            <th style="width: 25%" class="mdl-data-table__cell--non-numeric">DOSEN PEMBIMBING</th>
                            <th style="width: 25%" class="mdl-data-table__cell--non-numeric">MITRA</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td rowspan="4"class="mdl-data-table__cell--non-numeric">1</td>
                            <td class="mdl-data-table__cell--non-numeric">Azkia Samara Devi</td>
                            <td rowspan="4"class="mdl-data-table__cell--non-numeric">Retno Indah R</td>
                            <td rowspan="4"class="mdl-data-table__cell--non-numeric">SMA Negeri 1</td>

                               
                        </tr>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">Juan Estrealla</td>
                                
                        </tr>
                        <tr class="is-selected">
                            <td class="mdl-data-table__cell--non-numeric">Annisa Nurfitriani</td>
                               
                        </tr>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">Nathania H</td>
                            
                        </tr>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">2</td>
                            <td class="mdl-data-table__cell--non-numeric">Erza</td>
                            <td class="mdl-data-table__cell--non-numeric">Aditya Rachmadi</td>
                            <td class="mdl-data-table__cell--non-numeric">SMK Negeri 10</td>
                            
                        </tr>

                        <tr>
                            <td rowspan="2"class="mdl-data-table__cell--non-numeric">3</td>
                            <td class="mdl-data-table__cell--non-numeric">Sinta</td>
                            <td rowspan="2"class="mdl-data-table__cell--non-numeric">Hanifah</td>
                            <td rowspan="2"class="mdl-data-table__cell--non-numeric">SMK Negeri 8</td>
                            
                        </tr>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">Fadilla</td>
                            
                        </tr>
                        

                        </tbody>
                    </table>    


                </div>
            </div>                    


        </main>
        
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

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBW0td9v69m95iy5Q2YiMebpIO7ztCnuPU&language=en&callback=initMap" async defer></script>
</body>
</html>

