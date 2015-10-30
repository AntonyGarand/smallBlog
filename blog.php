<?php require_once("./includes/preHtml.inc.php"); /* Head */?>
<?php require_once("./includes/header.inc.php"); /* Header */?>
<?php require_once("./includes/parsedown/parsedown.php"); /* Markdown parser */?>

                <main id="main" role="main" class="page-main-content clearfix">
                <?php 
                    if(!empty($_GET['post'])){
                        $md = new Parsedown();

                        $path = "./posts/".$_GET['post']."/text.md";
                        echo($md->text(file_get_contents($path)));
                    }

                ?>
                </main> <!-- end of .page-main-content -->


				<?php require("includes/sidebar.inc.php"); /* Sidebar */?>
<?php require_once("./includes/footer.inc.php"); /* Footer */?>

