<?php require_once("./includes/preHtml.inc.php"); /* Head */?>
<?php require_once("./includes/header.inc.php"); /* Header */?>

                <main id="main" role="main" class="page-main-content clearfix">
                    <h1>(H1) Lorem ipsum dolor sit amet</h1>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis <a href="https://www.google.com/">nostrud exerci</a> tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                    <p>
                        <picture>
                            <!--[if IE 9]><video style="display: none;"><![endif]-->
                            <source media="(max-width: 345px)" data-srcset="media/common/325x217.png 1x, media/common/650x434.png 2x">
                            <source media="(max-width: 508px)" data-srcset="media/common/488x325.png 1x, media/common/975x650.png 2x">
                            <source media="(max-width: 1237px)" data-srcset="media/common/650x434.png 1x, media/common/1300x868.png 2x">
                            <source media="(min-width: 1238px)" data-srcset="media/common/975x650.png 1x, media/common/1950x1300.png 2x">
                            <!--[if IE 9]></video><![endif]-->
                            <img src="media/common/325x217.png" data-srcset="media/common/650x434.png 2x" width="650" height="434" alt="Test image" class="fullwidth lazyload">
                        </picture>
                    </p>
                    <h2>(H2) Lorem ipsum dolor sit amet</h2>
                    <blockquote cite="">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                    </blockquote>
                    <ul>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>consectetuer adipiscing elit</li>
                        <li>sed diam nonummy</li>
                        <li>nibh euismod tincidunt ut laoreet dolore</li>
                    </ul>
                    <h3>(H3) Lorem ipsum dolor sit amet</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                    <ol>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>consectetuer adipiscing elit</li>
                        <li>sed diam nonummy</li>
                    </ol>
                </main> <!-- end of .page-main-content -->


				<?php require("includes/sidebar.inc.php"); /* Sidebar */?>
<?php require_once("./includes/footer.inc.php"); /* Footer */?>

