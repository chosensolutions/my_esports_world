<!doctype html>
<html>

    <head>
        <title> My Esports World </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="mew is awesome">
        <meta name="author" content="yichen">
        <link rel="shortcut icon" href="app/images/favicon.ico">
        <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="app/css/styles.css" rel="stylesheet" type="text/css"/>
        <link href="app/css/animations.css" rel="stylesheet" type="text/css"/>
    </head>

    <body ng-app="MewApp">

        <div class="container">

            <header>
                <nav class="navbar navbar-default">
                    <ul class="nav navbar-nav">
                        <li><a href="#/customers">Customers</a></li>
                        <li><a href="#/orders">Orders</a></li>
                    </ul>
                </nav>
            </header>

            <div ng-view class="slide-animation"></div>

        </div>

        <!-- Bower Dependencies-->
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/angular/angular.min.js"></script>
        <script src="bower_components/angular-route/angular-route.min.js"></script>
        <script src="bower_components/angular-animate/angular-animate.min.js"></script>

        <!-- App -->
        <script src="app/app.js"></script>
        <script src="app/services/customersFactory.js"></script>
        <script src="app/services/customersService.js"></script>
        <script src="app/services/values.js"></script>
        <script src="app/controllers/customersController.js"></script>
        <script src="app/controllers/ordersController.js"></script>
        <script src="app/controllers/allOrdersController.js"></script>
    </body>
</html>
