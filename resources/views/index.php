<!DOCTYPE html>
<html lang="en" ng-app="app">

    <head>
        <title> My E-sports World </title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Dependencies -->
        <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.css">

        <!-- Main App -->
        <link rel="stylesheet" type="text/css" href="build/app.css">
    </head>

    <body>
        <div ng-include="'app/js/modules/navbar/navbar.html'"></div>

        <div class="content">
            <ui-view></ui-view>
        </div>

        <div ng-include="'app/js/modules/footer/footer.html'"></div>

        <!-- Dependencies -->
        <script src="bower_components/angular/angular.js"></script>
        <script src="bower_components/angular-ui-router/release/angular-ui-router.js"></script>
        <script src="bower_components/jquery/dist/jquery.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>

        <!-- Main App -->
        <script src="build/app.js"></script>
    </body>

</html>