<!DOCTYPE html>
<html lang="en" ng-app="app">

    <head>
        <title> My E-sports World </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.theme.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.css">

        <link rel="stylesheet" type="text/css" href="build/vendor.css">
        <link rel="stylesheet" type="text/css" href="build/app.css">
    </head>

    <body>

        <div ng-include="'app/js/modules/navbar/navbar.html'"></div>
        <div class="content">
            <ui-view></ui-view>
        </div>
        <div ng-include="'app/js/modules/footer/footer.html'"></div>

        <script src="build/vendor.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.js"></script>

        <script src="build/app.js"></script>
    </body>

</html>