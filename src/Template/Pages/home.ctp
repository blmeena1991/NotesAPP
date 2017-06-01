<!doctype html>
<html ng-app="noteApp">
<head>
    <meta charset="utf-8">
    <title>CAPILLARY NOTE APP</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- build:css({.tmp/serve,src}) styles/vendor.css -->
    <!-- bower:css -->
    <link rel="stylesheet" href="../note_app/bower_components/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../note_app/bower_components/angular-toastr/dist/angular-toastr.min.css" />
    <link rel="stylesheet" href="../note_app/bower_components/animate.css/animate.css" />

    <!-- run `gulp inject` to automatically populate bower styles dependencies -->
    <!-- endbower -->
    <!-- endbuild -->

    <!-- build:css({.tmp/serve,src}) styles/app.css -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/note_app/src/app/index.css">
    <!-- css files will be automatically insert here -->
    <!-- endinject -->
    <!-- endbuild -->
</head>
<body>
<!--[if lt IE 10]>
<![endif]-->
<div class="clearfix"></div>
<div class="wsr_body clearfix">
    <header>
        <div ng-include src="'note_app/src/app/components/navbar/header.html'"></div>
    </header>
    <br>
    <div class="wsr_content" ui-view="content"></div>
    <footer>
        <div ng-include src="'note_app/src/app/components/navbar/footer.html'"></div>
    </footer>
</div>
<div class="clearfix"></div>
<div ui-view></div>

<!-- build:js(src) scripts/vendor.js -->
<!-- bower:js -->
<script src="../note_app/bower_components/jquery/dist/jquery.js"></script>
<script src="../note_app/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../note_app/bower_components/angular/angular.js"></script>
<script src="../note_app/bower_components/moment/moment.js"></script>
<script src="../note_app/bower_components/angular-animate/angular-animate.js"></script>
<script src="../note_app/bower_components/angular-cookies/angular-cookies.js"></script>
<script src="../note_app/bower_components/angular-sanitize/angular-sanitize.js"></script>
<script src="../note_app/bower_components/angular-messages/angular-messages.js"></script>
<script src="../note_app/bower_components/angular-aria/angular-aria.js"></script>
<script src="../note_app/bower_components/angular-ui-router/release/angular-ui-router.js"></script>
<script src="../note_app/bower_components/angular-bootstrap/ui-bootstrap-tpls.js"></script>
<script src="../note_app/bower_components/angular-toastr/dist/angular-toastr.tpls.js"></script>

<!-- run `gulp inject` to automatically populate bower script dependencies -->
<!-- endbower -->
<!-- endbuild -->

<!-- build:js({.tmp/serve,.tmp/partials,src}) scripts/app.js -->
<!-- inject:js -->
<script src="/note_app/src/app/index.module.js"></script>

<script src="/note_app/src/app/components/webDevTec/webDevTec.service.js"></script>

<script src="/note_app/src/app/components/navbar/navbar.directive.js"></script>

<script src="/note_app/src/app/components/githubContributor/githubContributor.service.js"></script>

<script src="/note_app/src/app/factory/network.factory.js"></script>

<script src="/note_app/src/app/main/main.controller.js"></script>

<script src="/note_app/src/app/index.run.js"></script>

<script src="/note_app/src/app/index.route.js"></script>

<script src="/note_app/src/app/index.constants.js"></script>

<script src="/note_app/src/app/index.config.js"></script>
<!-- js files will be automatically insert here -->
<!-- endinject -->

<script>
    jQuery.fn.extend({
        live: function (event, callback) {
            if (this.selector) {
                jQuery(document).on(event, this.selector, callback);
            }
        }
    });
</script>
<script>
    $('link[rel=stylesheet][href="/css/bootstrap.css"]').remove();
</script>
<!-- inject:partials -->
<!-- angular templates will be automatically converted in js and inserted here -->
<!-- endinject -->
<!-- endbuild -->

</body>
</html>
