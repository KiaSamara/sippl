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
                        <span>Luke</span>
                        <span class="mdl-list__item-sub-title">Luke@skywalker.com</span>
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
                        <a class="mdl-navigation__link" href="FormulirPendaftaran.php">
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
            <div class="mdl-card mdl-shadow--2dp employer-form" action="#">
                <div class="mdl-card__title">
                    <center><h2>Buat Akun Mitra</h2> </center>
                    <div class="mdl-card__subtitle"></div>
                </div>

                <div class="mdl-card__supporting-text">
                    <form action="#" class="form">
                        <div class="form__article">
                            
                        
                        <h5 class="mdl-card__title-text text-color--white">Nama Mitra</h5>
                            <div class="mdl-textfield mdl-js-textfield full-size">
                                <input class="mdl-textfield__input" type="text" id="nama_mitra">
                                <label class="mdl-textfield__label" for="first-name">Nama Mitra</label>
                            </div>
                        <h5 class="mdl-card__title-text text-color--white">Password</h5>
                            <div class="mdl-textfield mdl-js-textfield full-size">
                                <input class="mdl-textfield__input" type="text" id="password_akun_mitra"value=
                                <?php
                                    function password_generate($chars) 
                                    {
                                      $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
                                      return substr(str_shuffle($data), 0, $chars);
                                    }
                                      echo password_generate(7)."\n";
                                ?>
                                >
                                <label class="mdl-textfield__label" for="first-name">Jumlah Kuota</label>
                            </div>

                        <br>    
                            <div align="right">    
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-red">
                                    Create
                                </button> 
                            </div> 
                        </div>
                    </form>
                </div>
            </div>

            <div class="mdl-card mdl-shadow--2dp employer-form" action="#">
                <div class="mdl-card__title">
                    <center><h2>Ketersediaan Akun Mitra</h2> </center>
                    <div class="mdl-card__subtitle"></div>
                </div>

                <div class="mdl-card__supporting-text">
                    <form action="#" class="form">
                        <div class="form__article">
                            
                        
                    <table class="mdl-data-table mdl-data-table--selectable mdl-shadow--2dp projects-table">
                        <thead>
                        <tr>
                            
                            <th style="width: 50%" class="mdl-data-table__cell--non-numeric">MITRA</th>
                            <th style="width: 25%" class="mdl-data-table__cell--non-numeric">KODE</th>
                            <th style="width: 25%" class="mdl-data-table__cell--non-numeric">PASSWORD</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">SMA Negeri 1</td>
                            <td class="mdl-data-table__cell--non-numeric">001</td>
                            <td class="mdl-data-table__cell--non-numeric">pVtnXAl</td>
                                                          
                            </td>
                        </tr>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">SMA Negeri 3</td>
                            <td class="mdl-data-table__cell--non-numeric">002</td>
                            <td class="mdl-data-table__cell--non-numeric">NRu5eFt</td>
                                
                            </td>
                        </tr>
                        <tr class="is-selected">
                            <td class="mdl-data-table__cell--non-numeric">SMK Negeri 8</td>
                            <td class="mdl-data-table__cell--non-numeric">003</td>
                            <td class="mdl-data-table__cell--non-numeric">8sPvzb4</td>
                                                           
                            </td>
                        </tr>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">SMK Negeri 10</td>
                            <td class="mdl-data-table__cell--non-numeric">004</td>
                            <td class="mdl-data-table__cell--non-numeric">IM6bcWi</td>
                            
                            </td>

                        </tr>
                        </tbody>
                    </table>

                        <br>    
                           
                        </div>
                    </form>
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

