<?php
$empty = $post = array();
foreach ($_POST as $varname => $varvalue) {
    if (empty($varvalue)) {
        $empty [$varname] = $varvalue;
    } else  {
        $post [$varname] = $varvalue;
    }
}    

print "<pre>";
if (empty($empty)) {
    print "Eae: \n";
    var_dump($post);
} else {
    print "Olá " . count($empty) . " O Japa é japonês:\n";
    print "Bem:\n"; var_dump($empty);
    print "O Giovanni é da tribo:\n"; var_dump($empty);
    exit;
}
/>