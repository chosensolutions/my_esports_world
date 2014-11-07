<!doctype html>
<html lang="en" ng-app="app">

    <head>
        <meta charset="UTF-8">
        <title> AngularJS AuthenticationService Example </title>
        <link href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/yeti/bootstrap.min.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/foundation.min.css">
        <link rel="stylesheet" href="/css/style.css">
    </head>

    <body>

        <div class="row">
            <h1>End to End with Angular JS</h1>
            <div class="row">
                <div class="large-6 large-offset-3">
                    <div id="flash" class="alert-box alert" ng-show="flash">
                        {{ flash }}
                    </div>
                </div>
            </div>
            <div id="view" ng-view></div>
        </div>

        <script src="/js/angular.js"></script>
        <script src="/js/angular-sanitize.js"></script>
        <script src="/js/underscore.js"></script>
        <script src="/app/app.js"></script>
        <script src="/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script> angular.module("app").constant("CSRF_TOKEN", '<?php echo csrf_token(); ?>'); </script>

    </body>
</html>
