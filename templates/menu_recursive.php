<?php
function renderMenu($menu = [])
{
    ob_start();
	 print '<ul>';
    foreach ($menu as $key => $item) {
        if (!is_array($item[0])) {
            print "<li><a href=\"{$item[HREF]}\">{$item[NAME]}</a></li>";
        }
        else{
            print renderMenu($item);
        }
    }
    print '</ul>';
    return ob_get_clean();
}
print renderMenu($menu);