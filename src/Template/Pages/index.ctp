<!doctype html>
<html ng-app="noteApp">
<head>
    <meta charset="utf-8">
    <title>CAPILLARY NOTE APP</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!-- inject:css -->
    <link rel=stylesheet href=/note_app/dist/styles/vendor-c7124ccb33.css>
    <link rel=stylesheet href=/note_app/dist/styles/app-d3b16ab6af.css>
    <!-- endinject -->
    <!-- endbuild -->
</head>
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

<script  type="text/javascript" src=/note_app/dist/scripts/vendor-00ed755258.js ></script>
<script  type="text/javascript" src=/note_app/dist/scripts/app-e4c7f7a98f.js ></script>
<!-- Include Date Range Picker -->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>->
<!-- endbower -->
<!-- endbuild -->

<!-- build:js({.tmp/serve,.tmp/partials,src}) scripts/app.js -->
<!-- inject:js -->


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
