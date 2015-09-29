<?php
/**
 * header.inc.php
 * Static header tags
 * Programmed by Antony Garand
 * 28/09/15
 */
?>
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
                    <ul class="main-navigation__list  js-main-navigation__list">
                        <li class="has_children">
                            <a href="#1">Menu item 1</a>
                            <ul>
                                <li>
                                    <a href="#11">Menu item 1.1 with a very long title</a>
                                </li>
                                <li class="has_children">
                                    <a href="#12">Menu item 1.2</a>
                                    <ul>
                                        <li><a href="#121">Menu item 1.2.1</a></li>
                                        <li><a href="#122">Menu item 1.2.2</a></li>
                                        <li><a href="#123">Menu item 1.2.3</a></li>
                                        <li><a href="#124">Menu item 1.2.4</a></li>
                                        <li><a href="#125">Menu item 1.2.5</a></li>
                                    </ul>
                                </li>
                                <li class="has_children">
                                    <a href="#13">Menu item 1.3</a>
                                    <ul>
                                        <li><a href="#131">Menu item 1.3.1</a></li>
                                        <li><a href="#132">Menu item 1.3.2</a></li>
                                        <li><a href="#133">Menu item 1.3.3</a></li>
                                        <li><a href="#134">Menu item 1.3.4</a></li>
                                        <li><a href="#135">Menu item 1.3.5</a></li>
                                    </ul>
                                </li>
                                <li class="has_children">
                                    <a href="#14">Menu item 1.4</a>
                                    <ul>
                                        <li><a href="#141">Menu item 1.4.1</a></li>
                                        <li><a href="#142">Menu item 1.4.2</a></li>
                                        <li><a href="#143">Menu item 1.4.3</a></li>
                                        <li><a href="#144">Menu item 1.4.4</a></li>
                                        <li><a href="#145">Menu item 1.4.5</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#2">Menu item 2</a>
                        </li>
                        <li class="parent  has_children">
                            <a href="#3">Menu item 3</a>
                            <ul>
                                <li class="has_children">
                                    <a href="#31">Menu item 3.1</a>
                                    <ul>
                                        <li><a href="#311">Menu item 3.1.1</a></li>
                                        <li><a href="#312">Menu item 3.1.2</a></li>
                                        <li><a href="#313">Menu item 3.1.3</a></li>
                                        <li><a href="#314">Menu item 3.1.4</a></li>
                                    </ul>
                                </li>
                                <li class="parent has_children">
                                    <a href="#32">Menu item 3.2</a>
                                    <ul>
                                        <li class="current"><a href="#321">Current active menu item 3.2.1</a></li>
                                        <li><a href="#322">Menu item 3.2.2</a></li>
                                        <li><a href="#323">Menu item 3.2.3</a></li>
                                        <li><a href="#324">Menu item 3.2.4</a></li>
                                        <li><a href="#325">Menu item 3.2.5</a></li>
                                    </ul>
                                </li>
                                <li class="has_children">
                                    <a href="#33">Menu item 3.3</a>
                                    <ul>
                                        <li><a href="#331">Menu item 3.3.1</a></li>
                                        <li><a href="#332">Menu item 3.3.2</a></li>
                                        <li><a href="#333">Menu item 3.3.3</a></li>
                                    </ul>
                                </li>
                                <li><a href="#34">Menu item 3.4</a></li>
                                <li class="has_children">
                                    <a href="#35">Menu item 3.5</a>
                                    <ul>
                                        <li><a href="#351">Menu item 3.5.1</a></li>
                                        <li><a href="#352">Menu item 3.5.2</a></li>
                                        <li><a href="#353">Menu item 3.5.3</a></li>
                                        <li><a href="#354">Menu item 3.5.4</a></li>
                                        <li><a href="#355">Menu item 3.5.5</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#4">Menu item 4</a>
                        </li>
                        <li>
                            <a href="#5">Menu item 5</a>
                        </li>
                        <li class="has_children">
                            <a href="#6">Menu item 6</a>
                            <ul>
                                <li class="has_children">
                                    <a href="#61">Menu item 6.1</a>
                                    <ul>
                                        <li><a href="#611">Menu item 6.1.1</a></li>
                                        <li><a href="#612">Menu item 6.1.2</a></li>
                                        <li><a href="#613">Menu item 6.1.3</a></li>
                                        <li><a href="#614">Menu item 6.1.4</a></li>
                                    </ul>
                                </li>
                                <li class="has_children">
                                    <a href="#62">Menu item 6.2</a>
                                    <ul>
                                        <li><a href="#621">Menu item 6.2.1</a></li>
                                        <li><a href="#622">Menu item 6.2.2</a></li>
                                        <li><a href="#623">Menu item 6.2.3</a></li>
                                        <li><a href="#624">Menu item 6.2.4</a></li>
                                        <li><a href="#625">Menu item 6.2.5</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul> <!-- end of .main-navigation__list -->
                </nav> <!-- end of .main-navigation__box -->
            </div> <!-- end of .wrapper -->
        </div> <!-- end of .page-main-navigation -->





        <div class="main-container clearfix">
            <div class="wrapper">
