<?php

session_start();
if(!empty($_SESSION["username_akun"])){
    header("location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
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

<div class="mdl-layout mdl-js-layout color--gray is-small-screen login">
    <main class="mdl-layout__content">
        <div class="mdl-card mdl-card__login mdl-shadow--2dp">
            <div class="mdl-card__supporting-text color--dark-gray">
                <div class="mdl-grid">
                    <form action="login-process.php" method="POST">
                        <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                            <span class="mdl-card__title-text text-color--smooth-gray">
                                <center> <h3>SIPPL</h3> </center>
                            </span>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                            <span class="login-name text-color--white">Sign in</span>
                            <span class="login-secondary-text text-color--smoke">Enter fields to sign in to SIPPL</span>
                        </div>

                        <!-- <select name="level-select">
                            <option value="1" class="mdl-menu__item">Akademik Program Studi</option>
                            <option value="2" class="mdl-menu__item">Dosen</option>
                            <option value="3" class="mdl-menu__item">Ketua Program Studi</option>
                            <option value="4" class="mdl-menu__item">Ketua Jurusan</option>
                            <option value="5" class="mdl-menu__item">Mahasiswa</option>
                            <option value="9" class="mdl-menu__item">Mitra</option>
                        </select> -->
                        <!-- <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select full-size">
                            <input class="mdl-textfield__input" type="text" id="Hak_akses" readonly tabIndex="-1"/>

                                        <label class="mdl-textfield__label" for="Hak_akses">Pilih Hak Akses</label>

                                        <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu dark_dropdown" for="Hak_akses">
                                            <li class="mdl-menu__item">Mahasiswa</li>
                                            <li class="mdl-menu__item">Akademik Program Studi</li>
                                            <li class="mdl-menu__item">Ketua Program Studi</li>
                                            <li class="mdl-menu__item">Ketua Jurusan</li>
                                            <li class="mdl-menu__item">Mitra</li>
                                        </ul>    


                            <label for="location">
                                <i class="mdl-icon-toggle__label material-icons">arrow_drop_down</i>
                            </label>
                        </div> -->

                        <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                <input class="mdl-textfield__input" type="text" id="e-mail" name="input-username">
                                <label class="mdl-textfield__label" for="e-mail">Username</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                <input class="mdl-textfield__input" type="password" id="password" name="input-password">
                                <label class="mdl-textfield__label" for="password">Password</label>
                            </div>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone submit-cell">
                            <div class="mdl-layout-spacer"></div>
                                <input type="submit" value="SIGN IN" class="mdl-button mdl-js-button mdl-button--raised color--light-blue">
                            </a>
                        </div>
                    </form>
                </div>
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