<?php
/**
 * preHtml.inc.php
 * Static Html tags
 * Programmed by Antony Garand
 * 28/09/15
 */
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <title>Title</title>
        <meta name="description" content="[Insert page description]">

        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!--[if IEMobile]><meta http-equiv="cleartype" content="on"><![endif]-->

        <link rel="icon" href="favicon.ico" sizes="16x16 24x24 32x32 48x48 64x64" type="media/common/vnd.microsoft.icon">
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="media/common/favicon-152.png">
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="media/common/favicon-120.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="media/common/favicon-72.png">
        <link rel="apple-touch-icon-precomposed" href="media/common/favicon-57.png">
        <meta name="msapplication-TileColor" content="#001e50">
        <meta name="msapplication-TileImage" content="media/common/favicon-144.png">

        <!-- Include respimage only if the browser doesn’t support responsive images -->
        <script>
            function loadJS(u){
                var r = document.getElementsByTagName('script')[ 0 ], s = document.createElement('script');
                s.src = u;
                r.parentNode.insertBefore( s, r );
            }
            if(!window.HTMLPictureElement){
                document.createElement('picture');
                loadJS('includes/js/vendor/respimage.min.js');
            }
        </script>

        <link rel="stylesheet" href="includes/css/normalize.css">
        <link rel="stylesheet" href="includes/css/main.css">

        <script src="includes/js/vendor/lazysizes-plus-plugins.min.js" async=""></script>
        <script src="includes/js/vendor/modernizr-2.8.3.custom.min.js"></script>
        <script>Modernizr.load({ test: Modernizr.mq('(min-width: 0px)'), nope: 'includes/js/vendor/respond.min.js' });</script>

    </head>