<!DOCTYPE html>
<html lang="en" ng-app="app">

    <head>
        <title> My E-sports World </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.theme.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.css">

        <link rel="stylesheet" type="text/css" href="build/vendor.css">
        <link rel="stylesheet" type="text/css" href="build/app.css">
    </head>

    <body>

        <app-navbar></app-navbar>
        <div class="content">
            <ui-view></ui-view>
        </div>
        <div ng-include="'app/js/modules/footer/footer.html'"></div>

        <script src="build/vendor.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.js"></script>

        <script src="build/app.js"></script>

        <script type='text/javascript' id="__bs_script__">//<![CDATA[
            document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.2.11.1.js'><\/script>".replace("HOST", location.hostname));
            //]]></script>
    </body>

</html>