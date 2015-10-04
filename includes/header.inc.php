<?php
/**
 * header.inc.php
 * Static header tags
 * Programmed by Antony Garand
 * 28/09/15
 */
?>
<?php require_once("debug.php"); /* Php debugging variables */ ?>
<?php require_once("functions.inc.php"); /* Common functions */ ?>
<body>

        <!--[if lte IE 7]>
            <div class="ie-warning__shader"></div>
            <iframe src="includes/ie-warnings/old-ie-warning-en.html" class="ie-warning__message" marginheight="0" marginwidth="0" frameborder="0"></iframe>
        <![endif]-->
        <!--[if IE 8 ]>
            <noscript>
                <div class="ie-warning__shader"></div>
                <iframe src="includes/ie-warnings/ie-js-warning-en.html" class="ie-warning__message" marginheight="0" marginwidth="0" frameborder="0"></iframe>
            </noscript>
        <![endif]-->

        <ul class="skiplinks">
            <li><a href="#main-navigation" class="skiplinks__link">Jump to navigation (press enter)</a></li>
            <li><a href="#main" class="skiplinks__link">Jump to main content (press enter)</a></li>
        </ul> <!-- end of #skiplinks -->


        <div class="page-header  clearfix">
            <div class="wrapper">
                <header role="banner" class="page-header__box clearfix">
                    <div class="site-title"><a href="https://github.com/MichaelvanLaar/Website-Template-Starting-Point/">Website Template Starting Point&nbsp;3.3.3</a></div>
                </header> <!-- end of .page-header__box -->
            </div> <!-- end of .wrapper -->
        </div> <!-- end of .page-header -->


        <div class="[ main-navigation  js-main-navigation ]  clearfix">
            <div class="wrapper">
                <a href="#"><img src="media/common/wtsp-logo.png" width="50" height="50" alt="WTSP" class="main-navigation__logo"></a>
                <nav id="main-navigation" class="[ main-navigation__box  js-main-navigation__box ]  clearfix">
                    <div class="main-navigation__toggle  js-main-navigation__toggle">Navigation</div>
                    <!-- PLEASE NOTE: Classes and styling of the main navigation don’t follow
                         BEM-like naming conventions – with intent to be easily applicable to
                         almost any HTML code produced by a CMS. -->
                    <?php 
                        $posts = dirToArray("posts");
                        echo makeMenu($posts, 4, "blog" , true);  
                    ?>
                </nav> <!-- end of .main-navigation__box -->
            </div> <!-- end of .wrapper -->
        </div> <!-- end of .page-main-navigation -->





        <div class="main-container clearfix">
            <div class="wrapper">
