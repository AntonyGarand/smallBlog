<?php
/**
 * functions.inc.php
 * Common functions
 * Programmed by Antony Garand
 * 03/10/15
 */
?>
<?php 

/**
 * dirToArray
 * Returns a recursive array of the recursive directories
 * 
 * $dir:
 *      Folder to scan, starting at one folder up
 *      Ignores ., .. and "media"
 *      //TODO: Ignore an array argument of words
 *
 * @return:
 *      Array containing the recursive folder scan
 *      Ex:
 *      [Category] => [Content] =>
 *                    [Content 2] =>
 *      [Category 2] =>
 *
 */
function dirToArray($dir) { 
    
    /* Splitting the directory */  
    $dirPath = explode(DIRECTORY_SEPARATOR, dirname(__FILE__));

    /* Moving to parent, adding selected directory */  
    $dir = implode(DIRECTORY_SEPARATOR, array_pop($dirPath)) . "$dir";

    /* Grabbing the values */ 
    $result = array(); 
    $cdir = scandir($dir); 
    foreach ($cdir as $key => $value) 
    { 
        /* Ignore current dir, previous dir and media folder */
        if (!in_array($value,array(".","..","media"))) 
        { 
            if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) 
            { 
                $result[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value); 
            } 
        } 
    } 
    return $result; 
} 

/**
 * makeMenu
 * Creates a ul li list with the specified array
 *
 * $items:
 *      Array to convert as menu
 * 
 * $level = 0:
 *      Indentation level (4 tabs per level) to write
 * 
 * $parent = "":
 *      When generating the href, will use parent appended with the current key name. 
 * 
 * $first = false:
 *      Will print a class on the first ul generated only. 
 *
 */
function makeMenu($items, $level = 0, $parent = "", $first = false) {
    /* Returning if empty */
    if(empty($items)){
        return;
    }
    $ret = "";
    $firstUl = $first ? 'class="main-navigation__list  js-main-navigation__list"':'';
    $indent = str_repeat(" ", $level * 4);
    $ret .= sprintf("%s<ul $firstUl>\n", $indent);
    $indent = str_repeat(" ", ++$level * 4);
    foreach ($items as $item => $subitems) {
        $hasChild = !empty($subitems) ? "has_children" : "";
        if (!is_numeric($item)) {
            
            $ret .= sprintf("%s<li class=\"$hasChild\"><a href='$parent/$item'>%s</a>", $indent, $item);
        }
        if (is_array($subitems)) {
            $ret .= "\n";
            $ret .= MakeMenu($subitems, $level + 1, $parent."/".$item);
            $ret .= $indent;
        } else if (strcmp($item, $subitems)){
            $ret .= sprintf("%s<li class=\"$hasChild\"><a href='$parent/$subitems'>%s</a>", $indent, $subitems);
        }
        $ret .= sprintf("</li>\n", $indent);
    }
    $indent = str_repeat(" ", --$level * 4);
    $ret .= sprintf("%s</ul>\n", $indent);
    return($ret);
}

?> 
